 
@extends($layout)

{{-- {{dd(checkRole(getUserGrade(2)))}} --}}
@section('content')
<div id="page-wrapper">
			<div class="container-fluid">
				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<li><a href="{{PREFIX}}"><i class="mdi mdi-home"></i></a> </li>
							@if(checkRole(getUserGrade(2)))
<<<<<<< HEAD
							<li><a href="{{URL_USERS}}">{{ __('messages.users')}}</a> </li>
							<li class="active">{{ __('messages.change_password')}}</li>
							@else
							<li class="active">{{__('messages.change_password')}}</li>
=======
							<li><a href="{{URL_USERS}}">{{ getPhrase('users')}}</a> </li>
							<li class="active">{{isset($title) ? $title : ''}}</li>
							@else
							<li class="active">{{getphrase('change_password')}}</li>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
							@endif
						</ol>
					</div>
				</div>
					@include('errors.errors')
				<!-- /.row -->
				
	<div class="panel panel-custom col-lg-6 col-lg-offset-3">
					<div class="panel-heading">
<<<<<<< HEAD
					 	<h1>{{ __('messages.change_password')}}  </h1>
=======
					 	<h1>{{ $title }}  </h1>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
					</div>


					<div class="panel-body form-auth-style">
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
						array('url' => ['users/change-password', $record->slug], 
						'method'=>'patch', 'novalidate'=>'', 'name'=>"changePassword")) }}
					@endif

					 @include('users.change-password.form_elements', array('button_name'=> $button_name, 'record' => $record)) 
					 
					{!! Form::close() !!}
					</div>
				</div>
			</div>
			<!-- /.container-fluid -->
		</div>
		<!-- /#page-wrapper -->
@endsection

@section('footer_scripts')
	@include('common.validations');
@stop