<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đa ngôn ngữ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>

    ////////////////////////////////

    <h1 style="background-color: red">aaaaaaaaaaaaaaaa</h1>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">{{ trans('home.home') }}</a></li>
            <li><a href="#">{{ trans('home.about') }}</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{URL::asset('')}}language/vi">Tiếng Việt</a></li>
            <li><a href="{{URL::asset('')}}language/en">Tiếng Anh</a></li>
            <li><a href="{{URL::asset('')}}language/ja">Tiếng Nhật</a></li>
        </ul>
    </div><!-- /.navbar-collapse -->

    <a href="{!! route('user.change-language', ['en']) !!}">English</a>
    <a href="{!! route('user.change-language', ['vi']) !!}">Vietnam</a>
    ////////////////////////////////
    {{ trans('messages.welcome') }}//////
    ///
    {{ __('messages.welcome') }}////
    {{ __('messages.welcome') }}

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li><a href="{{PREFIX}}"><i class="mdi mdi-home"></i></a> </li>
                        @if(checkRole(getUserGrade(2)))
                            <li><a href="{{URL_USERS}}">{{ getPhrase('users')}}</a> </li>
                            <li class="active">{{isset($data['title']) ? $data['title'] : ''}}</li>
                        @else
                            <li class="active">{{$data['title']}}</li>

                        @endif
                    </ol>
                </div>
            </div>
        @include('errors.errors')
        <!-- /.row -->

            <?php
            $user_options = null;
            if($data['record']->settings)
                $user_options = json_decode($data['record']->settings)->user_preferences;
            ?>
            <div class="panel panel-custom col-lg-12" >
                <div class="panel-heading">
                    @if(checkRole(getUserGrade(2)))
                        <div class="pull-right messages-buttons">

                            <a href="{{URL_USERS}}" class="btn  btn-primary button" >{{ getPhrase('list')}}</a>

                        </div>
                    @endif
                    <h1>{{ $data['title'] }}  </h1>
                        <li>{{ trans('home.physics') }}</li>
                </div>


                <div class="panel-body">

                    <?php $button_name = getPhrase('update'); ?>
                    {{ Form::model($data['record'],
                    array('url' => URL_USERS_SETTINGS.$data['record']->slug,
                    'method'=>'patch','novalidate'=>'','name'=>'formUsers ', 'files'=>'true' )) }}

{{--                    <h1>{{getPhrase('quiz_and_exam_series')}}</h1>--}}
                        <h1>{{ trans('home.Quiz And Exam Series') }}</h1>

                    <div class="row">
                        @foreach($data['quiz_categories'] as $category)
                            <?php

                            $checked = '';
                            if($user_options) {
                                if(count($user_options->quiz_categories))
                                {
                                    if(in_array($category->id,$user_options->quiz_categories))
                                        $checked='checked';
                                }
                            }
                            ?>
                            <div class="col-md-3">
                                <label class="checkbox-inline" >
{{--                                    <input type="checkbox" data-toggle="toggle" name="quiz_categories[{{$category->id}}]" data-onstyle="success" data-offstyle="default" {{$checked}}> {{$category->category}}--}}
                                    <input type="checkbox" data-toggle="toggle" name="quiz_categories[{{$category->id}}]" data-onstyle="success" data-offstyle="default" {{$checked}}> {{ trans("home.$category->category") }}
                                </label>
                            </div>
                        @endforeach

                    </div>

                    <h1>LMS {{getPhrase('categories')}}</h1>

                    <div class="row">
                        @foreach($data['lms_category'] as $category)
                            <?php

                            $checked = '';
                            if($user_options) {
                                if(count($user_options->lms_categories))
                                {
                                    if(in_array($category->id,$user_options->lms_categories))
                                        $checked='checked';
                                }
                            }
                            ?>
                            <div class="col-md-3">
                                <label class="checkbox-inline">
                                    <input 	type="checkbox"
                                              data-toggle="toggle"
                                              data-onstyle="success"
                                              data-offstyle="default"
                                              name="lms_categories[{{$category->id}}]"
                                            {{$checked}}
                                    > {{$category->category}}
                                </label>
                            </div>
                        @endforeach

                    </div>

                    <div class="buttons text-center">
                        <button class="btn btn-lg btn-success button"
                        >{{ getPhrase('update') }}</button>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

    @section('footer_scripts')
        @include('common.validations');
        <script src="{{JS}}bootstrap-toggle.min.js"></script>
    @stop
</body>
</html>


{{--@extends($data['layout'])--}}

{{--@section('content')--}}

{{--@endsection--}}

{{--@section('footer_scripts')--}}
{{--    @include('common.validations');--}}
{{--    <script src="{{JS}}bootstrap-toggle.min.js"></script>--}}
{{--@stop--}}

