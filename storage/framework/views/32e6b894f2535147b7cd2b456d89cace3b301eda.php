<?php $__env->startSection('title' , 'All Cities'); ?>

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
            <div class="row">
                <div class="col-md-6">
                    <h1>
                        <span class="text-primary">All Cities : </span>
                    </h1>
                </div>
                <div class="col-md-6 text-right">
               <a href="<?php echo e(route('cities.create')); ?>"> <span class="btn btn-primary">Add New City</span></a>
            </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- start row -->
            <div class="row">

              <!-- start div 2 col-md-6 -->
              <div class="col-md-12">
                <div class="box box-primary">
                     <!-- start alert -->
                   <span>    <?php echo $__env->make('backend.alert.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> </span>
                   <!-- end alert -->
                <h2 class="text-success">all Cities</h2>
                <div class="box-body">
                <table <?php echo e((LaravelLocalization::getCurrentLocale() ==='ar')?'dir=rtl':''); ?> class="table table-bordered table-hover responsive">
                    <thead>
                        <tr class="bg-success">
                        <th>#Id</th>
                        <th>City Image</th>
                        <th>English City Title</th>
                        <th>Fransh City Title</th>
                        <th>Spain City Title</th>
                        <th>Arabic City Title</th>
                        <th class="bg-info">Edit</th>
                        <th class="bg-danger">Delete</th>
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


                            <td><a href="<?php echo e(route('cities.edit' , $city->id)); ?>">  <span class="btn btn-success"><i style="margin-right: 4px;" class="fa fa-edit "></i>Edit</span></a></td>

                            <td> <form action="<?php echo e(route('cities.destroy' , $city->id)); ?>" method="post">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('DELETE')); ?>

                                <button type="submit" class="btn btn-danger">   <i style="margin-right: 4px;" class="fa fa-trash"></i> Delete</button>
                            </form>
                            </td>



                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            </div>
         </div>
              <!-- end div 2 col-md-6 -->

        </section>
    </div>
    <!-- end row  -->
    <!-- /.content-wrapper -->

 <?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>


<?php $__env->stopSection(); ?>




<?php echo $__env->make('backend.master.app-dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/cherki-RealEstate/resources/views/backend/dashboard/real-estate/cities/index.blade.php ENDPATH**/ ?>