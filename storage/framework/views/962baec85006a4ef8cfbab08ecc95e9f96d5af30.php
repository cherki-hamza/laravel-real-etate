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
            <ul class="sidebar-menu">
                

                <li class="active"><a href="<?php echo e(route('dashboard')); ?>"> <span>Dashboard ar</span><i style="font-size: 2rem;" class="fas fa-archway text-primary"></i></a></li>
                <li class="active"><a href="<?php echo e(route('dashboard.home')); ?>"> <span>Home</span><i style="font-size: 2rem;" class="fas fa-home text-primary"></i></a></li>

                <?php if(Auth::user()->role == 'admin'): ?>

                <li class="active"><a href="<?php echo e(route('dashboard.permessions')); ?>"> <span>Permessions</span> <i style="color: goldenrod;font-size: 2rem" class="fas fa-user-shield"></i></a></li>

                <?php endif; ?>


                <?php if(Auth::user()->role == 'editor'): ?>

                <li class="active"><a href="<?php echo e(route('dashboard.users_profiles')); ?>"> <span><?php echo e(Auth::user()->profile->username); ?></span><i style="font-size: 2rem;" class="fas fa-user text-primary"></i></a></li>

                <?php else: ?>

                <li class="active"><a href="<?php echo e(route('dashboard.users_profiles')); ?>"> <span>All Users</span><i style="font-size: 2rem;" class="fas fa-user text-primary"></i></a></li>
                <?php endif; ?>

                <span><hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);"/></span>
                <li class="treeview">
                    <a href="#"> <span>Categories<i class="fa fa-link"></i></span>
                        <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-right"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo e(route('categories.create')); ?>">Add New Category</a></li>
                        <li><a href="<?php echo e(route('categories.index')); ?>">Show All Categories</a></li>
                    </ul>
                </li>
                <span><hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);"/></span>


                <li class="treeview">
                    <a href="#"> <span>Cities<i class="fa fa-link"></i></span>
                        <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-right"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo e(route('cities.create')); ?>">Add New City</a></li>
                        <li><a href="<?php echo e(route('cities.index')); ?>">Show All City</a></li>
                    </ul>
                </li>
                <span><hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);"/></span>



                <li class="treeview">
                    <a href="#"> <span>Areas<i class="fa fa-link"></i></span>
                        <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-right"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo e(route('areas.create')); ?>">Add New Area</a></li>
                        <li><a href="<?php echo e(route('areas.index')); ?>">Show All Areas</a></li>
                    </ul>
                </li>
                <span><hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);"/></span>


                <li class="treeview">
                    <a href="#"> <span>Listings<i class="fa fa-link"></i></span>
                        <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-right"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo e(route('listings.create')); ?>">Add New Listing</a></li>
                        <li><a href="<?php echo e(route('listings.index')); ?>">Show All Listing</a></li>
                    </ul>
                </li>
                <span><hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);"/></span>

                <li class="active"><a href="<?php echo e(route('dashboard.contact')); ?>"> <span>Contact</span><i style="font-size: 2rem;" class="fas fa-address-card text-primary"></i></a></li>


            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>





















    
<?php /**PATH /var/www/html/laravel-2021/cherki-RealEstate/resources/views/backend/inc/ar-aside-menu.blade.php ENDPATH**/ ?>