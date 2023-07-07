<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Add New Ticket')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.media.css','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('media.css'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.seller-buyer-preloader','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.seller-buyer-preloader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php echo $__env->make('frontend.user.buyer.partials.sidebar-two', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="dashboard__right">
        <?php echo $__env->make('frontend.user.buyer.header.buyer-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="dashboard__body">
            <div class="dashboard__inner">
                <!-- Report section start-->
                <div class="dashboard_table__wrapper dashboard_border  padding-20 radius-10 bg-white">
                    <div class="dashboard_table__title__flex">
                        <h4 class="dashboards-title">  <?php echo e(__('Add New Ticket')); ?> </h4>
                    </div>


                    <div class="row">
                        <div class="col-lg-6 margin-top-50">
                            <div class="single-settings">
                                <div class="mt-5"> <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.msg.error','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('msg.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?> </div>
                                <h4 class="mb-3"><?php echo e(__('Ticket For:')); ?> <?php echo e(optional($order->service)->title); ?></h4>
                                <h4 class="mb-5"><?php echo e(__('Order ID:')); ?> #<?php echo e($order->id); ?></h4>
                                <form action="<?php echo e(route('buyer.support.ticket.new')); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="seller_id" value="<?php echo e($order->seller_id); ?>">
                                    <input type="hidden" name="service_id" value="<?php echo e($order->service_id); ?>">
                                    <input type="hidden" name="order_id" value="<?php echo e($order->id); ?>">

                                    <div class="single-dashboard-input">
                                        <div class="single-info-input margin-top-30">
                                            <label for="title" class="info-title"> <?php echo e(__('Title*')); ?> </label>
                                            <input class="form--control" name="title" id="title" value="<?php echo e(@old('title')); ?>" type="text" placeholder="<?php echo e(__('Add tilte')); ?>">
                                        </div>
                                    </div>
                                    <div class="single-dashboard-input">
                                        <div class="single-info-input margin-top-30">
                                            <label for="subject" class="info-title"> <?php echo e(__('Subject*')); ?> </label>
                                            <input class="form--control" name="subject" id="subject" value="<?php echo e(@old('subject')); ?>" type="text" placeholder="<?php echo e(__('Add Subject')); ?>">
                                        </div>
                                    </div>
                                    <div class="single-dashboard-input">
                                        <div class="single-info-input margin-top-30">
                                            <label for="priority" class="info-title"> <?php echo e(__('Priority*')); ?> </label>
                                            <select name="priority" id="priority">
                                                <option value="low"><?php echo e(__('Low')); ?></option>
                                                <option value="medium"><?php echo e(__('Medium')); ?></option>
                                                <option value="high"><?php echo e(__('High')); ?></option>
                                                <option value="urgent"><?php echo e(__('Urgent')); ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="single-dashboard-input">
                                        <div class="single-info-input margin-top-30">
                                            <label for="description" class="info-title"> <?php echo e(__('Description*')); ?> </label>
                                            <textarea class="form--control textarea--form textarea-input" name="description" cols="20" rows="4" placeholder="<?php echo e(__('Type Description')); ?>"></textarea>
                                        </div>
                                    </div>
                                    <div class="btn-wrapper margin-top-30">
                                        <button type="submit" class="dashboard_table__title__btn btn-bg-1 radius-5" style="border: none"> <?php echo e(__('Submit Ticket')); ?> </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.media.markup','data' => ['type' => 'web']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('media.markup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('web')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <!-- Dashboard area end -->
 <?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.media.js','data' => ['type' => 'web']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('media.js'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('web')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<script type="text/javascript">
(function(){
    "use strict";
    $(document).ready(function(){

        $('#category').on('change',function(){
            var category_id = $(this).val();
            $.ajax({
                method:'post',
                url:"<?php echo e(route('seller.subcategory')); ?>",
                data:{category_id:category_id},
                success:function(res){
                    if(res.status=='success'){
                        var alloptions = '';
                        var allSubCategory = res.sub_categories;
                        $.each(allSubCategory,function(index,value){
                            alloptions +="<option value='" + value.id + "'>" + value.name + "</option>";
                        });
                        $(".subcategory").html(alloptions);
                        $('#subcategory').niceSelect('update');
                    }
                }
            })
        })

    })
})(jQuery);
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.user.buyer.buyer-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sloughmobileapps/public_html/humnlibry.sloughmobileapps.co.uk/@core/resources/views/frontend/user/buyer/support-ticket/partials/add-new-ticket-two.blade.php ENDPATH**/ ?>