@extends('frontend.user.buyer.buyer-master')
@section('site-title')
    {{__('All Notifications')}}
@endsection
@section('content')
    @include('frontend.user.buyer.partials.sidebar-two')
    <div class="dashboard__right">
        @include('frontend.user.buyer.header.buyer-header')
        <div class="dashboard__body">
            <div class="dashboard__inner">
                <!-- Tickets table section start-->
                <div class="dashboard_table__wrapper dashboard_border  padding-20 radius-10 bg-white">
                    <div class="dashboard_table__title__flex">
                        <h4 class="dashboard_table__title mb-2">{{__('All Notification')}}</h4>
                    </div>
                    @if(!empty($notifications))
                        <div class="dashboard_table__main custom--table mt-4">
                            <table>
                                <thead>
                                <tr>
                                    <th>{{ __('No') }}</th>
                                    <th>{{ __('Title') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($notifications as $key=>$notification)
                                    @php 
                                       $data=json_decode($notification->data);
                                    @endphp
                                    @if(isset($data->buyer_id))
                                      @if($data->buyer_id==Auth::guard('web')->user()->id)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>
                                                <a class="list-order" href="{{ route('buyer.order.details',$data->order_id) }}">
                                                    <span class="order-icon"> <i class="las la-check-circle"></i> </span>
                                                    {{ __($data->order_message) }} #{{ $data->order_id }}
                                                </a>
                                            </td>
                                            <td>
                                                <div class="dashboard_table__main__actions">
                                                    <a href="{{ route('buyer.order.details.notification',$notification->id) }}" class="icon"><i class="fa-regular fa-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="blog-pagination margin-top-55">
                            <div class="custom-pagination mt-4 mt-lg-5">
                                {{$notifications->links()}}
                            </div>
                        </div>
                    @else
                        <div class="chat_wrapper__details__inner__chat__contents mt-3">
                            <p class="no_data_found_for_buyer_seller_panel">
                                {{ __('No Notification found')}}
                            </p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection