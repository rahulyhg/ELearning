 					
 				
					<div class="row">
 					 <fieldset class="form-group col-md-6">
						
<<<<<<< HEAD
						{{ Form::label('title', __('messages.title')) }}
						<span class="text-red">*</span>
						{{ Form::text('title', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => __('messages.quiz_title'),
=======
						{{ Form::label('title', getphrase('title')) }}
						<span class="text-red">*</span>
						{{ Form::text('title', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => getPhrase('quiz_title'),
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
							'ng-model'=>'title', 
							'ng-pattern'=>getRegexPattern('name'), 
							'required'=> 'true', 
							'ng-class'=>'{"has-error": formQuiz.title.$touched && formQuiz.title.$invalid}',
							'ng-minlength' => '4',
							'ng-maxlength' => '40',
							)) }}
						<div class="validation-error" ng-messages="formQuiz.title.$error" >
	    					{!! getValidationMessage()!!}
	    					{!! getValidationMessage('pattern')!!}
	    					{!! getValidationMessage('minlength')!!}
	    					{!! getValidationMessage('maxlength')!!}
						</div>
					</fieldset>

					<fieldset class="form-group col-md-6">
						
<<<<<<< HEAD
						{{ Form::label('category_id', __('messages.category')) }}
=======
						{{ Form::label('category_id', getphrase('category')) }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						<span class="text-red">*</span>
						{{Form::select('category_id', $categories, null, ['class'=>'form-control'])}}
						
					</fieldset>

  
				    </div>

				<div class="row">
	  				 <fieldset class="form-group col-md-6">
							
<<<<<<< HEAD
							{{ Form::label('dueration', __('messages.duration')) }}
							<span class="text-red">*</span>
							{{ Form::number('dueration', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => __('messages.enter_value_in_minutes'),
=======
							{{ Form::label('dueration', getphrase('duration')) }}
							<span class="text-red">*</span>
							{{ Form::number('dueration', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => getPhrase('enter_value_in_minutes'),
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
								'min'=>1,
							'ng-model'=>'dueration', 
							'required'=> 'true',
							'string-to-number'=> 'true', 	
							'ng-class'=>'{"has-error": formQuiz.dueration.$touched && formQuiz.dueration.$invalid}',
							 
							)) }}
						<div class="validation-error" ng-messages="formQuiz.dueration.$error" >
	    					{!! getValidationMessage()!!}
	    					{!! getValidationMessage('number')!!}
						</div>
					</fieldset>	
	  				 <fieldset class="form-group col-md-3">
							
<<<<<<< HEAD
							{{ Form::label('total_marks', __('messages.total_marks')) }}
							<span class="text-red">*</span>
							{{ Form::text('total_marks', $value = null , $attributes = array('class'=>'form-control','readonly'=>'true' ,'placeholder' => __('messages.It will be updated by adding the questions'))) }}
					</fieldset>	
					 <fieldset class="form-group col-md-3">
						
						{{ Form::label('pass_percentage', __('messages.pass_percentage')) }}
=======
							{{ Form::label('total_marks', getphrase('total_marks')) }}
							<span class="text-red">*</span>
							{{ Form::text('total_marks', $value = null , $attributes = array('class'=>'form-control','readonly'=>'true' ,'placeholder' => getPhrase('It will be updated by adding the questions'))) }}
					</fieldset>	
					 <fieldset class="form-group col-md-3">
						
						{{ Form::label('pass_percentage', getphrase('pass_percentage')) }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						<span class="text-red">*</span>
						{{ Form::number('pass_percentage', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => '40',
							'min'=>'1',
							'max' =>'100',
						'ng-model'=>'pass_percentage', 
						'required'=> 'true', 
						'string-to-number'=> 'true', 

						'ng-class'=>'{"has-error": formQuiz.pass_percentage.$touched && formQuiz.pass_percentage.$invalid}',
							 
							)) }}
						<div class="validation-error" ng-messages="formQuiz.pass_percentage.$error" >
	    					{!! getValidationMessage()!!}
	    					{!! getValidationMessage('number')!!}
						</div>
				</fieldset>
				</div>
				 
				<div class="row">
				 
  				 <fieldset   class="form-group col-md-6">
						
<<<<<<< HEAD
						{{ Form::label('negative_mark', __('messages.negative_mark')) }}
=======
						{{ Form::label('negative_mark', getphrase('negative_mark')) }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						<span class="text-red">*</span>
						{{ Form::number('negative_mark', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => '40',
							'min'=>'0',
							'max' =>'100',
						'ng-model'=>'negative_mark', 
						'required'=> 'true', 
						'string-to-number'=> 'true', 
						'ng-class'=>'{"has-error": formQuiz.negative_mark.$touched && formQuiz.negative_mark.$invalid}',
							 
							)) }}
						<div class="validation-error" ng-messages="formQuiz.negative_mark.$error" >
	    					{!! getValidationMessage()!!}
	    					{!! getValidationMessage('number')!!}
						</div>
				</fieldset>
					<fieldset class="form-group col-md-6">
						
<<<<<<< HEAD
						{{ Form::label('instructions_page_id', __('messages.instructions_page')) }}
=======
						{{ Form::label('instructions_page_id', getphrase('instructions_page')) }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						<span class="text-red">*</span>
						{{Form::select('instructions_page_id', $instructions, null, ['class'=>'form-control'])}}
						
					</fieldset>
  				 
				</div>

				<div class="row input-daterange" >
		 	<?php 
		 	$date_from = date('Y/m/d');
		 	$date_to = date('Y/m/d');
		 	if($record)
		 	{
		 		$date_from = $record->start_date;
		 		$date_to = $record->end_date;
		 	}
		 	 ?>
		 	 <fieldset class="form-group col-md-6">
<<<<<<< HEAD
				{{ Form::label('start_date', __('messages.start_date')) }}
=======
				{{ Form::label('start_date', getphrase('start_date')) }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
				{{ Form::text('start_date', $value = $date_from , $attributes = array('class'=>'input-sm form-control', 'placeholder' => '2015/7/17')) }}
			</fieldset>

			<fieldset class="form-group col-md-6">
<<<<<<< HEAD
				{{ Form::label('end_date', __('messages.end_date')) }}
=======
				{{ Form::label('end_date', getphrase('end_date')) }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
				{{ Form::text('end_date', $value = $date_to , $attributes = array('class'=>'input-sm form-control', 'placeholder' => '2015/7/17')) }}
 			</fieldset>

			</div>

				<div  class="row">

				<?php $payment_options = array('1'=>'Paid', '0'=>'Free');?>
					 <fieldset class="form-group col-md-6" >
<<<<<<< HEAD
						{{ Form::label('is_paid', __('messages.is_paid')) }}
						<span class="text-red">*</span>
						{{Form::select('is_paid', $payment_options, null, ['placeholder' => __('messages.select'),'class'=>'form-control', 
=======
						{{ Form::label('is_paid', getphrase('is_paid')) }}
						<span class="text-red">*</span>
						{{Form::select('is_paid', $payment_options, null, ['placeholder' => getPhrase('select'),'class'=>'form-control', 
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						'ng-model'=>'is_paid',
							'required'=> 'true', 
							'ng-pattern' => getRegexPattern("name"),
							'ng-minlength' => '2',
							'ng-maxlength' => '20',
							'ng-class'=>'{"has-error": formQuiz.is_paid.$touched && formQuiz.is_paid.$invalid}',

						]) }}
						<div class="validation-error" ng-messages="formQuiz.is_paid.$error" >
	    					{!! getValidationMessage()!!}
						</div>


					</fieldset>

				 
					<div ng-if="is_paid==1">
	  				 <fieldset class="form-group col-md-3">
							
<<<<<<< HEAD
							{{ Form::label('validity', __('messages.validity')) }}
							<span class="text-red">*</span>
							{{ Form::number('validity', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => __('messages.validity_in_days'),
=======
							{{ Form::label('validity', getphrase('validity')) }}
							<span class="text-red">*</span>
							{{ Form::number('validity', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => getPhrase('validity_in_days'),
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
							'ng-model'=>'validity',
							'string-to-number'=> 'true', 
							'min'=>'1',
							 
							'required'=> 'true', 
							'ng-class'=>'{"has-error": formQuiz.validity.$touched && formQuiz.validity.$invalid}',
							 
							)) }}
						<div class="validation-error" ng-messages="formQuiz.validity.$error" >
	    					{!! getValidationMessage()!!}
	    					{!! getValidationMessage('number')!!}
						</div>
					</fieldset>	
	  				 <fieldset class="form-group col-md-3">
						
<<<<<<< HEAD
						{{ Form::label('cost', __('messages.cost')) }}
=======
						{{ Form::label('cost', getphrase('cost')) }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						<span class="text-red">*</span>
						{{ Form::number('cost', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => '40',
							'min'=>'0',
							 
						'ng-model'=>'cost', 
						'required'=> 'true', 
						'string-to-number'=> 'true', 
						'ng-class'=>'{"has-error": formQuiz.cost.$touched && formQuiz.cost.$invalid}',
							 
							)) }}
						<div class="validation-error" ng-messages="formQuiz.cost.$error" >
	    					{!! getValidationMessage()!!}
	    					{!! getValidationMessage('number')!!}
						</div>
				</fieldset>
				</div>
				</div>


				 <?php

                   $options  = array('1'=>'Yes',
                                     '0'=>'No');

                   ?>

                   <div class="row">

					<fieldset class="form-group col-md-6" >
<<<<<<< HEAD
						{{ Form::label('show_in_front', __('messages.Take exam with out registration')) }}
						<span class="text-red">*</span>
						{{Form::select('show_in_front', $options, null, ['placeholder' => __('messages.select'),'class'=>'form-control', 
=======
						{{ Form::label('show_in_front', 'Take exam with out registration') }}
						<span class="text-red">*</span>
						{{Form::select('show_in_front', $options, null, ['placeholder' => getPhrase('select'),'class'=>'form-control', 
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						'ng-model'=>'show_in_front',
							'required'=> 'true', 
							'ng-pattern' => getRegexPattern("name"),
							'ng-minlength' => '2',
							'ng-maxlength' => '20',
							'ng-class'=>'{"has-error": formQuiz.show_in_front.$touched && formQuiz.show_in_front.$invalid}',

						]) }}
						<div class="validation-error" ng-messages="formQuiz.show_in_front.$error" >
	    					{!! getValidationMessage()!!}
						</div>


					</fieldset>

					  <fieldset class="form-group col-md-6">
						
<<<<<<< HEAD
						{{ Form::label('exam_type', __('messages.exam_types')) }}
=======
						{{ Form::label('exam_type', getphrase('exam_type')) }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						<span class="text-red">*</span>
						{{Form::select('exam_type', $exam_types, null, ['class'=>'form-control','ng-model'=>'exam_type'])}}
						
					</fieldset>

					</div>
 
                 <div class="row">

					<?php $language_options = array('1'=>'Yes', '0'=>'No');?>

					 <fieldset class="form-group col-md-6" >
<<<<<<< HEAD
						{{ Form::label('has_language', __('messages.It has other language?')) }}
						<span class="text-red">*</span>
						{{Form::select('has_language', $language_options, null, ['placeholder' => __('messages.select'),'class'=>'form-control', 
=======
						{{ Form::label('has_language', 'It has other language?') }}
						<span class="text-red">*</span>
						{{Form::select('has_language', $language_options, null, ['placeholder' => getPhrase('select'),'class'=>'form-control', 
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						'ng-model'=>'has_language',
						'required'=> 'true', 
						'ng-class'=>'{"has-error": formQuiz.has_language.$touched && formQuiz.has_language.$invalid}',

						]) }}
						<div class="validation-error" ng-messages="formQuiz.has_language.$error" >
	    					{!! getValidationMessage()!!}
						</div>
					</fieldset>
                     
                     <?php $languages_data = getLangugesOptions(); ?>
                     
					 <fieldset class="form-group col-md-6" ng-if="has_language == 1">
<<<<<<< HEAD
						{{ Form::label('language_name', __('messages.It has other language?')) }}
						<span class="text-red">*</span>
						{{Form::select('language_name', $languages_data, null, ['placeholder' => __('messages.select'),'class'=>'form-control', 
=======
						{{ Form::label('language_name', 'It has other language?') }}
						<span class="text-red">*</span>
						{{Form::select('language_name', $languages_data, null, ['placeholder' => getPhrase('select'),'class'=>'form-control', 
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						'ng-model'=>'language_name',
						'required'=> 'true', 
						'ng-class'=>'{"has-error": formQuiz.language_name.$touched && formQuiz.language_name.$invalid}',

						]) }}
						<div class="validation-error" ng-messages="formQuiz.language_name.$error" >
	    					{!! getValidationMessage()!!}
						</div>
					</fieldset>

					{{-- 	@component('fields.languages')
						@endcomponent --}}


					</fieldset>

					</div>

					

						<div class="row">

				 <fieldset class="form-group col-md-6" >

<<<<<<< HEAD
				   {{ Form::label('category', __('messages.image')) }}
=======
				   {{ Form::label('category', getphrase('image')) }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
				         <input type="file" class="form-control" name="examimage" 
				         accept=".png,.jpg,.jpeg" id="image_input">
				          
				          
				    </fieldset>

				     <fieldset class="form-group col-md-6" >
					@if($record)	
				   		@if($record->image)
				         <?php $examSettings = getExamSettings(); ?>
				         <img src="{{ PREFIX.$examSettings->categoryImagepath.$record->image }}" height="100" width="100" >

				         @endif
				     @endif
					

				    </fieldset>
						
					</div>

				 
				  <div class="row">
 					
					<fieldset class="form-group col-md-12">
						
<<<<<<< HEAD
						{{ Form::label('description', __('messages.description')) }}
						
						{{ Form::textarea('description', $value = null , $attributes = array('class'=>'form-control', 'rows'=>'5', 'placeholder' => __('messages.description'))) }}
=======
						{{ Form::label('description', getphrase('description')) }}
						
						{{ Form::textarea('description', $value = null , $attributes = array('class'=>'form-control', 'rows'=>'5', 'placeholder' => getPhrase('description'))) }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
					</fieldset>

			</div>		
                   
                  


						<div class="buttons text-center">
							<button class="btn btn-lg btn-success button"
							ng-disabled='!formQuiz.$valid'>{{ $button_name }}</button>
						</div>
		 
