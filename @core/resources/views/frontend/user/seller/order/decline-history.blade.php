@if(get_static_option('dashboard_variant_buyer') == '02')
    @include('frontend.user.seller.order.partials.decline-history-two')
@else
    @include('frontend.user.seller.order.partials.decline-history-one')
@endif