@extends($layout)
@section('header_scripts')
 
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
							<li><a href="{{URL_QUIZ_QUESTIONBANK}}">{{__('messages.questions')}}</a> </li>
							<li><a href="{{URL_QUESTIONBAMK_IMPORT}}">{{__('messages.import')}}</a> </li>
=======
							<li><a href="{{URL_QUIZ_QUESTIONBANK}}">{{getPhrase('questions')}}</a> </li>
							<li><a href="{{URL_QUESTIONBAMK_IMPORT}}">{{getPhrase('import')}}</a> </li>
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
							<a href="{{URL_QUESTIONBAMK_IMPORT}}" class="btn  btn-primary button" >{{ __('messages.import_excel')}}</a>
							 
							<a href="{{URL_QUIZ_QUESTIONBANK}}" class="btn  btn-primary button" >{{ __('messages.list')}}</a>
=======
							<a href="{{URL_QUESTIONBAMK_IMPORT}}" class="btn  btn-primary button" >{{ getPhrase('import_excel')}}</a>
							 
							<a href="{{URL_QUIZ_QUESTIONBANK}}" class="btn  btn-primary button" >{{ getPhrase('list')}}</a>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
							 
						</div>
						<h1>{{ $title }}</h1>
					</div>
					<div class="panel-body packages">





<ul class="nav nav-tabs add-studentlist-tabs">
<<<<<<< HEAD
  <li class="active"><a data-toggle="tab" href="#home">{{__('messages.success')}} <span class="badge badge-success">{{count($success_list)}}</span></a>
  </li>
  <li><a data-toggle="tab" href="#menu1">{{__('messages.failed')}}<span class="badge badge-error">{{count($failed_list)}}</span></a></li>
=======
  <li class="active"><a data-toggle="tab" href="#home">{{getPhrase('success')}} <span class="badge badge-success">{{count($success_list)}}</span></a>
  </li>
  <li><a data-toggle="tab" href="#menu1">{{getPhrase('failed')}}<span class="badge badge-error">{{count($failed_list)}}</span></a></li>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
     <h3>Success</h3>
    
    <div class="table-responsive"> 
						<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
							<thead>
								<tr>
<<<<<<< HEAD
								 	<th>{{ __('messages.topic_id')}}</th>
									<th>{{ __('messages.subject_id')}}</th>
									<th>{{ __('messages.question_type')}}</th>
									<th>{{ __('messages.question')}}</th>
									<th>{{ __('messages.total_answers')}}</th>
									 
									<th>{{ __('messages.status')}}</th>
=======
								 	<th>{{ getPhrase('topic_id')}}</th>
									<th>{{ getPhrase('subject_id')}}</th>
									<th>{{ getPhrase('question_type')}}</th>
									<th>{{ getPhrase('question')}}</th>
									<th>{{ getPhrase('total_answers')}}</th>
									 
									<th>{{ getPhrase('status')}}</th>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
								</tr>
							</thead>
							 <tbody>
							<?php foreach($success_list as $list) {
								$list = (object) $list;
								?>
							 	<tr>
							 		<td>{{$list->topic_id}}</td>
							 		<td>{{$list->subject_id}}</td>
							 		<td>{{$list->question_type}}</td>
							 		<td>{{$list->question}}</td>
							 		<td>{{$list->total_answers}}</td>
							 	 
<<<<<<< HEAD
							 		<td class="text-success">{{__('messages.success')}}</td>
=======
							 		<td class="text-success">{{getPhrase('success')}}</td>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
							 	</tr>
							<?php } ?>
							  
							 </tbody>
						</table>
						</div>
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>Failed</h3>
    
    <div class="table-responsive"> 
						<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
							 <thead>
								<tr>
<<<<<<< HEAD
								 	<th>{{ __('messages.topic_id')}}</th>
									<th>{{ __('messages.subject_id')}}</th>
									<th>{{ __('messages.question_type')}}</th>
									<th>{{ __('messages.question')}}</th>
									<th>{{ __('messages.total_answers')}}</th>
									
									<th>{{ __('messages.status')}}</th>
=======
								 	<th>{{ getPhrase('topic_id')}}</th>
									<th>{{ getPhrase('subject_id')}}</th>
									<th>{{ getPhrase('question_type')}}</th>
									<th>{{ getPhrase('question')}}</th>
									<th>{{ getPhrase('total_answers')}}</th>
									
									<th>{{ getPhrase('status')}}</th>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
								</tr>
							</thead>
							 <tbody>
							<?php foreach($failed_list as $list) {
								$list = (object) $list;
								?>
							 	<tr>
							 		<td>{{$list->record->topic_id}}</td>
							 		<td>{{$list->record->subject_id}}</td>
							 		<td>{{$list->record->question_type}}</td>
							 		<td>{{$list->record->question}}</td>
							 		<td>{{$list->record->total_answers}}</td>
							 		 
							 		<td class="text-danger">{{$list->type}}</td>
							 	</tr>
							<?php } ?>
							  
							 </tbody>
						</table>
						</div>
  </div>
  </div>
  
</div>
						<div class="table-responsive"> 
						 
						</div>
						 

					</div>

				</div>
			</div>
			<!-- /.container-fluid -->
		</div>
@endsection
 
@section('footer_scripts')
 
@stop
