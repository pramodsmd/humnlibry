<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Language;
use App\AmountSettings;
use App\AdminCommission;
use App\Accountdeactive;
use App\Service;
use App\Order;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Xgenious\Paymentgateway\Facades\XgPaymentGateway;
use DB;
use Auth;
class MiscellaneousController extends Controller
{
    public function modulePermission(){
        
        return response()->success([
            'permissions'=> [ 
                "JobPost" => moduleExists("JobPost"),
                "LiveChat" => moduleExists("LiveChat"),
                "Subscription" => moduleExists("Subscription"),
                "Wallet" => moduleExists("Wallet"),
            ],
        ]);
    }
    public function currencyInfo(){

        return response()->success([
            'currency'=> [ 
                "symbol" => site_currency_symbol(),
                "code" => get_static_option('site_global_currency'),
                "position" => get_static_option('site_currency_symbol_position')
            ],
        ]);
    }
    
    public function amountSettings(){
        
        $amount_settings = AmountSettings::first();
        
        return response()->success([
            'amount_settings'=> [ 
                "min_amount" => $amount_settings->min_amount,
                "max_amount" => $amount_settings->max_amount
            ],
        ]);
    }

    public function adminCommissionType(){
        $admin_commission = AdminCommission::first();
        $commission_amount = $admin_commission->system_type;
        return response()->success([
               "admin_commission" => $commission_amount
            ]);
    }

    public function accountDelete(Request $request){
        
        $validator = Validator::make($request->all(), [
           'reason' => 'required',
           'description' => 'required',
           'password' => 'required',
       ]);

       if ($validator->fails()) {
            return response()->json([
               'error' => true,
               'message' => $validator->errors()
           ],422);
       }
       
       
       $userDetails = auth('sanctum')->check() ? auth('sanctum')->user() : null;
       
       if(is_null($userDetails)){
           return response()->error([
               'message'=> __('Account Delete Success')
           ]);
       }
       
       if (Hash::check($request->password, $userDetails->password)) {
           
           $auth_seller_id = $userDetails->id;
           //first seller order status check
           $all_orders = Order::where('seller_id', $auth_seller_id)->where('status', 1)->count();
           
               if ($all_orders > 1) {
                   return response()->error(['message'=> __('Your have active orders. Please complete them before trying to delete your account.')]);
           } else {
               Accountdeactive::create([
                   'user_id' => $auth_seller_id,
                   'reason' => $request->reason,
                   'description' => $request->description,
                   'status' => 1,
                   'account_status' => 1,
               ]);
               
               Service::where('seller_id', $auth_seller_id)->update(['status' => 0]);
           }
           
           return response()->success([
               'message'=> __('Your Account Delete Successfully')
           ]);
       }else{
           return response()->error([
               'message'=> __('password does not matched')
           ]);
       }
       
       return response()->error([
           'message'=> __('something went wrong, try after sometime')
       ]);
   }
    
     
   public function Notification(Request $request){
       $data=[];
       $data['id']=$id=auth("sanctum")->user()->id;      

       $validator = Validator::make($data, [
        'id' => 'required',     
       ]);

    if ($validator->fails()) {
         return response()->json([
            'error' => true,
            'message' => $validator->errors()
        ],400);
    }
    $notificationcount=0;
    $notificationlist=[];
    $notificationlist_final=[];
    $details=auth("sanctum")->user();
    $user_type=$details->user_type;
    $notifications= DB::table('notifications')->latest()->select(['id','data','buyer_status','read_at'])->latest()->get();

      foreach($notifications as $key=>$notification){
        $data=json_decode($notification->data);
         if(isset($data->buyer_id) && $user_type==1){
                 if($data->buyer_id==$id){
                       $notificationlist['id']=$notification->id;
                       $notificationlist['data']=$data->order_message??'';
                       $notificationlist['buyer_status']=$notification->buyer_status;
                       $notificationlist['read_at']=$notification->read_at;  
                       array_push($notificationlist_final,$notificationlist);                   
                       if($notification->buyer_status==null){
                           $notificationcount++; 
                       }
                    }
             }else{
            if($data->seller_id==$id){
                $notificationlist['id']=$notification->id;
                $notificationlist['data']=$data->order_message??'';
                $notificationlist['buyer_status']=$notification->buyer_status;
                $notificationlist['read_at']=$notification->read_at;
                array_push($notificationlist_final,$notificationlist);
                if($notification->read_at==null){
                    $notificationcount++; 
                   }    
                }
             }
        }
        return response()->success([
            'un_read_notification'=>$notificationcount,
            'notification'=>$notificationlist_final,
        ]);

   }





    
}
