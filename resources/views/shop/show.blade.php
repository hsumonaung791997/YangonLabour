@extends('layouts.admin')
@section('content')
<div class="container" >
	
<h3 style="text-align: center;">ဆိုင် / အလုပ်ဌာနနှင့်ပတ်သက်သောအချက်အလက်များ</h3>
<hr>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>ဆိုင် (သို့မဟုတ်) အလုပ်ဌာန အမည် - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->shopname}}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>အီးမေး - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->shopemail}}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>ဖက်စ် - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->shopfax}}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>ဖုန်းနံပါတ် - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->shopphone}}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>အလုပ်ရှင်အမည် - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->ownername}}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>ဆိုင် (သို့မဟုတ်) အလုပ်ဌာနအမျိုးအစား - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->shoptype}}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>နိုင်ငံသားစီစစ်ရေးအမှတ် - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->ownernrc}}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>ပိုင်ရှင်နေရပ်လိပ်စာ - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->owneraddress}}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>ပိုင်ရှင် ဆက်သွယ်ရန် ဖုန်းနံပါတ် - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->ownerphone}}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>ပိုင်ရှင် ဆက်သွယ်ရန် ဖက်စ် - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->ownerfax}}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>ပိုင်ရှင်ဆက်သွယ်ရန် အီးမေး - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->owneremail}}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>မန်နေဂျာ (သို့မဟုတ်) အလုပ်ရှင်ကိုယ်စား တာဝန်ခံအမည် - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->mangername}}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>တာဝန်ခံ နိုင်ငံသားစီစစ်ရေးအမှတ် - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->managernrc}}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>တာဝန်ခံ နေရပ်လိပ်စာ - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->manageraddress}}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>တာဝန်ခံ ဆက်သွယ်ရန်ဖုန်း - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->managerphone}}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>တာဝန်ခံ ဆက်သွယ်ရန်ဖက်(စ်) - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->managerfax}}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>တာဝန်ခံ ဆက်သွယ်ရန် အီးမေးလ်လိပ်စာ - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->manageremail}}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>တစ်ရက်လျှင် ၂၄နာရီ လုပ်ကိုင်ရန် - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>@if($shop->operate24hr == 0) လို @else မလို @endif</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>ဆိုင်တည်နေရာ - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->loacationaddress }}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-12">
  				<p>&nbsp;ဆိုင်၊အလုပ်ဌာနရှိ နိုင်ငံသားအလုပ်သမားအရေအတွက် - </p>
   			 <div class="row">
				<div class="col-sm-12">
					<table style="width:100%" border="1">
					  <tr>
					  	<td rowspan="2"> </td>
					    <td colspan="2">လူကြီး</td>
					    <td colspan="2">လူငယ် ၁၆နှစ်၊ ၁၈နှစ်</td>
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
					    <td>{{ $shop->MenWorker}}</td>
					    <td>{{ $shop->WomenWorker}}</td>
					    <td>{{ $shop->AMenWorker}}</td>
					    <td>{{ $shop->AWomenWorker}}</td>
					    <td>{{ $shop->CMenWorker}}</td>
					    <td>{{ $shop->CWomenWorker}}</td>
					  </tr>
					   <tr>
					    <td>နေ့စား</td>
					    <td>{{ $shop->DailyMenWorker}}</td>
					    <td>{{ $shop->DailyWomenWorker}}</td>
					    <td>{{ $shop->ADailyMenWorker}}</td>
					    <td>{{ $shop->ADailyWomenWorker}}</td>
					    <td>{{ $shop->CDailyMenWorker}}</td>
					    <td>{{ $shop->CDailyWomenWorker}}</td>
					  </tr>
					  <tr>
					    <td>ပုတ်ပြတ်</td>
					    <td>{{ $shop->PieceMenWorker}}</td>
					    <td>{{ $shop->PieceWomenWorker}}</td>
					    <td>{{ $shop->APieceMenWorker}}</td>
					    <td>{{ $shop->APieceWomenWorker}}</td>
					    <td>{{ $shop->CPieceMenWorker}}</td>
					    <td>{{ $shop->CPieceWomenWorker}}</td>
					  </tr>
					</table>
				</div>
			</div> <br>
  			</div>
  		</div>
	</p>

	<p>
		<div class="row">
			<div class="col-sm-12">
				<p>&nbsp;ဆိုင်၊အလုပ်ဌာနရှိ နိုင်ငံသားခြားအလုပ်သမားအရေအတွက် - </p>
   			 <div class="row">
				<div class="col-sm-12">
					<table style="width:100%" border="1">
					  <tr>
					  	<td></td>
					    <td> ကျား</td>
					    <td>မ </td>
					  </tr>
					  <tr>
					    <td style="width: 100px;">လခစား</td>
					    <td>{{ $shop->MForeignerMenWorker}}</td>
					    <td>{{ $shop->MForeignerWomenWorker}}</td>
					  </tr>
					   <tr>
					    <td>နေ့စား</td>
					    <td>{{ $shop->DailyForeignerMenWorker}}</td>
					    <td>{{ $shop->DailyForeignerWomenWorker}}</td>
					  </tr>
					  <tr>
					    <td>ပုတ်ပြတ်</td>
					    <td>{{ $shop->PForeignerMenWorker}}</td>
					    <td>{{ $shop->PForeignerWomenWorker}}</td>
					  </tr>
					</table> <br>
				</div>
			</div>
			</div>
		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-12">
  				<table style="width:100%" border="1">
					  <tr>
					  	<td> </td>
					    <td>ကျား</td>
					    <td>မ </td>
					  </tr>
					  <tr>
					    <th>နိုင်ငံသားလုပ်သား</th>
					    <td>{{ $shop->CitizenMenWorker}}</td>
					    <td>{{ $shop->CitizenWomenWorker}}</td>
					  </tr>
					   <tr>
					    <th>နိုင်ငံခြားသားလုပ်သား</th>
					    <td>{{ $shop->ForeignerMenWorker}}</td>
					    <td>{{ $shop->ForeignerWomenWorker}}</td>
					  </tr>
					</table>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>ပိုင်ဆိုင်မှုအမျိုးအစား - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->PropertyType }}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>အသုံးပြုသည့်စွမ်းအင် - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->UsedPower }}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>တစ်လထုတ်လုပ်နိုင်မှုပမာဏ - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->MonthlyAmounts }}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>ရင်းနှီးမြှုပ်နှံမှု (LDI/FDI) - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->Investment }}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>ထုတ်လုပ်သည့်ပစ္စည်း (အဓိက) - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->ProducedProduct }}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>ထုတ်လုပ်သည့်ပစ္စည်း(အခြား) - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->ProducedOthers }}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>ကုန်ကြမ်းရရှိမှု - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->RawMaterials }}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>ကုန်ချောတင်ပို့မှု - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->Goods }}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>လုပ်ငန်းအမျိုးအစား - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{App\EconomicClass::where('class_code',$shop->class_name)->value('class_name')}}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>အလုပ်ရုံစတင်လုပ်ကိုင်သောရက်စွဲ - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->StartDate }}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>E/C အလုပ်ခန့်ထားမှု စာချူပ် - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>@if($shop->Contract == 0) ဆောင်ရွက်ဆဲ @else ဆောင်ရွက်ပြီး @endif</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>အချိန်ပိုလုပ်ကိုင်မှု - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>@if($shop->OverTime == 0) ရှိ @else မရှိ @endif</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>အချိန်ပိုလုပ်ကိုင်မှု ခွင့်ပြုချက် - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>@if($shop->OTPermit == 0) ယူ @else မယူ @endif</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>လူမှုဖူလုံရေးဝင်ပြီး/မပြီး - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>@if($shop->SSB == 0) ပြီး @else မပြီး @endif</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>အလုပ်ရုံနှင့် အလုပ်သမားဥပဒေစစ်ဆေးရေးဦးစီးဌာနသို့ နို့တစ်ပေးခြင်း - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>@if($shop->NoticeStatus == 0) ပြီး @else မပြီး @endif</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေး ဆောင်ရွက်ထားမှု - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>@if($shop->SafteySide == 0) ရှိ @else မရှိ @endif</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>ကျွမ်းကျင်ပညာရှင် ကြီးကြပ်အုပ်ချူပ်မှု  - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>@if($shop->ManagementExpert == 0) ရှိ @else မရှိ @endif</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>ကျွမ်းကျင်ပညာရှင် ကြီးကြပ်အုပ်ချူပ်မှု  - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>@if($shop->Welfare == 0) ရှိ @else မရှိ @endif</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>လစာပေးရက်  - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->SalaryDate}}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>အနည်းဆုံးလစာ  - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->MinimumSalary}}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-5 text-right">
  				<label>အများဆုံးလစာ  - </label>
  			</div>
  			<div class="col-sm-6">
  				<b>{{$shop->MaximumSalary}}</b>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-12">
  				@if($shop->WorkTimeType==0)
  					တူညီသောအလုပ်ချိန်တွင် အလုပ်လုပ်ခြင်းဆိုင်ရာ နို့တစ်စာ
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">ဆိုင်များနှင့် အလုပ်ဌာနများ နည်းဥပဒေ (၇)</legend>
						    <div class="control-group">
						    	<div class="row">
						    		<div class="col-sm-4 text-center">
						    			အလုပ်စသည့်အချိန်
						    		</div>
						    		<div class="col-sm-4">
						    			 {{ $shop->StartWorkTime}}
						    		</div>
						    	</div> <br>
						    	<div class="row">
						    		<div class="col-sm-4 text-center">
						    			အလုပ်ပြီးသည့်အချိန်
						    		</div>
						    		<div class="col-sm-4">
						    			{{ $shop->EndWorkTime}}
						    		</div>
						    	</div> <br>
						    	<div class="row">
						    		<div class="col-sm-4 text-center">
						    			အားလပ်ချိန်
						    		</div>
						    		<div class="col-sm-4">
						    			<div class="row">
						    				<div class="col-sm-6">
						    					 {{ $shop->freetimefrom}} မှ 
						    				</div>
						    				<div class="col-sm-6">
						    					{{ $shop->freetimeto}}  အထိ 
						    				</div>
						    				
						    			</div>
						    			
						    			 
						    		</div> 
						    	</div> <br>
						         <p>
						         	<div class="row">
						         		<div class="col-sm-3 text-center">
						         			<label for="closeworkdays">ရက်သတ္တပတ်အလုပ်ပိတ်ရက် </label>
						         		</div>
						         		<div class="col-sm-5">
						         			{{ $shop->closeworkdays}}
						         		</div>
						         	</div>
						    	</p>
						    	<p>
						    		ရက်သတ္တပတ်အလုပ်ပိတ်ရက်ဖြစ်သည့် နေ့များတွင် ဆိုင်/အလုပ်ဌာနရှိ အလုပ်သမားများ အား ရက်သတ္တပတ်လျှင် အနည်းဆုံးတစ်ရက်ကို လုပ်ခလစာပြည့်ဖြင့် အလှည့်ကျ နားခွင့်ပေးမည်ဖြစ်ပါကြောင်း ။
						    	</p>
						    </div>
						</fieldset>
  				@else
  					<p>အလုပ်လုပ်ရန်ကာလအပိုင်းအခြားဆိုင်ရာ နို့တစ်စာ - </p>
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">ဆိုင်များနှင့် အလုပ်ဌာနများ နည်းဥပဒေ (၈)</legend>
						    <div class="control-group">
						    	
						    </div>
						</fieldset>
  				@endif

  			</div>
  		</div>
	</p>

  <p>
      <div class="row">
        <div class="col-sm-5 text-right">
          <label>အမည်  - </label>
        </div>
        <div class="col-sm-6">
          <b>{{$shop->SignatureName}}</b>
        </div>
      </div>
  </p>
  <p>
      <div class="row">
        <div class="col-sm-5 text-right">
          <label>ရာထူး  - </label>
        </div>
        <div class="col-sm-6">
          <b>{{$shop->SignatureRank}}</b>
        </div>
      </div>
  </p>
</div>
@endsection