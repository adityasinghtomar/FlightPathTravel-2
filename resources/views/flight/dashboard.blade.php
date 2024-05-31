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
                            <img src="public/assets/img/user.jpg" alt="img">
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                        <h1>  {{ count($flight) }}</h1>
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
  @include('auth.cust_footer')

    <div class="go-top">
        <i class="fas fa-chevron-up"></i>
        <i class="fas fa-chevron-up"></i>
    </div>

    <!-- Logout Modal -->
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