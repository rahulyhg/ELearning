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
							<li><a href="{{URL_LANGUAGES_LIST}}">{{ __('messages.languages')}}</a> </li>
=======
							<li><a href="{{URL_LANGUAGES_LIST}}">{{ getPhrase('languages')}}</a> </li>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
							<li>{{ $title }}</li>
						</ol>
					</div>
				</div>
					<?php $language_data = json_decode($record->phrases);?>			
				<!-- /.row -->
				<div class="panel panel-custom">
					<div class="panel-heading">
						{{-- 
						<div class="pull-right messages-buttons">
<<<<<<< HEAD
							<a href="{{URL_SETTINGS_ADD_SUBSETTINGS.$record->slug}}" class="btn  btn-primary button" >{{ __('messages.update')}}</a>
=======
							<a href="{{URL_SETTINGS_ADD_SUBSETTINGS.$record->slug}}" class="btn  btn-primary button" >{{ getPhrase('update')}}</a>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
							 
						</div> --}}
						<h1>{{ $title }}</h1>
					</div>
					<div class="panel-body packages">
					{!! Form::open(array('url' => URL_LANGUAGES_UPDATE_STRINGS.$record->slug, 'method' => 'PATCH', 
						'novalidate'=>'','name'=>'formSettings ', 'files'=>'true')) !!}
						<div class="table-responsive"> 
						<ul class="list-group">
						@if($language_data)
						@foreach($language_data as $key=>$value)
						 
					 <div class="col-md-6">
						<fieldset class="form-group">
						   {{ Form::label($key, $key) }}
						  
						   <input type="text" class="form-control" name="{{$key}}" 
					 		required="true" value = "{{$value}}" >
					 		 

							</fieldset>
							</div>

						  @endforeach

						  @else
<<<<<<< HEAD
							  <li class="list-group-item">{{ __('messages.no_settings_available')}}</li>
=======
							  <li class="list-group-item">{{ getPhrase('no_settings_available')}}</li>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						  @endif
						</ul>

						</div>

						@if($language_data)
						<div class="buttons text-center">
							<button class="btn btn-lg btn-success button" ng-disabled='!formTopics.$valid'
<<<<<<< HEAD
							>{{ __('messages.update') }}</button>
=======
							>{{ getPhrase('update') }}</button>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						</div>
						@endif
							{!! Form::close() !!}
					</div>
				</div>
			</div>
			<!-- /.container-fluid -->
		</div>
@endsection
 

@section('footer_scripts')
  
 {{-- @include('common.datatables', array('route'=>'mastersettings.dataTable')) --}}
 {{-- @include('common.deletescript', array('route'=>'/mastersettings/topics/delete/')) --}}

@stop
