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

							<li><a href="{{URL_USERS}}">{{__('messages.users')}}</a> </li>

							<li><a href="{{URL_USERS_IMPORT}}">{{__('messages.import_users')}}</a> </li>

							

							<li>{{ $title }}</li>

						</ol>

					</div>

				</div>

								

				<!-- /.row -->

				<div class="panel panel-custom">

					<div class="panel-heading">

						

						<div class="pull-right messages-buttons">

							 

							<a href="{{URL_USERS_IMPORT}}" class="btn  btn-primary button" >{{ __('messages.import_excel')}}</a>

							<a href="{{URL_USERS_ADD}}" class="btn  btn-primary button" >{{ __('messages.add_user')}}</a>

							<a href="{{URL_USERS}}" class="btn  btn-primary button" >{{ __('messages.list')}}</a>

							 

						</div>

						<h1>{{ $title }}</h1>

					</div>

					<div class="panel-body packages">











<ul class="nav nav-tabs add-studentlist-tabs">

  <li class="active"><a data-toggle="tab" href="#home">{{__('messages.success')}} <span class="badge badge-success">{{count($success_list)}}</span></a>

  </li>

  <li><a data-toggle="tab" href="#menu1">{{__('messages.failed')}}<span class="badge badge-error">{{count($failed_list)}}</span></a></li>

</ul>



<div class="tab-content">

  <div id="home" class="tab-pane fade in active">

     <h3>{{__('messages.success')}} </h3>

    

    <div class="table-responsive"> 

						<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">

							<thead>

								<tr>

								 	<th>{{ __('messages.name')}}</th>

									<th>{{ __('messages.email')}}</th>

									<th>{{ __('messages.phone')}}</th>

									<th>{{ __('messages.address')}}</th>

									<th>{{ __('messages.status')}}</th>

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

    <h3>{{__('messages.failed')}}</h3>

    

    <div class="table-responsive"> 

						<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">

							<thead>

								<tr>

								 	<th>{{ __('messages.name')}}</th>

									<th>{{ __('messages.email')}}</th>

									<th>{{ __('messages.phone')}}</th>

									<th>{{ __('messages.address')}}</th>

									<th>{{ __('messages.status')}}</th>

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

