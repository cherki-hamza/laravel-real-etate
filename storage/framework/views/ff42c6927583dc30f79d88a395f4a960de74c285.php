<?php $__env->startSection('title'); ?>
<?php echo e(__('dashboard.Add_New_City')); ?>

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
                <span class="text-primary"><?php echo e(__('dashboard.Add_New_City')); ?> : </span>
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
                        <?php echo e(__('dashboard.Add_New_City')); ?>

                      </h3>
                  </div>
                  <div class="box-body">
                      <form action="<?php echo e(route('cities.store')); ?>" method="POST" enctype="multipart/form-data">
                          <?php echo csrf_field(); ?>

                          <div class="form-group my-5">
                              <label for="en_city"><?php echo e(__('dashboard.English_Title')); ?> :</label>
                              <input type="text" class="form-control" id="en_city" name="en_city">
                          </div>

                          <div class="form-group my-5">
                            <label for="fr_city"><?php echo e(__('dashboard.French_Title')); ?>  :</label>
                            <input type="text" class="form-control" id="fr_city" name="fr_city">
                        </div>

                        <div class="form-group my-5">
                            <label for="es_city"><?php echo e(__('dashboard.Spain_Title')); ?> :</label>
                            <input type="text" class="form-control" id="es_city" name="es_city">
                        </div>

                        <div class="form-group my-5">
                            <label for="ar_city"><?php echo e(__('dashboard.Arabic_Title')); ?> :</label>
                            <input dir="rtl" type="text" class="form-control" id="ar_city" name="ar_city">
                        </div>



                          <div class="form-group my-5">

                              

                              <div class="form-group">
                                <label class="control-label"><?php echo e(__('dashboard.Select_Image_Upload_File')); ?></label>
                                <div class="preview-zone hidden">
                                  <div class="box box-solid">
                                    <div class="box-header with-border">
                                      <div><b><?php echo e(__('dashboard.Preview')); ?></b></div>
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
                              <input type="submit" class="btn btn-success btn-block" value="<?php echo e(__('dashboard.Add_New_City')); ?>">
                          </div>
                      </form>
                </div>

                 </div>
              </div>
              <!-- end div 2 col-md-6 -->

              <!-- start div 2 col-md-6 -->
                <div class="col-md-6">
                        <div class="box box-primary">
                        <h2 class="text-success"> <?php echo e(__('dashboard.Show_All_Cities')); ?>:</h2>
                        <div class="box-body table-responsive">
                        <table <?php echo e((LaravelLocalization::getCurrentLocale() ==='ar')?'dir=rtl':''); ?> class="table table-bordered table-hover">
                            <thead>
                                <tr class="bg-success">
                                    <th>#<?php echo e(__('dashboard.Id')); ?></th>
                                    <th><?php echo e(__('dashboard.City_Image')); ?></th>
                                    <th><?php echo e(__('dashboard.English_Title')); ?></th>
                                    <th><?php echo e(__('dashboard.French_Title')); ?></th>
                                    <th><?php echo e(__('dashboard.Spain_Title')); ?></th>
                                    <th><?php echo e(__('dashboard.Arabic_Title')); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="">
                                    <td><?php echo e($city->id); ?></td>
                                    <td>
                                        <img style="width: 50px;height: 50px;border-radius: 100%" src="<?php echo e(asset($city->photo())); ?>" alt="<?php echo e($city->en_city); ?>">
                                    </td>
                                    <td><?php echo e($city->en_city); ?></td>
                                    <td><?php echo e($city->fr_city); ?></td>
                                    <td><?php echo e($city->es_city); ?></td>
                                    <td><?php echo e($city->ar_city); ?></td>
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


<?php $__env->stopSection(); ?>




<?php echo $__env->make('backend.master.app-dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/cherki-RealEstate/resources/views/backend/dashboard/real-estate/cities/create.blade.php ENDPATH**/ ?>