<?php if(get_static_option('dashboard_variant_buyer') == '02'): ?>
    <?php echo $__env->make('frontend.user.buyer.notification.partials.notification-two', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
    <?php echo $__env->make('frontend.user.buyer.notification.partials.notification-one', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH /home/sloughmobileapps/public_html/humnlibry.sloughmobileapps.co.uk/@core/resources/views/frontend/user/buyer/notification/all-notification.blade.php ENDPATH**/ ?>