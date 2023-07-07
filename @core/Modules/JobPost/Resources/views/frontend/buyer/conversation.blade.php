@if(get_static_option('dashboard_variant_buyer') == '02')
    @include('jobpost::frontend.buyer.partials.conversation-two')
@else
    @include('jobpost::frontend.buyer.partials.conversation-one')
@endif