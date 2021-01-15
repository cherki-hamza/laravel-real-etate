<?php $__env->startSection('title'); ?>
  <?php echo e(__('dashboard.Update_Listing')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<style>
 .trix-button-group--file-tools { display: none !important; }
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
                <span class="text-primary"><?php echo e(__('dashboard.Update_Listing')); ?> : </span>
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <!-- start row -->
            <div class="row">

               <!-- start row 1 col-md-12 -->
               <div class="col-md-12">

                <div class="box box-primary">
                  <div class="box-header">

                      <!-- start alert -->
                   <span>    <?php echo $__env->make('backend.alert.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> </span>
                      <!-- end alert -->

                      <h3 class="text-primary">
                        <?php echo e(__('dashboard.Update_Listing')); ?>

                      </h3>
                  </div>
                  <div class="box-body">
                      <form action="<?php echo e(route('listings.update' , $listing->id)); ?>" method="POST" enctype="multipart/form-data">
                          <?php echo csrf_field(); ?>
                          <?php echo method_field('put'); ?>
                          <!-- start reference + email + mobile -->
                          <div class="row">
                            <div class="col-md-4">
                                <div class="form-group my-5">
                                    <label class="text-success" for="l_ref"><?php echo e(__('dashboard.REF')); ?> :</label>
                                    <strong><?php echo e(__('dashboard.Example')); ?> : <span class="text-danger"><?php echo e(__('dashboard.ex')); ?></span></strong>
                                    <input type="text" class="form-control" id="l_ref" name="l_ref" value="<?php echo e($listing->ref); ?>">

                                    <input type="hidden"  id="user_id" name="user_id" value="<?php echo e(Auth::user()->id); ?>">

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group my-5">
                                    <label class="text-success font-weight-bolder" for="l_email"><?php echo e(__('dashboard.email')); ?> :</label>
                                    <input type="text" class="form-control" id="l_email" name="l_email" value="<?php echo e((Auth::user()) ? Auth::user()->email : ''); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group my-5">
                                    <label class="text-success font-weight-bolder" for="l_tel"><?php echo e(__('dashboard.Mobile')); ?> :</label>
                                    <input type="text" class="form-control" id="l_tel" name="l_tel" value="<?php echo e((Auth::user()) ? Auth::user()->mobile : ''); ?>">
                                </div>
                            </div>
                          </div>
                          <!-- end reference + email + mobile -->

                           <!-- start map -->
                           <div class="row">
                            <div class="col-md-12">
                                <div class="form-group my-5">
                                    <label class="text-success font-weight-bolder" for="map"><?php echo e(__('dashboard.map')); ?>  :</label>
                                    <textarea class="form-control" id="map" name="map" cols="30" rows="5" ><?php echo e($listing->map); ?></textarea>
                                </div>
                            </div>
                          </div>
                          <!-- end map -->

                          <!-- start listing en_title and fr_title -->
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success font-weight-bolder" for="en_title"><?php echo e(__('dashboard.English_Title')); ?> :</label>
                                    
                                    <input id="en_title" type="hidden" name="en_title" value="<?php echo $listing->en_title; ?>" />
                                     <trix-editor  input="en_title"></trix-editor>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success font-weight-bolder" for="fr_title"><?php echo e(__('dashboard.French_Title')); ?> :</label>
                                    
                                    <input id="fr_title" type="hidden" name="fr_title" value="<?php echo $listing->fr_title; ?>" />
                                     <trix-editor input="fr_title"></trix-editor>
                                </div>
                            </div>
                          </div>
                          <!-- end start listing en_title and fr_title -->

                          <!-- start listing es_title and ar_title -->
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success font-weight-bolder" for="es_title"><?php echo e(__('dashboard.Spain_Title')); ?> :</label>
                                    
                                    <input id="es_title" type="hidden" name="es_title" value="<?php echo e($listing->es_title); ?>" />
                                     <trix-editor input="es_title"></trix-editor>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success font-weight-bolder" for="ar_title"><?php echo e(__('dashboard.Arabic_Title')); ?> :</label>
                                    
                                    <input id="ar_title" type="hidden" name="ar_title" value="<?php echo e($listing->ar_title); ?>" />
                                    <trix-editor  input="ar_title"></trix-editor>
                                </div>
                            </div>
                          </div>
                          <!-- end start listing es_title and ar_title -->

                          <!-- start listing Category and city and erea -->
                          <div class="row">

                            <div class="col-md-4">
                                <div class="form-group my-5">
                                    <label class="text-success" for="l_category"><?php echo e(__('dashboard.Select_Listing_Category')); ?> :</label>
                                    <select class="form-control" name="l_category" id="l_category">
                                        <option><?php echo e(__('dashboard.Select_Listing_Category')); ?></option>
                                        <option selected value="<?php echo e($listing->category->id); ?>"> <?php echo e($listing->category->en_title); ?> </option>
                                       <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($cat->id); ?>"> <?php echo e($cat->en_title); ?> </option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group my-5">
                                    <label class="text-success" for="l_city"><?php echo e(__('dashboard.Select_Listing_City')); ?> :</label>
                                    <select class="form-control" name="l_city" id="l_city">
                                        <option> select city </option>
                                        <option selected value="<?php echo e($listing->city->id); ?>"> <?php echo e($listing->city->en_city); ?> </option>
                                        <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo e($city->id); ?>"> <?php echo e($city->en_city); ?> </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group my-5">
                                    <label class="text-success" for="l_area"><?php echo e(__('dashboard.Select_Listing_Area')); ?> :</label>
                                    <select class="form-control" name="l_area" id="l_area">
                                        <option> select area </option>
                                        <option selected value="<?php echo e($listing->area->id); ?>"> <?php echo e($listing->area->en_area); ?> </option>
                                        <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo e($area->id); ?>"> <?php echo e($area->en_area); ?> </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                          </div>
                          <!-- end start listing Category and city and erea -->

                           <!-- start listing price and space -->
                           <div class="row">
                            <div class="col-md-3">
                                <div class="form-group my-5">
                                    <label class="text-success" for="l_type"><?php echo e(__('dashboard.Listing_Type')); ?> :</label>
                                    <select class="form-control" name="l_type" id="l_type">
                                      <option>Selet Type :</option>
                                      <option selected value="<?php echo e($listing->type_listing); ?>"><?php echo e($listing->type_listing); ?></option>
                                      <option value="Buy">Buy</option>
                                      <option value="Rent">Rent</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group my-5">
                                    <label class="text-success" for="l_price"><?php echo e(__('dashboard.Listing_Price')); ?> :</label>
                                    <input type="text" class="form-control" id="l_price" name="l_price" value="<?php echo e($listing->price); ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group my-5">
                                    <label class="text-success" for="l_space"><?php echo e(__('dashboard.Listing_Space')); ?> :</label>
                                    <input type="text" class="form-control" id="l_space" name="l_space" value="<?php echo e($listing->space); ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group my-5">
                                    <label class="text-success" for="measure"><?php echo e(__('dashboard.Lising_Space_Measure')); ?> :</label>
                                    <select class="form-control" name="measure" id="measure">
                                        <option><span class="text-success"><?php echo e(__('dashboard.mesure')); ?></span></option>
                                        <option selected value="<?php echo e($listing->measure); ?>"><?php echo e($listing->measure); ?></option>
                                       <option value="m²"> m² </option>
                                       <option value="Hectare"> Hectare </option>

                                     </select>
                                </div>
                            </div>
                          </div>
                          <!-- end start listing price and space -->
                          <hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">


                           <!-- start listing nombre of room + living room + bathrooms + bedrooms -->
                           <div class="row">
                            <div class="col-md-3">
                                <div class="form-group my-5">
                                    <label class="text-success" for="nbr_rooms"><?php echo e(__('dashboard.Number_of_Rooms ')); ?> :</label>
                                    <input type="text" class="form-control" id="nbr_rooms" name="nbr_rooms" value="<?php echo e($listing->nbr_rooms); ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group my-5">
                                    <label class="text-success" for="nbr_living_romm"><?php echo e(__('dashboard.Number_of_Living_Room ')); ?>:</label>
                                    <input type="text" class="form-control" id="nbr_living_romm" name="nbr_living_romm" value="<?php echo e($listing->nbr_living_romm); ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group my-5">
                                    <label class="text-success" for="nbr_bathroom"><?php echo e(__('dashboard.Number_of_Bathrooms ')); ?> :</label>
                                    <input type="text" class="form-control" id="nbr_bathroom" name="nbr_bathroom" value="<?php echo e($listing->nbr_bathroom); ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group my-5">
                                    <label class="text-success" for="nbr_bedrooms"><?php echo e(__('dashboard.Number_of_Bedrooms ')); ?> :</label>
                                    <input type="text" class="form-control" id="nbr_bedrooms" name="nbr_bedrooms" value="<?php echo e($listing->nbr_bedrooms); ?>">
                                </div>
                            </div>
                          </div>
                          <!-- end start listing nombre of room + living room + bathrooms + bedrooms -->
                          <hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">

                         <!-- start listing balcony + terrace + view + garden -->
                         <div class="row">
                            <div class="col-md-3">
                                <div class="form-group my-5">
                                    <label class="text-success" for="balcony"><?php echo e(__('dashboard.Balcony')); ?> :</label>
                                    <select class="form-control" name="balcony" id="balcony">
                                        <option><span class="text-success">select shoes</span></option>
                                        <option selected value="<?php echo e($listing->balcony); ?>"><?php echo e($listing->balcony); ?></option>
                                       <option value="yes"> yes </option>
                                       <option value="none"> none </option>
                                     </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group my-5">
                                    <label class="text-success" for="terrace"><?php echo e(__('dashboard.Terrace')); ?> :</label>
                                    <select class="form-control" name="terrace" id="terrace">
                                        <option><span class="text-success">select shoes</span></option>
                                        <option selected value="<?php echo e($listing->terrace); ?>"><?php echo e($listing->terrace); ?></option>
                                        <option value="yes"> yes </option>
                                        <option value="none"> none </option>

                                     </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group my-5">
                                    <label class="text-success" for="view"> <?php echo e(__('dashboard.View')); ?> :</label>
                                    <select class="form-control" name="view" id="view">
                                        <option><span class="text-success">select view</span></option>
                                        <option selected value="<?php echo e($listing->view); ?>"><?php echo e($listing->view); ?></option>
                                       <option value="yes"> yes </option>
                                       <option value="none"> none </option>
                                     </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group my-5">
                                    <label class="text-success" for="garden"><?php echo e(__('dashboard.Garden')); ?> :</label>
                                    <select class="form-control" name="garden" id="garden">
                                        <option><span class="text-success">select garden</span></option>
                                        <option selected value="<?php echo e($listing->garden); ?>"><?php echo e($listing->garden); ?></option>
                                        <option value="yes"> yes </option>
                                        <option value="none"> none </option>
                                     </select>
                                </div>
                            </div>
                          </div>
                          <!-- end start listing balcony + terrace + view + garden -->
                          <hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">


                            <!-- start listing garage + parking + piscine  -->
                         <div class="row">
                            <div class="col-md-4">
                                <div class="form-group my-5">
                                    <label class="text-success" for="garage"><?php echo e(__('dashboard.Garage')); ?> :</label>
                                    <select class="form-control" name="garage" id="garage">
                                        <option><span class="text-success">select shoes</span></option>
                                        <option selected value="<?php echo e($listing->garage); ?>"><?php echo e($listing->garage); ?></option>
                                       <option value="yes"> yes </option>
                                       <option value="none"> none </option>
                                     </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group my-5">
                                    <label class="text-success" for="parking"><?php echo e(__('dashboard.Parking')); ?> :</label>
                                    <select class="form-control" name="parking" id="parking">
                                        <option><span class="text-success">select shoes</span></option>
                                        <option selected value="<?php echo e($listing->parking); ?>"><?php echo e($listing->parking); ?></option>
                                        <option value="yes"> yes </option>
                                        <option value="none"> none </option>

                                     </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group my-5">
                                    <label class="text-success" for="swimming_pool"> <?php echo e(__('dashboard.Swimming_Pool')); ?> :</label>
                                    <select class="form-control" name="swimming_pool" id="swimming_pool">
                                        <option><span class="text-success">select shoes</span></option>
                                        <option selected value="<?php echo e($listing->swimming_pool); ?>"><?php echo e($listing->swimming_pool); ?></option>
                                       <option value="yes"> yes </option>
                                       <option value="none"> none </option>
                                     </select>
                                </div>
                            </div>
                          </div>
                          <!-- end start listing data b -->
                          <hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">



                          <!-- start listing en_desc and fr_desc -->
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success" for="en_desc"><?php echo e(__('dashboard.en_desc')); ?>:</label>
                                    <textarea name="en_desc" class="form-control" id="editor" cols="30" rows="10"><?php echo e($listing->en_desc); ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success" for="fr_desc"><?php echo e(__('dashboard.fr_desc')); ?> :</label>
                                    <textarea name="fr_desc" class="form-control" id="fr_desc" cols="30" rows="10"><?php echo e($listing->fr_desc); ?></textarea>
                                </div>
                            </div>
                          </div>
                          <!-- end start listing en_desc and fr_desc -->

                          <!-- start listing es_desc and ar_desc -->
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success" for="es_desc"><?php echo e(__('dashboard.es_desc')); ?> :</label>
                                    <textarea name="es_desc" class="form-control" id="es_desc" cols="30" rows="10"><?php echo e($listing->es_desc); ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success" for="ar_desc"><?php echo e(__('dashboard.ar_desc')); ?> :</label>
                                    <textarea dir="rtl" name="ar_desc" class="form-control" id="ar_desc" cols="30" rows="10"><?php echo e($listing->ar_desc); ?></textarea>
                                </div>
                            </div>
                          </div>
                          <!-- end start listing es_desc and ar_desc -->

                          <hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">

                          <!-- start listing en_more_info and fr_more_info -->
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success" for="en_more_info"><?php echo e(__('dashboard.en_more_info')); ?> :</label>
                                    <textarea name="en_more_info" class="form-control" id="en_more_info" cols="30" rows="10"><?php echo e($listing->en_more_info); ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success" for="fr_more_info"><?php echo e(__('dashboard.fr_more_info')); ?> :</label>
                                    <textarea name="fr_more_info" class="form-control" id="fr_more_info" cols="30" rows="10"><?php echo e($listing->fr_more_info); ?></textarea>
                                </div>
                            </div>
                          </div>
                          <!-- end start listing en_more_info and fr_more_info -->

                          <!-- start listing es_more_info and ar_more_info -->
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success" for="es_more_info"><?php echo e(__('dashboard.es_more_info')); ?> :</label>
                                    <textarea name="es_more_info" class="form-control" id="es_more_info" cols="30" rows="10"><?php echo e($listing->es_more_info); ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group my-5">
                                    <label class="text-success" for="ar_more_info"><?php echo e(__('dashboard.ar_more_info')); ?> :</label>
                                    <textarea dir="rtl" name="ar_more_info" class="form-control" id="ar_more_info" cols="30" rows="10"><?php echo e($listing->ar_more_info); ?></textarea>
                                </div>
                            </div>
                          </div>
                          <!-- end start listing es_desc and ar_desc -->

                          <hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">




                          <div class="form-group my-5">

                              

                              <div class="form-group">
                                <h4 class="text-success"><?php echo e(__('dashboard.Current_Image')); ?> :</h4>
                                    <div class="row text-center">

                                        <?php $__currentLoopData = json_decode($listing->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <span class="text-center"> <img style="width: 200px;height: 150px;" src="<?php echo e(asset('public/'.$img)); ?>" alt=""> </span>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                <label class="control-label text-success"><?php echo e(__('dashboard.Select_Image_Upload_File')); ?></label>
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
                                    
                                  </div>
                                </div>
                                <div class="dropzone-wrapper">
                                  <div class="dropzone-desc">
                                    <i class="glyphicon glyphicon-download-alt"></i>
                                    <p><?php echo e(__('dashboard.Choose_an_image_file_or_drag_it_here')); ?>.</p>
                                  </div>
                                  <input multiple type="file" id="images" name="images[]" class="dropzone">
                                </div>
                              </div>


                          </div>

                          <div class="form-group my-5">
                              <input type="submit" class="btn btn-success btn-block" value="<?php echo e(__('dashboard.Update_Listing')); ?>">
                          </div>
                      </form>
                </div>

                 </div>
              </div>
              <!-- end div 2 col-md-12 -->

            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->

 <?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>

<script>
   Trix.config.blockAttributes.default.tagName = "p";
</script>



<script>
    // descriptions
    CKEDITOR.replace( 'en_desc', {
        language: 'en',
        uiColor: '#9AB8F3',
        uiColor: '#9AB8F3',
        filebrowserUploadUrl: "<?php echo e(route('upload', ['_token' => csrf_token() ])); ?>",
        filebrowserUploadMethod: 'form'
    });

    CKEDITOR.replace( 'fr_desc', {
        language: 'fr',
        uiColor: '#9AB8F3',
        filebrowserUploadUrl: "<?php echo e(route('upload', ['_token' => csrf_token() ])); ?>",
        filebrowserUploadMethod: 'form'
    });

    CKEDITOR.replace( 'es_desc', {
        language: 'es',
        uiColor: '#9AB8F3',
        filebrowserUploadUrl: "<?php echo e(route('upload', ['_token' => csrf_token() ])); ?>",
        filebrowserUploadMethod: 'form'
    });

    CKEDITOR.replace( 'ar_desc', {
        language: 'ar',
        uiColor: '#9AB8F3',
        filebrowserUploadUrl: "<?php echo e(route('upload', ['_token' => csrf_token() ])); ?>",
        filebrowserUploadMethod: 'form'
    });

    // More Infos
    CKEDITOR.replace( 'en_more_info', {
        language: 'en',
        uiColor: '#9AB8F3',
        filebrowserUploadUrl: "<?php echo e(route('upload', ['_token' => csrf_token() ])); ?>",
        filebrowserUploadMethod: 'form'
    });

    CKEDITOR.replace( 'fr_more_info', {
        language: 'fr',
        uiColor: '#9AB8F3',
        filebrowserUploadUrl: "<?php echo e(route('upload', ['_token' => csrf_token() ])); ?>",
        filebrowserUploadMethod: 'form'
    });

    CKEDITOR.replace( 'es_more_info', {
        language: 'es',
        uiColor: '#9AB8F3',
        filebrowserUploadUrl: "<?php echo e(route('upload', ['_token' => csrf_token() ])); ?>",
        filebrowserUploadMethod: 'form'
    });

    CKEDITOR.replace( 'ar_more_info', {
        language: 'ar',
        uiColor: '#9AB8F3',
        filebrowserUploadUrl: "<?php echo e(route('upload', ['_token' => csrf_token() ])); ?>",
        filebrowserUploadMethod: 'form'
    });


</script>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('backend.master.app-dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/cherki-RealEstate/resources/views/backend/dashboard/real-estate/listings/edit.blade.php ENDPATH**/ ?>