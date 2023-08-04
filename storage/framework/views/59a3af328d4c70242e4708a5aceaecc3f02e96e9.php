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
<form id="regForm" action="<?php echo e(route('shops.store')); ?>" method="post" enctype="multipart/form-data">
	 <?php echo e(csrf_field()); ?>

		<!-- Circles which indicates the steps of the form: -->
	  <h1>လုပ်ငန်းဌာနဆိုင်ရာ အချက်အလက်များ</h1>
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
	  				<label for="shopname"><span style="color:red;">*</span> ဆိုင် (သို့မဟုတ်) အလုပ်ဌာန အမည်</label>
				  <input id="shopname" class="form-control" name="shopname" value="<?php echo e(old('shopname')); ?>">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
	  				<label for="shopemail">အီးမေး</label>
	  				<input id="shopemail" class="form-control" name="shopemail" value="<?php echo e(old('shopemail')); ?>">
	  			</div>
	  		</div>
	  	
	  	
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<label for="shopfax">ဖက်စ်</label>
	  				<input id="shopfax" class="form-control" name="shopfax" value="<?php echo e(old('shopfax')); ?>">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
	  				<label for="shopphone"><span style="color:red;">*</span> ဖုန်းနံပါတ်</label>
	  				<input id="shopphone" class="form-control" name="shopphone" value="<?php echo e(old('shopphone')); ?>">
	  			</div>
	  		</div>
	  	
	  	
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<label for="ownername"><span style="color:red;">*</span> အလုပ်ရှင်အမည်</label>
	  				<input id="ownername" class="form-control" name="ownername" value="<?php echo e(old('ownername')); ?>">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
					<label for="ownernrc"><span style="color:red;">*</span> နိုင်ငံသားစီစစ်ရေးအမှတ်</label>
					<input id="ownernrc" class="form-control" name="ownernrc" value="<?php echo e(old('ownernrc')); ?>">
	  			</div>
	  		</div>
	  	
	  	
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
					<label for="owneraddress"><span style="color:red;">*</span> ပိုင်ရှင်နေရပ်လိပ်စာ</label>
					<input id="owneraddress" class="form-control" name="owneraddress" value="<?php echo e(old('owneraddress')); ?>">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
					<label for="ownerphone"><span style="color:red;">*</span> ပိုင်ရှင် ဆက်သွယ်ရန် ဖုန်းနံပါတ်</label>
					<input id="ownerphone" class="form-control" name="ownerphone" value="<?php echo e(old('ownerphone')); ?>">
	  			</div>
	  		</div>
	  	
	  	
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
					<label for="ownerfax">ပိုင်ရှင် ဆက်သွယ်ရန် ဖက်စ်</label>
					<input id="ownerfax" class="form-control" name="ownerfax" value="<?php echo e(old('ownerfax')); ?>">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
	  				<label for="owneremail">ပိုင်ရှင်ဆက်သွယ်ရန် အီးမေး</label>
	  				<input id="owneremail" class="form-control" name="owneremail" value="<?php echo e(old('owneremail')); ?>">
	  			</div>
	  		</div>
	  	
	  	
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
					<label for="mangername"><span style="color:red;">*</span> မန်နေဂျာ (သို့မဟုတ်) အလုပ်ရှင်ကိုယ်စား တာဝန်ခံအမည်</label>
					<input id="mangername" class="form-control" name="mangername" value="<?php echo e(old('mangername')); ?>">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
					<label for="managernrc"><span style="color:red;">*</span> တာဝန်ခံ နိုင်ငံသားစီစစ်ရေးအမှတ်</label>
					<input id="managernrc" class="form-control" name="managernrc" value="<?php echo e(old('managernrc')); ?>">
	  			</div>
	  		</div>
	  		  	
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
					<label for="manageraddress"><span style="color:red;">*</span> တာဝန်ခံ နေရပ်လိပ်စာ</label>
					<input id="manageraddress" class="form-control" name="manageraddress" value="<?php echo e(old('manageraddress')); ?>">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
					<label for="managerphone"><span style="color:red;">*</span> တာဝန်ခံ ဆက်သွယ်ရန်ဖုန်း</label>
					<input id="managerphone" class="form-control" name="managerphone" value="<?php echo e(old('managerphone')); ?>">
	  			</div>
	  		</div>
	  		  	
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
					<label for="managerfax">တာဝန်ခံ ဆက်သွယ်ရန်ဖက်(စ်)</label>
					<input id="managerfax" class="form-control" name="managerfax" value="<?php echo e(old('managerfax')); ?>">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
					<label for="manageremail">တာဝန်ခံ ဆက်သွယ်ရန် အီးမေးလ်လိပ်စာ</label>
					<input id="manageremail" class="form-control" name="manageremail" value="<?php echo e(old('manageremail')); ?>">
	  			</div>
	  		</div>
		  
		  
			<div class="row">
				<div class="col-sm-5 text-center">
					<label for="prenoticedate">ကြိုတင်အကြောင်းကြားစာ ပေးပို့သည့်နေ့စွဲ</label>
					<input  type="date" class="form-control" name="PreNoticeDate" id="PreNoticeDate" value="<?php echo e(old('PreNoticeDate')); ?>">
				</div>
				<div class="col-sm-1">
					
				</div>
				<div class="col-sm-6 text-center">
					<label for="RegDate"><span style="color:red;">*</span> ဆိုင် / အလုပ်ဌာန အလုပ်မှတ်ပုံတင်သည့်နေ့စွဲ	</label>
					<input id="RegDate" class="form-control" name="RegDate" type="date" value="<?php echo e(old('RegDate')); ?>">
				</div>
			</div>
		
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
					<fieldset class="scheduler-border">
					    <legend class="scheduler-border">တစ်ရက်လျှင် ၂၄နာရီ လုပ်ကိုင်ရန်</legend>
					    <div class="control-group">
					    	<div class="row">
							 	<div class="col-sm-6 text-center">
							 		<div class="custom-control custom-radio mb-3">
									  <input class="custom-control-input" id="operate24hr" name="operate24hr" type="radio" value=0 checked>
									  <label class="custom-control-label" for="operate24hr">လို</label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="custom-control custom-radio mb-3">
										<input  class="custom-control-input" id="operate24hr1"  type="radio" name="operate24hr" value=1 <?php if(old('operate24hr')==1): ?> checked <?php endif; ?>>
										<label class="custom-control-label" for="operate24hr1">မလို</label>
									</div>
								</div>
							 </div>
					    </div>
					</fieldset>
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
	  				<label id="OwnerPassport">နိုင်ငံကူးလက်မှတ်</label>
				  <input id="OwnerPassport" class="form-control" name="OwnerPassport" value="<?php echo e(old('OwnerPassport')); ?>">
	  			</div>
	  		</div>
	  	
	  	
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="shoptype">ဆိုင်နှင့် အလုပ်ဌာနအမျိုးအစား</label>
		  				<div class="row">
							<div class="col-sm-4 text-center">
								<div class="custom-control custom-radio mb-3">
								 <input class="custom-control-input" id="TypeofShop" name="shoptype" type="radio" value="ကြီး" checked >
								 <label class="custom-control-label" for="TypeofShop">ကြီး</label>
							   </div>
						   </div>
						   <div class="col-sm-4">
							   <div class="custom-control custom-radio mb-3">
								   <input  class="custom-control-input" id="TypeofShop1"  type="radio" value="လတ်" name="shoptype" <?php if(old('shoptype')=='လတ်'): ?> checked <?php endif; ?>>
								   <label class="custom-control-label" for="TypeofShop1">လတ်</label>
							   </div>
						   </div>
						   <div class="col-sm-4">
							<div class="custom-control custom-radio mb-3">
								<input  class="custom-control-input" id="TypeofShop2"  type="radio" value="သေး" name="shoptype" <?php if(old('shoptype')=='သေး'): ?> checked <?php endif; ?>>
								<label class="custom-control-label" for="TypeofShop2">သေး</label>
							</div>
						</div>
						</div>
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-center">
		  				
		  			</div>
		  		</div>
	  		  	
	  		<div class="row">
	  			<div class="col-sm-12 text-center">
	  				<fieldset class="scheduler-border">
					    <legend class="scheduler-border">ဆိုင်တည်နေရာ</legend>
					    <div class="control-group">
					    	<div class="row">
								<div class="col-sm-5 text-right">
									<label for="region_id"><span style="color:red;">*</span> တိုင်းဒေသကြီး</label>
								</div>
								<div class="col-sm-6 text-left">
									<select id="region_id" class="form-control" name="region_id">
										<option value=""> Choose Region</option>
									<?php $__currentLoopData = $region; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value=<?php echo e($r->id); ?> <?php if(old('region_id')==$r->id): ?> selected <?php endif; ?> ><?php echo e($r->region_name); ?></option>
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
					    			<label for="address">လိပ်စာ</label>
					    		</div>
					    		<div class="col-sm-6 text-left">
								<textarea class="form-control form-control-alternative" rows="3" placeholder="အသေးစိတ်ထည့်ရန်" id='address' name="loacationaddress"><?php echo e(old('loacationaddress')); ?></textarea>
					    		</div>
					    	</div>
					           
					    </div>
					</fieldset>
	  			</div>
	  		</div>
	  </div> 
	  <div class="tab">
	  	<p>&nbsp;ဆိုင်၊အလုပ်ဌာနရှိ နိုင်ငံသားအလုပ်သမားအရေအတွက် - </p>
   			 <div class="row">
				<div class="col-sm-12">
					<table border="1" style="width:100%;table-layout:fixed;border-spacing:20px 40px;font-size:16px; line-height:24px; font-weight:100;" class="bodywrapcenter">
						<thead>
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
								<td><input type='text' value=0 name="AMenWorker" id="AMenWorker" class="form-control" onkeyup="converunistring('amen')"></td>
								<td><input type='text' value=0 name="AWomenWorker" id="AWomenWorker" class="form-control" onkeyup="converunistring('awomen')"></td>
								<td><input type='text'value=0 name="CMenWorker" id="CMenWorker" class="form-control" onkeyup="converunistring('cman')"></td>
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
								<td><input type='text' value=0 name="PieceWomenWorker" id="PieceWomenWorker" class="form-control" onkeyup="converunistring('women')"></td>
								<td><input type='text' value=0 name="APieceMenWorker" id="APieceMenWorker" class="form-control" onkeyup="converunistring('amen')"></td>
								<td><input type='text' value=0 name="APieceWomenWorker" id="APieceWomenWorker" class="form-control" onkeyup="converunistring('awomen')"></td>
								<td><input type='text' value=0 name="CPieceMenWorker" id="CPieceMenWorker" class="form-control" onkeyup="converunistring('cman')"></td>
								<td><input type='text' value=0 name="CPieceWomenWorker" id="CPieceWomenWorker" class="form-control" onkeyup="converunistring('cwomen')"></td>
							</tr>
							<tr>
								<th>စုစုပေါင်း</th>
								<td><input type='text' value=0  id="totalmen" class="form-control"></td>
								<td><input type='text' value=0 id="totalWomen" class="form-control"></td>
								<td><input type='text' value=0 id="totalaman" class="form-control"></td>
								<td><input type='text' value=0 id="totalawomen" class="form-control"></td>
								<td><input type='text' value=0 id="totalcman" class="form-control"></td>
								<td><input type='text' value=0 id="totalcwomen" class="form-control"></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div> <br>
			<input type="hidden" id="total_man" name="totalMaleWorker">
			<input type="hidden" id="total_women" name="totalFemaleWorker">

			

			<p>&nbsp;ဆိုင်၊အလုပ်ဌာနရှိ နိုင်ငံခြားသားအလုပ်သမားအရေအတွက် - </p>
   			 <div class="row">
				<div class="col-sm-12">
					<table border="1" style="width:100%;table-layout:fixed;border-spacing:20px 40px;font-size:16px; line-height:24px; font-weight:100;" class="bodywrapcenter">
						<thead>
							<tr>
								<th></th>
								<th> ကျား</th>
								<th>မ </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th style="width: 100px;">လခစား</th>
								<td><input type='text' value=0 name="MForeignerMenWorker" id="MForeignerMenWorker" class="form-control" onkeyup="foreginerWorker('man')"></td>
								<td><input type='text' value=0 name="MForeignerWomenWorker" id="MForeignerWomenWorker" class="form-control" onkeyup="foreginerWorker('women')"></td>
							</tr>
							<tr>
								<th>နေ့စား</th>
								<td><input type='text' value=0 name="DailyForeignerMenWorker" id="DailyForeignerMenWorker" class="form-control" onkeyup="foreginerWorker('man')"></td>
								<td><input type='text' value=0 name="DailyForeignerWomenWorker" id="DailyForeignerWomenWorker" class="form-control" onkeyup="foreginerWorker('women')"></td>
							</tr>
							<tr>
								<th>ပုတ်ပြတ်</th>
								<td><input type='text' value=0 name="PForeignerMenWorker" id="PForeignerMenWorker" class="form-control" onkeyup="foreginerWorker('man')"></td>
								<td><input type='text' value=0 name="PForeignerWomenWorker" id="PForeignerWomenWorker" class="form-control" onkeyup="foreginerWorker('women')"></td>
							</tr>
							<tr>
								<th>စုစုပေါင်း</th>
								<td><input type='text' value=0 name="totalforeignmen" id="totalforeignmen" class="form-control"></td>
								<td><input type='text' value=0 name="totalforeignwomen" id="totalforeignwomen" class="form-control"></td>
							</tr>
						</tbody>
					</table> <br>
				</div>
			</div> <br>
			
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
										   <option value="<?php echo e($s->id); ?>" <?php if(old('section_id')==$s->id): ?> selected <?php endif; ?>><?php echo e($s->SectionName); ?></option>
										  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									  </select>
								  </div>
								  <div class="col-sm-1">

								  </div>
								  <div class="col-sm-6">
									  <label for="division_id">Division</label>
									   <select name="division_id" id="division_id" class="form-control">
									   <option value="<?php echo e(old('division_id')); ?>">Choose Division</option>
									  </select>
								  </div>
							   </div>

							   <div class="row">
								  <div class="col-sm-5 text-center">
									  <label for="group_id">Group</label>
									  <select name="group_id" id="group_id" class="form-control">
									  <option value="<?php echo e(old('group_id')); ?>">Choose Group</option>
									 </select>
								 </div>
								 <div class="col-sm-1">

								 </div>
								 <div class="col-sm-6">
									 <label for="class_name">Class</label>
									  <select name="class_name" id="class_name" class="form-control">
									  <option value="<?php echo e(old('class_name')); ?>">Choose Class</option>
									 </select>
								 </div>
							  </div>

						  </div>
					  </fieldset>
					</div>
				</div>
			
	  </div>
	  <div class="tab">
	  	
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<label for="PropertyType">ပိုင်ဆိုင်မှုအမျိုးအစား</label>
					  
					  <select name="PropertyType" id="PropertyType" class="form-control">
						<option value="နိုင်ငံ" <?php if(old('PropertyType')=='နိုင်ငံ'): ?> selected <?php endif; ?>>နိုင်ငံ</option>
						<option value="သမဝါယမ" <?php if(old('PropertyType')=='သမဝါယမ'): ?> selected <?php endif; ?>>သမဝါယမ</option>
						<option value="ပုဂ္ဂလိက" <?php if(old('PropertyType')=='ပုဂ္ဂလိက'): ?> selected <?php endif; ?>>ပုဂ္ဂလိက</option>
						<option value="နိုင်ငံခြား" <?php if(old('PropertyType')=='နိုင်ငံခြား'): ?> selected <?php endif; ?>>နိုင်ငံခြား</option>
						<option value="ဖက်စပ်" <?php if(old('PropertyType')=='ဖက်စပ်'): ?> selected <?php endif; ?>>ဖက်စပ်</option>
					</select>
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
					<label for="Investment">ရင်းနှီးမြှုပ်နှံမှု (LDI/FDI)</label>
					
					<select name="Investment" id="investment" class="form-control">
						<option value="LDI" <?php if(old('Investment')=='LDI'): ?> selected <?php endif; ?>>LDI</option>
						<option value="FDI" <?php if(old('Investment')=='FDI'): ?> selected <?php endif; ?>>FDI</option>
					</select>
	  			</div>
	  		</div>
	  		  	
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<label for="MonthlyAmounts">တစ်လထုတ်လုပ်နိုင်မှုပမာဏ</label>
				  <input id="MonthlyAmounts" class="form-control" name="MonthlyAmounts" value="<?php echo e(old('MonthlyAmounts')); ?>">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
					<label for="UsedPower">အသုံးပြုသည့်စွမ်းအင်</label>
	  				<input id="UsedPower" class="form-control" name="UsedPower" value="<?php echo e(old('UsedPower')); ?>">
	  			</div>
	  		</div>
	  	
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<label for="ProducedProduct">ထုတ်လုပ်သည့်ပစ္စည်း (အဓိက)</label>
	  				<input id="ProducedProduct" class="form-control" name="ProducedProduct" required="" value="<?php echo e(old('ProducedProduct')); ?>">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
	  				<label for="ProducedOthers">ထုတ်လုပ်သည့်ပစ္စည်း(အခြား)</label>
	  				<input id="ProducedOthers" class="form-control" name="ProducedOthers" value="<?php echo e(old('ProducedOthers')); ?>">
	  			</div>
	  		</div>
			  
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<label for="RawMaterials">ကုန်ကြမ်းရရှိမှု</label>
	  				<input id="RawMaterials" class="form-control" name="RawMaterials" value="<?php echo e(old('RawMaterials')); ?>">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
	  				<label for="Goods">ကုန်ချောတင်ပို့မှု</label>
	  				<input id="Goods" class="form-control" name="Goods" value="<?php echo e(old('Goods')); ?>">
	  			</div>
	  		</div>
  		
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
					<label for="datepicker"><span style="color:red;">*</span> အလုပ်ရုံစတင်လုပ်ကိုင်သောရက်စွဲ</label>
		  			<input type="date" class="form-control" name="StartDate" id="datepicker" value="<?php echo e(old('StartDate')); ?>">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
	  				
	  			</div>
	  		</div>
  		
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<fieldset class="scheduler-border">
					    <legend class="scheduler-border">E/C အလုပ်ခန့်ထားမှု စာချူပ်</legend>
					    <div class="control-group">
							 <div class="row">
							 	<div class="col-sm-6 text-center">
							 		<div class="custom-control custom-radio mb-3">
									  <input class="custom-control-input" id="customRadio" name="Contract" type="radio" value=0 checked>
									  <label class="custom-control-label" for="customRadio">ဆောင်ရွက်ဆဲ</label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="custom-control custom-radio mb-3">
										<input  class="custom-control-input" id="customRadio0"  type="radio" name="Contract" value=1 <?php if(old('Contract')=='1'): ?> checked <?php endif; ?>>
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
								<div class="col-sm-6">
									<div class="custom-control custom-radio mb-3">
										<input  class="custom-control-input" id="overtime1"  type="radio" name="OverTime" value=1 <?php if(old('OverTime')=='1'): ?> checked <?php endif; ?>>
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
										  <input class="custom-control-input" id="permission" name="OTPermit" type="radio" value=0 checked>
										  <label class="custom-control-label" for="permission">ယူ</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="permission1"  type="radio" name="OTPermit" value=1 <?php if(old('OTPermit')=='1'): ?> checked <?php endif; ?>>
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
									<div class="col-sm-6">
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
										  <input  class="custom-control-input" id="customRadio1" name="NoticeStatus" type="radio" value=0 checked>
										  <label class="custom-control-label" for="customRadio1">ပြီး</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="customRadio2"  type="radio" name="NoticeStatus" value=1 <?php if(old('NoticeStatus')=='1'): ?> checked <?php endif; ?>>
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
										  <input  class="custom-control-input" id="Workplace_safe" name="SafteySide" type="radio" value=0 checked>
										  <label class="custom-control-label" for="Workplace_safe">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="Workplace_safe1"  type="radio" name="SafteySide" value=1 <?php if(old('SafteySide')=='1'): ?> checked <?php endif; ?>>
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
										  <input  class="custom-control-input" id="administrativework" name="ManagementExpert" type="radio" value=0 checked>
										  <label class="custom-control-label" for="administrativework">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-6">
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
								<div class="col-sm-6">
									<div class="custom-control custom-radio mb-3">
										<input  class="custom-control-input" id="Welfare1"  type="radio" name="Welfare"  value=1 <?php if(old('Welfare')=='1'): ?> checked <?php endif; ?>>
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
								  <div class="col-sm-6">
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
										<input  class="custom-control-input" id="SafetyHealth" name="SafetyHealth" type="radio" value='ရှိ'>
										<label class="custom-control-label" for="SafetyHealth" onclick="SafetyHealth('1')">ရှိ</label>
									  </div>
								  </div>
								  <div class="col-sm-6">
									  <div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="SafetyHealth1"  checked type="radio" name="SafetyHealth" value='မရှိ' <?php if(old('SafetyHealth')=='မရှိ'): ?> checked <?php endif; ?> >
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
	  </div>
	  <div class="tab">
	  		<div class="row">
				<div class="col-sm-12">
					<table border="1" style="width:100%;table-layout:fixed;border-spacing:20px 40px;font-size:16px; line-height:24px; font-weight:100;" class="bodywrapcenter">
						<thead>
							<tr>
								<th> </th>
								<th>ကျား</th>
								<th>မ </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>နိုင်ငံသားလုပ်သား</th>
								<td><input type='text' value=0  class="form-control" name="CitizenMenWorker" id="CitizenMenWorker"></td>
								<td><input type='text' value=0  class="form-control" name="CitizenWomenWorker" id="CitizenWomenWorker"></td>
							</tr>
							<tr>
								<th>နိုင်ငံခြားသားလုပ်သား</th>
								<td><input type='text' value=0  class="form-control" name="ForeignerMenWorker" id="ForeignerMenWorker"></td>
								<td><input type='text' value=0  class="form-control" name="ForeignerWomenWorker" id="ForeignerWomenWorker"></td>
							</tr>
						</tbody>
					</table> <br>
				</div>
			</div>
		
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="max_min_salary"><span style="color:red;">*</span> အနည်းဆုံးလစာ</label>
					  <input id="max_min_salary" class="form-control" name="MinimumSalary" value="<?php echo e(old('MinimumSalary')); ?>">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-center">
		  				<label for="max_min_salary"><span style="color:red;">*</span> အများဆုံးလစာ</label>
		  				<input id="max_min_salary" class="form-control" name="MaximumSalary" value="<?php echo e(old('MaximumSalary')); ?>">
		  			</div>
		  		</div>

		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="datepicker">လစာပေးရက်</label>
						  
						  <select name="SalaryDate" id="SalaryDate" class="form-control">
							<option value="လကုန်ရက်" <?php if(old('SalaryDate')=='ညှိနှိုင်းရေးမှူး'): ?> selected <?php endif; ?>>လကုန်ရက်</option>
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
		  			<!-- <div class="col-sm-6 text-center">
		  				<label for="Welfare">သက်သာချောင်ချိရေး ဆောင်ရွက်မှုကိစ္စ</label>
		  				<input id="Welfare" name="Welfare">
		  			</div> -->
		  		</div>
	  	
	  		
	  
	       <p>&nbsp;အလုပ်ချိန်/ထမင်းစားနားချိန်</p>
		       <div class="row">
		       		<div class="col-sm-5">
		       			<select name="WorkTimeType" id="worklaw" class="form-control">
				        	<option value="0">
				        		ဆိုင်များနှင့် အလုပ်ဌာနများ နည်းဥပဒေ (၇)
				        	</option>
				        	<option value="1">
				        		ဆိုင်များနှင့် အလုပ်ဌာနများ နည်းဥပဒေ (၈)
				        	</option>
		        		</select> <br>
		       		</div>
		       </div>
	        
	       
		  		<div class="row" id="law1">
		  			<div class="col-sm-12 text-center"> 
		  				တူညီသောအလုပ်ချိန်တွင် အလုပ်လုပ်ခြင်းဆိုင်ရာ နို့တစ်စာ
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">ဆိုင်များနှင့် အလုပ်ဌာနများ နည်းဥပဒေ (၇)</legend>
						    <div class="control-group">
						    	<div class="row">
						    		<div class="col-sm-4 text-center">
						    			အလုပ်စသည့်အချိန်
						    		</div>
						    		<div class="col-sm-4 text-right">
						    			 <input class="form-control" type="time" name="StartWorkTime" id="example-time-input" value="<?php echo e(old('StartWorkTime')); ?>">
						    		</div>
						    	</div> <br>
						    	<div class="row">
						    		<div class="col-sm-4 text-center">
						    			အလုပ်ပြီးသည့်အချိန်
						    		</div>
						    		<div class="col-sm-4 text-right">
						    			 <input class="form-control" type="time" name="EndWorkTime" id="example-time-input" value="<?php echo e(old('EndWorkTime')); ?>">
						    		</div>
						    	</div> <br>
						    	<div class="row">
						    		<div class="col-sm-4 text-center">
						    			အားလပ်ချိန်
						    		</div>
						    		<div class="col-sm-4">
						    			<div class="row">
						    				<div class="col-sm-6">
						    					<label for="example-time-input">မှ</label>
						    					 <input class="form-control" type="time" name="freetimefrom" id="example-time-input" value="<?php echo e(old('freetimefrom')); ?>">
						    				</div>
						    				<div class="col-sm-6">
						    					<label id="example-time-input">အထိ</label>
						    					<input class="form-control" type="time" name="freetimeto" id="example-time-input" value="<?php echo e(old('freetimeto')); ?>"> 
						    				</div>
						    				
						    			</div>
						    			
						    			 
						    		</div> 
						    	</div> <br>
						        
						         	<div class="row">
						         		<div class="col-sm-3 text-center">
						         			<label for="closeworkdays">ရက်သတ္တပတ်အလုပ်ပိတ်ရက် </label>
						         		</div>
						         		<div class="col-sm-5">
										 <input  name="closeworkdays" id="closeworkdays" class="closeworkdays form-control" value="<?php echo e(old('closeworkdays')); ?>">
						         		</div>
						         	</div>
						    	
						    	<p>
						    		ရက်သတ္တပတ်အလုပ်ပိတ်ရက်ဖြစ်သည့် နေ့များတွင် ဆိုင်/အလုပ်ဌာနရှိ အလုပ်သမားများ အား ရက်သတ္တပတ်လျှင် အနည်းဆုံးတစ်ရက်ကို လုပ်ခလစာပြည့်ဖြင့် အလှည့်ကျ နားခွင့်ပေးမည်ဖြစ်ပါကြောင်း ။
						    	</p>
						    </div>
						</fieldset>
		  			</div>
		  		</div>
		  		<div class="row" id="law2">
		  			<div class="col-sm-12 text-center">
		  				အလုပ်လုပ်ရန်ကာလအပိုင်းအခြားဆိုင်ရာ နို့တစ်စာ
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">ဆိုင်များနှင့် အလုပ်ဌာနများ နည်းဥပဒေ (၈)</legend>
						    <div class="control-group">
						     
						    </div>
						</fieldset>
		  			</div>
		  		</div>

		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="signname"><span style="color:red;">*</span> စစ်ဆေးသူ အမည်</label>
					    <input id="signname" class="form-control" name="SignatureName" value="<?php echo e(old('SignatureName')); ?>">
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
		  	 		<input type="file"  name="WorkingTimeNotice" id='WorkingTimeNotice' class="form-control">
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
		  	 		<input type="file"  name="WorkStartInform" id='WorkStartInform' class="form-control">
		  		</div>
	  		</div>
	  	<div class="blank10"></div>
	  		<div class="row">
		  		<div class="col-sm-4 text-right">
		  			<label for="ec_contract">E/C အလုပ်ခန့်ထားမှုစာချူပ်</label>
		  		</div>
		  		<div class="col-sm-8">
		  	 		<input type="file"  name="ec_contract" id='ec_contract' class="form-control">
		  		</div>
	  		</div>	
	  	<div class="blank10"></div>
	  	<div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="MICLicense">MIC ခွင့်ပြုချက်</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" name="MICLicense" id='MICLicense' class="form-control">
	  		</div>
	  	</div>
		  <div class="blank10"></div>
	  	<div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="CompanyNrc">ကုမ္ပဏီမှတ်ပုံတင်</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file"  name="CompanyNrc" id='CompanyNrc' class="form-control">
	  		</div>
	  	</div>
		  <div class="blank10"></div>
	  	<div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="IndustryLicense">စက်မှု(၁) လိုင်စင်</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" name="IndustryLicense" id='IndustryLicense' class="form-control">
	  		</div>
	  	</div>
		  <div class="blank10"></div>
	  	<div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="Import_Export_License">ထုတ်ကုန်/သွင်းကုန်လိုင်စင်</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" name="Import_Export_License" id='Import_Export_License' class="form-control">
	  		</div>
	  	</div>
		  <div class="blank10"></div>
	  	<div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="Municipal_License">စည်ပင်လိုင်စင်</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file"  name="Municipal_License" id='Municipal_License' class="form-control">
	  		</div>
	  	</div>	
	  	<div class="blank10"></div>
		<div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="other_license1">အခြားလိုင်စင် (၁)</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file"  name="other_license1" id='other_license1' class="form-control">
	  		</div>
	  	</div>	
		  <div class="blank10"></div>
	  	<div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="other_license2">အခြားလိုင်စင် (၂)</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file"  name="other_license2" id='other_license2' class="form-control">
	  		</div>
	  	</div>	
		  <div class="blank10"></div>
	  	<div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="other_license3">အခြားလိုင်စင် (၃)</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" name="other_license3" id='other_license3' class="form-control">
	  		</div>
	  	</div>	
		  <div class="balnk10"></div>
	  	<div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="other_license4">အခြားလိုင်စင် (၄)</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" name="other_license4" id='other_license4' class="form-control">
	  		</div>
	  	</div>
		  <div class="blank10"></div>
	  	<div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="other_license5">အခြားလိုင်စင် (၅)</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" name="other_license5" id='other_license5' class="form-control">
	  		</div>
	  	</div>
		  <div class="blank10"></div>
		  	<div class="row">
		  		<div class="col-sm-4 text-right">
		  			<label for="other_license6">အခြားလိုင်စင် (၆)</label>
		  		</div>
		  		<div class="col-sm-8">
		  	 		<input type="file" name="other_license6" id='other_license6' class="form-control">
		  		</div>
		  	</div>	
		  	
	  	<br>  	 
	  </div>
	  <div class="blank10"></div>
	  <div style="overflow:auto;">
	    <div style="float:right;">
	      <button type="button" id="prevBtn" onclick="nextPrev(-1)">ရှေ့တစ်မျက်နှာ</button>
	      <button type="button" id="nextBtn" onclick="nextPrev(1)">နောက်တစ်မျက်နှာ</button>
	    </div>
	  </div>
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
// $(document).ready(function(){
//     $('.timepicker').timepicker({});
// });

$( "#worklaw" ).change(function() {
  	var worklaw=$( "#worklaw" ).val();
	if(worklaw==0){
		$("#law1").css("display","block");
		$("#law2").css("display","none");
	}else{
		$("#law1").css("display","none");
		$("#law2").css("display","block");
	}
});
$('#tempoarySave').click(function(){
	$("#tempoary").val('tempoary');
	document.getElementById("regForm").submit();
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

///for workt type shop
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
//end

//sum citizen worker
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
	$('#totalmen').val(sum);
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
	var man1=document.getElementById("totalmen").value;
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
// alert(summan);
var woman=parseInt(mywomen1)+parseInt(mywomen2)+parseInt(mywomen3);
var totalwoman = woman.toString();
var sumwoman=totalwoman.replace(/[0123456789]/g,function(s){
	return myanDigits[s];
});
$('#total_women').val(sumwoman);
$('#CitizenWomenWorker').val(summan);

}

//end


///sum foreigner total 
function foreginerWorker(type){
	if(type=='man'){
		var num1=document.getElementById("MForeignerMenWorker").value;
		var num2=document.getElementById('DailyForeignerMenWorker').value;
		var num3=document.getElementById('PForeignerMenWorker').value;
	}else if(type=='women'){
		var num1=document.getElementById("MForeignerWomenWorker").value;
		var num2=document.getElementById('DailyForeignerWomenWorker').value;
		var num3=document.getElementById('PForeignerWomenWorker').value;
	}
	
	
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
	//sum total
	var num4=parseInt(mynum1)+parseInt(mynum2)+parseInt(mynum3);
	var num5=num4.toString();
	var sum=num5.replace(/[0123456789]/g,function(s){
		return myanDigits[s];
	});

	if(type=='man'){
	//sum for man
	$('#totalforeignmen').val(sum);
	$('#ForeignerMenWorker').val(sum);

	}else if(type=='women'){
		$('#totalforeignwomen').val(sum);
		$('#ForeignerWomenWorker').val(sum);

	}

}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>