<?php if(get_static_option('dashboard_variant_seller') == '02'): ?>
    <?php echo $__env->make('jobpost::frontend.seller.partials.job-requests-two', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
    <?php echo $__env->make('jobpost::frontend.seller.partials.job-requests-one', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH /home/bytesed/public_html/laravel/qixer/@core/Modules/JobPost/Resources/views/frontend/seller/job-requests.blade.php ENDPATH**/ ?>