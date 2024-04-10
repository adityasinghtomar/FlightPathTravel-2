@include('flight.header')
    <!-- search -->
    
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
<?php $Currency_active =\App\Currency_Model::where('currency_active','0')->first(); ?> 
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
     <div class="container">
            <div class="row">
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
 </div>
  
</div>
                     @endif
                </div> 
    <!-- Tour Booking Submission Areas --> @if(session()->get('user_id'))  
    <section id="tour_booking_submission" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tou_booking_form_Wrapper">
                        <div class="booking_tour_form">
                            
                            <div class="tour_booking_form_box">
                               
                                <h3 class="heading_theme">Passenger information</h3>
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
                                    <!--<form action="!#" id="payment_checked">-->
                                    <?php $easybuzz_status =\App\Setting_Model::where('status','0')->where('name','EASYBUZZ PAYMENT')->first(); ?>
                                    @if($easybuzz_status)
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payment"
                                                id="flexRadioDefault1" value="easybuzz" required>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Easybuzz Pay
                                            </label>
                                        </div>
                                    @endif    
                                    <?php $mollie_status =\App\Setting_Model::where('status','0')->where('name','Mollie Payment')->first(); ?>
                                    @if($mollie_status)
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payment"
                                                id="flexRadioDefault2" value="mollie" checked="checked" required>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                               Mollie Pay
                                            </label> 
                                        </div>
                                    @endif     
                                        
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
                       <div class="tour_detail_right_sidebar">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3>Booking amount</h3>
                                </div>

                                <div class="tour_booking_amount_area">
                                    <ul>
                                        <li>Adult Price x 1 <span>
                                        <?php $mark_up= \App\Markup_Model::where('name','flight')->where('status','active')->first();?>
                                 
                                <?php if($mark_up) { 
                                            if($mark_up->markup_type =='fixed'){
                                                $mark_up->markup_amount;
                                                $subtotal= $PublishedFare + $mark_up->markup_amount;
                                                echo $Currency_active->currency_symbol;
                                                echo round($subtotal, 2);
                                            }
                                            else {
                                              $percentage = ($mark_up->markup_amount / 100) * $PublishedFare; 
                                              $subtotal= $PublishedFare + $percentage;
                                                echo $Currency_active->currency_symbol;
                                                echo round($subtotal);
                                            //   echo $percentage;
                                            }
                                            }
                                             else{
                                    $subtotal= $PublishedFare;
                                                echo $Currency_active->currency_symbol;
                                                echo round($subtotal);
                                }   
                                            ?> 
                                        </span></li>
                                        <li>Discount <span>-<?php echo $Discount; ?>%</span></li>
                                        <li>Seat Price<span><?php echo $SeatsPrice;?></span></li>
                                    </ul>
                                    
                                    <div class="coupon_add_area">
                                        @if(isset($coupon))
                                        <h6><span class="remove_coupon_tour">Remove</span> Coupon code  (<?php echo $coupon->coupon_code; ?>)
                                            <span><?php echo $Currency; ?><?php echo $coupon->amount; ?></span>
                                        </h6>
                                        @endif
                                    </div>
                                    <div class="total_subtotal_booking">
                                        
                                        <h6>Total Amount<span>
                                            <!--@if(session()->has('commision')) <?php $commision = session()->get('commision') ?>-->
                                            <!--<?php echo $Currency;?><?php $base123 = $BaseFare?> <?php $perce = $base123/100*$commision ?> -->
                                            <!--      @if(isset($coupon)) -->
                                            <!--      <?php  $total_amo= $perce + $base123 + $Tax; ?> <?php echo $total_amo - $coupon->amount ?> -->
                                            <!--      @else-->
                                            <!--      <?php echo $total_amo= $perce + $base123 + $Tax; ?>-->
                                            <!--      @endif-->
                                            <!--@else-->
                                        <!--@endif-->
                                            <?php echo round($subtotal + $SeatsPrice) ?> 
                                        </span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                
                </div>
               
            </div>
        </div>
    </section>
@endif
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


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