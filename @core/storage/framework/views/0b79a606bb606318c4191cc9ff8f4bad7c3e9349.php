<?php if(get_static_option('dashboard_variant_buyer') == '02'): ?>
    <?php if(request()->is('buyer/live-chat')): ?>
        <?php echo $__env->make('livechat::frontend.buyer.partials.livechat-two', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('livechat::frontend.buyer.partials.livechat-one', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
<?php else: ?>
    <?php echo $__env->make('livechat::frontend.buyer.partials.livechat-one', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH /home/sloughmobileapps/public_html/humnlibry.sloughmobileapps.co.uk/@core/Modules/LiveChat/Resources/views/frontend/buyer/livechat.blade.php ENDPATH**/ ?>