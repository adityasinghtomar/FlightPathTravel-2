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
						Account Details 
					</div>
				</div>   
			</div>
		</div>  
          <div class="page_wrapper">
			<div class="row">
				<div class="col-xl-12">
					<div class="card-hover-shadow card-border mb-3 card">
						<div class="card-header">All Account Details 
						</div>
						<div class="card-body">
							<table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
								<thead>
									<tr>
										<th>S.no</th>
										<th>User Name</th>
										<th>Account Holder Name</th>
										<th>Bank IFSC</th>
										<th>Account No</th>
										<!--<th>Action</th>-->
									</tr>
								</thead>
								<tbody>
									<?php $i=1; ?>
                                        @foreach($categories as $theme)
                                            <tr>
												<td>{{$i}}</td>
												<td><?php
                                                foreach ($user as $key => $value) {
                                                        if ($key==$theme->user_id) {
                                                           echo $value;
                                                        }
                                                }
                                                ?></td>
											    <td>{{$theme->account_holder_name}}</td>
											    <td>{{$theme->ifsc_code}}</td>
											    <td>{{$theme->account_no}}</td>
												<!--<td>-->
													<!--<a href = 'theme-edit/{{ $theme->id }}' class="mb-2 mr-2 btn btn-shadow btn-gradient-danger delete_theme_btn_{{$theme->id}}">Edit</a>-->
													<!--<button class="mb-2 mr-2 btn btn-shadow btn-gradient-danger delete_theme_btn_{{$theme->id}}" onclick="delete_product({{$theme->id}})" data-id="{{$theme->id}}" rel="delete-theme">Delete</button>-->
												<!--</td>-->
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
		<!--<script type="text/javascript">-->
		<!--	function delete_product(id){-->
		<!--		var deleteFunction=$('.delete_theme_btn_'+id).attr('rel');-->
		<!--		swal({-->
		<!--			title: "Are you sure?",-->
		<!--			text: "Once deleted, you will not be able to recover this file!",-->
		<!--			type: 'warning',-->
		<!--			dangerMode: true,-->
		<!--			buttons: true,-->
		<!--			showCancelButton: true,-->
		<!--			confirmButtonColor: '#b11e41',-->
		<!--			cancelButtonColor: '#d33',-->
		<!--			confirmButtonText: 'Yes, delete it!'-->
		<!--		},function(){-->
		<!--			window.location.href="/"+deleteFunction+"/"+id;-->
		<!--		});-->
		<!--	}-->
		<!--	function showSuccess(){-->
		<!--		swal({-->
		<!--			title: "Laundry Area Successfully Deleted!",-->
		<!--			icon: "success",-->
		<!--			type: 'success',-->
		<!--			button: "Ok",-->
		<!--		});-->
		<!--	}-->
		<!--</script>-->
@endsection