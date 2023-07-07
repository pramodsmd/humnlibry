@extends('frontend.frontend-page-master')
@section('page-title')

    {{__('Subscription Cancelled')}}
@endsection
@section('content')
    <div class="error-page-content padding-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="order-cancel-area">
                        <div class="alert alert-warning">
                            <h6 class="title">{{ __('Your Subscription has been canceled') }}</h6>
                        </div>
                        <div class="btn-wrapper mt-5">
                            <a href="{{url('/')}}" class="btn btn-success">{{__('Back To Home')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
