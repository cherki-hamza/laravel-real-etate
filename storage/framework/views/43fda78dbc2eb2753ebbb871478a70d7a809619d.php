<?php $__env->startSection('title','Home|dev'); ?>

<?php $__env->startSection('content'); ?>

 <div class="container">
     <h1 class="text-danger my-5"> <?php echo e(__('site.HOME_PAGE')); ?> </h1>
 </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master.app-site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel-2021/cherki-RealEstate/resources/views/frontend/site/index.blade.php ENDPATH**/ ?>