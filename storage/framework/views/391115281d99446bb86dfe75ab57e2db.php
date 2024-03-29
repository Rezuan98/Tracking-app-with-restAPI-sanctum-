<?php $__env->startSection('title','AddMarketer'); ?>
<?php $__env->startSection('body'); ?>
<h3>Add Marketer</h5>
    <br>
    <a href="<?php echo e(route('all.marketer')); ?>"><button class="btn btn-success">View All Marketer</button></a>
    <br> <br>
<div class="card">
    
    <div class="card-body">

        
        
        <form action="<?php echo e(route('add.marketer.data')); ?>" method="post" enctype="multipart/form-data">

            <?php echo csrf_field(); ?>
    

            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Marketer Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputText1" placeholder="Enter Name">
            </div>
        
            <div class="mb-3">
                <label for="exampleInputEmail3" class="form-label">Marketer Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail3"  placeholder="Enter Email">
            </div>
            
        
            <div class="mb-3">
                <label for="exampleInputNumber1" class="form-label">Phone</label>
                <input type="phone" name="phone" class="form-control" id="exampleInputNumber1" >
            </div>
        
            <div class="mb-3">
                <label for="exampleInputPassword3" class="form-label">NID</label>
                <input type="text" name="nid" class="form-control" id="exampleInputPassword3" placeholder="Enter Password">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword3" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword3"  placeholder="Enter Password">
            </div>
        
            <div class="mb-3">
                <label for="exampleInputDisabled1" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" id="exampleInputDisabled1"  >
            </div>
        
           
        
            
        
            
        
            
           
           
        
            <div class="mb-3">
                <label class="form-label" for="formFile">Upload a Photo</label>
                <input name="photo" class="form-control" type="file" id="formFile">
            </div>
        
            <button class="btn btn-primary" type="submit">Add</button>
        </form>

    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tracking-Api\trackingApi\resources\views/dashboard/add_marketer.blade.php ENDPATH**/ ?>