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
							<li class="active"> {{ $title }} </li>
						</ol>
					</div>
				</div>
				<!-- /.row -->
				<div class="panel panel-custom">
					<div class="panel-heading">
						<h1>{{$title}}</h1>
					</div>
					<div class="panel-body packages">
						 
						<div class="row library-items">
					<?php $settings = getExamSettings(); ?>
					@if(count($categories))
						@foreach($categories as $c)
							<div class="col-md-3">
								<div class="library-item mouseover-box-shadow">
								<a href="{{URL_STUDENT_EXAMS.$c->slug}}">
									<div class="item-image">
									<?php $image = $settings->defaultCategoryImage;
									if(isset($c->image) && $c->image!='')
										$image = $c->image;
									?>
										<img src="{{ PREFIX.$settings->categoryImagepath.$image}}" alt="">
									</div>
									<div class="item-details">
<<<<<<< HEAD
										<h3>{{ $c->category }}</h3>
										<ul>
											<li><i class="icon-bookmark"></i> {{ count($c->quizzes()).' '.getPhrase('quizzes')}}</li>
											<li><i class="icon-eye"></i> {{getPhrase('view')}}</li>
=======
{{--										<h3>{{ $c->category }}</h3>--}}
										<h3>{{ trans("home.$c->category") }}</h3>
										<ul>
{{--											<li><i class="icon-bookmark"></i> {{ count($c->quizzes()).' '.getPhrase('quizzes')}}</li>--}}
											<li><i class="icon-bookmark"></i> {{ count($c->quizzes()).' '.trans('home.Quizzes') }}</li>
{{--											<li><i class="icon-eye"></i> {{getPhrase('view')}}</li>--}}
											<li><i class="icon-eye"></i> {{ trans('home.View') }}</li>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
										</ul>
									
									</div>
								</a>
								</div>
							</div>
							 @endforeach
							@else
						Ooops...! {{getPhrase('No_Categories_available')}}
						
						<a href="{{URL_USERS_SETTINGS.Auth::user()->slug}}" >{{getPhrase('click_here_to_change_your_preferences')}}</a>
						@endif 
						</div>
						@if(count($categories))
						{!! $categories->links() !!}
						@endif
					</div>
				</div>
			</div>
			
</div>
		<!-- /#page-wrapper -->

@stop