<!doctype html>
<html lang="<?php echo e(LaravelLocalization::getCurrentLocale()); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

       <?php if(LaravelLocalization::getCurrentLocale() ==='ar'): ?>
        <!-- rtl style -->
        
         <!-- bootstrap rtl arabic -->
            <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css"
            integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">

        <?php else: ?>
        <!-- ltr style -->
        
         <!-- bootstrap ltr english-->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <?php endif; ?>

        <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
         <!-- Scripts -->
         <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>



    <?php echo $__env->yieldContent('my-styles'); ?>
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<?php if(LaravelLocalization::getCurrentLocale() ==='ar'): ?>
<body dir="rtl">
<?php else: ?>
<body>
<?php endif; ?>
<?php /**PATH /var/www/html/laravel-2021/cherki-RealEstate/resources/views/frontend/layouts/header.blade.php ENDPATH**/ ?>