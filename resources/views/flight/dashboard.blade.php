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
                        <h2>Customer dashboard</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span>Customer dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dashboard Area -->
    <section id="dashboard_main_arae" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="dashboard_sidebar">
                        <div class="dashboard_sidebar_user">
                            <img src="assets/img/common/dashboard-user.png" alt="img">
                            <h3>@if(isset($customer->name))<?php echo $customer->name; ?>@endif @if(isset($customer->lname))<?php echo $customer->lname; ?> @endif</h3>
                            <p><a href="tel:+00-123-456-789">@if(isset($customer->mobile))<?php echo $customer->mobile; ?>@endif</a></p>
                            <p><a href="mailto:sherlyn@domain.com">@if(isset($customer->email))<?php echo $customer->email; ?>@endif</a></p>
                        </div>
                        <div class="dashboard_menu_area">
                            <ul>
                                <li><a href="{{url('/customer-dashboard')}}" class="active"><i
                                            class="fas fa-tachometer-alt"></i>Dashboard</a></li>
                                <li class="dashboard_dropdown_button" id="dashboard_dropdowns"><i
                                        class="fas fa-address-card"></i>My bookings
                                    <span> <i class="fas fa-angle-down"></i></span>
                                    <div class="booing_sidebar_dashboard" id="show_dropdown_item"
                                        style="display: none;">
                                        <ul>
                                            
                                            <li><a href="{{ url('/customer-hotels') }}"><i class="fas fa-hotel"></i>Hotel 1
                                                    booking</a></li>
                                            <li><a href="{{ url('/customer-flights') }}"><i class="fas fa-paper-plane"></i>Flight
                                                    booking</a></li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-map"></i>Tour booking
                                                </a>
                                            </li>
                                            <li><a href="#">
                                                    <i class="fas fa-history"></i>Booking history</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="{{ url('/customer-profile') }}"><i class="fas fa-user-circle"></i>My profile</a></li>
                                <li><a href="{{ url('/customer-wallet') }}"><i class="fas fa-wallet"></i>Wallet</a></li>
                                <li><a href="#"><i class="fas fa-bell"></i>Notifications</a></li>
                                <li>
                                    <a href="#!" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="fas fa-sign-out-alt"></i>Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="dashboard_main_top">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dashboard_top_boxed">
                                    <div class="dashboard_top_icon">
                                        <i class="fas fa-shopping-bag"></i>
                                    </div>
                                    <div class="dashboard_top_text">
                                        <h3>Total bookings</h3>
                                        <h1>231</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="dashboard_top_boxed">
                                    <div class="dashboard_top_icon">
                                        <i class="fas fa-sync"></i>
                                    </div>
                                    <div class="dashboard_top_text">
                                        <h3>Pending bookings</h3>
                                        <h1>23</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard_common_table">
                        <h3>My bookings</h3>
                        <div class="table-responsive-lg table_common_area">
                            <table class="table">
                                <thead>
                                  <tr>
                                        <th>Name</th>
                                        <th>Booking ID</th>
                                        <th>PNR No.</th>
                                        <th>Booking amount</th>
                                        <th>Booking Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($flight))    
                    @foreach($flight as $flights)    
                     <tr>
                       
                        <td><?php print_r($flights->name);?> <?php print_r($flights->lname);?></td>
                        
                        <td> <?php print_r($flights->booking_id);?></td>
                        <td><?php print_r($flights->pnr_no);?></td>
                        <td><?php print_r($flights->amount);?></td>
                        <td><?php print_r($flights->ticket_date);?></td>
                        
                        <td class="complete">Completed</td>
                                        <td><i class="fas fa-eye"></i></td>
                   </tr>
                           @endforeach
                    @endif         
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="pagination_area">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
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

    <!-- Footer -->
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

    <!-- Logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body logout_modal_content">
                    <div class="btn_modal_closed">
                        <button type="button" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fas fa-times"></i></button>
                    </div>
                    <h3>
                        Are you sure? <br>
                        you want to log out.
                    </h3>
                    <div class="logout_approve_button">
                        <button data-bs-dismiss="modal" class="btn btn_theme btn_md">Yes Confirm</button>
                        <button data-bs-dismiss="modal" class="btn btn_border btn_md">No Cancel</button>
                    </div>
                </div>
            </div>
        </div>
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

</body>

</html>