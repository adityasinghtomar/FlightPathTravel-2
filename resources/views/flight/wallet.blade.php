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
                        <h2>Customer Wallet</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span>Customer Wallet</li>
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
                            <h3><?php echo $customer->name; ?> <?php echo $customer->lname; ?></h3>
                            <p><a href="tel:+00-123-456-789"><?php echo $customer->mobile; ?></a></p>
                            <p><a href="mailto:sherlyn@domain.com"><?php echo $customer->email; ?></a></p>
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
                                            <li><a href="booking-history.html">
                                                    <i class="fas fa-history"></i>Booking history</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="my-profile.html"><i class="fas fa-user-circle"></i>My profile</a></li>
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
                    <div class="dashboard_common_table">
                        <div class="wallwt_area_top">
                            <h3>Wallet</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="wallet_area_boxed">
                                        <h4>My wallet</h4>
                                        <div class="wallet_blance_boxed">
                                            <p>Wallet balance</p>
                                            <h5>INR @if(isset($wallet)) <?php echo $wallet->amount;?> @endif</h5>
                                        </div>
                                        <div class="wallet_boxed_flex">
                                            <div class="wallet_blance_boxed">
                                                <p>Total credit</p>
                                                <h5>INR @if(isset($wallet)) <?php echo $wallet->credit_amount;?> @endif</h5>
                                            </div>
                                            <div class="wallet_blance_boxed">
                                                <p>Total debit</p>
                                                <h5>INR @if(isset($wallet)) <?php echo $wallet->debit_amount;?> @endif</h5>
                                            </div>
                                        </div>
                                        <div class="dashboard_price_range">
                                            <div class="main_range_price"></div>
                                            <div class="price_range_blance">
                                                <p>INR @if(isset($wallet)) <?php echo $wallet->amount;?> @endif</p>
                                                <p>INR @if(isset($wallet)) <?php echo $wallet->amount;?> @endif</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="wallet_area_boxed">
                                        <h4>Add wallet</h4>
                                    <form action="{{url('/add-wallet')}}" enctype="multipart/form-data" method="post">
                                                      @csrf   
                                    @if(isset($wallet)) <input type="hidden" name="id" value="{{$wallet->id}}"> @endif   
                                        <div class="add_balance_area">
                                            <div class="input-group">
                                                <span class="input-group-text">INR</span>
                                                <input type="number" name="amount"class="form-control"
                                                    aria-label="Amount">
                                            </div>
                                            <div class="other_add_balance_area">
                                                <span></span>
                                                <div class="other_add_bal_button">
                                                    
                                                </div>
                                                <button class="btn btn_theme btn_md w-100">Add wallet</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="wallet_table_top">Wallet transaction</h3>
                            <div class="wallet_data_table">
                                <div class="table-responsive-lg table_common_area">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>S No.</th>
                                                <th>Date</th>
                                                <th>Credit</th>
                                                <th>Debit</th>
                                                <th>Balance</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                           @if(isset($wallet_history))  
                      <?php $no = 0; ?>     
                    @foreach($wallet_history as $flights)  
                    
                     <tr>
                       <td><?php echo $no+1;?></td>
                        <td><?php print_r($flights->date);?></td>
                        
                        <td> <?php print_r($flights->credit_amount);?></td>
                        <td><?php print_r($flights->debit_amount);?></td>
                        <td><?php print_r($flights->amount);?></td>
                        <td><?php print_r($flights->status);?></td>
                   </tr>
                  <?php $no++ ?>
                           @endforeach
                    @endif 
                                            
                                        </tbody>
                                    </table>
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

    <!-- Footer -->
 @include('auth.cust_footer')
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