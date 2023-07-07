<?php $__env->startSection('style'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.media.css','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('media.css'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/summernote-bs4.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Payment Gateway Settings')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-12 mt-5">
                <?php echo $__env->make('backend.partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><?php echo e(__("Payment Gateway Settings")); ?></h4>
                        <?php echo $__env->make('backend/partials/error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <form action="<?php echo e(route('admin.general.payment.settings')); ?>" method="POST"
                              enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="site_global_currency"><?php echo e(__('Site Global Currency')); ?></label>
                                        <select name="site_global_currency" class="form-control" id="site_global_currency">
                                            <?php $__currentLoopData = Xgenious\Paymentgateway\Facades\XgPaymentGateway::script_currency_list(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cur => $symbol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($cur); ?>" <?php if(get_static_option('site_global_currency') == $cur): ?> selected <?php endif; ?> ><?php echo e($cur.' ( '.$symbol.' )'); ?> </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="site_global_currency"><?php echo e(__('Enable/Disable Decimal Point')); ?></label>
                                        <select name="enable_disable_decimal_point" class="form-control" id="enable_disable_decimal_point">
                                            <option value="yes" <?php echo e(get_static_option('enable_disable_decimal_point') == 'yes' ? 'selected' : ''); ?>><?php echo e(__('Yes')); ?></option>
                                            <option value="no" <?php echo e(get_static_option('enable_disable_decimal_point') == 'no' ? 'selected' : ''); ?>><?php echo e(__('No')); ?></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="site_global_currency"><?php echo e(__('Add/Remove Space Between Currency Symbol and Amount')); ?></label>
                                        <select name="add_remove_sapce_between_amount_and_symbol" class="form-control">
                                            <option value="yes" <?php echo e(get_static_option('add_remove_sapce_between_amount_and_symbol') == 'yes' ? 'selected' : ''); ?>><?php echo e(__('Yes')); ?></option>
                                            <option value="no" <?php echo e(get_static_option('add_remove_sapce_between_amount_and_symbol') == 'no' ? 'selected' : ''); ?>><?php echo e(__('No')); ?></option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="add_remove_comman_form_amount"><?php echo e(__('Add/Remove comma (,) from amount')); ?></label>
                                        <select name="add_remove_comman_form_amount" class="form-control">
                                            <option value="yes" <?php echo e(get_static_option('add_remove_comman_form_amount') == 'yes' ? 'selected' : ''); ?>><?php echo e(__('Yes')); ?></option>
                                            <option value="no" <?php echo e(get_static_option('add_remove_comman_form_amount') == 'no' ? 'selected' : ''); ?>><?php echo e(__('No')); ?></option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="site_currency_symbol_position"><?php echo e(__('Currency Symbol Position')); ?></label>
                                        <?php $all_currency_position = ['left','right']; ?>
                                        <select name="site_currency_symbol_position" class="form-control"
                                                id="site_currency_symbol_position">
                                            <?php $__currentLoopData = $all_currency_position; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($cur); ?>"
                                                        <?php if(get_static_option('site_currency_symbol_position') == $cur): ?> selected <?php endif; ?>><?php echo e(ucwords($cur)); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="site_default_payment_gateway"><?php echo e(__('Default Payment Gateway')); ?></label>
                                        <select name="site_default_payment_gateway" class="form-control" >
                                            <?php
                                                $all_gateways = \App\Helpers\PaymentGatewayRenderHelper::listOfPaymentGateways();
                                            ?>
                                            <?php $__currentLoopData = $all_gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if(!empty(get_static_option($gateway.'_gateway'))): ?>
                                                    <option value="<?php echo e($gateway); ?>" <?php if(get_static_option('site_default_payment_gateway') == $gateway): ?> selected <?php endif; ?>>
                                                              <?php if($gateway=='stripe'): ?>
                                                                 <?php echo e(ucwords(str_replace('_',' ','Debit/Credit Cards' ))); ?>

                                                             <?php else: ?>
                                                                 <?php echo e(ucwords(str_replace('_',' ',$gateway))); ?>

                                                             
                                                             <?php endif; ?>
                                                    </option>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <?php $global_currency = get_static_option('site_global_currency');?>

                                    <?php if($global_currency != 'USD'): ?>
                                        <div class="form-group">
                                            <label for="site_<?php echo e(strtolower($global_currency)); ?>_to_usd_exchange_rate"><?php echo e(__($global_currency.' to USD Exchange Rate')); ?></label>
                                            <input type="text" class="form-control"
                                                   name="site_<?php echo e(strtolower($global_currency)); ?>_to_usd_exchange_rate"
                                                   value="<?php echo e(get_static_option('site_'.$global_currency.'_to_usd_exchange_rate')); ?>">
                                            <span class="info-text"><?php echo e(sprintf(__('enter %s to USD exchange rate. eg: 1 %s = ? USD'),$global_currency,$global_currency)); ?></span>
                                        </div>
                                    <?php endif; ?>

                                    <?php if($global_currency != 'IDR'): ?>
                                        <div class="form-group">
                                            <label for="site_<?php echo e(strtolower($global_currency)); ?>_to_idr_exchange_rate"><?php echo e(__($global_currency.' to IDR Exchange Rate')); ?></label>
                                            <input type="text" class="form-control"
                                                   name="site_<?php echo e(strtolower($global_currency)); ?>_to_idr_exchange_rate"
                                                   value="<?php echo e(get_static_option('site_'.$global_currency.'_to_idr_exchange_rate')); ?>">
                                            <span class="info-text"><?php echo e(sprintf(__('enter %s to USD exchange rate. eg: 1 %s = ? IDR'),$global_currency,$global_currency)); ?></span>
                                        </div>
                                    <?php endif; ?>

                                    <?php if($global_currency != 'INR' && !empty(get_static_option('paytm_gateway') || !empty(get_static_option('razorpay_gateway')))): ?>
                                        <div class="form-group">
                                            <label for="site_<?php echo e(strtolower($global_currency)); ?>_to_inr_exchange_rate"><?php echo e(__($global_currency.' to INR Exchange Rate')); ?></label>
                                            <input type="text" class="form-control"
                                                   name="site_<?php echo e(strtolower($global_currency)); ?>_to_inr_exchange_rate"
                                                   value="<?php echo e(get_static_option('site_'.$global_currency.'_to_inr_exchange_rate')); ?>">
                                            <span class="info-text"><?php echo e(__('enter '.$global_currency.' to INR exchange rate. eg: 1'.$global_currency.' = ? INR')); ?></span>
                                        </div>
                                    <?php endif; ?>

                                    <?php if($global_currency != 'NGN' && !empty(get_static_option('paystack_gateway') )): ?>
                                        <div class="form-group">
                                            <label for="site_<?php echo e(strtolower($global_currency)); ?>_to_ngn_exchange_rate"><?php echo e(__($global_currency.' to NGN Exchange Rate')); ?></label>
                                            <input type="text" class="form-control"
                                                   name="site_<?php echo e(strtolower($global_currency)); ?>_to_ngn_exchange_rate"
                                                   value="<?php echo e(get_static_option('site_'.$global_currency.'_to_ngn_exchange_rate')); ?>">
                                            <span class="info-text"><?php echo e(__('enter '.$global_currency.' to NGN exchange rate. eg: 1'.$global_currency.' = ? NGN')); ?></span>
                                        </div>
                                    <?php endif; ?>

                                    <?php if($global_currency != 'ZAR'): ?>
                                        <div class="form-group">
                                            <label for="site_<?php echo e(strtolower($global_currency)); ?>_to_zar_exchange_rate"><?php echo e(__($global_currency.' to ZAR Exchange Rate')); ?></label>
                                            <input type="text" class="form-control"
                                                   name="site_<?php echo e(strtolower($global_currency)); ?>_to_zar_exchange_rate"
                                                   value="<?php echo e(get_static_option('site_'.$global_currency.'_to_zar_exchange_rate')); ?>">
                                            <span class="info-text"><?php echo e(sprintf(__('enter %s to USD exchange rate. eg: 1 %s = ? ZAR'),$global_currency,$global_currency)); ?></span>
                                        </div>
                                    <?php endif; ?>

                                    <?php if($global_currency != 'BRL'): ?>
                                        <div class="form-group">
                                            <label for="site_<?php echo e(strtolower($global_currency)); ?>_to_brl_exchange_rate"><?php echo e(__($global_currency.' to BRL Exchange Rate')); ?></label>
                                            <input type="text" class="form-control"
                                                   name="site_<?php echo e(strtolower($global_currency)); ?>_to_brl_exchange_rate"
                                                   value="<?php echo e(get_static_option('site_'.$global_currency.'_to_brl_exchange_rate')); ?>">
                                            <span class="info-text"><?php echo e(__('enter '.$global_currency.' to BRL exchange rate. eg: 1'.$global_currency.' = ? BRL')); ?></span>
                                        </div>
                                    <?php endif; ?>
                                    <?php if($global_currency != 'MYR'): ?>
                                        <div class="form-group">
                                            <label for="site_<?php echo e(strtolower($global_currency)); ?>_to_myr_exchange_rate"><?php echo e(__($global_currency.' to MYR Exchange Rate')); ?></label>
                                            <input type="text" class="form-control"
                                                   name="site_<?php echo e(strtolower($global_currency)); ?>_to_myr_exchange_rate"
                                                   value="<?php echo e(get_static_option('site_'.$global_currency.'_to_myr_exchange_rate')); ?>">
                                            <span class="info-text"><?php echo e(__('enter '.$global_currency.' to MYR exchange rate. eg: 1'.$global_currency.' = ? MYR')); ?></span>
                                        </div>
                                    <?php endif; ?>

                                    <div class="accordion-wrapper">
                                        <div id="accordion-payment">

                                            <div class="card">
                                                <div class="card-header" id="stripe_settings">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#stripe_settings_content" aria-expanded="false" >
                                                            <span class="page-title"> <?php echo e(__('Debit/Credit Cards Settings')); ?></span>
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="stripe_settings_content" class="collapse"  data-parent="#accordion-payment">
                                                    <div class="card-body">
                                                        <div class="payment-notice alert alert-warning">
                                                            <p><?php echo e(__("Debit/Credit Cards supported currency ")); ?> <?php echo e(implode(',',\Xgenious\Paymentgateway\Facades\XgPaymentGateway::stripe()->supported_currency_list())); ?></p>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="stripe_gateway"><strong><?php echo e(__('Enable/Disable  Debit/Credit Cards')); ?></strong></label>
                                                            <label class="switch">
                                                                <input type="checkbox" name="stripe_gateway"  <?php if(!empty(get_static_option('stripe_gateway'))): ?> checked <?php endif; ?> id="stripe_gateway">
                                                                <span class="slider onff"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="stripe_logo"><strong><?php echo e(__('Debit/Credit Cards Logo')); ?></strong></label>
                                                            <div class="media-upload-btn-wrapper">
                                                                <div class="img-wrap">
                                                                    <?php
                                                                        $stripe_img = get_attachment_image_by_id(get_static_option('stripe_preview_logo'),null,true);
                                                                        $stripe_image_btn_label = __('Upload Image');
                                                                    ?>
                                                                    <?php if(!empty($stripe_img)): ?>
                                                                        <div class="attachment-preview">
                                                                            <div class="thumbnail">
                                                                                <div class="centered">
                                                                                    <img class="avatar user-thumb" src="<?php echo e($stripe_img['img_url']); ?>" alt="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <?php  $stripe_image_btn_label = __('Change Image'); ?>
                                                                    <?php endif; ?>
                                                                </div>
                                                                <input type="hidden" id="stripe_preview_logo" name="stripe_preview_logo" value="<?php echo e(get_static_option('stripe_preview_logo')); ?>">
                                                                <button type="button" class="btn btn-info media_upload_form_btn" data-btntitle="<?php echo e(__('Select Image')); ?>" data-modaltitle="<?php echo e(__('Upload Image')); ?>" data-toggle="modal" data-target="#media_upload_modal">
                                                                    <?php echo e(__($stripe_image_btn_label)); ?>

                                                                </button>
                                                            </div>
                                                            <small class="form-text text-muted"><?php echo e(__('allowed image format: jpg,jpeg,png. Recommended image size 160x50')); ?></small>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="stripe_public_key"><?php echo e(__('Debit/Credit Cards Public Key')); ?></label>
                                                            <input type="text" name="stripe_public_key" id="stripe_public_key" value="<?php echo e(get_static_option('stripe_public_key')); ?>" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="stripe_secret_key"><?php echo e(__('Debit/Credit Cards Secret')); ?></label>
                                                            <input type="text" name="stripe_secret_key" id="stripe_secret_key"  value="<?php echo e(get_static_option('stripe_secret_key')); ?>" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            
                                            <?php echo (new \App\Helpers\ModuleMetaData())->renderAllPaymentGatewaySettingsBlade(); ?>

                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Update Changes')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.media.markup','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('media.markup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.media.js','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('media.js'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <script src="<?php echo e(asset('assets/backend/js/summernote-bs4.js')); ?>"></script>
    <script>
        (function($){
            "use strict";
            $(document).ready(function(){
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon-picker','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon-picker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.btn.update','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('btn.update'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                $('.summernote').summernote({
                    height: 150,   //set editable area's height
                    codemirror: { // codemirror options
                        theme: 'monokai'
                    }
                });
            });
        }(jQuery));
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sloughmobileapps/public_html/humnlibry.sloughmobileapps.co.uk/@core/resources/views/backend/general-settings/payment-gateway.blade.php ENDPATH**/ ?>