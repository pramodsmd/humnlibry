
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Add New Category')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
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
    <style>
        .left-side-meta{
            /*margin-left: 100px;*/
        }
    </style>
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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="header-wrap d-flex justify-content-between">
                            <div class="left-content">
                                <h4 class="header-title"><?php echo e(__('Add New Category')); ?>   </h4>
                            </div>
                            <div class="right-content">
                                <a class="btn btn-info btn-sm" href="<?php echo e(route('admin.category')); ?>"><?php echo e(__('All Categories')); ?></a>
                            </div>
                        </div>
                        <form action="<?php echo e(route('admin.category.new')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="tab-content margin-top-40">
                                
                                <div class="form-group">
                                    <label for="name"><?php echo e(__('Name')); ?></label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="<?php echo e(__('Name')); ?>">
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(__('Description')); ?></label>
                                    <input type="hidden" name="description">
                                    <div class="summernote"></div>
                                </div>

                                <div class="form-group permalink_label">
                                    <label class="text-dark"><?php echo e(__('Permalink * : ')); ?>

                                        <span id="slug_show" class="display-inline"></span>
                                        <span id="slug_edit" class="display-inline">
                                             <button class="btn btn-warning btn-sm slug_edit_button"> <i class="fas fa-edit"></i> </button>
    
                                            <input type="text" name="slug" class="form-control category_slug mt-2" style="display: none">
                                              <button class="btn btn-info btn-sm slug_update_button mt-2" style="display: none"><?php echo e(__('Update')); ?></button>
                                        </span>
                                    </label>
                                </div>

                                 <div class="form-group">
                                    <label for="icon" class="d-block"><?php echo e(__('Category Icon')); ?></label>
                                    <div class="btn-group icon">
                                        <button type="button" class="btn btn-primary iconpicker-component">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </button>
                                        <button type="button" class="icp icp-dd btn btn-primary dropdown-toggle"
                                                data-selected="fas fa-phone" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only"><?php echo e(__('Toggle Dropdown')); ?></span>
                                        </button>
                                        <div class="dropdown-menu"></div>
                                    </div>
                                    <input type="hidden" class="form-control" name="icon" id="icon" value="fas fa-exclamation-triangle">
                                </div> 

                                <div class="form-group">
                                    <label for="image"><?php echo e(__('Upload Category Image')); ?></label>
                                    <div class="media-upload-btn-wrapper">
                                        <div class="img-wrap"></div>
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
                                    <label for="image"><?php echo e(__('Mobile Icon Image')); ?></label>
                                    <div class="media-upload-btn-wrapper">
                                        <div class="img-wrap"></div>
                                        <input type="hidden" name="mobile_icon">
                                        <button type="button" class="btn btn-info media_upload_form_btn"
                                                data-btntitle="<?php echo e(__('Select Image')); ?>"
                                                data-modaltitle="<?php echo e(__('Upload Image')); ?>" data-toggle="modal"
                                                data-target="#media_upload_modal">
                                            <?php echo e(__('Upload Image')); ?>

                                        </button>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body meta">
                                                <h5 class="header-title"><?php echo e(__('Meta Section')); ?></h5>
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-3">
                                                        <div class="nav flex-column nav-pills" id="v-pills-tab"
                                                             role="tablist" aria-orientation="vertical">
                                                            <a class="nav-link active" id="v-pills-home-tab"
                                                               data-toggle="pill" href="#v-pills-home" role="tab"
                                                               aria-controls="v-pills-home"
                                                               aria-selected="true"><?php echo e(__('Category Meta')); ?></a>

                                                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill"
                                                               href="#v-pills-profile" role="tab"
                                                               aria-controls="v-pills-profile"
                                                               aria-selected="false"><?php echo e(__('Facebook Meta')); ?></a>

                                                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill"
                                                               href="#v-pills-messages" role="tab"
                                                               aria-controls="v-pills-messages"
                                                               aria-selected="false"><?php echo e(__('Twitter Meta')); ?></a>

                                                        </div>
                                                    </div>
                                                    <div class="col-xl-8 col-lg-9">
                                                        <div class="tab-content meta-content left-side-meta" id="v-pills-tabContent">
                                                            <!-- category meta section start -->
                                                            <div class="tab-pane fade show active" id="v-pills-home"
                                                                 role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                                <div class="form-group">
                                                                    <label for="title"><?php echo e(__('Meta Title')); ?></label>
                                                                    <input type="text" class="form-control" name="meta_title" value="<?php echo e(old('meta_title')); ?>" placeholder="<?php echo e(__('Title')); ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="slug"><?php echo e(__('Meta Tags')); ?></label>
                                                                    <input type="text" class="form-control" name="meta_tags" value="<?php echo e(old('meta_tags')); ?>"
                                                                           placeholder="Slug" data-role="tagsinput">
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <label for="title"><?php echo e(__('Meta Description')); ?></label>
                                                                        <textarea name="meta_description" class="form-control max-height-140" cols="20"  rows="4"><?php echo e(old('meta_description')); ?></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- category meta section end -->
                                                            <!-- facebook meta section start -->
                                                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                                                 aria-labelledby="v-pills-profile-tab">
                                                                <div class="form-group">
                                                                    <label for="title"><?php echo e(__('Facebook Meta Title')); ?></label>
                                                                    <input type="text" class="form-control" data-role="tagsinput" value="<?php echo e(old('tagsinput')); ?>" name="facebook_meta_tags">
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <label for="title"><?php echo e(__('Facebook Meta Description')); ?></label>
                                                                        <textarea name="facebook_meta_description"
                                                                                  class="form-control max-height-140"
                                                                                  cols="20"
                                                                                  rows="4"><?php echo e(old('facebook_meta_description')); ?></textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="image"><?php echo e(__('Facebook Meta Image')); ?></label>
                                                                    <div class="media-upload-btn-wrapper">
                                                                        <div class="img-wrap"></div>
                                                                        <input type="hidden" name="facebook_meta_image">
                                                                        <button type="button"
                                                                                class="btn btn-info media_upload_form_btn"
                                                                                data-btntitle="<?php echo e(__('Select Image')); ?>"
                                                                                data-modaltitle="<?php echo e(__('Upload Image')); ?>"
                                                                                data-toggle="modal"
                                                                                data-target="#media_upload_modal">
                                                                            <?php echo e(__('Upload Image')); ?>

                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- facebook meta section end -->
                                                            <!-- twitter meta section start -->
                                                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                                                 aria-labelledby="v-pills-messages-tab">
                                                                <div class="form-group">
                                                                    <label for="title"><?php echo e(__('Twitter Meta Title')); ?></label>
                                                                    <input type="text" class="form-control" data-role="tagsinput"
                                                                           name="twitter_meta_tags">
                                                                </div>

                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <label for="title"><?php echo e(__('Twitter Meta Description')); ?></label>
                                                                        <textarea name="twitter_meta_description"
                                                                                  class="form-control max-height-140"
                                                                                  cols="20"
                                                                                  rows="4"></textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="image"><?php echo e(__('Twitter Meta Image')); ?></label>
                                                                    <div class="media-upload-btn-wrapper">
                                                                        <div class="img-wrap"></div>
                                                                        <input type="hidden" name="twitter_meta_image">
                                                                        <button type="button"
                                                                                class="btn btn-info media_upload_form_btn"
                                                                                data-btntitle="<?php echo e(__('Select Image')); ?>"
                                                                                data-modaltitle="<?php echo e(__('Upload Image')); ?>"
                                                                                data-toggle="modal"
                                                                                data-target="#media_upload_modal">
                                                                            <?php echo e(__('Upload Image')); ?>

                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- twitter meta section end -->

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
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

        $(document).ready(function () {
            //Permalink Code
            $('.permalink_label').hide();
            $(document).on('keyup', '#name', function (e) {
                var slug = converToSlug($(this).val());
                var url = "<?php echo e(url('/service-list/category/')); ?>/" + slug;
                $('.permalink_label').show();
                var data = $('#slug_show').text(url).css('color', 'blue');
                $('.category_slug').val(slug);

            });
            function converToSlug(slug){
               let finalSlug = slug.replace(/[^a-zA-Z0-9]/g, ' ');
                //remove multiple space to single
                finalSlug = slug.replace(/  +/g, ' ');
                // remove all white spaces single or multiple spaces
                finalSlug = slug.replace(/\s/g, '-').toLowerCase().replace(/[^\w-]+/g, '-');
                return finalSlug;
            }
            //Slug Edit Code
            $(document).on('click', '.slug_edit_button', function (e) {
                e.preventDefault();
                $('.category_slug').show();
                $(this).hide();
                $('.slug_update_button').show();
            });

            //Slug Update Code
            $(document).on('click', '.slug_update_button', function (e) {
                e.preventDefault();
                $(this).hide();
                $('.slug_edit_button').show();
                var update_input = $('.category_slug').val();
                var slug = converToSlug(update_input);
                var url = `<?php echo e(url('/service-list/category/')); ?>/` + slug;
                $('#slug_show').text(url);
                $('.category_slug').val(slug)
                $('.category_slug').hide();
            });

        });
    })(jQuery)
</script>
<?php $__env->stopSection(); ?>  


<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bytesed/public_html/laravel/qixer/@core/resources/views/backend/pages/category/add_category.blade.php ENDPATH**/ ?>