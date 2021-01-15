<?php $__env->startSection('title'); ?>
<?php echo e(__('dashboard.Add_New_Category')); ?>

<?php $__env->stopSection(); ?>

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
       <?php echo $__env->make('backend.inc.aside-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Left side column. contains the logo and sidebar -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span class="text-primary"> <?php echo e(__('dashboard.Add_New_Category')); ?> : </span>
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <!-- start row -->
            <div class="row">

               <!-- start row 1 col-md-6 -->
               <div class="col-md-6">

                <div class="box box-primary">
                  <div class="box-header">

                      <!-- start alert -->
                   <span>    <?php echo $__env->make('backend.alert.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> </span>
                      <!-- end alert -->

                      <h3 class="text-primary">
                        <?php $__env->startSection('title'); ?>
                        <?php echo e(__('dashboard.Add_New_Category')); ?>

                        <?php $__env->stopSection(); ?>
                      </h3>
                  </div>
                  <div class="box-body">
                      <form action="<?php echo e(route('categories.store')); ?>" method="POST" enctype="multipart/form-data">
                          <?php echo csrf_field(); ?>

                          <div class="form-group my-5">
                              <label for="en_title"> <?php echo e(__('dashboard.English_Title')); ?> :</label>
                              <input type="text" class="form-control" id="en_title" name="en_title">
                          </div>

                          <div class="form-group my-5">
                            <label for="fr_title"> <?php echo e(__('dashboard.French_Title')); ?> :</label>
                            <input type="text" class="form-control" id="fr_title" name="fr_title">
                        </div>

                        <div class="form-group my-5">
                            <label for="es_title"> <?php echo e(__('dashboard.Spain_Title')); ?> :</label>
                            <input type="text" class="form-control" id="es_title" name="es_title">
                        </div>

                        <div class="form-group my-5">
                            <label for="ar_title"> <?php echo e(__('dashboard.Arabic_Title')); ?> :</label>
                            <input dir="rtl" type="text" class="form-control" id="ar_title" name="ar_title">
                        </div>



                          <div class="form-group my-5">

                              

                              <div class="form-group">
                                <label class="control-label"><?php echo e(__('dashboard.Select_Image_Upload_File')); ?></label>
                                <div class="preview-zone hidden">
                                  <div class="box box-solid">
                                    <div class="box-header with-border">
                                      <div><b>Preview</b></div>
                                      <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-danger btn-xs remove-preview">
                                          <i class="fa fa-times"></i> <?php echo e(__('dashboard.Reset_This_Form')); ?>

                                        </button>
                                      </div>
                                    </div>
                                    <div class="box-body"></div>
                                  </div>
                                </div>
                                <div class="dropzone-wrapper">
                                  <div class="dropzone-desc">
                                    <i class="glyphicon glyphicon-download-alt"></i>
                                    <p><?php echo e(__('dashboard.Choose_an_image_file_or_drag_it_here')); ?>.</p>
                                  </div>
                                  <input type="file" id="picture" name="picture" class="dropzone">
                                </div>
                              </div>


                          </div>

                          <div class="form-group my-5">
                              <input type="submit" class="btn btn-success btn-block" value="<?php echo e(__('dashboard.Add_New_Category')); ?>">
                          </div>
                      </form>
                </div>

                 </div>
              </div>
              <!-- end div 2 col-md-6 -->

              <!-- start div 2 col-md-6 -->
                <div class="col-md-6">
                        <div class="box box-primary">
                        <h2 class="text-success"><?php echo e(__('dashboard.Show_All_Categories')); ?></h2>
                        <div class="box-body table-responsive">
                        <table <?php echo e((LaravelLocalization::getCurrentLocale() ==='ar')?'dir=rtl':''); ?> class="table table-bordered table-hover">
                            <thead>
                                <tr class="bg-success">
                                <th>#<?php echo e(__('dashboard.Id')); ?></th>
                                <th><?php echo e(__('dashboard.Category_Image')); ?></th>
                                <th><?php echo e(__('dashboard.English_Title')); ?></th>
                                <th><?php echo e(__('dashboard.French_Title')); ?></th>
                                <th><?php echo e(__('dashboard.Spain_Title')); ?></th>
                                <th><?php echo e(__('dashboard.Arabic_Title')); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="">
                                    <td><?php echo e($cat->id); ?></td>
                                    <td>
                                        <img style="width: 50px;height: 50px;border-radius: 100%" src="<?php echo e(asset($cat->photo())); ?>" alt="<?php echo e($cat->en_title); ?>">
                                    </td>
                                    <td><?php echo e($cat->en_title); ?></td>
                                    <td><?php echo e($cat->fr_title); ?></td>
                                    <td><?php echo e($cat->es_title); ?></td>
                                    <td><?php echo e($cat->ar_title); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    </div>
                 </div>
        <!-- end div 2 col-md-6 -->

            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->

 <?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>

<script>

</script>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('backend.master.app-dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/cherki-RealEstate/resources/views/backend/dashboard/real-estate/categories/create.blade.php ENDPATH**/ ?>