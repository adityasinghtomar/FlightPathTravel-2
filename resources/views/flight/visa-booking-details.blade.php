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
                        <h2>Visa Booking Confirmation</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span>Visa Booking</li>
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
                        <div class="tour_booking_form_box mb-4">
                            <div class="booking_success_arae">
                                <div class="booking_success_img">
                                    <img src="assets/img/icon/right.png" alt="img">
                                </div>
                                <div class="booking_success_text">
                                    <h3> your order was submitted successfully!</h3>
                                    <h6>Your visa booking details has been sent to: {{$result1->email }}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="booking_tour_form">
                            <h3 class="heading_theme">Your information</h3>
                            <div class="tour_booking_form_box">
                                <div class="your_info_arae">
                                    <ul>
                                        <li><span class="name_first">Visa Name:</span> <span
                                                class="last_name">{{$result1->visa_name }} </span></li>
                                        <li><span class="name_first">Visa Package Name:</span> <span
                                                class="last_name">{{$result1->visa_package_name }} </span></li>
                                        <li><span class="name_first">Visa Type:</span> <span
                                                class="last_name">{{$result1->visa_type }} </span></li>
                                        <li><span class="name_first">Duration:</span> <span
                                                class="last_name">{{$result1->duration }} </span></li>
                                        <li><span class="name_first">Currency Type:</span> <span
                                                class="last_name">{{$result1->currency_type }} </span></li>
                                        <li><span class="name_first">Visa Amount:</span> <span
                                                class="last_name">{{$result1->visa_amount }} </span></li>
                                        <li><span class="name_first">Visa Package Amount:</span> <span
                                                class="last_name">{{$result1->visa_package_amount }} </span></li>
                                        <li><span class="name_first">First name:</span> <span
                                                class="last_name">{{$result1->name }} </span></li>
                                        <li><span class="name_first">Last Name:</span> <span
                                                class="last_name">{{$result1->lname }} </span></li>
                                        <li><span class="name_first">Email:</span> <span
                                                class="last_name">{{$result1->email }} </span></li>
                                        <li><span class="name_first">Mobile:</span> <span
                                                class="last_name">{{$result1->mobile }} </span></li>
                                        <li><span class="name_first">Address:</span> <span
                                                class="last_name">{{$result1->address }} </span></li>
                                        <li><span class="name_first">Overview:</span> <span
                                                class="last_name"><p>{{$result1->overview }} </p></span></li>
                                        <li><span class="name_first">Included:</span> <span
                                                class="last_name"><p>{{$result1->include }}</p> </span></li>
                                        <li><span class="name_first">Excluded:</span> <span
                                                class="last_name"><p>{{$result1->exclude }}</p> </span></li>
                                        <li><span class="name_first">Image:</span> <span
                                                class="last_name"><img src="public/images/{{$result1->image }}" alt="img"> </span></li>
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
                                        <!--<li>PNR No: <span></span></li>-->
                                        <li>Booking ID: <span>{{$result1->booking_id }}</span></li>
                                        <!--<li>Booking date: <span></span></li>-->
                                        <!--<li>Payment method: <span>Bank transfer</span></li>-->
                                        <li>Booking status: <span>Success</span></li>
                                    </ul>
                                    <ul>
                                        <li><sup></sup></li>
                                        <li>Price<span>{{$result1->visa_package_amount }}</span></li>
                                        
                                        <!--<li class="remove_coupon_tour">Discount <span>10%</span></li>-->
                                        <li>Tax <span></span></li>
                                    </ul>
                                    <div class="tour_bokking_subtotal_area">
                                        <h6 class="remove_coupon_tour">Subtotal <span>
                                            <li><sup>{{$result1->visa_package_amount }}</sup></li>
                                       </span></h6>
                                    </div>
                                    <!--<div class="coupon_add_area">-->
                                    <!--    <h6><span class="remove_coupon_tour">Remove</span> Coupon code (OFF 5000)-->
                                    <!--        <span>$5,000.00</span>-->
                                    <!--    </h6>-->
                                    <!--</div>-->
                                    <div class="total_subtotal_booking">
                                        <h6 class="remove_coupon_tour">Total Amount <span>{{$result1->visa_package_amount }}</span> </h6>
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

     </script>
    <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->


    <!--<script src="public/assets/js/jquery-3.6.0.min.js"></script>-->

    <!-- Bootstrap js -->

    <script src="public/assets/js/bootstrap.bundle.js"></script>

    <!-- Meanu js -->

    <script src="public/assets/js/jquery.meanmenu.js"></script>

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
</body>

</html>