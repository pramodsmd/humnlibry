<?php

namespace App\Helpers;

use Xgenious\Paymentgateway\Facades\XgPaymentGateway;
use Modules\Wallet\Entities\Wallet;

class PaymentGatewayRenderHelper
{
    public static function listOfPaymentGateways(){
        // $payment_gateway_list = ['paypal','manual_payment','mollie','paytm','stripe','razorpay','flutterwave','paystack','marcadopago','instamojo','cashfree','payfast','midtrans','squareup','cinetpay','paytabs','billplz','zitopay'];

        // $payment_gateway_list = ['paypal','manual_payment','mollie','paytm','stripe','razorpay'];
        $payment_gateway_list = ['stripe'];

        //todo append payment gateway name from modules
        $modules_payment_gateway = (new ModuleMetaData())->getAllPaymentGatewayList();
        return !empty($modules_payment_gateway) ? array_merge($payment_gateway_list,$modules_payment_gateway) : $payment_gateway_list;
    }

    public static function renderCurrentBalanceForm(){
        $output = '<div class="current-balance-wrapper">';
        $output .= '<input type="checkbox" name="selected_payment_gateway" id="current_balance_gateway" class="mr-2 current_balance_selected_gateway">';
        $output .= '<label for="current_balance_gateway">'.__('Deposit From Current Balance').'</label>';
        $output .= '</div>';
        return $output;
    }

    public static function renderWalletForm(){
        
        if(!\Auth::guard('web')->check()) {
            return '';
        }
        $auth_user_id = \Auth::guard('web')->user()->id;
        $wallet_lists = Wallet::where('buyer_id', $auth_user_id)->where('status', 1)->latest()->first();
        if (!empty($wallet_lists)){
            $output = '<div class="wallet-payment-gateway-wrapper">';
            $output .= '<input type="checkbox" name="selected_payment_gateway" id="wallet_selected_payment_gateway"  class="mr-2 wallet_selected_payment_gateway">';
            $output .= '<label for="wallet_selected_payment_gateway">'.__('Booking From Wallet').'</label>';
            $output .= '<span class="wallet_selected_payment_amount">'.float_amount_with_currency_symbol($wallet_lists->balance).'</span>';
            $output .= '</div>';
        }else{
            $output = '';
        }
        return $output;
    }

    public static function renderPaymentGatewayForForm($cash_on_delivery_show = true, $type = null){
        if(get_static_option('dashboard_variant_buyer') == '02'){
            if($type == 'old'){
                return (new self())->styleOnePaymentGatewayForm($cash_on_delivery_show);
            }else{
                return  (new self())->styleTwoPaymentGatewayForm($cash_on_delivery_show);
            }
        }else{
            return (new self())->styleOnePaymentGatewayForm($cash_on_delivery_show);
       }

    }


    private function styleOnePaymentGatewayForm($cash_on_delivery_show)
    {
        $output = '<div class="payment-gateway-wrapper payment_getway_image">';

        $output .= '<input type="hidden" name="selected_payment_gateway" id="order_from_user_wallet" value="' . get_static_option('site_default_payment_gateway') . '">';

        $all_gateway = self::listOfPaymentGateways();
        $output .= '<label for="wallet_selected_payment_gateway">'.__('Debit/Credit Card').'</label><br>';
        $output .= '<ul>';
        $cash_on_delivery = (bool)get_static_option('cash_on_delivery_gateway');
        if ($cash_on_delivery && $cash_on_delivery_show) {
            $output .= '<li data-gateway="cash_on_delivery" ><div class="img-select">';
            $output .= render_image_markup_by_attachment_id(get_static_option('cash_on_delivery_preview_logo'));
            $output .= '</div></li>';
        }
        foreach ($all_gateway as $gateway) {
            if (!empty(get_static_option($gateway . '_gateway'))) :
                $class = (get_static_option('site_default_payment_gateway') == $gateway) ? 'class="selected active"' : '';

                $output .= '<li data-gateway="' . $gateway . '" ' . $class . '><div class="img-select">';
                $output .= render_image_markup_by_attachment_id(get_static_option($gateway . '_preview_logo'));
                $output .= '</div></li>';
            endif;
        }
        $output .= '</ul>';
        $output .= '</div>';
        //extra field data for payment gateway
        $output .= '<div class="payment_gateway_extra_field_information_wrap">';
        if(!empty(get_static_option('manual_payment_gateway'))){
            $output .= '<div class="manual_payment_gateway_extra_field"><div class="form-group"> <div class="label mt-3 mb-2">'.get_static_option('site_manual_payment_name').__('Receipt').'</div> <input type="file" name="manual_payment_image" class="form-control" style="line-height: 1.15"></div><div class="manual_description">'. get_static_option('site_manual_payment_description') .'</div></div>';
        }
        //todo write code for all module extra info markup
        $output .= (new ModuleMetaData())->renderAllPaymentGatewayExtraInforBlade();
        $output .= '</div>';
        return $output;
    }

    public static function styleTwoPaymentGatewayForm($cash_on_delivery_show){
        $output = '<div class="payment-gateway-wrapper payment_getway_image">';
        $output .= '<input type="hidden" name="selected_payment_gateway" id="order_from_user_wallet" value="' . get_static_option('site_default_payment_gateway') . '">';
        $all_gateway = self::listOfPaymentGateways();

        $output .= '<div class="paymentGateway_add custom_radio">';
        $cash_on_delivery = (bool)get_static_option('cash_on_delivery_gateway');
        if ($cash_on_delivery && $cash_on_delivery_show) {
            $output .= '<div  class="paymentGateway_add__item custom_radio__single radius-10"  data-gateway="cash_on_delivery"><label for="cash_on_delivery_gateway" class="paymentGateway_add__item__img">';

            $output .= render_image_markup_by_attachment_id(get_static_option('cash_on_delivery_preview_logo'));
            $output .= '</label>
                            <div class="paymentGateway_add__item__radio"><input class="custom_radio__single__input" type="radio" id="cash_on_delivery_gateway" name="paymentRadio"></div>
                            </div>';
        }

        foreach ($all_gateway as $gateway) {
            if (!empty(get_static_option($gateway . '_gateway'))) :
                $class = (get_static_option('site_default_payment_gateway') == $gateway) ? 'active' : '';
                $checked = (get_static_option('site_default_payment_gateway') == $gateway) ? 'checked' : '';
                // new markup
                $output .= '<div  class="paymentGateway_add__item custom_radio__single radius-10 '.$class.'" data-gateway="' . $gateway . '"><label for="'.$gateway.'" class="paymentGateway_add__item__img">';
                $output .= render_image_markup_by_attachment_id(get_static_option($gateway . '_preview_logo'));
                $output .= '</label>
                            <div class="paymentGateway_add__item__radio"><input class="custom_radio__single__input" type="radio" id="'.$gateway.' " name="paymentRadio" '.$checked.'>
                            </div>
                            </div>';
            endif;
        }
        $output .= '</div>';
        $output .= '</div>';
        //extra field data for payment gateway
        $output .= '<div class="payment_gateway_extra_field_information_wrap">';
        if(!empty(get_static_option('manual_payment_gateway'))){
            $output .= '<div class="manual_payment_gateway_extra_field"><div class="form-group"> <div class="label mt-3 mb-2">'.get_static_option('site_manual_payment_name').__('Receipt').'</div> <input type="file" name="manual_payment_image" class="form-control" style="line-height: 3.15"></div><div class="manual_description">'. get_static_option('site_manual_payment_description') .'</div></div>';
        }
        //todo write code for all module extra info markup
        $output .= (new ModuleMetaData())->renderAllPaymentGatewayExtraInforBlade();
        $output .= '</div>';
        return $output;
    }


}