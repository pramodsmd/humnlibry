<?php if(get_static_option('dashboard_variant_seller') == '02'): ?>
    <?php if(request()->is('buyer/load-latest-messages')): ?>
         <?php echo $__env->make('livechat::frontend.seller.partials.message-line-two', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('livechat::frontend.seller.partials.message-line-one', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
<?php else: ?>
    <?php echo $__env->make('livechat::frontend.seller.partials.message-line-one', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH /home/sloughmobileapps/public_html/humnlibry.sloughmobileapps.co.uk/@core/Modules/LiveChat/Resources/views/frontend/seller/message-line.blade.php ENDPATH**/ ?>