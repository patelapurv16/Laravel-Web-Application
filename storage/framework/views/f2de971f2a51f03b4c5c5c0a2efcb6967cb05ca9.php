
<?php $__env->startSection('content'); ?>
    
    
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">User ID</th>
            <th scope="col">Book ID</th>
            <th scope="col">Date Issued</th>
            <th scope="col">Return Date</th>
            
        </tr>

        </thead>
        <tbody>
        <?php $__currentLoopData = $loan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row">
                     
                     <td name="user_id"><?php echo e($loan->user_id); ?></td>
                     <td name="book_id"><?php echo e($loan->book_id); ?></td>
                     <td name="due_date"><?php echo e($loan->due_date); ?></td>
                     <td name="returned_date"><?php echo e($loan->returned_date); ?></td>

                </th>
            </tr>
            <br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>
    
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layoutlibstud', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>