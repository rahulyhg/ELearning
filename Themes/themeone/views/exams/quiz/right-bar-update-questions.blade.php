<div class="panel-heading">

<<<<<<< HEAD
		<h2>{{__('messages.saved_questions')}}</h2>

	<div class="crearfix selected-questions-details">

		<span class="pull-left">{{__('messages.saved_questions')}} (@{{savedQuestions.length}})</span>

		<span class="pull-right">{{__('messages.total_marks')}}: @{{ totalMarks }}</span>
=======
		<h2>{{getPhrase('saved_questions')}}</h2>

	<div class="crearfix selected-questions-details">

		<span class="pull-left">{{getPhrase('saved_questions')}} (@{{savedQuestions.length}})</span>

		<span class="pull-right">{{getPhrase('total_marks')}}: @{{ totalMarks }}</span>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

	</div>	

	</div>

	{!! Form::open(array('url' => URL_QUIZ_UPDATE_QUESTIONS.$record->slug, 'method' => 'POST')) !!}

					 	<input type="hidden" name="saved_questions" value="@{{savedQuestions}}">

	<div class="panel-body">

		<div class="row">

			<div class="col-md-12 clearfix">

				<div ng-if="savedQuestions!=''" class="vertical-scroll" >

					 				

<<<<<<< HEAD
					 				<a class="remove-all-questions text-red" style="cursor: pointer;" ng-click="removeAll()">{{__('messages.remove_all')}}</a>
=======
					 				<a class="remove-all-questions text-red" style="cursor: pointer;" ng-click="removeAll()">{{getPhrase('remove_all')}}</a>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

					 				<table  

								  class="table table-hover">

								  <thead>

								  <tr>

<<<<<<< HEAD
									<th>{{__('messages.subject')}}</th>

									<th>{{__('messages.question')}}</th>

									<th>{{__('messages.marks')}}</th>	
=======
									<th>{{getPhrase('subject')}}</th>

									<th>{{getPhrase('question')}}</th>

									<th>{{getPhrase('marks')}}</th>	
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

									<th></th>	

									</tr>

									</thead>

									<tbody>

										<tr ng-repeat="i in savedQuestions track by $index">

										<td>@{{ savedQuestions[$index].subject_title}}</td>

										<td title="@{{ savedQuestions[$index].question}}">@{{ savedQuestions[$index].question  }}</td>

										<td>@{{ savedQuestions[$index].marks}}</td>

										<td><a ng-click="removeQuestion(i)" style="cursor: pointer;" class="btn-outline btn-close text-red"><i class="fa fa-close"></i></a></td>

										</tr>

									</tbody>

									</table>

					 			</div>



					 			<div class="buttons text-center" >

<<<<<<< HEAD
							<button class="btn btn-lg btn-success button">{{__('messages.update')}}</button>
=======
							<button class="btn btn-lg btn-success button">{{getPhrase('update')}}</button>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

						</div>

			</div>

		</div>

	</div>



{!! Form::close() !!}



	 

	 

