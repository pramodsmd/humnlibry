
@if(get_static_option('dashboard_variant_buyer') == '02')
    @include('jobpost::frontend.buyer.partials.job-requests-two')
@else
    @include('jobpost::frontend.buyer.partials.job-requests-one')
@endif

