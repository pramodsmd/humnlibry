@if(get_static_option('dashboard_variant_buyer') == '02')
    @include('jobpost::frontend.buyer.partials.add-job-two')
@else
    @include('jobpost::frontend.buyer.partials.add-job-one')
@endif
