<!DOCTYPE html>
<html lang="<?php echo e(LaravelLocalization::getCurrentLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <?php if(LaravelLocalization::getCurrentLocale() ==='ar'): ?>
    <!-- start arabic style -->
        <link rel="stylesheet" href="<?php echo e(asset('public/backend/backend-assets/ar/css/bootstrap.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('public/backend/backend-assets/ar/css/AdminLTE.css')); ?>">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
        <link rel="stylesheet" href="<?php echo e(asset('public/css/upload.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('public/css/trix.css')); ?>">
        <!-- end arabic style -->
  <?php else: ?>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/backend-assets/en/css/bootstrap.min.css')); ?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo e(asset('public/backend/backend-assets/en/css/AdminLTE.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('public/css/upload.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('public/css/trix.css')); ?>">
  <?php endif; ?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">


    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/backend-assets/en/css/skins/skin-blue.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/vendor/file-manager/css/file-manager.css')); ?>">
    <?php echo $__env->yieldContent('style'); ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body <?php echo e((LaravelLocalization::getCurrentLocale() ==='ar')?'dir=rtl':''); ?> class="hold-transition skin-red sidebar-mini">
<?php /**PATH /var/www/html/cherki-RealEstate/resources/views/backend/layouts/header.blade.php ENDPATH**/ ?>