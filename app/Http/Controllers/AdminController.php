<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Model; 

use App\Achievement_Model;
// use App\Category_Model;
use App\UserDetails_Model;
use App\Posts_Model;
use App\Commision_Model;
use App\Live_Streaming_Model;
use App\Sponsor_Ad_Model;
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
	
		
        // return view('/admin/dashboard',compact('user_count'));
        return view('flight/login');
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
        
            $data['name']= $request->input('name');
			$data['lname']= $request->input('lname');
			$data['email']= $request->input('email');
			$data['mobile']= $request->input('mobile');
			$data['password'] = $request->input('password');
			$data['role'] = 'customer';
			$data['user_id'] = session()->get('user_id');
// 			print_r($data);die;
			$contact_id = UserDetails_Model::create($data);
        return view('flight/login');
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
         return redirect()->back()->with('success', __('User Created successfully!'));
    }
     public function login_admin(Request $request)
    {
        // print_r("sf");die;
       $data = UserDetails_Model::where('email',$request->email)->where('password',$request->password)->first();
        		$user_count = 0;
// 		
        return view('flight/admin/db-dashboard',compact('user_count'));
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
        $id = $request->input('id');
       $data['name']= $request->input('name');
	   $data['commision']= $request->input('commision');
		$contact_id = Commision_Model::where('id',$id)->update($data);;
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
	
	
}
