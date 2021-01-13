<?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php if(request()->url() === route('site.home') ): ?>
  <?php echo $__env->make('frontend.layouts.menu-home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
  <?php echo $__env->make('frontend.layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>


<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /var/www/html/cherki-RealEstate/resources/views/frontend/master/app-site.blade.php ENDPATH**/ ?>