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
use App\Tour_Enquiry_Model;
use App\CountryCode_Model;
use Illuminate\Support\Facades\Http;
use Mollie\Laravel\Facades\Mollie;
use Stevebauman\Location\Facades\Location;
use Easebuzz\PayWithEasebuzzLaravel\PayWithEasebuzzLib;
use Easebuzz\Easebuzz;
use GuzzleHttp\Client;
class TourController extends Controller
{
    private $apiUrl = 'https://open.er-api.com/v6/latest';
    public function  __construct() {
        Mollie::api()->setApiKey('test_4rzgD36nez5q64WAravxuxJzHbbCzJ'); // your mollie test api key
    }
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
        $form_status1 ="tour_form";
        return view('flight/tour-search-list',compact('flight','form_status1'));
    }
    public function tour_list_search(Request $request)
    {
        $city_name= $request->input('city_name');
        // print_r($city_name);die;
        $tour_type= $request->input('tour_type');
        $day= $request->input('day');
        $flight = Tour_Model::where('country',$city_name)->where('tour_type',$tour_type)->get();
        $form_status1 ="tour_form";
        return view('flight/tour-search-list',compact('flight','form_status1'));
    }
     public function get_tour()
    {
       $flight = Tour_Model::get();
        return view('flight/admin/all-tour',compact('flight'));
    }
     public function add_tour()
    {
          $country = CountryCode_Model::get();
       $flight = Hotel_Model::where('user_id',session()->get('user_id'))->get();
        return view('flight/admin/add-tour',compact('flight','country'));
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
        
        
        
    //     $tour_id= $request->input('tour_id');
    //     $tour_package_id= $request->input('tour_package_id');
    // // print_r($tour_id);die;
    //     $data['tour_name']= $request->input('tour_name');
    //     $tour_package = Tour_Detail_Model::where('id',$tour_package_id)->first();
        
    //     //   print_r($tour_package);die;
        $flight = Tour_Model::get();
        return view('flight/tour-booking-submission',compact('flight'));
    }
   public function tour_store(Request $request)
{
    $data['tour_name'] = $request->input('tour_name');
    $data['address'] = $request->input('address');
    $data['no_of_day'] = $request->input('no_of_day');
    $data['rating'] = $request->input('rating');
    $data['reviewes'] = $request->input('reviewes');
    $data['price'] = $request->input('price');
    $data['tax'] = $request->input('tax');
    $data['other_facilities'] = $request->input('other_facilities');
    $data['tour_type'] = 'single';
    $data['no_of_people'] = $request->input('no_of_people');
    $data['overview'] = $request->input('overview');
    $data['included'] = $request->input('included');
    $data['excluded'] = $request->input('excluded');
    $data['why_choose_us'] = $request->input('why_choose_us');
    $data['itinerary'] = json_encode($request->input('itinerary'));
    $data['country'] = $request->input('country');

    // Handling main image upload
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $name);
        $data['image'] = $name;
    }

    // Handling multiple images upload
    if ($request->hasFile('images')) {
        $images = [];
        foreach ($request->file('images') as $file) {
            $name = rand(11111, 95999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $name);
            $images[] = $name;
        }
        $data['images'] = json_encode($images); // Convert array to JSON string to store in the database
    }

    $tour = Tour_Model::create($data);

    $flights = Tour_Model::all();
    return view('flight/admin/all-tour', compact('flights'));
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
        
            $data['name']= session()->get('fname');
			$data['name1']= session()->get('lname');
			$data['email']= session()->get('email');
			$data['mobile']= session()->get('mobile');
			$data['address']= session()->get('address');
			$data['tour_pavkage_id']= session()->get('tour_package_id');
			$data['tour_id']= session()->get('tour_id');
			
			$contact_id = Tour_Booking_Model::create($data);
			 $flight = Tour_Model::get();
// 		return view('flight/tour-search-list',compact('flight'));
return redirect('/login');
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
			$data['tour_type'] = 'single';
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
        $images = [];
        foreach ($request->file('images') as $file) {
            $name = rand(11111, 95999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $name);
            $images[] = $name;
        }
        $data['images'] = json_encode($images); // Convert array to JSON string to store in the database
    }
         
			}
			$contact_id = Tour_Model::where('id',$id)->update($data);
			 $flight = Tour_Model::get();
		return view('flight/admin/all-tour',compact('flight'));
    }
     public function preparePayment(Request $request)
    {   
           
     session()->put('fname',$request->name);
     session()->put('lname',$request->lname);
     session()->put('email',$request->email);
     session()->put('mobile',$request->mobile);
     session()->put('address',$request->address);
     session()->put('tour_id',$request->tour_id);
     session()->put('tour_package_id',$request->tour_package_id);
     session()->put('payment_type',$request->payment);
 
     $tour_package = Tour_Detail_Model::where('id',$request->tour_package_id)->first();
     
//   Easybuzz Payment
   if($request->payment =='easybuzz'){
      
        $amount = $tour_package->amount;
       $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $pin = mt_rand(1000000, 9999999)
                    . mt_rand(1000000, 9999999)
                    . $characters[rand(0, strlen($characters) - 1)];
                        $string = str_shuffle($pin);
                        
                session()->put('paymentID',$string);        
 $postData = array ( 
    "txnid" => $string, 
    "amount" => $amount,  
    "firstname" => $request->name, 
    "email" => $request->email, 
    "phone" => $request->mobile, 
    "productinfo" => "Flight", 
    "surl" => url('book-tour'), 
    "furl" => url('book-tour'),  
    "udf1" => "aaaa", 
    "udf2" => "aaaa", 
    "udf3" => "aaaa", 
    "udf4" => "aaaa", 
    "udf5" => "aaaa", 
    "address1" => "aaaa", 
    "address2" => "aaaa", 
    "city" => "aaaa", 
    "state" => "aaaa", 
    "country" => "aaaa", 
    "zipcode" => "461331" 
);
       $MERCHANT_KEY = "PQALG4XZKO";
        $SALT = "5DZAN1HXJQ";        
        $ENV = "prod";
        $payebz = new PayWithEasebuzzLib($MERCHANT_KEY, $SALT, $ENV);
        $result = $payebz->initiatePaymentAPI($postData, true);
        print_r($result);
        
   }
//   Mollie Details
   if($request->payment =='mollie'){
            $payment = Mollie::api()->payments->create([
                "amount" => [
                    "currency" => "GBP",
                    "value" => "100.00" // You must send the correct number of decimals, thus we enforce the use of strings
                ],
                "description" => "Flight Booking",
                "redirectUrl" => url('book-tour'), 
                // "webhookUrl" => route('webhooks.mollie'),
                "metadata" => [
                    "order_id" => "123456",
                ],
            ]);
               session()->put('paymentID',$payment->id);
            return redirect($payment->getCheckoutUrl(), 303);
   }
//   Wallet Details
  if($request->payment =='wallet'){
      
        $amount = $tour_package->amount;
        $payment_for = "flight";
      $user_id = session()->get('user_id');
	  if($user_id){
	    $wallet_details = Wallet_Model::where('user_id',$user_id)->first();
	    if($wallet_details){
	       if($wallet_details->amount  >= $amount){
            	    $user_id = session()->get('user_id');
            	    if($user_id){
            	    $wallet_details = Wallet_Model::where('user_id',$user_id)->first();
                    $new = $amount;
                   if($wallet_details){
                       $amount1 = $wallet_details->amount; 
                    }else{
                        $amount1 = 0;
                    }
                    if($wallet_details){
                        $credit_amount1 = $wallet_details->debit_amount;
                    }else{
                        $credit_amount1 = 0;
                    }
                    $total = $amount1 - $new;
                    $total_credit_amount = $new + $credit_amount1;
            		$data2['amount'] = $total ; 
            		$data2['debit_amount'] = $new; ;
            // 			print_r($data);die;
            		$contact_id = Wallet_Model::where('user_id',$user_id)->update($data2);
            		$id = session()->get('user_id');
                        $data1['user_id']= $user_id;
            			$data1['amount']= $total;
            			$data1['debit_amount']=  $new ;
            // 			print_r($data);die;
            			 Wallet_Transaction_Model::create($data1);
                    // Payment Details 
                    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $pin = mt_rand(1000000, 9999999)
                    . mt_rand(1000000, 9999999)
                    . $characters[rand(0, strlen($characters) - 1)];
                        $string = str_shuffle($pin);
                        $data12['payment_for']= $payment_for;
            			$data12['amount']= $amount;
            			$data12['payment_type']= "Wallet";
            			$data12['payment_id']= $string;
            // 			print_r($data);die; 
            			 Payment_Model::create($data12);
                    $user_count = 0;
                    session()->put('PaymentID',$string);
                    //   return redirect()->back()->with('message',"Payment Success...");
                  return redirect()->url('book-tour');
            	    }
	       }
	       // return response()->json(['order_id' => "",'message' => "payment Failed Wallet Amount Low"]);
	        return redirect()->back()->with('message',"payment Failed Wallet Amount Low");
	    }
   }
      else{
          return redirect()->back(); 
      }
  }
    // Razorpay 
        // $input = $request->all();
        // $api = new Api(env('RAZOR_KEY'),env('RAZOR_SECRET'));
        // $payment = $api->payment->fetch($request->razorpay_payment_id);
        // if (count($input) && !empty($input['razorpay_payment_id'])) {
        //     try {
        //         $payment->capture(array('amount'=>$payment['amount']));
        //     } catch (\Exception $e) {
        //         return $e->getMessage();
        //         \Session::put('error',$e->getMessage());
        //         return redirect()->back();
        //     }
        // }
        // $payInfo = [
        //           'payment_id' => $request->razorpay_payment_id,
        //           'user_id' => '1',
        //           'amount' => $request->amount,
        //         ];
        //     Payment::insertGetId($payInfo); 
        //     \Session::put('success', 'Payment successful');
        //     return response()->json(['success' => 'Payment successful']);


        
    }
     public function tour_enquiry(Request $request)
    {
            $data['destination']= $request->input('destination');
			$data['interested_in']= $request->input('interested_in');
			$data['Preferred_Category']= $request->input('Preferred_Category');
			$data['Preferred_Depart_Date']= $request->input('Preferred_Depart_Date');
			$data['Title']= $request->input('Title');
			$data['Full_name']= $request->input('Full_name');
			$data['Telephone']= $request->input('Telephone');
			$data['Email']= $request->input('Email');
			$data['Your_Message']= $request->input('Your_Message');
			$contact_id = Tour_Enquiry_Model::create($data);
			$flight = Tour_Model::get();
			return redirect('/');
// 	 return redirect()->back()->with('message',"Tour Enquiry successfull");
}

 public function tour_enquiry_details(Request $request)
    {
            $Tour_Enquiry = Tour_Enquiry_Model::get();
		return view('flight/admin/tour_enquiry_details',compact('Tour_Enquiry'));
}
    
}