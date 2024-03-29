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
							<li><a href="{{URL_QUIZ_QUESTIONBANK}}">{{ __('messages.questions')}}</a> </li>
=======
							<li><a href="{{URL_QUIZ_QUESTIONBANK}}">{{ getPhrase('questions')}}</a> </li>
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
							<a href="{{URL_QUIZ_QUESTIONBANK}}" class="btn  btn-primary button" >{{ __('messages.list')}}</a>
=======
							<a href="{{URL_QUIZ_QUESTIONBANK}}" class="btn  btn-primary button" >{{ getPhrase('list')}}</a>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
							 
						</div>
						@endif
					<h1>{{ $title }}  </h1>
					</div>

					<div class="panel-body text-center">
					
<<<<<<< HEAD
					<a href="{{DOWNLOAD_LINK_QUESTION_IMPORT_EXCEL}}questions_radio_template.xlsx" class="btn btn-info">{{__('messages.single_answer')}}
					</a>
					<a href="{{DOWNLOAD_LINK_QUESTION_IMPORT_EXCEL}}questions_checkbox_template.xlsx" class="btn btn-info">{{__('messages.multi_answer')}}
					</a>
					<a href="{{DOWNLOAD_LINK_QUESTION_IMPORT_EXCEL}}questions_blanks_template.xlsx" class="btn btn-info">{{__('messages.fill_the_blanks')}}
					</a>
				 
							<?php $button_name = __('messages.upload'); ?>
					
						{!! Form::open(array('url' => URL_QUESTIONBAMK_IMPORT, 'method' => 'POST', 'novalidate'=>'','name'=>'formUsers ', 'files'=>'true')) !!}
					<?php $button_name = __('messages.upload'); 
=======
					<a href="{{DOWNLOAD_LINK_QUESTION_IMPORT_EXCEL}}questions_radio_template.xlsx" class="btn btn-info">{{getPhrase('single_answer')}}
					</a>
					<a href="{{DOWNLOAD_LINK_QUESTION_IMPORT_EXCEL}}questions_checkbox_template.xlsx" class="btn btn-info">{{getPhrase('multi_answer')}}
					</a>
					<a href="{{DOWNLOAD_LINK_QUESTION_IMPORT_EXCEL}}questions_blanks_template.xlsx" class="btn btn-info">{{getPhrase('fill_the_blanks')}}
					</a>
				 
							<?php $button_name = getPhrase('upload'); ?>
					
						{!! Form::open(array('url' => URL_QUESTIONBAMK_IMPORT, 'method' => 'POST', 'novalidate'=>'','name'=>'formUsers ', 'files'=>'true')) !!}
					<?php $button_name = getPhrase('upload'); 
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
					// $question_types = array();
					$question_types 		= array( ''              => 'Select',
                                        'radio'         => 'Single Answer',
                                        'checkbox'      => 'Multi Answer',
                                        'blanks'        => 'Fill in blanks');

					?>
					 	<div class="row">
						<fieldset class='col-sm-4 col-sm-offset-4 form-group margintop30'>
<<<<<<< HEAD
						{{ Form::label('question_type', __('messages.question_type')) }}
=======
						{{ Form::label('question_type', getphrase('question_type')) }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						{{Form::select('question_type',$question_types , null, ['class'=>'form-control', "id"=>"question_type", "ng-model"=>"question_type" , 'required'=> 'true'])}}
						{!! Form::open(array('url' => URL_QUESTIONBAMK_IMPORT, 'method' => 'POST', 'novalidate'=>'','name'=>'formUsers ', 'files'=>'true')) !!}
						</fieldset>
				 
					<fieldset ng-if="question_type" class='col-sm-4 col-sm-offset-4 form-group margintop30'>
	
					{!! Form::file('excel', array('class'=>'form-control','id'=>'excel_input', 'accept'=>'.xls,.xlsx')) !!}
					 
					</fieldset>
					  </div>
					
						<div ng-if="question_type"  class="buttons text-center">
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