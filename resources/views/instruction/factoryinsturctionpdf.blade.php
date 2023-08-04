<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ညွှန်ကြားချက်များ</title>
        <style>
            @media print {
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
                    

                <h4>@if($ins->instructiondep=='Ministry')နေပြည်တော် ဝန်ကြီးဌာန @else{{App\Township::where('id',$ins->township_id)->value('township_name')}} ၊ {{App\District::where('id',$ins->district_id)->value('district_name')}} @endif</h4>               
                <h4>စာအမှတ်၊ {{$ins->docmentno}}</h4>
                <h4>ရက် စွဲ ၊ {{$ins->create_date}} </h4>
                
            </div>

       
        
            <div style="text-align: left;">
                <label style="text-align:left;">အကြောင်းအရာ။     </label>
                  &nbsp;&nbsp;{{$ins->instructiontitle}}
            </div>
        
        
            <div>
                <p style="line-height: 30px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    လူကြီးမင်းအုပ်ချူပ်သည့် {{$ins->factoryname}} စက်ရုံ ကို {{$ins->inspected_date}} ရက်နေ့တွင် ဝင်ရောက် စစ်ဆေးခဲ့ရာ ၁၉၅၁ခုနှစ်၊ အလုပ်ရုံများအက်ဥပဒေအရ လုပ်ငန်းခွင် ဘေးအန္တာရယ်ကင်းရှင်းရေးနှင့်ကျန်းမာရေးဆိုင်ရာပြဌာန်းချက်များနှင့် ကိုက်ညီမှု မရှိသည့် အောက်ပါအချက်များကို လိုက်နာဆောင်ရွက်ရန်နှင့် ဆောင်ရွက်မှု အခြေအနေကို {{$ins->instructiondate}}  ရက်နေ့ နောက်ဆုံးထား၍  ဤဦးစီးဌာန သို့ ပြန်လည်အကြောင်းကြားရန် ညွှန်ကြားလိုက်သည်။ အကယ်၍ လိုက်နာဆောင်ရွက်ရန် ပျက်ကွက်ပါကတည်ဆဲ ဥပဒေအရ အရေးယူခြင်းခံရမည် ဖြစ်ကြောင်း အသိပေးအပ်ပါသည်။</p>

               
                <p style="text-align: center;"><b>ဆောင်ရွက်ရန် အချက်များ</b></p> 
                
                <p>
                   (၁) {{$ins->f_safetydesc}} ၊ 
                </p>
                <p>
                   (၂) {{$ins->f_healthdesc}} ၊
                </p>
                <p>
                    (၃) {{$ins->f_welfaredesc}} ၊ 
                </p>
                <p>
                    (၄) {{$ins->f_notedesc}} ၊ 
                </p>
                <p>
                    (၅) {{$ins->f_otherdesc}} ၊
                </p>
            </div>

           </div>
            <div style="text-align: right;">
               <span>({{$ins->instructor}} ၊ {{$ins->instructor_rank}})</span> <br> 
               <span> အလုပ်ရုံစစ်ဆေးရေး </span> <br>
            </div><br>
            <div style="text-align: left;">
               <span>လုပ်ငန်းပိုင်ရှင်</span> <br> 
               <span>{{$ins->factoryname}}</span> <br> 
               <?php 
               $fadd=App\Factory::where('FactoryId',$ins->factory_id)->first();
              
               ?>
               <span>{{$fadd->FactoryAddress}}၊ {{$fadd->zone->industrialzone_name}}၊ {{$fadd->township->township_name}}</span>
            </div>
        
        </body>
    </html>