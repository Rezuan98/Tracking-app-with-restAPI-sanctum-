<?php $__env->startSection('title','Admin-FrelanceIT'); ?>
<?php $__env->startSection('body'); ?>
<?php echo $__env->make('dashboard.organs.welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('dashboard.organs.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tracking-Api\trackingApi\resources\views/dashboard/index.blade.php ENDPATH**/ ?>