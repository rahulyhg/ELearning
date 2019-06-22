 				
				    <fieldset class="form-group">
<<<<<<< HEAD
						{{ Form::label('subject_title', __('messages.subject_title')) }}
=======
						{{ Form::label('subject_title', getphrase('subject_title')) }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						<span class="text-red">*</span>
						{{ Form::text('subject_title', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 'Maths',
							'ng-model'=>'subject_title', 
							'ng-pattern' => getRegexPattern('name'),
							'required'=> 'true', 
							'ng-class'=>'{"has-error": formSubjects.subject_title.$touched && formSubjects.subject_title.$invalid}',
							'ng-minlength' => '2',
							'ng-maxlength' => '40',
						)) }}
						<div class="validation-error" ng-messages="formSubjects.subject_title.$error" >
	    					{!! getValidationMessage()!!}
	    					{!! getValidationMessage('pattern')!!}
	    					{!! getValidationMessage('minlength')!!}
	    					{!! getValidationMessage('maxlength')!!}
						</div>
					</fieldset>

					<fieldset class="form-group">
						
<<<<<<< HEAD
						{{ Form::label('subject_code', __('messages.subject_code')) }}
=======
						{{ Form::label('subject_code', getphrase('subject_code')) }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						<span class="text-red">*</span>
						{{ Form::text('subject_code', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 'M1',
							'ng-model'=>'subject_code', 
							'ng-pattern' => getRegexPattern('name'),
							'required'=> 'true', 
							'ng-class'=>'{"has-error": formSubjects.subject_code.$touched && formSubjects.subject_code.$invalid}',
							'ng-minlength' => '2',
							'ng-maxlength' => '10',
						)) }}
						<div class="validation-error" ng-messages="formSubjects.subject_code.$error" >
	    					{!! getValidationMessage()!!}
	    					{!! getValidationMessage('pattern')!!}
	    					{!! getValidationMessage('minlength')!!}
	    					{!! getValidationMessage('maxlength')!!}
						</div>
					</fieldset>
					
					 
 
	
					{{-- <div class="row">
					<fieldset class='form-group col-md-6'>
<<<<<<< HEAD
						{{ Form::label('is_lab', __('messages.is_lab')) }}
=======
						{{ Form::label('is_lab', getphrase('is_lab')) }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						<div class="form-group row">
							<div class="col-md-6">
							{{ Form::radio('is_lab', 0, true, array('id'=>'free', 'name'=>'is_lab')) }}
								
<<<<<<< HEAD
								<label for="free"> <span class="fa-stack radio-button"> <i class="mdi mdi-check active"></i> </span> {{__('messages.No')}}</label> 
							</div>
							<div class="col-md-6">
							{{ Form::radio('is_lab', 1, false, array('id'=>'paid', 'name'=>'is_lab')) }}
								<label for="paid"> <span class="fa-stack radio-button"> <i class="mdi mdi-check active"></i> </span> {{__('messages.Yes')}} </label>
=======
								<label for="free"> <span class="fa-stack radio-button"> <i class="mdi mdi-check active"></i> </span> {{getPhrase('No')}}</label> 
							</div>
							<div class="col-md-6">
							{{ Form::radio('is_lab', 1, false, array('id'=>'paid', 'name'=>'is_lab')) }}
								<label for="paid"> <span class="fa-stack radio-button"> <i class="mdi mdi-check active"></i> </span> {{getPhrase('Yes')}} </label>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
							</div>
						</div>
					</fieldset>
 					
 					 <fieldset class='form-group col-md-6'>
<<<<<<< HEAD
						{{ Form::label('is_elective_type', __('messages.is_elective')) }}
=======
						{{ Form::label('is_elective_type', getphrase('is_elective')) }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						<div class="form-group row">
							<div class="col-md-6">
							{{ Form::radio('is_elective_type', 0, true, array('id'=>'free1', 'name'=>'is_elective_type')) }}
								
<<<<<<< HEAD
								<label for="free1"> <span class="fa-stack radio-button"> <i class="mdi mdi-check active"></i> </span> {{__('messages.No')}}</label> 
							</div>
							<div class="col-md-6">
							{{ Form::radio('is_elective_type', 1, false, array('id'=>'paid1', 'name'=>'is_elective_type')) }}
								<label for="paid1"> <span class="fa-stack radio-button"> <i class="mdi mdi-check active"></i> </span> {{__('messages.Yes')}} </label>
=======
								<label for="free1"> <span class="fa-stack radio-button"> <i class="mdi mdi-check active"></i> </span> {{getPhrase('No')}}</label> 
							</div>
							<div class="col-md-6">
							{{ Form::radio('is_elective_type', 1, false, array('id'=>'paid1', 'name'=>'is_elective_type')) }}
								<label for="paid1"> <span class="fa-stack radio-button"> <i class="mdi mdi-check active"></i> </span> {{getPhrase('Yes')}} </label>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
							</div>
						</div>
					</fieldset>
					</div> --}}	
					{{-- <div class="row">
					 <fieldset class="form-group col-md-6">
						
<<<<<<< HEAD
						{{ Form::label('maximum_marks', __('messages.maximum_marks')) }}
=======
						{{ Form::label('maximum_marks', getphrase('maximum_marks')) }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						<span class="text-red">*</span>
						{{ Form::number('maximum_marks', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => '100', 'id'=>'maximum_marks', 'min'=>'1', 'onblur'=>'validateMarks();',
							'ng-model'=>'maximum_marks', 
							'ng-number' => 'true',
							'required'=> 'true', 
							'ng-class'=>'{"has-error": formSubjects.maximum_marks.$touched && formSubjects.maximum_marks.$invalid}'
						)) }}
						<div class="validation-error" ng-messages="formSubjects.maximum_marks.$error" >
	    					{!! getValidationMessage()!!}
	    					{!! getValidationMessage('number')!!}
						</div>

					</fieldset>

					<fieldset class="form-group col-md-6">
						
<<<<<<< HEAD
						{{ Form::label('pass_marks', __('messages.pass_marks')) }}
=======
						{{ Form::label('pass_marks', getphrase('pass_marks')) }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						<span class="text-red">*</span>
						{{ Form::number('pass_marks', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => '40', 'id'=>'pass_marks','min'=>'1', 'onblur'=>'validateMarks();',
							'ng-model'=>'pass_marks', 
							 
							'required'=> 'true', 
							'ng-class'=>'{"has-error": formSubjects.pass_marks.$touched && formSubjects.pass_marks.$invalid}'
						)) }}
						<div class="validation-error" ng-messages="formSubjects.pass_marks.$error" >
	    					{!! getValidationMessage()!!}
	    					{!! getValidationMessage('number')!!}
						</div>
					</fieldset>
					</div> --}}
					</fieldset>
						<div class="buttons text-center">
							<button class="btn btn-lg btn-success button" 
							ng-disabled='!formSubjects.$valid'>{{ $button_name }}</button>
						</div>
		 