<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Admin Dashboard</title>
  <!-- Favicon -->
 <!--  <link href="{{asset('assets/img/brand/favicon.png')}}" rel="icon" type="image/png"> -->
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{asset('assets/vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{{asset('assets/css/argon1.css?v=1.0.0')}}" rel="stylesheet">
  <link type="text/css" href="{{asset('assets/css/style.css')}}" rel="stylesheet">
   <link rel="stylesheet" href="https://mmwebfonts.comquas.com/fonts/Pyidaungsu-2.1_Regular.ttf' format('ttf')">
   <link type="text/css" href="{{asset('assets/css/mystyle.css')}}" rel="stylesheet">
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
      <a class="navbar-brand pt-0" href="{{url('/dashboard')}}">
        <img src="{{asset('assets/img/brand/logo.png')}}" class="navbar-brand-img" alt="...">
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
                <img alt="Image placeholder" src="{{asset('assets/img/theme/team-1-800x800.jpg')}}">
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
              <a href="./index.html">
                <img src="{{asset('assets/img/brand/blue.png')}}">
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
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        @include('layouts.sidebar')
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
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="#">Dashboard</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="{{asset('assets/img/theme/1.png')}}">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->name }}</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <a href="{{url('/changePassword')}}" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Change Password</span>
              </a>
              <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <i class="ni ni-user-run"></i>
                  {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">တစ်လအတွင်းမှတ်ပုံတင်ထားသောအလုပ်ရုံအရေအတွက်</h5>
                      <span class="h2 font-weight-bold mb-0">{{App\Factory::whereMonth('RegDate', '=',Carbon\Carbon::now()->month)->whereYear('RegDate','=',Carbon\Carbon::now()->year)->count()}}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    
                   <!-- <span class="text-nowrap">Since last month</span>-->
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">စစ်ဆေးပြီးသော အလုပ်ရုံအရေအတွက်</h5>
                      <span class="h2 font-weight-bold mb-0">{{App\FactoryInspectionInforms::whereMonth('inspectiondate', '=',Carbon\Carbon::now()->month)->whereYear('inspectiondate','=',Carbon\Carbon::now()->year)->count()}}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-chart-pie"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    
                    <!--<span class="text-nowrap">Since last week</span>-->
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">တိုင်ကြားစာအရ စစ်ဆေးခဲ့သော အလုပ်ရုံများ</h5>
                      <span class="h2 font-weight-bold mb-0"></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i></span>
                    <!--<span class="text-nowrap">Since yesterday</span>-->
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">တစ်လအတွင်းစစ်ဆေးခဲ့သော ဆိုင်များ</h5>
                     <span class="h2 font-weight-bold mb-0">{{App\Shop::whereMonth('RegDate', '=',Carbon\Carbon::now()->month)->count()}}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                        <i class="fas fa-percent"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                   
                   <!-- <span class="text-nowrap">Since last month</span>-->
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="col-md-12">
		 <p>
    	<div class="row">
	        <div class="col-lg-6 text-center">
	            <div class="pull-left">
	                <h2>ဆောင်ရွက်ပြီးသော လုပ်ငန်းစဉ်များ</h2>
	            </div>
	            
	        </div>
	  
    	</div>
    </p>
  
     
	<div class="table-responsive">
    	<div class="cases">
		    <table class="table table-bordered">
		        <thead class="thead-light">
		            <tr>
		                <th scope="col">
		                   စဉ်
		                </th>
		                 <th scope="col">
		                    စက်ရုံ / အလုပ်ရုံ အမည်
		                </th>
		                <th scope="col">
		                   စစ်ဆေးသူအမည်
		                </th>
		                <th >
		                	စစ်ဆေးသည့်နေ့ရက်
		                </th>
                        <th >
                            စက်မှုဇုန်
                        </th>
                        <th >
                            စစ်ဆေးခဲ့သည့်မြို့နယ်
                        </th>
                        <th >
                            စစ်ဆေးခဲ့သည့် ခရိုင်
                        </th>
                             
		            </tr>
		        </thead>
		        <tbody class="list">
                    <?php $i=0;?>
            @foreach ($cases as $c)
            <tr>
                <th scope="row" class="name">
                    {{ ++$i }}
                </th>
               
                <td class="budget">
                {{$c->FactoryName}}
                </td>
                <td class="status">
                  {{$c->name}} 
                </td>
                <td>                    
                 {{$c->inspectiondate}}    
                    
                </td>
                <?php 
               $fadd=App\Factory::where('FactoryId',$c->factory_id)->first();
              
               ?>
            
                 <td> 
                                     
               
                 {{$fadd->zone->industrialzone_name}}
                 
                                    
                </td>
                <td> 
                    {{$fadd->township->township_name}}
                </td>
                <td>  
                              
                 <?php
               
                        $districtname=App\Township::where('id',$c->FromTownshipid)->first();
                        
                    ?>
                    {{$districtname->district->district_name}}
                
                    
                </td>
                
              
               
               
            </tr>
            @endforeach
          
            
        </tbody>
    </table>
   
</div>
{!! $cases->links() !!}

</div>
    
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!-- Optional JS -->
  <script src="{{asset('assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('assets/vendor/chart.js/dist/Chart.extension.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{asset('assets/js/argon.js?v=1.0.0')}}"></script>
</body>

</html>