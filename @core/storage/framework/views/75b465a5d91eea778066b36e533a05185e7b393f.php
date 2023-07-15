<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('All Jobs')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <style>
        .budget_style{
            font-size: 18px;
            font-weight: 400;
        }
        .text_max_show{
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2; /* number of lines to show */
            line-clamp: 2;
            -webkit-box-orient: vertical;
        }
        .dashboard_jobPost__views__item{
            font-size: 14px;
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

                <!-- search section start-->
                <div class="dashboard__inner__item dashboard_border padding-20 radius-10 bg-white">
                    <div class="dashboard__wallet">
                        <form action="<?php echo e(route('buyer.all.jobs')); ?>" method="GET">
                            <div class="dashboard__headerGlobal__flex">
                                <div class="dashboard__headerGlobal__content">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <h4 class="dashboard_table__title"><?php echo e(__('Search Job Module')); ?></h4> <i class="las la-angle-down search_by_all"></i>
                                    </button>
                                </div>
                                <div class="dashboard__headerGlobal__btn">
                                    <div class="btn-wrapper">
                                        <button href="#" class="dashboard_table__title__btn btn-bg-1 radius-5" type="submit">
                                            <i class="fa-solid fa-magnifying-glass"></i> <?php echo e(__('Search')); ?></button>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div id="collapseOne" class="accordion-collapse collapse
                                <?php if(request()->get('job_id')): ?>  show
                                <?php elseif(request()->get('job_status')): ?> show
                                <?php elseif(request()->get('job_date')): ?> show
                                <?php elseif(request()->get('job_budget')): ?> show
                                <?php elseif(request()->get('job_type')): ?> show
                                <?php elseif(request()->get('job_title')): ?> show
                                <?php endif; ?>
                             " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="single-settings">
                                                    <div class="single-dashboard-input">
                                                        <div class="row g-4 mt-3">
                                                            <div class="col-lg-4 col-sm-6">
                                                                <div class="single-info-input">
                                                                    <label for="job_id" class="info-title"> <?php echo e(__('Job ID')); ?> </label>
                                                                    <input class="form--control" name="job_id" value="<?php echo e(request()->get('job_id')); ?>" type="text" placeholder="<?php echo e(__('Job ID')); ?>">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-sm-6">
                                                                <div class="single-info-input">
                                                                    <label for="job_title" class="info-title"> <?php echo e(__('Job Title')); ?> </label>
                                                                    <input class="form--control" name="job_title" value="<?php echo e(request()->get('job_title')); ?>" type="text" placeholder="<?php echo e(__('Job Title')); ?>">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-sm-6">
                                                                <div class="single-info-input">
                                                                    <label for="job_budget" class="info-title"> <?php echo e(__('Job Budget')); ?> </label>
                                                                    <input class="form--control" name="job_budget" value="<?php echo e(request()->get('job_budget')); ?>" type="text" placeholder="<?php echo e(__('Job Budget')); ?>">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-sm-6">
                                                                <div class="single-info-input">
                                                                    <label for="status" class="info-title"> <?php echo e(__('Job Status')); ?> </label>
                                                                    <select name="job_status">
                                                                        <option value=""><?php echo e(__('Select Status')); ?></option>
                                                                        <option value="active" <?php if(request()->get('job_status') == 'active'): ?> selected <?php endif; ?>><?php echo e(__('Active')); ?></option>
                                                                        <option value="inactive" <?php if(request()->get('job_status') == 'inactive'): ?> selected <?php endif; ?>><?php echo e(__('Inactive')); ?></option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-sm-6">
                                                                <div class="single-info-input">
                                                                    <label for="status" class="info-title"> <?php echo e(__('Job Type')); ?> </label>
                                                                    <select name="job_type">
                                                                        <option value=""><?php echo e(__('Select Job Type')); ?></option>
                                                                        <option value="online" <?php if(request()->get('job_type') == 'online'): ?> selected <?php endif; ?>><?php echo e(__('Online')); ?></option>
                                                                        <option value="offline" <?php if(request()->get('job_type') == 'offline'): ?> selected <?php endif; ?>><?php echo e(__('Offline')); ?></option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-sm-6">
                                                                <div class="single-info-input">
                                                                    <label for="job_date" class="info-title"> <?php echo e(__('Created Date Range')); ?> </label>
                                                                    <input class="form--control flatpickr_input" value="<?php echo e(request()->get('job_date')); ?>" name="job_date" type="text" value="<?php echo e(request()->get('order_date')); ?>" placeholder="<?php echo e(__('Created Date Range')); ?>">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--search section end-->

                <div class="dashboard__headerContents">
                    <div class="dashboard__headerContents__flex">
                        <div class="dashboard__headerContents__left">
                            <h4 class="dashboard__headerContents__title"><?php echo e(__('All Jobs')); ?></h4>
                            <div class="notice-board">
                                <p class="text-secondary"><?php echo e(__('You can not delete any job if it has any order & jobs only published if the admin change the status inactive to active')); ?></p>
                            </div>
                        </div>
                        <div class="btn-wrapper">
                            <a href="<?php echo e(route('buyer.add.job')); ?>" class="dashboard_table__title__btn btn-bg-1 radius-5 ">
                                <i class="fa-solid fa-plus"></i> <?php echo e(__('Create Jobs' )); ?></a>
                        </div>
                    </div>
                </div>

                <?php if($jobs->count() > 0): ?>
                <div class="row g-4">
                     <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xxl-6 col-lg-12">
                        <div class="dashboard__inner__item dashboard_border padding-20 radius-10 bg-white">
                            <div class="dashboard_jobPost">
                                <div class="dashboard_jobPost__flex">
                                    <div class="dashboard_jobPost__author">
                                        <div class="dashboard_jobPost__author__thumb">
                                            <?php if(!empty($data->image)): ?>
                                                <?php echo render_image_markup_by_attachment_id($data->image,'','thumb'); ?>                                                
                                            <?php else: ?>
                                                <img src="<?php echo e(asset('assets/uploads/no-image.png')); ?>" height="120" width="120">
                                            <?php endif; ?>
                                        </div>
                                        <div class="dashboard_jobPost__author__contents">
                                            <h4 class="dashboard_jobPost__author__title text_max_show"><a target="_blank" href="<?php echo e(route('job.post.details',$data->slug)); ?>"><?php echo e($data->title); ?></a></h4>
                                            <h6 class="dashboard_jobPost__author__price mt-2">
                                                <span class="text-dark budget_style"><?php echo e(__('Budget:')); ?></span><?php echo e(amount_with_currency_symbol($data->price)); ?>

                                            </h6>
                                            <div class="dashboard_jobPost__views mt-2">
                                                <div class="dashboard_jobPost__views__item">
                                                    <span class="dashboard_jobPost__views__para"><i class="fa-regular fa-eye"></i> <?php echo e(__('Views')); ?></span>
                                                    <span class="dashboard_jobPost__views__count"><?php echo e($data->view); ?></span>
                                                    <span class="dashboard_jobPost__views__para"><i class="fa-solid fa-list-check"></i> <?php echo e(__('Seller Offered')); ?></span>
                                                    <span class="dashboard_jobPost__views__count"><?php echo e(optional($data->job_request)->count()); ?></span>
                                                </div>


                                                <div class="dashboard_jobPost__views__item">
                                                    <span class="dashboard_jobPost__views__para"> <?php echo e(__('Status:')); ?></span>
                                                    <?php if($data->status == 1): ?>
                                                        <strong class="replaceText"> <?php echo e(__('Active')); ?></strong>
                                                    <?php else: ?>
                                                        <strong class="replaceText text-danger"><?php echo e(__('Inactive')); ?></strong>
                                                    <?php endif; ?>
                                                </div>

                                                <div class="dashboard_jobPost__views__item">
                                                    <span class="dashboard_jobPost__views__para"> <?php echo e(__('Job Type:')); ?></span>
                                                    <?php if($data->is_job_online == 1): ?>
                                                        <strong class="replaceText text-success"> <?php echo e(__('Online')); ?></strong>
                                                    <?php else: ?>
                                                        <strong class="replaceText text-dark"><?php echo e(__('Offline')); ?></strong>
                                                    <?php endif; ?>
                                                </div>

                                                <div class="dashboard_jobPost__views__item">
                                                    <?php $is_job_hired = Modules\JobPost\Entities\JobRequest::where('job_post_id',$data->id)->where('is_hired',1)->count();  ?>
                                                    <?php if($is_job_hired >=1 ): ?> <span class="btn btn-danger"><?php echo e(__('Hired')); ?></span> <?php endif; ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="dashboard_jobPost__switch switchParent">
                                        <span class="dashboard_jobPost__switch__para switchPara"><?php echo e(__('Job is')); ?>

                                            <?php if($data->is_job_on == 1): ?>
                                                <strong class="replaceText"><?php echo e(__('Active')); ?></strong>
                                            <?php else: ?>
                                                <strong class="replaceText"><?php echo e(__('Close')); ?></strong>
                                            <?php endif; ?>
                                        </span>
                                            <?php if($data->is_job_on==1): ?>
                                            <label class="custom_switch" for="switch2_<?php echo e($data->id); ?>">
                                            <input class="switch_input service_on_off_btn" id="switch2_<?php echo e($data->id); ?>" data-id="<?php echo e($data->id); ?>"  type="checkbox"
                                                   <?php if($data->is_job_on == 1): ?> checked <?php endif; ?>>
                                            <span class="slider round"></span>
                                            </label>
                                            <?php else: ?>
                                            <label class="custom_switch" for="switch1_<?php echo e($data->id); ?>">
                                                <input class="switch_input service_on_off_btn" id="switch1_<?php echo e($data->id); ?>" data-id="<?php echo e($data->id); ?>"  type="checkbox"
                                                       <?php if($data->is_job_on == 1): ?> checked <?php endif; ?> >
                                                <span class="slider round"></span>
                                            </label>
                                         <?php endif; ?>

                                    </div>

                                    <div class="dashboard_table__main__actions">
                                        <a href="<?php echo e(route('job.post.details',$data->slug)); ?>" title="<?php echo e(__('View Job Post')); ?>" class="icon"><i class="fa-regular fa-eye"></i></a>
                                        <a href="<?php echo e(route('buyer.edit.job',$data->id)); ?>" title="<?php echo e(__('Edit Job Post')); ?>" class="icon edit edit_priority_modal" >
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                        <?php if(optional($data->orders)->count() == 0): ?>
                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buyer-delete-popup-two','data' => ['url' => route('buyer.job.delete',$data->id)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buyer-delete-popup-two'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('buyer.job.delete',$data->id))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="blog-pagination margin-top-55">
                        <div class="custom-pagination mt-4 mt-lg-5">
                            <?php echo $jobs->links(); ?>

                        </div>
                    </div>
                </div>

                <?php else: ?>
                    <div class="chat_wrapper__details__inner__chat__contents">
                        <p class="no_data_found_for_buyer_seller_panel">
                            <?php echo e(__('No Jobs Created Yet')); ?>

                        </p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
 <?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
            <script src="<?php echo e(asset('assets/backend/js/sweetalert2.js')); ?>"></script>
            <script>
                (function($){
                    "use strict";

                    $(document).ready(function(){

                        // for date range
                        $('.flatpickr_input').flatpickr({
                            altFormat: "invisible",
                            altInput: false,
                            mode: "range",
                        });

                        $(document).on('change','.service_on_off_btn',function(e){
                            e.preventDefault();
                            if($(this).is(':checked')){
                                let job_post_id = $(this).data('id');
                                $.ajax({
                                    method:'post',
                                    url:"<?php echo e(route('buyer.job.on.off')); ?>",
                                    data:{job_post_id:job_post_id},
                                    success:function(res){
                                        if(res.status=='success'){
                                            toastr.options = {
                                                "closeButton": true,
                                                "debug": false,
                                                "newestOnTop": false,
                                                "progressBar": true,
                                                "preventDuplicates": true,
                                                "onclick": null,
                                                "showDuration": "100",
                                                "hideDuration": "1000",
                                                "timeOut": "5000",
                                                "extendedTimeOut": "1000",
                                                "showEasing": "swing",
                                                "hideEasing": "linear",
                                                "showMethod": "show",
                                                "hideMethod": "hide"
                                            };
                                            toastr.success('Job On/Off Change Success---');
                                        }
                                    }
                                });
                            }else{
                                let job_post_id = $(this).data('id');
                                $.ajax({
                                    method:'post',
                                    url:"<?php echo e(route('buyer.job.on.off')); ?>",
                                    data:{job_post_id:job_post_id},
                                    success:function(res){
                                        if(res.status=='success'){
                                            toastr.options = {
                                                "closeButton": true,
                                                "debug": false,
                                                "newestOnTop": false,
                                                "progressBar": true,
                                                "preventDuplicates": true,
                                                "onclick": null,
                                                "showDuration": "100",
                                                "hideDuration": "1000",
                                                "timeOut": "5000",
                                                "extendedTimeOut": "1000",
                                                "showEasing": "swing",
                                                "hideEasing": "linear",
                                                "showMethod": "show",
                                                "hideMethod": "hide"
                                            };
                                            toastr.success('Job On/Off Change Success---');
                                        }
                                    }
                                });
                            }

                        });


                        $(document).on('click','.swal_delete_button',function(e){
                            e.preventDefault();
                            Swal.fire({
                                title: '<?php echo e(__("Are you sure?")); ?>',
                                text: '<?php echo e(__("You would not be able to revert this item!")); ?>',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, delete it!'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    $(this).next().find('.swal_form_submit_btn').trigger('click');
                                }
                            });
                        });

                    });

                })(jQuery);
 </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.user.buyer.buyer-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bytesed/public_html/laravel/qixer/@core/Modules/JobPost/Resources/views/frontend/buyer/partials/all-jobs-two.blade.php ENDPATH**/ ?>