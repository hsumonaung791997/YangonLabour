<?php $__env->startSection('content'); ?>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
	<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="<?php echo e(asset('assets/js/common.js')); ?>"></script>
	<style>
		.tab{
			top:0;left:0;
		}
		
	</style>
	
<script type='text/javascript'>
</script>

	<?php if(session()->get('success')): ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		<span class="alert-inner--icon"></span>
		<span class="alert-inner--text">  <?php echo e(session()->get('success')); ?>  </span>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
 	<?php endif; ?>
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
	

<form id="regForm" action="<?php echo e(route('factories.store')); ?>" method="post" enctype="multipart/form-data">
	 <?php echo csrf_field(); ?>
		<!-- Circles which indicates the steps of the form: -->
	  <h1>လုပ်ငန်းဌာနဆိုင်ရာ အချက်အလက်များ </h1> 
	  <div class="row">
		  <div class="col-sm-12 text-right">
				<button  name="tempoarySave" id="tempoarySave">ယာယီသိမ်းဆည်းမည် </button>
				<input type="hidden" name="tempoary" id="tempoary">
		  </div>
	  </div>
	<div class="row">
		<div class="col-sm-12 text-left">
			<p style="font-weight:bold;">မှတ်ချက်။	။"<font style="color:red;">*</font>" ပြထားသောနေရာများသည် မဖြစ်မနေထည့်သွင်းပေးရမည့် အချက်အလက်များဖြစ်ပါသည်။</p>
		</div>
	
	</div>
  	<div style="text-align:center;margin-top:40px;">
	    <a  style="text-decoration: none;" onclick="nextPrevv(0)"><span class="step">1</span></a>
	    <span class="step" onclick="nextPrevv(1)">2</span>
	    <span class="step" onclick="nextPrevv(2)">3</span>
	    <span class="step" onclick="nextPrevv(3)">4</span>
	    <span class="step" onclick="nextPrevv(4)">5</span>
	  </div> <br>
  	<!-- One "tab" for each step in the form: -->
	  <div class="tab">
	
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<label for="FactoryName"><span style="color:red;">*</span> အလုပ်ရုံအမည်</label>
	  				<input class="form-control" name="FactoryName" id="FactoryName"  value="<?php echo e(old('FactoryName')); ?>">
					  
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
	  				<label for="EmailAdd">ဆက်သွယ်ရန် အီးမေး</label>
	  				<input class="form-control" name="EmailAdd" id="EmailAdd"  value="<?php echo e(old('EmailAdd')); ?>">
	  			</div>
	  		</div>
	  	
	  	
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<label for="ContactFax">ဆက်သွယ်ရန် ဖက်စ်</label>
	  				<input class="form-control" name="ContactFax" id="ContactFax" value="<?php echo e(old('ContactFax')); ?>">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
	  				<label for="ContactPhone"><span style="color:red;">*</span> ဆက်သွယ်ရန် ဖုန်းနံပါတ်</label>
	  				<input class="form-control"  name="ContactPhone" id="ContactPhone" value="<?php echo e(old('ContactPhone')); ?>">	  
	  			</div>
	  		</div>
	  	
	  	
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<label for="NoticeAddress"><span style="color:red;">*</span> အကြောင်းကြားစာပေးပို့မည့်လိပ်စာ</label>
	  				<input id="NoticeAddress" class="form-control"   name="NoticeAddress" value="<?php echo e(old('NoticeAddress')); ?>">
	  			</div>
	  			<div class="col-sm-1">
	  			</div>
	  			<div class="col-sm-6 text-center">
	  				<label for="ContactAddress"><span style="color:red;">*</span> ဆက်သွယ်ရန် လိပ်စာ

					</label>
	  				<input  name="ContactAddress" class="form-control" id="ContactAddress" value="<?php echo e(old('ContactAddress')); ?>">
	  			</div>
	  		</div>
	  	
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<label for="WorkedPower">အလုပ်ရုံပစ္စည်းထွက်လုပ်ကိုင်နိုင်သောအင်အား</label>
	  				<input class="form-control"  name="WorkedPower" id="WorkedPower" value="<?php echo e(old('WorkedPower')); ?>">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
	  				<label for="ElectricPower">လျှပ်စစ်ဓာတ်အားကိုမည်သို့ရရှိသည်</label>
	  				<input id="ElectricPower" class="form-control" name="ElectricPower" value="<?php echo e(old('ElectricPower')); ?>">
	  			</div>
	  		</div>
		  
			<div class="row">
				<div class="col-sm-5 text-center">
					<label for="prenoticedate">ကြိုတင်အကြောင်းကြားစာ ပေးပို့သည့်နေ့စွဲ</label>
					<input  type="date"  class="form-control" name="PreNoticeDate" id="PreNoticeDate" value="<?php echo e(old('PreNoticeDate')); ?>">
				</div>
				<div class="col-sm-1">
					
				</div>
				<div class="col-sm-6 text-center">
					<label for="RegDate"><span style="color:red;">*</span> စက်ရုံ အလုပ်မှတ်ပုံတင်သည့်နေ့စွဲ	</label>
					<input id="RegDate" class="form-control" name="RegDate" type="date" value="<?php echo e(old('RegDate')); ?>">
				</div>
			</div>

	  		<div class="row">
	  			<div class="col-sm-12 text-center">
	  				<fieldset class="scheduler-border">
					    <legend class="scheduler-border">အလုပ်ရုံတည်နေရာ</legend>
					    <div class="control-group">
								<div class="row">
										<div class="col-sm-5 text-right">
											<label for="region_id"><span style="color:red;">*</span> တိုင်းဒေသကြီး</label>
										</div>
										<div class="col-sm-6 text-left">
											<select id="region_id" class="form-control" name="region_id">
												<option value=""> Choose Region</option>
											<?php $__currentLoopData = $region; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value=<?php echo e($r->id); ?> ><?php echo e($r->region_name); ?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</select>
										</div>
									</div> <br>
					    	<div class="row">
					    		<div class="col-sm-5 text-right">
					    			<label for="district"><span style="color:red;">*</span> ခရိုင်</label>
					    		</div>
					    		<div class="col-sm-6 text-left">
					    			<select id="district_id" class="form-control" name="district_id">
							        	<option value="">Choose District
										</option>
					        		</select>
					    		</div>
					    	</div> <br>
					    	<div class="row">
					    		<div class="col-sm-5 text-right">
					    			<label for="township_id"><span style="color:red;">*</span> မြို့နယ်</label>
					    		</div>
					    		<div class="col-sm-6 text-left">
					    			<select id="township_id" class="form-control" name="township_id">
							        	
							        	<option value="">Choose TownShip</option>
					        		</select>
					    		</div>
					    	</div> <br>
					    	<div class="row">
					    		<div class="col-sm-5 text-right">
					    			<label for="zone">ဇုန်</label>
					    		</div>
					    		<div class="col-sm-6 text-left">
					    			<select name="zone_id" id="zone_id" class="form-control">
							        	<option value="">Choose Zone</option>
					        		</select>
					    		</div>
					    	</div><br>
					    	<div class="row">
					    		<div class="col-sm-5 text-right">
					    			<label for="address">လိပ်စာ</label>
					    		</div>
					    		<div class="col-sm-6 text-left">
					    			<textarea class="form-control form-control-alternative" rows="3" placeholder="အသေးစိတ်ထည့်ရန်" id='address' name="FactoryAddress"><?php echo e(old('FactoryAddress')); ?></textarea>
					    		</div>
					    	</div>
					           
					    </div>
					</fieldset>
	  			</div>
	  		</div>
	  	
	  		<div class="row">
	  			<div class="col-sm-12">
	  				<label for="NextYearProcess">ပြုလုပ်မည့်လုပ်ငန်းနှင့်စပ်လျဉ်းနောင်လာမည့်၁၂လအတွင်းပြုလုပ်မည့်လုပ်ငန်းစဉ်</label>
	  				<textarea class="col-sm-12 form-control" rows="4" id="NextYearProcess" name="NextYearProcess"><?php echo e(old('NextYearProcess')); ?></textarea>
	  			</div>
	  		</div>

	  </div> 
	  <div class="tab">လုပ်ငန်းအမျိုးအစားအသုံးပြုရမည့်လျှပ်စစ်ဝန်အားနှင့်စက်စွမ်းအား
	  	<p>(အောက်ပါဇယားကွက်တွင်စက်ကိရိယာအသီးသီးတို့၏မြင်းကောင်ရေအားကိုဖော်ပြရန်)</p>
	  		<div class="row">
	 			<div class="col-sm-5 text-center">
	 				<label for="StreamHP">ရေနွေးငွေ့ဖြင့်လည်သောစက်</label>
					<input id="StreamHP" class="form-control"  name="StreamHP" value="<?php echo e(old('NextYearProcess')); ?>">
				</div>
				<div class="col-sm-1">
					
				</div>
	 			<div class="col-sm-6 text-center">
	 				<label for="GasHP">ဓာတ်ငွေ့၊ဓာတ်ဆီဖြင့်လည်သောစက်</label>
					<input id="GasHP" class="form-control" name="GasHP" value="<?php echo e(old('GasHP')); ?>">
				</div>
			</div> <br>
			<div class="row">
	 			<div class="col-sm-5 text-center">
	 				<label for="MotorHP">လျှပ်စစ်ဖြင့်လည်သောစက်</label>
					<input id="MotorHP" class="form-control" name="MotorHP" value="<?php echo e(old('MotorHP')); ?>">
				</div>
				<div class="col-sm-1">
					
				</div>
	 			<div class="col-sm-6 text-center">
	 				<label for="WaterHP">ရေအားဖြင့်လည်သောစက်</label>
					<input id="WaterHP" class="form-control"  name="WaterHP" value="<?php echo e(old('WaterHP')); ?>">
				</div>
			</div>
			<br>
   			 <p>&nbsp; အလုပ်ရုံတွင်နောင်လာမည့်၁၂လအတွင်းခိုင်းစေမည့်အလုပ်သမား</p>
   			 <div class="row">
				<div class="col-sm-12">
					<table border="1" style="width:100%;table-layout:fixed;border-spacing:20px 40px;font-size:16px; line-height:24px; font-weight:100;" class="bodywrapcenter">
					  <thead class="">
						<tr>
							<th rowspan="2"> </th>
							<th colspan="2">လူကြီး</th>
							<th colspan="2">လူရွယ် ၁၆နှစ်၊ ၁၈နှစ်</th>
							<th colspan="2">ကလေး ၁၄နှစ်၊ ၁၆နှစ်</th>
						</tr>
						<tr>
							<th> ကျား</th>
							<th>မ </th>
							<th> ကျား</th>
							<th>မ </th>
							<th> ကျား</th>
							<th>မ </th>
						</tr>
					  </thead>
					  <tbody>
					  <tr>
					    <th style="width: 100px;">လခစား</th>
					    <td><input type='text' value=0 name="MenWorker" id="MenWorker" class="form-control" onkeyup="converunistring('man')"></td>
					    <td><input type='text' value=0 name="WomenWorker" id="WomenWorker" class="form-control" onkeyup="converunistring('women')"></td>
					    <td><input type='text' value=0 name="AMenWorker" id="AMenWorker" class="form-control" onkeyup="converunistring('amen')" > </td>
					    <td><input type='text' value=0 name="AWomenWorker" id="AWomenWorker" class="form-control" onkeyup="converunistring('awomen')"></td>
					    <td><input type='text'value=0 name="CMenWorker" id="CMenWorker" class="form-control" onkeyup="converunistring('cman')" ></td>
					    <td><input type='text' value=0 name="CWomenWorker" id="CWomenWorker" class="form-control" onkeyup="converunistring('cwomen')"></td>
					  </tr>
					   <tr>
					    <th>နေ့စား</th>
					    <td><input type='text' value=0 name="DailyMenWorker" id="DailyMenWorker" class="form-control" onkeyup="converunistring('man')"></td>
					    <td><input type='text' value=0 name="DailyWomenWorker" id="DailyWomenWorker" class="form-control" onkeyup="converunistring('women')"></td>
					    <td><input type='text' value=0 name="ADailyMenWorker" id="ADailyMenWorker" class="form-control" onkeyup="converunistring('amen')"></td>
					    <td><input type='text' value=0 name="ADailyWomenWorker" id="ADailyWomenWorker" class="form-control" onkeyup="converunistring('awomen')"></td>
					    <td><input type='text' value=0 name="CDailyMenWorker" id="CDailyMenWorker" class="form-control" onkeyup="converunistring('cman')"></td>
					    <td><input type='text' value=0 name="CDailyWomenWorker" id="CDailyWomenWorker" class="form-control" onkeyup="converunistring('cwomen')"></td>
					  </tr>
					  <tr>
					    <th>ပုတ်ပြတ်</th>
					    <td><input type='text' value=0 name="PieceMenWorker" id="PieceMenWorker" class="form-control" onkeyup="converunistring('man')"></td>
					    <td><input type='text' value=0 name="PieceWomenWorker" id="PieceWomenWorker" class="form-control" onkeyup="converunistring('women')"> </td>
					    <td><input type='text' value=0 name="APieceMenWorker" id="APieceMenWorker" class="form-control" onkeyup="converunistring('amen')"></td>
					    <td><input type='text' value=0 name="APieceWomenWorker" id="APieceWomenWorker" class="form-control" onkeyup="converunistring('awomen')"></td>
					    <td><input type='text' value=0 name="CPieceMenWorker" id="CPieceMenWorker" class="form-control" onkeyup="converunistring('cman')"></td>
					    <td><input type='text' value=0 name="CPieceWomenWorker" id="CPieceWomenWorker" class="form-control" onkeyup="converunistring('cwomen')"></td>
					  </tr>
					  <tr>
					    <th>စုစုပေါင်း</th>
					    <td> <input type="text" id="totalman" class="form-control" name="totalMan" value="0"></td>
					    <td><input type="text" id="totalWomen" class="form-control" name="totalWomen" value="0"></td>
					    <td><input type="text" id="totalaman" class="form-control" name="totalAman" value="0"></td>
					    <td><input type="text" id="totalawomen" class="form-control" name="totalAwomen" value="0"></td>
					    <td><input type="text" id="totalcman" class="form-control" name="totalCman" value="0"></td>
					    <td><input type="text" id="totalcwomen" class="form-control" name="totalCwomen" value="0"></td>
					  </tr>
					  </tbody>
					</table> <br>
				</div>
			</div>

			<input type="hidden" id="total_man" name="totalMaleWorker">
			<input type="hidden" id="total_women" name="totalFemaleWorker">

			

		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label id="datepicker"><span style="color:red;">*</span> အလုပ်ရုံစတင် လုပ်ကိုင်သောရက်စွဲ</label>
		  				<input class="form-control"  name="StartDate" id="datepicker" class="datepicker" type="date" value="<?php echo e(old('StartDate')); ?>">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-center">
		  				<label for="ManagerName"><span style="color:red;">*</span> မန်နေဂျာအမည်</label>
		  				<input id="ManagerName" class="form-control"  name="ManagerName" value="<?php echo e(old('ManagerName')); ?>">
		  			</div>
		  		</div>
	  		
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="OwnerName"><span style="color:red;">*</span> လုပ်ငန်းပိုင်ရှင်အမည်</label>
		  				<input  name="OwnerName" class="form-control" id="OwnerName" value="<?php echo e(old('OwnerName')); ?>">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-center">
		  				<label for="OwnerNrc"><span style="color:red;">*</span> လုပ်ငန်းပိုင်ရှင် မှတ်ပုံတင်နံပါတ်</label>
		  				<input id="OwnerNrc" class="form-control"  name="OwnerNrc" value="<?php echo e(old('OwnerNrc')); ?>">
		  			</div>
		  		</div>
	  		
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="OwnerAddress"><span style="color:red;">*</span> လုပ်ငန်းပိုင်ရှင် လိပ်စာ</label>
		  				<input  id="OwnerAddress" class="form-control" name="OwnerAddress" value="<?php echo e(old('OwnerAddress')); ?>">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-center">
		  				<label for="OwnerPhno"><span style="color:red;">*</span> လုပ်ငန်းပိုင်ရှင် ဖုန်းနံပါတ်</label>
		  				<input id="OwnerPhno" class="form-control"  name="OwnerPhno" value="<?php echo e(old('OwnerPhno')); ?>">
		  			</div>
		  		</div>
	  		
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label id="OwnerFax">လုပ်ငန်းပိုင်ရှင် ဖက်စ်</label>
		  				<input id="OwnerFax" class="form-control" name="OwnerFax" value="<?php echo e(old('OwnerFax')); ?>">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-center">
		  				<label for="OwnerEmail">လုပ်ငန်းပိုင်ရှင် အီးမေး</label>
		  				<input id="OwnerEmail" class="form-control" name="OwnerEmail" value="<?php echo e(old('OwnerEmail')); ?>">
		  			</div>
		  		</div>
	  		
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label id="OwnerPassport">နိုင်ငံကူးလက်မှတ်</label>
		  				<input id="OwnerPassport" class="form-control" name="OwnerPassport" value="<?php echo e(old('OwnerPassport')); ?>">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-center">
		  				<label for="TestingDate">အလုပ်ရုံစမ်းသပ် လည်ပတ်သည့်နေ့</label>
		  				<input type="date" name="TestingDate" id="TestingDate" class="TestingDate form-control" value="<?php echo e(old('TestingDate')); ?>">
		  			</div>
		  		</div>
	  		
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="ContactAddress">စက်ရုံအမျိုးအစား</label>
		  				<div class="row">
							<div class="col-sm-4 text-center">
								<div class="custom-control custom-radio mb-3">
								 <input class="custom-control-input" id="TypeofFactory" name="TypeofFactory" type="radio" value="ကြီး" checked >
								 <label class="custom-control-label" for="TypeofFactory">ကြီး</label>
							   </div>
						   </div>
						   <div class="col-sm-4 text-center">
							   <div class="custom-control custom-radio mb-3">
								   <input  class="custom-control-input" id="TypeofFactory1"  type="radio" value="လတ်" name="TypeofFactory" <?php if(old('TypeofFactory')=='လတ်'): ?> checked <?php endif; ?>>
								   <label class="custom-control-label" for="TypeofFactory1">လတ်</label>
							   </div>
						   </div>
						   <div class="col-sm-4 text-center">
							<div class="custom-control custom-radio mb-3">
								<input  class="custom-control-input" id="TypeofFactory2"  type="radio" value="သေး" name="TypeofFactory" <?php if(old('TypeofFactory')=='သေး'): ?> checked <?php endif; ?>>
								<label class="custom-control-label" for="TypeofFactory2">သေး</label>
							</div>
						</div>
						</div>
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-center">
		  			</div>
		  		</div>
	  </div>
	  <div class="tab"><!-- စက်ရုံနှင့်ပတ်သက်သော အချက်အလက်များ <br> -->
		    
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="PropertyType">ပိုင်ဆိုင်မှုအမျိုးအစား</label>
						  
						  <select name="PropertyType" id="PropertyType" class="form-control">
							  <option value="နိုင်ငံ" <?php if(old('PropertyType')=="နိုင်ငံ"): ?> selected <?php endif; ?>>နိုင်ငံ</option>
							  <option value="သမဝါယမ" <?php if(old('PropertyType')=="သမဝါယမ"): ?> selected <?php endif; ?>>သမဝါယမ</option>
							  <option value="ပုဂ္ဂလိက" <?php if( old('PropertyType')=="ပုဂ္ဂလိက"): ?> selected <?php endif; ?>>ပုဂ္ဂလိက</option>
							  <option value="နိုင်ငံခြား" <?php if( old('PropertyType') =="နိုင်ငံခြား"): ?> selected <?php endif; ?>>နိုင်ငံခြား</option>
							  <option value="ဖက်စပ်" <?php if(old('PropertyType') =="ဖက်စပ်"): ?> selected <?php endif; ?>>ဖက်စပ်</option>
						  </select>
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-center">
							<label for="investment">ရင်းနှီးမြှုပ်နှံမှု (LDI/FDI)</label>
							<select name="Investment" id="investment" class="form-control">
								<option value="LDI" <?php if(old('Investment')=="LDI"): ?> selected <?php endif; ?>>LDI</option>
								<option value="FDI" <?php if(old('Investment')=="FDI"): ?> selected <?php endif; ?>>FDI</option>
							</select>
		  			</div>
		  		</div>
	  		
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
						<label for="MonthlyAmounts">တစ်လထုတ်လုပ်နိုင်မှုပမာဏ</label>
					  <input id="MonthlyAmounts" class="form-control" oninput="this.className = ''" name="MonthlyAmounts" value="<?php echo e(old('MonthlyAmounts')); ?>">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-center">
							<label for="UsedPower">အသုံးပြုသည့်စွမ်းအင်</label>
							<input type="text" id="UsedPower" class="form-control" name="UsedPower" value="<?php echo e(old('UsedPower')); ?>">
		  				
		  			</div>
		  		</div>
	  		
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="ProducedProduct">ထုတ်လုပ်သည့်ပစ္စည်း (အဓိက)</label>
		  				<input id="ProducedProduct" class="form-control"  oninput="this.className = ''" name="ProducedProduct" value="<?php echo e(old('ProducedProduct')); ?>">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-center">
		  				<label for="ProducedOthers">ထုတ်လုပ်သည့်ပစ္စည်း(အခြား)</label>
		  				<input id="ProducedOthers" class="form-control" oninput="this.className = ''" name="ProducedOthers" value="<?php echo e(old('ProducedOthers')); ?>">
		  			</div>
		  		</div>
	  		
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label id="RawMaterials">ကုန်ကြမ်းရရှိမှု</label>
		  				<input id="RawMaterials" class="form-control" oninput="this.className = ''" name="RawMaterials" value="<?php echo e(old('RawMaterials')); ?>">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-center">
		  				<label for="Goods">ကုန်ချောတင်ပို့မှု</label>
		  				<input id="Goods" class="form-control" oninput="this.className = ''" name="Goods" value="<?php echo e(old('Goods')); ?>">
		  			</div>
		  		</div>
				  <div class="blank10"></div>
	  		
							
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
										 	<option value="<?php echo e($s->id); ?>"><?php echo e($s->SectionName); ?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
									</div>
									<div class="col-sm-1">

									</div>
									<div class="col-sm-6">
										<label for="division_id">Division</label>
										 <select name="division_id" id="division_id" class="form-control">
											<option value="">Choose Division</option>
										</select>
									</div>
								 </div>

								 <div class="row">
									<div class="col-sm-5 text-center">
										<label for="group_id">Group</label>
										<select name="group_id" id="group_id" class="form-control">
										   <option value="">Choose Group</option>
									   </select>
								   </div>
								   <div class="col-sm-1">

								   </div>
								   <div class="col-sm-6">
									   <label for="class_name">Class</label>
										<select name="class_name" id="class_name" class="form-control">
										   <option value="">Choose Class</option>
									   </select>
								   </div>
								</div>

						    </div>
						</fieldset>
		  			</div>
		  			
		  				<!-- <input placeholder="ကုန်ချောတင်ပို့မှု" oninput="this.className = ''" name="export_product"> -->
		  			
		  		</div>
	  		
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">E/C အလုပ်ခန့်ထားမှု စာချူပ်</legend>
						    <div class="control-group">
								 <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input class="custom-control-input" id="customRadio" name="Contract" type="radio" value=0 checked >
										  <label class="custom-control-label" for="customRadio">ဆောင်ရွက်ဆဲ</label>
										</div>
									</div>
									<div class="col-sm-6 text-center">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="customRadio0"  type="radio" value=1 name="Contract" <?php if(old('Contract')=='1'): ?> checked <?php endif; ?>>
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
										  <input  class="custom-control-input" id="overtime" name="OverTime" type="radio" value=0 checked>
										  <label class="custom-control-label" for="overtime">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-6 text-center">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="overtime1" type="radio" value=1 name="OverTime" <?php if(old('OverTime')=='1'): ?> checked <?php endif; ?> >
											<label class="custom-control-label" for="overtime1">မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  		</div>
	  		
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အချိန်ပိုလုပ်ကိုင်မှု ခွင့်ပြုချက်</legend>
						    <div class="control-group">
								 <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input class="custom-control-input" id="permission" name="OTPermit" value=0 type="radio" checked>
										  <label class="custom-control-label" for="permission">ယူ</label>
										</div>
									</div>
									<div class="col-sm-6 text-center">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="permission1"  type="radio" value=1 name="OTPermit" <?php if(old('OTPermit')=='1'): ?> checked <?php endif; ?>>
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
										  <input  class="custom-control-input" id="SSB" name="SSB" type="radio" value=0 checked>
										  <label class="custom-control-label" for="SSB">ပြီး</label>
										</div>
									</div>
									<div class="col-sm-6 text-center">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="SSB1"  type="radio" name="SSB" value=1 <?php if(old('SSB')=='1'): ?> checked <?php endif; ?>>
											<label class="custom-control-label" for="SSB1">မပြီး</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  		</div>
	  		
	  		
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အလုပ်ရုံနှင့် အလုပ်သမားဥပဒေစစ်ဆေးရေးဦးစီးဌာနသို့ နို့တစ်ပေးခြင်း</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="customRadio1" name="NoticeStatus" value=0 type="radio" checked>
										  <label class="custom-control-label" for="customRadio1">ပြီး</label>
										</div>
									</div>
									<div class="col-sm-6 text-center">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="customRadio2"  type="radio" value=1 name="NoticeStatus" <?php if(old('NoticeStatus')=='1'): ?> checked <?php endif; ?> >
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
						    <legend class="scheduler-border">လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေး 
									နှင့် ကျန်းမာရေးကော်မတီ</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="Workplace_safe" name="SafteySide" value=0 type="radio" checked>
										  <label class="custom-control-label" for="Workplace_safe">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-6 text-center">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="Workplace_safe1" value=1 type="radio" name="SafteySide" <?php if(old('SafteySide')=='1'): ?> checked <?php endif; ?>>
											<label class="custom-control-label" for="Workplace_safe1">မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  		</div>
	  	
	  	
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<fieldset class="scheduler-border">
					    <legend class="scheduler-border">ကျွမ်းကျင်ပညာရှင် ကြီးကြပ်အုပ်ချူပ်မှု </legend>
					    <div class="control-group">
						    <div class="row">
							 	<div class="col-sm-6 text-center">
							 		<div class="custom-control custom-radio mb-3">
									  <input  class="custom-control-input" id="administrativework" name="ManagementExpert" value=0 type="radio" checked>
									  <label class="custom-control-label" for="administrativework">ရှိ</label>
									</div>
								</div>
								<div class="col-sm-6 text-center">
									<div class="custom-control custom-radio mb-3">
										<input  class="custom-control-input" id="administrativework1" type="radio" name="ManagementExpert" value=1 <?php if(old('ManagementExpert')=='1'): ?> checked <?php endif; ?>>
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
									  <input  class="custom-control-input" id="Welfare" name="Welfare" type="radio" value=0 checked>
									  <label class="custom-control-label" for="Welfare">ရှိ</label>
									</div>
								</div>
								<div class="col-sm-6 text-center">
									<div class="custom-control custom-radio mb-3">
										<input  class="custom-control-input" id="Welfare1"  type="radio" name="Welfare" value=1 <?php if(old('Welfare')=='1'): ?> checked <?php endif; ?>>
										<label class="custom-control-label" for="Welfare1">မရှိ</label>
									</div>
								</div>
							 </div>
					    </div>
					</fieldset> 
	  			</div>
	  		</div>
	  	
				<div class="row">
					<div class="col-sm-5 text-center">
						<fieldset class="scheduler-border">
						  <legend class="scheduler-border">မတော်တဆထိခိုက်မှုများနှင့် ရောဂါဖြစ်ပွားမှုမှတ်တမ်းစာအုပ်</legend>
						  <div class="control-group">
							  <div class="row">
								   <div class="col-sm-6 text-center">
									   <div class="custom-control custom-radio mb-3">
										<input  class="custom-control-input" id="AccidentRecordBook" name="AccidentRecordBook" value='ရှိ' type="radio" checked>
										<label class="custom-control-label" for="AccidentRecordBook">ရှိ</label>
									  </div>
								  </div>
								  <div class="col-sm-6 text-center">
									  <div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="AccidentRecordBook1" type="radio" name="AccidentRecordBook" value='မရှိ' <?php if(old('AccidentRecordBook')=='မရှိ'): ?> checked <?php endif; ?>>
										  <label class="custom-control-label" for="AccidentRecordBook1">မရှိ</label>
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
										<input  class="custom-control-input" id="SafetyHealth" name="SafetyHealth" type="radio" value='ရှိ' >
										<label class="custom-control-label" for="SafetyHealth" onclick="SafetyHealth('1')">ရှိ</label>
									  </div>
								  </div>
								  <div class="col-sm-6 text-center">
									  <div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" checked="" id="SafetyHealth1"  type="radio" name="SafetyHealth" value='မရှိ' <?php if(old('SafetyHealth')=='မရှိ'): ?> checked <?php endif; ?>>
										  <label class="custom-control-label" for="SafetyHealth1" onclick="SafetyHealth(2)">မရှိ</label>
									  </div>
								  </div>
							   </div>
							   <div class="row" id='safetyhealth'>
									<label for="safetyrank" class="text-center">ရာထူး</label> <br> 
									<select name="SafetyRank" id="safetyrank" class="form-control">
										<option value="">Choose Position</option>
										<option value="မန်နေဂျာ" <?php if(old('SafetyRank')=='မန်နေဂျာ'): ?> selected <?php endif; ?>>မန်နေဂျာ</option>
										<option value="အရာရှိ" <?php if(old('SafetyRank')=='အရာရှိ'): ?> selected <?php endif; ?>>အရာရှိ</option>
										<option value="ကြီးကြပ်ရေးမှူး" <?php if(old('SafetyRank')=='ကြီးကြပ်ရေးမှူး'): ?> selected <?php endif; ?>>ကြီးကြပ်ရေးမှူး</option>
										<option value="ညှိနှိုင်းရေးမှူး" <?php if(old('SafetyRank')=='ညှိနှိုင်းရေးမှူး'): ?> selected <?php endif; ?>>ညှိနှိုင်းရေးမှူး</option>
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
					<table style="width:100%" class="table table-bordered">
					<thead>
					  <tr>
					  	<th> </th>
					    <th>ကျား</th>
					    <th>မ </th>
					  </tr>
					  </thead>
					  <tr>
					    <th>နိုင်ငံသားလုပ်သား</th>
					    <td><input type='text' value=0  name="CitizenMenWorker" id="CitizenMenWorker" class="form-control"></td>
					    <td><input type='text' value=0 name="CitizenWomenWorker" id="CitizenWomenWorker" class="form-control"></td>
					  </tr>
					   <tr>
					    <th>နိုင်ငံခြားသားလုပ်သား</th>
					    <td><input type='text' value=0 name="ForeignerMenWorker" class="form-control"></td>
					    <td><input type='text' value=0 name="ForeignerWomenWorker" class="form-control"></td>
					  </tr>
					</table> <br>
				</div>
			</div>
			<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
						  <label for="datepicker">လစာပေးရက်</label>
						   <select name="SalaryDate" id="SalaryDate" class="form-control">
							   <option value="လကုန်ရက်" <?php if(old('SalaryDate')=='လကုန်ရက်'): ?> selected <?php endif; ?>>လကုန်ရက်</option>
							   <option value="လဆန်း(၁)ရက်" <?php if(old('SalaryDate')=='လဆန်း(၁)ရက်'): ?> selected <?php endif; ?>>လဆန်း(၁)ရက်</option>
							   <option value="လဆန်း(၂)ရက်" <?php if(old('SalaryDate')=='လဆန်း(၂)ရက်'): ?> selected <?php endif; ?>>လဆန်း(၂)ရက်</option>
							   <option value="လဆန်း(၃)ရက်" <?php if(old('SalaryDate')=='လဆန်း(၃)ရက်'): ?> selected <?php endif; ?>>လဆန်း(၃)ရက်</option>
							   <option value="လဆန်း(၄)ရက်" <?php if(old('SalaryDate')=='လဆန်း(၄)ရက်'): ?> selected <?php endif; ?>>လဆန်း(၄)ရက်</option>
							   <option value="လဆန်း(၅)ရက်" <?php if(old('SalaryDate')=='လဆန်း(၅)ရက်'): ?> selected <?php endif; ?>>လဆန်း(၅)ရက်</option>
							   <option value="လဆန်း(၆)ရက်" <?php if(old('SalaryDate')=='လဆန်း(၆)ရက်'): ?> selected <?php endif; ?>>လဆန်း(၆)ရက်</option>
							   <option value="လဆန်း(၇)ရက်" <?php if(old('SalaryDate')=='လဆန်း(၇)ရက်'): ?> selected <?php endif; ?>>လဆန်း(၇)ရက်</option>
							   <option value="လဆန်း(၈)ရက်" <?php if(old('SalaryDate')=='လဆန်း(၈)ရက်'): ?> selected <?php endif; ?>>လဆန်း(၈)ရက်</option>
							   <option value="လဆန်း(၉)ရက်" <?php if(old('SalaryDate')=='လဆန်း(၉)ရက်'): ?> selected <?php endif; ?>>လဆန်း(၉)ရက်</option>
							   <option value="လဆန်း(၁၀)ရက်" <?php if(old('SalaryDate')=='လဆန်း(၁၀)ရက်'): ?> selected <?php endif; ?>>လဆန်း(၁၀)ရက်</option>

						   </select>
		  				
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<!-- <div class="col-sm-6 text-left">
		  				<input placeholder="သက်သာချောင်ချိရေး ဆောင်ရွက်မှုကိစ္စ" oninput="this.className = ''" name="Welfare">
		  			</div> -->
		  		</div>
	  		
	  		
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="MinimumSalary"><span style="color:red;">*</span> အနည်းဆုံးလစာ</label>
					  <input id="MinimumSalary" class="form-control" oninput="this.className = ''" name="MinimumSalary" value="<?php echo e(old('MinimumSalary')); ?>">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-center">
		  				<label for="MaximumSalary"> <span style="color:red;">*</span> အများဆုံးလစာ</label>
		  				<input class="form-control"  oninput="this.className = ''" name="MaximumSalary" value="<?php echo e(old('MaximumSalary')); ?>">
		  			</div>
		  		</div>
	  		
	  
	       <p>&nbsp;အလုပ်ချိန်/ထမင်းစားနားချိန်</p>
		   <div class="row">
			<div class="col-sm-5">
				<select name="WorkTimeType" id="worklaw" class="form-control">
					<option value="0" <?php if(old('WorkTimeType')=='0'): ?> selected <?php endif; ?>>
						ပုံစံ - ဃ (က)
					</option>
					<option value="1" <?php if(old('WorkTimeType')=='1'): ?> selected <?php endif; ?>>
						ပုံစံ - ဃ (ခ)
					</option>
					<option value="2" <?php if(old('WorkTimeType')=='2'): ?> selected <?php endif; ?>>
							အခြား	
					</option>
				</select>
				</div>
		   </div><br>
	         
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
								<input class="form-control" type="time"  id="example-time-input" name="MToSTimein" value="<?php echo e(old('MToSTimein')); ?>">
					    		</div>
					    	</div> <br>
					    	<div class="row">
					    		<div class="col-sm-4 text-center">
					    			အလုပ်ပြီးသည့်အချိန်
					    		</div>
					    		<div class="col-sm-4 text-right">
					    			 <input class="form-control" type="time"  id="example-time-input" name="MToSTimeout" value="<?php echo e(old('MToSTimeout')); ?>">
					    		</div>
					    	</div> <br>
					    	<div class="row">
									<div class="col-sm-4 text-center">
										အားလပ်ချိန်
									</div>
									<div class="col-sm-4 text-center">
							
										 <input class="form-control" type="time" name="LunchStartTimeLaw1" id="example-time-input" value="<?php echo e(old('LunchStartTimeLaw1')); ?>"> မှ<br>
										 <input class="form-control" type="time" name="LunchEndTimeLaw1" id="example-time-input" value="<?php echo e(old('LunchEndTimeLaw1')); ?>"> အထိ
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
							    			 <input class="form-control" type="time" name="MToFTimein" id="example-time-input" value="<?php echo e(old('MToFTimein')); ?>">
							    		</div>
					    			</div> <br>
							    	<div class="row">
							    		<div class="col-sm-6 text-center">
							    			အလုပ်ပြီးသည့်အချိန်
							    		</div>
							    		<div class="col-sm-6 text-right">
							    			 <input class="form-control" type="time" name="MToFTimeout" id="example-time-input" value="<?php echo e(old('MToFTimeout')); ?>">
							    		</div>
							    	</div> <br>
							    	<div class="row">
											<div class="col-sm-6 text-center">
												ထမင်းစားနားချိန်
											</div>
											<div class="col-sm-6 text-center">
												  
												 <input class="form-control" type="time" name="LunchStartTimeLaw2" id="example-time-input" value="<?php echo e(old('LunchStartTimeLaw2')); ?>"> မှ<br>
												 <input class="form-control" type="time" name="LunchEndTimeLaw2" id="example-time-input" value="<?php echo e(old('LunchEndTimeLaw2')); ?>"> အထိ
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
							    			 <input class="form-control" type="time" name="STimein" id="example-time-input" value="<?php echo e(old('STimein')); ?>">
							    		</div>
					    			</div> <br>
							    	<div class="row">
							    		<div class="col-sm-6 text-center">
							    			အလုပ်ပြီးသည့်အချိန်
							    		</div>
							    		<div class="col-sm-6 text-right">
							    			 <input class="form-control" type="time" name="STimeout" id="example-time-input" value="<?php echo e(old('STimeout')); ?>"> 
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
									   <input class="form-control" type="time"  id="example-time-input" name="MToFTimeInOther" value="<?php echo e(old('MToFTimeInOther')); ?>">
								  </div>
							  </div> <br>
							  <div class="row">
								  <div class="col-sm-4 text-center">
									  အလုပ်ပြီးသည့်အချိန်
								  </div>
								  <div class="col-sm-4 text-right">
									   <input class="form-control" type="time"  id="example-time-input" name="MToFTimeoutOther" value="<?php echo e(old('MToFTimeoutOther')); ?>">
								  </div>
							  </div> <br>
							  <div class="row">
								  <div class="col-sm-4 text-center">
									  ထမင်းစားနားချိန်
								  </div>
								  <div class="col-sm-4 text-center">
										
									   <input class="form-control" type="time" name="LunchStartTimeLaw3" id="example-time-input" value="<?php echo e(old('LunchStartTimeLaw3')); ?>"> မှ<br>
									   <input class="form-control" type="time" name="LunchEndTimeLaw3" id="example-time-input" value="<?php echo e(old('LunchEndTimeLaw3')); ?>"> အထိ
								  </div> 
							  </div>
						  </div>
					  </fieldset>
					</div>
				</div>
	  	
	    
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="SignatureName"><span style="color:red;">*</span>စစ်ဆေးသူ အမည်</label>
		  				<input id="SignatureName" class="form-control" oninput="this.className = ''" name="SignatureName" value="<?php echo e(old('SignatureName')); ?>">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-center">
		  				<label for="SignatureRank"><span style="color:red;">*</span> စစ်ဆေးသူ ရာထူး</label>
						  
						  <select name="SignatureRank" id="SignatureRank" class="form-control">
							  <option value="ဦးစီးအရာရှိ(အလုပ်ရုံစစ်ဆေးရေး)" <?php echo e(old('SignatureRank')=='ဦးစီးအရာရှိ(အလုပ်ရုံစစ်ဆေးရေး)' ? 'selected' : ''); ?>>ဦးစီးအရာရှိ(အလုပ်ရုံစစ်ဆေးရေး)</option>
							  <option value="ဦးစီးအရာရှိ(ဥပဒေ)" <?php echo e(old('SignatureRank')=='ဦးစီးအရာရှိ(ဥပဒေ)' ? 'selected' : ''); ?>>ဦးစီးအရာရှိ(ဥပဒေ)</option>
							  <option value="လက်ထောက်ညွှန်ကြားရေးမှုး" <?php echo e(old('SignatureRank')=='လက်ထောက်ညွှန်ကြားရေးမှုး' ? 'selected' : ''); ?>>လက်ထောက်ညွှန်ကြားရေးမှုး</option>
						  </select>
		  			</div>
		  		</div>
			  
					<div class="row">
						<div class="col-sm-5 text-center">
							<label for="SubscriberName">စာရင်းသွင်းသူ အမည်</label>
							<input id="SubscriberName" class="form-control" oninput="this.className = ''" name="SubscriberName" value="<?php echo e(old('SubscriberName')); ?>">
						</div>
						<div class="col-sm-1">
  
						</div>
						<div class="col-sm-6 text-center">
							<label for="SubscriberRank">စာရင်းသွင်းသူ ရာထူး</label>
							
							<select name="SubscriberRank" id="SubscriberRank" class="form-control">
								<option value="ဦးစီးအရာရှိ(အလုပ်ရုံစစ်ဆေးရေး)" <?php echo e(old('SubscriberRank')=='ဦးစီးအရာရှိ(အလုပ်ရုံစစ်ဆေးရေး)' ? 'selected' : ''); ?>>ဦးစီးအရာရှိ(အလုပ်ရုံစစ်ဆေးရေး)</option>
								<option value="ဦးစီးအရာရှိ(ဥပဒေ)" <?php echo e(old('SubscriberRank')=='ဦးစီးအရာရှိ(ဥပဒေ)' ? 'selected' : ''); ?>>ဦးစီးအရာရှိ(ဥပဒေ)</option>
								<option value="လက်ထောက်ညွှန်ကြားရေးမှုး" <?php echo e(old('SubscriberRank')=='လက်ထောက်ညွှန်ကြားရေးမှုး' ? 'selected' : ''); ?>>လက်ထောက်ညွှန်ကြားရေးမှုး</option>
								<option value="ရုံးစာရေး">ရုံးစာရေး</option>
							</select>
						</div>
					</div>
				</p>
	  </div>

	  <div class="tab">
	  	<div class="row">
		  		<div class="col-sm-4 text-right">
		  			<label for="OwnerSentNotice">လုပ်ငန်းပိုင်ရှင်က ပေးပို့ရန်နို့တစ်စာ (၁၉၅၁ - ခုနှစ် အလုပ်ရုံများ အက်ဥပဒေပုဒ်မ ၈ အရ)</label>
		  		</div>
		  		<div class="col-sm-8">
		  	 		<input type="file" name="ownersentnotice" id='OwnerSentNotice' class="form-control">
		  		</div>
	  		</div>
			  <div class="blank10"></div>
		  	<div class="row">
		  		<div class="col-sm-4 text-right">
		  			<label for="OwnerSentNotice">
						အလုပ်လုပ်ရန် ကာလအပိုင်းအခြားဆိုင်ရာ နို့တစ်စာ
	 
					</label>
		  		</div>
		  		<div class="col-sm-8">
		  	 		<input type="file" class="form-control" name="WorkingTimeNotice" id='WorkingTimeNotice'>
		  		</div>
		  	</div>
			  <div class="blank10"></div>
	  		<div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="WorkStartInform">
					လုပ်ငန်းစတင်လည်ပတ်မည်ဖြစ်ကြောင်း အကြောင်းကြားခြင်း

				</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" class="form-control" name="WorkStartInform" id='WorkStartInform'>
	  		</div>
	  	</div>
		  <div class="blank10"></div>
	  	<div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="ec_contract">E/C အလုပ်ခန့်ထားမှုစာချူပ်</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" class="form-control" name="ec_contract" id='ec_contract'>
	  		</div>
	  	</div>	
		  <div class="blank10"></div>
	  	<div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="MICLicense">MIC ခွင့်ပြုချက်</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" class="form-control" name="MICLicense" id='MICLicense'>
	  		</div>
	  	</div>
		  <div class="blank10"></div>
	  	<div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="CompanyNrc">ကုမ္ပဏီမှတ်ပုံတင်</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" class="form-control" name="CompanyNrc" id='CompanyNrc'>
	  		</div>
	  	</div>	
		  <div class="blank10"></div>
	  	<div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="IndustryLicense">စက်မှု(၁) လိုင်စင်</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" class="form-control" name="IndustryLicense" id='IndustryLicense'>
	  		</div>
	  	</div>
		  <div class="blank10"></div>
	  	<div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="Import_Export_License">ထုတ်ကုန်/သွင်းကုန်လိုင်စင်</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" class="form-control" name="Import_Export_License" id='Import_Export_License'>
	  		</div>
	  	</div>
		  <div class="blank10"></div>
	  	<div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="Municipal_License">စည်ပင်လိုင်စင်</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" class="form-control" name="Municipal_License" id='Municipal_License'>
	  		</div>
	  	</div>	
	  	<div class="blank10"></div>
	  	<div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="other_license1">အခြားလိုင်စင် (၁)</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" class="form-control" name="other_license1" id='other_license1'>
	  		</div>
	  	</div>
		  <div class="blank10"></div>
	  	<div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="other_license2">အခြားလိုင်စင်(၂)</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" class="form-control" name="other_license2" id='other_license2'>
	  		</div>
	  	</div>
		  <div class="blank10"></div>
	  	<div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="other_license3">အခြားလိုင်စင်(၃)</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" class="form-control" name="other_license3" id='other_license3'>
	  		</div>
	  	</div>
		  <div class="blank10"></div>
	  	<div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="other_license4">အခြားလိုင်စင်(၄)</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" class="form-control" name="other_license4" id='other_license4'>
	  		</div>
	  	</div>
		  <div class="blank10"></div>
	  	<div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="other_license5">အခြားလိုင်စင်(၅)</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" class="form-control" name="other_license5" id='other_license5'>
	  		</div>
	  	</div>
		  <div class="blank10"></div>
	  	<div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="other_license6">အခြားလိုင်စင်(၆)</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" class="form-control" name="other_license6" id='other_license6'>
	  		</div>
	  	</div>	
	  	<br>  	 
	  </div>
	  <div class="blank10"></div>
	  <div style="overflow:auto;">
	    <div style="float:right;">
	      <button type="button" id="prevBtn" onclick="nextPrev(-1)">ရှေ့တစ်မျက်နှာ</button>
	      <button type="button" id="nextBtn" onclick="nextPrev(1)" name="action">နောက်တစ်မျက်နှာ</button>
		  
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
	$("#tempoary").val('save');
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
// $(document).ready(function(){
//     $('.timepicker').timepicker({});
// });
$('#tempoarySave').click(function(){
	$("#tempoary").val('tempoary');
	document.getElementById("regForm").submit();
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


$( document ).ready(function() {
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

});

//for  man sum

function converunistring(type){
	if(type=='man'){
		var num1=document.getElementById("MenWorker").value;
		var num2=document.getElementById('DailyMenWorker').value;
		var num3=document.getElementById('PieceMenWorker').value;
	}else if(type=='women'){
		var num1=document.getElementById("WomenWorker").value;
		var num2=document.getElementById('DailyWomenWorker').value;
		var num3=document.getElementById('PieceWomenWorker').value;
	}else if(type=='amen'){
		var num1=document.getElementById("AMenWorker").value;
		var num2=document.getElementById('ADailyMenWorker').value;
		var num3=document.getElementById('APieceMenWorker').value;
	}else if(type=='awomen'){
		var num1=document.getElementById("AWomenWorker").value;
		var num2=document.getElementById('ADailyWomenWorker').value;
		var num3=document.getElementById('APieceWomenWorker').value;
	}else if(type=='cman'){
		var num1=document.getElementById("CMenWorker").value;
		var num2=document.getElementById('CDailyMenWorker').value;
		var num3=document.getElementById('CPieceMenWorker').value;
	}else if(type=='cwomen'){
		var num1=document.getElementById("CWomenWorker").value;
		var num2=document.getElementById('CDailyWomenWorker').value;
		var num3=document.getElementById('CPieceWomenWorker').value;
	}
	

	// alert(num1);
	var englishDigits = {
    '၀': '0',
    '၁': '1',
    '၂': '2',
    '၃': '3',
    '၄': '4',
    '၅': '5',
    '၆': '6',
    '၇': '7',
    '၈': '8',
    '၉': '9'
  };
  var myanDigits = {
    '0':'၀',
    '1': '၁',
    '2':'၂' ,
    '3':'၃',
    '4':'၄' ,
   '5' :'၅' ,
    '6': '၆',
    '7': '၇',
    '8':'၈' ,
    '9': '၉'
  };


var mynum1 = num1.replace(/[၀၁၂၃၄၅၆၇၈၉]/g, function(s) {
                  return englishDigits[s];
              }); 
var mynum2 = num2.replace(/[၀၁၂၃၄၅၆၇၈၉]/g, function(s) {
                  return englishDigits[s];
              }); 
var mynum3 = num3.replace(/[၀၁၂၃၄၅၆၇၈၉]/g, function(s) {
	return englishDigits[s];
}); 
var num4=parseInt(mynum1)+parseInt(mynum2)+parseInt(mynum3);

var num5=num4.toString();
var sum=num5.replace(/[0123456789]/g,function(s){
	return myanDigits[s];
});


if(type=='man'){
	//sum for man
	$('#totalman').val(sum);
	console.log(sum);	
	}else if(type=='women'){
		$('#totalWomen').val(sum);
	}else if(type=='amen'){
		$('#totalaman').val(sum);
	}else if(type=='awomen'){
		$('#totalawomen').val(sum);
	}else if(type=='cman'){
		$('#totalcman').val(sum);
	}else if(type='cwomen'){
		$('#totalcwomen').val(sum);
	}

	///for sum total man and total women
	var man1=document.getElementById("totalman").value;
		var man2=document.getElementById('totalaman').value;
		var man3=document.getElementById('totalcman').value;
		var woman1=document.getElementById("totalWomen").value;
		var woman2=document.getElementById('totalawomen').value;
		var woman3=document.getElementById('totalcwomen').value;
	//for total man change to burmese
var myman1 = man1.replace(/[၀၁၂၃၄၅၆၇၈၉]/g, function(s) {
                  return englishDigits[s];
              }); 
var myman2 = man2.replace(/[၀၁၂၃၄၅၆၇၈၉]/g, function(s) {
                  return englishDigits[s];
              }); 
var myman3 = man3.replace(/[၀၁၂၃၄၅၆၇၈၉]/g, function(s) {
	return englishDigits[s];
}); 
//for total women change to burmese

var mywomen1 = woman1.replace(/[၀၁၂၃၄၅၆၇၈၉]/g, function(s) {
                  return englishDigits[s];
              }); 
var mywomen2 = woman2.replace(/[၀၁၂၃၄၅၆၇၈၉]/g, function(s) {
                  return englishDigits[s];
              }); 
var mywomen3 = woman3.replace(/[၀၁၂၃၄၅၆၇၈၉]/g, function(s) {
	return englishDigits[s];
});

///sum man
var man=parseInt(myman1)+parseInt(myman2)+parseInt(myman3);
var totalman = man.toString();
var summan=totalman.replace(/[0123456789]/g,function(s){
	return myanDigits[s];
});
$('#total_man').val(summan);
$('#CitizenMenWorker').val(summan);

var woman=parseInt(mywomen1)+parseInt(mywomen2)+parseInt(mywomen3);
var totalwoman = woman.toString();
var sumwoman=totalwoman.replace(/[0123456789]/g,function(s){
	return myanDigits[s];
});
$('#total_women').val(sumwoman);
$('#CitizenWomenWorker').val(sumwoman);

}

//end


</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>