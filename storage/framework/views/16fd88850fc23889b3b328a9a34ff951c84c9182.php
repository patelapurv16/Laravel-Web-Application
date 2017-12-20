
<?php $__env->startSection('content'); ?>
    
        
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Book ID</th>
                        <th scope="col">Book Name</th>
                        <th scope="col">Author</th>
                        <th scope="col">Availibility</th>
                        <th scope="col">Borrow?</th>
                    </tr>

                </thead>
                <tbody>
                    <?php $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                            <th scope="row">
                                <td name="book_id">

                                <?php echo e($book->id); ?></td>

                                <td name="book_name"><?php echo e($book->book_name); ?></td>
                                <td name="author"><?php echo e($book->author); ?></td>
                                <td name="availability"><?php echo e($book->availability); ?></td>
                            <?php if($book->availability == 0): ?>
                                <td>

                                        <button type="submit" class="btn btn-danger">BORROWED</button>


                                </td>
                            <?php else: ?>
                                    <td>
                                        <form action="/viewallshelves" method="post">
                                            <?php echo e(csrf_field()); ?>

                                            <button  formaction="viewallshelves"  value = "<?php echo e($book->id); ?>" name="borrow_id"  class="btn btn-primary">BORROW</button>
                                        </form>


                                    </td>
                            <?php endif; ?>
                            </th>
                        </tr>
                        <br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>
        
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layoutlibstud', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>