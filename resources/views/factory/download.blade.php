<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$factory->FactoryName}} (စက်ရုံ) နှင့်ပတ်သက်သောအချက်အလက်များ 
</title>
</head>
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
			td,th,div{line-height:50px;padding-left:10px;}
			html, body {
					width: 100%;
					height: 297mm;
					font-family: 'Pyidaungsu';
				}  
				h1,h2{
				text-align: center;
			}
</style>
<body>
<div class="container" >
	
<h3 style="text-align: center;">{{$factory->FactoryName}} (စက်ရုံ)နှင့်ပတ်သက်သောအချက်အလက်များ</h3>
<hr>
<p>
    <div class="row">
		<div class="col-sm-6">
			၁။ စက်ရုံအမည်နှင့် ကုမ္မဏီအမည် - <b>{{$factory->FactoryName}}</b> 
		</div>
		<div class="col-sm-6 text-left">
			၂။ စက်ရုံလိပ်စာနှင့် ဖုန်းအမှတ် - <b>{{$factory->ContactAddress}} ၊ {{$factory->ContactPhone}}</b>
        </div>
        <div class="col-sm-6">
			၃။ စက်ရုံပိုင်ရှင်အမည် - <b>{{$factory->OwnerName}}</b>
        </div>
        <div class="col-sm-6 text-left">
			၄။ ပိုင်ဆိုင်မှုအမျိုးအစား - <b>{{$factory->PropertyType}}</b>
        </div>
        <div class="col-sm-6">
			၅။ အသုံးပြုသည့်စွမ်းအင် - <b>{{$factory->UsedPower}}</b>
        </div>
        <div class="col-sm-6 text-left">
			၆။ လုပ်ငန်းအမျိုးအစား -  <b>{{App\EconomicClass::where('class_code',$factory->class_name)->value('class_name')}}</b>
        </div>
        <div class="col-sm-6">
			၇။ ရင်းနှီးမြှုပ်နှံမှု (LDI/FDI) - {{$factory->Investment}}
        </div>
        <div class="col-sm-6 text-left">
			၈။ E/C အလုပ်ခန့်ထားမှု စာချူပ် - <b>@if($factory->Contract == 0) ဆောင်ရွက်ဆဲ @else ဆောင်ရွက်ပြီး @endif</b>
        </div>
        <div class="col-sm-6">
			၉။ စက်ရုံစတင်လည်ပတ်သည့်နေ့ - <b>{{$factory->StartDate}}</b>
        </div>
        <div class="col-sm-6 text-left">
			၁၀။ ထုတ်လုပ်သည့်ပစ္စည်း (အဓိက) - <b>{{$factory->ProducedProduct}}</b>
        </div>
        <div class="col-sm-6">
			၁၁။ ထုတ်လုပ်သည့်ပစ္စည်း (အခြား) - <b>{{$factory->ProducedOthers}}</b>
        </div>
        <div class="col-sm-6 text-left">
			၁၂။ အလုပ်ရုံနှင့် အလုပ်သမားဥပဒေစစ်ဆေးရေးဦးစီးဌာနသို့ နို့တစ်ပေးခြင်း - <b>@if($factory->NoticeStatus == 0) - ပြီး @else - မပြီး @endif</b>
        </div>
        <div class="col-sm-6">
			၁၃။ ကုန်ကြမ်းရရှိမှု - <b>{{$factory->RawMaterials}}</b>
        </div>
        <div class="col-sm-6 text-left">
			၁၄။ ကုန်ချောတင်ပို့မှု - <b>{{$factory->Goods}}</b>
        </div>
        <div class="col-sm-6">
			၁၅။ တစ်လထုတ်လုပ်နိုင်မှုပမာဏ - <b>{{$factory->MonthlyAmounts}}</b>
        </div>
        <div class="col-sm-6 text-left">
			၁၆။ လစာပေးရက် - <b>{{$factory->SalaryDate}}</b>
        </div>
        <div class="col-sm-6">
			၁၇။ တစ်လထုတ်လုပ်နိုင်မှုပမာဏ - <b>{{$factory->MonthlyAmounts}}</b>
        </div>
        <div class="col-sm-6 text-left">
			၁၈။ နိုင်ငံသားလုပ်သား - ကျား (<b> {{$factory->CitizenMenWorker}}  </b>) ၊ မ ( <b> {{$factory->CitizenWomenWorker}} </b>) <br> 
			 &nbsp; &nbsp; &nbsp;&nbsp;နိုင်ငံခြားသားလုပ်သား - ကျား ( <b>{{$factory->ForeignerMenWorker}} </b> ) ၊ မ ( <b> {{$factory->ForeignerWomenWorker}} </b> ) 
        </div>
        <div class="col-sm-6">
			၁၉။ အနည်းဆုံးလစာ - <b>{{$factory->MinimumSalary}}</b>
        </div>
        <div class="col-sm-6 text-left">
			၂၀။ အများဆုံးလစာ - <b> {{$factory->MaximumSalary}}</b>
		</div>
	</div>
</p>

<p>
    <div class="row">
		<div class="col-sm-12">
			၂၂ ။ အလုပ်ချိန်/ထမင်းစားနားချိန်  - 
			@if($factory->WorkTimeType == 0)	
					    <legend class="scheduler-border">ပုံစံ - ဃ (က)</legend>
					    	<span> တနင်္လာမှ စနေနေ့အထိ</span> 
					    	<div class="row">
					    			အလုပ်စသည့်အချိန် - <b> {{$factory->MToSTimein}}</b>
					    	</div>
					    	<div class="row">
					    			အလုပ်ပြီးသည့်အချိန် - <b>{{$factory->MToSTimeout}}</b>
					    	</div> 
					    	<div class="row">
					    			ထမင်းစားနားချိန် - <b>{{$factory->LunchStartTime}} မှ {{$factory->LunchEndTime}}  အထိ</b>
					    			 
					    	</div>
					    	ပုဒ်မ (၆၀) အရ ရက်သတ္တပတ်အလုပ်ပိတ်ရက် - တနင်္ဂနွေနေ့
			@else 
					    <legend class="scheduler-border">ပုံစံ - ဃ (ခ)</legend>
					    	<div class="row">
					    		<div class="col-sm-6">
					    				<span>တနင်္လာမှ သောကြာအထိ</span>
					    			<div class="row">
							    			အလုပ်စသည့်အချိန် - 
							    			<b> {{$factory->MToFTimein}}</b>
							    	</div>
						    	<div class="row">
							    			အလုပ်ပြီးသည့်အချိန် - <b>{{$factory->MToFTimeout}}</b>	  
							    	</div> 
							    	<div class="row">
							    			ထမင်းစားနားချိန် - <b> {{$factory->LunchStartTime}} မှ {{$factory->LunchEndTime}}  အထိ</b>
					    			
							    	</div>
					    		</div>
					    		<div class="col-sm-6">
					    			<span>စနေနေ့</span>
					    			<div class="row">
							    			အလုပ်စသည့်အချိန် - <b>  {{$factory->STimein}}</b>
					    			</div> 
							    	<div class="row">
							    			အလုပ်ပြီးသည့်အချိန် - <b>{{$factory->STimeout}}</b>
							    	</div> 
					    		</div>	
					    	</div>
					    	<span>ပုဒ်မ (၆၀) အရ ရက်သတ္တပတ်အလုပ်ပိတ်ရက် - စနေနေ့တစ်ဝက်နှင့် တနင်္ဂနွေနေ့</span>
			@endif
			
		</div>
		
	</div>
</p>

    <div class="row">
		<div class="col-sm-6">
			၂၃။ အချိန်ပိုလုပ်ကိုင်မှု ခွင့်ပြုချက် -  <b>@if($factory->OTPermit == 0) ယူ @else မယူ @endif</b>
		</div>
		<div class="col-sm-6 text-left">
			၂၄။ အချိန်ပိုလုပ်ကိုင်မှု - <b> @if($factory->OverTime == 0) ရှိ @else မရှိ @endif</b>
        </div>
        <div class="col-sm-6">
            ၂၄။ လူမှုဖူလုံရေးဝင်ပြီး - <b>@if($factory->SSB == 0) ပြီး @else မပြီး @endif</b>
        </div>
        <div class="col-sm-6 text-left">
            ၂၅။ သက်သာချောင်ချိရေး ဆောင်ရွက်မှုကိစ္စ -  <b>@if($factory->Welfare == 0) ရှိ @else မရှိ @endif</b>
        </div>
        <div class="col-sm-6">
			၂၆။ ကျွမ်းကျင်ပညာရှင် ကြီးကြပ်အုပ်ချူပ်မှု - <b>@if($factory->ManagementExpert == 0) ရှိ @else မရှိ @endif</b>
        </div>
        <div class="col-sm-6 text-left">
			၂၇။ လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေး 
			နှင့် ကျန်းမာရေးကော်မတီ - <b> @if($factory->SafteySide == 0) ရှိ @else မရှိ @endif</b>
        </div>
        <div class="col-sm-12">
			၂၈။ လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေး ဆောင်ရွက်ထားမှု - <b>@if($factory->ManagementExpert == 0) ရှိ @else မရှိ @endif</b>
        </div>
        <div class="col-sm-6">
			၂၉။ အလုပ်ရုံဆက်သွယ်ရန် ဖက်စ်နံပါတ်-  <b>{{$factory->ContactFax }}</b>
        </div>
        <div class="col-sm-6 text-left">
			၃၀။ အလုပ်ရုံဆက်သွယ်ရန် အီးမေးလ်လိပ်စာ - <b>{{$factory->EmailAdd }}</b>
        </div>
        <div class="col-sm-12">
			၃၁။ ပြုလုပ်မည့်လုပ်ငန်းနှင့်စပ်လျဉ်းနောင်လာမည့်၁၂လအတွင်းပြုလုပ်မည့်လုပ်ငန်းစဉ် - <b>{{$factory->NextYearProcess }}</b>
		</div>

		<div class="col-sm-12">
			၃၂။ အလုပ်ရုံတွင်နောင်လာမည့်၁၂လအတွင်းခိုင်းစေမည့်အလုပ်သမား <br> <br>
					<table style="width:100%" border="1">
					  <tr>
					  	<td rowspan="2"> </td>
					    <td colspan="2">လူကြီး</td>
					    <td colspan="2">လူရွယ် ၁၆နှစ်၊ ၁၈နှစ်</td>
					    <td colspan="2">ကလေး ၁၄နှစ်၊ ၁၆နှစ်</td>
					  </tr>
					  <tr>
					    <td> ကျား</td>
					    <td>မ </td>
					    <td> ကျား</td>
					    <td>မ </td>
					    <td> ကျား</td>
					    <td>မ </td>
					  </tr>
					  <tr>
					    <td style="width: 100px;">လခစား</td>
					    <td>{{$factory->MenWorker }}</td>
					    <td>{{$factory->WomenWorker }}</td>
					    <td>{{$factory->AMenWorker }}</td>
					    <td>{{$factory->AWomenWorker }}</td>
					    <td>{{$factory->CMenWorker }}</td>
					    <td>{{$factory->CWomenWorker }}</td>
					  </tr>
					   <tr>
					    <td>နေ့စား</td>
					    <td>{{$factory->DailyMenWorker }}</td>
					    <td>{{$factory->DailyWomenWorker }}</td>
					    <td>{{$factory->ADailyMenWorker }}</td>
					    <td>{{$factory->ADailyWomenWorker }}</td>
					    <td>{{$factory->CDailyMenWorker }}</td>
					    <td>{{$factory->CDailyWomenWorker }}</td>
					  </tr>
					  <tr>
					    <td>ပုတ်ပြတ်</td>
					    <td>{{$factory->PieceMenWorker }}</td>
					    <td>{{$factory->PieceWomenWorker }}</td>
					    <td>{{$factory->APieceMenWorker }}</td>
					    <td>{{$factory->APieceWomenWorker }}</td>
					    <td>{{$factory->CPieceMenWorker }}</td>
					    <td>{{$factory->CPieceWomenWorker }}</td>
					  </tr>
					</table> <br>
                </div>

                <div class="col-sm-6">
                    ၃၃။ လုပ်ငန်းပိုင်ရှင် မှတ်ပုံတင်နံပါတ်-  <b>{{$factory->OwnerNrc }}</b>
                </div>
                <div class="col-sm-6 text-left">
                    ၃၄။ လုပ်ငန်းပိုင်ရှင် ဖက်စ် - <b>{{$factory->OwnerFax }}</b>
                </div>
                <div class="col-sm-6">
                    ၃၅။ လုပ်ငန်းပိုင်ရှင် ဖုန်းနံပါတ်- <b>{{$factory->OwnerPhno }}</b>
                </div>
                <div class="col-sm-6 text-left">
                    ၃၆။ လုပ်ငန်းပိုင်ရှင် အီးမေး - <b>{{$factory->OwnerEmail }}</b>
                </div>
                <div class="col-sm-6">
                    ၃၇။ လုပ်ငန်းပိုင်ရှင် လိပ်စာ- <b>{{$factory->OwnerAddress }}</b>
                </div>
                <div class="col-sm-6">
                    ၃၈။ လက်မှတ်ထိုးသူ အမည် - <b>{{$factory->SignatureName }}</b>
                </div>
                <div class="col-sm-6 text-left">
                    ၃၉။ လက်မှတ်ထိုးသူ ရာထူး - <b>{{$factory->SignatureRank }}</b>
				</div>
        </div>

<hr>
</div>
<script src="{{asset('assets/js/common.js')}}"></script>
</body>
</html>