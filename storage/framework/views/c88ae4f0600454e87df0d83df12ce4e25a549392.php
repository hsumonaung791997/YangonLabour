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
<h3 style="text-align: center;"> <?php echo e($shop->shopname); ?> (ဆိုင် / အလုပ်ဌာန)နှင့်ပတ်သက်သောအချက်အလက်များ</h3>
<hr>
    <p>
        <div class="row">
                ဆိုင် (သို့မဟုတ်) အလုပ်ဌာန အမည် -   <b> <?php echo e($shop->shopname); ?> </b>
        </div>
    </p>
	<p>
  		<div class="row">
  				အီးမေး - <b><?php echo e($shop->shopemail); ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				ဖက်စ် - <b><?php echo e($shop->shopfax); ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  			ဖုန်းနံပါတ် - <b><?php echo e($shop->shopphone); ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  			အလုပ်ရှင်အမည် - <b><?php echo e($shop->ownername); ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  			ဆိုင် (သို့မဟုတ်) အလုပ်ဌာနအမျိုးအစား -  <b><?php echo e($shop->shoptype); ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				နိုင်ငံသားစီစစ်ရေးအမှတ် - <b><?php echo e($shop->ownernrc); ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				ပိုင်ရှင်နေရပ်လိပ်စာ - <b><?php echo e($shop->owneraddress); ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  			ပိုင်ရှင် ဆက်သွယ်ရန် ဖုန်းနံပါတ် -  <b><?php echo e($shop->ownerphone); ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  			ပိုင်ရှင် ဆက်သွယ်ရန် ဖက်စ် - <b><?php echo e($shop->ownerfax); ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  			ပိုင်ရှင်ဆက်သွယ်ရန် အီးမေး -  <b><?php echo e($shop->owneremail); ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  			မန်နေဂျာ (သို့မဟုတ်) အလုပ်ရှင်ကိုယ်စား တာဝန်ခံအမည် -  <b><?php echo e($shop->mangername); ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				တာဝန်ခံ နိုင်ငံသားစီစစ်ရေးအမှတ် - 
  				<b><?php echo e($shop->managernrc); ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>တာဝန်ခံ နေရပ်လိပ်စာ - </label>
  				<b><?php echo e($shop->manageraddress); ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>တာဝန်ခံ ဆက်သွယ်ရန်ဖုန်း - </label>
  				<b><?php echo e($shop->managerphone); ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>တာဝန်ခံ ဆက်သွယ်ရန်ဖက်(စ်) - </label>
  				<b><?php echo e($shop->managerfax); ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>တာဝန်ခံ ဆက်သွယ်ရန် အီးမေးလ်လိပ်စာ - </label>
  				<b><?php echo e($shop->manageremail); ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>တစ်ရက်လျှင် ၂၄နာရီ လုပ်ကိုင်ရန် - </label>
  				<b><?php if($shop->operate24hr == 0): ?> လို <?php else: ?> မလို <?php endif; ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>ဆိုင်တည်နေရာ - </label>
  				<b><?php echo e($shop->loacationaddress); ?></b>
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
					    <td><?php echo e($shop->MenWorker); ?></td>
					    <td><?php echo e($shop->WomenWorker); ?></td>
					    <td><?php echo e($shop->AMenWorker); ?></td>
					    <td><?php echo e($shop->AWomenWorker); ?></td>
					    <td><?php echo e($shop->CMenWorker); ?></td>
					    <td><?php echo e($shop->CWomenWorker); ?></td>
					  </tr>
					   <tr>
					    <td>နေ့စား</td>
					    <td><?php echo e($shop->DailyMenWorker); ?></td>
					    <td><?php echo e($shop->DailyWomenWorker); ?></td>
					    <td><?php echo e($shop->ADailyMenWorker); ?></td>
					    <td><?php echo e($shop->ADailyWomenWorker); ?></td>
					    <td><?php echo e($shop->CDailyMenWorker); ?></td>
					    <td><?php echo e($shop->CDailyWomenWorker); ?></td>
					  </tr>
					  <tr>
					    <td>ပုတ်ပြတ်</td>
					    <td><?php echo e($shop->PieceMenWorker); ?></td>
					    <td><?php echo e($shop->PieceWomenWorker); ?></td>
					    <td><?php echo e($shop->APieceMenWorker); ?></td>
					    <td><?php echo e($shop->APieceWomenWorker); ?></td>
					    <td><?php echo e($shop->CPieceMenWorker); ?></td>
					    <td><?php echo e($shop->CPieceWomenWorker); ?></td>
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
					    <td><?php echo e($shop->MForeignerMenWorker); ?></td>
					    <td><?php echo e($shop->MForeignerWomenWorker); ?></td>
					  </tr>
					   <tr>
					    <td>နေ့စား</td>
					    <td><?php echo e($shop->DailyForeignerMenWorker); ?></td>
					    <td><?php echo e($shop->DailyForeignerWomenWorker); ?></td>
					  </tr>
					  <tr>
					    <td>ပုတ်ပြတ်</td>
					    <td><?php echo e($shop->PForeignerMenWorker); ?></td>
					    <td><?php echo e($shop->PForeignerWomenWorker); ?></td>
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
					    <td><?php echo e($shop->CitizenMenWorker); ?></td>
					    <td><?php echo e($shop->CitizenWomenWorker); ?></td>
					  </tr>
					   <tr>
					    <th>နိုင်ငံခြားသားလုပ်သား</th>
					    <td><?php echo e($shop->ForeignerMenWorker); ?></td>
					    <td><?php echo e($shop->ForeignerWomenWorker); ?></td>
					  </tr>
					</table>
  			</div>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>ပိုင်ဆိုင်မှုအမျိုးအစား - </label>
  				<b><?php echo e($shop->PropertyType); ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>အသုံးပြုသည့်စွမ်းအင် - </label>
  				<b><?php echo e($shop->UsedPower); ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>တစ်လထုတ်လုပ်နိုင်မှုပမာဏ - </label>
  				<b><?php echo e($shop->MonthlyAmounts); ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>ရင်းနှီးမြှုပ်နှံမှု (LDI/FDI) - </label>
  				<b><?php echo e($shop->Investment); ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>ထုတ်လုပ်သည့်ပစ္စည်း (အဓိက) - </label>
  				<b><?php echo e($shop->ProducedProduct); ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>ထုတ်လုပ်သည့်ပစ္စည်း(အခြား) - </label>
  				<b><?php echo e($shop->ProducedOthers); ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>ကုန်ကြမ်းရရှိမှု - </label>
  				<b><?php echo e($shop->RawMaterials); ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>ကုန်ချောတင်ပို့မှု - </label>
  				<b><?php echo e($shop->Goods); ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>လုပ်ငန်းအမျိုးအစား - </label>
  				<b><?php echo e(App\EconomicClass::where('class_code',$shop->class_name)->value('class_name')); ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>အလုပ်ရုံစတင်လုပ်ကိုင်သောရက်စွဲ - </label>
  				<b><?php echo e($shop->StartDate); ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>E/C အလုပ်ခန့်ထားမှု စာချူပ် - </label>
  				<b><?php if($shop->Contract == 0): ?> ဆောင်ရွက်ဆဲ <?php else: ?> ဆောင်ရွက်ပြီး <?php endif; ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>အချိန်ပိုလုပ်ကိုင်မှု - </label>
  				<b><?php if($shop->OverTime == 0): ?> ရှိ <?php else: ?> မရှိ <?php endif; ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>အချိန်ပိုလုပ်ကိုင်မှု ခွင့်ပြုချက် - </label>
  				<b><?php if($shop->OTPermit == 0): ?> ယူ <?php else: ?> မယူ <?php endif; ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>လူမှုဖူလုံရေးဝင်ပြီး/မပြီး - </label>
  				<b><?php if($shop->SSB == 0): ?> ပြီး <?php else: ?> မပြီး <?php endif; ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>အလုပ်ရုံနှင့် အလုပ်သမားဥပဒေစစ်ဆေးရေးဦးစီးဌာနသို့ နို့တစ်ပေးခြင်း - </label>
  				<b><?php if($shop->NoticeStatus == 0): ?> ပြီး <?php else: ?> မပြီး <?php endif; ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေး ဆောင်ရွက်ထားမှု - </label>
  				<b><?php if($shop->SafteySide == 0): ?> ရှိ <?php else: ?> မရှိ <?php endif; ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>ကျွမ်းကျင်ပညာရှင် ကြီးကြပ်အုပ်ချူပ်မှု  - </label>
  				<b><?php if($shop->ManagementExpert == 0): ?> ရှိ <?php else: ?> မရှိ <?php endif; ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>ကျွမ်းကျင်ပညာရှင် ကြီးကြပ်အုပ်ချူပ်မှု  - </label>
  				<b><?php if($shop->Welfare == 0): ?> ရှိ <?php else: ?> မရှိ <?php endif; ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>လစာပေးရက်  - </label>
  				<b><?php echo e($shop->SalaryDate); ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>အနည်းဆုံးလစာ  - </label>
  				<b><?php echo e($shop->MinimumSalary); ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  				<label>အများဆုံးလစာ  - </label>
  				<b><?php echo e($shop->MaximumSalary); ?></b>
  		</div>
	</p>
	<p>
  		<div class="row">
  			<div class="col-sm-12">
  				<?php if($shop->WorkTimeType==0): ?>
  					တူညီသောအလုပ်ချိန်တွင် အလုပ်လုပ်ခြင်းဆိုင်ရာ နို့တစ်စာ
						    <legend class="scheduler-border">ဆိုင်များနှင့် အလုပ်ဌာနများ နည်းဥပဒေ (၇)</legend>
						    	<div class="row">
						    			အလုပ်စသည့်အချိန် - <?php echo e($shop->StartWorkTime); ?>	 
						    	</div> 
						    	<div class="row">
						    			အလုပ်ပြီးသည့်အချိန် - <?php echo e($shop->EndWorkTime); ?>

						    	</div> 
						    	<div class="row">
						    			အားလပ်ချိန် -  <?php echo e($shop->freetimefrom); ?> မှ  <?php echo e($shop->freetimeto); ?>  အထိ 
						    	</div> 
						         <p>
						         	<div class="row">
						         			ရက်သတ္တပတ်အလုပ်ပိတ်ရက်   - <?php echo e($shop->closeworkdays); ?>						         		
						         	</div>
						    	</p>
						    	<p>
						    		ရက်သတ္တပတ်အလုပ်ပိတ်ရက်ဖြစ်သည့် နေ့များတွင် ဆိုင်/အလုပ်ဌာနရှိ အလုပ်သမားများ အား ရက်သတ္တပတ်လျှင် အနည်းဆုံးတစ်ရက်ကို လုပ်ခလစာပြည့်ဖြင့် အလှည့်ကျ နားခွင့်ပေးမည်ဖြစ်ပါကြောင်း ။
						    	</p>
						    </div>
  				<?php else: ?>
  					<p>အလုပ်လုပ်ရန်ကာလအပိုင်းအခြားဆိုင်ရာ နို့တစ်စာ - </p>
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">ဆိုင်များနှင့် အလုပ်ဌာနများ နည်းဥပဒေ (၈)</legend>
						    <div class="control-group">
						    	
						    </div>
						</fieldset>
  				<?php endif; ?>

  			</div>
  		</div>
	</p>

  <p>
      <div class="row">
          <label>အမည်  - </label> <b><?php echo e($shop->SignatureName); ?></b>
      </div>
  </p>
  <p>
      <div class="row">
          <label>ရာထူး  - </label> <b><?php echo e($shop->SignatureRank); ?></b>
      </div>
  </p>
</div>
    
</body>
</html>