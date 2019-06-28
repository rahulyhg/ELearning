@extends('layouts.admin.adminlayout')

 @section('custom_div')

 <div ng-controller="prepareQuestions">

 @stop

@section('content')

<div id="page-wrapper">

			<div class="container-fluid">

				<!-- Page Heading -->

				<div class="row">

					<div class="col-lg-12">

						<ol class="breadcrumb">

							<li><a href="{{PREFIX}}"><i class="mdi mdi-home"></i></a> </li>

							<li><a href="{{URL_QUIZZES}}">{{ __('messages.quizzes')}}</a></li>

							<li class="active">{{isset($title) ? $title : ''}}</li>

						</ol>

					</div>

				</div>

					@include('errors.errors')
					
				<?php $settings = ($record) ? $settings : ''; ?>

				<div class="panel panel-custom" ng-init="initAngData({{$settings}});" >

					<div class="panel-heading">

						<div class="pull-right messages-buttons">

							<a href="{{URL_QUIZZES}}" class="btn  btn-primary button" >{{ __('messages.list')}}</a>

						</div>

					<h1>{{ $title }}  </h1>

					</div>

					<div class="panel-body" >

					<?php $button_name = __('messages.create'); ?>

					 		<div class="row">
					 		<div class="col-md-6">

							<fieldset class="form-group col-md-6">

								{{ Form::label('subject', __('messages.subject')) }}

								<span class="text-red">*</span>

								{{Form::select('subject', $subjects, null, ['class'=>'form-control', 'ng-model' => 'subject_id', 

								'placeholder' => 'Select', 'ng-change'=>'subjectChanged(subject_id)' ])}}

							</fieldset>

								<fieldset class="form-group col-md-6">

								{{ Form::label('difficulty', __('messages.difficulty')) }}
								<select ng-model="difficulty" class="form-control" >

								<option value="">{{__('messages.select')}}</option>	

								<option value="easy">{{__('messages.easy')}}</option>	

								<option value="medium">{{__('messages.medium')}}</option>	

								<option value="hard">{{__('messages.hard')}}</option>	

								</select>

								</fieldset>



								<fieldset class="form-group col-md-6">

								{{ Form::label('question_type', __('messages.question_type')) }}

								<select ng-model="question_type" class="form-control" >

									<option selected="selected" value="">{{__('messages.select')}}</option>

									<option value="radio">{{__('messages.single_answer')}}</option>

									<option value="checkbox">{{__('messages.multi_answer')}}</option>


									<option value="blanks">{{__('messages.fill_the_blanks')}}</option>

									<option value="match">{{__('messages.match_the_following')}}</option>

									<option value="para">{{__('messages.paragraph')}}</option>

									<option value="video">{{__('messages.video')}}</option>

								</select>

								</fieldset>

								<!-- <fieldset class="form-group col-md-6">

								{{ Form::label('show_in_front_end', __('messages.show_in_front_end')) }}

								<select ng-model="show_in_front_end" class="form-control" >

									<option selected="selected" value="">{{__('messages.select')}}</option>

									<option value="1">{{__('messages.yes')}}</option>

									<option value="0">{{__('messages.no')}}</option>


									

								</select>

								</fieldset> -->



								<!-- <fieldset class="form-group col-md-6">

								{{ Form::label('searchTerm', __('messages.search_term')) }}

								{{ Form::text('searchTerm', $value = null , $attributes = array('class'=>'form-control', 

						'placeholder' => __('messages.enter_search_term'),

						'ng-model'=>'searchTerm')) }}

								</fieldset> -->


								<fieldset class="form-group col-md-6">

								{{ Form::label('question_model', __('messages.enter_search_term')) }}

								{{ Form::text('question_model', $value = null , $attributes = array('class'=>'form-control', 

						'placeholder' => __('messages.enter_search_term'),

						'ng-model'=>'question_model')) }}

								</fieldset>

							{{-- 
								CODES USED WITH EXAM TYPE
								NSNT==> NO SECTION NO TIMER 
								SNT==> SECTION WITH NO TIMER 
								ST==> SECTION WITH TIMER 
							--}}
						 
							@if($record->exam_type!='NSNT')
							
								<fieldset class="form-group col-md-6">

								{{ Form::label('section_name', 'Section Name') }}

								{{ Form::text('section_name', $value = null , $attributes = array('class'=>'form-control', 

						       'placeholder' => 'Section name',

						        'ng-model'=>'section_name')) }}

								</fieldset>

								@endif


							  @if($record->exam_type != 'NSNT' && $record->exam_type != 'SNT')	

								<fieldset class="form-group col-md-6">

								{{ Form::label('section_time', 'Section Time In Minutes') }}

								{{ Form::text('section_time', $value = null , $attributes = array('class'=>'form-control', 

									'placeholder' => 'Section Time',

									'ng-model'=>'section_time')) }}

								</fieldset>

								@endif
							{{-- <a ng-click="subjectChanged()"><i class="fa fa-refresh pull-right text-info"></i></a> --}}

							<div class="col-md-12" ng-show="contentAvailable">
									<!-- <div ng-repeat="question in subjectQuestions | filter: { difficulty_level:difficulty, question_type:question_type, show_in_front_end:show_in_front_end , topic_id:topic, sub_topic_id:sub_topic } | filter: question_model track by $index ">
									<a ng-click="addQuestion(question, subject);" class="btn btn-primary" >{{__('messages.add')}}</a>
									</div> -->
								<!-- <a ng-click="addQuestion(question, subject);" class="btn btn-primary" >{{__('messages.add')}}</a>		 -->
							<div ng-if="subjectQuestions!=''" class="vertical-scroll" >
								<h4 class="text-success">{{__('messages.question')}} @{{ subjectQuestions.length }} </h4>
								<table  

								  class="table table-hover">
								  <script language="JavaScript">
									function toggle(source) {
										checkboxes = document.getElementsByName('check2');
										for(var i=0, n=checkboxes.length;i<n;i++) {
											checkboxes[i].checked = source.checked;
										}
									}
									</script>
									<th >{{__('messages.subject')}}</th>

									<th>{{__('messages.question')}}</th>

									<th>{{__('messages.difficulty')}}</th>

									<th>{{__('messages.type')}}</th>

									<th>{{__('messages.marks')}}</th>	

									<th><a ng-click="addAllQuestion(question, subject);" class="btn btn-primary" >{{__('messages.add_all')}}</a></th>	

									
									<tr ng-repeat="question in subjectQuestions | filter: { difficulty_level:difficulty, question_type:question_type, show_in_front_end:show_in_front_end , topic_id:topic, sub_topic_id:sub_topic } | filter: question_model track by $index ">

										<td>@{{subject.subject_title}}</td>

										<td title="@{{subjectQuestions[$index].question}}" ng-bind-html="trustAsHtml(question.question)">

										
										</td>

										

										<td>@{{question.difficulty_level | uppercase}}</td>

										<td>@{{question.question_type | uppercase}}</td>

										<td>@{{question.marks}}</td>

										<td>
										<a ng-click="addQuestion(question, subject);" class="btn btn-primary" >{{__('messages.add')}}</a>
										</td>

										

									</tr>

								</table>
									
								</div>	
									
							



					 			</div>



					 		</div>

					 			 <div class="col-md-6">
					 			 	@include('exams.quiz.questions-selection-block')
					 			 </div>
					 		</div>

					 

					</div>



				</div>

			</div>

			<!-- /.container-fluid -->

		</div>

		<!-- /#page-wrapper -->

@stop

@section('footer_scripts')

@include('exams.quiz.scripts.js-scripts', ['quiz_record' => $record])
@include('common.alertify')

@stop

 

@section('custom_div_end')

 </div>

@stop