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
@if(isset($ress))
@foreach($ress as $res)
@if(isset($res->Results))        
 <?php $dat = $res->Results;?>
 <?php $Total_flight = 0; ?>
 <?php $Total_AirlineName = 0; ?>
  <?php $Total_Vistara = 0; ?>
  <?php $Total_Indigo = 0; ?>
  <?php $Total_Etihad_Airways = 0; ?>
  <?php $Total_Lufthansa = 0; ?>
  <?php $Total_refound = 0; ?>
  <?php $Total_norefound = 0; ?>
 
                                    
    <?php $count_direct = 0; ?>
    <?php $count_one = 0; ?>
    <?php $count_multi = 0; ?>
     
             <?php 
    //   $unique_fareclasses = collect($dat)->flatMap(function($item) {
    //         return collect($item)->pluck('Fare.PublishedFare');
    //     })->filter()->unique(); // Filter out null values and ensure uniqueness
        
    //     // Ensure each item has a PublishedFare property
    //     $unique_fareclasses = $unique_fareclasses->filter(function ($value, $key) {
    //         return isset($value);
    //     });
        
    //     // Convert the collection to an array for better memory efficiency
    //     $unique_fareclasses = $unique_fareclasses->values()->toArray();
          
            ?>
    @foreach($dat as $dat1)
    @foreach($dat1 as $key=>$dat2)
  
    <?php  $Segments = $dat2->Segments; ?>
     <?php  $FareRules = $dat2->FareRules; ?>
     @foreach( $Segments as $Segment)
     @foreach( $Segment as $keyyss => $Segm)
         @if($keyyss < 1)
        <?php if($Segm->Airline->AirlineName == "Air India"){ ?>
            <? $Total_AirlineName++ ?>
        <?php } ?>
        <?php if($dat2->IsRefundable == 1){ ?>
            <? $Total_refound++ ?>
        <?php } else { ?>
         <? $Total_norefound++ ?>
        <?php } ?>
        
        <?php if($Segm->Airline->AirlineName == "Vistara"){ ?>
            <? $Total_Vistara++ ?>
        <?php } ?>
        <?php if($Segm->Airline->AirlineName == "Indigo"){ ?>
            <? $Total_Indigo++ ?>
        <?php } ?> 
        <?php if($Segm->Airline->AirlineName == "Etihad Airways"){ ?>
            <? $Total_Etihad_Airways++ ?>
        <?php } ?> 
        <?php if($Segm->Airline->AirlineName == "Lufthansa"){ ?>
            <? $Total_Lufthansa++ ?>
        <?php } ?> 
        
        <? $Total_flight++ ?> 
        @endif
                                    <?php $count11 = 0; ?>
                                    @foreach( $Segments as $Segment)
                                    @foreach( $Segment as $Segm)
                                    <? $count11++ ?>
                                    
                                    @endforeach
                                    @endforeach
                                   <?php 
                                                        if($count11 == 1){
                                                            $count_direct++; 
                                                            }
                                                        if($count11 == 2){
                                                            $count_one++; 
                                                            }
                                                        if($count11 == 4){
                                                          $count_one++;
                                                            }     
                                                        if($count11 == 3){
                                                            $count_multi++; 
                                                        }    
                                                        if($count11 > 4){
                                                                $count_multi++; 
                                                                    }
                                                                ?>                         
                                      
     @endforeach
     @endforeach
     
    @endforeach
    @endforeach
    
    
@endif
@endforeach
@endif                     
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
                                Showing <span class="fw-bold"><?php if(isset($Total_flight)){ echo $Total_flight; }?></span> results
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
                                <small><?php if(isset($Total_flight)){ echo $Total_flight; }?></small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">    
                                    <input class="form-check-input" type="checkbox" name="stops" value="Non" id="travelstopsdirect">
                                    <label class="form-check-label" for="tripRoundtrip">Direct only</label>
                                </div>
                                <small><?php if(isset($count_direct)){ echo $count_direct; } ?></small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="stops" value="One" id="travelstopsone">
                                    <label class="form-check-label" for="tripMulticity">One stop</label>
                                </div>
                                <small><?php if(isset($count_one)){ echo $count_one;} ?></small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="stops" value="Multi" id="travelstopsanymulti">
                                    <label class="form-check-label" for="tripMulticity">Multi stop</label>
                                </div>
                                <small><?php if(isset($count_multi)){ echo $count_multi; } ?></small>
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
                                <small><?php if(isset($Total_AirlineName)){ echo $Total_AirlineName; }?></small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="airlines" value="Vistara" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Vistara
                                    </label>
                                </div>
                                <small><?php if(isset($Total_Vistara)){ echo $Total_Vistara;} ?></small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="Indigo" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Indigo
                                    </label>
                                </div>
                                <small><?php if(isset($Total_Indigo)){ echo $Total_Indigo;} ?></small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="airlines" value="EtihadAirways" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Etihad Airways
                                    </label>
                                </div>
                                <small><?php if(isset($Total_Etihad_Airways)){ echo $Total_Etihad_Airways;} ?></small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="airlines" value="EasternAirways" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Emirates Airline
                                    </label>
                                </div>
                                <small>0</small>
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
                                <small><?php if(isset($Total_refound)){ echo $Total_refound;} ?></small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">    
                                    <input class="form-check-input" type="checkbox" name="refundable" value="true" id="bypricecheapest">
                                    <label class="form-check-label" for="tripRoundtrip">Refundable</label>
                                </div>
                                <small><?php if(isset($Total_norefound)){ echo $Total_norefound;} ?></small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="byprice" id="bypriceearliest" value="Earliest">
                                    <label class="form-check-label" for="tripMulticity">Earliest</label>
                                </div>
                                <small></small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="byprice" id="bypricelatest" value="Latest">
                                    <label class="form-check-label" for="tripMulticity">Latest</label>
                                </div>
                                <small></small>
                            </div>
                        </div>
                    </div>
                </div>
                 <?php $Currency_active =\App\Currency_Model::where('currency_active','0')->first(); ?> 
                @if(isset($fli_data)) 
<div class="col-md-9">
    <div class="flight-list-grid">
      @if(isset($ress))
     
               @foreach($unique_fareclasses as $fareclass)        
               
                 <!-- Display the current fare class for debugging -->
         @foreach($ress as $res)
                 
            @if(isset($res->Results))        
                <?php $dat = $res->Results;?>
                @foreach($dat as $dat1)
            
                    @foreach($dat1 as $key=>$dat2)
                 @if( $dat2->Fare->PublishedFare == $fareclass)
               
                        <div>{{ $dat2->Fare->PublishedFare }}</div> <!-- Display the data that matches the fare class -->
                    
        <?php  $Segments = $dat2->Segments; ?>
        <?php  $FareRules = $dat2->FareRules; ?>
         @foreach( $Segments as $Segment)
          
            @foreach( $Segment as $keyys => $Segm)
           
                   @if($keyys < 1)
                 
          <?php $Origin = $Segm->Origin; ?> 

         <?php  $Destination = $Segm->Destination; ?>
                                    <?php $count = 0; ?>
                                    <?php $Times = 0; ?>
                                    
                       
                                                @foreach( $Segments as $Segment)
                                    @foreach( $Segment as  $Segm)
                                 
                                    <?php  $Destination = $Segm->Destination; ?>
                                    <?php  $AirportCode = $Destination->Airport->AirportCode; ?>
                                   <?php  $ArrTime = $Destination->ArrTime; ?>
                                   <?php $AirportName = $Destination->Airport->AirportName;?>
                                   <?php $CityName = $Destination->Airport->CityName;?>
                                   <?php $Times += $Segm->Duration;?>
                                  <? $count++ ?>
                                 
                                  @foreach ($Segm->Origin as $og) 
                                        @if(is_object($og) && property_exists($og, 'AirportCode'))
                                                <?php $ogin = $og->AirportCode ?>
                                        @endif
                                    @endforeach              
                                    @endforeach
                                    @endforeach
                                           
                            <?php 
                                                            if($count == 1){
                                                                $stops1 = "Non"; 
                                                                }
                                                            if($count == 2){
                                                                $stops1 = "One"; 
                                                                }
                                                            if($count == 4){
                                                                $stops1 = "One"; 
                                                                }
                                                            if($count == 3){
                                                                $stops1 = "Multi"; 
                                                                }    
                                                            if($count > 4){
                                                                $stops1 = "Multi"; 
                                                                }    
                                                            
                                                             ?>
                <?php 
                                        if($dat2->IsRefundable == 1){
                                            $refund ="false";
                                        }else{
                                            $refund ="true";
                                        }
                                        $str = str_replace(' ', '', $Segm->Airline->AirlineName);
                                        ?>         
                <?php 
                if($Segm->CabinClass == 1){
                $cabin_class = "All"; 
                }
                if($Segm->CabinClass == 2){
                $cabin_class = "Economy"; 
                }
                if($Segm->CabinClass == 3){
                $cabin_class = "PremiumEconomy"; 
                }
                if($Segm->CabinClass == 4){
                $cabin_class = "Business"; 
                }
                if($Segm->CabinClass == 5){
                $cabin_class = "PremiumBusiness"; 
                }
                if($Segm->CabinClass == 6){
                $cabin_class = "First"; 
                }
                ?>    
                 
                  
                   
        <div class="border-box-style-1 p-20 mt-20 content player <?php echo $stops1;?> <?php echo $str; ?>  <?php echo $refund;?>">
        <div class="flight-list-grid-airline">
             
            <?php echo $dat2->Source ?>
                  <h6 style="margin-left:10px;">Airline Source : {{$dat2->Fare->PublishedFare}}  {{ $fareclass }}<b><?php $airline_source =\App\Airline_Source_Model::where('source_id',$dat2->Source)->first(); ?> <?php if(isset($airline_source)){ echo $airline_source->source_name; } else { echo "TBO"; } ?> </b></h6>
     
        </div>
            <div class="flight-list-grid-airline">
                <div class="flight-list-grid-airline__left">
                    <div class="flight-list-grid-airline__left__img">
                        <div class="rounded-square-40-style-1">
                            <img src="public/assets/AirlineLogo/<?php echo $dat2->AirlineCode;?>.gif">
                            
                        </div>
                        
                        <?php  echo $Segm->Airline->AirlineCode; ?>-<?php  echo $Segm->Airline->FareClass; ?>
                    </div>
                    <div class="flight-list-grid-airline__left__title px-20">
                        <?php echo $Segm->Airline->AirlineName; ?>
                    </div>
                    <div class="flight-list-grid-airline__left__sub-title px-20">
                        Aircraft <span><?php  echo $Segm->Craft; ?></span>
                    </div>
                    <!--<div class="flight-list-grid-airline__left__sub-title px-20">-->
                    <!--   | Airline Code <span><?php  echo $Segm->Airline->AirlineCode; ?></span>-->
                    <!--</div>-->
                    <!--<div class="flight-list-grid-airline__left__sub-title px-20">-->
                    <!--   | Fare Class <span><?php  echo $Segm->Airline->FareClass; ?> |</span>-->
                    <!--</div>-->
                     
                </div>
                <div class="flight-list-grid-airline__right">
                    Cabin Class:<?php  echo $cabin_class; ?>, Baggage:<?php  echo $Segm->Baggage; ?>, Cabin Baggage:<?php  echo $Segm->CabinBaggage; ?>,
                </div>
            </div>
            <div class="flight-list-grid-price-time mt-15">
                <div class="flight-list-grid-price-time__left">
                    <div class="flight-list-grid-price-time__left__block-1">
                        <h4><?php 
                                                            $input1 = $Origin->DepTime; 
                                                            $date = strtotime($input1); 
                                                            echo $dapa_time = date('h:i a', $date); 
                                        ?></h4>
                        <h6><span><?php echo $sou_code = $Origin->Airport->AirportCode; ?></span> - <span><?php 
                                                            $input1 = $Origin->DepTime; 
                                                            $date = strtotime($input1); 
                                                            echo $dapa_time = date('d M ', $date); 
                                        ?></span></h6>
                    </div>
                    <div class="flight-list-grid-price-time__left__block-2">
                        <h6 class="flight-list-grid-price-time__left__block-2__time"> <?php  $minutes = $Times ?>
                            <?php 
                                                            $input1 = $Origin->DepTime; 
                                                            $date = strtotime($input1); 
                                                             $dapa_time = date('d-M-Y h:i a', $date); 
                                                            ?>
                                                            <?php 
                                                            $input = $ArrTime;
                                                            $date = strtotime($input); 
                                                             $arr1_time = date('d-M-Y h:i a', $date); 
                                                            
                                                            $from_time = strtotime($dapa_time); 
                                                                $to_time = strtotime($arr1_time); 
                                                            $diff_minutes = abs($from_time - $to_time) / 60; 
                                                           
                                                          $hours = floor($diff_minutes / 60);
                                                        $min = $diff_minutes - ($hours * 60);
                                                        echo $hours."h : ".$min;echo"m ";
                                                       
                                                            ?>  
                                                           </h6>
                        <h6><?php 
                                                        if($count == 1){
                                                            echo "Direct"; 
                                                            }
                                                        if($count == 2){
                                                            echo "<span style='color:red;'>1 Stop</span> via  "; 
                                                            echo $ogin;
                                                          ?>
                                                          
                                                          <?php
                                                            }
                                                        if($count == 4){
                                                            echo "<span style='color:red;'>2 Stop</span>  "; 
                                                          
                                                            }     
                                                        if($count == 3){
                                                            echo "<span style='color:red;'>Multi Stop</span>"; 
                                                        }    
                                                        if($count > 4){
                                                                echo "Multi"; 
                                                                    }
                                                                ?></h6>

                    </div>
                    <div class="flight-list-grid-price-time__left__block-3">
                        <h4><?php 
                                                            $input = $ArrTime;
                                                            $date = strtotime($input); 
                                                            echo $arr1_time = date('h:i a', $date); 
                                            ?></h4>
                        <h6><span><?php echo $AirportCode; ?></span> - <span><?php 
                                                            $input = $ArrTime;
                                                            $date = strtotime($input); 
                                                            echo $arr1_time = date('d M', $date); 
                                            ?></span></h6>
                    </div>
                </div>
                <div class="flight-list-grid-price-time__right">
                    <div class="flight-list-grid-price-time__right__price">
                        <h6> 
                            <h2>
                                <?php $mark_up= \App\Markup_Model::where('name','flight')->where('status','active')->first();?>
                                 
                                <?php if($mark_up) { 
                                            if($mark_up->markup_type =='fixed'){
                                                $mark_up->markup_amount;
                                                $subtotal= $dat2->Fare->PublishedFare + $mark_up->markup_amount;
                                                echo $Currency_active->currency_symbol;
                                                echo round($subtotal, 2);
                                            }
                                            else {
                                              $percentage = ($mark_up->markup_amount / 100) * $dat2->Fare->PublishedFare; 
                                              $subtotal= $dat2->Fare->PublishedFare + $percentage;
                                                echo $Currency_active->currency_symbol;
                                                echo round($subtotal);
                                            //   echo $percentage;
                                            }
                                }  else{
                                    $subtotal= $dat2->Fare->PublishedFare;
                                                echo $Currency_active->currency_symbol;
                                                echo round($subtotal);
                                }  
                                ?> 
                            </h2> 
                            for all travellers
                        </h6>
                    </div>
                </div>
            </div>
            <div class="flight-list-grid-more-details-book-now mt-15">
                <div class="flight-list-grid-more-details-book-now__left">
                    <!--<a onclick="openModal()"> <h4>View Flight Details <i class="fa fa-angle-down pl-10"></i></h4> </a>-->
                    <a href="javascript:void(0);" onclick="openModalById('{{ $dat2->ResultIndex }}')"
                        id="viewFlightDetails_{{ $dat2->ResultIndex }}">
                        <h4>View Flight Details <i class="fa fa-angle-down pl-10"></i></h4>
                    </a>

                </div>
                <div class="flight-list-grid-more-details-book-now__right">
                    @if($dat2->IsLCC == '1' )

                    <form action="{{url('/select_seat')}}" enctype="multipart/form-data" method="post">

                    <form action="#" enctype="multipart/form-data" method="post">



                        @csrf

                        <input type="hidden" name="ResultIndex" value="<?php echo $dat2->ResultIndex;?>">

                        <input type="hidden" name="TraceId" value="<?php echo $res->TraceId;?>">

                        <input type="hidden" name="token_id" value="<?php echo $token_id; ?>">

                        <input type="hidden" name="EndUserIp" value="192.168.11.120">

                        <input type="hidden" name="BaseFare" value="<?php echo $dat2->Fare->BaseFare;?>">

                        <input type="hidden" name="Currency" value="<?php echo $dat2->Fare->Currency ;?>">

                        <input type="hidden" name="Tax" value="<?php echo $dat2->Fare->Tax ;?>">

                        <input type="hidden" name="YQTax" value="<?php echo $dat2->Fare->YQTax;?>">

                        <input type="hidden" name="AdditionalTxnFeeOfrd"
                            value="<?php echo $dat2->Fare->AdditionalTxnFeeOfrd;?>">

                        <input type="hidden" name="AdditionalTxnFeePub"
                            value="<?php echo $dat2->Fare->AdditionalTxnFeePub;?>">

                        <input type="hidden" name="OtherCharges" value="<?php echo $dat2->Fare->OtherCharges;?>">

                        <input type="hidden" name="Discount" value="<?php echo $dat2->Fare->Discount;?>">

                        <input type="hidden" name="PublishedFare" value="<?php echo $dat2->Fare->PublishedFare;?>">

                        <input type="hidden" name="OfferedFare" value="<?php echo $dat2->Fare->OfferedFare;?>">

                        <input type="hidden" name="TdsOnCommission" value="<?php echo $dat2->Fare->TdsOnCommission;?>">

                        <input type="hidden" name="TdsOnPLB" value="<?php echo $dat2->Fare->TdsOnPLB;?>">

                        <input type="hidden" name="TdsOnIncentive" value="<?php echo $dat2->Fare->TdsOnIncentive;?>">

                        <input type="hidden" name="ServiceFee" value="<?php echo $dat2->Fare->ServiceFee;?>">

                        <input type="hidden" name="Destination_name"
                            value="<?php echo $Destination->Airport->AirportCode;?>">

                        <input type="hidden" name="Destination_address"
                            value="<?php echo $Destination->Airport->AirportName;?>">

                        <input type="hidden" name="Source_name" value="<?php echo $Origin->Airport->AirportCode;?>">

                        <input type="hidden" name="Source_address" value="<?php echo $Origin->Airport->AirportName;?>">

                        <input type="hidden" name="Duration" value="<?php echo $Segm->Duration;?>">

                        <input type="hidden" name="AirlineName" value="<?php echo $Segm->Airline->AirlineName;?>">

                        <input type="hidden" name="Duration_time" value="<?php echo $Times;?>">
                        <button class="btn btn-theme-blue px-25 py-10">Select Seat</button>

                    </form>

                    @else

                    <form action="{{url('/book_now')}}" enctype="multipart/form-data" method="post">

                        @csrf

                        <input type="hidden" name="ResultIndex" value="<?php echo $dat2->ResultIndex;?>">

                        <input type="hidden" name="TraceId" value="<?php echo $res->TraceId;?>">

                        <input type="hidden" name="token_id" value="<?php echo $token_id; ?>">

                        <input type="hidden" name="EndUserIp" value="192.168.11.120">

                        <input type="hidden" name="BaseFare" value="<?php echo $dat2->Fare->BaseFare;?>">

                        <input type="hidden" name="Currency" value="<?php echo $dat2->Fare->Currency ;?>">

                        <input type="hidden" name="Tax" value="<?php echo $dat2->Fare->Tax ;?>">

                        <input type="hidden" name="YQTax" value="<?php echo $dat2->Fare->YQTax;?>">

                        <input type="hidden" name="AdditionalTxnFeeOfrd"
                            value="<?php echo $dat2->Fare->AdditionalTxnFeeOfrd;?>">

                        <input type="hidden" name="AdditionalTxnFeePub"
                            value="<?php echo $dat2->Fare->AdditionalTxnFeePub;?>">

                        <input type="hidden" name="OtherCharges" value="<?php echo $dat2->Fare->OtherCharges;?>">

                        <input type="hidden" name="Discount" value="<?php echo $dat2->Fare->Discount;?>">

                        <input type="hidden" name="PublishedFare" value="<?php echo $dat2->Fare->PublishedFare;?>">

                        <input type="hidden" name="OfferedFare" value="<?php echo $dat2->Fare->OfferedFare;?>">

                        <input type="hidden" name="TdsOnCommission" value="<?php echo $dat2->Fare->TdsOnCommission;?>">

                        <input type="hidden" name="TdsOnPLB" value="<?php echo $dat2->Fare->TdsOnPLB;?>">

                        <input type="hidden" name="TdsOnIncentive" value="<?php echo $dat2->Fare->TdsOnIncentive;?>">

                        <input type="hidden" name="ServiceFee" value="<?php echo $dat2->Fare->ServiceFee;?>">

                        <input type="hidden" name="Destination_name"
                            value="<?php echo $Destination->Airport->AirportCode;?>">

                        <input type="hidden" name="Destination_address"
                            value="<?php echo $Destination->Airport->AirportName;?>">

                        <input type="hidden" name="Source_name" value="<?php echo $sou_code;?>">

                        <input type="hidden" name="Source_address" value="<?php echo $Origin->Airport->AirportName;?>">

                        <input type="hidden" name="Duration" value="<?php echo $Segm->Duration;?>">

                        <input type="hidden" name="AirlineName" value="<?php echo $Segm->Airline->AirlineName;?>">

                        <input type="hidden" name="DepTime" value="<?php echo $input1;?>">

                        <input type="hidden" name="ArrTime" value="<?php echo $Destination->ArrTime;?>">

                        <input type="hidden" name="adult" value="<?php echo $adult;?>">

                        <input type="hidden" name="count" value="<?php echo $count;?>">

                        <input type="hidden" name="Duration_time" value="<?php echo $Times;?>">
                        <button class="btn btn-theme-blue px-25 py-10">Book Now</button>

                    </form>

                    @endif


                </div>
            </div>
        </div>
  
        @endif
    @endforeach
    @endforeach
         
                  <div id="customModal_{{ $dat2->ResultIndex }}" class="custom-modal">
                  
    <div class="custom-modal-content">
        
        <span class="close" onclick="closeModal('{{ $dat2->ResultIndex }}')">&times;</span>
        <h2>Your Flight To {{ $Destination->Airport->AirportCode }}</h2>
        <p><?php 
                                                        if($count == 1){
                                                            echo "Direct"; 
                                                            }
                                                        if($count == 2){
                                                            echo "<span style='color:red;'>1 Stop</span>"; 
                                                            
                                                          ?>
                                                          
                                                          <?php
                                                            }
                                                        if($count == 4){
                                                            echo "<span style='color:red;'>2 Stop</span>  "; 
                                                          
                                                            }     
                                                        if($count == 3){
                                                            echo "<span style='color:red;'>Multi Stop</span>"; 
                                                        }    
                                                        if($count > 4){
                                                                echo "Multi"; 
                                                                    }
                                                                ?>  <?php 
                                                            $input = $ArrTime;
                                                            $date = strtotime($input); 
                                                             $arr1_time = date('d-M-Y h:i a', $date); 
                                                            
                                                            $from_time = strtotime($dapa_time); 
                                                                $to_time = strtotime($arr1_time); 
                                                            $diff_minutes = abs($from_time - $to_time) / 60; 
                                                           
                                                          $hours = floor($diff_minutes / 60);
                                                        $min = $diff_minutes - ($hours * 60);
                                                        echo $hours."h : ".$min;echo"m ";
                                                       
                                                            ?>  
                                                            </p>
          @foreach($Segments as $Segment)
             @foreach($Segment as $SegmIndex => $Segm)
              
        <?php
            $Origin = $Segm->Origin;
            $Airline = $Segm->Airline;
            $Destination = $Segm->Destination;
            // $segmentId = $Segm->id; // Assuming there's an ID. If not, you can use $SegmIndex, but ensure it's unique across all segments.
        ?>   
        <div class="container-fluid">
            <!-- Flight details table -->
            <div>
                <table>
                    <td style="border-right:1px solid #000;">
                        <img src="public/assets/AirlineLogo/{{ $Airline->AirlineCode }}.gif" width="20px" height="20px">
                        <span style="margin:0px 10px 0px 10px;">{{ $Airline->AirlineName }}</span>| Aircraft <span><?php  echo $Segm->Craft; ?> |</span>
                        | Airline Code <span><?php  echo $Segm->Airline->AirlineCode; ?></span>
                        | Flight No. <span><?php  echo $Segm->Airline->FlightNumber; ?> |</span>
                    </td>
                    <!-- Add more details as needed -->
                </table>
            </div>

            <!-- Origin and Destination details -->
            <div class="row" style="border-bottom:1px dotted;margin:10px;">
                <!-- Origin details -->
                <div class="col-md-4">
                    <p>From</p>
                    <h2 style="color:blue;">{{ $Origin->Airport->AirportCode }}</h2>
                    <span>
                        <?php 
                         $input_a = $Origin->DepTime; 
                         $date_a = strtotime($input_a); 
                         echo $dapa_time_a = date('h:i a', $date_a); 
                                        ?>
                    </span>
                    <span>
                        <?php 
                         $input_a = $Origin->DepTime; 
                         $date_a = strtotime($input_a); 
                         echo $dapa_time_a = date('d M', $date_a); 
                                        ?>
                    </span> 
                    <p>{{ $Origin->Airport->AirportName }},{{ $Origin->Airport->CityName }},{{ $Origin->Airport->CountryName }}</p>
                </div>
                <?php
                $to_time1 = $Segm->Duration; 
                 $diff_minutes1 = $to_time1; 
                 $hours1 = floor($diff_minutes1 / 60);
                 $min1 = $diff_minutes1 - ($hours1 * 60);

?>
                <!-- Add more details or leave empty as needed -->
                    <div class="col-md-4">
                         <div style="   margin-top: 23px;text-align: center;">
                             <p><?php   echo $hours1."h : ".$min1;echo"m "; ?></p>
                         </div>
                        <div style="width: 89%;
    
 
    border: 2px solid #bfbcbc;"></div>
                    </div>
                <!-- Destination details -->
                <div class="col-md-4">
                    <p>To</p>
                    <h2 style="color:blue;">{{ $Destination->Airport->AirportCode }}</h2>
                    <span>
                        <?php 
                            $input_aa = $Destination->ArrTime;
                            $date_aa = strtotime($input_aa); 
                            echo $arr1_time_aa = date('h:i a', $date_aa); 
                        ?>
                    </span>
                    <span>
                        <?php 
                            $input_aa = $Destination->ArrTime;
                            $date_aa = strtotime($input_aa); 
                            echo $arr1_time_aa = date('d M ', $date_aa); 
                        ?>
                    </span>
                    <p>{{ $Destination->Airport->AirportName }},{{ $Destination->Airport->CityName }},{{ $Destination->Airport->CountryName }}</p>
                </div>
            </div>

        </div>
        @endforeach 
                  @endforeach 
    </div>
     
</div>             
                  
      @endif
        @endforeach
        @endforeach
        @endif
        @endforeach
        @endforeach
        @endif
    </div>

</div>
<div class="load_more_flight">
                            <a href="#" id="loadMore">Load More</a>
                           </div>
 @endif                
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

      $("#loadMore").text("No Content").addClass("noContent");

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