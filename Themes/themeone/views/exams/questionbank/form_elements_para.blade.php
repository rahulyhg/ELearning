
<div ng-if="question_type=='para' || question_type=='video' || question_type=='audio'">
    <div class="row">
    <fieldset class="form-group col-md-6"> 
<<<<<<< HEAD
        {{ Form::label('total_answers', __('messages.total_questions')) }}
=======
        {{ Form::label('total_answers', getphrase('total_questions')) }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
	      <span class="text-red">*</span>
		{{Form::select('total_answers',$exam_max_options , null, ['class'=>'form-control', "id"=>"total_answers", "ng-model"=>"total_answers", "ng-change" => "answersChanged(total_answers)" ,
          'required'=> 'true', 
        'ng-class'=>'{"has-error": formQuestionBank.total_answers.$touched && formQuestionBank.total_answers.$invalid}',
        ])}}
         <div class="validation-error" ng-messages="formQuestionBank.total_answers.$error" >
        {!! getValidationMessage()!!}
        </div>
    </fieldset>
    <?php 
    // dd($record);
    $total_answers = null;
    $set_answers = array();
    if($record) {
        $set_answers = json_decode($record->answers);
        if(count($set_answers))
        {
            if(isset($set_answers[0]->total_options))
            $total_answers = $set_answers[0]->total_options;
        }
    }
         // dd($record);
    ?>
    <fieldset class="form-group col-md-6"> 
<<<<<<< HEAD
        {{ Form::label('total_options', __('messages.total_options')) }}
=======
        {{ Form::label('total_options', getphrase('total_options')) }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
         <span class="text-red">*</span>
        {{Form::select('total_para_options',$exam_max_options , $total_answers, ['class'=>'form-control', "id"=>"total_para_options", "ng-model"=>"total_para_options", "ng-change" => "paraOptionsChanged(total_para_options)" ,
        'required'=> 'true', 
        'ng-class'=>'{"has-error": formQuestionBank.total_para_options.$touched && formQuestionBank.total_para_options.$invalid}',
        ])}}
         <div class="validation-error" ng-messages="formQuestionBank.total_para_options.$error" >
        {!! getValidationMessage()!!}
        </div>
    </fieldset>
    </div>

     <div class="row" data-ng-repeat="para in range(total_answers) track by $index" ng-if="total_answers > 0">
   
    <div class="col-md-12 question-block">

     <fieldset class="form-group" >

<<<<<<< HEAD
        <label >{{__('messages.question')}} @{{ $index+1 }}</label>
=======
        <label >Question @{{ $index+1 }}</label>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
        <span class="text-red">*</span>
        <input type="text" name="questions_list[]" id="question_@{{ $index }}" class="form-control" placeholder="Question @{{ $index+1 }}" ng-model="answers[$index].question"  required="true">

    </fieldset>

    <div class="row">

    <fieldset class="form-group col-md-6" ng-repeat="i in range(total_para_options) track by $index " ng-if="total_para_options >0 " >
<<<<<<< HEAD
        <label >{{__('messages.option')}} @{{ $index+1 }}</label> 
=======
        <label >Option @{{ $index+1 }}</label> 
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
        <span class="text-red">*</span>
        <input type="text" name="options[@{{ para }}][]" id="option_@{{ $index }}" class="form-control" placeholder="Option @{{ $index+1 }}" ng-model="answers[para]['options'][para][$index]" required="true">

    </fieldset>

    </div>

     <div class="row">

    <fieldset class="form-group col-md-12" >
       
<<<<<<< HEAD
          <label >{{__('messages.answer')}} @{{ $index+1 }}</label>
=======
          <label >Answer @{{ $index+1 }}</label>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
         <span class="text-red">*</span>
             <input type="text" name="correct_answers[]" id="correctanswer_@{{ $index }}" class="form-control" placeholder="Answer @{{ $index+1 }}" ng-model="correct_answers[para].answer" required="true" min="1">

    </fieldset>

          </div>
       </div>
    </div>

{{-- 
<<<<<<< HEAD
    <h4>{{__('messages.2nd_languages')}}</h4>
=======
    <h4>2nd Language</h4>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

     <div class="row" data-ng-repeat="para in range(total_answers) track by $index" ng-if="total_answers > 0">
   
    <div class="col-md-12 question-block">

     <fieldset class="form-group" >

<<<<<<< HEAD
        <label >{{__('messages.question')}} @{{ $index+1 }} ({{__('messages.2nd_languages')}})</label>
=======
        <label >Question @{{ $index+1 }} (2nd Language)</label>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
        
        <input type="text" name="questions_listl2[]" id="questionl2_@{{ $index }}" class="form-control" placeholder="Question @{{ $index+1 }}" ng-model="answers[$index].questionl2">

    </fieldset>

    <div class="row">

    <fieldset class="form-group col-md-6" ng-repeat="i in range(total_para_options) track by $index " ng-if="total_para_options >0 " >
<<<<<<< HEAD
        <label >{{__('messages.option')}} @{{ $index+1 }} ({{__('messages.2nd_languages')}})</label> 
=======
        <label >Option @{{ $index+1 }} (2nd Language)</label> 
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
        
        <input type="text" name="optionsl2[@{{ para }}][]" id="optionl2_@{{ $index }}" class="form-control" placeholder="Option @{{ $index+1 }}" ng-model="answers[para]['optionsl2'][para][$index]">

    </fieldset>

    </div>

    
       </div>
    </div> --}}

 


</div>