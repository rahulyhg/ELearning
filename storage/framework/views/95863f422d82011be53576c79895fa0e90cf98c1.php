<?php $__env->startSection('content'); ?>





<link href="<?php echo e(CSS); ?>animate.css" rel="dns-prefetch"/>



<div id="page-wrapper" class="examform" ng-controller="angExamScript" ng-init="initAngData(<?php echo e(json_encode($bookmarks)); ?>)">

    <div class="container-fluid">

        <!-- Page Heading -->

        <div class="row">

            <div class="col-lg-12">

                <ol class="breadcrumb">

                 
                    <li class="active">

                        <?php echo e($title); ?>


                    </li>

                </ol>

            </div>

        </div>

        <!-- /.row -->

        <!-- Page Hints -->

        <div class="row">

            <div class="col-md-12">

                 <ul class="suggestions">
                   <?php

               $section_data  = (array)json_decode($quiz->section_data);
              
           ?>
             
                 <?php $__currentLoopData = $section_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             
            
  
        <li class="dropdown" id="<?php echo e($key); ?>">

               <a href="javascript:void(0);" 
             
              data-psubject_title="<?php echo e($value->section_name); ?>"
              data-psubject_id="<?php echo e($key); ?>" 
              id="subject_section_<?php echo e($key); ?>"
              class="btn btn-success btn-sm st-exam-modules">
              <?php echo e($value->section_name); ?>  

            <i class="fa fa-info-circle st-custom-angle" aria-hidden="true"></i></a>

                
            </li>
            
        
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 <li>
                     <?php echo $__env->make('student.exams.languages',['quiz'=>$quiz], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                 </li>
                   

                </ul>

            </div>

        </div>

      
   

  


        <!-- /.row -->

        <!-- /.row -->

        <?php echo Form::open(array('url' => URL_STUDENT_EXAM_FINISH_EXAM.$quiz->slug, 'method' => 'POST', 'id'=>'onlineexamform')); ?>


        <div class="row">

            <div class="col-md-12">

                <div class="panel panel-custom">

                    <div class="panel-heading">

                        <div class="pull-right exam-duration">

                            <?php echo e(getPhrase('exam_duration')); ?>:

                            <span>

                                <?php echo e($time_hours); ?>:<?php echo e($time_minutes); ?>:00

                            </span>

                        </div>
                 <div class="pull-right hints">
                        <span class="hint">
                            <?php echo e(getPhrase('hints')); ?>

                        </span>
                        <label class="checkbox-inline">
                            <input ng-model="hints" style="display:block;" type="checkbox">
                        
                                </input>
                            </input>
                        </label>
                    </div>
                       

                        <h1>

                            <span class="text-uppercase">

                                <?php echo e($title); ?>


                            </span>

                            : <?php echo e(getPhrase('question')); ?>


                            <span id="question_number">

                                1

                            </span>

                            of <?php echo e(count($questions)); ?>


                        </h1>

    

                    </div>


         

                    <div class="panel-body question-ans-box">

                        

                        <div id="questions_list">

                        

                        <?php 



                        $questionHasVideo = FALSE; ?>


                           <?php $__currentLoopData = $section_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              
                              <?php
                               // dd($key);
                              $section_questions  =  $value->questions;

                             ?>


                            <?php $__currentLoopData = $section_questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key_id => $question_id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <?php
                                 
                                 $question  = App\QuestionBank::where('id',$question_id)->first();


                                ?>


                            <?php if(!$questionHasVideo)

                            {

                                if($question->question_type=='video')

                                $questionHasVideo = TRUE;

                            } ?>

                            <?php    

                                    $image_path = PREFIX.(new App\ImageSettings())->

                                    getExamImagePath(); 



                                    ?>


                             <?php 

                            $display_question = 'display:none;';
                            $previous_answers = [];
                            $time_spent = 0;
                            if($current_question_id)
                            {
                                if($current_question_id==$question->id) {
                                    $display_question = 'display:block;';
                                }
                                else
                                    $display_question = 'display:none;';
                            }
                               if($current_state) 
                               {
                                    if(array_key_exists($question->id, $current_state)) 
                                    {
                                        
                                        $previous_answers = $current_state[$question->id]->answers;
                                        $time_spent = $current_state[$question->id]->time_spent;
                                    }
                                    else 
                                    { 
                                        
                                    }
                                }

                                ?>


      

                       
                           <div 
                            class="question_div subject_<?php echo e($key); ?>" 
                            name="question[<?php echo e($question->id); ?>]" 
                            id="<?php echo e($question->id); ?>" 
                            style="display: none;" 
                            value="0">

 

                            <input type="hidden" name="time_spent[<?php echo e($question->id); ?>]" id="time_spent_<?php echo e($question->id); ?>" value="0">

                                
                                <div class="questions">

                                    <span class="language_l1"><?php echo $question->question; ?>   </span>
                                   <?php if($question->question_l2): ?> 
                                     <?php if($question->question_type == 'radio' || $question->question_type == 'checkbox' || $question->question_type == 'blanks' || $question->question_type == 'match'): ?>
                                   <span class="language_l2" style="display: none;"> <?php echo $question->question_l2; ?>   </span>
                                   <?php else: ?>
                                   <span class="language_l2" style="display: none;"> <?php echo $question->question; ?>   </span>
                                     <?php endif; ?>
                                   <?php else: ?>
                                   <span class="language_l2" style="display: none;"> <?php echo $question->question; ?>   </span>
                                   <?php endif; ?>

                                    <div class="row">
  <div class="col-md-8 text-center">
  <?php if($question->question_type!='audio' && $question->question_type !='video'): ?>
  <?php if($question->question_file): ?>
  <img class="image " src="<?php echo e($image_path.$question->question_file); ?>" style="max-height:200px;">
  <?php endif; ?>
  <?php endif; ?>
  </div>
  <div class="col-md-4">
   <span class="pull-right"> <a ng-if="bookmarks[<?php echo e($question->id); ?>] >= 0" 

                                title="<?php echo e(getPhrase('unbookmark_this_question')); ?>" 

                                ng-click="bookmark(<?php echo e($question->id); ?>,'delete','questions');" 

                                href="javascript:void(0)" class="pull-right btn btn-link"> 

                                <i class="fa fa-star item-bookmark"></i></a>

                

                                

                                <a ng-if="bookmarks[<?php echo e($question->id); ?>] == -1" title="<?php echo e(getPhrase('bookmark_this_question')); ?>" ng-click="bookmark(<?php echo e($question->id); ?>,'add','questions');" href="javascript:void(0)" class="pull-right btn btn-link"> <i class="fa fa-star-o item-bookmark"></i></a>
                                   <?php echo e($question->marks); ?> Mark(s)</span>
  </div>
  </div>

                                 

                                    <div class="option-hints pull-right default" data-placement="left" data-toggle="tooltip" ng-show="hints" title="<?php echo e($question->hint); ?>">

                                        <i class="mdi mdi-help-circle">

                                        </i>

                                    </div>

                                </div>

                                <hr>

                                    <?php    

                                    $image_path = PREFIX.(new App\ImageSettings())->

                                    getExamImagePath(); 



                                    ?>



                                <?php echo $__env->make('student.exams.question_'.$question->question_type, array('question', $question, 'image_path' => $image_path,'previous_answers'=>$previous_answers  ), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    

                                </hr>

                            </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>

                        

                        

                        <hr>

                            <div class="row">

                                <div class="col-md-12">

                                   
                                    <button class="btn btn-lg btn-dark button next" id="markbtn" type="button">

                                        <?php echo e(getPhrase('mark_for_review')); ?> & <?php echo e(getPhrase('next')); ?>


                                    </button>

                                    <button class="btn btn-lg btn-success button next" type="button">

                                        <?php echo e(getPhrase('next')); ?>


                                        <i class="mdi mdi-chevron-right">

                                        </i>

                                    </button>

                                    <button class="btn btn-lg btn-dark button clear-answer" type="button">

                                        <?php echo e(getphrase('clear_answer')); ?>


                                    </button>

                                    <button class="btn btn-lg btn-danger button   finish" type="button">

                                        <?php echo e(getPhrase('finish')); ?>


                                    </button>

                                </div>

                            </div>

                        </hr>

                    </div>

                </div>

            </div>

            <?php echo Form::close(); ?>


             <input type="hidden" name="quiz_id" id="quiz_id" value="<?php echo e($quiz->id); ?>">
            <input type="hidden" name="student_id" id="student_id" value="<?php echo e($user->id); ?>">

        </div>

    </div>

</div>

<!-- /#page-wrapper -->

<?php $__env->stopSection(); ?>



<?php $__env->startSection('footer_scripts'); ?>

  

<?php echo $__env->make('student.exams.scripts.js-scripts-section-timer',['quiz_record'=>$quiz,'section_timings'=>$section_timings], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('common.editor', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<!--JS Control-->

<?php if($questionHasVideo): ?>

<?php echo $__env->make('common.video-scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php endif; ?>



<script type="text/javascript">


    $(document).ready(function () {

   showSubjectQuestion('subject_<?php echo e($sections[0]); ?>','<?php echo e($section_names[0]); ?>');
    
     intilizetimer(<?php echo e($section_timings[0]['hrs']); ?>,<?php echo e($section_timings[0]['minutes']); ?>,1); 

});

function resumeSetup(current_question_id) {
    DIV_REFERENCE.first().hide();
    
    current_question_number = $('#'+current_question_id).attr('data-current-question');
    $('#question_number').html(current_question_number);
    
    $('#'+current_question_id).fadeIn(300);
    

 
}

/**

 * intilizetimer(hours, minutes, seconds)

 * This method will set the values to defaults

 */


document.onmousedown=disableclick;
    status="right_clickdisabled";
    function disableclick(event)
    {
      if(event.button==2)
       {
         
         return false;    
       }
    } 
  


    function languageChanged(language_value)
    {
      if(language_value=='language_l2')
      {
        $('.language_l1').hide();
        $('.language_l2').show();
      }
      else {
        $('.language_l2').hide();
        $('.language_l1').show(); 
      }
      
    }



</script>

<script>

$('.finish').click(function(){

 alertify.confirm('Are you sure you want to submit examination and once submitted you cannot make any changes',

    function(e){ 
     
      if(e){

        $("#onlineexamform").submit();

          alertify.success('Ok') 
      }

      else{

      }

  });

});

 

</script>

<?php $__env->stopSection(); ?>



 
   
 


<?php echo $__env->make('layouts.examlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>