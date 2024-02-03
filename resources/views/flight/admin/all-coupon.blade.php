@extends('flight.admin.db-header')
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
                <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active" data-tab-target=".-tab-item-1">All Coupon</button>
              </div>

            </div>

            <div class="tabs__content pt-30 js-tabs-content">

              <div class="tabs__pane -tab-item-1 is-tab-el-active">
                <div class="overflow-scroll scroll-bar-1">
                  <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>S No.</th>
               <th>Coupon Code</th>
                        <th>Coupon Description</th>
                        <th>Coupon Type</th>
                        <th>Coupon Amount</th>
                        <th>Coupon Minimum Amount</th>
                        <th>Coupon Status</th>
                        <th>Coupon Start Date</th>
                        <th>Coupon End Date</th>
                        <th>Coupon User</th>
                        <th>Action</th>
                        
            </tr>
        </thead>
        <tbody>
            @if(isset($flight))   
              <?php $counter=0; ?> 
                    @foreach($flight as $flights)    
                     <tr>
                         <td><?php print_r( $counter=$counter+1);?></td>
                        <td><?php print_r($flights->coupon_code);?></td>
                        <td><?php print_r($flights->description);?></td>
                        <td><?php print_r($flights->coupon_type);?></td>
                        <td><?php print_r($flights->amount);?></td>
                        <td><?php print_r($flights->minimum_amount);?></td>
                        <td><?php print_r($flights->status);?></td>
                        <td><?php print_r($flights->start_date);?></td>
                        <td><?php print_r($flights->end_date);?></td>
                        <td><?php print_r($flights->user_id);?></td>
                        <td>
                          <div class="row x-gap-10 y-gap-10 items-center">

                            <div class="col-auto">
                                <a href="" id="editCompany" class="addAttr" data-toggle="modal" data-target='#practice_modal' data-id="{{$flights->id}}" 
                                data-coupon_code="{{$flights->coupon_code}}" data-description="{{$flights->description}}" data-coupon_type="{{$flights->coupon_type}}" data-amount="{{$flights->amount}}" data-minimum_amount="{{$flights->minimum_amount}}"
                                data-status="{{$flights->status}}" data-start_date="{{$flights->start_date}}" data-end_date="{{$flights->end_date}}" data-user_id="{{$flights->user_id}}">Edit</a>
                            </div>

                            <div class="col-auto">
                              <button class="flex-center bg-light-2 rounded-4 size-35">
                                <i class="icon-trash-2 text-16 text-light-1"></i>
                              </button>
                            </div>

                          </div>
                        </td>
                      </tr>
                    @endforeach
                    @endif
        </tbody>
        
    </table>
     <div class="modal fade" id="practice_modal">
                        <div class="modal-dialog" style="width:100%;">
                           <form id="companydata">
                                <div class="modal-content">
                                <form action="{{url('/update-coupon')}}" enctype="multipart/form-data" method="post">
                 @csrf      
                 <input type="hidden" name="id" value="" >
                 <div class="row">
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1" style="padding:16px 1px 15px 12px;">Coupon Code</label>
                        <input type="text" name="coupon_code" id="coupon_code" value="" style="margin-left:10px;">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1" style="padding:16px 1px 15px 12px;">Description</label>
                        <input type="text" name="description" id="description" value="" >
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1" style="padding:16px 1px 15px 12px;">Coupon Type</label>
                        <select class="form-control demo-select2-placeholder" value="" name="coupon_type" id="coupon_type" style="margin-left:10px;">
                            <option value="">Select Coupon Type</option>
                            <option value="percentage">%</option>
                           <option value="fixed">Fixed</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1" style="padding:16px 1px 15px 12px;">Amount</label>
                        <input type="number" name="amount" id="amount" value="" >
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1" style="padding:16px 1px 15px 12px;">Minimum Amount</label>
                        <input type="number" name="minimum_amount" id="minimum_amount" value="" style="margin-left:10px;" >
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1" style="padding:16px 1px 15px 12px;">User</label>
                         <select class="form-control demo-select2-placeholder" value="" name="user_id" id="user_id" >
                             <option value="">Select User</option>
                           
                        </select>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1" style="padding:16px 1px 15px 12px;">Status</label>
                       <select class="form-control demo-select2-placeholder" name="status" value="" id="status" style="margin-left:10px;" >
                           <option value="">Select Status</option>
                            <option value="active">Active</option>
                           <option value="inactive">In-Active</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1" style="padding:16px 1px 15px 12px;">Coupon Start Date</label>
                        <input type="date" name="start_date" id="start_date" value="">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1" style="padding:16px 1px 15px 12px;">Coupon End Date</label>
                        <input type="date" name="start_date" value="" id="end_date" style="margin-left:10px;" >
                      </div>
                    </div>
                    <div class="col-6">
                        <label class="lh-1 text-16 text-light-1" style="padding:16px 1px 15px 12px;"></label>
                                <input type="submit" value="Submit" id="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;">
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
  $('.addAttr').click(function() {
  var id = $(this).data('id');   
  var coupon_code = $(this).data('coupon_code'); 
  var description = $(this).data('description');   
  var coupon_type = $(this).data('coupon_type'); 
  var amount = $(this).data('amount'); 
  var minimum_amount = $(this).data('minimum_amount');   
  var status = $(this).data('status');
  var start_date = $(this).data('start_date'); 
  var end_date = $(this).data('end_date');   
  var user_id = $(this).data('user_id');

  $('#id').val(id); 
  $('#coupon_code').val(coupon_code); 
  $('#description').val(description); 
  $('#coupon_type').val(coupon_type); 
  $('#amount').val(amount); 
  $('#minimum_amount').val(minimum_amount); 
  $('#status').val(status);
  $('#start_date').val(start_date); 
  $('#end_date').val(end_date); 
  $('#user_id').val(user_id);
  } );
 </script>
<script>

$(document).ready(function () {

$.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});

$('body').on('click', '#submit', function (event) {
    event.preventDefault()
    var id = $("#color_id").val();
    var name = $("#name").val();
   
    $.ajax({
      url: 'color/' + id,
      type: "POST",
      data: {
        id: id,
        name: name,
      },
      dataType: 'json',
      success: function (data) {
          
          $('#companydata').trigger("reset");
          $('#practice_modal').modal('hide');
          window.location.reload(true);
      }
  });
});

$('body').on('click', '#editCompany', function (event) {
 var id = $(this).data('id');      
    var name = $(this).data('name');  
    var duration = $(this).data('duration');     
    var date = $(this).data('date');     

    $('#id').val(id);  
    $('#name').val(name);  
    $('#duration').val(duration);  
    $('#date').val(date);  
 

}); 
</script>
    
        <!--Popup Script-->
  <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin=anonymous>

  <script src=//code.jquery.com/jquery-3.3.1.slim.min.js integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin=anonymous></script>
  <script src=//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin=anonymous></script>

  <script src=//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin=anonymous></script>

  <script
  src=//code.jquery.com/jquery-3.5.1.slim.js
  integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM="
  crossorigin=anonymous></script>        
    
<!--Popup Script-->        
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
@extends('flight.admin.db-footer')