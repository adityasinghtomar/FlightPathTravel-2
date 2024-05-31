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
use App\CountryCode_Model;
use DateTime;
use Illuminate\Support\Facades\Http;
use Mollie\Laravel\Facades\Mollie;
use Stevebauman\Location\Facades\Location;
use Easebuzz\PayWithEasebuzzLaravel\PayWithEasebuzzLib;
use Easebuzz\Easebuzz;
use GuzzleHttp\Client;
class VisaController extends Controller
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
        $flight = Visa_Model::get();
        $country = Visa_Model::get();
        return view('flight/admin/all-visa',compact('flight'));
    }
      public function add_visa()
    {
        $flight = Visa_Model::get();
         $country = CountryCode_Model::get();
        return view('flight/admin/add-visa',compact('flight','country'));
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
			$data['country'] = $request->input('country');
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
      $form_status1 ="visa_form";
        return view('flight/visa-list',compact('flight','form_status1'));
    }   
    public function visa_search_list(Request $request)
    {
        $tour_type= $request->input('visa_type');
        $day= $request->input('day');
        $flight = Visa_Model::where('visa_type',$tour_type)->where('duration',$day)->get();
        $form_status1 ="visa_form";
        return view('flight/visa-list',compact('flight','form_status1'));
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
        $visa_package = Visa_Package_Model::where('id',session()->get('visa_package_id'))->first();
        $visa = Visa_Model::where('id',session()->get('visa_id'))->first();
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
            $data['name']= session()->get('fname');
			$data['lname']= session()->get('lname');
			$data['email']= session()->get('email');
			$data['mobile']= session()->get('mobile');
			$data['address']= session()->get('address');
			$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

            // generate a pin based on 2 * 7 digits + a random character
            $pin = mt_rand(1000000, 9999999)
                . mt_rand(1000000, 9999999)
                . $characters[rand(0, strlen($characters) - 1)];
            $string = str_shuffle($pin);
            $data['booking_id']= session()->get('paymentID');
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
     public function preparePayment(Request $request)
    {   
           
     session()->put('fname',$request->name);
     session()->put('lname',$request->lname);
     session()->put('email',$request->email);
     session()->put('mobile',$request->mobile);
     session()->put('address',$request->address);
     session()->put('visa_id',$request->visa_id);
     session()->put('visa_package_id',$request->visa_package_id);
     session()->put('payment_type',$request->payment);
 
     $tour_package = Visa_Package_Model::where('id',$request->visa_package_id)->first();
     
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
    "surl" => url('book-visa'), 
    "furl" => url('book-visa'),  
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
                "redirectUrl" => url('book-visa'), 
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
                  return redirect()->url('book-visa');
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

}