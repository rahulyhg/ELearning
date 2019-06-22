@extends($layout)

@section('header_scripts')

<link href="{{CSS}}ajax-datatables.css" rel="stylesheet">

@stop

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

							 

							<li>{{ $title}}</li>

						</ol>

					</div>

				</div>

								

				<!-- /.row -->

				<div class="panel panel-custom">

					<div class="panel-heading">

<<<<<<< HEAD
						 

						<h1>{{ $title.' '.getPhrase('of').' '.$user->name }}</h1>
=======


						<h1>{{ trans('home.Quiz Attempts').' '.trans('home.Of').' '.$user->name }}</h1>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

					</div>

					<div class="panel-body packages">

						<div class="table-responsive"> 

						<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">

							<thead>

								<tr>

								 

<<<<<<< HEAD
									<th>{{ getPhrase('title')}}</th>

									<th>{{ getPhrase('type')}}</th>

								 

									<th>{{ getPhrase('marks')}}</th>

								 	 

									<th>{{ getPhrase('result')}}</th>

									 

									<th>{{ getPhrase('action')}}</th>
=======
{{--									<th>{{ getPhrase('title')}}</th>--}}

{{--									<th>{{ getPhrase('type')}}</th>--}}

{{--								 --}}

{{--									<th>{{ getPhrase('marks')}}</th>--}}

{{--								 	 --}}

{{--									<th>{{ getPhrase('result')}}</th>--}}

{{--									 --}}

{{--									<th>{{ getPhrase('action')}}</th>--}}

									<th>{{ trans('home.Title') }}</th>

									<th>{{ trans('home.Type') }}</th>

									<th>{{ trans('home.Marks') }}</th>

									<th>{{ trans('home.Result') }}</th>

									<th>{{ trans('home.Action') }}</th>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

								  

								</tr>

							</thead>

							 

						</table>

						</div>

						<div class="row">

							<div class="col-md-6 col-md-offset-3">

								<canvas id="myChart1" width="100" height="110"></canvas>

							</div>

						</div>

					</div>

				</div>

			</div>

			<!-- /.container-fluid -->

		</div>

@endsection

 



@section('footer_scripts')

 @if(!$exam_record)

 @include('common.datatables', array('route'=>URL_STUDENT_EXAM_GETATTEMPTS.$user->slug, 'route_as_url' => 'TRUE'))

 @else

 @include('common.datatables', array('route'=>URL_STUDENT_EXAM_GETATTEMPTS.$user->slug.'/'.$exam_record->slug, 'route_as_url' => 'TRUE'))

 @endif

 @include('common.chart', array($chart_data,'ids' => array('myChart1')));

@stop

