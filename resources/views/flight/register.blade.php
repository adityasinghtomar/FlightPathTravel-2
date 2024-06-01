@include('auth.cust_header')
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
                        <h2>Register</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span> Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if(session()->has('message'))
<div class="alert alert-warning alert-dismissible" role="alert">
{{ session()->get('message')}} <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>

</div>
@endif  <!--  Common Author Area -->
    <section id="common_author_area" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="common_author_boxed">
                        <div class="common_author_heading">
                            <h3>User Register account</h3>
                        </div>
                        <div class="common_author_form">
                            <form action="{{url('/user-register')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                            <div class="row">                          
                                <div class="form-group col-sm-6 " style="margin-bottom:15px;">
                                    <input type="text" class="form-control" name="name" placeholder="Enter first name*" required/>
                                </div>
                                <div class="form-group col-sm-6" style="margin-bottom:15px;">
                                    <input type="text" class="form-control" name="lname" placeholder="Enter last name*" required/>
                                </div>
                                <div class="form-group col-sm-6" style="margin-bottom:15px;">
                                    <input type="email" name="email" class="form-control"
                                        placeholder="your email address" required/>
                                </div>
                                <div class="form-group col-sm-6" style="margin-bottom:15px;">
                                    <input type="number" class="form-control" name="mobile" placeholder="Mobile number*" required/>
                                </div>
                                <div class="form-group col-sm-6" style="margin-bottom:15px;">
                                    <input type="password" class="form-control" name="password" placeholder="Password" required/>
                                </div>
                                </div>
                                <div class="common_form_submit">
                                    <button class="btn btn_theme btn_md">Register</button>
                                </div>
                                <div class="have_acount_area other_author_option">
                                    <div class="line_or">
                                        <span>or</span>
                                    </div>
                                    <ul>
                                        <li><a href="#!"><img src="assets/img/icon/google.png" alt="icon"></a></li>
                                        <li><a href="#!"><img src="assets/img/icon/facebook.png" alt="icon"></a></li>
                                        <li><a href="#!"><img src="assets/img/icon/twitter.png" alt="icon"></a></li>
                                    </ul>
                                    <p>Already have an account? <a href="login.html">Log in now</a></p>
                                </div>
                            </form>
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