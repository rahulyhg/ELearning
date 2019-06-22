@extends('layouts.admin.adminlayout')
 

@section('content')
<div id="page-wrapper">
			<div class="container-fluid">
				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<li><a href="/"><i class="mdi mdi-home"></i></a> </li>
<<<<<<< HEAD
							<li><a href="{{URL_LMS_CATEGORIES}}">LMS {{ __('messages.categories')}}</a> </li>
=======
							<li><a href="{{URL_LMS_CATEGORIES}}">LMS {{ getPhrase('categories')}}</a> </li>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
							<li class="active">{{isset($title) ? $title : ''}}</li>
						</ol>
					</div>
				</div>
				@include('errors.errors')	
					<div class="panel panel-custom col-lg-6 col-lg-offset-3">
					<div class="panel-heading">
						<div class="pull-right messages-buttons">
<<<<<<< HEAD
							<a href="{{URL_LMS_CATEGORIES}}" class="btn  btn-primary button" >{{ __('messages.list')}}</a>
=======
							<a href="{{URL_LMS_CATEGORIES}}" class="btn  btn-primary button" >{{ getPhrase('list')}}</a>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						</div>
					<h1>{{ $title }}  </h1>
					</div>
					<div class="panel-body  form-auth-style" >
<<<<<<< HEAD
					<?php $button_name = __('messages.create'); ?>
					@if ($record)
					 <?php $button_name = __('messages.update'); ?>
=======
					<?php $button_name = getPhrase('create'); ?>
					@if ($record)
					 <?php $button_name = getPhrase('update'); ?>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						{{ Form::model($record, 
						array('url' => URL_LMS_CATEGORIES_EDIT.$record->slug, 'novalidate'=>'','name'=>'formLms ',
						'method'=>'patch', 'files' => true)) }}
					@else
						{!! Form::open(array('url' => URL_LMS_CATEGORIES_ADD, 'method' => 'POST', 'novalidate'=>'','name'=>'formLms ', 'files' => true)) !!}
					@endif

					 @include('lms.lmscategories.form_elements', 
					 array('button_name'=> $button_name),
					 array('record' => $record))
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
  @include('common.alertify')
 <script>
 	var file = document.getElementById('image_input');

file.onchange = function(e){
    var ext = this.value.match(/\.([^\.]+)$/)[1];
    switch(ext)
    {
        case 'jpg':
        case 'jpeg':
        case 'png':

     
            break;
        default:
<<<<<<< HEAD
         alertify.error("{{__('messages.file_type_not_allowed')}}");
=======
         alertify.error("{{getPhrase('file_type_not_allowed')}}");
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
            this.value='';
    }
};
 </script>
@stop
 