<?php $__env->startSection('content'); ?>
<div class="container" >
	
<h3 style="text-align: center;">လုပ်ငန်းခွင်ထိခိုက်မှုအကြောင်းကြားခြင်းပုံစံ</h3>
<hr>
<div class="row">
    <div class="col-lg-8 margin-tb">
    </div>
    <div class="col-lg-4 text-right mb-2">
        <div class="pull-right">
            <a class="btn" style="background:#2F8DD8;color:#fff;" href="<?php echo e(route('AffectedIndex.index')); ?>"> ပြန်ထွက်</a>
        </div>
    </div>
</div>
<p>
    <div class="row">
		<?php if($affected->Type == '1'): ?>
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-5 ">
					၁။ စက်ရုံအမှတ် -  
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
					<?php echo e($affected-> FactoryID); ?>

				</div>
				
			</div>
			<hr>
		</div>
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-5 ">
					၁။ စက်ရုံအမည် -  
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
					<?php echo e($affected-> FactoryName); ?>

				</div>
				
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
					၂။ ပိုင်ရှင်အမည် -  
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
					<?php echo e($affected-> OwnerName); ?>

				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၃။ လုပ်ငန်းအမျိုးအစား -  
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				<?php echo e($affected-> FactoryType); ?>

				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၄။ ဖုန်းနံပါတ် - 
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				<?php echo e($affected-> FactoryPhno); ?>

				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၅။ လိပ်စာ-
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				<?php echo e($affected-> FactoryAddress); ?>

				</div>
			</div>
			<hr>
		</div>
		<?php else: ?>
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-5 ">
					၁။ ဆိုင်အမှတ် -  
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
					<?php echo e($affected-> FactoryID); ?>

				</div>
				
			</div>
			<hr>
		</div>
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-5 ">
					၁။ ဆိုင်အမည် -  
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
					<?php echo e($affected-> FactoryName); ?>

				</div>
				
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
					၂။ ပိုင်ရှင်အမည် -  
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
					<?php echo e($affected-> OwnerName); ?>

				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၃။ လုပ်ငန်းအမျိုးအစား -  
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				<?php echo e($affected-> FactoryType); ?>

				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၄။ ဖုန်းနံပါတ် - 
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				<?php echo e($affected-> FactoryPhno); ?>

				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၅။ လိပ်စာ-
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				<?php echo e($affected-> FactoryAddress); ?>

				</div>
			</div>
			<hr>
		</div>
		<?php endif; ?>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၆။ အမည် -  
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				<?php echo e($affected-> empName); ?>

				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၇။ အသက် -
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				<?php echo e($affected-> empAge); ?>

				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၈။ ကျား/မ -
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				<?php echo e($affected-> empGender); ?>

				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၉။ လမဖအကျုံးဝင်မှု ရှိ/မရှိ -
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				<?php echo e($affected-> empLvl); ?>

				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၁၀။ ဖုန်းနံပါတ်-
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				<?php echo e($affected-> empLama); ?>

				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၁၁။ ထိခိုက်မှုဖြစ်ပွားသည့်နေ့ရက် - 
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				<?php echo e($affected-> accDay); ?>

				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၁၂။ အချိန် - 
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				<?php echo e($affected-> accTime); ?>

				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၁၃။ နေရာ -  
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				<?php echo e($affected-> accPlace); ?>

				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၁၄။ အမျိုးအစား -  
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				<?php echo e($affected-> accType); ?>

				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၁၅။ ဖြစ်စဉ်အကျဉ်း- 
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				<?php echo e($affected-> accDetail); ?>

				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၁၆။ ခန့်မှန်းအလုပ်ပျက်ရက် - 
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				<?php echo e($affected-> accLeave); ?>

				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၁၇။ ထိခိုက်ဒဏ်ရာ အမျိုးအစား - 
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				<?php echo e($affected_type); ?>

				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၁၈။ ထိခိုက်ဒဏ်ရာ ရရှိသည့်အစိတ်အပိုင်း -
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				<?php echo e($affected_body); ?> ၊ <?php echo e($painpiece); ?> (<?php if($affected->painArea==1): ?> ဘယ်ဘက် <?php elseif($affected->painArea==2): ?> ညာဘက် <?php else: ?> နှစ်ဖက်စလုံး <?php endif; ?> )
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၁၉။ ဖြစ်ပွားရသည့်အကြောင်းအရင်း -
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				<?php echo e($impact_type); ?>

				</div>
			</div>
			<hr>
		</div>
		
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၂၀။ ဖြစ်ပွားရသည့်အကြောင်းအရင်း ဖော်ပြချက်- 
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				<?php echo e($impact_type_des); ?>

				</div>
			</div>
			<hr>
		</div>

		
		
	</div>
</p>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>