@extends('backend.admin-master')

@section('site-title')
    {{__('Service Create Settings')}}
@endsection
@section('content')
    <div class="col-lg-6 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                <x-msg.success/>
                <x-msg.error/>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="header-wrap d-flex justify-content-between">
                            <div class="left-content">
                                <h4 class="header-title">{{__('Service Create Settings')}} </h4>
                            </div>
                        </div>
                        <form action="{{route('admin.service.create.settings.update')}}" method="post">
                            @csrf
                            <div class="tab-content margin-top-40">
                                <div class="form-group">
                                    <label for="service_city">{{__('Who Will Create Service?')}}</label>
                                    <select type="text" class="form-control" name="service_create_settings" id="service_create_settings" placeholder="{{__('Service City')}}">
                                        <option value="">{{ __('Select') }}</option>
                                        <option value="all_seller" {{ get_static_option('service_create_settings')=='all_seller' ? 'selected' : '' }} >{{ __('All Books') }}</option>
                                        <option value="verified_seller" {{ get_static_option('service_create_settings')=='verified_seller' ? 'selected' : '' }} >{{ __('Only Verified Books') }}</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3 submit_btn">{{__('Submit ')}}</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-lg-6 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                <x-msg.success/>
                <x-msg.error/>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="header-wrap d-flex justify-content-between">
                            <div class="left-content">
                                <h4 class="header-title">{{__('Service Create Settings')}} </h4>
                                <p class="mb-3 text-info">{{ __('You can set the service provider create service status auto Approved/Pending from here.') }}</p>
                            </div>
                        </div>
                        <form action="{{route('admin.service.create.status.settings.update')}}" method="post">
                            @csrf
                            <div class="tab-content margin-top-40">
                                <div class="form-group">
                                    <label for="service_create_status_settings">{{__('Select Status')}}</label>
                                    <select type="text" class="form-control" name="service_create_status_settings">
                                        <option value="">{{ __('Select') }}</option>
                                        <option value="pending" {{ get_static_option('service_create_status_settings')=='pending' ? 'selected' : '' }} >{{ __('Pending') }}</option>
                                        <option value="approved" {{ get_static_option('service_create_status_settings')=='approved' ? 'selected' : '' }} >{{ __('Approved') }}</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3 submit_btn">{{__('Submit ')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="col-lg-6 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                <x-msg.success/>
                <x-msg.error/>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="header-wrap d-flex justify-content-between">
                            <div class="left-content">
                                <h4 class="header-title">{{__('Service Update Settings')}} </h4>
                                <p class="mb-3 text-info">{{ __('You can set the service provider update service status auto Approved/Pending from here.') }}</p>
                            </div>
                        </div>
                        <form action="{{route('admin.service.edit.status.settings.update')}}" method="post">
                            @csrf
                            <div class="tab-content margin-top-40">
                                <div class="form-group">
                                    <label for="service_update_status_settings">{{__('Select Status')}}</label>
                                    <select type="text" class="form-control" name="service_update_status_settings">
                                        <option value="">{{ __('Select') }}</option>
                                        <option value="pending" {{ get_static_option('service_update_status_settings')=='pending' ? 'selected' : '' }} >{{ __('Pending') }}</option>
                                        <option value="approved" {{ get_static_option('service_update_status_settings')=='approved' ? 'selected' : '' }} >{{ __('Approved') }}</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3 submit_btn">{{__('Submit ')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


