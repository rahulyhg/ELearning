 <?php $__env->startSection('custom_div'); ?>

 <div ng-controller="prepareQuestions">

 <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div id="page-wrapper">

			<div class="container-fluid">

				<!-- Page Heading -->

				<div class="row">

					<div class="col-lg-12">

						<ol class="breadcrumb">

							<li><a href="<?php echo e(PREFIX); ?>"><i class="mdi mdi-home"></i></a> </li>

							<li><a href="<?php echo e(URL_QUIZZES); ?>"><?php echo e(__('messages.quizzes')); ?></a></li>

							<li class="active"><?php echo e(isset($title) ? $title : ''); ?></li>

						</ol>

					</div>

				</div>

					<?php echo $__env->make('errors.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					
				<?php $settings = ($record) ? $settings : ''; ?>

				<div class="panel panel-custom" ng-init="initAngData(<?php echo e($settings); ?>);" >

					<div class="panel-heading">

						<div class="pull-right messages-buttons">

							<a href="<?php echo e(URL_QUIZZES); ?>" class="btn  btn-primary button" ><?php echo e(__('messages.list')); ?></a>

						</div>

					<h1><?php echo e($title); ?>  </h1>

					</div>

					<div class="panel-body" >

					<?php $button_name = __('messages.create'); ?>

					 		<div class="row">
					 		<div class="col-md-6">

							<fieldset class="form-group col-md-6">

								<?php echo e(Form::label('subject', __('messages.subject'))); ?>


								<span class="text-red">*</span>

								<?php echo e(Form::select('subject', $subjects, null, ['class'=>'form-control', 'ng-model' => 'subject_id', 

								'placeholder' => 'Select', 'ng-change'=>'subjectChanged(subject_id)' ])); ?>


							</fieldset>

								<fieldset class="form-group col-md-6">

								<?php echo e(Form::label('difficulty', __('messages.difficulty'))); ?>

								<select ng-model="difficulty" class="form-control" >

								<option value=""><?php echo e(__('messages.select')); ?></option>	

								<option value="easy"><?php echo e(__('messages.easy')); ?></option>	

								<option value="medium"><?php echo e(__('messages.medium')); ?></option>	

								<option value="hard"><?php echo e(__('messages.hard')); ?></option>	

								</select>

								</fieldset>



								<fieldset class="form-group col-md-6">

								<?php echo e(Form::label('question_type', __('messages.question_type'))); ?>


								<select ng-model="question_type" class="form-control" >

									<option selected="selected" value=""><?php echo e(__('messages.select')); ?></option>

									<option value="radio"><?php echo e(__('messages.single_answer')); ?></option>

									<option value="checkbox"><?php echo e(__('messages.multi_answer')); ?></option>


									<option value="blanks"><?php echo e(__('messages.fill_the_blanks')); ?></option>

									<option value="match"><?php echo e(__('messages.match_the_following')); ?></option>

									<option value="para"><?php echo e(__('messages.paragraph')); ?></option>

									<option value="video"><?php echo e(__('messages.video')); ?></option>

								</select>

								</fieldset>

								<!-- <fieldset class="form-group col-md-6">

								<?php echo e(Form::label('show_in_front_end', __('messages.show_in_front_end'))); ?>


								<select ng-model="show_in_front_end" class="form-control" >

									<option selected="selected" value=""><?php echo e(__('messages.select')); ?></option>

									<option value="1"><?php echo e(__('messages.yes')); ?></option>

									<option value="0"><?php echo e(__('messages.no')); ?></option>


									

								</select>

								</fieldset> -->



								<!-- <fieldset class="form-group col-md-6">

								<?php echo e(Form::label('searchTerm', __('messages.search_term'))); ?>


								<?php echo e(Form::text('searchTerm', $value = null , $attributes = array('class'=>'form-control', 

						'placeholder' => __('messages.enter_search_term'),

						'ng-model'=>'searchTerm'))); ?>


								</fieldset> -->


								<fieldset class="form-group col-md-6">

								<?php echo e(Form::label('question_model', __('messages.enter_search_term'))); ?>


								<?php echo e(Form::text('question_model', $value = null , $attributes = array('class'=>'form-control', 

						'placeholder' => __('messages.enter_search_term'),

						'ng-model'=>'question_model'))); ?>


								</fieldset>

							
						 
							<?php if($record->exam_type!='NSNT'): ?>
							
								<fieldset class="form-group col-md-6">

								<?php echo e(Form::label('section_name', 'Section Name')); ?>


								<?php echo e(Form::text('section_name', $value = null , $attributes = array('class'=>'form-control', 

						       'placeholder' => 'Section name',

						        'ng-model'=>'section_name'))); ?>


								</fieldset>

								<?php endif; ?>


							  <?php if($record->exam_type != 'NSNT' && $record->exam_type != 'SNT'): ?>	

								<fieldset class="form-group col-md-6">

								<?php echo e(Form::label('section_time', 'Section Time In Minutes')); ?>


								<?php echo e(Form::text('section_time', $value = null , $attributes = array('class'=>'form-control', 

									'placeholder' => 'Section Time',

									'ng-model'=>'section_time'))); ?>


								</fieldset>

								<?php endif; ?>
							

							<div class="col-md-12" ng-show="contentAvailable">
									<!-- <div ng-repeat="question in subjectQuestions | filter: { difficulty_level:difficulty, question_type:question_type, show_in_front_end:show_in_front_end , topic_id:topic, sub_topic_id:sub_topic } | filter: question_model track by $index ">
									<a ng-click="addQuestion(question, subject);" class="btn btn-primary" ><?php echo e(__('messages.add')); ?></a>
									</div> -->
								<!-- <a ng-click="addQuestion(question, subject);" class="btn btn-primary" ><?php echo e(__('messages.add')); ?></a>		 -->
							<div ng-if="subjectQuestions!=''" class="vertical-scroll" >
								<h4 class="text-success"><?php echo e(__('messages.question')); ?> {{ subjectQuestions.length }} </h4>
								<table  

								  class="table table-hover">
								  <script language="JavaScript">
									function toggle(source) {
										checkboxes = document.getElementsByName('check2');
										for(var i=0, n=checkboxes.length;i<n;i++) {
											checkboxes[i].checked = source.checked;
										}
									}
									</script>
									<th ><?php echo e(__('messages.subject')); ?></th>

									<th><?php echo e(__('messages.question')); ?></th>

									<th><?php echo e(__('messages.difficulty')); ?></th>

									<th><?php echo e(__('messages.type')); ?></th>

									<th><?php echo e(__('messages.marks')); ?></th>	

									<th><a ng-click="addQuestion(question, subject);" class="btn btn-primary" ><?php echo e(__('messages.add_all')); ?></a></th>	

									
									<tr ng-repeat="question in subjectQuestions | filter: { difficulty_level:difficulty, question_type:question_type, show_in_front_end:show_in_front_end , topic_id:topic, sub_topic_id:sub_topic } | filter: question_model track by $index ">

										<td>{{subject.subject_title}}</td>

										<td title="{{subjectQuestions[$index].question}}" ng-bind-html="trustAsHtml(question.question)">

										
										</td>

										

										<td>{{question.difficulty_level | uppercase}}</td>

										<td>{{question.question_type | uppercase}}</td>

										<td>{{question.marks}}</td>

										<td>
										<a ng-click="addQuestion(question, subject);" class="btn btn-primary" ><?php echo e(__('messages.add')); ?></a>
										</td>

										

									</tr>

								</table>
									
								</div>	
									
							



					 			</div>



					 		</div>

					 			 <div class="col-md-6">
					 			 	<?php echo $__env->make('exams.quiz.questions-selection-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					 			 </div>
					 		</div>

					 

					</div>



				</div>

			</div>

			<!-- /.container-fluid -->

		</div>

		<!-- /#page-wrapper -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>

<?php echo $__env->make('exams.quiz.scripts.js-scripts', ['quiz_record' => $record], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('common.alertify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

 

<?php $__env->startSection('custom_div_end'); ?>

 </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>