<?php

namespace App\Http\Controllers;

use Mail; 

use DateTime;

use App\Api_Model;

use App\Hotel_Model;

use App\Markup_Model;

use App\Mail\DemoMail;

use Easebuzz\Easebuzz;

use GuzzleHttp\Client;

use App\HotelBookticket;

use App\Hotel_City_Model;

use App\UserDetails_Model;

use App\Hotel_Details_Model;

use Illuminate\Http\Request;

use App\API_credential_Model;
use Illuminate\Support\Facades\DB;
use Mollie\Laravel\Facades\Mollie;

use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\Config;

use Illuminate\Support\Facades\Artisan;
use Stevebauman\Location\Facades\Location;
use Easebuzz\PayWithEasebuzzLaravel\PayWithEasebuzzLib;

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

// print_r($result);die;

// Country

$search13 = 'http://api.tektravels.com/SharedServices/SharedData.svc/rest/CountryList'; // Replace with the actual flight search endpoint

$json123='{ 

"TokenId": "'.$result->TokenId.'",

"ClientId": "ApiIntegrationNew",

"EndUserIp": "192.168.11.120",

}'; 

$ch = curl_init($search13);

$payload123 = $json123;

curl_setopt($ch, CURLOPT_POSTFIELDS, $payload123);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$ss3 = curl_exec($ch);

$ress3 = json_decode($ss3);

$xmldata = simplexml_load_string($ress3->CountryList);

 

// Encode this xml data into json 

// using json_encode function

$jsondata = json_encode($xmldata);

 $userData = json_decode($jsondata, true); 

// Display json data

foreach($userData as $userDatas){

    foreach($userDatas as $userDatass){

        // Hotel city

$search1 = 'http://api.tektravels.com/SharedServices/StaticData.svc/rest/GetDestinationSearchStaticData'; // Replace with the actual flight search endpoint

$json12='{ 

"EndUserIp": "192.168.11.120",

"TokenId": "'.$result->TokenId.'",

"CountryCode" :"'.$userDatass['Code'].'",

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

if(isset($ress->Destinations)){

$data = $ress->Destinations;

foreach($data as $state_){

    

    $DestinationId =$state_->DestinationId;

    $CityName = $state_->CityName;

    $CountryCode = $state_->CountryCode;

    $CountryName = $state_->CountryName;

    $StateProvince = $state_->StateProvince;

    

     $user = new Hotel_City_Model;

			 $user->name = $CityName;

              $user->city_id = $DestinationId;

              $user->CountryCode = $CountryCode;

              $user->CountryName = $CountryName;

              $user->StateProvince = $StateProvince;

                $user->save();

                

    

}

    print_r($userDatass['Code']); echo "<br>";

}

}

}

// print_r($userData);

die; 

// Hotel city

$search1 = 'http://api.tektravels.com/SharedServices/StaticData.svc/rest/GetDestinationSearchStaticData'; // Replace with the actual flight search endpoint

$json12='{ 

"EndUserIp": "192.168.11.120",

"TokenId": "'.$result->TokenId.'",

"CountryCode" :"IO",

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

foreach($data as $state_){

    

    $DestinationId =$state_->DestinationId;

    $CityName = $state_->CityName;

    $CountryCode = $state_->CountryCode;

    $CountryName = $state_->CountryName;

    $StateProvince = $state_->StateProvince;

    

     $user = new Hotel_City_Model;

			 $user->name = $CityName;

              $user->city_id = $DestinationId;

              $user->CountryCode = $CountryCode;

              $user->CountryName = $CountryName;

              $user->StateProvince = $StateProvince;

                $user->save();

                

    

}

$form_status1 ="hotel_form";

print_r("done");die;

        // return view('flight/hotel-search-list',compact('data','token_id','form_status1'));

    }

    public function getCityList(Request $request)
    {
      	$searchText = $request->get('searchText');
      	$columns = 'name';
      
      	return DB::table('hotel_city')->whereRaw("MATCH ({$columns}) AGAINST (? IN BOOLEAN MODE)", $this->fullTextWildcards($searchText))->select('name','city_id')->get()->toArray();
      	
    }

    protected function fullTextWildcards($term)
   	{
       // removing symbols used by MySQL
       $reservedSymbols = ['-', '+', '<', '>', '@', '(', ')', '~'];
       $term = str_replace($reservedSymbols, '', $term);

       $words = explode(' ', $term);

       foreach ($words as $key => $word) {
           /*
            * applying + operator (required word) only big words
            * because smaller ones are not indexed by mysql
            */
           if (strlen($word) >= 1) {
               $words[$key] = '+' . $word  . '*';
           }
       }
       
       $searchTerm = implode(' ', $words);

       return $searchTerm;
   	}
  	public function getHotelLocation(Request $request)
    {
      	$hotelId = $request->get('hotelId');
      
       	$curl = curl_init();
  
        $xmlRequest = "<HotelDetailsRequest>
        <Authentication>
        <AgentCode>CD32740</AgentCode>
        <UserName>FLIGHTPATH</UserName>
        </Authentication>
        <Hotels>
        <HotelId>$hotelId</HotelId>
        </Hotels></HotelDetailsRequest>";

      	curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://test.xmlhub.com/testpanel.php/action/gethoteldetails',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('XML' => $xmlRequest),
        CURLOPT_HTTPHEADER => array(
          'x-api-key:cf7a091744591cadaf9be2d3c1dd1761'
        ),
      ));

      $response = curl_exec($curl);

      curl_close($curl);

      $xml = simplexml_load_string($response);
	  $xml = (array) $xml;
      
      return (string) $xml['Hotels']->HotelAddress;
    }
    public function hotelDetail($hotelId)
    {
        return view('flight.hotel-details');
    }
   
    public function dateFormat($date)
    {
      $date = date_create($date);
      return date_format($date,"d/m/Y");
    }

    public function rezLiveFindHotelAPIResponse($request)
    {
      $ip = $request->ip();
      $client = new Client();
      $response = $client->get("http://ip-api.com/json/{$ip}");
      $data = json_decode($response->getBody(), true);
      $countryCode = Config::get('currency');
      $currencyCode = $countryCode[$data['country']];
      $arrivalDate = $this->dateFormat($request->checkin_date);
      $departureDate = $this->dateFormat($request->checkout_date);

      $curl = curl_init();
      $childCount = $request->child12;
      $i = 0;
      $childAgeRequest = '<ChildrenAges>';
      while ($childCount > $i)
      {
          $childAgeRequest .= '<ChildAge>4</ChildAge>';
          $i++;
      }
      $childAgeRequest .= '</ChildrenAges>';

      $xmlRequest = "<HotelFindRequest><Authentication><AgentCode>CD32740</AgentCode><UserName>FLIGHTPATH</UserName></Authentication><Booking><ArrivalDate>$arrivalDate</ArrivalDate><DepartureDate>$departureDate</DepartureDate><CountryCode>IN</CountryCode><City>$request->city_name</City><GuestNationality>IN</GuestNationality><HotelRatings><HotelRating>3</HotelRating><HotelRating>4</HotelRating><HotelRating>5</HotelRating></HotelRatings><Rooms><Room><Type>Room-1</Type><NoOfAdults>$request->adult12</NoOfAdults><NoOfChilds>$childCount</NoOfChilds>$childAgeRequest</Room></Rooms></Booking></HotelFindRequest>";

      curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://test.xmlhub.com/testpanel.php/action/findhotel',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('XML' => $xmlRequest),
        CURLOPT_HTTPHEADER => array(
          'x-api-key:cf7a091744591cadaf9be2d3c1dd1761'
        ),
      ));

      $response = curl_exec($curl);
      //dd($response);

      curl_close($curl);


      $xml = simplexml_load_string($response);
      $hotels = [];

      $response = (array) $xml->Hotels;
      $sessionId = (string) $xml->SearchSessionId;
      $response = current($response);
      if (!empty($response) && is_array($response))
      {
        foreach($response as $key => $hotel)
        {
            $hotels[$key]['id'] = (string) $hotel->Id;
            $hotels[$key]['name'] = (string) $hotel->Name;
            $hotels[$key]['rating'] = (string) $hotel->Rating;
            $hotels[$key]['thumbImage'] = (string) $hotel->ThumbImages;
            $hotels[$key]['price'] = (string) $hotel->Price;
            $hotels[$key]['hotelWiseRoomCount'] = (string) $hotel->Hotelwiseroomcount;
            $rooms = current($hotel->RoomDetails);
            foreach($rooms as $roomkey => $room)
            {
                $hotels[$key]['room'][$roomkey]['type'] = (string) $room->Type;
                $hotels[$key]['room'][$roomkey]['bookingKey'] = (string) $room->BookingKey;
                $hotels[$key]['room'][$roomkey]['adults'] = (string) $room->Adults;
                $hotels[$key]['room'][$roomkey]['children'] = (string) $room->Children;
                $hotels[$key]['room'][$roomkey]['childrenAges'] = (string) $room->ChildrenAges;
                $hotels[$key]['room'][$roomkey]['totalRooms'] = (string) $room->TotalRooms;
                $hotels[$key]['room'][$roomkey]['totalRate'] = (string) $room->TotalRate;
                $hotels[$key]['room'][$roomkey]['boardBasis'] = (string) $room->BoardBasis;
                $hotels[$key]['room'][$roomkey]['roomDescription'] = (string) $room->RoomDescription;
                $hotels[$key]['room'][$roomkey]['termsAndConditions'] = (string) $room->TermsAndConditions;
                $hotels[$key]['room'][$roomkey]['arrivalDate'] = $arrivalDate;
                $hotels[$key]['room'][$roomkey]['departureDate'] = $departureDate;
                $hotels[$key]['room'][$roomkey]['currencyCode'] = $currencyCode;
                $hotels[$key]['room'][$roomkey]['countryCode'] = $data['countryCode'];
                $hotels[$key]['room'][$roomkey]['cityCode'] = $request->city_name;
                $hotels[$key]['room'][$roomkey]['hotelId'] = (string) $hotel->Id;
                $hotels[$key]['room'][$roomkey]['price'] = (string) $hotel->Price;
                $hotels[$key]['room'][$roomkey]['sessionId'] = (string) $xml->SearchSessionId;
                
            }
        }

      }
     else
     {
       return redirect('/');
     }
        
      $form_status1 ="hotel_form";
      return view('flight.hotel-search-list',compact('hotels','form_status1','sessionId'));
    }

    public function hotel_search(Request $request)
    {
      //Artisan::call('optimize');
        return $this->rezLiveFindHotelAPIResponse($request);

        $api_authentic = Api_Model::where('api_name','Authentic')->where('status','active')->first(); 

        $api_search = Api_Model::where('api_name','Hotel')->where('status','active')->first(); 

        $API_credential = API_credential_Model::where('api_name','Flight')->where('status','active')->first();

        $form_status = $request->form_status;    

        $city_name = $request->city_name;   

        $checkin_date = $request->checkin_date;

        $checkout_date =$request->checkout_date;

        $NoOfRoom =$request->NoOfRoom;

        $adult =$request->adult;

        $datetime1 = new DateTime($checkin_date);

        $datetime2 = new DateTime($checkout_date);

        $interval = $datetime1->diff($datetime2);

        $days = $interval->format('%a');

        $hotel1 =  Hotel_City_Model::where('name',$request->city_name)->first(); 

        if($hotel1)
        {

            $city_id = $hotel1->city_id ;

            $CountryCode =$hotel1->CountryCode;

            $date =\Carbon\Carbon::createFromFormat('Y-m-d', $request->checkin_date)->format('d/m/Y');

            // Authenticate API

            $endpoint = "$api_authentic->api/rest/Authenticate"; // Replace with the actual flight search endpoint

            $url = $endpoint;

            $json='{

                      "ClientId": "'.$API_credential->ClientId.'",

                      "UserName": "'.$API_credential->UserName.'",

                      "Password": "'.$API_credential->Password.'", 

                      "EndUserIp": "'.$API_credential->EndUserIp.'"

                      }';

            $ch = curl_init($url);
                                
            $data =$json;
                                
            $payload = $json;
                                
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
                                
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
                                
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                
            $result1 = curl_exec($ch);
                                
            $result = json_decode($result1);
                                
            // Hotel Search API

            $search = "$api_search->api/rest/GetHotelResult/"; // Replace with the actual flight search endpoint

            // print_r($search);die;

            $json1='{ 

                      "CheckInDate": "'.$date.'",

                      "NoOfNights": "'.$days.'",

                      "CountryCode": "'.$CountryCode.'",

                      "CityId": "'.$city_id.'",

                      "ResultCount": null,

                      "PreferredCurrency": "INR",

                      "GuestNationality": "IN",

                      "NoOfRooms": "1",

                      "RoomGuests": [

                       {

                         "NoOfAdults": "'.$adult.'",

                         "NoOfChild": 0,

                         "ChildAge": null     

                       }

                        ],
                      
                        "MaxRating": 5,
                      
                        "MinRating": 3,
                      
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

            $NoOfNights ="4";

            $form_status1 ="hotel_form";

            $token_id = $result->TokenId;

          //  print_r($ress);die;    

        return view('flight/hotel-search-list',compact('adult','NoOfNights','form_status1','form_status','ress','token_id','data' ,'city_name','checkin_date','checkout_date','NoOfRoom'));

    

}else{

        return redirect()->back()->with('success', 'Data Not Found'); 

    }

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

    public function rezLiveHotelDetailsAPIResponse($request)
    {
      $request = $request->all();
      $hotelId = $request['hotelId'];
      $sessionId = $request['sessionId'];
      $rooms = json_decode($request['room'] , true);

      $curl = curl_init();
  
      $xmlRequest = "<HotelDetailsRequest>
      <Authentication>
      <AgentCode>CD32740</AgentCode>
      <UserName>FLIGHTPATH</UserName>
      </Authentication>
      <Hotels>
      <SearchSessionId>$sessionId</SearchSessionId>
      <HotelId>$hotelId</HotelId>
      </Hotels></HotelDetailsRequest>";

      curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://test.xmlhub.com/testpanel.php/action/gethoteldetails',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('XML' => $xmlRequest),
        CURLOPT_HTTPHEADER => array(
          'x-api-key:cf7a091744591cadaf9be2d3c1dd1761'
        ),
      ));

      $response = curl_exec($curl);

      curl_close($curl);


      $xml = simplexml_load_string($response);
      $hotelsDetails = [];

      $response = (array) $xml;
      $response = current($response);
      $hotelsDetails['hotelId'] = (string) $response->HotelId;
      $hotelsDetails['hotelName'] = (string) $response->HotelName;
      $hotelsDetails['location'] = (string) $response->Location;
      $hotelsDetails['telephone'] = (string) $response->Telephone;
      $hotelsDetails['website'] = (string) $response->Website;
      $hotelsDetails['rating'] = (string) $response->Rating;
      $hotelsDetails['cityCode'] = (string) $response->CityCode;
      $hotelsDetails['city'] = (string) $response->City;
      $hotelsDetails['country'] = (string) $response->Country;
      $hotelsDetails['countryCode'] = (string) $response->CountryCode;
      $hotelsDetails['phone'] = (string) $response->Phone;
      $hotelsDetails['email'] = (string) $response->Email;
      $hotelsDetails['mainImage'] = (string) $response->MainImage;
      $hotelsDetails['description'] = (string) $response->Description;
      $hotelsDetails['hotelAddress'] = (string) $response->HotelAddress;
      $hotelsDetails['latitude'] = (string) $response->Latitude;
      $hotelsDetails['longitude'] = (string) $response->Longitude;
      $hotelsDetails['hotelPostalCode'] = (string) $response->HotelPostalCode;
      $hotelsDetails['hotelAmenities'] = (string) $response->HotelAmenities;
      $hotelsDetails['roomAmenities'] = (string) $response->RoomAmenities;
      $hotelsDetails['sessionId'] = $sessionId;

      return view('flight.room-details',compact('hotelId','rooms','hotelsDetails'));
    }

 public function room_information(Request $request)
    {
        return $this->rezLiveHotelDetailsAPIResponse($request);
        
        $adult =$request->adult;

          $api_search = Api_Model::where('api_name','Hotel')->where('status','active')->first();

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

$search_info = "$api_search->api/rest/GetHotelInfo/"; // Replace with the actual flight search endpoint

$json_info='{

  "ResultIndex": "'.$request->ResultIndex.'",

  "HotelCode": "'.$request->HotelCode.'",

  "EndUserIp": "'.$request->EndUserIp.'",

  "TokenId": "'.$request->token_id.'",

  "TraceId": "'.$request->TraceId.'"

}'; 

$ch = curl_init($search_info);

$payload_info = $json_info;

curl_setopt($ch, CURLOPT_POSTFIELDS, $payload_info);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$ss_info = curl_exec($ch);

$ress_info = json_decode($ss_info);         

     // Hotel Get Room API

$search = "$api_search->api/rest/GetHotelRoom/"; // Replace with the actual flight search endpoint

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

        return view('flight/room-details',compact('adult','ress_info','ress','image','Hotelname','StarRating','Hoteladdress','ResultIndex','TraceId','token_id','EndUserIp','HotelCode'));

    }    

    // Room Block API 

    public function rezLiveHotelPreBookingAPIResponse($request)
    {
      $request = $request->all();
      $hotelName = $request['hotelName'];
      $arrivalDate = $request['ArrivalDate'];
      $departureDate = $request['DepartureDate'];
      $guestNationality = $request['GuestNationality'];
      $countryCode = $request['CountryCode'];
      $cityCode = $request['CityCode'];
      $hotelId = $request['HotelId'];
      $price = $request['Price'];
      $currency = $request['Currency'];
      $type = $request['Type'];
      $bookingKey = $request['BookingKey'];
      $adults = $request['Adults'];
      $children = $request['Children'];
      $childrenAges = $request['ChildrenAges'];
      $totalRooms = $request['TotalRooms'];
      $totalRate = $request['TotalRate'];
      $sessionId = $request['sessionId'];
      
      $xmlRequest = "<PreBookingRequest>
      <Authentication>
      <AgentCode>CD32740</AgentCode>
      <UserName>FLIGHTPATH</UserName>
      </Authentication>
      <PreBooking>
      <SearchSessionId>$sessionId</SearchSessionId>
      <ArrivalDate>$arrivalDate</ArrivalDate>
      <DepartureDate>$departureDate</DepartureDate>
      <GuestNationality>$guestNationality</GuestNationality>
      <CountryCode>$countryCode</CountryCode>
      <City>$cityCode</City>
      <HotelId>$hotelId</HotelId>
      <Price>$price</Price>
      <Currency>$currency</Currency>
      <RoomDetails>
      <RoomDetail>
      <Type>
         $type
      </Type>
      <BookingKey>$bookingKey</BookingKey>
      <Adults>$adults</Adults>
      <Children>$children</Children>
      <ChildrenAges>$childrenAges</ChildrenAges>
      <TotalRooms>$totalRooms</TotalRooms>
      <TotalRate>$totalRate</TotalRate>
      <TermsAndConditions/>
      </RoomDetail>
      </RoomDetails>
      </PreBooking>
      </PreBookingRequest>";

      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://test.xmlhub.com/testpanel.php/action/prebook',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('XML' => $xmlRequest),
        CURLOPT_HTTPHEADER => array(
          'x-api-key:cf7a091744591cadaf9be2d3c1dd1761'
        ),
      ));

      $response = curl_exec($curl);

      curl_close($curl);


      $xml = simplexml_load_string($response);
      $preBooking = [];
      $preBookingRequest = (array) $xml->PreBookingRequest;
      $preBookingDetails = (array) $xml->PreBookingDetails;

      if (isset($preBookingDetails['Status']) && $preBookingDetails['Status'])
      {
          $roomDetails = (array) $preBookingRequest['PreBooking']->RoomDetails;
          $cancellationInformations = $preBookingRequest['PreBooking']->CancellationInformations;
          $info = $cancellationInformations->Info;
          $roomDetails = current($roomDetails);

          $preBooking['hotelName'] = $hotelName;
          $preBooking['arrivalDate'] = (string) $preBookingRequest['PreBooking']->ArrivalDate;
          $preBooking['departureDate'] = (string) $preBookingRequest['PreBooking']->DepartureDate;
          $preBooking['guestNationality'] = (string) $preBookingRequest['PreBooking']->GuestNationality;
          $preBooking['countryCode'] = (string) $preBookingRequest['PreBooking']->CountryCode;
          $preBooking['cityCode'] = (string) $preBookingRequest['PreBooking']->City;
          $preBooking['hotelId'] = (string) $preBookingRequest['PreBooking']->HotelId;
          $preBooking['price'] = (string) $preBookingRequest['PreBooking']->Price;
          $preBooking['currency'] = (string) $preBookingRequest['PreBooking']->Currency;
          $preBooking['sessionId'] = (string) $preBookingRequest['PreBooking']->SearchSessionId;

          $preBooking['roomDetails']['type'] = (string) $roomDetails->Type;
          $preBooking['roomDetails']['bookingKey'] = (string) $roomDetails->BookingKey;
          $preBooking['roomDetails']['adults'] = (string) $roomDetails->Adults;
          $preBooking['roomDetails']['children'] = (string) $roomDetails->Children;
          $preBooking['roomDetails']['childrenAges'] = (string) $roomDetails->ChildrenAges;
          $preBooking['roomDetails']['totalRooms'] = (string) $roomDetails->TotalRooms;
          $preBooking['roomDetails']['totalRate'] = (string) $roomDetails->TotalRate;
          $termsAndConditions = (string) $roomDetails->TermsAndConditions;

          $termsAndConditions = htmlentities($termsAndConditions);
          $termsAndConditions = html_entity_decode($termsAndConditions);
          $termsAndConditions = html_entity_decode($termsAndConditions);
          $termsAndConditions = html_entity_decode($termsAndConditions);
    
          $termsAndConditions = preg_replace('/<br>/', "\n", $termsAndConditions);

          
          $i = 0;

          foreach ($cancellationInformations->CancellationInformation as $information)
          {
            $preBooking['cancellation'][$i]['StartDate'] = (string) $information->StartDate;
            $preBooking['cancellation'][$i]['EndDate'] = (string)  $information->EndDate;
            $preBooking['cancellation'][$i]['ChargeType'] = (string)  $information->ChargeType;
            $preBooking['cancellation'][$i]['ChargeAmount'] = (string)  $information->ChargeAmount;
            $preBooking['cancellation'][$i]['Currency'] = (string)  $information->Currency;
            $preBooking['cancellation'][$i]['info'] = (string)  $info;
            $i++;
          }
          //dd($preBookingRequest,$preBookingDetails , $preBooking,$termsAndConditions , $info);
          return view('flight.room-booking' ,compact('preBooking','termsAndConditions','info'));
      }

      $warning = ['message'=> 'This Room Is Note Available for now'];
      return view('flight.room-details',compact('warning'));
     
    }

    public function termsAndConditions(Request $request)
    {
      $termsAndConditions = $request->query('termsAndConditions');
      $cancellation = $request->query('cancellation');
      $info = $request->query('info');

      return view('flight.terms', compact('termsAndConditions','cancellation','info'));
    }
 public function room_book_now(Request $request)
    {
        return $this->rezLiveHotelPreBookingAPIResponse($request);
        
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

        $adult = $request->adult;

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

          $api_search = Api_Model::where('api_name','Hotel')->where('status','active')->first();

        

     // Room Block  API

$search = "$api_search->api/rest/BlockRoom/"; // Replace with the actual flight search endpoint

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

        return view('flight/room-booking' ,compact('adult','ress','AgentMarkUp','ResultIndex','Hotelname','TraceId','token_id','EndUserIp','HotelCode','RoomIndex','RoomTypeName','RoomTypeCode','RatePlanCode','SmokingPreference','CurrencyCode','RoomPrice','Tax','ExtraGuestCharge','ChildCharge','OtherCharges','Discount','PublishedPrice','PublishedPriceRoundedOff','OfferedPrice','OfferedPriceRoundedOff','AgentCommission','TDS','ServiceTax')

       );

    }        

    // Booking API 
    public function roomBookRezliveApi($request)
    {
      return $this->preparePayment($request);
    }
public function room_book_confirm(Request $request)
    {

      return $this->roomBookRezliveApi($request);

        $data='fvdffgdfgfg';

        

        //     $postData = session()->get('payment');

  print_r($data);die;

         $transaction_id = $request->input('order_id');

         print_r($transaction_id);die;

        $ticket = HotelBookticket::where('transaction_id', $transaction_id)->firstOrFail();

        if($ticket)

        {

            

        }

        

      

        $name = $ticket->name;

        $lname = $ticket->lname;

        $email = $ticket->email;

        $mobile = $ticket->mobile;

        

        $ResultIndex = $ticket->ResultIndex;

        $Hotelname = $ticket->Hotelname;

        $TraceId = $ticket->TraceId;

        $token_id = $ticket->token_id;

        $EndUserIp = $ticket->EndUserIp;

        $HotelCode = $ticket->HotelCode;

        $RoomIndex = $ticket->RoomIndex;

        $RoomTypeName = $ticket->RoomTypeName;

        $RoomTypeCode = $ticket->RoomTypeCode;

        $RatePlanCode = $ticket->RatePlanCode;

        $SmokingPreference = $ticket->SmokingPreference;

        $CurrencyCode = $ticket->CurrencyCode;

        $RoomPrice = $ticket->RoomPrice;

        $Tax = $ticket->Tax;

        $ExtraGuestCharge = $ticket->ExtraGuestCharge;

        $ChildCharge = $ticket->ChildCharge;

        $OtherCharges = $ticket->OtherCharges;

        $Discount = $ticket->Discoun;

        $PublishedPrice = $ticket->PublishedPrice;

        $PublishedPriceRoundedOff = $ticket->PublishedPriceRoundedOff;

        $OfferedPrice = $ticket->OfferedPrice;

        $OfferedPriceRoundedOff = $ticket->OfferedPriceRoundedOff;

        $AgentCommission = $ticket->AgentCommission;

        $AgentMarkUp = $ticket->AgentMarkUp;

        $TDS = $ticket->TDS;

        $ServiceTax = $ticket->ServiceTax;

        

         $fnames_array = explode(',', $ticket->name);

    $lnames_array = explode(',', $ticket->lname);



    

        

        

        // print_r($ticket);die;

        // $name = session()->get('fname');

        // $lname = session()->get('lname');

        // $email = session()->get('email');

        // $mobile = session()->get('mobile');

        

        // $ResultIndex = session()->get('ResultIndex');

        // $Hotelname = session()->get('Hotelname');

        // $TraceId = session()->get('TraceId');

        // $token_id = session()->get('token_id');

        // $EndUserIp = session()->get('EndUserIp');

        // $HotelCode = session()->get('HotelCode');

        // $RoomIndex = session()->get('RoomIndex');

        // $RoomTypeName = session()->get('RoomTypeName');

        // $RoomTypeCode = session()->get('RoomTypeCode');

        // $RatePlanCode = session()->get('RatePlanCode');

        // $SmokingPreference = session()->get('SmokingPreference');

        // $CurrencyCode = session()->get('CurrencyCode');

        // $RoomPrice = session()->get('RoomPrice');

        // $Tax = session()->get('Tax');

        // $ExtraGuestCharge = session()->get('ExtraGuestCharge');

        // $ChildCharge = session()->get('ChildCharge');

        // $OtherCharges = session()->get('OtherCharges');

        // $Discount = session()->get('Discount');

        // $PublishedPrice = session()->get('PublishedPrice');

        // $PublishedPriceRoundedOff = session()->get('PublishedPriceRoundedOff');

        // $OfferedPrice = session()->get('OfferedPrice');

        // $OfferedPriceRoundedOff = session()->get('OfferedPriceRoundedOff');

        // $AgentCommission = session()->get('AgentCommission');

        // $AgentMarkUp = session()->get('AgentMarkUp');

        // $TDS = session()->get('TDS');

        // $ServiceTax = session()->get('ServiceTax');

     // Room Block  API

       $api_search = Api_Model::where('api_name','Hotel')->where('status','active')->first();

    //   $itemCount = count(session()->get('fname'));

     $itemCount = $ticket->name;

        // print_r($name[]);die;

         $results = [];

foreach ($fnames_array as $index => $lname) {

    $results[] = [

          "Title"=> "mr",

          "FirstName"=> $lname,

          "Middlename"=> null,

          "LastName"=> $lnames_array[$index],

          "Phoneno"=> $mobile,

          "Email"=> $email,

          "PaxType"=> 1,

          "LeadPassenger"=> true,

          "Age"=> 0,

          "PassportNo"=> null,

	      "PAN"=> "EBQPS3333T"

    ];

}

$sto = json_encode($results);     



$search = "$api_search->api/rest/Book/"; // Replace with the actual flight search endpoint

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

                    "AgentMarkUp": 0.00,

                    "ServiceTax": "'.$ServiceTax.'",

                    "TDS": "'.$TDS.'"

                          },

      "HotelPassenger": '.$sto.'

    }

  ],

  "EndUserIp": "192.168.11.120",

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

// foreach($ress as $res){

if($ress){

if($ress->BookResult->HotelBookingStatus){

    $mark_up= Markup_Model::where('name','hotel')->where('status','active')->first();

                                 

                                if($mark_up) { 

                                            if($mark_up->markup_type =='fixed'){

                                                $mark_up->markup_amount;

                                                $subtotal= $Tax + $OfferedPriceRoundedOff + $mark_up->markup_amount;

                                            }

                                            else {

                                                $subtotal1= $Tax + $OfferedPriceRoundedOff ;

                                              $percentage = ($mark_up->markup_amount / 100) * $subtotal1; 

                                              $subtotal= $subtotal1 + $percentage;

                                           //   echo $percentage;

                                            }

                                }

                                 else {

                                                $subtotal= $Tax + $OfferedPriceRoundedOff ;

                                           //   echo $percentage;

                                            }

$data = array();

            $data['amount']= $OfferedPriceRoundedOff;

            $data['name']= $name[0];

			$data['lname']= $lname[0];

			$data['email']=$email;

			$data['mobile']=$mobile;

			$data['markup_amount']=$subtotal;

			$data['booking_status'] = $ress->BookResult->HotelBookingStatus;

			$data['confimation_no'] = $ress->BookResult->ConfirmationNo;

			$data['booking_id'] = $ress->BookResult->BookingId;

			$data['user_id'] = session()->get('user_id');

// 			print_r($data);die;

			$contact_id = Hotel_Model::create($data);

//  print_r($ress);die;

            $data = ['booking_id' =>$ress->BookResult->BookingId, 'confimation_no'=>$ress->BookResult->ConfirmationNo ,'amount'=>$OfferedPriceRoundedOff ,'mobile'=>$mobile,'fname'=>$name[0],'lname'=>$lname[0], ];

            $user['to'] = $email;

        Mail::send('hotel_mail',$data,function($messages) use ($user){

            

            $messages->to($user['to']);

            $messages->subject('flight Booking');   

        });

}

}

//   print_r($ress);die;

        return view('flight/hotel-confirm' ,compact('ress'));

    }   

    

    public function room_book_confirmmolie(Request $request)
    {
      $bookingData = session()->get('hotel_booking_data');
      $apiResponse = $this->rezLiveHotelBookingAPIResponse($bookingData);
      session()->forget('hotel_booking_data');

      if (is_array($apiResponse) && isset($apiResponse['BookingDetails']) && $apiResponse['BookingDetails']->BookingStatus == 'Rejected')
      {
        dd((string) $apiResponse['BookingDetails']->BookingReason);
      }
      if (isset($response['head']))
      {
          return redirect()->back()->with('warning', 'Something went wrong..');
      }
      //dd($apiResponse);
      $ress = [];
      return view('flight.hotel-confirm' ,compact('apiResponse'));
      

         $transaction_id = session()->get('paymentID');



        $ticket = HotelBookticket::where('transaction_id', $transaction_id)->firstOrFail();

        if($ticket)

        {

            

        }

        

      

             $name = $ticket->name;

        $lname = $ticket->lname;

        $email = $ticket->email;

        $mobile = $ticket->mobile;

        

        $ResultIndex = $ticket->ResultIndex;

        $Hotelname = $ticket->Hotelname;

        $TraceId = $ticket->TraceId;

        $token_id = $ticket->token_id;

        $EndUserIp = $ticket->EndUserIp;

        $HotelCode = $ticket->HotelCode;

        $RoomIndex = $ticket->RoomIndex;

        $RoomTypeName = $ticket->RoomTypeName;

        $RoomTypeCode = $ticket->RoomTypeCode;

        $RatePlanCode = $ticket->RatePlanCode;

        $SmokingPreference = $ticket->SmokingPreference;

        $CurrencyCode = $ticket->CurrencyCode;

        $RoomPrice = $ticket->RoomPrice;

        $Tax = $ticket->Tax;

        $ExtraGuestCharge = $ticket->ExtraGuestCharge;

        $ChildCharge = $ticket->ChildCharge;

        $OtherCharges = $ticket->OtherCharges;

        $Discount = $ticket->Discoun;

        $PublishedPrice = $ticket->PublishedPrice;

        $PublishedPriceRoundedOff = $ticket->PublishedPriceRoundedOff;

        $OfferedPrice = $ticket->OfferedPrice;

        $OfferedPriceRoundedOff = $ticket->OfferedPriceRoundedOff;

        $AgentCommission = $ticket->AgentCommission;

        $AgentMarkUp = $ticket->AgentMarkUp;

        $TDS = $ticket->TDS;

        $ServiceTax = $ticket->ServiceTax;

        

         $fnames_array = explode(',', $ticket->name);

    $lnames_array = explode(',', $ticket->lname);



    

        

        

        // print_r($ticket);die;

        // $name = session()->get('fname');

        // $lname = session()->get('lname');

        // $email = session()->get('email');

        // $mobile = session()->get('mobile');

        

        // $ResultIndex = session()->get('ResultIndex');

        // $Hotelname = session()->get('Hotelname');

        // $TraceId = session()->get('TraceId');

        // $token_id = session()->get('token_id');

        // $EndUserIp = session()->get('EndUserIp');

        // $HotelCode = session()->get('HotelCode');

        // $RoomIndex = session()->get('RoomIndex');

        // $RoomTypeName = session()->get('RoomTypeName');

        // $RoomTypeCode = session()->get('RoomTypeCode');

        // $RatePlanCode = session()->get('RatePlanCode');

        // $SmokingPreference = session()->get('SmokingPreference');

        // $CurrencyCode = session()->get('CurrencyCode');

        // $RoomPrice = session()->get('RoomPrice');

        // $Tax = session()->get('Tax');

        // $ExtraGuestCharge = session()->get('ExtraGuestCharge');

        // $ChildCharge = session()->get('ChildCharge');

        // $OtherCharges = session()->get('OtherCharges');

        // $Discount = session()->get('Discount');

        // $PublishedPrice = session()->get('PublishedPrice');

        // $PublishedPriceRoundedOff = session()->get('PublishedPriceRoundedOff');

        // $OfferedPrice = session()->get('OfferedPrice');

        // $OfferedPriceRoundedOff = session()->get('OfferedPriceRoundedOff');

        // $AgentCommission = session()->get('AgentCommission');

        // $AgentMarkUp = session()->get('AgentMarkUp');

        // $TDS = session()->get('TDS');

        // $ServiceTax = session()->get('ServiceTax');

     // Room Block  API

       $api_search = Api_Model::where('api_name','Hotel')->where('status','active')->first();

    //   $itemCount = count(session()->get('fname'));

     $itemCount = $ticket->name;

        // print_r($name[]);die;

         $results = [];

foreach ($fnames_array as $index => $lname) {

    $results[] = [

          "Title"=> "mr",

          "FirstName"=> $lname,

          "Middlename"=> null,

          "LastName"=> $lnames_array[$index],

          "Phoneno"=> $mobile,

          "Email"=> $email,

          "PaxType"=> 1,

          "LeadPassenger"=> true,

          "Age"=> 0,

          "PassportNo"=> null,

	      "PAN"=> "EBQPS3333T"

    ];

}

$sto = json_encode($results);     



$search = "$api_search->api/rest/Book/"; // Replace with the actual flight search endpoint

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

                    "AgentMarkUp": 0.00,

                    "ServiceTax": "'.$ServiceTax.'",

                    "TDS": "'.$TDS.'"

                          },

      "HotelPassenger": '.$sto.'

    }

  ],

  "EndUserIp": "192.168.11.120",

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

// foreach($ress as $res){

if($ress){

if($ress->BookResult->HotelBookingStatus){

    $mark_up= Markup_Model::where('name','hotel')->where('status','active')->first();

                                 

                                if($mark_up) { 

                                            if($mark_up->markup_type =='fixed'){

                                                $mark_up->markup_amount;

                                                $subtotal= $Tax + $OfferedPriceRoundedOff + $mark_up->markup_amount;

                                            }

                                            else {

                                                $subtotal1= $Tax + $OfferedPriceRoundedOff ;

                                              $percentage = ($mark_up->markup_amount / 100) * $subtotal1; 

                                              $subtotal= $subtotal1 + $percentage;

                                           //   echo $percentage;

                                            }

                                }

                                 else {

                                                $subtotal= $Tax + $OfferedPriceRoundedOff ;

                                           //   echo $percentage;

                                            }

$data = array();

            $data['amount']= $OfferedPriceRoundedOff;

            $data['name']= $name[0];

			$data['lname']= $lname[0];

			$data['email']=$email;

			$data['mobile']=$mobile;

			$data['markup_amount']=$subtotal;

			$data['booking_status'] = $ress->BookResult->HotelBookingStatus;

			$data['confimation_no'] = $ress->BookResult->ConfirmationNo;

			$data['booking_id'] = $ress->BookResult->BookingId;

			$data['user_id'] = session()->get('user_id');

// 			print_r($data);die;

			$contact_id = Hotel_Model::create($data);

//  print_r($ress);die;

            $data = ['booking_id' =>$ress->BookResult->BookingId, 'confimation_no'=>$ress->BookResult->ConfirmationNo ,'amount'=>$OfferedPriceRoundedOff ,'mobile'=>$mobile,'fname'=>$name[0],'lname'=>$lname[0], ];

            $user['to'] = $email;

        Mail::send('hotel_mail',$data,function($messages) use ($user){

            

            $messages->to($user['to']);

            $messages->subject('flight Booking');   

        });

}

}

//   print_r($ress);die;

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

    public function rezLiveHotelBookingAPIResponse($request)
    {
        if (empty($request))
        {
          return back();
        }
        $guest = '';
        foreach($request['AdultSalutation'] as $key => $value)
        {
          $firstName = $request['name'][$key];
          $lastName = $request['lname'][$key];
          $guest .= "<Guest><Salutation>$value</Salutation><FirstName>$firstName</FirstName><LastName>$lastName</LastName></Guest>";
        }
        $agentRefNo = rand(1, 100000);
        $curl = curl_init();
        $xmlRequest = "<BookingRequest>
        <Authentication>
        <AgentCode>CD32740</AgentCode>
        <UserName>FLIGHTPATH</UserName>
        </Authentication>
        <Booking>
        <SearchSessionId>".$request['sessionId']."</SearchSessionId>
        <AgentRefNo>$agentRefNo</AgentRefNo>
        <ArrivalDate>".$request['arrivalDate']."</ArrivalDate>
        <DepartureDate>".$request['departureDate']."</DepartureDate>
        <GuestNationality>".$request['guestNationality']."</GuestNationality>
        <CountryCode>".$request['countryCode']."</CountryCode>
        <City>".$request['cityCode']."</City>
        <HotelId>".$request['hotelId']."</HotelId>
        <Name>  
        ".$request['hotelName']."
        </Name><Currency>".$request['currency']."</Currency>
        <RoomDetails>
        <RoomDetail>
        <Type>
        ".$request['type']."
        </Type>
        <BookingKey>".$request['bookingKey']."</BookingKey>
        <Adults>".$request['adults']."</Adults>
        <Children>".$request['children']."</Children>
        <TotalRooms>".$request['totalRooms']."</TotalRooms>
        <TotalRate>".$request['totalRate']."</TotalRate>
        <Guests>
        $guest
        </Guests>
        </RoomDetail>
        </RoomDetails>
        </Booking></BookingRequest>";
		
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'http://test.xmlhub.com/testpanel.php/action/bookhotel',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('XML' => $xmlRequest),
          CURLOPT_HTTPHEADER => array(
            'x-api-key:cf7a091744591cadaf9be2d3c1dd1761'
          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);


        $xml = simplexml_load_string($response);
        $response = (array) $xml;

        return $response;

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

         $fnames = session()->get('fname');

$lnames = session()->get('lname');

if (is_array($fnames) && is_array($lnames)) {

    // Start the session if it's not already started

    if (session_status() !== PHP_SESSION_ACTIVE) {

       

    }



    // Concatenate all first names and last names into comma-separated strings

    $allFnames = implode(',', $fnames);

    $allLnames = implode(',', $lnames);

         $ticket_data = [

         'name' => $allFnames,

        'lname' => $allLnames,

        'email' =>session()->get('email'),

        'mobile' => session()->get('mobile'),

        

        'ResultIndex' => session()->get('ResultIndex'),

        'Hotelname' => session()->get('Hotelname'),

        'TraceId' => session()->get('TraceId'),

        'token_id' => session()->get('token_id'),

        'EndUserIp' => session()->get('EndUserIp'),

        'HotelCode' => session()->get('HotelCode'),

        'RoomIndex' => session()->get('RoomIndex'),

        'RoomTypeName' => session()->get('RoomTypeName'),

        'RoomTypeCode' => session()->get('RoomTypeCode'),

        'RatePlanCode' => session()->get('RatePlanCode'),

        'SmokingPreference' => session()->get('SmokingPreference'),

        'CurrencyCode' => session()->get('CurrencyCode'),

        'RoomPrice' => session()->get('RoomPrice'),

        'Tax' => session()->get('Tax'),

        'ExtraGuestCharge' => session()->get('ExtraGuestCharge'),

        'ChildCharge' => session()->get('ChildCharge'),

        'OtherCharges' => session()->get('OtherCharges'),

        'Discoun' => session()->get('Discount'),

        'PublishedPrice' => session()->get('PublishedPrice'),

        'PublishedPriceRoundedOff' => session()->get('PublishedPriceRoundedOff'),

        'OfferedPrice' => session()->get('OfferedPrice'),

        'OfferedPriceRoundedOff' => session()->get('OfferedPriceRoundedOff'),

        'AgentCommission' => session()->get('AgentCommission'),

        'AgentMarkUp' => session()->get('AgentMarkUp'),

        'TDS' => session()->get('TDS'),

        'Transaction_id'=>$string,

        'ServiceTax' => session()->get('ServiceTax'),

        'created_at' => now(),

        'updated_at' => now(),

    ];



    // Create the ticket instance and save to database

    $ticket = new HotelBookticket($ticket_data);

   $ticket->save();

}



        $postData = array ( 

    "txnid" => $string, 

    "amount" => 1,  

    "firstname" => $request->name['0'], 

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

                "redirectUrl" => route('room.success'), 

                // "webhookUrl" => route('webhooks.mollie'),

                "metadata" => [

                    "order_id" => "123456",

                ],

            ]);

               session()->put('paymentID',$payment->id);

         $fnames = session()->get('fname');

$lnames = session()->get('lname');

if (is_array($fnames) && is_array($lnames)) {

    // Start the session if it's not already started

    if (session_status() !== PHP_SESSION_ACTIVE) {

       

    }



    // Concatenate all first names and last names into comma-separated strings

    $allFnames = implode(',', $fnames);

    $allLnames = implode(',', $lnames);

         $ticket_data = [

         'name' => $allFnames,

        'lname' => $allLnames,

        'email' =>session()->get('email'),

        'mobile' => session()->get('mobile'),

        

        'ResultIndex' => session()->get('ResultIndex'),

        'Hotelname' => session()->get('Hotelname'),

        'TraceId' => session()->get('TraceId'),

        'token_id' => session()->get('token_id'),

        'EndUserIp' => session()->get('EndUserIp'),

        'HotelCode' => session()->get('HotelCode'),

        'RoomIndex' => session()->get('RoomIndex'),

        'RoomTypeName' => session()->get('RoomTypeName'),

        'RoomTypeCode' => session()->get('RoomTypeCode'),

        'RatePlanCode' => session()->get('RatePlanCode'),

        'SmokingPreference' => session()->get('SmokingPreference'),

        'CurrencyCode' => session()->get('CurrencyCode'),

        'RoomPrice' => session()->get('RoomPrice'),

        'Tax' => session()->get('Tax'),

        'ExtraGuestCharge' => session()->get('ExtraGuestCharge'),

        'ChildCharge' => session()->get('ChildCharge'),

        'OtherCharges' => session()->get('OtherCharges'),

        'Discoun' => session()->get('Discount'),

        'PublishedPrice' => session()->get('PublishedPrice'),

        'PublishedPriceRoundedOff' => session()->get('PublishedPriceRoundedOff'),

        'OfferedPrice' => session()->get('OfferedPrice'),

        'OfferedPriceRoundedOff' => session()->get('OfferedPriceRoundedOff'),

        'AgentCommission' => session()->get('AgentCommission'),

        'AgentMarkUp' => session()->get('AgentMarkUp'),

        'TDS' => session()->get('TDS'),

        'Transaction_id'=>$payment->id,

        'ServiceTax' => session()->get('ServiceTax'),

        'created_at' => now(),

        'updated_at' => now(),

    ];



    // Create the ticket instance and save to database

    $ticket = new HotelBookticket($ticket_data);

   $ticket->save();

}

   
            session(['hotel_booking_data' => $request->all()]);
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

    public function hotel_booking_details(Request $request ,$id)

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



$search1 = 'http://api.tektravels.com/BookingEngineService_Hotel/HotelService.svc/rest/GetBookingDetail/'; // Replace with the actual flight search endpoint

$json12='{ 

"EndUserIp": "192.168.11.120",

"TokenId": "'.$result->TokenId.'",

"BookingId": "'.$id.'",

}'; 

$ch = curl_init($search1);

$payload12 = $json12;

curl_setopt($ch, CURLOPT_POSTFIELDS, $payload12);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$ss = curl_exec($ch);

$ress = json_decode($ss);   

print_r($ress);die;

return view('flight/hotel_ticket_booking',compact('ress')); 

}



public function hotel_cancel(Request $request ,$id)

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

//  print_r($result);die;

$search1 = 'http://api.tektravels.com/BookingEngineService_Hotel/hotelservice.svc/rest/SendChangeRequest/'; // Replace with the actual flight search endpoint

$json12='{ 

"EndUserIp": "192.168.11.120",

"TokenId": "'.$result->TokenId.'",

"BookingId": "'.$id.'",

"RequestType": 4,

"Remarks": "sds",

}'; 

$ch = curl_init($search1);

$payload12 = $json12;

curl_setopt($ch, CURLOPT_POSTFIELDS, $payload12);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$ss = curl_exec($ch);

$ress = json_decode($ss);   

//  print_r($ress);die;



$search11 = 'http://api.tektravels.com/BookingEngineService_Hotel/hotelservice.svc/rest/GetChangeRequestStatus/'; // Replace with the actual flight search endpoint

$json121='{ 

"EndUserIp": "192.168.11.120",

"TokenId": "'.$result->TokenId.'",

"ChangeRequestId": "'.$ress->HotelChangeRequestResult->ChangeRequestId.'",

}'; 

$ch = curl_init($search11);

$payload121 = $json121;

curl_setopt($ch, CURLOPT_POSTFIELDS, $payload121);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$ss = curl_exec($ch);

$ress1 = json_decode($ss);   



  	$data = ['pnr_no' =>"6677", 'booking_id'=>"67676" ,'amount'=>"5665" ,'ticket_date'=>"5656",'fname'=>"Umesh",'lname'=>"mandrai",'Origin'=>"BHO",'Destination'=>"DEL",'DepTime'=>"22-04-2024", ];

            $user['to'] = "umeshmandrai98@gmail.com";

        Mail::send('welcome',$data,function($messages) use ($user){

            

            $messages->to($user['to']);

            $messages->subject('flight Booking');   

        });	

print_r($ress1);die;

}

     

}    