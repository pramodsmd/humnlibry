@if(get_static_option('dashboard_variant_seller') == '02')
    @include('frontend.user.seller.partials.header-two')
    <!--Dashboard Markup -->
    <div class="body-overlay"></div>
    <div class="dashboard__area seller_look">
        <div class="container-fluid p-0">
            <div class="dashboard__contents__wrapper">
                <div class="dashboard__icon">
                    <div class="dashboard__icon__bars sidebar-icon">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
    </div>
    @include('frontend.user.seller.partials.footer-two')
@else
    @include('frontend.user.seller.partials.header')
    @yield('content')
    @include('frontend.user.seller.partials.footer')
@endif

