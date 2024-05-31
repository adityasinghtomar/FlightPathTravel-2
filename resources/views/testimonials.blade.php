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
                        <h2>Testimonials</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span>Testimonials</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<style>
    .checked {
  color: orange;
}
</style>
    <!-- Testimonials Area -->
    <section id="testimonials_main_arae" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>What our client say about us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                 @foreach($review as $tours)
                <div class="col-lg-4 col-md-6">
                    <div class="all_review_box">
                        <div class="all_review_date_area">
                            <div class="all_review_date">
                            
                            </div>
                            <div class="all_review_star">
                                
                                <div class="review_star_all">
                                   @php
                                    $rating = $tours->ratting;
                                    $checkedStars = min(5, max(0, $rating)); // Making sure the rating is between 0 and 5
                                @endphp
                                @for($i = 0; $i < 5; $i++)
                                    @if($i < $checkedStars)
                                        <span class="fa fa-star checked"></span>
                                    @else
                                        <span class="fa fa-star"></span>
                                    @endif
                                @endfor
                                    
                                </div>
                            </div>
                        </div>
                        <div class="all_review_text">
                            <img src="public/images/flex/user.webp" alt="img">
                            <h4>{{ $tours->name}}</h4>
                            <p>{{ $tours->content}}</p>
                        </div>
                    </div>
                </div>
              @endforeach
               
            </div>
        </div>
    </section>

    <!--Top tour packages Area -->
   

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