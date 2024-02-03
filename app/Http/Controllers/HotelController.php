<?php

namespace App\Http\Controllers;
use Mollie\Laravel\Facades\Mollie;
use Illuminate\Http\Request;
use App\Hotel_Model;
use App\Hotel_City_Model;
use App\UserDetails_Model;
use App\Hotel_Details_Model;
use Illuminate\Support\Facades\Http;
use Stevebauman\Location\Facades\Location;
use Easebuzz\PayWithEasebuzzLaravel\PayWithEasebuzzLib;
use Easebuzz\Easebuzz;
use GuzzleHttp\Client;
class HotelController extends Controller
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
    public function hotel()
    {
        // Authenticate API
$endpoint = 'http://api.tektravels.com/SharedServices/SharedData.svc/rest/Authenticate'; // Replace with the actual flight search endpoint
$url = $endpoint;
                $json='{
"ClientId": "ApiIntegrationNew",
"UserName": "Flightpath",
"Password": "Flight@1234", 
"EndUserIp": "192.168.11.120"
}';
$ch = curl_init($url);
$data =$json;
$payload = $json;
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result1 = curl_exec($ch);
$result = json_decode($result1);
// Search City 

$search1 = 'http://api.tektravels.com/SharedServices/StaticData.svc/rest/GetDestinationSearchStaticData'; // Replace with the actual flight search endpoint
$json12='{ 
"EndUserIp": "192.168.11.120",
"TokenId": "'.$result->TokenId.'",
"CountryCode" :"IN",
"SearchType"  :"1"
}'; 
$ch = curl_init($search1);
$payload12 = $json12;
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload12);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$ss = curl_exec($ch);
$ress = json_decode($ss);   
// print_r($ress);die;
$token_id = $result->TokenId;
$data = $ress->Destinations;
// foreach($data as $state_){
    
//     $DestinationId =$state_->DestinationId;
//     $CityName = $state_->CityName;
    
//      $user = new Hotel_City_Model;
// 			 $user->name = $CityName;
//               $user->city_id = $DestinationId;
//                 $user->save();
                
    
// }
$form_status1 ="hotel_form";
        return view('flight/hotel-search-list',compact('data','token_id','form_status1'));
    }
   
    public function hotel_search(Request $request)
    {
    $form_status = $request->form_status;    
    $city_name = $request->city_name;   
    $checkin_date = $request->checkin_date;
    $checkout_date =$request->checkout_date;
    $NoOfRoom =$request->NoOfRoom;
    
   $hotel1 =  Hotel_City_Model::where('name',$request->city_name)->first(); 
   
  if($hotel1){
  $city_id = $hotel1->city_id ;
        $date =\Carbon\Carbon::createFromFormat('Y-m-d', $request->checkin_date)
                    ->format('d/m/Y');
        // print_r($date);die;
// Authenticate API
$endpoint = 'http://api.tektravels.com/SharedServices/SharedData.svc/rest/Authenticate'; // Replace with the actual flight search endpoint
$url = $endpoint;
                $json='{
"ClientId": "ApiIntegrationNew",
"UserName": "Flightpath",
"Password": "Flight@1234", 
"EndUserIp": "192.168.11.120"
}';
$ch = curl_init($url);
$data =$json;
$payload = $json;
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result1 = curl_exec($ch);
$result = json_decode($result1);
// Search City 

$search1 = 'http://api.tektravels.com/SharedServices/StaticData.svc/rest/GetDestinationSearchStaticData'; // Replace with the actual flight search endpoint
$json12='{ 
"EndUserIp": "192.168.11.120",
"TokenId": "'.$result->TokenId.'",
"CountryCode" :"IN",
"SearchType"  :"1"
}'; 
$ch = curl_init($search1);
$payload12 = $json12;
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload12);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$ss = curl_exec($ch);
$ress = json_decode($ss);   
// print_r($ress);die;
$data = $ress->Destinations;
// Hotel Search API
$search = 'http://api.tektravels.com/BookingEngineService_Hotel/hotelservice.svc/rest/GetHotelResult/'; // Replace with the actual flight search endpoint
$json1='{ 
  "CheckInDate": "'.$date.'",
  "NoOfNights": "4",
  "CountryCode": "IN",
  "CityId": "'.$city_id.'",
  "ResultCount": null,
  "PreferredCurrency": "INR",
  "GuestNationality": "IN",
  "NoOfRooms": "1",
  "RoomGuests": [
    {
      "NoOfAdults": 1,
      "NoOfChild": 0,
      "ChildAge": null     
    }
  ],
  "MaxRating": 5,
  "MinRating": 0,
  "ReviewScore": null,
  "IsNearBySearchAllowed": false,
  "EndUserIp": "192.168.11.120",
  "TokenId": "'.$result->TokenId.'"
}'; 
$ch = curl_init($search);
$payload1 = $json1;
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$ss = curl_exec($ch);
$ress = json_decode($ss);   

// 
if(isset($ress->HotelSearchResult->HotelResults)){
$data = $ress->HotelSearchResult->HotelResults;
foreach($data as $key=>$data1){
     $hotel_name = $data1->HotelName;
    $hotel_image = $data1->HotelPicture;
    $hotel_address = $data1->HotelAddress;
    $hotel_rating = $data1->StarRating;
    $hotel_price = $data1->Price->RoomPrice;
     $user = new Hotel_Details_Model;
	$user->hotel_name = $hotel_name;
    $user->hotel_image = $hotel_image;
    $user->hotel_address = $hotel_address;
    $user->hotel_rating = $hotel_rating;
    $user->hotel_price = $hotel_price;
    $user->save();
    break;
}
}
    $form_status1 ="hotel_form";
$token_id = $result->TokenId;
    // print_r($ress);die;    
        return view('flight/hotel-search-list',compact('form_status1','form_status','ress','token_id','data' ,'city_name','checkin_date','checkout_date','NoOfRoom'));
    }
    
    }    
  public function hotel_information(Request $request)
    {
        $ResultIndex=$request->ResultIndex;
        $TraceId=$request->TraceId;
        $token_id=$request->token_id;
        $EndUserIp=$request->EndUserIp;
        $HotelCode=$request->HotelCode; 
       $total = $request->total_amount;
       $CurrencyCode = $request->CurrencyCode;
     // Hotel Search API
$search = 'http://api.tektravels.com/BookingEngineService_Hotel/hotelservice.svc/rest/GetHotelInfo/'; // Replace with the actual flight search endpoint
$json1='{
  "ResultIndex": "'.$request->ResultIndex.'",
  "HotelCode": "'.$request->HotelCode.'",
  "EndUserIp": "'.$request->EndUserIp.'",
  "TokenId": "'.$request->token_id.'",
  "TraceId": "'.$request->TraceId.'"
}'; 
$ch = curl_init($search);
$payload1 = $json1;
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$ss = curl_exec($ch);
$ress = json_decode($ss);   
//  print_r($ress);die;
        return view('flight/hotel-details',compact('ress','total','CurrencyCode','ResultIndex','TraceId','token_id','EndUserIp','HotelCode'));
    }
    
 public function room_information(Request $request)
    {
        $Hoteladdress = $request->Hoteladdress;
       $StarRating=  $request->StarRating;
        $Hotelname= $request->Hotelname;
        $ResultIndex =  $request->ResultIndex;
        $TraceId = $request->TraceId;
       $token_id = $request->token_id;
        $EndUserIp= $request->EndUserIp;
        $HotelCode = $request->HotelCode;
        $image= $request->image;
     // Hotel Search API
$search = 'http://api.tektravels.com/BookingEngineService_Hotel/hotelservice.svc/rest/GetHotelRoom/'; // Replace with the actual flight search endpoint
$json1='{
  "ResultIndex": "'.$request->ResultIndex.'",
  "HotelCode": "'.$request->HotelCode.'",
  "EndUserIp": "'.$request->EndUserIp.'",
  "TokenId": "'.$request->token_id.'",
  "TraceId": "'.$request->TraceId.'"
}'; 
$ch = curl_init($search);
$payload1 = $json1;
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$ss = curl_exec($ch);
$ress = json_decode($ss);   
//   print_r($ress);die;
        return view('flight/room-details',compact('ress','image','Hotelname','StarRating','Hoteladdress','ResultIndex','TraceId','token_id','EndUserIp','HotelCode'));
    }    
    // Room Block API 
 public function room_book_now(Request $request)
    {
        session()->put('ResultIndex',$request->ResultIndex);
        session()->put('Hotelname',$request->Hotelname);
        session()->put('TraceId',$request->TraceId);
        session()->put('token_id',$request->token_id);
        session()->put('EndUserIp',$request->EndUserIp);
        session()->put('HotelCode',$request->HotelCode);
        session()->put('RoomIndex',$request->RoomIndex);
        session()->put('RoomTypeName',$request->RoomTypeName);
        session()->put('RoomTypeCode',$request->RoomTypeCode);
        session()->put('RatePlanCode',$request->RatePlanCode);
        session()->put('SmokingPreference',$request->SmokingPreference);
        session()->put('CurrencyCode',$request->CurrencyCode);
        session()->put('RoomPrice',$request->RoomPrice);
        session()->put('Tax',$request->Tax);
        session()->put('ExtraGuestCharge',$request->ExtraGuestCharge);
        session()->put('ChildCharge',$request->ChildCharge);
        session()->put('OtherCharges',$request->OtherCharges);
        session()->put('Discount',$request->Discount);
        session()->put('PublishedPrice',$request->PublishedPrice);
        session()->put('PublishedPriceRoundedOff',$request->PublishedPriceRoundedOff);
        session()->put('OfferedPrice',$request->OfferedPrice);
        session()->put('OfferedPriceRoundedOff',$request->OfferedPriceRoundedOff);
        session()->put('AgentCommission',$request->AgentCommission);
        session()->put('TDS',$request->TDS);
        session()->put('ServiceTax',$request->ServiceTax);
        
        $ResultIndex = $request->ResultIndex;
        $Hotelname = $request->Hotelname;
        $TraceId = $request->TraceId;
        $token_id = $request->token_id;
        $EndUserIp = $request->EndUserIp;
        $HotelCode = $request->HotelCode;
        $RoomIndex = $request->RoomIndex;
        $RoomTypeName = $request->RoomTypeName;
        $RoomTypeCode = $request->RoomTypeCode;
        $RatePlanCode = $request->RatePlanCode;
        $SmokingPreference = $request->SmokingPreference;
        $CurrencyCode = $request->CurrencyCode;
        $RoomPrice = $request->RoomPrice;
        $Tax = $request->Tax;
        $ExtraGuestCharge = $request->ExtraGuestCharge;
        $ChildCharge = $request->ChildCharge;
        $OtherCharges = $request->OtherCharges;
        $Discount = $request->Discount;
        $PublishedPrice = $request->PublishedPrice;
        $PublishedPriceRoundedOff = $request->PublishedPriceRoundedOff;
        $OfferedPrice = $request->OfferedPrice;
        $OfferedPriceRoundedOff = $request->OfferedPriceRoundedOff;
        $AgentCommission = $request->AgentCommission;
        $AgentMarkUp = $request->AgentMarkUp;
        $TDS = $request->TDS;
        $ServiceTax = $request->ServiceTax;
     // Room Block  API
$search = 'http://api.tektravels.com/BookingEngineService_Hotel/hotelservice.svc/rest/BlockRoom/'; // Replace with the actual flight search endpoint
$json1='{
  "ResultIndex": "'.$ResultIndex.'",
  "HotelCode": "'.$HotelCode.'",
  "HotelName": "'.$Hotelname.'",
  "GuestNationality": "IN",
  "NoOfRooms": "1",
  "ClientReferenceNo": "0",
  "IsVoucherBooking": "true",
  "HotelRoomsDetails": [
    {
      "RoomIndex": "'.$RoomIndex.'",
      "RoomTypeCode": "'.$RoomTypeCode.'",
      "RoomTypeName": "'.$RoomTypeName.'",
      "RatePlanCode": "'.$RatePlanCode.'",
      "BedTypeCode": null,
      "SmokingPreference": 0,
      "Supplements": null,
      "Price": {
        "CurrencyCode": "'.$CurrencyCode.'",
        "RoomPrice": "'.$RoomPrice.'",
        "Tax": "'.$Tax.'",
        "ExtraGuestCharge": "'.$ExtraGuestCharge.'",
        "ChildCharge": "'.$ChildCharge.'",
        "OtherCharges": "'.$OtherCharges.'",
        "Discount": "'.$Discount.'",
        "PublishedPrice": "'.$PublishedPrice.'",
        "PublishedPriceRoundedOff": "'.$PublishedPriceRoundedOff.'",
        "OfferedPrice": "'.$OfferedPrice.'",
        "OfferedPriceRoundedOff": "'.$OfferedPriceRoundedOff.'",
        "AgentCommission": "'.$AgentCommission.'",
        "AgentMarkUp": "'.$AgentMarkUp.'",
        "ServiceTax":"'.$ServiceTax.'",
        "TDS": "'.$TDS.'"
      }
    }
  ],
  "EndUserIp": "'.$EndUserIp.'",
  "TokenId": "'.$token_id.'",
  "TraceId": "'.$TraceId.'"
}'; 
$ch = curl_init($search);
$payload1 = $json1;
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$ss = curl_exec($ch);
$ress = json_decode($ss);   
//  print_r($ress);die;
        return view('flight/room-booking' ,compact('AgentMarkUp','ResultIndex','Hotelname','TraceId','token_id','EndUserIp','HotelCode','RoomIndex','RoomTypeName','RoomTypeCode','RatePlanCode','SmokingPreference','CurrencyCode','RoomPrice','Tax','ExtraGuestCharge','ChildCharge','OtherCharges','Discount','PublishedPrice','PublishedPriceRoundedOff','OfferedPrice','OfferedPriceRoundedOff','AgentCommission','TDS','ServiceTax')
       );
    }        
    // Booking API 
public function room_book_confirm(Request $request)
    {
        $name = session()->get('fname');
        $lname = session()->get('lname');
        $email = session()->get('email');
        $mobile = session()->get('mobile');
        
        $ResultIndex = session()->get('ResultIndex');
        $Hotelname = session()->get('Hotelname');
        $TraceId = session()->get('TraceId');
        $token_id = session()->get('token_id');
        $EndUserIp = session()->get('EndUserIp');
        $HotelCode = session()->get('HotelCode');
        $RoomIndex = session()->get('RoomIndex');
        $RoomTypeName = session()->get('RoomTypeName');
        $RoomTypeCode = session()->get('RoomTypeCode');
        $RatePlanCode = session()->get('RatePlanCode');
        $SmokingPreference = session()->get('SmokingPreference');
        $CurrencyCode = session()->get('CurrencyCode');
        $RoomPrice = session()->get('RoomPrice');
        $Tax = session()->get('Tax');
        $ExtraGuestCharge = session()->get('ExtraGuestCharge');
        $ChildCharge = session()->get('ChildCharge');
        $OtherCharges = session()->get('OtherCharges');
        $Discount = session()->get('Discount');
        $PublishedPrice = session()->get('PublishedPrice');
        $PublishedPriceRoundedOff = session()->get('PublishedPriceRoundedOff');
        $OfferedPrice = session()->get('OfferedPrice');
        $OfferedPriceRoundedOff = session()->get('OfferedPriceRoundedOff');
        $AgentCommission = session()->get('AgentCommission');
        $AgentMarkUp = session()->get('AgentMarkUp');
        $TDS = session()->get('TDS');
        $ServiceTax = session()->get('ServiceTax');
     // Room Block  API
$search = 'http://api.tektravels.com/BookingEngineService_Hotel/hotelservice.svc/rest/Book/'; // Replace with the actual flight search endpoint
$json1='{
  "ResultIndex": "'.$ResultIndex.'",
  "HotelCode": "'.$HotelCode.'",
  "HotelName": "'.$Hotelname.'",
  "GuestNationality": "IN",
  "NoOfRooms": "1",
  "ClientReferenceNo": "0",
  "IsVoucherBooking": "true",
  "HotelRoomsDetails": [
    {
      "RoomIndex": "'.$RoomIndex.'",
      "RoomTypeCode": "'.$RoomTypeCode.'",
      "RoomTypeName": "'.$RoomTypeName.'",
      "RatePlanCode": "'.$RatePlanCode.'",
      "BedTypeCode": null,
      "SmokingPreference": 0,
      "Supplements": null,
      "Price": {
        "CurrencyCode": "'.$CurrencyCode.'",
        "RoomPrice": "'.$RoomPrice.'",
        "Tax": "'.$Tax.'",
        "ExtraGuestCharge": "'.$ExtraGuestCharge.'",
        "ChildCharge": "'.$ChildCharge.'",
        "OtherCharges": "'.$OtherCharges.'",
        "Discount": "'.$Discount.'",
        "PublishedPrice": "'.$PublishedPrice.'",
        "PublishedPriceRoundedOff": "'.$PublishedPriceRoundedOff.'",
        "OfferedPrice": "'.$OfferedPrice.'",
        "OfferedPriceRoundedOff": "'.$OfferedPriceRoundedOff.'",
        "AgentCommission": "'.$AgentCommission.'",
        "AgentMarkUp": "'.$AgentMarkUp.'",
        "ServiceTax":"'.$ServiceTax.'",
        "TDS": "'.$TDS.'"
     },
      "HotelPassenger": [
        {
          "Title": "mr",
          "FirstName": "'.$name.'",
          "Middlename": null,
          "LastName": "'.$lname.'",
          "Phoneno": "'.$mobile.'",
          "Email": "'.$email.'",
          "PaxType": 1,
          "LeadPassenger": true,
          "Age": 0,
          "PassportNo": null,
	      "PAN": "EBQPS3333T"
        }
      ]
    }
  ],
  "EndUserIp": "'.$EndUserIp.'",
  "TokenId": "'.$token_id.'",
  "TraceId": "'.$TraceId.'"
}'; 
$ch = curl_init($search);
$payload1 = $json1;
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$ss = curl_exec($ch);
$ress = json_decode($ss);  
// foreach($ress as $res){
if($ress){
if($ress->BookResult->HotelBookingStatus){
$data = array();
            $data['name']= $name;
			$data['lname']= $lname;
			$data['email']=$email;
			$data['mobile']=$mobile;
			$data['booking_status'] = $ress->BookResult->HotelBookingStatus;
			$data['confimation_no'] = $ress->BookResult->ConfirmationNo;
			$data['booking_id'] = $ress->BookResult->BookingId;
			$data['user_id'] = session()->get('user_id');
// 			print_r($data);die;
			$contact_id = Hotel_Model::create($data);
//  print_r($ress);die;
}
}
        return view('flight/hotel-confirm' ,compact('ress'));
    }    
     public function get_hotel_details()
    {
        $flight = Hotel_Model::get();
        return view('flight/admin/db-vender-flight',compact('flight'));
    }
     public function city_details(Request $request)
    {
       $data['states'] = Hotel_City_Model::where('name',$request->country_id )
                                //  ->orWhere('AIRPORTCODE', $request->country_id )
                                ->get(["city_id"]);
  
        return response()->json($data);
    }
     public function preparePayment(Request $request)
    {   
        
     session()->put('fname',$request->name);
     session()->put('lname',$request->lname);
     session()->put('email',$request->email);
     session()->put('mobile',$request->mobile);
     session()->put('payment_type',$request->payment);
   $amount = session()->put('payment',$request->amount1); 
//   Easybuzz Payment
   if($request->payment =='easybuzz'){
       $BaseFare = session()->get('RoomPrice');
       $Tax = session()->get('Tax');
        $amount = $BaseFare + $Tax;
       $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $pin = mt_rand(1000000, 9999999)
                    . mt_rand(1000000, 9999999)
                    . $characters[rand(0, strlen($characters) - 1)];
                        $string = str_shuffle($pin);
                        
                session()->put('paymentID',$string);        
        //     $MERCHANT_KEY = "PQALG4XZKO";
        // $SALT = "5DZAN1HXJQ";        
        // $ENV = "test";   // set enviroment name : test / development / production
        
        // $easebuzzObj = new PayWithEasebuzzLib($MERCHANT_KEY, $SALT, $ENV);    
        // // print_r($easebuzzObj);die;
        $postData = array ( 
    "txnid" => $string, 
    "amount" => $amount,  
    "firstname" => $request->name, 
    "email" => $request->email, 
    "phone" => $request->mobile, 
    "productinfo" => "Flight", 
    "surl" => url('room_book_confirm'), 
    "furl" => url('room_book_confirm'),  
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
                "redirectUrl" => url('room_book_confirm'), 
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
      $BaseFare = session()->get('RoomPrice');
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
                    session()->put('PaymentID',$string);
                    //   return redirect()->back()->with('message',"Payment Success...");
                  return redirect()->url('room_book_confirm');
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
}    