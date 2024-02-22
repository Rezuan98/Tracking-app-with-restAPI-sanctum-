
<?php $__env->startSection('title','All Attendance'); ?>
<?php $__env->startSection('body'); ?>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Sl</th>
                <th>Date</th>
                <th>Attendance</th>
               
                <th>Name</th>
                <th>Mobile</th>
                
               
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $allattendance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $aa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($index + 1); ?></td>
                <td><?php echo e($aa->date); ?></td>
                <td><span class="btn btn-outline-info"><?php echo e($aa->Attendance); ?></span></td>
                
                <td><?php echo e($aa->name); ?></td>
                <td><?php echo e($aa->mobile); ?></td>
                
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        
    </table>
    
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tracking-Api\trackingApi\resources\views/dashboard/all_attendance.blade.php ENDPATH**/ ?>