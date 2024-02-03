@include('admin.layouts.header')
@section('content')	
<style type="text/css">
	.display_none{
		display:none;
	}
</style>
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
						<form action="{{route('user.update',$user->id)}}" enctype="multipart/form-data" method="post" >
						@method('PUT')
							<div class="card-header">Edit User
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
									<input type="text" name="name" value="{{$user->name}}" placeholder="User Name" required  id="user_name" class="form-control" />
									@error('name')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>
								<div class="form-group">
									<label for="description"> Description</label>
									<textarea name="description" id="description" value="{{$user->description}}" class="form-control" rows="2">{{$user->description}}</textarea>
									@error('description')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>
								<div class="row">
									<div class="col-xl-6 col-md-12  col-sm-12">
										<div class="form-group">
											<label for="role">Role <span class="required_span text-danger">*</span></label>
											<select name="role" id="role" required class=" form-control">
												@foreach($roles as $role)
													<option value="{{$role->id}}" {{($user->role == $role->id)?'selected':'' }}>{{$role->role_name}}</option>
												@endforeach
											</select>
											@error('role')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
									<div class="col-xl-6 col-md-12  col-sm-12">
										<div class="form-group">
											<label for="mobile_no">Contact Number <span class="required_span text-danger">*</span></label>
											<input type="number" value="{{$user->mobile_no}}" name="mobile_no" placeholder=" Contact Number" required  id="mobile_no" class="form-control" />
											@error('mobile_no')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-6 col-md-12  col-sm-12">
										<div class="form-group">
											<label for="email"> Email <span class="required_span text-danger">*</span></label>
											<input type="email" name="email" value="{{$user->email}}" placeholder="Email" required  id="email" class="form-control" />
											@error('email')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
									<div class="col-xl-6 col-md-12  col-sm-12">
										<div class="form-group">
											<label for="password"> Password</label>
											<label class="text-danger"> * Leave blank if don't want to change</label>
											<input type="password" name="password" id="password" class="form-control" />
											@error('password')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
									
									<div class="col-xl-6 col-md-12  col-sm-12">
										<div class="form-group">
											<label for="country"> Country <span class="required_span text-danger">*</span></label>
											<input type="text" name="country" value="{{$user->country}}" placeholder="Country" required  id="country" class="form-control" />
											@error('country')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
									<div class="col-xl-6 col-md-12  col-sm-12">
										<div class="form-group">
											<label for="nationality"> Nationality <span class="required_span text-danger">*</span></label>
											<input type="text" name="nationality" value="{{$user->nationality}}" placeholder="Nationality" required  id="nationality" class="form-control" />
											@error('nationality')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
									<div class="col-xl-6 col-md-12  col-sm-12">
										<div class="form-group">
											<label for="insta_id"> Instagram Id <span class="required_span text-danger">*</span></label>
											<input type="text" name="insta_id" value="{{$user->insta_id}}" placeholder="Instagram Id" required  id="insta_id" class="form-control" />
											@error('insta_id')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
									<div class="col-xl-6 col-md-12  col-sm-12">
										<div class="form-group">
											<label for="snapchat_id"> Snapchat id <span class="required_span text-danger">*</span></label>
											<input type="text" name="snapchat_id" value="{{$user->snapchat_id}}" placeholder="Snapchat id" required  id="snapchat_id" class="form-control" />
											@error('snapchat_id')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
									<div class="col-xl-6 col-md-12  col-sm-12">
										<div class="form-group">
											<label for="user_image"> Profile Image<span class="required_span text-danger">*</span></label>
											<input type="file" name="user_image"  id="user_image" class="form-control" />
											<input type="hidden" name="user_image_old" value="{{$user->user_image}}" />
											
											@if(!empty($user->user_image))
												<img src="{{url('/').'/'.$user->user_image}}" width="150" alt="" />
											@endif
											
											@error('user_image')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
									
									<div class="col-xl-6 col-md-12 col-sm-12 shop_input {{ ($user->role != '4')?'display_none':'' }}">
										<div class="form-group">
											<label for="business_category">Business Category <span class="required_span text-danger">*</span></label>
											<select name="business_category" id="business_category" required class=" form-control">
												@foreach($categories as $category)
													<option value="{{$category->id}}" {{($user->business_category == $category->id)?'selected':'' }}>{{$category->category_name}}</option>
												@endforeach
											</select>
											@error('business_category')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
									
									<div class="col-xl-6 col-md-12 col-sm-12 model_input {{ ($user->role != '3')?'display_none':'' }}">
										<div class="form-group">
											<label for="skin_type">Skin Type <span class="required_span text-danger">*</span></label>
											<select name="skin_type" id="skin_type" required class=" form-control">
												<option value="Albino" <?= ($user_details['skin_type'] == 'Albino')?'selected':'' ?>>Albino</option>
												<option value="Black" <?= ($user_details['skin_type'] == 'Black')?'selected':'' ?>>Black</option>
												<option value="Dark" <?= ($user_details['skin_type'] == 'Dark')?'selected':'' ?>>Dark</option>
												<option value="Yellow" <?= ($user_details['skin_type'] == 'Yellow')?'selected':'' ?>>Yellow</option>
												<option value="Dark Brown" <?= ($user_details['skin_type'] == 'Dark Brown')?'selected':'' ?>>Dark Brown</option>
												<option value="Fair" <?= ($user_details['skin_type'] == 'Fair')?'selected':'' ?>>Fair</option>
												<option value="Light" <?= ($user_details['skin_type'] == 'Light')?'selected':'' ?>>Light</option>
												<option value="Light Brown" <?= ($user_details['skin_type'] == 'Light Brown')?'selected':'' ?>>Light Brown</option>
												<option value="Medium" <?= ($user_details['skin_type'] == 'Medium')?'selected':'' ?>>Medium</option>
												<option value="Medium Brown" <?= ($user_details['skin_type'] == 'Medium Brown')?'selected':'' ?>>Medium Brown</option>
												<option value="Olive" <?= ($user_details['skin_type'] == 'Olive')?'selected':'' ?>>Olive</option>
												<option value="Ruddy" <?= ($user_details['skin_type'] == 'Ruddy')?'selected':'' ?>>Ruddy</option>
												<option value="Sallow" <?= ($user_details['skin_type'] == 'Sallow')?'selected':'' ?>>Sallow</option>
												<option value="Other" <?= ($user_details['skin_type'] == 'Other')?'selected':'' ?>>Other</option>
											</select>
											@error('skin_type')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
									<div class="col-xl-6 col-md-12 col-sm-12 model_input {{ ($user->role != '3')?'display_none':'' }}">
										<div class="form-group">
											<label for="body_type">Body Type <span class="required_span text-danger">*</span></label>
											<select name="body_type" id="body_type" required class=" form-control">
												<option value="EctoMorph" <?= ($user_details['body_type'] == 'EctoMorph')?'selected':'' ?>>EctoMorph</option>
												<option value="Mesomorph" <?= ($user_details['body_type'] == 'Mesomorph')?'selected':'' ?>>Mesomorph</option>
												<option value="Endomorph" <?= ($user_details['body_type'] == 'Endomorph')?'selected':'' ?>>Endomorph</option>
											</select>
											@error('body_type')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
									<div class="col-xl-6 col-md-12 col-sm-12 model_input {{ ($user->role != '3')?'display_none':'' }}">
										<div class="form-group">
											<label for="eye_color">Eye Color <span class="required_span text-danger">*</span></label>
											<select name="eye_color" id="eye_color" required class=" form-control">
												<option value="Black" <?= ($user_details['eye_color'] == 'Black')?'selected':'' ?>>Black</option>
												<option value="Blue" <?= ($user_details['eye_color'] == 'Blue')?'selected':'' ?>>Blue</option>
												<option value="Brown" <?= ($user_details['eye_color'] == 'Brown')?'selected':'' ?>>Brown</option>
												<option value="Gray" <?= ($user_details['eye_color'] == 'Gray')?'selected':'' ?>>Gray</option>
												<option value="Green" <?= ($user_details['eye_color'] == 'Green')?'selected':'' ?>>Green</option>
												<option value="Hazel" <?= ($user_details['eye_color'] == 'Hazel')?'selected':'' ?>>Hazel</option>
												<option value="Maroon" <?= ($user_details['eye_color'] == 'Maroon')?'selected':'' ?>>Maroon</option>
												<option value="Pink" <?= ($user_details['eye_color'] == 'Pink')?'selected':'' ?>>Pink</option>
												<option value="Multicolored" <?= ($user_details['eye_color'] == 'Multicolored')?'selected':'' ?>>Multicolored</option>
												<option value="Other" <?= ($user_details['eye_color'] == 'Other')?'selected':'' ?>>Other</option>
											</select>
											@error('eye_color')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
									<div class="col-xl-6 col-md-12 col-sm-12 model_input {{ ($user->role != '3')?'display_none':'' }}">
										<div class="form-group">
											<label for="hair_color">Hair Color <span class="required_span text-danger">*</span></label>
											<select name="hair_color" id="hair_color" required class=" form-control">
												<option value="Brown" <?= ($user_details['hair_color'] == 'Brown')?'selected':'' ?>>Brown</option>
												<option value="Black" <?= ($user_details['hair_color'] == 'Black')?'selected':'' ?>>Black</option>
												<option value="White" <?= ($user_details['hair_color'] == 'White')?'selected':'' ?>>White</option>
												<option value="Sandy" <?= ($user_details['hair_color'] == 'Sandy')?'selected':'' ?>>Sandy</option>
												<option value="Gray or Partially Gray" <?= ($user_details['hair_color'] == 'Gray or Partially Gray')?'selected':'' ?>>Gray or Partially Gray</option>
												<option value="Red/Auburn" <?= ($user_details['hair_color'] == 'Red/Auburn')?'selected':'' ?>>Red/Auburn</option>
												<option value="Blond/Strawberry" <?= ($user_details['hair_color'] == 'Blond/Strawberry')?'selected':'' ?>>Blond/Strawberry</option>
												<option value="Blue" <?= ($user_details['hair_color'] == 'Blue')?'selected':'' ?>>Blue</option>
												<option value="Green" <?= ($user_details['hair_color'] == 'Green')?'selected':'' ?>>Green</option>
												<option value="Orange" <?= ($user_details['hair_color'] == 'Orange')?'selected':'' ?>>Orange</option>
												<option value="Pink" <?= ($user_details['hair_color'] == 'Pink')?'selected':'' ?>>Pink</option>
												<option value="Purple" <?= ($user_details['hair_color'] == 'Purple')?'selected':'' ?>>Purple</option>
												<option value="Partly or Completely Bald" <?= ($user_details['hair_color'] == 'Partly or Completely Bald')?'selected':'' ?>>Partly or Completely Bald</option>
												<option value="Other" <?= ($user_details['hair_color'] == 'Other')?'selected':'' ?>>Other</option>
											</select>
											@error('hair_color')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
									<div class="col-xl-6 col-md-12 col-sm-12 model_input {{ ($user->role != '3')?'display_none':'' }}">
										<div class="form-group">
											<label for="height">Height <span class="required_span text-danger">*</span></label>
											<input type="text" name="height" value="{{ $user_details['height'] }}" id="height" class="form-control" />
											@error('height')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
									<div class="col-xl-6 col-md-12 col-sm-12 model_input {{ ($user->role != '3')?'display_none':'' }}">
										<div class="form-group">
											<label for="available_for_work">Available For Work <span class="required_span text-danger">*</span></label>
											<input type="text" name="available_for_work" value="{{ $user_details['available_for_work'] }}" id="available_for_work" class="form-control" />
											@error('available_for_work')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
									<div class="col-xl-6 col-md-12 col-sm-12 model_input {{ ($user->role != '3')?'display_none':'' }}">
										<div class="form-group">
											<label for="price_per_hour">Price Per Hour <span class="required_span text-danger">*</span></label>
											<input type="number" min="0" name="price_per_hour" value="{{ $user_details['price_per_hour'] }}" id="price_per_hour" class="form-control" />
											@error('price_per_hour')
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
			$('#total_user_rated').keyup(function(){
				var rating_count = $('#total_rating_count').val();
				var user_rated = $('#total_user_rated').val();
				var avg = parseInt(rating_count) / parseInt(user_rated);
				avg = avg.toFixed(1);
				$('.show_total_rating h4 b').html(avg);
			});
			$('#total_rating_count').keyup(function(){
				var rating_count = $('#total_rating_count').val();
				var user_rated = $('#total_user_rated').val();
				var avg = parseInt(rating_count) / parseInt(user_rated);
				avg = avg.toFixed(1);
				$('.show_total_rating h4 b').html(avg);
			});
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
				if(role == '3'){
					jQuery('.model_input').removeClass('display_none');
					jQuery('.shop_input').addClass('display_none');
				}else if(role == '4'){
					jQuery('.model_input').addClass('display_none');
					jQuery('.shop_input').removeClass('display_none');
				}else{
					jQuery('.model_input').addClass('display_none');
					jQuery('.shop_input').addClass('display_none');
				}
			});
		</script>
@endsection