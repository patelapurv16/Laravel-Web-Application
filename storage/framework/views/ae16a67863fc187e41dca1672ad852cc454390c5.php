
<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php if(count($errors)>0): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p class="alert alert-danger"><?php echo e($error); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <form class="form-horizontal" action="register_action" method="POST">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label class="control-label col-sm-2" for="username">Username:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" value="<?php echo e(old('username')); ?>" placeholder="Enter Username" name="username">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="password">Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="password">Confirm Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="cpassword">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="phonenumber">Phone Number:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo e(old('phonenumber')); ?>" id="phonenumber" placeholder="Enter Cell Number" name="phonenumber">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"  value="<?php echo e(old('email')); ?>">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label> <input type="checkbox" value ='1' name="librarian">librarian</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>