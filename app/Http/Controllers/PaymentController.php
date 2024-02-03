<?php

namespace App\Http\Controllers;
use Mail; 
use Illuminate\Http\Request;
use App\Category_Model;
use App\State_Model;
use App\City_Model;
use App\Countries_Model;
use App\Airport_Model;
use App\FileStatus_Model;
use App\UserDetails_Model;  
use App\Flight_Model;
use App\Flight_Log_Model;
use App\Wallet_Model;
use App\Wallet_Transaction_Model;
use Illuminate\Support\Facades\Http;
use Stevebauman\Location\Facades\Location;
use App\Payment_Model;
use DateTime;

class PaymentController extends Controller
{
       public function wallet_payment(Request $request)
    {
      $amount = $request->amount;
      $payment_for = $request->payment_for;
      $user_id = session()->get('user_id');
	  if($user_id){
	    $wallet_details = Wallet_Model::where('user_id',$user_id)->first();
	    if($wallet_details){
	       if($wallet_details->amount  >= $amount){
            	    $user_id = session()->get('user_id');
            	    if($user_id){
            	    $wallet_details = Wallet_Model::where('user_id',$user_id)->first();
                    
                    $new = $amount;
                   if($wallet_details){
                       $amount1 = $wallet_details->amount; 
                    }else{
                        $amount1 = 0;
                    }
                    
                    if($wallet_details){
                        $credit_amount1 = $wallet_details->debit_amount;
                    }else{
                        $credit_amount1 = 0;
                    }
                    
                    $total = $amount1 - $new;
                    $total_credit_amount = $new + $credit_amount1;
            		$data2['amount'] = $total ; 
            		$data2['debit_amount'] = $new; ;
            // 			print_r($data);die;
            		$contact_id = Wallet_Model::where('user_id',$user_id)->update($data2);
            		
                    $id = session()->get('user_id');
                    
                        $data1['user_id']= $user_id;
            			$data1['amount']= $total;
            			$data1['debit_amount']=  $new ;
            // 			print_r($data);die;
            			 Wallet_Transaction_Model::create($data1);
                    // Payment Details 
                    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $pin = mt_rand(1000000, 9999999)
                    . mt_rand(1000000, 9999999)
                    . $characters[rand(0, strlen($characters) - 1)];
                        $string = str_shuffle($pin);
                        $data12['payment_for']= $payment_for;
            			$data12['amount']= $amount;
            			$data12['payment_type']= "Wallet";
            			$data12['payment_id']= $string;
            // 			print_r($data);die; 
            			 Payment_Model::create($data12);
                    $user_count = 0;
                    session()->put('PaymentID',$string);
                    //   return redirect()->back()->with('message',"Payment Success...");
                   return response()->json(['order_id' => $string,'message' => "payment Successfull",]);
            	    }
	       }
	        return response()->json(['order_id' => "",'message' => "payment Failed Wallet Amount Low"]);
	    }
	  }
    
    }
}
