<?php if(get_static_option('dashboard_variant_buyer') == '02'): ?>
    <?php echo $__env->make('wallet::frontend.buyer.partials.wallet-history-two', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
    <?php echo $__env->make('wallet::frontend.buyer.partials.wallet-history-one', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH /home/sloughmobileapps/public_html/humnlibry.sloughmobileapps.co.uk/@core/Modules/Wallet/Resources/views/frontend/buyer/wallet-history.blade.php ENDPATH**/ ?>