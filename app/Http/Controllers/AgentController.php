<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Model; 

use App\Flight_Model;
// use App\Category_Model;
use App\UserDetails_Model;
use App\Hotel_Model;
use App\ContactUs_Model;
use App\Live_Streaming_Model;
use App\Sponsor_Ad_Model;
use DateTime;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }
     public function get_hotel_details()
    {
       $flight = Hotel_Model::where('user_id',session()->get('user_id'))->get();
        return view('flight/partner/db-vendor-hotels',compact('flight'));
    }
     public function get_flight_details()
    {
       $flight = Flight_Model::where('user_id',session()->get('user_id'))->get();
        return view('flight/partner/db-vendor-flight',compact('flight'));
    }
     public function partner_signup()
    {
        return view('flight/become-expert');
    }
     public function partner_store(Request $request)
    {
            $data['name']= $request->input('name');
			$data['lname']= $request->input('lname');
			$data['email']= $request->input('email');
			$data['mobile']= $request->input('mobile');
			$data['password'] = $request->input('password');
			$data['role'] = 'agent';
			$data['address'] = $request->input('address');
			$data['state'] = $request->input('state');
			$data['country'] = $request->input('country');
			$data['city'] = $request->input('city');
			$data['user_id'] = session()->get('user_id');
// 			print_r($data);die;
			$contact_id = UserDetails_Model::create($data);
		return view('flight/become-expert');	
    }
}