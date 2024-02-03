<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Model; 
use App\Flight_Model;
use App\Hotel_Model;
use App\Wallet_Model;
// use App\Category_Model;
use App\UserDetails_Model;
use App\Wallet_Transaction_Model;
use App\Commision_Model;
use App\Live_Streaming_Model;
use App\Sponsor_Ad_Model;
use DateTime;

class WalletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }
    
     public function add_wallet(Request $request)
    {
        // Add Wallet
        $wallet_id = $request->input('id');
        $wallet_user = Wallet_Model::where('id',$wallet_id)->first();
        if(!$wallet_user){
           $data2['amount'] = $request->input('amount'); 
		   $data2['credit_amount'] = $request->input('amount');
		   $data2['user_id'] = session()->get('user_id');
// 			print_r($data);die;
		 Wallet_Model::create($data2);;
        }
        $wallet_details = Wallet_Model::where('id',$wallet_id)->first();
        $new = $request->input('amount'); 
       if($wallet_details){
           $amount1 = $wallet_details->amount; 
        }else{
            $amount1 = 0;
        }
        
        if($wallet_details){
            $credit_amount1 = $wallet_details->credit_amount;
        }else{
            $credit_amount1 = 0;
        }
        
        $total = $new + $amount1;
        $total_credit_amount = $new + $credit_amount1;
		$data['amount'] = $total ; 
		$data['credit_amount'] = $total_credit_amount ;
// 			print_r($data);die;
		$contact_id = Wallet_Model::where('id',$wallet_id)->update($data);
		
        $id = session()->get('user_id');
        
            $data1['user_id']= $id;
			$data1['amount']= $amount1;
			$data1['credit_amount']=  $request->input('amount');
// 			print_r($data);die;
			 Wallet_Transaction_Model::create($data1);
        
        $user_count = 0;
        $flight = Flight_Model::where('user_id',$id)->get();
        $customer=UserDetails_Model::where('id',$id)->first();
       $wallet = Wallet_Model::where('user_id',$id)->first(); 
      $wallet_history = Wallet_Transaction_Model::where('user_id',$id)->get();
        return view('flight/wallet',compact('user_count','customer','flight','wallet','wallet_history'));
    }
     public function wallet()
    {
        $users =UserDetails_Model::get();
        // print_r("ff");die;
        return view('flight/admin/add-wallet',compact('users'));
    }
     public function store_wallet(Request $request)
    {
        // Add Wallet
        $user_id = $request->input('user');
        $wallet_user = Wallet_Model::where('user_id',$user_id)->first();
        if(!$wallet_user){
           $data2['amount'] = $request->input('amount'); 
		   $data2['credit_amount'] = $request->input('amount');
		   $data2['user_id'] = $request->input('user');
// 			print_r($data);die;
		 Wallet_Model::create($data2);
		  $users =UserDetails_Model::get();
        // print_r("ff");die;
        return view('flight/admin/add-wallet',compact('users'));
        }
         $users =UserDetails_Model::get();
        // print_r("ff");die;
        return view('flight/admin/add-wallet',compact('users'));
        
    } 
     public function wallet_details()
    {
        $users =UserDetails_Model::get();
        $wallet = Wallet_Model::get();
        // print_r("ff");die;
        return view('flight/admin/all-wallet',compact('users','wallet'));
    }
     public function update_wallet(Request $request)
    {
        // Add Wallet
           $id = $request->input('id');
           $data2['amount'] = $request->input('amount'); 
		   $data2['credit_amount'] = $request->input('amount');
		   $data2['user_id'] = $request->input('user_id');
// 			print_r($data);die;
		Wallet_Model::where('id',$id)->update($data2);
	         $users =UserDetails_Model::get();
        $wallet = Wallet_Model::get();
        // print_r("ff");die;
        return view('flight/admin/all-wallet',compact('users','wallet'));

        
    } 
}    