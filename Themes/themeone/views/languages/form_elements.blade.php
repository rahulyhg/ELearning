 					
 					 <fieldset class="form-group" >
						
<<<<<<< HEAD
						{{ Form::label('language', __('messages.languages')) }}
						<span class="text-red">*</span>
						{{ Form::text('language', $value = null , $attributes = array('class'=>'form-control','name'=>'language', 
							'placeholder' => __('messages.language_title'), 
=======
						{{ Form::label('language', getphrase('language')) }}
						<span class="text-red">*</span>
						{{ Form::text('language', $value = null , $attributes = array('class'=>'form-control','name'=>'language', 
							'placeholder' => getPhrase('language_title'), 
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
							'ng-model'=>'language', 
							'required'=> 'true', 
							'ng-class'=>'{"has-error": formLanguage.language.$touched && formLanguage.language.$invalid}',
							'ng-minlength' => '4',
							'ng-maxlength' => '40',
							)) }}
						<div class="validation-error" ng-messages="formLanguage.language.$error" >
	    					{!! getValidationMessage()!!}
	    					{!! getValidationMessage('minlength')!!}
	    					{!! getValidationMessage('maxlength')!!}
						</div>
					</fieldset>


					<fieldset class="form-group" >
<<<<<<< HEAD
						{{ Form::label('code', __('messages.code')) }}
						<span class="text-red">*</span>
						{{ Form::text('code', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => __('messages.language_code'),
=======
						{{ Form::label('code', getphrase('code')) }}
						<span class="text-red">*</span>
						{{ Form::text('code', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => getPhrase('language_code'),
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
							'name'=>'code',
							'ng-model'=>'code', 
							'required'=> 'true', 
							'ng-minlength' => '2',
							'ng-maxlength' => '4',
							'ng-class'=>'{"has-error": formLanguage.code.$touched && formLanguage.code.$invalid}',
						 		
						)) }}
						
						<div class="validation-error" ng-messages="formLanguage.code.$error" >
	    					{!! getValidationMessage()!!}
	    					{!! getValidationMessage('minlength')!!}
	    					{!! getValidationMessage('maxlength')!!}
						</div>


						<a class="pull-right btn btn-success" style="margin-top:10px;" href="{{GOOGLE_TRANSLATE_LANGUAGES_LINK}}" target="_blank">
<<<<<<< HEAD
						{{__('messages.supported_language_codes')}}
=======
						{{getPhrase('supported_language_codes')}}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						</a>
					</fieldset>
					  
					  <div class="row">
					<fieldset class='form-group col-md-6'>
<<<<<<< HEAD
						{{ Form::label('is_rtl', __('messages.is_rtl')) }}
=======
						{{ Form::label('is_rtl', getphrase('is_rtl')) }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						<div class="form-group row">
							<div class="col-md-6">
							{{ Form::radio('is_rtl', 0, true, array('id'=>'free', 'name'=>'is_rtl')) }}
								
<<<<<<< HEAD
								<label for="free"> <span class="fa-stack radio-button"> <i class="mdi mdi-check active"></i> </span> {{__('messages.No')}}</label> 
							</div>
							<div class="col-md-6">
							{{ Form::radio('is_rtl', 1, false, array('id'=>'paid', 'name'=>'is_rtl')) }}
								<label for="paid"> <span class="fa-stack radio-button"> <i class="mdi mdi-check active"></i> </span> {{__('messages.Yes')}} 
=======
								<label for="free"> <span class="fa-stack radio-button"> <i class="mdi mdi-check active"></i> </span> {{getPhrase('No')}}</label> 
							</div>
							<div class="col-md-6">
							{{ Form::radio('is_rtl', 1, false, array('id'=>'paid', 'name'=>'is_rtl')) }}
								<label for="paid"> <span class="fa-stack radio-button"> <i class="mdi mdi-check active"></i> </span> {{getPhrase('Yes')}} 
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
								</label>
							</div>
						</div>
					</fieldset>
 					
					</div>

					
						<div class="buttons text-center" >
							<button class="btn btn-lg btn-success button" 
							ng-disabled='!formLanguage.$valid'>{{ $button_name }}</button>
						</div>
		 