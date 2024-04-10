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
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>Flight booking</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span><a href="dashboard.html">Customer
                                    dashboard</a></li>
                            <li><span><i class="fas fa-circle"></i></span>Flight booking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dashboard Area -->
    
                <style>
               *,*:before,*:after {
  box-sizing: border-box;
}
html {
  font-size: 16px;
}

.plane {
  margin: 20px auto;
  max-width: 300px;
  position: relative;
  
}

.cockpit {
  height: 250px; 
  position: relative;
  overflow: hidden;
  text-align: center;
 
  &:before {
    content: "";
    display: block;
    position: absolute;
    background:#f5f5f5;
    top: 0;
    left: 0;
    height: 500px;
    width: 100%;
    border-radius: 50%;
    border-right: 5px solid #d8d8d8;
    border-left: 5px solid #d8d8d8;
  }
  h1 {
    width: 60%;
    margin: 100px auto 35px auto;
  }
}
.cockpit1 {
  height: 250px;
  position: relative;
  overflow: hidden;
  text-align: center;
  border-top: 5px solid #d8d8d8;
}

.cockpit1:before {
  content: "";
  display: block;
  position: absolute;
  background:#f5f5f5;
  bottom: 0;
  left: 0;
  height: 500px;
  width: 100%;
  border-radius: 50%;
  border-right: 5px solid #d8d8d8;
  border-left: 5px solid #d8d8d8;
}

.cockpit1 h1 {
  width: 60%;
  margin: 100px auto 35px auto;
}

.cockpit1::before{

} 
.exit {
  position: relative;
  height: 50px;
  &:before,
  &:after {
    content: "EXIT";
    font-size: 14px;
    line-height: 18px;
    padding: 0px 2px;
    font-family: "Arial Narrow", Arial, sans-serif;
    display: block;
    position: absolute;
    background: green;
    color: white;
    top: 50%;
    transform: translate(0, -50%);
  }
  &:before {
    left: 0;
  }
  &:after {
    right: 0;
  }
}

.fuselage {
  background:#f5f5f5;
  border-right: 5px solid #d8d8d8;
  border-left: 5px solid #d8d8d8;
}

ol {
  list-style :none;
  padding: 0;
  margin: 0;
}


.row {
  
}

.seats {
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  justify-content: flex-start;  
  
}

.seat {
  display: flex;
  flex: 0 0 14.28571428571429%;
  padding: 1px;
  position: relative;  
   &:nth-child(3) {
    margin-right: 14.28571428571429%;
  }
  input[type=checkbox] {
    position: absolute;
    opacity: 0;
  }
  input[type=checkbox]:checked {
    + label {
      background: #bada55;      
      -webkit-animation-name: rubberBand;
          animation-name: rubberBand;
      animation-duration: 300ms;
      animation-fill-mode: both;
    }
  }
  input[type=checkbox]:disabled {
    + label {
      background: #dddddd;
      text-indent: -9999px;
      overflow: hidden;
      &:after {
        content: "X";
        text-indent: 0;
        position: absolute;
        top: 4px;
        left: 50%;
        transform: translate(-50%, 0%);
      }
      &:hover {
        box-shadow: none;
        cursor: not-allowed;
      }
    }
  }
  label {    
    display: block;
    position: relative;    
    width: 100%;    
    text-align: center;
    height:51px;
    font-weight: bold;
    line-height: 1.2rem;
    padding: 4px 0;
    background: #F42536;
    border-radius: 5px;
    animation-duration: 300ms;
    animation-fill-mode: both;
    
    &:before {
      content: "";
      position: absolute;
      width: 75%;
      height: 75%;
      top: 1px;
      left: 50%;
      transform: translate(-50%, 0%);
      background: rgba(255,255,255,.4);
      border-radius: 3px;
    }
    &:hover {
      cursor: pointer;
      box-shadow: 0 0 0px 2px #5C6AFF;
    }
    
  }
}

@-webkit-keyframes rubberBand {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }

  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
            transform: scale3d(1.25, 0.75, 1);
  }

  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
            transform: scale3d(0.75, 1.25, 1);
  }

  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
            transform: scale3d(1.15, 0.85, 1);
  }

  65% {
    -webkit-transform: scale3d(.95, 1.05, 1);
            transform: scale3d(.95, 1.05, 1);
  }

  75% {
    -webkit-transform: scale3d(1.05, .95, 1);
            transform: scale3d(1.05, .95, 1);
  }

  100% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }
}

@keyframes rubberBand {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }

  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
            transform: scale3d(1.25, 0.75, 1);
  }

  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
            transform: scale3d(0.75, 1.25, 1);
  }

  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
            transform: scale3d(1.15, 0.85, 1);
  }

  65% {
    -webkit-transform: scale3d(.95, 1.05, 1);
            transform: scale3d(.95, 1.05, 1);
  }

  75% {
    -webkit-transform: scale3d(1.05, .95, 1);
            transform: scale3d(1.05, .95, 1);
  }

  100% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }
}

.rubberBand {
  -webkit-animation-name: rubberBand;
          animation-name: rubberBand;
}

.wing-left{
    position: absolute;
    width: 40px;
    height: 165px;
    background: #ededed;
    margin: 300% -13.4%;
    transform: perspective(3em) rotateY(171deg);
    
}
.wing-right{
    position: absolute;
    width: 40px;
    height: 165px;
    background: #ededed;
    margin: 300% 100.9%;
    transform: perspective(3em) rotateY(191deg);
}
</style>
<style>

                </style>
                <div class="plane">
  <div class="wing-left"></div>
  <div class="wing-right"></div>
  <div class="cockpit">
        <img src="{{ asset('public/images/windows.png') }}" style="transform: rotate(88deg); width: 150px;" alt="">
  </div>
  <div class="exit exit--front fuselage">
    
  </div>          
@if(isset($result23))
<?php     
foreach($result23 as $resu)
{
if(isset($resu->Baggage)){    
$Baggages = $resu->Baggage;
$MealDynamic = $resu->MealDynamic;
$SeatDynamic = $resu->SeatDynamic;
foreach($Baggages as $Baggage){
  foreach($Baggage as $Baggage1){
    $AirlineCode = $Baggage1->AirlineCode;
}
}
}
if(isset($MealDynamic)){
foreach($MealDynamic as $MealDynamics){
  foreach($MealDynamics as $MealDynamic1){
    $FlightNumber = $MealDynamic1->FlightNumber;
}
}
}
if(isset($SeatDynamic)){
foreach($SeatDynamic as $SeatDynamics){
    $SegmentSeat = $SeatDynamics->SegmentSeat;
    foreach($SegmentSeat as $SegmentSeat1){
        $RowSeats = $SegmentSeat1->RowSeats;
    }
   
      
    
?>

  
                                    <ol class="cabin fuselage" style="text-align: center;">
                                           <li class="row row--1">
                                               <?php 
                                                foreach($RowSeats as $kry=>$RowSeats1){
        $Seats = $RowSeats1->Seats;

                                               ?>
           <ol class="seats o1" type="A">
               <?php
                 foreach($Seats as  $key=>$Seats1){
                     
                     ?>
               <li class="seat l1" >
             <form action="{{url('/Lcc-flight-booking')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                                            <input type="hidden" name="ResultIndex" value="<?php echo $ResultIndex;?>"> 
                                            <input type="hidden" name="TraceId" value="<?php echo $TraceId;?>">
                                            <input type="hidden" name="token_id" value="<?php echo $token_id; ?>">
                                            <input type="hidden" name="EndUserIp" value="<?php echo $EndUserIp; ?>">
                                            <input type="hidden" name="BaseFare" value="<?php echo $BaseFare;?>">
                                            <input type="hidden" name="Currency" value="<?php echo $Currency ;?>">
                                            <input type="hidden" name="Tax" value="<?php echo $Tax ;?>"> 
                                            <input type="hidden" name="YQTax" value="<?php echo $YQTax;?>"> 
                                            <input type="hidden" name="AdditionalTxnFeeOfrd" value="<?php echo $AdditionalTxnFeeOfrd;?>"> 
                                            <input type="hidden" name="AdditionalTxnFeePub" value="<?php echo $AdditionalTxnFeePub;?>"> 
                                            <input type="hidden" name="OtherCharges" value="<?php echo $OtherCharges;?>">
                                            <input type="hidden" name="Discount" value="<?php echo $Discount;?>">
                                            <input type="hidden" name="PublishedFare" value="<?php echo $PublishedFare;?>">
                                            <input type="hidden" name="TdsOnCommission" value="<?php echo $TdsOnCommission;?>">
                                            <input type="hidden" name="TdsOnPLB" value="<?php echo $TdsOnPLB;?>">
                                            <input type="hidden" name="TdsOnIncentive" value="<?php echo $TdsOnIncentive;?>">
                                            <input type="hidden" name="ServiceFee" value="<?php echo $ServiceFee;?>">
                                            <input type="hidden" name="Destination_name" value="<?php echo $Destination_name;?>">
                                            <input type="hidden" name="Destination_address" value="<?php echo $Destination_address;?>">
                                            <input type="hidden" name="Source_name" value="<?php echo $Source_name;?>">
                                            <input type="hidden" name="Source_address" value="<?php echo $Source_address;?>">
                                            <input type="hidden" name="Duration" value="<?php echo $Duration;?>">
                                            
                                            <input type="hidden" name="BaggageAirlineCode" value="<?php echo $Baggage1->AirlineCode;?>">
                                            <input type="hidden" name="BaggageFlightNumber" value="<?php echo $Baggage1->FlightNumber;?>">
                                            <input type="hidden" name="BaggageWayType" value="<?php echo $Baggage1->WayType;?>">
                                            <input type="hidden" name="BaggageCode" value="<?php echo $Baggage1->Code;?>">
                                            <input type="hidden" name="BaggageDescription" value="<?php echo $Baggage1->Description;?>">
                                            <input type="hidden" name="BaggageWeight" value="<?php echo $Baggage1->Weight;?>">
                                            <input type="hidden" name="BaggageCurrency" value="<?php echo $Baggage1->Currency;?>">
                                            <input type="hidden" name="BaggagePrice" value="<?php echo $Baggage1->Price;?>">
                                            <input type="hidden" name="BaggageOrigin" value="<?php echo $Baggage1->Origin;?>">
                                            <input type="hidden" name="BaggageDestination" value="<?php echo $Baggage1->Destination;?>">
                                            
                                            <input type="hidden" name="MealDynamicAirlineCode" value="<?php echo $MealDynamic1->AirlineCode;?>">
                                            <input type="hidden" name="MealDynamicFlightNumber" value="<?php echo $MealDynamic1->FlightNumber;?>">
                                            <input type="hidden" name="MealDynamicWayType" value="<?php echo $MealDynamic1->WayType;?>">
                                            <input type="hidden" name="MealDynamicCode" value="<?php echo $MealDynamic1->Code;?>">
                                            <input type="hidden" name="MealDynamicDescription" value="<?php echo $MealDynamic1->Description;?>">
                                            <input type="hidden" name="MealDynamicAirlineDescription" value="<?php echo $MealDynamic1->AirlineDescription;?>">
                                            <input type="hidden" name="MealDynamicQuantity" value="<?php echo $MealDynamic1->Quantity;?>">
                                            <input type="hidden" name="MealDynamicCurrency" value="<?php echo $MealDynamic1->Currency;?>">
                                            <input type="hidden" name="MealDynamicPrice" value="<?php echo $MealDynamic1->Price;?>">
                                            <input type="hidden" name="MealDynamicOrigin" value="<?php echo $MealDynamic1->Origin;?>">
                                            <input type="hidden" name="MealDynamicDestination" value="<?php echo $MealDynamic1->Destination;?>">
                                           
                                            <input type="hidden" name="SeatsAirlineCode" value="<?php echo $Seats1->AirlineCode;?>">
                                            <input type="hidden" name="SeatsFlightNumber" value="<?php echo $Seats1->FlightNumber;?>">
                                            <input type="hidden" name="SeatsCraftType" value="<?php echo $Seats1->CraftType;?>">
                                            <input type="hidden" name="SeatsOrigin" value="<?php echo $Seats1->Origin;?>">
                                            <input type="hidden" name="SeatsDestination" value="<?php echo $Seats1->Destination;?>">
                                            <input type="hidden" name="SeatsAvailablityType" value="<?php echo $Seats1->AvailablityType;?>">
                                            <input type="hidden" name="SeatsDescription" value="<?php echo $Seats1->Description;?>">
                                            <input type="hidden" name="SeatsCode" value="<?php echo $Seats1->Code;?>">
                                            <input type="hidden" name="SeatsRowNo" value="<?php echo $Seats1->RowNo;?>">
                                            <input type="hidden" name="SeatsSeatNo" value="<?php echo $Seats1->SeatNo;?>">
                                            <input type="hidden" name="SeatsSeatType" value="<?php echo $Seats1->SeatType;?>">
                                            <input type="hidden" name="SeatsSeatWayType" value="<?php echo $Seats1->SeatWayType;?>">
                                            <input type="hidden" name="SeatsCompartment" value="<?php echo $Seats1->Compartment;?>">
                                            <input type="hidden" name="SeatsDeck" value="<?php echo $Seats1->Deck;?>">
                                            <input type="hidden" name="SeatsCurrency" value="<?php echo $Seats1->Currency;?>">
                                            <input type="hidden" name="SeatsPrice" value="<?php echo $Seats1->Price;?>">
                                            
                                           
          <input type="checkbox" id="<?php  print_r($Seats1->Code);?>" />
                                            @if($Seats1->AvailablityType == 1)
                                           <button style="font-size: 10px;border: none;background: none;"> <label title="₹<?php echo $Seats1->Price;?>" style="background-color:green;padding: 4px 2px 0px 1px;
  
    font-size: 14px;
    color: #000;
}" for="<?php  print_r($Seats1->Code);?>"><?php  if($Seats1->SeatType == 1){ echo "W "; } if($Seats1->SeatType == 2){ echo "A "; } if($Seats1->SeatType == 3){ echo "M "; }?><?php  print_r($Seats1->Code);?></button>
                                            @elseif($Seats1->AvailablityType == 3)
                                            <button style="font-size: 10px;border: none;background: none;"disabled><label title="₹<?php echo $Seats1->Price;?>" style="background-color:yellow;padding: 4px 2px 0px 1px;

    font-size: 14px;
    color: #000;
}" for="<?php  print_r($Seats1->Code);?>"><?php if($Seats1->SeatType == 1){ echo "W "; } if($Seats1->SeatType == 2){ echo "A "; } if($Seats1->SeatType == 3){ echo "M "; }?><?php  print_r($Seats1->Code);?></button>
                                            @else  
                                             <button style="font-size: 10px;border: none;background: none;"disabled><label title="₹<?php echo $Seats1->Price;?>" style="background-color:green;padding: 4px 2px 0px 1px;

    font-size: 14px;
    color: #000;
} " for="<?php  print_r($Seats1->Code);?>"><?php if($Seats1->SeatType == 1){ echo "W "; } if($Seats1->SeatType == 2){ echo "A "; } if($Seats1->SeatType == 3){ echo "M "; }?><?php  print_r($Seats1->Code);?></button>
                                             @endif  
                                        </form></label>
        </li>
              
               <?php 
                                                }
               ?>
           </ol>
           <?php 
    }
                                                
           ?>
       </li>
    
       </ol>
  
                                            
                                    
        
                        
       <?php if($key == 5 ){ echo "<br>";  }  ?>
      
      
       
<?php 

}
} 
}
?>
@endif
    <div class="exit exit--back fuselage">
    
  </div>
  <div class="cockpit1">
   
  </div>
</div>
    </section>

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

    <!-- Footer -->
   @include('auth.cust_footer')
    <div class="go-top">
        <i class="fas fa-chevron-up"></i>
        <i class="fas fa-chevron-up"></i>
    </div>

    <!-- Logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body logout_modal_content">
                    <div class="btn_modal_closed">
                        <button type="button" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fas fa-times"></i></button>
                    </div>
                    <h3>
                        Are you sure? <br>
                        you want to log out.
                    </h3>
                    <div class="logout_approve_button">
                        <button data-bs-dismiss="modal" class="btn btn_theme btn_md">Yes Confirm</button>
                        <button data-bs-dismiss="modal" class="btn btn_border btn_md">No Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


   
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