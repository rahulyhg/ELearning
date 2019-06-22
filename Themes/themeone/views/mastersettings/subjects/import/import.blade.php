@extends($layout)

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
							<li><a href="{{URL_SUBJECTS}}">{{ __('messages.subjects')}}</a> </li>
=======
							<li><a href="{{URL_SUBJECTS}}">{{ getPhrase('subjects')}}</a> </li>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
							<li class="active">{{isset($title) ? $title : ''}}</li>
							@else
							<li class="active">{{$title}}</li>
							@endif
						</ol>
					</div>
				</div>
					@include('errors.errors')
				<!-- /.row -->
				
				<div class="panel panel-custom col-lg-6 col-lg-offset-3">
					<div class="panel-heading">
					@if(checkRole(getUserGrade(2))) 
						<div class="pull-right messages-buttons">
							 
<<<<<<< HEAD
							<a href="{{URL_SUBJECTS}}" class="btn  btn-primary button" >{{ __('messages.list')}}</a>
=======
							<a href="{{URL_SUBJECTS}}" class="btn  btn-primary button" >{{ getPhrase('list')}}</a>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
							 
						</div>
						@endif
					<h1>{{ $title }}  </h1>
					</div>

					<div class="panel-body text-center">
					
<<<<<<< HEAD
					<a href="{{DOWNLOAD_LINK_SUBJECTS_IMPORT_EXCEL}}" class="btn btn-info">{{__('messages.download_template')}}
					</a>
					
					<?php $button_name = __('messages.upload'); ?>
=======
					<a href="{{DOWNLOAD_LINK_SUBJECTS_IMPORT_EXCEL}}" class="btn btn-info">{{getPhrase('download_template')}}
					</a>
					
					<?php $button_name = getPhrase('upload'); ?>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
					
						{!! Form::open(array('url' => URL_SUBJECTS_IMPORT, 'method' => 'POST', 'novalidate'=>'','name'=>'formUsers ', 'files'=>'true')) !!}
					

						<div class="row">
				 
					<fieldset class='col-sm-4 col-sm-offset-4 form-group margintop30'>
<<<<<<< HEAD
						{{ Form::label('excel', __('messages.upload').' Excel') }}
=======
						{{ Form::label('excel', getphrase('upload').' Excel') }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						 
						
					{!! Form::file('excel', array('class'=>'form-control','id'=>'excel_input', 'accept'=>'.xls,.xlsx')) !!}
							 
							 
					 
					</fieldset>
					  </div>
					
						<div class="buttons text-center">
							<button class="btn btn-lg btn-success button" 
							ng-disabled='!formUsers.$valid'>{{ $button_name }}</button>
						</div>

					 
					{!! Form::close() !!}
					</div>
				</div>
			</div>
			<!-- /.container-fluid -->
		</div>
		<!-- /#page-wrapper -->
@endsection

@section('footer_scripts')
 @include('common.validations')
  @include('common.alertify')
 <script>
 	var file = document.getElementById('excel_input');

file.onchange = function(e){
    var ext = this.value.match(/\.([^\.]+)$/)[1];
    switch(ext)
    {
        case 'xls':
        case 'xlsx':
            
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