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
					Privacy Policy
					</div>
				</div>   
			</div>
		</div>  
          <div class="page_wrapper">
			<div class="row">
			    @foreach($categories as $category)
				<div class="col-xl-8">
					<div class="card-hover-shadow card-border mb-3 card">
						<form action="{{url('privacy-update/'.$category->id)}}" enctype="multipart/form-data" method="post" >
					
							
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
                                   <input type="hidden" name="id" value="{{$category->id}}" class="form-control" />
							
								<div class="form-group">
									<label for="category_name">Privacy</label>
									<input type="text" name="privacy" value="{{$category->privacy}}" class="form-control" />
								</div>
							
							</div>
							<div class="d-block text-right card-footer">
								<button class="mb-2 mr-2 btn btn-shadow btn-gradient-danger" >Submit</button>
							</div>
							{{ csrf_field() }}
						</form>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	
@endsection