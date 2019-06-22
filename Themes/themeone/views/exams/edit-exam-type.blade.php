@extends('layouts.admin.adminlayout')
@section('content')
<div id="page-wrapper">
			<div class="container-fluid">
				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<li><a href="{{PREFIX}}"><i class="mdi mdi-home"></i></a> </li>
							<li><a href="{{URL_EXAM_TYPES}}">{{ __('messages.exam_types')}}</a> </li>
							<li class="active">{{isset($title) ? $title : ''}}</li>
						</ol>
					</div>
				</div>
				@include('errors.errors')	
				<div class="panel panel-custom col-lg-9 col-md-offset-2">
					<div class="panel-heading">
						<div class="pull-right messages-buttons">
							<a href="{{URL_EXAM_TYPES}}" class="btn  btn-primary button" >{{ __('messages.exam_types')}}</a>
						</div>
					<h1>{{ $title }}  </h1>
					</div>
					<div class="panel-body  form-auth-style" >
					
				     {{ Form::model($record, array('url' => URL_UPDATE_EXAM_TYPE.$record->code, 
						'method'=>'post', 'novalidate'=>'','name'=>'formCategories')) }}

					  <fieldset class="form-group col-md-6">
						
						{{ Form::label('title', __('messages.category_name')) }}
						<span class="text-red">*</span>
						{{ Form::text('title', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => __('messages.enter_category_name'),
							'ng-model'=>'title', 
							'ng-pattern' => getRegexPattern('name'),
							'ng-minlength' => '2',
							'ng-maxlength' => '60',
							'required'=> 'true', 
							'ng-class'=>'{"has-error": formCategories.title.$touched && formCategories.title.$invalid}',
							 
							)) }}
							<div class="validation-error" ng-messages="formCategories.title.$error" >
	    					{!! getValidationMessage()!!}
	    					{!! getValidationMessage('minlength')!!}
	    					{!! getValidationMessage('maxlength')!!}
	    					{!! getValidationMessage('pattern')!!}
						</div>
					</fieldset>

					 <?php

                   $options  = array('1'=>'Yes',
                                     '0'=>'No');

                   ?>


					<fieldset class="form-group col-md-6" >
						{{ Form::label('status', __('messages.is_active')) }}
						<span class="text-red">*</span>
						{{Form::select('status', $options, null, ['placeholder' => __('messages.select'),'class'=>'form-control', 
						'ng-model'=>'status',
							'required'=> 'true', 
							'ng-pattern' => getRegexPattern("name"),
							'ng-minlength' => '2',
							'ng-maxlength' => '20',
							'ng-class'=>'{"has-error": formCategories.status.$touched && formCategories.status.$invalid}',

						]) }}
						<div class="validation-error" ng-messages="formCategories.status.$error" >
	    					{!! getValidationMessage()!!}
						</div>


					</fieldset>

						<fieldset class="form-group col-md-12">
						
						{{ Form::label('description', __('messages.description')) }}
						
						{{ Form::textarea('description', $value = null , $attributes = array('class'=>'form-control', 'rows'=>'5', 'placeholder' =>  __('messages.description'))) }}
					  </fieldset>

					  <div class="buttons text-center">
							<button class="btn btn-lg btn-success button"
							ng-disabled='!formCategories.$valid'>{{__('messages.update')}}</button>
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

  @include('common.validations')
 
@stop