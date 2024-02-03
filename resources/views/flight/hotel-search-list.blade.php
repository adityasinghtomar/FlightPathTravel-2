@include('flight.header')
    <!-- search -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
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
                        <h2>Hotel search result</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span> Hotel</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Form Area -->
   @include('flight.flight_search_form')

    <!-- Flight Search Areas -->
    <section id="explore_area" class="section_padding">
        <div class="container">
            <!-- Section Heading -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>hotels found</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="left_side_search_area">
                        <!--<div class="left_side_search_boxed">-->
                        <!--    <div class="item_searc_map_area">-->
                        <!--        <iframe-->
                        <!--            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9916.975593321238!2d-0.2763166259126239!3d51.58209318700696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4877a17cca5d0001%3A0x46d236266ce7b49!2sFlightPath%20Travel!5e0!3m2!1sen!2sin!4v1693608443247!5m2!1sen!2sin"></iframe>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="left_side_search_boxed">-->
                        <!--    <div class="left_side_search_heading">-->
                        <!--        <h5>Search by name</h5>-->
                        <!--    </div>-->
                        <!--    <div class="name_search_form">-->
                        <!--        <input type="text" class="form-control" placeholder="e.g Deluxe bus">-->
                        <!--        <i class="fas fa-search"></i>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="left_side_search_boxed">-->
                        <!--    <div class="left_side_search_heading">-->
                        <!--        <h5>Filter by price</h5>-->
                        <!--    </div>-->
                        <!--    <div class="filter-price">-->
                               
                        <!--    </div>-->
                        <!--    <button class="apply" type="button">Apply</button>-->
                        <!--</div>-->
                        <!--<div class="left_side_search_boxed">-->
                        <!--    <div class="left_side_search_heading">-->
                        <!--        <h5>Filter by Review</h5>-->
                        <!--    </div>-->
                        <!--    <div class="filter_review">-->
                        <!--        <form class="review_star">-->
                        <!--            <div class="form-check">-->
                        <!--                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">-->
                        <!--                <label class="form-check-label" for="flexCheckDefault">-->
                        <!--                    <i class="fas fa-star color_theme"></i>-->
                        <!--                    <i class="fas fa-star color_theme"></i>-->
                        <!--                    <i class="fas fa-star color_theme"></i>-->
                        <!--                    <i class="fas fa-star color_theme"></i>-->
                        <!--                    <i class="fas fa-star color_theme"></i>-->
                        <!--                </label>-->
                        <!--            </div>-->
                        <!--            <div class="form-check">-->
                        <!--                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">-->
                        <!--                <label class="form-check-label" for="flexCheckDefault1">-->
                        <!--                    <i class="fas fa-star color_theme"></i>-->
                        <!--                    <i class="fas fa-star color_theme"></i>-->
                        <!--                    <i class="fas fa-star color_theme"></i>-->
                        <!--                    <i class="fas fa-star color_theme"></i>-->
                        <!--                    <i class="fas fa-star color_asse"></i>-->
                        <!--                </label>-->
                        <!--            </div>-->
                        <!--            <div class="form-check">-->
                        <!--                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">-->
                        <!--                <label class="form-check-label" for="flexCheckDefault2">-->
                        <!--                    <i class="fas fa-star color_theme"></i>-->
                        <!--                    <i class="fas fa-star color_theme"></i>-->
                        <!--                    <i class="fas fa-star color_theme"></i>-->
                        <!--                    <i class="fas fa-star color_asse"></i>-->
                        <!--                    <i class="fas fa-star color_asse"></i>-->
                        <!--                </label>-->
                        <!--            </div>-->
                        <!--            <div class="form-check">-->
                        <!--                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">-->
                        <!--                <label class="form-check-label" for="flexCheckDefault3">-->
                        <!--                    <i class="fas fa-star color_theme"></i>-->
                        <!--                    <i class="fas fa-star color_theme"></i>-->
                        <!--                    <i class="fas fa-star color_asse"></i>-->
                        <!--                    <i class="fas fa-star color_asse"></i>-->
                        <!--                    <i class="fas fa-star color_asse"></i>-->
                        <!--                </label>-->
                        <!--            </div>-->
                        <!--            <div class="form-check">-->
                        <!--                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">-->
                        <!--                <label class="form-check-label" for="flexCheckDefault5">-->
                        <!--                    <i class="fas fa-star color_theme"></i>-->
                        <!--                    <i class="fas fa-star color_asse"></i>-->
                        <!--                    <i class="fas fa-star color_asse"></i>-->
                        <!--                    <i class="fas fa-star color_asse"></i>-->
                        <!--                    <i class="fas fa-star color_asse"></i>-->
                        <!--                </label>-->
                        <!--            </div>-->
                        <!--        </form>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="left_side_search_boxed">
                            <div class="left_side_search_heading">
                                <h5>Filter by hotel star</h5>
                            </div>
                            <div class="filter_review">
                                <form class="review_star">
                                    <div class="form-check">
                                        <div class="checkbox">
                                    <input type="checkbox" class="form-check-input" name="star" value="One" > <label style="margin-left: 20px;">  1 Star
                                 </label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" class="form-check-input" name="star" value="Two" > <label style="margin-left: 20px;">  2 Star
                                 </label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" class="form-check-input" name="star" value="Three" > <label style="margin-left: 20px;">  3 Star
                                 </label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" class="form-check-input" name="star" value="Four" > <label style="margin-left: 20px;">  4 Star
                                 </label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" class="form-check-input" name="star" value="Five" > <label style="margin-left: 20px;">  5 Star
                                 </label>
                                </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--<div class="left_side_search_boxed">-->
                        <!--    <div class="left_side_search_heading">-->
                        <!--        <h5>Facilities</h5>-->
                        <!--    </div>-->
                        <!--    <div class="tour_search_type">-->
                        <!--        <div class="form-check">-->
                        <!--            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf1">-->
                        <!--            <label class="form-check-label" for="flexCheckDefaultf1">-->
                        <!--                <span class="area_flex_one">-->
                        <!--                    <span>Wake-up call</span>-->
                        <!--                    <span>20</span>-->
                        <!--                </span>-->
                        <!--            </label>-->
                        <!--        </div>-->
                        <!--        <div class="form-check">-->
                        <!--            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf2">-->
                        <!--            <label class="form-check-label" for="flexCheckDefaultf2">-->
                        <!--                <span class="area_flex_one">-->
                        <!--                    <span>Flat TV</span>-->
                        <!--                    <span>14</span>-->
                        <!--                </span>-->
                        <!--            </label>-->
                        <!--        </div>-->
                        <!--        <div class="form-check">-->
                        <!--            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultaf3">-->
                        <!--            <label class="form-check-label" for="flexCheckDefaultaf3">-->
                        <!--                <span class="area_flex_one">-->
                        <!--                    <span>Vehicle service</span>-->
                        <!--                    <span>30</span>-->
                        <!--                </span>-->
                        <!--            </label>-->
                        <!--        </div>-->
                        <!--        <div class="form-check">-->
                        <!--            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultaf4">-->
                        <!--            <label class="form-check-label" for="flexCheckDefaultaf4">-->
                        <!--                <span class="area_flex_one">-->
                        <!--                    <span>Guide service</span>-->
                        <!--                    <span>22</span>-->
                        <!--                </span>-->
                        <!--            </label>-->
                        <!--        </div>-->
                        <!--        <div class="form-check">-->
                        <!--            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultaf5">-->
                        <!--            <label class="form-check-label" for="flexCheckDefaultaf5">-->
                        <!--                <span class="area_flex_one">-->
                        <!--                    <span>Internet, Wi-fi</span>-->
                        <!--                    <span>41</span>-->
                        <!--                </span>-->
                        <!--            </label>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="left_side_search_boxed">-->
                        <!--    <div class="left_side_search_heading">-->
                        <!--        <h5>Hotel service</h5>-->
                        <!--    </div>-->
                        <!--    <div class="tour_search_type">-->
                        <!--        <div class="form-check">-->
                        <!--            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultt1">-->
                        <!--            <label class="form-check-label" for="flexCheckDefaultt1">-->
                        <!--                <span class="area_flex_one">-->
                        <!--                    <span>Gymnasium</span>-->
                        <!--                    <span>20</span>-->
                        <!--                </span>-->
                        <!--            </label>-->
                        <!--        </div>-->
                        <!--        <div class="form-check">-->
                        <!--            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultt2">-->
                        <!--            <label class="form-check-label" for="flexCheckDefaultt2">-->
                        <!--                <span class="area_flex_one">-->
                        <!--                    <span>Mountain Bike</span>-->
                        <!--                    <span>14</span>-->
                        <!--                </span>-->
                        <!--            </label>-->
                        <!--        </div>-->
                        <!--        <div class="form-check">-->
                        <!--            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultt3">-->
                        <!--            <label class="form-check-label" for="flexCheckDefaultt3">-->
                        <!--                <span class="area_flex_one">-->
                        <!--                    <span>Wifi</span>-->
                        <!--                    <span>62</span>-->
                        <!--                </span>-->
                        <!--            </label>-->
                        <!--        </div>-->
                        <!--        <div class="form-check">-->
                        <!--            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultt4">-->
                        <!--            <label class="form-check-label" for="flexCheckDefaultt4">-->
                        <!--                <span class="area_flex_one">-->
                        <!--                    <span>Aerobics Room</span>-->
                        <!--                    <span>08</span>-->
                        <!--                </span>-->
                        <!--            </label>-->
                        <!--        </div>-->
                        <!--        <div class="form-check">-->
                        <!--            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultt5">-->
                        <!--            <label class="form-check-label" for="flexCheckDefaultt5">-->
                        <!--                <span class="area_flex_one">-->
                        <!--                    <span>Golf Cages</span>-->
                        <!--                    <span>12</span>-->
                        <!--                </span>-->
                        <!--            </label>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
                 <?php $Currency_active =\App\Currency_Model::where('currency_active','0')->first(); ?>
                <!--Data-->
                    <style>
        .content {

  display: none;
}
#loadMore {
  width: 200px;
  color: #fff;
  display: block;
  text-align: center;
  margin: 20px auto;
  padding: 10px;
  border-radius: 10px;
  border: 1px solid transparent;
  background-color: blue;
  transition: .3s;
}
#loadMore:hover {
  color: blue;
  background-color: #fff;
  border: 1px solid blue;
  text-decoration: none;
}
.noContent {
  color: #000 !important;
  background-color: transparent !important;
  pointer-events: none;
}
    </style>    
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            
                @if(isset($ress->HotelSearchResult->HotelResults))
                <?php $data = $ress->HotelSearchResult->HotelResults; ?>
                <?php $TraceId = $ress->HotelSearchResult->TraceId; ?>
                @foreach($data as $data1)
                        <?php 
                                                            if($data1->StarRating == '1'){
                                                                $star = "One"; 
                                                                }
                                                            elseif($data1->StarRating == '2'){
                                                                $star = "Two"; 
                                                                }
                                                            elseif($data1->StarRating == '3'){
                                                                $star = "Three"; 
                                                                } 
                                                            elseif($data1->StarRating == '4'){
                                                                $star = "Four"; 
                                                                } 
                                                            elseif($data1->StarRating == '5'){
                                                                $star = "Five"; 
                                                                }     
                                                            else{
                                                               $star = "three";   
                                                            }
                                                             ?>
                            <div class="cruise_search_result_wrapper">
                                <div class="cruise_search_item content player <?php echo $star; ?>">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="cruise_item_img">
                                                <img src="<?php print_r($data1->HotelPicture); ?>" alt="img">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="cruise_item_inner_content">
                                                <div class="cruise_content_top_wrapper">
                                                    <div class="cruise_content_top_left">
                                                        <h4><?php print_r($data1->HotelName); ?></h4>
                                                        <p><i class="fas fa-map-marker-alt"></i><?php print_r($data1->HotelAddress); ?></p>
                                                    </div>
                                                    <div class="cruise_content_top_right">
                                                        <h5><?php print_r($data1->StarRating); ?> Star</h5>
                                                        <h4>(1214 reviewes)</h4>
                                                    </div>
                                                </div>
                                                <div class="cruise_content_middel_wrapper">
                                                    <div class="cruise_content_middel_left">
                                                        <h5>Deluxe room</h5>
                                                        <p>1 extra large double bed</p>
                                                    </div>
                                                    <div class="cruise_content_middel_right">
                                                        <p>2 nights, 1 adult</p>
                                                    </div>
                                                </div>
                                                <div class="cruise_content_middel_wrapper">
                                                    <div class="cruise_content_middel_left">
                                                        <h5>Free cancellation</h5>
                                                        <p>Cancel your booking at any time</p>
                                                    </div>
                                                    <div class="cruise_content_middel_right">
                                                        
                                            @if(session()->get('user_id')) <?php $comm= \App\Commision_Add_Model::where('user_id',session()->get('user_id'))->where('commision_type','hotel')->first();  ?> <?php $markup= \App\Markup_Apply_Model::where('user_id',session()->get('user_id'))->first();  ?>
                                            <?php if($comm) {  
                                            $commision= \App\Commision_Model::where('id',$comm->commision_id)->first();
                                            if($commision){
                                            $commis= $commision->commision ; $commis_type = $commision->commision_type; 
                                            }else {$commis= 0; $commis_type ='';}
                                            }
                                            else {$commis= 0; $commis_type ='';} ?>
                                            <?php if($markup) {  $mark_up= \App\Markup_Model::where('id',$markup->markup_id)->first(); $mark_up1= $mark_up->markup_amount ;  }else {$mark_up1= 0; } ?>
                                           <h3><?php print_r($data1->Price->CurrencyCode); ?><?php echo $base123 = $data1->Price->RoomPrice ; ?> </h3> <h6><sub style="width:10px;height:10px;"> Commision : {{$commis}} {{$commis_type}}</sub></h6><h6> <sub style="width:10px;height:10px;"> Mark-UP : {{$mark_up1}}</sub></h6> <sub>/Per person</sub>
                                        @else
                                        <h3> {{ $Currency_active->currency_symbol}} <?php  $subtotal= $data1->Price->RoomPrice / $Currency_active->currency_rates ;echo round($subtotal, 2); ?> <sub>/Per person</sub></h3>
                                        @endif
                                                        <p>{{ $Currency_active->currency_symbol}} <?php  $subtotal= $data1->Price->ServiceTax / $Currency_active->currency_rates ;echo round($subtotal, 2); ?>  +  {{ $Currency_active->currency_symbol}} <?php  $subtotal= $data1->Price->OtherCharges / $Currency_active->currency_rates ;echo round($subtotal, 2); ?> tax and vat</p>
                                                    </div>
                                                </div>
                                                <div class="cruise_content_bottom_wrapper">
                                                    <div class="cruise_content_bottom_left">
                                                        <ul>
                                                          
                                                        </ul>
                                                    </div>
                                                    <?php $room_price = $data1->Price->RoomPrice; ?><?php $room_service_tax = $data1->Price->ServiceTax; ?><?php $room_OtherCharges = $data1->Price->OtherCharges; ?> 
                                                    <?php $total_amount = $room_price + $room_service_tax + $room_OtherCharges?>
                                                    <form action="{{url('/hotel_information')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                                            <input type="hidden" name="ResultIndex" value="<?php echo $data1->ResultIndex;?>"> 
                                            <input type="hidden" name="TraceId" value="<?php echo $TraceId?>">
                                            <input type="hidden" name="token_id" value="<?php echo $token_id; ?>">
                                            <input type="hidden" name="EndUserIp" value="192.168.11.120">
                                            <input type="hidden" name="HotelCode" value="<?php echo $data1->HotelCode;?>">
                                            <input type="hidden" name="total_amount" value="<?php echo $total_amount;?>">
                                            <input type="hidden" name="CurrencyCode" value="<?php echo $data1->Price->CurrencyCode;?>">
                                            
                                             <div class="cruise_content_bottom_right">
                                            <button class="btn btn_theme btn_md">Hotel Details</button>
                                            </div>
                                        </form>
                                             <form action="{{url('/room_information')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                                            <input type="hidden" name="StarRating" value="<?php echo $data1->StarRating;?>">
                                            <input type="hidden" name="Hotelname" value="<?php echo $data1->HotelName;?>">
                                            <input type="hidden" name="Hoteladdress" value="<?php echo  $data1->HotelAddress;?>">
                                            <input type="hidden" name="ResultIndex" value="<?php echo $data1->ResultIndex;?>"> 
                                            <input type="hidden" name="TraceId" value="<?php echo $TraceId?>">
                                            <input type="hidden" name="token_id" value="<?php echo $token_id; ?>">
                                            <input type="hidden" name="EndUserIp" value="192.168.11.120">
                                            <input type="hidden" name="HotelCode" value="<?php echo $data1->HotelCode;?>">
                                            <input type="hidden" name="total_amount" value="<?php echo $total_amount;?>">
                                            <input type="hidden" name="CurrencyCode" value="<?php echo $data1->Price->CurrencyCode;?>">
                                             <div class="cruise_content_bottom_right">
                                            <button class="btn btn-info btn_md">Room Details</button>
                                            </div> 
                                        </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          @endforeach
                          @endif
                            </div>
                            <div class="load_more_flight">
                                <a href="#" id="loadMore">Load More</a>
                                <!--<button class="btn btn_md"><i class="fas fa-spinner"></i> Load more..</button>-->
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
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
  
            /*------------------------------------------
            --------------------------------------------
            Country Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('.city_id').on('keyup',function(){
                var idCountry = this.value;
                $("#city_id").html('');
                $.ajax({
                    url: "/city_details",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $.each(result.states, function (key, value) {
                            $("#city_id").append('<input type="hidden" name="Destination" value="'+ value.city_id +'">');
                        });
                   }
                });
            });
        });
    </script> 
    <script>

    function updateFields2(first_field2) {
  document.getElementById( 
            "second-field2").value = 
            document.getElementById( 
            "first_field2").value; 
}
</script>

   <script>

   function updateFields1(first_field1) {
  document.getElementById( 
            "second-field1").value = 
            document.getElementById( 
            "first_field1").value; 
}
</script>

<script>

function updateFields(first_field) {
  document.getElementById( 
            "second-field").value = 
            document.getElementById( 
            "first_field").value; 
}
</script> 
<script>

function updateFields3(first_field3) {
  var objectarray = document.getElementById( "first_field3").value; 
  if(objectarray =='1'){
      document.getElementById( 
            "second-field3").value = "All"
  }
  if(objectarray =='2'){
      document.getElementById( 
            "second-field3").value = "Economy"
  }
  if(objectarray =='3'){
      document.getElementById( 
            "second-field3").value = "Premium Economy"
  }
  if(objectarray =='4'){
      document.getElementById( 
            "second-field3").value = "Business"
  }if(objectarray =='5'){
      document.getElementById( 
            "second-field3").value = "PremiumBusiness"
  }
  if(objectarray =='6'){
      document.getElementById( 
            "second-field3").value = "First Class"
  }
}
</script>

<!--Return-->
<script>

    function updateFields21(first_field21) {
  document.getElementById( 
            "second-field21").value = 
            document.getElementById( 
            "first_field21").value; 
}
</script>

   <script>

   function updateFields11(first_field11) {
  document.getElementById( 
            "second-field11").value = 
            document.getElementById( 
            "first_field11").value; 
}
</script>

<script>

function updateFields01(first_field01) {
  document.getElementById( 
            "second-field01").value = 
            document.getElementById( 
            "first_field01").value; 
}
</script> 
<script>

function updateFields31(first_field31) {
  var objectarray = document.getElementById( "first_field31").value; 
  if(objectarray =='1'){
      document.getElementById( 
            "second-field31").value = "All"
  }
  if(objectarray =='2'){
      document.getElementById( 
            "second-field31").value = "Economy"
  }
  if(objectarray =='31'){
      document.getElementById( 
            "second-field31").value = "Premium Economy"
  }
  if(objectarray =='4'){
      document.getElementById( 
            "second-field31").value = "Business"
  }if(objectarray =='5'){
      document.getElementById( 
            "second-field31").value = "PremiumBusiness"
  }
  if(objectarray =='6'){
      document.getElementById( 
            "second-field31").value = "First Class"
  }
}
</script>


<!--Return-->
<script>

    function updateFields001(first_field21) {
  document.getElementById( 
            "second-field001").value = 
            document.getElementById( 
            "first_field001").value; 
}
</script>

   <script>

   function updateFields002(first_field11) {
  document.getElementById( 
            "second-field002").value = 
            document.getElementById( 
            "first_field002").value; 
}
</script>

<script>

function updateFields003(first_field01) {
  document.getElementById( 
            "second-field003").value = 
            document.getElementById( 
            "first_field003").value; 
}
</script> 
<script>

function updateFields004(first_field31) {
  var objectarray = document.getElementById( "first_field004").value; 
  if(objectarray =='1'){
      document.getElementById( 
            "second-field004").value = "All"
  }
  if(objectarray =='2'){
      document.getElementById( 
            "second-field004").value = "Economy"
  }
  if(objectarray =='31'){
      document.getElementById( 
            "second-field004").value = "Premium Economy"
  }
  if(objectarray =='4'){
      document.getElementById( 
            "second-field004").value = "Business"
  }if(objectarray =='5'){
      document.getElementById( 
            "second-field004").value = "PremiumBusiness"
  }
  if(objectarray =='6'){
      document.getElementById( 
            "second-field004").value = "First Class"
  }
}
</script>


<!--Return-->
<script>

    function updateFields0001(first_field21) {
  document.getElementById( 
            "second-field0001").value = 
            document.getElementById( 
            "first_field0001").value; 
}
</script>

   <script>

   function updateFields0002(first_field11) {
  document.getElementById( 
            "second-field0002").value = 
            document.getElementById( 
            "first_field0002").value; 
}
</script>

<script>

function updateFields0003(first_field01) {
  document.getElementById( 
            "second-field0003").value = 
            document.getElementById( 
            "first_field0003").value; 
}
</script> 
<script>

function updateFields0004(first_field31) {
  var objectarray = document.getElementById( "first_field0004").value; 
  if(objectarray =='1'){
      document.getElementById( 
            "second-field0004").value = "All"
  }
  if(objectarray =='2'){
      document.getElementById( 
            "second-field0004").value = "Economy"
  }
  if(objectarray =='31'){
      document.getElementById( 
            "second-field0004").value = "Premium Economy"
  }
  if(objectarray =='4'){
      document.getElementById( 
            "second-field0004").value = "Business"
  }if(objectarray =='5'){
      document.getElementById( 
            "second-field0004").value = "PremiumBusiness"
  }
  if(objectarray =='6'){
      document.getElementById( 
            "second-field0004").value = "First Class"
  }
}
</script>
<script>
const d = new Date();
let text = d.toLocaleString();
document.getElementById("demo").innerHTML = text;
</script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
  
            /*------------------------------------------
            --------------------------------------------
            Country Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#from').on('change', function () {
                var idCountry = this.value;
                $("#state-dropdown").html('');
                $.ajax({
                    url: "/fetch-from",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $.each(result.states, function (key, value) {
                            $("#state-dropdown").append('<option value="">'+ value.AIRPORTCODE +',' + value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');
                        });
                   }
                });
            });
        });
    </script>
    
<script>
        $(document).ready(function () {
  
            /*------------------------------------------
            --------------------------------------------
            Country Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#to').on('change', function () {
                var idCountry = this.value;
                $("#state-dropdown1").html('');
                $.ajax({
                    url: "/fetch-from",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $.each(result.states, function (key, value) {
                            $("#state-dropdown1").append('<option value="">'+ value.AIRPORTCODE +',' + value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');
                        });
                   }
                });
            });
        });
    </script>

  <script>
        $(document).ready(function () {
  
            /*------------------------------------------
            --------------------------------------------
            Country Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#from12').on('change', function () {
                var idCountry = this.value;
                $("#state-dropdown12").html('');
                $.ajax({
                    url: "/fetch-from",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $.each(result.states, function (key, value) {
                            $("#state-dropdown12").append('<option value="">'+ value.AIRPORTCODE +',' + value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');
                        });
                   }
                });
            });
        });
    </script>
    
<script>
        $(document).ready(function () {
  
            /*------------------------------------------
            --------------------------------------------
            Country Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#to12').on('change', function () {
                var idCountry = this.value;
                $("#state-dropdown112").html('');
                $.ajax({
                    url: "/fetch-from",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $.each(result.states, function (key, value) {
                            $("#state-dropdown112").append('<option value="">'+ value.AIRPORTCODE +',' + value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');
                        });
                   }
                });
            });
        });
    </script>  
    
    <!---->
        <script>
        $(document).ready(function () {
  
            /*------------------------------------------
            --------------------------------------------
            Country Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#from_1').on('change', function () {
                var idCountry = this.value;
                $("#state-dropdown_1").html('');
                $.ajax({
                    url: "/fetch-from",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $.each(result.states, function (key, value) {
                            $("#state-dropdown_1").append('<option value="">'+ value.AIRPORTCODE +',' + value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');
                        });
                   }
                });
            });
        });
    </script>
    
<script>
        $(document).ready(function () {
  
            /*------------------------------------------
            --------------------------------------------
            Country Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#to_2').on('change', function () {
                var idCountry = this.value;
                $("#state-dropdown_2").html('');
                $.ajax({
                    url: "/fetch-from",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $.each(result.states, function (key, value) {
                            $("#state-dropdown_2").append('<option value="">' + value.AIRPORTCODE +','+ value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');
                        });
                   }
                });
            });
        });
    </script>

  <script>
        $(document).ready(function () {
  
            /*------------------------------------------
            --------------------------------------------
            Country Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#from_3').on('change', function () {
                var idCountry = this.value;
                $("#state-dropdown_3").html('');
                $.ajax({
                    url: "/fetch-from",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $.each(result.states, function (key, value) {
                            $("#state-dropdown_3").append('<option value="">'+ value.AIRPORTCODE +',' + value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');
                        });
                   }
                });
            });
        });
    </script>
    
<script>
        $(document).ready(function () {
  
            /*------------------------------------------
            --------------------------------------------
            Country Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#to_4').on('change', function () {
                var idCountry = this.value;
                $("#state-dropdown_4").html('');
                $.ajax({
                    url: "/fetch-from",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $.each(result.states, function (key, value) {
                            $("#state-dropdown_4").append('<option value="">'+ value.AIRPORTCODE +',' + value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');
                        });
                   }
                });
            });
        });
    </script> 
    
    <!--Search-->
    <script>
        $(document).ready(function () {
  
            /*------------------------------------------
            --------------------------------------------
            Country Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('.from').on('keyup',function(){
                var idCountry = this.value;
                $("#ShowDataList1").html('');
                $.ajax({
                    url: "/fetch-from1",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $.each(result.states, function (key, value) {
                            $("#ShowDataList1").append('<option value="'+ value.AIRPORTCODE +'">'+ value.AIRPORTCODE +',' + value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');
                        });
                   }
                });
            });
        });
    </script>
    
    <script>
        $(document).ready(function () {
  
            /*------------------------------------------
            --------------------------------------------
            Country Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('.to').on('keyup',function(){
                var idCountry = this.value;
                $("#ShowDataList2").html('');
                $.ajax({
                    url: "/fetch-from1",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $.each(result.states, function (key, value) {
                            $("#ShowDataList2").append('<option value="'+ value.AIRPORTCODE +'">'+ value.AIRPORTCODE +',' + value.AIRPORTNAME +','+ value.CITYNAME +','+ value.COUNTRYCODE +'</option>');
                        });
                   }
                });
            });
        });
    </script>
   
    <script>
        $(document).ready(function () {
  
            /*------------------------------------------
            --------------------------------------------
            Country Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('.city_id').on('keyup',function(){
                var idCountry = this.value;
                $("#city_id").html('');
                $.ajax({
                    url: "/city_details",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $.each(result.states, function (key, value) {
                            $("#city_id").append('<input type="hidden" name="Destination" value="'+ value.city_id +'">');
                        });
                   }
                });
            });
        });
    </script> 
 <script>
        $(document).ready(function () {
  
            /*------------------------------------------
            --------------------------------------------
            Country Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('.dateget').on('keyup',function(){
                var idCountry = this.value;
               const date_str = "11/02/2023";
                const date = new Date(date_str);
                    const full_day_name = date.toLocaleDateString('default', { weekday: 'long' });
                console.log(full_day_name)
            });
        });
    </script>    
<script>
    function myDate() {
        var a = new Date(this.value);
        console.log(a);
        var weekdays = new Array(7);
        weekdays[0] = "Sunday";
        weekdays[1] = "Monday";
        weekdays[2] = "Tuesday";
        weekdays[3] = "Wednesday";
        weekdays[4] = "Thursday";
        weekdays[5] = "Friday";
        weekdays[6] = "Saturday";
        var r = weekdays[a.getDay()];
        document.getElementById("myId").innerHTML = r;
    }
     $(function(){
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();

    var minDate= year + '-' + month + '-' + day;

    $('.txtDate').attr('min', minDate);
});
</script>    
<script>
    // not exactly vanilla as there is one lodash function

var allCheckboxes = document.querySelectorAll('input[type=checkbox]');
var allPlayers = Array.from(document.querySelectorAll('.player'));
var checked = {};

getChecked('star');
getChecked('cabin_class');
getChecked('refundable');
getChecked('airlines');
getChecked('conference');

console.log(allCheckboxes);

Array.prototype.forEach.call(allCheckboxes, function (el) {
  el.addEventListener('change', toggleCheckbox);
});

function toggleCheckbox(e) {
  getChecked(e.target.name);
  setVisibility();
}

function getChecked(name) {
  checked[name] = Array.from(document.querySelectorAll('input[name=' + name + ']:checked')).map(function (el) {
    return el.value;
  });
}

function setVisibility() {
  allPlayers.map(function (el) {
    var star = checked.star.length ? _.intersection(Array.from(el.classList), checked.star).length : true;
    var cabin_class = checked.cabin_class.length ? _.intersection(Array.from(el.classList), checked.cabin_class).length : true;
    var refundable = checked.refundable.length ? _.intersection(Array.from(el.classList), checked.refundable).length : true;
    var airlines = checked.airlines.length ? _.intersection(Array.from(el.classList), checked.airlines).length : true;
    var conference = checked.conference.length ? _.intersection(Array.from(el.classList), checked.conference).length : true;
    if (star && cabin_class && refundable && airlines && conference) {
      el.style.display = 'block';
    } else {
      el.style.display = 'none';
    }
  });
}
</script>
<script>
    $(document).ready(function(){
  $(".content").slice(0, 10).show();
  $("#loadMore").on("click", function(e){
    e.preventDefault();
    $(".content:hidden").slice(0, 4).slideDown();
    if($(".content:hidden").length == 0) {
      $("#loadMore").text("No Content").addClass("noContent");
    }
  });
  
})
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script> 
    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap.bundle.js"></script>
    <!-- Meanu js -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <!-- Range js -->
    <script src="assets/js/nouislider.min.js"></script>
    <script src="assets/js/wNumb.js"></script> 
    <!-- owl carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- wow.js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Custom js -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/add-form.js"></script>
    <script src="assets/js/form-dropdown.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/0.10.0/lodash.min.js"></script>
</body>

</html>