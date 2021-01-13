<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

            <h1 class="text-success">Editor User Profile</h1>

        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
      <div class="row">

         <div class="col-md-12">

            <!-- Profile Image -->
            <div class="box box-primary">
              <div class="box-body box-profile">
                  <div class="bg-warning text-primary float-right">
                    <span class="d-flex">#ID <small class="text-danger" style="margin-left: 4px"><?php echo e($user->id); ?></small></span>
                </div>

                <div class="bg-warning text-primary float-left">
                    <span class="text-left">Role  <small class="text-danger" style="margin-left: 4px"><?php echo e($user->user['role']); ?></small></span>
                </div>

                <img style="width: 100px;height: 100px;border-radius: 100%;" class="profile-user-img img-responsive img-circle" src="<?php echo e($user->ProfileImg()); ?>" alt="<?php echo e($user->username); ?>">

                <ul class="list-group list-group">
                    <li class="list-group-item">
                      <b>Username</b> <a class="pull-right"><?php echo e($user->username); ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Arabic Username</b> <a class="pull-right"><?php echo e($user->ar_username); ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Email</b> <a class="pull-right"><?php echo e($user->email); ?></a>
                    </li>
                    <li class="list-group-item">
                        <b>About</b> <a class="pull-right"><?php echo e($user->about); ?></a>
                      </li>
                  </ul>

                <ul class="list-group list-group">
                  <li class="list-group-item">
                    <b>Website</b> <a class="pull-right"><?php echo e($user->website); ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Facebook</b> <a class="pull-right"><?php echo e($user->facebook); ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Twitter</b> <a class="pull-right"><?php echo e($user->twitter); ?></a>
                  </li>
                </ul>

                <div class="row d-flex text-center">
                  <a href="<?php echo e(route('dashboard.profile',$user->id)); ?>">  <span class="btn btn-primary"><i style="margin-right: 4px;" class="fa fa-eye  mx-2"></i>Show</span></a>
                  <a href="<?php echo e(route('dashboard.edit_profile' , $user->id)); ?>">  <span class="btn btn-success"><i style="margin-right: 4px;" class="fa fa-edit mx-2"></i>Edit</span></a>
                    <a href="">   <span class="btn btn-danger"><i style="margin-right: 4px;" class="fa fa-trash mx-2"></i>Delete</span></a>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- /.box -->
          </div>

      </div>

    </section>
    <!-- /.content -->
</div>






<?php /**PATH /var/www/html/cherki-RealEstate/resources/views/backend/inc/content-dashboard-user-editor.blade.php ENDPATH**/ ?>