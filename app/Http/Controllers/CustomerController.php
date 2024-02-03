<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Model; 
use App\Flight_Model;
use App\Hotel_Model;
use App\Wallet_Model;
// use App\Category_Model;
use App\UserDetails_Model;
use App\Posts_Model;
use App\Commision_Model;
use App\Live_Streaming_Model;
use App\Wallet_Transaction_Model;
use DateTime;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }
   
    public function hotels()
    {
        // print_r($id);die;
         $id = session()->get('user_id');
        $user_count = 0;
         $flight = Hotel_Model::where('user_id',$id)->get();
        $customer=UserDetails_Model::where('id',$id)->first();
        return view('flight/hotel-booking',compact('user_count','customer','flight'));
    }
    public function flights()
    {
        // print_r($id);die;
         $id = session()->get('user_id');
        $user_count = 0;
       $flight = Flight_Model::where('user_id',$id)->get();
        $customer=UserDetails_Model::where('id',$id)->first();
        return view('flight/flight-booking-details',compact('user_count','customer','flight'));
    }
 public function dashboard()
    {
        // print_r($id);die;
        $id = session()->get('user_id');
        $user_count = 0;
        $customer=UserDetails_Model::where('id',$id)->first();
        $flight = Flight_Model::where('user_id',$id)->get();
        return view('flight/dashboard',compact('user_count','customer','flight'));
    }
    public function wallet()
    {
          $id = session()->get('user_id');
        $user_count = 0;
       $flight = Flight_Model::where('user_id',$id)->get();
        $customer=UserDetails_Model::where('id',$id)->first();
       $wallet = Wallet_Model::where('user_id',$id)->first();
       $wallet_history = Wallet_Transaction_Model::where('user_id',$id)->get();
        return view('flight/wallet',compact('user_count','customer','flight','wallet','wallet_history'));
    }
     public function profile()
    {
        // print_r($id);die;
         $id = session()->get('user_id');
        $user_count = 0;
        $flight = Flight_Model::where('user_id',$id)->get();
        $customer=UserDetails_Model::where('id',$id)->first();
        return view('flight/my-profile',compact('user_count','customer','flight'));
    }
    
	
}
