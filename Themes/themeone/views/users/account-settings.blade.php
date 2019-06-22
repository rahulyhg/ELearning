 
@extends($layout)
 
@section('content')
<div id="page-wrapper">
			<div class="container-fluid">
<<<<<<< HEAD
=======
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{URL::asset('')}}language/vi">Tiếng Việt</a></li>
					<li><a href="{{URL::asset('')}}language/en">Tiếng Anh</a></li>
					<li><a href="{{URL::asset('')}}language/ja">Tiếng Nhật</a></li>
				</ul>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<li><a href="{{PREFIX}}"><i class="mdi mdi-home"></i></a> </li>
							@if(checkRole(getUserGrade(2)))
<<<<<<< HEAD
							<li><a href="{{URL_USERS}}">{{ __('messages.users')}}</a> </li>
=======
							<li><a href="{{URL_USERS}}">{{ getPhrase('users')}}</a> </li>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
							<li class="active">{{isset($title) ? $title : ''}}</li>
							@else
							<li class="active">{{$title}}</li>
							@endif
						</ol>
					</div>
				</div>
					@include('errors.errors')
				<!-- /.row -->

				<?php 
				$user_options = null;
				if($record->settings)
					$user_options = json_decode($record->settings)->user_preferences;
				?>
	<div class="panel panel-custom col-lg-12" >
					<div class="panel-heading">
					@if(checkRole(getUserGrade(2))) 
						<div class="pull-right messages-buttons">
							 
<<<<<<< HEAD
							<a href="{{URL_USERS}}" class="btn  btn-primary button" >{{ __('messages.list')}}</a>
=======
							<a href="{{URL_USERS}}" class="btn  btn-primary button" >{{ getPhrase('list')}}</a>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
							 
						</div>
						@endif
					<h1>{{ $title }}  </h1>
					</div>


					<div class="panel-body">
					 
<<<<<<< HEAD
					 <?php $button_name = __('messages.update'); ?>
=======
					 <?php $button_name = getPhrase('update'); ?>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						{{ Form::model($record, 
						array('url' => URL_USERS_SETTINGS.$record->slug, 
						'method'=>'patch','novalidate'=>'','name'=>'formUsers ', 'files'=>'true' )) }}
					
<<<<<<< HEAD
					<h1>{{__('messages.quiz_and_exam_series')}}</h1>
=======
{{--					<h1>{{getPhrase('quiz_and_exam_series')}}</h1>--}}
						 <h1>{{ trans('home.Quiz And Exam Series') }}</h1>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

					<div class="row">
					@foreach($quiz_categories as $category)
 				<?php 

	 					$checked = '';
	 					if($user_options) {
	 						if(count($user_options->quiz_categories))
	 						{
	 							if(in_array($category->id,$user_options->quiz_categories))
	 								$checked='checked';
	 						}
	 					}
 					?>
					<div class="col-md-3">
						<label class="checkbox-inline" >
<<<<<<< HEAD
							<input type="checkbox" data-toggle="toggle" name="quiz_categories[{{$category->id}}]" data-onstyle="success" data-offstyle="default" {{$checked}}> {{$category->category}}
=======
{{--							<input type="checkbox" data-toggle="toggle" name="quiz_categories[{{$category->id}}]" data-onstyle="success" data-offstyle="default" {{$checked}}> {{$category->category}}--}}
							<input type="checkbox" data-toggle="toggle" name="quiz_categories[{{$category->id}}]" data-onstyle="success" data-offstyle="default" {{$checked}}> {{ trans("home.$category->category") }}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						</label>
					</div>
					@endforeach
				 
				 </div>

<<<<<<< HEAD
				 	<h1>LMS {{__('messages.categories')}}</h1>
=======
				 	<h1>LMS {{getPhrase('categories')}}</h1>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

					<div class="row">
					@foreach($lms_category as $category)
 					<?php 

	 					$checked = '';
	 					if($user_options) {
	 						if(count($user_options->lms_categories))
	 						{
	 							if(in_array($category->id,$user_options->lms_categories))
	 								$checked='checked';
	 						}
	 					}
 					?>
					<div class="col-md-3">
						<label class="checkbox-inline">
							<input 	type="checkbox" 
									data-toggle="toggle" 
									data-onstyle="success" 
									data-offstyle="default"
									name="lms_categories[{{$category->id}}]" 
									{{$checked}}
									> {{$category->category}}
						</label>
					</div>
					@endforeach
				 
				 </div>

				 <div class="buttons text-center">
							<button class="btn btn-lg btn-success button"
<<<<<<< HEAD
							>{{ __('messages.update') }}</button>
=======
							>{{ getPhrase('update') }}</button>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						</div>
				 
					{!! Form::close() !!}
					</div>
				</div>
			</div>
			<!-- /.container-fluid -->
		</div>
		<!-- /#page-wrapper -->
@endsection

@section('footer_scripts')
 @include('common.validations');
 <script src="{{JS}}bootstrap-toggle.min.js"></script>
@stop