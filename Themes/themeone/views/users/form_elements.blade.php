 

					 <fieldset class="form-group">

						

<<<<<<< HEAD
						{{ Form::label('name', __('messages.name')) }}
=======
						{{ Form::label('name', getphrase('name')) }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

						<span class="text-red">*</span>

						{{ Form::text('name', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 'Jack',

							'ng-model'=>'name',

							'required'=> 'true', 

							'ng-pattern' => getRegexPattern("name"),

							'ng-minlength' => '2',

							'ng-maxlength' => '20',

							'ng-class'=>'{"has-error": formUsers.name.$touched && formUsers.name.$invalid}',



						)) }}

						<div class="validation-error" ng-messages="formUsers.name.$error" >

	    					{!! getValidationMessage()!!}

	    					{!! getValidationMessage('minlength')!!}

	    					{!! getValidationMessage('maxlength')!!}

	    					{!! getValidationMessage('pattern')!!}

						</div>

					</fieldset>



					<?php 

					$readonly = '';

					$username_value = null;

					if($record){

						$readonly = 'readonly="true"';

						// $username_value = $record->username;

					}



					?>

					 <fieldset class="form-group">

						

<<<<<<< HEAD
						{{ Form::label('username', __('messages.username')) }}
=======
						{{ Form::label('username', getphrase('username')) }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

						<span class="text-red">*</span>

						{{ Form::text('username', $value = $username_value , $attributes = array('class'=>'form-control', 'placeholder' => 'Jack',

							'ng-model'=>'username',

							'required'=> 'true', 

							 $readonly,



							'ng-minlength' => '2',

							'ng-maxlength' => '20',

							'ng-class'=>'{"has-error": formUsers.username.$touched && formUsers.username.$invalid}',



						)) }}

						<div class="validation-error" ng-messages="formUsers.username.$error" >

	    					{!! getValidationMessage()!!}

	    					{!! getValidationMessage('minlength')!!}

	    					{!! getValidationMessage('maxlength')!!}

	    					{!! getValidationMessage('pattern')!!}

						</div>

					</fieldset>
					
					@if($record)
					 <fieldset class="form-group">

						<?php $password_required = true; 
						if($record)
							$password_required = false;
						?>

<<<<<<< HEAD
						{{ Form::label('password', __('messages.password')) }}
=======
						{{ Form::label('password', getphrase('password')) }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						@if(!$record)

						<span class="text-red">*</span>
						@endif

						{{ Form::password('password', $attributes = array('class'=>'form-control', 'placeholder' => 'Enter password',

							'ng-model'=>'password',

							'required'=> $password_required, 

							'ng-minlength' => '2',

							'ng-maxlength' => '20',

							'ng-class'=>'{"has-error": formUsers.password.$touched && formUsers.password.$invalid}',



						)) }}

						<div class="validation-error" ng-messages="formUsers.password.$error" >

	    					{!! getValidationMessage()!!}

	    					{!! getValidationMessage('minlength')!!}

	    					{!! getValidationMessage('maxlength')!!}


						</div>

					</fieldset>
					@endif

					 <fieldset class="form-group">

						<?php 

						$readonly = '';

							if(!checkRole(getUserGrade(4)))

							$readonly = 'readonly="true"';

						if($record)

						{

							$readonly = 'readonly="true"';

						}



						?>

<<<<<<< HEAD
						{{ Form::label('email', __('messages.email')) }}
=======
						{{ Form::label('email', getphrase('email')) }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

						<span class="text-red">*</span>

						{{ Form::email('email', $value = null, $attributes = array('class'=>'form-control', 'placeholder' => 'jack@jarvis.com',

							'ng-model'=>'email',

							'required'=> 'true', 

							'ng-class'=>'{"has-error": formUsers.email.$touched && formUsers.email.$invalid}',

						 $readonly)) }}

						 <div class="validation-error" ng-messages="formUsers.email.$error" >

	    					{!! getValidationMessage()!!}

	    					{!! getValidationMessage('email')!!}

						</div>

					</fieldset>

					@if(!$record)
					 <fieldset class="form-group">
<<<<<<< HEAD
					 {{ Form::label('password', __('messages.password')) }}
=======
					 {{ Form::label('password', getphrase('password')) }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

						<span class="text-red">*</span>

						{{ Form::password('password', $attributes = array('class'=>'form-control instruction-call',

								'placeholder' => getPhrase("password"),

								'ng-model'=>'password',

								'required'=> 'true', 

								'ng-class'=>'{"has-error": formUsers.password.$touched && formUsers.password.$invalid}',

								'ng-minlength' => 5

							)) }}

						<div class="validation-error" ng-messages="formUsers.password.$error" >

							{!! getValidationMessage()!!}

							{!! getValidationMessage('password')!!}

						</div>


					</fieldset>

					 <fieldset class="form-group">
<<<<<<< HEAD
					 {{ Form::label('confirm_password', __('messages.confirm_password')) }}
=======
					 {{ Form::label('confirm_password', getphrase('confirm_password')) }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

						<span class="text-red">*</span>

						{{ Form::password('password_confirmation', $attributes = array('class'=>'form-control instruction-call',

<<<<<<< HEAD
								'placeholder' => __("messages.confirm_password"),
=======
								'placeholder' => getPhrase("confirm_password"),
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

								'ng-model'=>'password_confirmation',

								'required'=> 'true', 

								'ng-class'=>'{"has-error": formUsers.password_confirmation.$touched && formUsers.password.$invalid}',

								'ng-minlength' => 5

							)) }}

						<div class="validation-error" ng-messages="formUsers.password_confirmation.$error" >

							{!! getValidationMessage()!!}

							{!! getValidationMessage('password')!!}

						</div>


					</fieldset>

                  @endif





					@if(!checkRole(['parent']))

					<fieldset class="form-group">



<<<<<<< HEAD
						{{ Form::label('role', __('messages.role')) }}
=======
						{{ Form::label('role', getphrase('role')) }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

						<span class="text-red">*</span>

						<?php $disabled = (checkRole(getUserGrade(2))) ? '' :'disabled'; 

						

						$selected = getRoleData('student');

						if($record)

							$selected = $record->role_id;

						?>

<<<<<<< HEAD
						{{Form::select('role_id', $roles, $selected, ['placeholder' => __('messages.select_role'),'class'=>'form-control', $disabled,
=======
						{{Form::select('role_id', $roles, $selected, ['placeholder' => getPhrase('select_role'),'class'=>'form-control', $disabled,
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

							'ng-model'=>'role_id',

							'required'=> 'true', 

							'ng-class'=>'{"has-error": formUsers.role_id.$touched && formUsers.role_id.$invalid}'

						 ])}}

						  <div class="validation-error" ng-messages="formUsers.role_id.$error" >

	    					{!! getValidationMessage()!!}

	    					 

						</div>

						  

					</fieldset>

					@endif



					<fieldset class="form-group">

						

<<<<<<< HEAD
						{{ Form::label('phone', __('messages.phone')) }}
=======
						{{ Form::label('phone', getphrase('phone')) }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

						<span class="text-red">*</span>

						{{ Form::text('phone', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 
<<<<<<< HEAD
						__('messages.please_enter_10-15_digit_mobile_number'),
=======
						getPhrase('please_enter_10-15_digit_mobile_number'),
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

							'ng-model'=>'phone',

							'required'=> 'true', 
							
							'ng-pattern' => getRegexPattern("phone"),

							'ng-class'=>'{"has-error": formUsers.phone.$touched && formUsers.phone.$invalid}',


						)) }}

						 

						<div class="validation-error" ng-messages="formUsers.phone.$error" >

	    					{!! getValidationMessage()!!}

	    					{!! getValidationMessage('phone')!!}

	    					{!! getValidationMessage('maxlength')!!}

						</div>

					</fieldset>

					<div class="row">

						<fieldset class="form-group col-sm-6">

						

<<<<<<< HEAD
						{{ Form::label('address', __('messages.billing_address')) }}

					 

						{{ Form::textarea('address', $value = null , $attributes = array('class'=>'form-control','rows'=>3, 'cols'=>'15', 'placeholder' => __('messages.please_enter_your_address'),
=======
						{{ Form::label('address', getphrase('billing_address')) }}

					 

						{{ Form::textarea('address', $value = null , $attributes = array('class'=>'form-control','rows'=>3, 'cols'=>'15', 'placeholder' => getPhrase('please_enter_your_address'),
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

							'ng-model'=>'address',

							)) }}

					</fieldset>



					<fieldset class='col-sm-6'>

<<<<<<< HEAD
						{{ Form::label('image', __('messages.image')) }}
=======
						{{ Form::label('image', getphrase('image')) }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

						<div class="form-group row">

							<div class="col-md-6">

						

					{!! Form::file('image', array('id'=>'image_input', 'accept'=>'.png,.jpg,.jpeg')) !!}

							</div>

							<?php if(isset($record) && $record) { 

								  if($record->image!='') {

								?>

							<div class="col-md-6">

								<img src="{{ getProfilePath($record->image) }}" />



							</div>

							<?php } } ?>

						</div>

					</fieldset>

					  </div>

					

						<div class="buttons text-center">

							<button class="btn btn-lg btn-success button" 

							ng-disabled='!formUsers.$valid'>{{ $button_name }}</button>

						</div>