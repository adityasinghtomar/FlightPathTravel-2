<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel_Model;
use App\FileStatus_Model;
use App\UserDetails_Model;
use Illuminate\Support\Facades\Http;

class HotelController extends Controller
{
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


        return view('flight/hotel-search-list',compact('data','token_id'));
    }
   
    public function hotel_search(Request $request)
    {
        
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
  "CityId": "'.$request->Destination.'",
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

$token_id = $result->TokenId;
    // print_r($ress);die;    
        return view('flight/hotel-search-list',compact('ress','token_id','data'));
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
        $name = $request->name;
        $lname = $request->lname;
        $email = $request->email;
        $mobile = $request->mobile;
        
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

        return view('flight/hotel-confirm' ,compact('ress'));
    }    
     public function get_hotel_details()
    {
        $flight = Hotel_Model::get();
        return view('flight/admin/db-vender-flight',compact('flight'));
    }
}    