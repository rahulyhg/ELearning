@extends('layouts.admin.adminlayout')
<link href="{{CSS}}bootstrap-datepicker.css" rel="stylesheet">
@section('content')
<div id="page-wrapper">
			<div class="container-fluid">
				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<li><a href="/"><i class="mdi mdi-home"></i></a> </li>
							<li><a href="{{URL_COUPONS}}">{{ getPhrase('coupons')}}</a></li>
							<li class="active">{{isset($title) ? $title : ''}}</li>
						</ol>
					</div>
				</div>
					@include('errors.errors')
				<!-- /.row -->
<<<<<<< HEAD
				
=======

>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
				<div class="panel panel-custom col-lg-8 col-lg-offset-2">
					<div class="panel-heading">
						<div class="pull-right messages-buttons">
							<a href="{{URL_COUPONS}}" class="btn  btn-primary button" >{{ getPhrase('list')}}</a>
						</div>
<<<<<<< HEAD
						
=======

>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
					<h1>{{ $title }}  </h1>
					</div>
					<div class="panel-body" >
					<?php $button_name = getPhrase('create'); ?>
					@if ($record)
					 <?php $button_name = getPhrase('update'); ?>
<<<<<<< HEAD
						{{ Form::model($record, 
						array('url' => URL_COUPONS_EDIT.$record->slug, 
=======
						{{ Form::model($record,
						array('url' => URL_COUPONS_EDIT.$record->slug,
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						'method'=>'patch', 'name'=>'formQuiz ', 'novalidate'=>'')) }}
					@else
						{!! Form::open(array('url' => URL_COUPONS_ADD, 'method' => 'POST', 'name'=>'formQuiz ', 'novalidate'=>'')) !!}
					@endif
<<<<<<< HEAD
					

					 @include('coupons.form_elements', 
					 array('button_name'=> $button_name),
					 array('record' 		=> $record, 'categories' => $categories))
					 		
=======


					 @include('coupons.form_elements',
					 array('button_name'=> $button_name),
					 array('record' 		=> $record, 'categories' => $categories))

>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
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
<<<<<<< HEAD
 
<script src="{{JS}}datepicker.min.js"></script>
 <script src="{{JS}}bootstrap-toggle.min.js"></script>   
=======

<script src="{{JS}}datepicker.min.js"></script>
 <script src="{{JS}}bootstrap-toggle.min.js"></script>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
 <script>
 	  $('.input-daterange').datepicker({
        autoclose: true,
        startDate: "0d",
         format: '{{getDateFormat()}}',
    });
 </script>
@stop
<<<<<<< HEAD
 
 
=======

>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
