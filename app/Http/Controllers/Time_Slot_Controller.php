<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Time_Slot_Model;
use DateTime;

class Time_Slot_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timeSlots = Time_Slot_Model::orderBy('id','Desc')->get();

        return view('admin/time-slot/index',compact('timeSlots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/time-slot/create');
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
            'slot_start_date'=>'required',
            'slot_end_date'=>'required',
            'slot_start_time'=>'required',
            'slot_end_time'=>'required',
            'slot_difference'=>'required',
        ]);
		
		$slot_start_date = $request->input('slot_start_date');
		$slot_end_date = $request->input('slot_end_date');
		$slot_start_time = str_replace(' ', '', $request->input('slot_start_time'));
		$slot_end_time = str_replace(' ', '', $request->input('slot_end_time'));
		$slot_difference = str_replace(' ', '', $request->input('slot_difference'));
		
		
		//Convert Hours to minuite Start
		$minutes = 0; 
		$hours = $slot_difference;
		if (strpos($hours, ':') !== false) 
		{ 
			// Split hours and minutes. 
			list($hours, $minutes) = explode(':', $hours); 
		} 
		$duration = $hours * 60 + $minutes;
		//Convert Hours to minuite End
		
		$now = time(); // or your date as well
		//$your_date = strtotime("2010-01-31");
		$datediff = strtotime(date('Y-m-d',strtotime($slot_end_date))) - strtotime(date('Y-m-d',strtotime($slot_start_date)));
		
		$days = round($datediff / (60 * 60 * 24));
		
		
		if(strtotime($slot_start_date) <= strtotime($slot_end_date)){
			if(strtotime($slot_start_time) < strtotime($slot_end_time)){
				
				for($j=0;$j<=$days;$j++){
					
					$slotDate = date('Y-m-d',strtotime('+'.$j.' day', strtotime($slot_start_date)));
					
					$slots = Time_Slot_Model::where('slot_date',$slotDate)->get();
					$slotsCount = $slots->count();
					
					if($slotsCount != 0){
						$rewrite = $request->input('rewrite_old_slots');
						if($rewrite == 1){
							//Remove Old Slots
							Time_Slot_Model::where('slot_date',$slotDate)->delete();
							
							$start = new DateTime($slot_start_time);
							$end = new DateTime($slot_end_time);
							$start_time = $start->format('H:i');
							$end_time = $end->format('H:i');
							$i=0;
							while(strtotime($start_time) <= strtotime($end_time)){
								$start = $start_time;
								$end = date('H:i',strtotime('+'.$duration.' minutes',strtotime($start_time)));
								$start_time = date('H:i',strtotime('+'.$duration.' minutes',strtotime($start_time)));
								$i++;
								if(strtotime($start_time) <= strtotime($end_time)){
									$time[$i]['start'] = $start;
									$time[$i]['end'] = $end;
									$data = array(
												"slot_date"=>$slotDate,
												"slot_start_time"=>$start,
												"slot_end_time"=>$end
											);
									
									Time_Slot_Model::create($data);
								}
							}
						}
					}else{
						$start = new DateTime($slot_start_time);
						$end = new DateTime($slot_end_time);
						$start_time = $start->format('H:i');
						$end_time = $end->format('H:i');
						$i=0;
						while(strtotime($start_time) <= strtotime($end_time)){
							$start = $start_time;
							$end = date('H:i',strtotime('+'.$duration.' minutes',strtotime($start_time)));
							$start_time = date('H:i',strtotime('+'.$duration.' minutes',strtotime($start_time)));
							$i++;
							if(strtotime($start_time) <= strtotime($end_time)){
								$time[$i]['start'] = $start;
								$time[$i]['end'] = $end;
								$data = array(
											"slot_date"=>$slotDate,
											"slot_start_time"=>$start,
											"slot_end_time"=>$end
										);
								
								Time_Slot_Model::create($data);
							}
						}
					}
				}
				return back()->with('message','Slots Added Successfully ');
				
			}else{
				return back()->with('error','slot end time should be grater than slot start time');
			}
		}else{
			return back()->with('error','slot end date should be grater than slot start date');
		}
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
        $delete = Time_Slot_Model::findOrFail($id);
        $delete->delete();
        return back()->with('message','Time Slot Deleted Successfully');
    }
	
	public function get_time_slots(Request $request){
		$date = $request->input('date');
		$date = date('Y-m-d',strtotime($date));
		
		if(!empty($date)){
			$slots = Time_Slot_Model::where('slot_date',$date)->get();
			if(!empty($slots)){
				$data = array();
					//"date"=>$date
				
				foreach($slots as $slot){
					$formatted = date('h:i A',strtotime($slot->slot_start_time)).' - '.date('h:i A',strtotime($slot->slot_end_time));
					
					$arr = array('slot_id'=>$slot->id,'date'=>$date,'start_time'=>$slot->slot_start_time,'end_time'=>$slot->slot_end_time,'formatted'=>$formatted,'status_code'=>$slot->slot_status,'status'=>($slot->slot_status == 0)?'unavailable':(($slot->slot_status == 1)?'available':(($slot->slot_status == 2)?'booked':'unavailable')));
					
					$data['slots'][] = $arr;
				}
				if(!empty($data)){
    				$response = [
    					'status' => true,
    					'status_code' => 200,
    					'message' => 'success',
    					'data'=>$data
    				];
    				return response()->json($response, 200);
				}
				else{
				    $response = [
					'status' => false,
					'status_code' => 404,
					'message' => 'Slots Not Found',
				];
				return response()->json($response, 200);
				}
			}else{
				$response = [
					'status' => false,
					'status_code' => 404,
					'message' => 'Slots Not Found',
				];
				return response()->json($response, 200);
			}
			
		}else{
			$response = [
					'status' => false,
					'status_code' => 404,
					'message' => 'Date Is Required',
				];
			return response()->json($response, 200);
		}
	}
	public function get_avail_time_slots(Request $request){
		$date = $request->input('date');
		$slots = Time_Slot_Model::where('slot_date',$date)->where('slot_status','1')->get();
		if(!empty($slots)){
			if($slots->count() > 0){
				$response = [
					'status' => true,
					'status_code' => 200,
					'message' => 'success',
					'data'=>$slots
				];
				return response()->json($response, 200);
			}else{
				$response = [
					'status' => false,
					'status_code' => 404,
					'message' => 'Slots Not Found',
				];
				return response()->json($response, 200);
			}
			
			
		}else{
			$response = [
				'status' => false,
				'status_code' => 404,
				'message' => 'Slots Not Found',
			];
			return response()->json($response, 200);
		}
	}
	
	
}
