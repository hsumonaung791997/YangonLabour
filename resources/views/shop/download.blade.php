<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ဆိုင် / အလုပ်ဌာန
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
<h3 style="text-align: center;"> {{$shop->shopname}} (ဆိုင် / အလုပ်ဌာန)နှင့်ပတ်သက်သောအချက်အလက်များ</h3>
<hr>
    <p>
        <div class="row">
                ဆိုင် (သို့မဟုတ်) အလုပ်ဌာန အမည် -   <b> {{$shop->shopname}} </b>
        </div>
    </p>
	<p>
  		<div class="row">
  				အီးမေး - <b>{{$shop->shopemail}}</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				ဖက်စ် - <b>{{$shop->shopfax}}</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  			ဖုန်းနံပါတ် - <b>{{$shop->shopphone}}</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  			အလုပ်ရှင်အမည် - <b>{{$shop->ownername}}</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  			ဆိုင် (သို့မဟုတ်) အလုပ်ဌာနအမျိုးအစား -  <b>{{$shop->shoptype}}</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				နိုင်ငံသားစီစစ်ရေးအမှတ် - <b>{{$shop->ownernrc}}</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				ပိုင်ရှင်နေရပ်လိပ်စာ - <b>{{$shop->owneraddress}}</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  			ပိုင်ရှင် ဆက်သွယ်ရန် ဖုန်းနံပါတ် -  <b>{{$shop->ownerphone}}</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  			ပိုင်ရှင် ဆက်သွယ်ရန် ဖက်စ် - <b>{{$shop->ownerfax}}</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  			ပိုင်ရှင်ဆက်သွယ်ရန် အီးမေး -  <b>{{$shop->owneremail}}</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  			မန်နေဂျာ (သို့မဟုတ်) အလုပ်ရှင်ကိုယ်စား တာဝန်ခံအမည် -  <b>{{$shop->mangername}}</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				တာဝန်ခံ နိုင်ငံသားစီစစ်ရေးအမှတ် - 
  				<b>{{$shop->managernrc}}</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>တာဝန်ခံ နေရပ်လိပ်စာ - </label>
  				<b>{{$shop->manageraddress}}</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>တာဝန်ခံ ဆက်သွယ်ရန်ဖုန်း - </label>
  				<b>{{$shop->managerphone}}</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>တာဝန်ခံ ဆက်သွယ်ရန်ဖက်(စ်) - </label>
  				<b>{{$shop->managerfax}}</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>တာဝန်ခံ ဆက်သွယ်ရန် အီးမေးလ်လိပ်စာ - </label>
  				<b>{{$shop->manageremail}}</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>တစ်ရက်လျှင် ၂၄နာရီ လုပ်ကိုင်ရန် - </label>
  				<b>@if($shop->operate24hr == 0) လို @else မလို @endif</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>ဆိုင်တည်နေရာ - </label>
  				<b>{{$shop->loacationaddress }}</b>
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
				<p>&nbsp;ဆိုင်၊အလုပ်ဌာနရှိ နိုင်ငံသားအလုပ်သမားအရေအတွက် - </p>
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
  				<label>ပိုင်ဆိုင်မှုအမျိုးအစား - </label>
  				<b>{{$shop->PropertyType }}</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>အသုံးပြုသည့်စွမ်းအင် - </label>
  				<b>{{$shop->UsedPower }}</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>တစ်လထုတ်လုပ်နိုင်မှုပမာဏ - </label>
  				<b>{{$shop->MonthlyAmounts }}</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>ရင်းနှီးမြှုပ်နှံမှု (LDI/FDI) - </label>
  				<b>{{$shop->Investment }}</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>ထုတ်လုပ်သည့်ပစ္စည်း (အဓိက) - </label>
  				<b>{{$shop->ProducedProduct }}</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>ထုတ်လုပ်သည့်ပစ္စည်း(အခြား) - </label>
  				<b>{{$shop->ProducedOthers }}</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>ကုန်ကြမ်းရရှိမှု - </label>
  				<b>{{$shop->RawMaterials }}</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>ကုန်ချောတင်ပို့မှု - </label>
  				<b>{{$shop->Goods }}</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>လုပ်ငန်းအမျိုးအစား - </label>
  				<b>{{App\EconomicClass::where('class_code',$shop->class_name)->value('class_name')}}</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>အလုပ်ရုံစတင်လုပ်ကိုင်သောရက်စွဲ - </label>
  				<b>{{$shop->StartDate }}</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>E/C အလုပ်ခန့်ထားမှု စာချူပ် - </label>
  				<b>@if($shop->Contract == 0) ဆောင်ရွက်ဆဲ @else ဆောင်ရွက်ပြီး @endif</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>အချိန်ပိုလုပ်ကိုင်မှု - </label>
  				<b>@if($shop->OverTime == 0) ရှိ @else မရှိ @endif</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>အချိန်ပိုလုပ်ကိုင်မှု ခွင့်ပြုချက် - </label>
  				<b>@if($shop->OTPermit == 0) ယူ @else မယူ @endif</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>လူမှုဖူလုံရေးဝင်ပြီး/မပြီး - </label>
  				<b>@if($shop->SSB == 0) ပြီး @else မပြီး @endif</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>အလုပ်ရုံနှင့် အလုပ်သမားဥပဒေစစ်ဆေးရေးဦးစီးဌာနသို့ နို့တစ်ပေးခြင်း - </label>
  				<b>@if($shop->NoticeStatus == 0) ပြီး @else မပြီး @endif</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေး ဆောင်ရွက်ထားမှု - </label>
  				<b>@if($shop->SafteySide == 0) ရှိ @else မရှိ @endif</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>ကျွမ်းကျင်ပညာရှင် ကြီးကြပ်အုပ်ချူပ်မှု  - </label>
  				<b>@if($shop->ManagementExpert == 0) ရှိ @else မရှိ @endif</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>ကျွမ်းကျင်ပညာရှင် ကြီးကြပ်အုပ်ချူပ်မှု  - </label>
  				<b>@if($shop->Welfare == 0) ရှိ @else မရှိ @endif</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>လစာပေးရက်  - </label>
  				<b>{{$shop->SalaryDate}}</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>အနည်းဆုံးလစာ  - </label>
  				<b>{{$shop->MinimumSalary}}</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>အများဆုံးလစာ  - </label>
  				<b>{{$shop->MaximumSalary}}</b>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-12">
  				@if($shop->WorkTimeType==0)
  					တူညီသောအလုပ်ချိန်တွင် အလုပ်လုပ်ခြင်းဆိုင်ရာ နို့တစ်စာ
						    <legend class="scheduler-border">ဆိုင်များနှင့် အလုပ်ဌာနများ နည်းဥပဒေ (၇)</legend>
						    	<div class="row">
						    			အလုပ်စသည့်အချိန် - {{ $shop->StartWorkTime}}	 
						    	</div> 
						    	<div class="row">
						    			အလုပ်ပြီးသည့်အချိန် - {{ $shop->EndWorkTime}}
						    	</div> 
						    	<div class="row">
						    			အားလပ်ချိန် -  {{ $shop->freetimefrom}} မှ  {{ $shop->freetimeto}}  အထိ 
						    	</div> 
						         <p>
						         	<div class="row">
						         			ရက်သတ္တပတ်အလုပ်ပိတ်ရက်   - {{ $shop->closeworkdays}}						         		
						         	</div>
						    	</p>
						    	<p>
						    		ရက်သတ္တပတ်အလုပ်ပိတ်ရက်ဖြစ်သည့် နေ့များတွင် ဆိုင်/အလုပ်ဌာနရှိ အလုပ်သမားများ အား ရက်သတ္တပတ်လျှင် အနည်းဆုံးတစ်ရက်ကို လုပ်ခလစာပြည့်ဖြင့် အလှည့်ကျ နားခွင့်ပေးမည်ဖြစ်ပါကြောင်း ။
						    	</p>
						    </div>
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
          <label>အမည်  - </label> <b>{{$shop->SignatureName}}</b>
      </div>
  </p>
  <p>
      <div class="row">
          <label>ရာထူး  - </label> <b>{{$shop->SignatureRank}}</b>
      </div>
  </p>
</div>
    
</body>
</html>