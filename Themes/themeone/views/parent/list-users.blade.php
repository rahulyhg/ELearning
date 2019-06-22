@extends($layout)
@section('header_scripts')
<link href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css" rel="stylesheet">
@stop
@section('content')

<div id="page-wrapper">
			<div class="container-fluid">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{URL::asset('')}}language/vi">Tiếng Việt</a></li>
					<li><a href="{{URL::asset('')}}language/en">Tiếng Anh</a></li>
					<li><a href="{{URL::asset('')}}language/ja">Tiếng Nhật</a></li>
				</ul>

				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<li><a href="{{url('/')}}"><i class="mdi mdi-home"></i></a> </li>
{{--							<li>{{ $title }}</li>--}}
							<li>{{ trans('home.Children') }}</li>
						</ol>
					</div>
				</div>

				<!-- /.row -->
				<div class="panel panel-custom">
					<div class="panel-heading">

						<div class="pull-right messages-buttons">

							<a href="{{URL_USERS_ADD}}" class="btn  btn-primary button" >{{ trans('home.Add User') }}</a>
						</div>
{{--						<h1>{{ $title }}</h1>--}}
                        <h1>{{ trans('home.Children') }}</h1>
					</div>
					<div class="panel-body packages">
						<div >
						<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
							<thead>
								<tr>
{{--								 	<th>{{ getPhrase('name')}}</th>--}}
{{--									<th>{{ getPhrase('email')}}</th>--}}
{{--									<th>{{ getPhrase('image')}}</th>--}}

{{--									<th>{{ getPhrase('action')}}</th>--}}

                                    <th>{{ trans('home.Name') }}</th>
                                    <th>{{ trans('home.Email') }}</th>
                                    <th>{{ trans('home.Image') }}</th>
                                    <th>{{ trans('home.Action')}}</th>

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

 <?php $url = URL_PARENT_CHILDREN_GETLIST.$user->slug;

  ?>
@section('footer_scripts')
  @include('common.datatables', array('route'=>$url, 'route_as_url' => TRUE))

@stop
