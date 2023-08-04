<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက်ပုံစံ
</title>
</head>
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
            table{
                border-collapse: collapse;
            }
            td,th,div{line-height:50px;padding-left:10px;vertical-align:top;}
            td{text-align:center;}
</style>
<body>
    <div style="padding:2% 2% 2% 2%;">
        <h2 style="text-align:center;">အလုပ်ရုံနှင့်အလုပ်သမားဥပဒေစစ်ဆေးရေးဦးစီးဌာန <br> စစ်ဆေးချက်မှတ်တမ်း (<?php echo e($factoryinform->inspectiontype); ?>)<br> အလုပ်ရုံများအက်ဥပဒေ ၊ အခကြေးငွေပေးချေရေးဥပဒေနှင့် <br>ခွင့်ရက်နှင့်အလုပ်ပိတ်ရက်အက်ဥပဒေများအရ စစ်ဆေးချက်ပုံစံ </h2>
        <p style="text-align:right;">စစ်ဆေးသည့်ရက်စွဲ - 
        <?php 
            $inspectiondate=datechangemyanmar(App\FactoryInspectionInforms::where('cid',$factoryLabourLaw->factoryinspectioninform_id)->value('inspectiondate'));
            echo $inspectiondate;
        ?>
         </p>
        <!-- <p style="text-align:right;">နောက်ဆုံးစစ်ဆေးခဲ့သည့်ရက်စွဲ - 
        
        </p> -->
        <hr>
        <h2 style="text-align:center;font-weight:bold;">အပိုင်း(၁)</h2>
        <table style="width:100%;">
            <tbody>
            <tr>
                    <td colspan="3"><h3 style="font-weight:bold;text-align:left;">လုပ်ငန်းဌာနဆိုင်ရာအချက်အလက်များ</td>
                </tr>
                <tr>
                    <td>၁။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">အလုပ်ရုံ၊စက်ရုံ၊ အမည်နှင့်လိပ်စာ</td>
                    <td> -</td>
                    <td><?php echo e($factory -> FactoryName); ?> <?php echo e($factory -> FactoryAddress); ?></td>
                </tr>
                <tr>
                    <td> ၂။ </td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">(က)လုပ်ငန်းပိုင်ရှင်အမည်နှင့် လိပ်စာ</td>
                    <td> - </td>
                    <td><?php echo e($factoryinform->workerownername); ?> - <?php echo e($factoryinform->workerowneraddress); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">(ခ)ပိုင်ရှင်အမည်နှင့် လိပ်စာ </td>
                    <td> - </td>
                    <td><?php echo e($factoryinform->ownername); ?> - <?php echo e($factoryinform->owneraddress); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">(ဂ)ရုံးမှတ်တမ်းအရ ပိုင်ရှင်အမည်နှင့် လိပ်စာ</td>
                    <td> - </td>
                    <td><?php echo e($factoryinform->registerownername); ?></td>
                </tr>
                <tr>
                    <td>၃။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">မန်နေဂျာအမည်နှင့် လိပ်စာ</td>
                    <td> - </td>
                    <td><?php echo e($factoryinform -> managername); ?> - <?php echo e($factoryinform -> manageraddress); ?></td>
                </tr>
                <tr>
                    <td>၄။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">တာဝန်ခံဖြေဆိုသူ အမည်နှင့်ရာထူး</td>
                    <td> - </td>
                    <td><?php echo e($factoryinform -> intervieweename); ?> - <?php echo e($factoryinform -> intervieweerank); ?></td>
                </tr>
                <tr>
                    <td>၅။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">အားပေးစက်အမျိုးအစားနှင့်မြင်းကောင်ရေအား</td>
                    <td> - </td>
                    <td> <?php echo e($factoryinform -> machinetype); ?> - <?php echo e($factoryinform -> horsepower); ?></td>
                </tr>
                <tr>
                    <td>၆။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">ထုတ်လုပ်သော ပစ္စည်းအမျိုးအစားနှင့် ထုတ်လုပ်နိုင်သည့် အရေအတွက်</td>
                    <td> - </td>
                    <td><?php echo e($factoryinform -> producttype); ?> - <?php echo e($factoryinform -> productquantity); ?></td>
                </tr>
                <tr>
                    <td>၇။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">အလုပ်ရုံဖွင့်လှစ်ခြင်းရှိ/မရှိ (ပိတ်ထားပါက နောက်ဆုံးလုပ်ကိုင်ခဲ့သည့် ရက်စွဲ)</td>
                    <td> - </td>
                    <td> <?php echo e($factoryinform -> jobopen); ?> - <?php echo e($factoryinform -> closeddate); ?></span>
                </p>
                <tr>
                    <td>၈။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;"> အလုပ်သမားအင်အား </td>
                </tr>
            </tbody>
        </table>
        <table border="1" style="border-collapse:collapse;width:100%;">
                    <tr>
                        <td rowspan="2">ဝင်ငွေအမျိုးအစား</td>
                        <td colspan="2">လူကြီး (၁၈နှစ်အထက်)</td>
                        <td colspan="2">လူရွယ်(၁၆နှစ်မှ ၁၈နှစ်)</td>
                        <td colspan="2">ကလေး(၁၆နှစ်မှ၁၈နှစ်)</td>
                        <!-- <td colspan="2">စုစုပေါင်း</td> -->
                    </tr>
                    <tr>
                        <td>ကျား</td>
                        <td>မ</td>
                        <td>ကျား</td>
                        <td>မ</td>
                        <td>ကျား</td>
                        <td>မ</td>
                        <!-- <td>ကျား</td>
                        <td>မ</td> -->
                    </tr>
                    <tr>
                      <td>လစား</td>
                      <td><?php echo e($factoryinform -> Mmenworker); ?></td>
                      <td><?php echo e($factoryinform -> Mwomenworker); ?></td>
                      <td><?php echo e($factoryinform -> MAmaleworker); ?></td>
                      <td><?php echo e($factoryinform -> MAfemaleworker); ?></td>
                      <td><?php echo e($factoryinform -> Cmenworker); ?></td>
                      <td><?php echo e($factoryinform -> Cwomenworker); ?></td>
                      <!-- <td><?php echo e($factoryinform -> totalmen); ?></td>
                      <td><?php echo e($factoryinform -> totalwomen); ?></td> -->
                    </tr>
                    <tr>
                        <td>နေ့စား</td>
                        <td><?php echo e($factoryinform -> Dmenworker); ?></td>
                        <td><?php echo e($factoryinform -> Dwomenworker); ?></td>
                        <td><?php echo e($factoryinform -> DAmaleworker); ?></td>
                        <td><?php echo e($factoryinform -> DAfemaleworker); ?></td>
                        <td><?php echo e($factoryinform -> DCmaleworker); ?></td>
                        <td><?php echo e($factoryinform -> DCfemaleworker); ?></td>
                        <!-- <td><?php echo e($factoryinform -> dailytotalmen); ?></td>
                        <td><?php echo e($factoryinform -> dailytotalwomen); ?></td> -->
                    </tr>
                     <tr>
                        <td>ပုတ်ပြတ်</td>
                        <td><?php echo e($factoryinform -> Pmenworker); ?></td>
                        <td><?php echo e($factoryinform -> Pwomenworker); ?></td>
                        <td><?php echo e($factoryinform -> PAmaleworker); ?></td>
                        <td><?php echo e($factoryinform -> PAfemaleworker); ?></td>
                        <td><?php echo e($factoryinform -> PCmaleworker); ?></td>
                        <td><?php echo e($factoryinform -> PCfemaleworker); ?></td>
                        <!-- <td><?php echo e($factoryinform -> piecetotalmen); ?></td>
                        <td><?php echo e($factoryinform -> piecetotalwomen); ?></td> -->
                    </tr>
                    <tr>
                        <td>ပုံသေ</td>
                        <td><?php echo e($factoryinform -> Cmenworker); ?></td>
                        <td><?php echo e($factoryinform -> Cwomenworker); ?></td>
                        <td><?php echo e($factoryinform -> CAmaleworker); ?></td>
                        <td><?php echo e($factoryinform -> CAfemaleworker); ?></td>
                        <td><?php echo e($factoryinform -> CCmaleworker); ?></td>
                        <td><?php echo e($factoryinform -> CCfemaleworker); ?></td>
                        <!-- <td><?php echo e($factoryinform -> constanttotalmen); ?></td>
                        <td><?php echo e($factoryinform -> constanttotalwomen); ?></td> -->
                    </tr>
                    <!-- <tr>
                        <td>စုစုပေါင်း</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr> -->
        </table>
        <br>
        <h2 style="text-align:center;font-weight:bold;">အပိုင်း(၂)</h2>
        <table style="width:100%;">
            <tbody>
                <tr>
                    <td colspan="3"><h3 style="font-weight:bold;text-align:left;">အလုပ်ချိန်သတ်မှတ်ချက်ဆိုင်ရာ အချက်အလက်များ</td>
                </tr>
                <tr>
                    <td>၁။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">လုပ်ငန်းပိုင်ရှင်ကပေးပို့ရန်နို့တစ်စာပေးပို့ခြင်း ပြု/မပြု</td>
                    <td> -</td>
                    <td><?php echo e($factoryLabourLaw->sentnotice); ?></td>
                </tr>
                <tr>
                    <td> ၂။ </td>
                    <td>(က)</td>
                    <td style="text-align:left;line-height:40px;">အလုပ်လုပ်ရန်ကာလအပိုင်းအခြားဆိုင်ရာ နို့တစ်စာ ပြသခြင်း ပြု/မပြု</td>
                    <td> - </td>
                    <td><?php echo e($factoryLabourLaw->shownotice); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ခ)</td>
                    <td style="text-align:left;line-height:40px;">အလုပ်လုပ်ရန်ကာလအပိုင်းအခြားများ စီစဉ်ထားမှု -<br>နို့တစ်စာအတွင်း အလုပ်လုပ်ချိန်များ၊အနားပေးချိန်၊ရက်သတ္တပတ်အလုပ်ပိတ်ရက်/နားရက်    နေ့စွဲ ၊ </td>
                    <td> - </td>
                    <td> <?php echo e($factoryLabourLaw->workingduration); ?> </td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ဂ)</td>
                    <td style="text-align:left;line-height:40px;">တစ်မျိုးတည်းသောအလုပ်၌ ထပ်နေသော အလှည့် ရှိ/မရှိ </td>
                    <td> - </td>
                    <td> <?php echo e($factoryLabourLaw->repeatitivework); ?> </td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ဃ)</td>
                    <td style="text-align:left;line-height:40px;">နို့တစ်စာအပြောင်းအလဲ ရှိ/မရှိ၊ အကြောင်း ကြား/မကြား</td>
                    <td> - </td>
                    <td> <?php echo e($factoryLabourLaw->changenotice); ?> - <?php echo e($factoryLabourLaw->informchangenotice); ?> </td>
                </tr>
                <tr>
                    <td></td>
                    <td>(င)</td>
                    <td style="text-align:left;line-height:40px;">
                        ချိတ်ဆွဲသည့်နို့တစ်စာပါ အလုပ်ချိန်နှင့် အညီ လုပ်/မလုပ်
                    </td>
                    <td> - </td>
                    <td> <?php echo e($factoryLabourLaw->equalnotice); ?> </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">
                        (၁) နေ့စဉ်
                        
                    </td>
                    <td>-</td>
                    <td>
                        <?php echo e($factoryLabourLaw->dailyworktime); ?>

                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">
                        (၂) ရက်သတ္တပတ်
                    </td>
                    <td>-</td>
                    <td>
                        <?php echo e($factoryLabourLaw->weeklyworktime); ?>

                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">
                    (၃) အနားပေးချိန်
                        
                    </td>
                    <td>-</td>
                    <td>
                    <?php echo e($factoryLabourLaw->resttime); ?>

                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">
                    (၄) ရက်သတ္တပတ်ပိတ်ရက်
                    </td>
                    <td>-</td>
                    <td>
                    <?php echo e($factoryLabourLaw->weekendholiday); ?>

                    </td>
                </tr>
                <tr>
                    <td>၃။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">ရက်သတ္တပတ်အလုပ်ပိတ်ရက်(တနင်္ဂနွေနေ့)တွင် လုပ်ကိုင်ခြင်းအတွက် ရှေ့သုံးရက် (သို့) နောက်သုံးရက်တွင် အနားပေးမှု ရှိ/မရှိနှင့် အက်ဥပဒေနှင့်အညီ ရက်စားအနားပေးမှု ရှိ/မရှိ (သို့) အကြောင်းကြားမှုရှိ/မရှိ</td>
                    <td>-</td>
                    <td> <?php echo e($factoryLabourLaw->insteadrelaxdays); ?> </td>
                </tr>
                <tr>
                    <td>၄။</td>
                    <td>(က)</td>
                    <td style="text-align:left;line-height:40px;font-weight:bold;">အချိန်ပိုလုပ်ကိုင်ခြင်း</td>
                    <td> - </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">
                        <div style="text-align:left;">(၁) ခွင့်ပြုချက်/ကြိုတင်ခွင့်ပြုချက်ရယူခြင်း</div>
                        <div style="text-align:left;">(၂) ခွင့်ပြုချက်နှင့်အညီ လုပ်ကိုင်ခြင်</div>
                        <div style="text-align:left;">(၃) ခွင့်ပြုသည့်နာရီကို ပုံသေနည်းပါတွက်ချက်မှုနှင့် ကိုက်ညီမှု</div>
                        <div style="text-align:left;">(၄) လုပ်ခနှုန်းထား</div>
                        <div style="text-align:left;">(၅) အချိန်ပိုလုပ်ခခြားနားငွေ</div>
                    </td>
                    <td>
                        <div>-</div>
                        <div>-</div>
                        <div>-</div>
                        <div>-</div>
                        <div>-</div>
                    </td>
                    <td>
                        <div><?php echo e($factoryLabourLaw->prepermit); ?></div>
                        <div><?php echo e($factoryLabourLaw->workwithpermit); ?></div>
                        <div><?php echo e($factoryLabourLaw->allowtimecalculate); ?></div>
                        <div><?php echo e($factoryLabourLaw->otpayscale); ?></div>
                        <div><?php echo e($factoryLabourLaw->diffrentotpayment); ?></div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ခ)</td>
                    <td style="text-align:left;line-height:40px;font-weight:bold;">တရားမဝင် အချိန်ပိုလုပ်ကိုင်ခြင်း -</td>
                    <td></td>
                    <td></td>
                </p>
                <tr>
                <td></td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">
                        <div style="text-align:left;">(၁) မည်သူ၏ခွင့်ပြုချက်ဖြင့်လုပ်ကိုင်ခြင်း</div>
                        <div style="text-align:left;">(၂) လုပ်ကိုင်မှုအခြေအနေ(ကာလ၊နေ့စဉ်/အပတ်စဉ်-နာရီ)</div>
                        <div style="text-align:left;">(၃) ပေးချေသည့် အချိန်ပိုလုပ်ခနှုန်းထား</div>
                    </td>
                    <td> 
                        <div>-</div>
                        <div>-</div>
                        <div>-</div>
                    </td>
                    <td>
                        <div><?php echo e($factoryLabourLaw->illegalotallow); ?></div>
                        <div><?php echo e($factoryLabourLaw->illegalottime); ?></div>
                        <div><?php echo e($factoryLabourLaw->illegalotpayment); ?></div>
                    </td>
                </tr>
                <tr>
                    <td>၅။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;font-weight:bold;">တစ်ရက်တည်းတွင် အလုပ်ရုံ(၂)ရုံ၌လုပ်ကိုင်ခြင်း</td>
                    <td> - </td>
                    <td><?php echo e($factoryLabourLaw->twofacbyday); ?></td>
                </tr>
                <tr>
                    <td>၆။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;font-weight:bold;">ကလေးအလုပ်သမားများအလုပ်လုပ်ကိုင်ခြင်း</td>
                    <td> - </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(က)</td>
                    <td style="text-align:left;line-height:40px;">သတ်မှတ်အလုပ်ချိန်နှင့်အညီ လုပ်ကိုင်ခြင်း</td>
                    <td> - </td>
                    <td><?php echo e($factoryLabourLaw->definedworktime); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ခ)</td>
                    <td style="text-align:left;line-height:40px;">ည(၆)နာရီမှ နံနက်(၆)နာရီအတွင်းလုပ်ကိုင်စေခြင်း</td>
                    <td> - </td>
                    <td><?php echo e($factoryLabourLaw->stosworktime); ?></td>
                </tr>
            </tbody>
        </table>
        <br>
        <h2 style="text-align:center;font-weight:bold;">အပိုင်း(၃)</h2>
        <table style="width:100%;">
            <tbody>
                <tr>
                    <td>၁။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;"><h3 style="font-weight:bold;text-align:left;">အလုပ်ရုံ၊စက်ရုံ၊ အမည်နှင့်လိပ်စာ</h3></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(က)</td>
                    <td style="text-align:left;line-height:40px;">ရှောင်တခင်ခွင့်(၆)ရက် ခံစားခွင့် ပေး/မပေး</td>
                    <td> - </td>
                    <td><?php echo e($factoryLabourLaw->causalleave); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ခ)</td>
                    <td style="text-align:left;line-height:40px;">လုပ်သက်ခွင့်(၁၀)ရက် ခံစားခွင့် ပေး/မပေး </td>
                    <td> - </td>
                    <td><?php echo e($factoryLabourLaw->annualleave); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ဂ)</td>
                    <td style="text-align:left;line-height:40px;">ဆေးလက်မှတ်ခွင့် ခံစားခွင့် ပေး/မပေး</td>
                    <td> - </td>
                    <td><?php echo e($factoryLabourLaw->medicalleave); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ဃ)</td>
                    <td style="text-align:left;line-height:40px;">မိးဖွားခွင့် ခံစားခွင့် ပေး/မပေး</td>
                    <td> - </td>
                    <td><?php echo e($factoryLabourLaw->maternity); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(င)</td>
                    <td style="text-align:left;line-height:40px;">အများပြည်သူအလုပ်ပိတ်ရက် ခံစားခွင့် ပေး/မပေး</td>
                    <td> - </td>
                    <td><?php echo e($factoryLabourLaw->publicholiday); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(စ)</td>
                    <td style="text-align:left;line-height:40px;">ရက်သတ္တပတ်အလုပ်ပိတ်ရက် ခံစားခွင့် ပေး/မပေး</td>
                    <td> - </td>
                    <td><?php echo e($factoryLabourLaw->weekholiday); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ဆ)</td>
                    <td style="text-align:left;line-height:40px;">ခွင့်မှတ်တမ်း ထား/မထား</td>
                    <td> - </td>
                    <td><?php echo e($factoryLabourLaw->leavenote); ?></td>
                </tr>
            </tbody>
        </table>   
        <br>
        <h2 style="text-align:center;font-weight:bold;">အပိုင်း(၄)</h2>
        <table style="width:100%;">
            <tbody>
                <tr>
                    <td colspan="3"><h3 style="font-weight:bold;text-align:left;">သက်သာချောင်ချိရေးဆိုင်ရာ အချက်အလက်များ</td>
                </tr>
                <tr>
                    <td>၁။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">ကိုယ်လက်ဆေးကြောရန် စီမံထားရှိခြင်</td>
                    <td></td>
                    <td></td>
                    
                </tr>
                <tr>
                    <td></td>
                    <td>(က)</td>
                    <td style="text-align:left;line-height:40px;">အမျိုးအမည်</td>
                    <td> - </td>
                    <td><?php echo e($factoryLabourLaw->washcategory); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ခ)</td>
                    <td style="text-align:left;line-height:40px;">အရေအတွက်</td>
                    <td> - </td>
                    <td><?php echo e($factoryLabourLaw->washamount); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ဂ)</td>
                    <td style="text-align:left;line-height:40px;">အသုံးပြုနိုင်မှုအခြေအနေ</td>
                    <td> - </td>
                    <td><?php echo e($factoryLabourLaw->washusestate); ?></td>
                </tr>
                <tr>
                    <td>၂။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">ထိုင်ခွင့်ကြုံက ထိုင်နိုင်ရန် စီမံထားရှိခြင်း</td>
                    <td></td>
                    <td></td>
                    
                </tr>
                <tr>
                    <td></td>
                    <td>(က)</td>
                    <td style="text-align:left;line-height:40px;">အမျိုးအမည်</td>
                    <td> - </td>
                    <td><?php echo e($factoryLabourLaw->sitcategory); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ခ)</td>
                    <td style="text-align:left;line-height:40px;">အရေအတွက်</td>
                    <td> - </td>
                    <td><?php echo e($factoryLabourLaw->sitamount); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ဂ)</td>
                    <td style="text-align:left;line-height:40px;">အသုံးပြုနိုင်မှုအခြေအနေ</td>
                    <td> - </td>
                    <td><?php echo e($factoryLabourLaw->situsestate); ?></td>
                </tr>
                <tr>
                    <td>၃။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">သူနာပြုဆေးသေတ္တာ၊ သူနာပြုဆေးခန်း၊ ဆေးပေးရုံထားရှိခြင်းအခြေအနေ</td>
                    <td>-</td>
                    <td><?php echo e($factoryLabourLaw->medicalcaretype); ?></td>
                    
                </tr>
                <tr>
                    <td>၄။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">အလုပ်နားခန်းနှင့်အစာစားခန်းများထားရှိခြင်း အခြေအနေ (အလုပ်သမား ၁၀၀ နှင့်အထက်ရှိ လုပ်ငန်းများ)</td>
                    <td>-</td>
                    <td><?php echo e($factoryLabourLaw->dinningroom); ?></td>
                    
                </tr>
                <tr>
                    <td>၅။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">ကလေးထိန်းခန်းရှိခြင်း အခြေအနေ(မိခင်လုပ်သား ၁၀၀ဦးနှင့်အထက်ရှိ လုပ်ငန်းများ)</td>
                    <td>-</td>
                    <td><?php echo e($factoryLabourLaw->babysittingroom); ?></td>
                    
                </tr>
            <tbody>
        </table>
        <br>
        <h2 style="text-align:center;font-weight:bold;">အပိုင်း(၅)</h2>
        <table style="width:100%;">
            <tbody>
                <tr>
                    <td>၁။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">သောက်ရေ</td>
                    <td></td>
                    <td></td>
                    
                </tr>
                <tr>
                    <td></td>
                    <td>(က)</td>
                    <td style="text-align:left;line-height:40px;">တည်နေရာ</td>
                    <td> - </td>
                    <td><?php echo e($factoryLabourLaw->waterplace); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ခ)</td>
                    <td style="text-align:left;line-height:40px;">သောက်ရေသန့်ရှင်းမှု</td>
                    <td> - </td>
                    <td><?php echo e($factoryLabourLaw->watercleanence); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ဂ)</td>
                    <td style="text-align:left;line-height:40px;">လုံလောက်မှု (အိုး/ရေပမာဏ)</td>
                    <td> - </td>
                    <td><?php echo e($factoryLabourLaw->suffientamount); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ဃ)</td>
                    <td style="text-align:left;line-height:40px;">နွေရာသီတွင် အေးမြအောင်ဆောင်ရွက်ပေးမှု</td>
                    <td> - </td>
                    <td><?php echo e($factoryLabourLaw->cooling); ?></td>
                </tr>
                <tr>
                    <td>၁။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">အိမ်သာ</td>
                    <td></td>
                    <td></td>
                    
                </tr>
                <tr>
                    <td></td>
                    <td>(က)</td>
                    <td style="text-align:left;line-height:40px;">အမျိုးအစား၊ အခန်းအရေအတွက်</td>
                    <td> - </td>
                    <td><?php echo e($factoryLabourLaw->tioletcategroy); ?> - <?php echo e($factoryLabourLaw->tioletroom); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ခ)</td>
                    <td style="text-align:left;line-height:40px;">ကျား/မ ခွဲခြားမှု</td>
                    <td> - </td>
                    <td><?php echo e($factoryLabourLaw->genderdivide); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ဂ)</td>
                    <td style="text-align:left;line-height:40px;">သန့်ရှင်းမှု</td>
                    <td> - </td>
                    <td><?php echo e($factoryLabourLaw->tioletclean); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ဃ)</td>
                    <td style="text-align:left;line-height:40px;">တည်နေရာနှင့် လုံခြုံမှု</td>
                    <td> - </td>
                    <td><?php echo e($factoryLabourLaw->tioletplace); ?></td>
                </tr>
                <tr>
                    <td>၃။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">မတော်တဆထိခိုက်မှု ရှိ/မရှိ နှင့် အစီရင်ခံစာပေးပို့ခြင်း</td>
                    <td> - </td>
                    <td><?php echo e($factoryLabourLaw->accidentcase); ?></td>
                </tr>
            </tbody>
        </table>
        <br>
        <h2 style="text-align:center;font-weight:bold;">အပိုင်း(၆)</h2>
        <table style="width:100%;">
            <tbody>
                <tr>
                    <td colspan="3"><h3 style="font-weight:bold;text-align:left;">အခကြေးငွေပေးချေမှုဆိုင်ရာ အချက်အလက်များ</td>
                </tr>
                <tr>
                    <td>၁။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">
                        <div>ပေးချေရန်သတ်မှတ်ထားသည့် ကာလအပိုင်းအခြားနှင့် ပေးချေသည့်နေ့ရက်</div>
                        <div style="text-align:left;">လစာရ</div>
                        <div style="text-align:left;">နေ့စား</div>
                        <div style="text-align:left;">ပုတ်ပြတ်</div>
                        <div style="text-align:left;">ပုံသေ</div>
                    </td>
                    <td>
                        <div>&nbsp;</div>
                        <div>-</div>
                        <div>-</div>
                        <div>-</div>
                        <div>-</div>
                    </td>
                    <td>
                        <div>&nbsp;<div>
                        <div><?php echo e($factoryLabourLaw->Mpaymentduration); ?></div>
                        <div><?php echo e($factoryLabourLaw->Dpaymentduration); ?></div>
                        <div><?php echo e($factoryLabourLaw->Ppaymentduration); ?></div>
                        <div><?php echo e($factoryLabourLaw->Cpaymentduration); ?></div>
                    </td>
                    
                </tr>
                <tr>
                    <td>၂။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">အချိန်ပိုလုပ်ခပေးချေရန်အစီအစဥ် နှင့် ပေးချေမှု</td>
                    <td>-</td>
                    <td><?php echo e($factoryLabourLaw->OTplan); ?> - <?php echo e($factoryLabourLaw->OTpaymentplan); ?></td>
                </tr>
                <tr>
                    <td>၃။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">အခြေခံလုပ်ခအပြင် အခြားပေးချေငွေများနှင့် စည်းကမ်းချက်များ</td>
                    <td>-</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(က)</td>
                    <td style="text-align:left;line-height:40px;">ကျွမ်းကျင်ကြေး အနည်းဆုံး/အများဆုံး</td>
                    <td>-</td>
                    <td><?php echo e($factoryLabourLaw->miniexperprize); ?> - <?php echo e($factoryLabourLaw->maxexperprize); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ခ)</td>
                    <td style="text-align:left;line-height:40px;">ရက်မှန်ကြေး အနည်းဆုံး/အများဆုံး</td>
                    <td>-</td>
                    <td><?php echo e($factoryLabourLaw->miniregularprize); ?> - <?php echo e($factoryLabourLaw->maxregularprizee); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ဂ)</td>
                    <td style="text-align:left;line-height:40px;">အထည်ကြေး/ထုတ်လုပ်မှုဆုကြေး အနည်းဆုံး/အများဆုံး</td>
                    <td>-</td>
                    <td><?php echo e($factoryLabourLaw->miniproductprize); ?> - <?php echo e($factoryLabourLaw->maxproductprize); ?></td>
                </tr>
                <tr>
                    <td>၄။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">ဖြတ်တောက်ငွေများ</td>
                    <td>-</td>
                    <td><?php echo e($factoryLabourLaw->deductamount); ?></td>
                </tr>
                <tr>
                    <td>၅။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">ဒဏ်တပ်ရန်ထားရှိသော စည်းကမ်းချက်များ(အတည်ပြုချက် ရှိ/မရှိ အပါအဝင်)</td>
                    <td>-</td>
                    <td><?php echo e($factoryLabourLaw->fine); ?></td>
                </tr>
                <tr>
                    <td>၆။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">
                        <div>တရားမဝင်ဖြတ်တောက်မှုများ/မပေး‌ချေရသေးမှုများ</div>
                        <div style="text-align:left;">ကာလ</div>
                        <div style="text-align:left;">လုပ်သားအရေအတွက်</div>
                        <div style="text-align:left;">သင့်ငွေ</div>
                    </td>
                    <td>
                        <div>&nbsp;</div>
                        <div>-</div>
                        <div>-</div>
                        <div>-</div>
                    </td>
                    <td>
                        <div>&nbsp;</div>
                        <div><?php echo e($factoryLabourLaw->illegaldeductedtime); ?></div>
                        <div><?php echo e($factoryLabourLaw->illegaldeductedworkers); ?></div>
                        <div><?php echo e($factoryLabourLaw->illegaldedutedamount); ?></div>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <h2 style="text-align:center;font-weight:bold;">အပိုင်း(၇)</h2>
        <table style="width:100%;">
            <tbody>
                <tr>
                    <td colspan="3"><h3 style="font-weight:bold;text-align:left;">မှတ်တမ်းစာအုပ်များနှင့် မှတ်တမ်းများ</td>
                </tr>
                <tr>
                    <td>၁။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">အလုပ်သမားမှတ်ပုံတင်စာအုပ် ရှိ/မရှိ</td>
                    <td>-</td>
                    <td><?php echo e($factoryLabourLaw->workerregistrationbook); ?></td>
                    
                </tr>
                <tr>
                    <td>၂။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">ကလေးအလုပ်သမား မှတ်ပုံတင်စာအုပ် ရှိ/မရှိ</td>
                    <td>-</td>
                    <td><?php echo e($factoryLabourLaw->childregistrationbook); ?></td>
                    
                </tr>
                <tr>
                    <td>၃။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">အထွေထွေမှတ်ပုံတင်စာအုပ် ရှိ/မရှိ</td>
                    <td>-</td>
                    <td><?php echo e($factoryLabourLaw->generalbook); ?></td>
                    
                </tr>
                <tr>
                    <td>၄။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">အလုပ်သမား နေ့စဥ် အလုပ်တက်/ဆင်း မှတ်တမ်း ရှိ/မရှိ</td>
                    <td>-</td>
                    <td><?php echo e($factoryLabourLaw->wokerofficetimebook); ?></td>
                    
                </tr>
                <tr>
                    <td>၅။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">အချိန်ပိုလုပ်ကိုင်ခြင်း မှတ်တမ်း ရှိ/မရှိ</td>
                    <td>-</td>
                    <td><?php echo e($factoryLabourLaw->otbook); ?></td>
                    
                </tr>
                <tr>
                    <td>၆။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">အချိန်ပို ငွေကြေးခံစားခွင့်ပြုသည့် မျတ်တမ်းရှိ/မရှိ</td>
                    <td>-</td>
                    <td><?php echo e($factoryLabourLaw->allowotnote); ?></td>
                    
                </tr>
                <tr>
                    <td>၇။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">လုပ်ခပေးချေခြင်းမှတ်တမ်း ရှိ/မရှိ</td>
                    <td>-</td>
                    <td><?php echo e($factoryLabourLaw->paymentnote); ?></td>
                    
                </tr>
                <tr>
                    <td>၈။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">အခကြေးငွေမှ နှုတ်ယူဖြတ်တောက်သည့်ငွေများ အသုံးပြုမှု မှတ်တမ်းရှိ/မရှိ</td>
                    <td>-</td>
                    <td><?php echo e($factoryLabourLaw->deductednote); ?></td>
                    
                </tr>
                <tr>
                    <td colspan="4" style="text-align:right;font-weight:bold;">တာဝန်ခံဖြေဆိုသူ၏ လက်မှတ်</td>  
                </tr>
            </tbody>
        </table>
        <br>
        <h2 style="text-align:center;font-weight:bold;">အပိုင်း(၈)</h2>
        <table style="width:100%;">
            <tbody>
                <tr>
                    <td>၁။</td>
                    <td></td>
                    <td style="text-align:left;line-height:40px;">ညွှန်ကြားရန်အချက်များ(မူကြမ်း)</td>
                    <td>-</td>
                    <td></td>
                    
                </tr>
                <tr>
                    <td></td>
                    <td colspan="4" style="text-align:left;">
                        (က)<?php echo e($factoryLabourLaw->instruction1); ?>

                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="4" style="text-align:left;">
                        (ခ)<?php echo e($factoryLabourLaw->instruction2); ?>

                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="4" style="text-align:left;">
                        (ဂ)<?php echo e($factoryLabourLaw->instruction3); ?>

                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="4" style="text-align:left;">
                        (ဃ)<?php echo e($factoryLabourLaw->instruction4); ?>

                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="4" style="text-align:left;">
                        (င)<?php echo e($factoryLabourLaw->instruction5); ?>

                    </td>
                </tr>
            <tbody>
        </table>
                

                 
    </div>
<?php
function datechangemyanmar($date){
    $factoryLabourLaw=explode("-",$date);
    //  dd($factoryLabourLaw[0]);
    // echo $factoryLabourLaw[0];
    $standard_numsets = array("0","1","2","3","4","5","6","7","8","9");
    $standard_manysets = array('၀','၁','၂' ,'၃','၄','၅','၆','၇','၈','၉');
    $years=str_replace($standard_numsets,$standard_manysets,$factoryLabourLaw[0]);
    $days=str_replace($standard_numsets,$standard_manysets,$factoryLabourLaw[2]);
    // dd($factoryLabourLaw[1]);

    
    if($factoryLabourLaw[1]=='01'){
        $months = 'ဇန်နဝါရီလ';
    }elseif($factoryLabourLaw[1]=='02'){
        $months = 'ဖေဖော်ဝါရီလ';
        
    }elseif($factoryLabourLaw[1]=='03'){
        $months = 'မတ်လ';
        
    }elseif($factoryLabourLaw[1]=='04'){
        $months = 'ဧပြီလ';
        
    }elseif($factoryLabourLaw[1]=='05'){
        $months = 'မေလ';
        
    }elseif($factoryLabourLaw[1]=='06'){
        $months = 'ဇွန်လ';
        
    }elseif($factoryLabourLaw[1]=='07'){
        $months = 'ဂျူလိုင်လ';
        
    }elseif($factoryLabourLaw[1]=='08'){
        $months = 'သြဂုတ်လ';
        
    }elseif($factoryLabourLaw[1]=='09'){
        $months = 'စက်တင်ဘာလ';
        
    }elseif($factoryLabourLaw[1]=='10'){
        $months = 'အောက်တိုဘာလ';
        
    }elseif($factoryLabourLaw[1]=='11'){
        $months = 'နိုဝင်ဘာလ';
        
    }elseif($factoryLabourLaw[1]=='12'){
        $months = 'ဒီဇင်ဘာလ';
        
    }
    return   $years .'ခုနှစ် ၊ '.$months.' ၊ '.$days.' ရက် ';
}
?>
    
</body>
</html>