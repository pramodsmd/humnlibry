<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Edit Job Post')); ?>

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
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/bootstrap-tagsinput.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/common/css/flatpickr.min.css')); ?>">
    <style>

        .single-dashboard-input {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: flex-start;
            -ms-flex-align: flex-start;
            align-items: flex-start;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            width: 100%;
            gap: 24px;
        }

        @media (min-width: 320px) and (max-width: 991.98px) {
            .single-dashboard-input {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                gap: unset;
            }
        }

        @media only screen and (max-width: 575.98px) {
            .single-dashboard-input {
                display: block;
            }
        }

        .single-dashboard-input .single-info-input {
            width: 100%;
        }

        .single-dashboard-input .single-info-input .info-title {
            display: block;
            font-family: var(--heading-font);
            color: var(--heading-color);
            font-size: 16px;
            font-weight: 600;
            line-height: 26px;
            margin-bottom: 7px;
        }

        .single-dashboard-input .single-info-input .form--control {
            font-size: 14px;
            line-height: 22px;
            color: var(--light-color);
            height: 60px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            padding: 13px 20px;
            width: 100%;
        }

        .single-dashboard-input .single-info-input .form--control::-webkit-input-placeholder {
            font-size: 14px;
            color: var(--extra-light-color);
        }

        .single-dashboard-input .single-info-input .form--control::-moz-placeholder {
            font-size: 14px;
            color: var(--extra-light-color);
        }

        .single-dashboard-input .single-info-input .form--control:-ms-input-placeholder {
            font-size: 14px;
            color: var(--extra-light-color);
        }

        .single-dashboard-input .single-info-input .form--control::-ms-input-placeholder {
            font-size: 14px;
            color: var(--extra-light-color);
        }

        .single-dashboard-input .single-info-input .form--control::placeholder {
            font-size: 14px;
            color: var(--extra-light-color);
        }

        .single-dashboard-input .single-info-input .textarea--form {
            padding: 20px;
            height: 162px;
        }
        .online_checkbox__title {
            color: var(--heading-color);
            font-size: 16px;
            font-weight: 700;
        }
    </style>
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

                <div class="row">
                    <div class="col-lg-6">
                        <div class="dashboard-settings margin-top-40">
                            <h4 class="dashboards-title"> <?php echo e(__('Edit Job Post')); ?> </h4>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="dashboard-settings margin-top-40">
                            <strong class="online_checkbox__title"><?php if($job->is_job_online == 1): ?> <?php echo e(__('Job Type: Online')); ?> <?php else: ?> <?php echo e(__('Job Type: Offline')); ?> <?php endif; ?></strong>
                            <label class="custom_switch" for="check_if_job_is_online">
                                <input class="switch_input service_on_off_btn" id="check_if_job_is_online" type="checkbox" <?php if($job->is_job_online == 1): ?> checked <?php endif; ?> >
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <form action="<?php echo e(route('buyer.edit.job',$job->id)); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-xxl-6">
                        <div class="single-settings">

                                <div class="single-dashboard-input mt-2">
                                    <div class="single-info-input">
                                        <label for="title" class="info-title"> <?php echo e(__('Job Title*')); ?> </label>
                                        <input class="form--control" value="<?php echo e($job->title); ?>" name="title" id="title" type="text" placeholder="<?php echo e(__('Add title')); ?>">
                                    </div>
                                </div>

                                <div class="single-dashboard-input mt-2">
                                    <div class="single-dashboard-input">
                                        <div class="single-info-input margin-top-30 permalink_label">
                                            <label for="title" class="info-title text-dark"> <?php echo e(__('Permalink*')); ?> </label>
                                            <span id="slug_show" class="display-inline"><?php echo e(url('/job/details/'.$job->slug)); ?></span>
                                            <span id="slug_edit" class="display-inline"></span>
                                            <button class="btn btn-warning btn-sm slug_edit_button">  <i class="las la-edit"></i> </button>

                                            <input class="form--control service_slug" name="slug" value="<?php echo e($job->slug); ?>" id="slug" style="display: none" type="text">
                                            <button class="btn btn-info btn-sm slug_update_button mt-2" style="display: none"><?php echo e(__('Update')); ?></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-dashboard-input mt-2">
                                    <div class="single-info-input">
                                        <label for="price" class="info-title"> <?php echo e(__('Budget')); ?> </label>
                                        <input class="form--control" value="<?php echo e($job->price); ?>" name="price" id="price" type="number" placeholder="<?php echo e(__('Add Price')); ?>">
                                    </div>
                                    <div class="single-info-input">
                                        <label for="dead_line" class="info-title"> <?php echo e(__('Deadline to Apply for this job')); ?> </label>
                                        <input class="form--control" value="<?php echo e($job->dead_line); ?>" name="dead_line" id="dead_line" type="text" placeholder="<?php echo e(__('Dead Line')); ?>">
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="col-xxl-6">
                        <div class="single-settings">
                                <?php echo csrf_field(); ?>
                                <div class="single-dashboard-input">
                                    <div class="single-info-input margin-top-30">
                                        <label for="category" class="info-title"> <?php echo e(__('Select Category*')); ?> </label>
                                        <select name="category" id="category">
                                            <option value=""><?php echo e(__('Select Category')); ?></option>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($cat->id); ?>" <?php if($job->category_id === $cat->id): ?> selected <?php endif; ?>><?php echo e($cat->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="single-info-input margin-top-30 sub_category_wrapper">
                                        <label for="subcategory" class="info-title"> <?php echo e(__('Select Subcategory*')); ?> </label>
                                        <select  name="subcategory" id="subcategory" class="subcategory">
                                            <option value="<?php echo e($job->subcategory_id); ?>"><?php echo e(optional($job->sub_category)->name); ?></option>
                                        </select>
                                    </div>

                                    <div class="single-info-input margin-top-30 child_category_wrapper">
                                        <label for="subcategory" class="info-title"> <?php echo e(__('Select Child Category*')); ?> </label>
                                        <select name="child_category" id="child_category">
                                            <option <?php if(!empty( $job->child_category_id)): ?> value="<?php echo e($job->child_category_id); ?>"  <?php else: ?> value="" <?php endif; ?>><?php echo e(optional($job->child_category)->name); ?></option>
                                        </select>

                                    </div>

                                </div>
                                <?php if($job->is_job_online === 0): ?>
                                    <div class="single-dashboard-input show_hide_job_for_online_offline mt-3">
                                        <div class="single-info-input">
                                            <label for="job_island" class="info-title"> <?php echo e(__('Select Country*')); ?> </label>
                                            <select name="country_id" id="country_id">
                                                <option value=""><?php echo e(__('Select Country')); ?></option>
                                                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($country->id); ?>" <?php if($job->country_id === $country->id): ?> selected <?php endif; ?>><?php echo e($country->country); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <small class="text-danger"><?php echo e(__('Country which has city only show.')); ?></small>
                                        </div>
                                        <div class="single-info-input">
                                            <label for="city_id" class="info-title"> <?php echo e(__('Select City*')); ?> </label>
                                            <select  name="city_id" id="city_id" class="city">
                                                <option value="<?php echo e($job->city_id); ?>"><?php echo e(optional($job->city)->service_city); ?></option>
                                            </select>
                                        </div>
                                    </div>
                              <?php else: ?>
                                <div class="single-dashboard-input show_hide_job_for_online_offline">
                                    <div class="single-info-input margin-top-30">
                                        <label for="job_island" class="info-title"> <?php echo e(__('Select Country')); ?> <span class="text-danger">*</span> </label>
                                        <select name="country_id" id="country_id">
                                            <option value=""><?php echo e(__('Select Country')); ?></option>
                                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($country->id); ?>"><?php echo e($country->country); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <small class="text-danger"><?php echo e(__('Country which has city only show.')); ?></small>
                                    </div>
                                    <div class="single-info-input margin-top-30">
                                        <label for="city_id" class="info-title"> <?php echo e(__('Select City')); ?> <span class="text-danger">*</span> </label>
                                        <select  name="city_id" id="city_id" class="city"></select>
                                    </div>
                                </div>
                                <?php endif; ?>
                            <input type="hidden" name="is_job_online" id="is_job_online" value="<?php echo e($job->is_job_online); ?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xxl-6">
                        <div class="single-dashboard-input">
                            <div class="single-info-input margin-top-30">
                                <label for="description" class="info-title"> <?php echo e(__('Job Description*')); ?> </label>
                                <textarea class="form--control textarea--form summernote" name="description" placeholder="<?php echo e(__('Type Description')); ?>"><?php echo e($job->description); ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xxl-6">
                        <div class="single-dashboard-input mt-3">
                            <div class="single-info-input margin-top-30">
                                <div class="form-group">
                                    <div class="media-upload-btn-wrapper">
                                        <div class="img-wrap">
                                            <?php echo render_image_markup_by_attachment_id($job->image,'','thumb'); ?>

                                        </div>
                                        <input type="hidden" id="image" name="image"
                                               value="<?php echo e($job->image); ?>">
                                        <button type="button" class="btn btn-info media_upload_form_btn"
                                                data-bs-btntitle="<?php echo e(__('Select Image')); ?>"
                                                data-bs-modaltitle="<?php echo e(__('Upload Image')); ?>"
                                                data-bs-toggle="modal"
                                                data-bs-target="#media_upload_modal">
                                            <?php echo e('Upload Job Image'); ?>

                                        </button>
                                    </div>
                                    <small class="text-center"><?php echo e(__('image format: jpg,jpeg,png')); ?></small>
                                    <br>
                                    <small class="text-center"><?php echo e(__('and recommended size 730x497')); ?></small>
                                </div>
                            </div>
                            <div class="single-info-input">
                                <div class="btn-wrapper margin-top-40" style="text-align:end">
                                    <button type="submit" class="dashboard_table__title__btn btn-bg-1 radius-5" style="border: none"> <?php echo e(__('Save Changes')); ?> </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                </form>

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
        <?php $__env->stopSection(); ?>
        <?php $__env->startSection('scripts'); ?>
            <script src="<?php echo e(asset('assets/backend/js/bootstrap-tagsinput.js')); ?>"></script>
            <script src="<?php echo e(asset('assets/common/js/flatpickr.js')); ?>"></script>
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

                        //media modal hide
                        $(document).on('click', '.close', function (e) {
                            e.preventDefault();
                            $("#media_upload_modal").modal('hide');
                        });

                        $("#dead_line").flatpickr({
                            altInput: true,
                            altFormat: "F j, Y",
                            dateFormat: "Y-m-d",
                        });

                        //Permalink Code
                        $('#slug_show').css('color', 'blue');
                        //Slug Edit Code
                        $(document).on('click', '.slug_edit_button', function (e) {
                            e.preventDefault();
                            $('.service_slug').show();
                            $(this).hide();
                            $('.slug_update_button').show();
                        });

                        function converToSlug(slug){
                            let finalSlug = slug.replace(/[^a-zA-Z0-9]/g, ' ');
                            //remove multiple space to single
                            finalSlug = slug.replace(/  +/g, ' ');
                            // remove all white spaces single or multiple spaces
                            finalSlug = slug.replace(/\s/g, '-').toLowerCase().replace(/[^\w-]+/g, '-');
                            return finalSlug;
                        }

                        //Slug Update Code
                        $(document).on('click', '.slug_update_button', function (e) {
                            e.preventDefault();
                            $(this).hide();
                            $('.slug_edit_button').show();
                            var update_input = $('.service_slug').val();
                            var slug = converToSlug(update_input);
                            var url = `<?php echo e(url('/job/details')); ?>/` + slug;
                            $('#slug_show').text(url);
                            $('.service_slug').hide();
                        });

                        //get subcategory while change category
                        $('#category').on('change',function(){
                            let category_id = $(this).val();
                            $.ajax({
                                method:'post',
                                url:"<?php echo e(route('buyer.subcategory')); ?>",
                                data:{category_id:category_id},
                                success:function(res){
                                    if(res.status=='success'){
                                        let alloptions = "<option value=''><?php echo e(__('Select Sub Category')); ?></option>";
                                        let allSubCategory = res.sub_categories;
                                        $.each(allSubCategory,function(index,value){
                                            alloptions +="<option value='" + value.id + "'>" + value.name + "</option>";
                                        });
                                        $(".subcategory").html(alloptions);
                                        $('#subcategory').niceSelect('update');
                                    }
                                }
                            })
                        })

                        $('#city_id').select2({
                            placeholder: `<?php echo e(__('search city')); ?>`,
                            ajax: {
                                type: 'get',
                                url: "<?php echo e(route('user.country.city.ajax.search')); ?>",
                                dataType: 'json',
                                data: function (params) {
                                    let country_id = $("#country_id").val();
                                    return {
                                        q: params.term, // search term
                                        country_id: country_id,
                                    };
                                },
                                delay: 250,
                                processResults: function (response) {
                                    console.log(response.data);
                                    return {
                                        results:  $.map(response, function (item) {
                                            return {
                                                text: item.service_city,
                                                id: item.id
                                            }
                                        })
                                    };
                                },
                                cache: true
                            }
                        });

                        // get job sub-category and child-category
                        $(document).on('change','#subcategory', function() {
                            var sub_cat_id = $(this).val();
                            $.ajax({
                                method: 'post',
                                url: "<?php echo e(route('buyer.child_category')); ?>",
                                data: {
                                    sub_cat_id: sub_cat_id
                                },
                                success: function(res) {

                                    if (res.status == 'success') {
                                        var alloptions = "<option value=''><?php echo e(__('Select Child Category')); ?></option>";
                                        var allList = "<li data-value='' class='option'><?php echo e(__('Select Child Category')); ?></li>";
                                        var allChildCategory = res.child_category;

                                        $.each(allChildCategory, function(index, value) {
                                            alloptions += "<option value='" + value.id +
                                                "'>" + value.name + "</option>";
                                            allList += "<li class='option' data-value='" + value.id +
                                                "'>" + value.name + "</li>";
                                        });

                                        $("#child_category").html(alloptions);
                                        $(".child_category_wrapper ul.list").html(allList);
                                        $(".child_category_wrapper").find(".current").html("Select Child Category");
                                    }
                                }
                            })
                        })

                        // new add
                        $('#city_id').select2({
                            placeholder: `<?php echo e(__('search city')); ?>`,
                            ajax: {
                                type: 'get',
                                url: "<?php echo e(route('user.country.city.ajax.search')); ?>",
                                dataType: 'json',
                                data: function (params) {
                                    let country_id = $("#country_id").val();
                                    return {
                                        q: params.term, // search term
                                        country_id: country_id,
                                    };
                                },
                                delay: 250,
                                processResults: function (response) {
                                    console.log(response.data);
                                    return {
                                        results:  $.map(response, function (item) {
                                            return {
                                                text: item.service_city,
                                                id: item.id
                                            }
                                        })
                                    };
                                },
                                cache: true
                            }
                        });

                        //get city while change country
                        $('#country_id').on('change',function(){
                            let country_id = $(this).val();
                            $.ajax({
                                method:'post',
                                url:"<?php echo e(route('buyer.city')); ?>",
                                data:{country_id:country_id},
                                success:function(res){
                                    if(res.status=='success'){
                                        let all_options = '';
                                        let all_cities= res.cities;
                                        $.each(all_cities,function(index,value){
                                            all_options +="<option value='" + value.id + "'>" + value.service_city + "</option>";
                                        });
                                        $(".city").html(all_options);
                                        $('#city_id').niceSelect('update');
                                    }
                                }
                            })
                        });

                        //  if job is online country and city default hide
                        if ($('#check_if_job_is_online').is(':checked')) {
                            $('.show_hide_job_for_online_offline').hide();
                        }

                        // job post online and offline change
                        $(document).on('change','#check_if_job_is_online',function(e) {
                            e.preventDefault();
                            if ($(this).is(':checked')) {
                                let is_job_online = 1;
                                $('#is_job_online').val(is_job_online);
                                $('.show_hide_job_for_online_offline').hide();
                            }else{
                                let is_job_online = 0;
                                $('#is_job_online').val(is_job_online);
                                $('.show_hide_job_for_online_offline').show();
                            }
                        });

                    })
                })(jQuery);

            </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.user.buyer.buyer-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bytesed/public_html/laravel/qixer/@core/Modules/JobPost/Resources/views/frontend/buyer/partials/edit-job-two.blade.php ENDPATH**/ ?>