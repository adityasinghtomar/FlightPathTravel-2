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
                        <h2>Flight submission</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span><a href="flight-search-result.html">Flight
                                    search </a></li>
                            <li><span><i class="fas fa-circle"></i></span> Flight booking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tour Booking Submission Areas -->
    <section id="tour_booking_submission" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tou_booking_form_Wrapper">
                        <div class="booking_tour_form">
                            <h3 class="heading_theme">Passenger information</h3>
                            <div class="tour_booking_form_box">
                                <form action="{{url('/lcc_ticket_booking')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                                                      <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <lable>First Name</lable>
                                                <input type="text" name="fname" class="form-control bg_input"
                                                    placeholder="First name*" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <lable>Last Name</lable>
                                                <input type="text" name="lname" class="form-control bg_input"
                                                    placeholder="Last name*" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <lable>Email</lable>
                                                <input type="text" name="email" class="form-control bg_input"
                                                    placeholder="Email address" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <lable>Mobile No.</lable>
                                                <input type="number" name="mobile" class="form-control bg_input"
                                                    placeholder="Mobile number*" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <lable>Address</lable>
                                                <input type="text" name="street_address" class="form-control bg_input"
                                                    placeholder="Street address" required>
                                            </div>
                                        </div>
                                        
                                    </div>
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
                                            
                                            <input type="hidden" name="BaggageAirlineCode" value="<?php echo $BaggageAirlineCode;?>">
                                            <input type="hidden" name="BaggageFlightNumber" value="<?php echo $BaggageFlightNumber;?>">
                                            <input type="hidden" name="BaggageWayType" value="<?php echo $BaggageWayType;?>">
                                            <input type="hidden" name="BaggageCode" value="<?php echo $BaggageCode;?>">
                                            <input type="hidden" name="BaggageDescription" value="<?php echo $BaggageDescription;?>">
                                            <input type="hidden" name="BaggageWeight" value="<?php echo $BaggageWeight;?>">
                                            <input type="hidden" name="BaggageCurrency" value="<?php echo $BaggageCurrency;?>">
                                            <input type="hidden" name="BaggagePrice" value="<?php echo $BaggagePrice;?>">
                                            <input type="hidden" name="BaggageOrigin" value="<?php echo $BaggageOrigin;?>">
                                            <input type="hidden" name="BaggageDestination" value="<?php echo $BaggageDestination;?>">
                                            
                                            <input type="hidden" name="MealDynamicAirlineCode" value="<?php echo $MealDynamicAirlineCode;?>">
                                            <input type="hidden" name="MealDynamicFlightNumber" value="<?php echo $MealDynamicFlightNumber;?>">
                                            <input type="hidden" name="MealDynamicWayType" value="<?php echo $MealDynamicWayType;?>">
                                            <input type="hidden" name="MealDynamicCode" value="<?php echo $MealDynamicCode;?>">
                                           <input type="hidden" name="MealDynamicAirlineDescription" value="<?php echo $MealDynamicAirlineDescription;?>">
                                            <input type="hidden" name="MealDynamicQuantity" value="<?php echo $MealDynamicQuantity;?>">
                                            <input type="hidden" name="MealDynamicCurrency" value="<?php echo $MealDynamicCurrency;?>">
                                            <input type="hidden" name="MealDynamicPrice" value="<?php echo $MealDynamicPrice;?>">
                                            <input type="hidden" name="MealDynamicOrigin" value="<?php echo $MealDynamicOrigin;?>">
                                            <input type="hidden" name="MealDynamicDestination" value="<?php echo $MealDynamicDestination;?>">
                                            
                                            <input type="hidden" name="SeatsAirlineCode" value="<?php echo $SeatsAirlineCode;?>">
                                            <input type="hidden" name="SeatsFlightNumber" value="<?php echo $SeatsFlightNumber;?>">
                                            <input type="hidden" name="SeatsCraftType" value="<?php echo $SeatsCraftType;?>">
                                            <input type="hidden" name="SeatsOrigin" value="<?php echo $SeatsOrigin;?>">
                                            <input type="hidden" name="SeatsDestination" value="<?php echo $SeatsDestination;?>">
                                            <input type="hidden" name="SeatsAvailablityType" value="<?php echo $SeatsAvailablityType;?>">
                                            <input type="hidden" name="SeatsDescription" value="<?php echo $SeatsDescription;?>">
                                            <input type="hidden" name="SeatsCode" value="<?php echo $SeatsCode;?>">
                                            <input type="hidden" name="SeatsRowNo" value="<?php echo $SeatsRowNo;?>">
                                            <input type="hidden" name="SeatsSeatNo" value="<?php echo $SeatsSeatNo;?>">
                                            <input type="hidden" name="SeatsSeatType" value="<?php echo $SeatsSeatType;?>">
                                            <input type="hidden" name="SeatsSeatWayType" value="<?php echo $SeatsSeatWayType;?>">
                                            <input type="hidden" name="SeatsCompartment" value="<?php echo $SeatsCompartment;?>">
                                            <input type="hidden" name="SeatsDeck" value="<?php echo $SeatsDeck;?>">
                                            <input type="hidden" name="SeatsCurrency" value="<?php echo $SeatsCurrency;?>">
                                            <input type="hidden" name="SeatsPrice" value="<?php echo $SeatsPrice;?>"> 
                                       
                            </div>
                        </div>
                        <div class="booking_tour_form">
                            <h3 class="heading_theme">Payment method</h3>
                            <div class="tour_booking_form_box">
                                <div class="booking_payment_boxed">
                                    <form action="!#" id="payment_checked">
                                        <!-- <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1" value="red">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Payment by card
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault2" value="green">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Paypal
                                            </label>
                                        </div> -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault3" value="black">
                                            <label class="form-check-label" for="flexRadioDefault3">
                                                Razorpay
                                            </label>
                                        </div>
                                        <!-- <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault4" value="white">
                                            <label class="form-check-label" for="flexRadioDefault4">
                                                Cash on delivery
                                            </label>
                                        </div> -->
                                        <div class="payment_filed_wrapper">
                                            <div class="payment_card payment_toggle red">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control bg_input"
                                                                placeholder="Card number">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control bg_input"
                                                                placeholder="Cardholder name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control bg_input"
                                                                placeholder="Date of expiry">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control bg_input"
                                                                placeholder="Security code">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="paypal_payment payment_toggle green">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control bg_input"
                                                                placeholder="Email Address">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="payoneer_payment payment_toggle black">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <button>Pay</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                            </div>
                         </div>
                    </div>
                                        <div class="booking_tour_form_submit">
                            <div class="form-check write_spical_check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf1">
                                <label class="form-check-label" for="flexCheckDefaultf1">
                                    I read and accept all <a href="terms-service.html">Terms and conditios</a>

                                </label>
                            </div>
                                    </div>
                                        <button class="btn btn_theme btn_sm">Book now</button>
                                    </form>
                                
                       
                </div>
                <div class="col-lg-4">
                    <div class="tour_details_right_sidebar_wrapper">
                        <div class="tour_detail_right_sidebar">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3>Flights</h3>
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
                                            <p><?php $hours = floor($Duration / 60);
                                                        $min = $Duration - ($hours * 60);
                                                        echo $hours."h : ".$min;echo"m ";
                                                        ?></p>
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
                                       <li><i class="fas fa-circle"></i></li>
                                    </ul>
                                </div>
                                <div class="tour_package_details_bar_price">
                                    <h5>Price</h5>
                                    <div class="tour_package_bar_price">
                                        <!--<h6><del>$ 35,500</del></h6>-->
                                        @if(session()->has('commision')) <?php $commision = session()->get('commision') ?>
                                            <h3><?php echo $Currency;?><?php $base123 = $BaseFare?> <?php $perce = $base123/100*$commision ?> <?php echo $perce + $base123; ?></h3>
                                        @else
                                        <h3><?php echo $Currency; ?><?php echo $BaseFare; ?>  <sub> / Adult X 1</sub> </h3>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tour_detail_right_sidebar">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3>Coupon</h3>
                                </div>
                             <?php $Coupon =\App\Coupon_Model::where('status','active')->get(); ?> 
                             @foreach($Coupon as $Coupons)
                               <div class="tour_package_details_bar_list">
                                    <div class="select_person_item">
                                        <div class="select_person_left">
                                            <h6>Code : {{$Coupons->coupon_code}}</h6>
                                            <p>{{$Coupons->description}}</p>
                                        </div>
                                        <div class="select_person_right">
                                            <h6><?php echo $Currency ;?> {{$Coupons->amount}}</h6>
                                        </div>
                                    </div>
                                    </div>
                            @endforeach    
                            </div>
                        </div>
                        
                        <!--<div class="tour_detail_right_sidebar">-->
                        <!--    <div class="tour_details_right_boxed">-->
                        <!--        <div class="tour_details_right_box_heading">-->
                        <!--            <h3>Travel date</h3>-->
                        <!--        </div>-->
                        <!--        <div class="edit_date_form">-->
                        <!--            <div class="form-group">-->
                        <!--                <label for="dates">Edit Date</label>-->
                        <!--                <input type="date" value="2022-05-05" class="form-control" id="dates">-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="tour_package_details_bar_list">-->
                        <!--            <h5>Tourist</h5>-->
                        <!--            <div class="select_person_item">-->
                        <!--                <div class="select_person_left">-->
                        <!--                    <h6>Adult</h6>-->
                        <!--                    <p>12y+</p>-->
                        <!--                </div>-->
                        <!--                <div class="select_person_right">-->
                        <!--                    <h6>01</h6>-->
                        <!--                </div>-->
                        <!--            </div>-->

                        <!--            <div class="select_person_item">-->
                        <!--                <div class="select_person_left">-->
                        <!--                    <h6>Children</h6>-->
                        <!--                    <p>2 - 12 years</p>-->
                        <!--                </div>-->
                        <!--                <div class="select_person_right">-->
                        <!--                    <h6>01</h6>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--            <div class="select_person_item">-->
                        <!--                <div class="select_person_left">-->
                        <!--                    <h6>Infant</h6>-->
                        <!--                    <p>Below 2 years</p>-->
                        <!--                </div>-->
                        <!--                <div class="select_person_right">-->
                        <!--                    <h6>01</h6>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                                <!--<div class="edit_person">-->
                                <!--    <p>Edit person</p>-->
                                <!--</div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="tour_detail_right_sidebar">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3>Coupon code</h3>
                                </div>
                                <div class="coupon_code_area_booking">
                                    <form id="myForm" method="POST" action="{{ route('coupon.check') }}">
                                         @csrf
                                        <div class="form-group">
                                            <input type="text" name="coupon" class="form-control bg_input"
                                                placeholder="Enter coupon code">
                                        </div>
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
                                     
                                        <div class="coupon_code_submit">
                                            <button type="submit" class="btn btn-primary">Apply voucher</button>
                                        </div>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                        <div class="tour_detail_right_sidebar">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3>Booking amount</h3>
                                </div>

                                <div class="tour_booking_amount_area">
                                    <ul>
                                        <li>Adult Price x 1 <span>@if(session()->has('commision')) <?php $commision = session()->get('commision') ?>
                                            <h3><?php echo $Currency;?><?php $base123 = $BaseFare?> <?php $perce = $base123/100*$commision ?> <?php echo $total = $perce + $base123; ?></h3>
                                        @else
                                        <?php echo $BaseFare; ?>
                                        @endif
                                        </span></li>
                                        <li>Discount <span>-<?php echo $Discount; ?>%</span></li>
                                        <li>Tax<span><?php echo $Tax; ?></span></li>
                                    </ul>
                                    <div class="tour_bokking_subtotal_area">
                                        <h6>Subtotal <span>@if(session()->has('commision')) <?php $commision = session()->get('commision') ?>
                                            <?php echo $Currency;?><?php $base123 = $BaseFare?> <?php $perce = $base123/100*$commision ?> <?php echo $perce + $base123 + $Tax; ?>
                                        @else
                                            <?php echo $BaseFare + $Tax; ?> 
                                        @endif    </span></h6>
                                    </div>
                                    <div class="coupon_add_area">
                                        @if(isset($coupon))
                                        <h6><span class="remove_coupon_tour">Remove</span> Coupon code  (<?php echo $coupon->coupon_code; ?>)
                                            <span><?php echo $Currency; ?><?php echo $coupon->amount; ?></span>
                                        </h6>
                                        @endif
                                    </div>
                                    <div class="total_subtotal_booking">
                                        
                                        <h6>Total Amount<span>
                                            @if(session()->has('commision')) <?php $commision = session()->get('commision') ?>
                                            <?php echo $Currency;?><?php $base123 = $BaseFare?> <?php $perce = $base123/100*$commision ?> 
                                                  @if(isset($coupon)) 
                                                  <?php  $total_amo= $perce + $base123 + $Tax; ?> <?php echo $total_amo - $coupon->amount ?> 
                                                  @else
                                                  <?php echo $total_amo= $perce + $base123 + $Tax; ?>
                                                  @endif
                                            @else
                                            <?php echo $BaseFare + $Tax; ?> 
                                        @endif    </span></h6>
                                    </div>
                                </div>
                            </div>
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
$(document).ready(function() {
    $('#myForm').submit(function(event) {
        event.preventDefault(); // Prevent the default form submission

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'), // Get the form action URL
            data: $(this).serialize(), // Serialize form data
            success: function(response) {
                // Handle the response from the server
                console.log(response);
                // You can update the DOM or show a success message here
            },
            error: function(error) {
                console.log(error);
                // Handle errors here
            }
        });
    });
});
</script>
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
    <script src="assets/js/payment-form.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>