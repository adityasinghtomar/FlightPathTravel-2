 @include('flight.header')

    <!-- search -->


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
<div id="delayedForm" style="display:none;">
    @include('flight.flight_search_form')
</div>


    <!-- Flight Search Areas -->
@if(isset($ress))
@foreach($ress as $res)
@if(isset($res->Results))        
 <?php $dat = $res->Results;?>
@php
    // Initialize an empty array to store counts for each airline
    $airlineCounts = [];

    // Initialize counts for refundable and non-refundable
    $total_refound = 0;
    $total_norefound = 0;
    $total_flight = 0;

    // Initialize an empty array to store unique airline names
    $uniqueAirlines = [];
@endphp
 
                                    
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
     @foreach( $Segments as $newsetkey => $Segment)
   

@foreach($Segment as $keyyss => $Segm)
    @if($newsetkey < 1)
    @if($keyyss < 1)
        @php
            // Increment counts based on conditions
            $airlineName = $Segm->Airline->AirlineName;
            if (!isset($airlineCounts[$airlineName])) {
                $airlineCounts[$airlineName] = 0;
                // Add the airline to the unique airlines array if it's not already present
                if (!in_array($airlineName, $uniqueAirlines)) {
                    $uniqueAirlines[] = $airlineName;
                }
            }
            $airlineCounts[$airlineName]++;
            
            // Increment total flight count
            $total_flight++;

            if ($dat2->IsRefundable == 1) {
                $total_refound++;
            } else {
                $total_norefound++;
            }
        @endphp
        @endif
    @endif
@endforeach


     @endforeach
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
                <div class="col-md-3" >
                    <div style="    border: 1px solid #ccc;
    border-radius: 20px;margin-top: 15px;   ">
                        
                    <div style="padding:20px;">
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
                           @foreach($uniqueAirlines as $airlineName)
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="airlines" value="<?php echo str_replace(' ', '', $airlineName);?>" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ $airlineName }}
                                    </label>
                                </div>
                                <small>{{ $airlineCounts[$airlineName] }}</small>
                            </div>
                        @endforeach
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
                    </div>
                </div>
                 <?php $Currency_active =\App\Currency_Model::where('currency_active','0')->first(); ?> 
                @if(isset($fli_data)) 
<div class="col-md-9">
    <div class="flight-list-grid">
      @if(isset($ress) && isset($unique_fareclasses))
     
               @foreach($unique_fareclasses as $keeu=>$fareclass)        
               
                 <!-- Display the current fare class for debugging -->
         @foreach($ress as $res)
                 
            @if(isset($res->Results))        
                <?php $dat = $res->Results;?>
                @foreach($dat as $dat1)
                    @foreach($dat1 as $key=>$dat2)
                 @if($key == $keeu)
                <!-- Display the data that matches the fare class -->
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
     <!--   <div class="flight-list-grid-airline">-->
             
     <!--       <?php echo "" ; ?>-->
                  <!--<h6 style="margin-left:10px;">Airline Source :<b><?php $airline_source =\App\Airline_Source_Model::where('source_id',$dat2->Source)->first(); ?> <?php if(isset($airline_source)){ echo $airline_source->source_name; } else { echo "TBO"; } ?> </b></h6>-->
     <!--<h6 style="margin-left:10px;">Color :<b><?php echo $keeu; ?> </b></h6>-->
     <!--   </div>-->
            <div class="flight-list-grid-airline">
                <div class="flight-list-grid-airline__left">
                    <div class="flight-list-grid-airline__left__img">
                        <div class="ounded-square-40--1">
                         
                            <img src="public/assets/AirlineLogo/<?php echo $Segm->Airline->AirlineCode;?>.gif" style="height:51px;">
                            
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
                                                           
                                                          $hours = floor($minutes / 60);
                                                        $min = $minutes % 60;
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
                                                            echo "<span style='color:red;'>1 Stop</span>  "; 
                                                          
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
                                <?php $mark_up= \App\Markup_Model::where('currency_code',$Currency_active->currency_code)->where('markup_type','flight')->first();?>
                                 
                                <?php if($mark_up) { 
                                                $mark_up->markup_amount;
                                                $subtotal= $dat2->Fare->PublishedFare;
                                                echo $Currency_active->currency_symbol;
                                                // echo round($subtotal, 2);
                                                $subtotal1= $subtotal / $Currency_active->currency_rates ;
                                                $subtotal13 = $subtotal1 + $mark_up->markup_amount ;
                                                echo round($subtotal13, 2);
                                        } 
                                        else{
                                            echo $Currency_active->currency_symbol;
                                            $subtotal= $dat2->Fare->PublishedFare;
                                            $subtotal1= $subtotal / $Currency_active->currency_rates ;echo round($subtotal1, 2);
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
                <div class="flight-list-grid-more-details-book-now__center">
                    
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog" style="max-width: 800px !important;">
    
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Fare Rule</h4>
      </div>
      <div class="modal-body">
        <!-- Display dynamic content here -->
        <p id="modalContent">Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default close" data-dismiss="modal">Close</button>
      </div>
    </div>
    
  </div>
</div>


    <form class="myForm" data-result-index="{{ $dat2->ResultIndex }}" data-trace-id="{{ $res->TraceId }}" data-token-id="{{ $token_id }}" data-end-user-ip="192.168.11.120">
        @csrf
        <input type="hidden" class="ResultIndex" name="ResultIndex" value="{{ $dat2->ResultIndex }}">
        <input type="hidden" class="TraceId" name="TraceId" value="{{ $res->TraceId }}">
        <input type="hidden" class="token_id" name="token_id" value="{{ $token_id }}">
        <input type="hidden" class="EndUserIp" name="EndUserIp" value="192.168.11.120">
        <button type="button" class="openModalBtn btn btn-info btn-lg">Fare Rule</button>
    </form>


<script>
$(document).ready(function(){
  $(".openModalBtn").click(function(){
    // Get data attributes from the clicked button's parent form
    var $form = $(this).closest('form');
    var ResultIndex = $form.data('result-index');
    var TraceId = $form.data('trace-id');
    var token_id = $form.data('token-id');
    var EndUserIp = $form.data('end-user-ip');
    
    // Prepare data to display
    var modalContent = "Loading..."; // Placeholder text
    
    // Update modal content to show loading message
    $("#modalContent").html(modalContent);
    
    // Open modal
    $("#myModal").modal("show");
     
    // Make AJAX request to fetch fare rules
    $.ajax({
      url: '{{ route('firerule') }}', // Replace with your route
      method: 'GET',
      data: {
        ResultIndex: ResultIndex,
        TraceId: TraceId,
        token_id: token_id,
        EndUserIp: EndUserIp
      },
      success: function(response) {
        // Update modal content with fare rules
        $("#modalContent").html(response);
      },
      error: function(xhr, status, error) {
        // Handle error
        console.error(xhr.responseText);
      }
    });
  });
});
$('.close').click(function(){
            $('#myModal').modal('hide');
        });
</script>

 
                </div>
                <div class="flight-list-grid-more-details-book-now__right">
                    

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
                                                        // if($count == 1){
                                                        //     echo "Direct"; 
                                                        //     }
                                                        // if($count == 2){
                                                        //     echo "<span style='color:red;'>1 Stop</span>"; 
                                                            
                                                           ?>
                                                          
                                                           <?php
                                                        //     }
                                                        // if($count == 4){
                                                        //     echo "<span style='color:red;'>2 Stop</span>  "; 
                                                          
                                                        //     }     
                                                        // if($count == 3){
                                                        //     echo "<span style='color:red;'>Multi Stop</span>"; 
                                                        // }    
                                                        // if($count > 4){
                                                        //         echo "Multi"; 
                                                        //             }
                                                                ?> 
                                                                <?php 
                                                            $input = $ArrTime;
                                                            $date = strtotime($input); 
                                                             $arr1_time = date('d-M-Y h:i a', $date); 
                                                            
                                                            $from_time = strtotime($dapa_time); 
                                                                $to_time = strtotime($arr1_time); 
                                                            $diff_minutes = abs($from_time - $to_time) / 60; 
                                                           
                                                          $hours = floor($minutes / 60);
                                                        $min = $minutes % 60;
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
                    <td>
                        <img src="public/assets/AirlineLogo/{{ $Segm->Airline->AirlineCode }}.gif" width="20px" height="20px">
                        <span style="margin:0px 10px 0px 10px;">{{ $Airline->AirlineName }}</span>| Aircraft <span><?php  echo $Segm->Craft; ?> |</span>
                        | Airline Code <span><?php  echo $Segm->Airline->AirlineCode; ?></span>
                        | Flight No. <span><?php  echo $Segm->Airline->FlightNumber; ?> |</span>
                    </td>
                    <!-- Add more details as needed -->
                </table>
            </div>

            <!-- Origin and Destination details -->
            <div class="row" style="border-bottom:1px solid  #d95313f2;margin:10px;">
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->

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
   
        $(document).ready(function () {
  
            /*------------------------------------------
            --------------------------------------------
            Country Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#country-dropdown').on('change', function () {
                var idCountry = this.value;
               $.ajax({
                    url: "{{url('/currency-change')}}",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        location.reload();
                    //     $('#state-dropdown').html('<option value="">-- Select State --</option>');
                    //     $.each(result.states, function (key, value) {
                    //         $("#state-dropdown").append('<option value="' + value
                    //             .id + '">' + value.name + '</option>');
                    //     });
                    }
                });
            });
        });
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

// Initialize by getting all checked states
initializeChecks();

// Attach event listener to all checkboxes
Array.prototype.forEach.call(allCheckboxes, function (el) {
  el.addEventListener('change', toggleCheckbox);
});

function initializeChecks() {
  getChecked('stops');
  getChecked('cabin_class');
  getChecked('refundable');
  getChecked('airlines');
  getChecked('conference');
}

function toggleCheckbox(e) {
  getChecked(e.target.name);
  setVisibility();
}

function getChecked(name) {
  checked[name] = Array.from(document.querySelectorAll(`input[name="${name}"]:checked`)).map(el => el.value);
}

function setVisibility() {
  $('.collapse').collapse('hide');
  allPlayers.forEach(function (el) {
    var stops = checked.stops.length ? _.intersection(Array.from(el.classList), checked.stops).length : true;
    var cabin_class = checked.cabin_class.length ? _.intersection(Array.from(el.classList), checked.cabin_class).length : true;
    var refundable = checked.refundable.length ? _.intersection(Array.from(el.classList), checked.refundable).length : true;
    var airlines = checked.airlines.length ? _.intersection(Array.from(el.classList), checked.airlines).length : true;
    var conference = checked.conference.length ? _.intersection(Array.from(el.classList), checked.conference).length : true;

    el.style.display = (stops && cabin_class && refundable && airlines && conference) ? 'block' : 'none';
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

            var objectarray = document.getElementById("first_field3").value;

            if (objectarray == '1') {

                document.getElementById(

                    "second-field3").value = "All"

            }

            if (objectarray == '2') {

                document.getElementById(

                    "second-field3").value = "Economy"

            }

            if (objectarray == '3') {

                document.getElementById(

                    "second-field3").value = "Premium Economy"

            }

            if (objectarray == '4') {

                document.getElementById(

                    "second-field3").value = "Business"

            } if (objectarray == '5') {

                document.getElementById(

                    "second-field3").value = "PremiumBusiness"

            }

            if (objectarray == '6') {

                document.getElementById(

                    "second-field3").value = "First Class"

            }

        }

    </script>



    <!--Return-->

    <script>



        function updateFields21(first_field21) {

            document.getElementById(

                "second-field21").value =

                document.getElementById(

                    "first_field21").value;

        }

    </script>



    <script>



        function updateFields11(first_field11) {

            document.getElementById(

                "second-field11").value =

                document.getElementById(

                    "first_field11").value;

        }

    </script>



    <script>



        function updateFields01(first_field01) {

            document.getElementById(

                "second-field01").value =

                document.getElementById(

                    "first_field01").value;

        }

    </script>

    <script>



        function updateFields31(first_field31) {

            var objectarray = document.getElementById("first_field31").value;

            if (objectarray == '1') {

                document.getElementById(

                    "second-field31").value = "All"

            }

            if (objectarray == '2') {

                document.getElementById(

                    "second-field31").value = "Economy"

            }

            if (objectarray == '31') {

                document.getElementById(

                    "second-field31").value = "Premium Economy"

            }

            if (objectarray == '4') {

                document.getElementById(

                    "second-field31").value = "Business"

            } if (objectarray == '5') {

                document.getElementById(

                    "second-field31").value = "PremiumBusiness"

            }

            if (objectarray == '6') {

                document.getElementById(

                    "second-field31").value = "First Class"

            }

        }

    </script>





    <!--Return-->

    <script>



        function updateFields001(first_field21) {

            document.getElementById(

                "second-field001").value =

                document.getElementById(

                    "first_field001").value;

        }

    </script>



    <script>



        function updateFields002(first_field11) {

            document.getElementById(

                "second-field002").value =

                document.getElementById(

                    "first_field002").value;

        }

    </script>



    <script>



        function updateFields003(first_field01) {

            document.getElementById(

                "second-field003").value =

                document.getElementById(

                    "first_field003").value;

        }

    </script>

    <script>



        function updateFields004(first_field31) {

            var objectarray = document.getElementById("first_field004").value;

            if (objectarray == '1') {

                document.getElementById(

                    "second-field004").value = "All"

            }

            if (objectarray == '2') {

                document.getElementById(

                    "second-field004").value = "Economy"

            }

            if (objectarray == '31') {

                document.getElementById(

                    "second-field004").value = "Premium Economy"

            }

            if (objectarray == '4') {

                document.getElementById(

                    "second-field004").value = "Business"

            } if (objectarray == '5') {

                document.getElementById(

                    "second-field004").value = "PremiumBusiness"

            }

            if (objectarray == '6') {

                document.getElementById(

                    "second-field004").value = "First Class"

            }

        }

    </script>





    <!--Return-->

    <script>



        function updateFields0001(first_field21) {

            document.getElementById(

                "second-field0001").value =

                document.getElementById(

                    "first_field0001").value;

        }

    </script>



    <script>



        function updateFields0002(first_field11) {

            document.getElementById(

                "second-field0002").value =

                document.getElementById(

                    "first_field0002").value;

        }

    </script>



    <script>



        function updateFields0003(first_field01) {

            document.getElementById(

                "second-field0003").value =

                document.getElementById(

                    "first_field0003").value;

        }

    </script>
    
  <script>
document.addEventListener('DOMContentLoaded', function() {
    // Set default selection to "Economy" if it's not already set
    var display = document.getElementById('classDisplay');
    if (!display.value.trim()) {
        display.value = 'Economy'; // Default selection
    }

    // Get all the dropdown items
    var items = document.querySelectorAll('.dropdown-item11');

    // Add click event listener to each item
    items.forEach(function(item) {
        item.addEventListener('click', function() {
            // Update the input value with the clicked item's text
            display.value = this.textContent;
        });
    });
});
</script>

    <script>



        function updateFields0004(first_field31) {

            var objectarray = document.getElementById("first_field0004").value;

            if (objectarray == '1') {

                document.getElementById(

                    "second-field0004").value = "All"

            }

            if (objectarray == '2') {

                document.getElementById(

                    "second-field0004").value = "Economy"

            }

            if (objectarray == '31') {

                document.getElementById(

                    "second-field0004").value = "Premium Economy"

            }

            if (objectarray == '4') {

                document.getElementById(

                    "second-field0004").value = "Business"

            } if (objectarray == '5') {

                document.getElementById(

                    "second-field0004").value = "PremiumBusiness"

            }

            if (objectarray == '6') {

                document.getElementById(

                    "second-field0004").value = "First Class"

            }

        }

    </script>

    <script>

        // const d = new Date();

        // let text = d.toLocaleString();

        // document.getElementById("demo").innerHTML = text;

    </script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
    var dateInput = document.getElementById('demo7');
    var dateDisplay = document.getElementById('hoteldaete1');
    
    function formatDate(dateString) {
        // Create a Date object from the input value
        var date = new Date(dateString);
        
        // Array of month names
        const monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"];

        // Get the day, month, and year
        var day = date.getDate();
        var monthIndex = date.getMonth();
        var year = date.getFullYear();

        // Format the date string as "day-month-year"
        return day + '-' + monthNames[monthIndex] + '-' + year;
    }
    // Function to format date as you prefer, for simplicity, using the input's raw value
    
     function updateDateDisplay(date) {
        // Format the date string
        var formattedDate = formatDate(date);
        
        // Update the display with the formatted date
        dateDisplay.textContent = formattedDate;
    }


    // Initial update in case there's already a date set (e.g., by server-side PHP)
    updateDateDisplay(dateInput.value);

    // Update display whenever the input changes
    dateInput.addEventListener('input', function() {
        updateDateDisplay(this.value);
    });
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var dateInput = document.getElementById('demo8');
    var dateDisplay = document.getElementById('hoteldaete2');

    // Function to format date as "day-month-year"
    function formatDate(dateString) {
        // Create a Date object from the input value
        var date = new Date(dateString);
        
        // Array of month names
        const monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"];

        // Get the day, month, and year
        var day = date.getDate();
        var monthIndex = date.getMonth();
        var year = date.getFullYear();

        // Format the date string as "day-month-year"
        return day + '-' + monthNames[monthIndex] + '-' + year;
    }

    // Function to update the date display
    function updateDateDisplay(date) {
        // Format the date string
        var formattedDate = formatDate(date);
        
        // Update the display with the formatted date
        dateDisplay.textContent = formattedDate;
    }

    // Initial update in case there's already a date set (e.g., by server-side PHP)
    updateDateDisplay(dateInput.value);

    // Update display whenever the input changes
    dateInput.addEventListener('input', function() {
        updateDateDisplay(this.value);
    });
});

</script>


    <script>
document.addEventListener('DOMContentLoaded', function () {
    var dateInput = document.getElementById('demo11');
    var dateDisplay = document.getElementById('dateDisplay');

  // Function to format date as "day-month-year"
    function formatDate(dateString) {
        // Create a Date object from the input value
        var date = new Date(dateString);
        
        // Array of month names
        const monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"];

        // Get the day, month, and year
        var day = date.getDate();
        var monthIndex = date.getMonth();
        var year = date.getFullYear();

        // Format the date string as "day-month-year"
        return day + '-' + monthNames[monthIndex] + '-' + year;
    }

    // Function to update the date display
    function updateDateDisplay(date) {
        // Format the date string
        var formattedDate = formatDate(date);
        
        // Update the display with the formatted date
        dateDisplay.textContent = formattedDate;
    }
    // Initial update in case there's already a date set (e.g., by server-side PHP)
    updateDateDisplay(dateInput.value);

    // Update display whenever the input changes
    dateInput.addEventListener('input', function() {
        updateDateDisplay(this.value);
    });
});
</script>
  <script>
document.addEventListener('DOMContentLoaded', function () {
    var dateInput = document.getElementById('demo1');
    var dateDisplay = document.getElementById('dateDisplay');

   // Function to format date as "day-month-year"
    function formatDate(dateString) {
        // Create a Date object from the input value
        var date = new Date(dateString);
        
        // Array of month names
        const monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"];

        // Get the day, month, and year
        var day = date.getDate();
        var monthIndex = date.getMonth();
        var year = date.getFullYear();

        // Format the date string as "day-month-year"
        return day + '-' + monthNames[monthIndex] + '-' + year;
    }

    // Function to update the date display
    function updateDateDisplay(date) {
        // Format the date string
        var formattedDate = formatDate(date);
        
        // Update the display with the formatted date
        dateDisplay.textContent = formattedDate;
    }

    // Initial update in case there's already a date set (e.g., by server-side PHP)
    updateDateDisplay(dateInput.value);

    // Update display whenever the input changes
    dateInput.addEventListener('input', function() {
        updateDateDisplay(this.value);
    });
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var radioButtons = document.querySelectorAll('input[type="radio"][name="flighttrip"]');
    var returnDetailDiv = document.getElementById('returnDetail');
    var returnDateParagraph = document.getElementById('returnDate');
    var flightDetailsRow = document.querySelector('.rowone');
 
    function toggleReturnDetail() {
        if (document.getElementById('tripOneway').checked || document.getElementById('tripMulticity').checked) {
            returnDetailDiv.classList.add('hidden');
             flightDetailsRow.style.gridTemplateColumns = "1fr 1fr";
        } else {
            returnDetailDiv.classList.remove('hidden');
             flightDetailsRow.style.gridTemplateColumns = "1fr 1fr 1fr";
        }
    }

  function formatDate(dateString) {
        // Create a Date object from the input value
        var date = new Date(dateString);
        
        // Array of month names
        const monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"];

        // Get the day, month, and year
        var day = date.getDate();
        var monthIndex = date.getMonth();
        var year = date.getFullYear();

        // Format the date string as "day-month-year"
        return day + '-' + monthNames[monthIndex] + '-' + year;
    }

    // Function to check the selection and show/hide the return detail paragraph accordingly


    // Initial check in case the default selection needs to hide the return detail
    toggleReturnDetail();

    // Add change event listener to each radio button to handle the selection change
    radioButtons.forEach(function (radio) {
        radio.addEventListener('change', toggleReturnDetail);
    });

    // Assuming you have a date input element (for date selection), and you want to display its value
    var dateInput = document.getElementById('demo3'); // Ensure this ID matches your date input element

    // function updateDateDisplay(date) {
    //     returnDetailParagraph.textContent = date; // Update the paragraph text
    // }

 function updateDateDisplay(date) {
        // Format the date string
        var formattedDate = formatDate(date);
        
        // Update the display with the formatted date
         returnDate.textContent = formattedDate;
    }

    // Check if dateInput exists before adding event listener to prevent errors
    if (dateInput) {
        updateDateDisplay(dateInput.value); // Initial update

        dateInput.addEventListener('input', function() {
            updateDateDisplay(this.value); // Update on input change
        });
    }
});

</script>
 <script>
document.addEventListener('DOMContentLoaded', function () {
    var dateInput = document.getElementById('demo2');
    var dateDisplay = document.getElementById('dateDisplay');

    // Function to format date as you prefer, for simplicity, using the input's raw value
   // Function to format date as "day-month-year"
    function formatDate(dateString) {
        // Create a Date object from the input value
        var date = new Date(dateString);
        
        // Array of month names
        const monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"];

        // Get the day, month, and year
        var day = date.getDate();
        var monthIndex = date.getMonth();
        var year = date.getFullYear();

        // Format the date string as "day-month-year"
        return day + '-' + monthNames[monthIndex] + '-' + year;
    }

    // Function to update the date display
    function updateDateDisplay(date) {
        // Format the date string
        var formattedDate = formatDate(date);
        
        // Update the display with the formatted date
        dateDisplay.textContent = formattedDate;
    }
    // Initial update in case there's already a date set (e.g., by server-side PHP)
    updateDateDisplay(dateInput.value);

    // Update display whenever the input changes
    dateInput.addEventListener('input', function() {
        updateDateDisplay(this.value);
    });
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var input = document.getElementById('to');
    var options = document.querySelectorAll('.option1');
    var display = document.getElementById('todisplay');

    // Function to display input value
    function displayValue(value) {
        display.textContent = value;
    }

    // Set default value on load
    displayValue(input.value);

    // Filter options based on input
    input.addEventListener('input', function() {
        var filter = input.value.toUpperCase();
        options.forEach(function(option) {
            var textValue = option.textContent || option.innerText;
            if (textValue.toUpperCase().indexOf(filter) > -1) {
                option.style.display = "";
            } else {
                option.style.display = "none";
            }
        });
        displayValue(input.value);  // Display the current input value
    });

    // Display selected option
    options.forEach(function(option) {
        option.addEventListener('click', function() {
            input.value = option.getAttribute('data-value');
            displayValue(option.textContent);
        });
    });

    // Display input value when Enter key is pressed
    input.addEventListener('keydown', function(event) {
        if (event.key === 'Enter') {
            displayValue(input.value);
        }
    });
});
</script>
 

<script>
document.addEventListener('DOMContentLoaded', function () {
    var input = document.getElementById('from');
    var options = document.querySelectorAll('.option');
    var display = document.getElementById('fromdisplay');

    // Function to display input value
    function displayValue(value) {
        display.textContent = value;
    }

    // Set default value on load
    displayValue(input.value);

    // Filter options based on input
    input.addEventListener('input', function() {
        var filter = input.value.toUpperCase();
        options.forEach(function(option) {
            var textValue = option.textContent || option.innerText;
            if (textValue.toUpperCase().indexOf(filter) > -1) {
                option.style.display = "";
            } else {
                option.style.display = "none";
            }
        });
        displayValue(input.value);  // Display the current input value
    });

    // Display selected option
    options.forEach(function(option) {
        option.addEventListener('click', function() {
            input.value = option.getAttribute('data-value');
            displayValue(option.textContent);
        });
    });

    // Display input value when Enter key is pressed
    input.addEventListener('keydown', function(event) {
        if (event.key === 'Enter') {
            displayValue(input.value);
        }
    });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var input = document.getElementById('to1');
    var options = document.querySelectorAll('.option3');
    var display = document.getElementById('todisplay');

    // Function to display input value
    function displayValue(value) {
        display.textContent = value;
    }

    // Set default value on load
    displayValue(input.value);

    // Filter options based on input
    input.addEventListener('input', function() {
        var filter = input.value.toUpperCase();
        options.forEach(function(option) {
            var textValue = option.textContent || option.innerText;
            if (textValue.toUpperCase().indexOf(filter) > -1) {
                option.style.display = "";
            } else {
                option.style.display = "none";
            }
        });
        displayValue(input.value);  // Display the current input value
    });

    // Display selected option
    options.forEach(function(option) {
        option.addEventListener('click', function() {
            input.value = option.getAttribute('data-value');
            displayValue(option.textContent);
        });
    });

    // Display input value when Enter key is pressed
    input.addEventListener('keydown', function(event) {
        if (event.key === 'Enter') {
            displayValue(input.value);
        }
    });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var input = document.getElementById('from1');
    var options = document.querySelectorAll('.option2');
    var display = document.getElementById('fromdisplay');

    // Function to display input value
    function displayValue(value) {
        display.textContent = value;
    }

    // Set default value on load
    displayValue(input.value);

    // Filter options based on input
    input.addEventListener('input', function() {
        var filter = input.value.toUpperCase();
        options.forEach(function(option) {
            var textValue = option.textContent || option.innerText;
            if (textValue.toUpperCase().indexOf(filter) > -1) {
                option.style.display = "";
            } else {
                option.style.display = "none";
            }
        });
        displayValue(input.value);  // Display the current input value
    });

    // Display selected option
    options.forEach(function(option) {
        option.addEventListener('click', function() {
            input.value = option.getAttribute('data-value');
            displayValue(option.textContent);
        });
    });

    // Display input value when Enter key is pressed
    input.addEventListener('keydown', function(event) {
        if (event.key === 'Enter') {
            displayValue(input.value);
        }
    });
});
</script>


<script>
document.addEventListener('DOMContentLoaded', function () {
    var input = document.getElementById('to5');
    var options = document.querySelectorAll('.option5');
    var display = document.getElementById('todisplay');

    // Function to display input value
    function displayValue(value) {
        display.textContent = value;
    }

    // Set default value on load
    displayValue(input.value);

    // Filter options based on input
    input.addEventListener('input', function() {
        var filter = input.value.toUpperCase();
        options.forEach(function(option) {
            var textValue = option.textContent || option.innerText;
            if (textValue.toUpperCase().indexOf(filter) > -1) {
                option.style.display = "";
            } else {
                option.style.display = "none";
            }
        });
        displayValue(input.value);  // Display the current input value
    });

    // Display selected option
    options.forEach(function(option) {
        option.addEventListener('click', function() {
            input.value = option.getAttribute('data-value');
            displayValue(option.textContent);
        });
    });

    // Display input value when Enter key is pressed
    input.addEventListener('keydown', function(event) {
        if (event.key === 'Enter') {
            displayValue(input.value);
        }
    });
});
</script>

 
<script>
document.addEventListener('DOMContentLoaded', function () {
    var input = document.getElementById('from5');
    var options = document.querySelectorAll('.option4');
    var display = document.getElementById('fromdisplay');

    // Function to display input value
    function displayValue(value) {
        display.textContent = value;
    }

    // Set default value on load
    displayValue(input.value);

    // Filter options based on input
    input.addEventListener('input', function() {
        var filter = input.value.toUpperCase();
        options.forEach(function(option) {
            var textValue = option.textContent || option.innerText;
            if (textValue.toUpperCase().indexOf(filter) > -1) {
                option.style.display = "";
            } else {
                option.style.display = "none";
            }
        });
        displayValue(input.value);  // Display the current input value
    });

    // Display selected option
    options.forEach(function(option) {
        option.addEventListener('click', function() {
            input.value = option.getAttribute('data-value');
            displayValue(option.textContent);
        });
    });

    // Display input value when Enter key is pressed
    input.addEventListener('keydown', function(event) {
        if (event.key === 'Enter') {
            displayValue(input.value);
        }
    });
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var input = document.querySelector('.hoteldate1');
    var options = document.querySelectorAll('.option8');
    var cityNameInput = document.querySelector('.hoteldate2');
    var cityDisplay = document.getElementById('cityDisplay');

    input.addEventListener('input', function() {
        var filter = input.value.toUpperCase();
        options.forEach(function(option) {
            var textValue = option.textContent || option.innerText;
            if (textValue.toUpperCase().indexOf(filter) > -1) {
                option.style.display = "";
            } else {
                option.style.display = "none";
            }
        });
    });

    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('option8')) {
            var selectedOption = event.target;
            cityNameInput.value = selectedOption.getAttribute('data-value');
            input.value = selectedOption.textContent.match(/^[^\(]+/)[0].trim();
            cityDisplay.textContent = selectedOption.textContent;
        }
    });
});
</script>
     <script>

        // const d = new Date();

        // let text = d.toLocaleString();

        // document.getElementById("demo1").innerHTML = text;

    </script>
     <script>

        // const d = new Date();

        // let text = d.toLocaleString();

        // document.getElementById("demo2").innerHTML = text;

    </script>

    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->

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

                            $("#state-dropdown").append('<option value="">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

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

                            $("#state-dropdown1").append('<option value="">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

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

                            $("#state-dropdown12").append('<option value="">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

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

                            $("#state-dropdown112").append('<option value="">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

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

                            $("#state-dropdown_1").append('<option value="">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

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

                            $("#state-dropdown_2").append('<option value="">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

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

                            $("#state-dropdown_3").append('<option value="">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

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

                            $("#state-dropdown_4").append('<option value="">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

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

            $('.from').on('keyup', function () {

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

                            $("#ShowDataList1").append('<option value="' + value.AIRPORTCODE + '">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

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

            $('.to').on('keyup', function () {

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

                            $("#ShowDataList2").append('<option value="' + value.AIRPORTCODE + '">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

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

            $('.city_id').on('keyup', function () {

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

                            $("#city_id").append('<input type="hidden" name="Destination" value="' + value.city_id + '">');

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

            $('.dateget').on('keyup', function () {

                var idCountry = this.value;

                const date_str = "11/02/2023";

                const date = new Date(date_str);

                const full_day_name = date.toLocaleDateString('default', { weekday: 'long' });

                console.log(full_day_name)

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

        $(function () {

            var dtToday = new Date();



            var month = dtToday.getMonth() + 1;

            var day = dtToday.getDate();

            var year = dtToday.getFullYear();

            if (month < 10)

                month = '0' + month.toString();

            if (day < 10)

                day = '0' + day.toString();



            var minDate = year + '-' + month + '-' + day;



            $('.txtDate').attr('min', minDate);

        });

    </script>
<script>
        function selectRefresh() {
            $('.select-from').select2({ placeholder: "Where from?" });
            $('.select-to').select2({ placeholder: "Where to?" });
            $('.select-destination').select2({ placeholder: "What is your destination?" });
            $('.select-tours').select2({ placeholder: "Tour Type" });
            $('.select-days').select2({ placeholder: "Days" });
            $('.select-country').select2({ placeholder: "Select Country" });
            $('.select-visa-type').select2({ placeholder: "Visa Type" });
        }

        // $("#btnAddNewFlight").on('click', function () {
        //     $(".parentNewFlightRows").append(`
        //     <div class="row child-flight-row childFlightRow">
        //         <div class="col-lg-4 mb-20 mb-md-10">
                
        //          <div class="custom-select-wrapper">
        //                                     <input type="text" class="form-control select-input6" name="from[]" id="" placeholder="Select an option">
        //                                       <?php $filterResult =\App\Airport_Model::get(); ?>
        //                                     <ul class="list-unstyled select-options6">
                                                
        //                                           @foreach($filterResult as $state_)
        //                                             <li class="option6" data-value="{{ $state_->AIRPORTCODE }}">{{ $state_->AIRPORTCODE }} - {{ $state_->AIRPORTNAME }} - {{ $state_->CITYNAME }} ({{ $state_->COUNTRYCODE }})</li>
        //                                         @endforeach
        //                                     </ul>
        //                                 </div>
                  
        //         </div>
        //         <div class="col-lg-auto mb-20 mb-md-10 d-flex justify-content-center">
        //             <button class="btn btn-interchange px-10 py-10">
        //                 <i class="fas fa-exchange-alt" style="font-size: 25px;"></i>
        //             </button>
        //         </div>
        //         <div class="col-lg-4 mb-20 mb-md-10">
        //         <div class="custom-select-wrapper">
        //                                     <input type="text" class="form-control select-input7" name="to[]" id="" placeholder="Select an option">
        //                                       <?php $filterResult =\App\Airport_Model::get(); ?>
        //                                     <ul class="list-unstyled select-options7">
                                                
        //                                           @foreach($filterResult as $state_)
        //                                             <li class="option7" data-value="{{ $state_->AIRPORTCODE }}">{{ $state_->AIRPORTCODE }} - {{ $state_->AIRPORTNAME }} - {{ $state_->CITYNAME }} ({{ $state_->COUNTRYCODE }})</li>
        //                                         @endforeach
        //                                     </ul>
        //                                 </div>
                  
        //         </div>
        //         <div class="col-lg mb-20 mb-md-10">
        //             <input type="date" value="<?php echo date('Y-m-d'); ?>" id="demo"
        //                 name="journey_date[]" class="txtDate form-control" required>
        //         </div>
        //         <div class="col-lg-auto mb-20 mb-md-10">
        //             <button type="submit"
        //                 class="btn btn-th-outline-danger btnRemove py-10 px-20"><i
        //                     class="fas fa-times"></i></button>
        //         </div>
        //     </div>
        //     `);
        //     selectRefresh();
        //     $(".btnRemove").css("opacity","1");   
        // });

        $(".date-box").on('click', function () {
            $(this).next().hide();
            $(this).attr("type", "date");
        });

        $(document).on('click',".btnRemove", function(){
            var getChildFlightRowCount = $(".parentNewFlightRows").find(".childFlightRow").length;
            if(getChildFlightRowCount > 1) {
                $(this).closest(".childFlightRow").remove();    
                if(getChildFlightRowCount == 2) {
                    $(".btnRemove").css("opacity","0.5");    
                }
            }
        });


        $(document).ready(function () {

            selectRefresh();

            var getFlightTripRadioButtonValue = $('input[type=radio][name=flighttrip]:checked').val();

            // if (getFlightTripRadioButtonValue == "One Way") {
            //     $(".onChangeOneWay").css("display", "flex");
            //     $(".onChangeRoundTrip").css("display", "none");
            //     $(".onChangeMultiCity").css("display", "none");
            // } else if (getFlightTripRadioButtonValue == "Round Trip") {
            //     $(".onChangeRoundTrip").css("display", "flex");
            //     $(".onChangeOneWay").css("display", "none");
            //     $(".onChangeMultiCity").css("display", "none");
            // } else {
            //     $(".onChangeMultiCity").css("display", "flex");
            //     $(".onChangeOneWay").css("display", "none");
            //     $(".onChangeRoundTrip").css("display", "none");
            // }

            // $('input[type=radio][name=flighttrip]').change(function () {
            //     if (this.id == "tripOneway") {
            //         $(".onChangeOneWay").css("display", "flex");
            //         $(".onChangeRoundTrip").css("display", "none");
            //         $(".onChangeMultiCity").css("display", "none");
            //     } else if (this.id == "tripRoundtrip") {
            //         $(".onChangeRoundTrip").css("display", "flex");
            //         $(".onChangeOneWay").css("display", "none");
            //         $(".onChangeMultiCity").css("display", "none");
            //     } else {
            //         $(".onChangeMultiCity").css("display", "flex");
            //         $(".onChangeOneWay").css("display", "none");
            //         $(".onChangeRoundTrip").css("display", "none");
            //     }
            // });
        });
    </script>
    <script>
 $('input[type="text"]').on('keydown, keyup', function () {
  var productNameInput = $('input[name="adult"]').val();
    var productBrandField = $('input[name="adult"]');
    var productBrandValue = productBrandField.val(productNameInput);
    console.log(productNameInput);
    console.log(productBrandValue.val());
 
});

$('input[type="text"]').on('keydown, keyup', function () {
  var productNameInput = $('input[name="child"]').val();
    var productBrandField = $('input[name="children"]');
    var productBrandValue = productBrandField.val(productNameInput);
    console.log(productNameInput);
    console.log(productBrandValue.val());
 
});
</script>
 <script>
 $('input[type="number"]').on('keydown, keyup', function () {
  var productNameInput = $('input[name="adult12"]').val();
    var productBrandField = $('input[name="adult"]');
    var productBrandValue = productBrandField.val(productNameInput);
    console.log(productNameInput);
    console.log(productBrandValue.val());
 
});

$('input[type="number"]').on('keydown, keyup', function () {
  var productNameInput = $('input[name="child12"]').val();
    var productBrandField = $('input[name="children"]');
    var productBrandValue = productBrandField.val(productNameInput);
    console.log(productNameInput);
    console.log(productBrandValue.val());
 
});

$(function(){
    var select = $('#select_from');
    var selected = $('#selected_from');

    select.on('change', function(){
        var selectedOptionText = $(this).children(':selected').text();
        
        selected.text(selectedOptionText + '');
    });
});
$(function(){
    var select = $('#select_to');
    var selected = $('#selected_to');

    select.on('change', function(){
        var selectedOptionText = $(this).children(':selected').text();
        
        selected.text(selectedOptionText + '');
    });
});

console.log($('.datePicker').html($('.getDate').val()))
console.log($('.getadult').html($('.getadult_data').val()))
</script>
<script>
   
        // $(document).ready(function () {
  
        //     /*------------------------------------------
        //     --------------------------------------------
        //     Country Dropdown Change Event
        //     --------------------------------------------
        //     --------------------------------------------*/
        //     $('#country-dropdown').on('change', function () {
        //         var idCountry = this.value;
        //       $.ajax({
        //             url: "{{url('/currency-change')}}",
        //             type: "POST",
        //             data: {
        //                 country_id: idCountry,
        //                 _token: '{{csrf_token()}}'
        //             },
        //             dataType: 'json',
        //             success: function (result) {
        //                 location.reload();
        //             //     $('#state-dropdown').html('<option value="">-- Select State --</option>');
        //             //     $.each(result.states, function (key, value) {
        //             //         $("#state-dropdown").append('<option value="' + value
        //             //             .id + '">' + value.name + '</option>');
        //             //     });
        //             }
        //         });
        //     });
        // });
    </script> 
    
      <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
    <!-- Include Select2 JS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input').on('click', function(event) {
        $('.select-options').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options').hide();
    });

    // Handle option selection
    $('.select-options').on('click', '.option', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option:visible').length === 0) {
            $('.option').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>

<script>
$(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options1');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option1" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input1').on('click', function(event) {
        $('.select-options1').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options1').hide();
    });

    // Handle option selection
    $('.select-options1').on('click', '.option1', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input1').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options1').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input1').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option1').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option1').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option1:visible').length === 0) {
            $('.option1').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>



<script>
$(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options2');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option2" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input2').on('click', function(event) {
        $('.select-options2').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options2').hide();
    });

    // Handle option selection
    $('.select-options2').on('click', '.option2', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input2').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options2').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input2').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option2').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option2').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option2:visible').length === 0) {
            $('.option2').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
$(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options3');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option3" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input3').on('click', function(event) {
        $('.select-options3').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options3').hide();
    });

    // Handle option selection
    $('.select-options3').on('click', '.option3', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input3').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options3').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input3').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option3').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option3').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option3:visible').length === 0) {
            $('.option3').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>

<script>
$(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options4');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option4" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input4').on('click', function(event) {
        $('.select-options4').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options4').hide();
    });

    // Handle option selection
    $('.select-options4').on('click', '.option4', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input4').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options4').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input4').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option4').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option4').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option4:visible').length === 0) {
            $('.option4').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
$(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options5');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option5" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input5').on('click', function(event) {
        $('.select-options5').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options5').hide();
    });

    // Handle option selection
    $('.select-options5').on('click', '.option5', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input5').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options5').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input5').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option5').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option5').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option5:visible').length === 0) {
            $('.option5').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
$(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options6');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option6" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input6').on('click', function(event) {
        $('.select-options6').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options6').hide();
    });

    // Handle option selection
    $('.select-options6').on('click', '.option6', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input6').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options6').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input6').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option6').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option6').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option6:visible').length === 0) {
            $('.option6').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
   $(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options11');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option11" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input11').on('click', function(event) {
        $('.select-options11').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options11').hide();
    });

    // Handle option selection
    $('.select-options11').on('click', '.option11', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input11').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options11').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input11').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option11').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option11').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option11:visible').length === 0) {
            $('.option11').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
   $(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options12');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option12" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input12').on('click', function(event) {
        $('.select-options12').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options12').hide();
    });

    // Handle option selection
    $('.select-options12').on('click', '.option12', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input12').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options12').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input12').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option12').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option12').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option12:visible').length === 0) {
            $('.option12').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
   $(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options13');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option13" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input13').on('click', function(event) {
        $('.select-options13').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options13').hide();
    });

    // Handle option selection
    $('.select-options13').on('click', '.option13', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input13').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options13').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input13').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option13').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option13').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option13:visible').length === 0) {
            $('.option13').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
   $(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options14');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option14" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input14').on('click', function(event) {
        $('.select-options14').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options14').hide();
    });

    // Handle option selection
    $('.select-options14').on('click', '.option14', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input14').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options14').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input14').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option14').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option14').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option14:visible').length === 0) {
            $('.option14').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
   $(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options15');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option15" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input15').on('click', function(event) {
        $('.select-options15').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options15').hide();
    });

    // Handle option selection
    $('.select-options15').on('click', '.option15', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input15').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options15').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input15').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option15').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option15').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option15:visible').length === 0) {
            $('.option15').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
   $(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options16');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option16" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input16').on('click', function(event) {
        $('.select-options16').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options16').hide();
    });

    // Handle option selection
    $('.select-options16').on('click', '.option16', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input16').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options16').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input16').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option16').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option16').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option16:visible').length === 0) {
            $('.option16').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
   $(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options17');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option17" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input17').on('click', function(event) {
        $('.select-options17').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options17').hide();
    });

    // Handle option selection
    $('.select-options17').on('click', '.option17', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input17').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options17').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input17').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option17').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option17').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option17:visible').length === 0) {
            $('.option17').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
   $(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options18');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option18" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input18').on('click', function(event) {
        $('.select-options18').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options18').hide();
    });

    // Handle option selection
    $('.select-options18').on('click', '.option18', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input18').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options18').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input18').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option18').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option18').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option18:visible').length === 0) {
            $('.option18').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
$(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options7');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option7" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input7').on('click', function(event) {
        $('.select-options7').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options7').hide();
    });

    // Handle option selection
    $('.select-options7').on('click', '.option7', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input7').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options7').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input7').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option7').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option7').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option7:visible').length === 0) {
            $('.option7').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
<script>
$(document).ready(function() {
    $('#hoteldate').on('input', function() {
        var searchText = $(this).val();
        $.ajax({
            url: '/search-cities', // Backend URL that returns filtered cities
            type: 'GET',
            data: { query: searchText },
            success: function(data) {
                var selectOptions = $('#city_list');
                selectOptions.empty(); // Clear existing options

                data.forEach(function(item) {
                    selectOptions.append($('<li class="option8" data-value="' + item.name + '">')
                        .text(item.name + ' -' + item.CountryName + ''));
                });
            }
        });
    });

    $('#city_list').on('click', 'li', function() {
        var selectedText = $(this).text();
        var selectedValue = $(this).attr('data-value');
        $('#hoteldate').val(selectedText); // Display the selected text in the input
        $('#city_name').val(selectedValue); // Store the data-value in the hidden input
        $('#city_list').hide(); // Hide the list after selection
    });

    // Additional code to manage showing and hiding the list
    $('#hoteldate').on('focus', function() {
        $('#city_list').show();
    });

    $(document).on('click', function(e) {
        if (!$(e.target).closest('.custom-select-wrapper').length) {
            $('#city_list').hide();
        }
    });
});

</script>
<script>
   $(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options9');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option9" data-value="' + option.name + '">' +
                            option.name +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input9').on('click', function(event) {
        $('.select-options9').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options9').hide();
    });

    // Handle option selection
    $('.select-options9').on('click', '.option9', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input9').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options9').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input9').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option9').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option9').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option9:visible').length === 0) {
            $('.option9').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
   $(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options10');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option10" data-value="' + option.name + '">' +
                            option.name +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input10').on('click', function(event) {
        $('.select-options10').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options10').hide();
    });

    // Handle option selection
    $('.select-options10').on('click', '.option10', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input10').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options10').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input10').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option10').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option10').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option10:visible').length === 0) {
            $('.option10').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
$(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options9');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option9" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input9').on('click', function(event) {
        $('.select-options9').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options9').hide();
    });

    // Handle option selection
    $('.select-options9').on('click', '.option9', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input9').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options9').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input9').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option9').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option9').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option9:visible').length === 0) {
            $('.option9').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
$(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options10');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option10" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input10').on('click', function(event) {
        $('.select-options10').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options10').hide();
    });

    // Handle option selection
    $('.select-options10').on('click', '.option10', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input10').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options10').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input10').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option10').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option10').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option10:visible').length === 0) {
            $('.option10').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
  <script>
         $(".Click-here").on('click', function() {
  $(".custom-model-main").addClass('model-open');
$(window).load(function() {
		// Animate loader off screen
		$(".custom-model-main").fadeOut("slow");
	});
         }); 
$(".close-btn, .bg-overlay").click(function(){
  $(".custom-model-main").removeClass('model-open');
});

     </script>   
     <script>
         $(".Click-here1").on('click', function() {
  $(".custom-model-main1").addClass('model-open');
$(window).load(function() {
		// Animate loader off screen
		$(".custom-model-main1").fadeOut("slow");
	});
         }); 
$(".close-btn, .bg-overlay").click(function(){
  $(".custom-model-main1").removeClass('model-open');
});

     </script> 
    

<script>
        class InputInterchanger {
            constructor() {
                this.fromInput = document.querySelector(".fromInput");
                this.toInput = document.querySelector(".toInput");
                this.interchangeButton = document.querySelector(".interchangeButton");

                this.interchangeButton.addEventListener("click", () => this.interchangeValues());
            }

            interchangeValues() {
                const fromValue = this.fromInput.value;
                const toValue = this.toInput.value;

                this.fromInput.value = toValue;
                this.toInput.value = fromValue;
            }
        }

        // Instantiate the class
        const interchanger = new InputInterchanger();
    </script>
    
<script>
        class InputInterchanger1 {
            constructor() {
                this.fromInput1 = document.querySelector(".fromInput1");
                this.toInput1 = document.querySelector(".toInput1");
                this.interchangeButton1 = document.querySelector(".interchangeButton1");

                this.interchangeButton1.addEventListener("click", () => this.interchangeValues());
            }

            interchangeValues() {
                const fromValue = this.fromInput1.value;
                const toValue = this.toInput1.value;

                this.fromInput1.value = toValue;
                this.toInput1.value = fromValue;
            }
        }

        // Instantiate the class
        const interchanger1 = new InputInterchanger1();
    </script>
    <script>
        class InputInterchanger2 {
            constructor() {
                this.fromInput2 = document.querySelector(".fromInput2");
                this.toInput2 = document.querySelector(".toInput2");
                this.interchangeButton2 = document.querySelector(".interchangeButton2");

                this.interchangeButton2.addEventListener("click", () => this.interchangeValues());
            }

            interchangeValues() {
                const fromValue = this.fromInput2.value;
                const toValue = this.toInput2.value;

                this.fromInput2.value = toValue;
                this.toInput2.value = fromValue;
            }
        }

        // Instantiate the class
        const interchanger2 = new InputInterchanger2();
    </script> 


<script>
    window.onload = function() {
        setTimeout(showForm, 4000); // 30000 milliseconds = 30 seconds
    };

    function showForm() {
        document.getElementById('delayedForm').style.display = 'block';
    }
</script>

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->



    <!--<script src="public/assets/js/jquery-3.6.0.min.js"></script>-->

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