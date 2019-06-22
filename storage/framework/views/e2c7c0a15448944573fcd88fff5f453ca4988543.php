
<?php $__env->startSection('header_scripts'); ?>
<link href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div id="page-wrapper">
			
			<div class="container-fluid">
				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<li><a href="<?php echo e(url('/')); ?>"><i class="mdi mdi-home"></i></a> </li>
							<li><?php echo e($title); ?></li>
						</ol>
					</div>
				</div>
								
				<!-- /.row -->
				<div class="panel panel-custom">
					<div class="panel-heading">
						
						<div class="pull-right messages-buttons">
							 
							<a href="<?php echo e(URL_USERS_ADD); ?>" class="btn  btn-primary button" ><?php echo e(trans('home.Add User')); ?></a>
						</div>
						<h1><?php echo e($title); ?></h1>
					</div>
					<div class="panel-body packages">
						<div > 
						<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
							<thead>
								<tr>
								 	<th><?php echo e(trans('home.name')); ?></th>
									<th><?php echo e(trans('home.email')); ?></th>
									<th><?php echo e(trans('home.image')); ?></th>
									 
									<th><?php echo e(trans('home.action')); ?></th>
								</tr>
							</thead>
							 
						</table>
						</div>
						 

					</div>

				</div>
			</div>
			<!-- /.container-fluid -->
		</div>
<?php $__env->stopSection(); ?>
 
 <?php $url = URL_PARENT_CHILDREN_GETLIST.$user->slug;
 
  ?>
<?php $__env->startSection('footer_scripts'); ?>
  <?php echo $__env->make('common.datatables', array('route'=>$url, 'route_as_url' => TRUE), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('language', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>