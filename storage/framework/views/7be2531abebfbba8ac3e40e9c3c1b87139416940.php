<!DOCTYPE html>

<html lang="<?php echo e(app()->getLocale()); ?>n" dir="<?php echo e((App\Language::isDefaultLanuageRtl()) ? 'rtl' : 'ltr'); ?>">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo e(getSetting('meta_description', 'seo_settings')); ?>">
	<meta name="keywords" content="<?php echo e(getSetting('meta_keywords', 'seo_settings')); ?>">
	<meta name="csrf_token" content="<?php echo e(csrf_token()); ?>">
	 
	<link rel="icon" href="<?php echo e(IMAGE_PATH_SETTINGS.getSetting('site_favicon', 'site_settings')); ?>" type="image/x-icon" />
	<title><?php echo $__env->yieldContent('title'); ?> <?php echo e(isset($title) ? $title : getSetting('site_title','site_settings')); ?></title>
	<!-- Bootstrap Core CSS -->
	 <?php echo $__env->yieldContent('header_scripts'); ?>

	   <link href="<?php echo e(themes('css/bootstrap.min.css')); ?>" rel="stylesheet">
	   <link href="<?php echo e(themes('css/sweetalert.css')); ?>" rel="stylesheet">
	  
	   <link href="<?php echo e(themes('css/metisMenu.min.css')); ?>" rel="stylesheet">
	   <link href="<?php echo e(themes('css/custom-fonts.css')); ?>" rel="stylesheet">
	   <link href="<?php echo e(themes('css/materialdesignicons.css')); ?>" rel="stylesheet">
	   <link href="<?php echo e(themes('font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
	 
	   <link href="<?php echo e(themes('css/bootstrap-datepicker.min.css')); ?>" rel="stylesheet">
	
	<!-- Morris Charts CSS -->
	
	   <link href="<?php echo e(themes('css/plugins/morris.css')); ?>" rel="stylesheet">
	 <link href="<?php echo e(themes('css/sb-admin.css')); ?>" rel="stylesheet">
	 
     
    <?php
    $theme_color  = getThemeColor();
    // dd($theme_color);
    ?>
    <?php if($theme_color == 'blueheader'): ?>      
	 <link href="<?php echo e(themes('css/theme-colors/header-blue.css')); ?>" rel="stylesheet">
    <?php elseif($theme_color == 'bluenavbar'): ?>	 
	 <link href="<?php echo e(themes('css/theme-colors/blue-sidebar.css')); ?>" rel="stylesheet">
    <?php elseif($theme_color == 'darkheader'): ?>	 
	 <link href="<?php echo e(themes('css/theme-colors/dark-header.css')); ?>" rel="stylesheet">
    <?php elseif($theme_color == 'darktheme'): ?>	 
	 <link href="<?php echo e(themes('css/theme-colors/dark-theme.css')); ?>" rel="stylesheet">
    <?php elseif($theme_color == 'whitecolor'): ?>	 
	 <link href="<?php echo e(themes('css/theme-colors/white-theme.css')); ?>" rel="stylesheet">]
	<?php endif; ?> 
	
	

</head>

<body ng-app="academia">
 <?php echo $__env->yieldContent('custom_div'); ?>
 <?php 
 $class = '';
 if(!isset($right_bar))
 	$class = 'no-right-sidebar';

 ?>
	<div id="wrapper" class="<?php echo e($class); ?>">
		<!-- Navigation -->
		<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="<?php echo e(URL_HOME); ?>" target="_blank"><img src="<?php echo e(IMAGE_PATH_SETTINGS.getSetting('site_logo', 'site_settings')); ?>" alt="<?php echo e(getSetting('site_title','site_settings')); ?>"></a>
			</div>

			<!-- Top Menu Items -->
			<?php $newUsers = (new App\User())->getLatestUsers(); ?>
			<ul class="nav navbar-right top-nav">
				<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<i class="icon-topbar-event"></i> <?php echo e(__('messages.latest_users')); ?>  </a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-notif" aria-labelledby="dd-notification">
					<div class="dropdown-menu-notif-list" id="latestUsers">
					<?php $__currentLoopData = $newUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="dropdown-menu-notif-item">
								<div class="photo">
									<img src="<?php echo e(getProfilePath($user->image)); ?>" alt="">
								</div>
								 <a href="<?php echo e(URL_USER_DETAILS.$user->slug); ?>"><?php echo e(ucfirst($user->name)); ?></a>  <?php echo e(__('messages.was_joined_as').' '. getRoleData($user->role_id)); ?>

								<div class="color-blue-grey-lighter"><?php echo e($user->updated_at->diffForHumans()); ?></div>
							</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>

						<div class="dropdown-menu-notif-more">
							<a href="<?php echo e(URL_USERS); ?>"><?php echo e(__('messages.see_more')); ?></a>
						</div>
					</div>
				</li>
				
				 
				<li class="dropdown profile-menu">
					<div class="dropdown-toggle top-profile-menu" data-toggle="dropdown">
						<?php if(Auth::check()): ?>
						<div class="username">
							<h2><?php echo e(Auth::user()->name); ?></h2>
							 
						</div>
						<?php endif; ?>
						
						<div class="profile-img"> <img src="<?php echo e(getProfilePath(Auth::user()->image, 'thumb')); ?>" alt=""> </div>
						<div class="mdi mdi-menu-down"></div>
					</div>
					<ul class="dropdown-menu">
						<li>
							<a href="<?php echo e(URL_USERS_EDIT); ?><?php echo e(Auth::user()->slug); ?>">
								<sapn><?php echo e(__('messages.my_profile')); ?></sapn>
								<!-- <sapn><?php echo e(__('messages.my_profile')); ?></sapn> -->
							</a>
						</li>
						<li>
							<a href="<?php echo e(URL_THEMES_LIST); ?>">
								<sapn><?php echo e(__('messages.themes')); ?></sapn>
								</a>
						</li>
						<li>
							<a href="<?php echo e(URL_LANGUAGES_LIST); ?>">
								<sapn><?php echo e(__('messages.languages')); ?></sapn>
								</a>
						</li>
						<li>
							<a href="<?php echo e(URL_USERS_CHANGE_PASSWORD); ?><?php echo e(Auth::user()->slug); ?>">
								<sapn><?php echo e(__('messages.change_password')); ?></sapn>
								</a>
						</li>
					 
						<li>
							<a href="<?php echo e(URL_USERS_LOGOUT); ?>">
								<sapn><?php echo e(__('messages.logout')); ?></sapn>
							</a>
						</li>
					</ul>
				</li>
			</ul>
			<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
			<!-- /.navbar-collapse -->
		</nav>
		 <?php if(env('DEMO_MODE')): ?> 
		<div class="alert alert-info demo-alert">
		&nbsp;&nbsp;&nbsp;<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  			<strong><?php echo e(__('messages.info')); ?>!</strong> CRUD <?php echo e(getPhrase('operations_are_disabled_in_demo_version')); ?>

		</div>
		<?php endif; ?>

		<aside class="left-sidebar">			
		<div class="collapse navbar-collapse navbar-ex1-collapse">				
		<ul class="nav navbar-nav side-nav">					
		<li <?php echo e(isActive($active_class, 'dashboard')); ?>> 
						<a href="<?php echo e(PREFIX); ?>">
							<i class="fa fa-fw fa-window-maximize"></i>
							 <!-- <?php echo e(getPhrase('dashboard')); ?>  -->
							 <?php echo e(__('messages.dashboard')); ?>

						</a> 
					</li>

					<li <?php echo e(isActive($active_class, 'languages')); ?>> <a href="<?php echo e(URL_LANGUAGES_LIST); ?>">
					<i class="fa fa-fw fa-language" aria-hidden="true"></i> <?php echo e(__('messages.languages')); ?> </a> </li>
					
					<li <?php echo e(isActive($active_class, 'users')); ?>> <a href="<?php echo e(URL_USERS); ?>"><i class="fa fa-fw fa-user-circle"></i> <?php echo e(__('messages.users')); ?> </a> </li>

 
					

					<li <?php echo e(isActive($active_class, 'exams')); ?> > 

					<a data-toggle="collapse" data-target="#exams"><i class="fa fa-fw fa-desktop" ></i> 
					<?php echo e(__('messages.exams')); ?> </a> 
					
					<ul id="exams" class="collapse sidemenu-dropdown">
							<li><a href="<?php echo e(URL_QUIZ_CATEGORIES); ?>"> <i class="fa fa-fw fa-fw fa-random"></i><?php echo e(__('messages.categories')); ?></a></li>
							<li><a href="<?php echo e(URL_QUIZ_QUESTIONBANK); ?>"> <i class="fa fa-fw fa-fw fa-question"></i><?php echo e(__('messages.question_bank')); ?></a></li>

							<li><a href="<?php echo e(URL_QUIZZES); ?>"> <i class="icon-total-time"></i> <?php echo e(__('messages.quiz')); ?></a></li>

							<li><a href="<?php echo e(URL_EXAM_TYPES); ?>"> <i class="fa fa-fw fa-list"></i> <?php echo e(__('messages.exam_types')); ?></a></li>

							<li><a href="<?php echo e(URL_EXAM_SERIES); ?>"> <i class="fa fa-fw fa-list-ol"></i> <?php echo e(__('messages.exam_series')); ?></a></li>
							<li><a href="<?php echo e(URL_INSTRUCTIONS); ?>"> <i class="fa fa-fw fa-hand-o-right"></i> <?php echo e(__('messages.instructions')); ?></a></li>
							<li><a href="<?php echo e(URL_MASTERSETTINGS_SUBJECTS); ?>"> <i class="icon-books"></i> <?php echo e(__('messages.subjects_master')); ?></a></li>
							
							<li><a href="<?php echo e(URL_MASTERSETTINGS_TOPICS); ?>"> <i class="fa fa-fw fa-database"></i> <?php echo e(__('messages.subject_topics')); ?></a></li>

					</ul>

					</li>


					<li <?php echo e(isActive($active_class, 'coupons')); ?> > 

					<a data-toggle="collapse" data-target="#coupons"><i class="fa fa-fw fa-tags"></i> 
					<?php echo e(__('messages.coupons')); ?> </a> 
					
					<ul id="coupons" class="collapse sidemenu-dropdown">
							<li><a href="<?php echo e(URL_COUPONS); ?>"> <i class="fa fa-fw fa-list"></i><?php echo e(__('messages.list')); ?></a></li>
							<li><a href="<?php echo e(URL_COUPONS_ADD); ?>"> <i class="fa fa-fw fa-plus"></i><?php echo e(__('messages.add')); ?></a></li>
						 
					</ul>

					</li>

					<li <?php echo e(isActive($active_class, 'lms')); ?> > 

					<a data-toggle="collapse" data-target="#lms"><i class="fa fa-fw fa-tv" ></i> 
					LMS </a> 
					
					<ul id="lms" class="collapse sidemenu-dropdown">
							<li><a href="<?php echo e(URL_LMS_CATEGORIES); ?>"> <i class="fa fa-fw fa-random"></i><?php echo e(__('messages.categories')); ?></a></li>
							<li><a href="<?php echo e(URL_LMS_CONTENT); ?>"> <i class="icon-books"></i><?php echo e(__('messages.contents')); ?></a></li>
							<li><a href="<?php echo e(URL_LMS_SERIES); ?>"> <i class="fa fa-fw fa-list-ol"></i><?php echo e(__('messages.series')); ?></a></li>
					</ul>
					</li>



					<li <?php echo e(isActive($active_class, 'reports')); ?> > 

					<a data-toggle="collapse" data-target="#reports"><i class="fa fa-fw fa-credit-card" ></i> 
					<?php echo e(__('messages.payment_Reports')); ?> </a> 
					
					<ul id="reports" class="collapse sidemenu-dropdown">
						  	<li><a href="<?php echo e(URL_ONLINE_PAYMENT_REPORTS); ?>"> <i class="fa fa-fw fa-link"></i><?php echo e(__('messages.online_payments')); ?></a></li>
							<li><a href="<?php echo e(URL_OFFLINE_PAYMENT_REPORTS); ?>"> <i class="fa fa-fw fa-chain-broken"></i><?php echo e(__('messages.offline_payments')); ?></a></li>
							<li><a href="<?php echo e(URL_PAYMENT_REPORT_EXPORT); ?>"> <i class="fa fa-fw fa-file-excel-o"></i><?php echo e(__('messages.export')); ?></a></li>
							

					</ul>

					</li>

					<li <?php echo e(isActive($active_class, 'notifications')); ?> > 
						<a href="<?php echo e(URL_ADMIN_NOTIFICATIONS); ?>" ><i class="fa fa-fw fa-bell" aria-hidden="true"></i>
					<?php echo e(__('messages.notifications')); ?> </a> 
					
					</li>
					<li <?php echo e(isActive($active_class, 'sms')); ?> > 
						<a href="<?php echo e(URL_SEND_SMS); ?>" ><i class="fa fa-fw fa-envelope" ></i> 
					SMS </a> 
					
					</li>
										
					<li <?php echo e(isActive($active_class, 'messages')); ?> > 

					<a  href="<?php echo e(URL_MESSAGES); ?>"> <i class="fa fa-fw fa-comments" aria-hidden="true"> </i>
					<?php echo e(__('messages.messages')); ?> <small class="msg"><?php echo e($count = Auth::user()->newThreadsCount()); ?> </small></a>
					
					</li>
					<li <?php echo e(isActive($active_class, 'feedback')); ?> > 
						<a href="<?php echo e(URL_FEEDBACKS); ?>" ><i class="fa fa-fw fa-commenting" ></i> 
					<?php echo e(__('messages.feedback')); ?> </a> 
					
					</li>

					<li <?php echo e(isActive($active_class, 'master_settings')); ?> > 

					<a data-toggle="collapse" data-target="#master_settings" href="<?php echo e(URL_MASTERSETTINGS_SETTINGS); ?>"><i class="fa fa-fw fa-cog" ></i> 
					<?php echo e(__('messages.master_settings')); ?> </a> 
					
					<ul id="master_settings" class="collapse sidemenu-dropdown">
							

							
							<?php if(checkRole(getUserGrade(1))): ?>
							<li><a href="<?php echo e(URL_MASTERSETTINGS_SETTINGS); ?>"> <i class="icon-settings"></i> <?php echo e(__('messages.settings')); ?></a></li>
							<?php endif; ?>
							
					</ul>
					</li>

					<li <?php echo e(isActive($active_class, 'themes')); ?> > 
						<a href="<?php echo e(URL_THEMES_LIST); ?>" ><i class="fa fa-fw fa-th-large" ></i> 
					<?php echo e(__('messages.themes')); ?> </a> 
					
					</li>

				</ul>
			</div>
		</aside>
		<?php if(isset($right_bar)): ?>
			
		<aside class="right-sidebar" id="rightSidebar">
			<button class="sidebat-toggle" id="sidebarToggle" href='javascript:'><i class="mdi mdi-menu"></i></button>
			<div class="panel panel-right-sidebar">
				<?php $data = '';
			if(isset($right_bar_data))
				$data = $right_bar_data;
			?>
				<?php echo $__env->make($right_bar_path, array('data' => $data), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
		</aside>
	 
	<?php endif; ?>

		<?php echo $__env->yieldContent('content'); ?>
	</div>
	<!-- /#wrapper -->
	<!-- jQuery -->

	

	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo e(themes('js/jquery-1.12.1.min.js')); ?>"></script>
	<script src="<?php echo e(themes('js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(themes('js/main.js')); ?>"></script>
	<script src="<?php echo e(themes('js/metisMenu.min.js')); ?>"></script>
	<script src="<?php echo e(themes('js/sweetalert-dev.js')); ?>"></script>
	
	<script >
		 /*Sidebar Menu*/
    $("#ag-menu").metisMenu();
	</script>


	 <?php echo $__env->yieldContent('footer_scripts'); ?>

	<?php echo $__env->make('errors.formMessages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	
	 
 	
 	<?php echo $__env->yieldContent('custom_div_end'); ?>
	<?php echo getSetting('google_analytics', 'seo_settings'); ?>

	<div class="ajax-loader" style="display:none;" id="ajax_loader"><img src="<?php echo e(AJAXLOADER); ?>"> <?php echo e(__('messages.please_wait')); ?>...</div>
</body>

</html>