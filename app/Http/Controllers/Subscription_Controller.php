<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscription_Model;
use App\User_Model;
use App\User_Subscription_Model;

class Subscription_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscriptions = Subscription_Model::orderBy('id','Desc')->get();
        return view('admin/subscription/index',compact('subscriptions'));
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
        $this->validate($request,[
            'subscription_name'=>'required',
            'subscription_days'=>'required',
            'subscription_price'=>'required',
            'stream_slots'=>'required',
            'subscription_type'=>'required',
            'subscription_desc'=>'required',
        ]);
        $data = array();
		$data['name'] = $request->input('subscription_name');
		$data['days'] = $request->input('subscription_days');
		$data['price'] = $request->input('subscription_price');
		$data['stream_slots'] = $request->input('stream_slots');
		$data['type'] = $request->input('subscription_type');
		$data['description'] = $request->input('subscription_desc');
		
		
        Subscription_Model::create($data);
        return back()->with('message','Subscription Added Successfully');
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
        $subscription = Subscription_Model::where('id','=',$id)->first();
        return view('admin/subscription/edit',compact('subscription'));
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
            'subscription_name'=>'required',
            'subscription_days'=>'required',
            'subscription_price'=>'required',
            'stream_slots'=>'required',
            'subscription_type'=>'required',
            'subscription_desc'=>'required',
        ]);
        $data = array();
		$data['name'] = $request->input('subscription_name');
		$data['days'] = $request->input('subscription_days');
		$data['price'] = $request->input('subscription_price');
		$data['stream_slots'] = $request->input('stream_slots');
		$data['type'] = $request->input('subscription_type');
		$data['description'] = $request->input('subscription_desc');
		
		Subscription_Model::where('id',$id)->update($data);
        return back()->with('message','Subscription Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Subscription_Model::findOrFail($id);
        $delete->delete();
        return back()->with('message','Subscription Deleted Successfully');
    }
	
	public function get_subscription_plans(Request $request){
		$plans = Subscription_Model::get();
		if(!empty($plans)){
			
			foreach($plans as $k=>$plan){
				unset($plans[$k]->days);
				unset($plans[$k]->stream_slots);
				unset($plans[$k]->stream_slots);
				unset($plans[$k]->created_at);
				unset($plans[$k]->updated_at);
				
				if($plan->type == 1){
					$plans[$k]->type = 'Monthly';
				}elseif($plan->type == 2){
					$plans[$k]->type = 'Quarterly';
				}elseif($plan->type == 3){
					$plans[$k]->type = 'Yearly';
				}
			}
			$response = [
				'status' => true,
				'status_code' => 200,
				'message' => 'success',
				'data'=>$plans
			];
			return response()->json($response, 200);
		}else{
			$response = [
				'status' => false,
				'status_code' => 404,
				'message' => 'Plans Not Found',
			];
			return response()->json($response, 200);
		}
	}
	
	public function insert_user_subscription(Request $request){
		$user_id = $request->input('user_id');
		$subscription_id = $request->input('subscription_id');
		
		$user = User_Model::where('id','=',$user_id)->first();
		
		if($user != null){
			$subscription = Subscription_Model::where('id','=',$subscription_id)->first();
			
			if($subscription != null){
				
				$user_subscription = User_Subscription_Model::orderBy('id','Desc')->where('user_id',$user_id)->where('end_date','>=',date('Y-m-d'))->first();
				
				if($user_subscription != null){
					$subs_end_date = $user_subscription->end_date;
					$data = array();
					$data['user_id'] = $user_id;
					$data['subscription_id'] = $subscription_id;
					$data['start_date'] = date('Y-m-d',strtotime($subs_end_date.'+ 1 days'));
					$data['end_date'] = date('Y-m-d',strtotime($data['start_date'].'+ '.$subscription->days.' days'));
					
					User_Subscription_Model::create($data);
					$response = [
						'status' => true,
						'status_code' => 200,
						'message' => 'Subscribe Successfully'
					];
					return response()->json($response, 200);
					
					
				}else{
					$data = array();
					$data['user_id'] = $user_id;
					$data['subscription_id'] = $subscription_id;
					$data['start_date'] = date('Y-m-d');
					$data['end_date'] = date('Y-m-d',strtotime(date('Y-m-d').'+ '.$subscription->days.' days'));
					
					User_Subscription_Model::create($data);
					$response = [
						'status' => true,
						'status_code' => 200,
						'message' => 'Subscribe Successfully'
					];
					return response()->json($response, 200);
					
				}
				
			}else{
				$response = [
					'status' => false,
					'status_code' => 404,
					'message' => 'Invalid Subscription Id',
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
	}
	
	
}
