@extends($layout)
<link rel="stylesheet" type="text/css" href="{{CSS}}select2.css">
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
                            <li><a href="{{URL_MESSAGES}}">{{getPhrase('messages')}}</a> </li>

<<<<<<< HEAD
                            <li class="active"> {{ $title }} </li>
=======
{{--                            <li class="active"> {{ $title }} </li>--}}
                            <li class="active">{{ trans('home.Send Message') }}</li>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
                        </ol>
                    </div>
                </div>
<!-- <h1>Create a new message</h1> -->
<div class="panel panel-custom">
                    <div class="panel-heading">
                    <div class="pull-right messages-buttons">
<<<<<<< HEAD
                            <a class="btn btn-lg btn-info button" href="{{URL_MESSAGES}}"> {{getPhrase('inbox').'('.$count = Auth::user()->newThreadsCount().')'}} </a>
                            <a class="btn btn-lg btn-info button" href="{{URL_MESSAGES_CREATE}}"> 
                            {{getPhrase('compose')}}</a>

                 
                        </div>
                        <h1>{{$title}}</h1>
=======
                            <a class="btn btn-lg btn-info button" href="{{URL_MESSAGES}}"> {{trans('home.Inbox').'('.$count = Auth::user()->newThreadsCount().')'}} </a>
                            <a class="btn btn-lg btn-info button" href="{{URL_MESSAGES_CREATE}}">
                                {{trans('home.Compose')}}</a>

                 
                        </div>
{{--                        <h1>{{$title}}</h1>--}}
                        <h1>{{ trans('home.Send Message') }}</h1>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
                    </div>

                    <div class="panel-body packages">
                         
                        <div class="row library-items">

{!! Form::open(['route' => 'messages.store']) !!}
<div class="col-md-6 col-md-offset-3">
<?php $tosentUsers = array(); ?>
 @if($users->count() > 0)
    
        <?php foreach($users as $user) {
                $tosentUsers[$user->id] = $user->name; 
            }
        ?>
<<<<<<< HEAD
     {!! Form::label('Select User', 'Select User', ['class' => 'control-label']) !!}
=======
     {!! Form::label('Select User', trans('home.Select User'), ['class' => 'control-label']) !!}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
    {{Form::select('recipients[]', $tosentUsers, null, ['class'=>'form-control select2', 'name'=>'recipients[]', 'multiple'=>'true'])}}
    @endif
 
    
    <!-- Subject Form Input -->
    <div class="form-group">
<<<<<<< HEAD
        {!! Form::label('subject', 'Subject', ['class' => 'control-label']) !!}
=======
        {!! Form::label('subject', trans('home.Subject'), ['class' => 'control-label']) !!}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
        {!! Form::text('subject', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Message Form Input -->
    <div class="form-group">
<<<<<<< HEAD
        {!! Form::label('message', 'Message', ['class' => 'control-label']) !!}
=======
        {!! Form::label('message', trans('home.Message'), ['class' => 'control-label']) !!}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
        {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
    </div>

   
    
    <!-- Submit Form Input -->
    <div class="text-right">
<<<<<<< HEAD
        {!! Form::submit('Submit', ['class' => 'btn btn-primary btn-lg']) !!}
=======
        {!! Form::submit(trans('home.Submit'), ['class' => 'btn btn-primary btn-lg']) !!}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
    </div>
</div>
{!! Form::close() !!}
  </div>
                </div>
            </div>
            
</div>
</div>
@stop
 
@section('footer_scripts')
    
    <script src="{{JS}}select2.js"></script>
    
    <script>
      $('.select2').select2({
       placeholder: "Add User",
    });
    </script>
@stop