@extends($layout)

@section('header_scripts')

 

@stop

@section('content')

 

<div id="page-wrapper">

			<div class="container-fluid">

				<!-- Page Heading -->

				<div class="row">

					<div class="col-lg-12">

						<ol class="breadcrumb">

							<li><a href="{{PREFIX}}"><i class="mdi mdi-home"></i></a> </li>

<<<<<<< HEAD
							<li><a href="{{URL_USERS}}">{{__('messages.users')}}</a> </li>

							<li><a href="{{URL_USERS_IMPORT}}">{{__('messages.import_users')}}</a> </li>
=======
							<li><a href="{{URL_USERS}}">{{getPhrase('users')}}</a> </li>

							<li><a href="{{URL_USERS_IMPORT}}">{{getPhrase('import_users')}}</a> </li>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

							

							<li>{{ $title }}</li>

						</ol>

					</div>

				</div>

								

				<!-- /.row -->

				<div class="panel panel-custom">

					<div class="panel-heading">

						

						<div class="pull-right messages-buttons">

							 

<<<<<<< HEAD
							<a href="{{URL_USERS_IMPORT}}" class="btn  btn-primary button" >{{ __('messages.import_excel')}}</a>

							<a href="{{URL_USERS_ADD}}" class="btn  btn-primary button" >{{ __('messages.add_user')}}</a>

							<a href="{{URL_USERS}}" class="btn  btn-primary button" >{{ __('messages.list')}}</a>
=======
							<a href="{{URL_USERS_IMPORT}}" class="btn  btn-primary button" >{{ getPhrase('import_excel')}}</a>

							<a href="{{URL_USERS_ADD}}" class="btn  btn-primary button" >{{ getPhrase('add_user')}}</a>

							<a href="{{URL_USERS}}" class="btn  btn-primary button" >{{ getPhrase('list')}}</a>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

							 

						</div>

						<h1>{{ $title }}</h1>

					</div>

					<div class="panel-body packages">











<ul class="nav nav-tabs add-studentlist-tabs">

<<<<<<< HEAD
  <li class="active"><a data-toggle="tab" href="#home">{{__('messages.success')}} <span class="badge badge-success">{{count($success_list)}}</span></a>

  </li>

  <li><a data-toggle="tab" href="#menu1">{{__('messages.failed')}}<span class="badge badge-error">{{count($failed_list)}}</span></a></li>
=======
  <li class="active"><a data-toggle="tab" href="#home">{{getPhrase('success')}} <span class="badge badge-success">{{count($success_list)}}</span></a>

  </li>

  <li><a data-toggle="tab" href="#menu1">{{getPhrase('failed')}}<span class="badge badge-error">{{count($failed_list)}}</span></a></li>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

</ul>



<div class="tab-content">

  <div id="home" class="tab-pane fade in active">

<<<<<<< HEAD
     <h3>{{__('messages.success')}} </h3>
=======
     <h3>Success</h3>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

    

    <div class="table-responsive"> 

						<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">

							<thead>

								<tr>

<<<<<<< HEAD
								 	<th>{{ __('messages.name')}}</th>

									<th>{{ __('messages.email')}}</th>

									<th>{{ __('messages.phone')}}</th>

									<th>{{ __('messages.address')}}</th>

									<th>{{ __('messages.status')}}</th>
=======
								 	<th>{{ getPhrase('name')}}</th>

									<th>{{ getPhrase('email')}}</th>

									<th>{{ getPhrase('phone')}}</th>

									<th>{{ getPhrase('address')}}</th>

									<th>{{ getPhrase('status')}}</th>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

								</tr>

							</thead>

							 <tbody>

							<?php foreach($success_list as $list) {

								$list = (object) $list;

								?>

							 	<tr>

							 		<td>{{$list->name}}</td>

							 		<td>{{$list->email}}</td>

							 		<td>{{$list->phone}}</td>

							 		<td>{{$list->address}}</td>

							 		<td class="text-success">Success</td>

							 	</tr>

							<?php } ?>

							  

							 </tbody>

						</table>

						</div>

  </div>

  <div id="menu1" class="tab-pane fade">

<<<<<<< HEAD
    <h3>{{__('messages.failed')}}</h3>
=======
    <h3>Failed</h3>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

    

    <div class="table-responsive"> 

						<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">

							<thead>

								<tr>

<<<<<<< HEAD
								 	<th>{{ __('messages.name')}}</th>

									<th>{{ __('messages.email')}}</th>

									<th>{{ __('messages.phone')}}</th>

									<th>{{ __('messages.address')}}</th>

									<th>{{ __('messages.status')}}</th>
=======
								 	<th>{{ getPhrase('name')}}</th>

									<th>{{ getPhrase('email')}}</th>

									<th>{{ getPhrase('phone')}}</th>

									<th>{{ getPhrase('address')}}</th>

									<th>{{ getPhrase('status')}}</th>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

								</tr>

							</thead>

							 <tbody>

							<?php foreach($failed_list as $list) {

								$list = (object) $list;

								?>

							 	<tr>

							 		<td>{{$list->record->name}}</td>

							 		<td>{{$list->record->email}}</td>

							 		<td>{{$list->record->phone}}</td>

							 		<td>{{$list->record->address}}</td>

							 		<td class="text-danger">{{$list->type}}</td>

							 	</tr>

							<?php } ?>

							  

							 </tbody>

						</table>

						</div>

  </div>

  </div>

  

</div>

						<div class="table-responsive"> 

						 

						</div>

						 



					</div>



				</div>

			</div>

			<!-- /.container-fluid -->

		</div>
		

@endsection

 

@section('footer_scripts')

 

@stop

