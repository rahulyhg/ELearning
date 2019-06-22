@extends($layout)

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

<<<<<<< HEAD
								
=======

>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

				<!-- /.row -->

				<div class="panel panel-custom">

					<div class="panel-heading">

<<<<<<< HEAD
						

						 
=======



>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

						<h1>{{ $title }}</h1>

					</div>

					<div class="panel-body packages">

<<<<<<< HEAD
						<div class="table-responsive"> 
=======
						<div class="table-responsive">
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

						<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">

							<thead>

								<tr>
								@if($is_parent)
								 <th>{{ getPhrase('image')}}</th>
                                    <th>{{ getPhrase('user_name')}}</th>
                                @endif

									<th>{{ getPhrase('name')}}</th>

									<th>{{ getPhrase('plan_type')}}</th>

									<th>{{ getPhrase('start_date')}}</th>

									<th>{{ getPhrase('end_date')}}</th>

									<th>{{ getPhrase('paid_from')}}</th>

									<th>{{ getPhrase('datetime')}}</th>

									<th>{{ getPhrase('status')}}</th>

									{{-- <th>{{ getPhrase('action')}}</th> --}}

<<<<<<< HEAD
								  
=======

>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

								</tr>

							</thead>

<<<<<<< HEAD
							 
=======

>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

						</table>

						</div>



					</div>

				</div>

			</div>

			<!-- /.container-fluid -->

		</div>

@endsection

<<<<<<< HEAD
 
=======

>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db



@section('footer_scripts')

<<<<<<< HEAD
  
=======

>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

 @include('common.datatables', array('route'=>URL_PAYPAL_PAYMENTS_AJAXLIST.$user->slug, 'route_as_url' => TRUE))

 @include('common.deletescript', array('route'=>'/exams/quiz/delete/'))



@stop

