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
    <section id="dashboard_main_arae" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="tour_details_right_sidebar_wrapper">
                        <div class="tour_detail_right_sidebar">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3>Flights : <?php echo $AirlineName; ?> </h3>
                                </div>
                                <div class="flight_sidebar_right">
                                    <div class="flight_search_left_sidebar">
                                        <div class="flight_search_destination_sidebar">
                                            <p>From</p>
                                            <h3><?php echo $Source_name; ?></h3>
                                            <h6><?php echo $Source_address; ?></h6>
                                        </div>
                                    </div>
                                    <div class="flight_search_middel_sidebar">
                                        <div class="flight_right_arrow_sidebar">
                                            <img src="assets/img/icon/right_arrow.png" alt="icon">
                                            <h6>Non-stop</h6>
                                            <p>
                                            <?php $hours = floor($Duration / 60);
                                                        $min = $Duration - ($hours * 60);
                                                        echo $hours."h : ".$min;echo"m ";
                                                        ?>
                                            </p>
                                            
                                        </div>
                                        <div class="flight_search_destination_sidebar">
                                            <p>To</p>
                                            <h3><?php echo $Destination_name; ?></h3>
                                            <h6><?php echo $Destination_address; ?></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour_package_details_bar_list">
                                    <h5>Package rules</h5>
                                    <ul>
                                        <!--<li><i class="fas fa-circle"></i>Buffet breakfast as per the Itinerary</li>-->
                                        <!--<li><i class="fas fa-circle"></i>Visit eight villages showcasing Polynesian-->
                                        <!--    culture-->
                                        <!--</li>-->
                                        <!--<li><i class="fas fa-circle"></i>Complimentary Camel safari, Bonfire,</li>-->
                                        <!--<li><i class="fas fa-circle"></i>All toll tax, parking, fuel, and driver-->
                                        <!--    allowances-->
                                        <!--</li>-->
                                        <!--<li><i class="fas fa-circle"></i>Comfortable and hygienic vehicle</li>-->
                                    </ul>
                                </div>
                                <div class="tour_package_details_bar_price"> 
                                    <h5>Price</h5>
                                    <div class="tour_package_bar_price">
                                        <!--<h6><del>$ 35,500</del></h6>-->
                                        @if(session()->has('commision')) <?php $commision = session()->get('commision') ?>
                                            <h3><?php echo $Currency;?><?php $base123 = $BaseFare?> <?php $perce = $base123/100*$commision ?> <?php echo $perce + $base123; ?></h3>
                                        @else
                                        <h3><?php echo $Currency; ?><?php echo $BaseFare; ?>  <sub> / </sub> </h3>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div> 
                <style>
              *, *:before, *:after {
  box-sizing: border-box;
}

html {
  font-size: 16px;
}

.plane {
  margin: 20px auto;
  max-width: 300px;
}

.cockpit {
  height: 250px;
  position: relative;
  overflow: hidden;
  text-align: center;
  border-bottom: 5px solid #d8d8d8;
}
.cockpit:before {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  height: 500px;
  width: 100%;
  border-radius: 50%;
  border-right: 5px solid #d8d8d8;
  border-left: 5px solid #d8d8d8;
}
.cockpit h1 {
  width: 60%;
  margin: 100px auto 35px auto;
}

.exit {
  position: relative;
  height: 50px;
}
.exit:before, .exit:after {
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
.exit:before {
  left: 0;
}
.exit:after {
  right: 0;
}

.fuselage {
  border-right: 5px solid #d8d8d8;
  border-left: 5px solid #d8d8d8;
}

ol {
  list-style: none;
  padding: 0;
  margin: 0;
}

.seats {
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  justify-content: flex-start;
}

/*.seat {*/
/*  display: flex;*/
/*  flex: 0 0 14.28571428571429%;*/
/*  padding: 5px;*/
/*  position: relative;*/
/*}*/
.seat:nth-child(3) {
  margin-right: 14.28571428571429%;
}
.seat input[type=checkbox] {
  position: absolute;
  opacity: 0;
}
.seat input[type=checkbox]:checked + label {
  background: #bada55;
  -webkit-animation-name: rubberBand;
  animation-name: rubberBand;
  animation-duration: 300ms;
  animation-fill-mode: both;
}
.seat input[type=checkbox]:disabled + label {
  background: #dddddd;
  text-indent: -9999px;
  overflow: hidden;
}
.seat input[type=checkbox]:disabled + label:after {
  content: "X";
  text-indent: 0;
  position: absolute;
  top: 4px;
  left: 50%;
  transform: translate(-50%, 0%);
}
.seat input[type=checkbox]:disabled + label:hover {
  box-shadow: none;
  cursor: not-allowed;
}
.seat label {
  display: block;
  position: relative;
  width: 100%;
  text-align: center;
  font-size: 14px;
  font-weight: bold;
  line-height: 1.5rem;
  padding: 4px 0;
  background: #F42536;
  border-radius: 5px;
  animation-duration: 300ms;
  animation-fill-mode: both;
}
.seat label:before {
  content: "";
  position: absolute;
  width: 75%;
  height: 75%;
  top: 1px;
  left: 50%;
  transform: translate(-50%, 0%);
  background: rgba(255, 255, 255, 0.4);
  border-radius: 3px;
}
.seat label:hover {
  cursor: pointer;
  box-shadow: 0 0 0px 2px #5C6AFF;
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
    -webkit-transform: scale3d(0.95, 1.05, 1);
    transform: scale3d(0.95, 1.05, 1);
  }
  75% {
    -webkit-transform: scale3d(1.05, 0.95, 1);
    transform: scale3d(1.05, 0.95, 1);
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
    -webkit-transform: scale3d(0.95, 1.05, 1);
    transform: scale3d(0.95, 1.05, 1);
  }
  75% {
    -webkit-transform: scale3d(1.05, 0.95, 1);
    transform: scale3d(1.05, 0.95, 1);
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

                </style>
                <div class="col-lg-8">
                    <div class="dashboard_common_table">
                        <h3>Flight Seat Select</h3>
                        <div class="table-responsive-lg table_common_area">
<div class="plane">
  <div class="cockpit">
    <h1>Please select a seat</h1>
  </div>
  <div class="exit exit--front fuselage">
    
  </div>
                                <table>            
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
    foreach($RowSeats as $kry=>$RowSeats1){
        $Seats = $RowSeats1->Seats;
    foreach($Seats as  $key=>$Seats1){
    
?>

  
                                    <td class="seat" type="A">
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
                                            
                                           @if($Seats1->AvailablityType == 1)
                                            <button class="btn btn-success" style="height:10px; width:10px; margin:3px;"><?php if($Seats1->SeatType == 1){ echo "W "; } if($Seats1->SeatType == 2){ echo "A "; } if($Seats1->SeatType == 3){ echo "M "; }?><?php  print_r($Seats1->Code);?></button>
                                            @elseif($Seats1->AvailablityType == 3)
                                            <button class="btn btn-warning" style="height:10px; width:10px; margin:3px;" disabled><?php if($Seats1->SeatType == 1){ echo "W "; } if($Seats1->SeatType == 2){ echo "A "; } if($Seats1->SeatType == 3){ echo "M "; }?><?php  print_r($Seats1->Code);?></button>
                                            @else  
                                             <button class="btn btn-success" style="height:10px; width:10px; margin:3px;" disabled><?php if($Seats1->SeatType == 1){ echo "W "; } if($Seats1->SeatType == 2){ echo "A "; } if($Seats1->SeatType == 3){ echo "M "; }?><?php  print_r($Seats1->Code);?></button>
                                             @endif  
                                        </form>
                                    
        
                        
       <?php if($key == 5 ){ echo "<tr>";  }  ?>
       </td>
      
       
<?php 
}    
      
    }

}
} 
}
?>
@endif
    </table>
  <div class="exit exit--back fuselage">
    
  </div>
</div>       
      <div class="fuselage">
        
      </div>
    </div>
                </div>
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


    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap.bundle.js"></script>
    <!-- Meanu js -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <!-- owl carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- wow.js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Custom js -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/add-form.js"></script>

</body>

</html>