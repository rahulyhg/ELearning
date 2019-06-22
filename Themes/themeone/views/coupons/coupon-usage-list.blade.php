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
								
				<!-- /.row -->
				<div class="panel panel-custom">
					<div class="panel-heading">
						
						<div class="pull-right messages-buttons">
							<a href="{{URL_COUPONS_ADD}}" class="btn  btn-primary button" >{{ __('messages.create')}}</a>
						</div>
					 
						<h1>{{ $title }}</h1>
					</div>
					<div class="panel-body packages">
						<div class="table-responsive"> 
						<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>{{ __('messages.title')}}</th>
									<th>{{ __('messages.code')}}</th>
									<th>{{ __('messages.type')}}</th>
									<th>{{ __('messages.discount')}}</th>
									<th>{{ __('messages.minimum_bill')}}</th>
									<th>{{ __('messages.maximum_discount')}}</th>
									<th>{{ __('messages.limit')}}</th>
									<th>{{ __('messages.status')}}</th>
									<th>{{ __('messages.action')}}</th>
								  
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
  
 @include('common.datatables', array('route'=>URL_COUPONS_USAGE_AJAXDATA, 'route_as_url' => TRUE))
 @include('common.deletescript', array('route'=>URL_COUPONS_DELETE))

@stop
