@include('admin.layouts.header')
@section('content')	
     <div class="app-page-title">
			<div class="page-title-wrapper">
				<div class="page-title-heading">
					<div class="page-title-icon">
						<i class="pe-7s-users icon-gradient bg-ripe-malin ">
						</i>
					</div>
					<div>
						User
					</div>
				</div>   
			</div>
		</div>  
          <div class="page_wrapper">
			<div class="row">
				<div class="col-xl-12">
					<div class="card-hover-shadow card-border mb-3 card">
						<form action="{{route('user.store')}}" enctype="multipart/form-data" method="post" >
							<div class="card-header">Add User 
								<div class="btn-actions-pane-right">
									<a href="{{url('/User')}}" class="mb-2 mr-2 btn btn-shadow btn-gradient-info">List</a>
								</div>
							</div>
							<div class="card-body">
                                   @if(Session::has('message'))
                                        <div class="alert alert-success text-center" role="alert">
                                             <strong>Well done! &nbsp;</strong>{{Session::get('message')}}
                                        </div>
                                   @endif
                                   @if(Session::has('error'))
                                        <div class="alert alert-danger text-center" role="alert">
                                             <strong> &nbsp; </strong>{{Session::get('error')}}
                                        </div>
                                   @endif
								<div class="form-group">
									<label for="user_name">User Name <span class="required_span text-danger">*</span></label>
									<input type="text" name="name" placeholder="User Name" required  id="user_name" class="form-control" />
									@error('name')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>
								<div class="form-group">
									<label for="address"> Address</label>
									<textarea name="address" id="address" class="form-control" rows="2"></textarea>
									@error('address')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>
								<div class="row">
									<div class="col-xl-6 col-md-12  col-sm-12">
										<div class="form-group">
											<label for="role">Role <span class="required_span text-danger">*</span></label>
											<select name="role" id="role" required class=" form-control">
												<option value="admin">Admin</option>
												<option value="laundry_admin">Laundry Men</option>
												<option value="delivery_boy">Delivery Boy</option>
											</select>
											@error('role')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
									<div class="col-xl-6 col-md-12  col-sm-12">
										<div class="form-group">
											<label for="contact_no">Contact Number <span class="required_span text-danger">*</span></label>
											<input type="number" name="contact_no" placeholder=" Contact Number" required  id="contact_no" class="form-control" />
											@error('contact_no')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
								</div>
								<div class="form-group laundry_form_group" style="display:none;">
									<label for="laundry_id">Laundry <span class="required_span text-danger">*</span></label>
									<select name="laundry_id" id="laundry_id" required class="multiselect-dropdown form-control">
										@foreach( $laundries as $laundry)	
											<option value="{{$laundry->id}}">{{$laundry->laundry_name}}</option>
										@endforeach
									</select>
									@error('laundry_id')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>
								<div class="row">
									<div class="col-xl-6 col-md-12  col-sm-12">
										<div class="form-group">
											<label for="email"> Email <span class="required_span text-danger">*</span></label>
											<input type="email" name="email" placeholder="Email" required  id="email" class="form-control" />
											@error('email')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
									<div class="col-xl-6 col-md-12  col-sm-12">
										<div class="form-group">
											<label for="password"> Password <span class="required_span text-danger">*</span></label>
											<input type="password" name="password"  required  id="password" class="form-control" />
											@error('password')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
								</div>
								
							</div>
							<div class="d-block text-right card-footer">
								<button class="mb-2 mr-2 btn btn-shadow btn-gradient-danger" >Submit</button>
							</div>
							{{ csrf_field() }}
						</form>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			$('.delete_category_btn').click(function(e){
				e.preventDefault();
				var id = $(this).attr('data-id');
				var deleteFunction=$(this).attr('rel');
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
				
			});
			function showSuccess(){
				swal({
					title: "Laundry Area Successfully Deleted!",
					icon: "success",
					type: 'success',
					button: "Ok",
				});
			}
			jQuery('#role').change(function(){
				var role = jQuery(this).val();
				if(role == 'laundry_admin'){
					jQuery('.laundry_form_group').show();
				}else{
					jQuery('.laundry_form_group').hide();
				}
			});
		</script>
@endsection