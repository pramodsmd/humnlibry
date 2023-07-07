

<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Edit Service Attributes')); ?>

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
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.summernote.css','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('summernote.css'); ?>
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
    <link rel="stylesheet" href="<?php echo e(asset('assets/common/css/flatpickr.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-6">
                <div class="dashboard-settings margin-top-40">
                    <h3 class="dashboards-title"> <?php echo e(__('Edit Service Attributes')); ?> </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.msg.success','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('msg.success'); ?>
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
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
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
<?php endif; ?>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="<?php echo e(route('admin.edit.service.attributes.by.id',$service->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php if($service->is_service_online == 1): ?>
                        <input type="hidden" name="is_service_online_id" value="<?php echo e($service->is_service_online); ?>"  id="is_service_online_id">
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-xl-4 margin-top-50">
                            <div class="edit-service-wrappers">
                                <div class="dashboard-edit-thumbs">
                                    <?php echo render_image_markup_by_attachment_id($service->image); ?>

                                </div>
                                <div class="content-edit margin-top-40">
                                    <h5 class="title"> <?php echo e($service->title); ?> </h5>
                                    <p class="edit-para"> <?php echo e(Str::limit(strip_tags($service->description)) ,200); ?> </p>
                                </div>

                                <div class="single-dashboard-input <?php if($service->is_service_online==1): ?> service-price-show-hide <?php endif; ?>">
                                    <div class="single-info-input margin-top-50">
                                        <label class="info-title"> <?php echo e(__('Service Price')); ?></label>
                                        <input class="form-control" type="text" name="price" id="service_total_price" value="<?php echo e($service->price); ?>">
                                    </div>
                                </div>

                                <div class="btn-wrapper margin-top-40">
                                    <button type="submit" class="btn btn-sm btn-success"><?php echo e(__('Update Attributes')); ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 margin-top-50">
                            <?php if($service->is_service_online == 1): ?>
                                <div class="dashboard-switch-single margin-bottom-30">
                                    <a href="<?php echo e(route('admin.edit.service.attribute.offline.and.online', $service->id)); ?>" title="Online To Offline  Service">
                                    <input class="custom-switch is_service_online" id="is_service_online" type="checkbox" checked disabled />  <?php echo e(__('Online Service')); ?>

                                    <label class="switch-label" for="is_service_online"></label>
                                    </a>
                                </div>
                            <?php else: ?>
                                <div class="dashboard-switch-single margin-bottom-30">
                                    <a href="<?php echo e(route('admin.edit.service.attribute.offline.and.online', $service->id)); ?>" title="Offline To Online Service">
                                    <input class="custom-switch is_service_online" id="is_service_online" type="checkbox" checked disabled/> <?php echo e(__('Offline Service')); ?>

                                    <label class="switch-label" for="is_service_online"></label>
                                    </a>
                                </div>
                            <?php endif; ?>



                            <div class="single-settings">
                                <h5 class="input-title"> <?php echo e(__('What is Included In This Package')); ?> </h5>
                                <div class="append-additional-includes">
                                    <?php $__currentLoopData = $service_includes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $include): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="single-dashboard-input what-include-element">
                                            <input type="hidden" name="service_include_id[]" value="<?php echo e($include->id); ?>">
                                            <div class="single-info-input margin-top-20">
                                                <label><?php echo e(__('Title')); ?></label>
                                                <input class="form-control" type="text" name="include_service_title[]" placeholder="<?php echo e(__('Service title')); ?>" value="<?php echo e($include->include_service_title); ?>">
                                            </div>
                                            <div class="single-info-input margin-top-20 <?php if($service->is_service_online==1): ?> is_service_online_hide <?php endif; ?>">
                                                <label><?php echo e(__('Unit Price')); ?></label>
                                                <input class="form-control include-price" type="text" name="include_service_price[]" placeholder="<?php echo e(__('Add Price')); ?>" value="<?php echo e($include->include_service_price); ?>">
                                            </div>
                                            <div class="single-info-input margin-top-20 <?php if($service->is_service_online==1): ?> is_service_online_hide <?php endif; ?>">
                                                <label><?php echo e(__('Quantity')); ?></label>
                                                <input class="form-control numeric-value" type="text" name="include_service_quantity[]" placeholder="<?php echo e(__('Add Quantity')); ?>" value="<?php echo e($include->include_service_quantity); ?>" readonly>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>

                            <?php if($service->is_service_online==1): ?>
                                <div class="single-settings day_review_show_hide">
                                    <div class="single-dashboard-input">
                                        <div class="single-info-input margin-top-20">
                                            <label><?php echo e(__('Delivery Days')); ?></label>
                                            <input class="form-control" type="number" value="<?php echo e($service->delivery_days); ?>" step="0.01" name="delivery_days" placeholder="<?php echo e(__('Delivery Days')); ?>">
                                        </div>
                                        <div class="single-info-input margin-top-20">
                                            <label><?php echo e(__('Revisions')); ?></label>
                                            <input class="form-control" type="number" value="<?php echo e($service->revision); ?>"  step="0.01" name="revision" placeholder="<?php echo e(__('Revision Times')); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="single-settings online_service_price_show_hide">
                                    <div class="single-dashboard-input">
                                        <div class="single-info-input margin-top-20">
                                            <label><?php echo e(__('Service Price')); ?></label>
                                            <input class="form-control" type="number" value="<?php echo e($service->price); ?>"  step="0.01" name="online_service_price" placeholder="<?php echo e(__('Service price')); ?>">
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if($service_additionals->count() >= 1): ?>
                                <div class="single-settings margin-top-40">
                                    <h5 class="input-title"> <?php echo e(__('Additional Services')); ?> </h5>
                                    <div class="append-additional-services">
                                        <?php $__currentLoopData = $service_additionals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $additional): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="single-dashboard-input additional-services">
                                                <input type="hidden" name="service_additional_id[]" value="<?php echo e($additional->id); ?>">
                                                <div class="single-info-input margin-top-20">
                                                    <label><?php echo e(__('Title')); ?></label>
                                                    <input class="form-control" type="text" name="additional_service_title[]" placeholder="<?php echo e(__('Service title')); ?>"  value="<?php echo e($additional->additional_service_title); ?>">
                                                </div>
                                                <div class="single-info-input margin-top-20">
                                                    <label><?php echo e(__('Unit Price')); ?></label>
                                                    <input class="form-control numeric-value" type="text" name="additional_service_price[]" placeholder="<?php echo e(__('Add Price')); ?>" value="<?php echo e($additional->additional_service_price); ?>">
                                                </div>
                                                <div class="single-info-input margin-top-20">
                                                    <label><?php echo e(__('Quantity')); ?></label>
                                                    <input class="form-control numeric-value" type="text" name="additional_service_quantity[]" placeholder="<?php echo e(__('Add Quantity')); ?>" value="<?php echo e($additional->additional_service_quantity); ?>" readonly>
                                                </div>

                                                <div class="single-info-input margin-top-30">
                                                    <div class="form-group ">
                                                        <div class="media-upload-btn-wrapper">
                                                            <div class="img-wrap">
                                                                <?php echo render_image_markup_by_attachment_id($additional->additional_service_image); ?>

                                                            </div>
                                                            <input type="hidden" name="image[]">
                                                            <button type="button" class="btn btn-info media_upload_form_btn"
                                                                    data-btntitle="<?php echo e(__('Select Image')); ?>"
                                                                    data-modaltitle="<?php echo e(__('Upload Image')); ?>" data-toggle="modal"
                                                                    data-target="#media_upload_modal">
                                                                <?php echo e(__('Upload Image')); ?>

                                                            </button>
                                                            <small><?php echo e(__('image format: jpg,jpeg,png')); ?></small> <br>
                                                            <small><?php echo e(__('recomended size 78x78')); ?></small>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if($service_benifits->count() >= 1): ?>
                                <div class="single-settings margin-top-40">
                                    <h5 class="input-title"> <?php echo e(__('Benefit Of This Package')); ?> </h5>
                                    <div class="append-benifits">
                                        <?php $__currentLoopData = $service_benifits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $benifit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="single-dashboard-input benifits">
                                                <input type="hidden" name="service_benifit_id[]" value="<?php echo e($benifit->id); ?>">
                                                <div class="single-info-input margin-top-20">
                                                    <input class="form-control" type="text" name="benifits[]" placeholder="<?php echo e(__('Type Here')); ?>" value="<?php echo e($benifit->benifits); ?>">
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if($online_service_faq->count() >= 1): ?>
                                <div class="single-settings margin-top-40">
                                    <h5 class="input-title"> <?php echo e(__('Faqs')); ?> </h5>
                                    <div class="append-faqs">
                                        <?php $__currentLoopData = $online_service_faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="single-dashboard-input benifits">
                                                <input type="hidden" name="online_service_faq_id[]" value="<?php echo e($faq->id); ?>">
                                                <div class="single-info-input margin-top-20">
                                                    <input class="form-control" type="text" name="faqs_title[]" value="<?php echo e($faq->title); ?>"  placeholder="<?php echo e(__('Faq Title')); ?>">
                                                </div>
                                                <div class="single-info-input margin-top-20">
                                                    <textarea class="form-control" name="faqs_description[]" placeholder="<?php echo e(__('Faq Description')); ?>"><?php echo e($faq->description); ?></textarea>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.media.markup','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('media.markup'); ?>
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

<?php $__env->startSection('script'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.media.js','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('media.js'); ?>
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
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.summernote.js','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('summernote.js'); ?>
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
    <script src="<?php echo e(asset('assets/common/js/flatpickr.js')); ?>"></script>
    <script>
        (function ($) {
            "use strict";
            $(document).ready(function() {
                //total price
                $(document).on("change", ".include-price", function() {
                    var sum = 0;
                    $(".include-price").each(function() {
                        if(isNaN($(this).val())){
                            alert("<?php echo e(__('Please Enter Numeric Value only')); ?>")
                        }else{
                            sum += +$(this).val();
                        }
                    });
                    $("#service_total_price").val(sum);
                });

                //include quantity
                $(document).on("change", ".numeric-value", function() {
                    if(isNaN($(this).val())){
                        alert("<?php echo e(__('Please Enter Numeric Value only')); ?>")
                    }
                });

                //is service online
                $('.is_service_online_hide').hide();
                $('.service-price-show-hide').hide()

            })
        })(jQuery)
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sloughmobileapps/public_html/humnlibry.sloughmobileapps.co.uk/@core/resources/views/backend/pages/services/admin-service/edit_service_attributes_by_id.blade.php ENDPATH**/ ?>