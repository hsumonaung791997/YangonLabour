<!DOCTYPE html>
<html>
<head>
  <meta name="_token" content="<?php echo e(csrf_token()); ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Factory and Labour Inspection</title>
  <!-- Favicon -->
 <!--  <link href="<?php echo e(asset('assets/img/brand/favicon.png')); ?>" rel="icon" type="image/png"> -->
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?php echo e(asset('assets/vendor/nucleo/css/nucleo.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="<?php echo e(asset('assets/css/argon1.css?v=1.0.0')); ?>" rel="stylesheet">
  <link type="text/css" href="<?php echo e(asset('assets/css/mystyle.css')); ?>" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://mmwebfonts.comquas.com/fonts/?font=myanmar3"> -->
  <link rel="stylesheet" href="https://mmwebfonts.comquas.com/fonts/Pyidaungsu-2.1_Regular.ttf') format('ttf')">
</head>

<body class="Pyidaungsu">
  <!-- Sidenav -->
  
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="<?php echo e(url('/dashboard')); ?>">
        <img src="<?php echo e(asset('assets/img/brand/logo.png')); ?>" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="<?php echo e(asset('assets/img/theme/team-1-800x800.jpg')); ?>">
              </span>
            </div>
          </a>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="<?php echo e(url('/dashboard')); ?>">
                <img src="<?php echo e(asset('assets/img/brand/blue.png')); ?>">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
       <!-- <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>-->
        <!-- Navigation -->
       <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- Divider -->
       
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <div class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" ><?php echo e(Request::segment(1)); ?></div>
        <!-- Form -->
        <!--<form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>-->
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="<?php echo e(asset('assets/img/theme/1.png')); ?>">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?php echo e(Auth::user()->name); ?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <a href="<?php echo e(url('/changePassword')); ?>" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Change Password</span>
              </a>
              <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                 onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <i class="ni ni-user-run"></i>
                  <?php echo e(__('Logout')); ?>

              </a>
              <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                  <?php echo csrf_field(); ?>
              </form>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8">
     
       
    </div>
    <!-- Page content -->
    <div class="col-md-12 form-background">
       <?php echo $__env->yieldContent('content'); ?>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->

 

</body>

</html>