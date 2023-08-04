<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e($factory->FactoryName); ?> (စက်ရုံ) နှင့်ပတ်သက်သောအချက်အလက်များ 
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
<div class="container" >
	
<h3 style="text-align: center;"><?php echo e($factory->FactoryName); ?> (စက်ရုံ)နှင့်ပတ်သက်သောအချက်အလက်များ</h3>
<hr>
<p>
    <div class="row">
		<div class="col-sm-6">
			၁။ စက်ရုံအမည်နှင့် ကုမ္မဏီအမည် - <b><?php echo e($factory->FactoryName); ?></b> 
		</div>
		<div class="col-sm-6 text-left">
			၂။ စက်ရုံလိပ်စာနှင့် ဖုန်းအမှတ် - <b><?php echo e($factory->ContactAddress); ?> ၊ <?php echo e($factory->ContactPhone); ?></b>
        </div>
        <div class="col-sm-6">
			၃။ စက်ရုံပိုင်ရှင်အမည် - <b><?php echo e($factory->OwnerName); ?></b>
        </div>
        <div class="col-sm-6 text-left">
			၄။ ပိုင်ဆိုင်မှုအမျိုးအစား - <b><?php echo e($factory->PropertyType); ?></b>
        </div>
        <div class="col-sm-6">
			၅။ အသုံးပြုသည့်စွမ်းအင် - <b><?php echo e($factory->UsedPower); ?></b>
        </div>
        <div class="col-sm-6 text-left">
			၆။ လုပ်ငန်းအမျိုးအစား -  <b><?php echo e(App\EconomicClass::where('class_code',$factory->class_name)->value('class_name')); ?></b>
        </div>
        <div class="col-sm-6">
			၇။ ရင်းနှီးမြှုပ်နှံမှု (LDI/FDI) - <?php echo e($factory->Investment); ?>

        </div>
        <div class="col-sm-6 text-left">
			၈။ E/C အလုပ်ခန့်ထားမှု စာချူပ် - <b><?php if($factory->Contract == 0): ?> ဆောင်ရွက်ဆဲ <?php else: ?> ဆောင်ရွက်ပြီး <?php endif; ?></b>
        </div>
        <div class="col-sm-6">
			၉။ စက်ရုံစတင်လည်ပတ်သည့်နေ့ - <b><?php echo e($factory->StartDate); ?></b>
        </div>
        <div class="col-sm-6 text-left">
			၁၀။ ထုတ်လုပ်သည့်ပစ္စည်း (အဓိက) - <b><?php echo e($factory->ProducedProduct); ?></b>
        </div>
        <div class="col-sm-6">
			၁၁။ ထုတ်လုပ်သည့်ပစ္စည်း (အခြား) - <b><?php echo e($factory->ProducedOthers); ?></b>
        </div>
        <div class="col-sm-6 text-left">
			၁၂။ အလုပ်ရုံနှင့် အလုပ်သမားဥပဒေစစ်ဆေးရေးဦးစီးဌာနသို့ နို့တစ်ပေးခြင်း - <b><?php if($factory->NoticeStatus == 0): ?> - ပြီး <?php else: ?> - မပြီး <?php endif; ?></b>
        </div>
        <div class="col-sm-6">
			၁၃။ ကုန်ကြမ်းရရှိမှု - <b><?php echo e($factory->RawMaterials); ?></b>
        </div>
        <div class="col-sm-6 text-left">
			၁၄။ ကုန်ချောတင်ပို့မှု - <b><?php echo e($factory->Goods); ?></b>
        </div>
        <div class="col-sm-6">
			၁၅။ တစ်လထုတ်လုပ်နိုင်မှုပမာဏ - <b><?php echo e($factory->MonthlyAmounts); ?></b>
        </div>
        <div class="col-sm-6 text-left">
			၁၆။ လစာပေးရက် - <b><?php echo e($factory->SalaryDate); ?></b>
        </div>
        <div class="col-sm-6">
			၁၇။ တစ်လထုတ်လုပ်နိုင်မှုပမာဏ - <b><?php echo e($factory->MonthlyAmounts); ?></b>
        </div>
        <div class="col-sm-6 text-left">
			၁၈။ နိုင်ငံသားလုပ်သား - ကျား (<b> <?php echo e($factory->CitizenMenWorker); ?>  </b>) ၊ မ ( <b> <?php echo e($factory->CitizenWomenWorker); ?> </b>) <br> 
			 &nbsp; &nbsp; &nbsp;&nbsp;နိုင်ငံခြားသားလုပ်သား - ကျား ( <b><?php echo e($factory->ForeignerMenWorker); ?> </b> ) ၊ မ ( <b> <?php echo e($factory->ForeignerWomenWorker); ?> </b> ) 
        </div>
        <div class="col-sm-6">
			၁၉။ အနည်းဆုံးလစာ - <b><?php echo e($factory->MinimumSalary); ?></b>
        </div>
        <div class="col-sm-6 text-left">
			၂၀။ အများဆုံးလစာ - <b> <?php echo e($factory->MaximumSalary); ?></b>
		</div>
	</div>
</p>

<p>
    <div class="row">
		<div class="col-sm-12">
			၂၂ ။ အလုပ်ချိန်/ထမင်းစားနားချိန်  - 
			<?php if($factory->WorkTimeType == 0): ?>	
					    <legend class="scheduler-border">ပုံစံ - ဃ (က)</legend>
					    	<span> တနင်္လာမှ စနေနေ့အထိ</span> 
					    	<div class="row">
					    			အလုပ်စသည့်အချိန် - <b> <?php echo e($factory->MToSTimein); ?></b>
					    	</div>
					    	<div class="row">
					    			အလုပ်ပြီးသည့်အချိန် - <b><?php echo e($factory->MToSTimeout); ?></b>
					    	</div> 
					    	<div class="row">
					    			ထမင်းစားနားချိန် - <b><?php echo e($factory->LunchStartTime); ?> မှ <?php echo e($factory->LunchEndTime); ?>  အထိ</b>
					    			 
					    	</div>
					    	ပုဒ်မ (၆၀) အရ ရက်သတ္တပတ်အလုပ်ပိတ်ရက် - တနင်္ဂနွေနေ့
			<?php else: ?> 
					    <legend class="scheduler-border">ပုံစံ - ဃ (ခ)</legend>
					    	<div class="row">
					    		<div class="col-sm-6">
					    				<span>တနင်္လာမှ သောကြာအထိ</span>
					    			<div class="row">
							    			အလုပ်စသည့်အချိန် - 
							    			<b> <?php echo e($factory->MToFTimein); ?></b>
							    	</div>
						    	<div class="row">
							    			အလုပ်ပြီးသည့်အချိန် - <b><?php echo e($factory->MToFTimeout); ?></b>	  
							    	</div> 
							    	<div class="row">
							    			ထမင်းစားနားချိန် - <b> <?php echo e($factory->LunchStartTime); ?> မှ <?php echo e($factory->LunchEndTime); ?>  အထိ</b>
					    			
							    	</div>
					    		</div>
					    		<div class="col-sm-6">
					    			<span>စနေနေ့</span>
					    			<div class="row">
							    			အလုပ်စသည့်အချိန် - <b>  <?php echo e($factory->STimein); ?></b>
					    			</div> 
							    	<div class="row">
							    			အလုပ်ပြီးသည့်အချိန် - <b><?php echo e($factory->STimeout); ?></b>
							    	</div> 
					    		</div>	
					    	</div>
					    	<span>ပုဒ်မ (၆၀) အရ ရက်သတ္တပတ်အလုပ်ပိတ်ရက် - စနေနေ့တစ်ဝက်နှင့် တနင်္ဂနွေနေ့</span>
			<?php endif; ?>
			
		</div>
		
	</div>
</p>

    <div class="row">
		<div class="col-sm-6">
			၂၃။ အချိန်ပိုလုပ်ကိုင်မှု ခွင့်ပြုချက် -  <b><?php if($factory->OTPermit == 0): ?> ယူ <?php else: ?> မယူ <?php endif; ?></b>
		</div>
		<div class="col-sm-6 text-left">
			၂၄။ အချိန်ပိုလုပ်ကိုင်မှု - <b> <?php if($factory->OverTime == 0): ?> ရှိ <?php else: ?> မရှိ <?php endif; ?></b>
        </div>
        <div class="col-sm-6">
            ၂၄။ လူမှုဖူလုံရေးဝင်ပြီး - <b><?php if($factory->SSB == 0): ?> ပြီး <?php else: ?> မပြီး <?php endif; ?></b>
        </div>
        <div class="col-sm-6 text-left">
            ၂၅။ သက်သာချောင်ချိရေး ဆောင်ရွက်မှုကိစ္စ -  <b><?php if($factory->Welfare == 0): ?> ရှိ <?php else: ?> မရှိ <?php endif; ?></b>
        </div>
        <div class="col-sm-6">
			၂၆။ ကျွမ်းကျင်ပညာရှင် ကြီးကြပ်အုပ်ချူပ်မှု - <b><?php if($factory->ManagementExpert == 0): ?> ရှိ <?php else: ?> မရှိ <?php endif; ?></b>
        </div>
        <div class="col-sm-6 text-left">
			၂၇။ လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေး 
			နှင့် ကျန်းမာရေးကော်မတီ - <b> <?php if($factory->SafteySide == 0): ?> ရှိ <?php else: ?> မရှိ <?php endif; ?></b>
        </div>
        <div class="col-sm-12">
			၂၈။ လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေး ဆောင်ရွက်ထားမှု - <b><?php if($factory->ManagementExpert == 0): ?> ရှိ <?php else: ?> မရှိ <?php endif; ?></b>
        </div>
        <div class="col-sm-6">
			၂၉။ အလုပ်ရုံဆက်သွယ်ရန် ဖက်စ်နံပါတ်-  <b><?php echo e($factory->ContactFax); ?></b>
        </div>
        <div class="col-sm-6 text-left">
			၃၀။ အလုပ်ရုံဆက်သွယ်ရန် အီးမေးလ်လိပ်စာ - <b><?php echo e($factory->EmailAdd); ?></b>
        </div>
        <div class="col-sm-12">
			၃၁။ ပြုလုပ်မည့်လုပ်ငန်းနှင့်စပ်လျဉ်းနောင်လာမည့်၁၂လအတွင်းပြုလုပ်မည့်လုပ်ငန်းစဉ် - <b><?php echo e($factory->NextYearProcess); ?></b>
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
					    <td><?php echo e($factory->MenWorker); ?></td>
					    <td><?php echo e($factory->WomenWorker); ?></td>
					    <td><?php echo e($factory->AMenWorker); ?></td>
					    <td><?php echo e($factory->AWomenWorker); ?></td>
					    <td><?php echo e($factory->CMenWorker); ?></td>
					    <td><?php echo e($factory->CWomenWorker); ?></td>
					  </tr>
					   <tr>
					    <td>နေ့စား</td>
					    <td><?php echo e($factory->DailyMenWorker); ?></td>
					    <td><?php echo e($factory->DailyWomenWorker); ?></td>
					    <td><?php echo e($factory->ADailyMenWorker); ?></td>
					    <td><?php echo e($factory->ADailyWomenWorker); ?></td>
					    <td><?php echo e($factory->CDailyMenWorker); ?></td>
					    <td><?php echo e($factory->CDailyWomenWorker); ?></td>
					  </tr>
					  <tr>
					    <td>ပုတ်ပြတ်</td>
					    <td><?php echo e($factory->PieceMenWorker); ?></td>
					    <td><?php echo e($factory->PieceWomenWorker); ?></td>
					    <td><?php echo e($factory->APieceMenWorker); ?></td>
					    <td><?php echo e($factory->APieceWomenWorker); ?></td>
					    <td><?php echo e($factory->CPieceMenWorker); ?></td>
					    <td><?php echo e($factory->CPieceWomenWorker); ?></td>
					  </tr>
					</table> <br>
                </div>

                <div class="col-sm-6">
                    ၃၃။ လုပ်ငန်းပိုင်ရှင် မှတ်ပုံတင်နံပါတ်-  <b><?php echo e($factory->OwnerNrc); ?></b>
                </div>
                <div class="col-sm-6 text-left">
                    ၃၄။ လုပ်ငန်းပိုင်ရှင် ဖက်စ် - <b><?php echo e($factory->OwnerFax); ?></b>
                </div>
                <div class="col-sm-6">
                    ၃၅။ လုပ်ငန်းပိုင်ရှင် ဖုန်းနံပါတ်- <b><?php echo e($factory->OwnerPhno); ?></b>
                </div>
                <div class="col-sm-6 text-left">
                    ၃၆။ လုပ်ငန်းပိုင်ရှင် အီးမေး - <b><?php echo e($factory->OwnerEmail); ?></b>
                </div>
                <div class="col-sm-6">
                    ၃၇။ လုပ်ငန်းပိုင်ရှင် လိပ်စာ- <b><?php echo e($factory->OwnerAddress); ?></b>
                </div>
                <div class="col-sm-6">
                    ၃၈။ လက်မှတ်ထိုးသူ အမည် - <b><?php echo e($factory->SignatureName); ?></b>
                </div>
                <div class="col-sm-6 text-left">
                    ၃၉။ လက်မှတ်ထိုးသူ ရာထူး - <b><?php echo e($factory->SignatureRank); ?></b>
				</div>
        </div>

<hr>
</div>
<script src="<?php echo e(asset('assets/js/common.js')); ?>"></script>
</body>
</html>