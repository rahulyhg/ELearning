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
							<li><a href="{{url('/')}}"><i class="mdi mdi-home"></i></a> </li>
							<li><a href="{{URL_QUIZ_QUESTIONBANK}}">{{ __('messages.question_subjects') }}</a></li>
							<li><a href="{{URL_QUESTIONBAMK_IMPORT}}">{{ __('messages.import_questions') }}</a></li>
							<li>{{ $title }}</li>
						</ol>
					</div>
				</div>
								
				<!-- /.row -->
				<div class="panel panel-custom">
					<div class="panel-heading">
						
						<div class="pull-right messages-buttons">
							 
							<a href="{{URL_QUESTIONBANK_ADD_QUESTION.$subject->slug}}" class="btn  btn-primary button" >{{ __('messages.create')}}</a>
							 
						</div>
						<h1>{{ $title }}</h1>
					</div>
					<div class="panel-body packages">
						<div class="table-responsive"> 
						<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
							<thead>
								<tr>
								 
									<th>{{ __('messages.subject')}}</th>
									<th>{{ __('messages.topic')}}</th>
									<th>{{ __('messages.type')}}</th>
									<th>{{ __('messages.question')}}</th>
									<th>{{ __('messages.marks')}}</th>
									<th>{{ __('messages.difficulty')}}</th>
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
  {{-- <script src="{{JS}}bootstrap-toggle.min.js"></script>
 	<script src="{{JS}}jquery.dataTables.min.js"></script>
	<script src="{{JS}}dataTables.bootstrap.min.js"></script> --}}
 @include('common.datatables', array('route'=>URL_QUESTIONBANK_GETQUESTION_LIST.$subject->slug, 'route_as_url' => 'TRUE'))
 @include('common.deletescript', array('route'=>URL_QUESTIONBANK_DELETE))



@stop
