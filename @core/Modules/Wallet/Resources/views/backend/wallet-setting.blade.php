@extends('backend.admin-master')

@section('site-title')
    {{__('Wallet Setting')}}
@endsection
@section('style')
    <link rel="stylesheet" href="{{asset('assets/backend/css/nice-select.css')}}">
    <x-media.css/>
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
             <div class="col-lg-6 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="header-wrap d-flex justify-content-between">
                            <div class="left-content">
                                <h4 class="header-title">Payout Amount Settings </h4>
                                <p class="mb-3">you can set minimum and maximum withdraw amount for book provider</p>
                            </div>
                        </div>
                        <div class="table-wrap table-responsive">
                             <form action="@if(!empty($amount_settings)){{ route('admin.amount.settings.update',$amount_settings->id) }} @else {{ route('admin.amount.settings.update') }} @endif" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="commission_charge">{{ __('Minimum Amount') }}</label>
                                    <input type="number" name="min_amount" min=0 class="form-control" @if(!empty($amount_settings)) value="{{ $amount_settings->min_amount }}" @else value="50" @endif>
                                </div>
                                <div class="form-group">
                                    <label for="commission_charge">{{ __('Maximum Amount') }}</label>
                                    <input type="number" name="max_amount" min=0 class="form-control" @if(!empty($amount_settings)) value="{{ $amount_settings->max_amount }}" @else value="250" @endif>
                                </div>
                                <div class="form-group">
                                    <label for="commission_charge">{{ __('Charge Percentage') }}</label>
                                    <input type="number" name="charge_percent" min=0 class="form-control" @if(!empty($amount_settings)) value="{{ $amount_settings->charge_percent }}" @else value="250" @endif>
                                </div>
                                <div class="form-group">
                                    <label for="commission_charge">{{ __('Fix Charge') }}</label>
                                    <input type="number" name="fix_charge" min=0 class="form-control" @if(!empty($amount_settings)) value="{{ $amount_settings->fix_charge }}" @else value="250" @endif>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Update" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>   
            <div class="col-lg-6 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="header-wrap d-flex justify-content-between">
                            <div class="left-content">
                                <h4 class="header-title">Deposit Amount Settings </h4>
                                <p class="mb-3">you can set minimum and maximum deposit amount for book provider</p>
                            </div>
                        </div>
                        <div class="table-wrap table-responsive">
                             <form action="@if(!empty($amount_deposit)){{ route('admin.amount.settings.update',$amount_deposit->id) }} @else {{ route('admin.amount.settings.update') }} @endif" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="commission_charge">{{ __('Minimum Amount') }}</label>
                                    <input type="number" name="min_amount" min=0  class="form-control" @if(!empty($amount_deposit)) value="{{ $amount_deposit->min_amount }}" @else value="50" @endif>
                                </div>
                                <div class="form-group">
                                    <label for="commission_charge">{{ __('Maximum Amount') }}</label>
                                    <input type="number" name="max_amount" min=0  class="form-control" @if(!empty($amount_deposit)) value="{{ $amount_deposit->max_amount }}" @else value="250" @endif>
                                </div>
                                <div class="form-group">
                                    <label for="commission_charge">{{ __('Charge Percentage') }}</label>
                                    <input type="number" name="charge_percent" min=0 class="form-control" @if(!empty($amount_deposit)) value="{{ $amount_deposit->charge_percent }}" @else value="250" @endif>
                                </div>
                                <div class="form-group">
                                    <label for="commission_charge">{{ __('Fix Charge') }}</label>
                                    <input type="number" name="fix_charge" min=0 class="form-control" @if(!empty($amount_deposit)) value="{{ $amount_deposit->fix_charge }}" @else value="250" @endif>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Update" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="col-lg-6 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="header-wrap d-flex justify-content-between">
                            <div class="left-content">
                                <h4 class="header-title">Transfer Amount Settings </h4>
                                <p class="mb-3">you can set minimum and maximum transfer amount for book provider</p>
                            </div>
                        </div>
                        <div class="table-wrap table-responsive">
                             <form action="@if(!empty($amount_transfer)){{ route('admin.amount.settings.update',$amount_transfer->id) }} @else {{ route('admin.amount.settings.update') }} @endif" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="commission_charge">{{ __('Minimum Amount') }}</label>
                                    <input type="number" name="min_amount" min=0 class="form-control" @if(!empty($amount_transfer)) value="{{ $amount_transfer->min_amount }}" @else value="50" @endif>
                                </div>
                                <div class="form-group">
                                    <label for="commission_charge">{{ __('Maximum Amount') }}</label>
                                    <input type="number" name="max_amount" min=0 class="form-control" @if(!empty($amount_transfer)) value="{{ $amount_transfer->max_amount }}" @else value="250" @endif>
                                </div>
                                <div class="form-group">
                                    <label for="commission_charge">{{ __('Charge Percentage') }}</label>
                                    <input type="number" name="charge_percent" min=0 class="form-control" @if(!empty($amount_transfer)) value="{{ $amount_transfer->charge_percent }}" @else value="250" @endif>
                                </div>
                                <div class="form-group">
                                    <label for="commission_charge">{{ __('Fix Charge') }}</label>
                                    <input type="number" name="fix_charge" min=0 class="form-control" @if(!empty($amount_transfer)) value="{{ $amount_transfer->fix_charge }}" @else value="250" @endif>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Update" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="col-lg-6 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="header-wrap d-flex justify-content-between">
                            <div class="left-content">
                                <h4 class="header-title">Exchange Amount Settings </h4>
                                <p class="mb-3">you can set minimum and maximum exchange amount for book provider</p>
                            </div>
                        </div>
                        <div class="table-wrap table-responsive">
                             <form action="@if(!empty($amount_exchange)){{ route('admin.amount.settings.update',$amount_exchange->id) }} @else {{ route('admin.amount.settings.update') }} @endif" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="commission_charge">{{ __('Minimum Amount') }}</label>
                                    <input type="number" name="min_amount" min=0  class="form-control" @if(!empty($amount_exchange)) value="{{ $amount_exchange->min_amount }}" @else value="50" @endif>
                                </div>
                                <div class="form-group">
                                    <label for="commission_charge">{{ __('Maximum Amount') }}</label>
                                    <input type="number" name="max_amount" min=0 class="form-control" @if(!empty($amount_exchange)) value="{{ $amount_exchange->max_amount }}" @else value="250" @endif>
                                </div>
                                <div class="form-group">
                                    <label for="commission_charge">{{ __('Charge Percentage') }}</label>
                                    <input type="number" name="charge_percent" min=0 class="form-control" @if(!empty($amount_exchange)) value="{{ $amount_exchange->charge_percent }}" @else value="250" @endif>
                                </div>
                                <div class="form-group">
                                    <label for="commission_charge">{{ __('Fix Charge') }}</label>
                                    <input type="number" name="fix_charge" min=0 class="form-control" @if(!empty($amount_exchange)) value="{{ $amount_exchange->fix_charge }}" @else value="250" @endif>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Update" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    </div>

    <!--Status Modal -->
    <div class="modal fade" id="payoutRequestModal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
        <form action="{{ route('admin.wallet.deposit.create') }}" method="post" enctype="multipart/form-data">
              @csrf
            <input type="hidden" name="selected_payment_gateway" value="added_by_admin">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-warning" id="couponModal">{{ __('Deposit To User Wallet') }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="single-info-input margin-top-30">
                            <label for="user_id" class="info-title"> {{__('Select User*')}} </label>
                            <select name="user_id" id="user_id" class="form-control  nice-select wide">
                                <option value="">{{__('Select User')}}</option>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <label for="">{{ __('Deposit Amount') }}</label>
                        <input type="number" class="form-control" name="amount" placeholder="{{ __('Enter Deposit Amount') }}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('Save changes') }}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>


@endsection

@section('script')
    <script src="{{asset('assets/backend/js/jquery.nice-select.min.js')}}"></script>
    <x-media.js />
    <x-datatable.js/>
    <script>
        (function ($) {
            "use strict";
            $(document).ready(function () {
                $(document).on('click','.swal_status_change',function(e){
                    e.preventDefault();
                    Swal.fire({
                        title: '{{__("Are you sure to change status?")}}',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, change it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $(this).next().find('.swal_form_submit_btn').trigger('click');
                        }
                    });
                });

                // for nice select search js
                if($('.nice-select').length > 0){
                    $('.nice-select').niceSelect();
                }

            });
        })(jQuery)
    </script>
@endsection

