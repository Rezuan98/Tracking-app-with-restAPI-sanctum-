

<?php $__env->startSection('title','TodayTask'); ?>
<?php $__env->startSection('body'); ?>

<div class="table-responsive">
    <h3>Today Completed Task of <span class="btn btn-success fw-bold"><?php echo e($name2); ?></span></h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Sl</th>
                <th>Organization Name</th>
                <th>Mobile</th>
                <th>District</th>
                <th>Upazilla</th>
                <th>Address</th>
                
                <th>Status</th>
                <th>Charge Amount</th>
                <th>Monthly Fee</th>
                <th>Note</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $todaytask; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <tr>
                
                <td><?php echo e($index + 1); ?></td>
                <td><?php echo e($item->name); ?></td>
                <td><?php echo e($item->mobile); ?></td>
                <td><?php echo e($item->district); ?></td>
                <td><?php echo e($item->upazilla); ?></td>
                <td><?php echo e($item->address); ?></td>
                <td><?php echo e($item->status); ?></td>
                <td><?php echo e($item->charge); ?></td>
                <td><?php echo e($item->monthlyfee); ?></td>
                <td><?php echo e($item->note); ?></td>
                <td><?php echo e($item->date); ?></td>
                
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tracking-Api\trackingApi\resources\views/dashboard/today_task.blade.php ENDPATH**/ ?>