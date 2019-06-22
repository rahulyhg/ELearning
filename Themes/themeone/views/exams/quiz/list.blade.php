@extends('layouts.admin.adminlayout')

@section('header_scripts')

<link href="{{CSS}}ajax-datatables.css" rel="stylesheet">

@stop

@section('content')





<div id="page-wrapper">

			<div class="container-fluid">

				<!-- Page Heading -->

				<div class="row">

					<div class="col-lg-12">

						<ol class="breadcrumb">

							<li><a href="{{PREFIX}}"><i class="mdi mdi-home"></i></a> </li>

							<li>{{ $title }}</li>

						</ol>

					</div>

				</div>

								

				<!-- /.row -->

				<div class="panel panel-custom">

					<div class="panel-heading">

						

						<div class="pull-right messages-buttons">

<<<<<<< HEAD
							<a href="{{URL_QUIZ_ADD}}" class="btn  btn-primary button" >{{ __('messages.create')}}</a>
=======
							<a href="{{URL_QUIZ_ADD}}" class="btn  btn-primary button" >{{ getPhrase('create')}}</a>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

						</div>

						<div class="pull-right messages-buttons">

<<<<<<< HEAD
							<a href="{{URL_EXAM_SERIES}}" class="btn  btn-primary button" >{{ __('messages.create_series')}}</a>
=======
							<a href="{{URL_EXAM_SERIES}}" class="btn  btn-primary button" >{{ getPhrase('create_series')}}</a>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

						</div>

						<h1>{{ $title }}</h1>

					</div>

					<div class="panel-body packages">

						<div> 

						<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">

							<thead>

								<tr>

<<<<<<< HEAD
									<th>{{ __('messages.title')}}</th>

									<th>{{ __('messages.duration')}}</th>

									<th>{{ __('messages.category')}}</th>

									<th>{{ __('messages.is_paid')}}</th>

									<th>{{ __('messages.total_marks')}}</th>

									<th>{{ __('messages.exam_types')}}</th>

									<th>{{ __('messages.action')}}</th>
=======
									<th>{{ getPhrase('title')}}</th>

									<th>{{ getPhrase('duration')}}</th>

									<th>{{ getPhrase('category')}}</th>

									<th>{{ getPhrase('is_paid')}}</th>

									<th>{{ getPhrase('total_marks')}}</th>

									<th>{{ getPhrase('exam_type')}}</th>

									<th>{{ getPhrase('action')}}</th>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

								  

								</tr>

							</thead>

							 

						</table>

						</div>



					</div>

				</div>

			</div>

			<!-- /.container-fluid -->

		</div>

@endsection

 



@section('footer_scripts')

  

 @include('common.datatables', array('route'=>URL_QUIZ_GETLIST, 'route_as_url' => TRUE))

 @include('common.deletescript', array('route'=>URL_QUIZ_DELETE))



@stop

