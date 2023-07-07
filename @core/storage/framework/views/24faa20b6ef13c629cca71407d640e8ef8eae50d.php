<?php if(get_static_option('dashboard_variant_seller') == '02'): ?>
    <?php echo $__env->make('frontend.user.seller.services.partials.show-service-attributes-by-id-two', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
    <?php echo $__env->make('frontend.user.seller.services.partials.show-service-attributes-by-id-one', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH /home/sloughmobileapps/public_html/humnlibry.sloughmobileapps.co.uk/@core/resources/views/frontend/user/seller/services/show-service-attributes-by-id.blade.php ENDPATH**/ ?>