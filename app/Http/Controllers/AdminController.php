<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Model; 

use App\Markup_Model;
// use App\Category_Model;
use App\UserDetails_Model;
use App\Posts_Model;
use App\Setting_Model;
use App\Commision_Model;
use App\Commision_Add_Model;
use App\Live_Streaming_Model;
use App\Markup_Apply_Model;
use App\Contect_Us_Model;
use App\Setting_Flight_Model;
use App\Setting_Api_Model;
use App\Setting_General_Model;
use DateTime;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
// 		$user_count = UserDetails_Model::count();
// 		$shop_count = User_Model::where('role','4')->where('is_otp_varified','1')->count();
// 		$model_count = User_Model::where('role','3')->where('is_otp_varified','1')->count();
// 		$post_count = Posts_Model::where('status','1')->has('user')->count();
// 		$booked_live_stream_count = Category_Model::count();
// 		$live_stream_count = Category_Model::count();
	
		        // Authenticate API
$endpoint = 'http://api.tektravels.com/SharedServices/SharedData.svc/rest/Authenticate'; // Replace with the actual flight search endpoint
$url = $endpoint;
                $json='{
"ClientId": "ApiIntegrationNew",
"UserName": "Flightpath",
"Password": "Flight@1234", 
"EndUserIp": "192.168.11.120"
}';
$ch = curl_init($url);
$data =$json;
$payload = $json;
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result1 = curl_exec($ch);
$result = json_decode($result1);
// Search City 

$search1 = 'http://api.tektravels.com/SharedServices/StaticData.svc/rest/GetDestinationSearchStaticData'; // Replace with the actual flight search endpoint
$json12='{ 
"EndUserIp": "192.168.11.120",
"TokenId": "'.$result->TokenId.'",
"CountryCode" :"IN",
"SearchType"  :"1"
}'; 
$ch = curl_init($search1);
$payload12 = $json12;
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload12);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$ss = curl_exec($ch);
$ress = json_decode($ss);   
// print_r($ress);die;
$token_id = $result->TokenId;
$data = $ress->Destinations;

        // return view('/admin/dashboard',compact('user_count'));
        return view('flight/login',compact('data','token_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('flight/register');
    }
     public function user_details()
    {
        $flight =UserDetails_Model::get();
        return view('flight/admin/db-all-user',compact('flight'));
    }
     public function admin_login()
    {
        // print_r("ff");die;
        return view('flight/admin');
    }
    // Customer Side
     public function user_register(Request $request)
    {
        UserDetails_Model::get();
      $user1 =  UserDetails_Model::where('email',$request->email)->first(); 
      if(!$user1){
            $data['name']= $request->input('name');
			$data['lname']= $request->input('lname');
			$data['email']= $request->input('email');
			$data['mobile']= $request->input('mobile');
			$data['password'] = $request->input('password');
			$data['role'] = 'customer';
			$data['user_id'] = session()->get('user_id');
// 			print_r($data);die;
			$contact_id = UserDetails_Model::create($data);
            return view('flight/login')->with('message',"User Register Successfull...");    
        // return view('flight/login');
      }
      return redirect()->back()->with('message',"User Already Register...");
    }
    public function user_login(Request $request)
    {
       $data = UserDetails_Model::where('email',$request->email)->where('password',$request->password)->first();
        if(!empty($data)){
            $request->session()->put('name',$data->name);
            $request->session()->put('commision',$data->commision);
            $request->session()->put('user_id',$data->id);
            $request->session()->put('role',$data->role);
            if($data->role =='agent'){
            return view('flight/partner/db-dashboard',compact('data'));
            }else
            {
                return view('auth/login',compact('data'));
            }
        }else{
            return view('flight/login');
        }
    }
    
    // Contact Us Store 
     public function contact_store(Request $request)
    {
        UserDetails_Model::get();
        
            $data['fname']= $request->input('fname');
			$data['lname']= $request->input('lname');
			$data['email']= $request->input('email');
			$data['mobile']= $request->input('mobile');
			$data['message'] = $request->input('message');
// 			print_r($data);die;
			$contact_id = Contect_Us_Model::create($data);
        return redirect()->back()->with('message', __('Inquiry Submit Successfully!'));
    }
    // Logout 
    public function logout(Request $request)
    {
        session()->forget(['name','commision','user_id']);
       return view('auth/login'); 
    }
    
    // Admin Side 
     public function add_user()
    {
        // print_r("ff");die;
       $commision = Commision_Model::get();
        return view('flight/admin/add-user',compact('commision'));
    }
    
      public function user_store(Request $request)
    {
        UserDetails_Model::get();
        
            $data['name']= $request->input('name');
			$data['lname']= $request->input('lname');
			$data['email']= $request->input('email');
			$data['mobile']= $request->input('mobile');
			$data['password'] = $request->input('password');
			$data['commision'] = $request->input('commision');
			$data['role'] = 'agent';
			$data['user_id'] = session()->get('user_id');
// 			print_r($data);die;
			$contact_id = UserDetails_Model::create($data);
         return redirect()->back()->with('success', __('Agent Created successfully!'));
    }
     public function login_admin(Request $request)
    {
        // print_r("sf");die;
       $data = UserDetails_Model::where('email',$request->email)->where('password',$request->password)->first();
        		$user_count = 0;
        if($data){	
            	$user_count = 0;
        return view('flight/admin/db-dashboard',compact('user_count'));		
// 		return view('flight/login')->with('message',"User Register Successfull...");    
        // return view('flight/login');
      }
      return redirect()->back()->with('message',"Email And Password Wrong...");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
     public function get_commision_details()
    {
        $flight = Commision_Model::get();
        return view('flight/admin/all-commision',compact('flight'));
    }
     public function commision_add()
    {
        // print_r("ff");die;
        return view('flight/admin/add-commision');
    }
     public function commision_edit($id)
    {
        $flight = Commision_Model::where('id',$id)->first();
        return view('flight/admin/edit-commision',compact('flight'));
    }
    
     public function commision_update(Request $request)
    {
        // print_r("ff");die;
        $id = $request->input('id');
       $data['name']= $request->input('name');
	   $data['commision']= $request->input('commision');
	   $data['commision_type']= $request->input('commision_type');
	   $data['commision_for']= $request->input('commision_for');
		$contact_id = Commision_Model::where('id',$id)->update($data);
		$flight = Commision_Model::get();
        return view('flight/admin/all-commision',compact('flight'));
    }
    
     public function commision_store(Request $request)
    {
       $data['name']= $request->input('name');
	   $data['commision']= $request->input('commision');
	    $data['commision_type']= $request->input('commision_type');
	   $data['commision_for']= $request->input('commision_for');
		$contact_id = Commision_Model::create($data);
		return view('flight/admin/add-commision');
    }
    // Users Edit 
   
     public function  users_edit($id)
    {
        $users =UserDetails_Model::where('id',$id)->first();
        $commision = Commision_Model::get();
        // print_r("ff");die;
        return view('flight/admin/edit-user',compact('users','commision'));
    }
     public function users_update(Request $request)
    {
            $id= $request->input('id');
            $data['name']= $request->input('name');
			$data['lname']= $request->input('lname');
			$data['email']= $request->input('email');
			$data['mobile']= $request->input('mobile');
// 			$data['role'] = 'agent';
			$data['address'] = $request->input('address');
			$data['state'] = $request->input('state');
			$data['country'] = $request->input('country');
			$data['city'] = $request->input('city');
			$data['commision'] = $request->input('commision');
			$data['status'] = $request->input('status');
// 			print_r($data);die;
			$contact_id = UserDetails_Model::where('id',$id)->update($data);
		    $flight =UserDetails_Model::get();
        return view('flight/admin/db-all-user',compact('flight'));	
    }
	
	 public function all_commision_add()
    {
        $users =UserDetails_Model::get();
        $commision = Commision_Add_Model::get();
        // print_r("ff");die;
        return view('flight/admin/all-commision-apply',compact('users','commision'));
    }
     public function commision_apply()
    {
        $users =UserDetails_Model::get();
        $commision = Commision_Model::get();
        // print_r("ff");die;
        return view('flight/admin/add-commision-apply',compact('users','commision'));
    }
     public function store_commision_apply(Request $request)
    {
            $commision_type =Commision_Model::where('id',$request->input('commision_type'))->first();
            $Commision_Add_Model = Commision_Add_Model::where('user_id',$request->input('user'))->where('commision_id',$request->input('commision_type'))->first();
            if(empty($Commision_Add_Model)){
            $data['user_id']= $request->input('user');
			$data['commision_id']= $request->input('commision_type');
			$data['commision_type']= $commision_type->commision_for;
			$contact_id = Commision_Add_Model::create($data);
            }
        $users =UserDetails_Model::get();
        $commision = Commision_Add_Model::get();
        return view('flight/admin/all-commision-apply',compact('users','commision'));
    }
    // Markup
     public function all_markup()
    {
        $users =UserDetails_Model::get();
        $commision = Markup_Model::get();
        // print_r("ff");die;
        return view('flight/admin/all-markup',compact('users','commision'));
    }
     public function add_markup()
    {
        $users =UserDetails_Model::get();
        $commision = Markup_Model::get();
        // print_r("ff");die;
        return view('flight/admin/add-markup',compact('users','commision'));
    }
     public function store_markup(Request $request)
    {
            $data['name']= $request->input('name');
			$data['markup_amount']= $request->input('markup_amount');
			$contact_id = Markup_Model::create($data);
           
        $users =UserDetails_Model::get();
        $commision = Markup_Model::get();
        // print_r("ff");die;
        return view('flight/admin/all-markup',compact('users','commision'));
    }
     public function update_markup(Request $request)
    {
        // print_r($request->input('id'));die;
            $id= $request->input('id');
            $data['name']= $request->input('name');
			$data['markup_amount']= $request->input('markup_amount');
			$contact_id = Markup_Model::where('id',$id)->update($data);
           
        $users =UserDetails_Model::get();
        $commision = Markup_Model::get();
        // print_r("ff");die;
        return view('flight/admin/all-markup',compact('users','commision'));
    }
	
	// Markup Apply
     public function all_markup_apply()
    {
        $users =UserDetails_Model::get();
        $commision = Markup_Apply_Model::get();
        // print_r("ff");die;
       $commisionss = Markup_Model::get();
        // print_r("ff");die;
        return view('flight/admin/all-markup-apply',compact('users','commision','commisionss'));
    }
     public function apply_markup()
    {
        $users =UserDetails_Model::get();
        $commision = Markup_Model::get();
        // print_r("ff");die;
        return view('flight/admin/apply-markup',compact('users','commision'));
    }
     public function store_apply_markup(Request $request)
    {
            $data['markup_id']= $request->input('markup_id');
			$data['user_id']= $request->input('user_id');
			$contact_id = Markup_Apply_Model::create($data);
           
        $users =UserDetails_Model::get();
        $commision = Markup_Apply_Model::get();
        $commisionss = Markup_Model::get();
        // print_r("ff");die;
        return view('flight/admin/all-markup-apply',compact('users','commision','commisionss'));
    }
     public function update_apply_markup(Request $request)
    {
        // print_r($request->input('id'));die;
            $id= $request->input('id');
            $data['markup_id']= $request->input('markup_id');
			$data['user_id']= $request->input('user_id');
			$contact_id = Markup_Apply_Model::where('id',$id)->update($data);
           
        $users =UserDetails_Model::get();
        $commision = Markup_Apply_Model::get();
        // print_r("ff");die;
       $commisionss = Markup_Model::get();
        // print_r("ff");die;
        return view('flight/admin/all-markup-apply',compact('users','commision','commisionss'));
    }
    // Payment Setting
     public function setting()
    {
        $flight =Setting_Model::get();
        // $commision = Markup_Model::get();
        // print_r("ff");die;
        return view('flight/admin/setting',compact('flight'));
    }
    public function setting_update(Request $request)
    {
            $id= $request->input('id');
            $data['status']= $request->input('status');
			$contact_id = Setting_Model::where('id',$id)->update($data);
        $flight =Setting_Model::get();
        // $commision = Markup_Model::get();
        // print_r("ff");die;
        return view('flight/admin/setting',compact('flight'));
    }
    
    // API Setting
     public function api_setting()
    {
        $flight =Setting_Api_Model::get();
        // $commision = Markup_Model::get();
        // print_r("ff");die;
        return view('flight/admin/setting-api',compact('flight'));
    }
    public function api_setting_update(Request $request)
    {
            $id= $request->input('id');
            $data['status']= $request->input('status');
			$contact_id = Setting_Api_Model::where('id',$id)->update($data);
        $flight =Setting_Api_Model::get();
        // $commision = Markup_Model::get();
        // print_r("ff");die;
        return view('flight/admin/setting-api',compact('flight'));
    }
     
    // Flight Setting
     public function flight_setting()
    {
        $flight =Setting_Flight_Model::get();
        // $commision = Markup_Model::get();
        // print_r("ff");die;
        return view('flight/admin/setting-flight',compact('flight'));
    }
    public function flight_setting_update(Request $request)
    {
            $id= $request->input('id');
            $data['status']= $request->input('status');
			$contact_id = Setting_Flight_Model::where('id',$id)->update($data);
        $flight =Setting_Flight_Model::get();
        // $commision = Markup_Model::get();
        // print_r("ff");die;
        return view('flight/admin/setting-flight',compact('flight'));
    }
    // General Setting
     public function general_setting()
    {
        $flight =Setting_General_Model::get();
        // $commision = Markup_Model::get();
        // print_r("ff");die;
        return view('flight/admin/setting-general',compact('flight'));
    }
    public function general_setting_update(Request $request)
    {
            $id= $request->input('id');
            $data['status']= $request->input('status');
			$contact_id = Setting_General_Model::where('id',$id)->update($data);
        $flight =Setting_General_Model::get();
        // $commision = Markup_Model::get();
        // print_r("ff");die;
        return view('flight/admin/setting-general',compact('flight'));
    }
}
