<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

  	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
 	<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
 	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
 	<link rel="stylesheet" href="C:\xampp\htdocs\Niyati\Flightpath(elw)\Hotel Booking Details/conformhotel.css">
<title>Booking Conform Details</title>
</head>
<style>
    .left-site-logo img {
    width: 100%;
    max-width: 35%;
}
.conform-site-txt img {
    width: 40px;
}
.Right-site-txt {
    text-align: end;
}
.hotel-booking-voucher {
    padding: 15px;
}
.conform-site-txt p {
    font-size: 28px;
    font-weight: 500;
    color: #00045a;
}
.conform-site-txt{
	display: inline-flex;
}
.conform-site-txt img {
    width: 40px;
    height: 40px;
}
.sepretor-line {
    width: 100%;
    height: 1px;
    background: black;
    margin-top: 20px;
    margin-bottom: 20px;
}
{
    font-size: 18px;
    font-weight: 600;
    color: #00045a;
}
.guest-name-inner p {
    font-size: 20px;
    font-weight: 600;
}
.guest-name-inner p span {
    font-weight: 400;
}
.hotek-name-add-inner h4{
	color: #ffa500;
}
.hotek-name-add-inner p{
	margin-bottom: 0px;
	font-size: 20px;
	color: #00045a;
}
.checkin-time-inner ,.checkout-time-inner{
	text-align: center;
}
.checkin-time-inner p ,.checkout-time-inner p{
	font-size: 20px;
	color: #ffa500;
	margin-bottom: 0px;
}
.checkin-time-inner h4 ,.checkout-time-inner h4{
	font-size: 20px;
	color: #00045a;
}
.checkin-time ,.checkout-time{
	align-content: center;
}
.booking-details-inner td:first-child {
    width: 70%;
}
.booking-details-inner tr ,.booking-details-inner td{
	/*border: 1px solid #dddddd ;*/
	padding-top: 5px;
    padding-bottom: 5px
}
.booking-details-inner  table{
	width: 100%;
	font-size: 18px;
}
tr:nth-child(even) {
  background-color: #ffa50054;
}
.imp-note-inner p {
    font-size: 20px;
    font-weight: 500;
    color: #00045a;
}
.cancallation-inner h4{
	font-weight: 500;
    color: #00045a;	
}

@media  screen and (max-width: 767px){
	.checkin-time-inner, .checkout-time-inner {
	    text-align: left;
	}
	.left-site-logo img {
	    max-width: 65%;
	    padding-bottom: 23px;
	}
	.hotel-booking-voucher {
	    padding: 7px;
	}
	.conform-site-txt p{
		font-size: 22px;
	}
	.Right-site-txt{
		text-align: center;
	}
}

</style>
<body>
    @if(isset($ress->GetBookingDetailResult))
    <?php $data = $ress->GetBookingDetailResult->HotelRoomsDetails ?>
					    @foreach($data as $data1)
	<div class="hotel-booking-voucher"> <!-- main tag -->
		<div class="hotel-booking-voucher-inner container"> <!-- main tag inner-->
			<div class="header-pdf ">  <!-- header tag -->
				<div class="header-pdf-inner row ">
					<div class="col-md-6 left-site-logo">
						<div class="logo-headr">
							<img src="public/flightpath_logo.png">
						</div>
					</div>
					<div class="col-md-6 Right-site-txt">
						<div class="logo-head-rgt-txt">
							<div class="conform-site-txt">
								<img src="public/available.png">
								<span>
									<p>
										Hotel Conformation Voucher
									</p>
								</span>	
							</div>	
						</div>
					</div>
				</div>	
			</div><!-- header tag -->	
			<div class="sepretor-line"></div> <!-- seprator line -->
			<div class="guest-name">
				<div class="guest-name-inner">
				<?php $data3 = $data1->HotelPassenger ?>
					    @foreach($data3 as $data2)    
					<p>Guest Name:<span>   <?php print_r($data2->FirstName); ?> <?php print_r($data2->LastName); ?></span></p>
					@endforeach
				</div>
			</div>
			<div class="sepretor-line"></div> <!-- seprator line -->
			<div class="hotel-detail">
				<div class="hotel-detail-inner row">
					<div class="col-md-4 hotel-name-add">
						<div class="hotek-name-add-inner">
							<h4><?php print_r($ress->GetBookingDetailResult->HotelName); ?></h4>
							<p><?php print_r($ress->GetBookingDetailResult->AddressLine1); ?></p>
							<p><?php print_r($ress->GetBookingDetailResult->AddressLine2); ?></p>
						</div> 
					</div>
					<div class="col-md-4 checkin-time">
						<div class="checkin-time-inner">
							<p>Check IN</p>
							<h4><?php print_r($ress->GetBookingDetailResult->CheckInDate); ?></h4>
						</div>
					</div>
					<div class="col-md-4 checkout-time">
						<div class="checkout-time-inner">
							<p>Check Out</p>
							<h4><?php print_r($ress->GetBookingDetailResult->CheckOutDate); ?></h4>
						</div>
					</div>
				</div>
			</div>
			<div class="sepretor-line"></div> <!-- seprator line -->
			<div class="booking-detais">
				<div class="booking-details-inner ">
					<table >
					    
						<tr>
						    <td >Booking id:</td>
						    <td ><?php print_r($ress->GetBookingDetailResult->BookingId); ?></td>
						</tr>
						<tr>
						    <td >Hotel Confirmation No:</td>
						    <td ><?php print_r($ress->GetBookingDetailResult->ConfirmationNo); ?></td>
						</tr>
						<tr>
						    <td >Date of Booking:</td>
						    <td ><?php print_r($ress->GetBookingDetailResult->BookingDate); ?></td>
						</tr>
						<tr>
						    <td >Room Type:</td>
						    <td ><?php print_r($data1->RoomTypeName); ?></td>
						</tr>
						<tr>
						    <td >Room:</td>
						    <td ><?php print_r($ress->GetBookingDetailResult->NoOfRooms); ?></td>
						</tr>
						<tr>
						    <td >Amount Paid:</td>
						    <td ><?php print_r($data1->Price->OfferedPriceRoundedOff); ?></td>
						</tr>
						<tr>
						    <td >Your Saving:</td>
						    <td ><?php print_r($data1->Price->PublishedPriceRoundedOff); ?></td>
						</tr>
						<tr>
						    <td >Hotel Texes collected:</td>
						    <td ><?php print_r($data1->Price->TotalGSTAmount); ?></td>
						</tr>
						<tr>
						    <td >Inclusion/Exclusion:</td>
						    <td >Accommodiation</td>
						</tr>	
					</table>	
				</div>
			</div>
			<div class="sepretor-line"></div> <!-- seprator line -->
			<div class="imo-note">
				<div class="imp-note-inner">
					<p>Important Note: Lorem Ipsum</p>
				</div>
			</div>
			<div class="sepretor-line"></div> <!-- seprator line -->
			<div class="cancallation">
				<div class="cancallation-inner">
					<h4>Cancellation & Amedment Policy :</h4>
						{{$ress->GetBookingDetailResult->HotelPolicyDetail}}

					
				</div>
			</div>





		</div><!-- main tag inner-->
	</div><!-- main tag -->
@endforeach
@endif
	
</body>
</html>
