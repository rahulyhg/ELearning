<?php 
	$questions 	= $data['questions'];
	$quiz 		= $data['quiz'];
	if(isset($data['current_state']))
    $cState     = $data['current_state'];

 ?>
<div class="panel-heading">
					<h2>Time Status</h2>
				</div>
				<div class="panel-body">
					<div id="timerdiv" class="countdown-styled ">

						<span id="hours"><?php echo e($data['time_hours']); ?></span> : 
						<span id="mins"><?php echo e($data['time_minutes']); ?></span> : 
						<span id="seconds">00</span>

					</div>
					 
				</div>
			

				 	<div class="panel-body">
					<div class="sub-heading">
						<h3><?php echo e($quiz->title); ?></h3>
						<p><?php echo e(ucfirst($quiz->category->category) .' '. getPhrase('category')); ?></p>
					</div>
					<ul class="question-palette" id="pallete_list">

						    <?php $i=0;?>

                     <?php $__currentLoopData = $section_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              
                              <?php
                               
                              $section_questions  =  $value->questions;

                             ?>


                              <?php $__currentLoopData = $section_questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key_id => $question_id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <?php
                                 
                                 $question  = App\QuestionBank::where('id',$question_id)->first();


                                ?>


                       <?php $subject_pallet_class = 'pallet_subject_'.$key; ?>
                        
                      <li 
                      id="pallet_<?php echo e($question->id); ?>" 
                      style="display:none;" 
                      class="palette pallete-elements pallete-elements-item <?php echo e($subject_pallet_class); ?>  not-visited" 
                      onclick="showSpecificQuestion(<?php echo e($i); ?>);"
                      data-psubject_id="<?php echo e($key); ?>"
                      >
                        <span><?php echo e($i+1); ?></span>
                        </li>
                        <?php $i++; ?>
                       
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					
					</ul>
				</div>
				<hr>
				<div class="panel-heading">
					<h2><?php echo e(getPhrase('summary')); ?></h2>
				</div>
				<div class="panel-body">
					<ul class="legends">
						<li  class="palette answered"><span id="palette_total_answered">1</span> <?php echo e(getPhrase('answered')); ?></li>
						<li  class="palette marked"><span id="palette_total_marked">2</span> <?php echo e(getPhrase('marked')); ?></li>
						<li  class="palette not-answered"><span id="palette_total_not_answered">3</span> <?php echo e(getPhrase('not_answered')); ?></li>
						<li  class="palette not-visited"><span id="palette_total_not_visited">4</span> <?php echo e(getPhrase('not_visited')); ?></li>
					</ul>
				</div>
