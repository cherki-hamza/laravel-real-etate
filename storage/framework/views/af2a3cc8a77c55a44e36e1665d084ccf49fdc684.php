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
                <h2 class="text-success"><?php echo e(__('dashboard.ALL_CONTACTS')); ?></h2>
                <div class="box-body">
                <table <?php echo e((LaravelLocalization::getCurrentLocale() ==='ar')?'dir=rtl':''); ?> class="table table-bordered table-hover responsive">
                    <thead>
                        <tr class="bg-success">
                        <th>#Id</th>
                        <th><?php echo e(__('dashboard.User')); ?> <?php echo e(' '); ?><?php echo e(__('dashboard.Image')); ?></th>
                        <th><?php echo e(__('dashboard.Name')); ?></th>
                        <th><?php echo e(__('dashboard.email')); ?></th>
                        <th><?php echo e(__('dashboard.Mobile')); ?></th>
                        <th><?php echo e(__('dashboard.Subject')); ?></th>
                        <th><?php echo e(__('dashboard.Message')); ?></th>
                        <th class="bg-success"><?php echo e(__('dashboard.Show')); ?></th>
                        <th class="bg-danger"><?php echo e(__('dashboard.Delete')); ?></th>
                    </tr>
                    </thead>
                    <tbody>

                        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($contact->id); ?></td>
                                <td>
                                    <img style="width: 50px;height: 50px;border-radius: 100%" src="<?php echo e(asset($contact->getGravatar())); ?>" alt="<?php echo e($contact->name); ?>">
                                </td>
                                <td><?php echo e($contact->name); ?></td>
                                <td><?php echo e($contact->email); ?></td>
                                <td><?php echo e($contact->tel); ?></td>
                                <td><?php echo e($contact->subject); ?></td>
                                <td><?php echo e($contact->message); ?></td>
                                <td class="text-center"><a href="<?php echo e(route('contact.show',$contact->id)); ?>"><span class="btn btn-primary"><i style="margin-right: 4px;" class="fa fa-eye"></i>Show</span></a></td>
                                <td class="text-center"> <form action="<?php echo e(route('contact.destroy' , $contact->id)); ?>" method="post">
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




<?php echo $__env->make('backend.master.app-dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/cherki-RealEstate/resources/views/backend/dashboard/real-estate/contacts/index.blade.php ENDPATH**/ ?>