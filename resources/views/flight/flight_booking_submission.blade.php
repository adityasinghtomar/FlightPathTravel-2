@extends('flight.header')
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
                                <form action="{{url('/booking_det')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                                                      <div class="row">
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
                                   <?php for ($row=1; $row <= $adult; $row++) {  ?>  
                                    <h3 class="heading_theme">Passenger {{$row}}</h3>
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
                                        
                                        <!--<div class="col-lg-12">-->
                                        <!--    <div class="form-group">-->
                                        <!--        <lable>Address</lable>-->
                                        <!--        <input type="text" name="street_address" class="form-control bg_input"-->
                                        <!--            placeholder="Street address" required>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                    <?php }  ?>   
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
                                       
                            </div>
                        </div>
                        <div class="booking_tour_form">
                            <h3 class="heading_theme">Payment method</h3>
                            <div class="tour_booking_form_box">
                                <div class="booking_payment_boxed">
                                    <!--<form action="!#" id="payment_checked">-->
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1" value="red">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Razorpay
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault2" value="green">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                               Other Pay
                                            </label> 
                                        </div>
                                        <!--<div class="form-check">-->
                                        <!--    <input class="form-check-input" type="radio" name="flexRadioDefault"-->
                                        <!--        id="flexRadioDefault3" value="black">-->
                                        <!--    <label class="form-check-label" for="flexRadioDefault3">-->
                                        <!--        Payoneer-->
                                        <!--    </label>-->
                                        <!--</div>-->
                                        <!--<div class="form-check">-->
                                        <!--    <input class="form-check-input" type="radio" name="flexRadioDefault"-->
                                        <!--        id="flexRadioDefault4" value="white">-->
                                        <!--    <label class="form-check-label" for="flexRadioDefault4">-->
                                        <!--        Cash on delivery-->
                                        <!--    </label>-->
                                        <!--</div>-->
                                        <div class="payment_filed_wrapper">
                                            <div class="payment_card payment_toggle red">
                                                <div class="row">
                <form action="{{ url('payment') }}" method="post" id="addPaymentForm">
                   @csrf
                    <div class="popupForm">
                       
                        <div class="form-group floating-field">
                            <input type="hidden" name="razorpay_payment_id" value="" id="razorpay_payment_id">
                            <input type="hidden" name="razorpay_order_id" value="" id="razorpay_order_id">
                            <input type="hidden" name="razorpay_signature" value="" id="razorpay_signature">
                            <input type="hidden" name="generated_signature" value="" id="generated_signature">
							 <input type="hidden" name="amount" value="<?php echo $BaseFare; ?>" id="payment">

                    </div><!--//popupForm-->

                            <div class="col-sm-6 text-right">                                 
                                <button class="btn btn-primary" type="button" id="addPaymentButton"><?php echo $BaseFare; ?> Pay</button>
                            </div>

                    </div>
                </form>
                                                </div>
                                            </div>
                                            <div class="paypal_payment payment_toggle green">
                                                   
                                  
                                             </div>
                                                
                                            <div class="payoneer_payment payment_toggle black">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control bg_input"
                                                                placeholder="Email Address">
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
                                             <div class="panel panel-default">
        <div class="panel-body">   
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <center>
               
               
            </center>
        </div>
    </div>
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
                                    <h3><?php if(isset($AirlineName)){ echo $AirlineName; }?> </h3>
                                </div>
                                <div class="flight_sidebar_right">
                                    <div class="flight_search_left_sidebar">
                                        <div class="flight_search_destination_sidebar">
                                            <h3>From</h3>
                                           <div class="code_time">
                                                                <span class="code"><?php echo $Source_name; ?></span>
                                                                <span class="time"><?php 
                                                            $input = $DepTime;
                                                            $date = strtotime($input); 
                                                            echo date('h:i a', $date); 
                                                            ?></span>
                                                            </div>
                                            <h6><?php echo $Source_address; ?></h6>
                                        <div>
                                                               <h6><?php 
                                                            $input = $DepTime;
                                                            $date = strtotime($input); 
                                                            echo date('d-M-Y', $date); 
                                                            ?></h6>
                                                            </div>    
                                        </div>
                                    </div>
                                    <div class="flight_search_middel_sidebar">
                                        <div class="flight_right_arrow_sidebar">
                                            <img src="assets/img/icon/right_arrow.png" alt="icon">
                                            <h6><?php 
                                                            if($count == 1){
                                                                echo "Non"; 
                                                                }
                                                            if($count == 2){
                                                                echo "One"; 
                                                                }
                                                            if($count > 2){
                                                                echo "Multi"; 
                                                                }    
                                                            
                                                             ?> Stops</h6>
                                            <p>
                                                <?php 
                                                            $input1 = $DepTime;; 
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
                                            </p>
                                            
                                        </div>
                                        <div class="flight_search_destination_sidebar">
                                            <h3>To</h3>
                                           <div class="code_time">
                                                                <span class="code"><?php echo $Destination_name; ?></span>
                                                                <span class="time"><?php 
                                                            $input = $ArrTime;
                                                            $date = strtotime($input); 
                                                            echo date('h:i a', $date); 
                                                            ?></span>
                                                            </div>
                                            <h6><?php echo $Destination_address; ?></h6>
                                            <div>
                                                               <h6><?php 
                                                            $input = $ArrTime;
                                                            $date = strtotime($input); 
                                                            echo date('d-M-Y', $date); 
                                                            ?></h6>
                                                            </div> 
                                            <h6 data-bs-toggle="collapse" data-bs-target="#collapseExample"
                                                aria-expanded="false" aria-controls="collapseExample">Show more <i
                                                    class="fas fa-chevron-down"></i></h6>                
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="tour_package_details_bar_list">-->
                                <!--    <ul>-->
                                <!--        <h4>Refund Policy</h4>-->
                                <!--                    <p class="fz12">1. Refund and Date Change are done as per the-->
                                <!--                        following policies.</p>-->
                                <!--                    <p class="fz12">2. Refund Amount= Refund Charge (as per airline-->
                                <!--                        policy + ShareTrip Convenience Fee). </p>-->
                                <!--                    <p class="fz12">3. Date Change Amount= Date Change Fee (as per-->
                                <!--                        Airline Policy + ShareTrip Convenience Fee).</p>-->
                                <!--    </ul>-->
                                <!--</div>-->
                                
                                <div class="flight_policy_refund collapse" id="collapseExample">
                                        <div class="flight_show_down_wrapper">
                                            <div class="flight-shoe_dow_item">
                                                <div class="airline-details">
                                                    <div class="img"><img src="assets/img/icon/bg.png" alt="img"></div>
                                                    <span class="airlineName fw-500">Biman Bangladesh Airlines &nbsp;
                                                        BG435</span>
                                                    <span class="flightNumber">BOEING 737-800 - 738</span>
                                                </div>
                                                   
                                                    <div class="flight_det_wrapper">
                                                        <div class="flight_det">
                                                            <div class="code_time">
                                                               <h5>Refund Policy</h5>
                                                    <p class="fz12">1. Refund and Date Change are done as per the
                                                        following policies.</p>
                                                    <p class="fz12">2. Refund Amount= Refund Charge (as per airline
                                                        policy + ShareTrip Convenience Fee). </p>
                                                    <p class="fz12">3. Date Change Amount= Date Change Fee (as per
                                                        Airline Policy + ShareTrip Convenience Fee).</p>
                                                
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tour_package_details_bar_price">
                                    <h5>Price</h5>
                                    <div class="tour_package_bar_price">
                                        <!--<h6><del>$ 35,500</del></h6>-->
                                        @if(session()->has('commision')) <?php $commision = session()->get('commision') ?>
                                            <h3><?php echo $Currency;?><?php $base123 = $BaseFare?> <?php $perce = $base123/100*$commision ?> <?php echo $perce + $base123; ?></h3>
                                        @else
                                        <h3><?php echo $Currency; ?>  <?php echo $BaseFare + $Tax; ?>  <sub> / Adult X {{$adult}}</sub> </h3>
                                        @endif
                                    </div>
                                </div>
                                            </div>
                                        
                                        
                                    </div> 
                                    
                                    </div> 
                                <div class="tour_package_details_bar_price">
                                    <h5>Price</h5>
                                    <div class="tour_package_bar_price">
                                        <!--<h6><del>$ 35,500</del></h6>-->
                                        @if(session()->has('commision')) <?php $commision = session()->get('commision') ?>
                                            <h3><?php echo $Currency;?><?php $base123 = $BaseFare?> <?php $perce = $base123/100*$commision ?> <?php echo $perce + $base123; ?></h3>
                                        @else
                                        <h3><?php echo $Currency; ?>  <?php echo $BaseFare + $Tax; ?>  <sub> / Adult X {{$adult}}</sub> </h3>
                                        @endif
                                    </div>
                                </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>   
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
        
<script>
    $('#addPaymentButton').on('click', function (e) {
        e.preventDefault();
        var amount = $('#payment').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "post",
            url: "/orderid-generate",
            data: $("#addPaymentForm").serialize(),
            success: function (data) {
                var order_id = '';
                if (data.order_id) {
                    order_id = data.order_id;
                }

                var options = {
                    "key": "{{ config('app.razorpay_api_key') }}", // Enter the Key ID generated from the Dashboard
                    "amount": amount, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                    "currency": "{{ config('app.currency') }}",
                    "name": "{{ config('app.account_name') }}",
                    "description": remarks,
                    "image": "{{ asset('images/logo-black.svg') }}",
                    "order_id": order_id, //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                    "handler": function (response) {
                        $('#razorpay_payment_id').val(response.razorpay_payment_id);
                        $('#razorpay_order_id').val(response.razorpay_order_id);
                        $('#razorpay_signature').val(response.razorpay_signature);
                        $('#addPaymentForm').submit();
                    },
                    "prefill": {
                        "name": "umesh",
                        "email": "umesh@gmail.com",
                        "contact": "7999510032"
                    },
            "notes": {
                "address": "Razorpay Corporate Office"
            },
                    "theme": {
                        "color": "#3399cc"
                    }
                };
                var rzp1 = new Razorpay(options);
                rzp1.on('payment.failed', function (response) {

                });

                rzp1.open();


            },

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