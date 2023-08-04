<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>ဆိုင်များနှင့်အလုပ်ဌာနများဥပဒေ</title>
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

    td,th{line-height:40px;}
    </style>
</head>
<body>
    <div style="padding : 2% 2% 2% 2%">
        <h2 style="text-align:center;">စစ်ဆေးချက်အစီရင်ခံစာ<br>ဆိုင်များနှင့်အလုပ်ဌာနများဥပဒေ<br>ခွင့်ရက်နှင့်အလုပ်ပိတ်ရက်အက်ဥပဒေ<br>အခကြေးငွေပေးချေရေးဥပဒေ</h2>
        <p style="text-align:center;">({{$shopinform->inspectedtime}}/<?php 
            $inspection_type= App\ShopInspectionInform::where('id',$shop_labourlaw->check_id)->value('inspection_type');
            echo $inspection_type;
            ?>/ တိုင်ကြားစာအရ)စစ်ဆေးခြင်း၊ စစ်ဆေးသည့်နေ့စွဲ <?php 
        if(App\ShopInspectionInform::where('id',$shop_labourlaw->check_id)->value('inspectiondate')!==null){

        }else{
            $inspectiondate=datechangetomyanmar(App\ShopInspectionInform::where('id',$shop_labourlaw->check_id)->value('inspectiondate'));
            echo $inspectiondate;
        }
         App\ShopInspectionInform::where('id',$shop_labourlaw->check_id)->value('inspectiondate')
        ?>
         
                             </p> 
        <p style="text-align:right;"></p>
        <hr>

        <h2 style="text-align:center;font-weight:bold;">အပိုင်း(၁)</h2>
        <table align="center" style="width:100%;">
            <tbody>
                <tr>
                    <td colspan="4"><h2 style="text-align:left;font-weight:bold;">လုပ်ငန်းဌာနဆိုင်ရာအချက်အလက်များ</h2></td>
                </tr>
                <tr>
                    <td>၁။</td>
                    <td>(က) ဆိုင်/အလုပ်ဌာန အမည်နှင့်လိပ်စာ</td>
                    <td>-</td>
                    <td>{{$shopinform->shopname}}-{{$shopinform->shopaddress}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ခ) ပိုင်ဆိုင်မှု အမျိုးအစား</td>
                    <td>-</td>
                    <td>{{$shopinform->property}}</td>
                </tr>
                <tr>
                    <td>၂။</td>
                    <td>အလုပ်ရှင်အမည်နှင့်နေရပ်လိပ်စာ<br>(အစုစပ်များရှိက ဖော်ပြရန်)</td>
                    <td>-</td>
                    <td>
                    {{$shopinform->ownername}}-{{$shopinform->owneraddress}}<br>
                    <?php  
                         $sharename = App\Share::where('shop_inform_id',$shop_labourlaw->check_id)->get();
                    ?>
                    @foreach($sharename as $n)
                    @if($shop_labourlaw->check_id == $n->shop_inform_id)
                    {{$n->share}} 
                    <br>
                    @endif
                   @endforeach
                    <br></td>
                </tr>
                <tr>
                    <td>၃။</td>
                    <td>မန်နေဂျာအမည်နှင့် နေရပ်လိပ်စာ</td>
                    <td>-</td>
                    <td>{{$shopinform->managername}} - {{$shopinform->manageraddress}}</td>
                </tr>
                <tr>
                    <td>၄။</td>
                    <td>အလုပ်ရှင်ပိုင်ဆိုင်သော အခြားဆိုင်/အလုပ်ဌာန<br>အလုပ်ရုံစသည်တို့၏ အမည်နှင့်လိပ်စာ</td>
                    <td>-</td>
                    <?php  
                         $shopname = App\OtherShopName::where('shop_inform_id',$shop_labourlaw->check_id)->get();
                    ?>
                    <td>
                    @foreach($shopname as $s)
                    @if($shop_labourlaw->check_id == $s->shop_inform_id)
                    {{$s->othershopname}} ၊ 
                    {{$s->othershopaddress}} <br>
                    @endif
                   @endforeach
                   </td>
                </tr>
                <tr>
                    <td>၅။</td>
                    <td>မေးမြန်းချက်များကိုဖြေကြားသူ၏ အမည်နှင့် အလုပ်အကိုင်</td>
                    <td>-</td>
                    <td>{{$shopinform->intervieweename}} - {{$shopinform->intervieweenamerank}}</td>
                </tr>
                <tr>
                    <td>၆။</td>
                    <td>လုပ်ငန်းအမျိုးအစား</td>
                    <td>-</td>
                    <td>{{$shopinform->workcategory}}</td>
                </tr>
            </tbody>
        </table>
        <br>
        <table border="1" align="right" style="border-collapse:collapse;width:100%;">
            <thead>
                <tr>
                    <th style="padding:20px;"></th>
                    <th style="padding:20px;">၁၈ နှစ်နှင့်အထက်</th>
                    <th style="padding:20px;">၁၆ နှစ်မှ ၁၈နှစ်</th>
                    <th style="padding:20px;">၁၄ နှစ် မှ ၁၆နှစ်</th>
                    <th style="padding:20px;">ပေါင်း</th>
                </tr>
            </thead>
            <tbody>
                <tr style="text-align:center">
                    <td style="text-align:center;">ကျား</td>
                    <td style="text-align:center;">{{$shopinform->above18m}}</td>
                    <td style="text-align:center;">{{$shopinform->above15m}}</td>
                    <td style="text-align:center;">{{$shopinform->above13m}}</td>
                    <td style="text-align:center;">{{$shopinform->totalm}}</td>
                </tr>
                <tr style="text-align:center">
                    <td style="text-align:center;">မ</td>
                    <td style="text-align:center;">{{$shopinform->above18f}}</td>
                    <td style="text-align:center;">{{$shopinform->above15f}}</td>
                    <td style="text-align:center;">{{$shopinform->above13f}}</td>
                    <td style="text-align:center;">{{$shopinform->totalf}}</td>
                </tr>
                <!-- <tr style="text-align:center">
                    <td style="text-align:center;">ပေါင်း</td>
                    <td style="text-align:center;"></td>
                    <td style="text-align:center;"></td>
                    <td style="text-align:center;"></td>
                    <td style="text-align:center;"></td>
                </tr> -->
            </tbody>
        </table>
        <br>
        
        <div style="padding-top:30px;">
            ၇။<span style="padding-left:50px;">အလုပ်သမားများ၏ အကြောင်းအရာများ</span>
        </div>
        <br>
        <table border="1" align="center" style="border-collapse:collapse;width:100%;">
            <tbody>
                
                <tr>
                    <th>စဥ်</th>
                    <th>အမည်</th>
                    <th>အလုပ်အကိုင်</th>
                    <th>အခကြေးငွေနှုန်းထား</th>
                    <th>နေ့စဥ်အလုပ်ချိန်</th>
                    <th>နားချိန်</th>
                    <th>အပတ်စဥ်နေ့အား</th>
                    <th>အလုပ်စတင်ဝင်သည့်နေ့စွဲ</th>
                    <th>မှတ်ချက်</th>
                </tr>
                <?php $i=1; 
                    $shopworker = App\Worker::where('shop_inform_id',$shop_labourlaw->check_id)->get();

                ?>
                
               @foreach($shopworker as $w)
                <tr>
                    <td style="text-align:center;">
                    <?php 
                        $aesc=changetomyanmar($i++);
                        echo $aesc;
                    ?>
                    </td>
                    <td style="text-align:center;">{{$w->name}}</td>
                    <td style="text-align:center;">{{$w->position}}</td>
                    <td style="text-align:center;">{{$w->salary}}</td>
                    <td style="text-align:center;">{{$w->daily_work_hours}} </td>
                    <td style="text-align:center;">{{$w->break_time}} </td>
                    <td style="text-align:center;">{{$w->weekly_off_day}} </td>
                    <td style="text-align:center;">
                    <?php 
                        // $joiningdate=datechangetomyanmar($w->joning_date);
                        // echo $joiningdate;
                    echo $w->joning_date;
                    ?>
                     </td>
                    <td style="text-align:center;">{{$w-> note}}</td>
                </tr>
               @endforeach
        
              
            </tbody>
        </table>
        <br>
        <table align="center" style="width:100%;">
            <tbody>
                <tr>
                    <td>၈။</td>
                    <td>ဆိုင်/အလုပ်ဌာန၏ အလုပ်ချိန်၊ နားချိန် ကာလအပိုင်းအခြား</td>
                    <td>-</td>
                    <td>{{$shop_labourlaw->work_duration}}</td>
                </tr>
                <tr>
                    <td>၉။</td>
                    <td>ရက်သတ္တပတ်ပိတ်ရက်၊ နားရက်</td>
                    <td>-</td>
                    <td> {{$shop_labourlaw->weekend_holiday}} </td>
                </tr>
                <tr>
                    <td>၁၀။</td>
                    <td>အလုပ်ချိန်နို.တစ်စာပုံစံ ၁(က)/ ၁(ခ)/ ၁(ဂ) ကိုချိတ်ဆွဲထားခြင်း ပြု/မပြု</td>
                    <td>-</td>
                    <td>{{$shop_labourlaw->worktime_notice}}</td>
                </tr>
                <tr>
                    <td>၁၁။</td>
                    <td>အလုပ်သမား မှတ်ပုံတင်စာအုပ် ထား/မထား</td>
                    <td>-</td>
                    <td>{{$shop_labourlaw->SSB}}</td>
                </tr>
                <tr>
                    <td>၁၂။</td>
                    <td>အခကြေးငွေကို လကုန်ပြီး(၇)ရက်အတွင်း ပေး/မပေး</td>
                    <td>-</td>
                    <td>{{$shop_labourlaw->salary_time}}</td>
                </tr>
            </tbody>
        </table>
        <br>
        <h2 style="text-align:center;font-weight:bold;">အပိုင်း(၂)</h2>
        <table align="center" style="width:100%;">
            <tbody>
                <tr>
                    <td>၁။</td>
                    <td>ခွင့်ရက်မှတ်ပုံတင်စာအုပ်နှင့် မှတ်တမ်းများ စနစ်တကျထားခြင်း ရှိ/မရှိ</td>
                    <td>-</td>
                    <td>{{$shop_labourlaw->registrationbook}}</td>
                </tr>
                <tr>
                    <td>၂။</td>
                    <td colspan="3">တစ်နှစ်အတွင်းကျရောက်သည့် အများအလုပ်ပိတ်ရက်အရေအတွက်</td>
                    
                </tr>
                <tr>
                    <td></td>
                    <td>(က) အများအလုပ်ပိတ်ရက်တွင်ဆိုင်/အလုပ်ဌာနကို ပိတ်ထားခြင်း ရှိ/မရှိ</td>
                    <td>-</td>
                    <td>{{$shop_labourlaw->numholidays}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ခ) အလုပ်သမားများအား အများအလုပ်ပိတ်ရက် ခံစားခွင့် ပြု/မပြု</td>
                    <td>-</td>
                    <td>{{$shop_labourlaw->opportunityhol}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ဂ) ရက်သတ္တပတ်အလုပ်ပိတ်ရက်/အလုပ်နားရက်တွင် လုပ်ခလစာဖြင့် ခံစားခွင့် ပေးချေခြင်း ရှိ/မရှိ</td>
                    <td>-</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ဃ) အများအလုပ်ပိတ်ရက်တွင် အလုပ်ဆင်းသော အလုပ်သမားများအား သတ်မှတ်ထားသော လုပ်ခ ကိုပေးချေခြင်း ရှိ/မရှိ</td>
                    <td>-</td>
                    <td>{{$shop_labourlaw->paidwage}}</td>
                </tr>
                <tr>
                    <td>၃။</td>
                    <td colspan="3">တစ်နှစ်လျှင် ခွင့်ပြုသော လုပ်သက်ခွင့်ရက် အရေအတွက်</td>
                    
                </tr>
                <tr>
                    <td></td>
                    <td>(က) လုပ်သက်ခွင့်ရက်ကို နှစ်စဉ် ခံစားခွင့် ပေး/မပေး</td>
                    <td>-</td>
                    <td>{{$shop_labourlaw->vacationdays}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ခ) နှစ်စဉ်ခံစားခြင်းမရှိပါက သုံးနှစ်ထိ စုဆောင်းမှု ရှိ/မရှိ</td>
                    <td>-</td>
                    <td>{{$shop_labourlaw->annual}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ဂ) အလုပ်မှ နှုတ်ထွက်သော/ ထုတ်ပယ်သော အလုပ်သမားနှင့် သေဆုံးသော အလုပ်သမားအား ခွင့်ရက်အစား အခကြေးငွေကို ရှင်းပေးခြင်း ရှိ/မရှိ</td>
                    <td>-</td>
                    <td>{{$shop_labourlaw->workerfrees}}</td>
                </tr>
                <tr>
                    <td>၄။</td>
                    <td>တစ်နှစ်လျှင် ခံစားခွင့်ပြုသော ဆေးလက်မှတ် အရေအတွက်<br>(ခံစားခွင့်မရသော အလုပ်သမားရှိက ဖော်ပြရန်)</td>
                    <td>-</td>
                    <td>{{$shop_labourlaw->medicalticketqan}} <br> </td>
                </tr>
                <tr>
                    <td>၅။</td>
                    <td>တစ်နှစ်လျှင် ခံစားခွင့်ပြုသော ဆေးလက်မှတ် အရေအတွက်<br>(ခံစားခွင့်မရသော အလုပ်သမားရှိက ဖော်ပြရန်)</td>
                    <td>-</td>
                    <td>{{$shop_labourlaw->medicalticketqan}} </td>
                </tr>
                <tr>
                    <td>၆။</td>
                    <td>ယခင်က ပြစ်မှုထင်ရှား စီရင်ခြင်း ခံရလျှင် အဆိုပါ အကြောင်းအရာများကို ဖော်ပြရန်</td>
                    <td>-</td>
                    <td>{{$shop_labourlaw->passionremark}}</td>
                </tr>
            </tbody>
        </table>
        <br>
        <h2 style="text-align:center;font-weight:bold;">အပိုင်း(၃)</h2>
        <table align="center" style="width:100%">
            <tbody>
                <tr>
                    <td>၁။</td>
                    <td colspan="3">ခွင့်ခံစားမှုများ</td>
                    
                </tr>
                <tr>
                    <td></td>
                    <td>(က) ရှောင်တခင်ခွင့်(၆)ရက် ခံစားခွင့် ပေး/မပေး</td>
                    <td>-</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ခ) လုပ်သက်ခွင့်(၁၀)ရက် ခံစားခွင့် ပေး/မပေး</td>
                    <td>-</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ဂ) ဆေးလက်မှတ်ခွင့် ခံစားခွင့် ပေး/မပေး</td>
                    <td>-</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ဃ) မီးဖွားခွင့် ခံစားခွင့် ပေး/မပေး</td>
                    <td>-</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(င) အများပြည်သူအလုပ်ပိတ်ရက် ခံစားခွင့် ပေး/မပေး</td>
                    <td>-</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(စ) ရက်သတ္တပတ်အလုပ်ပိတ်ရက် ခံစားခွင့် ပေး/မပေး</td>
                    <td>-</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>(ဆ) ခွင့်မှတ်တမ်း ထား/မထား</td>
                    <td>-</td>
                    <td></td>
                </tr>
                <tr>
                    <td>၂။</td>
                    <td colspan="3">အထွေထွေမှတ်ချက်များ</td>
                    
                </tr>
                <tr>
                    <td>{{$shop_labourlaw->generalremark}}</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php
    function changetomyanmar($num){
        $standard_numsets = array("0","1","2","3","4","5","6","7","8","9");
        $standard_manysets = array('၀','၁','၂' ,'၃','၄','၅','၆','၇','၈','၉');
        $number=str_replace($standard_numsets,$standard_manysets,$num);
        return $number;
    }

function datechangetomyanmar($date){
    $shop_labourlaw=explode("-",$date);
    $standard_numsets = array("0","1","2","3","4","5","6","7","8","9");
    $standard_manysets = array('၀','၁','၂' ,'၃','၄','၅','၆','၇','၈','၉');
    $year=str_replace($standard_numsets,$standard_manysets,$shop_labourlaw[0]);
    $day=str_replace($standard_numsets,$standard_manysets,$shop_labourlaw[2]);
    if($shop_labourlaw[1]=='01'){
        $month = 'ဇန်နဝါရီလ';
    }elseif($shop_labourlaw[1]=='02'){
        $month = 'ဖေဖော်ဝါရီလ';
        
    }elseif($shop_labourlaw[1]=='03'){
        $month = 'မတ်လ';
        
    }elseif($shop_labourlaw[1]=='04'){
        $month = 'ဧပြီလ';
        
    }elseif($shop_labourlaw[1]=='05'){
        $month = 'မေလ';
        
    }elseif($shop_labourlaw[1]=='06'){
        $month = 'ဇွန်လ';
        
    }elseif($shop_labourlaw[1]=='07'){
        $month = 'ဂျူလိုင်လ';
        
    }elseif($shop_labourlaw[1]=='08'){
        $month = 'သြဂုတ်လ';
        
    }elseif($shop_labourlaw[1]=='09'){
        $month = 'စက်တင်ဘာလ';
        
    }elseif($shop_labourlaw[1]=='10'){
        $month = 'အောက်တိုဘာလ';
        
    }elseif($shop_labourlaw[1]=='11'){
        $month = 'နိုဝင်ဘာလ';
        
    }elseif($shop_labourlaw[1]=='12'){
        $month = 'ဒီဇင်ဘာလ';
        
    }
    return   $year .'ခုနှစ်၊ '.$month.' ၊ '.$day.' ရက် ';
}
?>


</body>
</html>