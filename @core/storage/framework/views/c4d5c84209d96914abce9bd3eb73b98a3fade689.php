
<?php if(get_static_option('dashboard_variant_buyer') == '02'): ?>
    <?php echo $__env->make('jobpost::frontend.buyer.partials.job-requests-two', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
    <?php echo $__env->make('jobpost::frontend.buyer.partials.job-requests-one', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php /**PATH /home/sloughmobileapps/public_html/humnlibry.sloughmobileapps.co.uk/@core/Modules/JobPost/Resources/views/frontend/buyer/job-requests.blade.php ENDPATH**/ ?>