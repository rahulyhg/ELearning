@extends($layout)

@section('header_scripts')

<link href="{{CSS}}ajax-datatables.css" rel="stylesheet">

@stop

@section('content')





<div id="page-wrapper">
			@extends('language')

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

						

						 

						<h1>{{ $title }}</h1>

					</div>

					<div class="panel-body packages">

						<div class="table-responsive"> 

						<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">

							<thead>

								<tr>
								@if($is_parent)
								 <th>{{ trans('home.image')}}</th>
                                    <th>{{ trans('home.user_name')}}</th>
                                @endif

									<th>{{ trans('home.name')}}</th>

									<th>{{ trans('home.plan_type')}}</th>

									<th>{{ trans('home.start_date')}}</th>

									<th>{{ trans('home.end_date')}}</th>

									<th>{{ trans('home.paid_from')}}</th>

									<th>{{ trans('home.datetime')}}</th>

									<th>{{ trans('home.status')}}</th>

									{{-- <th>{{ trans('home.action')}}</th> --}}

								  

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

  

 @include('common.datatables', array('route'=>URL_PAYPAL_PAYMENTS_AJAXLIST.$user->slug, 'route_as_url' => TRUE))

 @include('common.deletescript', array('route'=>'/exams/quiz/delete/'))



@stop

