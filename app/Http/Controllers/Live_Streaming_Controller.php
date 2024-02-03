<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Model;
use App\Time_Slot_Model;
use App\Live_Streaming_Model;
use App\User_Subscription_Model;
use App\Category_Model;
use App\Forum_Group_model;
use DateTime;


class Live_Streaming_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $liveStreamings = Forum_Group_model::get();

        return view('admin/live-streaming/index',compact('liveStreamings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$users = Category_Model::get();
        return view('admin/live-streaming/create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $addictions = $request->input('user');
		$group_name = $request->input('group_name');
		if($request->file('image')){
            $image = $request->file('image');
            if($image->isValid()){
                $extension = $image->getClientOriginalExtension();
                $fileName = rand(100,999999).time().'.'.$extension;
                $large_image_path = public_path('admin/images/category');
                
                $request->image->move($large_image_path, $fileName);
                
                $image_1 = 'admin/images/category/'.$fileName;
            }
        }
	
				$data = array(
						"addiction"=> $addictions,
						"group_name"=> $group_name,
						"image"=>$image_1,
					);
				Forum_Group_model::create($data);
			
				return back()->with('message','Group Added Successfully');
		
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
        // $delete = Forum_Group_model::findOrFail($id);
	$user = Forum_Group_model::find($id);
     $user->delete();
		 return back()->with('message','Group Deleted Successfully');
    }
	
	public function add_booking(Request $request){
		$user_id = $request->input('user_id');
		$booking_slot_id = $request->input('booking_slot_id');
		
		if(!empty($user_id)){
			if(!empty($booking_slot_id)){
				$user = User_Model::where('id',$user_id)->where('is_varified','1')->first();
				if(!empty($user)){
					$slot = Time_Slot_Model::where('id',$booking_slot_id)->where('slot_status','1')->first();
					if(!empty($slot)){
						$data = array(
								"user_id"=> $user_id,
								"booking_slot_id"=> $booking_slot_id,
								"booking_date"=> date('Y-m-d'),
								"stream_date"=> $slot->slot_date,
							);
						Live_Streaming_Model::create($data);
						
						$arr =  array('slot_status'=>2);
						
						Time_Slot_Model::where('id',$booking_slot_id)->update($arr);
						
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
							'message' => 'Invalid Slot Id / Slot not available',
						];
						return response()->json($response, 200);
					}
					
				}else{
					$response = [
						'status' => false,
						'status_code' => 404,
						'message' => 'Invalid User Id',
					];
					return response()->json($response, 200);
				}
			}else{
				$response = [
					'status' => false,
					'status_code' => 404,
					'message' => 'Booking Slot Id is Required',
				];
				return response()->json($response, 200);
			}
			
		}else{
			$response = [
				'status' => false,
				'status_code' => 404,
				'message' => 'User Id is Required',
			];
			return response()->json($response, 200);
		}
	}
	
	public function auth_live_stream(Request $request){
		$user_id = $request->input('user_id');
		if(!empty($user_id)){
			$user = User_Model::where('id',$user_id)->where('role','4')->where('is_varified','1')->first();
			
			if(!empty($user)){
				$userSubscription = User_Subscription_Model::where('start_date','<=',date('Y-m-d'))->where('end_date','>=',date('Y-m-d'))->where('user_id',$user_id)->first();
				
				if(!empty($userSubscription)){
				    $date = new \DateTime("now", new \DateTimeZone('Asia/Kuwait') );
					$curr_time = $date->format('H:i');
					
					$booking = Live_Streaming_Model::where('status','1')->where('user_id',$user_id)->where('stream_date',date('Y-m-d'))->whereHas('slot', function($q){
                        $Newdate = new \DateTime("now", new \DateTimeZone('Asia/Kuwait') );
					    $curr_timing = $Newdate->format('H:i');
                        //$q->where('slot_start_time', '<=', $curr_timing);
                        $q->where('slot_end_time', '>=', $curr_timing);
                    })->first();
					if($booking != null){
						$start_time = $booking->slot->slot_start_time;
						$end_time = $booking->slot->slot_end_time;
						
						if((strtotime($start_time) <= (strtotime($curr_time))) && (strtotime($end_time) >= (strtotime($curr_time)))){
							$Newdate = new \DateTime("now", new \DateTimeZone('Asia/Kuwait') );
							$curr_timing = $Newdate->format('H:i');
							Live_Streaming_Model::where('id',$booking->id)->update(['status'=>2]);
							Live_Streaming_Model::where('id',$booking->id)->update(['start_time'=>$curr_timing]);
							
							$arr =  array('id'=>$booking->id,'slot_id'=>$booking->slot->id,'start_time'=>$booking->slot->slot_start_time,'end_time'=>$booking->slot->slot_end_time);
							
							if(!empty($booking->user->user_image)){
								$arr['user_image'] = url('/').'/'.$booking->user->user_image;
							}else{
								$arr['user_image'] = url('/').'/admin/images/users/default.jpg';
							}
							
							$to_time = strtotime($booking->slot->slot_end_time);
							$from_time = strtotime($curr_timing );
							$minuits =  round(abs($to_time - $from_time) / 60,2);
							$milisec = $minuits * 60000;
							
							$arr['exp_time'] = (string)$milisec;
							
							$response = [
								'status' => true,
								'status_code' => '200',
								'message' => 'success',
								'data'	=>$arr
							];
							return response()->json($response, 200);
							
							
						}else if(strtotime($start_time) > strtotime($curr_time)){
							$response = [
								'status' => false,
								'status_code' => '404',
								'message' => 'Wait for the slot',
								'data'=>(Object)[]
							];
							return response()->json($response, 200);
						}else if((strtotime($end_time) < (strtotime($curr_time)))){
							$response = [
								'status' => false,
								'status_code' => '403',
								'message' => 'You have missed the stream',
								'data'=>(Object)[]
							];
							return response()->json($response, 200);
						}
					}else{
						$response = [
								'status' => false,
								'status_code' => '405',
								'message' => 'You do not have any bookings today',
								'data'=>(Object)[]
							];
							return response()->json($response, 200);
					}
					
				}else{
					$response = [
						'status' => false,
						'status_code' => '402',
						'message' => 'User has no active subscription',
						'data'=>(Object)[]
					];
					return response()->json($response, 200);
				}
				
			}else{
				$response = [
					'status' => false,
					'status_code' => '401',
					'message' => 'Invalid User Id',
					'data'=>(Object)[]
				];
				return response()->json($response, 200);
			}
		
		}else{
			$response = [
				'status' => false,
				'status_code' => '400',
				'message' => 'User Id is Required',
				'data'=>(Object)[]
			];
			return response()->json($response, 200);
		}
		
	}
	public function stop_live_stream(Request $request){
		$booking_id = $request->input('id');
		if(!empty($booking_id)){
			$booking = Live_Streaming_Model::where('id',$booking_id)->first();
			
			if(!empty($booking)){
				$Newdate = new \DateTime("now", new \DateTimeZone('Asia/Kuwait') );
				$curr_timing = $Newdate->format('H:i');
				Live_Streaming_Model::where('id',$booking->id)->update(['end_time'=>$curr_timing,'status'=>3]);
				
				$response = [
					'status' => true,
					'status_code' => '200',
					'message' => 'success',
				];
				return response()->json($response, 200);
				
			}else{
				$response = [
					'status' => false,
					'status_code' => '401',
					'message' => 'Invalid Booking Id',
				];
				return response()->json($response, 200);
			}
		}else{
			$response = [
				'status' => false,
				'status_code' => '400',
				'message' => 'Booking Id is Required',
			];
			return response()->json($response, 200);
		}	
		
	}
	public function get_live_user_image(Request $request){
		$booking = Live_Streaming_Model::where('status','2')->has('user')->has('slot')->first();
		
		if(!empty($booking)){
			
			if(!empty($booking->user->user_image)){
				$user_image = url('/').'/'.$booking->user->user_image;
			}else{
				$user_image = url('/').'/admin/images/users/default.jpg';
			}
			
			$response = [
					'status' => true,
					'status_code' => '200',
					'message' => 'success',
					'user_image' => $user_image,
				];
				return response()->json($response, 200);
		}else{
			
			$response = [
					'status' => true,
					'status_code' => '200',
					'message' => 'success',
					'user_image'=>'null'
				];
				return response()->json($response, 200);
		}
	}
	
	// Forum Group Api 
	public function forum_group(Request $request, $addiction){
		$booking = Forum_Group_model::where('addiction',$addiction)->get();
		
		if(!empty($booking)){
			
			if(!empty($booking->image)){
				$booking1 = url('/').'/'.$booking->image;
			}
			else{
				$booking1 = url('/').'/admin/images/users/default.jpg';
			}
			
			$response = [
					'status' => true,
					'status_code' => '200',
					'message' => 'success',
					'user_image' => $booking,
				];
				return response()->json($response, 200);
		}else{
			
			$response = [
					'status' => true,
					'status_code' => '200',
					'message' => 'success',
					'user_image'=>'null'
				];
				return response()->json($response, 200);
		}
	}
	
}
