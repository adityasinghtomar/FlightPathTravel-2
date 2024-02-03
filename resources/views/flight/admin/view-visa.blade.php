@include('flight.admin.db-header')
    <div class="dashboard__main">
      <div class="dashboard__content">
        <div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
          <div class="col-auto">
                </br>
          </div>

          <div class="col-auto">

          </div>
        </div>


        <div class="py-30 px-30 rounded-4 bg-white custom_shadow">
         

            <div class="booking_tour_form">
                            <h3 class="heading_theme">Visa Booking information</h3>
                            <div class="tour_booking_form_box">
                                <div class="your_info_arae">
                                    <div class="row">
                                       <div class="col-lg-4">Booking ID:</div><div class="col-lg-8">
                                                 {{$result1->booking_id }} </div> 
                                       <div class="col-lg-4">Visa Name:</div><div class="col-lg-8">
                                                 {{$result1->visa_name }} </div>
                                        <div class="col-lg-4">Visa Package Name:</div><div class="col-lg-8">
                                                 {{$result1->visa_package_name }} </div>
                                        <div class="col-lg-4">Visa Type:</div><div class="col-lg-8">
                                                 {{$result1->visa_type }} </div>
                                        <div class="col-lg-4">Duration:</div><div class="col-lg-8">
                                                 {{$result1->duration }} </div>
                                        <div class="col-lg-4">Currency Type:</div><div class="col-lg-8">
                                                 {{$result1->currency_type }} </div>
                                        <div class="col-lg-4">Visa Amount:</div><div class="col-lg-8">
                                                 {{$result1->visa_amount }} </div>
                                        <div class="col-lg-4">Visa Package Amount:</div><div class="col-lg-8">
                                                 {{$result1->visa_package_amount }} </div>
                                        <div class="col-lg-4">First name:</div><div class="col-lg-8">
                                                 {{$result1->name }} </div>
                                        <div class="col-lg-4">Last Name:</div><div class="col-lg-8">
                                                 {{$result1->lname }} </div>
                                        <div class="col-lg-4">Email:</div><div class="col-lg-8">
                                                 {{$result1->email }} </div>
                                        <div class="col-lg-4">Mobile:</div><div class="col-lg-8">
                                                 {{$result1->mobile }} </div>
                                        <div class="col-lg-4">Address:</div><div class="col-lg-8">
                                                 {{$result1->address }} </div>
                                        <div class="col-lg-4">Overview:</div><div class="col-lg-8">
                                                 <p>{{$result1->overview }} </p></div>
                                        <div class="col-lg-4">Included:</div><div class="col-lg-8">
                                                 <p>{{$result1->include }}</p> </div>
                                        <div class="col-lg-4">Excluded:</div><div class="col-lg-8">
                                                 <p>{{$result1->exclude }}</p> </div>
                                        <div class="col-lg-4">Image:</div><div class="col-lg-8">
                                                 <img src="public/images/{{$result1->image }}" alt="img"> </div>
                                   </div>
                                </div>
                            </div>
                        </div>
         
          
        </div>
<link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css"  rel="stylesheet" type="text/css">
<link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"  rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>


<script>
  $(document).ready(function() {
    $('#example').DataTable( {
      searching: true,
      info : true,
    paging: true,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf'
        ]
    } );
} );
</script>
@include('flight.admin.db-footer')