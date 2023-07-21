@extends('frontend.user.buyer.buyer-master')
@section('site-title')
    {{__('Add New Ticket')}}
@endsection
@section('style')
    <x-media.css/>
@endsection
@section('content')
    <x-frontend.seller-buyer-preloader/>
    @include('frontend.user.buyer.partials.sidebar-two')
    <div class="dashboard__right">
        @include('frontend.user.buyer.header.buyer-header')
        <div class="dashboard__body">
            <div class="dashboard__inner">
                <!-- Report section start-->
                <div class="dashboard_table__wrapper dashboard_border  padding-20 radius-10 bg-white">
                    <div class="dashboard_table__title__flex">
                        <h4 class="dashboards-title">  {{__('Add New Ticket')}} </h4>
                    </div>


                    <div class="row">
                        <div class="col-lg-6 margin-top-50">
                            <div class="single-settings">
                                <div class="mt-5"> <x-msg.error/> </div>
                                <h4 class="mb-3">{{ __('Ticket For:') }} {{ optional($order->service)->title }}</h4>
                                <h4 class="mb-5">{{ __('Booking ID:') }} #{{ $order->id }}</h4>
                                <form action="{{route('buyer.support.ticket.new')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="seller_id" value="{{ $order->seller_id }}">
                                    <input type="hidden" name="service_id" value="{{ $order->service_id }}">
                                    <input type="hidden" name="order_id" value="{{ $order->id }}">

                                    <div class="single-dashboard-input">
                                        <div class="single-info-input margin-top-30">
                                            <label for="title" class="info-title"> {{__('Title*')}} </label>
                                            <input class="form--control" name="title" id="title" value="{{ @old('title') }}" type="text" placeholder="{{__('Add tilte')}}">
                                        </div>
                                    </div>
                                    <div class="single-dashboard-input">
                                        <div class="single-info-input margin-top-30">
                                            <label for="subject" class="info-title"> {{__('Subject*')}} </label>
                                            <input class="form--control" name="subject" id="subject" value="{{ @old('subject') }}" type="text" placeholder="{{__('Add Subject')}}">
                                        </div>
                                    </div>
                                    <div class="single-dashboard-input">
                                        <div class="single-info-input margin-top-30">
                                            <label for="priority" class="info-title"> {{__('Priority*')}} </label>
                                            <select name="priority" id="priority">
                                                <option value="low">{{__('Low')}}</option>
                                                <option value="medium">{{__('Medium')}}</option>
                                                <option value="high">{{__('High')}}</option>
                                                <option value="urgent">{{__('Urgent')}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="single-dashboard-input">
                                        <div class="single-info-input margin-top-30">
                                            <label for="description" class="info-title"> {{__('Description*')}} </label>
                                            <textarea class="form--control textarea--form textarea-input" name="description" cols="20" rows="4" placeholder="{{__('Type Description')}}"></textarea>
                                        </div>
                                    </div>
                                    <div class="btn-wrapper margin-top-30">
                                        <button type="submit" class="dashboard_table__title__btn btn-bg-1 radius-5" style="border: none"> {{__('Submit Ticket')}} </button>
                                    </div>
                                </form>

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
<x-media.js :type="'web'"/>
<script type="text/javascript">
(function(){
    "use strict";
    $(document).ready(function(){

        $('#category').on('change',function(){
            var category_id = $(this).val();
            $.ajax({
                method:'post',
                url:"{{route('seller.subcategory')}}",
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
@endsection