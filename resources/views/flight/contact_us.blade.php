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
                        <h2>Contact</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
    <!-- Contact Area -->
    <style>
               
.contact-info {
  display: inline-block;
  width: 100%;
  text-align: center;
      margin-bottom: 10px;
}
.contact-info-icon {
margin-bottom: 15px;
}
.contact-info-item {
  background: #071c34;
  padding: 30px 0px;
}
.contact-page-sec .contact-page-form h2 {
  color: #071c34;
  text-transform: capitalize;
  font-size: 22px;
  font-weight: 700;
}
.contact-page-form .col-md-6.col-sm-6.col-xs-12 {
  padding-left: 0;
}  
.contact-page-form.contact-form input {
  margin-bottom: 5px;
}  
.contact-page-form.contact-form textarea {
  height: 110px;
}
.contact-page-form.contact-form input[type="submit"] {
  background: #071c34;
  width: 150px;
  border-color: #071c34;
}
.contact-info-icon i {
  font-size: 48px;
  color: #fda40b;
}
.contact-info-text p{margin-bottom:0px;}
.contact-info-text h2 {
  color: #fff;
  font-size: 22px;
  text-transform: capitalize;
  font-weight: 600;
  margin-bottom: 10px;
}
.contact-info-text span {
  color: #999999;
  font-size: 16px;
  font-weight: ;
  display: inline-block;
  width: 100%;
}

.contact-page-form input {
  background: #f9f9f9 none repeat scroll 0 0;
  border: 1px solid #f9f9f9;
  margin-bottom: 20px;
  padding: 12px 16px;
  width: 100%;
  border-radius: 4px;
}

.contact-page-form .message-input {
display: inline-block;
width: 100%;
padding-left: 0;
}
.single-input-field textarea {
  background: #f9f9f9 none repeat scroll 0 0;
  border: 1px solid #f9f9f9;
  width: 100%;
  height: 120px;
  padding: 12px 16px;
  border-radius: 4px;
}
.single-input-fieldsbtn input[type="submit"] {
  background: #fda40b none repeat scroll 0 0;
  color: #fff;
  display: inline-block;
  font-weight: 600;
  padding: 10px 0;
  text-transform: capitalize;
  width: 150px;
  margin-top: 20px;
  font-size: 16px;
}
.single-input-fieldsbtn input[type="submit"]:hover{background:#071c34;transition: all 0.4s ease-in-out 0s;border-color:#071c34}
.single-input-field  h4 {
  color: #464646;
  text-transform: capitalize;
  font-size: 14px;
}
.contact-page-form {
  display: inline-block;
  width: 100%;
  margin-top: 30px;
}

.contact-page-map {
  margin-top: 36px;
}
.contact-page-form form {
    padding: 20px 15px 0;
}
    </style>
    <section id="contact_main_arae" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>Contact with us</h2>
                    </div>
                </div>
            </div>
            <div class="contact_main_form_area_two">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="contact_left_top_heading">
                            <h2>Do you have any query? Contact with us to get any
                                any support.</h2>
                                <h3>Leave us a message</h3>
                            <p>Submit an inquiry or suggestion or business proposal and we will get back to you.</p>
                        </div>
                         <div class="row">
        <div class="col-md-4">
          <div class="contact-info">
            <div class="contact-info-item">
              <div class="contact-info-icon">
                <i class="fas fa-map-marked"></i>
              </div>
              <div class="contact-info-text">
                <h2>address</h2>
                <span>1215 Lorem Ipsum, Ch 176080 </span> 
                <span>Chandigarh , INDIA</span> 
              </div>
            </div>            
          </div>          
        </div>          
        <div class="col-md-4">
          <div class="contact-info">
            <div class="contact-info-item">
              <div class="contact-info-icon">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="contact-info-text">
                <h2>E-mail</h2>
                <span>info@LoremIpsum.com</span> 
                <span>yourmail@gmail.com</span>
              </div>
            </div>            
          </div>                
        </div>                
        <div class="col-md-4">
          <div class="contact-info">
            <div class="contact-info-item">
              <div class="contact-info-icon">
                <i class="fas fa-clock"></i>
              </div>
              <div class="contact-info-text">
                <h2>office time</h2>
                <span>24 / 7</span></span>
               
              </div>
            </div>            
          </div>          
        </div>          
      </div>
                        <div class="contact_form_two">
                             <form action="{{url('/contact-store')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group" style="margin-bottom:10px;">
                                            <input type="text" class="form-control bg_input" name="fname" placeholder="First name*">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group"  style="margin-bottom:10px;">
                                            <input type="text" class="form-control bg_input" name="lname" placeholder="Last name*">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group" style="margin-bottom:10px;"> 
                                            <input type="email" class="form-control bg_input" name="email"
                                                placeholder="Email address (Optional)">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group" style="margin-bottom:10px;">
                                            <input type="number" name="mobile" class="form-control bg_input"
                                                placeholder="Mobile number*">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group" style="margin-bottom:10px;">
                                            <textarea class="form-control bg_input" name="message" rows="5"
                                                placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <button class="btn btn_theme btn_md">Send message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact_two_left_wrapper">
                            <h3>Contact details</h3>
                            <div class="contact_details_wrapper">
                                <div class="contact_detais_item">
                                    <h4>Help line</h4>
                                    <h3><a href="tel:+44-203-463-7788">+44 (0) 203 463 7788</a></h3>
                                </div>
                                <div class="contact_detais_item">
                                    <h4>Support mail</h4>
                                    <h3><a href="mailto:support@flightpathtravel.com">support@flightpathtravel.com</a></h3>
                                </div>
                                
                                <div class="contact_detais_item">
                                    <h4>Contact hour</h4>
                                    <h3>Mon-Sun : 24 hours</h3>
                                </div>
                                <div class="contact_detais_item">
                                    <h4>Address</h4>
                                    <h3>Office No. 1, Jubilee Business Centre, 211 Kingsbury Road, Kingsbury, London, NW9 8AQ</h3>
                                </div>
                                <div class="contact_map_area">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9916.975593321238!2d-0.2763166259126239!3d51.58209318700696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4877a17cca5d0001%3A0x46d236266ce7b49!2sFlightPath%20Travel!5e0!3m2!1sen!2sin!4v1693608443247!5m2!1sen!2sin"></iframe>
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
    <!-- Custom js -->
    <script src="public/assets/js/custom.js"></script>
    <script src="public/assets/js/add-form.js"></script>
    <script src="public/assets/js/form-dropdown.js"></script>
    


</body>

</html>