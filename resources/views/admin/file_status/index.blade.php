@include('admin.layouts.header')
@section('content')	
<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/577845f6a5.js"
        crossorigin="anonymous"></script>
     <div class="app-page-title">
			<div class="page-title-wrapper">
				<div class="page-title-heading">
					<div class="page-title-icon">
						<i class="pe-7s-photo-gallery icon-gradient bg-ripe-malin ">
						</i>
					</div>
					<div>
						File Status Details 
					</div>
				</div>   
			</div>
		</div>  
          <div class="page_wrapper">
			<div class="row">
				<div class="col-12">
					<div class="card-hover-shadow card-border mb-3 card">
						<div class="card-header">File Status 
						</div>
						<div class="card-body">
							<table style="width: 90%;" id="example" class="table table-hover table-striped table-bordered">
								<thead>
									<tr>
										<th>S.no</th>
										<th>User Name</th>
										<th>Document Collect</th>
										<th>Login File</th>
										<th>Document Verification</th>
										<th>Personal_Discussion</th>
										<th>legail Process</th>
										<th>Loan Sention</th>
										<th>Disbursement</th>
									
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
                                                <td>
                                                   <?php if($theme->document_collect == '1'){ ?> 
                                                
                                                  <a href="#" class="btn btn-success">Verified</a>
                                                
                                                <?php }else{ ?> 
                                                
                                                  <a href="#" class="btn btn-danger">Pendding</a>
                                                
                                                <?php } ?>
                                                </td>
                                                <td>
                                                   <?php if($theme->login_file == '1'){ ?> 
                                                
                                                  <a href="#" class="btn btn-success">Verified</a>
                                                
                                                <?php }else{ ?> 
                                                
                                                  <a href="#" class="btn btn-danger">Pendding</a>
                                                
                                                <?php } ?>
                                                </td>
                                               
                                                <td>
                                                   <?php if($theme->document_verification == '1'){ ?> 
                                                
                                                  <a href="#" class="btn btn-success">Verified</a>
                                                
                                                <?php }else{ ?> 
                                                
                                                  <a href="#" class="btn btn-danger">Pendding</a>
                                                
                                                <?php } ?>
                                                </td>
                                                 
											    <td>
                                                   <?php if($theme->personal_discussion == '1'){ ?> 
                                                
                                                  <a href="#" class="btn btn-success">Verified</a>
                                                
                                                <?php }else{ ?> 
                                                
                                                  <a href="#" class="btn btn-danger">Pendding</a>
                                                
                                                <?php } ?>
                                                </td>
											     <td>
                                                   <?php if($theme->legail_process == '1'){ ?> 
                                                
                                                  <a href="#" class="btn btn-success">Verified</a>
                                                
                                                <?php }else{ ?> 
                                                
                                                  <a href="#" class="btn btn-danger">Pendding</a>
                                                
                                                <?php } ?>
                                                </td>
											    <td>
                                                   <?php if($theme->loan_sention == '1'){ ?> 
                                                
                                                  <a href="#" class="btn btn-success">Verified</a>
                                                
                                                <?php }else{ ?> 
                                                
                                                  <a href="#" class="btn btn-danger">Pendding</a>
                                                
                                                <?php } ?>
                                                </td>
											    <td>
                                                   <?php if($theme->disbursement == '1'){ ?> 
                                                
                                                  <a href="#" class="btn btn-success">Verified</a>
                                                
                                                <?php }else{ ?> 
                                                
                                                  <a href="#" class="btn btn-danger">Pendding</a>
                                                
                                                <?php } ?>
                                                </td>
											   
												<!--<td>-->
												<!--	<a href = 'theme-edit/{{ $theme->id }}' class="mb-2 mr-2 btn btn-shadow btn-gradient-danger delete_theme_btn_{{$theme->id}}">Edit</a>-->
												<!--	<button class="mb-2 mr-2 btn btn-shadow btn-gradient-danger delete_theme_btn_{{$theme->id}}" onclick="delete_product({{$theme->id}})" data-id="{{$theme->id}}" rel="delete-theme">Delete</button>-->
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