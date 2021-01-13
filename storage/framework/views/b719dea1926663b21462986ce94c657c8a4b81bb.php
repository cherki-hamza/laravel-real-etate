<?php if($message = Session::get('success')): ?>
<div class="my-2 alert alert-success">

    <strong><?php echo e($message); ?></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<?php elseif($message = Session::get('danger')): ?>
<div class="my-2 alert alert-danger">
    <strong><?php echo e($message); ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php elseif($message = Session::get('warning')): ?>
<div class="my-2 alert alert-warning">
    <strong><?php echo e($message); ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php elseif($message = Session::get('info')): ?>
<div class="my-2 alert alert-info">
    <strong><?php echo e($message); ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php elseif($message = Session::get('darck')): ?>
<div class="my-2 alert alert-darck">
    <strong><?php echo e($message); ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>
<?php /**PATH /var/www/html/cherki-RealEstate/resources/views/backend/alert/alert.blade.php ENDPATH**/ ?>