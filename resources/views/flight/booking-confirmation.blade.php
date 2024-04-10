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
                        <h2>Booking Confirmation</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span> Booking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
 @if(isset($result1))
   <div class="container">
            <div class="row">
                <div class="col-md-10">
 <div class="tou_booking_form_Wrapper">
                        <div class="tour_booking_form_box mb-4">
                            <div class="booking_success_arae">
                                <div class="booking_success_img">
                                    <img src="assets/img/icon/right.png" alt="img">
                                </div>
                                <div class="booking_success_text">
                                    <h6><?php print_r($result1->Response->Error->ErrorMessage);?></h6>
                                </div>
                            </div>
</div>
</div>
</div>
</div>
@endif
 @foreach($result1 as $res)
  @if(isset($res->Response))
    <!-- Tour Booking Submission Areas -->
    <section id="tour_booking_submission" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tou_booking_form_Wrapper">
                        <div class="tour_booking_form_box mb-4">
                            <div class="booking_success_arae">
                                <div class="booking_success_img">
                                    <img src="assets/img/icon/right.png" alt="img">
                                </div>
                                <div class="booking_success_text">
                                    <h3> your order was submitted successfully!</h3>
                                    <h6>Your booking details has been sent to: </h6>
                                </div>
                            </div>
                        </div>
                        <div class="booking_tour_form">
                            <h3 class="heading_theme">Your information</h3>
                            <div class="tour_booking_form_box">
                                <div class="your_info_arae">
                                    <ul>
                                        @if(isset($res->Response->FlightItinerary->Passenger))<?php $Passenger = $res->Response->FlightItinerary->Passenger;?>
                                         @foreach($Passenger as $Passengers)
                                        <li><span class="name_first">First name:</span> <span
                                                class="last_name"></span>@if(isset($Passengers))<?php print_r($Passengers->FirstName);?>@endif</li>
                                        <li><span class="name_first">Last name:</span> <span
                                                class="last_name">@if(isset($Passengers))<?php print_r($Passengers->LastName);?>@endif</span></li>
                                        <li><span class="name_first">Email address:</span> <span
                                                class="last_name">@if(isset($Passengers))<?php print_r($Passengers->Email);?>@endif</span></li>
                                        <li><span class="name_first">ContactNo:</span> <span class="last_name">@if(isset($Passengers))<?php print_r($Passengers->ContactNo);?>@endif</span></li>
                                        
                                        @endforeach
                                    @endif    
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tour_details_right_sidebar_wrapper">
                        <div class="tour_detail_right_sidebar">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3>Booking details</h3>
                                </div>
                                <div class="tour_booking_amount_area">
                                    <ul>
                                        <li>PNR No: <span>@if(isset($res->Response->PNR))<?php print_r($res->Response->PNR);?>@endif</span></li>
                                        <li>Booking ID: <span>@if(isset($res->Response->BookingId))<?php print_r($res->Response->BookingId);?>@endif</span></li>
                                        <li>Booking date: <span>@if(isset($res->Response->FlightItinerary->LastTicketDate))<?php print_r($res->Response->FlightItinerary->LastTicketDate);?>@endif</span></li>
                                        <li>Payment method: <span>Mollie</span></li>
                                        <li>Booking status: <span>Success</span></li>
                                    </ul>   
                                    <ul>
                                        @if(session()->has('commision')) <?php $commision = session()->get('commision') ?>
                                            <li>@if(isset($res->Response->FlightItinerary->Fare->Currency))<?php print_r($res->Response->FlightItinerary->Fare->Currency);?>@endif @if(isset($res->Response->FlightItinerary->Fare->BaseFare))<?php $base123 = $res->Response->FlightItinerary->Fare->BaseFare;?>@endif <?php $perce = $base123/100*$commision ?> <?php echo $perce + $base123; ?><sup></sup></li>
                                        @else
                                        <li>Adult Price x 1 <span>@if(isset($res->Response->FlightItinerary->Fare->Currency))<?php print_r($res->Response->FlightItinerary->Fare->Currency);?>@endif @if(isset($res->Response->FlightItinerary->Fare->BaseFare))<?php print_r($res->Response->FlightItinerary->Fare->BaseFare);?>@endif</span></li>
                                        @endif
                                        <!--<li class="remove_coupon_tour">Discount <span>10%</span></li>-->
                                        <li>Tax <span>@if(isset($res->Response->FlightItinerary->Fare->Currency))<?php print_r($res->Response->FlightItinerary->Fare->Currency);?>@endif @if(isset($res->Response->FlightItinerary->Fare->Tax))<?php print_r($res->Response->FlightItinerary->Fare->Tax);?>@endif</span></li>
                                    </ul>
                                    <div class="tour_bokking_subtotal_area">
                                        <h6 class="remove_coupon_tour">Subtotal <span>
                                            @if(session()->has('commision')) <?php $commision = session()->get('commision') ?>
                                            <li>@if(isset($res->Response->FlightItinerary->Fare->Currency))<?php print_r($res->Response->FlightItinerary->Fare->Currency);?>@endif @if(isset($res->Response->FlightItinerary->Fare->Tax))<?php $tax = $res->Response->FlightItinerary->Fare->Tax;?>@endif @if(isset($res->Response->FlightItinerary->Fare->BaseFare))<?php $base123 = $res->Response->FlightItinerary->Fare->BaseFare;?>@endif <?php $perce = $base123/100*$commision ?> <?php echo $perce + $base123 + $tax; ?><sup></sup></li>
                                        @endif
                                        </span></h6>
                                    </div>
                                    <!--<div class="coupon_add_area">-->
                                    <!--    <h6><span class="remove_coupon_tour">Remove</span> Coupon code (OFF 5000)-->
                                    <!--        <span>$5,000.00</span>-->
                                    <!--    </h6>-->
                                    <!--</div>-->
                                    <div class="total_subtotal_booking">
                                        <h6 class="remove_coupon_tour">Total Amount <span></span> </h6>
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
@endforeach

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