<?php if(get_static_option('dashboard_variant_seller') == '02'): ?>
    <?php echo $__env->make('jobpost::frontend.seller.partials.new-jobs-two', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
    <?php echo $__env->make('jobpost::frontend.seller.partials.new-jobs-one', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH /home/sloughmobileapps/public_html/humnlibry.sloughmobileapps.co.uk/@core/Modules/JobPost/Resources/views/frontend/seller/new-jobs.blade.php ENDPATH**/ ?>