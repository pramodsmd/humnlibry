<?php if(get_static_option('dashboard_variant_buyer') == '02'): ?>
    <?php echo $__env->make('frontend.user.buyer.profile.partials.buyer-profile-two', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php else: ?>
    <?php echo $__env->make('frontend.user.buyer.profile.partials.buyer-profile-one', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>


<?php /**PATH /home/bytesed/public_html/laravel/qixer/@core/resources/views/frontend/user/buyer/profile/buyer-profile.blade.php ENDPATH**/ ?>