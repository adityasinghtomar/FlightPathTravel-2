@include('auth.cust_header')
 <style>
         /*
 CSS for the main interaction
*/
.tabset > input[type="radio"] {
  position: absolute;
  left: -200vw;
}

.tabset .tab-panel {
  display: none;
}

.tabset > input:first-child:checked ~ .tab-panels > .tab-panel:first-child,
.tabset > input:nth-child(3):checked ~ .tab-panels > .tab-panel:nth-child(2),
.tabset > input:nth-child(5):checked ~ .tab-panels > .tab-panel:nth-child(3),
.tabset > input:nth-child(7):checked ~ .tab-panels > .tab-panel:nth-child(4),
.tabset > input:nth-child(9):checked ~ .tab-panels > .tab-panel:nth-child(5),
.tabset > input:nth-child(11):checked ~ .tab-panels > .tab-panel:nth-child(6) {
  display: block;
}

/*
 Styling
*/


.tabset > label {
  position: relative;
  display: inline-block;
  padding: 15px 15px 25px;
  border: 1px solid transparent;
  border-bottom: 0;
  cursor: pointer;
  font-weight: 600;
}

.tabset > label::after {
  content: "";
  position: absolute;
  left: 15px;
  bottom: 10px;
  width: 22px;
  height: 4px;
  background: #8d8d8d;
}

input:focus-visible + label {
  outline: 2px solid rgba(0,102,204,1);
  border-radius: 3px;
}

.tabset > label:hover,
.tabset > input:focus + label,
.tabset > input:checked + label {
  color: #06c;
}

.tabset > label:hover::after,
.tabset > input:focus + label::after,
.tabset > input:checked + label::after {
  background: #06c;
}

.tabset > input:checked + label {
  border-color: #ccc;
  border-bottom: 1px solid #fff;
  margin-bottom: -1px;
}

.tab-panel {
  padding: 30px 0;
  border-top: 1px solid #ccc;
}

/*
 Demo purposes only
*/
*,
*:before,
*:after {
  box-sizing: border-box;
}



.tabset {
  max-width: 65em;
}
     </style>
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
<?php $Currency_active =\App\Currency_Model::where('currency_active','0')->first(); ?> 
    <!-- Tour Booking Submission Areas -->
    <section id="tour_booking_submission" class="section_padding">
        <div class="container">
            <div class="row">
                    
                <div class="col-lg-8">
                <div class="tour_details_right_sidebar_wrapper">
                    <h3 class="heading_theme">Flight </h3>
                        <div class="tour_detail_right_sidebar">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3><?php if(isset($AirlineName)){ echo $AirlineName; }?> </h3>
                                </div>
                                <div class="flight_sidebar_right">
                                    <div class="flight_search_left_sidebar col-lg-4">
                                        <div class="flight_search_destination_sidebar ">
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
                                        <div class="flight_right_arrow_sidebar  col-lg-4">
                                            <img src="assets/img/icon/right_arrow.png" alt="icon">
                                            <h6><?php 
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
                                                <?php  $minutes = $Duration_time ?> 
                                                        <?php $hours = floor($minutes / 60);
                                                        $min = $minutes - ($hours * 60);
                                                        echo $hours."h : ".$min;echo"m ";
                                                        ?> 
                                            </p>
                                            
                                        </div>
                                        <div class="flight_search_destination_sidebar col-lg-4" style="margin-left: 167px;">
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
                                
                                
                                <div class="tour_package_details_bar_price">
                                   <!--<h6 data-bs-toggle="collapse" data-bs-target="#collapseExample"-->
                                   <!--             aria-expanded="false" aria-controls="collapseExample">Show more <i-->
                                   <!--                 class="fas fa-chevron-down"></i></h6>-->
                                    
                                </div>
                            </div>
                        </div>
                       </div> 
                     <div class="col-lg-12">
                @if(empty(session()->get('user_id')))
                <div id="cf-response-message"></div>
                        <div class="tabset">
  <!-- Tab 1 -->
  <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
  <label for="tab1">Login</label>
  <!-- Tab 2 -->
  <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
  <label for="tab2">Sign Up</label>
  <!-- Tab 3 -->

  
  <div class="tab-panels">
    <section id="marzen" class="tab-panel">
     <form id="contact-form" method="post">
        @csrf
      <div>
          <div class="form-group">
            <lable>Email</lable>
            <input type="text" name="user_name" id="user_name" class="form-control bg_input"
                placeholder="Email*" required>
                <input type = "hidden" name ="csrf-token" value = '<?php echo csrf_token(); ?>'>
        </div>
           <div class="form-group">
            <lable>Password</lable>
            <input type="text" name="user_password" id="user_password" class="form-control bg_input"
                placeholder="password*" required>
        </div>
         <button id="submit" style="margin-top:10px;"class="btn btn-primary">Login</button>
      </div>
      </form>
       </section>
    <section id="rauchbier" class="tab-panel">
      
                                    <form id="signup-form" method="post">
                                        @csrf
                                         <input type = "hidden" name ="csrf-token" value = '<?php echo csrf_token(); ?>'>
                                        <div class="row">
                                            <div class="col-lg-6">
                                            <div class="form-group">
                                                <lable>First Name</lable>
                                                <input type="text" name="user_fname" id="fname" class="form-control bg_input"
                                                    placeholder="First name*" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <lable>Last Name</lable>
                                                <input type="text" name="user_lname" id="lname" class="form-control bg_input"
                                                    placeholder="Last name*" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <lable>Email</lable>
                                                <input type="text" name="user_email" id="u_gmail"class="form-control bg_input"
                                                    placeholder="Email address" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <lable>Mobile No.</lable>
                                                <input type="number" name="user_mobile" id="u_mobile" class="form-control bg_input"
                                                    placeholder="Mobile number*" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <lable>Password</lable>
                                                <input type="text" name="user_password" id="u_password" class="form-control bg_input"
                                                    placeholder="Street address" required>
                                            </div>
                                        </div>
                                          
                                    </div>
                                     <button id="submit" class="btn btn-primary" style="margin-top:10px;">Sign Up</button>
                                    </form>
        </section>

  </div>
  
</div>
                     @endif
                </div> 
                
                    <div class="tou_booking_form_Wrapper">
                        <div class="booking_tour_form">
                            <h3 class="heading_theme">Passenger information</h3>
                            <div class="tour_booking_form_box">
                                <form action="{{url('/preparePayment')}}" enctype="multipart/form-data" method="post" target="_blank">
                                                      @csrf
                                                      <div class="row">
                                      <div class="col-lg-4">
                                            <div class="form-group">
                                                <lable>Email</lable>
                                                <input type="text" name="email" class="form-control bg_input"
                                                    placeholder="Email address" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <lable>Mobile No.</lable>
                                                <input type="number" name="mobile" class="form-control bg_input"
                                                    placeholder="Mobile number*" required>
                                            </div>
                                        </div> 
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <lable>Address</lable>
                                                <input type="text" name="address" class="form-control bg_input"
                                                    placeholder="Address*" required>
                                            </div>
                                        </div> 
                                        
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <lable>PassportNo</lable>
                                                <input type="text" name="PassportNo" class="form-control bg_input"
                                                    placeholder="PassportNo">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <lable>Passport Expiry Date</lable>
                                                <input type="date" name="PassportExpiry" class="form-control bg_input"
                                                    placeholder="PassportExpiry*">
                                            </div>
                                        </div> 
                                        
                                   <?php for ($row=1; $row <= $adult; $row++) {  ?>  
                                    <h3 class="heading_theme">Passenger {{$row}}</h3>
                                    <div class="col-lg-6">
                                            <div class="form-group">
                                                <lable>Title</lable>
                                                <select name="title[]" class="form-control bg_input">
                                                      <option value="Mr">Mr</option>
                                                      <option value="Mrs">Mrs</option>
                                                      <option value="Miss">Miss</option>
                                                      <option value="Mstr">Mstr</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <lable>First Name</lable>
                                                <input type="text" name="fname[]" class="form-control bg_input"
                                                    placeholder="First name*" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <lable>Last Name</lable>
                                                <input type="text" name="lname[]" class="form-control bg_input"
                                                    placeholder="Last name*" required>
                                                <input type="hidden" name="amount1" value="{{$convertedAmount}}.00"  >  
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <lable>Gender</lable>
                                                <select name="gender[]" class="form-control bg_input">
                                                      <option value="1">Male</option>
                                                      <option value="2">Female</option>
                                                </select>
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
     
    <div class="booking_tour_form">
                            <h3 class="heading_theme">Payment method</h3>
                            <div class="tour_booking_form_box">
                                <div class="booking_payment_boxed">
                                    <!--<form action="!#" id="payment_checked">-->
                                    <?php $easybuzz_status =\App\Setting_Model::where('status','0')->where('name','EASYBUZZ PAYMENT')->first(); ?>
                                    @if($easybuzz_status)
                                        @if($Currency_active->currency_code =='INR' )
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payment"
                                                id="flexRadioDefault1" value="easybuzz" required>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Easybuzz Pay
                                            </label>
                                        </div>
                                        @endif 
                                    @endif    
                                    <?php $mollie_status =\App\Setting_Model::where('status','0')->where('name','Mollie Payment')->first(); ?>
                                    @if($mollie_status)
                                    @if($Currency_active->currency_code !=='INR' )
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payment"
                                                id="flexRadioDefault2" value="mollie" checked="checked" required>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                               Mollie Pay
                                            </label> 
                                        </div>
                                    @endif
                                    @endif
                                       @if(session()->get('user_id'))
                                            @if(session()->get('role') =='agent')
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payment"
                                                id="flexRadioDefault3" value="wallet" required>
                                            <label class="form-check-label" for="flexRadioDefault3">
                                                Wallet
                                            </label>
                                        </div>
                                            @endif
                                        @endif
                                       </div>
                            </div>
                         </div>
                            <div class="form-check write_spical_check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf1">
                                <label class="form-check-label" for="flexCheckDefaultf1">
                                    I read and accept all <a href="terms-service.html">Terms and conditios</a>

                                </label>
                            </div>
                            <style>
                                .popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
}

/* The actual popup (appears on top) */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class when clicking on the popup container (hide and show the popup) */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;}
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}

                            </style>
                                    </div>
                                    <!--@if(session()->get('PaymentID'))-->
                                    <!--   <button class="btn btn_theme btn_sm">Book now</button>-->
                                    <!--@else-->
                                    <!--<div class="popup" onclick="myFunction()" style="background-color: #e98c06; color:#ffffff;font-size: 18px; border-radius: 12px; padding: 12px 35px;">Book now-->
                                    <!--  <span class="popuptext" id="myPopup">Please Pay </span>-->
                                    <!--</div>-->
                                    <!--@endif-->
                                    <button class="btn btn_theme btn_sm">Book now</button>
                                    </form>
                            <!--<a href="{{url('/easebuzz')}}" >Easebuzz</a>     -->
                       
                </div>
                <div class="col-lg-4">
                    <div class="tour_details_right_sidebar_wrapper">
                        
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
                        <!--<div class="tour_detail_right_sidebar">-->
                        <!--    <div class="tour_details_right_boxed">-->
                        <!--        <div class="tour_details_right_box_heading">-->
                        <!--            <h3>Coupon code</h3>-->
                        <!--        </div>-->
                        <!--        <div class="coupon_code_area_booking">-->
                        <!--            <form id="myForm" method="POST" action="#">-->
                        <!--                 @csrf-->
                        <!--                <div class="form-group">-->
                        <!--                    <input type="text" name="coupon" class="form-control bg_input"-->
                        <!--                        placeholder="Enter coupon code">-->
                        <!--                </div>-->
                                     
                        <!--                <div class="coupon_code_submit">-->
                        <!--                    <button type="submit" class="btn btn-primary">Apply voucher</button>-->
                        <!--                </div>-->
                        <!--                <h6 data-bs-toggle="collapse" data-bs-target="#collapseExample"-->
                        <!--                        aria-expanded="false" aria-controls="collapseExample">Show more <i-->
                        <!--                            class="fas fa-chevron-down"></i></h6>-->
                                    
                        <!--                <div class="flight_policy_refund collapse" id="collapseExample">-->
                        <!--                <div class="flight_show_down_wrapper">-->
                        <!--                    <div class="flight-shoe_dow_item">-->
                        <!--                        <div class="airline-details">-->
                                                    <!--<div class="img"><img src="assets/img/icon/bg.png" alt="img"></div>-->
                                                    <!--<span class="airlineName fw-500">Biman Bangladesh Airlines &nbsp;-->
                                                    <!--    BG435</span>-->
                                                    <!--<span class="flightNumber">BOEING 737-800 - 738</span>-->
                        <!--                        </div>-->
                                                   
                        <!--                            <div class="flight_det_wrapper">-->
                        <!--                                <div class="flight_det">-->
                        <!--                                    <div class="code_time">-->
                        <!--                                        <?php $Currency1 =\App\Coupon_Model::where('status','active')->get(); ?>-->
                                                
                        <!--                        @foreach($Currency1 as $Currency12)-->
                        <!--                        <h6>{{__($Currency12->coupon_code)}} <span style="margin-left:100px;">{{__($Currency12->amount)}}</span></h6>-->
                        <!--                        @endforeach-->
                                               
                                                
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                        <div class="tour_package_details_bar_price">-->
                        <!--            <div class="tour_package_bar_price">-->
                                        <!--<h6><del>$ 35,500</del></h6>-->
                                        
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--                    </div>-->
                                        
                                        
                        <!--            </div> -->
                                    
                        <!--            </div> -->
                        <!--            </form>-->
                        <!--        </div>-->

                        <!--    </div>-->
                        <!--</div>-->
                        <h3 class="heading_theme">Booking Details</h3>
                        <div class="tour_detail_right_sidebar">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3>Booking amount</h3>
                                </div>

                                <div class="tour_booking_amount_area">
                                    <ul>
                                        <li>Adult Price x {{$adult}} <span>
                                            <?php $mark_up= \App\Markup_Model::where('currency_code',$Currency_active->currency_code)->where('markup_type','flight')->first();?>
                                 
                                <?php if($mark_up) { 
                                            $mark_up->markup_amount;
                                                $subtotal= $PublishedFare;
                                                echo $Currency_active->currency_symbol;
                                                // echo round($subtotal, 2);
                                                $subtotal1= $subtotal / $Currency_active->currency_rates ;
                                                $subtotal13 = $subtotal1 + $mark_up->markup_amount ;
                                                echo round($subtotal13, 2);
                                            }
                                            else{
                                            echo $Currency_active->currency_symbol;
                                            $subtotal= $PublishedFare;
                                            $subtotal1= $subtotal / $Currency_active->currency_rates ;echo round($subtotal1, 2);
                                        }
                                            
                                            ?>
                                        </span></li>
                                        <li>Discount <span>-<?php echo $Discount; ?>%</span></li>
                                    </ul>
                                    <div class="total_subtotal_booking">
                                        <h6>Subtotal <span>
                                            <?php if($mark_up) { 
                                            $mark_up->markup_amount;
                                                $subtotal= $PublishedFare;
                                                echo $Currency_active->currency_symbol;
                                                // echo round($subtotal, 2);
                                                $subtotal1= $subtotal / $Currency_active->currency_rates ;
                                                $subtotal13 = $subtotal1 + $mark_up->markup_amount ;
                                                echo round($subtotal13, 2);
                                            }
                                            else{
                                            echo $Currency_active->currency_symbol;
                                            $subtotal= $PublishedFare;
                                            $subtotal1= $subtotal / $Currency_active->currency_rates ;echo round($subtotal1, 2);
                                        }
                                            
                                            ?>
                                            </span></h6>
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
                                           <?php if($mark_up) { 
                                            $mark_up->markup_amount;
                                                $subtotal= $PublishedFare;
                                                echo $Currency_active->currency_symbol;
                                                // echo round($subtotal, 2);
                                                $subtotal1= $subtotal / $Currency_active->currency_rates ;
                                                $subtotal13 = $subtotal1 + $mark_up->markup_amount ;
                                                echo round($subtotal13, 2);
                                            }
                                            else{
                                            echo $Currency_active->currency_symbol;
                                            $subtotal= $PublishedFare;
                                            $subtotal1= $subtotal / $Currency_active->currency_rates ;echo round($subtotal1, 2);
                                        }
                                            
                                            ?> </span></h6>
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
  @include('auth.cust_footer')
    <div class="go-top">
        <i class="fas fa-chevron-up"></i>
        <i class="fas fa-chevron-up"></i>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>   -->
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
    $('#addPaymentButton1').on('click', function (e) {
        e.preventDefault();
        var amount = $('#payment').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "post",
            url: "/wallet-payment",
            data: $("#addPaymentForm1").serialize(),
            success: function (data) {
                alert(data.message);
                // document.location.reload(true);
            },

        });

    });
</script>  
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        $('body').on('click','#rzp-button1',function(e){
            e.preventDefault();
            var amount = $('.amount').val();
            var name = $('.name').val();
            var email = $('.email').val();
            var mobile = $('.mobile').val();
            var total_amount = amount * 100;
            var options = {
                "key": "{{ env('RAZOR_KEY') }}", // Enter the Key ID generated from the Dashboard
                "amount": total_amount, // Amount is in currency subunits. Default currency is INR. Hence, 10 refers to 1000 paise
                "currency": "INR",
                "name": name,
                "description": "Flight",
                "image": "https://www.mywebtuts.com/image/logo-1.png",
                "order_id": "", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                "handler": function (response){
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type:'POST',
                        url:"{{ route('payment') }}",
                        data:{razorpay_payment_id:response.razorpay_payment_id,amount:amount},
                        success:function(data){
                            $('.success-message').text(data.success);
                            $('.success-alert').fadeIn('slow', function(){
                               $('.success-alert').delay(5000).fadeOut(); 
                            });
                            $('.amount').val('');
                        }
                    });
                },
                "prefill": {
                    "name": name,
                    "email": email,
                    "contact": mobile
                },
                "notes": {
                    "address": "test test"
                },
                "theme": {
                    "color": "#218838"
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
        });
    </script>   
<script>
// When the user clicks on <div>, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
<script type="text/javascript">
   
    $('#contact-form').on('submit', function(event){
        event.preventDefault();
        user_name = $('#user_name').val();
        password = $('#user_password').val();
        
        $.ajax({
          url: "/login-form",
          type: "POST",
          data:{
              name:user_name,
              password:password,
              _token: '{{csrf_token()}}'
          },
          success:function(response){
            console.log(response);
            if (response) {
                $('#cf-response-message').text(response.message);
                location.reload();
            }
          }
         });
        });
      </script>
     <script type="text/javascript">
   
    $('#signup-form').on('submit', function(event){
        event.preventDefault();
        fname = $('#fname').val();
        lname = $('#lname').val();
        u_gmail = $('#u_gmail').val();
        password = $('#u_password').val();
        u_mobile = $('#u_mobile').val();
        console.log(fname);
        $.ajax({
          url: "/signup-form",
          type: "POST",
          data:{
              fname:fname,
              lname:lname,
              u_gmail:u_gmail,
              u_mobile:u_mobile,
              password:password,
              _token: '{{csrf_token()}}'
          },
          success:function(response){
            console.log(response);
            if (response) {
                $('#cf-response-message').text(response.message);
                // location.reload();
            }
          }
         });
        });
      </script> 



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