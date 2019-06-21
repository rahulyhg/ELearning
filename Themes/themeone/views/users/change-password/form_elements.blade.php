 

					 <fieldset class="form-group">

						

						{{ Form::label('old_password', __('messages.old_password')) }}

						<span class="text-red">*</span>

						{{ Form::password('old_password', $attributes = array('class'=>'form-control', 'placeholder' => __('messages.old_password'),

							'ng-model'=>'old_password',

							'required'=> 'true', 

							'ng-class'=>'{"has-error": changePassword.old_password.$touched && changePassword.old_password.$invalid}',

							'ng-minlength' => 5

						)) }}

	<div class="validation-error" ng-messages="changePassword.old_password.$error" >

		{!! getValidationMessage()!!}

		{!! getValidationMessage('password')!!}

	</div>

					</fieldset>

					 

					 <fieldset class="form-group">

						

						{{ Form::label('password', __('messages.new_password')) }}

						<span class="text-red">*</span>

						{{ Form::password('password', $attributes = array('class'=>'form-control', 'placeholder' => __('messages.new_password'),

						'ng-model'=>'password',

							'required'=> 'true', 

							'ng-class'=>'{"has-error": changePassword.password.$touched && changePassword.password.$invalid}',

							'ng-minlength' => 5

						)) }}

	<div class="validation-error" ng-messages="changePassword.password.$error" >

		{!! getValidationMessage()!!}

		{!! getValidationMessage('password')!!}

	</div>

					</fieldset>

					 <fieldset class="form-group">

						

						{{ Form::label('password_confirmation', __('messages.retype_password')) }}

						<span class="text-red">*</span>

						{{ Form::password('password_confirmation', $attributes = array('class'=>'form-control', 'placeholder' => __('messages.retype_password'),

						'ng-model'=>'password_confirmation',

							'required'=> 'true', 

							'ng-class'=>'{"has-error": changePassword.password_confirmation.$touched && changePassword.password_confirmation.$invalid}',

							'compare-to' =>"password",

							'ng-minlength' => 5

						)) }}

	<div class="validation-error" ng-messages="changePassword.password_confirmation.$error" >

		{!! getValidationMessage()!!}

		{!! getValidationMessage('password')!!}

		{!! getValidationMessage('confirmPassword')!!}

	</div>

					</fieldset>											

					 

					

						<div class="buttons text-center">

							<button class="btn btn-lg btn-success button"

							ng-disabled='!changePassword.$valid' >{{ __('messages.update') }}</button>

						</div>