@extends('layouts.admin')
@section('content')
<div class="container" >
	
<h3 style="text-align: center;">စက်ရုံနှင့်ပတ်သက်သောအချက်အလက်များ</h3>
<hr>
<p>
    <div class="row">
		<div class="col-sm-6">
			၁။ စက်ရုံအမည်နှင့် ကုမ္မဏီအမည် - {{$factory->FactoryName}} 
		</div>
		<div class="col-sm-6 text-left">
			၂။ စက်ရုံလိပ်စာနှင့် ဖုန်းအမှတ် - {{$factory->ContactAddress}} ၊ {{$factory->ContactPhone}}
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၃။ စက်ရုံပိုင်ရှင်အမည် - {{$factory->OwnerName}}
		</div>
		<div class="col-sm-6 text-left">
			၄။ ပိုင်ဆိုင်မှုအမျိုးအစား - {{$factory->PropertyType}}
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၅။ အသုံးပြုသည့်စွမ်းအင် - {{$factory->UsedPower}}
		</div>
		<div class="col-sm-6 text-left">
			၆။ လုပ်ငန်းအမျိုးအစား -  {{App\EconomicClass::where('class_code',$factory->class_name)->value('class_name')}}
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၇။ ရင်းနှီးမြှုပ်နှံမှု (LDI/FDI) - {{$factory->Investment}}
		</div>
		<div class="col-sm-6 text-left">
			၈။ E/C အလုပ်ခန့်ထားမှု စာချူပ် - @if($factory->Contract == 0) ဆောင်ရွက်ဆဲ @else ဆောင်ရွက်ပြီး @endif
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၉။ စက်ရုံစတင်လည်ပတ်သည့်နေ့ - {{$factory->StartDate}}
		</div>
		<div class="col-sm-6 text-left">
			၁၀။ ထုတ်လုပ်သည့်ပစ္စည်း (အဓိက) - {{$factory->ProducedProduct}}
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၁၁။ ထုတ်လုပ်သည့်ပစ္စည်း (အခြား) - {{$factory->ProducedOthers}}
		</div>
		<div class="col-sm-6 text-left">
			၁၂။ အလုပ်ရုံနှင့် အလုပ်သမားဥပဒေစစ်ဆေးရေးဦးစီးဌာနသို့ နို့တစ်ပေးခြင်း  	<br> &nbsp;&nbsp;&nbsp; &nbsp;@if($factory->NoticeStatus == 0) - ပြီး @else - မပြီး @endif
		</div>
		</div>
</p>

<p>
    <div class="row">
		<div class="col-sm-6">
			၁၃။ ကုန်ကြမ်းရရှိမှု - {{$factory->RawMaterials}}
		</div>
		<div class="col-sm-6 text-left">
			၁၄။ ကုန်ချောတင်ပို့မှု - {{$factory->Goods}}
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၁၅။ တစ်လထုတ်လုပ်နိုင်မှုပမာဏ - {{$factory->MonthlyAmounts}}
		</div>
		<div class="col-sm-6 text-left">
			၁၆။ လစာပေးရက် - {{$factory->SalaryDate}}
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၁၇။ တစ်လထုတ်လုပ်နိုင်မှုပမာဏ - {{$factory->MonthlyAmounts}}
		</div>
		<div class="col-sm-6 text-left">
			၁၈။ နိုင်ငံသားလုပ်သား - ကျား ( {{$factory->CitizenMenWorker}} ) ၊ မ ( {{$factory->CitizenWomenWorker}} ) <br> 
			 &nbsp; &nbsp; &nbsp;&nbsp;နိုင်ငံခြားသားလုပ်သား - ကျား ( {{$factory->ForeignerMenWorker}} ) ၊ မ ( {{$factory->ForeignerWomenWorker}} ) 
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၁၉။ အနည်းဆုံးလစာ - {{$factory->MinimumSalary}}
		</div>
		<div class="col-sm-6 text-left">
			၂၀။ အများဆုံးလစာ - {{$factory->MaximumSalary}}
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-12">
			၂၂ ။ အလုပ်ချိန်/ထမင်းစားနားချိန်  - <br>
			@if($factory->WorkTimeType == 0)	
			   <fieldset class="scheduler-border">
					    <legend class="scheduler-border">ပုံစံ - ဃ (က)</legend>
					    <div class="control-group">
					    	<span> တနင်္လာမှ စနေနေ့အထိ</span> <br>
					    	<div class="row">
					    		<div class="col-sm-4 text-center">
					    			အလုပ်စသည့်အချိန် - 
					    		</div>
					    		<div class="col-sm-4 text-left">
					    			 {{$factory->MToSTimein}}
					    		</div>
					    	</div> <br>
					    	<div class="row">
					    		<div class="col-sm-4 text-center">
					    			အလုပ်ပြီးသည့်အချိန် - 
					    		</div>
					    		<div class="col-sm-4 text-left">
					    			 {{$factory->MToSTimeout}}
					    		</div>
					    	</div> <br>
					    	<div class="row">
					    		<div class="col-sm-4 text-center">
					    			ထမင်းစားနားချိန် -
					    		</div>
					    		<div class="col-sm-4 text-left">
					    			 {{$factory->LunchStartTime}} မှ {{$factory->LunchEndTime}}  အထိ
					    		</div> 
					    	</div>
					    	<br> <p>ပုဒ်မ (၆၀) အရ ရက်သတ္တပတ်အလုပ်ပိတ်ရက် - တနင်္ဂနွေနေ့</p>
					    </div>
					</fieldset>		
			@else 
				<fieldset class="scheduler-border">
					    <legend class="scheduler-border">ပုံစံ - ဃ (ခ)</legend>
					    <div class="control-group">
					    	<div class="row">
					    		<div class="col-sm-6">
					    				<p>တနင်္လာမှ သောကြာအထိ</p>
					    			<div class="row">
							    		<div class="col-sm-6 text-center">
							    			အလုပ်စသည့်အချိန် - 
							    		</div>
							    		<div class="col-sm-6 text-left">
							    			 {{$factory->MToFTimein}}
							    		</div>
					    			</div> <br>
							    	<div class="row">
							    		<div class="col-sm-6 text-center">
							    			အလုပ်ပြီးသည့်အချိန် -
							    		</div>
							    		<div class="col-sm-6 text-left">
							    			  {{$factory->MToFTimeout}}
							    		</div>
							    	</div> <br>
							    	<div class="row">
							    		<div class="col-sm-6 text-center">
							    			ထမင်းစားနားချိန် - 
							    		</div>
							    		<div class="col-sm-6 text-left">
					    			 {{$factory->LunchStartTime}} မှ {{$factory->LunchEndTime}}  အထိ

							    		</div> 
							    	</div>
					    		</div>
					    		<div class="col-sm-6">
					    			<p>စနေနေ့</p>
					    			<div class="row">
							    		<div class="col-sm-6 text-center">
							    			အလုပ်စသည့်အချိန်
							    		</div>
							    		<div class="col-sm-6 text-left">
							    			  {{$factory->STimein}}
							    		</div>
					    			</div> <br>
							    	<div class="row">
							    		<div class="col-sm-6 text-center">
							    			အလုပ်ပြီးသည့်အချိန်
							    		</div>
							    		<div class="col-sm-6 text-left">
							    			 {{$factory->STimeout}}
							    		</div>
							    	</div> <br>
					    		</div>	
					    	</div>
					    	<br> <p>ပုဒ်မ (၆၀) အရ ရက်သတ္တပတ်အလုပ်ပိတ်ရက် - စနေနေ့တစ်ဝက်နှင့် တနင်္ဂနွေနေ့</p>
					    </div>
					</fieldset>
			@endif
			
		</div>
		
	</div>
</p>

<p>
    <div class="row">
		<div class="col-sm-6">
			၂၃။ အချိန်ပိုလုပ်ကိုင်မှု ခွင့်ပြုချက် - @if($factory->OTPermit == 0) ယူ @else မယူ @endif
		</div>
		<div class="col-sm-6 text-left">
			၂၄။ အချိန်ပိုလုပ်ကိုင်မှု - @if($factory->OverTime == 0) ရှိ @else မရှိ @endif
		</div>
	</div>
</p>

<p>
    <div class="row">
		<div class="col-sm-6">
			၂၄။ လူမှုဖူလုံရေးဝင်ပြီး - @if($factory->SSB == 0) ပြီး @else မပြီး @endif
		</div>
		<div class="col-sm-6 text-left">
			၂၅။ သက်သာချောင်ချိရေး ဆောင်ရွက်မှုကိစ္စ - @if($factory->Welfare == 0) ရှိ @else မရှိ @endif
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၂၆။ ကျွမ်းကျင်ပညာရှင် ကြီးကြပ်အုပ်ချူပ်မှု - @if($factory->ManagementExpert == 0) ရှိ @else မရှိ @endif
		</div>
		<div class="col-sm-6 text-left">
			၂၇။ လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေး 
			နှင့် ကျန်းမာရေးကော်မတီ - @if($factory->SafteySide == 0) ရှိ @else မရှိ @endif
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-12">
			၂၈။ လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေး ဆောင်ရွက်ထားမှု - @if($factory->ManagementExpert == 0) ရှိ @else မရှိ @endif
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၂၉။ အလုပ်ရုံဆက်သွယ်ရန် ဖက်စ်နံပါတ်- {{$factory->ContactFax }}
		</div>
		<div class="col-sm-6 text-left">
			၃၀။ အလုပ်ရုံဆက်သွယ်ရန် အီးမေးလ်လိပ်စာ - {{$factory->EmailAdd }}
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-12">
			၃၁။ ပြုလုပ်မည့်လုပ်ငန်းနှင့်စပ်လျဉ်းနောင်လာမည့်၁၂လအတွင်းပြုလုပ်မည့်လုပ်ငန်းစဉ် - {{$factory->NextYearProcess }}
		</div>
	</div>
</p>
<p>
    <div class="row">
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
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၃၃။ လုပ်ငန်းပိုင်ရှင် မှတ်ပုံတင်နံပါတ်- {{$factory->OwnerNrc }}
		</div>
		<div class="col-sm-6 text-left">
			၃၄။ လုပ်ငန်းပိုင်ရှင် ဖက်စ် - {{$factory->OwnerFax }}
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၃၅။ လုပ်ငန်းပိုင်ရှင် ဖုန်းနံပါတ်- {{$factory->OwnerPhno }}
		</div>
		<div class="col-sm-6 text-left">
			၃၆။ လုပ်ငန်းပိုင်ရှင် အီးမေး - {{$factory->OwnerEmail }}
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၃၇။ လုပ်ငန်းပိုင်ရှင် လိပ်စာ- {{$factory->OwnerAddress }}
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၃၈။ လက်မှတ်ထိုးသူ အမည် - {{$factory->SignatureName }}
		</div>
		<div class="col-sm-6 text-left">
			၃၉။ လက်မှတ်ထိုးသူ ရာထူး - {{$factory->SignatureRank }}
		</div>
	</div>
</p>
<!-- scroll back to top of the page -->
<a id="back2Top" title="Back to top" href="#">&#10148;</a>
<hr>
</div>
<script src="{{asset('assets/js/common.js')}}"></script>
@endsection