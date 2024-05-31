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
    <section id=""style="background-image: url(public/assets/img/common/big_banner.png);
    padding: 200px 0 130px 0;
    background-repeat: no-repeat;
    background-size: cover;
">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>About us</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span> About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us -->
    <section id="about_us_top" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about_us_left">
                        <h5>About us</h5>
                        <h2>We Are The World Best Travel Agency.</h2>
                        <p style="text-align:justify">FlightPath Travel began as a dream – a dream to revolutionize the way people experience the world. It started with the idea that travel should be more than just reaching a destination; it should be about creating memories, forging connections, and discovering the beauty of our planet. </p>
                        <p style="text-align:justify">Our journey began with a simple belief – that travel can transform lives. And so, armed with a wealth of industry knowledge, a network of invaluable contacts, and a keen business acumen, our founder set out to make this belief a reality. </p>
                        <p style="text-align:justify">We’re proud of our roots and the journey that has led us to where we are today. But we’re not stopping here. Our commitment to innovation, customer-centricity, and the pursuit of excellence drives us forward. We are constantly exploring new horizons, creating tailor-made experiences, and turning every trip into a cherished memory.</p>
                        <a href="tour-search.html" class="btn btn_theme btn_md">Find tours</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_us_right">
                        <img src="assets/img/common/abour_right.png" alt="img">
                    </div>
                </div>

            </div>
        </div>
    </section>
  <div class="container">
       <div id="faq" class="faq-body">
      <div class="faq-header">
        <h2 class="faq-title">Our Vision and goal</h2>
        <div class="seperator"></div>
      </div>
      <div class="faq-list">
          <div>
            <details open>
              <summary title="How can I pay for my appointment?">Our Mission</summary>
              <p class="faq-content" >We believe in Learning. Excellence, Respect, Speed, Growth, Fun, and Ethics, and are obsessively committed to these values, to ensure that not only our current but also our future generation of leaders imbibe and practice them. Our organization’s culture will always be a reflection and mirror image of our values, beliefs, and core ideology. We will not do any business or take any decision which does not fit into our value system and ideology.</p>
            </details>
            </div>
          <div>
            <details>
              <summary title="What can I expect at my first consultation?">Our Vision</summary>
              <p class="faq-content">INT group of companies will Grow into 500 team members company Providing Travel, BPO, IT, Cargo & Food Products, and services worldwide by 2025</p>
            </details>
            </div>
          <div>
            <details>
              <summary title="What are your opening hours?">Core Ideology</summary>
              <p class="faq-content">We will always work towards one common goal, and that is to contribute towards the development of our nation by the consistent generation of maximum employment through the INT Group of Companies.</p>
                  <h4>DNA – Fun, Speed, and Care</h4>   
                  <p>We foster a dynamic and vibrant work culture that encourages creativity, laughter, and a sense of camaraderie among our team members. We believe that when people have fun doing what they love, they deliver their best work. We strive to make a positive impact in the lives of our stakeholders, creating lasting relationships built on trust and care.</p>
            </details>
            </div>
      </div>
    </div>
    
  </div>
    <style>
     
div + div {
    clear: both;
}

p {
    line-height: 1.4em;
    color: #9e9e9e;
}

.faq-title {
    font-size: 2em;
    margin: 0.4em 0;
}

div.seperator {
    width: 7.5em;
    background-color: #e31b1b;
    height: 0.17em;
    margin-left: -1.8em;
}

.faq-list > div {
    border-bottom: 0.07em solid #ededed;
    padding: 1.5em 0em;
} 

.faq-list > div:last-child {
    border: unset;
}

details > summary {
    list-style: none;
}
details > summary::-webkit-details-marker {
    display: none;
}

summary {
    font-size: 1.4em;
    font-weight: bold;
    cursor: pointer;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none; 
    user-select: none;
    transition: all 0.3s ease;
}

summary:hover {
    color: #e31b1b;
}

details[open] summary ~ * {
    animation: sweep .5s ease-in-out;
}

@keyframes sweep {
    0%    {opacity: 0; margin-left: -10px}
    100%  {opacity: 1; margin-left: 55px}
}

details[open] summary {
    color: #e31b1b;
}

details[open] p {
    border-left: 2px solid #e31b1b;
    margin-left: 55px;
    padding-left: 25px;
    opacity: 100;
    transition: all 3s ease;
}

details[open] h4 {
    border-left: 2px solid #e31b1b;
    margin-left: 55px;
    padding-left: 25px;
    opacity: 100;
    transition: all 3s ease;
}
details[open] summary:after {
    content: "-";
    font-size: 3.2em;
    margin: -33px 0.35em 0 0;
    font-weight: 200;
}



.faq-list {
   
    padding: 2em 0;
}

summary::-webkit-details-marker {
    display: none;
}

summary:after {
    background: transparent;
    border-radius: 0.3em;
    content: "+";
    color: #e31b1b;
    float: left;
    font-size: 1.8em;
    font-weight: bold;
    margin: -0.3em 0.65em 0 0;
    padding: 0;
    text-align: center;
    width: 25px;
}
    </style>
    <!-- About Banner -->
    <section id="about_offer_banner" class="section_padding_bottom">
        <div class="container-fluid">
            <div class="row">
                <h2 class="d-none">Heading</h2>
                <div class="col-lg-4">
                    <div class="about_offer_banner">
                        <a href="!#"><img src="assets/img/common/small_banner.png" alt="img"></a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about_offer_banner">
                        <img src="assets/img/common/big_banner.png" alt="img">
                        <div class="about_offer_text">
                            <h3>Enjoy <span>20%</span> discount</h3>
                            <h2>Thailand couple tour</h2>
                            <a href="tour-search.html">Find tours</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- About Service Area -->
    <section id="about_service_offer" class="section_padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="about_service_boxed" style="padding-bottom: 40px;">
                        <img src="assets/img/icon/world.png" alt="img">
                        <h5><a href="#!">Tailored Services</a></h5>
                        <p style="text-align:justify;">Our array of services is a testament to our commitment to meeting diverse travel needs. From air ticketing to visa and passport services, we ensure that your journey starts on the right note. Our holiday packages, meticulously designed and customized, promise memories that last a lifetime.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="about_service_boxed">
                        <img src="assets/img/icon/walte.png" alt="img">
                        <h5><a href="#!">Team Of Experts</a></h5>
                        <p style="text-align:justify;">What sets us apart is our team, collectively boasting over 42 years of experience in the aviation industry. This wealth of knowledge translates into seamless, hassle-free experiences for you. From securing that elusive visa appointment to crafting the perfect holiday itinerary, our team is your compass, guiding you through the intricacies of modern travel.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="about_service_boxed">
                        <img src="assets/img/icon/star.png" alt="img">
                        <h5><a href="#!">Satisfaction</a></h5>
                        <p style="text-align:justify;">With 100,000+ satisfied customers and a reputation for excellence, Flight Path Travel is more than just a travel agency – it's our dedication to customer satisfaction. We understand that travel can be unpredictable, which is why our support is available 24/7, 365 days a year. Your ease and satisfaction remain at the forefront of our mission.</p>
                    </div>
                </div>
              
            </div>
        </div>
    </section>

    <!-- consultation Area -->
    <section id="consultation_area" class="section_padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="consultation_area_text">
                        <h2>Have you any question? Get A Consultation</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex ea commodo consequat</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Counter Area -->
    <section id="counter_area" class="section_padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="counter_area_wrapper">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 clo-sm-12 col-12">
                                <div class="counter_item">
                                    <img src="assets/img/icon/user.png" alt="icon">
                                    <h3 class="counter">2348</h3>
                                    <h6>Partners</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 clo-sm-12 col-12">
                                <div class="counter_item">
                                    <img src="assets/img/icon/bank.png" alt="icon">
                                    <h3 class="counter">1748</h3>
                                    <h6>Listed property</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 clo-sm-12 col-12">
                                <div class="counter_item">
                                    <img src="assets/img/icon/world-map.png" alt="icon">
                                    <h3 class="counter">4287</h3>
                                    <h6>Destinations</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 clo-sm-12 col-12">
                                <div class="counter_item">
                                    <img src="assets/img/icon/calander.png" alt="icon">
                                    <h3 class="counter">40</h3>
                                    <h6>Booking</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Customer Area -->
 

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

    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->


    <script src="public/assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap js -->

    <script src="public/assets/js/bootstrap.bundle.js"></script>

    <!-- Meanu js -->

    <script src="public/assets/js/jquery.meanmenu.js"></script>

    <!-- owl carousel js -->

    <script src="public/assets/js/owl.carousel.min.js"></script>

    <!-- wow.js -->

    <!--<script src="public/assets/js/wow.min.js"></script>-->

    <!-- Select2 -->

    <script src="public/assets/js/select2.min.js"></script>
 
    <!-- Custom js -->

    <script src="public/assets/js/custom.js"></script>

    <!--<script src="public/assets/js/add-form.js"></script>-->

    <!--<script src="public/assets/js/form-dropdown.js"></script>-->
    <script>
        // counter
        jQuery(document).ready(function ($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
    </script>

</body>

</html>