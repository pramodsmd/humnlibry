@extends('backend.admin-master')

@section('style')
    <x-media.css/>
    <link rel="stylesheet" href="{{asset('assets/backend/css/summernote-bs4.css')}}">
@endsection

@section('site-title')
    {{__('Payment Gateway Settings')}}
@endsection

@section('content')
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-12 mt-5">
                @include('backend.partials.message')
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{__("Payment Gateway Settings")}}</h4>
                        @include('backend/partials/error')
                        <form action="{{route('admin.general.payment.settings')}}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="site_global_currency">{{__('Site Global Currency')}}</label>
                                        <select name="site_global_currency" class="form-control" id="site_global_currency">
                                            @foreach( Xgenious\Paymentgateway\Facades\XgPaymentGateway::script_currency_list() as $cur => $symbol)
                                                <option value="{{$cur}}" @if(get_static_option('site_global_currency') == $cur) selected @endif >{{$cur.' ( '.$symbol.' )'}} </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="site_global_currency">{{__('Enable/Disable Decimal Point')}}</label>
                                        <select name="enable_disable_decimal_point" class="form-control" id="enable_disable_decimal_point">
                                            <option value="yes" {{get_static_option('enable_disable_decimal_point') == 'yes' ? 'selected' : ''}}>{{ __('Yes') }}</option>
                                            <option value="no" {{get_static_option('enable_disable_decimal_point') == 'no' ? 'selected' : ''}}>{{ __('No') }}</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="site_global_currency">{{__('Add/Remove Space Between Currency Symbol and Amount')}}</label>
                                        <select name="add_remove_sapce_between_amount_and_symbol" class="form-control">
                                            <option value="yes" {{get_static_option('add_remove_sapce_between_amount_and_symbol') == 'yes' ? 'selected' : ''}}>{{ __('Yes') }}</option>
                                            <option value="no" {{get_static_option('add_remove_sapce_between_amount_and_symbol') == 'no' ? 'selected' : ''}}>{{ __('No') }}</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="add_remove_comman_form_amount">{{__('Add/Remove comma (,) from amount')}}</label>
                                        <select name="add_remove_comman_form_amount" class="form-control">
                                            <option value="yes" {{get_static_option('add_remove_comman_form_amount') == 'yes' ? 'selected' : ''}}>{{ __('Yes') }}</option>
                                            <option value="no" {{get_static_option('add_remove_comman_form_amount') == 'no' ? 'selected' : ''}}>{{ __('No') }}</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="site_currency_symbol_position">{{__('Currency Symbol Position')}}</label>
                                        @php $all_currency_position = ['left','right']; @endphp
                                        <select name="site_currency_symbol_position" class="form-control"
                                                id="site_currency_symbol_position">
                                            @foreach($all_currency_position as $cur)
                                                <option value="{{$cur}}"
                                                        @if(get_static_option('site_currency_symbol_position') == $cur) selected @endif>{{ucwords($cur)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="site_default_payment_gateway">{{__('Default Payment Gateway')}}</label>
                                        <select name="site_default_payment_gateway" class="form-control" >
                                            @php
                                                $all_gateways = \App\Helpers\PaymentGatewayRenderHelper::listOfPaymentGateways();
                                            @endphp
                                            @foreach($all_gateways as $gateway)
                                                @if(!empty(get_static_option($gateway.'_gateway')))
                                                    <option value="{{$gateway}}" @if(get_static_option('site_default_payment_gateway') == $gateway) selected @endif>
                                                              @if($gateway=='stripe')
                                                                 {{ucwords(str_replace('_',' ','Debit/Credit Cards' ))}}
                                                             @else
                                                                 {{ucwords(str_replace('_',' ',$gateway))}}
                                                             
                                                             @endif
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    @php $global_currency = get_static_option('site_global_currency');@endphp

                                    @if($global_currency != 'USD')
                                        <div class="form-group">
                                            <label for="site_{{strtolower($global_currency)}}_to_usd_exchange_rate">{{__($global_currency.' to USD Exchange Rate')}}</label>
                                            <input type="text" class="form-control"
                                                   name="site_{{strtolower($global_currency)}}_to_usd_exchange_rate"
                                                   value="{{get_static_option('site_'.$global_currency.'_to_usd_exchange_rate')}}">
                                            <span class="info-text">{{sprintf(__('enter %s to USD exchange rate. eg: 1 %s = ? USD'),$global_currency,$global_currency) }}</span>
                                        </div>
                                    @endif

                                    @if($global_currency != 'IDR')
                                        <div class="form-group">
                                            <label for="site_{{strtolower($global_currency)}}_to_idr_exchange_rate">{{__($global_currency.' to IDR Exchange Rate')}}</label>
                                            <input type="text" class="form-control"
                                                   name="site_{{strtolower($global_currency)}}_to_idr_exchange_rate"
                                                   value="{{get_static_option('site_'.$global_currency.'_to_idr_exchange_rate')}}">
                                            <span class="info-text">{{sprintf(__('enter %s to USD exchange rate. eg: 1 %s = ? IDR'),$global_currency,$global_currency) }}</span>
                                        </div>
                                    @endif

                                    @if($global_currency != 'INR' && !empty(get_static_option('paytm_gateway') || !empty(get_static_option('razorpay_gateway'))))
                                        <div class="form-group">
                                            <label for="site_{{strtolower($global_currency)}}_to_inr_exchange_rate">{{__($global_currency.' to INR Exchange Rate')}}</label>
                                            <input type="text" class="form-control"
                                                   name="site_{{strtolower($global_currency)}}_to_inr_exchange_rate"
                                                   value="{{get_static_option('site_'.$global_currency.'_to_inr_exchange_rate')}}">
                                            <span class="info-text">{{__('enter '.$global_currency.' to INR exchange rate. eg: 1'.$global_currency.' = ? INR')}}</span>
                                        </div>
                                    @endif

                                    @if($global_currency != 'NGN' && !empty(get_static_option('paystack_gateway') ))
                                        <div class="form-group">
                                            <label for="site_{{strtolower($global_currency)}}_to_ngn_exchange_rate">{{__($global_currency.' to NGN Exchange Rate')}}</label>
                                            <input type="text" class="form-control"
                                                   name="site_{{strtolower($global_currency)}}_to_ngn_exchange_rate"
                                                   value="{{get_static_option('site_'.$global_currency.'_to_ngn_exchange_rate')}}">
                                            <span class="info-text">{{__('enter '.$global_currency.' to NGN exchange rate. eg: 1'.$global_currency.' = ? NGN')}}</span>
                                        </div>
                                    @endif

                                    @if($global_currency != 'ZAR')
                                        <div class="form-group">
                                            <label for="site_{{strtolower($global_currency)}}_to_zar_exchange_rate">{{__($global_currency.' to ZAR Exchange Rate')}}</label>
                                            <input type="text" class="form-control"
                                                   name="site_{{strtolower($global_currency)}}_to_zar_exchange_rate"
                                                   value="{{get_static_option('site_'.$global_currency.'_to_zar_exchange_rate')}}">
                                            <span class="info-text">{{sprintf(__('enter %s to USD exchange rate. eg: 1 %s = ? ZAR'),$global_currency,$global_currency) }}</span>
                                        </div>
                                    @endif

                                    @if($global_currency != 'BRL')
                                        <div class="form-group">
                                            <label for="site_{{strtolower($global_currency)}}_to_brl_exchange_rate">{{__($global_currency.' to BRL Exchange Rate')}}</label>
                                            <input type="text" class="form-control"
                                                   name="site_{{strtolower($global_currency)}}_to_brl_exchange_rate"
                                                   value="{{get_static_option('site_'.$global_currency.'_to_brl_exchange_rate')}}">
                                            <span class="info-text">{{__('enter '.$global_currency.' to BRL exchange rate. eg: 1'.$global_currency.' = ? BRL')}}</span>
                                        </div>
                                    @endif
                                    @if($global_currency != 'MYR')
                                        <div class="form-group">
                                            <label for="site_{{strtolower($global_currency)}}_to_myr_exchange_rate">{{__($global_currency.' to MYR Exchange Rate')}}</label>
                                            <input type="text" class="form-control"
                                                   name="site_{{strtolower($global_currency)}}_to_myr_exchange_rate"
                                                   value="{{get_static_option('site_'.$global_currency.'_to_myr_exchange_rate')}}">
                                            <span class="info-text">{{__('enter '.$global_currency.' to MYR exchange rate. eg: 1'.$global_currency.' = ? MYR')}}</span>
                                        </div>
                                    @endif

                                    <div class="accordion-wrapper">
                                        <div id="accordion-payment">

                                            <div class="card">
                                                <div class="card-header" id="stripe_settings">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#stripe_settings_content" aria-expanded="false" >
                                                            <span class="page-title"> {{__('Debit/Credit Cards Settings')}}</span>
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="stripe_settings_content" class="collapse"  data-parent="#accordion-payment">
                                                    <div class="card-body">
                                                        <div class="payment-notice alert alert-warning">
                                                            <p>{{__("Debit/Credit Cards supported currency ")}} {{implode(',',\Xgenious\Paymentgateway\Facades\XgPaymentGateway::stripe()->supported_currency_list())}}</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="stripe_gateway"><strong>{{__('Enable/Disable  Debit/Credit Cards')}}</strong></label>
                                                            <label class="switch">
                                                                <input type="checkbox" name="stripe_gateway"  @if(!empty(get_static_option('stripe_gateway'))) checked @endif id="stripe_gateway">
                                                                <span class="slider onff"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="stripe_logo"><strong>{{__('Debit/Credit Cards Logo')}}</strong></label>
                                                            <div class="media-upload-btn-wrapper">
                                                                <div class="img-wrap">
                                                                    @php
                                                                        $stripe_img = get_attachment_image_by_id(get_static_option('stripe_preview_logo'),null,true);
                                                                        $stripe_image_btn_label = __('Upload Image');
                                                                    @endphp
                                                                    @if (!empty($stripe_img))
                                                                        <div class="attachment-preview">
                                                                            <div class="thumbnail">
                                                                                <div class="centered">
                                                                                    <img class="avatar user-thumb" src="{{$stripe_img['img_url']}}" alt="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        @php  $stripe_image_btn_label = __('Change Image'); @endphp
                                                                    @endif
                                                                </div>
                                                                <input type="hidden" id="stripe_preview_logo" name="stripe_preview_logo" value="{{get_static_option('stripe_preview_logo')}}">
                                                                <button type="button" class="btn btn-info media_upload_form_btn" data-btntitle="{{__('Select Image')}}" data-modaltitle="{{__('Upload Image')}}" data-toggle="modal" data-target="#media_upload_modal">
                                                                    {{__($stripe_image_btn_label)}}
                                                                </button>
                                                            </div>
                                                            <small class="form-text text-muted">{{__('allowed image format: jpg,jpeg,png. Recommended image size 160x50')}}</small>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="stripe_public_key">{{__('Debit/Credit Cards Public Key')}}</label>
                                                            <input type="text" name="stripe_public_key" id="stripe_public_key" value="{{get_static_option('stripe_public_key')}}" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="stripe_secret_key">{{__('Debit/Credit Cards Secret')}}</label>
                                                            <input type="text" name="stripe_secret_key" id="stripe_secret_key"  value="{{get_static_option('stripe_secret_key')}}" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- render payment gateway setting using qixermeta from module start --}}
                                            {!! (new \App\Helpers\ModuleMetaData())->renderAllPaymentGatewaySettingsBlade() !!}
                                            {{-- render payment gateway setting using qixermeta from module end --}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">{{__('Update Changes')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-media.markup/>
@endsection
@section('script')
    <x-media.js/>
    <script src="{{asset('assets/backend/js/summernote-bs4.js')}}"></script>
    <script>
        (function($){
            "use strict";
            $(document).ready(function(){
                <x-icon-picker/>
                <x-btn.update/>

                $('.summernote').summernote({
                    height: 150,   //set editable area's height
                    codemirror: { // codemirror options
                        theme: 'monokai'
                    }
                });
            });
        }(jQuery));
    </script>
@endsection
