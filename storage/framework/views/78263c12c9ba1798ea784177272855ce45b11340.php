<aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section style="margin-left: 5px;" class="sidebar">

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
            <ul style="margin-left: 10px" class="sidebar-menu">
                

                <li class="active"><a href="<?php echo e(route('dashboard')); ?>"><i style="font-size: 2rem;margin-right: 10px" class="fas fa-home text-primary"></i> <span><?php echo e(__('dashboard.DASHBOARD')); ?></span></a></li>

                

                <?php if(Auth::user()->role == 'admin'): ?>

                <li class="active"><a href="<?php echo e(route('dashboard.permessions')); ?>"><i style="color: goldenrod;font-size: 2rem;margin-right: 10px" class="fas fa-user-shield"></i> <span><?php echo e(__('dashboard.PERMESSIONS')); ?></span></a></li>

                <?php endif; ?>


                <?php if(Auth::user()->role == 'editor'): ?>

                <li class="active"><a href="<?php echo e(route('dashboard.users_profiles')); ?>"><i style="font-size: 2rem;margin-right: 10px" class="fas fa-user text-primary"></i> <span><?php echo e(Auth::user()->profile->username); ?></span></a></li>

                <?php else: ?>

                <li class="active"><a href="<?php echo e(route('dashboard.users_profiles')); ?>"><i style="font-size: 2rem;margin-right: 10px" class="fas fa-user text-primary"></i> <span><?php echo e(__('dashboard.ALL_USERS')); ?></span></a></li>
                <?php endif; ?>

                <span><hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);"/></span>
                <li class="treeview">
                    <a href="#">
                        <img style="font-size: 2rem;margin-right: 10px" width="30px" height="30px" src="<?php echo e(asset('public/assets-file/images/category.png')); ?>" alt="category">
                        <span><?php echo e(__('dashboard.CATEGORIES')); ?></span>
                        <span class="pull-right-container">
                           <i style="font-size: 2rem;margin-right: 10px" class="fa fa-angle-left pull-right"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo e(route('categories.create')); ?>"><?php echo e(__('dashboard.Add_New_Category')); ?></a></li>
                        <li><a href="<?php echo e(route('categories.index')); ?>"><?php echo e(__('dashboard.Show_All_Categories')); ?></a></li>
                    </ul>
                </li>
                <span><hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);"/></span>


                <li class="treeview">
                    <a href="#"> 
                        <img style="font-size: 2rem;margin-right: 10px" width="30px" height="30px" src="<?php echo e(asset('public/assets-file/images/category.png')); ?>" alt="cities">
                        <span><?php echo e(__('dashboard.CITIES')); ?></span>
                        <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-right"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo e(route('cities.create')); ?>"><?php echo e(__('dashboard.Add_New_City')); ?></a></li>
                        <li><a href="<?php echo e(route('cities.index')); ?>"><?php echo e(__('dashboard.Show_All_Cities')); ?></a></li>
                    </ul>
                </li>
                <span><hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);"/></span>



                <li class="treeview">
                    <a href="#"> 
                        <img style="font-size: 2rem;margin-right: 10px" width="30px" height="30px" src="<?php echo e(asset('public/assets-file/images/category.png')); ?>" alt="areas">
                        <span><?php echo e(__('dashboard.AREAS')); ?></span>
                        <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-right"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo e(route('areas.create')); ?>"><?php echo e(__('dashboard.Add_New_Area')); ?></a></li>
                        <li><a href="<?php echo e(route('areas.index')); ?>"><?php echo e(__('dashboard.Show_All_Areas')); ?></a></li>
                    </ul>
                </li>
                <span><hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);"/></span>


                <li class="treeview">
                    <a href="#"> 
                        <img style="font-size: 2rem;margin-right: 10px" width="30px" height="30px" src="<?php echo e(asset('public/assets-file/images/category.png')); ?>" alt="listings">
                        <span><?php echo e(__('dashboard.LISTINGS')); ?></span>
                        <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-right"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo e(route('listings.create')); ?>"><?php echo e(__('dashboard.Add_New_Listing')); ?></a></li>
                        <li><a href="<?php echo e(route('listings.index')); ?>"><?php echo e(__('dashboard.Show_All_Listings')); ?></a></li>
                    </ul>
                </li>
                <span><hr style="border-radius: 8px;height: 4px;margin-left: 6px;margin-right: 6px;background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);"/></span>

                <li class="active"><a href="<?php echo e(route('contact.index')); ?>"><i style="font-size: 2rem;margin-right: 10px" class="fas fa-address-card text-primary"></i> <span><?php echo e(__('dashboard.CONTACTS')); ?></span></a></li>


            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>





















    
<?php /**PATH /var/www/html/cherki-RealEstate/resources/views/backend/inc/aside-menu.blade.php ENDPATH**/ ?>