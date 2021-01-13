
<div class="container">
    <hr class="color_1">
</div>
<div class="container">
         <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #e3f2fd;">
             <a class="navbar-brand" href="">Real Estate</a>
             <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                 aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="collapsibleNavId">
                 <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                     <li class="nav-item active">
                         <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
                     </li>

                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
                     </li>

                     <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <li class="nav-item mx-auto">
                            <a class="nav-link active" rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                            <?php echo e($properties['native']); ?>

                            </a>
                        </li>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                 </ul>


                 <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <?php if(auth()->guard()->guest()): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                        </li>
                        <?php if(Route::has('register')): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                            </li>
                        <?php endif; ?>
                    <?php else: ?>


                        <li class="nav-item mr-4">
                        <a class="nav-link text-primary font-weight-bold" href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-user-injured mr-2"></i><?php echo e(__('Dashboard')); ?></a>
                        </li>

                        <li class="nav-item"><img src="<?php echo e(Auth::user()->getGravatar()); ?>"  style="border-radius: 100%; width: 35px;height: 35px;" alt=""></li>

                        <li class="nav-item dropdown">
                             <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right my-4" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item nav-link" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Logout')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>

                        </li>
                    <?php endif; ?>
                </ul>

                 
             </div>
         </nav>
</div>







<?php /**PATH /var/www/html/laravel-2021/cherki-RealEstate/resources/views/frontend/layouts/menu.blade.php ENDPATH**/ ?>