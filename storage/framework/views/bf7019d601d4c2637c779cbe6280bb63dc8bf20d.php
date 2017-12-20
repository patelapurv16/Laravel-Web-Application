
<?php $__env->startSection('content'); ?>
    <h1>Welcome <?php echo e(Session::get('username')); ?></h1>

    <div class="container">
        <p>
            <a href="<?php echo e(url('/viewallshelves')); ?>" class="btn btn-info" role="button">View all shelves</a>
        </p>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutlibstud', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>