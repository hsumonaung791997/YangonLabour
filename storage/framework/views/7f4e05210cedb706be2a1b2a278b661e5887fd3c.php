<?php $__env->startSection('content'); ?>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
	<script src="<?php echo e(asset('assets/js/common.js')); ?>"></script>
<script type='text/javascript'>
// $(function(){
// $('.datepicker').datepicker({
//     calendarWeeks: true,
//     todayHighlight: true,
//     autoclose: true
// });  
// });
</script>

<?php if($errors->any()): ?>
	    <div class="alert alert-danger">
	        <strong>Whoops!</strong> There were some problems with your input.<br><br>
	        <ul>
	            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                <li><?php echo e($error); ?></li>
	            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	        </ul>
	    </div>
	<?php endif; ?>

<form id="regForm" action="<?php echo e(route('factories.update',$factory->id)); ?>" method="post" enctype="multipart/form-data">
	 <?php echo csrf_field(); ?>
     <?php echo method_field('PUT'); ?>
		<!-- Circles which indicates the steps of the form: -->
  	<h1>စက်ရုံနှင့်ပတ်သက်သောအချက်အလက်များ ပြင်ရန်</h1>
  	<div style="text-align:center;margin-top:40px;">
	    <a  style="text-decoration: none;" onclick="nextPrevv(0)"><span class="step">1</span></a>
	    <span class="step" onclick="nextPrevv(1)">2</span>
	    <span class="step" onclick="nextPrevv(2)">3</span>
	    <span class="step" onclick="nextPrevv(3)">4</span>
	    <span class="step" onclick="nextPrevv(4)">5</span>
	  </div> <br>
  	<!-- One "tab" for each step in the form: -->
	  <div class="tab">
		<p>
			<div class="row">
				<div class="col-sm-5 text-center">
					<label for="FactoryName">အလုပ်ရုံအမည်</label>
					<input  name="FactoryName" id="FactoryName" value="<?php echo e($factory->FactoryName); ?>" >
				</div>
				<div class="col-sm-1">

				</div>
				<div class="col-sm-6 text-center">
					<label for="EmailAdd">ဆက်သွယ်ရန် အီးမေး</label>
					<input  name="EmailAdd" id="EmailAdd" value="<?php echo e($factory->EmailAdd); ?>">
				</div>
			</div>
		</p>
		<p>
			<div class="row">
				<div class="col-sm-5 text-center">
					<label for="ContactFax">ဆက်သွယ်ရန် ဖက်စ်</label>
					<input  name="ContactFax" id="ContactFax" value="<?php echo e($factory->ContactFax); ?>">
				</div>
				<div class="col-sm-1">

				</div>
				<div class="col-sm-6 text-center">
					<label for="ContactPhone">ဆက်သွယ်ရန် ဖုန်းနံပါတ်</label>
					<input  name="ContactPhone" id="ContactPhone" value="<?php echo e($factory->ContactPhone); ?>">
				</div>
			</div>
		</p>
		<p>
			<div class="row">
				<div class="col-sm-5 text-center">
					<label for="NoticeAddress">အကြောင်းကြားစာပေးပို့မည့်လိပ်စာ</label>
					<input id="NoticeAddress"    name="NoticeAddress" value="<?php echo e($factory->NoticeAddress); ?>">
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-6 text-center">
					<label for="ContactAddress">ဆက်သွယ်ရန် လိပ်စာ

				  </label>
					<input  name="ContactAddress" id="ContactAddress" value="<?php echo e($factory->ContactAddress); ?>">
				</div>
			</div>
		</p>
		<p>
			<div class="row">
				<div class="col-sm-5 text-center">
					<label for="WorkedPower">အလုပ်ရုံပစ္စည်းထွက်လုပ်ကိုင်နိုင်သောအင်အား</label>
					<input   name="WorkedPower" id="WorkedPower" value="<?php echo e($factory->WorkedPower); ?>">
				</div>
				<div class="col-sm-1">

				</div>
				<div class="col-sm-6 text-center">
					<label for="ElectricPower">လျှပ်စစ်ဓာတ်အားကိုမည်သို့ရရှိသည်</label>
					<input id="ElectricPower" name="ElectricPower" value="<?php echo e($factory->ElectricPower); ?>">
				</div>
			</div>
		</p>

		<p>
			<div class="row">
				<div class="col-sm-5 text-center">
					<label for="prenoticedate">ကြိုတင်အကြောင်းကြားစာ ပေးပို့သည့်နေ့စွဲ</label>
					<input  type="date" name="PreNoticeDate" id="PreNoticeDate" value="<?php echo e($factory->PreNoticeDate); ?>">
				</div>
				<div class="col-sm-1">
					
				</div>
				<div class="col-sm-6 text-center">
					<label for="RegDate">စက်ရုံ အလုပ်မှတ်ပုံတင်သည့်နေ့စွဲ	</label>
					<input id="RegDate" name="RegDate" type="date" value="<?php echo e($factory->RegDate); ?>">
				</div>
			</div>
		</p>
	  
		<p>
			<div class="row">
				<div class="col-sm-12 text-center">
					<fieldset class="scheduler-border">
					  <legend class="scheduler-border">အလုပ်ရုံတည်နေရာ</legend>
					  <div class="control-group">
							  <div class="row">
									  <div class="col-sm-5 text-right">
										  <label for="region_id">တိုင်းဒေသကြီး</label>
									  </div>
									  <div class="col-sm-6 text-left">
										  <select id="region_id" class="form-control" name="region_id">
											  <option value=""> Choose Region</option>
										  <?php $__currentLoopData = $region; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										  <option value=<?php echo e($r->id); ?> <?php if($factory->region_id==$r->id): ?> selected <?php endif; ?>><?php echo e($r->region_name); ?></option>
										  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										  </select>
									  </div>
								  </div> <br>
						  <div class="row">
							  <div class="col-sm-5 text-right">
								  <label for="district">ခရိုင်</label>
							  </div>
							  <div class="col-sm-6 text-left">
								  <select id="district_id" class="form-control" name="district_id">
									  <option value="<?php echo e($factory->district_id); ?>"><?php echo e($district); ?>

									  </option>
								  </select>
							  </div>
						  </div> <br>
						  <div class="row">
							  <div class="col-sm-5 text-right">
								  <label for="township_id">မြို့နယ်</label>
							  </div>
							  <div class="col-sm-6 text-left">
								  <select id="township_id" class="form-control" name="township_id">
									  <option value="<?php echo e($factory->township_id); ?>"><?php echo e($township); ?></option>
								  </select>
							  </div>
						  </div> <br>
						  <div class="row">
							  <div class="col-sm-5 text-right">
								  <label for="zone">ဇုန်</label>
							  </div>
							  <div class="col-sm-6 text-left">
								  <select name="zone_id" id="zone_id" class="form-control">
									  <option value="<?php echo e($factory->zone_id); ?>"><?php echo e($zone); ?></option>
								  </select>
							  </div>
						  </div><br>
						  <div class="row">
							  <div class="col-sm-5 text-right">
								  <label for="address">လိပ်စာ</label>
							  </div>
							  <div class="col-sm-6 text-left">
								  <textarea class="form-control form-control-alternative" rows="3" placeholder="အသေးစိတ်ထည့်ရန်" id='address' name="FactoryAddress"><?php echo e($factory->FactoryAddress); ?></textarea>
							  </div>
						  </div>
							 
					  </div>
				  </fieldset>
				</div>
			</div>
		</p>
	  		<p>
	  		<div class="row">
	  			<div class="col-sm-12">
	  				<label for="NextYearProcess">ပြုလုပ်မည့်လုပ်ငန်းနှင့်စပ်လျဉ်းနောင်လာမည့်၁၂လအတွင်းပြုလုပ်မည့်လုပ်ငန်းစဉ်</label>
	  				<textarea class="col-sm-12" rows="4" id="NextYearProcess" name="NextYearProcess"><?php echo e($factory->NextYearProcess); ?></textarea>
	  			</div>
	  		</div>
	  	</p>

	  </div> 
	  <div class="tab">လုပ်ငန်းအမျိုးအစားအသုံးပြုရမည့်လျှပ်စစ်ဝန်အားနှင့်စက်စွမ်းအား
	  	<p>(အောက်ပါဇယားကွက်တွင်စက်ကိရိယာအသီးသီးတို့၏မြင်းကောင်ရေအားကိုဖော်ပြရန်)</p>
	  		<div class="row">
	 			<div class="col-sm-5 text-center">
	 				<label for="StreamHP">ရေနွေးငွေ့ဖြင့်လည်သောစက်</label>
					<input id="StreamHP" value="<?php echo e($factory->StreamHP); ?>"  name="StreamHP">
				</div>
				<div class="col-sm-1">
					
				</div>
	 			<div class="col-sm-6 text-left">
	 				<label for="GasHP">ဓာတ်ငွေ့၊ဓာတ်ဆီဖြင့်လည်သောစက်</label>
					<input id="GasHP" value="<?php echo e($factory->GasHP); ?>"  name="GasHP">
				</div>
			</div> <br>
			<div class="row">
	 			<div class="col-sm-5">
	 				<label for="MotorHP">လျှပ်စစ်ဖြင့်လည်သောစက်</label>
					<input id="MotorHP" value="<?php echo e($factory->MotorHP); ?>" name="MotorHP">
				</div>
				<div class="col-sm-1">
					
				</div>
	 			<div class="col-sm-6">
	 				<label for="WaterHP">ရေအားဖြင့်လည်သောစက်</label>
					<input id="WaterHP" value="<?php echo e($factory->WaterHP); ?>"  name="WaterHP">
				</div>
			</div>
			<br>
   			 <p>&nbsp; အလုပ်ရုံတွင်နောင်လာမည့်၁၂လအတွင်းခိုင်းစေမည့်အလုပ်သမား</p>
   			 <div class="row">
				<div class="col-sm-12">
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
					    <td><input type='text' value="<?php echo e($factory->MenWorker); ?>" name="MenWorker"></td>
					    <td><input type='text' value="<?php echo e($factory->WomenWorker); ?>" name="WomenWorker"></td>
					    <td><input type='text' value="<?php echo e($factory->AMenWorker); ?>" name="AMenWorker"></td>
					    <td><input type='text' value="<?php echo e($factory->AWomenWorker); ?>" name="AWomenWorker"></td>
					    <td><input type='text'value="<?php echo e($factory->CMenWorker); ?>" name="CMenWorker"></td>
					    <td><input type='text' value="<?php echo e($factory->CWomenWorker); ?>" name="CWomenWorker"></td>
					  </tr>
					   <tr>
					    <td>နေ့စား</td>
					    <td><input type='text' value="<?php echo e($factory->DailyMenWorker); ?>" name="DailyMenWorker"></td>
					    <td><input type='text' value="<?php echo e($factory->DailyWomenWorker); ?>" name="DailyWomenWorker"></td>
					    <td><input type='text' value="<?php echo e($factory->ADailyMenWorker); ?>" name="ADailyMenWorker"></td>
					    <td><input type='text' value="<?php echo e($factory->ADailyWomenWorker); ?>" name="ADailyWomenWorker"></td>
					    <td><input type='text' value="<?php echo e($factory->CDailyMenWorker); ?>" name="CDailyMenWorker"></td>
					    <td><input type='text' value="<?php echo e($factory->CDailyWomenWorker); ?>" name="CDailyWomenWorker"></td>
					  </tr>
					  <tr>
					    <td>ပုတ်ပြတ်</td>
					    <td><input type='text' value="<?php echo e($factory->PieceMenWorker); ?>" name="PieceMenWorker"></td>
					    <td><input type='text' value="<?php echo e($factory->PieceWomenWorker); ?>" name="PieceWomenWorker"></td>
					    <td><input type='text' value="<?php echo e($factory->APieceMenWorker); ?>" name="APieceMenWorker"></td>
					    <td><input type='text' value="<?php echo e($factory->APieceWomenWorker); ?>" name="APieceWomenWorker"></td>
					    <td><input type='text' value="<?php echo e($factory->CPieceMenWorker); ?>" name="CPieceMenWorker"></td>
					    <td><input type='text' value="<?php echo e($factory->CPieceWomenWorker); ?>" name="CPieceWomenWorker"></td>
					  </tr>
					</table> <br>
				</div>
			</div>
			<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label id="datepicker">အလုပ်ရုံစတင် လုပ်ကိုင်သောရက်စွဲ</label>
		  				<input type="date" value="<?php echo e($factory->StartDate); ?>"   name="StartDate" id="datepicker">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="ManagerName">မန်နေဂျာအမည်</label>
		  				<input id="ManagerName" value="<?php echo e($factory->ManagerName); ?>"  name="ManagerName">
		  			</div>
		  		</div>
	  		</p>
	  		<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="OwnerName">လုပ်ငန်းပိုင်ရှင်အမည်</label>
		  				<input value="<?php echo e($factory->OwnerName); ?>"  name="OwnerName" id="OwnerName">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="OwnerNrc">မှတ်ပုံတင်နံပါတ်</label>
		  				<input id="OwnerNrc" value="<?php echo e($factory->OwnerNrc); ?>"  name="OwnerNrc">
		  			</div>
		  		</div>
	  		</p>
	  		<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="OwnerAddress">လိပ်စာ</label>
		  				<input value="<?php echo e($factory->OwnerAddress); ?>" id="OwnerAddress"  name="OwnerAddress">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="OwnerPhno">ဖုန်းနံပါတ်</label>
		  				<input id="OwnerPhno" value="<?php echo e($factory->OwnerPhno); ?>"  name="OwnerPhno">
		  			</div>
		  		</div>
	  		</p>
	  		<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label id="OwnerFax">ဖက်စ်</label>
		  				<input id="OwnerFax" value="<?php echo e($factory->OwnerFax); ?>" name="OwnerFax">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="OwnerEmail">အီးမေး</label>
		  				<input value="<?php echo e($factory->OwnerEmail); ?>" id="OwnerEmail" name="OwnerEmail">
		  			</div>
		  		</div>
			  </p>
			  <p>
				<div class="row">
					<div class="col-sm-5 text-center">
						<label id="OwnerPassport">နိုင်ငံကူးလက်မှတ်</label>
						<input id="OwnerPassport"  name="OwnerPassport" value="<?php echo e($factory->OwnerPassport); ?>">
					</div>
					<div class="col-sm-1">

					</div>
					<div class="col-sm-6 text-center">
						<label for="TestingDate">အလုပ်ရုံစမ်းသပ် လည်ပတ်သည့်နေ့</label>
						<input type="date" name="TestingDate" id="TestingDate" class="TestingDate" value="<?php echo e($factory->TestingDate); ?>">
					</div>
				</div>
			</p>
	  		<p>
		  		<div class="row">
		  			<div class="col-sm-6 text-center">
						<label for="ContactAddress">စက်ရုံအမျိုးအစား</label>
						<div class="row">
						  <div class="col-sm-4 text-center">
							  <div class="custom-control custom-radio mb-3">
							   <input class="custom-control-input" id="TypeofFactory" name="TypeofFactory" type="radio" value="ကြီး" <?php echo e($factory->TypeofFactory=='ကြီး' ? 'checked' : ''); ?> >
							   <label class="custom-control-label" for="TypeofFactory">ကြီး</label>
							 </div>
						 </div>
						 <div class="col-sm-4">
							 <div class="custom-control custom-radio mb-3">
								 <input  class="custom-control-input" id="TypeofFactory1"  type="radio" value="လတ်" name="TypeofFactory" <?php echo e($factory->TypeofFactory=='လတ်' ? 'checked' : ''); ?>>
								 <label class="custom-control-label" for="TypeofFactory1">လတ်</label>
							 </div>
						 </div>
						 <div class="col-sm-4">
						  <div class="custom-control custom-radio mb-3">
							  <input  class="custom-control-input" id="TypeofFactory2"  type="radio" value="သေး" name="TypeofFactory" <?php echo e($factory->TypeofFactory=='သေး' ? 'checked' : ''); ?>>
							  <label class="custom-control-label" for="TypeofFactory2">သေး</label>
						  </div>
					  </div>
					  </div>
					</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				
		  			</div>
		  		</div>
	  		</p>
	  </div>
	  <div class="tab"><!-- စက်ရုံနှင့်ပတ်သက်သော အချက်အလက်များ <br> -->
		    <p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="PropertyType">ပိုင်ဆိုင်မှုအမျိုးအစား</label>
						  
						<select name="PropertyType" id="PropertyType" class="form-control">
							<option value="နိုင်ငံ" <?php if($factory->PropertyType=="နိုင်ငံ"): ?> selected <?php endif; ?>>နိုင်ငံ</option>
							<option value="သမဝါယမ" <?php if($factory->PropertyType=="သမဝါယမ"): ?> selected <?php endif; ?>>သမဝါယမ</option>
							<option value="ပုဂ္ဂလိက" <?php if( $factory->PropertyType=="ပုဂ္ဂလိက"): ?> selected <?php endif; ?>>ပုဂ္ဂလိက</option>
							<option value="နိုင်ငံခြား" <?php if( $factory->PropertyType =="နိုင်ငံခြား"): ?> selected <?php endif; ?>>နိုင်ငံခြား</option>
							<option value="ဖက်စပ်" <?php if($factory->PropertyType =="ဖက်စပ်"): ?> selected <?php endif; ?>>ဖက်စပ်</option>
						</select>
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="UsedPower">အသုံးပြုသည့်စွမ်းအင်</label>
		  				<input id="UsedPower" value="<?php echo e($factory->UsedPower); ?>" oninput="this.className = ''" name="UsedPower">
		  			</div>
		  		</div>
	  		</p>
	  		 <p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
							<label for="MonthlyAmounts">တစ်လထုတ်လုပ်နိုင်မှုပမာဏ</label>
							<input id="MonthlyAmounts" value="<?php echo e($factory->MonthlyAmounts); ?>" oninput="this.className = ''" name="MonthlyAmounts">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="investment">ရင်းနှီးမြှုပ်နှံမှု (LDI/FDI)</label>
						  
						<select name="Investment" id="investment" class="form-control">
							<option value="LDI" <?php if($factory->Investment=="LDI"): ?> selected <?php endif; ?>>LDI</option>
							<option value="FDI" <?php if($factory->Investment=="FDI"): ?> selected <?php endif; ?>>FDI</option>
						</select>
		  			</div>
		  		</div>
	  		</p>
	  		 <p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="ProducedProduct">ထုတ်လုပ်သည့်ပစ္စည်း (အဓိက)</label>
		  				<input id="ProducedProduct" value="<?php echo e($factory->ProducedProduct); ?>" oninput="this.className = ''" name="ProducedProduct" required="">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="ProducedOthers">ထုတ်လုပ်သည့်ပစ္စည်း(အခြား)</label>
		  				<input id="ProducedOthers" value="<?php echo e($factory->ProducedOthers); ?>" oninput="this.className = ''" name="ProducedOthers">
		  			</div>
		  		</div>
	  		</p>
	  		<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label id="RawMaterials">ကုန်ကြမ်းရရှိမှု</label>
		  				<input id="RawMaterials" value="<?php echo e($factory->RawMaterials); ?>" oninput="this.className = ''" name="RawMaterials">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="Goods">ကုန်ချောတင်ပို့မှု</label>
		  				<input id="Goods" value="<?php echo e($factory->Goods); ?>" oninput="this.className = ''" name="Goods">
		  			</div>
		  		</div>
	  		</p>
	  		
			  
			  <p>
					<div class="row">
						<div class="col-sm-12 text-center">
						  
							<fieldset class="scheduler-border">
							  <legend class="scheduler-border">လုပ်ငန်းအမျိုးအစား (အပြည်ပြည်ဆိုင်ရာ စီးပွားရေးလုပ်ငန်းအမျိုးအစား ခွဲခြားခြင်းစံထားအညွှန်း)</legend>
							  <div class="control-group">
								   <div class="row">
									   <div class="col-sm-5 text-center">
										   <label for="section_id">Section</label>
										   <select name="section_id" id="section_id" class="form-control">
											  <option value="">Choose Section</option>
											  <?php $__currentLoopData = $section; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											   <option value="<?php echo e($s->id); ?>" <?php echo e($s->id==$factory->section_id ? 'selected' : ''); ?>><?php echo e($s->SectionName); ?></option>
											  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										  </select>
									  </div>
									  <div class="col-sm-1">
  
									  </div>
									  <div class="col-sm-6">
										  <label for="division_id">Division</label>
										   <select name="division_id" id="division_id" class="form-control">
										   <option value="<?php echo e($division->id); ?>"><?php echo e($division->division_name); ?></option>
										  </select>
									  </div>
								   </div>
  
								   <div class="row">
									  <div class="col-sm-5 text-center">
										  <label for="group_id">Group</label>
										  <select name="group_id" id="group_id" class="form-control">
										  <option value="<?php echo e($group->id); ?>"><?php echo e($group->group_name); ?></option>
										 </select>
									 </div>
									 <div class="col-sm-1">
  
									 </div>
									 <div class="col-sm-6">
										 <label for="class_name">Class</label>
										  <select name="class_name" id="class_name" class="form-control">
										  <option value="<?php echo e($class->class_code); ?>"><?php echo e($class->class_name); ?></option>
										 </select>
									 </div>
								  </div>
  
							  </div>
						  </fieldset>
						</div>
						
							<!-- <input placeholder="ကုန်ချောတင်ပို့မှု" oninput="this.className = ''" name="export_product"> -->
						
					</div>
				</p>

	  		<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">E/C အလုပ်ခန့်ထားမှု စာချူပ်</legend>
						    <div class="control-group">
								 <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input class="custom-control-input" id="customRadio" name="Contract" type="radio" value=0 <?php echo e($factory->Contract==0 ? 'checked' : ''); ?>>
										  <label class="custom-control-label" for="customRadio">ဆောင်ရွက်ဆဲ</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="customRadio0"  type="radio" value=1 name="Contract" <?php echo e($factory->Contract==1 ? 'checked' : ''); ?>>
											<label class="custom-control-label" for="customRadio0">ဆောင်ရွက်ပြီး</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  			<div class="col-sm-1"></div>
		  			<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အချိန်ပိုလုပ်ကိုင်မှု</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="overtime" name="OverTime" type="radio" value=0 <?php echo e($factory->OverTime==0 ? 'checked' : ''); ?>>
										  <label class="custom-control-label" for="overtime">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="overtime1" type="radio" value=1 name="OverTime" <?php echo e($factory->OverTime==1 ? 'checked' : ''); ?>>
											<label class="custom-control-label" for="overtime1">မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  		</div>
	  		</p>
	  		<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အချိန်ပိုလုပ်ကိုင်မှု ခွင့်ပြုချက်</legend>
						    <div class="control-group">
								 <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input class="custom-control-input" id="permission" name="OTPermit" value=0 type="radio" <?php echo e($factory->OTPermit==0 ? 'checked' : ''); ?>>
										  <label class="custom-control-label" for="permission">ယူ</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="permission1"  type="radio" value=1 name="OTPermit" <?php echo e($factory->OTPermit==1 ? 'checked' : ''); ?>>
											<label class="custom-control-label" for="permission1">မယူ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  			<div class="col-sm-1"></div>
		  			<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">လူမှုဖူလုံရေးဝင်ပြီး/မပြီး</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="SSB" name="SSB" type="radio" value=0 <?php echo e($factory->SSB==0 ? 'checked' : ''); ?>>
										  <label class="custom-control-label" for="SSB">ပြီး</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="SSB1"  type="radio" name="SSB" value=1 <?php echo e($factory->SSB==1 ? 'checked' : ''); ?>>
											<label class="custom-control-label" for="SSB1">မပြီး</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  		</div>
	  		</p>
	  		<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အလုပ်ရုံနှင့် အလုပ်သမားဥပဒေစစ်ဆေးရေးဦးစီးဌာနသို့ နို့တစ်ပေးခြင်း</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="customRadio1" name="NoticeStatus" value=0 type="radio" <?php echo e($factory->SSB==0 ? 'checked' : ''); ?>>
										  <label class="custom-control-label" for="customRadio1">ပြီး</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="customRadio2"  type="radio" value=1 name="NoticeStatus" <?php echo e($factory->SSB==1 ? 'checked' : ''); ?>>
											<label class="custom-control-label" for="customRadio2">မပြီး</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset> 
		  			</div>
		  			<div class="col-sm-1"></div>
		  			<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေး နှင့် ကျန်းမာရေးကော်မတီ</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="Workplace_safe" name="SafteySide" value=0 type="radio" <?php echo e($factory->SafteySide==0 ? 'checked' : ''); ?>>
										  <label class="custom-control-label" for="Workplace_safe">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="Workplace_safe1" value=1 type="radio" name="SafteySide" <?php echo e($factory->SafteySide==1 ? 'checked' : ''); ?>>
											<label class="custom-control-label" for="Workplace_safe1">မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  		</div>
	  	</p>
	  	<p>
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<fieldset class="scheduler-border">
					    <legend class="scheduler-border">ကျွမ်းကျင်ပညာရှင် ကြီးကြပ်အုပ်ချူပ်မှု </legend>
					    <div class="control-group">
						    <div class="row">
							 	<div class="col-sm-6 text-center">
							 		<div class="custom-control custom-radio mb-3">
									  <input  class="custom-control-input" id="administrativework" name="ManagementExpert" value=0 type="radio" <?php echo e($factory->ManagementExpert==0 ? 'checked' : ''); ?>>
									  <label class="custom-control-label" for="administrativework">ရှိ</label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="custom-control custom-radio mb-3">
										<input  class="custom-control-input" id="administrativework1" type="radio" name="ManagementExpert" value=1 <?php echo e($factory->ManagementExpert==1 ? 'checked' : ''); ?>>
										<label class="custom-control-label" for="administrativework1">မရှိ</label>
									</div>
								</div>
							 </div>
					    </div>
					</fieldset> 
	  			</div>
	  			<div class="col-sm-1"></div>
	  			<div class="col-sm-6 text-center">
	  				<fieldset class="scheduler-border">
					    <legend class="scheduler-border">သက်သာချောင်ချိရေး ဆောင်ရွက်မှုကိစ္စ</legend>
					    <div class="control-group">
						    <div class="row">
							 	<div class="col-sm-6 text-center">
							 		<div class="custom-control custom-radio mb-3">
									  <input  class="custom-control-input" id="Welfare" name="Welfare" type="radio" value=0 <?php echo e($factory->Welfare==0 ? 'checked' : ''); ?>>
									  <label class="custom-control-label" for="Welfare">ရှိ</label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="custom-control custom-radio mb-3">
										<input  class="custom-control-input" id="Welfare1"  type="radio" name="Welfare" value=1 <?php echo e($factory->Welfare==1 ? 'checked' : ''); ?>>
										<label class="custom-control-label" for="Welfare1">မရှိ</label>
									</div>
								</div>
							 </div>
					    </div>
					</fieldset> 
	  			</div>
	  		</div>
	  	</p>

	  	 <p>
				<div class="row">
					<div class="col-sm-5 text-center">
						<fieldset class="scheduler-border">
						  <legend class="scheduler-border">မတော်တဆထိခိုက်မှုများနှင့် ရောဂါဖြစ်ပွားမှုမှတ်တမ်းစာအုပ်</legend>
						  <div class="control-group">
							  <div class="row">
								   <div class="col-sm-6 text-center">
									   <div class="custom-control custom-radio mb-3">
										<input  class="custom-control-input" id="AccidentRecordBook" name="AccidentRecordBook" value='ရှိ' type="radio" <?php echo e($factory->AccidentRecordBook=='ရှိ' ? 'checked' : ''); ?>>
										<label class="custom-control-label" for="AccidentRecordBook">ရှိ</label>
									  </div>
								  </div>
								  <div class="col-sm-6">
									  <div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="AccidentRecordBook1" type="radio" name="AccidentRecordBook" value='မရှိ' <?php echo e($factory->AccidentRecordBook=='မရှိ' ? 'checked' : ''); ?>>
										  <label class="custom-control-label" for="AccidentRecordBook1" >မရှိ</label>
									  </div>
								  </div>
							   </div>
						  </div>
					  </fieldset> 
					</div>
					<div class="col-sm-1"></div>
					<div class="col-sm-6 text-center">
						<fieldset class="scheduler-border">
						  <legend class="scheduler-border">လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေးနှင့် ကျန်းမာရေးဆိုင်ရာတာဝန်ခံ</legend>
						  <div class="control-group">
							  <div class="row">
								   <div class="col-sm-6 text-center">
									   <div class="custom-control custom-radio mb-3">
										<input  class="custom-control-input" id="SafetyHealth" name="SafetyHealth" type="radio" value='ရှိ' <?php echo e($factory->SafetyHealth=='ရှိ' ? 'checked' : ''); ?>>
										<label class="custom-control-label" for="SafetyHealth" onclick="SafetyHealth('1')">ရှိ</label>
									  </div>
								  </div>
								  <div class="col-sm-6">
									  <div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="SafetyHealth1"  type="radio" name="SafetyHealth" value='မရှိ' <?php echo e($factory->SafetyHealth=='မရှိ' ? 'checked' : ''); ?>>
										  <label class="custom-control-label" for="SafetyHealth1" onclick="SafetyHealth(2)">မရှိ</label>
									  </div>
								  </div>
							   </div>
							   <div class="row" id='safetyhealth'>
									<label for="safetyrank" class="text-center">ရာထူး</label> <br> 
									<select name="SafetyRank" id="safetyrank" class="form-control">
										<option value="">Choose Position</option>
										<option value="မန်နေဂျာ" <?php echo e($factory->SafetyRank=='မန်နေဂျာ' ? 'selected' : ''); ?>>မန်နေဂျာ</option>
										<option value="အရာရှိ" <?php echo e($factory->SafetyRank=='အရာရှိ' ? 'selected' : ''); ?>>အရာရှိ</option>
										<option value="ကြီးကြပ်ရေးမှူး" <?php echo e($factory->SafetyRank=='ကြီးကြပ်ရေးမှူး' ? 'selected' : ''); ?>>ကြီးကြပ်ရေးမှူး</option>
										<option value="ညှိနှိုင်းရေးမှူး" <?php echo e($factory->SafetyRank=='ညှိနှိုင်းရေးမှူး' ? 'selected' : ''); ?>>ညှိနှိုင်းရေးမှူး</option>
									</select>
							   </div>
						  </div>
					  </fieldset> 
					</div>
				</div>
			</p>

	  </div>
	  <div class="tab">
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
					    <td><input type='text' value="<?php echo e($factory->CitizenMenWorker); ?>"  name="CitizenMenWorker"></td>
					    <td><input type='text' value="<?php echo e($factory->CitizenWomenWorker); ?>" name="CitizenWomenWorker"></td>
					  </tr>
					   <tr>
					    <th>နိုင်ငံခြားသားလုပ်သား</th>
					    <td><input type='text' value="<?php echo e($factory->ForeignerMenWorker); ?>" name="ForeignerMenWorker"></td>
					    <td><input type='text' value="<?php echo e($factory->ForeignerWomenWorker); ?>" name="ForeignerWomenWorker"></td>
					  </tr>
					</table> <br>
				</div>
			</div>
			<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="datepicker">လစာပေးရက်</label>
						  
						  <select name="SalaryDate" id="SalaryDate" class="form-control">
							<option value="လကုန်ရက်" <?php if($factory->SalaryDate=='လကုန်ရက်'): ?> selected <?php endif; ?>>လကုန်ရက်</option>
							<option value="လဆန်း(၁)ရက်" <?php if($factory->SalaryDate=='လဆန်း(၁)ရက်'): ?> selected <?php endif; ?>>လဆန်း(၁)ရက်</option>
							<option value="လဆန်း(၂)ရက်" <?php if($factory->SalaryDate=='လဆန်း(၂)ရက်'): ?> selected <?php endif; ?>>လဆန်း(၂)ရက်</option>
							<option value="လဆန်း(၃)ရက်" <?php if($factory->SalaryDate=='လဆန်း(၃)ရက်'): ?> selected <?php endif; ?>>လဆန်း(၃)ရက်</option>
							<option value="လဆန်း(၄)ရက်" <?php if($factory->SalaryDate=='လဆန်း(၄)ရက်'): ?> selected <?php endif; ?>>လဆန်း(၄)ရက်</option>
							<option value="လဆန်း(၅)ရက်" <?php if($factory->SalaryDate=='လဆန်း(၅)ရက်'): ?> selected <?php endif; ?>>လဆန်း(၅)ရက်</option>
							<option value="လဆန်း(၆)ရက်" <?php if($factory->SalaryDate=='လဆန်း(၆)ရက်'): ?> selected <?php endif; ?>>လဆန်း(၆)ရက်</option>
							<option value="လဆန်း(၇)ရက်" <?php if($factory->SalaryDate=='လဆန်း(၇)ရက်'): ?> selected <?php endif; ?>>လဆန်း(၇)ရက်</option>
							<option value="လဆန်း(၈)ရက်" <?php if($factory->SalaryDate=='လဆန်း(၈)ရက်'): ?> selected <?php endif; ?>>လဆန်း(၈)ရက်</option>
							<option value="လဆန်း(၉)ရက်" <?php if($factory->SalaryDate=='လဆန်း(၉)ရက်'): ?> selected <?php endif; ?>>လဆန်း(၉)ရက်</option>
							<option value="လဆန်း(၁၀)ရက်" <?php if($factory->SalaryDate=='လဆန်း(၁၀)ရက်'): ?> selected <?php endif; ?>>လဆန်း(၁၀)ရက်</option>

						</select>
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<!-- <div class="col-sm-6 text-left">
		  				<input placeholder="သက်သာချောင်ချိရေး ဆောင်ရွက်မှုကိစ္စ" oninput="this.className = ''" name="Welfare">
		  			</div> -->
		  		</div>
	  		</p>
	  		<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="MinimumSalary">အနည်းဆုံးလစာ</label>
		  				<input id="MinimumSalary" value="<?php echo e($factory->MinimumSalary); ?>" oninput="this.className = ''" name="MinimumSalary">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="MaximumSalary">အများဆုံးလစာ</label>
		  				<input value="<?php echo e($factory->MaximumSalary); ?>" oninput="this.className = ''" name="MaximumSalary">
		  			</div>
		  		</div>
	  		</p>
	  
	       <p>&nbsp;အလုပ်ချိန်/ထမင်းစားနားချိန်</p>
	        <select name="WorkTimeType" id="worklaw">
	        	<option value="0" <?php echo e($factory->WorkTimeType=='0' ? 'selected' : ''); ?>>
	        		ပုံစံ - ဃ (က)
	        	</option>
	        	<option value="1" <?php echo e($factory->WorkTimeType=='1' ? 'selected' : ''); ?>>
	        		ပုံစံ - ဃ (ခ)
				</option>
				<option value="2" <?php echo e($factory->WorkTimeType=='2' ? 'selected' : ''); ?>>
						အခြား	
				</option>
	        </select> <br><br>

	         <p>
	  		<div class="row" id="law1">
	  			<div class="col-sm-12 text-center">
	  				<fieldset class="scheduler-border">
					    <legend class="scheduler-border">ပုံစံ - ဃ (က)</legend>
					    <div class="control-group">
					    	<span> တနင်္လာမှ စနေနေ့အထိ</span> <br>
					    	<div class="row">
					    		<div class="col-sm-4 text-center">
					    			အလုပ်စသည့်အချိန်
					    		</div>
					    		<div class="col-sm-4 text-right">
					    			 <input class="form-control" type="time"  id="example-time-input" name="MToSTimein" value="<?php echo e($factory->MToSTimein); ?>">
					    		</div>
					    	</div> <br>
					    	<div class="row">
					    		<div class="col-sm-4 text-center">
					    			အလုပ်ပြီးသည့်အချိန်
					    		</div>
					    		<div class="col-sm-4 text-right">
					    			 <input class="form-control" type="time"  id="example-time-input" name="MToSTimeout" value="<?php echo e($factory->MToSTimeout); ?>">
					    		</div>
					    	</div> <br>
					    	<div class="row">
									<div class="col-sm-4 text-center">
										ထမင်းစားနားချိန်
									</div>
									<div class="col-sm-4 text-center">  
										 <input class="form-control" type="time" name="LunchStartTimeLaw1" id="example-time-input" value="<?php echo e($factory->LunchStartTime); ?>"> မှ<br>
										 <input class="form-control" type="time" name="LunchEndTimeLaw1" id="example-time-input" value="<?php echo e($factory->LunchEndTime); ?>"> အထိ
									</div> 
								</div>
					    	<br> <p>ပုဒ်မ (၆၀) အရ ရက်သတ္တပတ်အလုပ်ပိတ်ရက် - တနင်္ဂနွေနေ့</p>
					    </div>
					</fieldset>
	  			</div>
	  		</div>
	  		<div class="row" id="law2">
	  			<div class="col-sm-12 text-center">
	  				<fieldset class="scheduler-border">
					    <legend class="scheduler-border">ပုံစံ - ဃ (ခ)</legend>
					    <div class="control-group">
					    	<div class="row">
					    		<div class="col-sm-6">
					    				<p>တနင်္လာမှ သောကြာအထိ</p>
					    			<div class="row">
							    		<div class="col-sm-6 text-center">
							    			အလုပ်စသည့်အချိန်
							    		</div>
							    		<div class="col-sm-6 text-right">
							    			 <input class="form-control" type="time" name="MToFTimein" id="example-time-input" value="<?php echo e($factory->MToFTimein); ?>">
							    		</div>
					    			</div> <br>
							    	<div class="row">
							    		<div class="col-sm-6 text-center">
							    			အလုပ်ပြီးသည့်အချိန်
							    		</div>
							    		<div class="col-sm-6 text-right">
							    			 <input class="form-control" type="time" name="MToFTimeout" id="example-time-input" value="<?php echo e($factory->MToFTimeout); ?>">
							    		</div>
							    	</div> <br>
							    	<div class="row">
											<div class="col-sm-6 text-center">
												ထမင်းစားနားချိန်
											</div>
											<div class="col-sm-6 text-center">
												  
												 <input class="form-control" type="time" name="LunchStartTimeLaw2" id="example-time-input"  value="<?php echo e($factory->LunchStartTime); ?>"> မှ<br>
												 <input class="form-control" type="time" name="LunchEndTimeLaw2" id="example-time-input" value="<?php echo e($factory->LunchEndTime); ?>"> အထိ
											</div> 
									</div>
					    		</div>
					    		<div class="col-sm-6">
					    			<p>စနေနေ့</p>
					    			<div class="row">
							    		<div class="col-sm-6 text-center">
							    			အလုပ်စသည့်အချိန်
							    		</div>
							    		<div class="col-sm-6 text-right">
							    			 <input class="form-control" type="time" name="STimein" id="example-time-input" value="<?php echo e($factory->STimein); ?>">
							    		</div>
					    			</div> <br>
							    	<div class="row">
							    		<div class="col-sm-6 text-center">
							    			အလုပ်ပြီးသည့်အချိန်
							    		</div>
							    		<div class="col-sm-6 text-right">
							    			 <input class="form-control" type="time" name="STimeout" id="example-time-input" value="<?php echo e($factory->STimeout); ?>"> 
							    		</div>
							    	</div> <br>
					    		</div>	
					    	</div>
					    	<br> <p>ပုဒ်မ (၆၀) အရ ရက်သတ္တပတ်အလုပ်ပိတ်ရက် - စနေနေ့တစ်ဝက်နှင့် တနင်္ဂနွေနေ့</p>
					    </div>
					</fieldset>
	  			</div>
			  </div>
			  
			  <div class="row" id="law3">
					<div class="col-sm-12 text-center">
						<fieldset class="scheduler-border">
						  <legend class="scheduler-border">အခြား</legend>
						  <div class="control-group">
							  <span> တနင်္လာမှ သောကြာအထိ
								</span> <br>
							  <div class="row">
								  <div class="col-sm-4 text-center">
									  အလုပ်စသည့်အချိန်
								  </div>
								  <div class="col-sm-4 text-right">
									   <input class="form-control" type="time"  id="example-time-input" name="MToFTimeInOther" value="<?php echo e($factory->MToFTimeInOther); ?>" >
								  </div>
							  </div> <br>
							  <div class="row">
								  <div class="col-sm-4 text-center">
									  အလုပ်ပြီးသည့်အချိန်
								  </div>
								  <div class="col-sm-4 text-right">
									   <input class="form-control" type="time"  id="example-time-input" name="MToFTimeoutOther" value="<?php echo e($factory->MToFTimeoutOther); ?>">
								  </div>
							  </div> <br>
							  <div class="row">
								  <div class="col-sm-4 text-center">
									  ထမင်းစားနားချိန်
								  </div>
								  <div class="col-sm-4 text-center">
										
									   <input class="form-control" type="time" name="LunchStartTimeLaw3" id="example-time-input" value="<?php echo e($factory->LunchStartTime); ?>"> မှ<br>
									   <input class="form-control" type="time" name="LunchEndTimeLaw3" id="example-time-input" value="<?php echo e($factory->LunchEndTime); ?>"> အထိ
								  </div> 
							  </div>
						  </div>
					  </fieldset>
					</div>
				</div>
	  	</p>
	      <p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="SignatureName">စစ်ဆေးသူ အမည်</label>
		  				<input id="SignatureName" value="<?php echo e($factory->SignatureName); ?>" oninput="this.className = ''" name="SignatureName">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="SignatureRank">စစ်ဆေးသူ ရာထူး</label>
		  				<input id="SignatureRank" oninput="this.className = ''" name="SignatureRank" value="<?php echo e($factory->SignatureRank); ?>">
		  			</div>
		  		</div>
	  		</p>

	  		<p>
					<div class="row">
						<div class="col-sm-5 text-center">
							<label for="SubscriberName">စာရင်းသွင်းသူ အမည်</label>
							<input id="SubscriberName" oninput="this.className = ''" name="SubscriberName" value="<?php echo e($factory->SubscriberName); ?>">
						</div>
						<div class="col-sm-1">
  
						</div>
						<div class="col-sm-6 text-center">
							<label for="SubscriberRank">စာရင်းသွင်းသူ ရာထူး</label>
							<input id="SubscriberRank" oninput="this.className = ''" name="SubscriberRank" value="<?php echo e($factory->SubscriberRank); ?>">
						</div>
					</div>
				</p>
	    <!-- <p><input placeholder="အမည်" oninput="this.className = ''" name="signname"></p>
	    <p><input placeholder="ရာထူး" oninput="this.className = ''" name="position"></p> -->
	  </div>
	  <div class="tab">
	  	<p><div class="row">
		  		<div class="col-sm-4 text-right">
		  			<label for="OwnerSentNotice">လုပ်ငန်းပိုင်ရှင်က ပေးပို့ရန်နို့တစ်စာ (၁၉၅၁ - ခုနှစ် အလုပ်ရုံများ အက်ဥပဒေပုဒ်မ ၈ အရ)</label>
		  		</div>
		  		<div class="col-sm-8">
		  	 		<input type="file" name="ownersentnotice" id='OwnerSentNotice'>
		  		</div>
	  		</div>
	  	</p>

		<p>
			<div class="row">
		  		<div class="col-sm-4 text-right">
		  			<label for="OwnerSentNotice">
						အလုပ်လုပ်ရန် ကာလအပိုင်းအခြားဆိုင်ရာ နို့တစ်စာ
	 
					</label>
		  		</div>
		  		<div class="col-sm-8">
		  	 		<input type="file"  name="WorkingTimeNotice" id='WorkingTimeNotice'>
		  		</div>
		  	</div>
		</p>
	  	<p>
	  		<div class="row">
		  		<div class="col-sm-4 text-right">
		  			<label for="WorkStartInform">
						လုပ်ငန်းစတင်လည်ပတ်မည်ဖြစ်ကြောင်း အကြောင်းကြားခြင်း

					</label>
		  		</div>
		  		<div class="col-sm-8">
		  	 		<input type="file"  name="WorkStartInform" id='WorkStartInform'>
		  		</div>
	  		</div>
		  </p>
		  
		  
	  	<p>
	  		<div class="row">
		  		<div class="col-sm-4 text-right">
		  			<label for="ec_contract">E/C အလုပ်ခန့်ထားမှုစာချူပ်</label>
		  		</div>
		  		<div class="col-sm-8">
		  	 		<input type="file"  name="ec_contract" id='ec_contract'>
		  		</div>
	  		</div>	
	  	</p>
	  	<p><div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="MICLicense">MIC ခွင့်ပြုချက်</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" name="MICLicense" id='MICLicense'>
	  		</div>
	  	</div></p>
	  	<p><div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="CompanyNrc">ကုမ္ပဏီမှတ်ပုံတင်</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file"  name="CompanyNrc" id='CompanyNrc'>
	  		</div>
	  	</div>	</p>
	  	<p><div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="IndustryLicense">စက်မှု(၁) လိုင်စင်</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" name="IndustryLicense" id='IndustryLicense'>
	  		</div>
	  	</div>	</p>
	  	<p><div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="Import_Export_License">ထုတ်ကုန်/သွင်းကုန်လိုင်စင်</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" name="Import_Export_License" id='Import_Export_License'>
	  		</div>
	  	</div>	</p>
	  	<p><div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="Municipal_License">စည်ပင်လိုင်စင်</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file"  name="Municipal_License" id='Municipal_License'>
	  		</div>
	  	</div>	</p>
	  	
	  	<p><div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="other_license1">အခြားလိုင်စင် (၁)</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file"  name="other_license1" id='other_license1'>
	  		</div>
	  	</div>	</p>
	  	<p><div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="other_license2">အခြားလိုင်စင် (၂)</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file"  name="other_license2" id='other_license2'>
	  		</div>
	  	</div>	</p>
	  	<p><div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="other_license3">အခြားလိုင်စင် (၃)</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" name="other_license3" id='other_license3'>
	  		</div>
	  	</div>	</p>
	  	<p><div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="other_license4">အခြားလိုင်စင် (၄)</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" name="other_license4" id='other_license4'>
	  		</div>
	  	</div>	</p>
	  	<p><div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="other_license5">အခြားလိုင်စင် (၅)</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" name="other_license5" id='other_license5'>
	  		</div>
	  	</div>	</p>
		  	<p><div class="row">
		  		<div class="col-sm-4 text-right">
		  			<label for="other_license6">အခြားလိုင်စင် (၆)</label>
		  		</div>
		  		<div class="col-sm-8">
		  	 		<input type="file" name="other_license6" id='other_license6'>
		  		</div>
		  	</div>	
		  </p>	
	  	<br>  	 
	  </div>
	  <div style="overflow:auto;">
	    <div style="float:right;">
	      <button type="button" id="prevBtn" onclick="nextPrev(-1)">ရှေ့တစ်မျက်နှာ</button>
	      <button type="button" id="nextBtn" onclick="nextPrev(1)">နောက်တစ်မျက်နှာ</button>
	    </div>
	  </div>
	  <!-- Circles which indicates the steps of the form: -->
	  <!-- <div style="text-align:center;margin-top:40px;">
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	  </div> -->
</form>
<!-- scroll back to top of the page -->
<a id="back2Top" title="Back to top" href="#">&#10148;</a>

<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "သိမ်းဆည်းမည်";
  } else {
    document.getElementById("nextBtn").innerHTML = "နောက်တစ်မျက်နှာ";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  // if (n == 1 && !validateForm()) return false;
  // // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}
function nextPrevv(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  // if (n == 1 && !validateForm()) return false;
  // // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab =n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}
function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}


//for work time
$("#law2").css("display","none");
$("#law3").css("display","none");		
$( "#worklaw" ).change(function() {
  	var worklaw=$( "#worklaw" ).val();
	if(worklaw==0){
		$("#law1").css("display","block");
		$("#law2").css("display","none");
		$("#law3").css("display","none");		
	}else if(worklaw==1){
		$("#law1").css("display","none");
		$("#law2").css("display","block");
		$("#law3").css("display","none");
	}else{
		$("#law1").css("display","none");
		$("#law2").css("display","none");
		$("#law3").css("display","block");
	}
});
//end
$(document).ready(function(){
	//for worktime type document ready select
    var WorkTimeType=$('#worklaw').val();
	if(WorkTimeType==0){
		$("#law1").css("display","block");
		$("#law2").css("display","none");
		$("#law3").css("display","none");
	}else if(WorkTimeType==1){
		$("#law1").css("display","none");
		$("#law2").css("display","block");
		$("#law3").css("display","none");
	}else{
		$("#law1").css("display","none");
		$("#law2").css("display","none");
		$("#law3").css("display","block");
	}
});

$('#region_id').change(function(){ 
	   var id = $(this).val();
	   if(id != '')
	   {
		$.ajax({
		 url:"<?php echo e(route('locationregion.fetch')); ?>",
		 method:"GET",
		 data:{id:id},
		 success:function(data){
			console.log(data);
			$.each(data, function (i, item) {
					$('#district_id').append($('<option>', { 
						value: item.id,
						text : item.district_name 
					}));
				});
		   }
		});
	   }
   });
   
   $('#district_id').change(function(){ 
	   var id = $(this).val();
	   if(id != '')
	   {
		$.ajax({
		 url:"<?php echo e(route('locationtownship.fetch')); ?>",
		 method:"GET",
		 data:{id:id},
		 success:function(data){
			console.log(data);
			$.each(data, function (i, item) {
					$('#township_id').append($('<option>', { 
						value: item.id,
						text : item.township_name 
					}));
				});
		   }
		});
	   }
   });

   $('#township_id').change(function(){ 
	   var id = $(this).val();
	   if(id != '')
	   {
		$.ajax({
		 url:"<?php echo e(route('locationZone.fetch')); ?>",
		 method:"GET",
		 data:{id:id},
		 success:function(data){
			console.log(data);
			$.each(data, function (i, item) {
					$('#zone_id').append($('<option>', { 
						value: item.id,
						text : item.industrialzone_name 
					}));
				});
		   }
		});
	   }
   });

   //for Safety Health if has show 
$('#safetyhealth').hide();
function SafetyHealth(i){
   if(i=='1'){
	   $('#safetyhealth').show();
   }else{
	$('#safetyhealth').hide();
   }
}
//end

	$('#section_id').change(function(){ 
	   var id = $(this).val();
	   if(id != '')
	   {
		$.ajax({
		 url:"<?php echo e(route('WorkTypeSection.fetch')); ?>",
		 method:"GET",
		 data:{id:id},
		 success:function(data){
			console.log(data);
			$.each(data, function (i, item) {
					$('#division_id').append($('<option>', { 
						value: item.id,
						text : item.division_name 
					}));
				});
		   }
		});
	   }
   });

   $('#division_id').change(function(){ 
	   var id = $(this).val();
	   if(id != '')
	   {
		$.ajax({
		 url:"<?php echo e(route('WorkTypeGroup.fetch')); ?>",
		 method:"GET",
		 data:{id:id},
		 success:function(data){
			console.log(data);
			$.each(data, function (i, item) {
					$('#group_id').append($('<option>', { 
						value: item.id,
						text : item.group_name 
					}));
				});
		   }
		});
	   }
   });

   $('#group_id').change(function(){ 
	   var id = $(this).val();
	   if(id != '')
	   {
		$.ajax({
		 url:"<?php echo e(route('WorkTypeClass.fetch')); ?>",
		 method:"GET",
		 data:{id:id},
		 success:function(data){
			console.log(data);
			$.each(data, function (i, item) {
					$('#class_name').append($('<option>', { 
						value: item.class_code,
						text : item.class_name 
					}));
				});
		   }
		});
	   }
   });

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>