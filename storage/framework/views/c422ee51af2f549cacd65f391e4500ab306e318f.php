<aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section style="margin-right: 15px;" class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img style="width: 70px;height: 50px;border-radius: 100%;" src="<?php echo e(asset(Auth::user()->photo())); ?>" class="img-circle" alt="<?php echo e(Auth::user()->name); ?>">
                </div>
                <div class="pull-left info">
                    <p> <a href="<?php echo e(route('dashboard.profile',Auth::user()->id)); ?>"> <?php echo e(Auth::user()->name); ?> </a></p>
                    <!-- Status -->
                    <a href="<?php echo e(route('dashboard.profile',Auth::user()->id)); ?>"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>


            <!-- Sidebar Menu -->
            <ul style="margin-right: 10px" class="sidebar-menu">
                

                <li class="active"><a href="<?php echo e(route('dashboard')); ?>"> <span><?php echo e(__('dashboard.DASHBOARD')); ?></span><i style="font-size: 2rem;margin-left: 10px" class="fas fa-home text-primary"></i></a></li>

                

                <?php if(Auth::user()->role == 'admin'): ?>

                <li class="active"><a href="<?php echo e(route('dashboard.permessions')); ?>"> <span><?php echo e(__('dashboard.PERMESSIONS')); ?></span> <i style="color: goldenrod;font-size: 2rem;margin-left: 10px" class="fas fa-user-shield"></i></a></li>

                <?php endif; ?>


                <?php if(Auth::user()->role == 'editor'): ?>

                <li class="active"><a href="<?php echo e(route('dashboard.users_profiles')); ?>"> <span><?php echo e(Auth::user()->profile->username); ?></span><i style="font-size: 2rem;margin-left: 10px" class="fas fa-user text-primary"></i></a></li>

                <?php else: ?>

                <li class="active"><a href="<?php echo e(route('dashboard.users_profiles')); ?>"> <span><?php echo e(__('dashboard.ALL_USERS')); ?></span><i style="font-size: 2rem;margin-left: 10px" class="fas fa-user text-primary"></i></a></li>
                <?php endif; ?>

                <span><hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);"/></span>
                <li class="treeview">
                    <a href="#"> <span><?php echo e(__('dashboard.CATEGORIES')); ?>

                        <img style="font-size: 2rem;margin-left: 10px" width="30px" height="30px" src="<?php echo e(asset('public/assets-file/images/category.png')); ?>" alt="category">
                    </span>
                        <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-left"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo e(route('categories.create')); ?>"><?php echo e(__('dashboard.Add_New_Category')); ?></a></li>
                        <li><a href="<?php echo e(route('categories.index')); ?>"><?php echo e(__('dashboard.Show_All_Categories')); ?></a></li>
                    </ul>
                </li>
                <span><hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);"/></span>


                <li class="treeview">
                    <a href="#"> <span><?php echo e(__('dashboard.CITIES')); ?>

                        <img style="font-size: 2rem;margin-left: 10px" width="30px" height="30px" src="<?php echo e(asset('public/assets-file/images/category.png')); ?>" alt="cities">
                    </span>
                        <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-left"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo e(route('cities.create')); ?>"><?php echo e(__('dashboard.Add_New_City')); ?></a></li>
                        <li><a href="<?php echo e(route('cities.index')); ?>"><?php echo e(__('dashboard.Show_All_Cities')); ?></a></li>
                    </ul>
                </li>
                <span><hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);"/></span>



                <li class="treeview">
                    <a href="#"> <span><?php echo e(__('dashboard.AREAS')); ?>

                        <img style="font-size: 2rem;margin-left: 10px" width="30px" height="30px" src="<?php echo e(asset('public/assets-file/images/category.png')); ?>" alt="areas">
                    </span>
                        <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-left"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo e(route('areas.create')); ?>"><?php echo e(__('dashboard.Add_New_Area')); ?></a></li>
                        <li><a href="<?php echo e(route('areas.index')); ?>"><?php echo e(__('dashboard.Show_All_Areas')); ?></a></li>
                    </ul>
                </li>
                <span><hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);"/></span>


                <li class="treeview">
                    <a href="#"> <span><?php echo e(__('dashboard.LISTINGS')); ?>

                        <img style="font-size: 2rem;margin-left: 10px" width="30px" height="30px" src="<?php echo e(asset('public/assets-file/images/category.png')); ?>" alt="listings">
                    </span>
                        <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-left"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo e(route('listings.create')); ?>"><?php echo e(__('dashboard.Add_New_Listing')); ?></a></li>
                        <li><a href="<?php echo e(route('listings.index')); ?>"><?php echo e(__('dashboard.Show_All_Listings')); ?></a></li>
                    </ul>
                </li>
                <span><hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);"/></span>

                <li class="active"><a href="<?php echo e(route('contact.index')); ?>"> <span><?php echo e(__('dashboard.CONTACTS')); ?></span><i style="font-size: 2rem;margin-left: 10px" class="fas fa-address-card text-primary"></i></a></li>


            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>





















    
<?php /**PATH /var/www/html/cherki-RealEstate/resources/views/backend/inc/ar-aside-menu.blade.php ENDPATH**/ ?>