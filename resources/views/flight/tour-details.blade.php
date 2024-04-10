@include('flight.header')

 
    <style>
        /* grouped css attributes via type */
body {
  font-family: "Lato", Arial, sans-serif;
  font-weight: 400;
  font-size: 16px;
  line-height: 1.7;
  background: #fff;
  color: #777;
}

/* nav */
nav {
  margin-bottom: 1rem;
}

nav a {
  color: white;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}

nav a:hover,
a:active,
a:focus {
  color: red;
  outline: none;
  text-decoration: none;
}

/* jumbotron*/
.colorful {
  background: #4b79a1;
  /* fallback for old browsers */
  background: -webkit-linear-gradient(to bottom, #283e51, #4b79a1);
  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to bottom, #283e51, #4b79a1);
  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  border-radius: 0px;
  padding: 0px 0 1rem 0 !important;
}

.form-card {
  background: #fff;
  border-bottom: 7px solid #1e3c72;
  border-top: 7px solid #1e3c72;
  color: black;
  padding: 0 2rem;
}

.form-card h3 {
  color: #000;
  padding: 1rem 0 0.1rem 0;
}

/* hotel card */
.hotel-card {
  border: none !important;
}
.hotel-card .card-img-top {
  border-radius: 0px;
  height: 230px;
}

.hotel-card .card-body {
  padding: 0px !important;
}

.hotel-card .card-body h5 {
  margin: 0.5rem 0;
}

.hotel-card .card-body h5 a {
  color: #777;
}

.hotel-card .card-body p {
  font-size: 0.9rem;
}
/* end of hotel cards */

/* business process section */
#process {
  background: #2980b9;
  /* fallback for old browsers */
  background: -webkit-linear-gradient(to bottom, #2c3e50, #2980b9);
  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to bottom, #2c3e50, #2980b9);
  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  color: #fff;
}

#process h2,
h3 {
  border-bottom: 2px solid #fff;
  color: #fff;
  margin: 1rem 0;
  padding: 0 0 1rem 0;
}

#process h2 {
  font-size: 3rem;
  font-weight: 700;
}

#process h3 {
  font-size: 1.7rem;
}

#process p {
  color: rgba(255, 255, 255, 0.7);
}

.icon {
  border: 1px solid rgba(255, 255, 255, 0.8);
  padding: 33px 29px;

  background: #2980b9;
  color: #fff;
}

#process .icon {
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
}

#process .icon .fa {
  font-size: 2rem;
  margin: 11px 2px;
}

#process .process-step {
  text-align: center;
}

#process .process-step h3 {
  color: white;
  margin-top: 2.2rem;
}

#stat-counter {
  text-align: center;
}
#stat-counter h2 {
  font-size: 3rem;

  border-bottom: 1px solid #777;
  margin-bottom: 0.25rem;
  padding-bottom: 0.25rem;
}

#stat-counter p {
  padding-top: 1rem;
}

#stat-counter .counter {
  display: block;

  margin-bottom: 10px;

  color: #2980b9;
  font-size: 50px;
  font-weight: 100;
}

#subscribe-panel {
  background: #1e3c72; /* fallback for old browsers */
  background: -webkit-linear-gradient(
    to bottom,
    #2a5298,
    #1e3c72
  ); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(
    to bottom,
    #2a5298,
    #1e3c72
  ); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  padding: 5rem 1rem;
}

#subscribe-panel h2 {
  position: relative;

  margin-bottom: 10px;

  color: white;
  line-height: 1.5;
  font-size: 50px;
  font-weight: 300;
}

#subscribe-panel.form-control {
  width: 100%;

  border: 2px solid rgba(255, 255, 255, 0.2) !important;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;

  background: #fff;
  color: #fff;
  font-size: 16px !important;
}

#subscribe-panel.form-control:focus {
  background: transparent;
  border: 2px solid rgba(255, 255, 255, 0.8) !important;
}

#subscribe-panel.form-control::-webkit-input-placeholder,
#subscribe-panel.form-control:-moz-placeholder,
#subscribe-panel.form-control::-moz-placeholder,
#subscribe-panel.form-control:-ms-input-placeholder {
  color: #fff;
}

#subscribe-panel.btn {
  height: 46px;
  border: none !important;
  padding-left: 50px;
  padding-right: 50px;

  background: #09c6ab;

  color: #fff;
  font-size: 16px;
  text-transform: uppercase;
  font-weight: 400;
}

#subscribe-panel.form-inline .form-group {
  width: 100% !important;
  margin-bottom: 10px;
}

#subscribe-panel.form-inline .form-group .form-control {
  width: 100%;
}

#subscribe-panel.gtco-heading {
  margin-bottom: 30px;
}

#subscribe-panel.gtco-heading h2 {
  color: #fff;
}

#subscribe-panel.gtco-heading p {
  color: rgba(255, 255, 255, 0.5);
}
.copyright {
  background: #005c97; /* fallback for old browsers */
  background: -webkit-linear-gradient(
    to bottom,
    #363795,
    #005c97
  ); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(
    to bottom,
    #363795,
    #005c97
  ); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

.copyright h3 {
  color: #fff;
  font-size: 2.5rem;
}
.copyright p {
  color: #fff;
}

.footer-nav a {
  color: #777;
}

/* destination page */
.destination-container {
  height: 70vh;
  padding: 7rem;
}

.hotels-form {
  background: #283e51; /* fallback for old browsers */
  padding: 1rem;
}

.hotels-container {
  padding: 0.5rem 0 7rem 0;
}

.search-container {
  background: #ffffff;
}

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
                        <h2>Toars details</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span><a href="hotel-search.html">Toars</a></li>
                            <li><span><i class="fas fa-circle"></i></span><a href="hotel-details.html">Toars details</a>
                            </li>
                            <li><span><i class="fas fa-circle"></i></span> Toars details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Room Details Areas -->
    
    <!-- jumbotron and nav -->
  <link rel="stylesheet" href="path/to/your/slider-styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
  
	<section class="search-container">
		<div class="container">
		    <div class="row">
		        <div class="col-md-4">
		             <img src="public/images/{{$flight->image}}" style="width:100%;height:250px;" id="main">
		        </div>
		        <div class="col-md-8">
		            <div class="filter-card" style="margin-top: 22px;">
		                <form action="#">
		            <div id="thumbnails" style="margin: 64px 0px 48px 0px;">
		                <div id="image-slider">
		                    
		                     <img src="public/images/{{$flight->images}}">
		                     <img src="public/images/{{$flight->image}}">
		                      
                          </div>
                        </div>
                        	</form>
                        </div>

		        </div>
		     
		    </div>
		  <div>
		     
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
  $(document).ready(function(){
    $('#image-slider').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true, // Enable autoplay
      autoplaySpeed: 2000, // Set the autoplay speed in milliseconds (adjust as needed)
      prevArrow: '<button type="button" class="slick-prev">Previous</button>',
      nextArrow: '<button type="button" class="slick-next">Next</button>',
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  });
</script>


<style>
    #thumbnails{
  text-align:center;
  img{
    width:100px;
    height:100px;
    margin:10px;
    cursor:pointer;
      @media only screen and (max-width:480px){
    width:50px;
    height:50px;
  }
    @extend %shared;
    &:hover{
      transform:scale(1.05)
    }
  }
}
#main{
  width:50%;
  height:400px;
  object-fit:cover;
  display:block;
  margin:20px auto;
  @extend %shared;
  @media only screen and (max-width:480px){
    width:100%;
  }
}
.hidden{
  opacity:0;
}
</style>
<script>
    var thumbnails = document.getElementById("thumbnails")
var imgs = thumbnails.getElementsByTagName("img")
var main = document.getElementById("main")
var counter=0;

for(let i=0;i<imgs.length;i++){
  let img=imgs[i]
  
  
  img.addEventListener("click",function(){
  main.src=this.src
})
  
}
</script>
		  </div>
			<div class="row">
				<div class="col-lg-4">
					
					<div class="row mt-2 justify-content-between">
					    <div class="filter-card">
							<h5>Tour Overview</h5>
							<form action="#">
							    <style>.hidden { display: none;}
                                        .readmore { margin: 0 5px;}</style>
							  <div class="content">
							   {{$flight->overview}}</div>
							</form>
						</div>
					 

					</div>
					<div class="row mt-2 justify-content-between" style="margin-bottom:20px;">
					    <div class="filter-card">
							<h5>Tour Facilities</h5>
							<form action="#">
							    <style>.hidden { display: none;}
                                        .readmore { margin: 0 5px;}</style>
							  <div class="content">
							 {{$flight->other_facilities}}</div>
							</form>
						</div>
					

					</div>
					<div class="row mt-2 justify-content-between" style="margin-bottom:20px;">
					    <div class="filter-card">
							<h5>Tour Included</h5>
							<form action="#">
							 <style>.hidden { display: none;}
                                        .readmore { margin: 0 5px;}</style>
							  <div class="content">{{$flight->included}}</div>
							</form>
						</div>
					

					</div>
					<div class="row mt-2 justify-content-between" style="margin-bottom:20px;">
					    <div class="filter-card">
							<h5>Tour Excluded</h5>
							<form action="#">
							 <style>.hidden { display: none;}
                                        .readmore { margin: 0 5px;}</style>
							  <div class="content">{{$flight->excluded}}</div>
							</form>
						</div>
					

					</div>
					<div class="row mt-2 justify-content-between" style="margin-bottom:20px;">
					    <div class="filter-card">
							<h5>Tour Itinerary</h5>
							<form action="#">
							 <style>.hidden { display: none;}
                                        .readmore { margin: 0 5px;}</style>
							  <div class="content">{{$flight->itinerary}}</div>
							</form>
						</div>
					

					</div>
					

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
<style>
    .accordion {
           margin:20px 0px 10px 0px;
  background-color: #e98c06;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
 
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
</style>
				</div>



				<div class="col-lg-8  px-4">
					<div class="row search-card-result">
						<div class="col-md-9">
							<h5>{{$flight->tour_name}}</h5>
							<div class="review">
<?php
$StarRating = $flight->rating; 

echo '<div>';
for ($i = 1; $i <= 5; $i++) {
    if ($i <= $StarRating) {
        echo '<span class="fa fa-star checked"></span>';
    } else {
        echo '<span class="fa fa-star"></span>';
    }
}
echo '</div>';
?>

							</div>
							<p><i class="fas fa-map-marker-alt"></i> {{$flight->address}}</p>
							 <h5>size : <span>{{$flight->no_of_people}} people</span></h5>
                              
						<h5>Tour type : <span>{{$flight->tour_type}} tour</span></h5>
                                    
						</div>
						
						<div class="col-md-3 border-left text-center more-offers" style="background:#a7a7a757;">
							<div class="text-warning">
                                 @foreach($tour_package as $tour_packages) 
                                   <div class="tour_details_right_box_heading">
                                    <h3  style="color:#000;">{{$tour_packages->tour_package_name}}</h3>
                                </div>
                                
                                <h3 style="color:#000;">{{$tour_packages->amount}}<sub>/Per serson</sub> </h3>
                                
                            <form action="{{url('/book-package')}}" enctype="multipart/form-data" method="post">
                                                      @csrf   
                 
                            <input type="hidden" name="tour_id" value="{{$flight->id}}">
                            <input type="hidden" name="tour_package_id" value="{{$tour_packages->id}}">
                            <input type="hidden" name="tour_package_amount" value="{{$tour_packages->amount}}">
                            <div class="tour_select_offer_bar_bottom">
                                <button class="button btn btn_theme btn_md w-100">Select Package</button>
                            </div>
                </form>
                    @endforeach
							</div>
							
						</div>
					</div>
					<div class="row">
					   	<div class="col-md-12">
				    	<div class="row mt-2 justify-content-between">
					    <div class="filter-card">
							<h5>Tour Itinerary</h5>
							<form action="#">
						        <div class="timeline">  

      <div >
          <table>
              <td>
                  <button class="btn btn-primary" style="margin:-48px 20px 0px 0px;"> Day 1</button>
              </td>
        <td style="border-bottom: 4px dotted #959595;">
            <div class="tl-body">
          <div class="tl-content">
               <div class="tl-header">
        <span class="tl-marker"></span>
         <p>
          Aliquam id ex dui, ante eget elementum 
          semper, ac posuere quam nisl euismod nunc.
        </p>
      </div>
              </div>
                <div class="tl-content">
               <div class="tl-header">
        <span class="tl-marker"></span>
         <p>
          Aliquam id ex dui, ante eget elementum 
          semper, ac posuere quam nisl euismod nunc.
        </p>
      </div>
              </div>
       
      </div>
        </td>
          </table>
      </div>
  <div>
          <table>
              <td>
                  <button class="btn btn-primary" style="margin:-48px 20px 0px 0px;"> Day 2</button>
              </td>
        <td style="border-bottom: 4px dotted #959595;">
            <div class="tl-body">
          <div class="tl-content">
               <div class="tl-header">
        <span class="tl-marker"></span>
         <p>
          Aliquam id ex dui, ante eget elementum 
          semper, ac posuere quam nisl euismod nunc.
        </p>
      </div>
              </div>
                <div class="tl-content">
               <div class="tl-header">
        <span class="tl-marker"></span>
         <p>
          Aliquam id ex dui, ante eget elementum 
          semper, ac posuere quam nisl euismod nunc.
        </p>
      </div>
              </div>
       
      </div>
        </td>
          </table>
      </div>
        <div>
          <table>
              <td>
                  <button class="btn btn-primary" style="margin:-48px 20px 0px 0px;"> Day 3</button>
              </td>
        <td style="border-bottom: 4px dotted #959595;">
            <div class="tl-body">
          <div class="tl-content">
               <div class="tl-header">
        <span class="tl-marker"></span>
         <p>
          Aliquam id ex dui, ante eget elementum 
          semper, ac posuere quam nisl euismod nunc.
        </p>
      </div>
              </div>
                <div class="tl-content">
               <div class="tl-header">
        <span class="tl-marker"></span>
         <p>
          Aliquam id ex dui, ante eget elementum 
          semper, ac posuere quam nisl euismod nunc.
        </p>
      </div>
              </div>
       
      </div>
        </td>
          </table>
      </div>
   
  </div>
  
							</form>
						</div>
					 

					</div>
					</div>
					
					
				</div>
			
			
				</div>
			</div>

		</div>
	</section>
   
  <style>
      *, *::after, *::before {
  box-sizing: border-box;
  
  margin: 0;
  padding: 0;
}

p {
  line-height: 1.8;
}

time {
  line-height: 1.6;
}

body {
  min-width: 375px;

  font-family: "Poppins", sans-serif;

  background-color: #f1f1f1;
  color: #1a1a1a;
}

main {
  min-height: 100vh;
  
  display: grid;
  place-content: center;
  
  padding : 1rem;
}

/* ===================== */
/* ===================== */

/* Timeline */
/* Code Here ↓ */

.tl-content .tl-header, 
.tl-content .tl-body {
  padding-left: 25.6px;
  
  border-left: 3px solid gainsboro;
}

.tl-body {
  padding-bottom:1rem;
}

.tl-content:last-child .tl-body {
  border-left: 3px solid transparent;
}

.tl-header {
  position: relative;
  display: grid;
  
  padding-top: 1rem;
 
}

.tl-title {
  font-weight: 600;
  font-size: 1em;
  
  border-bottom: 1px solid gainsboro;
}

.tl-time {
  font-size: 0.7em;
}

.tl-marker {
  display:block;
  position: absolute;

  width: 16px;
  height: 16px;
  border-radius: 50% / 50%;
  
  background: gainsboro;
  
  left: -1.1rem;
  top: 50%;
  
  transform: translate(50%,-50%);
}

.tl-content-active .tl-marker {
  padding: 1.6px;
  
  left: -1.25rem;
  
  width: 18px;
  height: 18px;
  
  border: 2px solid #e98c06;
  
  background-color: #e98c06;
  background-clip: content-box;
  
  box-shadow: 0 0 15px -2px limegreen;
}

.tl-content-active .tl-title {
  font-weight: 700;
  
  color: green;
}

/* Code Here ↑ */
/* Timeline */

/* ==================== */
  </style>
    <style>

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  /*right: 0;*/
  left:30%;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>
   
    <div class="container">
  
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>


<style>
    /* Style for the entire page */
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: url('your-background-image.jpg') no-repeat center center fixed;
    background-size: cover;
}

/* Style for the custom modal */
.custom-modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(10px);
    z-index: 9999;
}

.custom-modal-content {
    width: 50%;
    margin: 10% auto;
    background-color: #fff;
    border: 1px solid #999;
    border-radius: 6px;
    box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
    padding: 20px;
    box-sizing: border-box;
}

/* Style for the close button */
.close {
   position: relative;
    top: -13px;
    right: -904px;
    padding: 3px;
    border-radius: 5px;
    background: #d95313f2;
    color: #fff;
    font-size: 20px;
    font-weight: bold;
    cursor: pointer;
}
@media only screen and (max-width: 700px) {
   .close {
   position: relative;
    top: -13px;
    right: 0;
    float:right;
    padding: 3px;
    border-radius: 5px;
    background: #d95313f2;
    color: #fff;
    font-size: 20px;
    font-weight: bold;
    cursor: pointer;
}
.custom-modal-content {
    width: 95%;
    margin: 10% auto;
    background-color: #fff;
    border: 1px solid #999;
    border-radius: 6px;
    box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
    padding: 20px;
    box-sizing: border-box;
}
}
.main{
  width: 100%;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.card{
  width: 500px;
  margin: 0 auto;
  position: relative;
  box-shadow:0 20px 25px -5px rgba(0,0,0,.1), 0 10px 10px -5px rgba(0,0,0,.04);
  border-radius: 10px;
}
.card img{
  width: 100%;
  border-radius: 10px 10px 0 0;
}
.card-title{
  width: calc(100% - 40px);
  background: #fff;
  padding: 10px;
  position: absolute;
  left: 50%;
  top: 170px;
  transform: translateX(-50%);
  font-family: 'Roboto', sans-serif;
  border-radius: 5px;
  box-shadow:0 10px 15px -5px rgba(0,0,0,.1), 0 5px 5px -5px rgba(0,0,0,.01);
}
.card-title h4{
  font-family: 'Roboto', sans-serif;
}
.card-title h3{
  font-weight: normal;
  font-family: 'Source Sans Pro', sans-serif;
}
.card-content{
  width: 100%;
  background: #fff;
  padding-top: 40px;
  border-radius: 0 0 10px 10px;
}
.card-content-row{
  display: flex;
  flex-wrap: wrap;
  border-bottom: 1px solid #e2e8f0;
}
.card-content-col{
  width: 50%;
  padding: 20px;
  font-family: 'Source Sans Pro', sans-serif;
}
.card-content-col .fa{
  font-size: 25px;
  vertical-align: middle;
  margin-right: 10px;
  color: #718096;
}
.card-content-user-info{
  width: 100%;
  padding: 10px;
  display: flex;
  background: #f7fafc;
  border-radius: 0 0 10px 10px;
}
.card-content-user-info img{
  width: 60px;
  height: 60px;
  margin: 10px;
  border-radius: 50%;
  vertical-align: middle;
}
.card-content-user-info h4{
  font-family: 'Roboto', sans-serif;
}
.card-content-user-info p{
  font-family: 'Roboto', sans-serif;
}
.card-content-user-info .card-content-user-contact{
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding-left: 20px;
}
</style>
<script>
    function openModal() {
    var modal = document.getElementById('customModal');
    modal.style.display = 'block';
}

function closeModal() {
    var modal = document.getElementById('customModal');
    modal.style.display = 'none';
}

</script>
                 
                 
                                

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
                        <input type="date" value="2022-05-05" class="form-control" id="dates">
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
                        <label for="texts">Write any special note</label>
                        <textarea rows="5" class="form-control" placeholder="Write any special note"
                            id="texts"></textarea>
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
            <a href="room-booking.html" class="btn btn_theme btn_md w-100">Proceed to Booking</a>
        </div>
    </div>
<script>
    $(function () {
    
    var maxL = 500;
    
    $('.content').each(function () {
        
        var text = $(this).text();
        if(text.length > maxL) {
            
            var begin = text.substr(0, maxL),
                end = text.substr(maxL);

            $(this).html(begin)
                .append($('<a class="readmore"/>').attr('href', '#').html('read more...'))
                .append($('<div class="hidden" />').html(end));
                
            
        }
        
        
    });
            
    $(document).on('click', '.readmore', function () {
				// $(this).next('.readmore').fadeOut("400");
        $(this).next('.hidden').slideToggle(10);
    })        
    
    
})
</script>
    <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->


    <!--<script src="public/assets/js/jquery-3.6.0.min.js"></script>-->

    <!-- Bootstrap js -->

    <script src="public/assets/js/bootstrap.bundle.js"></script>

    <!-- Meanu js -->

    <script src="public/assets/js/jquery.meanmenu.js"></script>

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

</body>

</html>