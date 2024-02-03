<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Model; 
use App\Currency_Model;
use App\Flight_Model;
use App\Tour_Booking_Model;
use App\UserDetails_Model;
use App\Hotel_Model;
use App\ContactUs_Model;
use App\Tour_Model;
use App\Tour_Detail_Model;
use DateTime;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }
     public function tour_search()
    {
       $flight = Tour_Model::get();
        return view('flight/tour-search',compact('flight'));
    }
     public function tour_details()
    {
       $flight = Tour_Model::get();
        return view('flight/tour-details',compact('flight'));
    }
     public function tour_search_list()
    {
        $flight = Tour_Model::get();
        return view('flight/tour-search-list',compact('flight'));
    }
     public function get_tour()
    {
       $flight = Tour_Model::get();
        return view('flight/admin/all-tour',compact('flight'));
    }
     public function add_tour()
    {
       $flight = Hotel_Model::where('user_id',session()->get('user_id'))->get();
        return view('flight/admin/add-tour',compact('flight'));
    }
    public function tour_detail($id)
    {
       $flight = Tour_Model::where('id',$id)->first();
       $tour_package = Tour_Detail_Model::where('tour_id',$id)->get();
        return view('flight/tour-details',compact('flight','tour_package'));
    }
    public function add_tour_package()
    {
       $flight = Tour_Model::get();
        return view('flight/admin/add-tour-package',compact('flight'));
    }
     public function book_package(Request $request)
    {
        $tour_id= $request->input('tour_id');
        $tour_package_id= $request->input('tour_package_id');
    // print_r($tour_package_id);    die;
        $data['tour_name']= $request->input('tour_name');
        $tour_package = Tour_Detail_Model::where('id',$tour_package_id)->first();
        $flight = Tour_Model::get();
        return view('flight/tour-booking-submission',compact('flight','tour_package'));
    }
     public function tour_store(Request $request)
    {
        
            $data['tour_name']= $request->input('tour_name');
			$data['address']= $request->input('address');
			$data['no_of_day']= $request->input('no_of_day');
			$data['rating']= $request->input('rating');
			$data['reviewes'] = $request->input('reviewes');
		    $data['price'] = $request->input('price');
			$data['tax'] = $request->input('tax');
			$data['other_facilities'] = $request->input('other_facilities');
			$data['tour_type'] = $request->input('tour_type');
			$data['no_of_people'] = $request->input('no_of_people');
			$data['overview'] = $request->input('overview');
			$data['included'] = $request->input('included');
			$data['excluded'] = $request->input('excluded');
			$data['why_choose_us'] = $request->input('why_choose_us');
			$data['itinerary'] = json_encode($request->input('itinerary'));
			if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $request->file('image')->move("public/images", $name);
            }
            $data['image'] = $name;
			$contact_id = Tour_Model::create($data);
			 $flight = Tour_Model::get();
		return view('flight/admin/all-tour',compact('flight'));	
    // }
    // return redirect()->back()->with('message',"Agent Already Register...");
}

    public function tour_package(Request $request)
    {
        
            $data['tour_id']= $request->input('tour_id');
			$data['tour_package_name']= $request->input('name');
			$data['details']= $request->input('package_details');
			$data['amount']= $request->input('amount');
			$contact_id = Tour_Detail_Model::create($data);
			$flight = Tour_Model::get();
		return view('flight/admin/add-tour-package',compact('flight'));	
    // }
    // return redirect()->back()->with('message',"Agent Already Register...");
}

  public function book_tour(Request $request)
    {
        
            $data['name']= $request->input('name');
			$data['name1']= $request->input('1name');
			$data['email']= $request->input('email');
			$data['mobile']= $request->input('mobile');
			$data['address']= $request->input('address');
			$data['tour_pavkage_id']= $request->input('tour_package_id');
			$data['tour_id']= $request->input('tour_id');
			
			$contact_id = Tour_Booking_Model::create($data);
			 $flight = Tour_Model::get();
		return view('flight/tour-search',compact('flight'));	
    // }
    // return redirect()->back()->with('message',"Agent Already Register...");
}

 public function currency()
    {
       $flight = Currency_Model::get();
        return view('flight/admin/all-currency',compact('flight'));
    }

public function all_tour_package()
    {
       $flight = Tour_Detail_Model::get();
        return view('flight/admin/all-tour-package',compact('flight'));
    }
public function tour_booking_details()
    {
       $flight = Tour_Booking_Model::get();
        return view('flight/admin/tour-booking-details',compact('flight'));
    }    
public function currency_update(Request $request)
    {
        
            $id= $request->input('id');
			$data['status']= $request->input('status');
		
// 		print_r($request->input('status')); 
// 		print_r($id);die;
			
			$contact_id = Currency_Model::where('id',$id)->update($data);
			$flight = Currency_Model::get();
        return view('flight/admin/all-currency',compact('flight'));	
    // }
    // return redirect()->back()->with('message',"Agent Already Register...");
}
   
    public function tour_delete($id)
    {
       
      Tour_Model::where('id', $id)->delete();
      Tour_Booking_Model::where('tour_id', $id)->delete();
      Tour_Detail_Model::where('tour_id', $id)->delete();
      $flight = Tour_Model::get();
        return view('flight/admin/all-tour',compact('flight'));
    } 
     public function tour_edit($id)
    {
       
      $flight = Tour_Model::where('id', $id)->first();
        return view('flight/admin/edit-tour',compact('flight'));
    } 
    
         public function tour_update(Request $request)
    {
            $id= $request->input('id');
            $data['tour_name']= $request->input('tour_name');
			$data['address']= $request->input('address');
			$data['no_of_day']= $request->input('no_of_day');
			$data['rating']= $request->input('rating');
			$data['reviewes'] = $request->input('reviewes');
		    $data['price'] = $request->input('price');
			$data['tax'] = $request->input('tax');
			$data['other_facilities'] = $request->input('other_facilities');
			$data['tour_type'] = $request->input('tour_type');
			$data['no_of_people'] = $request->input('no_of_people');
			$data['overview'] = $request->input('overview');
			$data['included'] = $request->input('included');
			$data['excluded'] = $request->input('excluded');
			$data['why_choose_us'] = $request->input('why_choose_us');
			if(!empty(json_encode($request->input('itinerary')))){
			$data['itinerary'] = json_encode($request->input('itinerary'));
			}
			if(!empty($request->hasFile('image'))){
			if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $request->file('image')->move("public/images", $name);
            }
            $data['image'] = $name; 
			}
			
			if(!empty($request->hasFile('images'))){
			if ($request->hasFile('images')) {
            $file = $request->file('images');
            $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $request->file('images')->move("public/images", $name);
            }
            $data['images'] = $name; 
			}
			$contact_id = Tour_Model::where('id',$id)->update($data);
			 $flight = Tour_Model::get();
		return view('flight/admin/all-tour',compact('flight'));
    }
}