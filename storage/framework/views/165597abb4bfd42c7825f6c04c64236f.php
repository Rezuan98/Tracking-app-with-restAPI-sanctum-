<?php $__env->startSection('title','All Marketer List'); ?>
<?php $__env->startSection('body'); ?>

<div class="card-body">
    <h4 class="card-title">All Marketers List</h4>

    <a href="<?php echo e(route('add.marketer')); ?>"><button type="button" class="btn btn-success mt-2">Add New Marketer</button></a>
    
    <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Marketer Name</th>
                        <th>Attendance</th>
                        <th>Mobile</th>
                        <th>Address</th>
                        
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $marketer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <tr>
                        <th><?php echo e($item->id); ?></th>
                        <td><?php echo e($item->name); ?> </td>
                        <td>
                           
                           
                            <?php if($attendance[$item->id]): ?>
                           
                                <a href="<?php echo e(route('all.attendance',$item->id)); ?>"><span type="button" class="btn btn-outline-info"> Present</span></a>
                           
                               
                            <?php else: ?>
                          
                               <a href="<?php echo e(route('all.attendance',$item->id)); ?>"> <span type="button" class="btn btn-outline-danger"> Absent</span></a>
                            
                              
                            <?php endif; ?>
                           
                       
             </td>
                        <td><?php echo e($item->phone); ?></td>
                        <td><?php echo e($item->address); ?></td>
                       
                        <td> <img src="<?php echo e(asset('marketerImages/' . $item->image)); ?>" alt="<?php echo e($item->image); ?>"></td>


                        <td><a href="<?php echo e(route('edit.all.marketer',$item->id)); ?>"><button class="btn btn-success">Edit</button></a>
                            <a href="<?php echo e(route('delete.marketer',$item->id)); ?>"><button class="btn btn-warning">delete</button></a>
                            <a href="<?php echo e(route('view.data',$item->id)); ?>"><button class="btn btn-primary">View</button></a>
                           
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    
                </tbody>
            </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tracking-Api\trackingApi\resources\views/dashboard/all_marketer.blade.php ENDPATH**/ ?>