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

    <!-- TBO  -->
    @if(isset($ress->HotelSearchResult->HotelResults))
        @if(isset($ress->HotelSearchResult->HotelResults))
                <?php $data = $ress->HotelSearchResult->HotelResults; ?>
                <?php $Total_three = 0; ?>
                <?php $Total_four = 0; ?>
                <?php $Total_five = 0; ?>
                <?php $Total_hotels = 0; ?>
                @foreach($data as $data1)
                           <?php if($data1->StarRating){
                            $Total_hotels++; 
                            } ?>
                           <?php if($data1->StarRating == '3'){
                            $Total_three++; 
                            } ?>
                            <?php if($data1->StarRating == '4'){
                            $Total_four++; 
                            } ?>
                            <?php if($data1->StarRating == '5'){
                            $Total_five++; 
                            } ?>
                @endforeach
        @endif                
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
                    <div class="sec-filter pb-20 mb-40">
                        <div class="sec-filter__left">
                            <h4 class="sec-filter__left__title">
                                Filters
                            </h4>
                            <h6 class="sec-filter__left__content">
                                Showing <span class="fw-bold"></span> results
                            </h6>
                        </div>
                        <div class="sec-filter__right">
                            <h6 class="sec-filter__right__sub-title">
                                Clear all
                            </h6>  
                        </div>
                    </div>
                    <div class="sec-filter-block mb-20">
                        <div class="sec-filter-block__left">
                            <h4 class="sec-filter-block__left__title">
                                Star
                            </h4>
                        </div>
                        <div class="sec-filter-block__right">
                            <h6 class="sec-filter__right__sub-title">
                                Reset
                            </h6>  
                        </div>
                    </div>
                    <div class="row sec-filter-block-options mb-20">
                        <div class="col-md-12 mb-10">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <label class="form-check-label" for="tripOneway">ALL</label>
                                </div>
                                <small><?php if(isset($Total_hotels)){ echo $Total_hotels; }?></small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">    
                                    <input type="checkbox" class="form-check-input" name="star" value="Three" >
                                    <label class="form-check-label" for="tripRoundtrip">3 Star</label>
                                </div>
                                <small><?php if(isset($Total_three)){ echo $Total_three; }?></small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="star" value="Four" >
                                    <label class="form-check-label" for="tripMulticity">4 star</label>
                                </div>
                                <small><?php if(isset($Total_four)){ echo $Total_four; }?></small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="star" value="Five" >
                                    <label class="form-check-label" for="tripMulticity">5 star</label>
                                </div>
                                <small><?php if(isset($Total_five)){ echo $Total_five; }?></small>
                            </div>
                            
                        </div> 
                    </div>
                    <!--<div class="left_side_search_area">-->
                        
                    <!--    <div class="left_side_search_boxed">-->
                    <!--        <div class="left_side_search_heading">-->
                    <!--            <h5>Filter by hotel star</h5>-->
                    <!--        </div>-->
                    <!--        <div class="filter_review">-->
                    <!--            <form class="review_star">-->
                    <!--                <div class="form-check">-->
                                       
                    <!--            <div class="checkbox">-->
                    <!--                <input type="checkbox" class="form-check-input" name="star" value="Three" > <label style="margin-left: 20px;">  3 Star-->
                    <!--             </label>-->
                    <!--            </div>-->
                    <!--            <div class="checkbox">-->
                    <!--                <input type="checkbox" class="form-check-input" name="star" value="Four" > <label style="margin-left: 20px;">  4 Star-->
                    <!--             </label>-->
                    <!--            </div>-->
                    <!--            <div class="checkbox">-->
                    <!--                <input type="checkbox" class="form-check-input" name="star" value="Five" > <label style="margin-left: 20px;">  5 Star-->
                    <!--             </label>-->
                    <!--            </div>-->
                    <!--                </div>-->
                    <!--            </form>-->
                    <!--        </div>-->
                    <!--    </div>-->
                       
                    <!--</div>-->
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
    <style>
        
.search-card-result {
  box-shadow: 0px 1px 4px rgba(41, 51, 57, 0.5);
  margin: 1rem 0;
  padding: 0.5rem 0;
  background-color: #fff;
}
.search-card-result img {
  height: 190px;
  width:100%;
}
.search-card-result h5 {
  font-style: 1.1rem;
  font-weight: 700;
}
.search-card-result p {
  font-size: 0.9rem;
}

.search-card-result .more-offers p {
  margin-bottom: 0.3rem;
}

.more-offers .additional {
  padding-top: 0.2rem;
  font-weight: 700;
}

.fa.checked {
  color: orange;
}

.map-container-btn {
  height: 100px;

  box-shadow: 0px 1px 4px rgba(41, 51, 57, 0.5);
  background-color: wheat;
}

.map-container-btn .btn {
  margin-top: 30px;
}

.filter-card {
  padding: 0;
  background: #fff;
  color: black;
}

.filter-card h5 {
  margin: 10px 0;
  padding: 1rem;

  box-shadow: 0px 1px 4px rgba(41, 51, 57, 0.5);
  color: #000;
}
.filter-card form {
  box-shadow: 0px 1px 4px rgba(41, 51, 57, 0.5);
  padding: 0.5rem 2rem;
}
.map-btn {
  background-color: #fff !important;
}

/* SOCIAL ICONS.CSS */

  .nav .fa {
    margin: 5px 2px;
    padding: 20px;
    
    font-size: 30px;
    text-align: center;
    text-decoration: none;
  }
  
  .fa:hover {
      opacity: 0.7;
  }
  
  .fa-facebook {
    background: #3B5998;
    color: white;
  }
  
  .fa-twitter {
    background: #55ACEE;
    color: white;
  }
  
  .fa-google {
    background: #dd4b39;
    color: white;
  }
  
  .fa-linkedin {
    background: #007bb5;
    color: white;
  }
  
  .fa-youtube {
    background: #bb0000;
    color: white;
  }
  
  .fa-instagram {
    background: #DA4453;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to bottom, #89216B, #DA4453);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to bottom, #89216B, #DA4453); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */    
    color: white;
  }
  
  .fa-pinterest {
    background: #cb2027;
    color: white;
  }
  
  .fa-snapchat-ghost {
    background: #fffc00;
    color: white;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
  }
    </style>
    <div class="col-lg-9">
          @if(isset($ress->HotelSearchResult->HotelResults))
                <?php $data = $ress->HotelSearchResult->HotelResults; ?>
                <?php $NoOfRooms = $ress->HotelSearchResult->NoOfRooms; ?>
                
                <?php $CheckInDate = $ress->HotelSearchResult->CheckInDate; ?>
                <?php $CheckOutDate = $ress->HotelSearchResult->CheckOutDate; ?>
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
                        <div class="content player <?php echo $star; ?>">
					<div class="row search-card-result ">
						<div class="col-md-3">
						  
							<img class="img-fluid"src="<?php print_r($data1->HotelPicture); ?>" onerror="this.src='public/assets/img/hote.avif'" alt="">
						</div>
						<div class="col-md-6">
							<h5> <?php print_r($data1->HotelName); ?></h5>
							<div class="review">
							 
<?php
$StarRating = $data1->StarRating; 


echo '<div>';
for ($i = 1; $i <= 5; $i++) {
    if ($i <= $StarRating) {
        echo '<span class="fa fa-star checked"></span>';
    }
}
echo '</div>';
?>
							</div>
							<p><i class="fas fa-map-marker-alt"></i> <?php print_r($data1->HotelAddress); ?></p>
						
							<p>
							     <h5>Free cancellation</h5>
                                                        <p>Cancel your booking at any time</p>
							    
								<i class="fa fa-bath"></i>
								<i class="fa fa-phone"></i>
								<i class="fa fa-wifi"></i>
								<i class="fa fa-tv"></i>
							</p>
						</div>
						
						<div class="col-md-3 border-left text-center more-offers" style="border-left: 1px solid #ababab;
    background: #f1f1f1;">
							<h2 style="margin:10px 0px 15px 0px;">
								Top Deal
							</h2>
							<div class="text-warning">

							</div>
							<div class="text-success">
							    <div class="flight-list-grid-price-time__right__price">
                                        <del><h5 style="margin-bottom:10px;">Pub.Rate {{ $Currency_active->currency_symbol}} <?php  $subtotal1= $data1->Price->PublishedPriceRoundedOff;echo round($subtotal1, 2); ?></h5></del>
                                        <h5 style="margin-bottom:10px;">Off.Rate {{ $Currency_active->currency_symbol}} 
                                         <?php $mark_up= \App\Markup_Model::where('name','hotel')->where('status','active')->first();?>
                                 
                                <?php if($mark_up) { 
                                            if($mark_up->markup_type =='fixed'){
                                                $mark_up->markup_amount;
                                                $subtotal= $data1->Price->OfferedPriceRoundedOff + $mark_up->markup_amount;
                                                echo round($subtotal, 2);
                                            }
                                            else {
                                              $percentage = ($mark_up->markup_amount / 100) * $data1->Price->OfferedPriceRoundedOff; 
                                              $subtotal= $data1->Price->OfferedPriceRoundedOff + $percentage;
                                                echo round($subtotal);
                                            //   echo $percentage;
                                            }
                                            } 
                                             else{
                                    $subtotal= $data1->Price->OfferedPriceRoundedOff;
                                                echo round($subtotal);
                                              }   
                                            ?>
                                         </h5>
                                        
                                    </div>
							<?php $room_price = $data1->Price->RoomPrice; ?><?php $room_service_tax = $data1->Price->ServiceTax; ?><?php $room_OtherCharges = $data1->Price->OtherCharges; ?> 
                                                    <?php $total_amount = $room_price + $room_service_tax + $room_OtherCharges?>

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
                                            <input type="hidden" name="adult" value="<?php echo $adult;?>">
                                            <input type="hidden" name="CurrencyCode" value="<?php echo $data1->Price->CurrencyCode;?>">
                                             <div class="flight-list-grid-more-details-book-now__right">
                                                <button class="btn btn-theme-blue px-25 py-10">Room Select</button>
                                            </div> 
                                        </form>
						</div>
					</div>
					
				</div>
				</div>
				 @endforeach
				 
                          @endif
                          <div class="load_more_flight">
                                <a href="#" id="loadMore">Load More</a>
                                <!--<button class="btn btn_md"><i class="fas fa-spinner"></i> Load more..</button>-->
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
    @endif
    <!-- END  TBO  -->


    <!-- REZLIVE  -->
@if(isset($hotels))
    @if(isset($hotels))
                <?php $Total_three = 0; ?>
                <?php $Total_four = 0; ?>
                <?php $Total_five = 0; ?>
                <?php $Total_hotels = 0; ?>
                @foreach($hotels as $hotel)
                           <?php if($hotel['rating']){
                            $Total_hotels++; 
                            } ?>
                           <?php if($hotel['rating'] == '3'){
                            $Total_three++; 
                            } ?>
                            <?php if($hotel['rating'] == '4'){
                            $Total_four++; 
                            } ?>
                            <?php if($hotel['rating'] == '5'){
                            $Total_five++; 
                            } ?>
                @endforeach
    @endif                
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
                    <div class="sec-filter pb-20 mb-40">
                        <div class="sec-filter__left">
                            <h4 class="sec-filter__left__title">
                                Filters
                            </h4>
                            <h6 class="sec-filter__left__content">
                                Showing <span class="fw-bold"></span> results
                            </h6>
                        </div>
                        <div class="sec-filter__right">
                            <h6 class="sec-filter__right__sub-title">
                                Clear all
                            </h6>  
                        </div>
                    </div>
                    <div class="sec-filter-block mb-20">
                        <div class="sec-filter-block__left">
                            <h4 class="sec-filter-block__left__title">
                                Star
                            </h4>
                        </div>
                        <div class="sec-filter-block__right">
                            <h6 class="sec-filter__right__sub-title">
                                Reset
                            </h6>  
                        </div>
                    </div>
                    <div class="row sec-filter-block-options mb-20">
                        <div class="col-md-12 mb-10">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <label class="form-check-label" for="tripOneway">ALL</label>
                                </div>
                                <small>{{count($hotels)}} </small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">    
                                    <input type="checkbox" class="form-check-input" name="star" value="Three" >
                                    <label class="form-check-label" for="tripRoundtrip">3 Star</label>
                                </div>
                                <small><?php if(isset($Total_three)){ echo $Total_three; }?></small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="star" value="Four" >
                                    <label class="form-check-label" for="tripMulticity">4 star</label>
                                </div>
                                <small><?php if(isset($Total_four)){ echo $Total_four; }?></small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="star" value="Five" >
                                    <label class="form-check-label" for="tripMulticity">5 star</label>
                                </div>
                                <small><?php if(isset($Total_five)){ echo $Total_five; }?></small>
                            </div>
                            
                        </div> 
                    </div>
                    <!--<div class="left_side_search_area">-->
                        
                    <!--    <div class="left_side_search_boxed">-->
                    <!--        <div class="left_side_search_heading">-->
                    <!--            <h5>Filter by hotel star</h5>-->
                    <!--        </div>-->
                    <!--        <div class="filter_review">-->
                    <!--            <form class="review_star">-->
                    <!--                <div class="form-check">-->
                                       
                    <!--            <div class="checkbox">-->
                    <!--                <input type="checkbox" class="form-check-input" name="star" value="Three" > <label style="margin-left: 20px;">  3 Star-->
                    <!--             </label>-->
                    <!--            </div>-->
                    <!--            <div class="checkbox">-->
                    <!--                <input type="checkbox" class="form-check-input" name="star" value="Four" > <label style="margin-left: 20px;">  4 Star-->
                    <!--             </label>-->
                    <!--            </div>-->
                    <!--            <div class="checkbox">-->
                    <!--                <input type="checkbox" class="form-check-input" name="star" value="Five" > <label style="margin-left: 20px;">  5 Star-->
                    <!--             </label>-->
                    <!--            </div>-->
                    <!--                </div>-->
                    <!--            </form>-->
                    <!--        </div>-->
                    <!--    </div>-->
                       
                    <!--</div>-->
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
    <style>
        
.search-card-result {
  box-shadow: 0px 1px 4px rgba(41, 51, 57, 0.5);
  margin: 1rem 0;
  padding: 0.5rem 0;
  background-color: #fff;
}
.search-card-result img {
  height: 190px;
  width:100%;
}
.search-card-result h5 {
  font-style: 1.1rem;
  font-weight: 700;
}
.search-card-result p {
  font-size: 0.9rem;
}

.search-card-result .more-offers p {
  margin-bottom: 0.3rem;
}

.more-offers .additional {
  padding-top: 0.2rem;
  font-weight: 700;
}

.fa.checked {
  color: orange;
}

.map-container-btn {
  height: 100px;

  box-shadow: 0px 1px 4px rgba(41, 51, 57, 0.5);
  background-color: wheat;
}

.map-container-btn .btn {
  margin-top: 30px;
}

.filter-card {
  padding: 0;
  background: #fff;
  color: black;
}

.filter-card h5 {
  margin: 10px 0;
  padding: 1rem;

  box-shadow: 0px 1px 4px rgba(41, 51, 57, 0.5);
  color: #000;
}
.filter-card form {
  box-shadow: 0px 1px 4px rgba(41, 51, 57, 0.5);
  padding: 0.5rem 2rem;
}
.map-btn {
  background-color: #fff !important;
}

/* SOCIAL ICONS.CSS */

  .nav .fa {
    margin: 5px 2px;
    padding: 20px;
    
    font-size: 30px;
    text-align: center;
    text-decoration: none;
  }
  
  .fa:hover {
      opacity: 0.7;
  }
  
  .fa-facebook {
    background: #3B5998;
    color: white;
  }
  
  .fa-twitter {
    background: #55ACEE;
    color: white;
  }
  
  .fa-google {
    background: #dd4b39;
    color: white;
  }
  
  .fa-linkedin {
    background: #007bb5;
    color: white;
  }
  
  .fa-youtube {
    background: #bb0000;
    color: white;
  }
  
  .fa-instagram {
    background: #DA4453;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to bottom, #89216B, #DA4453);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to bottom, #89216B, #DA4453); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */    
    color: white;
  }
  
  .fa-pinterest {
    background: #cb2027;
    color: white;
  }
  
  .fa-snapchat-ghost {
    background: #fffc00;
    color: white;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
  }
    </style>
    <div class="col-lg-9">
          @if(isset($hotels))
                <?php //$data = $ress->HotelSearchResult->HotelResults; ?>
                <?php //$NoOfRooms = $ress->HotelSearchResult->NoOfRooms; ?>
                
                <?php //$CheckInDate = $ress->HotelSearchResult->CheckInDate; ?>
                <?php //$CheckOutDate = $ress->HotelSearchResult->CheckOutDate; ?>
                <?php //$TraceId = $ress->HotelSearchResult->TraceId; ?>
                @foreach($hotels as $hotel)
                         <?php 
                                                            if($hotel['rating'] == '1'){
                                                                $star = "One"; 
                                                                }
                                                            elseif($hotel['rating'] == '2'){
                                                                $star = "Two"; 
                                                                }
                                                            elseif($hotel['rating'] == '3'){
                                                                $star = "Three"; 
                                                                } 
                                                            elseif($hotel['rating'] == '4'){
                                                                $star = "Four"; 
                                                                } 
                                                            elseif($hotel['rating'] == '5'){
                                                                $star = "Five"; 
                                                                }     
                                                            else{
                                                               $star = "three";   
                                                            }
                                                             ?> 
                        <div class="content player <?php echo $star; ?>">
					<div class="row search-card-result ">
						<div class="col-md-3">
						  
							<img class="img-fluid"src="{{$hotel['thumbImage']}}" onerror="this.src='public/assets/img/hote.avif'" alt="">
						</div>
						<div class="col-md-6">
							<h5> {{ $hotel['name'] }}</h5>
							<div class="review">
							 
<?php



echo '<div>';
for ($i = 1; $i <= 5; $i++) {
    if ($i <= $hotel['rating']) {
        echo '<span class="fa fa-star checked"></span>';
    }
}
echo '</div>';
?>
							</div>
                          <p><i class="fas fa-map-marker-alt"></i> 
                            <span style="color:orange;cursor: pointer;" id="{{$hotel['id']}}" class="getLocation">{{"View Localion"}}</span>
                          </p>
						
							<p>
							    <h5>Free cancellation</h5>
                                <p>Cancel your booking at any time</p>
								<i class="fa fa-bath"></i>
								<i class="fa fa-phone"></i>
								<i class="fa fa-wifi"></i>
								<i class="fa fa-tv"></i>
							</p>
						</div>
						
						<div class="col-md-3 border-left text-center more-offers" style="border-left: 1px solid #ababab;
    background: #f1f1f1;">
							<h2 style="margin:10px 0px 15px 0px;">
								Top Deal
							</h2>
							<div class="text-warning">

							</div>
							<div class="text-success">
							    <div class="flight-list-grid-price-time__right__price">
                                        <!-- <del><h5 style="margin-bottom:10px;">Pub.Rate 
                                        {{ $Currency_active->currency_symbol}} 
                                        <?php // $subtotal1= $data1->Price->PublishedPriceRoundedOff;echo round($subtotal1, 2); ?></h5></del> -->
                                        <h5 style="margin-bottom:10px;">Off.Rate {{ $Currency_active->currency_symbol ?? ''}}  {{ round($hotel['price'] ,2 )}}
                                         <?php $mark_up= \App\Markup_Model::where('name','hotel')->where('status','active')->first();?>
                                 
                                <?php if($mark_up) { 
                                            if($mark_up->markup_type =='fixed'){
                                                // $mark_up->markup_amount;
                                                // $subtotal= $data1->Price->OfferedPriceRoundedOff + $mark_up->markup_amount;
                                                // echo round($subtotal, 2);
                                            }
                                            else {
                                            //   $percentage = ($mark_up->markup_amount / 100) * $data1->Price->OfferedPriceRoundedOff; 
                                            //   $subtotal= $data1->Price->OfferedPriceRoundedOff + $percentage;
                                            //     echo round($subtotal);
                                            //   echo $percentage;
                                            }
                                            } 
                                             else{
                                    // $subtotal= $data1->Price->OfferedPriceRoundedOff;
                                    //             echo round($subtotal);
                                              }   
                                            ?>
                                         </h5>
                                        
                                    </div>
							<?php //$room_price = $data1->Price->RoomPrice; ?>
                            <?php //$room_service_tax = $data1->Price->ServiceTax; ?>
                            <?php //$room_OtherCharges = $data1->Price->OtherCharges; ?> 
                            <?php //$total_amount = $room_price + $room_service_tax + $room_OtherCharges?>

						 <form action="{{url('/room_information')}}" enctype="multipart/form-data" method="post">
                                                      @csrf
                                            <input type="hidden" name="StarRating" value="<?php //echo $data1->StarRating;?>">
                                            <input type="hidden" name="Hotelname" value="<?php //echo $data1->HotelName;?>">
                                            <input type="hidden" name="Hoteladdress" value="<?php //echo  $data1->HotelAddress;?>">
                                            <input type="hidden" name="ResultIndex" value="<?php //echo $data1->ResultIndex;?>"> 
                                            <input type="hidden" name="TraceId" value="<?php //echo $TraceId?>">
                                            <input type="hidden" name="token_id" value="<?php //echo $token_id; ?>">
                                            <input type="hidden" name="EndUserIp" value="192.168.11.120">
                                            <input type="hidden" name="HotelCode" value="<?php //echo $data1->HotelCode;?>">
                                            <input type="hidden" name="total_amount" value="<?php //echo $total_amount;?>">
                                            <input type="hidden" name="adult" value="<?php //echo $adult;?>">
                                            <input type="hidden" name="CurrencyCode" value="<?php //echo $data1->Price->CurrencyCode;?>">

                                            <input type="hidden" name="hotelId" value="{{$hotel['id']}}">
                                            <input type="hidden" name="sessionId" value="{{$sessionId}}">
                                            <input type="hidden" name="travellers" value="{{$jsonData}}">

                                            @php
                                            $rooms = json_encode($hotel['room']);
                                            @endphp
                                            <input type="hidden" name="room" value="{{$rooms}}">
                                            <div class="flight-list-grid-more-details-book-now__right">
                                            <button class="btn btn-theme-blue px-25 py-10">Room Select</button>
                                            </div> 
                                        </form>
						</div>
					</div>
					
				</div>
				</div>
				 @endforeach
				 
        @endif
                          <div class="load_more_flight">
                                <a href="#" id="loadMore">Load More</a>
                                <!--<button class="btn btn_md"><i class="fas fa-spinner"></i> Load more..</button>-->
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
@endif       
    <!-- END  REZLIVE  -->
    <!-- Footer  -->
  @include('auth.cust_footer')
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
          
          
          $(document).on('click mouseenter','.getLocation', function(){
            
            	var id = $(this).attr('id');
            
            	if($(`#${id}`).hasClass('location-fetched') === false)
                {
                  
                  $.ajax({
                  url: "/hotel-location",
                  type: "POST",
                  data: {
                      hotelId: id,
                      _token: '{{csrf_token()}}'
                  },
                  beforeSend: function() {
                      $(`#${id}`).text("Processing....");
                  },
                  success: function (result) {
                      $(`#${id}`).text(result);
                      $(`#${id}`).addClass('location-fetched');
                  },
          			});
                }
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