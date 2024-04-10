<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

  	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
 	<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
 	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
 	<link rel="stylesheet" href="file:///C:/xampp/htdocs/Niyati/Flightpath(elw)/flight-details/bookingpdf.css">
<title>Booking Conform Details</title>
</head>
<style>/*.col-md-3 , .col-md-6 , .col-md-4 ,.col-md-2 ,.col-md-12{
    padding: 0;
}*/
.container {
    padding: 0;
}
.color-nevy {
    color: #00045a;
    
}
.logo-head-lft img {
    width: 100%;
    max-width: 30%;
}
.conform-site img{
    max-width: 100%;
    width: 35px;
    object-fit: contain;
}
.conform-site{
	display: inline-flex;
}
.conform-site p{
    font-size: 28px;
    font-weight: 500;
    color: #4db97e;
    padding-left: 8px;
    margin-bottom: 0;
}
.booking-date {
    display: ruby;
}
.Right-site{
	text-align: end;
}
.header-pdf-inner {
    padding-top: 25px;
}
.gray-text {
    font-size: 17px;
    font-weight: 700;
    color: gray;
}
.date-inner  ,.time-inner{
    font-weight: 400;
}
.cnfrm-text {
	font-size: 18px ;
}
.blue-txt {
    color: #4a85a5;
    font-weight: 500;
}
.col-md-12.cnfrm-text.row {
    display: block;
}
.flight-destination-from p{
	margin-bottom: 0px;
}
.flight-logo-name img {
    width: 60px;
    height: 60px;
    border-radius: 50px;
}
.flight-name {
    font-size: 17px;
    font-weight: 600;
    color: gray;
}
.flight-detail-inner{
	text-align: center;
}
.flight-destination-to p{
	margin-bottom: 0px;
}
.flight-destination-from h4  ,.flight-destination-to h4{
	color: #00045a;
	font-weight: 700;
}
.flight-destination-from p b ,.flight-destination-to p b{
	color: #ffa500;
}
.flight-destination-from p , .flight-destination-to p {
	color: gray;
}
.flight-destination-arrow img{
    width: 50px;
}
.yell-back{
	background-color: #ffa50080;
	color: #00045a;
}
.pd-bt-tp{
    padding-bottom: 10px;
    padding-top: 50px;
}
.fare-details {
    padding-top: 50px;
}
.passengers-details-inner table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-size: 18px;
}
.passengers-details-inner td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

.flight-inclusion-inner  table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-size: 18px;
}
.flight-inclusion-inner td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

.baggage-inner table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-size: 18px;
}
.baggage-inner td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}
.fare-details-inner table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-size: 18px;
}
.fare-details-inner td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
.airline-fee-inner table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-size: 18px;
}
.airline-fee-inner td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}


@media  screen and (max-width: 767px) {
  	body{
  		padding: 20px;
 	 }
  	.logo-head-lft img {
	    width: 100%;
	    max-width: 55%;
	}
	.left-site {
	    text-align: center;
	    padding-bottom: 20px;
	}
	.logo-head-rgt {
	    text-align: center;
	}
	.sepretor {
	    display: none;
	}
	.flight-logo-name.row {
	    text-align: center;
	    display: contents;
	}
	.flight-destination-from {
	    padding-top: 30px;
	    padding-bottom: 15px;
	}
	.passengers-details-inner tr{
		width: 50%;
		display: grid;
	}
	.passengers-details-inner tbody{
		display: inline-flex; 
		width: 100%;
	}
	.flight-inclusion-inner tr{
		
		display: grid;
	}
	.flight-inclusion-inner tbody{
		display: inline-flex; 
		width: 100%;
	}
	.flight-inclusion-inner th ,.flight-inclusion-inner td {
    	height: 95px;
	}
	.pd-bt-tp {
	    padding-top: 0;
	}

}</style>
<body>
     @if(isset($ress->Response))
    <?php $passenger = $ress->Response->FlightItinerary->Passenger ?>
     <?php $Segment = $ress->Response->FlightItinerary->Segments ?>
     <?php $FareRule = $ress->Response->FlightItinerary->FareRules ?>
<div class="pdf-main">  <!-- main tag -->
	<div class="pdf-innr container">  <!-- inner tag -->
		<div class="header-pdf ">  <!-- header tag -->
			<div class="header-pdf-inner row ">
				<div class="col-md-6 left-site">
					<div class="logo-head-lft">
						<img src="public/flightpath_logo.png">
					</div>
				</div>
				<div class="col-md-6 Right-site">
					<div class="logo-head-rgt">
						<div class="conform-site">
							<img src="public/comment.png">
							<span>
								<p>
									Booking Confirmed
								</p>
							</span>	
						</div>
						<div class="booking-date">
							<p class="gray-text">
								<!--Booking Date: <span class="date-inner">Thu , 28 Mar 2023</span>-->
							</p>
							<span class="sepretor"> | </span>
							<p class="booking-time gray-text">
								<!--Booking Time: <span class="time-inner">15:12</span>-->
							</p>
						</div>
						
					</div>
				</div>
			</div>	
		</div><!-- header tag -->
		<div class="col-md-12 cnfrm-text row">
		 	<p> Hi , </p>
			<br>
			<p> Your flight ticket for <span class="blue-txt">  <?php print_r($ress->Response->FlightItinerary->Origin); ?> - <?php print_r($ress->Response->FlightItinerary->Destination); ?> </span>  is confirm. Your Ticket is attached along with the email.</p>	
			<p> Your Booking ID is <span class="blue-txt"> <?php print_r($ress->Response->FlightItinerary->BookingId); ?>  </span>. Please use it for any further comunication with us.	</p>
		</div>
		<br>
		<br>
		@foreach($Segment as $Segments)
		<div class="flight-detail ">
			<div class="flight-detail-inner row">
				<div class="col-md-3 flight-logo-name row">
					<div class="image-airlines-logo col-md-6">
						<img src="public/flightlogo.PNG">
					</div>						
					<span class="flight-name col-md-6">
						<?php print_r($Segments->Airline->AirlineName); ?> <br><?php print_r($Segments->Airline->AirlineCode); ?>-<?php print_r($Segments->Airline->FlightNumber); ?>
					</span>
				</div> 
				<div class="col-md-3 flight-destination-from">
					<h4>  <?php print_r($Segments->Origin->Airport->AirportCode); ?> <?php 
                                                            $input = $Segments->Origin->DepTime;
                                                            $date = strtotime($input); 
                                                            echo $arr1_time = date('h:i a', $date); 
                                            ?> </h4>
					<p><b>
					<?php 
                                                            $input = $Segments->Origin->DepTime;
                                                            $date = strtotime($input); 
                                                            echo $arr1_time = date('d M Y', $date); 
                                            ?>
					</b></p>
					<p></p>
				</div>
				<div class="col-md-3 flight-destination-arrow">
					<img src="public/send.png">
					<!-- _______________________________ -->
					<!--<p>2hr 45m</p>-->
				</div>
				<div class="col-md-3 flight-destination-to">
					<h4> <?php print_r($Segments->Destination->Airport->AirportCode); ?> <?php 
                                                            $input = $Segments->Destination->ArrTime;
                                                            $date = strtotime($input); 
                                                            echo $arr1_time = date('h:i a', $date); 
                                            ?> </h4>
					<p><b><?php 
                                                            $input = $Segments->Destination->ArrTime;
                                                            $date = strtotime($input); 
                                                            echo $arr1_time = date('d M Y', $date); 
                                            ?></b></p>
					<p></p>
				</div>
			</div>
		</div>
		@endforeach
		<br>
		<br>
		@foreach($passenger as $passengers) 
		 
		 @foreach($Segment as $Segments)
		<div class="passengers-details">
			<div class="passengers-details-inner">
				<h4 class="color-nevy pd-bt-tp">Passangers</h4>
				<table>
				  	<tr class="yell-back">
				   		<th>Passenger</th>
				    	<th>Airline</th>
				    	<th>Status</th>
				     	<th>sector</th>
				      	<th>AirLine PNR</th>
				       	<th>Ticket Number</th>
				        <th>Seat No</th>
				  	</tr>								
				  	<tr>
					    <td><?php print_r($passengers->FirstName); ?> <?php print_r($passengers->LastName); ?></td>
					    <td><?php print_r($ress->Response->FlightItinerary->AirlineCode); ?></td>
					    <td><?php print_r($Segments->FlightStatus); ?></td>
					    <td><?php print_r($ress->Response->FlightItinerary->Origin); ?> - <?php print_r($ress->Response->FlightItinerary->Destination); ?></td>
					    <td><?php print_r($Segments->AirlinePNR); ?></td>
					    <td></td>
					    <td> &nbsp;</td>
				  	</tr>

				</table>
			</div>
		</div>
		<!--<br>-->
		@endforeach
		@endforeach
		<!--<div class="flight-inclusion">-->
		<!--	<div class="flight-inclusion-inner">-->
		<!--		<h4 class="color-nevy pd-bt-tp">Flight Inclusion</h4>-->
		<!--		<table>-->
		<!--		  	<tr class="yell-back">-->
		<!--		   		<th>Passenger</th>-->
		<!--		    	<th>Sector</th>-->
		<!--		    	<th>Airline</th>-->
		<!--		     	<th>Flight Insurance Status</th>-->
		<!--		      	<th>Fee Collection Insurance Status</th>-->
		<!--		       	<th>Meal Status</th>-->
		<!--		  	</tr>								-->
		<!--		  	<tr>-->
		<!--			    <td>Mr Prakesh sharma</td>-->
		<!--			    <td>DEL-BLR</td>-->
		<!--			    <td>UK</td>-->
		<!--			    <td>Cornfirm (4110/D-ETRIP/P/751211/00/000)</td>-->
		<!--			    <td>Not Confirmed</td>-->
		<!--			    <td>Not Confirmed</td>-->
		<!--		  	</tr>-->
		<!--		</table>-->
		<!--	</div>-->
		<!--</div>-->
		<!--<br>-->
		<div class="baggage">
			<div class="baggage-inner">
				<h4 class="color-nevy pd-bt-tp">Baggage Info</h4>
				<table>
				 	<tr class="yell-back">
						<td rowspan="2">Airline</td>
				    	<td rowspan="2">Sector</td>
				  		<td colspan="2">Baggage</td>
				 	</tr>
				 	<tr>
				  		<td class="yell-back">Checkin</td>
				  		<td class="yell-back">Cabin</td> 
				 	</tr>
				 	<tr>
				  		<td><?php print_r($ress->Response->FlightItinerary->AirlineCode); ?></td>
				  		<td><?php print_r($ress->Response->FlightItinerary->Origin); ?> - <?php print_r($ress->Response->FlightItinerary->Destination); ?></td>
				  	     @foreach($Segment as $Segments)
				  		<td><?php print_r($Segments->Baggage); ?></td>
				  		<td><?php print_r($Segments->CabinBaggage); ?></td>
				  		@endforeach
				 	</tr>
				</table>
			</div>
		</div>
		<br>
		<div class="fare-details">
			<div class="fare-details-inner">
				<table class="">
					<tr class="col-md-6 yell-back">
					    <th class="color-nevy">Fare Details</th>
					    <th class="color-nevy">Amount (INR)</th>					   
					</tr>
					<tr class="col-md-6">
					    <td>Total Basic Fare:</td>
					    <td><?php print_r($ress->Response->FlightItinerary->Fare->Currency); ?> <?php print_r($ress->Response->FlightItinerary->Fare->BaseFare); ?></td>
					</tr>
					<tr class="col-md-6">
					    <td>Tax :</td>
					    <td><?php print_r($ress->Response->FlightItinerary->Fare->Currency); ?> <?php print_r($ress->Response->FlightItinerary->Fare->Tax); ?></td>
					</tr>
					<tr class="col-md-6">
					    <td>Discount:</td>
					    <td><?php print_r($ress->Response->FlightItinerary->Fare->Currency); ?> <?php print_r($ress->Response->FlightItinerary->Fare->Discount); ?></td>
					</tr>
					
					<tr class="col-md-6">
					    <td>Meal Amount:</td>
					    <td><?php print_r($ress->Response->FlightItinerary->Fare->Currency); ?> <?php print_r($ress->Response->FlightItinerary->Fare->TotalMealCharges); ?></td>
					</tr>
					<tr class="col-md-6">
					    <td>Bagg. Amount:</td>
					    <td><?php print_r($ress->Response->FlightItinerary->Fare->Currency); ?> <?php print_r($ress->Response->FlightItinerary->Fare->TotalBaggageCharges); ?></td>
					</tr>
					<tr class="col-md-6">
					    <td>Seat. Amount:</td>
					    <td><?php print_r($ress->Response->FlightItinerary->Fare->Currency); ?> <?php print_r($ress->Response->FlightItinerary->Fare->TotalSeatCharges); ?></td>
					</tr>
					<!--<tr class="col-md-6">-->
					<!--    <td>Rescheduled Charges:</td>-->
					<!--    <td>Rs. 0.00</td>-->
					<!--</tr>-->
					<!--<tr class="col-md-6">-->
					<!--    <td>Cancellation Charges:</td>-->
					<!--    <td>Rs. 0.00</td>-->
					<!--</tr>-->
					<tr class="col-md-6">
					    <td>Total</td>
					    <td><?php print_r($ress->Response->FlightItinerary->Fare->Currency); ?> <?php print_r($ress->Response->FlightItinerary->Fare->PublishedFare); ?></td>       
					</tr> 
				</table>
			</div>
		</div>
		<br>
		<div class="fee-collaction">
			<div class="fee-collaction-inner">
				<h4 class="color-nevy pd-bt-tp">Cancellation Charges</h4>
				<p>EaseMyTrip Fee: <span>Rs. 250 prr sector</span></p>
				<br>
				<div class="airline-fee">
					<div class="airline-fee-inner">	
						<table>
							<tr class="yell-back">
							    <th>Airline</th>
							    <th></th>
							    <th>Charges</th>
							</tr>
						  	<tr>
							    <td>Vistara</td>
							    <td>Before 4 hours of departure</td>
							    <td>Rs. 3180 (per pax per sector)</td>
						  	</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="tandc">
			<div class="tandc-inner">
				<h6>
					Terms & Condition
				</h6>
				 @foreach($FareRule as $FareRules)
				  		<?php print_r($FareRules->FareRuleDetail); ?>
				  		@endforeach
				 
			</div>
		</div>
	</div>  <!-- inner tag -->
</div> <!-- main tag -->

@endif
</body>
</html>


