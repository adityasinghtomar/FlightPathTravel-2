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
                        <h2>United states</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span> United states</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tour Search Areas -->
    <section id="tour_details_main" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tour_details_leftside_wrapper">
                        <div class="tour_details_heading_wrapper">
                            <div class="tour_details_top_heading">
                                <h2>{{$flight->visa_name}}</h2>
                                <h5>21,873 visa provided</h5>
                            </div>
                            <div class="tour_details_top_heading_right">
                                <h4>Excellent</h4>
                                <h6>4.8/5</h6>
                                <p>(1214 reviewes)</p>
                            </div>
                        </div>
                        <div class="tour_details_top_bottom">
                            <div class="toru_details_top_bottom_item">
                                <div class="tour_details_top_bottom_icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="tour_details_top_bottom_text">
                                    <h5>Duration</h5>
                                    <p>{{$flight->duration}} days</p>
                                </div>
                            </div>
                            <div class="toru_details_top_bottom_item">
                                <div class="tour_details_top_bottom_icon">
                                    <i class="fas fa-paw"></i>
                                </div>
                                <div class="tour_details_top_bottom_text">
                                    <h5>Visa type</h5>
                                    <p>{{$flight->visa_type}}</p>
                                </div>
                            </div>
                            <div class="toru_details_top_bottom_item">
                                <div class="tour_details_top_bottom_icon">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>
                                <div class="tour_details_top_bottom_text">
                                    <h5>Currency type</h5>
                                    <p>{{$flight->currency_type}}</p>
                                </div>
                            </div>
                            <div class="toru_details_top_bottom_item">
                                <div class="tour_details_top_bottom_icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="tour_details_top_bottom_text">
                                    <h5>Local time</h5>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="tour_details_img_wrapper">
                            <div class="visa_details_img">
                                <img src="public/images/{{$flight->image}}" alt="img">
                            </div>
                        </div>
                        <div class="tour_details_boxed">
                            <h3 class="heading_theme">Overview</h3>
                            <div class="tour_details_boxed_inner">
                                <p>{{$flight->overview}}</p>
                            </div>
                        </div>
                        <div class="tour_details_boxed">
                            <h3 class="heading_theme">Required Documents for visa</h3>
                            <div class="tour_details_boxed_inner">
                                <p>{{$flight->documents}}</p>
                            </div>
                        </div>
                       <div class="tour_details_boxed">
                           <div class="tour_details_boxed_inner">
                                <div class="row">
                                <div class="col-sm-6">
                                    <ul>
                                        <h3 class="heading_theme">Included</h3>
                                    <li><i class="fas fa-circle"></i>{{$flight->include}}</li>
                            
                                </ul>
                                </div>
                                <div class="col-sm-6">
                                   <ul>
                                       <h3 class="heading_theme">Excluded</h3>
                                    <li><i class="fas fa-circle"></i>{{$flight->exclude}}</li>
                                </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                         <div class="write_your_review_wrapper">
                        <h3 class="heading_theme">Write your review</h3>
                        <div class="write_review_inner_boxed">
                            <form action="!#" id="news_comment_form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-froup">
                                            <input type="text" class="form-control bg_input"
                                                placeholder="Enter full name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-froup">
                                            <input type="text" class="form-control bg_input"
                                                placeholder="Enter email address">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-froup">
                                            <textarea rows="6" placeholder="Write your comments"
                                                class="form-control bg_input"></textarea>
                                        </div>
                                        <div class="comment_form_submit">
                                            <button class="btn btn_theme btn_md">Post comment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tour_details_right_sidebar_wrapper">
                       @foreach($tour_package as $tour_packages)  <div class="tour_detail_right_sidebar">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3>{{$tour_packages->visa_package}}</h3>
                                </div>
                                <div class="tour_package_details_bar_list">
                                    <h5>Package details</h5>
                                    <ul>
                                        <li><i class="fas fa-circle"></i>{{$tour_packages->package_details}}</li>
                                    </ul>
                                </div>
                                <div class="tour_package_details_bar_price">
                                    <h5>Price</h5>
                                    <div class="tour_package_bar_price">
                                        <h3>{{$tour_packages->amount}}<sub>/Per serson</sub> </h3>
                                    </div>
                                </div>
                            </div>
                            <form action="{{url('/book-visa-package')}}" enctype="multipart/form-data" method="post">
                                                      @csrf   
                 
                            <input type="hidden" name="visa_id" value="{{$flight->id}}">
                            <input type="hidden" name="visa_package_id" value="{{$tour_packages->id}}">
                            <input type="hidden" name="visa_package_amount" value="{{$tour_packages->amount}}">
                            <div class="tour_select_offer_bar_bottom">
                                <button class="button btn btn_theme btn_md w-100">Select Package</button>
                            </div>
                </form>
              </div>

                        <!--    <div class="tour_select_offer_bar_bottom">-->
                        <!--        <button class="btn btn_theme btn_md w-100" data-bs-toggle="offcanvas"-->
                        <!--            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Select-->
                        <!--            offer</button>-->
                        <!--    </div>-->
                        <!--</div>-->
                    @endforeach
                    <!--<div class="tour_detail_right_sidebar">-->
                    <!--        <div class="tour_details_right_boxed">-->
                    <!--            <div class="tour_details_right_box_heading">-->
                    <!--                <h3>Deluxe package</h3>-->
                    <!--            </div>-->
                    <!--            <div class="tour_package_details_bar_list">-->
                    <!--                <h5>Package details</h5>-->
                    <!--                <ul>-->
                    <!--                    <li><i class="fas fa-circle"></i>Buffet breakfast as per the Itinerary</li>-->
                    <!--                    <li><i class="fas fa-circle"></i>Visit eight villages showcasing Polynesian-->
                    <!--                        culture-->
                    <!--                    </li>-->
                    <!--                    <li><i class="fas fa-circle"></i>Complimentary Camel safari, Bonfire,</li>-->
                    <!--                    <li><i class="fas fa-circle"></i>All toll tax, parking, fuel, and driver-->
                    <!--                        allowances-->
                    <!--                    </li>-->
                    <!--                    <li><i class="fas fa-circle"></i>Comfortable and hygienic vehicle</li>-->
                    <!--                </ul>-->
                    <!--            </div>-->
                    <!--            <div class="tour_package_details_bar_price">-->
                    <!--                <h5>Price</h5>-->
                    <!--                <div class="tour_package_bar_price">-->
                    <!--                    <h6><del>$ 35,500</del></h6>-->
                    <!--                    <h3>$ 30,500 <sub>/Per serson</sub> </h3>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="tour_select_offer_bar_bottom">-->
                    <!--            <button class="btn btn_theme btn_md w-100" data-bs-toggle="offcanvas"-->
                    <!--                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Select-->
                    <!--                offer</button>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    <div class="tour_detail_right_sidebar">-->
                    <!--        <div class="tour_details_right_boxed">-->
                    <!--            <div class="tour_details_right_box_heading">-->
                    <!--                <h3>Super deluxe package</h3>-->
                    <!--            </div>-->
                    <!--            <div class="tour_package_details_bar_list">-->
                    <!--                <h5>Package details</h5>-->
                    <!--                <ul>-->
                    <!--                    <li><i class="fas fa-circle"></i>Buffet breakfast as per the Itinerary</li>-->
                    <!--                    <li><i class="fas fa-circle"></i>Visit eight villages showcasing Polynesian-->
                    <!--                        culture-->
                    <!--                    </li>-->
                    <!--                    <li><i class="fas fa-circle"></i>Complimentary Camel safari, Bonfire,</li>-->
                    <!--                    <li><i class="fas fa-circle"></i>All toll tax, parking, fuel, and driver-->
                    <!--                        allowances-->
                    <!--                    </li>-->
                    <!--                    <li><i class="fas fa-circle"></i>Comfortable and hygienic vehicle</li>-->
                    <!--                </ul>-->
                    <!--            </div>-->
                    <!--            <div class="tour_package_details_bar_price">-->
                    <!--                <h5>Price</h5>-->
                    <!--                <div class="tour_package_bar_price">-->
                    <!--                    <h6><del>$ 35,500</del></h6>-->
                    <!--                    <h3>$ 30,500 <sub>/Per serson</sub> </h3>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="tour_select_offer_bar_bottom">-->
                    <!--            <button class="btn btn_theme btn_md w-100" data-bs-toggle="offcanvas"-->
                    <!--                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Select-->
                    <!--                offer</button>-->
                    <!--        </div>-->
                    <!--    </div>-->
                        <div class="tour_detail_right_sidebar">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3>Why choose us</h3>
                                </div>

                                <div class="tour_package_details_bar_list first_child_padding_none">
                                    <ul>
                                        <li><i class="fas fa-circle"></i><p>{{$flight->why_choose_us}}</p></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="all_review_wrapper">
                        <h3 class="heading_theme">All review</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="all_review_box">
                        <div class="all_review_date_area">
                            <div class="all_review_date">
                                <h5>08 Dec, 2021</h5>
                            </div>
                            <div class="all_review_star">
                                <h5>Excellent</h5>
                                <div class="review_star_all">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="all_review_text">
                            <img src="assets/img/review/review1.png" alt="img">
                            <h4>Manresh Chandra</h4>
                            <p>" Loved the overall tour for all 6 days covering jaipur jodhpur and jaisalmer. worth ur
                                money for sure. thanks. Driver was very good and polite and safe driving for all 6 days.
                                on time pickup and drop overall. Thanks for it. "</p>
                        </div>
                        <div class="all_review_small_img">
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small1.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small2.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small3.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small4.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small5.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <h5>+5</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="all_review_box">
                        <div class="all_review_date_area">
                            <div class="all_review_date">
                                <h5>08 Dec, 2021</h5>
                            </div>
                            <div class="all_review_star">
                                <h5>Excellent</h5>
                                <div class="review_star_all">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="all_review_text">
                            <img src="assets/img/review/review2.png" alt="img">
                            <h4>Michel falak</h4>
                            <p>" Loved the overall tour for all 6 days covering jaipur jodhpur and jaisalmer. worth ur
                                money for sure. thanks. Driver was very good and polite and safe driving for all 6 days.
                                on time pickup and drop overall. Thanks for it. "</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="all_review_box">
                        <div class="all_review_date_area">
                            <div class="all_review_date">
                                <h5>08 Dec, 2021</h5>
                            </div>
                            <div class="all_review_star">
                                <h5>Excellent</h5>
                                <div class="review_star_all">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="all_review_text">
                            <img src="assets/img/review/review3.png" alt="img">
                            <h4>Chester dals</h4>
                            <p>" Loved the overall tour for all 6 days covering jaipur jodhpur and jaisalmer. worth ur
                                money for sure. thanks. Driver was very good and polite and safe driving for all 6 days.
                                on time pickup and drop overall. Thanks for it. "</p>
                        </div>
                        <div class="all_review_small_img">
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small1.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small2.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small5.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <h5>+15</h5>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="all_review_box">
                        <div class="all_review_date_area">
                            <div class="all_review_date">
                                <h5>08 Dec, 2021</h5>
                            </div>
                            <div class="all_review_star">
                                <h5>Excellent</h5>
                                <div class="review_star_all">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="all_review_text">
                            <img src="assets/img/review/review4.png" alt="img">
                            <h4>Casper mike</h4>
                            <p>" Loved the overall tour for all 6 days covering jaipur jodhpur and jaisalmer. worth ur
                                money for sure. thanks. Driver was very good and polite and safe driving for all 6 days.
                                on time pickup and drop overall. Thanks for it. "</p>
                        </div>
                        <div class="all_review_small_img">
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small4.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <img src="assets/img/review/review-small5.png" alt="img">
                            </div>
                            <div class="all_review_small_img_item">
                                <h5>+19</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="all_review_box">
                        <div class="all_review_date_area">
                            <div class="all_review_date">
                                <h5>08 Dec, 2021</h5>
                            </div>
                            <div class="all_review_star">
                                <h5>Excellent</h5>
                                <div class="review_star_all">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="all_review_text">
                            <img src="assets/img/review/review5.png" alt="img">
                            <h4>Jason bruno</h4>
                            <p>" Loved the overall tour for all 6 days covering jaipur jodhpur and jaisalmer. worth ur
                                money for sure. thanks. Driver was very good and polite and safe driving for all 6 days.
                                on time pickup and drop overall. Thanks for it. "</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Related tour packages Area -->
    <section id="related_tour_packages" class="section_padding_bottom">
        <div class="container">
            <!-- Section Heading -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>Related visa packages</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="promotional_tour_slider owl-theme owl-carousel dot_style">
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <img src="assets/img/tab-img/hotel1.png" alt="img">
                                <p><i class="fas fa-map-marker-alt"></i>New beach, Thailand</p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="#!">Kantua hotel, Thailand</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>$99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <img src="assets/img/tab-img/hotel2.png" alt="img">
                                <p><i class="fas fa-map-marker-alt"></i>Indonesia</p>
                                <div class="discount_tab">
                                    <span>50%</span>
                                </div>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="#!">Hotel paradise international</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>$99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <img src="assets/img/tab-img/hotel3.png" alt="img">
                                <p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="#!">Family package</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>$99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <img src="assets/img/tab-img/hotel4.png" alt="img">
                                <p><i class="fas fa-map-marker-alt"></i>Mariana island</p>
                                <div class="discount_tab">
                                    <span>50%</span>
                                </div>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="#!">Explorew the evergreen forest</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>$99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <img src="assets/img/tab-img/hotel6.png" alt="img">
                                <p><i class="fas fa-map-marker-alt"></i>Enjoy ancient italy, Couple tour </p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="#!">Thailand grand suit</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>$99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <img src="assets/img/tab-img/hotel7.png" alt="img">
                                <p><i class="fas fa-map-marker-alt"></i>Long island</p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="#!">Zefi resort and spa</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>$99.00 <span>Price starts from</span></h3>
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


    <!-- Offcanvas Area -->
    <div class="offcanvas select_offer_modal offcanvas-end" tabindex="-1" id="offcanvasRight"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Book now</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="side_canvas_wrapper">
                <div class="travel_date_side">
                    <div class="form-group">
                        <label for="dates">Select your travel date</label>
                        <input type="date" id="dates" value="2022-05-05" class="form-control">
                    </div>
                </div>
                <div class="select_person_side">
                    <h3>Select person</h3>
                    <div class="select_person_item">
                        <div class="select_person_left">
                            <h6>Adult</h6>
                            <p>12y+</p>
                        </div>
                        <div class="select_person_right">
                            <div class="button-set">
                                <button type="button">
                                    <i class="fas fa-plus"></i>
                                </button>
                                <span>01</span>
                                <button type="button">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="select_person_item">
                        <div class="select_person_left">
                            <h6>Children</h6>
                            <p>2 - 12 years</p>
                        </div>
                        <div class="select_person_right">
                            <div class="button-set">
                                <button type="button">
                                    <i class="fas fa-plus"></i>
                                </button>
                                <span>01</span>
                                <button type="button">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="select_person_item">
                        <div class="select_person_left">
                            <h6>Infant</h6>
                            <p>Below 2 years</p>
                        </div>
                        <div class="select_person_right">
                            <div class="button-set">
                                <button type="button">
                                    <i class="fas fa-plus"></i>
                                </button>
                                <span>01</span>
                                <button type="button">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="write_spical_not">
                        <label for="textse">Write any special note</label>
                        <textarea rows="5" id="textse" class="form-control"
                            placeholder="Write any special note"></textarea>
                    </div>
                    <div class="form-check write_spical_check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf1">
                        <label class="form-check-label" for="flexCheckDefaultf1">
                            <span class="main_spical_check">
                                <span>I read and accept all <a href="terms-service.html">Terms and conditios</a></span>
                            </span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="proceed_booking_btn ">
            <a href="tour-booking-submission.html" class="btn btn_theme btn_md w-100">Proceed to Booking</a>
        </div>
    </div>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap.bundle.js"></script>
    <!-- Meanu js -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <!-- owl carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Slick js -->
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <!-- wow.js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Custom js -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/add-form.js"></script>

</body>

</html>