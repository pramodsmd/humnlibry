@if(get_static_option('dashboard_variant_seller') == '02')
    @include('jobpost::frontend.seller.partials.job-requests-two')
@else
    @include('jobpost::frontend.seller.partials.job-requests-one')
@endif