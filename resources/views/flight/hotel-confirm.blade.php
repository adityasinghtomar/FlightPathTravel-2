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
                        <h2>Room booking Details </h2>
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

    <!-- TBO API  -->
    @if(isset($ress))
    <section id="tour_booking_submission" class="section_padding">
        <div class="container">
            <div class="row">
                        <div class="tour_detail_right_sidebar">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3>Booking Details</h3>
                                </div>

                                <div class="tour_booking_amount_area">
                                    <ul>
                                        <li>Hotel Booking Status<span> @if(isset($ress->BookResult->HotelBookingStatus)) <?php echo $ress->BookResult->HotelBookingStatus; ?> @endif </span></li>
                                        <li>InvoiceNumber <span> @if(isset($ress->BookResult->InvoiceNumber))<?php echo $ress->BookResult->InvoiceNumber; ?> @endif</span></li>
                                        <li>ConfirmationNo<span> @if(isset($ress->BookResult->ConfirmationNo))<?php echo $ress->BookResult->ConfirmationNo; ?> @endif </span></li>
                                        <li>BookingRefNo<span> @if(isset($ress->BookResult->BookingRefNo))<?php echo $ress->BookResult->BookingRefNo; ?> @endif </span></li>
                                        <li>BookingId<span> @if(isset($ress->BookResult->BookingId))<?php echo $ress->BookResult->BookingId; ?> @endif </span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
    </section>
    @endif
    <!-- TBO API END -->


    <!-- REZLIVE API START  -->
    <section id="tour_booking_submission" class="section_padding">
        <div class="container">
            <div class="row">
                        <div class="tour_detail_right_sidebar">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3>Booking Details</h3>
                                </div>

                                <div class="tour_booking_amount_area">
                                    @if(isset($apiResponse) && isset($apiResponse['BookingDetails']))
                                        @if($apiResponse['BookingDetails']->BookingStatus == 'Fail')
                                        <li class="">Hotel Booking Status :<span> {{$apiResponse['BookingDetails']->BookingStatus}} </span></li>
                                        <li class="">Reason :<span> {{$apiResponse['BookingDetails']->BookingReason}} </span></li>
                                        @else
                                    <ul class="text-start">
                                        <li>Hotel Name : <span class="text-start"> {{$apiResponse['BookingRequest']->Booking->Name}}  </span></li>
                                        <li>ArrivalDate : <span class="text-start"> {{$apiResponse['BookingRequest']->Booking->ArrivalDate}}  </span></li>
                                        <li>DepartureDate : <span class="text-start"> {{$apiResponse['BookingRequest']->Booking->DepartureDate}}  </span></li>

                                        <li>Hotel Booking Status :<span class="text-start"> {{$apiResponse['BookingDetails']->BookingStatus}} </span></li>
                                        <li>InvoiceNumber :<span class="text-start">  </span></li>
                                        <li>ConfirmationNo : <span class="text-start">    </span></li>
                                        <li>BookingRefNo : <span class="text-start">   </span></li>
                                        <li>BookingId :<span class="text-start"> {{$apiResponse['BookingDetails']->BookingId}}  </span></li>

                                        <li>Booking Price : <span class="text-start"> {{ round($apiResponse['BookingDetails']->BookingPrice , 2)}}  </span></li>
                                        <li>Booking Code : <span class="text-start"> {{$apiResponse['BookingDetails']->BookingCode}}  </span></li>
                                         @endif
                                       
                                    </ul>

                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
    </section>
    <!-- REZLIVE API END  -->
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