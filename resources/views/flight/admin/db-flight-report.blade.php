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
          <div class="tabs -underline-2 js-tabs">
            <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">

              <div class="col-auto">
                <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active" data-tab-target=".-tab-item-1">All Flight</button>
              </div>

            </div>

            <div class="tabs__content pt-30 js-tabs-content">

              <div class="tabs__pane -tab-item-1 is-tab-el-active">
                <div class="overflow-scroll scroll-bar-1">
                  <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
               <th>Full Name</th>
                        <th>PNR NO.</th>
                        <th>Booking ID</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($flight))    
                    @foreach($flight as $flights)    
                     <tr>
                       <td><?php print_r($flights->name);?> <?php print_r($flights->lname);?></td>
                        <td><?php print_r($flights->pnr_no);?></td>
                        <td> <?php print_r($flights->booking_id);?></td>
                        <td><?php print_r($flights->ticket_date);?></td>
                        <td><?php print_r($flights->amount);?></td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-yellow-4 text-yellow-3">Confirmed</span></td>
                        
                      </tr>
                    @endforeach
                    @endif
        </tbody>
        <tfoot>
            <tr>
                <th>Full Name</th>
                        <th>PNR NO.</th>
                        <th>Booking ID</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Status</th>
            </tr>
        </tfoot>
    </table>
                  </table>
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