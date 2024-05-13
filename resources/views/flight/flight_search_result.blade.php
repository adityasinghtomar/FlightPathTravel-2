
@include('flight.header')



    <!-- search -->



     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>



    <div class="search-overlay">



        <div class="d-table">



            <div class="d-table-cell">



                <div class="search-overlay-layer"></div>



                <div class="search-overlay-layer"></div>



                <div class="search-overlay-layer"></div>



                <div class="search-overlay-close">



                    <span class="search-overlay-close-line"></span>



                    <span class="search-overlay-close-line"></span>



                </div>



                <div class="search-overlay-form">



                    <form>



                        <input type="text" class="input-search" placeholder="Search here...">



                        <button type="button"><i class="fas fa-search"></i></button>



                    </form>



                </div>



            </div>



        </div>



    </div>



  



    <!-- Common Banner Area -->



    <section id="common_banner">

    </section>







    @include('flight.flight_search_form')



    <!-- Flight Search Areas -->


    <section id="explore_area" class="section_padding">

        <div class="container">

                <div class="modal">

                    <div class="modal-content">

                        <span class="close-button">×</span>

                        <h1>Hello, I am a modal!</h1>

                    </div>

                </div>

            <div class="row">

                <div class="col-md-3">

                    <div class="sec-filter pb-20 mb-40">

                        <div class="sec-filter__left">

                            <h4 class="sec-filter__left__title">

                                Filters

                            </h4>

                            <h6 class="sec-filter__left__content">

                                Showing <span class="fw-bold">{{ isset($parameters['flightData']) ? count($parameters['flightData']) : 0 }}</span> results

                            </h6>

                        </div>

                        <div class="sec-filter__right">

                            <h6 class="sec-filter__right__sub-title">

                                Clear all

                            </h6>  

                        </div>

                    </div>



                    <div class="sec-filter-block mb-20">

                        <div class="sec-filter-block__left">

                            <h4 class="sec-filter-block__left__title">

                                Stops

                            </h4>

                        </div>

                        <div class="sec-filter-block__right">

                            <h6 class="sec-filter__right__sub-title">

                                Reset

                            </h6>  

                        </div>

                    </div>

                    <div class="row sec-filter-block-options mb-20">

                        <div class="col-md-12 mb-10">

                            <div class="d-flex align-items-center justify-content-between">

                                <div class="form-check">

                                    <label class="form-check-label" for="tripOneway">All</label>

                                </div>

                                <small>{{ isset($parameters['flightData']) ? count($parameters['flightData']) : 0 }}</small>

                            </div>

                            <div class="d-flex align-items-center justify-content-between">

                                <div class="form-check">    

                                    <input class="form-check-input" type="checkbox" name="stops" value="Non" id="travelstopsdirect">

                                    <label class="form-check-label" for="tripRoundtrip">Direct only</label>

                                </div>

                                <small>{{ isset($parameters['directStop']) ? $parameters['directStop'] : 0 }}</small>

                            </div>

                            <div class="d-flex align-items-center justify-content-between">

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" name="stops" value="One" id="travelstopsone">

                                    <label class="form-check-label" for="tripMulticity">One stop</label>

                                </div>

                                <small> {{ isset($parameters['oneStop']) ? $parameters['oneStop'] : 0}} </small>

                            </div>

                            <div class="d-flex align-items-center justify-content-between">

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" name="stops" value="Multi" id="travelstopsanymulti">

                                    <label class="form-check-label" for="tripMulticity">Multi stop</label>

                                </div>

                                <small> {{ $parameters['multiStop'] ?? 0}} </small>

                            </div>

                        </div>

                    </div>

                    <div class="sec-filter-block mb-20">

                        <div class="sec-filter-block__left">

                            <h4 class="sec-filter-block__left__title">

                                Airlines

                            </h4>

                        </div>

                        <div class="sec-filter-block__right">

                            <h6 class="sec-filter__right__sub-title">

                                Reset

                            </h6>  

                        </div>

                    </div>

                    <div class="row sec-filter-block-options">

                        <div class="col-md-12 mb-10">

                            <div class="d-flex align-items-center justify-content-between">

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" name="airlines" value="AirIndia" id="flexCheckDefault">

                                    <label class="form-check-label" for="flexCheckDefault">

                                        Air India

                                    </label>

                                </div>

                                <small> {{ $parameters['airIndiaAirline']  ?? 0}} </small>

                            </div>

                            <div class="d-flex align-items-center justify-content-between">

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" name="airlines" value="Vistara" id="flexCheckDefault">

                                    <label class="form-check-label" for="flexCheckDefault">

                                        Vistara

                                    </label>

                                </div>

                                <small>{{ $parameters['vistaraCount']  ?? 0}}</small>

                            </div>

                            <div class="d-flex align-items-center justify-content-between">

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" name="Indigo" value="" id="flexCheckDefault">

                                    <label class="form-check-label" for="flexCheckDefault">

                                        Indigo

                                    </label>

                                </div>

                                <small> {{ $parameters['indigoAirline']  ?? 0}} </small>

                            </div>

                            <div class="d-flex align-items-center justify-content-between">

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" name="airlines" value="EtihadAirways" id="flexCheckDefault">

                                    <label class="form-check-label" for="flexCheckDefault">

                                        Etihad Airways

                                    </label>

                                </div>

                                <small>{{ $parameters['EtihadAirwayCount']  ?? 0}}</small>

                            </div>

                            <div class="d-flex align-items-center justify-content-between">

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" name="airlines" value="EasternAirways" id="flexCheckDefault">

                                    <label class="form-check-label" for="flexCheckDefault">

                                        Emirates Airline

                                    </label>

                                </div>

                                <small> {{ $parameters['LufthansaCount']  ?? 0}} </small>

                            </div>

                        </div>

                    </div>

                    <div class="sec-filter-block mb-20">

                        <div class="sec-filter-block__right">

                            <h6 class="sec-filter__right__sub-title">

                                Show all

                            </h6>  

                        </div>

                    </div>

                    <div class="sec-filter-block mb-20 mt-40">

                        <div class="sec-filter-block__left">

                            <h4 class="sec-filter-block__left__title">

                                By Price

                            </h4>

                        </div>

                        <div class="sec-filter-block__right">

                            <h6 class="sec-filter__right__sub-title">

                                Reset

                            </h6>  

                        </div>

                    </div>

                    <div class="row sec-filter-block-options mb-20">

                        <div class="col-md-12 mb-10">

                            <div class="d-flex align-items-center justify-content-between">

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" name="refundable" value="false" id="bypriceduration">

                                    <label class="form-check-label" for="tripOneway">Not Refundable</label>

                                </div>

                                <small>{{ $parameters['nonRefundableFlights'] ?? 0}}</small>

                            </div>

                            <div class="d-flex align-items-center justify-content-between">

                                <div class="form-check">    

                                    <input class="form-check-input" type="checkbox" name="refundable" value="true" id="bypricecheapest">

                                    <label class="form-check-label" for="tripRoundtrip">Refundable</label>

                                </div>

                                <small>{{ $parameters['refundableFlights'] ?? 0}}</small>

                            </div>

                            <div class="d-flex align-items-center justify-content-between">

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" name="byprice" id="bypriceearliest" value="Earliest">

                                    <label class="form-check-label" for="tripMulticity">Earliest</label>

                                </div>

                                <small> {{ 0 }} </small>

                            </div>

                            <div class="d-flex align-items-center justify-content-between">

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" name="byprice" id="bypricelatest" value="Latest">

                                    <label class="form-check-label" for="tripMulticity">Latest</label>

                                </div>

                                <small> {{ 0 }} </small>

                            </div>

                        </div>

                    </div>

                </div>

                 <?php $Currency_active =\App\Currency_Model::where('currency_active','0')->first(); ?> 

               

            <div class="col-md-9">
                <div class="flight-list-grid">
                     @if (isset($parameters['flightData']) && !empty($parameters['flightData']))
                        @foreach($parameters['flightData'] as $keeu=> $flight)        
        
            
                    <div class="border-box-style-1 p-20 mt-20 content player">

                <div class="flight-list-grid-airline">

                    <div class="flight-list-grid-airline__left">

                        <div class="flight-list-grid-airline__left__img">

                            <div class="rounded-square-40-style-1">
                                <img src="public/assets/AirlineLogo/{{$flight['AirlineCode'] ?? "" }}.gif">
                            </div>
                            
                            {{$flight['AirlineCode'] ?? "" }}- {{$flight['FareClass'] ?? "" }}

                        </div>

                        <div class="flight-list-grid-airline__left__title px-20">
    
                        {{$flight['AirlineName'] ?? "" }}
    
                        </div>

                        <div class="flight-list-grid-airline__left__sub-title px-20">
    
                            Aircraft <span> {{$flight['Craft'] ?? "" }} </span>
    
                        </div>
        
                    </div>

                    <div class="flight-list-grid-airline__right">

                        Cabin Class:{{$flight['CabinClass'] ?? "" }}, Baggage:{{$flight['Baggage'] ?? "" }}, Cabin Baggage:{{$flight['CabinBaggage'] ?? "" }},

                    </div>

                </div>

                <div class="flight-list-grid-price-time mt-15">

                    <div class="flight-list-grid-price-time__left">

                        <div class="flight-list-grid-price-time__left__block-1">

                            <h4> {{$flight['originTime']['time'] ?? "" }} </h4>

                            <h6>{{$flight['OriginAirportCityCode'] ?? "" }} </span> - <span> {{$flight['originTime']['date'] ?? "" }} </span></h6>
                        </div>

                        <div class="flight-list-grid-price-time__left__block-2">

                            <h6 class="flight-list-grid-price-time__left__block-2__time">
                            {{$flight['dateTime']['hours']  ?? "" }}h :
                            {{$flight['dateTime']['minutes'] ?? "" }}m
                            </h6>

                        <h6><?php  
            

                                                        if($flight['flightWay'] == 'Direct')
                                                        {

                                                            echo "Direct"; 

                                                        }

                                                        if($flight['flightWay'] == 'One Stop')
                                                        {

                                                            echo "<span style='color:red;'>1 Stop</span> via  "; 

                                                        }
                                                        if($flight['flightWay'] == 'Multi Stop')
                                                        {

                                                            echo "<span style='color:red;'>Multi Stop</span>"; 

                                                        }    


                                                    ?></h6>



                    </div>

                    <div class="flight-list-grid-price-time__left__block-3">

                        <h4> {{$flight['destinationTime']['time'] ?? "" }} </h4>

                        <h6> {{$flight['DestinationAirportCityCode'] ?? "" }} </span> - <span> {{$flight['destinationTime']['date'] ?? "" }} </span></h6>

                    </div>

                </div>

                <div class="flight-list-grid-price-time__right">

                    <div class="flight-list-grid-price-time__right__price">

                        <h6> 

                            <h2>
                                
                            @php
                                $mark_up = \App\Markup_Model::where('name', 'flight')->where('status', 'active')->first();
                            @endphp

                            @if($mark_up)  

                                    @if($mark_up->markup_type =='fixed')
                                        @php
                                            $markup_amount = $mark_up->markup_amount;
                                            $subtotal = $dat2->Fare->PublishedFare + $markup_amount;
                                        @endphp

                                        {{ $Currency_active->currency_symbol }}
                                        {{ round($subtotal, 2) }}

                                    @else
                                        @php
                                            $percentage = ($mark_up->markup_amount / 100) * $dat2->Fare->PublishedFare; 
                                            $subtotal = $dat2->Fare->PublishedFare + $percentage;
                                        @endphp

                                    {{ $Currency_active->currency_symbol }}
                                    {{ round($subtotal, 2) }}

                                    @endif

                            @else
                                {{ session('currecy_symbol') }} {{ getPrice(session('currency_rate_based_on_INR') , $flight['PublishedFare']) }}
                                <!-- {{ $Currency_active->currency_symbol }}
                                {{ $flight['PublishedFare'] ?? ""}} -->

                            @endif
                                
                            

                            </h2> 

                            for all travellers 

                           </h6>

                    </div>

                </div>

            </div>

        
            @php
                $resultIndex = $flight['ResultIndex'];
            @endphp
            <div class="flight-list-grid-more-details-book-now mt-15">
                <div class="flight-list-grid-more-details-book-now__left">
                    <!--<a onclick="openModal()"> <h4>View Flight Details <i class="fa fa-angle-down pl-10"></i></h4> </a>-->
                    <a href="javascript:void(0);" onclick="openModalById('{{$resultIndex}}')"
                        id="viewFlightDetails_{{ $resultIndex }}">
                        <h4>View Flight Details <i class="fa fa-angle-down pl-10"></i></h4>
                    </a>

                </div>
                <div class="flight-list-grid-more-details-book-now__center">

                     <h5>
                        <!-- <img src="public/images/seat.png" style="width:30px;height:30px;"> : {{ $flight['NoOfSeatAvailable'] > 0 ? $flight['NoOfSeatAvailable'] . ': Seat Available' :'No Seat Available' }}  -->
                    </h5>
                </div>
                <div class="flight-list-grid-more-details-book-now__right">
                    @if($flight['IsLCC'] == 1)


                    <form action="#" enctype="multipart/form-data" method="post">

                        @csrf

                        <input type="hidden" name="ResultIndex" value="{{ $flight['ResultIndex'] }}">

                        <input type="hidden" name="TraceId" value="{{ $parameters['traceId'] }}">

                        <input type="hidden" name="token_id" value="{{ $parameters['tokenId'] }}">

                        <input type="hidden" name="EndUserIp" value="192.168.11.120">

                        <input type="hidden" name="BaseFare" value="{{ $flight['BaseFare'] }}">

                        <input type="hidden" name="Currency" value="{{ $flight['Currency'] }}">

                        <input type="hidden" name="Tax" value="{{ $flight['Tax'] }}">

                        <input type="hidden" name="YQTax" value="{{ $flight['YQTax'] }}">

                        <input type="hidden" name="AdditionalTxnFeeOfrd"
                            value="{{ $flight['AdditionalTxnFeeOfrd'] }}">

                        <input type="hidden" name="AdditionalTxnFeePub"
                            value="{{ $flight['AdditionalTxnFeePub'] }}">

                        <input type="hidden" name="OtherCharges" value="{{ $flight['OtherCharges'] ?? 0 }}">

                        <input type="hidden" name="Discount" value="{{ $flight['Discount'] ?? 0 }}">

                        <input type="hidden" name="PublishedFare" value="{{ $flight['PublishedFare'] ?? 0 }}">

                        <input type="hidden" name="OfferedFare" value="{{ $flight['offeredFare'] ?? 0 }}">

                        <input type="hidden" name="TdsOnCommission" value="{{ $flight['TdsOnCommission'] ?? 0 }}">

                        <input type="hidden" name="TdsOnPLB" value="{{ $flight['TdsOnPLB'] ?? 0 }}">

                        <input type="hidden" name="TdsOnIncentive" value="{{ $flight['TdsOnIncentive'] ?? 0 }}">

                        <input type="hidden" name="ServiceFee" value="{{ $flight['ServiceFee'] ?? 0 }}">

                        <input type="hidden" name="Destination_name"
                            value="{{ $flight['DestinationAirportCode'] ?? "" }}">

                        <input type="hidden" name="Destination_address"
                            value="{{ $flight['DestinationAirportName'] ?? "" }}">

                        <input type="hidden" name="Source_name" value="{{ $flight['OriginAirportCode'] ?? "" }}">

                        <input type="hidden" name="Source_address" value="{{ $flight['OriginAirportName'] ?? "" }}">

                        <input type="hidden" name="Duration" value="{{ $flight['Duration'] ?? "" }}">

                        <input type="hidden" name="AirlineName" value="{{ $flight['AirlineName'] ?? "" }}">

                        <input type="hidden" name="Duration_time" value="{{ $flight['Duration'] ?? "" }}">
                        <button class="btn btn-theme-blue px-25 py-10">Select Seat</button>

                    </form>

                    @else

                    <form action="{{url('/book_now')}}" enctype="multipart/form-data" method="post">

                        @csrf

                        <input type="hidden" name="ResultIndex" value="{{ $flight['ResultIndex'] }}">

                        <input type="hidden" name="TraceId" value="{{ $parameters['traceId'] }}">

                        <input type="hidden" name="token_id" value="{{ $parameters['tokenId'] }}">

                        <input type="hidden" name="EndUserIp" value="192.168.11.120">

                        <input type="hidden" name="BaseFare" value="{{ $flight['BaseFare'] }}">

                        <input type="hidden" name="Currency" value="{{ $flight['Currency'] }}">

                        <input type="hidden" name="Tax" value="{{ $flight['Tax'] }}">

                        <input type="hidden" name="YQTax" value="{{ $flight['YQTax'] }}">

                        <input type="hidden" name="AdditionalTxnFeeOfrd"
                            value="{{ $flight['AdditionalTxnFeeOfrd'] }}">

                        <input type="hidden" name="AdditionalTxnFeePub"
                            value="{{ $flight['AdditionalTxnFeePub'] }}">

                        <input type="hidden" name="OtherCharges" value="{{ $flight['AdditionalTxnFeePub'] }}">

                        <input type="hidden" name="Discount" value="{{ $flight['Discount'] ?? "" }}">

                        <input type="hidden" name="PublishedFare" value="{{ $flight['PublishedFare'] ?? "" }}">

                        <input type="hidden" name="OfferedFare" value="{{ $flight['OfferedFare'] ?? "" }}">

                        <input type="hidden" name="TdsOnCommission" value="{{ $flight['TdsOnCommission'] ?? "" }}">

                        <input type="hidden" name="TdsOnPLB" value="{{ $flight['TdsOnPLB'] }}">

                        <input type="hidden" name="TdsOnIncentive" value="{{ $flight['TdsOnIncentive'] }}">

                        <input type="hidden" name="ServiceFee" value="{{ $flight['ServiceFee'] }}">

                        <input type="hidden" name="Destination_name"
                            value="{{ $flight['DestinationAirportCode'] }}">

                        <input type="hidden" name="Destination_address"
                            value="{{ $flight['DestinationAirportName'] }}">

                        <input type="hidden" name="Source_name" value="{{ $flight['OriginAirportCode'] }}">

                        <input type="hidden" name="Source_address" value="{{ $flight['OriginAirportName'] }}">

                        <input type="hidden" name="Duration" value="{{ $flight['Duration'] ?? 0 }}">

                        <input type="hidden" name="AirlineName" value="{{ $flight['AirlineName'] ?? "" }}">

                        <input type="hidden" name="DepTime" value="{{ $flight['originDepTime'] ?? "" }}">

                        <input type="hidden" name="ArrTime" value="{{ $flight['destinationArrTime'] ?? "" }}">

                        <input type="hidden" name="adult" value="{{ $adult ?? "" }}">

                        <input type="hidden" name="count" value="{{ $count ?? "" }}">

                        <input type="hidden" name="Duration_time" value="{{ $flight['Duration'] ?? 0 }}">
                        <button class="btn btn-theme-blue px-25 py-10">Book Now</button>

                    </form>

                    @endif


                </div>
            </div>

                    </div>

  

                        @endforeach
                             @endif
                </div>
            </div>


    <!-- DIRECT FLIGHT ONLY -->

    <!-- DIRECT FLIGHT END -->
    <!-- POPUP SHOW SECTION -->
    @if (isset($flightLists) && !empty($flightLists))
    @foreach($flightLists as $keeu=> $flightList)    
            @php 
            $resultIndex = $flightList->ResultIndex;
            $flights = current($flightList->Segments);
            $currentSegment = current($flights);
            $lastSegment = end($flights);

            $totalDuration = count($flights) == 1 ? $currentSegment->Duration : $currentSegment->Duration + $lastSegment->Duration;
            $hours = intval($totalDuration / 60);
            $remainingMinutes = $totalDuration % 60;
            
            @endphp
    <div id="customModal_{{ $resultIndex }}" class="custom-modal">
        <div class="custom-modal-content">
            <span class="close" onclick="closeModal('{{ $resultIndex }}')">&times;</span>
            <h2>Your Flight From {{ $parameters['Origin'] ?? "" }} To {{ $parameters['Destination'] ?? "" }}</h2>
            <p>
                {{$hours  ?? "" }}h :
                {{$remainingMinutes ?? "" }}m
            </p>
            @foreach ($flights as $flight)
                    @php
                        $origindateTime = $flight->Origin->DepTime;
                        $origindateTime = strtotime($origindateTime); 
                        $originTime = date('h:i a', $origindateTime); 
                        $originDate = date('d M ', $origindateTime);

                        $destinationDateTime = $flight->Destination->ArrTime;
                        $destinationDateTime = strtotime($destinationDateTime); 
                        $destinationTime = date('h:i a', $destinationDateTime); 
                        $destinationDate = date('d M ', $destinationDateTime);

                        $diffSeconds = $destinationDateTime - $origindateTime;

                        $hours = floor($diffSeconds / 3600);
                        $minutes = floor(($diffSeconds % 3600) / 60);
                    @endphp

               


        <div class="container-fluid">

            <!-- Flight details table -->

            <div>

                <table>

                    <td>

                        <img src="public/assets/AirlineLogo/{{ $flight->Airline->AirlineCode ?? '' }}.gif" width="20px" height="20px">

                        <span style="margin:0px 10px 0px 10px;">{{ $flight->Airline->AirlineName ?? "" }}</span>| Aircraft <span>{{ $flight->Craft ?? ""}} |</span>

                        | Airline Code <span>{{$flight->Airline->AirlineCode ?? ""}}</span>

                        | Flight No. <span>{{$flight->Airline->FlightNumber ?? ""}} |</span>

                    </td>

                    <!-- Add more details as needed -->

                </table>

            </div>



            <!-- Origin and Destination details -->

            <div class="row" style="border-bottom:1px dotted;margin:10px;">

                <!-- Origin details -->

                <div class="col-md-4">

                    <p>From</p>

                    <h2 style="color:blue;">{{ $flight->Origin->Airport->AirportCode ?? "" }}</h2>

                    <span>
                        {{ $originTime ?? "" }}
                       
                    </span>

                    <span>
                        {{ $origineDate ?? "" }}
                    </span> 

                    <p>{{ $flight->Origin->Airport->AirportName ?? "" }},{{ $flight->Origin->Airport->CityName ?? "" }},{{  $flight->Origin->Airport->CountryName ?? "" }}</p>

                </div>


                <!-- Add more details or leave empty as needed -->

                    <div class="col-md-4">

                         <div style="   margin-top: 23px;text-align: center;">

                             <p>  
                                {{$hours  ?? "" }}h :
                                {{$minutes ?? "" }}m
                            </p>

                         </div>

                        <div style="width: 89%; border: 2px solid #bfbcbc;"></div>

                    </div>

                <!-- Destination details -->

                <div class="col-md-4">

                    <p>To</p>

                    <h2 style="color:blue;">{{ $flight->Destination->Airport->AirportCode ?? "" }}</h2>

                    <span>
                        {{ $destinationTime ?? "" }}
                    </span>

                    <span>
                        {{ $destinationDate ?? "" }}
                    </span>

                    <p>{{ $flight->Destination->Airport->AirportName ?? "" }},{{ $flight->Destination->Airport->CityName ?? "" }},{{ $flight->Destination->Airport->CountryName ?? "" }}</p>

                </div>

            </div>


        </div>
        @endforeach 

        <div class="container-fluid">

            <!-- Flight details table -->

            <div>

                <h4>Reissue & Cancellation</h4>

                <table>

                    <td>

                        <!-- | Reissue Charge <span>{{ $flight->PenaltyCharges->ReissueCharge ?? 0 }}</span> -->

                        <!-- | Cancellation Charge <span> {{ $flight->PenaltyCharges->CancellationCharge ?? 0 }} |</span> -->

                    </td> 

                    <!-- Add more details as needed -->

                </table>

            </div>

        </div>    

        </div>
    </div> 

    @endforeach 
    @endif
                        <div class="load_more_flight">

                            <a href="#" id="loadMore">Load More</a>

                        </div>


            </div>  

   </div>        



    <style>



        .content {







  display: none;



}



#loadMore {



  width: 200px;



  color: #fff;



  display: block;



  text-align: center;



  margin: 20px auto;



  padding: 10px;



  border-radius: 10px;



  border: 1px solid transparent;



  background-color: blue;



  transition: .3s;



}



#loadMore:hover {



  color: blue;



  background-color: #fff;



  border: 1px solid blue;



  text-decoration: none;



}



.noContent {



  color: #000 !important;



  background-color: transparent !important;



  pointer-events: none;



}



    </style>    



<!--All Flight-->

  



    <!-- Cta Area -->



    <section id="cta_area">



        <div class="container">



            <div class="row align-items-center">



                <div class="col-lg-7">



                    <div class="cta_left">



                        <div class="cta_icon">



                            <img src="assets/img/common/email.png" alt="icon">



                        </div>



                        <div class="cta_content">



                            <h4>Get the latest news and offers</h4>



                            <h2>Subscribe to our newsletter</h2>



                        </div>



                    </div>



                </div>



                <div class="col-lg-5">



                    <div class="cat_form">



                        <form id="cta_form_wrappper">



                            <div class="input-group"><input type="text" class="form-control"



                                    placeholder="Enter your mail address"><button class="btn btn_theme btn_md"



                                    type="button">Subscribe</button></div>



                        </form>



                    </div>



                </div>



            </div>



        </div>



    </section>







    <!-- Footer  -->



   @include('auth.cust_footer')



    <div class="go-top">



        <i class="fas fa-chevron-up"></i>



        <i class="fas fa-chevron-up"></i>



    </div>

 <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



<!-- Button to open the modal -->





<!-- Custom popup modal -->



<style>

    /* Style for the entire page */

body {

    margin: 0;

    font-family: Arial, sans-serif;

    background: url('your-background-image.jpg') no-repeat center center fixed;

    background-size: cover;

}



/* Style for the custom modal */

.custom-modal {

  display: none;

    position: fixed;

    top: 0;

    left: 0;

    width: 100%;

    height: 100%;

    background: rgba(255, 255, 255, 0.8);

    backdrop-filter: blur(10px);

    z-index: 9999;

    overflow: auto; /* This enables scrolling */

}



.custom-modal-content {

    width: 50%;

    margin: 5% auto;

    background-color: #fff;

    border: 1px solid #999;

    border-radius: 6px;

    box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);

    padding: 20px;

    box-sizing: border-box;

}



/* Style for the close button */

.close {

   position: relative;

  float:right;

    padding: 3px;

    border-radius: 5px;

    background: #d95313f2;

    color: #fff;

    font-size: 20px;

    font-weight: bold;

    cursor: pointer;

}

@media only screen and (max-width: 700px) {

   .close {

   position: relative;

    top: -13px;

    right: 0;

    float:right;

    padding: 3px;

    border-radius: 5px;

    background: #d95313f2;

    color: #fff;

    font-size: 20px;

    font-weight: bold;

    cursor: pointer;

}

.custom-modal-content {

    width: 95%;

    margin: 10% auto;

    background-color: #fff;

    border: 1px solid #999;

    border-radius: 6px;

    box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);

    padding: 20px;

    box-sizing: border-box;

}

}



</style>

<script>

    function openModalById(resultIndex) {

        var modal = document.getElementById('customModal_' + resultIndex);

        modal.style.display = 'block';

    }



    function closeModal(resultIndex) {

        var modal = document.getElementById('customModal_' + resultIndex);

        modal.style.display = 'none';

    }

</script>

<script>

//     function openModal() {

//     var modal = document.getElementById('customModal');

//     modal.style.display = 'block';

// }



// function closeModal() {

//     var modal = document.getElementById('customModal');

//     modal.style.display = 'none';

// }



</script>



    <script>







    function updateFields2(first_field2) {



  document.getElementById( 



            "second-field2").value = 



            document.getElementById( 



            "first_field2").value; 



}



</script>







   <script>







   function updateFields1(first_field1) {



  document.getElementById( 



            "second-field1").value = 



            document.getElementById( 



            "first_field1").value; 



}



</script>







<script>







function updateFields(first_field) {



  document.getElementById( 



            "second-field").value = 



            document.getElementById( 



            "first_field").value; 



}



</script> 



<script>







function updateFields3(first_field3) {



  var objectarray = document.getElementById( "first_field3").value; 



  if(objectarray =='1'){



      document.getElementById( 



            "second-field3").value = "All"



  }



  if(objectarray =='2'){



      document.getElementById( 



            "second-field3").value = "Economy"



  }



  if(objectarray =='3'){



      document.getElementById( 



            "second-field3").value = "Premium Economy"



  }



  if(objectarray =='4'){



      document.getElementById( 



            "second-field3").value = "Business"



  }if(objectarray =='5'){



      document.getElementById( 



            "second-field3").value = "PremiumBusiness"



  }



  if(objectarray =='6'){



      document.getElementById( 



            "second-field3").value = "First Class"



  }



}



</script>



<script>



const d = new Date();



let text = d.toLocaleString();



document.getElementById("demo").innerHTML = text;



</script>



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



 <script>



        $(document).ready(function () {
            var phpVariable = <?php echo json_encode($parameters); ?>;
            var html = ` <div class="border-box-style-1 p-20 mt-20 content player" style="display: block;"><div class="flight-list-grid-airline">

    <div class="flight-list-grid-airline__left">

        <div class="flight-list-grid-airline__left__img">

            <div class="rounded-square-40-style-1">
                <img src="public/assets/AirlineLogo/6E.gif">
            </div>
            
            6E- NR

        </div>

        <div class="flight-list-grid-airline__left__title px-20">

        Indigo

        </div>

        <div class="flight-list-grid-airline__left__sub-title px-20">

            Aircraft <span> 320 </span>

        </div>

    </div>

    <div class="flight-list-grid-airline__right">

        Cabin Class:2, Baggage:15 Kilograms, Cabin Baggage:7 KG,

    </div>

</div>

<div class="flight-list-grid-price-time mt-15">

    <div class="flight-list-grid-price-time__left">

        <div class="flight-list-grid-price-time__left__block-1">

            <h4> 10:00 pm </h4>

            <h6>BHO  - <span> 29 Apr  </span></h6>
        </div>

        <div class="flight-list-grid-price-time__left__block-2">

            <h6 class="flight-list-grid-price-time__left__block-2__time">
            1h :
            20m
            </h6>

        <h6>Direct</h6>



    </div>

    <div class="flight-list-grid-price-time__left__block-3">

        <h4> 11:20 pm </h4>

        <h6> BOM  - <span> 29 Apr  </span></h6>

    </div>

</div>

<div class="flight-list-grid-price-time__right">

    <div class="flight-list-grid-price-time__right__price">

        <h6> 

            </h6><h2>
                
            
                                            Rs 8425
                <!-- $
                8024 -->

                                            
            

            </h2> 

            for all travellers 

           

    </div>

</div>

</div>


        <div class="flight-list-grid-more-details-book-now mt-15">
<div class="flight-list-grid-more-details-book-now__left">
    <!--<a onclick="openModal()"> <h4>View Flight Details <i class="fa fa-angle-down pl-10"></i></h4> </a>-->
    <a href="javascript:void(0);" onclick="openModalById('OB4[TBO]qccFlawCAykd5Ep8q+svyaHJtW56oijdMHH6NxtY+VVQgl7EgsJfQoNUMXqrmT4eMayKboyGmdU+OQW2RZ0BUqrJuPjTmAsnr6znDkOOT4EGWRelSckLuAU2V34gYozDYIU7CUjqB5tSkPvvH0GoJaGm5inDuLRyFl4lbh33ttKL5ko4twtwZJFYlrpCtSBCHHg9dxwcuPNXYt9b9XhpJw+M+KkJzYCMdd3HnrOD6ICkog/2WQM3wOw4qezviQIwlTuu2g1pIYrRy4jFIGx2Sw6Kl4xV1fL93k+6afsDaXTeZyAwbwU4ekgeJIgSFKERT58I7NQgySWT4Mq/RrllffAVLJ0FdHP2KSwD7j7yhEje/u9TPWzut2YPEZgi5MZA/ZDfam4eiGOa2BX01v46B0EYoq7Xv+J7oidAInPfj2rz8FpfiYW1MIHIYrLiczDyw7F9kSsabqyHTfrFK5CUKPgxrLZNfPLeNPAXEzj1MsffQuBS9YXBp9dIoc+BcnUH4NGdLktA4WeNmWwW8ucQV4/yU69O8uaGSYyzOOI31n+trPBlF5NN9mDKbJB00w/R/SZM1Pj4S5ZTm0c6PXbp7I6XTZibjyR5x5+CpEmm2Pgina5UB+3e8Lsl3QOCpsL9')" id="viewFlightDetails_OB4[TBO]qccFlawCAykd5Ep8q+svyaHJtW56oijdMHH6NxtY+VVQgl7EgsJfQoNUMXqrmT4eMayKboyGmdU+OQW2RZ0BUqrJuPjTmAsnr6znDkOOT4EGWRelSckLuAU2V34gYozDYIU7CUjqB5tSkPvvH0GoJaGm5inDuLRyFl4lbh33ttKL5ko4twtwZJFYlrpCtSBCHHg9dxwcuPNXYt9b9XhpJw+M+KkJzYCMdd3HnrOD6ICkog/2WQM3wOw4qezviQIwlTuu2g1pIYrRy4jFIGx2Sw6Kl4xV1fL93k+6afsDaXTeZyAwbwU4ekgeJIgSFKERT58I7NQgySWT4Mq/RrllffAVLJ0FdHP2KSwD7j7yhEje/u9TPWzut2YPEZgi5MZA/ZDfam4eiGOa2BX01v46B0EYoq7Xv+J7oidAInPfj2rz8FpfiYW1MIHIYrLiczDyw7F9kSsabqyHTfrFK5CUKPgxrLZNfPLeNPAXEzj1MsffQuBS9YXBp9dIoc+BcnUH4NGdLktA4WeNmWwW8ucQV4/yU69O8uaGSYyzOOI31n+trPBlF5NN9mDKbJB00w/R/SZM1Pj4S5ZTm0c6PXbp7I6XTZibjyR5x5+CpEmm2Pgina5UB+3e8Lsl3QOCpsL9">
        <h4>View Flight Details <i class="fa fa-angle-down pl-10"></i></h4>
    </a>

</div>
<div class="flight-list-grid-more-details-book-now__center">

     <h5>
        <!-- <img src="public/images/seat.png" style="width:30px;height:30px;"> : 3: Seat Available  -->
    </h5>
</div>`
            $('#travelstopsdirect').on('click',function () {
                console.log('called');
                var flight = phpVariable.flightData;
                for (key in flight) 
                {

                    if (flight[key].flightWay == "Direct")
                    {
                        var flightGrid = $('.flight-list-grid').children('div:first');
                        flightGrid.find('.flight-list-grid-airline__left__img').find('.rounded-square-40-style-1').find('img').attr('src',`public/assets/AirlineLogo/${flight[key].AirlineCode}.gif`);
                        flightGrid.find('.flight-list-grid-airline__left__img').contents().last()[0].nodeValue = flight[key].AirlineCode;
                        flightGrid.find('.flight-list-grid-airline__left__title').text(flight[key].AirlineName);
                        flightGrid.find('.flight-list-grid-airline__left__sub-title').find('span').text(flight[key].Craft);
                        flightGrid.find('.flight-list-grid-airline__right').text(`Cabin Class:${flight[key].CabinClass}, Baggage:${flight[key].Baggage}, Cabin Baggage:${flight[key].CabinBaggage},`);
                        flightGrid.find('.flight-list-grid-price-time__left').find('.flight-list-grid-price-time__left__block-1').find('h4').text(flight[key].originTime.time);

                        var store = flightGrid.html();
                        $('.flight-list-grid').append(`<div class="border-box-style-1 p-20 mt-20 content player" style="display: block;">${store}</div>`);
                        console.log(flight[key]);
                        console.log(flightGrid);
                    }
                            // code block to be executed
                }
                
            })

  



            /*------------------------------------------



            --------------------------------------------



            Country Dropdown Change Event



            --------------------------------------------



            --------------------------------------------*/



            $('#from').on('change', function () {



                var idCountry = this.value;



                $("#state-dropdown").html('');



                $.ajax({



                    url: "/fetch-from",



                    type: "POST",



                    data: {



                        country_id: idCountry,



                        _token: '{{csrf_token()}}'



                    },



                    dataType: 'json',



                    success: function (result) {



                        $.each(result.states, function (key, value) {



                            $("#state-dropdown").append('<option value="">'+ value.AIRPORTCODE +',' + value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');



                        });



                   }



                });



            });



        });



    </script>



    



<script>



        $(document).ready(function () {



  



            /*------------------------------------------



            --------------------------------------------



            Country Dropdown Change Event



            --------------------------------------------



            --------------------------------------------*/



            $('#to').on('change', function () {



                var idCountry = this.value;



                $("#state-dropdown1").html('');



                $.ajax({



                    url: "/fetch-from",



                    type: "POST",



                    data: {



                        country_id: idCountry,



                        _token: '{{csrf_token()}}'



                    },



                    dataType: 'json',



                    success: function (result) {



                        $.each(result.states, function (key, value) {



                            $("#state-dropdown1").append('<option value="">'+ value.AIRPORTCODE +',' + value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');



                        });



                   }



                });



            });



        });



    </script>







  <script>



        $(document).ready(function () {



  



            /*------------------------------------------



            --------------------------------------------



            Country Dropdown Change Event



            --------------------------------------------



            --------------------------------------------*/



            $('#from12').on('change', function () {



                var idCountry = this.value;



                $("#state-dropdown12").html('');



                $.ajax({



                    url: "/fetch-from",



                    type: "POST",



                    data: {



                        country_id: idCountry,



                        _token: '{{csrf_token()}}'



                    },



                    dataType: 'json',



                    success: function (result) {



                        $.each(result.states, function (key, value) {



                            $("#state-dropdown12").append('<option value="">'+ value.AIRPORTCODE +',' + value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');



                        });



                   }



                });



            });



        });



    </script>



    



<script>



        $(document).ready(function () {



  



            /*------------------------------------------



            --------------------------------------------



            Country Dropdown Change Event



            --------------------------------------------



            --------------------------------------------*/



            $('#to12').on('change', function () {



                var idCountry = this.value;



                $("#state-dropdown112").html('');



                $.ajax({



                    url: "/fetch-from",



                    type: "POST",



                    data: {



                        country_id: idCountry,



                        _token: '{{csrf_token()}}'



                    },



                    dataType: 'json',



                    success: function (result) {



                        $.each(result.states, function (key, value) {



                            $("#state-dropdown112").append('<option value="">'+ value.AIRPORTCODE +',' + value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');



                        });



                   }



                });



            });



        });



    </script>  



    



    <!---->



        <script>



        $(document).ready(function () {



  



            /*------------------------------------------



            --------------------------------------------



            Country Dropdown Change Event



            --------------------------------------------



            --------------------------------------------*/



            $('#from_1').on('change', function () {



                var idCountry = this.value;



                $("#state-dropdown_1").html('');



                $.ajax({



                    url: "/fetch-from",



                    type: "POST",



                    data: {



                        country_id: idCountry,



                        _token: '{{csrf_token()}}'



                    },



                    dataType: 'json',



                    success: function (result) {



                        $.each(result.states, function (key, value) {



                            $("#state-dropdown_1").append('<option value="">'+ value.AIRPORTCODE +',' + value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');



                        });



                   }



                });



            });



        });



    </script>



    



<script>



        $(document).ready(function () {



  



            /*------------------------------------------



            --------------------------------------------



            Country Dropdown Change Event



            --------------------------------------------



            --------------------------------------------*/



            $('#to_2').on('change', function () {



                var idCountry = this.value;



                $("#state-dropdown_2").html('');



                $.ajax({



                    url: "/fetch-from",



                    type: "POST",



                    data: {



                        country_id: idCountry,



                        _token: '{{csrf_token()}}'



                    },



                    dataType: 'json',



                    success: function (result) {



                        $.each(result.states, function (key, value) {



                            $("#state-dropdown_2").append('<option value="">' + value.AIRPORTCODE +','+ value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');



                        });



                   }



                });



            });



        });



    </script>







  <script>



        $(document).ready(function () {



  



            /*------------------------------------------



            --------------------------------------------



            Country Dropdown Change Event



            --------------------------------------------



            --------------------------------------------*/



            $('#from_3').on('change', function () {



                var idCountry = this.value;



                $("#state-dropdown_3").html('');



                $.ajax({



                    url: "/fetch-from",



                    type: "POST",



                    data: {



                        country_id: idCountry,



                        _token: '{{csrf_token()}}'



                    },



                    dataType: 'json',



                    success: function (result) {



                        $.each(result.states, function (key, value) {



                            $("#state-dropdown_3").append('<option value="">'+ value.AIRPORTCODE +',' + value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');



                        });



                   }



                });



            });



        });



    </script>



    



<script>



        $(document).ready(function () {



  



            /*------------------------------------------



            --------------------------------------------



            Country Dropdown Change Event



            --------------------------------------------



            --------------------------------------------*/



            $('#to_4').on('change', function () {



                var idCountry = this.value;



                $("#state-dropdown_4").html('');



                $.ajax({



                    url: "/fetch-from",



                    type: "POST",



                    data: {



                        country_id: idCountry,



                        _token: '{{csrf_token()}}'



                    },



                    dataType: 'json',



                    success: function (result) {



                        $.each(result.states, function (key, value) {



                            $("#state-dropdown_4").append('<option value="">'+ value.AIRPORTCODE +',' + value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');



                        });



                   }



                });



            });



        });



    </script> 



    



    <!--Search-->



    <script>



        $(document).ready(function () {



  



            /*------------------------------------------



            --------------------------------------------



            Country Dropdown Change Event



            --------------------------------------------



            --------------------------------------------*/



            $('.from').on('keyup',function(){



                var idCountry = this.value;



                $("#ShowDataList1").html('');



                $.ajax({



                    url: "/fetch-from1",



                    type: "POST",



                    data: {



                        country_id: idCountry,



                        _token: '{{csrf_token()}}'



                    },



                    dataType: 'json',



                    success: function (result) {



                        $.each(result.states, function (key, value) {



                            $("#ShowDataList1").append('<option value="'+ value.AIRPORTCODE +'">'+ value.AIRPORTCODE +',' + value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');



                        });



                   }



                });



            });



        });



    </script>



    



    <script>



        $(document).ready(function () {



  



            /*------------------------------------------



            --------------------------------------------



            Country Dropdown Change Event



            --------------------------------------------



            --------------------------------------------*/



            $('.to').on('keyup',function(){



                var idCountry = this.value;



                $("#ShowDataList2").html('');



                $.ajax({



                    url: "/fetch-from1",



                    type: "POST",



                    data: {



                        country_id: idCountry,



                        _token: '{{csrf_token()}}'



                    },



                    dataType: 'json',



                    success: function (result) {



                        $.each(result.states, function (key, value) {



                            $("#ShowDataList2").append('<option value="'+ value.AIRPORTCODE +'">'+ value.AIRPORTCODE +',' + value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');



                        });



                   }



                });



            });



        });



    </script> 



<script>



    function myDate() {



        var a = new Date(this.value);



        console.log(a);



        var weekdays = new Array(7);



        weekdays[0] = "Sunday";



        weekdays[1] = "Monday";



        weekdays[2] = "Tuesday";



        weekdays[3] = "Wednesday";



        weekdays[4] = "Thursday";



        weekdays[5] = "Friday";



        weekdays[6] = "Saturday";



        var r = weekdays[a.getDay()];



        document.getElementById("myId").innerHTML = r;



    }



      $(function(){



    var dtToday = new Date();







    var month = dtToday.getMonth() + 1;



    var day = dtToday.getDate();



    var year = dtToday.getFullYear();



    if(month < 10)



        month = '0' + month.toString();



    if(day < 10)



        day = '0' + day.toString();







    var minDate= year + '-' + month + '-' + day;







    $('.txtDate').attr('min', minDate);



});



</script>  



<script>



    const rangeInput = document.querySelectorAll(".range-input input"),



  priceInput = document.querySelectorAll(".price-input input"),



  range = document.querySelector(".slider .progress");



let priceGap = 1000;


priceInput.forEach((input) => {



  input.addEventListener("input", (e) => {



    let minPrice = parseInt(priceInput[0].value),



      maxPrice = parseInt(priceInput[1].value);







    if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {



      if (e.target.className === "input-min") {



        rangeInput[0].value = minPrice;



        range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";



      } else {



        rangeInput[1].value = maxPrice;



        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";



      }



    }



  });



});







rangeInput.forEach((input) => {



  input.addEventListener("input", (e) => {



    let minVal = parseInt(rangeInput[0].value),



      maxVal = parseInt(rangeInput[1].value);







    if (maxVal - minVal < priceGap) {



      if (e.target.className === "range-min") {



        rangeInput[0].value = maxVal - priceGap;



      } else {



        rangeInput[1].value = minVal + priceGap;



      }



    } else {



      priceInput[0].value = minVal;



      priceInput[1].value = maxVal;



      range.style.left = (minVal / rangeInput[0].max) * 100 + "%";



      range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";



    }



  });



});







</script>



<script>



        $(document).ready(function () {



  



            /*------------------------------------------



            --------------------------------------------



            Country Dropdown Change Event



            --------------------------------------------



            --------------------------------------------*/



            $('.city_id').on('keyup',function(){



                var idCountry = this.value;



                $("#city_id").html('');



                $.ajax({



                    url: "/city_details",



                    type: "POST",



                    data: {



                        country_id: idCountry,



                        _token: '{{csrf_token()}}'



                    },



                    dataType: 'json',



                    success: function (result) {



                        $.each(result.states, function (key, value) {



                            $("#city_id").append('<input type="hidden" name="Destination" value="'+ value.city_id +'">');



                        });



                   }



                });



            });



        });



    </script> 



<!--Filter -->



<script>



    // not exactly vanilla as there is one lodash function







var allCheckboxes = document.querySelectorAll('input[type=checkbox]');



var allPlayers = Array.from(document.querySelectorAll('.player'));



var checked = {};







getChecked('stops');



getChecked('cabin_class');



getChecked('refundable');



getChecked('airlines');



getChecked('conference');







console.log(allCheckboxes);







Array.prototype.forEach.call(allCheckboxes, function (el) {



  el.addEventListener('change', toggleCheckbox);



});







function toggleCheckbox(e) {



  getChecked(e.target.name);



  setVisibility();



}







function getChecked(name) {



  checked[name] = Array.from(document.querySelectorAll('input[name=' + name + ']:checked')).map(function (el) {



    return el.value;



  });



}







function setVisibility() {



    $('.collapse').collapse('hide');



  allPlayers.map(function (el) {



    var stops = checked.stops.length ? _.intersection(Array.from(el.classList), checked.stops).length : true;



    var cabin_class = checked.cabin_class.length ? _.intersection(Array.from(el.classList), checked.cabin_class).length : true;



    var refundable = checked.refundable.length ? _.intersection(Array.from(el.classList), checked.refundable).length : true;



    var airlines = checked.airlines.length ? _.intersection(Array.from(el.classList), checked.airlines).length : true;



    var conference = checked.conference.length ? _.intersection(Array.from(el.classList), checked.conference).length : true;



    if (stops && cabin_class && refundable && airlines && conference) {



      el.style.display = 'block';



    } else {



      el.style.display = 'none';



    }



  });



}



</script>



<script>



    $(document).ready(function(){

  $(".content").slice(0, 10).show();



  $("#loadMore").on("click", function(e){



    e.preventDefault();



    $(".content:hidden").slice(0, 4).slideDown();



    if($(".content:hidden").length == 0) {



      $("#loadMore").text("No More Flights Available").addClass("noContent");



    }



  });



  



})



</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>







    <script src="public/assets/js/jquery-3.6.0.min.js"></script>



    <!-- Bootstrap js -->



    <script src="public/assets/js/bootstrap.bundle.js"></script>



    <!-- Meanu js -->



    <script src="public/assets/js/jquery.meanmenu.js"></script>



    <!-- Range js -->



    <script src="public/assets/js/nouislider.min.js"></script>



    <script src="public/assets/js/wNumb.js"></script>



    <!-- owl carousel js -->



    <script src="public/assets/js/owl.carousel.min.js"></script>



    <!-- wow.js -->



    <script src="public/assets/js/wow.min.js"></script>



    <!-- Select2 -->



    <script src="public/assets/js/select2.min.js"></script>



    <!-- Custom js -->



    <script src="public/assets/js/custom.js"></script>



    <script src="public/assets/js/add-form.js"></script>



    <script src="public/assets/js/form-dropdown.js"></script>



<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/0.10.0/lodash.min.js"></script>



</body>







</html>