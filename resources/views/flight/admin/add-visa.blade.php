@include('flight.admin.db-header')
    <div class="dashboard__main">
      <div class="dashboard__content">
        <div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
          <div class="col-auto">

            <h1 class="text-30 lh-14 fw-600">Add Visa</h1>
            <div class="text-15 text-light-1"></div>

          </div>

          <div class="col-auto">

          </div>
        </div>


        <div class="py-30 px-30 rounded-4 bg-white custom_shadow">
          <div class="tabs -underline-2 js-tabs">
            <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">

              <div class="col-auto">
                <button
                  class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active"
                  data-tab-target=".-tab-item-1">Add Visa</button>
              </div>
        </div>

            <div class="tabs__content pt-30 js-tabs-content">
              <div class="tabs__pane -tab-item-1 is-tab-el-active">
                <div class="col-xl-10">
                  <div class="border-top-light mt-30 mb-30"></div>
                  <div class="row x-gap-20 y-gap-20">
                <form action="{{url('/visa-add')}}" enctype="multipart/form-data" method="post">
                 @csrf      
                 <div class="row">
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">visa Name</label>
                        <input type="text" name="visa_name" required>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Visa Type</label>
                        <select class="form-control demo-select2-placeholder" name="visa_type" id="state_id" >
                            <option value="single">Select Visa Type</option>
                            <option value="Business visa">Business visa</option>
                           <option value="Education visa">Education visa</option>
                           <option value="Working visa">Working visa</option>
                           <option value="Tourist visa">Tourist visa</option>
                           <option value="Medical visa">Medical visa</option>
                           <option value="On-arrival visa">On-arrival visa</option>
                        </select>
                      </div>
                    </div>
                     <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Country</label>
                        <select class="form-control demo-select2-placeholder" name="country" id="state_id" >
                            @foreach($country as $row)
                            <option value="{{ $row->name }}">{{ $row->name }}</option>
                           @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Duration</label>
                        <input type="number" name="duration" required>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Amount</label>
                        <input type="number" name="amount" required>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Currency Type</label>
                        <?php $tour =\App\Currency_Model::get(); ?>
                        <select class="form-control demo-select2-placeholder" name="currency_type" id="state_id" >
                         <option value="single">Select currency Type</option>
                         @foreach($tour as $tours)
                            <option value="{{$tours->currency_symbol}}">{{$tours->currency_name}}</option>
                        @endforeach   
                        </select>
                      </div>
                    </div>
                    
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Visa Image</label>
                        <input type="file" name="image" required>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Overview</label>
                        <textarea rows="2" cols="60" name="overview" required></textarea>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Included</label>
                        <textarea rows="2" cols="60"  name="include" required></textarea>
                      </div>
                    </div>
                    
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Excluded</label>
                        <textarea rows="2" cols="60" name="exclude" required></textarea>
                      </div>
                    </div>
                    
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">why choose us</label>
                        <textarea rows="2" cols="60"  name="why_choose_us" required></textarea>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Documents</label>
                        <textarea rows="2" cols="60"  name="documents" required></textarea>
                      </div>
                    </div>
              
                <div class="d-inline-block pt-30">
                    <button class="button h-50 px-24 -dark-1 bg-blue-1 text-white">Add Visa</button>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>   
   
<script>
     $(document).ready(function(){
   
  var i = 1;
	var length;
	//var addamount = 0;
   var addamount = 1;

  $("#add").click(function(){
    
	 <!-- var rowIndex = $('#dynamic_field').find('tr').length;	 -->
	 <!-- console.log('rowIndex: ' + rowIndex); -->
	 <!-- console.log('amount: ' + addamount); -->
	 <!-- var currentAmont = rowIndex * 700; -->
	 <!-- console.log('current amount: ' + currentAmont); -->
	 <!-- addamount += currentAmont; -->
	 
        	var days1 = addamount += 1;
	 var days = + addamount;
   i++;
 
      $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" placeholder="" name="day[]" id="day" class="form-control name_list" readonly/></td><td><textarea rows="2" cols="60"  type="text" name="itinerary[]" placeholder="Enter itinerary" class="form-control name_email"/></textarea></td>	<td><button type="button" name="remove" id="'+i+'" class="button h-50 px-24 -dark-1 bg-red-1 text-white btn_remove">Remove</button></td></tr>');  
      document.getElementById( 
            "day").value = days ;      
    });

  $(document).on('click', '.btn_remove', function(){  
var days1 =	addamount -= 1;
var days =+ addamount;
console.log(days);
document.getElementById( 
            "day").value = days ;  
	<!-- var rowIndex = $('#dynamic_field').find('tr').length;	 -->
	 <!-- addamount -= (700 * rowIndex); -->
	 <!-- console.log(addamount); -->
	 
	  var button_id = $(this).attr("id");     
      $('#row'+button_id+'').remove();  
    });
	


//     $("#submit").on('click',function(event){
//     var formdata = $("#add_name").serialize();
// 	  console.log(formdata);
	  
// 	  event.preventDefault()
      
//       $.ajax({
//         url   :"action.php",
//         type  :"POST",
//         data  :formdata,
//         cache :false,
//         success:function(result){
//           alert(result);
//           $("#add_name")[0].reset();
//         }
//       });
      
//     });
  });
</script>

@include('flight.admin.db-footer')                        