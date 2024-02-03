<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;
use App\Role_Model;
use App\Category_Model;
use App\User_Model;
use App\UserDetails_Model;
use App\Posts_Model;
use App\FileStatus_Model;
use App\Banker_Model;

class BankerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     return view('auth/banker');
    }
    public function banker_register()
    {
     return view('auth/banker_register');
    }
    public function banker_file_status(Request $request,$id)
    {
        
        $user = Banker_Model::where('id','=',$id)->get();
        $users = UserDetails_Model::get()->pluck('name','id');
        $categories = FileStatus_Model::where('banker_id','=',$id)->get();
     return view('Banker/file_status/index',compact('categories','users','user'));
    }
    
     public function banker_add_customer(Request $request,$id)
    {
        $user = Banker_Model::where('id','=',$id)->get();
        return view('Banker/user/index',compact('user'));
    }
         public function banker_get_customer(Request $request,$id)
    {
        $user = Banker_Model::where('id','=',$id)->get();
        $categories  = UserDetails_Model::where('banker_id','=',$id)->get();
     return view('Banker/user/create',compact('user','categories'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function banker_login(Request $request)
    {
         
        $data = array();
        $data['email'] = $request->input('email');
        $data['password'] =$request->input('password');
        
		     $user = Banker_Model::where('email','=',$data['email'])->where('password','=',$data['password'])->first();    
            if($user){  
                return view('Banker/dashboard',compact('user'));
                    }
            else{
                return view('auth/banker'); 
            }
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
public function banker_register_data(Request $request)
    {
         
        $data = array();
        $data['email'] = $request->input('email');
        $data['password'] =$request->input('password');
        $data['bank_name'] =$request->input('bank');
        $data['mobile'] =$request->input('mobile');
        $data['name'] =$request->input('name');
        
		Banker_Model::create($data);

       return view('auth/banker');
    }

// File Status Update 
    public function document_collect(Request $request,$id,$document_collect,$banker_id)
    {
        $user = Banker_Model::where('id','=',$banker_id)->get();
        $users = UserDetails_Model::get()->pluck('name','id');
        $categories = FileStatus_Model::where('banker_id','=',$banker_id)->get();
        $id = $id;
        $status= $document_collect;
            if($status == 1)
        	{
        		$data['document_collect'] = 0;
        	}
        	else{
        		$data['document_collect'] = 1;
        	}
     FileStatus_Model::where('id',$id)->update($data);
        return view('Banker/user/index',compact('user','categories'));
    }
    
    public function login_file(Request $request,$id,$login_file,$banker_id)
    {
        $user = Banker_Model::where('id','=',$banker_id)->get();
        $users = UserDetails_Model::get()->pluck('name','id');
        $categories = FileStatus_Model::where('banker_id','=',$banker_id)->get();
        $id = $id;
        $status= $login_file;
            if($status == 1)
        	{
        		$data['login_file'] = 0;
        	}
        	else{
        		$data['login_file'] = 1;
        	}
     FileStatus_Model::where('id',$id)->update($data);
        return view('Banker/user/index',compact('user','categories'));
    }
    public function document_verification(Request $request,$id,$document_verification,$banker_id)
    {
        $user = Banker_Model::where('id','=',$banker_id)->get();
        $users = UserDetails_Model::get()->pluck('name','id');
        $categories = FileStatus_Model::where('banker_id','=',$banker_id)->get();
        $id = $id;
        $status= $document_verification;
            if($status == 1)
        	{
        		$data['document_verification'] = 0;
        	}
        	else{
        		$data['document_verification'] = 1;
        	}
     FileStatus_Model::where('id',$id)->update($data);
        return view('Banker/user/index',compact('user','categories'));
    }
    public function personal_discussion(Request $request,$id,$personal_discussion,$banker_id)
    {
        $user = Banker_Model::where('id','=',$banker_id)->get();
        $users = UserDetails_Model::get()->pluck('name','id');
        $categories = FileStatus_Model::where('banker_id','=',$banker_id)->get();
        $id = $id;
        $status= $personal_discussion;
            if($status == 1)
        	{
        		$data['personal_discussion'] = 0;
        	}
        	else{
        		$data['personal_discussion'] = 1;
        	}
     FileStatus_Model::where('id',$id)->update($data);
        return view('Banker/user/index',compact('user','categories'));
    }
     public function legail_process(Request $request,$id,$legail_process,$banker_id)
    {
        $user = Banker_Model::where('id','=',$banker_id)->get();
        $users = UserDetails_Model::get()->pluck('name','id');
        $categories = FileStatus_Model::where('banker_id','=',$banker_id)->get();
        $id = $id;
        $status= $legail_process;
            if($status == 1)
        	{
        		$data['legail_process'] = 0;
        	}
        	else{
        		$data['legail_process'] = 1;
        	}
     FileStatus_Model::where('id',$id)->update($data);
        return view('Banker/user/index',compact('user','categories'));
    }
      public function loan_sention(Request $request,$id,$loan_sention,$banker_id)
    {
        $user = Banker_Model::where('id','=',$banker_id)->get();
        $users = UserDetails_Model::get()->pluck('name','id');
        $categories = FileStatus_Model::where('banker_id','=',$banker_id)->get();
        $id = $id;
        $status= $loan_sention;
            if($status == 1)
        	{
        		$data['loan_sention'] = 0;
        	}
        	else{
        		$data['loan_sention'] = 1;
        	}
     FileStatus_Model::where('id',$id)->update($data);
        return view('Banker/user/index',compact('user','categories'));
    }
     public function disbursement(Request $request,$id,$disbursement,$banker_id)
    {
        $user = Banker_Model::where('id','=',$banker_id)->get();
        $users = UserDetails_Model::get()->pluck('name','id');
        $categories = FileStatus_Model::where('banker_id','=',$banker_id)->get();
        $id = $id;
        $status= $disbursement;
            if($status == 1)
        	{
        		$data['disbursement'] = 0;
        	}
        	else{
        		$data['disbursement'] = 1;
        	}
     FileStatus_Model::where('id',$id)->update($data);
        return view('Banker/user/index',compact('user','categories'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
	

// Banker Login Api
public function bank_login(Request $request)
    {
         
        $data = array();
        $data['mobile'] = $request->input('mobile');
        $data['password'] =$request->input('password');
        
		     $user = Banker_Model::where('mobile','=',$data['mobile'])->where('password','=',$data['password'])->first();    
             $response = [
                    'status' => true,
                    'status_code' => 200,
                    'message' => 'success',
                    'user'=>$user
                ];
    
            return response()->json($response, 200);
}
// Banker Register Api 
public function bank_register(Request $request)
    {
         
        $data = array();
        $data['email'] = $request->input('email');
        $data['password'] =$request->input('password');
        $data['bank_name'] =$request->input('bank_name');
        $data['mobile'] =$request->input('mobile');
        $data['name'] =$request->input('name');
        
		Banker_Model::create($data);
		$response = [
                    'status' => true,
                    'status_code' => 200,
                    'message' => 'success'
                   
                ];
    
            return response()->json($response, 200);
}
}