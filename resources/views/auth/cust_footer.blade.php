    <style>
        .read-more-target,
.read-more-trigger_opened {
  display: none;
}
.read-more-state:checked ~ .read-more-wrap .read-more-target,
.read-more-state:checked ~ .read-more-trigger_opened {
  display: block;
}
.read-more-state:checked ~ .read-more-trigger_closed {
  display: none;
}
    </style>
    <footer id="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="footer_heading_area">
                        <!--<h5>About Us</h5>-->
                        <img src="public/assets/flplogo1.png">
                    </div>
                    <div class="footer_first_area">
                        
                        <div class="block-item-text">
  <input type="checkbox" hidden class="read-more-state" id="read-more">
  <div class="read-more-wrap">
    <p style="text-align:justify;">
     Flight Path Travel is more than a mere agency. It's an embodiment of their collective wisdom and a testament to their dedication to transforming your travel dreams into uncharted realities.
                            Each ounce of expertise infused into Flight Path Travel is a step closer to ensuring that your journeys are not just hassle-free, but exceptional. 
    </p>
    <p style="text-align:justify;" class="read-more-target">
      From snagging the best deals on flights to orchestrating a symphony of unparalleled experiences across the globe, our directors' 
                            commitment to your satisfaction is woven into the very fabric of our agency.
    </p>
  </div>
  <label for="read-more" class="read-more-trigger_closed">Read More</label>
  <label for="read-more" class="read-more-trigger_opened">Read Less</label>
</div>
                        
                       <!--<p style="text-align:justify;">-->
                       <!--    Flight Path Travel is more than a mere agency. It's an embodiment of their collective wisdom and a testament to their dedication to transforming your travel dreams into uncharted realities.-->
                       <!--     Each ounce of expertise infused into Flight Path Travel is a step closer to ensuring that your journeys are not just hassle-free, but exceptional. -->
                            
                       <!--</p>-->
                       </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-6 col-sm-6 col-12">
                    <div class="footer_heading_area">
                        <h5>Company</h5>
                    </div> 
                    <div class="footer_link_area">
                        <ul>
                            <li><a href="/">home</a></li>
                            <li><a href="{{ route('about-us') }}">About Us</a></li>
                            <li><a href="{{ route('testimonials')}}">Testimonials</a></li>
                            <li><a href="{{ route('teams') }}">Teams</a></li>
                            <li><a href="{{ route('news')}}">Blogs</a></li>
                            <li><a href="{{ url('/contact-us') }}">Contact Us </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="footer_heading_area">
                        <h5>Support</h5>
                    </div>
                    <div class="footer_link_area">
                        <ul>
                            <li><a href="#">Account</a></li>
                            <li><a href="{{url('/faq')}}">Faq</a></li>
                            <li><a href="{{url('/refund_policy')}}">Refund Policy</a></li>
                            <li><a href="{{url('/term-conditions')}}">Term & Conditions</a></li>
                            <li><a href="{{url('/privacy-policy')}}" >Privacy Policy</a></li>
                            <li><a href="{{url('/contact-us')}}">contact us</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer_heading_area">
                        <h5>Need any help?</h5>
                    </div>
                    <div class="footer_first_area">
                        <div class="footer_inquery_area">
                            <h5>Call 24/7 for any help</h5>
                            <h3> <a href="tel:+44-203-463-7788">+44 (0) 203 463 7788</a></h3>
                        </div>
                        <div class="footer_inquery_area">
                            <h5>Mail to our support team</h5>
                            <h3> <a href="mailto:support@flightpathtravel.com">info@flightpathtravel.com</a></h3>
                        </div>
                        <div class="footer_inquery_area">
                            <h5>Follow us on</h5>
                            <ul class="soical_icon_footer">
                                <li><a href="https://www.facebook.com/people/Flightpath-Travel/100086971800405/" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/i/flow/login?redirect_after_login=%2FFlightpathT" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
                                <li><a href="https://www.instagram.com/flightpathtravel/"><i class="fab fa-instagram" target="_blank"></i></a></li>
                                <li><a href="#!"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <style>
        .social-menu {
  display: flex;
  justify-content: center;
}
.social-btn {
  list-style: none;
  width: 45px;
  height: 45px;
  background: #fff;
  margin: 5px;
  border-radius: 30%;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  box-shadow: 0 10px 10px -5px rgb(255,255,255,0.1);
  transition: all 0.3s;
  z-index: 10px;
}
.social-btn a {
  text-decoration: none;
  color: #fff;
}
.social-btn:hover a {
  color: #fff;
}
.social-menu .social-btn::before {
  content: attr(tooltip);
  position: absolute;
  top: 0;
  font-size: 0.9em;
  font-weight: bold;
  z-index: -1;
  opacity: 0;
  pointer-events: auto;
  background: #fff;
  padding: 10px;
  color: #000;
  letter-spacing: 1px;
  transition: all 0.3s ease-out;
}
.social-menu .social-btn::after {
  content: '';
  position: absolute;
  width: 8px;
  height: 8px;
  top: 0;
  opacity: 0;
  background: #fff;
  transform: rotate(45deg);
  left: 20%;
  z-index: -2;
  transition: 
    all 0.3s ease-out;
}
.social-menu .social-btn:hover::before {
  top: -45px;
  opacity: 1;
}
.social-btn:hover::after {
  top: -12px;
  opacity: 1;
}
.facebook a {
  color: #3b5999;
}
.facebook:hover,
.facebook:hover .social-btn:before,
.facebook:hover .social-btn:after {
  background: #3b5999;
}
.instagram a {
  color: #ff0b0b;
}
.instagram:hover,
.instagram:hover .social-btn:before,
.instagram:hover .social-btn:after {
  background: #ff0b0b;
}
.pinterest a {
  color: #c8232c;
}
.pinterest:hover,
.pinterest:hover .social-btn:before,
.pinterest:hover .social-btn:after {
  background: #c8232c;
}
.linkedin a {
  color: #0072b1;
}
.linkedin:hover,
.linkedin:hover .social-btn:before,
.linkedin:hover .social-btn:after {
  background: #0072b1;
}


    </style>
    <div class="copyright_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="co-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="copyright_left">
                        <p>Copyright © <a href="#"> Flight Path travel </a> 2024 All Rights Reserved</p>
                    </div>
                </div>
                <div class="co-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="copyright_right" style="float:right;">
                     <ul class="social-menu">
  <li class="social-btn facebook" style="font-size: 30px;" >
    <a href="https://www.facebook.com/people/Flightpath-Travel/100086971800405/" target="_blank"><i class="fab fa-facebook"></i></a>
  </li>
  <li class="social-btn instagram"style="font-size: 30px;" >
    <a href="https://www.instagram.com/flightpathtravel/" target="_blank"><i class="fab fa-instagram" ></i></a>
  </li>
 
  <li class="social-btn linkedin" style="font-size: 30px;">
    <a href="https://twitter.com/i/flow/login?redirect_after_login=%2FFlightpathT" target="_blank"><i class="fab fa-twitter-square"></i></a>
  </li> 
   <li class="social-btn linkedin" style="font-size: 30px;">
    <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
  </li> 
</ul>
                    </div>
                </div>
            </div>
        </div>
    </div>