<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>System For Factory and Labour Law Inspection</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
 <div class="row navbar-laravel pt-3 pb-3">
                    
                     
                     <div class="col-md-12 text-center"> 
                     <h3><a class="navbar-brand p-3" href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('assets/img/brand/logo.png')); ?>" style="width:40%;"></a></h3>
                        <h3 style="font-size:28px;line-height:40px;"><strong>ရန်ကုန်တိုင်းဒေသကြီးအစိုးရအဖွဲ့ </strong> </h3>
                         
                        <h3 style="font-size:18px;line-height:30px;"><strong>သတင်းအချက်အလက်စီမံခန့်ခွဲမှုနှင့်အစီရင်ခံစာထုတ်ပေးသည့် ဆော့ဖ်ဝဲစနစ်<br>
                        (အလုပ်ရုံနှင့်အလုပ်သမားဥပဒေစစ်ဆေးရေးဦးစီးဌာန)</strong> </h3>
                
                     </div>
                     </div>
             
        <nav class="navbar navbar-expand-md navbar-light">
            
              <div class="container">
                
               
               
            

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            
                            <?php if(Route::has('register')): ?>
                                
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
