@extends($layout)
@section('content')
<?php 
//dd($record); 
?>
<div id="page-wrapper">
			<div class="container-fluid" >
				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<li><a href="{{PREFIX}}"><i class="mdi mdi-home"></i></a> </li>
<<<<<<< HEAD
							<li><a href="{{URL_LANGUAGES_LIST}}">{{__('messages.languages')}}</a> </li>
=======
							<li><a href="{{URL_LANGUAGES_LIST}}">{{getPhrase('languages')}}</a> </li>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
							<li class="active">{{isset($title) ? $title : ''}}</li>
						</ol>
					</div>
				</div>
				@include('errors.errors')	
				<div class="panel panel-custom col-lg-6 col-lg-offset-3" >
					<div class="panel-heading">
						<div class="pull-right messages-buttons">
<<<<<<< HEAD
							<a href="{{URL_LANGUAGES_LIST}}" class="btn  btn-primary button" >{{ __('messages.list')}}</a>
						</div>
					<h1>{{$title}} </h1>
					</div>
					<div class="panel-body  form-auth-style" >
					<?php $button_name = __('messages.create'); ?>
					@if ($record)

					 <?php $button_name = __('messages.update'); ?>
=======
							<a href="{{URL_LANGUAGES_LIST}}" class="btn  btn-primary button" >{{ getPhrase('list')}}</a>
						</div>
					<h1>{{ $title }}  </h1>
					</div>
					<div class="panel-body  form-auth-style" >
					<?php $button_name = getPhrase('create'); ?>
					@if ($record)

					 <?php $button_name = getPhrase('update'); ?>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						{{ Form::model($record, 
						array('url' => URL_LANGUAGES_EDIT.'/'. $record->slug, 
						'method'=>'patch','novalidate'=>'','name'=>'formLanguage')) }}
					@else
						{!! Form::open(array('url' => URL_LANGUAGES_ADD, 'method' => 'POST', 'name'=>'formLanguage ', 'novalidate'=>'')) !!}
					@endif

					 @include('languages.form_elements', 
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
 @include('common.validations');
@stop
 