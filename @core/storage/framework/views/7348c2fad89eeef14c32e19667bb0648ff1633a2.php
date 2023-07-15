<?php if(get_static_option('dashboard_variant_seller') == '02'): ?>
    <?php echo $__env->make('jobpost::frontend.seller.partials.conversation-two', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
    <?php echo $__env->make('jobpost::frontend.seller.partials.conversation-one', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH /home/bytesed/public_html/laravel/qixer/@core/Modules/JobPost/Resources/views/frontend/seller/conversation.blade.php ENDPATH**/ ?>