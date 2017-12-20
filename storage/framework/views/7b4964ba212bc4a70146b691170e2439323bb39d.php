
<?php $__env->startSection('content'); ?>
    <h3 align="center">Welcome <?php echo e(Session::get('username')); ?></h3>


    <div class="container">
        <p>
            <a href="<?php echo e(url('addbooks')); ?>" class="btn btn-info" role="button">Add Books</a>
        </p>
        <p>
            <a href="<?php echo e(url('deletebooks')); ?>" class="btn btn-info" role="button">Delete Books</a>
        </p>
        <p>
            <a href="<?php echo e(url('viewallloans')); ?>" class="btn btn-info" role="button">View Loans</a><br>
        </p>
       <p>
           <a href="<?php echo e(url('viewallshelves')); ?>" class="btn btn-info" role="button">View all shelves</a>
       </p>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutlibstud', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>