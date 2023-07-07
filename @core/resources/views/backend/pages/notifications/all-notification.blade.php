@extends('backend.admin-master')
@section('site-title')
    {{__('All Notifications')}}
@endsection

@section('style')
    <x-datatable.css/>
@endsection

@section('content')
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                <x-msg.success/>
                <x-msg.error/>
            </div>
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="header-wrap d-flex justify-content-between">
                            <div class="left-content">
                                <h4 class="header-title">{{__('All Notifications')}}  </h4>
                            </div>
                        </div>
                        <div class="table-wrap table-responsive">
                            <table class="table table-default">
                                <thead>
                                <th>{{__('Booking ID')}}</th>
                                <th>{{__('Ticket ID')}}</th>
                                <th>{{__('Service ID')}}</th>
                                <th>{{__('Booking Message')}}</th>
                                <th>{{__('Ticket Message')}}</th>
                                <th>{{__('Service Message')}}</th>
                                <th>{{__('Status')}}</th>
                                <th>{{__('Action')}}</th>
                                </thead>
                                <tbody>
                                @foreach($notifications as $data)
                                    <tr>
                                        <td>{{$data->order_id}}</td>
                                        <td>{{$data->ticket_id}}</td>
                                        <td>{{$data->service_id}}</td>
                                        <td>  @if(!empty($data->order_id))
                                                         @if($data->type=="order_complete_request")
                                                          {{ __('A new request is created for complete booking') }} #{{$data->order_id}} 
                                                         @elseif($data->type=="order_approved")
                                                          {{ __('Booking Complete request is approved') }} #{{$data->order_id}} 
                                                         @elseif($data->type=="order_decline")
                                                          {{ __('Booking Complete request is decline') }} #{{$data->order_id}} 
                                                         @else
                                                          {{ __('New Booking') }} #{{$data->order_id}} 
                                                         @endif 
                                                  @endif 
                                                  </td>
                                        <td>  @if(!empty($data->ticket_id)) {{ __('New Booking Ticket') }} #{{$data->ticket_id}} @endif  </td>
                                        <td>  @if(!empty($data->service_id)) 
                                                      
                                                    @if($data->type=="add_service")
                                                       {{ __('New Service Created') }} #{{$data->service_id}}
                                                    @elseif($data->type=="service_status")
                                                       {{ __('Service Status Updated') }} #{{$data->service_id}}
                                                    @else
                                                         {{ __('Service Updated') }} #{{$data->service_id}}
                                                    @endif
                                                    
                                                    @endif  </td>
                                        <td>
                                            @if($data->status == 0) <span class="btn btn-danger btn-sm">{{ __('Unread') }}</span>   @endif
                                            @if($data->status == 1) <span class="btn btn-success btn-sm">{{ __('Read') }}</span>  @endif
                                        </td>
                                        <td>

                                            @if(!empty($data->order_id))
                                                <a class="btn btn-info btn-xs mb-3 mr-1" target="_blank" href="{{ route('admin.orders.details.notification', $data->id) }}">
                                                    <i class="ti-eye"></i>
                                                </a>
                                            @endif

                                           @if(!empty($data->ticket_id))
                                                <a class="btn btn-info btn-xs mb-3 mr-1" target="_blank" href="{{ route('admin.ticket.details', $data->ticket_id) }}">
                                                    <i class="ti-eye"></i>
                                                </a>
                                            @endif

                                          @if(!empty($data->service_id))
                                                <a class="btn btn-info btn-xs mb-3 mr-1" target="_blank" href="{{ route('admin.service.view.details.notificationupdate', $data->id) }}">
                                                    <i class="ti-eye"></i>
                                                </a>
                                            @endif


                                            @can('notification-delete')
                                                <x-delete-popover :url="route('admin.notification.delete',$data->id)"/>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <x-datatable.js/>
    <script type="text/javascript">
        (function(){
            "use strict";
            $(document).ready(function(){

                $(document).on('click','.swal_status_change',function(e){
                    e.preventDefault();
                    Swal.fire({
                        title: '{{__("Are you sure to change status complete? Once you done you can not revert this !!")}}',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: "{{ __('Yes, change it!') }}"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $(this).next().find('.swal_form_submit_btn').trigger('click');
                        }
                    });
                });

            });
        })(jQuery);
    </script>
@endsection
