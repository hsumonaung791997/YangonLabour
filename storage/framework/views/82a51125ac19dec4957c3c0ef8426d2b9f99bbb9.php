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
   $township=App\Township::where('id',$ins->instructiondep)->first();
 
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
                <p style="line-height: 30px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                လူကြီးမင်း၏ <?php echo e($ins->factoryname); ?> စက်ရုံ သည် (၁) ၁၉၅၁ ခုနှစ်၊ အလုပ်ရုံဥပဒေ(၂) ၁၉၅၁ ခုနှစ်၊ ခွင့်ရက် နှင့် အလုပ်ပိတ်ရက်ဥပဒေ (၃) ၁၉၅၁ခုနှစ်၊ ဆိုင်များနှင့် အလုပ်ဌာများ ဥပဒေ (၄) ၁၉၃၆ ခုနှစ် အခကြေးငွေရေး ဥပဒေတို့နှင့် အကျုံးဝင်သက်ဆိုင်ပါသည်။ </p>

               <p style="line-height: 30px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                လူကြီးမင်း၏ <?php echo e($ins->factoryname); ?> စက်ရုံ ကို <?php echo e($ins->inspected_date); ?>နေ့တွင် ဝင်ရောက်စစ်ဆေးခဲ့ရာ ချွတ်ယွင်းချက်များကိုတွေ့ရသဖြင့် ၎င်းချွတ်ယွင်းချက်များကို ပြုပြင်ဆောင်ရွက်ရန်နှင့် <?php echo e($ins->lastdodate); ?>ရက်နေ့နောက်ဆုံးထားပြီး မည်ကဲ့သို့ပြုပြင်ဆောင်ရွက်ပြီးကြောင်းကို ဤဦးစီးဌာန သို့ <?php echo e($ins->instructiondate); ?> ရက်နေ့ အရောက်ပြန်လည် အကြောင်းကြားရန် ညွှန်ကြားလိုက်ပါသည်။ ညွှန်ကြားချက်များကို လိုက်နာဆောင်ရွက်ရန်ပျက်ကွက်ပါက ပြဌာန်းထားသည့် ဥပဒေအရ အရေးယူခြင်းခံရမည်ဖြစ်ကြောင်း အကြောင်းကြားအပ်ပါသည်။
                </p> 

                <!-- <p style="line-height: 30px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <?php echo e($ins->lastdodate); ?> ရက်နေ့ နောက်ဆုံးထား ပြုပြင်လိုက်နာရန် နှင့်  မည်ကဲ့သို့ ပြုပြင် ဆောင်ရွက်ပြီးကြောင်းကို ဤဦးစီးဌာန သို့ <?php echo e($ins->instructiondate); ?> ရက်နေ့ အရောက် ပြန်လည်အကြောင်းကြားပေးပါရန် ညွှန်ကြားလိုက်သည်။
                </p>  -->

                <p style="text-align: center;"><b>ပြုပြင်လိုက်နာဆောင်ရွက်ရန် အချက်များ</b></p>
                <?php if($ins->inspectiontype_id==1): ?>
                <p>
                   (၁) <?php echo e($ins->a_leavedesc); ?>


                </p> 
                <p>
                   (၂) <?php echo e($ins->a_wagedesc); ?>

                </p>
                <p>
                    (၃) <?php echo e($ins->a_notedesc); ?>

                </p> 
                <p>
                    (၄) <?php echo e($ins->a_worktimedesc); ?>

                </p> 
                <p>
                    (၅) <?php echo e($ins->a_otherdesc); ?>

                </p>  
                <?php elseif($ins->inspectiontype_id==2): ?> 
                <p>
                   (၁) <?php echo e($ins->f_safetydesc); ?>

                </p>
                <p>
                   (၂) <?php echo e($ins->f_healthdesc); ?>

                </p>
                <p>
                    (၃) <?php echo e($ins->f_welfaredesc); ?>

                </p>
                <p>
                    (၄) <?php echo e($ins->f_notedesc); ?>

                </p>
                <p>
                    (၅) <?php echo e($ins->f_otherdesc); ?>

                </p>
                <?php endif; ?>      
            </div>

           </div>
            <div style="text-align: right;">
               <span>(<?php echo e($ins->instructor); ?> ၊ <?php echo e($ins->instructor_rank); ?>)</span> <br> 
               <span><?php if($ins->inspectiontype_id==1): ?> အလုပ်သမားဥပဒေစစ်ဆေးရေး  <?php else: ?> အလုပ်ရုံစစ်ဆေးရေး <?php endif; ?></span> <br>
            </div><br>
            <div style="text-align: left;">
               <span>လုပ်ငန်းပိုင်ရှင်</span> <br> 
               <span><?php echo e($ins->factoryname); ?></span> <br> 
               <?php 
               $fadd=App\Factory::where('FactoryId',$ins->factory_id)->first();
              
               ?>
               <span><?php echo e($fadd->FactoryAddress); ?>၊ <?php echo e($fadd->zone->industrialzone_name); ?>၊ <?php echo e($fadd->township->township_name); ?></span>
            </div>
        
        </body>
    </html>