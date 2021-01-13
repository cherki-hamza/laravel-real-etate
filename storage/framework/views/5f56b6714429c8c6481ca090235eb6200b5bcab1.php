<?php $__env->startSection('title' , 'All Listings'); ?>

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
                <span class="text-primary">All Listings : </span>
            </h1>
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
                <h2 class="text-success">all Listings</h2>
                <div class="box-body">
                <table <?php echo e((LaravelLocalization::getCurrentLocale() ==='ar')?'dir=rtl':''); ?> class="table table-bordered table-hover table-responsive">
                    <thead>
                        <tr class="bg-success">
                        <th>#Id</th>
                        <th>#Ref</th>
                        <th>Listing Title</th>
                       
                        <th>Listing category</th>
                        <th>Listing area</th>
                        <th>Listing images</th>
                        <th class="bg-info">Show</th>
                        <th class="bg-warning">Edit</th>
                        <th class="bg-danger">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($listing->id); ?></td>
                            <td><?php echo e($listing->ref); ?></td>
                            <td><?php echo $listing->handel_listing_title(); ?></td>
                            
                            <td><?php echo e($listing->category->en_title); ?></td>
                            <td><?php echo e($listing->area->en_area); ?></td>

                            <td>
                                <div class="row">
                                    <?php $__currentLoopData = json_decode($listing->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <span> <img style="width: 40px;height: 50px;" src="<?php echo e(asset($img)); ?>" alt=""> </span>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>

                            </td>
                            <td>
                                <a href="<?php echo e(route('listings.show', $listing->id)); ?>"><span class="btn btn-primary"><i style="margin-right: 5px;" class="fa fa-eye"></i>Show</span></a>
                            </td>

                            <td>
                                <a href="<?php echo e(route('listings.edit', $listing->id)); ?>"><span class="btn btn-success"><i style="margin-right: 5px;" class="fa fa-eye"></i>Edit</span></a>
                            </td>

                            <td>
                                <form action="<?php echo e(route('listings.destroy' , $listing->id)); ?>" method="post">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('DELETE')); ?>

                                <button type="submit" class="btn btn-danger"><i style="margin-right: 5px;" class="fa fa-trash"></i> Delete</button>
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




<?php echo $__env->make('backend.master.app-dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel-2021/cherki-RealEstate/resources/views/backend/dashboard/real-estate/listings/index.blade.php ENDPATH**/ ?>