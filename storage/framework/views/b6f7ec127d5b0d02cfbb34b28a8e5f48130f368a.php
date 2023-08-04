<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေးနှင့်ကျန်းမာရေးစစ်ဆေးချက်ပုံစံ</title>
</head>
<style>
    @media  print {
				html, body {
					width: 100%;
					height: 297mm;
					font-family: 'Pyidaungsu';
				}  
			}
    @font-face {
				font-family: 'Pyidaungsu', serif;				
				font-weight: normal;
				font-style: normal;
			}
</style>
<body>
    <div style="padding:2% 2% 2% 2%;">
            <h4 style="text-align:right;">အမှတ်စဥ် - </h4>
            <h2 style="text-align:center;font-weight:bold;">အလုပ်ရုံနှင့်အလုပ်သမားဥပဒေစစ်ဆေးရေးဦးစီးဌာန<br>၁၉၅၁ ခုနှစ်၊ အလုပ်ရုံမှား အက်ဥပဒေအရ<br>လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေးနှင့်ကျန်းမာရေးစစ်ဆေးချက်ပုံစံ </h2>
            <p style="text-align:right;">စစ်ဆေးသည့်နေ့စွဲ <?php 
            $inspectiondate=datechangemyanmar(App\ShopInspectionInform::where('id',$shop_safety->check_id)->value('inspectiondate'));
            echo $inspectiondate;
        ?><?php echo e($shopinform->lastinspectiondate); ?>- <br><?php 
        $inspectedtime= App\ShopInspectionInform::where('id',$shop_safety->check_id)->value('inspectedtime');
        echo $inspectedtime;
        ?>(<?php echo e($shopinform->inspection_type); ?>)စစ်ဆေးခြင်း</p>
            <p style="font-weight:bold;text-align:left;line-height:20px;">အကြောင်းအရာအကျဉ်း</p> 
            
            <table style="width:100%;">
            <tbody>
            <!-- <tr><td style="text-align:left;line-height:40px;">၁။ အလုပ်ရုံအမည်နှင့်တည်နေရာ</td><td> -</td><td><?php echo e($shop_safety->shopname); ?>-<?php echo e($shop_safety->shopregion); ?></td></tr>
            <tr><td style="text-align:left;line-height:40px;">၂။ အလုပ်ရုံပိုင်ရှင် အမည် နှင့် နေရပ်</td><td> - </td><td><?php echo e($shop_safety->ownername); ?> - <?php echo e($shop_safety->owneraddress); ?></td></tr>
            <tr><td style="text-align:left;line-height:40px;">၃။ မှတ်ပုံတင်လုပ်ငန်းပိုင်ရှင် အမည်နှင့် နေရပ်</td><td> - </td><td><?php echo e($shop_safety->shopOwnerNrc); ?>- <?php echo e($shop_safety->shopOwnerAddress); ?></td></tr>
            <tr><td style="text-align:left;line-height:40px;">၄။ မှတ်ပုံတင်မန်နေဂျာ အမည်နှင့် နေရပ်</td><td> - </td><td><?php echo e($shop_safety->shopOwnerNrc); ?> -<?php echo e($shop_safety->shopOwnerAddress); ?> </td></tr>
            <tr><td style="text-align:left;line-height:40px;">၅။ တာဝန်ခံဖြေဆိုသူ အမည်နှင့် နေရပ်</td><td> - </td><td><?php echo e($shop_safety->intervieweeName); ?>-<?php echo e($shop_safety->intervieweeAddress); ?></td></tr>
            <tr><td style="text-align:left;line-height:40px;">၆။ အားအမျိုးအစားနှင့် မြင်းကောင်ရေ</td><td> - </td><td><?php echo e($shop_safety->energytype); ?> -<?php echo e($shop_safety->horsepower); ?></td></tr> -->
            <tr><td style="text-align:left;line-height:40px;">၁။ အလုပ်အမျိူးအစား၊ ထုတ်လုပ်သည့်ပစ္စည်း၊ ထုတ်လုပ်နိုင်စွမ်းအား</td><td> - </td><td><?php echo e($shop_safety->workType); ?>-<?php echo e($shop_safety->producedProduct); ?>-<?php echo e($shop_safety->producedPower); ?></td></tr>
            <tr><td style="text-align:left;line-height:40px;">၂။ အလုပ်သမားဦးရေ</td><td> - </td><td>ကျား(<?php echo e($shop_safety->menworker); ?>) ၊ မ(<?php echo e($shop_safety->womenworker); ?>) ၊ ပေါင်း ()</td></tr>
            <tr><td style="text-align:left;line-height:40px;">၃။ အလုပ်ချိန်</td><td> - </td><td><?php echo e($shop_safety->workTime); ?></span> </p>
            <tr><td style="text-align:left;line-height:40px;">၄။ ကလေးနှင့် လူရွယ်များကို အလုပ်လုပ်ရန် သင့်လျော်ကြောင်း တာဝန်ခံဆေးလက်မှတ် - ထုတ်ပေးထားမှု </td><td> - </td><td><?php echo e($shop_safety->medicalticket); ?></td></tr>
            <tr><td style="text-align:left;line-height:40px;">၅။ ကလေးနှင့် လူရွယ်များကို အလုပ်လုပ်ရန် သင့်လျော်ကြောင်း တာဝန်ခံဆေးလက်မှတ် - ထုတ်ပေးထားမှု </td><td> - </td><td><?php echo e($shop_safety->medicalticket); ?></td></tr>
            </tbody>
            </table>
            <p style="text-align:left;font-weight:bold;line-height:40px;">လုပ်ငန်းခွင်ကျန်းမာရေး</p> 
            <table border="1" style="border-collapse: collapse;width:100%;" >
            <thead>
                <tr>
                    <th style="border:none;line-height:50px;"></th>
                    <th style="border:none;line-height:50px;"></th>
                    <th style="border:block;line-height:50px;width:70px;">ကောင်း</th>
                    <th style="border:block;line-height:50px;width:70px;">သင့်</th>
                    <th style="border:block;line-height:50px;width:70px">ညံ့</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="border:none;text-align:center;">၁။</td>
                    <td style="border:none; line-height:50px;">(က) လုပ်ငန်းခွင်သန့်ရှင်းသပ်ရပ်မှု</td>
                    <?php if($shop_safety->workclean=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->workclean=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(ခ) ရေမြောင်းများရေစီးဆင်းမှု </td>
                    <?php if($shop_safety->drainflow=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->drainflow=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(ဂ) အလုပ်ခန်းများအား ဆေးသုတ်ထား</td>
                    <?php if($shop_safety->employmentPaint=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->employmentPaint=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။</td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၂။</td>
                    <td style="border:none; line-height:50px;">(က) လေဝင်လေထွက် ကောင်းမွန်မှု</td>
                    <?php if($shop_safety->aircondition=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->aircondition=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(ခ) အပူအအေးမျှတမှု </td>
                    <?php if($shop_safety->weather=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->weather=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(ဂ) အမှုန်အမွှား ၊ အခိုးအငွေ့များအခြေအနေ</td>
                    <?php if($shop_safety->particals=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->particals=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။<?php echo e($shop_safety->accomodation); ?></td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၃။</td>
                    <td style="border:none; line-height:50px;">အလုပ်ခန်းများတွင် လူကြပ်တည်းမှု</td>
                    <?php if($shop_safety->populationstatus=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->populationstatus=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။ <?php echo e($shop_safety->populationstatus); ?> </td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၄။</td>
                    <td style="border:none; line-height:50px;">(က) သဘာဝနှင့် ဖန်တီးထားသော အလင်းရောင် စီမံထားမှု</td>
                    <?php if($shop_safety->nature=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->nature=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(ခ) စူးရှသောအလင်းရောင်များမှ မျက်စိကို ကာကွယ်ပေးမှု </td>
                    <?php if($shop_safety->sunlight=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->sunlight=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
               
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။<?php echo e($shop_safety->natureandlight); ?></td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၅။</td>
                    <td style="border:none; line-height:50px;">သောက်သုံးရေစီမံထားရှိမှု (သန့်ရှင်းစင်ကြယ်မှု ။ လုံလောက်မှု)</td>
                    <?php if($shop_safety->drinkingwater=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->drinkingwater=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။<?php echo e($shop_safety->drinkingwatermana); ?></td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၆။</td>
                    <td style="border:none; line-height:50px;">(က) အိမ်သာများ စီမံထားရှိမှု</td>
                    <?php if($shop_safety->toilet	=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->toilet=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(ခ) အိမ်သာအမျိူးအစား </td>
                    <?php if($shop_safety->toiletType=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->toiletType=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(ဂ) ကျား/မ ခွဲခြားမှု</td>
                    <?php if($shop_safety->genderdivide=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->genderdivide=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(ဃ) အရေအတွက်</td>
                    <?php if($shop_safety->toiletquantity=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->toiletquantity=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။ <?php echo e($shop_safety->tioletfinding); ?></td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၇။</td>
                    <td style="border:none; line-height:50px;">ဆူညံသံထွက်ရှိမှု နှင့် ကာကွယ်ထားမှု</td>
                    <?php if($shop_safety->noiseprotect=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->noiseprotect=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။ <?php echo e($shop_safety->noiceprotection); ?></td>
                </tr>


            </tbody>
            </table>
            <p style="text-align:left;font-weight:bold;line-height:50px;">လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေး</p>
            <table border="1" style="border-collapse: collapse;width:100%;" >
            <thead>
                <tr>
                    <th style="border:none;line-height:50px;"></th>
                    <th style="border:none;line-height:50px;"></th>
                    <th style="border:block;line-height:50px;width:70px;">ကောင်း</th>
                    <th style="border:block;line-height:50px;width:70px;">သင့်</th>
                    <th style="border:block;line-height:50px;width:70px;">ညံ့</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="border:none;text-align:center;">၁။</td>
                    <td style="border:none; line-height:50px;">အန္တရယ်ရှိစက်ကိရိယာအစိတ်အပိုင်းများအား ကာရံထားရှိမှု</td>
                    <?php if($shop_safety->dangerprotect=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->dangerprotect=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။ <?php echo e($shop_safety->protectmach); ?></td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၂။</td>
                    <td style="border:none; line-height:50px;">သားရေပတ်ကြိုး၊ ဂီယာ ၊ ပင်နယံ ၊ ကလပ်(ချ်) ကိရိယာများ အခြေအနေ</td>
                    <?php if($shop_safety->machinestatus=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->machinestatus=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။ <?php echo e($shop_safety->machineprotection); ?></td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၃။</td>
                    <td style="border:none; line-height:50px;">မြောက်ပင့်စက် ၊ ပင့်စက် ၊ ကရိန်းများ</td>                   
                    <td ></td>
                    <td></td>
                    <td></td>
                   
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(က) စက်အစိတ်အပိုင်းများ ၊ ကြိုးများ ၊ ချိတ်များ ၊ အဆက်များ  </td>
                    <?php if($shop_safety->machinepieces=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->machinepieces=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(ခ) ခံနိုင်ဝန်အား ၊ တန်ချိန်ပြသခြင်း</td>
                    <?php if($shop_safety->load=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->load=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(ဂ) စစ်ဆေးတွေ့ရှိချက်များအားမှတ်တမ်းရေးသွင်းမှု</td>
                    <?php if($shop_safety->inspectionentry=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->inspectionentry=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။ <?php echo e($shop_safety->machinefinding); ?></td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၄။</td>
                    <td style="border:none; line-height:50px;">သင့်လျော်သောအဝတ်အစားဝတ်ဆင်ဆောင်ရွက်မှု(ကိုယ်ကြပ်အဝတ်အစား..) </td>
                    <?php if($shop_safety->wearing=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->wearing=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။<?php echo e($shop_safety->wearingstatus); ?></td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၅။</td>
                    <td style="border:none; line-height:50px;"> လှေကား၊လက်ရန်း၊ကြမ်းပြင်အထက်(၄)ပေရှိသော စင်္ကြန်သွားလမ်း အခြေအနေ </td>
                    <?php if($shop_safety->ladder=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->ladder=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။<?php echo e($shop_safety->ladderstatus); ?></td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၆။</td>
                    <td style="border:none; line-height:50px;"> လှောင်ကန်၊တွင်း၊ကြမ်းပေါက် ၊ ချိုင့်များ ကာရံ /ဖုံးအုပ်ထားမှု </td>
                    <?php if($shop_safety->holecover=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->holecover=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။</td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၇။</td>
                    <td style="border:none; line-height:50px;">အန္တရာယ်ရှိသော အခိုးအငွေ့များအား စနစ်တကျစမ်းသပ်မှု၊ ခွင့်ပြုစနစ် သုံးစွဲမှု </td>
                    <?php if($shop_safety->dangergas=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->dangergas=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။<?php echo e($shop_safety->dangergasuses); ?></td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၈။</td>
                    <td style="border:none; line-height:50px;">(က)မီးလောင်ပါက အလွယ်တကူ ထွက်ပြေးလွတ်မြောက်နိုင်ရန် အစီအမံများ</td>
                    <?php if($shop_safety->escapeman=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->escapeman=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(ခ) မီးအချက်ပေးကိရိယာ စီမံထားရှိမှု   </td>
                    <?php if($shop_safety->firealam=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->firealam=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(ဂ) အရေးပါ်ထွက်ပေါက်သတ်မှတ်ထားရှိမှု </td>
                    <?php if($shop_safety->emergencyentrace=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->emergencyentrace=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(ဃ) သွားလမ်းများရှင်းလင်းထားရှိမှု</td>
                    <?php if($shop_safety->cleargoway=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->cleargoway=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။<?php echo e($shop_safety->aboutfire); ?></td>
                </tr>

            </tbody>
            </table>
            <p style="text-align:left;font-weight:bold;">သက်သာချောင်ချိရေး</p>
            <table border="1" style="border-collapse: collapse;width:100%;" >
            <thead>
                <tr>
                    <th style="border:none;line-height:50px;"></th>
                    <th style="border:none;line-height:50px;"></th>
                    <th style="border:block;line-height:50px;width:70px;">ကောင်း</th>
                    <th style="border:block;line-height:50px;width:70px;">သင့်</th>
                    <th style="border:block;line-height:50px;width:70px;">ညံ့</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="border:none;text-align:center;">၁။</td>
                    <td style="border:none; line-height:50px;">လုပ်ငန်းသဘောအရ ထိုင်ခုံများထားရှိခြင်း  </td>
                    <?php if($shop_safety->seat=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->seat=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။<?php echo e($shop_safety->sittingplan); ?></td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၂။</td>
                    <td style="border:none; line-height:50px;">အစာစားခန်းနှင့်အနားယူခန်း စီမံထားရှိမှု  </td>
                    <?php if($shop_safety->dinningroom=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->dinningroom=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။<?php echo e($shop_safety->dinningroomplan); ?></td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၃။</td>
                    <td style="border:none; line-height:50px;">ကလေးထိန်းခန်းစီမံထားမှု </td>
                    <?php if($shop_safety->babysittingroom=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->babysittingroom=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။<?php echo e($shop_safety->babysittingplan); ?></td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၄။</td>
                    <td style="border:none; line-height:50px;">ဆေးကြောလျှော်ဖွတ်ရန်အစီအမံ  </td>
                    <?php if($shop_safety->washing=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->washing=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။<?php echo e($shop_safety->washingplan); ?></td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၅။</td>
                    <td style="border:none; line-height:50px;">အလုပ်ရုံ(သူနာပြုရေးဆိုင်ရာ)ညွှန်ကြားချက်များ  </td>
                    <?php if($shop_safety->nursing=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->nursing=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။<?php echo e($shop_safety->nursinginstruction); ?></td>
                </tr>
            </tbody>
            </table>
            <p style="text-align:left;font-weight:bold;">အထွေထွေ </p>
            <table border="1" style="border-collapse: collapse;width:100%;" >
            <thead>
                <tr>
                    <th style="border:none;line-height:50px;"></th>
                    <th style="border:none;line-height:50px;"></th>
                    <th style="border:block;line-height:50px;width:70px;">ကောင်း</th>
                    <th style="border:block;line-height:50px;width:70px;">သင့်</th>
                    <th style="border:block;line-height:50px;width:70px;">ညံ့</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="border:none;text-align:center;">၁။</td>
                    <td style="border:none; line-height:50px;">တော်တဆထိခိုက်မှုပုံစံ (က)/ လုပ်ငန်းခွင်ရောဂါ ဖြစ်ပွားပါက အကြောင်းကြားမှု </td>
                    <?php if($shop_safety->accidentinform=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->accidentinform=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။<?php echo e($shop_safety->accidentinformation); ?></td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၂။</td>
                    <td style="border:none; line-height:50px;">ဘေးအန္တရာယ်ကင်းရှင်းရေးနှင့်ကျန်းမာရေးဆောင်ရွက်မှု </td>
                    <?php if($shop_safety->safetyhealth=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->safetyhealth=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(က)ပညာပေးမှု/ဆွေးနွေးမှု   </td>
                    <?php if($shop_safety->negotiate	=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->negotiate	=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(ခ) သင်တန်းဆင်းများ၊ဆင့်ပွားသင်တန်းမျာ  </td>
                    <?php if($shop_safety->training	=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->training	=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။<?php echo e($shop_safety->safteyhealthcare); ?></td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၃။</td>
                    <td style="border:none; line-height:50px;">တစ်ကိုယ်ရည်သုံးကာကွယ်ရေးဝတ်စုံ(ထုတ်ပေးမှု၊လုံလောက်မှု၊သုံးစွဲမှု)</td>
                    <?php if($shop_safety->selfprotectwear=="ကောင်း"): ?>
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    <?php elseif($shop_safety->selfprotectwear=="သင့်"): ?>
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    <?php else: ?>
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    <?php endif; ?>
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။<?php echo e($shop_safety->selfprotection); ?></td>
                </tr>
                
            </tbody>
            </table>
            <p style="text-align:left;font-weight:bold;">ပြုပြင်ဆောင်ရွယ်ရန်လိုသည့်အချက်များ</p>
            <p style="text-align:left;">
             ၁။ <?php echo e($shop_safety->change1); ?> <br>
             ၂။ <?php echo e($shop_safety->change2); ?> <br>
             ၃။ <?php echo e($shop_safety->change3); ?> <br>
             ၄။ <?php echo e($shop_safety->change4); ?> <br>
             ၅။ <?php echo e($shop_safety->change5); ?> <br>


         </p>
         
    </div>
    <?php
function datechangemyanmar($date){
    $shop_safety=explode("-",$date);
    $standard_numsets = array("0","1","2","3","4","5","6","7","8","9");
    $standard_manysets = array('၀','၁','၂' ,'၃','၄','၅','၆','၇','၈','၉');
    $year=str_replace($standard_numsets,$standard_manysets,$shop_safety[0]);
    $day=str_replace($standard_numsets,$standard_manysets,$shop_safety[2]);
    if($shop_safety[1]=='01'){
        $month = 'ဇန်နဝါရီလ';
    }elseif($shop_safety[1]=='02'){
        $month = 'ဖေဖော်ဝါရီလ';
        
    }elseif($shop_safety[1]=='03'){
        $month = 'မတ်လ';
        
    }elseif($shop_safety[1]=='04'){
        $month = 'ဧပြီလ';
        
    }elseif($shop_safety[1]=='05'){
        $month = 'မေလ';
        
    }elseif($shop_safety[1]=='06'){
        $month = 'ဇွန်လ';
        
    }elseif($shop_safety[1]=='07'){
        $month = 'ဂျူလိုင်လ';
        
    }elseif($shop_safety[1]=='08'){
        $month = 'သြဂုတ်လ';
        
    }elseif($shop_safety[1]=='09'){
        $month = 'စက်တင်ဘာလ';
        
    }elseif($shop_safety[1]=='10'){
        $month = 'အောက်တိုဘာလ';
        
    }elseif($shop_safety[1]=='11'){
        $month = 'နိုဝင်ဘာလ';
        
    }elseif($shop_safety[1]=='12'){
        $month = 'ဒီဇင်ဘာလ';
        
    }
    return   $year .'ခုနှစ်၊ '.$month.' ၊ '.$day.' ရက် ';
}
?>

</body>
</html>