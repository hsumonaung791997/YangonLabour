<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title> အလုပ်ရုံစစ်ဆေးရေး စစ်ဆေးချက်ပုံစံ</title>
</head>
<style>
    @media print {
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
            <p style="text-align:right;">စစ်ဆေးသည့်နေ့စွဲ -
            <?php 
            $inspectiondate=datechangetomyanmar(App\FactoryInspectionInforms::where('cid',$factory_safety->factoryinspectioninform_id)->value('inspectiondate'));
            echo $inspectiondate;
            ?>
            <br>
            <?php 
            $inspection_type= App\FactoryInspectionInforms::where('cid',$factory_safety->factoryinspectioninform_id)->value('inspectiontype');
            echo $inspection_type;
            ?>
             စစ်ဆေးခြင်း</p>
            <p style="font-weight:bold;text-align:left;line-height:20px;">အကြောင်းအရာအကျဉ်း</p> 
            
            <table style="width:100%;">
            <tbody>
            <!-- <tr><td style="text-align:left;line-height:40px;">၁။ အလုပ်ရုံအမည်နှင့်တည်နေရာ</td><td> -</td><td>{{$factory_safety->factoryname}}-{{$factory_safety->factoryregion}}</td></tr>
            <tr><td style="text-align:left;line-height:40px;">၂။ အလုပ်ရုံပိုင်ရှင် အမည် နှင့် နေရပ်</td><td> - </td><td>{{$factory_safety->ownername}} - {{$factory_safety->owneraddress}}</td></tr>
            <tr><td style="text-align:left;line-height:40px;">၃။ မှတ်ပုံတင်လုပ်ငန်းပိုင်ရှင် အမည်နှင့် နေရပ်</td><td> - </td><td>{{$factory_safety->factoryOwnerNrc}}- {{$factory_safety->factoryOwnerAddress}}</td></tr>
            <tr><td style="text-align:left;line-height:40px;">၄။ မှတ်ပုံတင်မန်နေဂျာ အမည်နှင့် နေရပ်</td><td> - </td><td>{{$factory_safety->factoryOwnerNrc}} -{{$factory_safety->factoryOwnerAddress}} </td></tr>
            <tr><td style="text-align:left;line-height:40px;">၅။ တာဝန်ခံဖြေဆိုသူ အမည်နှင့် နေရပ်</td><td> - </td><td>{{$factory_safety->intervieweeName	}}-{{$factory_safety->intervieweeAddress	}}</td></tr>
            <tr><td style="text-align:left;line-height:40px;">၆။ အားအမျိုးအစားနှင့် မြင်းကောင်ရေ</td><td> - </td><td>{{$factory_safety->energytype	}} -{{$factory_safety->horsepower	}}</td></tr> -->
            <tr><td style="text-align:left;line-height:40px;">၁။ အလုပ်အမျိူးအစား၊ ထုတ်လုပ်သည့်ပစ္စည်း၊ ထုတ်လုပ်နိုင်စွမ်းအား</td><td> - </td><td>{{$factory_safety->workType	}}-{{$factory_safety->producedProduct		}}-{{$factory_safety->producedPower}}</td></tr>
            <tr><td style="text-align:left;line-height:40px;">၂။ အလုပ်သမားဦးရေ</td><td> - </td><td>ကျား({{$factory_safety->menworker	}}) ၊ မ({{$factory_safety->womenworker}})</td></tr>
            <tr><td style="text-align:left;line-height:40px;">၃။ အလုပ်ချိန်</td><td> - </td><td>{{$factory_safety->workTime	}}</span> </p>
            <tr><td style="text-align:left;line-height:40px;">၄။ ကလေးနှင့် လူရွယ်များကို အလုပ်လုပ်ရန် သင့်လျော်ကြောင်း တာဝန်ခံဆေးလက်မှတ် - ထုတ်ပေးထားမှု </td><td> - </td><td>{{$factory_safety->medicalticket	}}</td></tr>
            <tr><td style="text-align:left;line-height:40px;">၅။ ကလေးနှင့် လူရွယ်များကို အလုပ်လုပ်ရန် သင့်လျော်ကြောင်း တာဝန်ခံဆေးလက်မှတ် - ထုတ်ပေးထားမှု </td><td> - </td><td>{{$factory_safety->medicalticket	}}</td></tr>
            </tbody>
            </table>
            <p style="text-align:left;font-weight:bold;line-height:40px;">လုပ်ငန်းခွင်ကျန်းမာရေး</p> 
            <table border="1" style="border-collapse: collapse;width:100%;" >
            <thead>
                <tr>
                    <th style="border:none;line-height:50px;"></th>
                    <th style="border:none;line-height:50px;"></th>
                    <th style="border:block;line-height:50px;">ကောင်း</th>
                    <th style="border:block;line-height:50px;">သင့်</th>
                    <th style="border:block;line-height:50px;">ညံ့</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="border:none;text-align:center;">၁။</td>
                    <td style="border:none; line-height:50px;">(က) လုပ်ငန်းခွင်သန့်ရှင်းသပ်ရပ်မှု</td>
                    @if($factory_safety->workclean=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->workclean=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(ခ) ရေမြောင်းများရေစီးဆင်းမှု </td>
                    @if($factory_safety->drainflow=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->drainflow=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(ဂ) အလုပ်ခန်းများအား ဆေးသုတ်ထား</td>
                    @if($factory_safety->employmentPaint=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->employmentPaint=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။</td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၂။</td>
                    <td style="border:none; line-height:50px;">(က) လေဝင်လေထွက် ကောင်းမွန်မှု</td>
                    @if($factory_safety->aircondition=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->aircondition=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(ခ) အပူအအေးမျှတမှု </td>
                    @if($factory_safety->weather=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->weather=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(ဂ) အမှုန်အမွှား ၊ အခိုးအငွေ့များအခြေအနေ</td>
                    @if($factory_safety->particals=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->particals=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။{{$factory_safety->accomodation}}</td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၃။</td>
                    <td style="border:none; line-height:50px;">အလုပ်ခန်းများတွင် လူကြပ်တည်းမှု</td>
                    @if($factory_safety->populationstatus=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->populationstatus=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။ {{$factory_safety->populationstatus}} </td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၄။</td>
                    <td style="border:none; line-height:50px;">(က) သဘာဝနှင့် ဖန်တီးထားသော အလင်းရောင် စီမံထားမှု</td>
                    @if($factory_safety->nature=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->nature=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(ခ) စူးရှသောအလင်းရောင်များမှ မျက်စိကို ကာကွယ်ပေးမှု </td>
                    @if($factory_safety->sunlight=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->sunlight=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
               
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။{{$factory_safety->natureandlight}}</td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၅။</td>
                    <td style="border:none; line-height:50px;">သောက်သုံးရေစီမံထားရှိမှု (သန့်ရှင်းစင်ကြယ်မှု ။ လုံလောက်မှု)</td>
                    @if($factory_safety->drinkingwater=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->drinkingwater=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။{{$factory_safety->drinkingwatermana	}}</td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၆။</td>
                    <td style="border:none; line-height:50px;">(က) အိမ်သာများ စီမံထားရှိမှု</td>
                    @if($factory_safety->toilet	=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->toilet=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(ခ) အိမ်သာအမျိူးအစား </td>
                    @if($factory_safety->toiletType=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->toiletType=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(ဂ) ကျား/မ ခွဲခြားမှု</td>
                    @if($factory_safety->genderdivide=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->genderdivide=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(ဃ) အရေအတွက်</td>
                    @if($factory_safety->toiletquantity=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->toiletquantity=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။ {{$factory_safety->tioletfinding}}</td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၇။</td>
                    <td style="border:none; line-height:50px;">ဆူညံသံထွက်ရှိမှု နှင့် ကာကွယ်ထားမှု</td>
                    @if($factory_safety->noiseprotect=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->noiseprotect=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။ {{$factory_safety->noiceprotection	}}</td>
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
                    @if($factory_safety->dangerprotect=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->dangerprotect=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။ {{$factory_safety->protectmach	}}</td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၂။</td>
                    <td style="border:none; line-height:50px;">သားရေပတ်ကြိုး၊ ဂီယာ ၊ ပင်နယံ ၊ ကလပ်(ချ်) ကိရိယာများ အခြေအနေ</td>
                    @if($factory_safety->machinestatus=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->machinestatus=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။ {{$factory_safety->machineprotection	}}</td>
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
                    @if($factory_safety->machinepieces=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->machinepieces=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(ခ) ခံနိုင်ဝန်အား ၊ တန်ချိန်ပြသခြင်း</td>
                    @if($factory_safety->load=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->load=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(ဂ) စစ်ဆေးတွေ့ရှိချက်များအားမှတ်တမ်းရေးသွင်းမှု</td>
                    @if($factory_safety->inspectionentry=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->inspectionentry=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။ {{$factory_safety->machinefinding	}}</td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၄။</td>
                    <td style="border:none; line-height:50px;">သင့်လျော်သောအဝတ်အစားဝတ်ဆင်ဆောင်ရွက်မှု(ကိုယ်ကြပ်အဝတ်အစား..) </td>
                    @if($factory_safety->wearing=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->wearing=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။{{$factory_safety->wearingstatus	}}</td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၅။</td>
                    <td style="border:none; line-height:50px;"> လှေကား၊လက်ရန်း၊ကြမ်းပြင်အထက်(၄)ပေရှိသော စင်္ကြန်သွားလမ်း အခြေအနေ </td>
                    @if($factory_safety->ladder=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->ladder=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။{{$factory_safety->ladderstatus	}}</td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၆။</td>
                    <td style="border:none; line-height:50px;"> လှောင်ကန်၊တွင်း၊ကြမ်းပေါက် ၊ ချိုင့်များ ကာရံ /ဖုံးအုပ်ထားမှု </td>
                    @if($factory_safety->holecover=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->holecover=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။</td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၇။</td>
                    <td style="border:none; line-height:50px;">အန္တရာယ်ရှိသော အခိုးအငွေ့များအား စနစ်တကျစမ်းသပ်မှု၊ ခွင့်ပြုစနစ် သုံးစွဲမှု </td>
                    @if($factory_safety->dangergas=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->dangergas=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။{{$factory_safety->dangergasuses	}}</td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၈။</td>
                    <td style="border:none; line-height:50px;">(က)မီးလောင်ပါက အလွယ်တကူ ထွက်ပြေးလွတ်မြောက်နိုင်ရန် အစီအမံများ</td>
                    @if($factory_safety->escapeman=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->escapeman=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(ခ) မီးအချက်ပေးကိရိယာ စီမံထားရှိမှု   </td>
                    @if($factory_safety->firealam=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->firealam=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(ဂ) အရေးပါ်ထွက်ပေါက်သတ်မှတ်ထားရှိမှု </td>
                    @if($factory_safety->emergencyentrace=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->emergencyentrace=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(ဃ) သွားလမ်းများရှင်းလင်းထားရှိမှု</td>
                    @if($factory_safety->cleargoway=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->cleargoway=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။{{$factory_safety->aboutfire	}}</td>
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
                    @if($factory_safety->seat=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->seat=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။{{$factory_safety->sittingplan	}}</td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၂။</td>
                    <td style="border:none; line-height:50px;">အစာစားခန်းနှင့်အနားယူခန်း စီမံထားရှိမှု  </td>
                    @if($factory_safety->dinningroom=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->dinningroom=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။{{$factory_safety->dinningroomplan	}}</td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၃။</td>
                    <td style="border:none; line-height:50px;">ကလေးထိန်းခန်းစီမံထားမှု </td>
                    @if($factory_safety->babysittingroom=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->babysittingroom=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။{{$factory_safety->babysittingplan	}}</td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၄။</td>
                    <td style="border:none; line-height:50px;">ဆေးကြောလျှော်ဖွတ်ရန်အစီအမံ  </td>
                    @if($factory_safety->washing=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->washing=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။{{$factory_safety->washingplan	}}</td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၅။</td>
                    <td style="border:none; line-height:50px;">အလုပ်ရုံ(သူနာပြုရေးဆိုင်ရာ)ညွှန်ကြားချက်များ  </td>
                    @if($factory_safety->nursing=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->nursing=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။{{$factory_safety->nursinginstruction	}}</td>
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
                    @if($factory_safety->accidentinform=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->accidentinform=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။{{$factory_safety->accidentinformation	}}</td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၂။</td>
                    <td style="border:none; line-height:50px;">ဘေးအန္တရာယ်ကင်းရှင်းရေးနှင့်ကျန်းမာရေးဆောင်ရွက်မှု </td>
                    @if($factory_safety->safetyhealth=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->safetyhealth=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(က)ပညာပေးမှု/ဆွေးနွေးမှု   </td>
                    @if($factory_safety->negotiate	=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->negotiate	=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none; line-height:50px;">(ခ) သင်တန်းဆင်းများ၊ဆင့်ပွားသင်တန်းမျာ  </td>
                    @if($factory_safety->training	=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->training	=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။{{$factory_safety->safteyhealthcare	}}</td>
                </tr>
                <tr>
                    <td style="border:none;text-align:center;">၃။</td>
                    <td style="border:none; line-height:50px;">တစ်ကိုယ်ရည်သုံးကာကွယ်ရေးဝတ်စုံ(ထုတ်ပေးမှု၊လုံလောက်မှု၊သုံးစွဲမှု)</td>
                    @if($factory_safety->selfprotectwear=="ကောင်း")
                    <td  align="center">ကောင်း</td>
                    <td></td>
                    <td></td>
                    @elseif($factory_safety->selfprotectwear=="သင့်")
                    <td></td>
                    <td align="center">သင့်</td>
                    <td></td>
                    @else
                    <td></td>
                    <td></td>
                    <td align="center">ညံ့</td>
                    @endif
                </tr>
                
                <tr>
                    <td colspan="5" style="padding: 20px 20px 20px 20px;">တွေ့ရှိချက်။{{$factory_safety->selfprotection	}}</td>
                </tr>
                
            </tbody>
            </table>
            <p style="text-align:left;font-weight:bold;">ပြုပြင်ဆောင်ရွယ်ရန်လိုသည့်အချက်များ</p>
            <p style="text-align:left;">
             ၁။ {{$factory_safety->change1}} <br>
             ၂။ {{$factory_safety->change2}} <br>
             ၃။ {{$factory_safety->change3}} <br>
             ၄။ {{$factory_safety->change4}} <br>
             ၅။ {{$factory_safety->change5}} <br>


         </p>
         
    </div>
    <?php
function datechangetomyanmar($date){
    $factory_safety=explode("-",$date);
    $standard_numsets = array("0","1","2","3","4","5","6","7","8","9");
    $standard_manysets = array('၀','၁','၂' ,'၃','၄','၅','၆','၇','၈','၉');
    $year=str_replace($standard_numsets,$standard_manysets,$factory_safety[0]);
    $day=str_replace($standard_numsets,$standard_manysets,$factory_safety[2]);
    if($factory_safety[1]=='01'){
        $month = 'ဇန်နဝါရီလ';
    }elseif($factory_safety[1]=='02'){
        $month = 'ဖေဖော်ဝါရီလ';
        
    }elseif($factory_safety[1]=='03'){
        $month = 'မတ်လ';
        
    }elseif($factory_safety[1]=='04'){
        $month = 'ဧပြီလ';
        
    }elseif($factory_safety[1]=='05'){
        $month = 'မေလ';
        
    }elseif($factory_safety[1]=='06'){
        $month = 'ဇွန်လ';
        
    }elseif($factory_safety[1]=='07'){
        $month = 'ဂျူလိုင်လ';
        
    }elseif($factory_safety[1]=='08'){
        $month = 'သြဂုတ်လ';
        
    }elseif($factory_safety[1]=='09'){
        $month = 'စက်တင်ဘာလ';
        
    }elseif($factory_safety[1]=='10'){
        $month = 'အောက်တိုဘာလ';
        
    }elseif($factory_safety[1]=='11'){
        $month = 'နိုဝင်ဘာလ';
        
    }elseif($factory_safety[1]=='12'){
        $month = 'ဒီဇင်ဘာလ';
        
    }
    return   $year .'ခုနှစ်၊ '.$month.' ၊ '.$day.' ရက် ';
}
?>

    
</body>
</html>