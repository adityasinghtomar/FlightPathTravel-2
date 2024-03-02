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
  <?php $Total_Singapore_Airlines = 0; ?>
  <?php $Total_Etihad_Airways = 0; ?>
  <?php $Total_Lufthansa = 0; ?>
 
                                    
                                    <?php $count_direct = 0; ?>
                                    <?php $count_one = 0; ?>
                                    <?php $count_multi = 0; ?>
    @foreach($dat as $dat1)
    @foreach($dat1 as $key=>$dat2)
    <?php  $Segments = $dat2->Segments; ?>
     <?php  $FareRules = $dat2->FareRules; ?>
     @foreach( $Segments as $Segment)
     @foreach( $Segment as $Segm)
        <?php if($Segm->Airline->AirlineName == "Air India"){ ?>
            <? $Total_AirlineName++ ?>
        <?php } ?>
        <?php if($Segm->Airline->AirlineName == "Vistara"){ ?>
            <? $Total_Vistara++ ?>
        <?php } ?>
        <?php if($Segm->Airline->AirlineName == "Singapore Airlines"){ ?>
            <? $Total_Singapore_Airlines++ ?>
        <?php } ?> 
        <?php if($Segm->Airline->AirlineName == "Etihad Airways"){ ?>
            <? $Total_Etihad_Airways++ ?>
        <?php } ?> 
        <?php if($Segm->Airline->AirlineName == "Lufthansa"){ ?>
            <? $Total_Lufthansa++ ?>
        <?php } ?> 
        
        <? $Total_flight++ ?> 
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
                                    <input class="form-check-input" type="radio" name="travelstops" id="travelstopsany" value="Any" checked="">
                                    <label class="form-check-label" for="tripOneway">Any</label>
                                </div>
                                <small><?php if(isset($Total_flight)){ echo $Total_flight; }?></small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">    
                                    <input class="form-check-input" type="radio" name="travelstops" id="travelstopsdirect" value="Direct only">
                                    <label class="form-check-label" for="tripRoundtrip">Direct only</label>
                                </div>
                                <small><?php if(isset($count_direct)){ echo $count_direct; } ?></small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="travelstops" id="travelstopsone" value="One stop">
                                    <label class="form-check-label" for="tripMulticity">One stop</label>
                                </div>
                                <small><?php if(isset($count_one)){ echo $count_one;} ?></small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="travelstops" id="travelstopsanymulti" value="Multi stop">
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
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Air India
                                    </label>
                                </div>
                                <small><?php if(isset($Total_AirlineName)){ echo $Total_AirlineName; }?></small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Vistara
                                    </label>
                                </div>
                                <small><?php if(isset($Total_Vistara)){ echo $Total_Vistara;} ?></small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Singapore Airlines
                                    </label>
                                </div>
                                <small><?php if(isset($Total_Singapore_Airlines)){ echo $Total_Singapore_Airlines;} ?></small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Etihad Airways
                                    </label>
                                </div>
                                <small><?php if(isset($Total_Etihad_Airways)){ echo $Total_Etihad_Airways;} ?></small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
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
                                    <input class="form-check-input" type="radio" name="byprice" id="bypriceduration" value="Duration" checked="">
                                    <label class="form-check-label" for="tripOneway">Duration</label>
                                </div>
                                <small>50</small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">    
                                    <input class="form-check-input" type="radio" name="byprice" id="bypricecheapest" value="Cheapest">
                                    <label class="form-check-label" for="tripRoundtrip">Cheapest</label>
                                </div>
                                <small>5</small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="byprice" id="bypriceearliest" value="Earliest">
                                    <label class="form-check-label" for="tripMulticity">Earliest</label>
                                </div>
                                <small>2</small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="byprice" id="bypricelatest" value="Latest">
                                    <label class="form-check-label" for="tripMulticity">Latest</label>
                                </div>
                                <small>0</small>
                            </div>
                        </div>
                    </div>
                </div>
                 <?php $Currency_active =\App\Currency_Model::where('currency_active','0')->first(); ?> 
@if(isset($fli_data)) 
<div class="col-md-9">
                    <div class="flight-list-grid">
@if(isset($ress))
@foreach($ress as $res)
@if(isset($res->Results))        
 <?php $dat = $res->Results;?>
    @foreach($dat as $dat1)
    @foreach($dat1 as $key=>$dat2)
    <?php  $Segments = $dat2->Segments; ?>
     <?php  $FareRules = $dat2->FareRules; ?>
     @foreach( $Segments as $Segment)
     @foreach( $Segment as $Segm)
     <?php $Origin = $Segm->Origin; ?> 
      <?php  $Destination = $Segm->Destination; ?>
                                    <?php $count = 0; ?>
                                    <?php $Times = 0; ?>
                                    @foreach( $Segments as $Segment)
                                    @foreach( $Segment as $Segm)
                                    <?php  $Destination = $Segm->Destination; ?>
                                    <?php  $AirportCode = $Destination->Airport->AirportCode; ?>
                                    <?php  $ArrTime = $Destination->ArrTime; ?>
                                    <?php $AirportName = $Destination->Airport->AirportName;?>
                                    <?php $CityName = $Destination->Airport->CityName;?>
                                    <?php $Times += $Segm->Duration;?>
                                  <? $count++ ?>
                                    @endforeach
                                    @endforeach
                            <div class="border-box-style-1 p-20 mt-20">
                            <div class="flight-list-grid-airline">
                                <div class="flight-list-grid-airline__left">
                                    <div class="flight-list-grid-airline__left__img">
                                        <div class="rounded-square-40-style-1">
                                            <img src="public/assets/AirlineLogo/<?php echo $dat2->AirlineCode;?>.gif">
                                        </div>
                                    </div>
                                    <div class="flight-list-grid-airline__left__title px-20">
                                        <?php echo $Segm->Airline->AirlineName; ?>
                                    </div>
                                    <div class="flight-list-grid-airline__left__sub-title px-20">
                                        Aircraft <span><?php  echo $Segm->Craft; ?></span>
                                    </div>
                                </div>
                                <div class="flight-list-grid-airline__right">
                                    Included: personal item, cabin bag, checked bag
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
                                                        <?php $hours = floor($minutes / 60);
                                                        $min = $minutes - ($hours * 60);
                                                        echo $hours."h : ".$min;echo"m ";
                                                        ?></h6>
                                        <h6><?php 
                                                        if($count == 1){
                                                            echo "Direct"; 
                                                            }
                                                        if($count == 2){
                                                            echo "One"; 
                                                            }
                                                        if($count == 4){
                                                            echo "One"; 
                                                            }     
                                                        if($count == 3){
                                                            echo "Multi"; 
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
                                        <h2> @if(session()->get('user_id')) <?php $comm= \App\Commision_Add_Model::where('user_id',session()->get('user_id'))->where('commision_type','flight')->first();  ?> <?php $markup= \App\Markup_Apply_Model::where('user_id',session()->get('user_id'))->first();  ?>

                                            <?php if($comm) {  

                                            $commision= \App\Commision_Model::where('id',$comm->commision_id)->first();

                                            if($commision){

                                            $commis= $commision->commision ; $commis_type = $commision->commision_type; 

                                            }else {$commis= 0; $commis_type ='';}

                                            }

                                            else {$commis= 0; $commis_type ='';} ?>

                                            <?php if($markup) {  $mark_up= \App\Markup_Model::where('id',$markup->markup_id)->first(); $mark_up1= $mark_up->markup_amount ;  }else {$mark_up1= 0; } ?>

                                           <h2><?php echo $dat2->Fare->Currency;?> <?php echo $dat2->Fare->PublishedFare;?><sup> </sup></h2><h6><sub style="width:10px;height:10px;"> Commision : {{$commis}} {{$commis_type}}</sub></h6><h6> <sub style="width:10px;height:10px;"> Mark-UP : {{$mark_up1}}</sub></h6> <h6><sub style="width:10px;height:10px;">Adult X {{$adult}}</sub></h6>

                                            @else

                                            {{ $Currency_active->currency_symbol}} <?php  $subtotal= $dat2->Fare->PublishedFare / $Currency_active->currency_rates ;echo round($subtotal, 2); ?>

                                            @endif
</h2>
                                        <h6> @if(session()->get('user_id')) <?php $comm= \App\Commision_Add_Model::where('user_id',session()->get('user_id'))->where('commision_type','flight')->first();  ?> <?php $markup= \App\Markup_Apply_Model::where('user_id',session()->get('user_id'))->first();  ?>

                                            <?php if($comm) {  

                                            $commision= \App\Commision_Model::where('id',$comm->commision_id)->first();

                                            if($commision){

                                            $commis= $commision->commision ; $commis_type = $commision->commision_type; 

                                            }else {$commis= 0; $commis_type ='';}

                                            }

                                            else {$commis= 0; $commis_type ='';} ?>

                                            <?php if($markup) {  $mark_up= \App\Markup_Model::where('id',$markup->markup_id)->first(); $mark_up1= $mark_up->markup_amount ;  }else {$mark_up1= 0; } ?>

                                           <h2><?php echo $dat2->Fare->Currency;?> <?php echo $dat2->Fare->PublishedFare;?><sup> </sup></h2><h6><sub style="width:10px;height:10px;"> Commision : {{$commis}} {{$commis_type}}</sub></h6><h6> <sub style="width:10px;height:10px;"> Mark-UP : {{$mark_up1}}</sub></h6> <h6><sub style="width:10px;height:10px;">Adult X {{$adult}}</sub></h6>

                                            @else

                                            {{ $Currency_active->currency_symbol}} <?php  $subtotal= $dat2->Fare->PublishedFare / $Currency_active->currency_rates ;echo round($subtotal, 2); ?>

                                            @endif
 for all travellers</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="flight-list-grid-more-details-book-now mt-15">
                                <div class="flight-list-grid-more-details-book-now__left">
                                    <h4>View Flight Details</h4> <i class="fa fa-angle-down pl-10"></i>
                                </div>
                                <div class="flight-list-grid-more-details-book-now__right">
                                     @if($dat2->IsLCC == '1' )    

                                        <!--<form action="{{url('/select_seat')}}" enctype="multipart/form-data" method="post">-->

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

                                            <input type="hidden" name="AdditionalTxnFeeOfrd" value="<?php echo $dat2->Fare->AdditionalTxnFeeOfrd;?>"> 

                                            <input type="hidden" name="AdditionalTxnFeePub" value="<?php echo $dat2->Fare->AdditionalTxnFeePub;?>"> 

                                            <input type="hidden" name="OtherCharges" value="<?php echo $dat2->Fare->OtherCharges;?>">

                                            <input type="hidden" name="Discount" value="<?php echo $dat2->Fare->Discount;?>">

                                            <input type="hidden" name="PublishedFare" value="<?php echo $dat2->Fare->PublishedFare;?>">

                                            <input type="hidden" name="OfferedFare" value="<?php echo $dat2->Fare->OfferedFare;?>">

                                            <input type="hidden" name="TdsOnCommission" value="<?php echo $dat2->Fare->TdsOnCommission;?>">

                                            <input type="hidden" name="TdsOnPLB" value="<?php echo $dat2->Fare->TdsOnPLB;?>">

                                            <input type="hidden" name="TdsOnIncentive" value="<?php echo $dat2->Fare->TdsOnIncentive;?>">

                                            <input type="hidden" name="ServiceFee" value="<?php echo $dat2->Fare->ServiceFee;?>">

                                            <input type="hidden" name="Destination_name" value="<?php echo $Destination->Airport->AirportCode;?>">

                                            <input type="hidden" name="Destination_address" value="<?php echo $Destination->Airport->AirportName;?>">

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

                                            <input type="hidden" name="AdditionalTxnFeeOfrd" value="<?php echo $dat2->Fare->AdditionalTxnFeeOfrd;?>"> 

                                            <input type="hidden" name="AdditionalTxnFeePub" value="<?php echo $dat2->Fare->AdditionalTxnFeePub;?>"> 

                                            <input type="hidden" name="OtherCharges" value="<?php echo $dat2->Fare->OtherCharges;?>">

                                            <input type="hidden" name="Discount" value="<?php echo $dat2->Fare->Discount;?>">

                                            <input type="hidden" name="PublishedFare" value="<?php echo $dat2->Fare->PublishedFare;?>">

                                            <input type="hidden" name="OfferedFare" value="<?php echo $dat2->Fare->OfferedFare;?>">

                                            <input type="hidden" name="TdsOnCommission" value="<?php echo $dat2->Fare->TdsOnCommission;?>">

                                            <input type="hidden" name="TdsOnPLB" value="<?php echo $dat2->Fare->TdsOnPLB;?>">

                                            <input type="hidden" name="TdsOnIncentive" value="<?php echo $dat2->Fare->TdsOnIncentive;?>">

                                            <input type="hidden" name="ServiceFee" value="<?php echo $dat2->Fare->ServiceFee;?>">

                                            <input type="hidden" name="Destination_name" value="<?php echo $Destination->Airport->AirportCode;?>">

                                            <input type="hidden" name="Destination_address" value="<?php echo $Destination->Airport->AirportName;?>">

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
                    
                     @endforeach
                     @endforeach
                     @endforeach
                     @endforeach
                     @endif
                     @endforeach
                     @endif
                    </div>
                     
                </div>
 @endif                
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

@if(isset($fli_data12)) 

<div class="col-lg-9">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="flight_search_result_wrapper">

                                <div class="flight_search_item_wrappper">

                                    @if(isset($ress))

                                    

         @foreach($ress as $res)

@if(isset($res->Results))        

    <?php $dat = $res->Results;?>

            

    @foreach($dat as $dat1)

        @foreach($dat1 as $key=>$dat2)

        

        <?php  $Segments = $dat2->Segments; ?>

        <?php  $FareRules = $dat2->FareRules; ?>

         @foreach( $Segments as $Segment)

            @foreach( $Segment as $Segm)

          <?php $Origin = $Segm->Origin; ?> 

          

         <?php  $Destination = $Segm->Destination; ?>

                                    <?php $count = 0; ?>

                                    <?php $Times = 0; ?>

                                                @foreach( $Segments as $Segment)

                                    @foreach( $Segment as $Segm)

                                    

                                    <?php  $Destination = $Segm->Destination; ?>

                                    <?php  $AirportCode = $Destination->Airport->AirportCode; ?>

                                   <?php  $ArrTime = $Destination->ArrTime; ?>

                                   <?php $AirportName = $Destination->Airport->AirportName;?>

                                   <?php $CityName = $Destination->Airport->CityName;?>

                                   <?php $Times += $Segm->Duration;?>

                                  <? $count++ ?>

                                    @endforeach

                                    @endforeach

                <!-- @if($Origin->Airport->AirportCode == $from) -->

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
                                                            else{
                                                            
                                                                $stops1 ="Multi";
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

                                    

                                    <div class="flight_search_items content player <?php echo $str; ?> <?php echo $refund;?> <?php echo $stops1;?> ">

                                        

                                        <div class="multi_city_flight_lists ">

                                            <div class="left_side_search_heading">

                                                <div class="row">

                                                                    <div class="col-lg-6">

                                                                      <h5 class="apply " style="margin-left:10px;"> <?php echo $Segm->Airline->AirlineName; ?> </h5>

                                                                     </div>

                                                                     <div class="col-lg-6">

                                                                     <h5 class="apply" style="margin-left:10px;">Aircraft: <?php  echo $Segm->Craft; ?> </h5>

                                                                     </div>

                                                                 </div>     

                                        </div> 

                            <div class="flight_multis_area_wrapper"> 

                                            

                                                <div class="flight_search_left">

                                                    <div class="">

                                                        <img src="public/assets/AirlineLogo/<?php echo $dat2->AirlineCode;?>.gif" alt="img" style="height:30px;width:30px;object-fit: cover;">

                                                    </div>

                                                    <div class="flight_search_destination">

                                                        

                                                        <p>From</p>

                                                        <h3><?php echo $sou_code = $Origin->Airport->AirportCode; ?></h3>

                                                        <h6><?php echo $sou_name = $Origin->Airport->AirportName;?></h6>

                                                        <h6>Departure Time :</h6>

                                                        <h6>

                                                        <?php 

                                                            $input1 = $Origin->DepTime; 

                                                            $date = strtotime($input1); 

                                                            echo $dapa_time = date('d-M-Y h:i a', $date); 

                                                            ?>

                                                        </h6> 

                                                        

                                                    </div>

                                                </div>

                                                

                                                <div class="flight_search_middel">

                                                    <div class="flight_right_arrow">

                                                        <img src="assets/img/icon/right_arrow.png" alt="icon">

                                                        <h6>

                                                            <?php 

                                                            if($count == 1){

                                                                echo "Non"; 

                                                                }

                                                            if($count == 2){

                                                                echo "One"; 

                                                                }

                                                            if($count == 4){

                                                                echo "One"; 

                                                                }     

                                                            if($count == 3){

                                                                echo "Multi"; 

                                                                }    

                                                            if($count > 4){

                                                                echo "Multi"; 

                                                                }

                                                                

                                                            

                                                             ?> Stops</h6>

                                                        <p>

                                                            <?php 

                                                            // $input1 = $Origin->DepTime; 

                                                            // $date = strtotime($input1); 

                                                            //  $dapa_time = date('d-M-Y h:i a', $date); 

                                                            ?>

                                                            <?php 

                                                        //     $input = $ArrTime;

                                                        //     $date = strtotime($input); 

                                                        //      $arr1_time = date('d-M-Y h:i a', $date); 

                                                            

                                                        //     $from_time = strtotime($dapa_time); 

                                                        //         $to_time = strtotime($arr1_time); 

                                                        //     $diff_minutes = abs($from_time - $to_time) / 60; 

                                                           

                                                        //   $hours = floor($diff_minutes / 60);

                                                        // $min = $diff_minutes - ($hours * 60);

                                                        // echo $hours."h : ".$min;echo"m ";

                                                       

                                                            ?>  

                                                            <?php  $minutes = $Times ?> 

                                                        <?php $hours = floor($minutes / 60);

                                                        $min = $minutes - ($hours * 60);

                                                        echo $hours."h : ".$min;echo"m ";

                                                        ?>

                                                        </p>

                                                    </div>

                                                    <div class="flight_search_destination">

                                                        <p>To</p>

                                    

                                    

                                                         <h3><?php echo $AirportCode; ?></h3>

                                                        <h6><?php echo $AirportName;?> ,<?php echo $CityName;?></h6>

                                                        <h6>Arrival Time :</h6>

                                                        <h6>

                                                        <?php 

                                                            $input = $ArrTime;

                                                            $date = strtotime($input); 

                                                            echo $arr1_time = date('d-M-Y h:i a', $date); 

                                                            ?>

                                                            </h6>

                                                    </div>

                                                </div>

                                            </div>



                                        </div>

                                        <div class="flight_search_right">

                                            <h5><del></del></h5>

                                            @if(session()->get('user_id')) <?php $comm= \App\Commision_Add_Model::where('user_id',session()->get('user_id'))->where('commision_type','flight')->first();  ?> <?php $markup= \App\Markup_Apply_Model::where('user_id',session()->get('user_id'))->first();  ?>

                                            <?php if($comm) {  

                                            $commision= \App\Commision_Model::where('id',$comm->commision_id)->first();

                                            if($commision){

                                            $commis= $commision->commision ; $commis_type = $commision->commision_type; 

                                            }else {$commis= 0; $commis_type ='';}

                                            }

                                            else {$commis= 0; $commis_type ='';} ?>

                                            <?php if($markup) {  $mark_up= \App\Markup_Model::where('id',$markup->markup_id)->first(); $mark_up1= $mark_up->markup_amount ;  }else {$mark_up1= 0; } ?>

                                           <h2><?php echo $dat2->Fare->Currency;?> <?php echo $dat2->Fare->PublishedFare;?><sup> </sup></h2><h6><sub style="width:10px;height:10px;"> Commision : {{$commis}} {{$commis_type}}</sub></h6><h6> <sub style="width:10px;height:10px;"> Mark-UP : {{$mark_up1}}</sub></h6> <h6><sub style="width:10px;height:10px;">Adult X {{$adult}}</sub></h6>

                                            @else

                                            <h2>{{ $Currency_active->currency_symbol}} <?php  $subtotal= $dat2->Fare->PublishedFare / $Currency_active->currency_rates ;echo round($subtotal, 2); ?><sup> </sup></h2><sub style="width:10px;height:10px;">Adult X {{$adult}}</sub>

                                            @endif

                                            <!--<a href="{{url('/flight_booking')}}" class="btn btn_theme btn_sm">Book-->

                                            <!--    now</a>-->

                                            <p>*Discount applicable on some conditions</p>

                                        @if($dat2->IsLCC == '1' )    

                                        <!--<form action="{{url('/select_seat')}}" enctype="multipart/form-data" method="post">-->

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

                                            <input type="hidden" name="AdditionalTxnFeeOfrd" value="<?php echo $dat2->Fare->AdditionalTxnFeeOfrd;?>"> 

                                            <input type="hidden" name="AdditionalTxnFeePub" value="<?php echo $dat2->Fare->AdditionalTxnFeePub;?>"> 

                                            <input type="hidden" name="OtherCharges" value="<?php echo $dat2->Fare->OtherCharges;?>">

                                            <input type="hidden" name="Discount" value="<?php echo $dat2->Fare->Discount;?>">

                                            <input type="hidden" name="PublishedFare" value="<?php echo $dat2->Fare->PublishedFare;?>">

                                            <input type="hidden" name="OfferedFare" value="<?php echo $dat2->Fare->OfferedFare;?>">

                                            <input type="hidden" name="TdsOnCommission" value="<?php echo $dat2->Fare->TdsOnCommission;?>">

                                            <input type="hidden" name="TdsOnPLB" value="<?php echo $dat2->Fare->TdsOnPLB;?>">

                                            <input type="hidden" name="TdsOnIncentive" value="<?php echo $dat2->Fare->TdsOnIncentive;?>">

                                            <input type="hidden" name="ServiceFee" value="<?php echo $dat2->Fare->ServiceFee;?>">

                                            <input type="hidden" name="Destination_name" value="<?php echo $Destination->Airport->AirportCode;?>">

                                            <input type="hidden" name="Destination_address" value="<?php echo $Destination->Airport->AirportName;?>">

                                            <input type="hidden" name="Source_name" value="<?php echo $Origin->Airport->AirportCode;?>">

                                            <input type="hidden" name="Source_address" value="<?php echo $Origin->Airport->AirportName;?>">

                                            <input type="hidden" name="Duration" value="<?php echo $Segm->Duration;?>">

                                            <input type="hidden" name="AirlineName" value="<?php echo $Segm->Airline->AirlineName;?>">

                                            <input type="hidden" name="Duration_time" value="<?php echo $Times;?>">

                                        <button class="btn btn_theme btn_sm">Select Seat</button>

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

                                            <input type="hidden" name="AdditionalTxnFeeOfrd" value="<?php echo $dat2->Fare->AdditionalTxnFeeOfrd;?>"> 

                                            <input type="hidden" name="AdditionalTxnFeePub" value="<?php echo $dat2->Fare->AdditionalTxnFeePub;?>"> 

                                            <input type="hidden" name="OtherCharges" value="<?php echo $dat2->Fare->OtherCharges;?>">

                                            <input type="hidden" name="Discount" value="<?php echo $dat2->Fare->Discount;?>">

                                            <input type="hidden" name="PublishedFare" value="<?php echo $dat2->Fare->PublishedFare;?>">

                                            <input type="hidden" name="OfferedFare" value="<?php echo $dat2->Fare->OfferedFare;?>">

                                            <input type="hidden" name="TdsOnCommission" value="<?php echo $dat2->Fare->TdsOnCommission;?>">

                                            <input type="hidden" name="TdsOnPLB" value="<?php echo $dat2->Fare->TdsOnPLB;?>">

                                            <input type="hidden" name="TdsOnIncentive" value="<?php echo $dat2->Fare->TdsOnIncentive;?>">

                                            <input type="hidden" name="ServiceFee" value="<?php echo $dat2->Fare->ServiceFee;?>">

                                            <input type="hidden" name="Destination_name" value="<?php echo $Destination->Airport->AirportCode;?>">

                                            <input type="hidden" name="Destination_address" value="<?php echo $Destination->Airport->AirportName;?>">

                                            <input type="hidden" name="Source_name" value="<?php echo $sou_code;?>">

                                            <input type="hidden" name="Source_address" value="<?php echo $sou_name;?>">

                                            <input type="hidden" name="Duration" value="<?php echo $Segm->Duration;?>">

                                            <input type="hidden" name="AirlineName" value="<?php echo $Segm->Airline->AirlineName;?>">

                                            <input type="hidden" name="DepTime" value="<?php echo $input1;?>">

                                            <input type="hidden" name="ArrTime" value="<?php echo $Destination->ArrTime;?>">

                                            <input type="hidden" name="adult" value="<?php echo $adult;?>">

                                            <input type="hidden" name="count" value="<?php echo $count;?>">

                                            <input type="hidden" name="Duration_time" value="<?php echo $Times;?>">

                                        <button class="btn btn_theme btn_sm">Book now</button>

                                        </form> 

                                        @endif

                                         <!--<a href="{{url('/flight_booking')}}" class="btn btn_theme btn_sm">Book-->

                                         <!--       now</a>-->

                                            <h6 data-bs-toggle="collapse" data-bs-target="#collapseExample<?php echo $dat2->ResultIndex;?>"

                                                aria-expanded="false" aria-controls="collapseExample">Show more <i

                                                    class="fas fa-chevron-down"></i></h6>

                                        </div>

                                    </div>

                                        <!-- @endif  -->

                                    @endforeach

                                    

                                    

                                @endforeach

                                

                                    @foreach( $Segments as $Segment)

                                    @foreach( $Segment as $Segm)

                                    <?php $Origin = $Segm->Origin; ?> 

                                    <?php $Airline = $Segm->Airline; ?> 

                                     

                                    <?php  $Destination = $Segm->Destination; ?>

                                     

                                    <div class="flight_policy_refund collapse" id="collapseExample<?php echo $dat2->ResultIndex;?>">

                                        <div class="flight_show_down_wrapper">

                                            <div class="flight-shoe_dow_item">

                                                <div class="airline-details">

                                                    <div class="img"><img src="public/assets/AirlineLogo/<?php  echo  $Airline->AirlineCode; ?>.gif" alt="img"></div>

                                                    <span class="airlineName fw-500"><?php  echo  $Airline->FlightNumber; ?> &nbsp;

                                                        </span>

                                                    <span class="flightNumber"></span>

                                                </div>

                                                <div class="flight_inner_show_component">

                                                    <div class="flight_det_wrapper">

                                                        <div class="flight_det">

                                                            <div class="code_time">

                                                                <p>From</p>

                                                                <span class="time"><?php  echo  $Origin->Airport->AirportCode; ?></span>

                                                                <span class="time"><?php 

                                                            $input = $Origin->DepTime; 

                                                            $date = strtotime($input); 

                                                            echo date('h:i a', $date); 

                                                            ?></span>

                                                             <h6><?php echo $Origin->Airport->AirportName;?>,<?php echo $Origin->Airport->CityName;?>,<?php echo $Origin->Airport->CountryName;?></h6>

                                                               

                                                            </div>

                                                            <p class="airport">

                                                            </p>

                                                            <h6><?php 

                                                            $input = $Origin->DepTime; 

                                                            $date = strtotime($input); 

                                                            echo date('d-M-Y', $date); 

                                                            ?></h6>

                                                        </div>

                                                    </div>

                                                    <div class="flight_duration">

                                                        <div class="arrow_right"></div>

                                                        <h6><?php  $minutes = $Segm->Duration; ?> 

                                                        <?php $hours = floor($minutes / 60);

                                                        $min = $minutes - ($hours * 60);

                                                        echo $hours."h : ".$min;echo"m ";

                                                        ?>  </h6>

                                                    </div>

                                                    <div class="flight_det_wrapper">

                                                        <div class="flight_det">

                                                            <div class="code_time">

                                                                <p>To</p>

                                                                <span class="time"><?php echo $Destination->Airport->AirportCode; ?></span>

                                                                 <span class="time"><?php 

                                                            $input = $Destination->ArrTime;

                                                            $date = strtotime($input); 

                                                            echo date('h:i a', $date); 

                                                            ?></span>

                                                            <h6><?php echo $Destination->Airport->AirportName;?>,<?php echo $Destination->Airport->CityName;?>,<?php echo $Destination->Airport->CountryName;?></h6>

                                                               

                                                            </div>

                                                            <p class="airport">

                                                            </p>

                                                            <h6><?php 

                                                            $input = $Destination->ArrTime;

                                                            $date = strtotime($input); 

                                                            echo date('d-M-Y', $date); 

                                                            ?></h6>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="flight_refund_policy">

                                                <div class="TabPanelInner flex_widht_less">

                                                    <h4>Refund Policy</h4>

                                                    <p class="fz12">1. Refund and Date Change are done as per the

                                                        following policies.</p>

                                                    <p class="fz12">2. Refund Amount= Refund Charge (as per airline

                                                        policy + ShareTrip Convenience Fee). </p>

                                                    <p class="fz12">3. Date Change Amount= Date Change Fee (as per

                                                        Airline Policy + ShareTrip Convenience Fee).</p>

                                                </div>

                                                <div class="TabPanelInner">

                                                    <h4>Baggage</h4>

                                                    <div class="flight_info_taable">

                                                        <h3><?php echo $Segm->Baggage; ?></h3>

                                                        <p><span>/</span> person</p>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    @endforeach 

                                    @endforeach 

                                &nbsp;

                                

                                @endforeach

                               

                                @endforeach

                                @endif

                                @endforeach

                                

                                @endif

                                    

                                <!--Flight Search Data End-->

                               

                                

                            <div class="load_more_flight">

                            <a href="#" id="loadMore">Load More</a>

                           </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endif   

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

    <footer id="footer_area">

        <div class="container">

            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">

                    <div class="footer_heading_area">

                        <h5>Need any help?</h5>

                    </div>

                    <div class="footer_first_area">

                        <div class="footer_inquery_area">

                            <h5>Call 24/7 for any help</h5>

                            <h3> <a href="tel:+00-123-456-789">+00 123 456 789</a></h3>

                        </div>

                        <div class="footer_inquery_area">

                            <h5>Mail to our support team</h5>

                            <h3> <a href="mailto:support@flightpathtravel.com">support@flightpathtravel.com</a></h3>

                        </div>

                        <div class="footer_inquery_area">

                            <h5>Follow us on</h5>

                            <ul class="soical_icon_footer">

                                <li><a href="#!"><i class="fab fa-facebook"></i></a></li>

                                <li><a href="#!"><i class="fab fa-twitter-square"></i></a></li>

                                <li><a href="#!"><i class="fab fa-instagram"></i></a></li>

                                <li><a href="#!"><i class="fab fa-linkedin"></i></a></li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-lg-2 offset-lg-1 col-md-6 col-sm-6 col-12">

                    <div class="footer_heading_area">

                        <h5>Company</h5>

                    </div>

                    <div class="footer_link_area">

                        <ul>

                            <li><a href="about.html">About Us</a></li>

                            <li><a href="testimonials.html">Testimonials</a></li>

                            <li><a href="faqs.html">Rewards</a></li>

                            <li><a href="terms-service.html">Work with Us</a></li>

                            <li><a href="tour-guides.html">Meet the Team </a></li>

                            <li><a href="news.html">Blog</a></li>

                        </ul>

                    </div>

                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12">

                    <div class="footer_heading_area">

                        <h5>Support</h5>

                    </div>

                    <div class="footer_link_area">

                        <ul>

                            <li><a href="dashboard.html">Account</a></li>

                            <li><a href="faq.html">Faq</a></li>

                            <li><a href="testimonials.html">Legal</a></li>

                            <li><a href="contact.html">Contact</a></li>

                            <li><a href="top-destinations.html"> Affiliate Program</a></li>

                            <li><a href="privacy-policy.html">Privacy Policy</a></li>

                        </ul>

                    </div>

                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12">

                    <div class="footer_heading_area">

                        <h5>Other Services</h5>

                    </div>

                    <div class="footer_link_area">

                        <ul>

                            <li><a href="top-destinations-details.html">Community program</a></li>

                            <li><a href="top-destinations-details.html">Investor Relations</a></li>

                            <li><a href="flight-search-result.html">Rewards Program</a></li>

                            <li><a href="room-booking.html">PointsPLUS</a></li>

                            <li><a href="testimonials.html">Partners</a></li>

                            <li><a href="hotel-search.html">List My Hotel</a></li>

                        </ul>

                    </div>

                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-12">

                    <div class="footer_heading_area">

                        <h5>Top cities</h5>

                    </div>

                    <div class="footer_link_area">

                        <ul>

                            <li><a href="room-details.html">Chicago</a></li>

                            <li><a href="hotel-details.html">New York</a></li>

                            <li><a href="hotel-booking.html">San Francisco</a></li>

                            <li><a href="tour-search.html">California</a></li>

                            <li><a href="tour-booking.html">Ohio </a></li>

                            <li><a href="tour-guides.html">Alaska</a></li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </footer>

    <div class="copyright_area">

        <div class="container">

            <div class="row align-items-center">

                <div class="co-lg-6 col-md-6 col-sm-12 col-12">

                    <div class="copyright_left">

                        <p>Copyright © 2022 All Rights Reserved</p>

                    </div>

                </div>

                <div class="co-lg-6 col-md-6 col-sm-12 col-12">

                    <div class="copyright_right">

                        <img src="assets/img/common/cards.png" alt="img">

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="go-top">

        <i class="fas fa-chevron-up"></i>

        <i class="fas fa-chevron-up"></i>

    </div>

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