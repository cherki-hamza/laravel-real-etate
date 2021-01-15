<?php $__env->startSection('title'); ?>
  <?php echo e(__('dashboard.Show_All_Areas')); ?>

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

            <div class="row">
                <div class="col-md-6">
                    <h1>
                        <span class="text-primary"><?php echo e(__('dashboard.Show_All_Areas')); ?> : </span>
                    </h1>
                </div>
                <div class="col-md-6 <?php echo e((LaravelLocalization::getCurrentLocale() ==='ar')?'text-left':'text-right'); ?>">
               <a href="<?php echo e(route('areas.create')); ?>"> <span class="btn btn-primary"><?php echo e(__('dashboard.Add_New_Area')); ?></span></a>
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
                <h2 class="text-success"><?php echo e(__('dashboard.Show_All_Areas')); ?></h2>
                <div class="box-body table-responsive">
                <table <?php echo e((LaravelLocalization::getCurrentLocale() ==='ar')?'dir=rtl':''); ?> class="table table-bordered table-hover">
                    <thead>
                        <tr class="bg-success">
                        <th>#<?php echo e(__('dashboard.Id')); ?></th>
                        <th><?php echo e(__('dashboard.Area_Image')); ?></th>
                        <th><?php echo e(__('dashboard.City')); ?></th>
                        <th><?php echo e(__('dashboard.English_Title')); ?></th>
                        <th><?php echo e(__('dashboard.French_Title')); ?></th>
                        <th><?php echo e(__('dashboard.Spain_Title')); ?></th>
                        <th><?php echo e(__('dashboard.Arabic_Title')); ?></th>
                        <th class="bg-info"><?php echo e(__('dashboard.Edit')); ?></th>
                        <th class="bg-danger"><?php echo e(__('dashboard.Delete')); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="">
                            <td><?php echo e($area->id); ?></td>
                            <td>
                                <img style="width: 50px;height: 50px;border-radius: 100%" src="<?php echo e(asset($area->photo())); ?>" alt="<?php echo e($area->en_area); ?>">
                            </td>
                            <td><?php echo e($area->city->en_city); ?></td>
                            <td><?php echo e($area->en_area); ?></td>
                            <td><?php echo e($area->fr_area); ?></td>
                            <td><?php echo e($area->es_area); ?></td>
                            <td><?php echo e($area->ar_area); ?></td>


                            <td><a href="<?php echo e(route('areas.edit' , $area->id)); ?>">  <span class="btn btn-success"><i style="margin-right: 4px;" class="fa fa-edit "></i><?php echo e(__('dashboard.Edit')); ?></span></a></td>

                            <td> <form action="<?php echo e(route('areas.destroy' , $area->id)); ?>" method="post">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('DELETE')); ?>

                                <button type="submit" class="btn btn-danger">   <i style="margin-right: 4px;" class="fa fa-trash"></i> <?php echo e(__('dashboard.Delete')); ?></button>
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




<?php echo $__env->make('backend.master.app-dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/cherki-RealEstate/resources/views/backend/dashboard/real-estate/areas/index.blade.php ENDPATH**/ ?>