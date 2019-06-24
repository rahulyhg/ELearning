@extends('layouts.admin.adminlayout')
@section('header_scripts')
<link href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css" rel="stylesheet">
@stop
@section('content')


<div id="page-wrapper">
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
					@include('library.library-masters.collections.instance-list-information', array('master_record' => $master_record))
					<div class="panel-heading">
						
						<div class="pull-right messages-buttons">
							<a href="/library/master/collection/add/{{ $master_record->slug }}" class="btn  btn-primary button" >{{ __('messages.create')}}</a>
						</div>
						<h1>{{ $title }}</h1>
					</div>
					<div class="panel-body packages">

						<div class="table-responsive"> 
						<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>{{ __('messages.type')}}</th>
									<th>{{ __('messages.image')}}</th>
									<th>{{ __('messages.title')}}</th>
									<th>{{ __('messages.author')}}</th>
									<th>{{ __('messages.publisher')}}</th>
									<th>{{ __('messages.edition')}}</th>
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
  
 @include('common.datatables', array('route'=>'libraryinstances.dataTable'))
 @include('common.deletescript', array('route'=>'/library/master/delete/'))

@stop
