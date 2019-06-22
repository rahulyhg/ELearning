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
<<<<<<< HEAD
							<li><a href="{{URL_QUIZ_QUESTIONBANK}}">{{ __('messages.question_subjects') }}</a></li>
							<li><a href="{{URL_QUESTIONBAMK_IMPORT}}">{{ __('messages.import_questions') }}</a></li>
=======
							<li><a href="{{URL_QUIZ_QUESTIONBANK}}">{{ getPhrase('question_subjects') }}</a></li>
							<li><a href="{{URL_QUESTIONBAMK_IMPORT}}">{{ getPhrase('import_questions') }}</a></li>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
							<li>{{ $title }}</li>
						</ol>
					</div>
				</div>
								
				<!-- /.row -->
				<div class="panel panel-custom">
					<div class="panel-heading">
						
						<div class="pull-right messages-buttons">
							 
<<<<<<< HEAD
							<a href="{{URL_QUESTIONBANK_ADD_QUESTION.$subject->slug}}" class="btn  btn-primary button" >{{ __('messages.create')}}</a>
=======
							<a href="{{URL_QUESTIONBANK_ADD_QUESTION.$subject->slug}}" class="btn  btn-primary button" >{{ getPhrase('create')}}</a>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
							 
						</div>
						<h1>{{ $title }}</h1>
					</div>
					<div class="panel-body packages">
						<div class="table-responsive"> 
						<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
							<thead>
								<tr>
								 
<<<<<<< HEAD
									<th>{{ __('messages.subject')}}</th>
									<th>{{ __('messages.topic')}}</th>
									<th>{{ __('messages.type')}}</th>
									<th>{{ __('messages.question')}}</th>
									<th>{{ __('messages.marks')}}</th>
									<th>{{ __('messages.difficulty')}}</th>
									<th>{{ __('messages.action')}}</th>
=======
									<th>{{ getPhrase('subject')}}</th>
									<th>{{ getPhrase('topic')}}</th>
									<th>{{ getPhrase('type')}}</th>
									<th>{{ getPhrase('question')}}</th>
									<th>{{ getPhrase('marks')}}</th>
									<th>{{ getPhrase('difficulty')}}</th>
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
  {{-- <script src="{{JS}}bootstrap-toggle.min.js"></script>
 	<script src="{{JS}}jquery.dataTables.min.js"></script>
	<script src="{{JS}}dataTables.bootstrap.min.js"></script> --}}
 @include('common.datatables', array('route'=>URL_QUESTIONBANK_GETQUESTION_LIST.$subject->slug, 'route_as_url' => 'TRUE'))
 @include('common.deletescript', array('route'=>URL_QUESTIONBANK_DELETE))



@stop
