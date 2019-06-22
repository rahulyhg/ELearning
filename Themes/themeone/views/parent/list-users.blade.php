@extends($layout)
@section('header_scripts')
<link href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css" rel="stylesheet">
@stop
@section('content')

<div id="page-wrapper">
			@extends('language')
			<div class="container-fluid">
				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<li><a href="{{url('/')}}"><i class="mdi mdi-home"></i></a> </li>
							<li>{{ $title }}</li>
						</ol>
					</div>
				</div>
								
				<!-- /.row -->
				<div class="panel panel-custom">
					<div class="panel-heading">
						
						<div class="pull-right messages-buttons">
							 
							<a href="{{URL_USERS_ADD}}" class="btn  btn-primary button" >{{ trans('home.Add User')}}</a>
						</div>
						<h1>{{ $title }}</h1>
					</div>
					<div class="panel-body packages">
						<div > 
						<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
							<thead>
								<tr>
								 	<th>{{ trans('home.name')}}</th>
									<th>{{ trans('home.email')}}</th>
									<th>{{ trans('home.image')}}</th>
									 
									<th>{{ trans('home.action')}}</th>
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
 
 <?php $url = URL_PARENT_CHILDREN_GETLIST.$user->slug;
 
  ?>
@section('footer_scripts')
  @include('common.datatables', array('route'=>$url, 'route_as_url' => TRUE))
 
@stop
