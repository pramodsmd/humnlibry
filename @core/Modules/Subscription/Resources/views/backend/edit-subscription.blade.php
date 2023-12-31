@extends('backend.admin-master')

@section('site-title')
    {{__('Edit Subscription')}}
@endsection
@section('style')
    <x-media.css/>
@endsection
@section('content')
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                <x-msg.success/>
                <x-msg.error/>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="header-wrap d-flex justify-content-between">
                            <div class="left-content">
                                <h4 class="header-title">{{__('Edit Subscription')}}</h4>
                            </div>
                            <div class="right-content">
                                <a class="btn btn-info btn-sm" href="{{route('admin.subscription.all')}}">{{__('All Subscriptions')}}</a>
                            </div>
                        </div>
                        <form action="{{route('admin.subscription.edit',$subscription->id)}}" method="post" enctype="multipart/form-data" id="edit_category_form">
                            @csrf
                            <div class="tab-content margin-top-40">

                                <div class="form-group">
                                    <label for="image">{{__('Upload Image')}}</label>
                                    <div class="media-upload-btn-wrapper">
                                        <div class="img-wrap">
                                            {!! render_image_markup_by_attachment_id($subscription->image,'','thumb') !!}
                                        </div>
                                        <input type="hidden" name="image">
                                        <button type="button" class="btn btn-info media_upload_form_btn"
                                                data-btntitle="{{__('Select Image')}}"
                                                data-modaltitle="{{__('Upload Image')}}" data-toggle="modal"
                                                data-target="#media_upload_modal">
                                            {{__('Upload Image')}}
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="title">{{__('Title')}}</label>
                                    <input type="text" class="form-control" name="title" id="title" value="{{$subscription->title}}" placeholder="{{__('Title')}}">
                                </div>
                                
                                 <div class="form-group">
                                    <label for="title">{{__('About Subscription')}}</label>
                                    <textarea name="about_subscription" id="editor" class="form-control"  placeholder="{{__('About Subscription')}}">{{$subscription->about_subscription}}</textarea>
                                </div>
                                <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="type">{{__('Subscription Type')}}</label>
                                    <select name="type" id="type" class="form-control">
                                        <option value="monthly" @if($subscription->type == 'monthly') selected @endif>{{__('Monthly')}}</option>
                                        <option value="yearly" @if($subscription->type == 'yearly') selected @endif>{{__('Yearly')}}</option>
                                        <!--<option value="lifetime" @if($subscription->type == 'lifetime') selected @endif>{{__('Lifetime')}}</option>-->
                                    </select>
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="price">{{__('Price')}}</label>
                                    <input type="number" class="form-control" name="price" id="price" value="{{$subscription->price}}" placeholder="{{__('Price')}}">
                                </div>

                                <!--<div class="form-group connect_show_hide">-->
                                <!--    <label for="connect">{{__('Connect')}}</label>-->
                                <!--    <input type="number" class="form-control" name="connect" id="connect"  value="{{$subscription->connect ?? 0}}" placeholder="{{__('No of Connect')}}">-->
                                <!--    <span>{{ __('Connect for order') }}</span>-->
                                <!--</div>-->

                                <div class="form-group connect_show_hide col-sm-6">
                                    <label for="service">{{__('Service')}}</label>
                                    <input type="number" class="form-control" name="service" id="service"  value="{{$subscription->service ?? 0}}" placeholder="{{__('No of Service')}}">
                                    <span>{{ __('Maximum Service Create') }}</span>
                                </div>
                                   <div class="form-group connect_show_hide col-sm-6">
                                    <label for="service">{{__('Unique Profile')}}</label>
                                    <select type="text" class="form-control" name="unique_profile" id="unique_profile">
                                    <option value="active" {{ $subscription->unique_profile =='active' ? 'selected' : '' }}>{{ __('Active') }}</option>
                                    <option value="inactive" {{ $subscription->unique_profile=='inactive' ? 'selected' : '' }}>{{ __('Inactive') }}</option>
                                   </select>
                                    <span>{{ __('Unique Profile: Logo,Many Brands/Images/Video Gallery') }}</span>
                                </div>
                                <div class="form-group connect_show_hide col-sm-6">
                                    <label for="service">{{__('Profile Searchable')}}</label>
                                    <select type="text" class="form-control" name="profile_searchable" id="profile_searchable">
                                    <option value="active" {{$subscription->profile_searchable =='active' ? 'selected' : '' }}>{{ __('Active') }}</option>
                                    <option value="inactive" {{$subscription->profile_searchable =='inactive' ? 'selected' : '' }}>{{ __('Inactive') }}</option>
                                   </select>
                                    <span>{{ __('Profile searchable ') }}</span>
                                </div>
                                <div class="form-group connect_show_hide col-sm-6">
                                    <label for="service">{{__('Booking Availability')}}</label>
                                    <select type="text" class="form-control" name="booking_availability" id="booking_availability">
                                    <option value="active" {{$subscription->booking_availability =='active' ? 'selected' : '' }}>{{ __('Active') }}</option>
                                    <option value="inactive" {{$subscription->booking_availability =='inactive' ? 'selected' : '' }}>{{ __('Inactive') }}</option>
                                   </select>
                                    <span>{{ __('Booking Availability- Enable/Disable') }}</span>
                                </div>
                                 <div class="form-group connect_show_hide col-sm-6">
                                    <label for="service">{{__('Booking  Calendar')}}</label>
                                    <select type="text" class="form-control" name="booking_calendar" id="booking_calendar">
                                    <option value="active" {{$subscription->booking_calendar =='active' ? 'selected' : '' }}>{{ __('Active') }}</option>
                                    <option value="inactive" {{$subscription->booking_calendar =='inactive' ? 'selected' : '' }}>{{ __('Inactive') }}</option>
                                   </select>
                                    <span>{{ __('Booking : Calendar Schedule- Date/Time | Meetup Location | Where: Online/ in Person: Video Call')}}</span>
                                </div>
                                
                                <div class="form-group connect_show_hide col-sm-6">
                                    <label for="service">{{__('Booking Count Down/Timer')}}</label>
                                    <select type="text" class="form-control" name="booking_counter" id="booking_counter">
                                    <option value="active" {{$subscription->booking_counter =='active' ? 'selected' : '' }}>{{ __('Active') }}</option>
                                    <option value="inactive" {{$subscription->booking_counter =='inactive' ? 'selected' : '' }}>{{ __('Inactive') }}</option>
                                   </select>
                                    <span>{{ __('Booking Count Down/Timer : Show a running time e.g for 1 hour- 60min to 1 left min till popup Timeout and Service completed. Like taxi meter ( Assume someone provide Massage 
                                    service for 1 hour so count down will be running for customer users and book provider')}}</span>
                                </div>

                                <!--<div class="form-group connect_show_hide">-->
                                <!--    <label for="job">{{__('Job')}}</label>-->
                                <!--    <input type="number" class="form-control" name="job" id="job"  value="{{$subscription->job ?? 0}}" placeholder="{{__('No of Job')}}">-->
                                <!--    <span> {{ __('Maximum Apply Job') }}</span>-->
                                <!--</div>-->
                               </div> 
                                <button type="submit" class="btn btn-primary mt-3 submit_btn">{{__('Submit ')}}</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-media.markup/>
@endsection

@section('script')
    <script>
        <x-icon-picker/>
    </script>
    <x-media.js />
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
@endsection


