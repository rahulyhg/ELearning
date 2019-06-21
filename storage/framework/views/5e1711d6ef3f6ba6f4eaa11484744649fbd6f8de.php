<?php $__env->startSection('content'); ?><div id="page-wrapper">
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li><a href="<?php echo e(PREFIX); ?>"><i class="mdi mdi-home"></i></a> </li>
                <?php if(checkRole(getUserGrade(2))): ?>
                <li><a href="<?php echo e(URL_USERS); ?>"><?php echo e(__('messages.users')); ?></a> </li>
                <li class="active"><?php echo e(isset($title) ? $title : ''); ?></li>
                <?php else: ?>
                <li class="active"><?php echo e($title); ?></li>
                 <?php endif; ?>
            </ol>
        </div>
    </div>
    <?php echo $__env->make('errors.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- /.row -->

    <div class="panel panel-custom " ng-controller="users_controller">
        <div class="panel-heading">
            <?php if(checkRole(getUserGrade(2))): ?> 
            <div class="pull-right messages-buttons"><a href="<?php echo e(URL_USERS); ?>" class="btn  btn-primary button" ><?php echo e(__('messages.list')); ?></a></div>
            <?php endif; ?>

<h1><?php echo e($title); ?>  </h1>
</div>

<div class="panel-body"> 


<?php echo e(Form::model($record, 
            array('url' => ['users/parent-details/'.$record->slug], 
            'method'=>'patch'))); ?>

        <h3><?php echo e(__('messages.parent_login_details')); ?></h3>
        <?php 
        $user_record = $record;
        ?>
        
        <?php if(!$user_record->parent_id): ?> 
        
        <div class="row">
                <fieldset class='col-sm-6'>
                <label for="exampleInputEmail1"><?php echo e(__('messages.is_parent_account_available')); ?></label>
                <div class="form-group row">
                    <div class="col-md-6">
                        <input type="radio" checked="checked" id="available" name="account" value="1" ng-model="account_available" ng-init="account_available=1; accountAvailable(1);" ng-click="accountAvailable(1)">
                        <label for="available"> <span class="fa-stack radio-button"> <i class="mdi mdi-check active"></i> </span> Yes </label>
                    </div>
                    <div class="col-md-6">
                        <input type="radio" id="not_available" name="account" value="0" ng-model="account_not_available" ng-click="accountAvailable(0)">
                        <label for="not_available"> <span class="fa-stack radio-button"> <i class="mdi mdi-check active"></i> </span> No </label>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="sem-parent-container">
        

        <div class="row" >
        <div class="col-md-6">
        <input  type="hidden" 
                ng-model="current_user_id" 
                name="current_user_id" 
                value="<?php echo e($record->user_id); ?>">
        <input  type="hidden" 
                ng-model="parent_user_id" 
                name="parent_user_id" 
                value="{{parent_user_id}}">
            <fieldset class="form-group" ng-show="showSearch">
            <?php echo e(Form::label('search', __('messages.search'))); ?>

            <span class="text-red" >*</span>
                <?php echo e(Form::text('search', $value = null , $attributes = array(
                    'class'         => 'form-control', 
                    'placeholder'   => 'Jack',
                    'ng-model'      => 'search',

                    'ng-change'     => 'getParentRecords(search)',
                    ))); ?>

            </fieldset>
            <div >
                <p ng-if="parents.length==0 && showSearch">Please type any details for search</p>
            <table ng-if="parents.length>0" class="table table-striped">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </thead>
                <tbody>
                    <tr ng-repeat="item in parents" ng-click="setAsCurrentItem(item)">
                        <td>{{item.name}}</td>
                        <td>{{item.email}}</td>
                        <td>{{item.phone}}</td>
                    </tr>
                </tbody>
            </table>

            </div>
        </div>
        <div class="col-md-6" ng-show="userDetails" >
        <fieldset class="form-group ">
            <?php echo e(Form::label('parent_name', __('messages.parent_name'))); ?>

            <span class="text-red" >*</span>
                <?php echo e(Form::text('parent_name', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 'Jack', 'ng-model'=>'parent_name'))); ?>

            </fieldset>

            <fieldset class="form-group ">
            <?php echo e(Form::label('parent_user_name', __('messages.parent_user_name'))); ?>

            <span class="text-red" >*</span>
                <?php echo e(Form::text('parent_user_name', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 'Jack', 'ng-model'=>'parent_user_name'))); ?>

            </fieldset>
            <fieldset class="form-group ">
            <?php echo e(Form::label('parent_email', __('messages.parent_email'))); ?>

                <?php echo e(Form::text('parent_email', $value = null , $attributes = array('class'=>'form-control', 'placeholder' => 'Jarvis', 'ng-model'=>'parent_email'))); ?>

            </fieldset>
            <fieldset class="form-group ">
                <?php echo e(Form::label('parent_password', __('messages.password'))); ?>

                <?php echo e(Form::password('parent_password',$attributes = array('class'=>'form-control'))); ?>

            </fieldset>
             
            <div class="col-md-12 clearfix"></div>
             
        </div>
        </div>

        </div>
        
                                <div class="buttons text-center">
                                <button type="submit" class="btn btn-lg btn-success button"><?php echo e(__('messages.update')); ?></button>
                                      </div>
                                <?php echo Form::close(); ?>

                                <?php else: ?>
                                <?php $parent_record = getUserRecord($user_record->parent_id); ?>
                                <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <table class="table table-bordered table-striped">
                                        <tbody>
                                        <tr>
                                            <td>Name</td>
                                            <td><?php echo e($parent_record->name); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Username</td>
                                            <td><?php echo e($parent_record->username); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td><?php echo e($parent_record->email); ?></td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                                </div>
                                <?php endif; ?>



</div>
</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>
<?php echo $__env->make('common.validations', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('common.alertify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('users.scripts.js-scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make($layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>