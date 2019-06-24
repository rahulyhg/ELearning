@extends($layout)

@section('content')
<div id="page-wrapper">
			<div class="container-fluid">
				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<li><a href="{{PREFIX}}"><i class="mdi mdi-home"></i></a> </li>
						 
							<li class="active">{{__('messages.feedback_form')}}</li>
						</ol>
					</div>
				</div>
					@include('errors.errors')
				<!-- /.row -->
				
<div class="panel panel-custom col-lg-6 col-lg-offset-3" >
					<div class="panel-heading">
					 
					<h1>{{ $title }}  </h1>
					</div>
					<div class="panel-body" >
					<?php $button_name = __('messages.send'); ?>
					 
					{!! Form::open(array('url' => URL_FEEDBACK_SEND, 'method' => 'POST', 'name'=>'formQuiz ', 'novalidate'=>'')) !!}
					<div class="row">
 					 <fieldset class="form-group col-md-12">
						
						{{ Form::label('title', __('messages.title')) }}
						<span class="text-red">*</span>
						{{ Form::text('title', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => __('messages.title'),
							'ng-model'=>'title', 
							'ng-pattern'=>getRegexPattern('name'), 
							'required'=> 'true', 
							'ng-class'=>'{"has-error": formQuiz.title.$touched && formQuiz.title.$invalid}',
							'ng-minlength' => '4',
							'ng-maxlength' => '45',
							)) }}
						<div class="validation-error" ng-messages="formQuiz.title.$error" >
	    					{!! getValidationMessage()!!}
	    					{!! getValidationMessage('pattern')!!}
	    					{!! getValidationMessage('minlength')!!}
	    					{!! getValidationMessage('maxlength')!!}
						</div>
					</fieldset>
					</div>
					
					<div class="row">
					<fieldset class="form-group col-md-12">
						
						{{ Form::label('subject', __('messages.subject')) }}
						<span class="text-red">*</span>
						{{ Form::text('subject', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => __('messages.subject'),
							'ng-model'=>'subject', 
							'required'=> 'true', 
							'ng-class'=>'{"has-error": formQuiz.subject.$touched && formQuiz.subject.$invalid}',
							'ng-minlength' => '2',
							'ng-maxlength' => '40',
							)) }}
						<div class="validation-error" ng-messages="formQuiz.subject.$error" >
	    					{!! getValidationMessage()!!}
	    					{!! getValidationMessage('pattern')!!}
	    					{!! getValidationMessage('minlength')!!}
	    					{!! getValidationMessage('maxlength')!!}
						</div>
					</fieldset>
				 </div> 
					
					<div class="row">
					 <fieldset class="form-group col-md-12">
					 {{ Form::label('description', __('messages.description')) }}
						<span class="text-red">*</span>
							 <textarea name="description" ng-model="description"
							 required="true" class='form-control' rows="5"></textarea>
						<div class="validation-error ckeditor" ng-messages="formQuiz.description.$error"  >
	    					{!! getValidationMessage()!!}
	    					{!! getValidationMessage('number')!!}
						</div>
					</fieldset>
					</div>
						<div class="buttons text-center">
							<button class="btn btn-lg btn-success button"
							ng-disabled='!formQuiz.$valid'>{{ $button_name }}</button>
						</div>
					{!! Form::close() !!}
					</div>

				</div>
			</div>
			<!-- /.container-fluid -->
		</div>
		<!-- /#page-wrapper -->
@stop

@section('footer_scripts')
 @include('common.validations');
 
    
@stop
 
 