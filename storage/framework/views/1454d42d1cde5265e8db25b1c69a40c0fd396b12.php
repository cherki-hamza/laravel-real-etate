<?php $__env->startSection('title' , 'Add New City'); ?>

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
                <span class="text-primary">Create New City : </span>
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
                         Add New City
                      </h3>
                  </div>
                  <div class="box-body">
                      <form action="<?php echo e(route('cities.store')); ?>" method="POST" enctype="multipart/form-data">
                          <?php echo csrf_field(); ?>

                          <div class="form-group my-5">
                              <label for="en_city">English City Title :</label>
                              <input type="text" class="form-control" id="en_city" name="en_city">
                          </div>

                          <div class="form-group my-5">
                            <label for="fr_city">French City Title :</label>
                            <input type="text" class="form-control" id="fr_city" name="fr_city">
                        </div>

                        <div class="form-group my-5">
                            <label for="es_city">Spain City Title :</label>
                            <input type="text" class="form-control" id="es_city" name="es_city">
                        </div>

                        <div class="form-group my-5">
                            <label for="ar_city">Arabic City Title :</label>
                            <input dir="rtl" type="text" class="form-control" id="ar_city" name="ar_city">
                        </div>



                          <div class="form-group my-5">

                              

                              <div class="form-group">
                                <label class="control-label">Select Image Upload File</label>
                                <div class="preview-zone hidden">
                                  <div class="box box-solid">
                                    <div class="box-header with-border">
                                      <div><b>Preview</b></div>
                                      <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-danger btn-xs remove-preview">
                                          <i class="fa fa-times"></i> Reset This Form
                                        </button>
                                      </div>
                                    </div>
                                    <div class="box-body"></div>
                                  </div>
                                </div>
                                <div class="dropzone-wrapper">
                                  <div class="dropzone-desc">
                                    <i class="glyphicon glyphicon-download-alt"></i>
                                    <p>Choose an image file or drag it here.</p>
                                  </div>
                                  <input type="file" id="picture" name="picture" class="dropzone">
                                </div>
                              </div>


                          </div>

                          <div class="form-group my-5">
                              <input type="submit" class="btn btn-success btn-block" value="Add New City">
                          </div>
                      </form>
                </div>

                 </div>
              </div>
              <!-- end div 2 col-md-6 -->

              <!-- start div 2 col-md-6 -->
                <div class="col-md-6">
                        <div class="box box-primary">
                        <h2 class="text-success">all Cities</h2>
                        <div class="box-body">
                        <table class="table table-bordered table-hover responsive">
                            <thead>
                                <tr class="bg-success">
                                <th>#Id</th>
                                <th>City Image</th>
                                <th>English City Title</th>
                                <th>Fransh City Title</th>
                                <th>Spain City Title</th>
                                <th>Arabic City Title</th>
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




<?php echo $__env->make('backend.master.app-dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel-2021/cherki-RealEstate/resources/views/backend/dashboard/real-estate/cities/create.blade.php ENDPATH**/ ?>