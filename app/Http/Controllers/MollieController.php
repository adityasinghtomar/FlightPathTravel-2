<?php

namespace App\Http\Controllers;
use Mollie\Laravel\Facades\Mollie;
use Mail; 
use App\Mail\DemoMail;
use Illuminate\Http\Request;
use App\Category_Model;
use App\State_Model;
use App\City_Model;
use App\Countries_Model;
use App\Airport_Model;
use App\FileStatus_Model;
use App\UserDetails_Model;  
use App\Flight_Model;
use App\Flight_Log_Model;
use App\Wallet_Model;
use App\Wallet_Transaction_Model;
use Illuminate\Support\Facades\Http;
use Stevebauman\Location\Facades\Location;
use Easebuzz\PayWithEasebuzzLaravel\PayWithEasebuzzLib;
use Easebuzz\Easebuzz;
use GuzzleHttp\Client;
use Illuminate\Support\Str;
use App\Api_Model;
use App\Markup_Model;
use App\Currency_Model;
use App\FlightBookTicket;
// use Razorpay\Api\Api;
use Session;
// use Redirect;
use DB;
class MollieController extends Controller
{   
    private $apiUrl = 'https://open.er-api.com/v6/latest';
    public function  __construct() {
        Mollie::api()->setApiKey('test_4rzgD36nez5q64WAravxuxJzHbbCzJ'); // your mollie test api key
    }

    /**
     * Redirect the user to the Payment Gateway.
     *
     * @return Response
     */
    public function preparePayment(Request $request)
    {   
         
     session()->put('fname',$request->fname);
     session()->put('lname',$request->lname);
     session()->put('email',$request->email);
     session()->put('mobile',$request->mobile);
     session()->put('payment_type',$request->payment);
   $amount = session()->put('payment',$request->amount1); 
   
//   markup
$actual_amountw = session()->get('PublishedFare');
$Currency_active =Currency_Model::where('currency_active','0')->first(); 
$mark_up= Markup_Model::where('currency_code',$Currency_active->currency_code)->where('markup_type','flight')->first(); 
if($mark_up){
$subtotal1 = $actual_amountw / $Currency_active->currency_rates ;
$actual_amountq = $subtotal1 + $mark_up->markup_amount;
$actual_amount = round($actual_amountq, 0);
}else{
    $actual_amountq = $actual_amountw / $Currency_active->currency_rates ;
    $actual_amount = round($actual_amountq, 0);
}

//  print_r($actual_amount);die;
//   Easybuzz Payment
   if($request->payment =='easybuzz'){
       $BaseFare = session()->get('BaseFare');
       $Tax = session()->get('Tax');
        $amount = $BaseFare + $Tax;
       $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $pin = mt_rand(1000000, 9999999)
                    . mt_rand(1000000, 9999999)
                    . $characters[rand(0, strlen($characters) - 1)];
                        $string = str_shuffle($pin);
                        session()->put('paymentID', $string);
                // session()->put('paymentID',$string);        
        //     $MERCHANT_KEY = "PQALG4XZKO";
        // $SALT = "5DZAN1HXJQ";        
        // $ENV = "test";   // set enviroment name : test / development / production
        
        // $easebuzzObj = new PayWithEasebuzzLib($MERCHANT_KEY, $SALT, $ENV);    
        // // print_r($easebuzzObj);die;
        
        
  $fnames = session()->get('fname');
$lnames = session()->get('lname');
if (is_array($fnames) && is_array($lnames)) {
    // Start the session if it's not already started
    if (session_status() !== PHP_SESSION_ACTIVE) {
       
    }

    // Concatenate all first names and last names into comma-separated strings
    $allFnames = implode(',', $fnames);
    $allLnames = implode(',', $lnames);
        
    // Prepare data to store in the database
    $ticket_data = [
        'ResultIndex' => session()->get('ResultIndex'),
        'TraceId' => session()->get('TraceId'),
        'token_id' => session()->get('token_id'),
        'EndUserIp' => session()->get('EndUserIp'),
        'BaseFare' => session()->get('BaseFare'),
        'Currency' => session()->get('Currency'),
        'Tax' => session()->get('Tax'),
        'YQTax' => session()->get('YQTax'),
        'AdditionalTxnFeeOfrd' => session()->get('AdditionalTxnFeeOfrd'),
        'AdditionalTxnFeePub' => session()->get('AdditionalTxnFeePub'),
        'OtherCharges' => session()->get('OtherCharges'),
        'Discount' => session()->get('Discount'),
        'PublishedFare' => session()->get('PublishedFare'),
        'TdsOnCommission' => session()->get('TdsOnCommission'),
        'TdsOnPLB' => session()->get('TdsOnPLB'),
        'TdsOnIncentive' => session()->get('TdsOnIncentive'),
        'ServiceFee' => session()->get('ServiceFee'),
        'Destination_name' => session()->get('Destination_name'),
        'Destination_address' => session()->get('Destination_address'),
        'Source_name' => session()->get('Source_name'),
        'Source_address' => session()->get('Source_address'),
        'Duration' => session()->get('Duration'),
        'fname' => $allFnames,
        'lname' => $allLnames,
        'email' => session()->get('email'),
        'mobile' => session()->get('mobile'),
        'payment' => session()->get('payment'),
        'transaction_id' =>$string,
        'created_at' => now(),
        'updated_at' => now(),
    ];

    // Create the ticket instance and save to database
    $ticket = new FlightBookTicket($ticket_data);
   $ticket->save();
      
} 
    //  print_r($ticket);die;

        $postData = array ( 
    "txnid" => $string, 
    "amount" => $actual_amount,  
    "firstname" => $request->fname['0'], 
    "email" => $request->email, 
    "phone" => $request->mobile, 
    "productinfo" => "Flight", 
     "surl" => route('payment.easybuzzsuccess'),
    "furl" => route('payment.cancel'), 
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
         Session::put('postData', $result);
        return redirect($result['payment_url']);
   }
//   Mollie Details
   if($request->payment =='mollie'){
            $payment = Mollie::api()->payments->create([
                "amount" => [
                    "currency" => "GBP",
                    "value" => "$actual_amount.00" // You must send the correct number of decimals, thus we enforce the use of strings
                ],
                "description" => "Flight Booking",
                "redirectUrl" => route('payment.success'),
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
      $BaseFare = session()->get('BaseFare');
      $Tax = session()->get('Tax');
        $amount = $BaseFare + $Tax;
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
                    Session::put('PaymentID',$string);
                    //   return redirect()->back()->with('message',"Payment Success...");
                  return redirect()->route('payment.success');
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

    /**
     * Page redirection after the successfull payment
     *
     * @return Response
     */
       public function paymentSuccesseasebuzz(Request $request) {
           
              Session::start();
             $api_search = Api_Model::where('api_name','Flight')->where('status','active')->first();  
            $transaction_id = $request->input('txnid'); // Or however the data is returned
//   print_r($transaction_id);die;
$ticket = FlightBookTicket::where('transaction_id', $transaction_id)->firstOrFail();
//   if ($ticket) {
    // Print single values
    // echo "Result Index: " . $ticket->ResultIndex . "<br>";
    // echo "Trace Id: " . $ticket->TraceId . "<br>";
    // Print other single fields similarly...
    $ResultIndex = $ticket->ResultIndex;
    // print_r($ResultIndex);die; 
    $TraceId = $ticket->TraceId;
    $token_id = $ticket->token_id;
    $EndUserIp = $ticket->EndUserIp;
    $BaseFare = $ticket->BaseFare;
    $Currency = $ticket->Currency;
    $Tax = $ticket->Tax;
    $YQTax = $ticket->YQTax;
    $AdditionalTxnFeeOfrd = $ticket->AdditionalTxnFeeOfrd;
    $AdditionalTxnFeePub = $ticket->AdditionalTxnFeePub;
    $OtherCharges = $ticket->OtherCharges;
    $Discount = $ticket->Discount;
    $PublishedFare = $ticket->PublishedFare;
    $TdsOnCommission = $ticket->TdsOnCommission;
    $TdsOnPLB = $ticket->TdsOnPLB;
    $TdsOnIncentive = $ticket->TdsOnIncentive;
    $ServiceFee = $ticket->ServiceFee;
    $Destination_name = $ticket->Destination_name;
    $Destination_address = $ticket->Destination_address;
    $Source_name = $ticket->Source_name;
    $Source_address = $ticket->Source_address;
    $Duration = $ticket->Duration;
    
    // Explode fname and lname fields into arrays
    $fnames_array = explode(',', $ticket->fname);
    $lnames_array = explode(',', $ticket->lname);

    // Print fnames as array
    // echo "First Names:<br>";
    // foreach ($fnames_array as $index => $fname) {
    //     echo "Array[$index]: $fname<br>";
    // }

    // // Print lnames as array
    // echo "<br>Last Names:<br>";
    // foreach ($lnames_array as $index => $lname) {
    //     echo "Array[$index]: $lname<br>";
    // }
// } else {
//     echo "Ticket not found.";
// }
// die;


    $itemCount = $ticket->fname;
        // print_r($itemCount);die;
         $results = [];
foreach ($fnames_array as $index => $lname) {
    // if($i==$itemCount)
    // {
    //     break;
    // }
    $results[] = [
        'Title'=> "Mr",
        		"FirstName"=> $lname,
        		"LastName"=> $lnames_array[$index],
        		"PaxType"=> 1,
        		"DateOfBirth"=> "1987-12-06T00:00:00",
        		"Gender"=> 1,
        		"PassportNo"=> "KJHHJKHKJH",
        		"PassportExpiry"=> "2027-12-06T00:00:00",
        		"AddressLine1"=> "null",
        		"AddressLine2"=> "null",
        		"Fare"=> [
        			"Currency"=> $Currency,
        			"BaseFare"=> $BaseFare,
        			"Tax"=> $Tax,
        			"YQTax"=> $YQTax,
        			"AdditionalTxnFeePub"=> $AdditionalTxnFeePub,
        			"AdditionalTxnFeeOfrd"=> $AdditionalTxnFeeOfrd,
        			"OtherCharges"=> $OtherCharges,
        			"Discount"=> $Discount,
        			"PublishedFare"=> $PublishedFare,
        			"OfferedFare"=> 0.0,
        			"TdsOnCommission"=> $TdsOnCommission,
        			"TdsOnPLB"=> $TdsOnPLB,
        			"TdsOnIncentive"=> $TdsOnIncentive,
        			"ServiceFee"=> $ServiceFee
        		],
        		"City"=> "",
        		"CountryCode"=> "GB",
        		"CellCountryCode" => "+91",
                "ContactNo"=> $ticket->mobile,
        		"Nationality"=> "",
                "Email"=> "info@flightpathtravel.com",
        		"IsLeadPax"=> true,
        		"FFAirlineCode"=> null,
        		"FFNumber"=> "",  
        		"GSTCompanyAddress"=> "",
        		"GSTCompanyContactNumber"=> "",
        		"GSTCompanyName"=> "",
        		"GSTNumber"=> "",
        		"GSTCompanyEmail"=> ""
    ];
}
$sto = json_encode($results);
        // print_r($sto);die;
        $endpoint1 = "$api_search->api/rest/FareQuote/"; 
                        $json1='{
        "EndUserIp": "'.$EndUserIp.'",
        "TokenId": "'.$token_id.'",
        "TraceId": "'.$TraceId.'",
        "ResultIndex": "'.$ResultIndex.'",
        	}';
        // print_r($TraceId);die;
        $ch1 = curl_init($endpoint1);
        $data =$json1;
        curl_setopt($ch1, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch1, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch1);
        $result1    = json_decode($result);
        
         
        foreach($result1 as $res){
                 
            if(isset($res->Results)){        
             $dat = $res->Results;
             $IsLCC_status = $dat->IsLCC;
               
            }
        }
                // FareQuote	End	
        if(isset($IsLCC_status)){
                if($IsLCC_status =='1'){
                //Booking  
        $endpoint = "$api_search->booking_api/rest/Ticket/"; 
        $url = $endpoint;
               $json='{
            "PreferredCurrency": null,   
            "ResultIndex": "'.$ResultIndex.'",
        	"Passengers": '.$sto.',
        	"EndUserIp": "'.$EndUserIp.'",
        	"TokenId": "'.$token_id.'",
        	"TraceId": "'.$TraceId.'"
        	}';
        $ch = curl_init($url);
        $data =$json;
        $payload = $json;
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $result1    = json_decode($result);
        // print_r($result1);die;
        if(isset($result1)){
        foreach($result1 as $res){
            if(isset($res->Response->FlightItinerary->Passenger)){
            $Passenger = $res->Response->FlightItinerary->Passenger;
            if(isset($Passenger)){
            foreach($Passenger as $Passengers){
                $fname = $Passengers->FirstName;
                $lname = $Passengers->LastName; 
            }
            $pnr_no = $res->Response->PNR;
            $Origin = $res->Response->FlightItinerary->Origin;
            $Destination = $res->Response->FlightItinerary->Destination;
            $AirlineCode = $res->Response->FlightItinerary->AirlineCode; 
            $TraceId = $res->TraceId;
            $booking_id = $res->Response->BookingId;
            $ticket_date = 0;
            $amount = $res->Response->FlightItinerary->Fare->PublishedFare;
            
            $segmen = $res->Response->FlightItinerary->Segments;
            if(isset($segmen)){
                foreach($segmen as $segmens){
                    $DepTime = $segmens->Origin->DepTime;
                    $ArrTime = $segmens->Destination->ArrTime;
                        }
            }
            $data = array();
                    $data['name']= $fname;
        			$data['lname']= $lname;
        			$data['pnr_no']=$pnr_no;
                    $data['origin']= $Origin;
        			$data['destination']= $Destination;
                    $data['AirlineCode']= $AirlineCode;
                    $data['DepTime']= $DepTime;
                    $data['ArrTime']= $ArrTime;
        			$data['trace_id']=$TraceId;
        			$data['booking_id']=$booking_id;
        			$data['amount'] = $BaseFare + $Tax;
        			$data['tds']=$TdsOnPLB;
        			$data['gst']=$Tax;
        			$data['email']=$ticket->email;
        			$data['service_tex'] = $ServiceFee;
        			$data['ticket_date'] = $ticket_date;
        			$data['user_id'] = session()->get('user_id'); 
        			$data['payment_id'] = $ticket->paymentID;
        			$data['booking_status'] ='1';
        // 			print_r($data);die;
        			$contact_id = Flight_Model::create($data);
        			
        $data = ['pnr_no' =>"$pnr_no", 'booking_id'=>"$booking_id" ,'amount'=>"$PublishedFare" ,'ticket_date'=>"$ticket_date",'fname'=>"$fname",'lname'=>"$lname",'Origin'=>"$Origin",'Destination'=>"$Destination",'DepTime'=>"$DepTime", 'ArrTime'=>"$ArrTime" ];
            $user['to'] = $ticket->email;
        Mail::send('welcome',$data,function($messages) use ($user){
            
            $messages->to($user['to']);
            $messages->subject('flight Booking');   
        });	
        	    $user_id = session()->get('user_id');
        		
        }			
            }
            }
        }
                }
                else{
                  $endpoint = "$api_search->booking_api/rest/Book/"; 
                $url = $endpoint;
                       $json='{
                                "ResultIndex": "'.$ResultIndex.'",
                	"Passengers": '.$sto.',
                	"EndUserIp": "'.$EndUserIp.'",
                	"TokenId": "'.$token_id.'",
                	"TraceId": "'.$TraceId.'"
                	}';
                $ch = curl_init($url);
                $data =$json;
                $payload = $json;
                curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $result = curl_exec($ch);
                $result1    = json_decode($result);
                // print_r($result1);die;
            if(isset($result1)){
                foreach($result1 as $res){
                    if(isset($res->Response->FlightItinerary->Passenger)){
                    $Passenger = $res->Response->FlightItinerary->Passenger;
                    if(isset($Passenger)){
                    foreach($Passenger as $Passengers){
                        $fname = $Passengers->FirstName;
                        $lname = $Passengers->LastName; 
                    }
                    $pnr_no = $res->Response->PNR;
                    $Origin = $res->Response->FlightItinerary->Origin;
                    $Destination = $res->Response->FlightItinerary->Destination;
                    $AirlineCode = $res->Response->FlightItinerary->AirlineCode; 
                    $TraceId = $res->TraceId;
                    $booking_id = $res->Response->BookingId;
                    $ticket_date = 0;
                    $amount = $res->Response->FlightItinerary->Fare->PublishedFare;
                    
                    $segmen = $res->Response->FlightItinerary->Segments;
                    if(isset($segmen)){
                        foreach($segmen as $segmens){
                            $DepTime = $segmens->Origin->DepTime;
                            $ArrTime = $segmens->Destination->ArrTime;
                                }
                    }
                    $data = array();
                            $data['name']= $fname;
                			$data['lname']= $lname;
                			$data['pnr_no']=$pnr_no;
                            $data['origin']= $Origin;
                			$data['destination']= $Destination;
                            $data['AirlineCode']= $AirlineCode;
                            $data['DepTime']= $DepTime;
                            $data['ArrTime']= $ArrTime;
                			$data['trace_id']=$TraceId;
                			$data['booking_id']=$booking_id;
                			$data['amount'] = $BaseFare + $Tax;
                			$data['tds']=$TdsOnPLB;
                			$data['gst']=$Tax;
                			$data['email']=$ticket->email;
                			$data['service_tex'] = $ServiceFee;
                			$data['ticket_date'] = $ticket_date;
                			$data['user_id'] = session()->get('user_id'); 
                			$data['payment_id'] = $ticket->paymentID;
                			$data['booking_status'] ='1';
                // 			print_r($data);die;
                			$contact_id = Flight_Model::create($data);
                			
                $data = ['pnr_no' =>"$pnr_no", 'booking_id'=>"$booking_id" ,'amount'=>"$PublishedFare" ,'ticket_date'=>"$ticket_date",'fname'=>"$fname",'lname'=>"$lname",'Origin'=>"$Origin",'Destination'=>"$Destination",'DepTime'=>"$DepTime", 'ArrTime'=>"$ArrTime" ];
                    $user['to'] = $ticket->email;
                Mail::send('welcome',$data,function($messages) use ($user){
                    
                    $messages->to($user['to']);
                    $messages->subject('flight Booking');   
                });	
                	    $user_id = session()->get('user_id');
                		
                }			
                    }
                    }  
            }    
                }
                }
        else{
          $endpoint = "$api_search->booking_api/rest/Book/"; 
        $url = $endpoint;
               $json='{
                        "ResultIndex": "'.$ResultIndex.'",
        	"Passengers": '.$sto.',
        	"EndUserIp": "'.$EndUserIp.'",
        	"TokenId": "'.$token_id.'",
        	"TraceId": "'.$TraceId.'"
        	}';
        $ch = curl_init($url);
        $data =$json;
        $payload = $json;
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $result1    = json_decode($result);
        // print_r($result1);die;
        if(isset($result1)){
        foreach($result1 as $res){
            if(isset($res->Response->FlightItinerary->Passenger)){
            $Passenger = $res->Response->FlightItinerary->Passenger;
            if(isset($Passenger)){
            foreach($Passenger as $Passengers){
                $fname = $Passengers->FirstName;
                $lname = $Passengers->LastName; 
            }
            $pnr_no = $res->Response->PNR;
            $Origin = $res->Response->FlightItinerary->Origin;
            $Destination = $res->Response->FlightItinerary->Destination;
            $AirlineCode = $res->Response->FlightItinerary->AirlineCode; 
            $TraceId = $res->TraceId;
            $booking_id = $res->Response->BookingId;
            $ticket_date = 0;
            $amount = $res->Response->FlightItinerary->Fare->PublishedFare;
            
            $segmen = $res->Response->FlightItinerary->Segments;
            if(isset($segmen)){
                foreach($segmen as $segmens){
                    $DepTime = $segmens->Origin->DepTime;
                    $ArrTime = $segmens->Destination->ArrTime;
                        }
            }
            $data = array();
                    $data['name']= $fname;
        			$data['lname']= $lname;
        			$data['pnr_no']=$pnr_no;
                    $data['origin']= $Origin;
        			$data['destination']= $Destination;
                    $data['AirlineCode']= $AirlineCode;
                    $data['DepTime']= $DepTime;
                    $data['ArrTime']= $ArrTime;
        			$data['trace_id']=$TraceId;
        			$data['booking_id']=$booking_id;
        			$data['amount'] = $BaseFare + $Tax;
        			$data['tds']=$TdsOnPLB;
        			$data['gst']=$Tax;
        			$data['email']=$ticket->email;
        			$data['service_tex'] = $ServiceFee;
        			$data['ticket_date'] = $ticket_date;
        			$data['user_id'] = session()->get('user_id'); 
        			$data['payment_id'] = $ticket->paymentID;
        			$data['booking_status'] ='1';
        // 			print_r($data);die;
        			$contact_id = Flight_Model::create($data);
        			
        $data = ['pnr_no' =>"$pnr_no", 'booking_id'=>"$booking_id" ,'amount'=>"$PublishedFare" ,'ticket_date'=>"$ticket_date",'fname'=>"$fname",'lname'=>"$lname",'Origin'=>"$Origin",'Destination'=>"$Destination",'DepTime'=>"$DepTime", 'ArrTime'=>"$ArrTime" ];
            $user['to'] = $ticket->email;
        Mail::send('welcome',$data,function($messages) use ($user){
            
            $messages->to($user['to']);
            $messages->subject('flight Booking');   
        });	
        	    $user_id = session()->get('user_id');
        		
        }			
            }
            }  
        }
        }
              return view('flight/booking-confirmation',compact('result1'));
       }       
       
       
    public function paymentSuccess(Request $request) {
         Session::start();
         
     $postData = session()->get('payment');
    //  print_r($postData);die;
    //  echo $postData['amount'];
    $payment_type = session()->get('payment_type');
    $api_search = Api_Model::where('api_name','Flight')->where('status','active')->first(); 
    
    
   $jsonUserData = session()->get('user_data');
    
// Decode the JSON data to an associative array

            //      $BaseFare = session()->get('BaseFare');
                 
            //     $paymentID = session()->get('paymentID');
            //     // print_r($BaseFare);die;
             
            //     $payment =Mollie::api()->payments->get($paymentID);
            // if($payment->isPaid()){        
            $ResultIndex = session()->get('ResultIndex');
            // print_r($ResultIndex);die;
            $TraceId = session()->get('TraceId');
            $token_id = session()->get('token_id');
            $EndUserIp = session()->get('EndUserIp');
            $BaseFare = session()->get('BaseFare');
            $Currency = session()->get('Currency');
            $Tax = session()->get('Tax');
            $YQTax = session()->get('YQTax');
            $AdditionalTxnFeeOfrd = session()->get('AdditionalTxnFeeOfrd');
            $AdditionalTxnFeePub = session()->get('AdditionalTxnFeePub');
            $OtherCharges = session()->get('OtherCharges');
            $Discount = session()->get('Discount');
            $PublishedFare = session()->get('PublishedFare');
            $TdsOnCommission = session()->get('TdsOnCommission');
            $TdsOnPLB = session()->get('TdsOnPLB');
            $TdsOnIncentive = session()->get('TdsOnIncentive');
            $ServiceFee = session()->get('ServiceFee');
            $Destination_name = session()->get('Destination_name');
            $Destination_address = session()->get('Destination_address');
            $Source_name = session()->get('Source_name');
            $Source_address = session()->get('Source_address');
            $Duration = session()->get('Duration');
            // $dateofbirth = $request->dateofbirth;
            
            $fname = session()->get('fname');
            $lname = session()->get('lname');
            $email = session()->get('email');
            $mobile = session()->get('mobile');
            $payment = session()->get('payment');
            
            
            // $address = $request->address;
            // $city = $request->city;
            // $state = $request->state;
            // $country = $request->country;
            // $passport_no = $request->passport_no;
            // $passport_expiry = $request->passport_expiry;
        // FireQoute
        // FireQoute
                // Json Data form field
                   $itemCount = $paymentData->fname;
        // print_r($itemCount);die;
         $results = [];
for($i = 0; $i < $itemCount; $i++) {
    if($i==$itemCount)
    {
        break;
    }
    $results[] = [
        'Title'=> "Mr",
        		"FirstName"=> $paymentData->fname[$i],
        		"LastName"=> $paymentData->lname[$i],
        		"PaxType"=> 1,
        		"DateOfBirth"=> "1987-12-06T00:00:00",
        		"Gender"=> 1,
        		"PassportNo"=> "KJHHJKHKJH",
        		"PassportExpiry"=> "2027-12-06T00:00:00",
        		"AddressLine1"=> "null",
        		"AddressLine2"=> "null",
        		"Fare"=> [
        			"Currency"=> $Currency,
        			"BaseFare"=> $BaseFare,
        			"Tax"=> $Tax,
        			"YQTax"=> $YQTax,
        			"AdditionalTxnFeePub"=> $AdditionalTxnFeePub,
        			"AdditionalTxnFeeOfrd"=> $AdditionalTxnFeeOfrd,
        			"OtherCharges"=> $OtherCharges,
        			"Discount"=> $Discount,
        			"PublishedFare"=> $PublishedFare,
        			"OfferedFare"=> 0.0,
        			"TdsOnCommission"=> $TdsOnCommission,
        			"TdsOnPLB"=> $TdsOnPLB,
        			"TdsOnIncentive"=> $TdsOnIncentive,
        			"ServiceFee"=> $ServiceFee
        		],
        		"City"=> "",
        		"CountryCode"=> "GB",
        		"CellCountryCode" => "+91",
                "ContactNo"=> $mobile,
        		"Nationality"=> "",
                "Email"=> "info@flightpathtravel.com",
        		"IsLeadPax"=> true,
        		"FFAirlineCode"=> null,
        		"FFNumber"=> "",  
        		"GSTCompanyAddress"=> "",
        		"GSTCompanyContactNumber"=> "",
        		"GSTCompanyName"=> "",
        		"GSTNumber"=> "",
        		"GSTCompanyEmail"=> ""
    ];
}
$sto = json_encode($results);
        // print_r($sto);die;
        $endpoint1 = "$api_search->api/rest/FareQuote/"; 
                        $json1='{
        "EndUserIp": "'.$EndUserIp.'",
        "TokenId": "'.$token_id.'",
        "TraceId": "'.$TraceId.'",
        "ResultIndex": "'.$ResultIndex.'",
        	}';
        // print_r($TraceId);die;
        $ch1 = curl_init($endpoint1);
        $data =$json1;
        curl_setopt($ch1, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch1, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch1);
        $result1    = json_decode($result);
        // print_r($result1);die;
                // FareQuote	End	
                
                //Booking  
        $endpoint = "$api_search->booking_api/rest/Book/"; 
        $url = $endpoint;
               $json='{
                        "ResultIndex": "'.$ResultIndex.'",
        	"Passengers": '.$sto.',
        	"EndUserIp": "'.$EndUserIp.'",
        	"TokenId": "'.$token_id.'",
        	"TraceId": "'.$TraceId.'"
        	}';
        $ch = curl_init($url);
        $data =$json;
        $payload = $json;
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $result1    = json_decode($result);
        // print_r($result1);die;
        foreach($result1 as $res){
            if(isset($res->Response->FlightItinerary->Passenger)){
            $Passenger = $res->Response->FlightItinerary->Passenger;
            if(isset($Passenger)){
            foreach($Passenger as $Passengers){
                $fname = $Passengers->FirstName;
                $lname = $Passengers->LastName;
            }
            $pnr_no = $res->Response->PNR;
            $Origin = $res->Response->FlightItinerary->Origin;
            $Destination = $res->Response->FlightItinerary->Destination;
            $AirlineCode = $res->Response->FlightItinerary->AirlineCode; 
            $TraceId = $res->TraceId;
            $booking_id = $res->Response->BookingId;
            $ticket_date = 0;
            $amount = $res->Response->FlightItinerary->Fare->PublishedFare;
            
            $segmen = $res->Response->FlightItinerary->Segments;
            if(isset($segmen)){
                foreach($segmen as $segmens){
                    $DepTime = $segmens->Origin->DepTime;
                    $ArrTime = $segmens->Destination->ArrTime;
                        }
            }
            $data = array();
                    $data['name']= $fname;
        			$data['lname']= $lname;
        			$data['pnr_no']=$pnr_no;
                    $data['origin']= $Origin;
        			$data['destination']= $Destination;
                    $data['AirlineCode']= $AirlineCode;
                    $data['DepTime']= $DepTime;
                    $data['ArrTime']= $ArrTime;
        			$data['trace_id']=$TraceId;
        			$data['booking_id']=$booking_id;
        			$data['amount'] = $BaseFare + $Tax;
        			$data['tds']=$TdsOnPLB;
        			$data['gst']=$Tax;
        			$data['email']=$email;
        			$data['service_tex'] = $ServiceFee;
        			$data['ticket_date'] = $ticket_date;
        			$data['user_id'] = session()->get('user_id'); 
        			$data['payment_id'] = session()->get('paymentID');
        			$data['booking_status'] ='1';
        // 			print_r($data);die;
        			$contact_id = Flight_Model::create($data);
        			
        $data = ['pnr_no' =>"$pnr_no", 'booking_id'=>"$booking_id" ,'amount'=>"$PublishedFare" ,'ticket_date'=>"$ticket_date",'fname'=>"$fname",'lname'=>"$lname",'Origin'=>"$Origin",'Destination'=>"$Destination",'DepTime'=>"$DepTime", 'ArrTime'=>"$ArrTime" ];
            $user['to'] = $email;
        Mail::send('welcome',$data,function($messages) use ($user){
            
            $messages->to($user['to']);
            $messages->subject('flight Booking');   
        });	
        	    $user_id = session()->get('user_id');
        	    	
        // 	Mail Function 		 
        // 	$data = ['pnr_no' =>"$pnr_no", 'booking_id'=>"$booking_id" ,'amount'=>"$amount" ,'ticket_date'=>"$ticket_date",'Destination'=>"$Destination",'Origin'=>"$Origin",'DepTime'=>"$DepTime",'ArrTime'=>"$ArrTime",'fname'=>"$fname",'lname'=>"$lname"];
        //     $user['to'] = $email;
        // Mail::send('welcome',$data,function($messages) use ($user){
            
        //     $messages->to($user['to']);
        //     $messages->subject('flight Booking');   
        // });		
        			
            }
            }
        }
        // session()->forget('PaymentID');
         session()->forget('TraceId');
         session()->forget('ResultIndex');
         session()->forget('token_id');
         session()->forget('EndUserIp');
         session()->forget('BaseFare');
         session()->forget('Currency');
         session()->forget('Tax');
         session()->forget('YQTax');
         session()->forget('AdditionalTxnFeeOfrd');
         session()->forget('AdditionalTxnFeePub');
         session()->forget('OtherCharges');
         session()->forget('Discount');
         session()->forget('PublishedFare');
         session()->forget('TdsOnCommission');
         session()->forget('TdsOnPLB');
         session()->forget('TdsOnIncentive');
         session()->forget('ServiceFee');
         session()->forget('Destination_name');
         session()->forget('Destination_address');
         session()->forget('Source_address');
         session()->forget('Source_name');
          session()->forget('Duration');
          
        // print_r($result1);die;
        return 'done';
      return view('flight/booking-confirmation',compact('result1'));
            // }else{
            //     return redirect()->route('payment.cancel');
            // }
    
    // if($payment_type == 'wallet'){
        
    //             $paymentID = session()->get('paymentID');
                      
    //         $ResultIndex = session()->get('ResultIndex');
    //         // print_r($ResultIndex);die;
    //         $TraceId = session()->get('TraceId');
    //         $token_id = session()->get('token_id');
    //         $EndUserIp = session()->get('EndUserIp');
    //         $BaseFare = session()->get('BaseFare');
    //         $Currency = session()->get('Currency');
    //         $Tax = session()->get('Tax');
    //         $YQTax = session()->get('YQTax');
    //         $AdditionalTxnFeeOfrd = session()->get('AdditionalTxnFeeOfrd');
    //         $AdditionalTxnFeePub = session()->get('AdditionalTxnFeePub');
    //         $OtherCharges = session()->get('OtherCharges');
    //         $Discount = session()->get('Discount');
    //         $PublishedFare = session()->get('PublishedFare');
    //         $TdsOnCommission = session()->get('TdsOnCommission');
    //         $TdsOnPLB = session()->get('TdsOnPLB');
    //         $TdsOnIncentive = session()->get('TdsOnIncentive');
    //         $ServiceFee = session()->get('ServiceFee');
    //         $Destination_name = session()->get('Destination_name');
    //         $Destination_address = session()->get('Destination_address');
    //         $Source_name = session()->get('Source_name');
    //         $Source_address = session()->get('Source_address');
    //         $Duration = session()->get('Duration');
    //         // $dateofbirth = $request->dateofbirth;
            
    //         $fname = session()->get('fname');
    //         $lname = session()->get('lname');
    //         $email = session()->get('email');
    //         $mobile = session()->get('mobile');
    //         $payment = session()->get('payment');
            
            
    //         // $address = $request->address;
    //         // $city = $request->city;
    //         // $state = $request->state;
    //         // $country = $request->country;
    //         // $passport_no = $request->passport_no;
    //         // $passport_expiry = $request->passport_expiry;
    //     // FireQoute
    //     // FireQoute
    //     $endpoint1 = 'http://api.tektravels.com/BookingEngineService_Air/AirService.svc/rest/FareQuote/'; 
    //                     $json1='{
    //     "EndUserIp": "'.$EndUserIp.'",
    //     "TokenId": "'.$token_id.'",
    //     "TraceId": "'.$TraceId.'",
    //     "ResultIndex": "'.$ResultIndex.'",
    //     	}';
    //     // print_r($TraceId);die;
    //     $ch1 = curl_init($endpoint1);
    //     $data =$json1;
    //     curl_setopt($ch1, CURLOPT_POSTFIELDS, $data);
    //     curl_setopt($ch1, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    //     curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
    //     $result = curl_exec($ch1);
    //     $result1    = json_decode($result);
    //     // print_r($result1);die;
    //             // FareQuote	End	
                
    //             //Booking  
    //     $endpoint = 'http://api.tektravels.com/BookingEngineService_Air/AirService.svc/rest/Book/'; 
    //     $url = $endpoint;
    //                     $json='{
    //                     "ResultIndex": "'.$ResultIndex.'",
    //     	"Passengers": [{
    //     		"Title": "Mr",
    //     		"FirstName": "'.$fname.'",
    //     		"LastName": "'.$lname.'",
    //     		"PaxType": 1,
    //     		"DateOfBirth": "1987-12-06T00:00:00",
    //     		"Gender": 1,
    //     		"PassportNo": "KJHHJKHKJH",
    //     		"PassportExpiry": "2027-12-06T00:00:00",
    //     		"AddressLine1": "",
    //     		"AddressLine2": "",
    //     		"Fare": {
    //     			"Currency": "'.$Currency.'",
    //     			"BaseFare": "'.$BaseFare.'",
    //     			"Tax": "'.$Tax.'",
    //     			"YQTax": "'.$YQTax.'",
    //     			"AdditionalTxnFeePub": "'.$AdditionalTxnFeePub.'",
    //     			"AdditionalTxnFeeOfrd": "'.$AdditionalTxnFeeOfrd.'",
    //     			"OtherCharges": "'.$OtherCharges.'",
    //     			"Discount": "'.$Discount.'",
    //     			"PublishedFare": "'.$PublishedFare.'",
    //     			"OfferedFare": 0.0,
    //     			"TdsOnCommission": "'.$TdsOnCommission.'",
    //     			"TdsOnPLB": "'.$TdsOnPLB.'",
    //     			"TdsOnIncentive": '.$TdsOnIncentive.',
    //     			"ServiceFee": "'.$ServiceFee.'"
    //     		},
    //     		"City": "",
    //     		"CountryCode": "GB",
    //     		"CellCountryCode" : "+91",
    //             "ContactNo": "'.$mobile.'",
    //     		"Nationality": "",
    //             "Email": "'.$email.'",
    //     		"IsLeadPax": true,
    //     		"FFAirlineCode": null,
    //     		"FFNumber": "",
    //     		"GSTCompanyAddress": "",
    //     		"GSTCompanyContactNumber": "",
    //     		"GSTCompanyName": "",
    //     		"GSTNumber": "",
    //     		"GSTCompanyEmail": ""
    //     	}],
    //     	"EndUserIp": "'.$EndUserIp.'",
    //     	"TokenId": "'.$token_id.'",
    //     	"TraceId": "'.$TraceId.'"
    //     	';
    //     $ch = curl_init($url);
    //     $data =$json;
    //     $payload = $json;
    //     curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    //     curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     $result = curl_exec($ch);
    //     $result1    = json_decode($result);
    //     // print_r($result1);die;
    //     foreach($result1 as $res){
    //         if(isset($res->Response->FlightItinerary->Passenger)){
    //         $Passenger = $res->Response->FlightItinerary->Passenger;
    //         if(isset($Passenger)){
    //         foreach($Passenger as $Passengers){
    //             $fname = $Passengers->FirstName;
    //             $lname = $Passengers->LastName;
    //         }
    //         $pnr_no = $res->Response->PNR;
    //         $Origin = $res->Response->FlightItinerary->Origin;
    //         $Destination = $res->Response->FlightItinerary->Destination;
    //         $AirlineCode = $res->Response->FlightItinerary->AirlineCode; 
    //         $TraceId = $res->TraceId;
    //         $booking_id = $res->Response->BookingId;
    //         $ticket_date = 0;
    //         $amount = $res->Response->FlightItinerary->Fare->PublishedFare;
            
    //         $segmen = $res->Response->FlightItinerary->Segments;
    //         if(isset($segmen)){
    //             foreach($segmen as $segmens){
    //                 $DepTime = $segmens->Origin->DepTime;
    //                 $ArrTime = $segmens->Destination->ArrTime;
    //                     }
    //         }
    //         $data = array();
    //                 $data['name']= $fname;
    //     			$data['lname']= $lname;
    //     			$data['pnr_no']=$pnr_no;
    //                 $data['origin']= $Origin;
    //     			$data['destination']= $Destination;
    //                 $data['AirlineCode']= $AirlineCode;
    //                 $data['DepTime']= $DepTime;
    //                 $data['ArrTime']= $ArrTime;
    //     			$data['trace_id']=$TraceId;
    //     			$data['booking_id']=$booking_id;
    //     			$data['amount'] = $BaseFare + $Tax;
    //     			$data['ticket_date'] = $ticket_date;
    //     			$data['user_id'] = session()->get('user_id'); 
    //     				$data['payment_id'] = session()->get('PaymentID');
    //     // 			print_r($data);die;
    //     			$contact_id = Flight_Model::create($data);
        	
        	   	
    //     // 	Mail Function 		 
    //     // 	$data = ['pnr_no' =>"$pnr_no", 'booking_id'=>"$booking_id" ,'amount'=>"$amount" ,'ticket_date'=>"$ticket_date" ];
    //     //     $user['to'] = $email;
    //     // Mail::send('welcome',$data,function($messages) use ($user){
            
    //     //     $messages->to($user['to']);
    //     //     $messages->subject('flight Booking');   
    //     // });		
        			
    //         }
    //         }
    //     }
    //     // session()->forget('PaymentID');
    //      session()->forget('TraceId');
    //      session()->forget('ResultIndex');
    //      session()->forget('token_id');
    //      session()->forget('EndUserIp');
    //      session()->forget('BaseFare');
    //      session()->forget('Currency');
    //      session()->forget('Tax');
    //      session()->forget('YQTax');
    //      session()->forget('AdditionalTxnFeeOfrd');
    //      session()->forget('AdditionalTxnFeePub');
    //      session()->forget('OtherCharges');
    //      session()->forget('Discount');
    //      session()->forget('PublishedFare');
    //      session()->forget('TdsOnCommission');
    //      session()->forget('TdsOnPLB');
    //      session()->forget('TdsOnIncentive');
    //      session()->forget('ServiceFee');
    //      session()->forget('Destination_name');
    //      session()->forget('Destination_address');
    //      session()->forget('Source_address');
    //      session()->forget('Source_name');
    //       session()->forget('Duration');
          
    //     // print_r($result1);die;
    //      return view('flight/booking-confirmation',compact('result1'));
    // }
    // if($payment_type == 'easybuzz'){
        
    //             $paymentID = session()->get('paymentID');
                      
    //         $ResultIndex = session()->get('ResultIndex');
    //         // print_r($ResultIndex);die;
    //         $TraceId = session()->get('TraceId');
    //         $token_id = session()->get('token_id');
    //         $EndUserIp = session()->get('EndUserIp');
    //         $BaseFare = session()->get('BaseFare');
    //         $Currency = session()->get('Currency');
    //         $Tax = session()->get('Tax');
    //         $YQTax = session()->get('YQTax');
    //         $AdditionalTxnFeeOfrd = session()->get('AdditionalTxnFeeOfrd');
    //         $AdditionalTxnFeePub = session()->get('AdditionalTxnFeePub');
    //         $OtherCharges = session()->get('OtherCharges');
    //         $Discount = session()->get('Discount');
    //         $PublishedFare = session()->get('PublishedFare');
    //         $TdsOnCommission = session()->get('TdsOnCommission');
    //         $TdsOnPLB = session()->get('TdsOnPLB');
    //         $TdsOnIncentive = session()->get('TdsOnIncentive');
    //         $ServiceFee = session()->get('ServiceFee');
    //         $Destination_name = session()->get('Destination_name');
    //         $Destination_address = session()->get('Destination_address');
    //         $Source_name = session()->get('Source_name');
    //         $Source_address = session()->get('Source_address');
    //         $Duration = session()->get('Duration');
    //         // $dateofbirth = $request->dateofbirth;
            
    //         $fname = session()->get('fname');
    //         $lname = session()->get('lname');
    //         $email = session()->get('email');
    //         $mobile = session()->get('mobile');
    //         $payment = session()->get('payment');
            
            
    //         // $address = $request->address;
    //         // $city = $request->city;
    //         // $state = $request->state;
    //         // $country = $request->country;
    //         // $passport_no = $request->passport_no;
    //         // $passport_expiry = $request->passport_expiry;
    //     // FireQoute
    //     // FireQoute
    //     $endpoint1 = 'http://api.tektravels.com/BookingEngineService_Air/AirService.svc/rest/FareQuote/'; 
    //                     $json1='{
    //     "EndUserIp": "'.$EndUserIp.'",
    //     "TokenId": "'.$token_id.'",
    //     "TraceId": "'.$TraceId.'",
    //     "ResultIndex": "'.$ResultIndex.'",
    //     	}';
    //     // print_r($TraceId);die;
    //     $ch1 = curl_init($endpoint1);
    //     $data =$json1;
    //     curl_setopt($ch1, CURLOPT_POSTFIELDS, $data);
    //     curl_setopt($ch1, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    //     curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
    //     $result = curl_exec($ch1);
    //     $result1    = json_decode($result);
    //     // print_r($result1);die;
    //             // FareQuote	End	
                
    //             //Booking  
    //     $endpoint = 'http://api.tektravels.com/BookingEngineService_Air/AirService.svc/rest/Book/'; 
    //     $url = $endpoint;
    //                     $json='{
    //                     "ResultIndex": "'.$ResultIndex.'",
    //     	"Passengers": [{
    //     		"Title": "Mr",
    //     		"FirstName": "'.$fname.'",
    //     		"LastName": "'.$lname.'",
    //     		"PaxType": 1,
    //     		"DateOfBirth": "1987-12-06T00:00:00",
    //     		"Gender": 1,
    //     		"PassportNo": "KJHHJKHKJH",
    //     		"PassportExpiry": "2027-12-06T00:00:00",
    //     		"AddressLine1": "",
    //     		"AddressLine2": "",
    //     		"Fare": {
    //     			"Currency": "'.$Currency.'",
    //     			"BaseFare": "'.$BaseFare.'",
    //     			"Tax": "'.$Tax.'",
    //     			"YQTax": "'.$YQTax.'",
    //     			"AdditionalTxnFeePub": "'.$AdditionalTxnFeePub.'",
    //     			"AdditionalTxnFeeOfrd": "'.$AdditionalTxnFeeOfrd.'",
    //     			"OtherCharges": "'.$OtherCharges.'",
    //     			"Discount": "'.$Discount.'",
    //     			"PublishedFare": "'.$PublishedFare.'",
    //     			"OfferedFare": 0.0,
    //     			"TdsOnCommission": "'.$TdsOnCommission.'",
    //     			"TdsOnPLB": "'.$TdsOnPLB.'",
    //     			"TdsOnIncentive": '.$TdsOnIncentive.',
    //     			"ServiceFee": "'.$ServiceFee.'"
    //     		},
    //     		"City": "",
    //     		"CountryCode": "GB",
    //     		"CellCountryCode" : "+91",
    //             "ContactNo": "'.$mobile.'",
    //     		"Nationality": "",
    //             "Email": "'.$email.'",
    //     		"IsLeadPax": true,
    //     		"FFAirlineCode": null,
    //     		"FFNumber": "",
    //     		"GSTCompanyAddress": "",
    //     		"GSTCompanyContactNumber": "",
    //     		"GSTCompanyName": "",
    //     		"GSTNumber": "",
    //     		"GSTCompanyEmail": ""
    //     	}],
    //     	"EndUserIp": "'.$EndUserIp.'",
    //     	"TokenId": "'.$token_id.'",
    //     	"TraceId": "'.$TraceId.'"
    //     	';
    //     $ch = curl_init($url);
    //     $data =$json;
    //     $payload = $json;
    //     curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    //     curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     $result = curl_exec($ch);
    //     $result1    = json_decode($result);
    //     // print_r($result1);die;
    //     foreach($result1 as $res){
    //         if(isset($res->Response->FlightItinerary->Passenger)){
    //         $Passenger = $res->Response->FlightItinerary->Passenger;
    //         if(isset($Passenger)){
    //         foreach($Passenger as $Passengers){
    //             $fname = $Passengers->FirstName;
    //             $lname = $Passengers->LastName;
    //         }
    //         $pnr_no = $res->Response->PNR;
    //         $Origin = $res->Response->FlightItinerary->Origin;
    //         $Destination = $res->Response->FlightItinerary->Destination;
    //         $AirlineCode = $res->Response->FlightItinerary->AirlineCode; 
    //         $TraceId = $res->TraceId;
    //         $booking_id = $res->Response->BookingId;
    //         $ticket_date = 0;
    //         $amount = $res->Response->FlightItinerary->Fare->PublishedFare;
            
    //         $segmen = $res->Response->FlightItinerary->Segments;
    //         if(isset($segmen)){
    //             foreach($segmen as $segmens){
    //                 $DepTime = $segmens->Origin->DepTime;
    //                 $ArrTime = $segmens->Destination->ArrTime;
    //                     }
    //         }
    //         $data = array();
    //                 $data['name']= $fname;
    //     			$data['lname']= $lname;
    //     			$data['pnr_no']=$pnr_no;
    //                 $data['origin']= $Origin;
    //     			$data['destination']= $Destination;
    //                 $data['AirlineCode']= $AirlineCode;
    //                 $data['DepTime']= $DepTime;
    //                 $data['ArrTime']= $ArrTime;
    //     			$data['trace_id']=$TraceId;
    //     			$data['booking_id']=$booking_id;
    //     			$data['amount'] = $BaseFare + $Tax;
    //     			$data['ticket_date'] = $ticket_date;
    //     			$data['user_id'] = session()->get('user_id'); 
    //     				$data['payment_id'] = session()->get('PaymentID');
    //     // 			print_r($data);die;
    //     			$contact_id = Flight_Model::create($data);
        	
        	   	
    //     // 	Mail Function 		 
    //     // 	$data = ['pnr_no' =>"$pnr_no", 'booking_id'=>"$booking_id" ,'amount'=>"$amount" ,'ticket_date'=>"$ticket_date" ];
    //     //     $user['to'] = $email;
    //     // Mail::send('welcome',$data,function($messages) use ($user){
            
    //     //     $messages->to($user['to']);
    //     //     $messages->subject('flight Booking');   
    //     // });		
        			
    //         }
    //         }
    //     }
    //     // session()->forget('PaymentID');
    //      session()->forget('TraceId');
    //      session()->forget('ResultIndex');
    //      session()->forget('token_id');
    //      session()->forget('EndUserIp');
    //      session()->forget('BaseFare');
    //      session()->forget('Currency');
    //      session()->forget('Tax');
    //      session()->forget('YQTax');
    //      session()->forget('AdditionalTxnFeeOfrd');
    //      session()->forget('AdditionalTxnFeePub');
    //      session()->forget('OtherCharges');
    //      session()->forget('Discount');
    //      session()->forget('PublishedFare');
    //      session()->forget('TdsOnCommission');
    //      session()->forget('TdsOnPLB');
    //      session()->forget('TdsOnIncentive');
    //      session()->forget('ServiceFee');
    //      session()->forget('Destination_name');
    //      session()->forget('Destination_address');
    //      session()->forget('Source_address');
    //      session()->forget('Source_name');
    //       session()->forget('Duration');
          
    //     // print_r($result1);die;
    //      return view('flight/booking-confirmation',compact('result1'));
    // }
}
 public function paymentCancel() {
    
        $ResultIndex = session()->get('ResultIndex');
    // print_r($ResultIndex);die;
    $TraceId = session()->get('TraceId');
    $token_id = session()->get('token_id');
    $EndUserIp = session()->get('EndUserIp');
    $BaseFare = session()->get('BaseFare');
    $Currency = session()->get('Currency');
    $Tax = session()->get('Tax');
    $YQTax = session()->get('YQTax');
    $AdditionalTxnFeeOfrd = session()->get('AdditionalTxnFeeOfrd');
    $AdditionalTxnFeePub = session()->get('AdditionalTxnFeePub');
    $OtherCharges = session()->get('OtherCharges');
    $Discount = session()->get('Discount');
    $PublishedFare = session()->get('PublishedFare');
    $TdsOnCommission = session()->get('TdsOnCommission');
    $TdsOnPLB = session()->get('TdsOnPLB');
    $TdsOnIncentive = session()->get('TdsOnIncentive');
    $ServiceFee = session()->get('ServiceFee');
    $Destination_name = session()->get('Destination_name');
    $Destination_address = session()->get('Destination_address');
    $Source_name = session()->get('Source_name');
    $Source_address = session()->get('Source_address');
    $Duration = session()->get('Duration');
    
    $curre12 = $BaseFare + $Tax;
        $fromCurrency = "INR";
        $toCurrency = "GBP";

        // Make API request to get the latest exchange rates
        $exchangeRates = $this->getExchangeRates();

        // Calculate the converted amount
        $convertedAmount =  $curre12 * ($exchangeRates[$toCurrency] / $exchangeRates[$fromCurrency]);
           $convertedAmount = round($convertedAmount, 0);
    // print_r($curre12);print_r($convertedAmount);die;
    $all_city = City_Model::get();
    $all_state = State_Model::get();
    $all_countries = Countries_Model::get(); 
    $AirlineName = session()->get('AirlineName');
    $ArrTime = session()->get('ArrTime');
    $DepTime = session()->get('DepTime');
    $adult = session()->get('adult');
    $count = session()->get('count');
    $success = '';
    return view('flight/flight_booking_submission',compact('convertedAmount','success','Duration','count','adult','ArrTime','DepTime','AirlineName','all_state','all_countries','all_city','token_id','Duration','Source_address','Source_name','Destination_address','Destination_name','ServiceFee','TdsOnIncentive','TdsOnPLB','TdsOnCommission','PublishedFare','ResultIndex','TraceId','EndUserIp','BaseFare','Currency','Tax','YQTax','AdditionalTxnFeeOfrd','AdditionalTxnFeePub','OtherCharges','Discount'));
    
 }
  private function getExchangeRates()
    {
        $client = new Client();
        $response = $client->get($this->apiUrl);
        $data = json_decode($response->getBody(), true);

        return $data['rates'];
    }
    
}