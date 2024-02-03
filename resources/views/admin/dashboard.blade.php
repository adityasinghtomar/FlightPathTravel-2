@extends('admin.layouts.header')
@section('content')	

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
    <div class="row">
 
		<div class="col-md-6 col-xl-4 col-lg-4">
		   <div class="card mb-3 widget-content bg-happy-itmeo">
			  <div class="widget-content-wrapper text-white">
				 <div class="widget-content-left">
					<div class="widget-heading">Total Users</div>
					<div class="widget-subheading">Total Users till now</div>
				 </div>
				 <div class="widget-content-right">
					<div class="widget-numbers text-white"><span>{{$user_count}}</span></div>
				 </div>
			  </div>
		   </div>
		</div>
	
		<div class="col-md-6 col-xl-4 col-lg-4">
		   <div class="card mb-3 widget-content bg-arielle-smile">
			  <div class="widget-content-wrapper text-white">
				 <div class="widget-content-left">
					<div class="widget-heading">Total Pending</div>
					<div class="widget-subheading">Total Pending till now</div>
				 </div>
				 <div class="widget-content-right">
				 </div>
			  </div>
		   </div>
		</div>
		<div class="col-md-6 col-xl-4 col-lg-4">
		   <div class="card mb-3 widget-content bg-happy-itmeo">
			  <div class="widget-content-wrapper text-white">
				 <div class="widget-content-left">
					<div class="widget-heading">Total Success</div>
					<div class="widget-subheading">Total Success till now</div>
				 </div>
				 <div class="widget-content-right">
				 </div>
			  </div>
		   </div>
		</div>
	

@endsection
@section('scripts')
<script type="text/javascript">

</script>
@endsection
