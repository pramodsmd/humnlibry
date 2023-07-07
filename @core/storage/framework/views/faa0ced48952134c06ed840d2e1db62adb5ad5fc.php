<?php if(get_static_option('dashboard_variant_seller') == '02'): ?>
    <?php echo $__env->make('subscription::frontend.seller.partials.subscriptions-two', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
    <?php echo $__env->make('subscription::frontend.seller.partials.subscriptions-one', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH /home/sloughmobileapps/public_html/humnlibry.sloughmobileapps.co.uk/@core/Modules/Subscription/Resources/views/frontend/seller/subscriptions.blade.php ENDPATH**/ ?>