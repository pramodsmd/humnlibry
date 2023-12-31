@extends('frontend.frontend-page-master')

@section('site-title')
    @if($subcategory !='')
        {{ $subcategory->name }}
    @endif
@endsection

@section('page-title')
    @if($subcategory !='')
        {{ $subcategory->name }}
    @endif
@endsection
@section('page-meta-data')
    {!!  render_page_meta_data_for_subcategory($subcategory) !!}
@endsection

@section('inner-title')
    @if($subcategory !='')
        {{ $subcategory->name }}
    @endif
@endsection

@section('content')
    <!-- Category Service area starts -->
    <section class="category-services-area padding-top-70 padding-bottom-100">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 mb-3">
                    <div class="category_info_new">
                        {!! $subcategory->description !!}
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <div class="col-lg-12">
                    <h2 class="section-sub-title">{{ sprintf(__('Available Service Sub Categories in %s'),$subcategory->name)  }}</h2>
                </div>

                <div id="services_child_category_load_wrap">
                    <div class="row">
                        @foreach($child_category_under_category as $child_cat)
                            <div class="col-lg-3 col-sm-6 margin-top-30 category-child">
                                <div class="single-category style-02 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="icon category-bg-thumb-format" {!! render_background_image_markup_by_attachment_id($child_cat->image) !!}></div>
                                    <div class="category-contents">
                                        <h4 class="category-title"> <a href="{{ route('service.list.child.category',$child_cat->slug) }}">{{ $child_cat->name }}</a> </h4>
                                        <span class="category-para">  {{sprintf(__('%s Service'),$child_cat->total_service)}} </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    @if($child_category_under_category->count() >20)
                    <div class="load_more_button_warp"><a href="#" id="load_more_btn" data-total="12">{{__('Load More')}}</a></div>
                    @endif

                </div>
            </div>

            @php $current_page_url = URL::current(); @endphp
            <form method="get" action="{{ $current_page_url }}" id="search_service_list_form">
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                       <div class="form-group">
                           <input type="text" class="search-input form-control" id="search_by_query" placeholder="{{__('write minimum 3 character to search')}}" name="q" value="{{request()->get('q')}}">
                       </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-category-service">
                            <div class="single-select">
                                <select id="search_by_rating" name="rating">
                                    <option value="">{{ __('Select Rating Star') }}</option>
                                    <option value="1" @if(!empty(request()->get('rating')) && request()->get('rating') == 1 ) selected @endif>{{ __('One Star') }}</option>
                                    <option value="2" @if(!empty(request()->get('rating')) && request()->get('rating') == 2 ) selected @endif>{{ __('Two Star') }}</option>
                                    <option value="3" @if(!empty(request()->get('rating')) && request()->get('rating') == 3 ) selected @endif>{{ __('Three Star') }}</option>
                                    <option value="4" @if(!empty(request()->get('rating')) && request()->get('rating') == 4 ) selected @endif>{{ __('Four Star') }}</option>
                                    <option value="5" @if(!empty(request()->get('rating')) && request()->get('rating') == 5 ) selected @endif>{{ __('Five Star') }}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-category-service flex-category-service">
                            <div class="single-select">
                                <select id="search_by_sorting" name="sortby">
                                    <option value="">{{ __('Sort By') }}</option>
                                    <option value="latest_service" @if(!empty(request()->get('sortby')) && request()->get('sortby') == 'latest_service') selected @endif>{{ __('Latest Service') }}</option>
                                    <option value="lowest_price" @if(!empty(request()->get('sortby')) && request()->get('sortby') == 'lowest_price') selected @endif>{{ __('Lowest Price') }}</option>
                                    <option value="highest_price" @if(!empty(request()->get('sortby')) && request()->get('sortby') == 'highest_price') selected @endif>{{ __('Highest Price') }}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
            <div class="row">

                @if($all_services->count() >= 1)
                    @foreach($all_services as $service)

                        <div class="col-lg-4 col-md-6 margin-top-30 all-services">
                            <div class="single-service no-margin wow fadeInUp" data-wow-delay=".2s">
                                <a href="{{ route('service.list.details',$service->slug) }}" class="service-thumb service-bg-thumb-format" {!! render_background_image_markup_by_attachment_id($service->image) !!}>

                                    @if($service->featured == 1)
                                        <div class="award-icons">
                                            <i class="las la-award"></i>
                                        </div>
                                    @endif
                                    <div class="country_city_location">
                                        <span class="single_location"> <i class="las la-map-marker-alt"></i> {{ optional($service->serviceCity)->service_city }}, {{ optional(optional($service->serviceCity)->countryy)->country }} </span>
                                    </div>
                                </a>
                                <div class="services-contents">
                                    <ul class="author-tag">
                                        <li class="tag-list">
                                            <a href="{{ route('about.seller.profile',optional($service->seller)->username) }}">
                                                <div class="authors">
                                                    <div class="thumb">
                                                        {!! render_image_markup_by_attachment_id(optional($service->seller)->image) !!}
                                                        <span class="notification-dot"></span>
                                                    </div>
                                                    <span class="author-title"> {{ optional($service->seller)->name }} </span>
                                                </div>
                                            </a>
                                        </li>
                                        @if($service->reviews->where('type', 1)->count() >= 1)
                                            <li class="tag-list">
                                                <a href="javascript:void(0)">
                                                <span class="reviews">
                                                    {!! ratting_star(round(optional($service->reviews->where('type', 1))->avg('rating'),1)) !!}
                                                    ({{ optional($service->reviews->where('type', 1))->count() }})
                                                </span>
                                                </a>
                                            </li>
                                        @endif
                                    </ul>
                                    <h5 class="common-title"> <a href="{{ route('service.list.details',$service->slug) }}"> {{ Str::limit($service->title) }} </a> </h5>
                                    <p class="common-para"> {{ Str::limit(strip_tags($service->description),100) }} </p>
                                    <div class="service-price">
                                        <span class="starting"> {{ __('Starting at') }} </span>
                                        <span class="prices"> {{ amount_with_currency_symbol($service->price) }} </span>
                                    </div>
                                    <div class="btn-wrapper d-flex flex-wrap">
                                        <a href="{{ route('service.list.book',$service->slug) }}" class="cmn-btn btn-small btn-bg-1"> {{ __('Book Now') }} </a>
                                        <a href="{{ route('service.list.details',$service->slug) }}" class="cmn-btn btn-small btn-outline-1 ml-auto"> {{ __('View Details') }} </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @if($all_services->count() >= 9)
                        <div class="col-lg-12">
                            <div class="blog-pagination margin-top-55">
                                <div class="custom-pagination mt-4 mt-lg-5">
                                    {!! $all_services->links() !!}
                                </div>
                            </div>
                        </div>
                    @endif
                @else
                    <div class="alert alert-warning">{{sprintf(__('No services found in %s'),optional($subcategory)->name)}}</div>
                @endif

            </div>

        </div>
    </section>
    <!-- Category Service area end -->
@endsection

@section("scripts")
    <script>
        (function($){
            "use strict";
            $(document).on('click','#load_more_btn',function(e){
                e.preventDefault();
                let totalNo = $(this).data('total');
                let el = $(this);
                let container = $('#services_child_category_load_wrap > .row');

                $.ajax({
                    type: "POST",
                    url: "{{route('service.list.load.more.child.categories')}}",
                    beforeSend: function(e){
                        el.text("{{__('loading...')}}")
                    },
                    data : {
                        _token: "{{csrf_token()}}",
                        total: totalNo,
                        catId: "{{$subcategory->id}}"
                    },
                    success: function(data){

                        el.text("{{__('Load More')}}");
                        if(data.markup === ''){
                            el.hide();
                            container.append("<div class='col-lg-12'><div class='text-center text-warning mt-3'>{{__('no more subcategory found')}}</div></div>");
                            return;
                        }

                        $('#load_more_btn').data('total',data.total);

                        container.append(data.markup);
                    }
                });
            });
        })(jQuery);

    </script>
@endsection
