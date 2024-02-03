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
                        <h2>Room boking</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span><a href="hotel-search.html">Hotel</a></li>
                            <li><span><i class="fas fa-circle"></i></span><a href="hotel-details.html">Hotel details</a>
                            </li>
                            <li><span><i class="fas fa-circle"></i></span> Booking</li>
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
                            <h3 class="heading_theme">Booking submission</h3>
                            <div class="tour_booking_form_box">
                                <form action="{{url('/room_book_payment')}}" enctype="multipart/form-data" method="post">
                                     @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control bg_input"
                                                    placeholder="First name*">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="lname" class="form-control bg_input"
                                                    placeholder="Last name*">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="email" class="form-control bg_input"
                                                    placeholder="Email address (Optional)">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="number" name="mobile" class="form-control bg_input"
                                                    placeholder="Mobile number*">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <input type="hidden" name="ResultIndex" value="<?php echo $ResultIndex;?>">
                                            <input type="hidden" name="Hotelname" value="<?php echo $Hotelname;?>">
                                            <input type="hidden" name="TraceId" value="<?php echo $TraceId;?>">
                                            <input type="hidden" name="token_id" value="<?php echo $token_id;?>">
                                            <input type="hidden" name="EndUserIp" value="<?php echo $EndUserIp;?>">
                                            <input type="hidden" name="HotelCode" value="<?php echo $HotelCode;?>">
                                            
                                            <input type="hidden" name="RoomIndex" value="<?php echo $RoomIndex; ?>">
                                            <input type="hidden" name="RoomTypeCode" value="<?php echo $RoomTypeCode; ?>">
                                            <input type="hidden" name="RoomTypeName" value="<?php echo $RoomTypeName; ?>">
                                            <input type="hidden" name="RatePlanCode" value="<?php echo $RatePlanCode; ?>">
                                            <input type="hidden" name="SmokingPreference" value="<?php echo $SmokingPreference; ?>">
                                            <input type="hidden" name="CurrencyCode" value="<?php echo $CurrencyCode; ?>">
                                            <input type="hidden" name="RoomPrice" value="<?php echo $RoomPrice; ?>">  
                                            <input type="hidden" name="Tax" value="<?php echo $Tax; ?>">
                                            <input type="hidden" name="ExtraGuestCharge" value="<?php echo $ExtraGuestCharge; ?>">
                                            <input type="hidden" name="ChildCharge" value="<?php echo $ChildCharge; ?>">
                                            <input type="hidden" name="OtherCharges" value="<?php echo $OtherCharges; ?>">
                                            <input type="hidden" name="Discount" value="<?php echo $Discount; ?>">
                                            <input type="hidden" name="PublishedPrice" value="<?php echo $PublishedPrice; ?>">
                                            <input type="hidden" name="PublishedPriceRoundedOff" value="<?php echo $PublishedPriceRoundedOff; ?>">
                                            <input type="hidden" name="OfferedPrice" value="<?php echo $OfferedPrice; ?>">
                                            <input type="hidden" name="OfferedPriceRoundedOff" value="<?php echo $OfferedPriceRoundedOff; ?>">
                                             <input type="hidden" name="AgentCommission" value="<?php echo $AgentCommission; ?>">
                                             <input type="hidden" name="AgentMarkUp" value="<?php echo $AgentMarkUp; ?>">
                                             <input type="hidden" name="TDS" value="<?php echo $TDS; ?>">
                                             <input type="hidden" name="ServiceTax" value="<?php echo $ServiceTax; ?>">
                                             
                                
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
                                        @if(session()->get('user_id'))
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payment"
                                                id="flexRadioDefault3" value="wallet" required>
                                            <label class="form-check-label" for="flexRadioDefault3">
                                                Wallet
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
                                    <span class="main_spical_check">
                                        <span>I read and accept all <a href="terms-service.html">Terms and
                                                conditios</a></span>
                                    </span>
                                </label>
                            </div>
                            <button class="btn btn_theme btn_md">Book Now</button>
                        </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tour_details_right_sidebar_wrapper">
                        <div class="tour_detail_right_sidebar">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3>@if(isset($RoomTypeName))
                <?php print_r($RoomTypeName); ?>
                @endif</h3>
                                </div>
                                <div class="valid_date_area">
                                    <div class="valid_date_area_one">
                                        <h5>Valid from</h5>
                                        <p></p>
                                    </div>
                                    <div class="valid_date_area_one">
                                        <h5>Valid till</h5>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="tour_package_details_bar_list">
                                    <h5>Room facilities</h5>
                                    <ul>
                                        <li><i class="fas fa-circle"></i>Buffet breakfast as per the Itinerary</li>
                                        <li><i class="fas fa-circle"></i>Visit eight villages showcasing Polynesian
                                            culture
                                        </li>
                                        <li><i class="fas fa-circle"></i>Complimentary Camel safari, Bonfire,</li>
                                        <li><i class="fas fa-circle"></i>All toll tax, parking, fuel, and driver
                                            allowances
                                        </li>
                                        <li><i class="fas fa-circle"></i>Comfortable and hygienic vehicle</li>
                                    </ul>
                                </div>
                                <div class="tour_package_details_bar_price">
                                    <h5>Price</h5>
                                    <div class="tour_package_bar_price">
                                        <!--<h6><del>$ 35,500</del></h6>-->
                                         @if(session()->has('commision')) <?php $commision = session()->get('commision') ?>
                                            <h3>@if(isset($RoomTypeName)) <?php print_r($CurrencyCode); ?><?php $base123 = $OfferedPriceRoundedOff; ?> <?php $perce = $base123/100*$commision ?> <?php echo round($total = $perce + $base123); ?> @endif<sub> </sub></h3>
                                        @else
                                        <h3>@if(isset($RoomTypeName))
                                        <?php print_r($CurrencyCode); ?> <?php print_r($OfferedPriceRoundedOff); ?>
                                        @endif<sub>/Per serson</sub> </h3>
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
                        <!--                <input type="date" id="dates" value="2022-05-05" class="form-control">-->
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
                        <!--        <div class="edit_person">-->
                        <!--            <p>Edit person</p>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="tour_detail_right_sidebar">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3>Coupon code</h3>
                                </div>
                                <div class="coupon_code_area_booking">
                                    <form action="#!">
                                        <div class="form-group">
                                            <input type="text" class="form-control bg_input"
                                                placeholder="Enter coupon code">
                                        </div>
                                        <div class="coupon_code_submit">
                                            <button class="btn btn_theme btn_md">Apply voucher</button>
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
                                        <li>Adult Price x 1 <span>
                                            @if(session()->has('commision')) <?php $commision = session()->get('commision') ?>
                                            <h6>@if(isset($RoomTypeName)) <?php print_r($CurrencyCode); ?><?php $base123 = $OfferedPriceRoundedOff; ?> <?php $perce = $base123/100*$commision ?> <?php echo round($total = $perce + $base123); ?> @endif<sub> </sub></h6>
                                        @else
                                            @if(isset($RoomTypeName))
                                            <?php print_r($CurrencyCode); ?> <?php print_r($OfferedPriceRoundedOff); ?>
                                            @endif
                                        @endif    
                                        </span></li>
                                        <li>Discount <span>@if(isset($RoomTypeName))
                <?php print_r($CurrencyCode); ?> <?php print_r($Discount); ?>
                @endif</span></li>
                                        <li>Tax<span>@if(isset($RoomTypeName))
                <?php print_r($CurrencyCode); ?> <?php print_r($Tax); ?>
                @endif</span></li>
                                    </ul>
                                    <div class="tour_bokking_subtotal_area">
                                        <h6>Subtotal <span>
                                             @if(session()->has('commision')) <?php $commision = session()->get('commision') ?>
                                                <h6>@if(isset($RoomTypeName)) <?php print_r($CurrencyCode); ?><?php $base123 = $OfferedPriceRoundedOff; ?> <?php $perce = $base123/100*$commision ?> <?php echo round($total = $perce + $base123 + $Tax); ?> @endif<sub> </sub></h6>
                                             @else
                                                @if(isset($RoomTypeName))
                                                <?php print_r($CurrencyCode); ?> <?php print_r($OfferedPriceRoundedOff + $Tax - $Discount); ?>
                                                @endif
                                             @endif
                </span></h6>
                                    </div>
                                    <div class="coupon_add_area">
                                        <h6><span class="remove_coupon_tour">Remove</span> Coupon code (OFF 5000)
                                            <span>00.00</span>
                                        </h6>
                                    </div>
                                    <div class="total_subtotal_booking">
                                        <h6>Total Amount <span> @if(session()->has('commision')) <?php $commision = session()->get('commision') ?>
                                                <h6>@if(isset($RoomTypeName)) <?php print_r($CurrencyCode); ?><?php $base123 = $OfferedPriceRoundedOff; ?> <?php $perce = $base123/100*$commision ?> <?php echo round($total = $perce + $base123 + $Tax); ?> @endif<sub> </sub></h6>
                                             @else
                                                @if(isset($RoomTypeName))
                                                <?php print_r($CurrencyCode); ?> <?php print_r($OfferedPriceRoundedOff + $Tax - $Discount); ?>
                                                @endif
                                             @endif
                                             </span> </h6>
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

</body>

</html>