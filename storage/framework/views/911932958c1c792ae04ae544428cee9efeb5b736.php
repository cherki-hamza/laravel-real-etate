<?php $__env->startSection('title'); ?>
<?php echo e(__('dashboard.ALL_CONTACTS')); ?>

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
    <?php if(LaravelLocalization::getCurrentLocale() ==='ar'): ?>
       <?php echo $__env->make('backend.inc.ar-aside-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('backend.inc.aside-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <!-- End Left side column. contains the logo and sidebar -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header my-3">
              <!-- start alert -->
              <span>    <?php echo $__env->make('backend.alert.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> </span>
              <!-- end alert -->
            <div class="row">
                <div class="col-md-6">
                    <h1>
                        <span class="text-primary"><?php echo e(__('dashboard.ALL_CONTACTS')); ?> : </span>
                    </h1>
            </div>

        </section>

        <!-- Main content -->
        <section class="content">
            <!-- start row -->
            <div class="row">

              <!-- start div 2 col-md-6 -->
              <div class="col-md-12">
                <div class="box box-primary">

                <h2 class="text-success"><?php echo e(__('dashboard.SHOW_CONTACT')); ?></h2>
                <div class="box-body align-content-center">

                    <div class="col-md-10">
                        <div class="box d-flex box-primary">
                        <div class="box-body box-profile">
                            <div class="bg-warning text-danger float-right">
                                <span class="float-right d-flex">#ID <small class="text-danger" style="margin-left: 4px"><?php echo e($contact->id); ?></small></span>
                            </div>
                            <img class="profile-user-img img-responsive img-circle" src="<?php echo e($contact->getGravatar()); ?>" alt="<?php echo e($contact->name); ?>">

                            <ul class="list-group ">
                                <li class="list-group-item">
                                <b class="text-success">Email :</b> <p class="text-primary" style="margin-left: 5px;"><?php echo e($contact->email); ?></p>
                                </li>
                                <li class="list-group-item">
                                    <b class="text-success">Télephone :</b> <p class="text-primary" style="margin-left: 5px;"><?php echo e($contact->tel); ?></p>
                                    </li>
                                <li class="list-group-item">
                                <b class="text-success">Subject :</b> <p class="text-primary" style="margin-left: 5px;"><?php echo e($contact->subject); ?></p>
                                </li>
                                <li class="list-group-item">
                                <b class="text-success">Message :</b> <p class="text-primary" style="margin-left: 5px;"><?php echo e($contact->message); ?></p>
                                </li>

                            </ul>


                        </div>

                        </div>
                     </div>

                </div>
                  </div>
              </div>
              <!-- end div 2 col-md-6 -->
            </div>
        </section>
    </div>
    <!-- end row  -->
    <!-- /.content-wrapper -->

 <?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>


<?php $__env->stopSection(); ?>




<?php echo $__env->make('backend.master.app-dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/cherki-RealEstate/resources/views/backend/dashboard/real-estate/contacts/show.blade.php ENDPATH**/ ?>