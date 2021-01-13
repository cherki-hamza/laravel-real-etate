<?php $__env->startSection('title' , 'All Profiles'); ?>

<?php $__env->startSection('style'); ?>
<style>

</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="wrapper">

    <!-- Start Main Header -->
       <?php echo $__env->make('backend.inc.top-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Main Header -->

    <!-- Start Left side column. contains the logo and sidebar -->
    <?php if(LaravelLocalization::getCurrentLocale() ==='ar'): ?>
       <?php echo $__env->make('backend.inc.ar-aside-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('backend.inc.aside-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <!-- End Left side column. contains the logo and sidebar -->


    <!-- Content Wrapper. Contains page content -->

          <?php echo $__env->make('backend.inc.content-dashboard-profiles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!-- /.content-wrapper -->

 <?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
 <script src="<?php echo e(asset('backend/backend-assets/en/js/tinymce/js/tinymce/tinymce.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/backend-assets/en/js/tinymce/js/tinymce/jquery.tinymce.min.js')); ?>"></script>
 <script>
    $(function(){
       $('textarea.tinymce').tinymce({

            <?php if(LaravelLocalization::getCurrentLocale() ==='ar'): ?>
               language: 'ar',
               directionality: 'rtl',
            <?php elseif(LaravelLocalization::getCurrentLocale() ==='fr'): ?>
               language: 'fr',
               directionality: 'ltr',
             <?php endif; ?>

          height : 600,
          plugins:[
             'advlist autolink lists link image charmap print preview hr anchor pagebreak',
             'searchreplace wordcount visualblocks visualchars code fullscreen',
             'inserdatetime media nonbreaking save table contextmenu directionality',
             'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
          ],
          toolbar1:'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media',
          file_picker_callback (callback, value, meta) {
        let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth
        let y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight

        tinymce.activeEditor.windowManager.openUrl({
          url : '/file-manager/tinymce5',
          title : 'Laravel File manager',
          width : x * 0.8,
          height : y * 0.8,
          onMessage: (api, message) => {
            callback(message.content, { text: message.text })
          }
        })
      }

       });
    });
 </script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('backend.master.app-dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/cherki-RealEstate/resources/views/backend/dashboard/users-profiles/dashboard-profiles.blade.php ENDPATH**/ ?>