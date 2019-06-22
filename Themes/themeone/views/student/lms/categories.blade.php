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
<<<<<<< HEAD
							<li class="active"> {{$title}} </li>
=======
{{--							<li class="active"> {{$title}} </li>--}}
							<li class="active"> {{ trans('home.LMS Categories') }} </li>

>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						</ol>
					</div>
				</div>
				<!-- /.row -->
				<div class="panel panel-custom">
					<div class="panel-heading">
<<<<<<< HEAD
						<h1>{{$title}}</h1>
=======
{{--						<h1>{{$title}}</h1>--}}
						<h1>{{ trans('home.LMS Categories') }}</h1>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
					</div>
					<div class="panel-body packages">
						 
						<div class="row library-items">
					<?php $settings = getSettings('lms'); ?>
					@if(count($categories))
						@foreach($categories as $c)
							<div class="col-md-3">
							 <a href="{{URL_STUDENT_LMS_CATEGORIES_VIEW.$c->slug}}" class="library-item">
							 <?php 
							 $image = IMAGE_PATH_UPLOAD_LMS_DEFAULT;
							 if($c->image)
							 $image = IMAGE_PATH_UPLOAD_LMS_CATEGORIES.$c->image;?>
                                    <div class="item-image"> <img src="{{ $image}}" alt=""> </div>
                                    <div class="item-details">
<<<<<<< HEAD
                                        <h3>{{$c->category}}</h3> </div>
=======
{{--                                        <h3>{{$c->category}}</h3>--}}
										<h3>{{ trans("home.$c->category") }}</h3>
									</div>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
                               </a>

							</div>
							 @endforeach
						@else
						Ooops...! {{getPhrase('No_Categories_available')}}

						<a href="{{URL_USERS_SETTINGS.$user->slug}}" >{{getPhrase('click_here_to_change_your_preferences')}}</a>
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