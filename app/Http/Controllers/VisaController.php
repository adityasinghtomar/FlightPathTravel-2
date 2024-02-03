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
use App\Visa_Model;
use App\Visa_Package_Model;
use App\Visa_Booking_Model;
use DateTime;

class VisaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function index()
    {
        $flight = Visa_Model::get();
        return view('flight/admin/all-visa',compact('flight'));
    }
      public function add_visa()
    {
        $flight = Visa_Model::get();
        return view('flight/admin/add-visa',compact('flight'));
    }
     public function visa_edit($id)
    {
        $flight = Visa_Model::where('id',$id)->first();
        return view('flight/admin/edit-visa',compact('flight'));
    }
     public function visa_package()
    {
        $flight = Visa_Package_Model::get();
        return view('flight/admin/all-visa-package',compact('flight'));
    }
      public function add_visa_package()
    {
        $flight = Visa_Model::get();
        return view('flight/admin/add-visa-package',compact('flight'));
    }
        public function visa_store(Request $request)
    {
        
            $data['visa_name']= $request->input('visa_name');
			$data['visa_type']= $request->input('visa_type');
			$data['duration']= $request->input('duration');
			$data['overview']= $request->input('overview');
			$data['documents'] = $request->input('documents');
		    $data['include'] = $request->input('include');
			$data['exclude'] = $request->input('exclude');
			$data['why_choose_us'] = $request->input('why_choose_us');
			$data['amount'] = $request->input('amount');
			$data['currency_type'] = $request->input('currency_type');
			if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $request->file('image')->move("public/images", $name);
            }
            $data['image'] = $name;
			$contact_id = Visa_Model::create($data);
			 $flight = Visa_Model::get();
		return view('flight/admin/all-visa',compact('flight'));	
    // }
    // return redirect()->back()->with('message',"Agent Already Register...");
}
    public function visa_package_store(Request $request)
    {
        
            $data['visa_id']= $request->input('visa_id');
			$data['visa_package']= $request->input('name');
			$data['package_details']= $request->input('package_details');
			$data['amount']= $request->input('amount');
			$contact_id = Visa_Package_Model::create($data);
			$flight = Visa_Package_Model::get();
		return view('flight/admin/all-visa-package',compact('flight'));	
    // }
    // return redirect()->back()->with('message',"Agent Already Register...");
}
  public function visa_update(Request $request)
    {
            $id= $request->input('id');
            $data['visa_name']= $request->input('visa_name');
			$data['visa_type']= $request->input('visa_type');
			$data['duration']= $request->input('duration');
			$data['overview']= $request->input('overview');
			$data['documents'] = $request->input('documents');
		    $data['include'] = $request->input('include');
			$data['exclude'] = $request->input('exclude');
			$data['why_choose_us'] = $request->input('why_choose_us');
			$data['amount'] = $request->input('amount');
			$data['currency_type'] = $request->input('currency_type');
			if(!empty($request->input('image'))){
			if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $request->file('image')->move("public/images", $name);
            }
            $data['image'] = $name; 
			}
			$contact_id = Visa_Model::where('id',$id)->update($data);
			 $flight = Visa_Model::get();
		return view('flight/admin/all-visa',compact('flight'));	
    // }
    // return redirect()->back()->with('message',"Agent Already Register...");
}
 public function visa_delete($id)
    {
       
      Visa_Model::where('id', $id)->delete();
      Visa_Package_Model::where('visa_id', $id)->delete();
      $flight = Visa_Model::get();
        return view('flight/admin/all-visa',compact('flight'));
    }
public function visa_list()
    {
       
      $flight = Visa_Model::get();
        return view('flight/visa-list',compact('flight'));
    }    
   public function visa_details($id)
    {
       $flight = Visa_Model::where('id',$id)->first();
       $tour_package = Visa_Package_Model::where('visa_id',$id)->get();
        return view('flight/visa-details',compact('flight','tour_package'));
    }
 public function book_visa_package(Request $request)
    {
        $visa_id= $request->input('visa_id');
        $visa_package_id= $request->input('visa_package_id');
        $visa_package = Visa_Package_Model::where('id',$visa_package_id)->first();
        $visa = Visa_Model::where('id',$visa_id)->first();
        return view('flight/visa-booking-submission',compact('visa','visa_package'));
    }    
public function book_visa(Request $request)
    {
        $visa_package = Visa_Package_Model::where('id',$request->input('visa_package_id'))->first();
        $visa = Visa_Model::where('id',$request->input('visa_id'))->first();
            $data['visa_name']= $visa->visa_name;
            $data['visa_type']= $visa->visa_type;
            $data['duration']= $visa->duration;
            $data['overview']= $visa->overview;
            $data['image']= $visa->image;
            $data['currency_type']= $visa->currency_type;
            $data['include']= $visa->include;
            $data['exclude']= $visa->exclude;
            $data['visa_amount']= $visa->amount;
            $data['visa_package_name']= $visa_package->visa_package;
            $data['visa_package_amount']= $visa_package->amount;
            $data['name']= $request->input('name');
			$data['lname']= $request->input('lname');
			$data['email']= $request->input('email');
			$data['mobile']= $request->input('mobile');
			$data['address']= $request->input('address');
			$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

            // generate a pin based on 2 * 7 digits + a random character
            $pin = mt_rand(1000000, 9999999)
                . mt_rand(1000000, 9999999)
                . $characters[rand(0, strlen($characters) - 1)];
            $string = str_shuffle($pin);
            $data['booking_id']= $string;
			$contact_id = Visa_Booking_Model::create($data)->id;
// 			print_r($contact_id);die;
			$result1 =Visa_Booking_Model::where('id',$contact_id)->first();
			 $flight = Visa_Model::get();
		return view('flight/visa-booking-details',compact('flight','result1'));	
    // }
    // return redirect()->back()->with('message',"Agent Already Register...");
}    
 public function all_visa_booking()
    {
        $flight = Visa_Booking_Model::get();
        return view('flight/admin/all-visa-booking',compact('flight'));
    }
public function view_visa($id)
    {
        $result1 =Visa_Booking_Model::where('id',$id)->first();
        return view('flight/admin/view-visa',compact('result1'));
    }    
    
}