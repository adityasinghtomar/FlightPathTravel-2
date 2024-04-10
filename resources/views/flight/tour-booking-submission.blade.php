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
                        <h2>Booking submission</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span><a href="tour-search.html">Tours</a></li>
                            <li><span><i class="fas fa-circle"></i></span><a href="tour-details.html">Amazon tour</a>
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
                               <form action="{{url('/book-tour-payment')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                                    <input type="hidden" name="tour_id" value="{{$tour_package->tour_id}}">
                                    <input type="hidden" name="tour_package_id" value="{{$tour_package->id}}">                  
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="name"  class="form-control bg_input"
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
                                                <input type="email" name="email" class="form-control bg_input"
                                                    placeholder="Email address (Optional)">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="number" name="mobile" class="form-control bg_input"
                                                    placeholder="Mobile number*">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" name="address" class="form-control bg_input"
                                                    placeholder="Street address">
                                            </div>
                                        </div>
                                     
                                     </div>
                               
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
                            <button class="button btn btn_theme btn_md w-100">Book Now</button>
                        </div>
                         </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tour_details_right_sidebar_wrapper">
                        <div class="tour_detail_right_sidebar">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3>{{$tour_package->tour_package_name}}</h3>
                                </div>
                                <!--<div class="valid_date_area">-->
                                <!--    <div class="valid_date_area_one">-->
                                <!--        <h5>Valid from</h5>-->
                                <!--        <p>01 Feb 2022</p>-->
                                <!--    </div>-->
                                <!--    <div class="valid_date_area_one">-->
                                <!--        <h5>Valid till</h5>-->
                                <!--        <p>15 Feb 2022</p>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <div class="tour_package_details_bar_list">
                                    <h5>Package details</h5>
                                    <ul>
                                        <li><i class="fas fa-circle"></i>{{$tour_package->details}}</li>
                                        
                                    </ul>
                                </div>
                                <div class="tour_package_details_bar_price">
                                    <h5>Price</h5>
                                    <div class="tour_package_bar_price">
                                        <!--<h6><del>$ 35,500</del></h6>-->
                                        <h3>{{$tour_package->amount}} <sub>/Per serson</sub> </h3>
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
                        <!--<div class="tour_detail_right_sidebar">-->
                        <!--    <div class="tour_details_right_boxed">-->
                        <!--        <div class="tour_details_right_box_heading">-->
                        <!--            <h3>Coupon code</h3>-->
                        <!--        </div>-->
                        <!--        <div class="coupon_code_area_booking">-->
                        <!--            <form action="#!">-->
                        <!--                <div class="form-group">-->
                        <!--                    <input type="text" class="form-control bg_input"-->
                        <!--                        placeholder="Enter coupon code">-->
                        <!--                </div>-->
                        <!--                <div class="coupon_code_submit">-->
                        <!--                    <button class="btn btn_theme btn_md">Apply voucher</button>-->
                        <!--                </div>-->
                        <!--            </form>-->
                        <!--        </div>-->

                        <!--    </div>-->
                        <!--</div>-->
                        <div class="tour_detail_right_sidebar">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3>Booking amount</h3>
                                </div>

                                <div class="tour_booking_amount_area">
                                    <ul>
                                        <li>Price <span>{{$tour_package->amount}}</span></li>
                                        <li>Discount <span>0%</span></li>
                                        <li>Tax<span>0%</span></li>
                                    </ul>
                                    <div class="tour_bokking_subtotal_area">
                                        <h6>Subtotal <span>{{$tour_package->amount}}</span></h6>
                                    </div>
                                    <!--<div class="coupon_add_area">-->
                                    <!--    <h6><span class="remove_coupon_tour">Remove</span> Coupon code (OFF 5000)-->
                                    <!--        <span>$5,000.00</span>-->
                                    <!--    </h6>-->
                                    <!--</div>-->
                                    <div class="total_subtotal_booking">
                                        <h6>Total Amount <span>{{$tour_package->amount}}</span> </h6>
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