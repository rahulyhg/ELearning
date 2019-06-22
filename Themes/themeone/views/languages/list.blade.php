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
<<<<<<< HEAD
							<li>{{ $title}}</li>
=======
							<li>{{ $title }}</li>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						</ol>
					</div>
				</div>
								
				<!-- /.row -->
				<div class="panel panel-custom">
					<div class="panel-heading">
						
						<div class="pull-right messages-buttons">
							 
<<<<<<< HEAD
							<a href="{{URL_LANGUAGES_ADD}}" class="btn  btn-primary button" >{{ __('messages.create')}}</a>
							 
						</div>
						<h1>{{ $title}}</h1>
=======
							<a href="{{URL_LANGUAGES_ADD}}" class="btn  btn-primary button" >{{ getPhrase('create')}}</a>
							 
						</div>
						<h1>{{ $title }}</h1>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
					</div>
					<div class="panel-body packages">
						<div> 
						<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
							<thead>
								<tr>
									 
<<<<<<< HEAD
									<th>{{ __('messages.languages')}}</th>
									<th>{{ __('messages.code')}}</th>
									<th>{{ __('messages.is_rtl')}}</th>
									<th>{{ __('messages.default_language')}}</th>
							 		<th>{{ __('messages.action')}}</th>
=======
									<th>{{ getPhrase('language')}}</th>
									<th>{{ getPhrase('code')}}</th>
									<th>{{ getPhrase('is_rtl')}}</th>
									<th>{{ getPhrase('default_language')}}</th>
							 		<th>{{ getPhrase('action')}}</th>
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
  
 @include('common.datatables', array('route'=>'languages.dataTable'))
 @include('common.deletescript', array('route'=>URL_LANGUAGES_DELETE))

@stop
