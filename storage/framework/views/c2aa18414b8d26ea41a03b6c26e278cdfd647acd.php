<?php $__env->startComponent('mail::message'); ?>

<div class="card card-primary my-5">
   <div class="card-header">
       <h2 class="card-title text-success">hello from amsimmo.com</h2>
   </div>
   <div class="card-body">
      <p class="card-text">Name : <?php echo e($data['name']); ?></p>
      <p class="card-text">Email : <?php echo e($data['email']); ?></p>
      <p class="card-text">Mobile : <?php echo e($data['tel']); ?></p>
      <p class="card-text">Subject : <?php echo e($data['subject']); ?></p>
      <p class="card-text">Message : <?php echo e($data['message']); ?></p>
   </div>
</div>



<?php $__env->startComponent('mail::button', ['url' => 'mail.amsimmo.com']); ?>
Replay to : <?php echo e($data['name']); ?>

<?php if (isset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e)): ?>
<?php $component = $__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e; ?>
<?php unset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH /var/www/html/cherki-RealEstate/resources/views/frontend/emails/contactMail.blade.php ENDPATH**/ ?>