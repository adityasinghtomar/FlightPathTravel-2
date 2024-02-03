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
        $wallet_details = Wallet_Model::where('id',$wallet_id)->first();
        $new = $request->input('amount');
        $total = $new + $wallet_details->amount;
        $total_credit_amount = $new + $wallet_details->credit_amount;
		$data['amount'] = $total ; 
		$data['credit_amount'] = $total_credit_amount ;
// 			print_r($data);die;
		$contact_id = Wallet_Model::where('id',$wallet_id)->update($data);
		
        $id = session()->get('user_id');
        
            $data1['user_id']= $id;
			$data1['amount']= $wallet_details->amount;;
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
    
}    