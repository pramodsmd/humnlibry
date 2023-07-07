<?php if(get_static_option('dashboard_variant_seller') == '02'): ?>
    <?php echo $__env->make('frontend.user.seller.support-ticket.partials.view-ticket-two', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
    <?php echo $__env->make('frontend.user.seller.support-ticket.partials.view-ticket-one', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH /home/sloughmobileapps/public_html/humnlibry.sloughmobileapps.co.uk/@core/resources/views/frontend/user/seller/support-ticket/view-ticket.blade.php ENDPATH**/ ?>