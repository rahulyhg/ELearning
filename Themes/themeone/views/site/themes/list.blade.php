@extends('layouts.admin.adminlayout')
@section('header_scripts')
{{-- <link href="{{CSS}}ajax-datatables.css" rel="stylesheet"> --}}
 <link href="{{themes('css/ajax-datatables.css')}}" rel="stylesheet">
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
								
				<!-- /.row -->
				<div class="panel panel-custom">
					<div class="panel-heading">
						
<<<<<<< HEAD
						
=======

>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						<h1>{{ $title }}</h1>
					</div>
					<div class="panel-body packages">
						<div> 
						<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
							<thead>
								<tr>
<<<<<<< HEAD
									 
=======

>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
									<th>{{ getPhrase('theme_name')}}</th>
									<th>{{ getPhrase('description')}}</th>
									<th>{{ getPhrase('make_as_default_theme')}}</th>
									<th>{{ getPhrase('action')}}</th>
<<<<<<< HEAD
								  
=======

>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
								</tr>
							</thead>
							 
						</table>
						</div>

					</div>
				</div>
			</div>
			<!-- /.container-fluid -->
		</div>
@endsection
 

@section('footer_scripts')
  
 @include('common.datatables', array('route'=>URL_THEMES_GET_DATA, 'route_as_url'=>TRUE))

@stop
