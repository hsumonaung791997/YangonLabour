
          <!--for dropdown menu-->
         
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('/dashboard')); ?>">
                            <i class="ni ni-tv-2 text-primary"></i> ပင်မစာမျက်နှာ
                    </a>
                </li>
           <?php  $role=Auth::user()->roles;
           foreach($role as $r){
            $roleid=$r->id;
           }

           ?>
        <?php if($roleid==1 || $roleid==2 || $roleid==3 || $roleid==5 || $roleid==7): ?>
                 <li class="dropdown">
                 <a class="nav-link">
                             <i class="fa fa-envelope"></i> 
                          အကြောင်းကြားစာများ 
                </a>

                    <div class="dropdown-content">
                        <a href="<?php echo e(url('otpermissionreport')); ?>"><strong> (၁)</strong>အချိန်ပိုခွင့်ပြုမိန့်တောင်းခံခြင်း<span class="badge badge-danger"><?php echo $__env->make('OTcount', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?></span></a>

                        
                      
                     </div>
                                  
                </li>
        <?php endif; ?>
                <li class="dropdown">
                 <a class="nav-link dropbtn" >
                             <i class="fa fa-registered"></i> 
                            စာရင်းသွင်းရန်
                    </a>
                    
               
                    <div class="dropdown-content">
                        <a href="<?php echo e(url('factories')); ?>"><strong> (၁)</strong> စက်ရုံ အလုပ်ရုံ</a>

                        <a href="<?php echo e(url('shops')); ?>"><strong> (၂)</strong> ဆိုင်နှင့် အလုပ်ဌာန</a>

                      <!--  <?php if(session()->get('TempFactoryRegister')): ?>
                        <a href="<?php echo e(url('/Tempoaryfactoryregister')); ?>">မပြီးစီးသေးသော အလုပ်များ (စက်ရုံ)</a>
                        <?php endif; ?> -->
                     </div>
              
                </li>
                 <li class="dropdown">
                 <a class="nav-link dropbtn">
                             <i class="far fa-check-circle"></i>စက်ရုံစစ်ဆေးချက်
                    </a>
                    
               
                    <div class="dropdown-content">
                        <a href="<?php echo e(url('/FactoryInspections')); ?>"> (၁) စက်ရုံ/အလုပ်ရုံ အကြောင်းအရာ</a>
                        <a href="<?php echo e(url('/factorysafteyinspection')); ?>"> (၂) အလုပ်ရုံစစ်ဆေးရေး</a>
                        
                        <a href="<?php echo e(url('LabourInspectionLaw/create')); ?>"> (၃) အလုပ်သမားဥပဒေစစ်ဆေးရေး</a>             
                       <a href=<?php echo e(url('FactoryInspectionLists')); ?>> စစ်ဆေးထားသော စက်ရုံစာရင်းများ </a>           
                     </div>
              
                </li>
                <li class="dropdown">
                 <a class="nav-link dropbtn" >
                             <i class="far fa-check-circle"></i>ဆိုင်/အလုပ်ဌာနစစ်ဆေးချက်
                    </a>
                    
               
                    <div class="dropdown-content">
                        <a href="<?php echo e(url('/shop_information_add')); ?>"> (၁) ဆိုင်/အလုပ်ဌာနအကြောင်းအရာ</a>
                        <a href="<?php echo e(url('/ShopSafteyInspection/create')); ?>"> (၂) အလုပ်ရုံစစ်ဆေးရေး</a>
                        
                        
                        <a href="<?php echo e(url('ShopLabourInspectionLaw/create')); ?>"> (၃) အလုပ်သမားဥပဒေစစ်ဆေးရေး</a> 
                       <a href=<?php echo e(url('ShopInspectionLists')); ?>> စစ်ဆေးထားသော ဆိုင်/အလုပ်ဌာနစာရင်းများ </a>           
                     </div>
              
                </li>
                 
                <li class="dropdown">
                 <a class="nav-link dropbtn" >
                    <i class="far fa-check-circle"></i> ဌာနတွင်းလုပ်ဆောင်ချက်များ
                </a>
                    
               
                    <div class="dropdown-content">
                        
                        <a href="<?php echo e(url('caselist')); ?>"> (၁) ဖိုင်တစ်ခုဖွင့်ခြင်း</a>
                        <a href="<?php echo e(url('instructionlist')); ?>"> (၂) ညွှန်ကြားချက်များ</a>
                    <a href="<?php echo e(url('submissionReport')); ?>"> (၃) တင်ပြခြင်း</a>
                        

                       
                     </div>
              
                </li>

                <li class="dropdown">
                    <a class="nav-link dropbtn" >
                        <i class="far fa-check-circle"></i> လုပ်ငန်းခွင်ထိခိုက်မှု
                    </a>
                        
                   
                        <div class="dropdown-content">
                             <a href="<?php echo e(url('AffectedIndex')); ?>">(၁) ထိခိုက်မှုအကြောင်းကြားခြင်းပုံစံ </a>
                             
                         </div>

                         <div class="dropdown-content">
                             <a href="<?php echo e(url('ImpactInstructionList')); ?>">(၂) လုပ်ငန်းခွင် ထိခိုက်မှု ညွှန်ကြားချက်များ </a>
                         </div>

                  
             </li>

                <li class="dropdown">
                 <a class="nav-link dropbtn" >
                             <i class="far fa-check-circle"></i>ဆွေးနွေးဟောပြောခြင်း
                    </a>
                    
               
                    <div class="dropdown-content">
                        
                        <a href="<?php echo e(url('createseminar')); ?>"> (၁) ဆွေးနွေးပွဲ</a>
                        <a href="<?php echo e(url('seminarlist')); ?>"> (၂) ဆွေးနွေးပွဲစာရင်းများ</a>
                                              
                       
                     </div>
              
                </li>

                <li class="dropdown">
                 <a class="nav-link dropbtn" >
                    <i class="fa fa-tasks"></i> အစီရင်ခံစာ
                </a>
                    
               
                    <div class="dropdown-content">
                            
                        <a href="<?php echo e(url('ReportAll')); ?>"> အစီရင်ခံစာထုတ်ရန်</a>
                         
                     </div>
              
                </li>

                <!--  -->
                <?php if($roleid==1): ?>
                <li class="dropdown">
                       <a class="nav-link dropbtn" >
                           <i class="fa fa-tasks"></i> လုပ်ငန်းအမျိုးအစား
                       </a>
                           
                      
                           <div class="dropdown-content">
                           <a href="<?php echo e(route('economicsection.create')); ?>"> Economic Section</a>
                               <a href="<?php echo e(route('economicdivision.create')); ?>"> Economic Division</a>
                               <a href="<?php echo e(route('economicgroup.create')); ?>"> Economic Group</a>
                               <a href="<?php echo e(route('economicclass.create')); ?>"> Economic Class</a>
                            </div>
                     
                </li>
                <?php endif; ?>
                
                <li class="dropdown">
                       <a class="nav-link dropbtn" href="#">
                           <i class="fa fa-tasks"></i> တရားစွဲဆိုမှုများ
                       </a>
                           
                      
                            <div class="dropdown-content">
                                <a href="<?php echo e(url('Factoryprosecuted')); ?>"> အမှုတွဲလချုပ်စာရင်း </a>
                            </div>
                     
                </li>
                

                <li class="dropdown">
                 <a class="nav-link dropbtn" >
                    <i class="fa fa-tasks"></i> အချိန်ပိုလုပ်ကိုင်ခြင်း
                </a>
                    
               
                    <div class="dropdown-content">
                        <a href="<?php echo e(route('PermissionOtFactory.index')); ?>"> (၁)အချိန်ပိုလျှောက်ထားခြင်းများ</a>
                       
                     </div>
              
                </li>

                 <li class="dropdown">
                     <a class="nav-link dropbtn" >
                        <i class="fa fa-tasks"></i> စီမံခန့်ခွဲခြင်း
                     </a>
                    
               
                    <div class="dropdown-content">
                        <a href="<?php echo e(url('district')); ?>"> (၁) ခရိုင်များထည့်ခြင်း</a>
                        <a href="<?php echo e(url('township')); ?>"> (၂) မြို့နယ်များထည့်ခြင်း</a>
                        <a href="<?php echo e(url('industrialzone')); ?>"> (၃) စက်မှုဇုန်များ</a>
 <?php if($roleid==1): ?>        <a href="<?php echo e(route('register')); ?>"> (၄) အသုံးပြုသူအသစ်ထည့်ခြင်း</a> <?php endif; ?>
                     </div>
              
                </li>

         <?php if($roleid==1): ?>

             <li class="dropdown">
                 <a class="nav-link dropbtn" >
                    <i class="fa fa-cog"></i> System Configuration
                </a>
                    
               
                    <div class="dropdown-content">
                        
                        <a href="<?php echo e(route('users.log')); ?>">User Log</a>
                        <a href="#">Data Backup</a>
                        
                     </div>
              
                </li>
        <?php endif; ?>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/UnsuccessfullyWork')); ?>">
                    <i class="fa fa-exclamation-triangle"></i> မပြီးသေးသော အလုပ်များ
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/changePassword')); ?>">
                    <i class="fa fa-key"></i>စကားဝှက် ပြောင်းရန်
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('logout')); ?>">
                             <i class="ni ni-user-run"></i> အကောင့်မှထွက်ခြင်း
                    </a>
                </li>
            </ul>
          <!--end of dropdown menu-->
