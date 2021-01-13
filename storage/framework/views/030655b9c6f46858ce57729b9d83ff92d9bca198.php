<?php $__env->startSection('title' , 'show Listing'); ?>

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
                        <span class="text-primary">show Listing : </span>
                    </h1>
                </div>
                <div class="col-md-6 text-right">
               <a href="<?php echo e(route('listings.edit' , $listing->id)); ?>"> <span class="btn btn-success"> Edit Listing</span></a>
               </div>
            </div>

        </section>

        <!-- Main content -->
        <section class="content">
            <!-- start row -->
            <div class="row">

               <!-- start row 1 col-md-12 -->
               <div class="col-md-12">

                <div class="box">
                    <span>    <?php echo $__env->make('backend.alert.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> </span>
                 

                     <div class="row">

                        <!-- start 1 col-md-6 -->
                        <div class="col-md-6">
                            <div class="box-body">
                             <div class="box box-primary">
                                 <div class="box-header with-border">
                                   <h3>Listing Title :</h3>
                                   <h2 class="box-title text-danger"><?php echo $listing->handel_listing_title(); ?></h2>
                                   <h4><i class="fa fa-info margin-r-5"></i>Réference :</h4>
                                   <p><span class="text-danger">Réf : </span> <?php echo e($listing->ref); ?></p>
                                 </div>
                                 <!-- /.box-header -->
                                 <div class="box-body">
                                   <strong><i class="fa fa-book margin-r-5"></i> Description :</strong>

                                   <p class="text-muted">
                                    <?php echo $listing->handel_listing_Desc(); ?>

                                   </p>

                                   <hr>

                                   <strong><i class="fa fa-map-marker margin-r-5"></i> Location :</strong>

                                   <p class="text-muted">City : <?php echo e($listing->handel_listing_city()); ?></p>
                                   <p class="text-muted">Area : <?php echo e($listing->handel_listing_area()); ?></p>

                                   <strong><i class="fa fa-info margin-r-5"></i>Listing Type , Price , Measure :</strong>

                                   <p class="text-muted">Type : <?php echo e($listing->type_listing); ?></p>
                                   <p class="text-muted">Price : <?php echo e($listing->handel_Price()); ?></p>
                                   <p class="text-muted">Space : <?php echo e($listing->space); ?> : <strong><?php echo e($listing->measure); ?></strong></p>


                                   <hr>

                                   <strong><i class="fa fa-pencil margin-r-5"></i> Listing Informations :</strong>

                                   <p>
                                     <span class="label label-danger">Type : <?php echo e($listing->type_listing); ?></span>
                                     <span class="label label-success">Price : <?php echo e($listing->handel_Price()); ?></span>
                                     <span class="label label-info">Space : <?php echo e($listing->space); ?> : <strong><?php echo e($listing->measure); ?></strong></span>
                                     <span class="label label-warning">Price : <?php echo e($listing->price); ?></span>
                                   </p>

                                   <hr>

                                   <strong><i class="fa fa-file-text-o margin-r-5"></i>More Informations :</strong>

                                   <p><?php echo $listing->handel_listing_More_info(); ?></p>
                                 </div>
                                 <!-- /.box-body -->
                               </div>
                            </div>
                         </div>
                         <!--  end 1 col-md-6 -->

                         <!-- start 2 col-md-6 -->
                         <div class="col-md-6">
                             <!-- start box 1 -->
                             <div style="margin-top: 6px;" class="box box-primary">
                               
                               <!-- /.box-header -->
                               <!-- start box -->
                               <div class="box-body">

                                 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                   <ol class="carousel-indicators">
                                     <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                     <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                     <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                   </ol>

                                   <div class="carousel-inner">

                                     <?php $__currentLoopData = json_decode($listing->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <div class="item <?php echo e(($loop->first)? 'active':''); ?>">

                                            <img style="width: 900px;height: 500px;"  src="<?php echo e(asset('public/'.$img)); ?>" alt="listings">

                                       <div class="carousel-caption">
                                         <span class="text-whit"><?php echo $listing['en_title']; ?></span>
                                       </div>
                                     </div>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                   </div>

                                   <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                     <span class="fa fa-angle-left"></span>
                                   </a>
                                   <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                     <span class="fa fa-angle-right"></span>
                                   </a>

                                 </div>
                               </div>
                               <!-- /.box-body -->
                             </div>
                             <!-- /.box -->
                             <!-- end box 1 -->

                             <!-- start box 2 -->
                             <div style="margin-top: 6px;" class="box box-primary">
                                 <div class="box-header with-border">
                                    <strong><i class="fa fa-map-marker margin-r-5"></i>Map Location :</strong>
                                </div>
                                <!-- /.box-header -->
                                <!-- start box -->
                                    <div class="box-body text-center">
                                      <?php echo $listing->map; ?>

                                    </div>
                                </div>
                                <!-- /.box-body -->
                              </div>
                             <!-- start box 2 -->

                           </div>
                         <!-- end 2 col-md-6 -->


                     </div>


                 </div>
              </div>
              <!-- end div 1 col-md-12 -->

            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->

 <?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>


<?php $__env->stopSection(); ?>




<?php echo $__env->make('backend.master.app-dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/cherki-RealEstate/resources/views/backend/dashboard/real-estate/listings/show.blade.php ENDPATH**/ ?>