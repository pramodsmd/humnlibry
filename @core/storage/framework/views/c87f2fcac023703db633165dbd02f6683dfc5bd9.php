
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Histories')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <style>
        .table-td-padding {
            border-collapse: separate;
            border-spacing: 10px 20px;
        }
    </style>
    <link rel="stylesheet" href="<?php echo e(asset('assets/common/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/css/font-awesome.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.seller-buyer-preloader','data' => []]); ?>
<?php $component->withName('frontend.seller-buyer-preloader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <!-- Dashboard area Starts -->
    <div class="body-overlay"></div>
    <div class="dashboard-area dashboard-padding">
        <div class="container-fluid">
            <div class="dashboard-contents-wrapper">
                <div class="dashboard-icon">
                    <div class="sidebar-icon">
                        <i class="las la-bars"></i>
                    </div>
                </div>
                <?php echo $__env->make('frontend.user.seller.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php if($decline_histories->count() >= 1): ?>
                    <div class="dashboard-right">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="dashboard-settings margin-top-40">
                                    <h2 class="dashboards-title">#<?php echo e($order_id); ?>-<?php echo e(__('Order Decline History')); ?></h2>
                                    <br>
                                    <a class="btn btn-success" href="<?php echo e(route('seller.orders')); ?>"><?php echo e(__('Back To Orders')); ?></a>
                                </div>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.msg.success','data' => []]); ?>
<?php $component->withName('msg.success'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.msg.error','data' => []]); ?>
<?php $component->withName('msg.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 margin-top-40">
                                <div>
                                    <div class="table-responsive table-responsive--md">
                                        <table id="all_order_table" class="custom--table table-td-padding">
                                            <thead>
                                            <tr>
                                                <th> <?php echo e(__('ID')); ?> </th>
                                                <th> <?php echo e(__('Buyer Details')); ?> </th>
                                                <th><?php echo e(__('Status')); ?> (<?php echo e(__('Decline Reason')); ?>)</th>
                                                <th> <?php echo e(__('Image File')); ?> </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $decline_histories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td data-label="<?php echo e(__('ID')); ?>"> <?php echo e($history->id); ?> </td>
                                                    <td data-label="<?php echo e(__('Buyer Details')); ?>">
                                                        <strong><?php echo e(__('Name: ')); ?></strong> <?php echo e(optional($history->buyer)->name); ?> <br>
                                                        <strong><?php echo e(__('Email: ')); ?></strong> <?php echo e(optional($history->buyer)->email); ?> <br>
                                                        <strong><?php echo e(__('Phone: ')); ?></strong> <?php echo e(optional($history->buyer)->phone); ?> <br>
                                                    </td>
                                                    <td data-label="<?php echo e(__('Status')); ?> (<?php echo e(__('Decline Reason')); ?>)"><strong><?php echo e(__('Decline Reason: ')); ?></strong> <?php echo e($history->decline_reason); ?> </td>
                                                    <td data-label="<?php echo e(__('Image File')); ?>"><?php echo render_image_markup_by_attachment_id($history->image,'','thumb'); ?></td>
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

                                </div>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <h2 class="no_data_found"><?php echo e(__('No History Found')); ?></h2>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('assets/backend/js/sweetalert2.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/frontend/js/rating.js')); ?>"></script>
    <script>
        (function($) {
            "use strict";

            $(document).ready(function() {
                //order complete status approve
            });

        })(jQuery);
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.user.seller.seller-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bytesed/public_html/laravel/qixer/@core/resources/views/frontend/user/seller/order/decline-history.blade.php ENDPATH**/ ?>