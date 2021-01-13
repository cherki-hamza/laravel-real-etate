<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               Edit Profile

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <h1 class="text-success">Edit Profile</h1>
             <div class="row">

                <!-- start row 1 col-md-6 -->
                 <div class="col-md-6">

              <div class="box">
                <div class="box-header">

                    <!-- start alert -->
                 <span>    <?php echo $__env->make('backend.alert.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> </span>
                    <!-- end alert -->

                    <h3 class="text-primary">
                       Edit Profile
                    </h3>
                </div>
                <div class="box-body">
                    <form action="<?php echo e(route('dashboard.profile_update' , $profile->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group my-5">
                            <label for="username">Username :</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?php echo e($profile->username); ?>">
                            <input type="hidden" name="user_id" value="<?php echo e($profile->user_id); ?>">
                        </div>

                        <div class="form-group my-5">
                            <label for="ar_username">Arabic Username :</label>
                            <input type="text" class="form-control" id="ar_username" name="ar_username" value="<?php echo e($profile->ar_username); ?>">
                        </div>

                        <div class="form-group my-5">
                            <label for="email">Email :</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo e($profile->email); ?>">
                        </div>

                        <div class="form-group my-5">
                            <label for="tel">Tel :</label>
                            <input type="text" class="form-control" id="tel" name="tel" value="<?php echo e($profile->tel); ?>">
                        </div>

                        <div class="form-group my-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="country">Country :</label>
                                    <input type="text" class="form-control" id="country" name="country" value="<?php echo e($profile->country); ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="ar_country">Arabic Country :</label>
                                    <input type="text" class="form-control" id="ar_country" name="ar_country" value="<?php echo e($profile->ar_country); ?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-group my-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="city">City :</label>
                                    <input type="text" class="form-control" id="city" name="city" value="<?php echo e($profile->city); ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="ar_city">Arabic City :</label>
                                    <input type="text" class="form-control" id="ar_city" name="ar_city" value="<?php echo e($profile->ar_city); ?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-group my-5">
                            <label for="website">Website :</label>
                            <input type="text" class="form-control" id="website" name="website" value="<?php echo e($profile->website); ?>">
                        </div>

                        <div class="form-group my-5">
                            <label for="facebook">Facebook :</label>
                            <input type="text" class="form-control" id="facebook" name="facebook" value="<?php echo e($profile->facebook); ?>">
                        </div>

                        <div class="form-group my-5">
                            <label for="instagram">Instagram :</label>
                            <input type="text" class="form-control" id="instagram" name="instagram" value="<?php echo e($profile->instagram); ?>">
                        </div>

                        <div class="form-group my-5">
                            <label for="instagram">Twitter :</label>
                            <input type="text" class="form-control" id="instagram" name="instagram" value="<?php echo e($profile->instagram); ?>">
                        </div>

                        <div class="form-group my-5">
                            <label for="about">About :</label>
                            <textarea type="text" class="form-control" id="about" name="about" rows="2" ><?php echo e($profile->about); ?></textarea>
                        </div>

                        <div class="form-group my-5">
                            <label for="ar_about">Arabic About :</label>
                            <textarea type="text" class="form-control" id="ar_about" name="ar_about" rows="2" ><?php echo e($profile->ar_about); ?></textarea>
                        </div>

                        <div class="form-group my-5">
                            <label for="more_info">More Info :</label>
                            <textarea type="text" class="form-control" id="more_info" name="more_info" rows="2" ><?php echo e($profile->more_info); ?></textarea>
                        </div>

                        <div class="form-group my-5">
                            <label for="ar_more_info">Arabic More Info :</label>
                            <textarea type="text" class="form-control" id="ar_more_info" name="ar_more_info" rows="2" ><?php echo e($profile->ar_more_info); ?></textarea>
                        </div>




                        <div class="form-group my-5">

                            <div class="row">
                                <div class="col-md-6">
                                   
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
                                <div class="col-md-6 text-center">
                                    <label for="content">Current Image :</label><br/>
                                    <img style="width: 80px;height: 50px;border-radius: 100%" class="img-circle" src="<?php echo e($profile->ProfileImg()); ?>" name="current_picture" alt="<?php echo e($profile->username); ?>">
                                </div>
                            </div>


                        </div>

                        <div class="form-group my-5">
                            <input type="submit" class="btn btn-success" value="Update Profile">
                        </div>
                    </form>
              </div>

            </div>
        </div>
        <!-- end row 1 col-md-6 -->

        <!-- start row 2 col-md-6 -->
            <div class="col-md-6">
                <div class="box d-flex box-primary">
                    <div class="box-body box-profile">
                        <div class="bg-warning text-danger float-right">
                            <span class="float-right d-flex">#ID <small class="text-danger" style="margin-left: 4px"><?php echo e($profile->id); ?></small></span>
                        </div>
                        <img style="width: 300px;height: 300px;" class="profile-user-img img-responsive img-circle" src="<?php echo e($profile->ProfileImg()); ?>" alt="<?php echo e($profile->username); ?>">

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                            <b>Username</b> <a class="pull-right"><?php echo e($profile->username); ?></a>
                            </li>
                            <li class="list-group-item">
                            <b>Arabic Username</b> <a class="pull-right"><?php echo e($profile->ar_username); ?></a>
                            </li>
                            <li class="list-group-item">
                            <b>Email</b> <a class="pull-right"><?php echo e($profile->email); ?></a>
                            </li>

                        </ul>

                        <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Website</b> <a class="pull-right"><?php echo e($profile->website); ?></a>
                        </li>
                        <li class="list-group-item">
                            <b>Facebook</b> <a class="pull-right"><?php echo e($profile->facebook); ?></a>
                        </li>
                        <li class="list-group-item">
                            <b>Twitter</b> <a class="pull-right"><?php echo e($profile->twitter); ?></a>
                        </li>
                        </ul>


                    </div>

                    </div>
            </div>
            <!-- start row 2 col-md-6 -->

             </div>

        </div>


        </section>
        <!-- /.content -->
    </div>
<?php /**PATH /var/www/html/cherki-RealEstate/resources/views/backend/inc/content-edit-profile.blade.php ENDPATH**/ ?>