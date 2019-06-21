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
							<li>{{ __('messages.quiz_categories')}}</li>
						</ol>
					</div>
				</div>
								
				<!-- /.row -->
				<div class="panel panel-custom">
					<div class="panel-heading">
						
						<div class="pull-right messages-buttons">
							 
							<a href="{{URL_QUIZ_CATEGORY_ADD}}" class="btn  btn-primary button" >{{ __('messages.create')}}</a>
							 
						</div>
						<h1>{{ __('messages.quiz_categories')}}</h1>
					</div>
					<div class="panel-body packages">
						<div> 
						<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
							<thead>
								<tr>
									 
									<th>{{ __('messages.category')}}</th>
									<th>{{ __('messages.image')}}</th>
									<th>{{ __('messages.description')}}</th>
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
  
 @include('common.datatables', array('route'=>'quizcategories.dataTable'))
 @include('common.deletescript', array('route'=>URL_QUIZ_CATEGORY_DELETE))

@stop
