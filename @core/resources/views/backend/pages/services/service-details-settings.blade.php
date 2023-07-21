@extends('backend.admin-master')

@section('site-title')
    {{__('Book Details Settings')}}
@endsection

@section('content')
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-6 mt-5">
                <x-msg.success/>
                <x-msg.error/>
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">{{__("Book Details Settings")}}</h4>
                        <form action="{{route('admin.service.details.settings.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="service_details_overview_title">{{__('Book Details Overview Title')}}</label>
                                <input type="text" name="service_details_overview_title"  class="form-control" value="{{get_static_option('service_details_overview_title')}}" id="service_details_overview_title">
                            </div>
                            <div class="form-group">
                                <label for="service_details_about_seller_title">{{__('Book Details About Seller Title')}}</label>
                                <input type="text" name="service_details_about_seller_title"  class="form-control" value="{{get_static_option('service_details_about_seller_title')}}" id="service_details_about_seller_title">
                            </div>
                            <div class="form-group">
                                <label for="service_details_review_title">{{__('Book Details Review Title')}}</label>
                                <input type="text" name="service_details_review_title"  class="form-control" value="{{get_static_option('service_details_review_title')}}" id="service_details_review_title">
                            </div>
                            <div class="form-group">
                                <label for="service_details_what_you_get">{{__('Book Details What You Get')}}</label>
                                <input type="text" name="service_details_what_you_get"  class="form-control" value="{{get_static_option('service_details_what_you_get')}}" id="service_details_what_you_get">
                            </div>
                            <div class="form-group">
                                <label for="service_details_benifits_title">{{__('Book Details Benifits')}}</label>
                                <input type="text" name="service_details_benifits_title"  class="form-control" value="{{get_static_option('service_details_benifits_title')}}" id="service_details_benifits_title">
                            </div>
                            <div class="form-group">
                                <label for="service_details_another_service_title">{{__('Book Details Another Book of This Seller')}}</label>
                                <input type="text" name="service_details_another_service_title"  class="form-control" value="{{get_static_option('service_details_another_service_title')}}" id="service_details_another_service_title">
                            </div>
                            <div class="form-group">
                                <label for="service_details_explore_all_title">{{__('Book Details Explore All Title')}}</label>
                                <input type="text" name="service_details_explore_all_title"  class="form-control" value="{{get_static_option('service_details_explore_all_title')}}" id="service_details_explore_all_title">
                            </div>
                            <div class="form-group">
                                <label for="service_details_package_title">{{__('Book Details Package Title')}}</label>
                                <input type="text" name="service_details_package_title"  class="form-control" value="{{get_static_option('service_details_package_title')}}" id="service_details_package_title">
                            </div>
                            <div class="form-group">
                                <label for="service_details_package_subtitle">{{__('Book Details Package Subtitle')}}</label>
                                <input type="text" name="service_details_package_subtitle"  class="form-control" value="{{get_static_option('service_details_package_subtitle')}}" id="service_details_package_subtitle">
                            </div>
                            <div class="form-group">
                                <label for="service_details_button_title">{{__('Book Details Button Title')}}</label>
                                <input type="text" name="service_details_button_title"  class="form-control" value="{{get_static_option('service_details_button_title')}}" id="service_details_button_title">
                            </div>
                            <div class="form-group">
                                <label for="service_reviews_title">{{__('Book Reviews Title')}}</label>
                                <input type="text" name="service_reviews_title"  class="form-control" value="{{get_static_option('service_reviews_title')}}" id="service_reviews_title">
                            </div>
                            <div class="form-group">
                                <label for="service_post_reviews_title">{{__('Book Post Reviews Title')}}</label>
                                <input type="text" name="service_post_reviews_title"  class="form-control" value="{{get_static_option('service_post_reviews_title')}}" id="service_post_reviews_title">
                            </div>

                            <button type="submit" id="update" class="btn btn-primary mt-4 pr-4 pl-4">{{__('Update Changes')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        (function($){
            "use strict";
            $(document).ready(function(){
                <x-icon-picker/>
                <x-btn.update/>
            });
        }(jQuery));
    </script>
@endsection
