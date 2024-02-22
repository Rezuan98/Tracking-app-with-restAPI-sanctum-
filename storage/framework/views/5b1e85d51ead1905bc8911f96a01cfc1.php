

<?php $__env->startSection('title','ViewDetails'); ?>
<?php $__env->startSection('body'); ?>

<div class="card-body">
    <h5 class="card-title">Work Details</h5>
    <br>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Today working hr</th>
                    <th>Today Tasks</th>
                    <th>total Project</th>
                    
                    <th>Working Hour(Total)</th>
                    <th>Total Income</th> 
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $marketer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($index + 1); ?></td>
                    <td><?php echo e($m->name); ?></td>
                    <td>
                       
                            <?php echo e($totalFormatted); ?> </td>

                    <td>  <a href="<?php echo e(route('today.task',$m->id)); ?>" class="btn btn-success p-3"><?php echo e($todaytask); ?></a> </td>
              
                    <td>
                            <a href="<?php echo e(route('total.task',$m->id)); ?>" class="btn btn-danger p-3"><?php echo e($totaltask); ?></a>
                       </td>
             
                 
                    <td><?php echo e($totalFormatted2); ?></td> 
                    <td><?php echo e($totalincome); ?> </td>
                   
                    
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            
        </table>
        
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tracking-Api\trackingApi\resources\views/dashboard/view.blade.php ENDPATH**/ ?>