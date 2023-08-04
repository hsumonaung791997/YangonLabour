<?php $__env->startSection('content'); ?>
<div class="container" >
	
<h3 style="text-align: center;">စက်ရုံနှင့်ပတ်သက်သောအချက်အလက်များ</h3>
<hr>
<p>
    <div class="row">
		<div class="col-sm-6">
			၁။ စက်ရုံအမည်နှင့် ကုမ္မဏီအမည် - <?php echo e($factory->FactoryName); ?> 
		</div>
		<div class="col-sm-6 text-left">
			၂။ စက်ရုံလိပ်စာနှင့် ဖုန်းအမှတ် - <?php echo e($factory->ContactAddress); ?> ၊ <?php echo e($factory->ContactPhone); ?>

		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၃။ စက်ရုံပိုင်ရှင်အမည် - <?php echo e($factory->OwnerName); ?>

		</div>
		<div class="col-sm-6 text-left">
			၄။ ပိုင်ဆိုင်မှုအမျိုးအစား - <?php echo e($factory->PropertyType); ?>

		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၅။ အသုံးပြုသည့်စွမ်းအင် - <?php echo e($factory->UsedPower); ?>

		</div>
		<div class="col-sm-6 text-left">
			၆။ လုပ်ငန်းအမျိုးအစား -  <?php echo e(App\EconomicClass::where('class_code',$factory->class_name)->value('class_name')); ?>

		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၇။ ရင်းနှီးမြှုပ်နှံမှု (LDI/FDI) - <?php echo e($factory->Investment); ?>

		</div>
		<div class="col-sm-6 text-left">
			၈။ E/C အလုပ်ခန့်ထားမှု စာချူပ် - <?php if($factory->Contract == 0): ?> ဆောင်ရွက်ဆဲ <?php else: ?> ဆောင်ရွက်ပြီး <?php endif; ?>
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၉။ စက်ရုံစတင်လည်ပတ်သည့်နေ့ - <?php echo e($factory->StartDate); ?>

		</div>
		<div class="col-sm-6 text-left">
			၁၀။ ထုတ်လုပ်သည့်ပစ္စည်း (အဓိက) - <?php echo e($factory->ProducedProduct); ?>

		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၁၁။ ထုတ်လုပ်သည့်ပစ္စည်း (အခြား) - <?php echo e($factory->ProducedOthers); ?>

		</div>
		<div class="col-sm-6 text-left">
			၁၂။ အလုပ်ရုံနှင့် အလုပ်သမားဥပဒေစစ်ဆေးရေးဦးစီးဌာနသို့ နို့တစ်ပေးခြင်း  	<br> &nbsp;&nbsp;&nbsp; &nbsp;<?php if($factory->NoticeStatus == 0): ?> - ပြီး <?php else: ?> - မပြီး <?php endif; ?>
		</div>
		</div>
</p>

<p>
    <div class="row">
		<div class="col-sm-6">
			၁၃။ ကုန်ကြမ်းရရှိမှု - <?php echo e($factory->RawMaterials); ?>

		</div>
		<div class="col-sm-6 text-left">
			၁၄။ ကုန်ချောတင်ပို့မှု - <?php echo e($factory->Goods); ?>

		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၁၅။ တစ်လထုတ်လုပ်နိုင်မှုပမာဏ - <?php echo e($factory->MonthlyAmounts); ?>

		</div>
		<div class="col-sm-6 text-left">
			၁၆။ လစာပေးရက် - <?php echo e($factory->SalaryDate); ?>

		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၁၇။ တစ်လထုတ်လုပ်နိုင်မှုပမာဏ - <?php echo e($factory->MonthlyAmounts); ?>

		</div>
		<div class="col-sm-6 text-left">
			၁၈။ နိုင်ငံသားလုပ်သား - ကျား ( <?php echo e($factory->CitizenMenWorker); ?> ) ၊ မ ( <?php echo e($factory->CitizenWomenWorker); ?> ) <br> 
			 &nbsp; &nbsp; &nbsp;&nbsp;နိုင်ငံခြားသားလုပ်သား - ကျား ( <?php echo e($factory->ForeignerMenWorker); ?> ) ၊ မ ( <?php echo e($factory->ForeignerWomenWorker); ?> ) 
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၁၉။ အနည်းဆုံးလစာ - <?php echo e($factory->MinimumSalary); ?>

		</div>
		<div class="col-sm-6 text-left">
			၂၀။ အများဆုံးလစာ - <?php echo e($factory->MaximumSalary); ?>

		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-12">
			၂၂ ။ အလုပ်ချိန်/ထမင်းစားနားချိန်  - <br>
			<?php if($factory->WorkTimeType == 0): ?>	
			   <fieldset class="scheduler-border">
					    <legend class="scheduler-border">ပုံစံ - ဃ (က)</legend>
					    <div class="control-group">
					    	<span> တနင်္လာမှ စနေနေ့အထိ</span> <br>
					    	<div class="row">
					    		<div class="col-sm-4 text-center">
					    			အလုပ်စသည့်အချိန် - 
					    		</div>
					    		<div class="col-sm-4 text-left">
					    			 <?php echo e($factory->MToSTimein); ?>

					    		</div>
					    	</div> <br>
					    	<div class="row">
					    		<div class="col-sm-4 text-center">
					    			အလုပ်ပြီးသည့်အချိန် - 
					    		</div>
					    		<div class="col-sm-4 text-left">
					    			 <?php echo e($factory->MToSTimeout); ?>

					    		</div>
					    	</div> <br>
					    	<div class="row">
					    		<div class="col-sm-4 text-center">
					    			ထမင်းစားနားချိန် -
					    		</div>
					    		<div class="col-sm-4 text-left">
					    			 <?php echo e($factory->LunchStartTime); ?> မှ <?php echo e($factory->LunchEndTime); ?>  အထိ
					    		</div> 
					    	</div>
					    	<br> <p>ပုဒ်မ (၆၀) အရ ရက်သတ္တပတ်အလုပ်ပိတ်ရက် - တနင်္ဂနွေနေ့</p>
					    </div>
					</fieldset>		
			<?php else: ?> 
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
							    			 <?php echo e($factory->MToFTimein); ?>

							    		</div>
					    			</div> <br>
							    	<div class="row">
							    		<div class="col-sm-6 text-center">
							    			အလုပ်ပြီးသည့်အချိန် -
							    		</div>
							    		<div class="col-sm-6 text-left">
							    			  <?php echo e($factory->MToFTimeout); ?>

							    		</div>
							    	</div> <br>
							    	<div class="row">
							    		<div class="col-sm-6 text-center">
							    			ထမင်းစားနားချိန် - 
							    		</div>
							    		<div class="col-sm-6 text-left">
					    			 <?php echo e($factory->LunchStartTime); ?> မှ <?php echo e($factory->LunchEndTime); ?>  အထိ

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
							    			  <?php echo e($factory->STimein); ?>

							    		</div>
					    			</div> <br>
							    	<div class="row">
							    		<div class="col-sm-6 text-center">
							    			အလုပ်ပြီးသည့်အချိန်
							    		</div>
							    		<div class="col-sm-6 text-left">
							    			 <?php echo e($factory->STimeout); ?>

							    		</div>
							    	</div> <br>
					    		</div>	
					    	</div>
					    	<br> <p>ပုဒ်မ (၆၀) အရ ရက်သတ္တပတ်အလုပ်ပိတ်ရက် - စနေနေ့တစ်ဝက်နှင့် တနင်္ဂနွေနေ့</p>
					    </div>
					</fieldset>
			<?php endif; ?>
			
		</div>
		
	</div>
</p>

<p>
    <div class="row">
		<div class="col-sm-6">
			၂၃။ အချိန်ပိုလုပ်ကိုင်မှု ခွင့်ပြုချက် - <?php if($factory->OTPermit == 0): ?> ယူ <?php else: ?> မယူ <?php endif; ?>
		</div>
		<div class="col-sm-6 text-left">
			၂၄။ အချိန်ပိုလုပ်ကိုင်မှု - <?php if($factory->OverTime == 0): ?> ရှိ <?php else: ?> မရှိ <?php endif; ?>
		</div>
	</div>
</p>

<p>
    <div class="row">
		<div class="col-sm-6">
			၂၄။ လူမှုဖူလုံရေးဝင်ပြီး - <?php if($factory->SSB == 0): ?> ပြီး <?php else: ?> မပြီး <?php endif; ?>
		</div>
		<div class="col-sm-6 text-left">
			၂၅။ သက်သာချောင်ချိရေး ဆောင်ရွက်မှုကိစ္စ - <?php if($factory->Welfare == 0): ?> ရှိ <?php else: ?> မရှိ <?php endif; ?>
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၂၆။ ကျွမ်းကျင်ပညာရှင် ကြီးကြပ်အုပ်ချူပ်မှု - <?php if($factory->ManagementExpert == 0): ?> ရှိ <?php else: ?> မရှိ <?php endif; ?>
		</div>
		<div class="col-sm-6 text-left">
			၂၇။ လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေး 
			နှင့် ကျန်းမာရေးကော်မတီ - <?php if($factory->SafteySide == 0): ?> ရှိ <?php else: ?> မရှိ <?php endif; ?>
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-12">
			၂၈။ လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေး ဆောင်ရွက်ထားမှု - <?php if($factory->ManagementExpert == 0): ?> ရှိ <?php else: ?> မရှိ <?php endif; ?>
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၂၉။ အလုပ်ရုံဆက်သွယ်ရန် ဖက်စ်နံပါတ်- <?php echo e($factory->ContactFax); ?>

		</div>
		<div class="col-sm-6 text-left">
			၃၀။ အလုပ်ရုံဆက်သွယ်ရန် အီးမေးလ်လိပ်စာ - <?php echo e($factory->EmailAdd); ?>

		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-12">
			၃၁။ ပြုလုပ်မည့်လုပ်ငန်းနှင့်စပ်လျဉ်းနောင်လာမည့်၁၂လအတွင်းပြုလုပ်မည့်လုပ်ငန်းစဉ် - <?php echo e($factory->NextYearProcess); ?>

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
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၃၃။ လုပ်ငန်းပိုင်ရှင် မှတ်ပုံတင်နံပါတ်- <?php echo e($factory->OwnerNrc); ?>

		</div>
		<div class="col-sm-6 text-left">
			၃၄။ လုပ်ငန်းပိုင်ရှင် ဖက်စ် - <?php echo e($factory->OwnerFax); ?>

		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၃၅။ လုပ်ငန်းပိုင်ရှင် ဖုန်းနံပါတ်- <?php echo e($factory->OwnerPhno); ?>

		</div>
		<div class="col-sm-6 text-left">
			၃၆။ လုပ်ငန်းပိုင်ရှင် အီးမေး - <?php echo e($factory->OwnerEmail); ?>

		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၃၇။ လုပ်ငန်းပိုင်ရှင် လိပ်စာ- <?php echo e($factory->OwnerAddress); ?>

		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၃၈။ လက်မှတ်ထိုးသူ အမည် - <?php echo e($factory->SignatureName); ?>

		</div>
		<div class="col-sm-6 text-left">
			၃၉။ လက်မှတ်ထိုးသူ ရာထူး - <?php echo e($factory->SignatureRank); ?>

		</div>
	</div>
</p>
<!-- scroll back to top of the page -->
<a id="back2Top" title="Back to top" href="#">&#10148;</a>
<hr>
</div>
<script src="<?php echo e(asset('assets/js/common.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>