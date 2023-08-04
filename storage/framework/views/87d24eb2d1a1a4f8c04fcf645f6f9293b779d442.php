<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ညွှန်ကြားချက်များ</title>
        <style>
            @media  print {
                        html, body {
                            width: 100%;
                            height: 297mm;
                            font-family: 'Pyidaungsu';
                        }  
                    }
                    h1,h2{
                        text-align: center;
                    }
            @font-face {
                        font-family: 'Pyidaungsu', serif;				
                        font-weight: normal;
                        font-style: normal;
                    }
                    td,th,div{line-height:20px !important;padding-left:10px !important;}
                    p{
                        text-align: justify !important;
                    }

        </style>
    </head>
          <body>
           <!doctype html>
           <html lang="en">
               <head>
                   <meta charset="utf-8">
                   <meta http-equiv="X-UA-Compatible" content="IE=edge">
                   <meta name="viewport" content="width=device-width, initial-scale=1">
                   <title>ညွှန်ကြားချက်များ</title>
                   <style>
                       @media  print {
                                   html, body {
                                       width: 100%;
                                       height: 297mm;
                                       font-family: 'Pyidaungsu';
                                   }  
                               }
                               h1,h2{
                                   text-align: center;
                               }
                       @font-face {
                                   font-family: 'Pyidaungsu', serif;				
                                   font-weight: normal;
                                   font-style: normal;
                               }
                               td,th,div{line-height:20px !important;padding-left:10px !important;}
                               p{
                                   text-align: justify !important;
                               }
           
                   </style>
               </head>
                     <body>
                       <div style="padding: 2% 4% 2% 6%;">
                       <!-- <div style="text-align:center;">
                           
                               <h2>ပြည်ထောင်စုသမ္မတမြန်မာနိုင်ငံတော်</h2>
                               <h3>အလုပ်သမား၊ လူဝင်မှုကြီးကြပ်ရေးနှင့် ပြည်သူ့အင်အားဝန်ကြီးဌာန</h3>
                               <h4>အလုပ်ရုံနှင့်အလုပ်သမားဥပဒေစစ်ဆေးရေးဦးစီးဌာန</h4>
                           
                           
                       </div> -->
                       <div style="text-align:right;line-height: 20px !important;">
                           
                               <h4>အလုပ်ရုံနှင့်အလုပ်သမား ဥပဒေ စစ်ဆေးရေး ဦးစီးဌာန</h4>
                               
              
              <?php 
              $township=App\Township::where('id',$ins->township_id)->first();
              ?>
                           <h4><?php if($ins->instructiondep=='Ministry'): ?>နေပြည်တော် ဝန်ကြီးဌာန <?php else: ?><?php echo e(App\Township::where('id',$ins->township_id)->value('township_name')); ?> ၊ <?php echo e(App\District::where('id',$ins->district_id)->value('district_name')); ?> <?php endif; ?></h4>               
                           <h4>စာအမှတ်၊ <?php echo e($ins->docmentno); ?></h4>
                           <h4>ရက် စွဲ၊ <?php echo e($ins->create_date); ?> </h4>
                           
                       </div>
           
                  
                   
                       <div style="text-align: left;">
                           <label style="text-align:left;">အကြောင်းအရာ။     </label>
                            &nbsp;&nbsp;<?php echo e($ins->instructiontitle); ?>

                       </div>
                   
                   
                       <div>
                           
           
                          <p style="line-height: 30px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <?php 
                                if($ins->factory_type==1)
                                $fadd=App\Factory::where('FactoryId',$ins->factory_id)->first();
                                else{
                                  $fadd=App\Shop::where('ShopId',$ins->factory_id)->first();
                                }
                                ?>

                          <?php echo e($fadd->region->region_name); ?> ၊  <?php echo e($fadd->township->township_name); ?> ၊  <?php if($ins->factory_type==1): ?>
                           <?php echo e($fadd->zone->industrialzone_name); ?>၊ <?php echo e($fadd->FactoryAddress); ?>

                         <?php else: ?>
                          <?php echo e($fadd->loacationaddress); ?>

                         <?php endif; ?>  ရှိ <?php echo e($fadd->OwnerName); ?>   ပိုင်ဆိုင်သည့်   <?php if($ins->factory_type==1): ?> <?php echo e($fadd->FactoryName); ?> စက်ရုံ  <?php else: ?> <?php echo e($fadd->shopname); ?> ဆိုင်အလုပ်ဌာန <?php endif; ?> ၌ <?php echo e($affected_information->accDay); ?> <?php echo e($affected_information->accTime); ?> နေ့တွင် ဖြစ်ပွားခဲ့သည့် အလုပ်သမား <?php echo e($affected_information->empName); ?> ၏ လုပ်ငန်းခွင်ထိခိုက်မှုဒဏ်ရာရရှိမှုနှင့်စပ်လျဉ်း၍ ဤဦးစီးဌာနမှ သွားရောက်စစ်ဆေးပြီး နောင်ဤသို့ မဖြစ်ပွားစေရန် အောက်ပါအတိုင်း ပြုပြင်ဆောင်ရွက်ပြီးစီးကြောင်း ကို <?php echo e($ins->lastdodate); ?> ရက်နေ့ နောက်ဆုံးထား၍ ဓာတ်ပုံမှတ်တမ်းများနှင့်အတူ ပြန်လည်ပေးပို့ပါရန် ညွှန်ကြားလိုက်သည် -                            </p> 
           
                           <!-- <p style="line-height: 30px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php echo e($ins->lastdodate); ?> ရက်နေ့ နောက်ဆုံးထား ပြုပြင်လိုက်နာရန် နှင့်  မည်ကဲ့သို့ ပြုပြင် ဆောင်ရွက်ပြီးကြောင်းကို ဤဦးစီးဌာန သို့ <?php echo e($ins->instructiondate); ?> ရက်နေ့ အရောက် ပြန်လည်အကြောင်းကြားပေးပါရန် ညွှန်ကြားလိုက်သည်။
                           </p>  -->
           
                           <p style="text-align: center;"><b>ပြုပြင်လိုက်နာဆောင်ရွက်ရန် အချက်များ</b></p>
                           <p>
                              (၁) <?php echo e($ins->instruction1); ?>

           
                           </p> 
                           <p>
                              (၂) <?php echo e($ins->instruction2); ?>

                           </p>
                           <p>
                               (၃) <?php echo e($ins->instruction3); ?>

                           </p> 
                           <p>
                               (၄) <?php echo e($ins->instruction4); ?>

                           </p> 
                           <p>
                               (၅) <?php echo e($ins->instruction5); ?>

                           </p>  
                               
                       </div>
           
                      </div>
                       <div style="text-align: right;">
                          <span>(<?php echo e($ins->instructor); ?> ၊ <?php echo e($ins->instructor_rank); ?>)</span> <br> 
                          <span><?php if($ins->inspectiontype_id==1): ?> အလုပ်သမားဥပဒေစစ်ဆေးရေး  <?php else: ?> အလုပ်ရုံစစ်ဆေးရေး <?php endif; ?></span> <br>
                       </div><br>
                       <div style="text-align: left;">
                          <span>လုပ်ငန်းပိုင်ရှင်</span> <br> 
                          <span><?php echo e($ins->name); ?></span> <br> 
                         
                         <?php if($ins->factory_type==1): ?>
                          <span><?php echo e($fadd->FactoryAddress); ?>၊ <?php echo e($fadd->zone->industrialzone_name); ?>၊ <?php echo e($fadd->township->township_name); ?></span>
                         <?php else: ?>
                          <span><?php echo e($fadd->loacationaddress); ?>၊<?php echo e($fadd->township->township_name); ?></span>
                         <?php endif; ?>
                       </div>
                   
                   </body>
               </html>
        
        </body>
    </html>