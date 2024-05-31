<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

  	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
 	<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
 	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
 	
<title>Booking Conform Details</title>
</head>
<body>
<div class="pdf-mail-cncl">  <!-- main tag -->
	<div class="pdf-mail-cncl-inner container" >  <!-- inner tag -->
		<br>
		<br>
		<div class="col-md-12 cnfrm-text row">
			
			<br>
		 	<p> Dear , <span>Lorem Ipsum</span> </p>
			<p> We have successfully processed your refund to your travel agency for your PNR {{$PNR_no}} today. You may claim your refund from the travel agency in the next 7 days. We look forward to having you onboard soon.</p>
		</div>
		<br>
		<div class="fare-details">
			<div class="fare-details-inner">
				<table style="border: 1px solid gray;">
					<tr class="col-md-6 yell-back" style="background-color: #ffa50080; color: #00045a;     border: 1px solid gray;">
					    <th colspan="2" style="border: 1px solid gray;" class="color-nevy">Cancellation Details</th>
					    					   
					</tr>
					<tr class="col-md-6" style="border: 1px solid gray;padding: 5px;">
					    <td style="border: 1px solid gray;padding: 5px;">Ticket ID</td>
					    <td style="border: 1px solid gray;padding: 5px;">{{$TicketId}}</td>
					</tr>
					<tr class="col-md-6" style="border: 1px solid gray;padding: 5px;">
					    <td style="border: 1px solid gray;padding: 5px;">Change Request Id</td>
					    <td style="border: 1px solid gray;padding: 5px;">{{$ChangeRequestId}}</td>
					</tr>
					<tr class="col-md-6" style="border: 1px solid gray;padding: 5px;">
					    <td style="border: 1px solid gray;padding: 5px;">Cancellation Charge:</td>
					    <td style="border: 1px solid gray;padding: 5px;">{{$CancellationCharge}}</td>
					</tr>
					<tr class="col-md-6" style="border: 1px solid gray;padding: 5px;">
					    <td style="border: 1px solid gray;padding: 5px;">Refunded Amount</td>
					    <td style="border: 1px solid gray;padding: 5px;">{{$RefundedAmount}}</td>
					</tr>
					<tr class="col-md-6" style="border: 1px solid gray;padding: 5px;">
					    <td style="border: 1px solid gray;padding: 5px;">Service Tax on RAF</td>
					    <td style="border: 1px solid gray;padding: 5px;">0</td>
					</tr>
					<tr class="col-md-6" style="border: 1px solid gray;padding: 5px;">
					    <td style="border: 1px solid gray;padding: 5px;">Credit Note No.</td>
					    <td style="border: 1px solid gray;padding: 5px;">{{$CreditNoteNo}}</td>
					</tr>
					<tr class="col-md-6" style="border: 1px solid gray;padding: 5px;">
					    <td style="border: 1px solid gray;padding: 5px;">Credit Note Create Date </td>
					    <td style="border: 1px solid gray;padding: 5px;">{{$CreditNoteCreatedOn}}</td>
					</tr>
					
				</table>
			</div>
		</div>
		<br>
		<br>
	</div>  <!-- inner tag -->
</div> <!-- main tag -->

</body>
</html>


