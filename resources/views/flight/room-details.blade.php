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
                        <h2>Room details</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span><a href="hotel-search.html">Hotel</a></li>
                            <li><span><i class="fas fa-circle"></i></span><a href="hotel-details.html">Hotel details</a>
                            </li>
                            <li><span><i class="fas fa-circle"></i></span> Room details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Room Details Areas -->
    <div class="col-sm-12">
                    <div class="row">
                        <div class="col-lg-12">
        @if(isset($ress->GetHotelRoomResult->HotelRoomsDetails))
   <?php $room_data = $ress->GetHotelRoomResult->HotelRoomsDetails ?> 
    @foreach($room_data as $room_data1)
    <div class="cruise_search_result_wrapper">
                                <div class="cruise_search_item">
                                    <div class="row">
                                        <div class="col-sm-1">
                                            </div>
                                      <div class="col-sm-10">
                                            <div class="cruise_item_inner_content">
                                                <div class="cruise_content_top_wrapper">
                                                    <div class="cruise_content_top_left">
                                                        <h4><?php echo $Hotelname?></h4>
                                                        <p><i class="fas fa-map-marker-alt"></i> <?php echo $Hoteladdress?></p>
                                                    </div>
                                                    <div class="cruise_content_top_right">
                                                        <h5><?php echo $StarRating?></h5>
                                                        <h4>(1214 reviewes)</h4>
                                                    </div>
                                                </div>
                                                <div class="cruise_content_middel_wrapper">
                                                    <div class="cruise_content_middel_left">
                                                        <h5><?php echo $room_data1->RoomTypeName; ?></h5>
                                                       
                                                    </div>
                                                    <div class="cruise_content_middel_right">
                                                        <!--<p>2 nights, 1 adult</p>-->
                                                    </div>
                                                </div>
                                                <div class="cruise_content_middel_wrapper">
                                                    <div class="cruise_content_middel_left">
                                                        <h5>Free cancellation</h5>
                                                        <p>Cancel your booking at any time</p>
                                                    </div>
                                                    <div class="cruise_content_middel_right">
                                                        @if(session()->has('commision')) <?php $commision = session()->get('commision') ?>
                                                        <h3><?php echo $room_data1->Price->CurrencyCode;?><?php $base123 = $room_data1->Price->OfferedPriceRoundedOff;?> <?php $perce = $base123/100*$commision ?> <?php echo $perce + $base123; ?></h3>
                                                        @else
                                                        <h3><?php echo $room_data1->Price->CurrencyCode; ?> <?php echo $room_data1->Price->OfferedPriceRoundedOff; ?></h3>
                                                        @endif
                                                        <p>+ <?php echo $room_data1->Price->CurrencyCode; ?> <?php echo $room_data1->Price->Tax; ?></p>
                                                    </div>
                                                </div>
                                                <div class="cruise_content_bottom_wrapper">
                                                    <div class="cruise_content_bottom_left">
                                                        <ul>
                                                            <li><?php echo $room_data1->RatePlanName; ?></li>
                                                        </ul>
                                                    </div>
                                                    <div class="cruise_content_bottom_right">
                                                       <form action="{{url('/room_book_now')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                                            <input type="hidden" name="ResultIndex" value="<?php echo $ResultIndex;?>">
                                            <input type="hidden" name="Hotelname" value="<?php echo $Hotelname;?>">
                                            <input type="hidden" name="TraceId" value="<?php echo $TraceId;?>">
                                            <input type="hidden" name="token_id" value="<?php echo $token_id;?>">
                                            <input type="hidden" name="EndUserIp" value="<?php echo $EndUserIp;?>">
                                            <input type="hidden" name="HotelCode" value="<?php echo $HotelCode;?>">
                                            
                                            <input type="hidden" name="RoomIndex" value="<?php echo $room_data1->RoomIndex; ?>">
                                            <input type="hidden" name="RoomTypeCode" value="<?php echo $room_data1->RoomTypeCode; ?>">
                                            <input type="hidden" name="RoomTypeName" value="<?php echo $room_data1->RoomTypeName; ?>">
                                            <input type="hidden" name="RatePlanCode" value="<?php echo $room_data1->RatePlanCode; ?>">
                                            <input type="hidden" name="SmokingPreference" value="<?php echo $room_data1->SmokingPreference; ?>">
                                            <input type="hidden" name="CurrencyCode" value="<?php echo $room_data1->Price->CurrencyCode; ?>">
                                            <input type="hidden" name="RoomPrice" value="<?php echo $room_data1->Price->RoomPrice; ?>">  
                                            <input type="hidden" name="Tax" value="<?php echo $room_data1->Price->Tax; ?>">
                                            <input type="hidden" name="ExtraGuestCharge" value="<?php echo $room_data1->Price->ExtraGuestCharge; ?>">
                                            <input type="hidden" name="ChildCharge" value="<?php echo $room_data1->Price->ChildCharge; ?>">
                                            <input type="hidden" name="OtherCharges" value="<?php echo $room_data1->Price->OtherCharges; ?>">
                                            <input type="hidden" name="Discount" value="<?php echo $room_data1->Price->Discount; ?>">
                                            <input type="hidden" name="PublishedPrice" value="<?php echo $room_data1->Price->PublishedPrice; ?>">
                                            <input type="hidden" name="PublishedPriceRoundedOff" value="<?php echo $room_data1->Price->PublishedPriceRoundedOff; ?>">
                                            <input type="hidden" name="OfferedPrice" value="<?php echo $room_data1->Price->OfferedPrice; ?>">
                                            <input type="hidden" name="OfferedPriceRoundedOff" value="<?php echo $room_data1->Price->OfferedPriceRoundedOff; ?>">
                                             <input type="hidden" name="AgentCommission" value="<?php echo $room_data1->Price->AgentCommission; ?>">
                                             <input type="hidden" name="AgentMarkUp" value="<?php echo $room_data1->Price->AgentMarkUp; ?>">
                                             <input type="hidden" name="TDS" value="<?php echo $room_data1->Price->TDS; ?>">
                                             <input type="hidden" name="ServiceTax" value="<?php echo $room_data1->Price->ServiceTax; ?>">
                                             
                                             <div class="cruise_content_bottom_right">
                                            <button class="btn btn_theme btn_md">Book Now</button>
                                            </div>
                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                            </div>
                                </div>
                                </div>
                                @endforeach
                                @endif
                                    </div>
                                </div>
                                </div>
                                

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


    <!-- Offcanvas Area -->
    <div class="offcanvas select_offer_modal offcanvas-end" tabindex="-1" id="offcanvasRight"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Book now</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="side_canvas_wrapper">
                <div class="travel_date_side">
                    <div class="form-group">
                        <label for="dates">Select your travel date</label>
                        <input type="date" value="2022-05-05" class="form-control" id="dates">
                    </div>
                </div>
                <div class="select_person_side">
                    <h3>Select person</h3>
                    <div class="select_person_item">
                        <div class="select_person_left">
                            <h6>Adult</h6>
                            <p>12y+</p>
                        </div>
                        <div class="select_person_right">
                            <div class="button-set">
                                <button type="button">
                                    <i class="fas fa-plus"></i>
                                </button>
                                <span>01</span>
                                <button type="button">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="select_person_item">
                        <div class="select_person_left">
                            <h6>Children</h6>
                            <p>2 - 12 years</p>
                        </div>
                        <div class="select_person_right">
                            <div class="button-set">
                                <button type="button">
                                    <i class="fas fa-plus"></i>
                                </button>
                                <span>01</span>
                                <button type="button">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="select_person_item">
                        <div class="select_person_left">
                            <h6>Infant</h6>
                            <p>Below 2 years</p>
                        </div>
                        <div class="select_person_right">
                            <div class="button-set">
                                <button type="button">
                                    <i class="fas fa-plus"></i>
                                </button>
                                <span>01</span>
                                <button type="button">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="write_spical_not">
                        <label for="texts">Write any special note</label>
                        <textarea rows="5" class="form-control" placeholder="Write any special note"
                            id="texts"></textarea>
                    </div>
                    <div class="form-check write_spical_check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf1">
                        <label class="form-check-label" for="flexCheckDefaultf1">
                            <span class="main_spical_check">
                                <span>I read and accept all <a href="terms-service.html">Terms and conditios</a></span>
                            </span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="proceed_booking_btn ">
            <a href="room-booking.html" class="btn btn_theme btn_md w-100">Proceed to Booking</a>
        </div>
    </div>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap.bundle.js"></script>
    <!-- Meanu js -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <!-- Range js -->
    <script src="assets/js/nouislider.min.js"></script>
    <script src="assets/js/wNumb.js"></script>
    <!-- owl carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Slick js -->
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <!-- wow.js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Custom js -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/add-form.js"></script>

</body>

</html>