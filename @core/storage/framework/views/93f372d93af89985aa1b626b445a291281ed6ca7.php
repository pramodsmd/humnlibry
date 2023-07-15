<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Subscription')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('frontend.user.seller.partials.sidebar-two', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="dashboard__right">
        <?php echo $__env->make('frontend.user.buyer.header.buyer-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="dashboard__body">
            <div class="dashboard__inner">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.msg.error','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('msg.error'); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.msg.success','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('msg.success'); ?>
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
                <?php if($subscription): ?>
                <div class="dashboard__inner__item dashboard_border padding-20 radius-10 bg-white">
                    <div class="dashboard__wallet">
                        <div class="dashboard__wallet__flex">
                            <div class="dashboard__wallet__balance">
                                <div class="dashboard__wallet__balance__contents">
                                    <h5 class="dashboard__wallet__balance__price mt-2">  <?php echo e(__('Current Subscription Details')); ?>  </h5>
                                    <p class="text-info"><?php echo e(__('Note: Pending connect will be added to available connect only the payment status is completed.')); ?>, <?php echo e(get_static_option('set_number_of_connect')); ?>  <?php echo e(__('Connect will reduce for each order from available connects')); ?></p>

                                </div>
                            </div>

                            <div class="dashboard__wallet__btn">
                                <?php if(moduleExists('Wallet')): ?>
                                    <div class="col-lg-12">
                                        <div class="dashboard-settings margin-top-40">
                                            <form action="<?php echo e(route('seller.subscription.renew')); ?>" method="post" id="renew_current_subscription_using_wallter_balance_form">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" value="<?php echo e(optional($subscription->subscription)->id); ?>" name="subscription_id">
                                                <button type="submit" id="renew_current_subscription_using_wallter_balance" class="btn btn-warning"><?php echo e(__('Renew Current Subscription')); ?> <br> <?php echo e(__('Before Expired')); ?></button>
                                                <span  class="btn btn-success">
                                             <?php $balance =  \Modules\Wallet\Entities\Wallet::select('balance')->where('buyer_id',Auth::guard('web')->user()->id)->first() ?>
                                                    <?php echo e(__('Wallet Balance')); ?><br>
                                             <?php echo e(float_amount_with_currency_symbol($balance->balance ?? 0)); ?>

                                         </span>
                                            </form>
                                            <p class="text-info mt-2"><?php echo e(__('Note: You can renew your current subscription from here using your wallet balance. Simply click on the above button and rest of the process will done automatically.')); ?></p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                  </div>
                <?php endif; ?>


                <!--seller subscription basic info start-->
                <?php if($subscription): ?>
                <div class="dashboard_table__wrapper dashboard_border padding-20 radius-10 bg-white">
                    <h4 class="dashboard_table__title"><?php echo e(__('Wallet history')); ?></h4>
                    <div class="dashboard_table__main custom--table mt-4">
                        <table>
                            <thead>
                            <tr>
                                <th> <?php echo e(__('Subscription Details')); ?> </th>
                                <!-- <th> <?php echo e(__('Connect Details')); ?> </th> -->
                                <th> <?php echo e(__('Payment Gateway')); ?> </th>
                                <th> <?php echo e(__('Payment Status')); ?> </th>
                                <th> <?php echo e(__('Expire Date')); ?> </th>
                            </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>
                                        <div>
                                            <span> <?php echo e(__('Title:')); ?>   <strong class="text-secondary"> <?php echo e(optional($subscription->subscription)->title); ?> </strong> </span> <br>
                                            <span> <?php echo e(__('Type:')); ?>  <strong class="text-secondary">  <?php echo e(optional($subscription->subscription)->type); ?>  </strong></span> <br>
                                            <!-- <span> <?php echo e(__('Connect:')); ?>   <strong class="text-secondary"> <?php echo e(optional($subscription->subscription)->connect); ?> </strong> </span> <br> -->
                                            <span> <?php echo e(__('Service:')); ?>  <strong class="text-secondary">  <?php echo e(optional($subscription->subscription)->service); ?>  </strong></span> <br>
                                            <!-- <span> <?php echo e(__('Job:')); ?>  <strong class="text-secondary">  <?php echo e(optional($subscription->subscription)->job); ?>  </strong></span> <br> -->
                                            <span> <?php echo e(__('Price:')); ?> <strong class="text-secondary">  <?php echo e(float_amount_with_currency_symbol(optional($subscription->subscription)->price)); ?> </strong> </span>
                                        </div>
                                    </td>


                                    <!-- <td>
                                        <div>
                                             <span class="mt-2">
                                                 <?php if($subscription->type == 'lifetime'): ?>
                                                     <?php echo e(__('Connect: ')); ?>  <?php echo e(__('No Limit')); ?> <br>
                                                 <?php else: ?>
                                                     <?php echo e(__('Available Connect: ')); ?>  <?php echo e($subscription->connect); ?> <br>
                                                     <?php if($subscription->payment_status == 'pending' || $subscription->payment_status == ''): ?>
                                                         <?php echo e(__('Pending Connect: ')); ?>

                                                         <?php echo e($subscription->initial_connect); ?> <br>
                                                     <?php endif; ?>
                                                 <?php endif; ?>
                                             </span>
                                        </div>
                                    </td> -->

                                    <td>
                                        <div class="dashboard_table__main__paymentGateway">
                                        <?php if($subscription->payment_gateway=="stripe"): ?>
                                        <?php echo e(ucfirst('Debit/Credit card')); ?>

                                        <?php else: ?>
                                        <?php echo e(ucfirst($subscription->payment_gateway)); ?>

                                        <?php endif; ?>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="dashboard_table__main__priority">
                                            <span class="service-review">
                                            <a href="javascript:void(0)" class="priorityBtn <?php if($subscription->payment_status=='complete'): ?> <?php else: ?> pending <?php endif; ?> completed">
                                                <?php echo e(ucfirst($subscription->payment_status=='complete' ? 'complete' : 'pending')); ?></a>
                                                 <br>
                                                    <?php if($subscription->payment_status == 'pending' || $subscription->payment_status == ''): ?>
                                                    <?php if( $subscription->payment_gateway != 'manual_payment'): ?>
                                                        <form action="<?php echo e(route('seller.subscription.buy')); ?>" method="post" enctype="multipart/form-data">
                                                            <?php echo csrf_field(); ?>
                                                            <input type="hidden" name="subscription_id" value="<?php echo e($subscription->id); ?>" >
                                                            <input type="hidden" name="price" value="<?php echo e($subscription->initial_price); ?>" >
                                                            <input type="hidden" name="type" value="<?php echo e($subscription->type); ?>" >
                                                            <input type="hidden" name="seller_payment_later" value="later" >
                                                            <input type="hidden" name="selected_payment_gateway" value="<?php echo e($subscription->payment_gateway); ?>">
                                                             <button  type="submit" class="dashboard_table__title__btn btn-bg-1 radius-5" style="border: none">  <?php echo e(__('Pay Now')); ?></button>
                                                        </form>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                             </span>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="dashboard_table__main__date">
                                            <?php if($subscription->type == 'lifetime'): ?>
                                                <span class="service-review"><?php echo e(__('Expire Date:')); ?>  <?php echo e(__('No Limit')); ?></span>
                                            <?php else: ?>
                                                <span class="service-review"> <?php echo e(__('Expire Date:')); ?>  <?php echo e(date('d-m-Y', strtotime($subscription->expire_date))); ?>  </span>
                                            <?php endif; ?>
                                        </div>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--seller subscription basic info end-->
                <?php else: ?>
                   <div class="row">
                    <div class="chat_wrapper__details__inner__chat__contents col-sm-6">
                         <h2 class="chat_wrapper__details__inner__chat__contents__para"><?php echo e(__('No Subscription Found')); ?></h2>
                    </div>
                    <div class="col-sm-6">
                            <a href="<?php echo e(url('/price-plan')); ?>" target="_self" class="dashboard_table__title__btn btn-bg-1 radius-5" style="float:right"><?php echo e(__('view packages')); ?></a>
                        </div>
                    </div>  
                <?php endif; ?>

                <!--seller subscription history  start-->
                <?php if($subscription_history): ?>
                <div class="dashboard_table__wrapper dashboard_border padding-20 radius-10 bg-white mt-4">
                    <h5 class="dashboards-title"><?php echo e(__('Subscription History')); ?></h5>
                    <p class="text-info mt-2"><?php echo e(__('Your earlier subscription history list.')); ?></p>
                    <div class="dashboard_table__main custom--table mt-4">
                        <table>
                            <thead>
                            <tr>
                                <th> <?php echo e(__('#No')); ?> </th>
                                <th> <?php echo e(__('Subscription Details')); ?> </th>
                                <th> <?php echo e(__('Payment Details')); ?> </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $subscription_history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <div class="dashboard_table__main__paymentId"><?php echo e($key+1); ?> </div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <?php echo e(__('Title:')); ?> <?php echo e(optional($data->subscription)->title); ?> <br>
                                            <?php echo e(__('Price:')); ?>

                                            <?php if($data->price == 0): ?>
                                                <?php echo e(float_amount_with_currency_symbol($data->initial_price)); ?> <br>
                                            <?php else: ?>
                                                <?php echo e(float_amount_with_currency_symbol($data->price)); ?> <br>
                                            <?php endif; ?>
                                            <?php echo e(__('Type:')); ?> <?php echo e(ucfirst($data->type)); ?> <br>
                                            <!-- <?php if($data->type != 'lifetime'): ?>
                                                <?php echo e(__('Connect:')); ?>

                                                <?php if($data->connect == 0): ?>
                                                    <?php echo e($data->initial_connect); ?> <br>
                                                <?php else: ?>
                                                    <?php echo e($data->connect); ?> <br>
                                                <?php endif; ?> -->
                                                <?php echo e(__('Expire Date:')); ?> <?php echo e(date('d-m-Y', strtotime($data->expire_date))); ?><br>
                                            <?php endif; ?>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="dashboard_table__main__priority">
                                            <?php echo e(__('Payment Gateway:')); ?> <?php if($data->payment_gateway=="stripe"): ?>
                                        <?php echo e(ucfirst('Debit/Credit card')); ?>

                                        <?php else: ?>
                                        <?php echo e(ucfirst($data->payment_gateway)); ?>

                                        <?php endif; ?> <br>
                                            <?php echo e(__('Payment Status:')); ?>


                                            <a href="javascript:void(0)" class="priorityBtn <?php if($data->payment_status == 'complete'): ?> completed <?php else: ?> pending <?php endif; ?>">
                                            <?php echo e(ucfirst($data->payment_status=='complete' ? 'complete' : 'pending')); ?>

                                            </a>

                                        </div>
                                    </td>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="blog-pagination margin-top-55">
                        <div class="custom-pagination mt-4 mt-lg-5">
                            <?php echo $subscription_history->links(); ?>

                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <!--seller subscription history  end-->

            </div>
        </div>
 <?php $__env->stopSection(); ?>
 <?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('assets/backend/js/sweetalert2.js')); ?>"></script>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.payment-gateway-two-js','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('payment-gateway-two-js'); ?>
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
<script>
    (function($){
        "use strict";
        $(document).ready(function(){

            // date range
            $('.flatpickr_input').flatpickr({
                altFormat: "invisible",
                altInput: false,
                mode: "range",
            });

            $(document).on('click','#renew_current_subscription_using_wallter_balance',function(e){
                e.preventDefault();
                Swal.fire({
                    title:"<?php echo e(__('Are you sure to renew subscription?')); ?>",
                    showDenyButton: true,
                    showCancelButton: false,
                    confirmButtonText: "<?php echo e(__('Yes')); ?>",
                    denyButtonText: "<?php echo e(__('No')); ?>",
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#renew_current_subscription_using_wallter_balance_form').trigger('submit');
                    }
                });
            });
        });
    })(jQuery);
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.user.buyer.buyer-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamp\htdocs\humnlibry\@core\Modules/Subscription\Resources/views/frontend/seller/partials/subscriptions-two.blade.php ENDPATH**/ ?>