
<?php $__env->startSection('title','Edit Markter Profile'); ?>
<?php $__env->startSection('body'); ?>
<h3>Edit Marketer Information:</h5>
    <div class="card">
        
        <div class="card-body">
            
            <form action="<?php echo e(route('update.marketer',$marketerData->id)); ?>" method="post" enctype="multipart/form-data">
    
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id" value="<?php echo e($marketerData->id); ?>">
    
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Marketer Name</label>
                    <input type="text" name="name" value="<?php echo e($marketerData->name); ?>" class="form-control" id="exampleInputText1">
                </div>
            
                <div class="mb-3">
                    <label for="exampleInputEmail3" class="form-label">Marketer Email</label>
                    <input type="email" name="email" value="<?php echo e($marketerData->email); ?>" class="form-control" id="exampleInputEmail3"  placeholder="Enter Email">
                </div>
               
            
                <div class="mb-3">
                    <label for="exampleInputNumber1" class="form-label">Phone</label>
                    <input type="phone" value="<?php echo e($marketerData->phone); ?>" name="phone" class="form-control" id="exampleInputNumber1" >
                </div>
            
                <div class="mb-3">
                    <label for="exampleInputPassword3" class="form-label">NID</label>
                    <input type="text" value="<?php echo e($marketerData->nid); ?>" name="nid" class="form-control" id="exampleInputPassword3"  placeholder="Enter Password">
                </div>
               
            
                <div class="mb-3">
                    <label for="exampleInputDisabled1" class="form-label">Address</label>
                    <input type="text" value="<?php echo e($marketerData->address); ?>" name="address" class="form-control" id="exampleInputDisabled1"  >
                </div>
            
               
            
                
            
                
            
                
               
               
            
                
            
                <button class="btn btn-primary" type="submit">update</button>
            </form>
    
        </div>
    </div>
    




<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tracking-Api\trackingApi\resources\views/dashboard/edit_all_marketer.blade.php ENDPATH**/ ?>