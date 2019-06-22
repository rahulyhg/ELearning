@extends('layouts.admin.adminlayout')
@section('header_scripts')
<link href="{{CSS}}ajax-datatables.css" rel="stylesheet">
@stop
@section('content')


<div id="page-wrapper">
			<div class="container-fluid">
				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<li><a href="{{PREFIX}}"><i class="mdi mdi-home"></i></a> </li>
							<li>{{ $title }}</li>
						</ol>
					</div>
				</div>
<<<<<<< HEAD
								
				<!-- /.row -->
				<div class="panel panel-custom">
					<div class="panel-heading">
						
						<div class="pull-right messages-buttons">
							<a href="{{URL_COUPONS_ADD}}" class="btn  btn-primary button" >{{ getPhrase('create')}}</a>
						</div>
					 
						<h1>{{ $title }}</h1>
					</div>
					<div class="panel-body packages">
						<div > 
=======

				<!-- /.row -->
				<div class="panel panel-custom">
					<div class="panel-heading">

						<div class="pull-right messages-buttons">
							<a href="{{URL_COUPONS_ADD}}" class="btn  btn-primary button" >{{ getPhrase('create')}}</a>
						</div>

						<h1>{{ $title }}</h1>
					</div>
					<div class="panel-body packages">
						<div >
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>{{ getPhrase('title')}}</th>
									<th>{{ getPhrase('code')}}</th>
									<th>{{ getPhrase('type')}}</th>
									<th>{{ getPhrase('discount')}}</th>
									<th>{{ getPhrase('minimum_bill')}}</th>
									<th>{{ getPhrase('maximum_discount')}}</th>
									<th>{{ getPhrase('limit')}}</th>
									<th>{{ getPhrase('status')}}</th>
									<th>{{ getPhrase('action')}}</th>
<<<<<<< HEAD
								  
								</tr>
							</thead>
							 
=======

								</tr>
							</thead>

>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						</table>
						</div>

					</div>
				</div>
			</div>
			<!-- /.container-fluid -->
		</div>
@endsection
<<<<<<< HEAD
 

@section('footer_scripts')
  
=======


@section('footer_scripts')

>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
 @include('common.datatables', array('route'=>URL_COUPONS_GETLIST, 'route_as_url' => TRUE))
 @include('common.deletescript', array('route'=>URL_COUPONS_DELETE))

@stop
