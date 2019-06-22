 @extends($layout)
@section('content')

<div id="page-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<ol class="breadcrumb">
							 
							<li>{{ $title}}</li>
						</ol>
					</div>
				</div>
				 <div class="row">
					<div class="col-md-4">
						<div class="card card-blue text-xs-center">
							<div class="card-block">
							<h4 class="card-title">{{ count(App\User::getUserSeleted('categories'))}}</h4>
								<p class="card-text">{{ __('messages.quiz_categories')}}</p>
							</div>
							<a class="card-footer text-muted" href="{{URL_STUDENT_EXAM_CATEGORIES}}">
								{{ __('messages.view_all')}}
							</a>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-yellow text-xs-center">
							<div class="card-block">
								<h4 class="card-title">{{ App\User::getUserSeleted('quizzes') }}</h4>
								<p class="card-text">{{ __('messages.quizzes')}}</p>
							</div>
							<a class="card-footer text-muted" href="{{URL_STUDENT_EXAM_ALL}}">
								{{ __('messages.view_all')}}
							</a>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-green text-xs-center">
							<div class="card-block">
								<h4 class="card-title">{{ App\User::where('parent_id', '=', $user->id)->get()->count()}}</h4>
								<p class="card-text">{{ __('messages.children')}}</p>
							</div>
							<a class="card-footer text-muted" href="{{URL_PARENT_CHILDREN}}">
								{{ __('messages.view_all')}}
							</a>
						</div>
					</div>

<<<<<<< HEAD
				 
=======

>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
				</div>
				<div class="row">
					<div class="col-md-6">
					     <div class="panel panel-primary">
					      <div class="panel-heading">{{__('messages.latest_quizzes')}}</div>
					      @if(!count($latest_quizzes))
					      <br>
					 		 <p> &nbsp;&nbsp;&nbsp;{{__('messages.no_quizzes_available')}}</p>
					 		 <p> &nbsp;&nbsp;&nbsp; <a href="{{URL_USERS_SETTINGS.Auth::user()->slug}}">{{__('messages.click_here')}}</a> {{__('messages.to_change_your_settings')}}</p>
					 	 @else

<<<<<<< HEAD
					    	<table class="table">	
=======
					    	<table class="table">
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
					    	<thead>
					    		<tr>
					    			<th>{{__('messages.title')}}</th>
					    			<th>{{__('messages.type')}}</th>
					    			<th>{{__('messages.Action')}}</th>
					    		</tr>
					    	</thead>
					    	<tbody>
					    	@foreach($latest_quizzes as $quiz)
					 			<tr>
					 				<td>{{$quiz->title}}</td>
					 				<td>
					 				@if($quiz->is_paid)
					 					<span class="label label-danger">{{__('messages.paid')}}
					 					</span>
				 					@else
				 					<span class="label label-success">{{__('messages.free')}}
					 					</span>
				 					@endif
					 				</td>
					 				<td>
					 				@if($quiz->is_paid)
<<<<<<< HEAD
					 					<a href="{{URL_PAYMENTS_CHECKOUT.'exam/'.$quiz->slug}}">{{__('messages.buy_now')}}</a> 
=======
					 					<a href="{{URL_PAYMENTS_CHECKOUT.'exam/'.$quiz->slug}}">{{__('messages.buy_now')}}</a>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
				 					@else
				 					-
				 					@endif
					 				</td>
					 			</tr>
					 		@endforeach

					    	</tbody>
<<<<<<< HEAD
					    	</table>  
					    @endif
					     
					    </div>
					 
					 	
					 
=======
					    	</table>
					    @endif

					    </div>



>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
					</div>

						<div class="col-md-6">
					     <div class="panel panel-primary">
					      <div class="panel-heading">{{__('messages.latest')}} LMS {{__('messages.series')}}</div>
					      @if(!count($latest_series))
					      <br>
					 		 <p> &nbsp;&nbsp;&nbsp;{{__('messages.no_series_available')}}</p>
					 		 <p> &nbsp;&nbsp;&nbsp; <a href="{{URL_USERS_SETTINGS.Auth::user()->slug}}">{{__('messages.click_here')}}</a> {{__('messages.to_change_your_settings')}}</p>
					 	 @else

<<<<<<< HEAD
					    	<table class="table">	
=======
					    	<table class="table">
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
					    	<thead>
					    		<tr>
					    			<th>{{__('messages.title')}}</th>
					    			<th>{{__('messages.type')}}</th>
					    			<th>{{__('messages.Action')}}</th>
					    		</tr>
					    	</thead>
					    	<tbody>
					    	@foreach($latest_series as $series)
					 			<tr>
					 				<td>{{$series->title}}</td>
					 				<td>
					 				@if($series->is_paid)
					 					<span class="label label-danger">{{__('messages.paid')}}
					 					</span>
				 					@else
				 					<span class="label label-success">{{__('messages.free')}}
					 					</span>
				 					@endif
					 				</td>
					 				<td>
					 				@if($series->is_paid)
<<<<<<< HEAD
					 					<a href="{{URL_PAYMENTS_CHECKOUT.'lms/'.$series->slug}}">{{__('messages.buy_now')}}</a> 
=======
					 					<a href="{{URL_PAYMENTS_CHECKOUT.'lms/'.$series->slug}}">{{__('messages.buy_now')}}</a>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
				 					@else
				 					-
				 					@endif
					 				</td>
					 			</tr>
					 		@endforeach

					    	</tbody>
<<<<<<< HEAD
					    	</table>  
					    @endif
					     
					    </div>
					 
					 	
					 
					</div>

					 

				 
				</div>
				 
			 
=======
					    	</table>
					    @endif

					    </div>



					</div>




				</div>


>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
			</div>
			<!-- /.container-fluid -->
</div>
		<!-- /#page-wrapper -->

@stop

@section('footer_scripts')
<<<<<<< HEAD
  
=======

>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
@stop