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
                <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active" data-tab-target=".-tab-item-1">All Commision Apply</button>
              </div>

            </div>

            <div class="tabs__content pt-30 js-tabs-content">

              <div class="tabs__pane -tab-item-1 is-tab-el-active">
                <div class="overflow-scroll scroll-bar-1">
                  <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                        <th>Commision</th>
                        <th>User</th>
                        <th>Action</th>
                        
            </tr>
        </thead>
        <tbody>
            @if(isset($commision))    
                    @foreach($commision as $flights)    
                     <tr>
                       <td><?php echo $comm= \App\Commision_Model::where('id',$flights->commision_id)->first()->name; ?></td>
                        <td><?php echo $comm= \App\UserDetails_Model::where('id',$flights->user_id)->first()->name; ?></td>
                        <td>
                          <div class="row x-gap-10 y-gap-10 items-center">

                             <div class="col-auto">
                           <a href="" id="editCompany" class="addAttr" data-toggle="modal" data-target='#practice_modal' data-id="{{$flights->id}}" 
                                data-name="{{$flights->name}}" data-commision="{{$flights->commision}}" data-commision_type="{{$flights->commision_type}}" data-commision_for="{{$flights->commision_for}}"
                                >Edit</a>
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
                           <form action="{{url('/commision-update')}}" enctype="multipart/form-data" method="post">
                                                      @csrf   
                    <input type="hidden" name="id" value="">                                  
                   <div class="row">
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1" style="padding:16px 1px 15px 12px;">Name</label>
                        <input type="text" name="name" value="" id="name" required style="margin-left:10px;">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1" style="padding:16px 1px 15px 12px;">Commision</label>
                        <input type="number" name="commision" id="commision" value="" required>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1" style="padding:16px 1px 15px 12px;">Commision Type</label>
                        <select class="form-control demo-select2-placeholder" name="commision_type" id="commision_type" style="margin-left:10px;">
                            <option value="">Select Commision Type</option>
                            <option value="percentage">%</option>
                           <option value="fixed">Fixed</option>
                        </select>
                      </div>
                    </div>
                  
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1" style="padding:16px 1px 15px 12px;">Commision</label>
                        <select class="form-control demo-select2-placeholder" name="commision_for" id="commision_for" >
                            <option value="">Select Commision</option>
                            <option value="flight">All Flight</option>
                           <option value="tour">All Tour Package</option>
                           <option value="insurance">All Insurance</option>
                           <option value="hotel">All Hotel</option>
                           
                        </select>
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
  var name = $(this).data('name'); 
  var commision = $(this).data('commision');   
  var commision_type = $(this).data('commision_type'); 
  var commision_for = $(this).data('commision_for'); 
 

  $('#id').val(id); 
  $('#name').val(name); 
  $('#commision').val(commision); 
  $('#commision_type').val(commision_type); 
  $('#commision_for').val(commision_for); 
  
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
@include('flight.admin.db-footer')