<?php $__env->startSection('content'); ?>
<div class="container" >
	
<h3 style="text-align: center;">ရန်ကုန်တိုင်းဒေသကြီး<br>အလုပ်ရုံနှင့်အလုပ်သမားဥပဒေစစ်ဆေးရေးဦးစီးဌာန<br>တရားစွဲဆိုမှုလချုပ်စာရင်း</h3>
<hr>
<p>
    <div class="row">
		<div class="col-sm-6">
			၁။ လုပ်ငန်းအမည် - <?php echo e($factoryProsecuted->Name); ?> 
		</div>
		<div class="col-sm-6 text-left">
			၂။ စက်ရုံအမှတ် - <?php echo e($factoryProsecuted->IDno); ?>

		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၃။ စက်ရုံလိပ်စာ  - <?php echo e($factoryProsecuted->Address); ?>

		</div>
		<div class="col-sm-6 text-left">
			၄။ မြို့နယ် - <?php echo e(App\Township::where('id',$factoryProsecuted->Township)->value('township_name')); ?>

		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၅။ ဇုန်  -  <?php echo e(App\Industrialzone::where('id',$factoryProsecuted->Zone)->value('industrialzone_name')); ?>

		</div>
		<div class="col-sm-6 text-left">
			၆။ ပိုင်ရှင် အမည် - <?php echo e($factoryProsecuted->OwnerName); ?>

		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၇။ လိပ်စာ - <?php echo e($factoryProsecuted->OwnerAddress); ?>

		</div>
		<div class="col-sm-6 text-left">
			၈။ မန်နေဂျာ အမည် - <?php echo e($factoryProsecuted->ManagerName); ?>

		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၉။ လိပ်စာ - <?php echo e($factoryProsecuted->ManagerAddress); ?>

		</div>
		<div class="col-sm-6 text-left">
			၁၀။ တရားလို အမည်  - <?php echo e($factoryProsecuted->PlaintiffName); ?>

		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၁၁။ ရာထူး - <?php echo e($factoryProsecuted->PlaintiffLvl); ?>

		</div>
		<div class="col-sm-6 text-left">
			၁၂။ မြို့နယ် - <?php echo e($factoryProsecuted->PlaintiffTownship); ?>

		</div>
		</div>
</p>

<p>
    <div class="row">
		<div class="col-sm-6">
			၁၃။ ဇုန် - <?php echo e($factoryProsecuted->PlaintiffZone); ?>

		</div>
		<div class="col-sm-6 text-left">
			၁၄။ တရားစွဲဆိုရသည့်အကြောင်းအရင်း - <?php echo e($factoryProsecuted->ProsecutedAbout); ?>

		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၁၅။ ကျူးလွန်သောဥပဒေနှင့်စွဲဆိုသည့်ပုဒ်မ - <?php echo e($factoryProsecuted->ProsecutedLaw); ?>

		</div>
		<div class="col-sm-6 text-left">
			၁၆။ ရုံးတင်တရားစွဲဆိုသည့်နေ့ - <?php echo e($factoryProsecuted->ProsecutedDay); ?>

		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၁၇။ တရားရုံးအမည်  - <?php echo e($factoryProsecuted->CourtName); ?>

		</div>
		<div class="col-sm-6 text-left">
			၁၈။ အမိန့်ချမှတ်သောနေ့ - <?php echo e($factoryProsecuted->DecreeDay); ?> 
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၁၉။ ၎င်းအမိန့်ကိုရရှိသောနေ့ - <?php echo e($factoryProsecuted->getDecreeDay); ?>

		</div>
		<div class="col-sm-6 text-left">
			၂၀။ အမှုအမှတ်(ပြစ်မှုကြီး) - <?php echo e($factoryProsecuted->DecreeID); ?>

		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၂၂ ။ အလုပ်သမားဦးရေ - <?php echo e($factoryProsecuted->noOfemp); ?>

			
		</div>
		<div class="col-sm-6 text-left">
			၂၃။ အလုပ်သမားများရသင့်သည့်ငွေပေါင်း - <?php echo e($factoryProsecuted->empGetmoney); ?>

		</div>
	</div>
</p>

<p>
    <div class="row">
		<div class="col-sm-6">
			၂၄။ မပြီးပြတ်သေးသောအမှုအခြေအနေ နှင့် ချိန်းဆိုသည့်နေ့တွင်မည်သို့ဆောင်ရွက်သည်ကိုဖော်ပြရန် - 
		</div>
		<div class="col-sm-6 text-left">
			<?php echo e($factoryProsecuted->DecreeAct); ?>

		</div>
	</div>
</p>

<p>
    <div class="row">
		<div class="col-sm-6">
			၂၅။ စီရင်ချက်ချမှတ်သောနေ့စွဲ - <?php echo e($factoryProsecuted->judgmentDay); ?>

		</div>
		<div class="col-sm-6 text-left">
			၂၆။ စီရင်ချက်  - <?php echo e($factoryProsecuted->judgment); ?>		
        </div>
	</div>
</p>
<hr>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>