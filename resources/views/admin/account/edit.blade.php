@include('admin.layouts.header')
@section('content')	
     <div class="app-page-title">
			<div class="page-title-wrapper">
				<div class="page-title-heading">
					<div class="page-title-icon">
						<i class="pe-7s-photo-gallery icon-gradient bg-ripe-malin ">
						</i>
					</div>
					<div>
					Theme
					</div>
				</div>   
			</div>
		</div>  
          <div class="page_wrapper">
			<div class="row">
				<div class="col-xl-6">
					<div class="card-hover-shadow card-border mb-3 card">
						<form action="{{url('/theme-update/'.$category->id)}}" enctype="multipart/form-data" method="post" >
						@method('POST')
							<div class="card-header">Edit Theme 
								<div class="btn-actions-pane-right">
									<a href="{{url('/Theme')}}" class="mb-2 mr-2 btn btn-shadow btn-gradient-info">List</a>
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
									<label for="theme_name">Theme Name</label>
									<input type="text" name="theme_name" value="{{$category->theme_name}}" placeholder="Category Name" required  id="theme_name" class="form-control" />
								</div>
								<div class="form-group">
									<label for="category_img">Theme Image</label></br>
									@if(!empty($category->theme_image))
										<img src="{{url('/').'/'.$category->theme_image}}" alt="{{$category->theme_name}}" width="100" height="100" style="margin-bottom:10px;" />
									@endif
									<input type="file" name="theme_image" id="category_img" class="form-control" />
									<input type="hidden" name="old_theme_image" value="{{$category->theme_image}}" />
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
		</script>
@endsection