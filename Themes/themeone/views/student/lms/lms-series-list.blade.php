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
							<li class="active"> {{ $title }} </li>

=======
{{--							<li class="active"> {{ $title }} </li>--}}
							<li class="active"> {{ trans('home.LMS Series') }} </li>
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
						<h1>{{ trans('home.LMS Series') }}</h1>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

					</div>

					<div class="panel-body packages">

<<<<<<< HEAD
						 
=======

>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

						<div class="row library-items">

					<?php $settings = getSettings('lms'); ?>

					@if(count($series))

					<?php $entry_count = 0;?>

						@foreach($series as $c)

						

						@if($c->total_items)

							

							<div class="col-md-3">

								<div class="library-item mouseover-box-shadow">

								<div class="">

									<div class="item-image">

									@if($c->is_paid)

									<div class="label-primary label-band">{{getPhrase('premium')}}</div>

									@else

									<div class="label-danger  label-band">{{getPhrase('free')}}</div>

									@endif	



									<?php $image = $settings->defaultCategoryImage;

									if(isset($c->image) && $c->image!='')

										$image = $c->image;

									?>

										<img src="{{ IMAGE_PATH_UPLOAD_LMS_SERIES.$image}}" alt="{{$c->title}}">

										

										<div class="hover-content"> 

										<div class="buttons">

											<a href="{{URL_STUDENT_LMS_SERIES_VIEW.$c->slug}}" class="btn btn-primary">{{getPhrase('view_more')}}</a> 

										 

											</div>

										</div>

										

									</div>

									<div class="item-details">

										<h3>{{ $c->title }}</h3>
<<<<<<< HEAD
=======
{{--										<h3>{{ trans("home.$c->title") }}</h3>--}}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

										<div class="quiz-short-discription">

										{!!$c->short_description!!}

										</div>

										<ul>

											<li><i class="icon-bookmark"></i> {{ $c->total_items.' '.getPhrase('items')}}</li>

										</ul>

									

									</div>

								</div>

								</div>

							</div>

							 

							 

							

							@endif



							 @endforeach

							@else 

							Ooops...! {{getPhrase('No_series_available')}}



						<a href="{{URL_USERS_SETTINGS.$user->slug}}" >{{getPhrase('click_here_to_change_your_preferences')}}</a>

							@endif



						</div>

						@if(count($series))

						{!! $series->links() !!}

						@endif

					</div>

				</div>

			</div>

			

</div>

		<!-- /#page-wrapper -->



@stop