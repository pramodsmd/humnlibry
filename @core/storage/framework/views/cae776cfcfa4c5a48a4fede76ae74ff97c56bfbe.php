

<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Edit Subscription')); ?>

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
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="header-wrap d-flex justify-content-between">
                            <div class="left-content">
                                <h4 class="header-title"><?php echo e(__('Edit Subscription')); ?></h4>
                            </div>
                            <div class="right-content">
                                <a class="btn btn-info btn-sm" href="<?php echo e(route('admin.subscription.all')); ?>"><?php echo e(__('All Subscriptions')); ?></a>
                            </div>
                        </div>
                        <form action="<?php echo e(route('admin.subscription.edit',$subscription->id)); ?>" method="post" enctype="multipart/form-data" id="edit_category_form">
                            <?php echo csrf_field(); ?>
                            <div class="tab-content margin-top-40">

                                <div class="form-group">
                                    <label for="image"><?php echo e(__('Upload Image')); ?></label>
                                    <div class="media-upload-btn-wrapper">
                                        <div class="img-wrap">
                                            <?php echo render_image_markup_by_attachment_id($subscription->image,'','thumb'); ?>

                                        </div>
                                        <input type="hidden" name="image">
                                        <button type="button" class="btn btn-info media_upload_form_btn"
                                                data-btntitle="<?php echo e(__('Select Image')); ?>"
                                                data-modaltitle="<?php echo e(__('Upload Image')); ?>" data-toggle="modal"
                                                data-target="#media_upload_modal">
                                            <?php echo e(__('Upload Image')); ?>

                                        </button>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="title"><?php echo e(__('Title')); ?></label>
                                    <input type="text" class="form-control" name="title" id="title" value="<?php echo e($subscription->title); ?>" placeholder="<?php echo e(__('Title')); ?>">
                                </div>
                                
                                 <div class="form-group">
                                    <label for="title"><?php echo e(__('About Subscription')); ?></label>
                                    <textarea name="about_subscription" id="editor" class="form-control"  placeholder="<?php echo e(__('About Subscription')); ?>"><?php echo e($subscription->about_subscription); ?></textarea>
                                </div>
                                <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="type"><?php echo e(__('Subscription Type')); ?></label>
                                    <select name="type" id="type" class="form-control">
                                        <option value="monthly" <?php if($subscription->type == 'monthly'): ?> selected <?php endif; ?>><?php echo e(__('Monthly')); ?></option>
                                        <option value="yearly" <?php if($subscription->type == 'yearly'): ?> selected <?php endif; ?>><?php echo e(__('Yearly')); ?></option>
                                        <!--<option value="lifetime" <?php if($subscription->type == 'lifetime'): ?> selected <?php endif; ?>><?php echo e(__('Lifetime')); ?></option>-->
                                    </select>
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="price"><?php echo e(__('Price')); ?></label>
                                    <input type="number" class="form-control" name="price" id="price" value="<?php echo e($subscription->price); ?>" placeholder="<?php echo e(__('Price')); ?>">
                                </div>

                                <!--<div class="form-group connect_show_hide">-->
                                <!--    <label for="connect"><?php echo e(__('Connect')); ?></label>-->
                                <!--    <input type="number" class="form-control" name="connect" id="connect"  value="<?php echo e($subscription->connect ?? 0); ?>" placeholder="<?php echo e(__('No of Connect')); ?>">-->
                                <!--    <span><?php echo e(__('Connect for order')); ?></span>-->
                                <!--</div>-->

                                <div class="form-group connect_show_hide col-sm-6">
                                    <label for="service"><?php echo e(__('Service')); ?></label>
                                    <input type="number" class="form-control" name="service" id="service"  value="<?php echo e($subscription->service ?? 0); ?>" placeholder="<?php echo e(__('No of Service')); ?>">
                                    <span><?php echo e(__('Maximum Service Create')); ?></span>
                                </div>
                                   <div class="form-group connect_show_hide col-sm-6">
                                    <label for="service"><?php echo e(__('Unique Profile')); ?></label>
                                    <select type="text" class="form-control" name="unique_profile" id="unique_profile">
                                    <option value="active" <?php echo e($subscription->unique_profile =='active' ? 'selected' : ''); ?>><?php echo e(__('Active')); ?></option>
                                    <option value="inactive" <?php echo e($subscription->unique_profile=='inactive' ? 'selected' : ''); ?>><?php echo e(__('Inactive')); ?></option>
                                   </select>
                                    <span><?php echo e(__('Unique Profile: Logo,Many Brands/Images/Video Gallery')); ?></span>
                                </div>
                                <div class="form-group connect_show_hide col-sm-6">
                                    <label for="service"><?php echo e(__('Profile Searchable')); ?></label>
                                    <select type="text" class="form-control" name="profile_searchable" id="profile_searchable">
                                    <option value="active" <?php echo e($subscription->profile_searchable =='active' ? 'selected' : ''); ?>><?php echo e(__('Active')); ?></option>
                                    <option value="inactive" <?php echo e($subscription->profile_searchable =='inactive' ? 'selected' : ''); ?>><?php echo e(__('Inactive')); ?></option>
                                   </select>
                                    <span><?php echo e(__('Profile searchable ')); ?></span>
                                </div>
                                <div class="form-group connect_show_hide col-sm-6">
                                    <label for="service"><?php echo e(__('Booking Availability')); ?></label>
                                    <select type="text" class="form-control" name="booking_availability" id="booking_availability">
                                    <option value="active" <?php echo e($subscription->booking_availability =='active' ? 'selected' : ''); ?>><?php echo e(__('Active')); ?></option>
                                    <option value="inactive" <?php echo e($subscription->booking_availability =='inactive' ? 'selected' : ''); ?>><?php echo e(__('Inactive')); ?></option>
                                   </select>
                                    <span><?php echo e(__('Booking Availability- Enable/Disable')); ?></span>
                                </div>
                                 <div class="form-group connect_show_hide col-sm-6">
                                    <label for="service"><?php echo e(__('Booking  Calendar')); ?></label>
                                    <select type="text" class="form-control" name="booking_calendar" id="booking_calendar">
                                    <option value="active" <?php echo e($subscription->booking_calendar =='active' ? 'selected' : ''); ?>><?php echo e(__('Active')); ?></option>
                                    <option value="inactive" <?php echo e($subscription->booking_calendar =='inactive' ? 'selected' : ''); ?>><?php echo e(__('Inactive')); ?></option>
                                   </select>
                                    <span><?php echo e(__('Booking : Calendar Schedule- Date/Time | Meetup Location | Where: Online/ in Person: Video Call')); ?></span>
                                </div>
                                
                                <div class="form-group connect_show_hide col-sm-6">
                                    <label for="service"><?php echo e(__('Booking Count Down/Timer')); ?></label>
                                    <select type="text" class="form-control" name="booking_counter" id="booking_counter">
                                    <option value="active" <?php echo e($subscription->booking_counter =='active' ? 'selected' : ''); ?>><?php echo e(__('Active')); ?></option>
                                    <option value="inactive" <?php echo e($subscription->booking_counter =='inactive' ? 'selected' : ''); ?>><?php echo e(__('Inactive')); ?></option>
                                   </select>
                                    <span><?php echo e(__('Booking Count Down/Timer : Show a running time e.g for 1 hour- 60min to 1 left min till popup Timeout and Service completed. Like taxi meter ( Assume someone provide Massage 
                                    service for 1 hour so count down will be running for customer users and service provider')); ?></span>
                                </div>

                                <!--<div class="form-group connect_show_hide">-->
                                <!--    <label for="job"><?php echo e(__('Job')); ?></label>-->
                                <!--    <input type="number" class="form-control" name="job" id="job"  value="<?php echo e($subscription->job ?? 0); ?>" placeholder="<?php echo e(__('No of Job')); ?>">-->
                                <!--    <span> <?php echo e(__('Maximum Apply Job')); ?></span>-->
                                <!--</div>-->
                               </div> 
                                <button type="submit" class="btn btn-primary mt-3 submit_btn"><?php echo e(__('Submit ')); ?></button>

                            </div>
                        </form>
                    </div>
                </div>
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
    <script>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon-picker','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon-picker'); ?>
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
    </script>
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
    <script>
        (function ($) {
            "use strict";
            
            CKEDITOR.replace( 'editor');

            $(document).ready(function () {
                let type = $('#type').val();
                if(type=='lifetime'){
                    $('.connect_show_hide').hide();
                }
                $(document).on('change','#type',function(){
                    let type = $(this).val();
                    if(type=='lifetime'){
                        $('.connect_show_hide').hide();
                    }else{
                        $('.connect_show_hide').show();
                    }
                })
            });
        })(jQuery)
    </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sloughmobileapps/public_html/humnlibry.sloughmobileapps.co.uk/@core/Modules/Subscription/Resources/views/backend/edit-subscription.blade.php ENDPATH**/ ?>