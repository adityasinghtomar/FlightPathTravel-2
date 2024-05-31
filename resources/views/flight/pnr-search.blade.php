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
                        <h2>PNR Search</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span>PNR</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<head>
 	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	<style>
		/*.pnr-search-inner.container {*/
		/*    padding-top: 60px;*/
		/*}*/
		.form-search-pnr{
		    padding-left: 15px;
		    padding-right: 15px;
		}
		.form-search-pnr-inner .fld {
		    margin: 0px 15px;
		}
		.air-name-inner h1{
		    padding: 25px 0px;
		    color: white;
		    background: #e98c06;
		    padding-left: 27px;
		}
		.form-referance-inner p {
		    padding: 30px 45px;
		}
		.form-referance-inner p {
		    padding: 30px 35px;
		    font-size: 22px;
		    margin-bottom: 0px;
		}
		.form-search-pnr-inner .col.fld {
		    background: #e98c06;
		    border: unset;
		    color: #fff;
		  	cursor: pointer;  
		}
		.pnr-link {
		    padding-top: 30px;
		    padding-left: 20px;
		}
		.pnr-link a{
		    font-size: 20px;
		    color: #003466;
		}
		.form-search-pnr-inner .col.fld:hover{
			background-color: #003466 ;
		}
		@media (min-width: 767px){
		   .form-search-pnr-inner .fld {
			    margin: 8px 15px;
			}
			.air-name-inner h1 {
			    padding: 10px;
			    font-size: 23px;
			}
			.form-referance-inner p {
			    padding: 15px;
			    font-size: 18px;
			}
   		}
   		@media (max-width: 767px){
		   .form-search-pnr-inner .fld {
			    margin: 8px 15px;
			}
			.air-name-inner h1 {
			    padding: 10px;
			    font-size: 23px;
			}
			.form-referance-inner p {
			    padding: 15px;
			    font-size: 18px;
			}
   		}
		
	</style>
</head>
<body>
    
   <div style="background:#e7e7e7;">
       
 
   <div class="container">
    <div class="d-flex justify-content-center" style="padding:50px 0px 50px 0px"> <!-- Use flexbox to center the card horizontally -->
        <div class="card" style="width: 500px;">
            <div class="card-header" style="background: #e98c06;">
                <h3 style="text-align:center;color:#fff;">Air Manage Booking</h3> <!-- Center the text within the card header -->
            </div>
            <div class="card-body">
                <form action="{{url('/pnr-search-result')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <input class="form-control mb-2" type="text" name="pnr" placeholder="PNR Number">
                    <input class="form-control mb-2" type="text" name="lname" placeholder="Last Name">
                   <div style="text-align:center;">
                        <button type="submit" class="btn btn-success btn-block">Search</button> 
                   </div><!-- Make the button full-width -->
                </form>
            </div>
        </div>
    </div>
</div>
  </div> 
<!--<div class="pnr-search">-->
<!--	<div class="pnr-search-inner container">-->
<!--		<div class="col-md-12 air-name">-->
<!--			<div class="air-name-inner">-->
<!--				<h1>Air Manage Booking</h1>-->
<!--			</div>-->
<!--		</div>-->
<!--		<div class="form-refrance">-->
<!--			<div class="form-referance-inner ">-->
<!--				<p class="col-md-12">-->
<!--					Retrieve Your Booking Using RNR-->
<!--				</p>-->
<!--				<div class="form-search-pnr ">-->
<!--					<form action="{{url('/pnr-search-result')}}" enctype="multipart/form-data" method="post">-->
<!--                        @csrf-->
<!--                        <input  class="col-md-5 fld" type="text" name="pnr" placeholder="PNR Number">-->
<!--						<input  class="col-md-5 fld" type="text" name="lname" placeholder="Last Name">-->
<!--						  <button type="submit" class="btn btn-success px-30 py-10">Search</button>-->
                        
<!--					</form>-->
					<!--<div class="col-md-12 pnr-link">-->
					<!--	<a href="#">Retrive Without PNR</a>-->
					<!--</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->

@include('auth.cust_footer')
</body>
    <div class="go-top">
        <i class="fas fa-chevron-up"></i>
        <i class="fas fa-chevron-up"></i>
    </div>

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