@extends('frontend.user.buyer.buyer-master')
@section('site-title')
    {{__('Edit Job') }}
@endsection

@section('style')
    <x-summernote.css/>
    <x-media.css/>
    <link rel="stylesheet" href="{{asset('assets/backend/css/bootstrap-tagsinput.css')}}">
    <link rel="stylesheet" href="{{asset('assets/common/css/flatpickr.min.css')}}">
    <style>

    </style>
@endsection
@section('content')

    <x-frontend.seller-buyer-preloader/>

    <!-- Dashboard area Starts -->
    <div class="body-overlay"></div>
    <div class="dashboard-area dashboard-padding">
        <div class="container-fluid">
            <div class="dashboard-contents-wrapper">
                <div class="dashboard-icon">
                    <div class="sidebar-icon">
                        <i class="las la-bars"></i>
                    </div>
                </div>
                @include('frontend.user.buyer.partials.sidebar')
                <div class="dashboard-right">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="dashboard-settings margin-top-40">
                                <h2 class="dashboards-title"> {{__('Edit Job Post')}} </h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="dashboard-settings margin-top-40">
{{--                                @dd($job->is_job_online)--}}
                                <strong>@if($job->is_job_online == 1) {{ __('Job Type: Online') }} @else {{ __('Job Type: Offline') }} @endif</strong>
                                <input class="custom-switch" id="check_if_job_is_online" type="checkbox" @if($job->is_job_online == 1) checked @endif />
                                <label class="switch-label" for="check_if_job_is_online"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 margin-top-30">
                            <div class="single-settings">
                                <div> <x-msg.error/> </div>
                                <form action="{{route('buyer.edit.job',$job->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="single-dashboard-input">
                                        <div class="single-info-input margin-top-30">
                                            <label for="category" class="info-title"> {{__('Select Category*')}} </label>
                                            <select name="category" id="category">
                                                <option value="">{{__('Select Category')}}</option>
                                                @foreach($categories as $cat)
                                                    <option value="{{ $cat->id }}" @if($job->category_id === $cat->id) selected @endif>{{ $cat->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="single-info-input margin-top-30 sub_category_wrapper">
                                            <label for="subcategory" class="info-title"> {{__('Select Subcategory*')}} </label>
                                            <select  name="subcategory" id="subcategory" class="subcategory">
                                                <option value="{{ $job->subcategory_id }}">{{ optional($job->sub_category)->name }}</option>
                                            </select>
                                        </div>

                                        <div class="single-info-input margin-top-30 child_category_wrapper">
                                            <label for="subcategory" class="info-title"> {{__('Select Child Category*')}} </label>
                                            <select name="child_category" id="child_category">
                                                <option @if(!empty( $job->child_category_id)) value="{{ $job->child_category_id }}"  @else value="" @endif>{{ optional($job->child_category)->name }}</option>
                                            </select>

                                        </div>

                                    </div>
                                    @if($job->is_job_online === 0)
                                    <div class="single-dashboard-input show_hide_job_for_online_offline">
                                        <div class="single-info-input margin-top-30">
                                            <label for="job_island" class="info-title"> {{__('Select Country*')}} </label>
                                            <select name="country_id" id="country_id">
                                                <option value="">{{__('Select Country')}}</option>
                                                @foreach($countries as $country)
                                                    <option value="{{ $country->id }}" @if($job->country_id === $country->id) selected @endif>{{ $country->country }}</option>
                                                @endforeach
                                            </select>
                                            <small class="text-danger">{{ __('Country which has city only show.') }}</small>
                                        </div>
                                        <div class="single-info-input margin-top-10">
                                            <label for="city_id" class="info-title"> {{__('Select City*')}} </label>
                                            <select  name="city_id" id="city_id" class="city">
                                                <option value="{{ $job->city_id }}">{{ optional($job->city)->service_city }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    @else
                                        <div class="single-dashboard-input show_hide_job_for_online_offline">
                                            <div class="single-info-input margin-top-30">
                                                <label for="job_island" class="info-title"> {{__('Select Country*')}} </label>
                                                <select name="country_id" id="country_id">
                                                    <option value="">{{__('Select Country')}}</option>
                                                    @foreach($countries as $country)
                                                        <option value="{{ $country->id }}">{{ $country->country }}</option>
                                                    @endforeach
                                                </select>
                                                <small class="text-danger">{{ __('Country which has city only show.') }}</small>
                                            </div>
                                            <div class="single-info-input margin-top-10">
                                                <label for="city_id" class="info-title"> {{__('Select City*')}} </label>
                                                <select  name="city_id" id="city_id" class="city"></select>
                                            </div>
                                        </div>
                                    @endif



                                    <input type="hidden" name="is_job_online" id="is_job_online" value="{{ $job->is_job_online }}">
                                    <div class="single-dashboard-input">
                                        <div class="single-info-input margin-top-30">
                                            <label for="title" class="info-title"> {{__('Job Title*')}} </label>
                                            <input class="form--control" value="{{ $job->title }}" name="title" id="title" type="text" placeholder="{{__('Add title')}}">
                                        </div>
                                        <div class="single-info-input margin-top-30">
                                            <label for="price" class="info-title"> {{__('Budget')}} </label>
                                            <input class="form--control" value="{{ $job->price }}" name="price" id="price" type="number" placeholder="{{__('Add Price')}}">
                                        </div>
                                    </div>

                                    <div class="single-dashboard-input">
                                        <div class="single-info-input margin-top-30 permalink_label">
                                            <label for="title" class="info-title text-dark"> {{__('Permalink*')}} </label>
                                            <span id="slug_show" class="display-inline">{{url('/job/details/'.$job->slug)}}</span>
                                            <span id="slug_edit" class="display-inline"></span>
                                            <button class="btn btn-warning btn-sm slug_edit_button">  <i class="las la-edit"></i> </button>

                                            <input class="form--control service_slug" name="slug" value="{{$job->slug}}" id="slug" style="display: none" type="text">
                                            <button class="btn btn-info btn-sm slug_update_button mt-2" style="display: none">{{__('Update')}}</button>
                                        </div>
                                    </div>

                                    <div class="single-dashboard-input">
                                        <div class="single-info-input margin-top-30">
                                            <label for="description" class="info-title"> {{__('Job Description*')}} </label>
                                            <textarea class="form--control textarea--form summernote" name="description" placeholder="{{__('Type Description')}}">{{ $job->description }}</textarea>
                                        </div>
                                    </div>

                                    <div class="single-dashboard-input">
                                        <div class="single-info-input margin-top-30">
                                            <div class="form-group">
                                                <div class="media-upload-btn-wrapper">
                                                    <div class="img-wrap">
                                                        {!! render_image_markup_by_attachment_id($job->image,'','thumb') !!}
                                                    </div>
                                                    <input type="hidden" id="image" name="image"
                                                           value="{{$job->image}}">
                                                    <button type="button" class="btn btn-info media_upload_form_btn"
                                                            data-btntitle="{{__('Select Image')}}"
                                                            data-modaltitle="{{__('Upload Image')}}" data-toggle="modal"
                                                            data-target="#media_upload_modal">
                                                        {{'Upload Job Image'}}
                                                    </button>
                                                </div>
                                                <small class="text-center">{{ __('image format: jpg,jpeg,png')}}</small>
                                                <br>
                                                <small class="text-center">{{ __('and recommended size 730x497') }}</small>
                                            </div>
                                        </div>
                                        <div class="single-info-input margin-top-30">
                                            <label for="dead_line" class="info-title"> {{__('Deadline to Apply for this job')}} </label>
                                            <input class="form--control" value="{{ $job->dead_line }}" name="dead_line" id="dead_line" type="text" placeholder="{{__('Dead Line')}}">
                                        </div>
                                    </div>
                                    <div class="btn-wrapper margin-top-40">
                                        <input type="submit" class="cmn-btn btn-bg-1 btn" value="{{__('Save Changes')}} ">
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <x-media.markup :type="'web'"/>
    <!-- Dashboard area end -->
@endsection

@section('scripts')
    <script src="{{asset('assets/backend/js/bootstrap-tagsinput.js')}}"></script>
    <script src="{{asset('assets/common/js/flatpickr.js')}}"></script>
    <x-summernote.js/>

    <x-media.js :type="'web'"/>
    <script type="text/javascript">
        (function(){
            "use strict";
            $(document).ready(function(){

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
                    var url = `{{url('/job/details')}}/` + slug;
                    $('#slug_show').text(url);
                    $('.service_slug').hide();
                });

                //get subcategory while change category
                $('#category').on('change',function(){
                    let category_id = $(this).val();
                    $.ajax({
                        method:'post',
                        url:"{{route('buyer.subcategory')}}",
                        data:{category_id:category_id},
                        success:function(res){
                            if(res.status=='success'){
                                let alloptions = "<option value=''>{{ __('Select Sub Category') }}</option>";
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
                  placeholder: `{{__('search city')}}`,
                  ajax: {
                    type: 'get',
                    url: "{{route('user.country.city.ajax.search')}}",
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
                        url: "{{ route('buyer.child_category') }}",
                        data: {
                            sub_cat_id: sub_cat_id
                        },
                        success: function(res) {

                            if (res.status == 'success') {
                                var alloptions = "<option value=''>{{__('Select Child Category')}}</option>";
                                var allList = "<li data-value='' class='option'>{{__('Select Child Category')}}</li>";
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
                    placeholder: `{{__('search city')}}`,
                    ajax: {
                        type: 'get',
                        url: "{{route('user.country.city.ajax.search')}}",
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
                        url:"{{route('buyer.city')}}",
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
@endsection
