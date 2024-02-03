<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Model; 

use App\Flight_Model;
// use App\Category_Model;
use App\UserDetails_Model;
use App\Hotel_Model;
use App\Coupon_Model;
use App\Live_Streaming_Model;
use App\Sponsor_Ad_Model;
use DateTime;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }
     public function get_coupon_details()
    {
       $flight = Coupon_Model::get();
        return view('flight/admin/all-coupon',compact('flight'));
    }
     public function add_coupon()
    { 
        $user =UserDetails_Model::get();
        return view('flight/admin/add-coupon',compact('user'));
    }
     public function edit_coupon(Request $request,$id)
    { 
       $user =UserDetails_Model::get();
       $coupon = Coupon_Model::where('id',$id)->first();
        return view('flight/admin/edit-coupon',compact('user','coupon'));
    }
     public function store_coupon(Request $request)
    {
        $user =UserDetails_Model::get();
            $data['coupon_code']= $request->input('coupon_code');
			$data['description']= $request->input('description');
			$data['coupon_type']= $request->input('coupon_type');
			$data['amount']= $request->input('amount');
			$data['user_id'] = $request->input('user_id');
			$data['minimum_amount'] = $request->input('minimum_amount');
			$data['status'] = $request->input('status');
			$data['start_date'] = $request->input('start_date');
			$data['end_date'] = $request->input('start_date');
// 			print_r($data);die;
			$contact_id = Coupon_Model::create($data);
		 return view('flight/admin/add-coupon',compact('user'));	
    }
     public function update_coupon(Request $request)
    {
        $user =UserDetails_Model::get();
            $id = $request->input('id');       
            $data['coupon_code']= $request->input('coupon_code');
			$data['description']= $request->input('description');
			$data['coupon_type']= $request->input('coupon_type');
			$data['amount']= $request->input('amount');
			$data['user_id'] = $request->input('user_id');
			$data['minimum_amount'] = $request->input('minimum_amount');
			$data['status'] = $request->input('status');
			$data['start_date'] = $request->input('start_date');
			$data['end_date'] = $request->input('start_date');
// 			print_r($data);die;
			$contact_id = Coupon_Model::where('id',$id)->update($data);
		   $flight = Coupon_Model::get();
        return view('flight/admin/all-coupon',compact('flight'));
    	
    }
     public function coupon_det(Request $request)
    {
    $cop = $request->coupon;
    $coupon = Coupon_Model::where('coupon_code',$cop)->first();
    $ResultIndex = $request->ResultIndex;
    $TraceId = $request->TraceId;
    $token_id = $request->token_id;
    $EndUserIp = $request->EndUserIp;
    $BaseFare = $request->BaseFare;
    $Currency = $request->Currency;
    $Tax = $request->Tax;
    $YQTax = $request->YQTax;
    $AdditionalTxnFeeOfrd = $request->AdditionalTxnFeeOfrd;
    $AdditionalTxnFeePub = $request->AdditionalTxnFeePub;
    $OtherCharges = $request->OtherCharges;
    $Discount = $request->Discount;
    $PublishedFare = $request->PublishedFare;
    $TdsOnCommission = $request->TdsOnCommission;
    $TdsOnPLB = $request->TdsOnPLB;
    $TdsOnIncentive = $request->TdsOnIncentive;
    $ServiceFee = $request->ServiceFee;
    $Destination_name = $request->Destination_name;
    $Destination_address = $request->Destination_address;
    $Source_name = $request->Source_name;
    $Source_address = $request->Source_address;
    $Duration = $request->Duration;
    
    return view('flight/flight_booking_submission',compact('coupon','token_id','Duration','Source_address','Source_name','Destination_address','Destination_name','ServiceFee','TdsOnIncentive','TdsOnPLB','TdsOnCommission','PublishedFare','ResultIndex','TraceId','EndUserIp','BaseFare','Currency','Tax','YQTax','AdditionalTxnFeeOfrd','AdditionalTxnFeePub','OtherCharges','Discount'));
    
    }
    
}