@extends('backend.admin-master')
@section('style')
    @include('backend.partials.datatable.style-enqueue')
@endsection
@section('site-title')
    {{__('All Email Templates')}}
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
                        <h4 class="header-title">{{__('All Email Templates')}}</h4>
                        <div class="table-wrap table-responsive">
                            <table class="table table-default" >
                                <thead>
                                <th>{{__('SN')}}</th>
                                <th>{{__('Title')}}</th>
                                <th>{{__('Action')}}</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><strong>1</strong></td>
                                    <td>
                                        {{__('Book Provider Reader Register Template')}} <br>
                                    <span class="mt-2"><b class="text-info">{{__('Notes: ')}}</b> {{ __('For the Book Provider and Reader Register.') }}</span>
                                    </td>
                                    <td>
                                        <x-edit-icon :url="route('admin.email.user.register.template')"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>2</strong></td>
                                    <td>{{__('Book Provider Reader Email Verify Template')}}<br>
                                        <span class="mt-2"><b class="text-info">{{__('Notes: ')}}</b> {{ __('For the Book Provider and Reader Register E-mail Verify.') }}</span>
                                    </td>
                                    <td>
                                        <x-edit-icon :url="route('admin.email.user.verify.template')"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>3</strong></td>
                                    <td>{{__('New Book Approve Template
')}}<br>
                                        <span class="mt-2"><b class="text-info">{{__('Notes: ')}}</b> {{ __('For the Book Provider New Book Approval.') }}</span>
                                    </td>
                                    <td>
                                        <x-edit-icon :url="route('admin.seller.service.approve')"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>4</strong></td>
                                    <td>{{__('Book Provider Report Template')}}<br>
                                        <span class="mt-2"><b class="text-info">{{__('Notes: ')}}</b> {{ __('For the Book Provider Report.') }}</span>
                                    </td>
                                    <td>
                                        <x-edit-icon :url="route('admin.seller.report')"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>5</strong></td>
                                    <td>{{__('Book Provider Payout Request Template')}}<br>
                                        <span class="mt-2"><b class="text-info">{{__('Notes: ')}}</b> {{ __('For the Book Provider Create Payout Request.') }}</span>
                                    </td>
                                    <td>
                                        <x-edit-icon :url="route('admin.seller.payout.request')"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>6</strong></td>
                                    <td>{{__('Book Provider  Booking Ticket Template
')}}<br>
                                        <span class="mt-2"><b class="text-info">{{__('Notes: ')}}</b> {{ __('For the Book Provider Booking Ticket.') }}</span>
                                    </td>
                                    <td>
                                        <x-edit-icon :url="route('admin.seller.order.ticket')"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>7</strong></td>
                                    <td>{{__('Book Provider Verification Request Template')}}<br>
                                        <span class="mt-2"><b class="text-info">{{__('Notes: ')}}</b> {{ __('For the Book Provider Verification Request.') }}</span>
                                    </td>
                                    <td>
                                        <x-edit-icon :url="route('admin.seller.verification')"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>8</strong></td>
                                    <td>{{__('Book Provider Reader Extra Book Template')}}<br>
                                        <span class="mt-2"><b class="text-info">{{__('Notes: ')}}</b> {{ __('For the Book Provider and Reader Extra Book.') }}</span>
                                    </td>
                                    <td>
                                        <x-edit-icon :url="route('admin.seller.extra.service')"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>9</strong></td>
                                    <td>{{__('Reader Booking Decline Template')}}<br>
                                        <span class="mt-2"><b class="text-info">{{__('Notes: ')}}</b> {{ __('For the Reader Booking Decline.') }}</span>
                                    </td>
                                    <td>
                                        <x-edit-icon :url="route('admin.buyer.order.decline')"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>10</strong></td>
                                    <td>{{__('Reader Report Template')}} <br>
                                        <span class="mt-2"><b class="text-info">{{__('Notes: ')}}</b> {{ __(' For the Reader Report.') }}</span>
                                    </td>
                                    <td>
                                        <x-edit-icon :url="route('admin.buyer.report')"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>11</strong></td>
                                    <td>{{__('Buyer Order Ticket Template')}} <br>
                                        <span class="mt-2"><b class="text-info">{{__('Notes: ')}}</b> {{ __('For the Buyer Order Ticket.') }}</span>
                                    </td>
                                    <td>
                                        <x-edit-icon :url="route('admin.buyer.order.ticket')"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>12</strong></td>
                                    <td>{{__('Buyer Extra Service Accept Template')}} <br>
                                        <span class="mt-2"><b class="text-info">{{__('Notes: ')}}</b> {{ __('For the Buyer Extra Service Accept.') }}</span>
                                    </td>
                                    <td>
                                        <x-edit-icon :url="route('admin.buyer.extra.service.accept')"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>13</strong></td>
                                    <td>{{__('Admin Payment Status Change Template')}} <br>
                                        <span class="mt-2"><b class="text-info">{{__('Notes: ')}}</b> {{ __('For the Admin Payment Status Change.') }}</span>
                                    </td>
                                    <td>
                                        <x-edit-icon :url="route('admin.payment.status.change.email')"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>14</strong></td>
                                    <td>{{__('Admin Send Withdraw Amount Template')}}<br>
                                        <span class="mt-2"><b class="text-info">{{__('Notes: ')}}</b> {{ __('For the Admin Send Withdraw Amount.') }}</span>
                                    </td>
                                    <td>
                                        <x-edit-icon :url="route('admin.payment.withdraw.amount.email')"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>15</strong></td>
                                    <td>{{__('Admin Service Approve Template')}} <br>
                                        <span class="mt-2"><b class="text-info">{{__('Notes: ')}}</b> {{ __('For the Admin Service Approve.') }}</span>
                                    </td>
                                    <td>
                                        <x-edit-icon :url="route('admin.service.approve.email')"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>16</strong></td>
                                    <td>{{__('Admin Service Assign Template')}} <br>
                                        <span class="mt-2"><b class="text-info">{{__('Notes: ')}}</b> {{ __('For the Admin Service Assign.') }}</span>
                                    </td>
                                    <td>
                                        <x-edit-icon :url="route('admin.service.assign.seller.email')"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>17</strong></td>
                                    <td>{{__('Admin Seller Verification Template')}} <br>
                                        <span class="mt-2"><b class="text-info">{{__('Notes: ')}}</b> {{ __('For the Admin Seller Verification.') }}</span>
                                    </td>
                                    <td>
                                        <x-edit-icon :url="route('admin.seller.verification.email')"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>18</strong></td>
                                    <td>{{__('Admin To User Verification Code Template')}}<br>
                                        <span class="mt-2"><b class="text-info">{{__('Notes: ')}}</b> {{ __('For the Admin To User Verification Code.') }}</span>
                                    </td>
                                    <td>
                                        <x-edit-icon :url="route('admin.user.verification.code.email')"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>19</strong></td>
                                    <td>{{__('Admin To User New Password Template')}} <br>
                                        <span class="mt-2"><b class="text-info">{{__('Notes: ')}}</b> {{ __('For the Admin To User New Password.') }}</span>
                                    </td>
                                    <td>
                                        <x-edit-icon :url="route('admin.user.new.password.email')"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>20</strong></td>
                                    <td>{{__('New Order Template (All module order included)')}} <br>
                                        <span class="mt-2"><b class="text-info">{{__('Notes: ')}}</b> {{ __('For the New Order Template (All module order included).') }}</span>
                                    </td>
                                    <td>
                                        <x-edit-icon :url="route('admin.new.order.ad.sell.buyer.email')"/>
                                    </td>
                                </tr>
                                @if(moduleExists('JobPost'))
                                    <tr>
                                        <td><strong>21</strong></td>
                                        <td>{{__('Job Create Template')}} <br>
                                            <span class="mt-2"><b class="text-info">{{__('Notes: ')}}</b> {{ __('For the Job Create.') }}</span>
                                        </td>
                                        <td>
                                            <x-edit-icon :url="route('admin.job.create.email')"/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><strong>21</strong></td>
                                        <td>{{__('Job Apply Template')}} <br>
                                            <span class="mt-2"><b class="text-info">{{__('Notes: ')}}</b> {{ __('For the Job Apply.') }}</span>
                                        </td>
                                        <td>
                                            <x-edit-icon :url="route('admin.job.apply.email')"/>
                                        </td>
                                    </tr>
                                @endif

                                @if(moduleExists('Subscription'))
                                    <tr>
                                        <td><strong>22</strong></td>
                                        <td>{{__('Buy New Subscription Template')}} <br>
                                            <span class="mt-2"><b class="text-info">{{__('Notes: ')}}</b> {{ __('For the Buy New Subscription.') }}</span>
                                        </td>
                                        <td>
                                            <x-edit-icon :url="route('admin.subscription.buy.email')"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>23</strong></td>
                                        <td>{{__('Renew Subscription Template')}}<br>
                                            <span class="mt-2"><b class="text-info">{{__('Notes: ')}}</b> {{ __('For the Renew Subscription.') }}</span>
                                        </td>
                                        <td>
                                            <x-edit-icon :url="route('admin.subscription.renew.email')"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>24</strong></td>
                                        <td>{{__('Subscription Payment Status Update Template')}} <br>
                                            <span class="mt-2"><b class="text-info">{{__('Notes: ')}}</b> {{ __('For the Subscription Payment Status Update.') }}</span>
                                        </td>
                                        <td>
                                            <x-edit-icon :url="route('admin.subscription.payment.status.email')"/>
                                        </td>
                                    </tr>
                                @endif

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
    @include('backend.partials.datatable.script-enqueue')
    <script>
        $(document).ready(function () {
           //to do
        });
    </script>

@endsection
