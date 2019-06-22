@extends($layout)
@section('content')<div id="page-wrapper">
<div class="container-fluid">
<!-- Page Heading -->
<div class="row">
<div class="col-lg-12">
<ol class="breadcrumb">
<li><a href="{{PREFIX}}"><i class="mdi mdi-home"></i></a> </li>
@if(checkRole(getUserGrade(2)))
<<<<<<< HEAD
<li><a href="{{URL_USERS}}">{{ __('messages.users')}}</a> </li>
=======
<li><a href="{{URL_USERS}}">{{ getPhrase('users')}}</a> </li>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
<li class="active">{{isset($title) ? $title : ''}}</li>
@else
<li class="active">{{$title}}</li>
@endif
</ol>
</div>
</div>
@include('errors.errors')
<!-- /.row -->

<div class="panel panel-custom col-lg-6  col-lg-offset-3">
<div class="panel-heading">
<<<<<<< HEAD
@if(checkRole(getUserGrade(2))) 
<div class="pull-right messages-buttons"><a href="{{URL_USERS}}" class="btn  btn-primary button" >{{ __('messages.list')}}</a></div>
=======
@if(checkRole(getUserGrade(2)))
<div class="pull-right messages-buttons"><a href="{{URL_USERS}}" class="btn  btn-primary button" >{{ getPhrase('list')}}</a></div>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
@endif
<h1>{{ $title }}  </h1>
</div>

<div class="panel-body form-auth-style">
<<<<<<< HEAD
<?php $button_name = __('messages.create'); ?>
@if ($record)
<?php $button_name = __('messages.update'); ?>
{{ Form::model($record, 
array('url' => URL_USERS_EDIT.$record->slug, 
=======
<?php $button_name = getPhrase('create'); ?>
@if ($record)
<?php $button_name = getPhrase('update'); ?>
{{ Form::model($record,
array('url' => URL_USERS_EDIT.$record->slug,
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
'method'=>'patch','novalidate'=>'','name'=>'formUsers ', 'files'=>'true' )) }}
@else
{!! Form::open(array('url' => URL_USERS_ADD, 'method' => 'POST', 'novalidate'=>'','name'=>'formUsers ', 'files'=>'true')) !!}
@endif

@include('users.form_elements', array('button_name'=> $button_name, 'record' => $record))

{!! Form::close() !!}
</div>
</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection

@section('footer_scripts')
@include('common.validations')
@include('common.alertify')
 <script>
 	var file = document.getElementById('image_input');

file.onchange = function(e){
    var ext = this.value.match(/\.([^\.]+)$/)[1];
    switch(ext)
    {
        case 'jpg':
        case 'jpeg':
        case 'png':

<<<<<<< HEAD
     
            break;
        default:
               alertify.error("{{__('messages.file_type_not_allowed')}}");
=======

            break;
        default:
               alertify.error("{{getPhrase('file_type_not_allowed')}}");
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
            this.value='';
    }
};
 </script>
@stop