<?php $__env->startSection('header_scripts'); ?>
<link href="<?php echo e(CSS); ?>ajax-datatables.css" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<div id="page-wrapper">
			<div class="container-fluid">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo e(URL::asset('')); ?>language/vi">Tiếng Việt</a></li>
					<li><a href="<?php echo e(URL::asset('')); ?>language/en">Tiếng Anh</a></li>
					<li><a href="<?php echo e(URL::asset('')); ?>language/ja">Tiếng Nhật</a></li>
				</ul>
				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<li><a href="<?php echo e(PREFIX); ?>"><i class="mdi mdi-home"></i></a> </li>
							
							<li><a href="<?php echo e(URL_STUDENT_EXAM_CATEGORIES); ?>"> <?php echo e(getPhrase('exam_categories')); ?> </a> </li>

							<li><?php echo e($title); ?></li>
						</ol>
					</div>
				</div>
								
				<!-- /.row -->
				<div class="panel panel-custom">
					<div class="panel-heading">
						
					 
						<h1><?php echo e($title); ?></h1>
					</div>
					<div class="panel-body packages">
						<div> 
						  <?php   
						  		$user = Auth::user(); 
						  		 $interested_categories      = null;
						        if($user->settings)
						        {
						          $interested_categories =  json_decode($user->settings)->user_preferences;
						        }

						  ?>
						  <?php if($interested_categories->quiz_categories): ?>
						<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
							<thead>
								<tr>








									<th><?php echo e(trans('home.Title')); ?></th>
									<th><?php echo e(trans('home.Duration')); ?></th>
									<th><?php echo e(trans('home.Category')); ?></th>
									<th><?php echo e(trans('home.Type')); ?></th>
									<th><?php echo e(trans('home.Total Questions')); ?></th>
									<th><?php echo e(trans('home.Action')); ?></th>
								</tr>
							</thead>
							 
						</table>
						<?php else: ?>
							Ooops...! <?php echo e(getPhrase('no_exams_available')); ?>

						
						<a href="<?php echo e(URL_USERS_SETTINGS.Auth::user()->slug); ?>" ><?php echo e(getPhrase('click_here_to_change_your_preferences')); ?></a>
						<?php endif; ?>
						</div>

					</div>
				</div>
			</div>
			<!-- /.container-fluid -->
		</div>
<?php $__env->stopSection(); ?>
 

<?php $__env->startSection('footer_scripts'); ?>
<?php if($interested_categories): ?>
  <?php if($category): ?>
	 <?php echo $__env->make('common.datatables', array('route'=>URL_STUDENT_QUIZ_GETLIST.$category->slug, 'route_as_url' => TRUE), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php else: ?>
	 <?php echo $__env->make('common.datatables', array('route'=>URL_STUDENT_QUIZ_GETLIST_ALL, 'route_as_url' => TRUE), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endif; ?>
	 <?php echo $__env->make('common.deletescript', array('route'=>URL_QUIZ_DELETE), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 <?php endif; ?>
<script>
function showInstructions(url) {
  width = screen.availWidth;
  height = screen.availHeight;
  window.open(url,'_blank',"height="+height+",width="+width+", toolbar=no, top=0,left=0,location=no,menubar=no, directories=no, status=no, menubar=no, scrollbars=yes,resizable=no");

	runner();
}

function runner()
{
	url = localStorage.getItem('redirect_url');
    if(url) {
      localStorage.clear();
       window.location = url;
    }
    setTimeout(function() {
          runner();
    }, 500);

}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>