<!DOCTYPE html>

<<<<<<< HEAD
<html lang="{{ app()->getLocale() }}n" dir="{{ (App\Language::isDefaultLanuageRtl()) ? 'rtl' : 'ltr' }}">
=======
<html lang="en" dir="{{ (App\Language::isDefaultLanuageRtl()) ? 'rtl' : 'ltr' }}">
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="{{getSetting('meta_description', 'seo_settings')}}">
	<meta name="keywords" content="{{getSetting('meta_keywords', 'seo_settings')}}">
	<meta name="csrf_token" content="{{ csrf_token() }}">
<<<<<<< HEAD
	 
=======

>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
	<link rel="icon" href="{{IMAGE_PATH_SETTINGS.getSetting('site_favicon', 'site_settings')}}" type="image/x-icon" />
	<title>@yield('title') {{ isset($title) ? $title : getSetting('site_title','site_settings') }}</title>
	<!-- Bootstrap Core CSS -->
	 @yield('header_scripts')

	   <link href="{{themes('css/bootstrap.min.css')}}" rel="stylesheet">
	   <link href="{{themes('css/sweetalert.css')}}" rel="stylesheet">
<<<<<<< HEAD
	  
=======

>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
	   <link href="{{themes('css/metisMenu.min.css')}}" rel="stylesheet">
	   <link href="{{themes('css/custom-fonts.css')}}" rel="stylesheet">
	   <link href="{{themes('css/materialdesignicons.css')}}" rel="stylesheet">
	   <link href="{{themes('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
<<<<<<< HEAD
	 
	   <link href="{{themes('css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
	
=======

	   <link href="{{themes('css/bootstrap-datepicker.min.css')}}" rel="stylesheet">

>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
	<!-- Morris Charts CSS -->
	{{-- <link href="{{CSS}}plugins/morris.css" rel="stylesheet"> --}}
	   <link href="{{themes('css/plugins/morris.css')}}" rel="stylesheet">
	 <link href="{{themes('css/sb-admin.css')}}" rel="stylesheet">
	 {{-- <link href="{{themes('css/themeone-blue.css')}}" rel="stylesheet"> --}}
<<<<<<< HEAD
     
=======

>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
    <?php
    $theme_color  = getThemeColor();
    // dd($theme_color);
    ?>
<<<<<<< HEAD
    @if($theme_color == 'blueheader')      
	 <link href="{{themes('css/theme-colors/header-blue.css')}}" rel="stylesheet">
    @elseif($theme_color == 'bluenavbar')	 
	 <link href="{{themes('css/theme-colors/blue-sidebar.css')}}" rel="stylesheet">
    @elseif($theme_color == 'darkheader')	 
	 <link href="{{themes('css/theme-colors/dark-header.css')}}" rel="stylesheet">
    @elseif($theme_color == 'darktheme')	 
	 <link href="{{themes('css/theme-colors/dark-theme.css')}}" rel="stylesheet">
    @elseif($theme_color == 'whitecolor')	 
	 <link href="{{themes('css/theme-colors/white-theme.css')}}" rel="stylesheet">
	@endif 
	
	
=======
    @if($theme_color == 'blueheader')
	 <link href="{{themes('css/theme-colors/header-blue.css')}}" rel="stylesheet">
    @elseif($theme_color == 'bluenavbar')
	 <link href="{{themes('css/theme-colors/blue-sidebar.css')}}" rel="stylesheet">
    @elseif($theme_color == 'darkheader')
	 <link href="{{themes('css/theme-colors/dark-header.css')}}" rel="stylesheet">
    @elseif($theme_color == 'darktheme')
	 <link href="{{themes('css/theme-colors/dark-theme.css')}}" rel="stylesheet">
    @elseif($theme_color == 'whitecolor')
	 <link href="{{themes('css/theme-colors/white-theme.css')}}" rel="stylesheet">]
	@endif


>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

</head>

<body ng-app="academia">
 @yield('custom_div')
<<<<<<< HEAD
 <?php 
=======
 <?php
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
 $class = '';
 if(!isset($right_bar))
 	$class = 'no-right-sidebar';

 ?>
	<div id="wrapper" class="{{$class}}">
<<<<<<< HEAD
=======
		<ul class="nav navbar-nav navbar-right">
			<li><a href="{{URL::asset('')}}language/vi">Tiếng Việt</a></li>
			<li><a href="{{URL::asset('')}}language/en">Tiếng Anh</a></li>
			<li><a href="{{URL::asset('')}}language/ja">Tiếng Nhật</a></li>
		</ul>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
		<!-- Navigation -->
		<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="{{ URL_HOME }}" target="_blank"><img src="{{IMAGE_PATH_SETTINGS.getSetting('site_logo', 'site_settings')}}" alt="{{getSetting('site_title','site_settings')}}"></a>
			</div>

			<!-- Top Menu Items -->
			<?php $newUsers = (new App\User())->getLatestUsers(); ?>
			<ul class="nav navbar-right top-nav">
				<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">
<<<<<<< HEAD
				<i class="icon-topbar-event"></i> {{ __('messages.latest_users') }}  </a>
=======
				<i class="icon-topbar-event"></i> {{ getPhrase('latest_users') }}  </a>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-notif" aria-labelledby="dd-notification">
					<div class="dropdown-menu-notif-list" id="latestUsers">
					@foreach($newUsers as $user)
							<div class="dropdown-menu-notif-item">
								<div class="photo">
									<img src="{{ getProfilePath($user->image)}}" alt="">
								</div>
<<<<<<< HEAD
								 <a href="{{URL_USER_DETAILS.$user->slug}}">{{ucfirst($user->name)}}</a>  {{ __('messages.was_joined_as').' '. getRoleData($user->role_id)}}
=======
								 <a href="{{URL_USER_DETAILS.$user->slug}}">{{ucfirst($user->name)}}</a>  {{ getPhrase('was_joined_as').' '. getRoleData($user->role_id)}}
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
								<div class="color-blue-grey-lighter">{{$user->updated_at->diffForHumans()}}</div>
							</div>
					@endforeach
						</div>

						<div class="dropdown-menu-notif-more">
<<<<<<< HEAD
							<a href="{{URL_USERS}}">{{ __('messages.see_more') }}</a>
						</div>
					</div>
				</li>
				
				 
=======
							<a href="{{URL_USERS}}">{{ getPhrase('see_more') }}</a>
						</div>
					</div>
				</li>


>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
				<li class="dropdown profile-menu">
					<div class="dropdown-toggle top-profile-menu" data-toggle="dropdown">
						@if(Auth::check())
						<div class="username">
							<h2>{{Auth::user()->name}}</h2>
<<<<<<< HEAD
							 
						</div>
						@endif
						
=======

						</div>
						@endif

>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
						<div class="profile-img"> <img src="{{ getProfilePath(Auth::user()->image, 'thumb') }}" alt=""> </div>
						<div class="mdi mdi-menu-down"></div>
					</div>
					<ul class="dropdown-menu">
						<li>
							<a href="{{URL_USERS_EDIT}}{{Auth::user()->slug}}">
<<<<<<< HEAD
								<sapn>{{ __('messages.my_profile') }}</sapn>
								<!-- <sapn>{{ __('messages.my_profile') }}</sapn> -->
=======
								<sapn>{{ getPhrase('my_profile') }}</sapn>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
							</a>
						</li>
						<li>
							<a href="{{URL_THEMES_LIST}}">
<<<<<<< HEAD
								<sapn>{{ __('messages.themes') }}</sapn>
=======
								<sapn>{{ getPhrase('themes') }}</sapn>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
								</a>
						</li>
						<li>
							<a href="{{URL_LANGUAGES_LIST}}">
<<<<<<< HEAD
								<sapn>{{ __('messages.languages') }}</sapn>
=======
								<sapn>{{ getPhrase('languages') }}</sapn>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
								</a>
						</li>
						<li>
							<a href="{{URL_USERS_CHANGE_PASSWORD}}{{Auth::user()->slug}}">
<<<<<<< HEAD
								<sapn>{{ __('messages.change_password') }}</sapn>
								</a>
						</li>
					 
						<li>
							<a href="{{URL_USERS_LOGOUT}}">
								<sapn>{{ __('messages.logout') }}</sapn>
=======
								<sapn>{{ getPhrase('change_password') }}</sapn>
								</a>
						</li>

						<li>
							<a href="{{URL_USERS_LOGOUT}}">
								<sapn>{{ getPhrase('logout') }}</sapn>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
							</a>
						</li>
					</ul>
				</li>
			</ul>
			<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
			<!-- /.navbar-collapse -->
		</nav>
<<<<<<< HEAD
		 @if(env('DEMO_MODE')) 
		<div class="alert alert-info demo-alert">
		&nbsp;&nbsp;&nbsp;<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  			<strong>{{__('messages.info')}}!</strong> CRUD {{getPhrase('operations_are_disabled_in_demo_version')}}
		</div>
		@endif

		<aside class="left-sidebar">			
		<div class="collapse navbar-collapse navbar-ex1-collapse">				
		<ul class="nav navbar-nav side-nav">					
		<li {{ isActive($active_class, 'dashboard') }}> 
						<a href="{{PREFIX}}">
							<i class="fa fa-fw fa-window-maximize"></i>
							 <!-- {{ getPhrase('dashboard') }}  -->
							 {{ __('messages.dashboard') }}
						</a> 
					</li>

					<li {{ isActive($active_class, 'languages') }}> <a href="{{URL_LANGUAGES_LIST}}">
					<i class="fa fa-fw fa-language" aria-hidden="true"></i> {{ __('messages.languages') }} </a> </li>
					
					<li {{ isActive($active_class, 'users') }}> <a href="{{URL_USERS}}"><i class="fa fa-fw fa-user-circle"></i> {{ __('messages.users') }} </a> </li>

 
					

					<li {{ isActive($active_class, 'exams') }} > 

					<a data-toggle="collapse" data-target="#exams"><i class="fa fa-fw fa-desktop" ></i> 
					{{ __('messages.exams') }} </a> 
					
					<ul id="exams" class="collapse sidemenu-dropdown">
							<li><a href="{{URL_QUIZ_CATEGORIES}}"> <i class="fa fa-fw fa-fw fa-random"></i>{{ __('messages.categories') }}</a></li>
							<li><a href="{{URL_QUIZ_QUESTIONBANK}}"> <i class="fa fa-fw fa-fw fa-question"></i>{{ __('messages.question_bank') }}</a></li>

							<li><a href="{{URL_QUIZZES}}"> <i class="icon-total-time"></i> {{ __('messages.quiz')}}</a></li>

							<li><a href="{{URL_EXAM_TYPES}}"> <i class="fa fa-fw fa-list"></i> {{ __('messages.exam_types')}}</a></li>

							<li><a href="{{URL_EXAM_SERIES}}"> <i class="fa fa-fw fa-list-ol"></i> {{ __('messages.exam_series')}}</a></li>
							<li><a href="{{URL_INSTRUCTIONS}}"> <i class="fa fa-fw fa-hand-o-right"></i> {{ __('messages.instructions')}}</a></li>
							<li><a href="{{URL_MASTERSETTINGS_SUBJECTS}}"> <i class="icon-books"></i> {{ __('messages.subjects_master')}}</a></li>
							
							<li><a href="{{URL_MASTERSETTINGS_TOPICS}}"> <i class="fa fa-fw fa-database"></i> {{ __('messages.subject_topics')}}</a></li>
=======
		 @if(env('DEMO_MODE'))
		<div class="alert alert-info demo-alert">
		&nbsp;&nbsp;&nbsp;<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  			<strong>{{getPhrase('info')}}!</strong> CRUD {{getPhrase('operations_are_disabled_in_demo_version')}}
		</div>
		@endif

		<aside class="left-sidebar">			<div class="collapse navbar-collapse navbar-ex1-collapse">				<ul class="nav navbar-nav side-nav">					<li {{ isActive($active_class, 'dashboard') }}>
						<a href="{{PREFIX}}">
							<i class="fa fa-fw fa-window-maximize"></i> {{ trans('home.Dashboard') }}
						</a>
					</li>

					<li {{ isActive($active_class, 'languages') }}> <a href="{{URL_LANGUAGES_LIST}}">
					<i class="fa fa-fw fa-language" aria-hidden="true"></i> {{ trans('home.Languages') }} </a> </li>

					<li {{ isActive($active_class, 'users') }}> <a href="{{URL_USERS}}"><i class="fa fa-fw fa-user-circle"></i> {{ trans('home.Users') }} </a> </li>




					<li {{ isActive($active_class, 'exams') }} >

					<a data-toggle="collapse" data-target="#exams"><i class="fa fa-fw fa-desktop" ></i>
					{{ trans('home.Exams') }} </a>

					<ul id="exams" class="collapse sidemenu-dropdown">
{{--							<li><a href="{{URL_QUIZ_CATEGORIES}}"> <i class="fa fa-fw fa-fw fa-random"></i>{{ getPhrase('categories') }}</a></li>--}}
							<li><a href="{{URL_QUIZ_CATEGORIES}}"> <i class="fa fa-fw fa-fw fa-random"></i>{{ trans('home.Categories') }}</a></li>
							<li><a href="{{URL_QUIZ_QUESTIONBANK}}"> <i class="fa fa-fw fa-fw fa-question"></i>{{ trans('home.Question Bank') }}</a></li>

							<li><a href="{{URL_QUIZZES}}"> <i class="icon-total-time"></i> {{ trans('home.Quiz') }}</a></li>

							<li><a href="{{URL_EXAM_TYPES}}"> <i class="fa fa-fw fa-list"></i> {{ trans('home.Exam Types') }}</a></li>

							<li><a href="{{URL_EXAM_SERIES}}"> <i class="fa fa-fw fa-list-ol"></i> {{ trans('home.Exam Series')}}</a></li>
							<li><a href="{{URL_INSTRUCTIONS}}"> <i class="fa fa-fw fa-hand-o-right"></i> {{ trans('home.Instructions') }}</a></li>
							<li><a href="{{URL_MASTERSETTINGS_SUBJECTS}}"> <i class="icon-books"></i> {{ trans('home.Subjects Master') }}</a></li>

							<li><a href="{{URL_MASTERSETTINGS_TOPICS}}"> <i class="fa fa-fw fa-database"></i> {{ trans('home.Subject Topics') }}</a></li>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

					</ul>

					</li>


<<<<<<< HEAD
					<li {{ isActive($active_class, 'coupons') }} > 

					<a data-toggle="collapse" data-target="#coupons"><i class="fa fa-fw fa-tags"></i> 
					{{ __('messages.coupons') }} </a> 
					
					<ul id="coupons" class="collapse sidemenu-dropdown">
							<li><a href="{{URL_COUPONS}}"> <i class="fa fa-fw fa-list"></i>{{ __('messages.list') }}</a></li>
							<li><a href="{{URL_COUPONS_ADD}}"> <i class="fa fa-fw fa-plus"></i>{{ __('messages.add') }}</a></li>
						 
=======
					<li {{ isActive($active_class, 'coupons') }} >

					<a data-toggle="collapse" data-target="#coupons"><i class="fa fa-fw fa-tags"></i>
					{{ trans('home.Coupons') }} </a>

					<ul id="coupons" class="collapse sidemenu-dropdown">
							<li><a href="{{URL_COUPONS}}"> <i class="fa fa-fw fa-list"></i>{{ trans('home.List') }}</a></li>
							<li><a href="{{URL_COUPONS_ADD}}"> <i class="fa fa-fw fa-plus"></i>{{ trans('home.Add') }}</a></li>

>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
					</ul>

					</li>

<<<<<<< HEAD
					<li {{ isActive($active_class, 'lms') }} > 

					<a data-toggle="collapse" data-target="#lms"><i class="fa fa-fw fa-tv" ></i> 
					LMS </a> 
					
					<ul id="lms" class="collapse sidemenu-dropdown">
							<li><a href="{{ URL_LMS_CATEGORIES }}"> <i class="fa fa-fw fa-random"></i>{{ __('messages.categories') }}</a></li>
							<li><a href="{{ URL_LMS_CONTENT }}"> <i class="icon-books"></i>{{ __('messages.contents') }}</a></li>
							<li><a href="{{ URL_LMS_SERIES }}"> <i class="fa fa-fw fa-list-ol"></i>{{ __('messages.series') }}</a></li>
=======
					<li {{ isActive($active_class, 'lms') }} >

					<a data-toggle="collapse" data-target="#lms"><i class="fa fa-fw fa-tv" ></i>
					LMS </a>

					<ul id="lms" class="collapse sidemenu-dropdown">
							<li><a href="{{ URL_LMS_CATEGORIES }}"> <i class="fa fa-fw fa-random"></i>{{ trans('home.Categories') }}</a></li>
							<li><a href="{{ URL_LMS_CONTENT }}"> <i class="icon-books"></i>{{ trans('home.Contents') }}</a></li>
							<li><a href="{{ URL_LMS_SERIES }}"> <i class="fa fa-fw fa-list-ol"></i>{{ trans('home.Series') }}</a></li>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
					</ul>
					</li>



<<<<<<< HEAD
					<li {{ isActive($active_class, 'reports') }} > 

					<a data-toggle="collapse" data-target="#reports"><i class="fa fa-fw fa-credit-card" ></i> 
					{{ __('messages.payment_Reports') }} </a> 
					
					<ul id="reports" class="collapse sidemenu-dropdown">
						  	<li><a href="{{URL_ONLINE_PAYMENT_REPORTS}}"> <i class="fa fa-fw fa-link"></i>{{ __('messages.online_payments') }}</a></li>
							<li><a href="{{URL_OFFLINE_PAYMENT_REPORTS}}"> <i class="fa fa-fw fa-chain-broken"></i>{{ __('messages.offline_payments') }}</a></li>
							<li><a href="{{URL_PAYMENT_REPORT_EXPORT}}"> <i class="fa fa-fw fa-file-excel-o"></i>{{ __('messages.export') }}</a></li>
							
=======
					<li {{ isActive($active_class, 'reports') }} >

					<a data-toggle="collapse" data-target="#reports"><i class="fa fa-fw fa-credit-card" ></i>
					{{ trans('home.Payment Reports') }} </a>

					<ul id="reports" class="collapse sidemenu-dropdown">
						  	<li><a href="{{URL_ONLINE_PAYMENT_REPORTS}}"> <i class="fa fa-fw fa-link"></i>{{ trans('home.Payment Reports') }}</a></li>
							<li><a href="{{URL_OFFLINE_PAYMENT_REPORTS}}"> <i class="fa fa-fw fa-chain-broken"></i>{{ trans('home.Online Payments') }}</a></li>
							<li><a href="{{URL_PAYMENT_REPORT_EXPORT}}"> <i class="fa fa-fw fa-file-excel-o"></i>{{ trans('home.Export') }}</a></li>

>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

					</ul>

					</li>

<<<<<<< HEAD
					<li {{ isActive($active_class, 'notifications') }} > 
						<a href="{{URL_ADMIN_NOTIFICATIONS}}" ><i class="fa fa-fw fa-bell" aria-hidden="true"></i>
					{{ __('messages.notifications') }} </a> 
					
					</li>
					<li {{ isActive($active_class, 'sms') }} > 
						<a href="{{URL_SEND_SMS}}" ><i class="fa fa-fw fa-envelope" ></i> 
					SMS </a> 
					
					</li>
										
					<li {{ isActive($active_class, 'messages') }} > 

					<a  href="{{URL_MESSAGES}}"> <i class="fa fa-fw fa-comments" aria-hidden="true"> </i>
					{{ __('messages.messages')}} <small class="msg">{{$count = Auth::user()->newThreadsCount()}} </small></a>
					
					</li>
					<li {{ isActive($active_class, 'feedback') }} > 
						<a href="{{URL_FEEDBACKS}}" ><i class="fa fa-fw fa-commenting" ></i> 
					{{ __('messages.feedback') }} </a> 
					
					</li>

					<li {{ isActive($active_class, 'master_settings') }} > 

					<a data-toggle="collapse" data-target="#master_settings" href="{{URL_MASTERSETTINGS_SETTINGS}}"><i class="fa fa-fw fa-cog" ></i> 
					{{ __('messages.master_settings') }} </a> 
					
					<ul id="master_settings" class="collapse sidemenu-dropdown">
							

							{{-- <li><a href="{{URL_MASTERSETTINGS_EMAIL_TEMPLATES}}"> <i class="icon-history"></i> {{ __('messages.email_templates') }}</a></li> --}}
							@if(checkRole(getUserGrade(1)))
							<li><a href="{{URL_MASTERSETTINGS_SETTINGS}}"> <i class="icon-settings"></i> {{ __('messages.settings') }}</a></li>
							@endif
							
					</ul>
					</li>

					<li {{ isActive($active_class, 'themes') }} > 
						<a href="{{URL_THEMES_LIST}}" ><i class="fa fa-fw fa-th-large" ></i> 
					{{ __('messages.themes') }} </a> 
					
=======
					<li {{ isActive($active_class, 'notifications') }} >
						<a href="{{URL_ADMIN_NOTIFICATIONS}}" ><i class="fa fa-fw fa-bell" aria-hidden="true"></i>
					{{ trans('home.Notifications') }} </a>

					</li>
					<li {{ isActive($active_class, 'sms') }} >
						<a href="{{URL_SEND_SMS}}" ><i class="fa fa-fw fa-envelope" ></i>
					SMS </a>

					</li>

					<li {{ isActive($active_class, 'messages') }} >

					<a  href="{{URL_MESSAGES}}"> <i class="fa fa-fw fa-comments" aria-hidden="true"> </i>
					{{ trans('home.Messages') }} <small class="msg">{{$count = Auth::user()->newThreadsCount()}} </small></a>

					</li>
					<li {{ isActive($active_class, 'feedback') }} >
						<a href="{{URL_FEEDBACKS}}" ><i class="fa fa-fw fa-commenting" ></i>
					{{ trans('home.Feedback') }} </a>

					</li>

					<li {{ isActive($active_class, 'master_settings') }} >

					<a data-toggle="collapse" data-target="#master_settings" href="{{URL_MASTERSETTINGS_SETTINGS}}"><i class="fa fa-fw fa-cog" ></i>
					{{ trans('home.Master Settings') }} </a>

					<ul id="master_settings" class="collapse sidemenu-dropdown">


							{{-- <li><a href="{{URL_MASTERSETTINGS_EMAIL_TEMPLATES}}"> <i class="icon-history"></i> {{ getPhrase('email_templates') }}</a></li> --}}
							@if(checkRole(getUserGrade(1)))
							<li><a href="{{URL_MASTERSETTINGS_SETTINGS}}"> <i class="icon-settings"></i> {{ trans('home.Settings') }}</a></li>
							@endif

					</ul>
					</li>

					<li {{ isActive($active_class, 'themes') }} >
						<a href="{{URL_THEMES_LIST}}" ><i class="fa fa-fw fa-th-large" ></i>
					{{ trans('home.Themes') }} </a>

>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
					</li>

				</ul>
			</div>
		</aside>
		@if(isset($right_bar))
<<<<<<< HEAD
			
=======

>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
		<aside class="right-sidebar" id="rightSidebar">
			<button class="sidebat-toggle" id="sidebarToggle" href='javascript:'><i class="mdi mdi-menu"></i></button>
			<div class="panel panel-right-sidebar">
				<?php $data = '';
			if(isset($right_bar_data))
				$data = $right_bar_data;
			?>
				@include($right_bar_path, array('data' => $data))
			</div>
		</aside>
<<<<<<< HEAD
	 
=======

>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
	@endif

		@yield('content')
	</div>
	<!-- /#wrapper -->
	<!-- jQuery -->

	{{-- <script>
            var csrfToken = $('[name="csrf_token"]').attr('content');

<<<<<<< HEAD
            setInterval(refreshToken, 600000); // 1 hour 
=======
            setInterval(refreshToken, 600000); // 1 hour
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

            function refreshToken(){
                $.get('refresh-csrf').done(function(data){
                    csrfToken = data; // the new token
                });
            }

<<<<<<< HEAD
            setInterval(refreshToken, 600000); // 1 hour 
=======
            setInterval(refreshToken, 600000); // 1 hour
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db

        </script> --}}

	<!-- Bootstrap Core JavaScript -->
	<script src="{{themes('js/jquery-1.12.1.min.js')}}"></script>
	<script src="{{themes('js/bootstrap.min.js')}}"></script>
	<script src="{{themes('js/main.js')}}"></script>
	<script src="{{themes('js/metisMenu.min.js')}}"></script>
	<script src="{{themes('js/sweetalert-dev.js')}}"></script>
<<<<<<< HEAD
	
=======

>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
	<script >
		 /*Sidebar Menu*/
    $("#ag-menu").metisMenu();
	</script>


	 @yield('footer_scripts')

	@include('errors.formMessages')
<<<<<<< HEAD
	
	 
 	
 	@yield('custom_div_end')
	{!!getSetting('google_analytics', 'seo_settings')!!}
	<div class="ajax-loader" style="display:none;" id="ajax_loader"><img src="{{AJAXLOADER}}"> {{__('messages.please_wait')}}...</div>
=======



 	@yield('custom_div_end')
	{!!getSetting('google_analytics', 'seo_settings')!!}
	<div class="ajax-loader" style="display:none;" id="ajax_loader"><img src="{{AJAXLOADER}}"> {{getPhrase('please_wait')}}...</div>
>>>>>>> f6e48b93de6bfc67890fc57c4996c6735aa0c7db
</body>

</html>