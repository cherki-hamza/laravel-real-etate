   <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            Anything you want
        </div>
        <!-- Default to the left -->
        <div class="text-center">
          <strong><?php echo e(__('dashboard.Copyright')); ?> &copy; 2020 <a href="https://cherkihamza.com">cherkihamza.com</a>.</strong> <?php echo e(__('dashboard.COPY')); ?>

        </div>
    </footer>


</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo e(asset('backend/backend-assets/en/js/jquery-2.2.3.min.js')); ?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo e(asset('backend/backend-assets/en/js/bootstrap.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('backend/backend-assets/en/js/app.min.js')); ?>"></script>

<script src="<?php echo e(asset('js/upload.js')); ?>"></script>
<script src="<?php echo e(asset('js/trix.js')); ?>"></script>
<script src="<?php echo e(asset('js/atachements.js')); ?>"></script>
<script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>


<script src="<?php echo e(asset('vendor/file-manager/js/file-manager.js')); ?>"></script>

<?php echo $__env->yieldContent('script'); ?>

<script>
    $('.alert').alert()
</script>

</body>
</html>
<?php /**PATH /var/www/html/laravel-2021/cherki-RealEstate/resources/views/backend/layouts/footer.blade.php ENDPATH**/ ?>