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
                        <h2>Visa search result</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span> Visa</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Form Area -->
   @include('flight.flight_search_form')
<?php $Currency_active =\App\Currency_Model::where('currency_active','0')->first(); ?>
    <!-- Flight Search Areas -->
    <section id="explore_area" class="section_padding">
        <div class="container">
            <!-- Section Heading -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>Visa found</h2>
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
                                    <input class="form-check-input" type="checkbox" name="travelstops" id="travelstopsany" value="Any" checked="">
                                    <label class="form-check-label" for="tripOneway">Any</label>
                                </div>
                                <small></small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">    
                                    <input type="checkbox" class="form-check-input" name="star" value="Three" >
                                    <label class="form-check-label" for="tripRoundtrip">3 Star</label>
                                </div>
                                <small>0</small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="star" value="Four" >
                                    <label class="form-check-label" for="tripMulticity">4 star</label>
                                </div>
                                <small>0</small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="star" value="Five" >
                                    <label class="form-check-label" for="tripMulticity">5 star</label>
                                </div>
                                <small>0</small>
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
         
 @foreach($flight as $tour_list)
					<div class="row search-card-result">
						<div class="col-md-3">
						  
							<img class="img-fluid"src="https://elw.flightpathtravel.com/public/images/27392.png" onerror="this.src='public/assets/img/hote.avif'" alt="">
						</div>
						<div class="col-md-6">
							<h5 style="margin-bottom:10px;"> {{$tour_list->visa_name}} <span>{{$tour_list->duration}} days </span></h5>
							  
							<div class="review">
							 
 <h5 style="margin-bottom:10px;">Excellent</h5>
                            <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
							</div>
							 <h5 style="margin-bottom:10px;">Visa Type : {{$tour_list->visa_type}}</h5>
						
						
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
                                       <h3>{{ $Currency_active->currency_symbol}} <?php  $subtotal= $tour_list->amount / $Currency_active->currency_rates ;echo round($subtotal, 2); ?>	<sub>/Per person</sub></h3>
                                                    </div>
						  <div class="cruise_content_bottom_right" style="margin-top:10px;">
                                                        <a href="{{url('/visa-detail'.$tour_list->id)}}" class="btn btn_theme btn_md">View details</a>
                                                     </div>
						
						</div>
					</div>
					
				</div>
				 @endforeach
                         
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

            var objectarray = document.getElementById("first_field3").value;

            if (objectarray == '1') {

                document.getElementById(

                    "second-field3").value = "All"

            }

            if (objectarray == '2') {

                document.getElementById(

                    "second-field3").value = "Economy"

            }

            if (objectarray == '3') {

                document.getElementById(

                    "second-field3").value = "Premium Economy"

            }

            if (objectarray == '4') {

                document.getElementById(

                    "second-field3").value = "Business"

            } if (objectarray == '5') {

                document.getElementById(

                    "second-field3").value = "PremiumBusiness"

            }

            if (objectarray == '6') {

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

            var objectarray = document.getElementById("first_field31").value;

            if (objectarray == '1') {

                document.getElementById(

                    "second-field31").value = "All"

            }

            if (objectarray == '2') {

                document.getElementById(

                    "second-field31").value = "Economy"

            }

            if (objectarray == '31') {

                document.getElementById(

                    "second-field31").value = "Premium Economy"

            }

            if (objectarray == '4') {

                document.getElementById(

                    "second-field31").value = "Business"

            } if (objectarray == '5') {

                document.getElementById(

                    "second-field31").value = "PremiumBusiness"

            }

            if (objectarray == '6') {

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

            var objectarray = document.getElementById("first_field004").value;

            if (objectarray == '1') {

                document.getElementById(

                    "second-field004").value = "All"

            }

            if (objectarray == '2') {

                document.getElementById(

                    "second-field004").value = "Economy"

            }

            if (objectarray == '31') {

                document.getElementById(

                    "second-field004").value = "Premium Economy"

            }

            if (objectarray == '4') {

                document.getElementById(

                    "second-field004").value = "Business"

            } if (objectarray == '5') {

                document.getElementById(

                    "second-field004").value = "PremiumBusiness"

            }

            if (objectarray == '6') {

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
document.addEventListener('DOMContentLoaded', function() {
    // Set default selection to "Economy" if it's not already set
    var display = document.getElementById('classDisplay');
    if (!display.value.trim()) {
        display.value = 'Economy'; // Default selection
    }

    // Get all the dropdown items
    var items = document.querySelectorAll('.dropdown-item11');

    // Add click event listener to each item
    items.forEach(function(item) {
        item.addEventListener('click', function() {
            // Update the input value with the clicked item's text
            display.value = this.textContent;
        });
    });
});
</script>

    <script>



        function updateFields0004(first_field31) {

            var objectarray = document.getElementById("first_field0004").value;

            if (objectarray == '1') {

                document.getElementById(

                    "second-field0004").value = "All"

            }

            if (objectarray == '2') {

                document.getElementById(

                    "second-field0004").value = "Economy"

            }

            if (objectarray == '31') {

                document.getElementById(

                    "second-field0004").value = "Premium Economy"

            }

            if (objectarray == '4') {

                document.getElementById(

                    "second-field0004").value = "Business"

            } if (objectarray == '5') {

                document.getElementById(

                    "second-field0004").value = "PremiumBusiness"

            }

            if (objectarray == '6') {

                document.getElementById(

                    "second-field0004").value = "First Class"

            }

        }

    </script>

    <script>

        // const d = new Date();

        // let text = d.toLocaleString();

        // document.getElementById("demo").innerHTML = text;

    </script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
    var dateInput = document.getElementById('demo7');
    var dateDisplay = document.getElementById('hoteldaete1');
    
    function formatDate(dateString) {
        // Create a Date object from the input value
        var date = new Date(dateString);
        
        // Array of month names
        const monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"];

        // Get the day, month, and year
        var day = date.getDate();
        var monthIndex = date.getMonth();
        var year = date.getFullYear();

        // Format the date string as "day-month-year"
        return day + '-' + monthNames[monthIndex] + '-' + year;
    }
    // Function to format date as you prefer, for simplicity, using the input's raw value
    
     function updateDateDisplay(date) {
        // Format the date string
        var formattedDate = formatDate(date);
        
        // Update the display with the formatted date
        dateDisplay.textContent = formattedDate;
    }


    // Initial update in case there's already a date set (e.g., by server-side PHP)
    updateDateDisplay(dateInput.value);

    // Update display whenever the input changes
    dateInput.addEventListener('input', function() {
        updateDateDisplay(this.value);
    });
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var dateInput = document.getElementById('demo8');
    var dateDisplay = document.getElementById('hoteldaete2');

    // Function to format date as "day-month-year"
    function formatDate(dateString) {
        // Create a Date object from the input value
        var date = new Date(dateString);
        
        // Array of month names
        const monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"];

        // Get the day, month, and year
        var day = date.getDate();
        var monthIndex = date.getMonth();
        var year = date.getFullYear();

        // Format the date string as "day-month-year"
        return day + '-' + monthNames[monthIndex] + '-' + year;
    }

    // Function to update the date display
    function updateDateDisplay(date) {
        // Format the date string
        var formattedDate = formatDate(date);
        
        // Update the display with the formatted date
        dateDisplay.textContent = formattedDate;
    }

    // Initial update in case there's already a date set (e.g., by server-side PHP)
    updateDateDisplay(dateInput.value);

    // Update display whenever the input changes
    dateInput.addEventListener('input', function() {
        updateDateDisplay(this.value);
    });
});

</script>


    <script>
document.addEventListener('DOMContentLoaded', function () {
    var dateInput = document.getElementById('demo11');
    var dateDisplay = document.getElementById('dateDisplay');

  // Function to format date as "day-month-year"
    function formatDate(dateString) {
        // Create a Date object from the input value
        var date = new Date(dateString);
        
        // Array of month names
        const monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"];

        // Get the day, month, and year
        var day = date.getDate();
        var monthIndex = date.getMonth();
        var year = date.getFullYear();

        // Format the date string as "day-month-year"
        return day + '-' + monthNames[monthIndex] + '-' + year;
    }

    // Function to update the date display
    function updateDateDisplay(date) {
        // Format the date string
        var formattedDate = formatDate(date);
        
        // Update the display with the formatted date
        dateDisplay.textContent = formattedDate;
    }
    // Initial update in case there's already a date set (e.g., by server-side PHP)
    updateDateDisplay(dateInput.value);

    // Update display whenever the input changes
    dateInput.addEventListener('input', function() {
        updateDateDisplay(this.value);
    });
});
</script>
  <script>
document.addEventListener('DOMContentLoaded', function () {
    var dateInput = document.getElementById('demo1');
    var dateDisplay = document.getElementById('dateDisplay');

   // Function to format date as "day-month-year"
    function formatDate(dateString) {
        // Create a Date object from the input value
        var date = new Date(dateString);
        
        // Array of month names
        const monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"];

        // Get the day, month, and year
        var day = date.getDate();
        var monthIndex = date.getMonth();
        var year = date.getFullYear();

        // Format the date string as "day-month-year"
        return day + '-' + monthNames[monthIndex] + '-' + year;
    }

    // Function to update the date display
    function updateDateDisplay(date) {
        // Format the date string
        var formattedDate = formatDate(date);
        
        // Update the display with the formatted date
        dateDisplay.textContent = formattedDate;
    }

    // Initial update in case there's already a date set (e.g., by server-side PHP)
    updateDateDisplay(dateInput.value);

    // Update display whenever the input changes
    dateInput.addEventListener('input', function() {
        updateDateDisplay(this.value);
    });
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var radioButtons = document.querySelectorAll('input[type="radio"][name="flighttrip"]');
    var returnDetailDiv = document.getElementById('returnDetail');
    var returnDateParagraph = document.getElementById('returnDate');
    var flightDetailsRow = document.querySelector('.rowone');
 
    function toggleReturnDetail() {
        if (document.getElementById('tripOneway').checked || document.getElementById('tripMulticity').checked) {
            returnDetailDiv.classList.add('hidden');
             flightDetailsRow.style.gridTemplateColumns = "1fr 1fr";
        } else {
            returnDetailDiv.classList.remove('hidden');
             flightDetailsRow.style.gridTemplateColumns = "1fr 1fr 1fr";
        }
    }

  function formatDate(dateString) {
        // Create a Date object from the input value
        var date = new Date(dateString);
        
        // Array of month names
        const monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"];

        // Get the day, month, and year
        var day = date.getDate();
        var monthIndex = date.getMonth();
        var year = date.getFullYear();

        // Format the date string as "day-month-year"
        return day + '-' + monthNames[monthIndex] + '-' + year;
    }

    // Function to check the selection and show/hide the return detail paragraph accordingly


    // Initial check in case the default selection needs to hide the return detail
    toggleReturnDetail();

    // Add change event listener to each radio button to handle the selection change
    radioButtons.forEach(function (radio) {
        radio.addEventListener('change', toggleReturnDetail);
    });

    // Assuming you have a date input element (for date selection), and you want to display its value
    var dateInput = document.getElementById('demo3'); // Ensure this ID matches your date input element

    // function updateDateDisplay(date) {
    //     returnDetailParagraph.textContent = date; // Update the paragraph text
    // }

 function updateDateDisplay(date) {
        // Format the date string
        var formattedDate = formatDate(date);
        
        // Update the display with the formatted date
         returnDate.textContent = formattedDate;
    }

    // Check if dateInput exists before adding event listener to prevent errors
    if (dateInput) {
        updateDateDisplay(dateInput.value); // Initial update

        dateInput.addEventListener('input', function() {
            updateDateDisplay(this.value); // Update on input change
        });
    }
});

</script>
 <script>
document.addEventListener('DOMContentLoaded', function () {
    var dateInput = document.getElementById('demo2');
    var dateDisplay = document.getElementById('dateDisplay');

    // Function to format date as you prefer, for simplicity, using the input's raw value
   // Function to format date as "day-month-year"
    function formatDate(dateString) {
        // Create a Date object from the input value
        var date = new Date(dateString);
        
        // Array of month names
        const monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"];

        // Get the day, month, and year
        var day = date.getDate();
        var monthIndex = date.getMonth();
        var year = date.getFullYear();

        // Format the date string as "day-month-year"
        return day + '-' + monthNames[monthIndex] + '-' + year;
    }

    // Function to update the date display
    function updateDateDisplay(date) {
        // Format the date string
        var formattedDate = formatDate(date);
        
        // Update the display with the formatted date
        dateDisplay.textContent = formattedDate;
    }
    // Initial update in case there's already a date set (e.g., by server-side PHP)
    updateDateDisplay(dateInput.value);

    // Update display whenever the input changes
    dateInput.addEventListener('input', function() {
        updateDateDisplay(this.value);
    });
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var input = document.getElementById('to');
    var options1 = document.querySelectorAll('.option1');
    var display = document.getElementById('todisplay');
    
    input.addEventListener('input', function() {
        var filter = input.value.toUpperCase();
        options1.forEach(function(option) {
            var textValue = option.textContent || option.innerText;
            if (textValue.toUpperCase().indexOf(filter) > -1) {
                option.style.display = "";
            } else {
                option.style.display = "none";
            }
        });
    });
    
    options1.forEach(function(option) {
        option.addEventListener('click', function() {
            display.textContent = option.textContent;
        });
    });
});
</script>
 
<script>
document.addEventListener('DOMContentLoaded', function () {
    var input = document.getElementById('from');
    var options2 = document.querySelectorAll('.option');
    var display = document.getElementById('fromdisplay');
    
    input.addEventListener('input', function() {
        var filter = input.value.toUpperCase();
        options2.forEach(function(option) {
            var textValue = option.textContent || option.innerText;
            if (textValue.toUpperCase().indexOf(filter) > -1) {
                option.style.display = "";
            } else {
                option.style.display = "none";
            }
        });
    });
    
    options2.forEach(function(option) {
        option.addEventListener('click', function() {
            display.textContent = option.textContent;
        });
    });
});
</script>


<script>
document.addEventListener('DOMContentLoaded', function () {
    var input = document.getElementById('to1');
    var options3 = document.querySelectorAll('.option3');
    var display = document.getElementById('todisplay');
    
    input.addEventListener('input', function() {
        var filter = input.value.toUpperCase();
        options3.forEach(function(option) {
            var textValue = option.textContent || option.innerText;
            if (textValue.toUpperCase().indexOf(filter) > -1) {
                option.style.display = "";
            } else {
                option.style.display = "none";
            }
        });
    });
    
    options3.forEach(function(option) {
        option.addEventListener('click', function() {
            display.textContent = option.textContent;
        });
    });
});
</script>
 
<script>
document.addEventListener('DOMContentLoaded', function () {
    var input = document.getElementById('from1');
    var options4 = document.querySelectorAll('.option2');
    var display = document.getElementById('fromdisplay');
    
    input.addEventListener('input', function() {
        var filter = input.value.toUpperCase();
        options4.forEach(function(option) {
            var textValue = option.textContent || option.innerText;
            if (textValue.toUpperCase().indexOf(filter) > -1) {
                option.style.display = "";
            } else {
                option.style.display = "none";
            }
        });
    });
    
    options4.forEach(function(option) {
        option.addEventListener('click', function() {
            display.textContent = option.textContent;
        });
    });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var input = document.getElementById('to5');
    var options5 = document.querySelectorAll('.option5');
    var display = document.getElementById('todisplay');
    
    input.addEventListener('input', function() {
        var filter = input.value.toUpperCase();
        options5.forEach(function(option) {
            var textValue = option.textContent || option.innerText;
            if (textValue.toUpperCase().indexOf(filter) > -1) {
                option.style.display = "";
            } else {
                option.style.display = "none";
            }
        });
    });
    
    options5.forEach(function(option) {
        option.addEventListener('click', function() {
            display.textContent = option.textContent;
        });
    });
});
</script>
 
<script>
document.addEventListener('DOMContentLoaded', function () {
    var input = document.getElementById('from5');
    var options6 = document.querySelectorAll('.option4');
    var display = document.getElementById('fromdisplay');
    
    input.addEventListener('input', function() {
        var filter = input.value.toUpperCase();
        options6.forEach(function(option) {
            var textValue = option.textContent || option.innerText;
            if (textValue.toUpperCase().indexOf(filter) > -1) {
                option.style.display = "";
            } else {
                option.style.display = "none";
            }
        });
    });
    
    options6.forEach(function(option) {
        option.addEventListener('click', function() {
            display.textContent = option.textContent;
        });
    });
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var input = document.querySelector('.hoteldate1');
    var options = document.querySelectorAll('.option8');
    var cityNameInput = document.querySelector('.hoteldate2');
    var cityDisplay = document.getElementById('cityDisplay');

    input.addEventListener('input', function() {
        var filter = input.value.toUpperCase();
        options.forEach(function(option) {
            var textValue = option.textContent || option.innerText;
            if (textValue.toUpperCase().indexOf(filter) > -1) {
                option.style.display = "";
            } else {
                option.style.display = "none";
            }
        });
    });

    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('option8')) {
            var selectedOption = event.target;
            cityNameInput.value = selectedOption.getAttribute('data-value');
            input.value = selectedOption.textContent.match(/^[^\(]+/)[0].trim();
            cityDisplay.textContent = selectedOption.textContent;
        }
    });
});
</script>
     <script>

        // const d = new Date();

        // let text = d.toLocaleString();

        // document.getElementById("demo1").innerHTML = text;

    </script>
     <script>

        // const d = new Date();

        // let text = d.toLocaleString();

        // document.getElementById("demo2").innerHTML = text;

    </script>

    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->

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

                            $("#state-dropdown").append('<option value="">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

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

                            $("#state-dropdown1").append('<option value="">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

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

                            $("#state-dropdown12").append('<option value="">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

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

                            $("#state-dropdown112").append('<option value="">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

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

                            $("#state-dropdown_1").append('<option value="">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

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

                            $("#state-dropdown_2").append('<option value="">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

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

                            $("#state-dropdown_3").append('<option value="">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

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

                            $("#state-dropdown_4").append('<option value="">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

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

            $('.from').on('keyup', function () {

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

                            $("#ShowDataList1").append('<option value="' + value.AIRPORTCODE + '">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

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

            $('.to').on('keyup', function () {

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

                            $("#ShowDataList2").append('<option value="' + value.AIRPORTCODE + '">' + value.AIRPORTCODE + ',' + value.AIRPORTNAME + ',' + value.CITYNAME + ',' + value.COUNTRYCODE + '</option>');

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

            $('.city_id').on('keyup', function () {

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

                            $("#city_id").append('<input type="hidden" name="Destination" value="' + value.city_id + '">');

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

            $('.dateget').on('keyup', function () {

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

        $(function () {

            var dtToday = new Date();



            var month = dtToday.getMonth() + 1;

            var day = dtToday.getDate();

            var year = dtToday.getFullYear();

            if (month < 10)

                month = '0' + month.toString();

            if (day < 10)

                day = '0' + day.toString();



            var minDate = year + '-' + month + '-' + day;



            $('.txtDate').attr('min', minDate);

        });

    </script>
<script>
        function selectRefresh() {
            $('.select-from').select2({ placeholder: "Where from?" });
            $('.select-to').select2({ placeholder: "Where to?" });
            $('.select-destination').select2({ placeholder: "What is your destination?" });
            $('.select-tours').select2({ placeholder: "Tour Type" });
            $('.select-days').select2({ placeholder: "Days" });
            $('.select-country').select2({ placeholder: "Select Country" });
            $('.select-visa-type').select2({ placeholder: "Visa Type" });
        }

        $("#btnAddNewFlight").on('click', function () {
            $(".parentNewFlightRows").append(`
            <div class="row child-flight-row childFlightRow">
                <div class="col-lg-4 mb-20 mb-md-10">
                
                 <div class="custom-select-wrapper">
                                            <input type="text" class="form-control select-input6" name="from[]" id="" placeholder="Select an option">
                                              <?php $filterResult =\App\Airport_Model::get(); ?>
                                            <ul class="list-unstyled select-options6">
                                                
                                                  @foreach($filterResult as $state_)
                                                    <li class="option6" data-value="{{ $state_->AIRPORTCODE }}">{{ $state_->AIRPORTCODE }} - {{ $state_->AIRPORTNAME }} - {{ $state_->CITYNAME }} ({{ $state_->COUNTRYCODE }})</li>
                                                @endforeach
                                            </ul>
                                        </div>
                  
                </div>
                <div class="col-lg-auto mb-20 mb-md-10 d-flex justify-content-center">
                    <button class="btn btn-interchange px-10 py-10">
                        <i class="fas fa-exchange-alt" style="font-size: 25px;"></i>
                    </button>
                </div>
                <div class="col-lg-4 mb-20 mb-md-10">
                <div class="custom-select-wrapper">
                                            <input type="text" class="form-control select-input7" name="to[]" id="" placeholder="Select an option">
                                              <?php $filterResult =\App\Airport_Model::get(); ?>
                                            <ul class="list-unstyled select-options7">
                                                
                                                  @foreach($filterResult as $state_)
                                                    <li class="option7" data-value="{{ $state_->AIRPORTCODE }}">{{ $state_->AIRPORTCODE }} - {{ $state_->AIRPORTNAME }} - {{ $state_->CITYNAME }} ({{ $state_->COUNTRYCODE }})</li>
                                                @endforeach
                                            </ul>
                                        </div>
                  
                </div>
                <div class="col-lg mb-20 mb-md-10">
                    <input type="date" value="<?php echo date('Y-m-d'); ?>" id="demo"
                        name="journey_date[]" class="txtDate form-control" required>
                </div>
                <div class="col-lg-auto mb-20 mb-md-10">
                    <button type="submit"
                        class="btn btn-th-outline-danger btnRemove py-10 px-20"><i
                            class="fas fa-times"></i></button>
                </div>
            </div>
            `);
            selectRefresh();
            $(".btnRemove").css("opacity","1");   
        });

        $(".date-box").on('click', function () {
            $(this).next().hide();
            $(this).attr("type", "date");
        });

        $(document).on('click',".btnRemove", function(){
            var getChildFlightRowCount = $(".parentNewFlightRows").find(".childFlightRow").length;
            if(getChildFlightRowCount > 1) {
                $(this).closest(".childFlightRow").remove();    
                if(getChildFlightRowCount == 2) {
                    $(".btnRemove").css("opacity","0.5");    
                }
            }
        });


        $(document).ready(function () {

            selectRefresh();

            var getFlightTripRadioButtonValue = $('input[type=radio][name=flighttrip]:checked').val();

            if (getFlightTripRadioButtonValue == "One Way") {
                $(".onChangeOneWay").css("display", "flex");
                $(".onChangeRoundTrip").css("display", "none");
                $(".onChangeMultiCity").css("display", "none");
            } else if (getFlightTripRadioButtonValue == "Round Trip") {
                $(".onChangeRoundTrip").css("display", "flex");
                $(".onChangeOneWay").css("display", "none");
                $(".onChangeMultiCity").css("display", "none");
            } else {
                $(".onChangeMultiCity").css("display", "flex");
                $(".onChangeOneWay").css("display", "none");
                $(".onChangeRoundTrip").css("display", "none");
            }

            $('input[type=radio][name=flighttrip]').change(function () {
                if (this.id == "tripOneway") {
                    $(".onChangeOneWay").css("display", "flex");
                    $(".onChangeRoundTrip").css("display", "none");
                    $(".onChangeMultiCity").css("display", "none");
                } else if (this.id == "tripRoundtrip") {
                    $(".onChangeRoundTrip").css("display", "flex");
                    $(".onChangeOneWay").css("display", "none");
                    $(".onChangeMultiCity").css("display", "none");
                } else {
                    $(".onChangeMultiCity").css("display", "flex");
                    $(".onChangeOneWay").css("display", "none");
                    $(".onChangeRoundTrip").css("display", "none");
                }
            });
        });
    </script>
    <script>
 $('input[type="text"]').on('keydown, keyup', function () {
  var productNameInput = $('input[name="adult"]').val();
    var productBrandField = $('input[name="adult"]');
    var productBrandValue = productBrandField.val(productNameInput);
    console.log(productNameInput);
    console.log(productBrandValue.val());
 
});

$('input[type="text"]').on('keydown, keyup', function () {
  var productNameInput = $('input[name="child"]').val();
    var productBrandField = $('input[name="children"]');
    var productBrandValue = productBrandField.val(productNameInput);
    console.log(productNameInput);
    console.log(productBrandValue.val());
 
});
</script>
 <script>
 $('input[type="number"]').on('keydown, keyup', function () {
  var productNameInput = $('input[name="adult12"]').val();
    var productBrandField = $('input[name="adult"]');
    var productBrandValue = productBrandField.val(productNameInput);
    console.log(productNameInput);
    console.log(productBrandValue.val());
 
});

$('input[type="number"]').on('keydown, keyup', function () {
  var productNameInput = $('input[name="child12"]').val();
    var productBrandField = $('input[name="children"]');
    var productBrandValue = productBrandField.val(productNameInput);
    console.log(productNameInput);
    console.log(productBrandValue.val());
 
});

$(function(){
    var select = $('#select_from');
    var selected = $('#selected_from');

    select.on('change', function(){
        var selectedOptionText = $(this).children(':selected').text();
        
        selected.text(selectedOptionText + '');
    });
});
$(function(){
    var select = $('#select_to');
    var selected = $('#selected_to');

    select.on('change', function(){
        var selectedOptionText = $(this).children(':selected').text();
        
        selected.text(selectedOptionText + '');
    });
});

console.log($('.datePicker').html($('.getDate').val()))
console.log($('.getadult').html($('.getadult_data').val()))
</script>
<script>
   
        // $(document).ready(function () {
  
        //     /*------------------------------------------
        //     --------------------------------------------
        //     Country Dropdown Change Event
        //     --------------------------------------------
        //     --------------------------------------------*/
        //     $('#country-dropdown').on('change', function () {
        //         var idCountry = this.value;
        //       $.ajax({
        //             url: "{{url('/currency-change')}}",
        //             type: "POST",
        //             data: {
        //                 country_id: idCountry,
        //                 _token: '{{csrf_token()}}'
        //             },
        //             dataType: 'json',
        //             success: function (result) {
        //                 location.reload();
        //             //     $('#state-dropdown').html('<option value="">-- Select State --</option>');
        //             //     $.each(result.states, function (key, value) {
        //             //         $("#state-dropdown").append('<option value="' + value
        //             //             .id + '">' + value.name + '</option>');
        //             //     });
        //             }
        //         });
        //     });
        // });
    </script> 
    
      <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
    <!-- Include Select2 JS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input').on('click', function(event) {
        $('.select-options').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options').hide();
    });

    // Handle option selection
    $('.select-options').on('click', '.option', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option:visible').length === 0) {
            $('.option').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>

<script>
$(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options1');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option1" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input1').on('click', function(event) {
        $('.select-options1').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options1').hide();
    });

    // Handle option selection
    $('.select-options1').on('click', '.option1', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input1').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options1').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input1').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option1').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option1').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option1:visible').length === 0) {
            $('.option1').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>



<script>
$(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options2');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option2" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input2').on('click', function(event) {
        $('.select-options2').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options2').hide();
    });

    // Handle option selection
    $('.select-options2').on('click', '.option2', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input2').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options2').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input2').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option2').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option2').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option2:visible').length === 0) {
            $('.option2').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
$(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options3');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option3" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input3').on('click', function(event) {
        $('.select-options3').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options3').hide();
    });

    // Handle option selection
    $('.select-options3').on('click', '.option3', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input3').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options3').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input3').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option3').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option3').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option3:visible').length === 0) {
            $('.option3').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>

<script>
$(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options4');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option4" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input4').on('click', function(event) {
        $('.select-options4').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options4').hide();
    });

    // Handle option selection
    $('.select-options4').on('click', '.option4', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input4').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options4').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input4').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option4').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option4').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option4:visible').length === 0) {
            $('.option4').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
$(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options5');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option5" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input5').on('click', function(event) {
        $('.select-options5').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options5').hide();
    });

    // Handle option selection
    $('.select-options5').on('click', '.option5', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input5').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options5').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input5').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option5').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option5').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option5:visible').length === 0) {
            $('.option5').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
$(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options6');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option6" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input6').on('click', function(event) {
        $('.select-options6').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options6').hide();
    });

    // Handle option selection
    $('.select-options6').on('click', '.option6', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input6').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options6').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input6').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option6').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option6').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option6:visible').length === 0) {
            $('.option6').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
   $(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options11');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option11" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input11').on('click', function(event) {
        $('.select-options11').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options11').hide();
    });

    // Handle option selection
    $('.select-options11').on('click', '.option11', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input11').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options11').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input11').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option11').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option11').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option11:visible').length === 0) {
            $('.option11').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
   $(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options12');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option12" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input12').on('click', function(event) {
        $('.select-options12').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options12').hide();
    });

    // Handle option selection
    $('.select-options12').on('click', '.option12', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input12').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options12').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input12').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option12').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option12').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option12:visible').length === 0) {
            $('.option12').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
   $(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options13');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option13" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input13').on('click', function(event) {
        $('.select-options13').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options13').hide();
    });

    // Handle option selection
    $('.select-options13').on('click', '.option13', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input13').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options13').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input13').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option13').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option13').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option13:visible').length === 0) {
            $('.option13').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
   $(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options14');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option14" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input14').on('click', function(event) {
        $('.select-options14').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options14').hide();
    });

    // Handle option selection
    $('.select-options14').on('click', '.option14', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input14').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options14').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input14').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option14').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option14').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option14:visible').length === 0) {
            $('.option14').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
   $(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options15');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option15" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input15').on('click', function(event) {
        $('.select-options15').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options15').hide();
    });

    // Handle option selection
    $('.select-options15').on('click', '.option15', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input15').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options15').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input15').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option15').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option15').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option15:visible').length === 0) {
            $('.option15').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
   $(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options16');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option16" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input16').on('click', function(event) {
        $('.select-options16').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options16').hide();
    });

    // Handle option selection
    $('.select-options16').on('click', '.option16', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input16').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options16').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input16').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option16').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option16').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option16:visible').length === 0) {
            $('.option16').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
   $(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options17');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option17" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input17').on('click', function(event) {
        $('.select-options17').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options17').hide();
    });

    // Handle option selection
    $('.select-options17').on('click', '.option17', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input17').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options17').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input17').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option17').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option17').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option17:visible').length === 0) {
            $('.option17').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
   $(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options18');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option18" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input18').on('click', function(event) {
        $('.select-options18').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options18').hide();
    });

    // Handle option selection
    $('.select-options18').on('click', '.option18', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input18').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options18').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input18').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option18').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option18').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option18:visible').length === 0) {
            $('.option18').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
$(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options7');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option7" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input7').on('click', function(event) {
        $('.select-options7').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options7').hide();
    });

    // Handle option selection
    $('.select-options7').on('click', '.option7', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input7').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options7').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input7').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option7').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option7').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option7:visible').length === 0) {
            $('.option7').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
<script>
$(document).ready(function() {
    $('#hoteldate').on('input', function() {
        var searchText = $(this).val();
        $.ajax({
            url: '/search-cities', // Backend URL that returns filtered cities
            type: 'GET',
            data: { query: searchText },
            success: function(data) {
                var selectOptions = $('#city_list');
                selectOptions.empty(); // Clear existing options

                data.forEach(function(item) {
                    selectOptions.append($('<li class="option8" data-value="' + item.name + '">')
                        .text(item.name + ' -' + item.CountryName + ''));
                });
            }
        });
    });

    $('#city_list').on('click', 'li', function() {
        var selectedText = $(this).text();
        var selectedValue = $(this).attr('data-value');
        $('#hoteldate').val(selectedText); // Display the selected text in the input
        $('#city_name').val(selectedValue); // Store the data-value in the hidden input
        $('#city_list').hide(); // Hide the list after selection
    });

    // Additional code to manage showing and hiding the list
    $('#hoteldate').on('focus', function() {
        $('#city_list').show();
    });

    $(document).on('click', function(e) {
        if (!$(e.target).closest('.custom-select-wrapper').length) {
            $('#city_list').hide();
        }
    });
});

</script>
<script>
   $(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options9');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option9" data-value="' + option.name + '">' +
                            option.name +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input9').on('click', function(event) {
        $('.select-options9').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options9').hide();
    });

    // Handle option selection
    $('.select-options9').on('click', '.option9', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input9').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options9').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input9').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option9').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option9').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option9:visible').length === 0) {
            $('.option9').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
   $(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options10');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option10" data-value="' + option.name + '">' +
                            option.name +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input10').on('click', function(event) {
        $('.select-options10').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options10').hide();
    });

    // Handle option selection
    $('.select-options10').on('click', '.option10', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input10').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options10').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input10').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option10').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option10').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option10:visible').length === 0) {
            $('.option10').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
$(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options9');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option9" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input9').on('click', function(event) {
        $('.select-options9').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options9').hide();
    });

    // Handle option selection
    $('.select-options9').on('click', '.option9', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input9').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options9').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input9').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option9').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option9').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option9:visible').length === 0) {
            $('.option9').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
<script>
$(document).ready(function() {
    // Fetch data from Laravel backend and initialize select options
    $.ajax({
        url: '/fetch-airport-data',
        type: 'GET',
        success: function(data) {
            console.log("Raw data received:", data); // Log raw data for debugging
            var selectOptions = $('.select-options10');
            if (Array.isArray(data)) {
                data.forEach(function(option) {
                    if (option && option.AIRPORTCODE && option.AIRPORTNAME) {
                        selectOptions.append('<li class="option10" data-value="' + option.AIRPORTCODE + '">' +
                            option.AIRPORTCODE + ' - ' + option.AIRPORTNAME + ' - ' + option.CITYNAME + ' (' + option.COUNTRYCODE + ')' +
                            '</li>');
                    } else {
                        console.log("Invalid or incomplete data:", option); // Log problematic data
                    }
                });
            } else {
                console.error("Expected an array but received:", data);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching airport data:', error);
        }
    });

    // Setup UI interactions
    $('.select-input10').on('click', function(event) {
        $('.select-options10').show();
        event.stopPropagation();
    });

    $(document).on('click', function() {
        $('.select-options10').hide();
    });

    // Handle option selection
    $('.select-options10').on('click', '.option10', function(event) {
        var selectedOption = $(this).text() || 'Unknown';
        var airportCode = $(this).data('value') || 'NoCode';
        $('.select-input10').val(airportCode); // Display only the code in the input field
        document.cookie = "selectedAirport=" + airportCode; // Store the airport code in a cookie
        $('.select-options10').hide();
        event.stopPropagation();
    });
    
    // Filter options based on search input
    $('.select-input10').on('input', function() {
        var searchText = $(this).val().toUpperCase();
        $('.option10').hide(); // Initially hide all options
        
        // First, check for matches in airport codes
        $('.option10').each(function() {
            var code = $(this).data('value').toUpperCase();
            if (code.startsWith(searchText)) {
                $(this).show();
            }
        });
        
        // Then, if no match in codes, check for matches in city names
        if ($('.option10:visible').length === 0) {
            $('.option10').each(function() {
                var city = $(this).text().toUpperCase();
                if (city.includes(searchText)) {
                    $(this).show();
                }
            });
        }
    });
});
</script>
  <script>
         $(".Click-here").on('click', function() {
  $(".custom-model-main").addClass('model-open');
$(window).load(function() {
		// Animate loader off screen
		$(".custom-model-main").fadeOut("slow");
	});
         }); 
$(".close-btn, .bg-overlay").click(function(){
  $(".custom-model-main").removeClass('model-open');
});

     </script>   
     <script>
         $(".Click-here1").on('click', function() {
  $(".custom-model-main1").addClass('model-open');
$(window).load(function() {
		// Animate loader off screen
		$(".custom-model-main1").fadeOut("slow");
	});
         }); 
$(".close-btn, .bg-overlay").click(function(){
  $(".custom-model-main1").removeClass('model-open');
});

     </script> 
    

<script>
        class InputInterchanger {
            constructor() {
                this.fromInput = document.querySelector(".fromInput");
                this.toInput = document.querySelector(".toInput");
                this.interchangeButton = document.querySelector(".interchangeButton");

                this.interchangeButton.addEventListener("click", () => this.interchangeValues());
            }

            interchangeValues() {
                const fromValue = this.fromInput.value;
                const toValue = this.toInput.value;

                this.fromInput.value = toValue;
                this.toInput.value = fromValue;
            }
        }

        // Instantiate the class
        const interchanger = new InputInterchanger();
    </script>
    
<script>
        class InputInterchanger1 {
            constructor() {
                this.fromInput1 = document.querySelector(".fromInput1");
                this.toInput1 = document.querySelector(".toInput1");
                this.interchangeButton1 = document.querySelector(".interchangeButton1");

                this.interchangeButton1.addEventListener("click", () => this.interchangeValues());
            }

            interchangeValues() {
                const fromValue = this.fromInput1.value;
                const toValue = this.toInput1.value;

                this.fromInput1.value = toValue;
                this.toInput1.value = fromValue;
            }
        }

        // Instantiate the class
        const interchanger1 = new InputInterchanger1();
    </script>
    <script>
        class InputInterchanger2 {
            constructor() {
                this.fromInput2 = document.querySelector(".fromInput2");
                this.toInput2 = document.querySelector(".toInput2");
                this.interchangeButton2 = document.querySelector(".interchangeButton2");

                this.interchangeButton2.addEventListener("click", () => this.interchangeValues());
            }

            interchangeValues() {
                const fromValue = this.fromInput2.value;
                const toValue = this.toInput2.value;

                this.fromInput2.value = toValue;
                this.toInput2.value = fromValue;
            }
        }

        // Instantiate the class
        const interchanger2 = new InputInterchanger2();
    </script> 

<script>
    // helpers
const get = (id) => document.getElementById(id);
const create = (type) => document.createElement(type);
const createArr = (val) => new Array(val).fill(undefined);
const randomInRange = (min, max) => Math.round(min + Math.random() * (max - min));
const randomHPos = (parent) => `${randomInRange(100, parent.clientWidth - 100)}px`;
const randomVPos = (parent) => `${randomInRange(100, parent.clientHeight - 100)}px`;
const transFuncs = ['linear', 'ease', 'ease-in', 'ease-in-out', 'ease-out'];
const randomTimingFunction = () => transFuncs[randomInRange(0, transFuncs.length - 1)];
const randomDuration = () => `${randomInRange(.5, 3)}s`;
const randomSkew = () => `${randomInRange(-20, 20)}deg`;
const randomRotate = () => `${randomInRange(-5, 5)}deg`;
const randomScale = () => `scale(${randomInRange(3, 10) / 10})`;
const randomMarginLeft = (parent) => `${randomInRange(10, parent.clientWidth - 10)}px`;
const randomMarginTop = () => `${randomInRange(10, 200)}px`;

// obtain DOM refs
const sky = get('sky');
const plane = get('plane');

// init plane animation
plane.addEventListener('transitionend', planeAnimation);

// add 10 clouds to DOM and start their animations
addClouds(20).forEach(cloudAnimation);

// start plane animation
planeAnimation();

// animate plane transition
function planeAnimation() {
  requestAnimationFrame(doPlaneTransition);
}

function doPlaneTransition() {
  const { style } = plane;
  style.transitionTimingFunction = randomTimingFunction();
  style.transitionDuration = randomDuration();
  style.transform = `
    translateX(${randomHPos(sky)})   
    translateY(${randomVPos(sky)})
    skew(${randomSkew()})
    rotate(${randomRotate()})
  `;
}

// animate a cloud transition
function cloudAnimation(c) {
  requestAnimationFrame(() => {
    doCloudTransition(c);
  });
}

function doCloudTransition({ style }) {
  style.marginLeft = '-100px';
}

// reset cloud transition
function onCloudTransitionend() {
  const { style } = this;

  // make transition instant and move of screen to the right
  style.marginLeft = `${sky.clientWidth + 100}px`;
  style.transitionDuration = '0s';
  
  setTimeout(() => {
    initCloud(this);
    cloudAnimation(this);    
  }, 1000);
}

// initialize cloud with random props
function initCloud({ style }) {
  style.transform = randomScale();
  style.transitionProperty = 'margin-left';
  style.transitionDuration = `${randomInRange(10, 60)}s`;
  style.transitionTimingFunction = randomTimingFunction();
  style.marginTop = randomMarginTop();
}

// create cloud dom element
function createCloud() {
  const c = create('div');

  // set class and initial position
  c.className = 'cloud';
  c.style.marginLeft = randomMarginLeft(sky);

  // initialize random props
  initCloud(c);

  // setup listener and return
  c.addEventListener('transitionend', onCloudTransitionend);
  return c;
}

// add clouds to the DOM
function addClouds(amt) {
  return createArr(amt).map(() => {
    const c = createCloud();
    sky.appendChild(c);
    return c;
  });
}
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