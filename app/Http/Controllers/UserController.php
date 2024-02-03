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
use App\Message_Model;
use App\Country_Model;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = UserDetails_Model::orderBy('id','Desc')->get();

        return view('admin/user/index',compact('users'));
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User_Model::where('id','=',$id)->with('user_details')->first();
		$roles = Role_Model::get();
		$categories = Category_Model::get();
		
		if($user->role == '3'){
			$user_details = array();
			$user_details['skin_type'] = $user->user_details->skin_type;
			$user_details['body_type'] = $user->user_details->body_type;
			$user_details['eye_color'] = $user->user_details->eye_color;
			$user_details['hair_color'] = $user->user_details->hair_color;
			$user_details['height'] = $user->user_details->height;
			$user_details['available_for_work'] = $user->user_details->available_for_work;
			$user_details['price_per_hour'] = $user->user_details->price_per_hour;
			
		}else{
			$user_details = array();
			$user_details['skin_type'] = '';
			$user_details['body_type'] = '';
			$user_details['eye_color'] = '';
			$user_details['hair_color'] = '';
			$user_details['height'] = '';
			$user_details['available_for_work'] = '';
			$user_details['price_per_hour'] = 1;
			
		}
		
		
        return view('admin/user/edit',compact('user','roles','categories','user_details'));
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
        $this->validate($request,[
            'name'=>'required',
            'role'=>'required',
            'mobile_no'=>'required|max:10',
            'email'=>'required|regex:/^.+@.+$/i',
        ]);
        
        $users = User_Model::where('email', '=', $request->input('email'))
                            ->where('id','!=',$id)
                            ->first();

        $form_data = array();

        if ($users === null) {
            $formInput = $request->all();
            $form_data['name'] = $formInput['name'];
            $form_data['description'] = $formInput['description'];
            $form_data['mobile_no'] = $formInput['mobile_no'];
            $form_data['email'] = $formInput['email'];
            $form_data['country'] = $formInput['country'];
            $form_data['nationality'] = $formInput['nationality'];
            $form_data['insta_id'] = $formInput['insta_id'];
            $form_data['snapchat_id'] = $formInput['snapchat_id'];
            $form_data['business_category'] = $formInput['business_category'];
			
			
			
            if(!empty($request->input('password'))){
                $form_data['password'] = Hash::make($request->input('password'));
            }
			
			if($request->file('user_image')){
				$image=$request->file('user_image');
				if($image->isValid()){
					$extension=$image->getClientOriginalExtension();
					$fileName=rand(100,999999).time().'.'.$extension;
					$large_image_path = public_path('admin/images/users');
					
					$request->user_image->move($large_image_path, $fileName);
					$formInput['user_image']= 'admin/images/users/'.$fileName;
					if(!empty($formInput['user_image_old'])){
					    if(file_exists(public_path('/admin/images/users/').'/'.$formInput['user_image_old'])){
    						unlink(public_path('/admin/images/users/').'/'.$formInput['user_image_old']);
    					}
					}
					
					$form_data['user_image'] = $formInput['user_image'];
				}
			}
			
			
            if($formInput['role'] == '3'){
				$formData = array();
                $formData['user_id'] = $id;
                $formData['skin_type'] = $formInput['skin_type'];
                $formData['body_type'] = $formInput['body_type'];
                $formData['eye_color'] = $formInput['eye_color'];
                $formData['hair_color'] = $formInput['hair_color'];
                $formData['height'] = $formInput['height'];
                $formData['available_for_work'] = $formInput['available_for_work'];
                $formData['price_per_hour'] = $formInput['price_per_hour'];
				
				$user = UserDetails_Model::where('user_id','=',$id)->first();
				
				if($user != null){
					UserDetails_Model::where('user_id','=',$id)->update($formData);
				}else{
					UserDetails_Model::create($formData);
				}
				
            }

            User_Model::where('id','=',$id)->update($form_data);
            return back()->with('message','User Updated Successfully');
        }else{
            return back()->with('error','User with this email already exists');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = UserDetails_Model::findOrFail($id);
		
// 		if($delete->role == 3){
// 			UserDetails_Model::where('user_id',$id)->delete();
// 		}
		
        $delete->delete();
        return back()->with('message','User Deleted Successfully');
    }
	public function privacy_policy(){
        return view('privacy_policy');
    }
	
	//----------------  API FUNCTIONS BELOW -----------------------//
	
	/**
     * Insert User Api
    */
    
	public function user_registration(Request $request)
    {
         $req = $request->input('user_name');
        $data = array();
        $data['name'] = $req;
        $data['email'] = $request->input('user_email');
        $data['role'] = $request->input('role');
        $data['password'] = Hash::make($request->input('user_password'));
 
		$otp = rand ( 100000 , 999999 );
        $data['otp'] = $otp;
        $data['is_varified'] = '1';
        $data['is_otp_varified'] = '1';

		
      $user = User_Model::where('email','=',$data['email'])->first();

            if(empty($user)){
                
                $register_id = User_Model::create($data)->id;
				
				
                $response = [
                    'status' => true,
                    'status_code' => 200,
                    'message' => 'success',
                     'id'=>$register_id,
                ];
    
                return response()->json($response, 200);
            }
            else{
                $response = [
                    'status' => false,
                    'status_code' => 404,
                    'message' => 'Email address already exist',
                ];
    
                return response()->json($response, 200);
            }
}

	/**
     *  User Login Api
     */
    public function user_login(Request $request){
        $data = array();
        $data['email'] = $request->input('email');
        $data['password'] =$request->input('password');
        
		if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
            $user = User_Model::where('email','=',$data['email'])->first();    
            if($user){
                $user_data = array();
                $user_data['user_id'] = $user->id;
                $user_data['name'] = $user->name;
                $user_data['email'] = $user->email;
                $user_data['mobile_no'] = $user->mobile_no;
                $user_data['date of birth'] = $user->dob;
                
                $response = [
                    'status' => true,
                    'status_code' => 202,
                    'message' => 'User Login Successfull',
                    'user_data'=>$user_data
                ];
    
                return response()->json($response, 200);
            }
		}
            else{
   
                $response = [
                    'status' => false,
                    'status_code' => 404,
                    'message' => 'Login Failed',
                    
                ];
    
                return response()->json($response, 200);
            }

		
    }
// User Update Profile

public function user_update(Request $request,$id)
   
    {
        // print_r("Hyy Ashu");die;
        $req = $request->input('user_name');
        $data = array();
        $data['name'] = $req;
        $data['email'] = $request->input('user_email');
        $data['dob'] = $request->input('dob');
        $data['mobile_no'] = $request->input('mobile_no');
 
      $user = User_Model::where('id','=', $id)->first();
// print_r($user);die;
            if($user){
                
                $register_id = User_Model::where('id','=', $id)->update($data);
				
				
                $response = [
                    'status' => true,
                    'status_code' => 200,
                    'message' => 'success Update Successfull',
                     
                ];
    
                return response()->json($response, 200);
            }
            else{
                $response = [
                    'status' => false,
                    'status_code' => 404,
                    'message' => 'User Not exist',
                ];
    
                return response()->json($response, 200);
            }
}



    public function resend_register_otp(Request $request){
        $id = $request->input('id');
        $user = User_Model::where('id','=',$id)->first();
        if(!empty($user)){
            $otp = rand ( 100000 , 999999 );
            User_Model::where('id','=',$id)->update(['otp'=>$otp]);
            $response = [
                'status' => true,
                'status_code' => 200,
                'message' => 'success',
                'otp'=>$otp,
            ];
            return response()->json($response, 200);
        }else{
            $response = [
                'status' => false,
                'status_code' => 404,
                'message' => 'Invalid ID',
            ];
            return response()->json($response, 200);
        }

    }
	/**
     *  User Otp Varify Api
     */
    public function registration_otp_varify(Request $request){
        $data = array();
        $data['id'] = $request->input('id');
        $user = User_Model::where('id','=',$data['id'])->first();

        if(!empty($user)){
            if($user->otp != $request->input('otp')){
                $response = [
                    'status' => false,
                    'status_code' => 404,
                    'message' => 'Invalid Otp',
                ];
    
                return response()->json($response, 200);
            }else{

                User_Model::where('id','=',$data['id'])->update(['is_varified'=>'1','is_otp_varified'=>'1']);

                $response = [
                    'status' => true,
                    'status_code' => 200,
                    'message' => 'success',
                ];
    
                return response()->json($response, 200);
            }
        }else{
            $response = [
                'status' => false,
                'status_code' => 404,
                'message' => 'Invalid ID',
            ];

            return response()->json($response, 200);
        }

    }
		/**
     * 
     * Get User Details by user id
     */
    public function user_details(Request $request){
        $user_id = $request->input('user_id');
        $role = $request->input('role');

        $user = User_Model::where('id','=',$user_id)->where('role','=',$role)->first();

        if(!empty($user)){
            $details = array();
            $details['id'] = $user->id;
            $details['name'] = $user->name;
            $details['email'] = $user->email;
            $details['role'] = $user->role;
            $details['mobile_no'] = $user->mobile_no;
            $details['country'] = $user->country;
            $details['nationality'] = $user->nationality;
            $details['business_category'] = $user->business_category;
            $details['is_varified'] = $user->is_varified;
            $details['fcm_id'] = $user->fcm_id;
            
			if(!empty($user->user_image)){
				$details['user_image'] = url('/').'/'.$user->user_image;
			}else{
				$details['user_image']  = url('/').'/admin/images/users/default.jpg';
			}
			
			
            $response = [
                'status' => true,
                'status_code' => 200,
                'message' => 'success',
                'details'=>$details
            ];

            return response()->json($response, 200);
            
        }else{
            $response = [
                'status' => false,
                'status_code' => 404,
                'message' => 'Invalid User ID / Role',
            ];

            return response()->json($response, 200);
        }

    }
	/**
     *  User Change Password
     */
    public function change_password(Request $request){
        $user_id = $request->input('email');
      
                $user = User_Model::where('email','=',$user_id)->first();
                print_r($user);die;
            if(empty($user)){
                
                $otp = User_Model::where('email','=',$user_id)->get('password');
                $response = [
                    'status' => true,
                    'status_code' => 200,
                    'message' => 'Change Password Successfull ',
                ];
    
                return response()->json($response, 200);
              }
            else{
                $response = [
                     'status' => false,
                     'status_code' => 404,
                    'message' => 'Invalid User ',
                 ];
    
                 return response()->json($response, 200);
            }
        
    }
	/**
     * Verify Mobile Api
     */
    public function varify_user(Request $request){
        $mobile = $request->input('mobile_number');
        $user = User_Model::where('mobile_no','=',$mobile)->first();
        if(!empty($user)){
            $otp = rand ( 10000 , 99999 );
            
            User_Model::where('mobile_no','=',$mobile)->update(['otp'=>$otp]);

            $response = [
                'status' => true,
                'status_code' => 200,
                'message' => 'Success',
                'otp'=>$otp,
                'user_id'=>$user->id,
                'user_role'=>$user->role,
            ];

            return response()->json($response, 200);
        }else{
            $response = [
                'status' => false,
                'status_code' => 404,
                'message' => 'Invalid Mobile Number',
            ];

            return response()->json($response, 200);
        }

    }
	/**
     * Forgot Password Api
     */
    public function forgot_password(Request $request){
        $mobile = $request->input('mobile_number');
        $user = User_Model::where('mobile_no','=',$mobile)->first();
        if(!empty($user)){
            $new_password = $request->input('password');
            $confirm_password = $request->input('confirm_password');

            if($new_password == $confirm_password){
            
                $new_password = Hash::make($request->input('password'));
                User_Model::where('mobile_no','=',$mobile)->update(['password'=>$new_password]);
                $response = [
                    'status' => true,
                    'status_code' => 200,
                    'message' => 'Success',
                ];
    
                return response()->json($response, 200);
            }else{
                $response = [
                    'status' => false,
                    'status_code' => 404,
                    'message' => 'New password and Confirm password are not same',
                ];

                return response()->json($response, 200);
            }

        }else{
            $response = [
                'status' => false,
                'status_code' => 404,
                'message' => 'Invalid Mobile Number',
            ];

            return response()->json($response, 200);
        }

    }
	public function test_params(Request $request){
		$mobile = $request->input('mobile_number');
		
		var_dump($mobile);
	}
	public function get_all_models(){
		$users = User_Model::where('role',3)->where('is_otp_varified',1)->get();
		$data = array();
		
		foreach($users as $k=>$user){
			$data[$k]['id'] = $user->id;
			$data[$k]['name'] = $user->name;
			$data[$k]['email'] = $user->email;
			$data[$k]['mobile_no'] = $user->mobile_no;
			$data[$k]['country'] = $user->country;
			$data[$k]['nationality'] = $user->nationality;
			$data[$k]['description'] = $user->description;
			$data[$k]['insta_id'] = $user->insta_id;
			$data[$k]['snapchat_id'] = $user->snapchat_id;
			
			$extra_details = UserDetails_Model::where('user_id',$user->id)->first();;
			
			if(!empty($extra_details)){
				$data[$k]['skin_type'] = $extra_details->skin_type;
				$data[$k]['body_type'] = $extra_details->body_type;
				$data[$k]['eye_color'] = $extra_details->eye_color;
				$data[$k]['hair_color'] = $extra_details->hair_color;
				$data[$k]['height'] = $extra_details->height;
				$data[$k]['available_for_work'] = $extra_details->available_for_work;
				$data[$k]['price_per_hour'] = $extra_details->price_per_hour;
			}else{
				$data[$k]['skin_type'] = '';
				$data[$k]['body_type'] = '';
				$data[$k]['eye_color'] = '';
				$data[$k]['hair_color'] = '';
				$data[$k]['height'] = '';
				$data[$k]['available_for_work'] = '';
				$data[$k]['price_per_hour'] = '';
			}
			
			if(!empty($user->user_image)){
				$data[$k]['user_image'] = url('/').'/'.$user->user_image;
			}else{
				$data[$k]['user_image'] = url('/').'/admin/images/users/default.jpg';
			}
			
			//$posts[$k]->image = url('/').'/'.$post->image;
			//$posts[$k]->date = $this->get_time_ago(strtotime("2020-10-04 09:30:15"));
		}
		
		if(!empty($users)){
			$response = [
				'status' => true,
				'status_code' => 200,
				'message' => 'success',
				'data' => $data,
			];
			return response()->json($response, 200);
		}else{
			$response = [
				'status' => false,
				'status_code' => 404,
				'message' => 'No Users Found',
				'data' => '',
			];
			return response()->json($response, 200);
		}
	}
	public function get_model_listing(Request $request){
		$min_price = $request->input('min_price');
		$max_price = $request->input('max_price');
		$skin_type = $request->input('skin_type');
		$body_type = $request->input('body_type');
		$eye_color = $request->input('eye_color');
		$hair_color = $request->input('hair_color');
		$country_id = $request->input('country_id');
		
		$query = UserDetails_Model::query();
		
		if($skin_type != ''){
			$query->where('skin_type',$skin_type);
		}
		if($body_type != ''){
			$query->where('body_type',$body_type);
		}
		if($eye_color != ''){
			$query->where('eye_color',$eye_color);
		}
		if($hair_color != ''){
			$query->where('hair_color',$hair_color);
		}
		if(($min_price != '') && ($max_price != '')){
			$min_price = (int) $min_price;
			$max_price = (int) $max_price;
			$query->whereBetween('price_per_hour',[$min_price,$max_price]);
		}
		//$query->toSql();		
		$lists = $query->get();
		
		if($lists->count() > 0){
			$data = array();
			foreach($lists as $k=>$list){
				$arr = array();
				if($country_id != ''){
					if($country_id == $list->user->country){
						$arr['id'] = $list->user->id;
						$arr['name'] = $list->user->name;
						if(!empty($list->user->user_image)){
							$arr['user_image'] = url('/').'/'.$list->user->user_image;
						}else{
							$arr['user_image'] = url('/').'/admin/images/users/default.jpg';
						}
						$data[] = $arr;
					}

				}else{
					$arr['id'] = $list->user->id;
					$arr['name'] = $list->user->name;
					if(!empty($list->user->user_image)){
						$arr['user_image'] = url('/').'/'.$list->user->user_image;
					}else{
						$arr['user_image'] = url('/').'/admin/images/users/default.jpg';
					}
					$data[] = $arr;
				}
			}
			
			$response = [
				'status' => true,
				'status_code' => 200,
				'message' => 'success',
				'data' => $data,
			];
			return response()->json($response, 200);
			
		}else{
			$response = [
				'status' => false,
				'status_code' => 404,
				'message' => 'unsuccess',
				'data' => '',
			];
			return response()->json($response, 200);
		}
	}
	public function get_single_model(Request $request){
		$id = $request->input('id');
		$user = User_Model::where('id',$id)->where('role',3)->where('is_otp_varified',1)->with('user_role')->first();
		$data = array();
		
		if(!empty($user)){
			$data['id'] = $user->id;
			$data['name'] = $user->name;
			$data['role'] = $user->user_role->role_name;
			$data['description'] = $user->description;
			$data['nationality'] = $user->nationality;
			$data['insta_id'] = $user->insta_id;
			$data['snapchat_id'] = $user->snapchat_id;
			$data['profile_likes'] = $user->profile_likes;
			
			$extra_details = UserDetails_Model::where('user_id',$user->id)->first();;
			
			if(!empty($extra_details)){
				$data['skin_type'] = $extra_details->skin_type;
				$data['body_type'] = $extra_details->body_type;
				$data['eye_color'] = $extra_details->eye_color;
				$data['hair_color'] = $extra_details->hair_color;
				$data['height'] = $extra_details->height;
				$data['available_for_work'] = $extra_details->available_for_work;
				$data['price_per_hour'] = $extra_details->price_per_hour;
			}else{
				$data['skin_type'] = '';
				$data['body_type'] = '';
				$data['eye_color'] = '';
				$data['hair_color'] = '';
				$data['height'] = '';
				$data['available_for_work'] = '';
				$data['price_per_hour'] = '';
			}
			
			if(!empty($user->user_image)){
				$data['user_image'] = url('/').'/'.$user->user_image;
			}else{
				$data['user_image'] = url('/').'/admin/images/users/default.jpg';
			}
			
			$posts = Posts_Model::where('user_id',$user->id)->get();
			$post_arr = array();
			
			if(!empty($posts)){
				foreach($posts as $k=>$post){
					$post_arr[]['image'] = url('/').'/'.$post->image;
				}
			}
			$data['posts'] = $post_arr;
			
			$arr[] = $data;
			$response = [
				'status' => true,
				'status_code' => 200,
				'message' => 'success',
				'data' =>$arr,
			];
			return response()->json($response, 200);
		}else{
			$response = [
				'status' => false,
				'status_code' => 404,
				'message' => 'Invalid User ID',
				'data' => '',
			];
			return response()->json($response, 200);
		}
	}
	public function get_shops_by_category(Request $request){
		$category_id = $request->input('category_id');
		$country_id = $request->input('country_id');
		$users = User_Model::where('role',4)->where('is_otp_varified',1)->get();
		$count = $users->count();
		
		if(!empty($count)){
			$data = array();
			foreach($users as $k=>$user){
				$category = explode(',', $user->business_category);
				if((in_array($category_id, $category))){
					if(!empty($country_id)){
						if($country_id == $user->country){
							if(!empty($user->user_image)){
								$user_image = url('/').'/'.$user->user_image;
							}else{
								$user_image = url('/').'/admin/images/users/default.jpg';
							}
							$data[] = array(
										"id"=>$user->id,
										"name"=>$user->name,
										"image"=>$user_image,
									);
						}
					}else{
						if(!empty($user->user_image)){
							$user_image = url('/').'/'.$user->user_image;
						}else{
							$user_image = url('/').'/admin/images/users/default.jpg';
						}
						$data[] = array(
									"id"=>$user->id,
									"name"=>$user->name,
									"image"=>$user_image,
								);
					}
				}
			}
			if(!empty($data)){
				$response = [
					'status' => true,
					'status_code' => 200,
					'message' => 'success',
					'data' =>$data,
				];
				return response()->json($response, 200);
			}else{
				$response = [
					'status' => false,
					'status_code' => 404,
					'message' => 'No Shops Found',
					'data' => [],
				];
				return response()->json($response, 200);
			}
		}else{
			$response = [
				'status' => false,
				'status_code' => 404,
				'message' => 'No Shops Found',
				'data' => [],
			];
			return response()->json($response, 200);
		}
	}
	public function update_profile(Request $request){
		$user_id = $request->input('user_id');
		$role = $request->input('role');
        $name = $request->input('user_name');
        $email = $request->input('user_email');
        $mobile = $request->input('user_mobile');
        $country = $request->input('country');
        $description = $request->input('description');
        $insta_id = $request->input('insta_id');
        $snapchat_id = $request->input('snapchat_id');
        
        $user = User_Model::where('id','=',$user_id)->where('role','=',$role)->first();

        if(!empty($user)){
            
			$data = array(
				'name'=>$name,
				'country'=>$country,
				'description'=>$description,
				'insta_id'=>$insta_id,
				'snapchat_id'=>$snapchat_id,
			);
			if($role == 3){
				$data['nationality'] = $request->input('nationality');
				$details = array();
				
				$details['skin_type'] = $request->input('skin_type');
				$details['body_type'] = $request->input('body_type');
				$details['eye_color'] = $request->input('eye_color');
				$details['hair_color'] = $request->input('hair_color');
				$details['height'] = $request->input('height');
				$details['available_for_work'] = $request->input('available_for_work');
				$details['price_per_hour'] = $request->input('price_per_hour');
				
				UserDetails_Model::where('user_id',$user_id)->update($details);
				
			}else if($role == 4){
				$data['nationality'] = $request->input('nationality');
				$data['business_category'] = $request->input('business_category');
			}
			
			User_Model::where('id','=',$user_id)->update($data);

			$response = [
				'status' => true,
				'status_code' => 200,
				'message' => 'success',
			];

			return response()->json($response, 200);
            
        }else{
            $response = [
                'status' => false,
                'status_code' => 404,
                'message' => 'Invalid User ID ',
            ];

            return response()->json($response, 200);
        }
	}
	public function update_avatar(Request $request){
		$user_id = $request->input('user_id');
		$user = User_Model::where('id','=',$user_id)->first();
		$data = array();
        if(!empty($user)){
			if($request->hasFile('image')){
				if(!empty($user->user_image)){
					$img = public_path().'/'.$user->user_image;
					if(file_exists($img)){
						unlink($img);
					}
				}
				
				$image = $request->file('image');
				if($image->isValid()){
					$extension = $image->getClientOriginalExtension();
					$fileName = rand(100,999999).time().'.'.$extension;
					$large_image_path = public_path('admin/images/users');
					
					$request->image->move($large_image_path, $fileName);
					
					$data['user_image'] = 'admin/images/users/'.$fileName;
					
					User_Model::where('id','=',$user_id)->update($data);

					$response = [
						'status' => true,
						'status_code' => 200,
						'message' => 'success',
					];

					return response()->json($response, 200);
				}
			}else{
				$response = [
					'status' => false,
					'status_code' => 404,
					'message' => 'File Not Found',
				];

				return response()->json($response, 200);
			}
			
		}else{
            $response = [
                'status' => false,
                'status_code' => 404,
                'message' => 'Invalid User ID ',
            ];

            return response()->json($response, 200);
        }
	}
	public function my_profile(Request $request){
		$id = $request->input('id');
		$user = User_Model::where('id',$id)->where('is_otp_varified',1)->with('user_role')->first();
		$data = array();
		
		if(!empty($user)){
			$data['id'] = $user->id;
			$data['name'] = $user->name;
			$data['role'] = $user->user_role->role_name;
			$data['insta_id'] = $user->insta_id;
			$data['snapchat_id'] = $user->snapchat_id;
			$data['profile_likes'] = $user->profile_likes;
			$data['profile_views'] = "0";
			
			if(!empty($user->user_image)){
				$data['user_image'] = url('/').'/'.$user->user_image;
			}else{
				$data['user_image'] = url('/').'/admin/images/users/default.jpg';
			}
			
			$posts = Posts_Model::where('user_id',$user->id)->get();
			$data['post_count'] = $posts->count();
			$post_arr = array();
			
			if(!empty($posts)){
				foreach($posts as $k=>$post){
					$post_arr[]['image'] = url('/').'/'.$post->image;
				}
			}
			$data['posts'] = $post_arr;
			
			$arr[] = $data;
			$response = [
				'status' => true,
				'status_code' => 200,
				'message' => 'success',
				'data' =>$arr,
			];
			return response()->json($response, 200);
		}else{
			$response = [
				'status' => false,
				'status_code' => 404,
				'message' => 'Invalid User ID',
				'data' => '',
			];
			return response()->json($response, 200);
		}
		
	}
	public function get_countries(Request $request){
		
		$countries = Country_Model::all();
		if(count($countries) > 0){

			$response = [
				'status' => true,
				'status_code' => 200,
				'message' => 'success',
				'data' =>$countries,
			];
			return response()->json($response, 200);
		}else{
			$response = [
				'status' => false,
				'status_code' => 404,
				'message' => 'No Country Found',
				'data' =>$arr,
			];
			return response()->json($response, 200);
		}
	}
	public function get_shop_detail(Request $request){
		$id = $request->input('id');
		$user = User_Model::where('id',$id)->where('role',4)->where('is_otp_varified',1)->with('user_role')->first();
		$data = array();
		
		if(!empty($user)){
			$data['id'] = $user->id;
			$data['name'] = $user->name;
			$data['role'] = $user->user_role->role_name;
			$data['insta_id'] = $user->insta_id;
			$data['snapchat_id'] = $user->snapchat_id;
			$data['description'] = $user->description;
			$data['profile_likes'] = $user->profile_likes;
			$data['profile_views'] = "0";
			
			if(!empty($user->user_image)){
				$data['user_image'] = url('/').'/'.$user->user_image;
			}else{
				$data['user_image'] = url('/').'/admin/images/users/default.jpg';
			}
			
			$posts = Posts_Model::where('user_id',$user->id)->get();
			$data['post_count'] = $posts->count();
			$post_arr = array();
			
			if(!empty($posts)){
				foreach($posts as $k=>$post){
					$post_arr[]['image'] = url('/').'/'.$post->image;
				}
			}
			$data['posts'] = $post_arr;
			
			$arr[] = $data;
			$response = [
				'status' => true,
				'status_code' => 200,
				'message' => 'success',
				'data' =>$arr,
			];
			return response()->json($response, 200);
		}else{
			$response = [
				'status' => false,
				'status_code' => 404,
				'message' => 'Invalid User ID',
				'data' => '',
			];
			return response()->json($response, 200);
		}
		
	}
	public function get_chat_lists(Request $request){
		$user_id = $request->input('user_id');
		if(!empty($user_id)){
			$user = User_Model::where('id',$user_id)->where('is_varified','1')->first();
			
			if(!empty($user)){
				$messages = Message_Model::where('sender_id',$user_id)->orWhere('receiver_id',$user_id)->with('sender','receiver')->has('receiver')->has('sender')->orderBy('id','desc')->get();
				$data = array();
				foreach($messages as $message){
					if($message->sender_id != $user_id){
						if(!isset($data[$message->sender_id])){
							$data[$message->sender_id] = array(
									"user_id"=>$message->sender_id,
									"name"=>$message->sender->name,
									"image"=>$message->sender->user_image,
									"last_msg"=>$message->message,
									"time"=>date('h:iA',strtotime($message->msg_time))
								);
							if(!empty($message->sender->user_image)){
								$data[$message->sender_id]['image'] = url('/').'/'.$message->sender->user_image;
							}else{
								$data[$message->sender_id]['image'] = url('/').'/admin/images/users/default.jpg';
							}	
							
						}
						
					}else if($message->receiver_id != $user_id){
						if($message->receiver != null){
							if(!isset($data[$message->receiver_id])){
								$data[$message->receiver_id] = array(
										"user_id"=>$message->receiver_id,
										"name"=>$message->receiver->name,
										"image"=>$message->receiver->user_image,
										"last_msg"=>$message->message,
										"time"=>date('h:iA',strtotime($message->msg_time))
									);
								if(!empty($message->receiver->user_image)){
									$data[$message->receiver_id]['image'] = url('/').'/'.$message->receiver->user_image;
								}else{
									$data[$message->receiver_id]['image'] = url('/').'/admin/images/users/default.jpg';
								}	
							}
						}
					}
				}
				$arrData = array();
				foreach($data as $k=>$arr){
					$new_msgs_count = Message_Model::where('sender_id',$k)->where('receiver_id',$user_id)->where('seen_status','0')->with('sender','receiver')->has('sender')->has('receiver')->count();
					$ar = $arr;
					$ar['unseen'] = (string)$new_msgs_count;
					$arrData[] = $ar;
				}
				
				
				$response = [
						'status' => true,
						'status_code' => '200',
						'message' => 'success',
						'data'	=>$arrData
					];
				return response()->json($response, 200);
			
			}else{
				$response = [
					'status' => false,
					'status_code' => '401',
					'message' => 'Invalid User Id',
				];
				return response()->json($response, 200);
			}
		}else{
			$response = [
				'status' => false,
				'status_code' => '400',
				'message' => 'User Id is Required',
			];
			return response()->json($response, 200);
		}
	}
	public function marked_as_seen_msg(Request $request){
		$user_id = $request->input('user_id');
		$sender_user = $request->input('sender_user');
		if(!empty($user_id)){
			if(!empty($sender_user)){
				$user = User_Model::where('id',$user_id)->where('is_varified','1')->first();
			
				if(!empty($user)){
					$user = User_Model::where('id',$sender_user)->where('is_varified','1')->first();
			
					if(!empty($user)){
						
						Message_Model::where('sender_id',$sender_user)->where('receiver_id',$user_id)->update(['seen_status'=>1,'seen_time'=>date('Y-m-d H:i:s')]);
						$response = [
								'status' => true,
								'status_code' => '200',
								'message' => 'success'
							];
						return response()->json($response, 200);
						
					}else{
						$response = [
							'status' => false,
							'status_code' => '401',
							'message' => 'Invalid Sender User Id',
						];
						return response()->json($response, 200);
					}
					
					
				}else{
					$response = [
						'status' => false,
						'status_code' => '401',
						'message' => 'Invalid User Id',
					];
					return response()->json($response, 200);
				}
				
			}else{
				$response = [
					'status' => false,
					'status_code' => '400',
					'message' => 'Sender User Id is Required',
				];
				return response()->json($response, 200);
			}
			
		}else{
			$response = [
				'status' => false,
				'status_code' => '400',
				'message' => 'User Id is Required',
			];
			return response()->json($response, 200);
		}
	}
	public function get_old_messages(Request $request){
		$user_id = $request->input('user_id');
		$other_user_id = $request->input('other_user_id');
		$skip = $request->input('skip');
		$take = $request->input('take');
		
		if($skip == ''){
			$skip = 0;
		}
		if($take == ''){
			$take = 50;
		}
		
		if(!empty($user_id)){
			if(!empty($other_user_id)){
				$user = User_Model::where('id',$user_id)->where('is_varified','1')->first();
				if(!empty($user)){
					$other_user = User_Model::where('id',$other_user_id)->where('is_varified','1')->first();
					if(!empty($other_user)){
						$messages = Message_Model::whereIn('sender_id',[$user_id,$other_user_id])->WhereIn('receiver_id',[$user_id,$other_user_id])->with('sender','receiver')->has('receiver')->has('sender')->skip($skip)->take($take)->orderBy('id','asc')->get();
						
						if($messages->count() > 0){
							$data = array();
							
							foreach($messages as $message){
								if(!empty($message->sender->user_image)){
									$user_img = url('/').'/'.$message->sender->user_image;
								}else{
									$user_img = url('/').'/admin/images/users/default.jpg';
								}
								if($message->sender_id == $user_id){
									$data[]  = array(
												'id'=>$message->id,
												"type"=>"send",
												"message"=>$message->message,
												"user_image"=>$user_img,
												"user_name"=>$message->sender->name,
												"msg_time"=>$message->created_at->diffForHumans()
											);
								}else{
									$data[]  = array(
												'id'=>$message->id,
												"type"=>"receive",
												"message"=>$message->message,
												"user_image"=>$user_img,
												"user_name"=>$message->sender->name,
												"msg_time"=>$message->created_at->diffForHumans()
											);
								}
								
							}
							
							$response = [
								'status' => true,
								'status_code' => '200',
								'message' => 'success',
								'data' => $data,
							];
							return response()->json($response, 200);
							
						}else{
							$response = [
								'status' => false,
								'status_code' => '404',
								'message' => 'No Messages Found',
							];
							return response()->json($response, 200);
						}
						
						
					}else{
						$response = [
							'status' => false,
							'status_code' => '401',
							'message' => 'Invalid Other User Id',
						];
						return response()->json($response, 200);
					}
					
				}else{
					$response = [
						'status' => false,
						'status_code' => '401',
						'message' => 'Invalid User Id',
					];
					return response()->json($response, 200);
				}
				
			}else{
				$response = [
					'status' => false,
					'status_code' => '400',
					'message' => 'Other User Id is Required',
				];
				return response()->json($response, 200);
			}
			
		}else{
			$response = [
				'status' => false,
				'status_code' => '400',
				'message' => 'User Id is Required',
			];
			return response()->json($response, 200);
		}
	}
	
}
