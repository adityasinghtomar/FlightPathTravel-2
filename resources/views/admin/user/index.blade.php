@extends('admin.layouts.header')
@section('content')	
     <div class="app-page-title">
			<div class="page-title-wrapper">
				<div class="page-title-heading">
					<div class="page-title-icon">
						<i class="pe-7s-users icon-gradient bg-ripe-malin ">
						</i>
					</div>
					<div>
						Users
					</div>
				</div>   
			</div>
		</div>  
          <div class="page_wrapper">
			<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
				<li class="nav-item">
					<a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
						<span>All</span>
					</a>
				</li>
			
			</ul>
			<div class="tab-content">
				<div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
					<div class="row" style="width:97%;" >
						<div class="col-xl-12">
							<div class="card-hover-shadow card-border mb-3 card">
								<div class="card-header">All User
									<div class="btn-actions-pane-right">
										<!--<a href="{{url('/AddUser')}}" class="mb-2 mr-2 btn btn-shadow btn-gradient-info">Add</a>-->
									</div>
								</div>
								<div class="card-body table-responsive">
									<table  id="example1" class="table table-hover table-striped  table-bordered">
										<thead>
											<tr>
												<th>S.no</th>
												<th>User Name</th>
												<th>User Mobile No.</th>
												<th>User Email</th>
												<th>Action</th>
										
											</tr>
										</thead>
										<tbody>
											<?php $i=1; ?>
											@foreach($users as $user)
												
												<tr>
													<td>{{$i}}</td>
													<td>{{$user->name}}</td>
													<td>{{$user->mobile}}</td>
													<td>{{$user->email}}</td>
												
												<td>
														<button class="mb-2 mr-2 btn btn-sm btn-shadow btn-gradient-danger delete_category_btn_{{$user->id}}" onclick="delete_user({{$user->id}})" data-id="{{$user->id}}" rel="delete-user">Delete</button>
													</td>
												</tr>
												<?php $i++; ?>
											
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			
		<script type="text/javascript">
			$('#example5').DataTable( {
				responsive: true,
				lengthChange: true,
				dom: 'lBfrtip',
				buttons: [
					'copy', 'csv', 'excel', 'pdf', 'print'
				]
			});
			$('#example3').DataTable( {
				responsive: true,
				lengthChange: true,
				dom: 'lBfrtip',
				buttons: [
					'copy', 'csv', 'excel', 'pdf', 'print'
				]
			});
			$('#example2').DataTable( {
				responsive: true,
				lengthChange: true,
				dom: 'lBfrtip',
				buttons: [
					'copy', 'csv', 'excel', 'pdf', 'print'
				]
			});
			$('#example1').DataTable( {
				responsive: true,
				lengthChange: true,
				dom: 'lBfrtip',
				buttons: [
					'copy', 'csv', 'excel', 'pdf', 'print'
				]
			});
			$('#example6').DataTable( {
				responsive: true,
				lengthChange: true,
				dom: 'lBfrtip',
				buttons: [
					'copy', 'csv', 'excel', 'pdf', 'print'
				]
			});
		
			function delete_user(id){
				var deleteFunction=$('.delete_category_btn_'+id).attr('rel');
				swal({
					title: "Are you sure?",
					text: "Once deleted, you will not be able to recover this file!",
					type: 'warning',
					dangerMode: true,
					buttons: true,
					showCancelButton: true,
					confirmButtonColor: '#b11e41',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Yes, delete it!'
				},function(){
					window.location.href="/"+deleteFunction+"/"+id;
				});
			}
			function showSuccess(){
				swal({
					title: "Laundry Area Successfully Deleted!",
					icon: "success",
					type: 'success',
					button: "Ok",
				});
			}
		</script>
@endsection