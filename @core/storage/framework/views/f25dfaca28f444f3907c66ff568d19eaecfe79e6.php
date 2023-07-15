<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('All Notifications')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('frontend.user.buyer.partials.sidebar-two', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="dashboard__right">
        <?php echo $__env->make('frontend.user.buyer.header.buyer-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="dashboard__body">
            <div class="dashboard__inner">
                <!-- Tickets table section start-->
                <div class="dashboard_table__wrapper dashboard_border  padding-20 radius-10 bg-white">
                    <div class="dashboard_table__title__flex">
                        <h4 class="dashboard_table__title mb-2"><?php echo e(__('All Notification')); ?></h4>
                    </div>
                    <?php if(!empty($notifications)): ?>
                        <div class="dashboard_table__main custom--table mt-4">
                            <table>
                                <thead>
                                <tr>
                                    <th><?php echo e(__('No')); ?></th>
                                    <th><?php echo e(__('Title')); ?></th>
                                    <th><?php echo e(__('Action')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php 
                                       $data=json_decode($notification->data);
                                    ?>
                                    <?php if(isset($data->buyer_id)): ?>
                                      <?php if($data->buyer_id==Auth::guard('web')->user()->id): ?>
                                        <tr>
                                            <td><?php echo e($key+1); ?></td>
                                            <td>
                                                <a class="list-order" href="<?php echo e(route('buyer.order.details',$data->order_id)); ?>">
                                                    <span class="order-icon"> <i class="las la-check-circle"></i> </span>
                                                    <?php echo e(__($data->order_message)); ?> #<?php echo e($data->order_id); ?>

                                                </a>
                                            </td>
                                            <td>
                                                <div class="dashboard_table__main__actions">
                                                    <a href="<?php echo e(route('buyer.order.details.notification',$notification->id)); ?>" class="icon"><i class="fa-regular fa-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="blog-pagination margin-top-55">
                            <div class="custom-pagination mt-4 mt-lg-5">
                                <?php echo e($notifications->links()); ?>

                            </div>
                        </div>
                    <?php else: ?>
                        <div class="chat_wrapper__details__inner__chat__contents mt-3">
                            <p class="no_data_found_for_buyer_seller_panel">
                                <?php echo e(__('No Notification found')); ?>

                            </p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.user.buyer.buyer-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sloughmobileapps/public_html/humnlibry.sloughmobileapps.co.uk/@core/resources/views/frontend/user/buyer/notification/partials/notification-two.blade.php ENDPATH**/ ?>