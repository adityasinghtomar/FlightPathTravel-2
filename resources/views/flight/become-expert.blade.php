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
                        <h2>Become an expert</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span> Become an expert</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
   @if(session()->has('message'))
<div class="alert alert-warning alert-dismissible" role="alert">
{{ session()->get('message')}}
 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
@endif
    <!-- How It Work -->
    <section id="how_it_work_area" class="section_padding">
        <div class="container">
            <!-- Section Heading -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>How it works</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                  <div class="how_expert_boxed">
                    <img src="assets/img/icon/exp-1.png" alt="icon">
                    <h3>Sign up</h3>
                    <p>Duis laboris culpa cupidatat do consequat esse officia ex. Reprehenderit quis est id sint ea dolore sint nostrud demos adipisicing.</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="how_expert_boxed">
                        <img src="assets/img/icon/exp-2.png" alt="icon">
                        <h3>Add your service</h3>
                        <p>Duis laboris culpa cupidatat do consequat esse officia ex. Reprehenderit quis est id sint ea dolore sint nostrud demos adipisicing.</p>
                      </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="how_expert_boxed">
                        <img src="assets/img/icon/exp-3.png" alt="icon">
                        <h3>Get booking</h3>
                        <p>Duis laboris culpa cupidatat do consequat esse officia ex. Reprehenderit quis est id sint ea dolore sint nostrud demos adipisicing.</p>
                      </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Area -->
    <section id="video_area_two">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="video_two_left_side">
                        <h2>Benefit of become a local expert</h2>
                        <p>Mollit aliqua proident enim consectetur ad nostrud. Id et magna irure fugiat ea sit eu cupidatat.</p>
                        <div class="video_exp_wrapper">
                            <div class="video_exp_item">
                                <div class="video_exp_icon">
                                    <img src="assets/img/icon/exp-sm-1.png" alt="icon">
                                </div>
                                <div class="video_exp_text">
                                    <h3>Lowest price guaranteed</h3>
                                    <p>Duis laboris culpa cupidatat do consequat esse officia exdolore sint nostrud demos adipisicing.</p>
                                </div>
                            </div>
                            <div class="video_exp_item">
                                <div class="video_exp_icon">
                                    <img src="assets/img/icon/exp-sm-2.png" alt="icon">
                                </div>
                                <div class="video_exp_text">
                                    <h3>Easy and quick booking</h3>
                                    <p>Exercitation adipisicing aliquip laboris reprehenderit cupidatat labore excepteur.</p>
                                </div>
                            </div>
                            <div class="video_exp_item">
                                <div class="video_exp_icon">
                                    <img src="assets/img/icon/exp-sm-3.png" alt="icon">
                                </div>
                                <div class="video_exp_text">
                                    <h3>24/7 Customer support</h3>
                                    <p>Fugiat dolor enim est proident ea id veniam nulla ipsum cillum aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="video_area_vendor">
                        <img src="assets/img/common/video.png" alt="img">
                        <div class="video_play_button">
                            <div class="">
                                <a class="video_btn video_play_area" href="https://www.youtube.com/watch?v=_2LLXnUdUIc"
                                    title="Youtube Video"><i class="fas fa-play"></i></a>
                            </div>
                            <h4>Explore amazing tours</h4>
                            <h2>Get some travel idea</h2>
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-6">
                    <div class="video_two_right_side">
                        <img src="assets/img/common/video-two.png" alt="img">
                        <div class="video_two_play_area">
                            <a class="video_btn video_play_area" href="https://www.youtube.com/watch?v=_2LLXnUdUIc"
                                title="Youtube Video"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>

    <!-- About Service Area -->
    <section id="about_service_offer" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="about_service_boxed">
                        <img src="assets/img/icon/world.png" alt="img">
                        <h5><a href="#!">Best services</a></h5>
                        <p>Phaseus site amet tristique ligua donec iaculis leo sus cipit. Consec tetur adipiscing elit.
                            Incididunt ut dolore.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="about_service_boxed">
                        <img src="assets/img/icon/walte.png" alt="img">
                        <h5><a href="#!">Trusted payment</a></h5>
                        <p>Phaseus site amet tristique ligua donec iaculis leo sus cipit. Consec tetur adipiscing elit.
                            Incididunt ut dolore.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="about_service_boxed">
                        <img src="assets/img/icon/star.png" alt="img">
                        <h5><a href="#!">Top facility</a></h5>
                        <p>Phaseus site amet tristique ligua donec iaculis leo sus cipit. Consec tetur adipiscing elit.
                            Incididunt ut dolore.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="about_service_boxed">
                        <img src="assets/img/icon/persentis.png" alt="img">
                        <h5><a href="#!">Awesome deals</a></h5>
                        <p>Phaseus site amet tristique ligua donec iaculis leo sus cipit. Consec tetur adipiscing elit.
                            Incididunt ut dolore.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vendor Form Area -->
    <section id="vendor_form_area" class="section_padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="vendor_form_heading">
                        <h2>Become a vendor</h2>
                        <p>Eu sint minim tempor anim aliqua officia voluptate incididunt deserunt.
                            <br /> Velitgo quis Lorem culpa qui pariatur occaecat.
                        </p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="vendor_form">
                        <div class="tour_booking_form_box">
                           <form id="myForm" method="POST" action="{{ route('partner.store') }}">
                                         @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control bg_input" placeholder="First name*" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="lname" class="form-control bg_input" placeholder="Last name*" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control bg_input"
                                                placeholder="Email address" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="number" name="mobile" class="form-control bg_input"
                                                placeholder="Mobile number*" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" name="address" class="form-control bg_input"
                                                placeholder="Street address" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text"  class="form-control bg_input"
                                                placeholder="Apartment, Suite, House no (optional)" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <select name="city" class="form-control form-select bg_input">
                                                <option value="1">Chikhli</option>
                                                <option value="1">New York</option>
                                                <option value="1">Kingsbury Road</option>
                                                <option value="1">Surat</option>
                                                <option value="1">Vapi</option>	
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <select name="state" class="form-control form-select bg_input">
                                                <option value="1">State</option>
                                                    <option value="1">Gujarat</option>
                                                    <option value="1">London</option>
                                                    <option value="1">United States</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <select name="country" class="form-control form-select bg_input">
                                                <option value="1">Country</option>
                                                    <option value="1">India</option>
                                                    <option value="1">United Kingdom</option>
                                                    <option value="1">USA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control bg_input"
                                                placeholder="password" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking_tour_form_submit pt-4">
                            <div class="form-check write_spical_check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf1">
                                <label class="form-check-label" for="flexCheckDefaultf1">
                                    I have read and accept the <a href="terms-service.html">Terms and
                                        conditions</a> and <a href="privacy-policy.html">Privacy policy</a>
                                </label>
                            </div>
                            <div class="coupon_code_submit">
                                            <button type="submit" class="btn btn-primary">Sign up</button>
                            </div>
                        </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="vendor_img">
                        <img src="assets/img/common/vendor.png" alt="img">
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
    <!-- magnific js -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- wow.js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Custom js -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/add-form.js"></script>
    <script src="assets/js/video.js"></script>

</body>

</html>