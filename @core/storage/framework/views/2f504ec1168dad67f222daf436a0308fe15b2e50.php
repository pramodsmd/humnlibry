<?php if(session()->has('msg')): ?>
    <div class="alert alert-danger alert-<?php echo e(session('type')); ?>">
        <?php echo session('msg'); ?>

    </div>
<?php endif; ?>
<?php /**PATH /home/sloughmobileapps/public_html/humnlibry.sloughmobileapps.co.uk/@core/resources/views/components/flash-msg.blade.php ENDPATH**/ ?>