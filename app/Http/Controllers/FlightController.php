<?php

namespace App\Http\Controllers;
use Mail; 
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
use GuzzleHttp\Client;
class FlightController extends Controller
{
     private $apiUrl = 'https://open.er-api.com/v6/latest';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function flight_search_result()
    {
        $filterResult = Airport_Model::get();
        return view('flight/flight_search_result',compact('filterResult'));
    }
    public function flight_booking()
    {
        
        return view('flight/flight_booking_submission');
    }
    public function privacy_policy()
    {
        
        return view('flight/privacy_policy');
    }
    public function term_conditions()
    {
        
        return view('flight/term_condition');
    }
    public function refund_policy()
    {
        
        return view('flight/refund_policy');
    }
     public function contact_us()
    {
        
        return view('flight/contact_us');
    }
 public function flight(Request $request)
    {
    //   print_r($request->from);die;
    $form_status = $request->form_status;    

$from = $request->from;
$to = $request->to;
$journey_date = $request->journey_date;
$adult = $request->adult;
$children = $request->children;
$infant = $request->infant;
$cabin_class = $request->cabin_class;
$from1 = "";
 $to1 = "";
 $journey_date1 = "";
 
// Endpoint you want to access
$endpoint = 'http://api.tektravels.com/SharedServices/SharedData.svc/rest/Authenticate'; // Replace with the actual flight search endpoint

// Define your search parameters as an array

$url = $endpoint;
                $json='{
"ClientId": "ApiIntegrationNew",
"UserName": "Flightpath",
"Password": "Flight@1234", 
"EndUserIp": "192.168.11.120"
}';
// $url = 'https://www.example.com/api';

// Create a new cURL resource
$ch = curl_init($url);

// Setup request to send json via POST
$data =$json;
$payload = $json;

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$result1 = curl_exec($ch);
$result = json_decode($result1);
// print_r($result->TokenId);die;
// Search 
$search = 'http://api.tektravels.com/BookingEngineService_Air/AirService.svc/rest/Search/'; // Replace with the actual flight search endpoint

// Define your search parameters as an array
$json1='{
"EndUserIp": "192.168.11.120",
"TokenId": "'.$result->TokenId.'",
"AdultCount": "'.$adult.'",
"ChildCount": "0",
"InfantCount": "0",
"DirectFlight": "false",
"OneStopFlight": "false",
"JourneyType": "1",
"FlightCabinClass":"'.$cabin_class.'",
"PreferredAirlines": null,
"Segments": [
{
"Origin": "'.$request->from.'",
"Destination": "'.$request->to.'",
"FlightCabinClass": "1",
"PreferredDepartureTime": "'.$request->journey_date.'T00: 00: 00",
"PreferredArrivalTime": "'.$request->journey_date.'T00: 00: 00"
}
        ],
"Sources": null
}';
// $url = 'https://www.example.com/api';

// Create a new cURL resource
$ch = curl_init($search);

// Setup request to send json via POST
// $data =$json1;
// print_r($json1);die;
$payload1 = $json1;

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload1);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// print_r("ddw");die; 
// Execute the POST request
$ss = curl_exec($ch);
$ress = json_decode($ss);
// foreach($ress as $res){
//     $dat = $res->Results;
//     foreach($dat as $dat1){
//         foreach($dat1 as $dat2){
//          $Segments = $dat2->Segments;
//         //  print_r($Segments->Baggage);
//          foreach( $Segments as $Segment){
//             foreach( $Segment as $Segm){
//           $Origin = $Segm->Origin;
//           $Destination = $Segm->Destination;
//           $Airportcode[] = $Origin->Airport->AirportCode;
//           $AirportName[] = $Origin->Airport->AirportName;
//           $DepTime[] = $Origin->DepTime;
          
//           $DestinationDepTime = $Destination->ArrTime;
//           $DestinationAirportcode[] = $Destination->Airport->AirportCode;
//           $DestinationAirportName[] = $Destination->Airport->AirportName;
        //   foreach($Airport as $Origin1){
        //   print_r( $Airport);
        // } 
    //     }
        
    //     }

    //     }
    // }
// }
// foreach($daa as $dat2){
//          $Segments = $dat2->Segments;
//         //  print_r($Segments->Baggage);
//          foreach( $Segments as $Segment){
//             foreach( $Segment as $Segm){
//           $Origin = $Segm->Origin;
//           $Destination = $Segm->Destination;
//           $Airportcode[] = $Origin->Airport->AirportCode;
//           $AirportName[] = $Origin->Airport->AirportName;
//           $DepTime[] = $Origin->DepTime;
          
//           $DestinationDepTime[] = $Destination->ArrTime;
//           $DestinationAirportcode[] = $Destination->Airport->AirportCode;
//           $DestinationAirportName[] = $Destination->Airport->AirportName;
//         //   foreach($Airport as $Origin1){
//         //   print_r( $Airport);
//         // } 
//         }
//         }
//         } 
        // print_r($DestinationDepTime);
//  die;
//  print_r($ress);die;
if(isset($ress)){
foreach($ress as $res){
    $TraceId = $res->TraceId;
}    
            $user = new Flight_Log_Model;
			 $user->f_from = $request->from;
               $user->f_to = $to;
               $user->trace_id = $TraceId;
               $user->date_time = date('Y-m-d H:i:s');
               $user->save();
}
$user = new Flight_Log_Model;
			 $user->f_from = $request->from;
               $user->f_to = $to;
               $user->trace_id = "sd";
               $user->date_time = date('Y-m-d H:i:s');
               $user->save();
$daa; 
$fli_data = "dd";
$token_id = $result->TokenId;
// Close cURL resource 
//  print_r($ress);die;
curl_close($ch); 
$filterResult = Airport_Model::get(); 
        return view('flight/flight_search_result',compact('form_status','fli_data','ress','token_id','filterResult','journey_date','from','to','journey_date1','from1','to1','adult','children','infant','cabin_class')); 
    } 
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Endpoint you want to access
$endpoint = 'http://api.tektravels.com/BookingEngineService_Air/AirService.svc/rest/Search'; // Replace with the actual flight search endpoint

// Define your search parameters as an array

$url = $endpoint;
                $json='{
"EndUserIp": "192.168.10.10",
"TokenId": "ac2751e9-4cc3-406f-b678-c947e4f57a00",
"AdultCount": "1",
"ChildCount": "0",
"InfantCount": "0", 
"DirectFlight": "false",
"OneStopFlight": "false",
"JourneyType": "1",
"PreferredAirlines": null,
"Segments": [
{
"Origin": "DEL",
"Destination": "BOM",
        "FlightCabinClass": "1",
"PreferredDepartureTime": "2015-11-06T00: 00: 00",
"PreferredArrivalTime": "2015-11-06T00: 00: 00"
}
        ],
"Sources": null
}';

                $json=(str_replace(" ", "", $json));
                $json=(str_replace("\n", "", $json));
                $json=(str_replace("    ", "", $json));
                //exit();
                $length=strlen($json);
                // echo $length;
                $options = array(
                    'http' => array(
                        'method'  => 'POST',
                      )
                );
                // var_dump($options);
                $context     = stream_context_create($options);
                // echo var_dump($context);
                
                $result      = file_get_contents($url, false, $context);
                $response    = json_decode($result);
                return $response;
        $filterResult = Airport_Model::get();        
                // $data=(json_decode($result,true));
        return view('flight/flight_search_result',compact('filterResult')); 

    }

 public function flight_booking_details(Request $request)
    {
     session()->put('ResultIndex',$request->ResultIndex);
     session()->put('TraceId',$request->TraceId);
     session()->put('token_id',$request->token_id);
     session()->put('EndUserIp',$request->EndUserIp);
     session()->put('BaseFare',$request->BaseFare);
     session()->put('Currency',$request->Currency);
     session()->put('Tax',$request->Tax);
     session()->put('YQTax',$request->YQTax);
     session()->put('AdditionalTxnFeeOfrd',$request->AdditionalTxnFeeOfrd);
     session()->put('AdditionalTxnFeePub',$request->AdditionalTxnFeePub);
     session()->put('OtherCharges',$request->OtherCharges);
     session()->put('Discount',$request->Discount);
     session()->put('PublishedFare',$request->PublishedFare);
     session()->put('TdsOnCommission',$request->TdsOnCommission);
     session()->put('TdsOnPLB',$request->TdsOnPLB);
     session()->put('TdsOnIncentive',$request->TdsOnIncentive);
     session()->put('ServiceFee',$request->ServiceFee);
     session()->put('Destination_name',$request->Destination_name);
     session()->put('Destination_address',$request->Destination_address);
     session()->put('Source_name',$request->Source_name);
     session()->put('Source_address',$request->Source_address);
     session()->put('Duration',$request->Duration);
    
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
    $AirlineName = session()->put('AirlineName',$request->AirlineName);
    $ArrTime = session()->put('ArrTime',$request->ArrTime);
    $DepTime = session()->put('DepTime',$request->DepTime);
    $adult = session()->put('adult',$request->adult);
    $count = session()->put('count',$request->count);
    
    $AirlineName = session()->get('AirlineName');
    $ArrTime = session()->get('ArrTime');
    $DepTime = session()->get('DepTime');
    $adult = session()->get('adult');
    $count = session()->get('count');
    $success = '';
    return view('flight/flight_booking_submission',compact('convertedAmount','success','Duration','count','adult','ArrTime','DepTime','AirlineName','all_state','all_countries','all_city','token_id','Duration','Source_address','Source_name','Destination_address','Destination_name','ServiceFee','TdsOnIncentive','TdsOnPLB','TdsOnCommission','PublishedFare','ResultIndex','TraceId','EndUserIp','BaseFare','Currency','Tax','YQTax','AdditionalTxnFeeOfrd','AdditionalTxnFeePub','OtherCharges','Discount'));
    }	
	
 public function flight_booking_det(Request $request)
    {
        
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
    $dateofbirth = $request->dateofbirth;
    
    $fname = session()->put('fname',$request->fname);
    $lname = session()->put('lname',$request->lname);
    $email = session()->put('email',$request->email);
    $mobile = session()->put('mobile',$request->mobile);
    $payment = session()->put('payment',$request->payment);
    
    echo $fname = $request->fname;
    echo $lname = $request->lname;
    echo $email = $request->email;
    echo $mobile = $request->mobile;
    echo $payment = $request->payment; die;
    
    $address = $request->address;
    $city = $request->city;
    $state = $request->state;
    $country = $request->country;
    $passport_no = $request->passport_no;
    $passport_expiry = $request->passport_expiry;
// FireQoute
// FireQoute
$endpoint1 = 'http://api.tektravels.com/BookingEngineService_Air/AirService.svc/rest/FareQuote/'; 
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
$endpoint = 'http://api.tektravels.com/BookingEngineService_Air/AirService.svc/rest/Book/'; 
$url = $endpoint;
                $json='{
                "ResultIndex": "'.$ResultIndex.'",
	"Passengers": [{
		"Title": "Mr",
		"FirstName": "'.$fname.'",
		"LastName": "'.$lname.'",
		"PaxType": 1,
		"DateOfBirth": "",
		"Gender": 1,
		"PassportNo": "",
		"PassportExpiry": "",
		"AddressLine1": "'.$street_address.'",
		"AddressLine2": "",
		"Fare": {
			"Currency": "'.$Currency.'",
			"BaseFare": "'.$BaseFare.'",
			"Tax": "'.$Tax.'",
			"YQTax": "'.$YQTax.'",
			"AdditionalTxnFeePub": "'.$AdditionalTxnFeePub.'",
			"AdditionalTxnFeeOfrd": "'.$AdditionalTxnFeeOfrd.'",
			"OtherCharges": "'.$OtherCharges.'",
			"Discount": "'.$Discount.'",
			"PublishedFare": "'.$PublishedFare.'",
			"OfferedFare": 0.0,
			"TdsOnCommission": "'.$TdsOnCommission.'",
			"TdsOnPLB": "'.$TdsOnPLB.'",
			"TdsOnIncentive": '.$TdsOnIncentive.',
			"ServiceFee": "'.$ServiceFee.'"
		},
		"City": "Gurgaon",
		"CountryCode": "IN",
		"CellCountryCode" : "+91",
        "ContactNo": "'.$mobile.'",
		"Nationality": "IN",
        "Email": "'.$email.'",
		"IsLeadPax": true,
		"FFAirlineCode": null,
		"FFNumber": "",
		"GSTCompanyAddress": "",
		"GSTCompanyContactNumber": "",
		"GSTCompanyName": "",
		"GSTNumber": "",
		"GSTCompanyEmail": ""
	}],
	"EndUserIp": "'.$EndUserIp.'",
	"TokenId": "'.$token_id.'",
	"TraceId": "'.$TraceId.'"
	';
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
			$data['amount'] = $amount;
			$data['ticket_date'] = $ticket_date;
			$data['user_id'] = session()->get('user_id');
// 			print_r($data);die;
			$contact_id = Flight_Model::create($data);
	
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
        
        $user_count = 0;
	    }	
// 	Mail Function 		 
// 	$data = ['pnr_no' =>"$pnr_no", 'booking_id'=>"$booking_id" ,'amount'=>"$amount" ,'ticket_date'=>"$ticket_date" ];
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
 return view('flight/booking-confirmation',compact('result1'));
   
    }
    
    // Admin 
     public function get_flight_details()
    {
        $flight = Flight_Model::get();
        return view('flight/admin/db-vendor-hotels',compact('flight'));
    }
    
     public function get_flight_log_details()
    {
        $flight = Flight_Log_Model::get();
        return view('flight/admin/flight_log',compact('flight'));
    }
    public function autocompleteSearch(Request $request)
    {
          $query = $request->get('query');
          $filterResult = Airport_Model::where('name', 'LIKE', '%'. $query. '%')->get();
        //   print_r($filterResult);die;
          return response()->json($filterResult);
          
    } 
    
    // Ticket Choose 
     public function select_seat(Request $request)
    {
    $ResultIndex = $request->ResultIndex;
    $TraceId = $request->TraceId;
    $token_id = $request->token_id;
    $EndUserIp = $request->EndUserIp;
    $BaseFare = $request->BaseFare;
    $Currency = $request->Currency;
    $Tax = $request->Tax;
    $YQTax = $request->YQTax;
    $AdditionalTxnFeeOfrd = $request->AdditionalTxnFeeOfrd;
    $AdditionalTxnFeePub = $request->AdditionalTxnFeePub;
    $OtherCharges = $request->OtherCharges;
    $Discount = $request->Discount;
    $PublishedFare = $request->PublishedFare;
    $TdsOnCommission = $request->TdsOnCommission;
    $TdsOnPLB = $request->TdsOnPLB;
    $TdsOnIncentive = $request->TdsOnIncentive;
    $ServiceFee = $request->ServiceFee;
    $Destination_name = $request->Destination_name;
    $Destination_address = $request->Destination_address;
    $Source_name = $request->Source_name;
    $Source_address = $request->Source_address;
    $Duration = $request->Duration; 
    $AirlineName = $request->AirlineName; 
// FireRule
$endpoint11 = 'http://api.tektravels.com/BookingEngineService_Air/AirService.svc/rest/FareRule/'; 
$json11='{
"EndUserIp": "'.$EndUserIp.'",
"TokenId": "'.$token_id.'",
"TraceId": "'.$TraceId.'",
"ResultIndex": "'.$ResultIndex.'",
	}';
// print_r($TraceId);die;
$ch11 = curl_init($endpoint11);
$data1 =$json11;
curl_setopt($ch11, CURLOPT_POSTFIELDS, $data1);
curl_setopt($ch11, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch11, CURLOPT_RETURNTRANSFER, true);
$result11 = curl_exec($ch11);
$result111    = json_decode($result11); 

//     
    
    // FireQoute
$endpoint1 = 'http://api.tektravels.com/BookingEngineService_Air/AirService.svc/rest/FareQuote/'; 
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

 // SSR API
$endpoint2 = 'http://api.tektravels.com/BookingEngineService_Air/AirService.svc/rest/SSR/'; 
                $json2='{
"EndUserIp": "'.$EndUserIp.'",
"TokenId": "'.$token_id.'",
"TraceId": "'.$TraceId.'",
"ResultIndex": "'.$ResultIndex.'",
	}';
// print_r($TraceId);die;
$ch2 = curl_init($endpoint2);
$data2 =$json2;
curl_setopt($ch2, CURLOPT_POSTFIELDS, $data2);
curl_setopt($ch2, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
$result2 = curl_exec($ch2);
$result23    = json_decode($result2); 

// foreach($result23 as $resu)
// {
// $Baggages = $resu->Baggage;
// $MealDynamic = $resu->MealDynamic;
// $SeatDynamic = $resu->SeatDynamic;
// foreach($Baggages as $Baggage){
//   foreach($Baggage as $Baggage1){
//     $AirlineCode = $Baggage1->AirlineCode;

// }
// }
// foreach($MealDynamic as $MealDynamics){
//   foreach($MealDynamics as $MealDynamic1){
//     $FlightNumber = $MealDynamic1->FlightNumber;

// }
// }
// foreach($SeatDynamic as $SeatDynamics){
//     $SegmentSeat = $SeatDynamics->SegmentSeat;
//     foreach($SegmentSeat as $SegmentSeat1){
//         $RowSeats = $SegmentSeat1->RowSeats;
//     }
//     foreach($RowSeats as $kry=>$RowSeats1){
//         $Seats = $RowSeats1->Seats;
//     foreach($Seats as $Seats1){
//         $RowNo = $Seats1->Code;
        
//         // print_r($RowNo);
//     }    
      
//     }

// }
    




// }

// print_r($result23);
// die;
// 
    
    return view('flight/flight-booking',compact('AirlineName','result23','token_id','Duration','Source_address','Source_name','Destination_address','Destination_name','ServiceFee','TdsOnIncentive','TdsOnPLB','TdsOnCommission','PublishedFare','ResultIndex','TraceId','EndUserIp','BaseFare','Currency','Tax','YQTax','AdditionalTxnFeeOfrd','AdditionalTxnFeePub','OtherCharges','Discount'));
    }
    
    // LCC Flight Booking
    public function lcc_flight_booking(Request $request)
    {
    $ResultIndex = $request->ResultIndex;
    $TraceId = $request->TraceId;
    $token_id = $request->token_id;
    $EndUserIp = $request->EndUserIp;
    $BaseFare = $request->BaseFare;
    $Currency = $request->Currency;
    $Tax = $request->Tax;
    $YQTax = $request->YQTax;
    $AdditionalTxnFeeOfrd = $request->AdditionalTxnFeeOfrd;
    $AdditionalTxnFeePub = $request->AdditionalTxnFeePub;
    $OtherCharges = $request->OtherCharges;
    $Discount = $request->Discount;
    $PublishedFare = $request->PublishedFare;
    $TdsOnCommission = $request->TdsOnCommission;
    $TdsOnPLB = $request->TdsOnPLB;
    $TdsOnIncentive = $request->TdsOnIncentive;
    $ServiceFee = $request->ServiceFee;
    $Destination_name = $request->Destination_name;
    $Destination_address = $request->Destination_address;
    $Source_name = $request->Source_name;
    $Source_address = $request->Source_address;
    $Duration = $request->Duration;
    
    $BaggageAirlineCode = $request->BaggageAirlineCode;
    $BaggageFlightNumber = $request->BaggageFlightNumber;
    $BaggageWayType = $request->BaggageWayType;
    $BaggageCode = $request->BaggageCode;
    $BaggageDescription = $request->BaggageDescription;
    $BaggageWeight = $request->BaggageWeight;
    $BaggageCurrency = $request->BaggageCurrency;
    $BaggagePrice = $request->BaggagePrice;
    $BaggageOrigin = $request->BaggageOrigin;
    $BaggageDestination = $request->BaggageDestination;
    
    $MealDynamicAirlineCode = $request->MealDynamicAirlineCode;
    $MealDynamicFlightNumber = $request->MealDynamicFlightNumber;
    $MealDynamicWayType = $request->MealDynamicWayType;
    $MealDynamicCode = $request->MealDynamicCode;
    $MealDynamicDescription = $request->MealDynamicDescription;
    $MealDynamicAirlineDescription = $request->MealDynamicAirlineDescription;
    $MealDynamicQuantity = $request->MealDynamicQuantity;
    $MealDynamicCurrency = $request->MealDynamicCurrency;
    $MealDynamicPrice = $request->MealDynamicPrice;
    $MealDynamicOrigin = $request->MealDynamicOrigin;
    $MealDynamicDestination = $request->MealDynamicDestination;
    
    $SeatsAirlineCode = $request->SeatsAirlineCode;
    $SeatsFlightNumber = $request->SeatsFlightNumber;
    $SeatsCraftType = $request->SeatsCraftType;
    $SeatsOrigin = $request->SeatsOrigin;
    $SeatsDestination = $request->SeatsDestination;
    $SeatsAvailablityType = $request->SeatsAvailablityType;
    $SeatsDescription = $request->SeatsDescription;
    $SeatsCode = $request->SeatsCode;
    $SeatsRowNo = $request->SeatsRowNo;
    $SeatsSeatNo = $request->SeatsSeatNo;
    $SeatsSeatType = $request->SeatsSeatType;
    $SeatsSeatWayType = $request->SeatsSeatWayType;
    $SeatsCompartment = $request->SeatsCompartment;
    $SeatsDeck = $request->SeatsDeck;
    $SeatsCurrency = $request->SeatsCurrency;
    $SeatsPrice = $request->SeatsPrice;
    $all_city = City_Model::get();
    $all_state = State_Model::get();
    $all_countries = Countries_Model::get();
    
    return view('flight/lcc_flight_booking_submission',compact('all_city','all_state','all_countries','MealDynamicAirlineDescription','token_id','Duration','Source_address','Source_name','Destination_address','Destination_name','ServiceFee','TdsOnIncentive','TdsOnPLB','TdsOnCommission','PublishedFare','ResultIndex','TraceId','EndUserIp','BaseFare','Currency','Tax','YQTax','AdditionalTxnFeeOfrd','AdditionalTxnFeePub','OtherCharges','Discount','BaggageAirlineCode','BaggageFlightNumber','BaggageWayType','BaggageCode','BaggageDescription','BaggageWeight','BaggageCurrency',
    'BaggagePrice','BaggageOrigin','BaggageDestination','MealDynamicAirlineCode','MealDynamicFlightNumber','MealDynamicWayType','MealDynamicCode',
    'MealDynamicDescription','MealDynamicQuantity','MealDynamicCurrency','MealDynamicPrice','MealDynamicOrigin','MealDynamicDestination','SeatsAirlineCode','SeatsFlightNumber','SeatsCraftType','SeatsOrigin','SeatsDestination','SeatsAvailablityType','SeatsDescription','SeatsCode','SeatsRowNo','SeatsSeatNo','SeatsSeatType','SeatsSeatWayType','SeatsCompartment','SeatsDeck','SeatsPrice','SeatsCurrency'
  ));
    }
    public function lcc_ticket_booking(Request $request)
    {

    $ResultIndex = $request->ResultIndex;
    $TraceId = $request->TraceId;
    $token_id = $request->token_id;
    $EndUserIp = $request->EndUserIp;
    $BaseFare = $request->BaseFare;
    $Currency = $request->Currency;
    $Tax = $request->Tax;
    $YQTax = $request->YQTax;
    $AdditionalTxnFeeOfrd = $request->AdditionalTxnFeeOfrd;
    $AdditionalTxnFeePub = $request->AdditionalTxnFeePub;
    
    // print_r($ResultIndex);echo"<br>";
    // print_r($TraceId);echo"<br>";
    // print_r($token_id);echo"<br>";
    // print_r($EndUserIp);echo"<br>";
    // print_r($BaseFare);echo"<br>";
    // print_r($Currency);echo"<br>";
    // print_r($Tax);echo"<br>";
    // print_r($YQTax);echo"<br>";
    // print_r($AdditionalTxnFeeOfrd);echo"<br>";
    // print_r($AdditionalTxnFeePub);echo"<br>";
   
    // die;
    $OtherCharges = $request->OtherCharges;
    $Discount = $request->Discount;
    $PublishedFare = $request->PublishedFare;
    $TdsOnCommission = $request->TdsOnCommission;
    $TdsOnPLB = $request->TdsOnPLB;
    $TdsOnIncentive = $request->TdsOnIncentive;
    $ServiceFee = $request->ServiceFee;
    $Destination_name = $request->Destination_name;
    $Destination_address = $request->Destination_address;
    $Source_name = $request->Source_name;
    $Source_address = $request->Source_address;
    $Duration = $request->Duration;
    
    $BaggageAirlineCode = $request->BaggageAirlineCode;
    $BaggageFlightNumber = $request->BaggageFlightNumber;
    $BaggageWayType = $request->BaggageWayType;
    $BaggageCode = $request->BaggageCode;
    $BaggageDescription = $request->BaggageDescription;
    $BaggageWeight = $request->BaggageWeight;
    $BaggageCurrency = $request->BaggageCurrency;
    $BaggagePrice = $request->BaggagePrice;
    $BaggageOrigin = $request->BaggageOrigin;
    $BaggageDestination = $request->BaggageDestination;
//  echo"<br>"; echo"<br>";
//     print_r($BaggageAirlineCode);echo"<br>";
//     print_r($BaggageFlightNumber);echo"<br>";
//     print_r($BaggageWayType);echo"<br>";
//     print_r($BaggageCode);echo"<br>";
//     print_r($BaggageDescription);echo"<br>";
//     print_r($BaggageWeight);echo"<br>";
//     print_r($BaggageCurrency);echo"<br>";
//     print_r($BaggagePrice);echo"<br>";
//     print_r($BaggageOrigin);echo"<br>";
//     print_r($BaggageDestination);echo"<br>";
   
    
    $MealDynamicAirlineCode = $request->MealDynamicAirlineCode;
    $MealDynamicFlightNumber = $request->MealDynamicFlightNumber;
    $MealDynamicWayType = $request->MealDynamicWayType;
    $MealDynamicCode = $request->MealDynamicCode;
    $MealDynamicDescription = $request->MealDynamicDescription;
    $MealDynamicAirlineDescription = $request->MealDynamicAirlineDescription;
    $MealDynamicQuantity = $request->MealDynamicQuantity;
    $MealDynamicCurrency = $request->MealDynamicCurrency;
    $MealDynamicPrice = $request->MealDynamicPrice;
    $MealDynamicOrigin = $request->MealDynamicOrigin;
    $MealDynamicDestination = $request->MealDynamicDestination;
    // echo"<br>"; echo"<br>";
    //  print_r($MealDynamicAirlineCode);echo"<br>";
    // print_r($MealDynamicFlightNumber);echo"<br>";
    // print_r($MealDynamicWayType);echo"<br>";
    // print_r($MealDynamicCode);echo"<br>";
    // print_r($MealDynamicDescription);echo"<br>";
    // print_r($MealDynamicAirlineDescription);echo"<br>";
    // print_r($MealDynamicQuantity);echo"<br>";
    // print_r($MealDynamicCurrency);echo"<br>";
    // print_r($MealDynamicPrice);echo"<br>";
    // print_r($MealDynamicOrigin);echo"<br>";
    // print_r($MealDynamicDestination);echo"<br>";
  
    
    $SeatsAirlineCode = $request->SeatsAirlineCode;
    $SeatsFlightNumber = $request->SeatsFlightNumber;
    $SeatsCraftType = $request->SeatsCraftType;
    $SeatsOrigin = $request->SeatsOrigin;
    $SeatsDestination = $request->SeatsDestination;
    $SeatsAvailablityType = $request->SeatsAvailablityType;
    $SeatsDescription = $request->SeatsDescription;
    $SeatsCode = $request->SeatsCode;
    $SeatsRowNo = $request->SeatsRowNo;
    $SeatsSeatNo = $request->SeatsSeatNo;
    $SeatsSeatType = $request->SeatsSeatType;
    $SeatsSeatWayType = $request->SeatsSeatWayType;
    $SeatsCompartment = $request->SeatsCompartment;
    $SeatsDeck = $request->SeatsDeck;
    $SeatsCurrency = $request->SeatsCurrency;
    $SeatsPrice = $request->SeatsPrice;
    
    // echo"<br>"; echo"<br>";
    // print_r($SeatsAirlineCode);echo"<br>";
    // print_r($SeatsFlightNumber);echo"<br>";
    // print_r($SeatsCraftType);echo"<br>";
    // print_r($SeatsOrigin);echo"<br>";
    // print_r($SeatsDestination);echo"<br>";
    // print_r($SeatsAvailablityType);echo"<br>";
    // print_r($SeatsDescription);echo"<br>";
    // print_r($SeatsCode);echo"<br>";
    // print_r($SeatsRowNo);echo"<br>";
    // print_r($SeatsSeatNo);echo"<br>";
    // print_r($SeatsSeatType);echo"<br>";
    // print_r($SeatsCompartment);echo"<br>";
    // print_r($SeatsDeck);echo"<br>";
    // print_r($SeatsCurrency);echo"<br>";
    // print_r($SeatsPrice);echo"<br>";
    
    $fname = $request->fname;
    $lname = $request->lname;
    $email = $request->email;
    $mobile = $request->mobile;
    $street_address = $request->street_address;
    $address = $request->address;
    $city = $request->city;
    $state = $request->state;
    $country = $request->country;
    $passport_no = $request->passport_no;
    $passport_expiry = $request->passport_expiry;
    
    $dateofbirth = $request->dateofbirth;

//Ticket
$endpoint1 = 'http://api.tektravels.com/BookingEngineService_Air/AirService.svc/rest/Ticket/'; 
$json1='{
	"PreferredCurrency": null,
	"ResultIndex": "'.$ResultIndex.'",
	"AgentReferenceNo": "sonam1234567890",
	"Passengers": [{
		"Title": "Mr",
		"FirstName": "'.$fname.'",
		"LastName": "'.$lname.'",
		"PaxType": 1,
		"DateOfBirth": "",
		"Gender": 1,
		"PassportNo": "",
		"PassportExpiry": "",
		"AddressLine1": "'.$street_address.', p",
		"AddressLine2": "",
		"Fare": {
		    "BaseFare": "'.$BaseFare.'",
			"Tax": "'.$Tax.'",
			"YQTax": "'.$YQTax.'",
			"AdditionalTxnFeePub": "'.$AdditionalTxnFeePub.'",
			"AdditionalTxnFeeOfrd": "'.$AdditionalTxnFeeOfrd.'",
			"OtherCharges": "'.$OtherCharges.'"
		},
		"City": "Gurgaon",
		"CountryCode": "IN",
		"CountryName": "India",      
        "Nationality": "IN",
		"ContactNo": "'.$mobile.'",
		"Email": "'.$email.'",
		"IsLeadPax": true,
		"FFAirlineCode": "6E",
		"FFNumber": "123",
	"Baggage":[
            {
                "AirlineCode": "'.$BaggageAirlineCode.'",
                "FlightNumber": "'.$BaggageFlightNumber.'",
                "WayType": '.$BaggageWayType.',
                "Code": "'.$BaggageCode.'",
                "Description": "'.$BaggageDescription.'",
                "Weight": "'.$BaggageWeight.'",
                "Currency": "'.$BaggageCurrency.'",
                 "Price": "'.$BaggagePrice.'",
                 "Origin": "'.$BaggageOrigin.'",
                "Destination": "'.$BaggageDestination.'"
        }],
        "MealDynamic": [
        {
          "AirlineCode": "'.$MealDynamicAirlineCode.'",
          "FlightNumber": "'.$MealDynamicFlightNumber.'",
          "WayType": "'.$MealDynamicWayType.'",
          "Code": "'.$MealDynamicCode.'",
          "Description": 0,
          "AirlineDescription": "'.$MealDynamicAirlineDescription.'",
          "Quantity": "'.$MealDynamicQuantity.'",
          "Currency": "'.$MealDynamicCurrency.'",
          "Price": "'.$MealDynamicPrice.'",
          "Origin": "'.$MealDynamicOrigin.'",
          "Destination": "'.$MealDynamicDestination.'"
        }],
	"SeatDynamic": [
        {
	    "AirlineCode": "'.$SeatsAirlineCode.'",
             "FlightNumber": "'.$SeatsFlightNumber.'",
              "CraftType": "'.$SeatsCraftType.'",
               "Origin": "'.$SeatsOrigin.'",
                "Destination": "'.$SeatsDestination.'",
                "AvailablityType": '.$SeatsAvailablityType.',
                "Description": '.$SeatsDescription.',
                "Code": "'.$SeatsCode.'",
                "RowNo": "'.$SeatsRowNo.'",
                "SeatNo": "'.$SeatsSeatNo.'",
                "SeatType": '.$SeatsSeatType.',
                "SeatWayType": '.$SeatsSeatWayType.',
                "Compartment": '.$SeatsCompartment.',
                "Deck": '.$SeatsDeck.',
                "Currency": "'.$SeatsCurrency.'",
                "Price": '.$SeatsPrice.'                                                                                                                                                                                                      
				
		}],
		"GSTCompanyAddress": "",
		"GSTCompanyContactNumber": "",
		"GSTCompanyName": "",
		"GSTNumber": "",
		"GSTCompanyEmail": ""
	}],
	"EndUserIp": "192.168.11.58",
	"TokenId": "'.$token_id.'",
	"TraceId": "'.$TraceId.'"
}';
// print_r($TraceId);die;
$ch1 = curl_init($endpoint1);
$data =$json1;
curl_setopt($ch1, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch1, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch1);
$result1    = json_decode($result);    
   
 return view('flight/booking-confirmation',compact('result1'));
    }
    
    // All Flight
     public function all_flight(Request $request)
    {
    //   print_r($request->from);die;
$from = $request->from;
$to = $request->to;
$journey_date = $request->journey_date;
$adult = $request->adult;
$children = $request->children;
$infant = $request->infant;
$cabin_class = $request->cabin_class;

// Endpoint you want to access
$endpoint = 'http://api.tektravels.com/SharedServices/SharedData.svc/rest/Authenticate'; // Replace with the actual flight search endpoint

// Define your search parameters as an array

$url = $endpoint;
                $json='{
"ClientId": "ApiIntegrationNew",
"UserName": "Flightpath",
"Password": "Flight@1234", 
"EndUserIp": "192.168.11.120"
}';
// $url = 'https://www.example.com/api';

// Create a new cURL resource
$ch = curl_init($url);

// Setup request to send json via POST
$data =$json;
$payload = $json;

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$result1 = curl_exec($ch);
$result = json_decode($result1);
// print_r($result->TokenId);die;
// Search 
$search = 'http://api.tektravels.com/BookingEngineService_Air/AirService.svc/rest/Search/'; // Replace with the actual flight search endpoint

// Define your search parameters as an array
$json1='{
"EndUserIp": "192.168.11.120",
"TokenId": "'.$result->TokenId.'",
"AdultCount": "'.$adult.'",
"ChildCount": "0",
"InfantCount": "0",
"DirectFlight": "false",
"OneStopFlight": "false",
"JourneyType": "1",
"FlightCabinClass":"'.$cabin_class.'",
"PreferredAirlines": null,
"Segments": [
{
"Origin": "'.$request->from.'",
"Destination": "'.$request->to.'",
"FlightCabinClass": "1",
"PreferredDepartureTime": "'.$request->journey_date.'T00: 00: 00",
"PreferredArrivalTime": "'.$request->journey_date.'T00: 00: 00"
}
        ],
"Sources": null
}';
// $url = 'https://www.example.com/api';

// Create a new cURL resource
$ch = curl_init($search);

// Setup request to send json via POST
// $data =$json1;
// print_r($json1);die;
$payload1 = $json1;

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload1);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// print_r("ddw");die; 
// Execute the POST request
$ss = curl_exec($ch);
$ress = json_decode($ss);
$daa; 
$all_data = "dd";
$token_id = $result->TokenId;
// Close cURL resource 
//  print_r($ress);die;
curl_close($ch); 
$filterResult = Airport_Model::get(); 
        return view('flight/flight_search_result',compact('all_data','ress','token_id','filterResult','journey_date','from','to','adult','children','infant','cabin_class')); 
     }
    
   // Price Filter 
     public function price_filter(Request $request)
    {
    //   print_r($request->from);die;
$price_filter = $request->price_filter;  
$price_filter1 = $request->price_filter1;
$from = $request->from;
$to = $request->to;
$journey_date = $request->journey_date;

$adult = $request->adult;
$children = $request->children;
$infant = $request->infant;
$cabin_class = $request->cabin_class;

// Endpoint you want to access
$endpoint = 'http://api.tektravels.com/SharedServices/SharedData.svc/rest/Authenticate'; // Replace with the actual flight search endpoint

// Define your search parameters as an array

$url = $endpoint;
                $json='{
"ClientId": "ApiIntegrationNew",
"UserName": "Flightpath",
"Password": "Flight@1234", 
"EndUserIp": "192.168.11.120"
}';
// $url = 'https://www.example.com/api';

// Create a new cURL resource
$ch = curl_init($url);

// Setup request to send json via POST
$data =$json;
$payload = $json;

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$result1 = curl_exec($ch);
$result = json_decode($result1);
// print_r($result->TokenId);die;
// Search 
$search = 'http://api.tektravels.com/BookingEngineService_Air/AirService.svc/rest/Search/'; // Replace with the actual flight search endpoint

// Define your search parameters as an array
$json1='{
"EndUserIp": "192.168.11.120",
"TokenId": "'.$result->TokenId.'",
"AdultCount": "'.$adult.'",
"ChildCount": "0",
"InfantCount": "0",
"DirectFlight": "false",
"OneStopFlight": "false",
"JourneyType": "1",
"FlightCabinClass":"'.$cabin_class.'",
"PreferredAirlines": null,
"Segments": [
{
"Origin": "'.$request->from.'",
"Destination": "'.$request->to.'",
"FlightCabinClass": "1",
"PreferredDepartureTime": "'.$request->journey_date.'T00: 00: 00",
"PreferredArrivalTime": "'.$request->journey_date.'T00: 00: 00"
}
        ],
"Sources": null
}';
// $url = 'https://www.example.com/api';

// Create a new cURL resource
$ch = curl_init($search);

// Setup request to send json via POST
// $data =$json1;
// print_r($json1);die;
$payload1 = $json1;

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload1);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// print_r("ddw");die; 
// Execute the POST request
$ss = curl_exec($ch);
$ress = json_decode($ss);
// foreach($ress as $res){
//     $dat = $res->Results;
//     foreach($dat as $dat1){
//         foreach($dat1 as $dat2){
//          $Segments = $dat2->Segments;
//         //  print_r($Segments->Baggage);
//          foreach( $Segments as $Segment){
//             foreach( $Segment as $Segm){
//           $Origin = $Segm->Origin;
//           $Destination = $Segm->Destination;
//           $Airportcode[] = $Origin->Airport->AirportCode;
//           $AirportName[] = $Origin->Airport->AirportName;
//           $DepTime[] = $Origin->DepTime;
          
//           $DestinationDepTime = $Destination->ArrTime;
//           $DestinationAirportcode[] = $Destination->Airport->AirportCode;
//           $DestinationAirportName[] = $Destination->Airport->AirportName;
        //   foreach($Airport as $Origin1){
        //   print_r( $Airport);
        // } 
    //     }
        
    //     }

    //     }
    // }
// }
// foreach($daa as $dat2){
//          $Segments = $dat2->Segments;
//         //  print_r($Segments->Baggage);
//          foreach( $Segments as $Segment){
//             foreach( $Segment as $Segm){
//           $Origin = $Segm->Origin;
//           $Destination = $Segm->Destination;
//           $Airportcode[] = $Origin->Airport->AirportCode;
//           $AirportName[] = $Origin->Airport->AirportName;
//           $DepTime[] = $Origin->DepTime;
          
//           $DestinationDepTime[] = $Destination->ArrTime;
//           $DestinationAirportcode[] = $Destination->Airport->AirportCode;
//           $DestinationAirportName[] = $Destination->Airport->AirportName;
//         //   foreach($Airport as $Origin1){
//         //   print_r( $Airport);
//         // } 
//         }
//         }
//         } 
        // print_r($DestinationDepTime);
//  die;
// print_r($daa);die;

$daa; 
$fli_data = "dd";
$token_id = $result->TokenId;
// Close cURL resource 
//  print_r($ress);die;
curl_close($ch);  
$filterResult = Airport_Model::get(); 
        return view('flight/flight_search_result',compact('price_filter','price_filter1','ress','token_id','filterResult','journey_date','from','to','adult','children','infant','cabin_class')); 
    }    
  
   //flight_classFilter 
     public function flight_class(Request $request)
    {
    //   print_r($request->from);die;
$from = $request->from;
$to = $request->to;
$journey_date = $request->journey_date;

$adult = $request->adult;
$children = $request->children;
$infant = $request->infant;
$cabin_class = $request->cabin_class;

// Endpoint you want to access
$endpoint = 'http://api.tektravels.com/SharedServices/SharedData.svc/rest/Authenticate'; // Replace with the actual flight search endpoint

// Define your search parameters as an array

$url = $endpoint;
                $json='{
"ClientId": "ApiIntegrationNew",
"UserName": "Flightpath",
"Password": "Flight@1234", 
"EndUserIp": "192.168.11.120"
}';
// $url = 'https://www.example.com/api';

// Create a new cURL resource
$ch = curl_init($url);

// Setup request to send json via POST
$data =$json;
$payload = $json;

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$result1 = curl_exec($ch);
$result = json_decode($result1);
// print_r($result->TokenId);die;
// Search 
$search = 'http://api.tektravels.com/BookingEngineService_Air/AirService.svc/rest/Search/'; // Replace with the actual flight search endpoint

// Define your search parameters as an array
$json1='{
"EndUserIp": "192.168.11.120",
"TokenId": "'.$result->TokenId.'",
"AdultCount": "'.$adult.'",
"ChildCount": "0",
"InfantCount": "0",
"DirectFlight": "false",
"OneStopFlight": "false",
"JourneyType": "1",
"FlightCabinClass":"'.$cabin_class.'",
"PreferredAirlines": null,
"Segments": [
{
"Origin": "'.$request->from.'",
"Destination": "'.$request->to.'",
"FlightCabinClass": "1",
"PreferredDepartureTime": "'.$request->journey_date.'T00: 00: 00",
"PreferredArrivalTime": "'.$request->journey_date.'T00: 00: 00"
}
        ],
"Sources": null
}';
// $url = 'https://www.example.com/api';

// Create a new cURL resource
$ch = curl_init($search);

// Setup request to send json via POST
// $data =$json1;
// print_r($json1);die;
$payload1 = $json1;

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload1);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// print_r("ddw");die; 
// Execute the POST request
$ss = curl_exec($ch);
$ress = json_decode($ss);
// foreach($ress as $res){
//     $dat = $res->Results;
//     foreach($dat as $dat1){
//         foreach($dat1 as $dat2){
//          $Segments = $dat2->Segments;
//         //  print_r($Segments->Baggage);
//          foreach( $Segments as $Segment){
//             foreach( $Segment as $Segm){
//           $Origin = $Segm->Origin;
//           $Destination = $Segm->Destination;
//           $Airportcode[] = $Origin->Airport->AirportCode;
//           $AirportName[] = $Origin->Airport->AirportName;
//           $DepTime[] = $Origin->DepTime;
          
//           $DestinationDepTime = $Destination->ArrTime;
//           $DestinationAirportcode[] = $Destination->Airport->AirportCode;
//           $DestinationAirportName[] = $Destination->Airport->AirportName;
        //   foreach($Airport as $Origin1){
        //   print_r( $Airport);
        // } 
    //     }
        
    //     }

    //     }
    // }
// }
// foreach($daa as $dat2){
//          $Segments = $dat2->Segments;
//         //  print_r($Segments->Baggage);
//          foreach( $Segments as $Segment){
//             foreach( $Segment as $Segm){
//           $Origin = $Segm->Origin;
//           $Destination = $Segm->Destination;
//           $Airportcode[] = $Origin->Airport->AirportCode;
//           $AirportName[] = $Origin->Airport->AirportName;
//           $DepTime[] = $Origin->DepTime;
          
//           $DestinationDepTime[] = $Destination->ArrTime;
//           $DestinationAirportcode[] = $Destination->Airport->AirportCode;
//           $DestinationAirportName[] = $Destination->Airport->AirportName;
//         //   foreach($Airport as $Origin1){
//         //   print_r( $Airport);
//         // } 
//         }
//         }
//         } 
        // print_r($DestinationDepTime);
//  die;
// print_r($daa);die;

$daa; 
$fli_data = "dd";
$token_id = $result->TokenId;
// Close cURL resource 
//  print_r($ress);die;
curl_close($ch);  
$filterResult = Airport_Model::get(); 
        return view('flight/flight_search_result',compact('fli_data','ress','token_id','filterResult','journey_date','from','to','adult','children','infant','cabin_class')); 
    }    
    
    
   // Stops Filter 
     public function stops(Request $request)
    {
    //   print_r($request->from);die;
$stops = $request->stops;   
if($stops =="one" ){
    $stops1 ="true"; 
}
if($stops =="multi" ){
    $stops1 ="false"; 
}
if($stops =="non" ){
    $stops1 ="true"; 
}
$from = $request->from;
$to = $request->to;
$journey_date = $request->journey_date;

$adult = $request->adult;
$children = $request->children;
$infant = $request->infant;
$cabin_class = $request->cabin_class;

// Endpoint you want to access
$endpoint = 'http://api.tektravels.com/SharedServices/SharedData.svc/rest/Authenticate'; // Replace with the actual flight search endpoint

// Define your search parameters as an array

$url = $endpoint;
                $json='{
"ClientId": "ApiIntegrationNew",
"UserName": "Flightpath",
"Password": "Flight@1234", 
"EndUserIp": "192.168.11.120"
}';
// $url = 'https://www.example.com/api';

// Create a new cURL resource
$ch = curl_init($url);

// Setup request to send json via POST
$data =$json;
$payload = $json;

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$result1 = curl_exec($ch);
$result = json_decode($result1);
// print_r($result->TokenId);die;
// Search 
$search = 'http://api.tektravels.com/BookingEngineService_Air/AirService.svc/rest/Search/'; // Replace with the actual flight search endpoint

// Define your search parameters as an array
$json1='{
"EndUserIp": "192.168.11.120",
"TokenId": "'.$result->TokenId.'",
"AdultCount": "'.$adult.'",
"ChildCount": "0",
"InfantCount": "0",
"DirectFlight": "'.$stops1.'",
"OneStopFlight": "'.$stops1.'",
"JourneyType": "1",
"FlightCabinClass":"'.$cabin_class.'",
"PreferredAirlines": null,
"Segments": [
{
"Origin": "'.$request->from.'",
"Destination": "'.$request->to.'",
"FlightCabinClass": "1",
"PreferredDepartureTime": "'.$request->journey_date.'T00: 00: 00",
"PreferredArrivalTime": "'.$request->journey_date.'T00: 00: 00"
}
        ],
"Sources": null
}';
// $url = 'https://www.example.com/api';

// Create a new cURL resource
$ch = curl_init($search);

// Setup request to send json via POST
// $data =$json1;
// print_r($json1);die;
$payload1 = $json1;

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload1);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// print_r("ddw");die; 
// Execute the POST request
$ss = curl_exec($ch);
$ress = json_decode($ss);
// foreach($ress as $res){
//     $dat = $res->Results;
//     foreach($dat as $dat1){
//         foreach($dat1 as $dat2){
//          $Segments = $dat2->Segments;
//         //  print_r($Segments->Baggage);
//          foreach( $Segments as $Segment){
//             foreach( $Segment as $Segm){
//           $Origin = $Segm->Origin;
//           $Destination = $Segm->Destination;
//           $Airportcode[] = $Origin->Airport->AirportCode;
//           $AirportName[] = $Origin->Airport->AirportName;
//           $DepTime[] = $Origin->DepTime;
          
//           $DestinationDepTime = $Destination->ArrTime;
//           $DestinationAirportcode[] = $Destination->Airport->AirportCode;
//           $DestinationAirportName[] = $Destination->Airport->AirportName;
        //   foreach($Airport as $Origin1){
        //   print_r( $Airport);
        // } 
    //     }
        
    //     }

    //     }
    // }
// }
// foreach($daa as $dat2){
//          $Segments = $dat2->Segments;
//         //  print_r($Segments->Baggage);
//          foreach( $Segments as $Segment){
//             foreach( $Segment as $Segm){
//           $Origin = $Segm->Origin;
//           $Destination = $Segm->Destination;
//           $Airportcode[] = $Origin->Airport->AirportCode;
//           $AirportName[] = $Origin->Airport->AirportName;
//           $DepTime[] = $Origin->DepTime;
          
//           $DestinationDepTime[] = $Destination->ArrTime;
//           $DestinationAirportcode[] = $Destination->Airport->AirportCode;
//           $DestinationAirportName[] = $Destination->Airport->AirportName;
//         //   foreach($Airport as $Origin1){
//         //   print_r( $Airport);
//         // } 
//         }
//         }
//         } 
        // print_r($DestinationDepTime);
//  die;
// print_r($daa);die;
$fli_data = "dd";
$daa; 
$token_id = $result->TokenId;
// Close cURL resource 
//  print_r($ress);die;
curl_close($ch);  
$filterResult = Airport_Model::get(); 
        return view('flight/flight_search_result',compact('stops','ress','token_id','filterResult','journey_date','from','to','adult','children','infant','cabin_class')); 
    }   
    
   // Refundable Filter 
     public function refundable(Request $request)
    {
    //   print_r($request->from);die;
$refundable = $request->refundable;    
$from = $request->from;
$to = $request->to;
$journey_date = $request->journey_date;

$adult = $request->adult;
$children = $request->children;
$infant = $request->infant;
$cabin_class = $request->cabin_class;

// Endpoint you want to access
$endpoint = 'http://api.tektravels.com/SharedServices/SharedData.svc/rest/Authenticate'; // Replace with the actual flight search endpoint

// Define your search parameters as an array

$url = $endpoint;
                $json='{
"ClientId": "ApiIntegrationNew",
"UserName": "Flightpath",
"Password": "Flight@1234", 
"EndUserIp": "192.168.11.120"
}';
// $url = 'https://www.example.com/api';

// Create a new cURL resource
$ch = curl_init($url);

// Setup request to send json via POST
$data =$json;
$payload = $json;

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$result1 = curl_exec($ch);
$result = json_decode($result1);
// print_r($result->TokenId);die;
// Search 
$search = 'http://api.tektravels.com/BookingEngineService_Air/AirService.svc/rest/Search/'; // Replace with the actual flight search endpoint

// Define your search parameters as an array
$json1='{
"EndUserIp": "192.168.11.120",
"TokenId": "'.$result->TokenId.'",
"AdultCount": "'.$adult.'",
"ChildCount": "0",
"InfantCount": "0",
"DirectFlight": "false",
"OneStopFlight": "false",
"JourneyType": "1",
"FlightCabinClass":"'.$cabin_class.'",
"PreferredAirlines": null,
"Segments": [
{
"Origin": "'.$request->from.'",
"Destination": "'.$request->to.'",
"FlightCabinClass": "1",
"PreferredDepartureTime": "'.$request->journey_date.'T00: 00: 00",
"PreferredArrivalTime": "'.$request->journey_date.'T00: 00: 00"
}
        ],
"Sources": null
}';
// $url = 'https://www.example.com/api';

// Create a new cURL resource
$ch = curl_init($search);

// Setup request to send json via POST
// $data =$json1;
// print_r($json1);die;
$payload1 = $json1;

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload1);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// print_r("ddw");die; 
// Execute the POST request
$ss = curl_exec($ch);
$ress = json_decode($ss);
// foreach($ress as $res){
//     $dat = $res->Results;
//     foreach($dat as $dat1){
//         foreach($dat1 as $dat2){
//          $Segments = $dat2->Segments;
//         //  print_r($Segments->Baggage);
//          foreach( $Segments as $Segment){
//             foreach( $Segment as $Segm){
//           $Origin = $Segm->Origin;
//           $Destination = $Segm->Destination;
//           $Airportcode[] = $Origin->Airport->AirportCode;
//           $AirportName[] = $Origin->Airport->AirportName;
//           $DepTime[] = $Origin->DepTime;
          
//           $DestinationDepTime = $Destination->ArrTime;
//           $DestinationAirportcode[] = $Destination->Airport->AirportCode;
//           $DestinationAirportName[] = $Destination->Airport->AirportName;
        //   foreach($Airport as $Origin1){
        //   print_r( $Airport);
        // } 
    //     }
        
    //     }

    //     }
    // }
// }
// foreach($daa as $dat2){
//          $Segments = $dat2->Segments;
//         //  print_r($Segments->Baggage);
//          foreach( $Segments as $Segment){
//             foreach( $Segment as $Segm){
//           $Origin = $Segm->Origin;
//           $Destination = $Segm->Destination;
//           $Airportcode[] = $Origin->Airport->AirportCode;
//           $AirportName[] = $Origin->Airport->AirportName;
//           $DepTime[] = $Origin->DepTime;
          
//           $DestinationDepTime[] = $Destination->ArrTime;
//           $DestinationAirportcode[] = $Destination->Airport->AirportCode;
//           $DestinationAirportName[] = $Destination->Airport->AirportName;
//         //   foreach($Airport as $Origin1){
//         //   print_r( $Airport);
//         // } 
//         }
//         }
//         } 
        // print_r($DestinationDepTime);
//  die;
// print_r($daa);die;
$fli_data = "dd";
$daa; 
$token_id = $result->TokenId;
// Close cURL resource 
//  print_r($ress);die;
curl_close($ch);
$filterResult = Airport_Model::get(); 
        return view('flight/flight_search_result',compact('refundable','ress','token_id','filterResult','journey_date','from','to','adult','children','infant','cabin_class')); 
    } 

   // Airlines Filter 
     public function airlines(Request $request)
    {
    //   print_r($request->from);die;
$airlines = $request->airlines;    
$from = $request->from;
$to = $request->to;
$journey_date = $request->journey_date;

$adult = $request->adult;
$children = $request->children;
$infant = $request->infant;
$cabin_class = $request->cabin_class;

// Endpoint you want to access
$endpoint = 'http://api.tektravels.com/SharedServices/SharedData.svc/rest/Authenticate'; // Replace with the actual flight search endpoint

// Define your search parameters as an array

$url = $endpoint;
                $json='{
"ClientId": "ApiIntegrationNew",
"UserName": "Flightpath",
"Password": "Flight@1234", 
"EndUserIp": "192.168.11.120"
}';
// $url = 'https://www.example.com/api';

// Create a new cURL resource
$ch = curl_init($url);

// Setup request to send json via POST
$data =$json;
$payload = $json;

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$result1 = curl_exec($ch);
$result = json_decode($result1);
// print_r($result->TokenId);die;
// Search 
$search = 'http://api.tektravels.com/BookingEngineService_Air/AirService.svc/rest/Search/'; // Replace with the actual flight search endpoint

// Define your search parameters as an array
$json1='{
"EndUserIp": "192.168.11.120",
"TokenId": "'.$result->TokenId.'",
"AdultCount": "'.$adult.'",
"ChildCount": "0",
"InfantCount": "0",
"DirectFlight": "false",
"OneStopFlight": "false",
"JourneyType": "1",
"FlightCabinClass":"'.$cabin_class.'",
"PreferredAirlines": null,
"Segments": [
{
"Origin": "'.$request->from.'",
"Destination": "'.$request->to.'",
"FlightCabinClass": "1",
"PreferredDepartureTime": "'.$request->journey_date.'T00: 00: 00",
"PreferredArrivalTime": "'.$request->journey_date.'T00: 00: 00"
}
        ],
"Sources": null
}';
// $url = 'https://www.example.com/api';

// Create a new cURL resource
$ch = curl_init($search);

// Setup request to send json via POST
// $data =$json1;
// print_r($json1);die;
$payload1 = $json1;

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload1);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// print_r("ddw");die; 
// Execute the POST request
$ss = curl_exec($ch);
$ress = json_decode($ss);
// foreach($ress as $res){
//     $dat = $res->Results;
//     foreach($dat as $dat1){
//         foreach($dat1 as $dat2){
//          $Segments = $dat2->Segments;
//         //  print_r($Segments->Baggage);
//          foreach( $Segments as $Segment){
//             foreach( $Segment as $Segm){
//           $Origin = $Segm->Origin;
//           $Destination = $Segm->Destination;
//           $Airportcode[] = $Origin->Airport->AirportCode;
//           $AirportName[] = $Origin->Airport->AirportName;
//           $DepTime[] = $Origin->DepTime;
          
//           $DestinationDepTime = $Destination->ArrTime;
//           $DestinationAirportcode[] = $Destination->Airport->AirportCode;
//           $DestinationAirportName[] = $Destination->Airport->AirportName;
        //   foreach($Airport as $Origin1){
        //   print_r( $Airport);
        // } 
    //     }
        
    //     }

    //     }
    // }
// }
// foreach($daa as $dat2){
//          $Segments = $dat2->Segments;
//         //  print_r($Segments->Baggage);
//          foreach( $Segments as $Segment){
//             foreach( $Segment as $Segm){
//           $Origin = $Segm->Origin;
//           $Destination = $Segm->Destination;
//           $Airportcode[] = $Origin->Airport->AirportCode;
//           $AirportName[] = $Origin->Airport->AirportName;
//           $DepTime[] = $Origin->DepTime;
          
//           $DestinationDepTime[] = $Destination->ArrTime;
//           $DestinationAirportcode[] = $Destination->Airport->AirportCode;
//           $DestinationAirportName[] = $Destination->Airport->AirportName;
//         //   foreach($Airport as $Origin1){
//         //   print_r( $Airport);
//         // } 
//         }
//         }
//         } 
        // print_r($DestinationDepTime);
//  die;
// print_r($daa);die;
$fli_data = "dd";
$daa; 
$token_id = $result->TokenId;
// Close cURL resource 
//  print_r($ress);die;
curl_close($ch);
$filterResult = Airport_Model::get(); 
        return view('flight/flight_search_result',compact('airlines','ress','token_id','filterResult','journey_date','from','to','adult','children','infant','cabin_class')); 
    }   
    
    // Return Flight Search 
    
 public function return_flight(Request $request)
    {
    //   print_r($request->from);die;
$form_status = $request->form_status;    
$from = $request->from;
$to = $request->to;
$journey_date = $request->journey_date;

 $from1 = "";
 $to1 = "";
 $journey_date1 = "";
 
$adult = $request->adult;
$children = $request->children;
$infant = $request->infant;
$cabin_class = $request->cabin_class;
//  die;
// Endpoint you want to access
$endpoint = 'http://api.tektravels.com/SharedServices/SharedData.svc/rest/Authenticate'; // Replace with the actual flight search endpoint

// Define your search parameters as an array

$url = $endpoint;
                $json='{
"ClientId": "ApiIntegrationNew",
"UserName": "Flightpath",
"Password": "Flight@1234", 
"EndUserIp": "192.168.11.120"
}';
// $url = 'https://www.example.com/api';

// Create a new cURL resource
$ch = curl_init($url);

// Setup request to send json via POST
$data =$json;
$payload = $json;

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$result1 = curl_exec($ch);
$result = json_decode($result1);
// print_r($result->TokenId);die;
// Search 
$search = 'http://api.tektravels.com/BookingEngineService_Air/AirService.svc/rest/Search/'; // Replace with the actual flight search endpoint

// Define your search parameters as an array
$json1='{
"EndUserIp": "192.168.11.120",
"TokenId": "'.$result->TokenId.'",
"AdultCount": "'.$adult.'",
"ChildCount": "0",
"InfantCount": "0",
"DirectFlight": "false",
"OneStopFlight": "false",
"JourneyType": "2",
"PreferredAirlines": null,
"Segments": [
{
"Origin": "'.$request->from.'",
"Destination": "'.$request->to.'",
"FlightCabinClass": "'.$cabin_class.'",
"PreferredDepartureTime": "'.$request->journey_date.'T00: 00: 00",
"PreferredArrivalTime": "'.$request->journey_date.'T00: 00: 00"
},
{
"Origin": "'.$request->to.'",
"Destination": "'.$request->from.'",
"FlightCabinClass": "'.$cabin_class.'",
"PreferredDepartureTime": "'.$request->return_date.'T00: 00: 00",
"PreferredArrivalTime": "'.$request->return_date.'T00: 00: 00"
}
        ],
"Sources": null
}';
// $url = 'https://www.example.com/api';

// Create a new cURL resource
$ch = curl_init($search);

// Setup request to send json via POST
// $data =$json1;
// print_r($json1);die;
$payload1 = $json1;

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload1);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// print_r("ddw");die; 
// Execute the POST request
$ss = curl_exec($ch);
$ress = json_decode($ss);
// print_r($daa);die;
$daa; 
$fli_data = "dd";
$token_id = $result->TokenId;
// Close cURL resource 
//  print_r($ress);die;
curl_close($ch); 
$filterResult = Airport_Model::get(); 
        return view('flight/flight_search_result',compact('form_status','fli_data','ress','token_id','filterResult','journey_date','from','to','journey_date1','from1','to1','adult','children','infant','cabin_class')); 
    } 
    
    //Multi City 
     
 public function multi_city_flight(Request $request)
    {
    //   print_r("dd");die;
    $form_status = $request->form_status;
 $from = $request->from;
 $to = $request->to;
 $journey_date = $request->journey_date;

 $from1 = $request->from1;
 $to1 = $request->to1;
 $journey_date1 = $request->journey_date1;
//  die;
$adult = $request->adult;
$children = $request->children;
$infant = $request->infant;
$cabin_class = $request->cabin_class;

// Endpoint you want to access
$endpoint = 'http://api.tektravels.com/SharedServices/SharedData.svc/rest/Authenticate'; // Replace with the actual flight search endpoint

// Define your search parameters as an array

$url = $endpoint;
                $json='{
"ClientId": "ApiIntegrationNew",
"UserName": "Flightpath",
"Password": "Flight@1234", 
"EndUserIp": "192.168.11.120"
}';
// $url = 'https://www.example.com/api';

// Create a new cURL resource
$ch = curl_init($url);

// Setup request to send json via POST
$data =$json;
$payload = $json;

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$result1 = curl_exec($ch);
$result = json_decode($result1);
// print_r($result->TokenId);die;
// Search 
$search = 'http://api.tektravels.com/BookingEngineService_Air/AirService.svc/rest/Search/'; // Replace with the actual flight search endpoint

// Define your search parameters as an array
$json1='{
"EndUserIp": "192.168.11.120",
"TokenId": "'.$result->TokenId.'",
"AdultCount": "1",
"ChildCount": "0",
"InfantCount": "0",
"DirectFlight": "false",
"OneStopFlight": "false",
"JourneyType": "3",
"PreferredAirlines": null,
"Segments": [
    {
      "Origin": "'.$from.'",
      "Destination": "'.$to.'",
      "FlightCabinClass": "1",
      "PreferredDepartureTime": "'.$journey_date.'T00: 00: 00",
      "PreferredArrivalTime": "'.$journey_date.'T00: 00: 00"
    },
    {
      "Origin": "'.$from1.'",
      "Destination": "'.$to1.'",
      "FlightCabinClass": "1",
      "PreferredDepartureTime": "'.$journey_date1.'T00: 00: 00",
      "PreferredArrivalTime": "'.$journey_date1.'T00: 00: 00"
    }

  ],
"Sources": null
}';
// $url = 'https://www.example.com/api';

// Create a new cURL resource
$ch = curl_init($search);

// Setup request to send json via POST
// $data =$json1;
// print_r($json1);die;
$payload1 = $json1;

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload1);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// print_r("ddw");die; 
// Execute the POST request
$ss = curl_exec($ch);
$ress = json_decode($ss);
// print_r($daa);die;
$daa; 
$fli_data = "dd";
$token_id = $result->TokenId;
// Close cURL resource 
//  print_r($ress);die;
curl_close($ch); 
$filterResult = Airport_Model::get(); 
        return view('flight/flight_search_result',compact('form_status','fli_data','ress','token_id','filterResult','journey_date','from','to','journey_date1','from1','to1','adult','children','infant','cabin_class')); 
    }
    
    // 
    public function fatch_from(Request $request)
    {
        // print_r("ff");die;
        $data['states'] = Airport_Model::orderBy('id', 'desc')->where('AIRPORTCODE',$request->country_id)
                                ->get(["AIRPORTNAME","CITYNAME","COUNTRYCODE","AIRPORTCODE"]);
//   print_r($data);
        return response()->json($data);
    }
     public function fatch_from1(Request $request)
    {
        // print_r("ff");die;
        $data['states'] = Airport_Model::orderBy('c_id','desc')->where('AIRPORTCODE','LIKE', "$request->country_id%")->orwhere('CITYNAME','LIKE', "$request->country_id%")
                                ->get(["AIRPORTNAME","CITYNAME","COUNTRYCODE","AIRPORTCODE"]);
  
        return response()->json($data);
    }
     public function fromsearch(Request $request)
    {
        // print_r("ff");die;
        $data['states'] = Airport_Model::where('AIRPORTCODE','LIKE', '%'. $request->country_id )
                                //  ->orWhere('AIRPORTCODE', $request->country_id )
                                ->get(["AIRPORTNAME","CITYNAME","COUNTRYCODE","AIRPORTCODE"]);
  
        return response()->json($data);
    }
     public function easebuzz(Request $request)
    {
         $MERCHANT_KEY = "10PBP71ABZ2";
    $SALT = "ABC55E8IBW";         
    $ENV = "test";   // set enviroment name 
    $easebuzzObj = new Easebuzz($MERCHANT_KEY, $SALT, $ENV);
        $postData = array ( 
        "txnid" => "T3SAT0B5OL", 
        "amount" => "100.0", 
        "firstname" => "jitendra", 
        "email" => "test@gmail.com", 
        "phone" => "1231231235", 
        "productinfo" => "Laptop", 
        "surl" => "http://localhost:3000/response.php", 
        "furl" => "http://localhost:3000/response.php", 
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
        "zipcode" => "123123" 
    );

   $data = $easebuzzObj->initiatePaymentAPI($postData); 
   print_r($data);die;
    }
    
 public function filter(Request $request)
    {
      $dat[] =  $request->ress;  
//         foreach($ress as $res){
//     $TraceId = $res->TraceId;
// }   
// print_r($dat);
        foreach($dat as $key=>$dat1){
          $dat1 = $dat1;
        }
        foreach($dat1 as $dat2){
          $dat2 = $dat2;
          echo $dat2;
        }
        
die;
    //   $data['states'] = Hotel_City_Model::where('name',$request->country_id )
    //                             //  ->orWhere('AIRPORTCODE', $request->country_id )
    //                             ->get(["city_id"]);
  
    //     return response()->json($data);
    }  
     private function getExchangeRates()
    {
        $client = new Client();
        $response = $client->get($this->apiUrl);
        $data = json_decode($response->getBody(), true);

        return $data['rates'];
    }
}
