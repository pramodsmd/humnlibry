<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Histories')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.seller-buyer-preloader','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.seller-buyer-preloader'); ?>
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

    <?php echo $__env->make('frontend.user.buyer.partials.sidebar-two', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="dashboard__right">
        <?php echo $__env->make('frontend.user.buyer.header.buyer-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="dashboard__body">
            <div class="dashboard__inner">
                <!-- Report section start-->
                <div class="dashboard_table__wrapper dashboard_border  padding-20 radius-10 bg-white">
                    <div class="dashboard_table__title__flex">
                        <h4 class="dashboards-title"> <?php echo e(__('Decline History')); ?> <br> <b style="font-size: 20px"><?php echo e(__('Order ID:')); ?> <span class="text-info"> <?php echo e($order_id); ?> </span></b></h4>
                        <a class="btn btn-success" href="<?php echo e(route('seller.orders')); ?>"><?php echo e(__('Back To Orders')); ?></a>

                    </div>
                    <?php if($decline_histories->count() >= 1): ?>
                        <div class="dashboard_table__main custom--table mt-4">
                            <table>
                                <thead>
                                <tr>
                                    <th> <?php echo e(__('ID')); ?> </th>
                                    <th> <?php echo e(__('Buyer Details')); ?> </th>
                                    <th><?php echo e(__('Status')); ?> (<?php echo e(__('Decline Reason')); ?>)</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $decline_histories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td> <?php echo e($history->id); ?> </td>
                                        <td>
                                            <strong><?php echo e(__('Name: ')); ?></strong> <?php echo e(optional($history->buyer)->name); ?> <br>
                                            <strong><?php echo e(__('Email: ')); ?></strong><?php echo e(optional($history->buyer)->email); ?> <br>
                                            <strong><?php echo e(__('Phone: ')); ?></strong><?php echo e(optional($history->buyer)->phone); ?> <br>
                                        </td>
                                        <td><strong><?php echo e(__('Decline Reason: ')); ?></strong><?php echo e($history->decline_reason); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="blog-pagination margin-top-55">
                            <div class="custom-pagination mt-4 mt-lg-5">
                                <?php echo $decline_histories->links(); ?>

                            </div>
                        </div>
                    <?php else: ?>
                        <h6 class="no_data_found mt-3"><?php echo e(__('No History Found')); ?></h6>
                    <?php endif; ?>
                    <!-- reports section end -->
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.user.buyer.buyer-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sloughmobileapps/public_html/humnlibry.sloughmobileapps.co.uk/@core/resources/views/frontend/user/seller/order/partials/decline-history-two.blade.php ENDPATH**/ ?>