<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Auth;
use Illuminate\Carbon\Carbon;
use App\UserDetails_Model;
use App\UserAchievement_Model;
use App\Country_List_Model;
use App\FileStatus_Model;
class UserDetailsController extends Controller
{
    // firebase connection
    // public function __construct(database $database){
    //      $this->database =$database;
    //     $this->tablename ='user_details';
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
// firebase Insert 
    {
    //     $ref_table ='';
    //     $postData = [
    //         'name' => $request->name,
    //          'email' => $request->email,
    //         ];
    //         $post_ref =$database->getReference($this->tablename)->push($postData);
    //         if($post_ref){
                
               
    //             $response = [
    //                 'status' => true,
    //                 'status_code' => 200,
    //                 'message' => 'success',
                  
    //             ];
    
    //             return response()->json($response, 200);
    //         }else{
    //             $response = [
    //                 'status' => false,
    //                 'status_code' => 404,
    //                 'message' => 'Email address already exist',
    //             ];
    
    //             return response()->json($response, 200);
    //         }
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    	public function user_add_details(Request $request)
    {
        $data = array();
        $user = array();
    //   print_r($data);
        
        $data['email'] = $request->input('email');
        $data['password'] = $request->input('password');
        $data['name'] = $request->input('name');
        $data['mobile'] = $request->input('mobile');
        $loan_type = $request->input('loan');
        $banker = $request->input('banker');
        //  print_r($loan_type);
        //  print_r($loan_type);
        $data['loan_type'] = $loan_type;
        $data['banker_id'] = $banker;
       
            $user = UserDetails_Model::where('mobile','=',$data['mobile'])->first();

            if(empty($user)){
                
                $register_id = UserDetails_Model::create($data)->id;
				$user['user_id']=$register_id;
				$user['document_collect']='0';
				$user['login_file']='0';
				$user['document_verification']='0';
				$user['personal_discussion']='0';
				$user['legail_process']='0';
				$user['loan_sention']='0';
				$user['disbursement']='0';
				$user['banker_id']=$banker;
				$user['loan_type']=$loan_type;
				
		         FileStatus_Model::create($user);
		         
               return back();

        
    }
    }
    // user Register
    
    	public function user_register(Request $request)
    {
        $data12 = UserDetails_Model::latest()->first();
        $last_user =$data12->id;
        
        $data = array();
        $user = array();
    //   print_r($data);
        
        $data['email'] = $request->input('email');
        $data['password'] = $request->input('password');
        $data['name'] = $request->input('name');
        $data['mobile'] = $request->input('mobile');
        $data['reference_code'] = $request->input('reference_code');
        $data['refer_code'] = "refer000".$last_user;
       
            $user = UserDetails_Model::where('mobile','=',$data['mobile'])->first();

            if(empty($user)){
                
                $register_id = UserDetails_Model::create($data)->id;
				$user['user_id']=$register_id;
				$user['document_collect']='0';
				$user['login_file']='0';
				$user['document_verification']='0';
				$user['personal_discussion']='0';
				$user['legail_process']='0';
				$user['loan_sention']='0';
				$user['disbursement']='0';
		         FileStatus_Model::create($user);
                $response = [
                    'status' => true,
                    'status_code' => 200,
                    'message' => 'success',
                    'id'=>$register_id,
                ];
    
                return response()->json($response, 200);
            }else{
                $response = [
                    'status' => false,
                    'status_code' => 404,
                    'message' => 'Mobile address already exist',
                ];
    
                return response()->json($response, 200);
         

        
    }
    }
    // user login  Api
        public function user_login(Request $request){
        $data = array();
        $data['mobile'] = $request->input('mobile');
        $data['password'] =$request->input('password');
        
	
            $user = UserDetails_Model::where('mobile','=',$data['mobile'] )->where('password','=',$data['password'] )->first();    
        if($user){
                $user_data = array();
                $user_data['id'] = $user->id;
                $user_data['name'] = $user->name;
                $user_data['email'] = $user->email;
               
                $response = [
                    'status' => true,
                    'status_code' => 200,
                    'message' => 'success',
                    'user_data'=>$user_data
                ];
    
                return response()->json($response, 200);
            }
	
            
      else{
            $response = [
                'status' => false,
                'status_code' => 404,
                'message' => 'Invalid Email / Password',
            ];

            return response()->json($response, 200);
        }
    }


    // Firebase Connection And Check
   
 
}