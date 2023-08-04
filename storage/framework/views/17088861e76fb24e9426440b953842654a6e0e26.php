<?php $__env->startSection('content'); ?>

	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

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
	<?php if(session()->get('success')): ?>
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<span class="alert-inner--icon"></span>
			<span class="alert-inner--text">  <?php echo e(session()->get('success')); ?>  </span>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php endif; ?>

<h1>အလုပ်သမားဥပဒေစစ်ဆေးရေး</h1>
	<br>
	<div class="row">
			<div class="col-sm-12 text-right">
				<button  name="tempoarySave" id="tempoarySave">ယာယီသိမ်းဆည်းမည် </button>
			</div>
    </div>

<form id="shopinspect" action="<?php echo e(route('ShopLabourInspectionLaw.store')); ?>" method="post">
	 <?php echo e(csrf_field()); ?>

	 <div style="text-align:center;margin-top:40px;">
	    <a  style="text-decoration: none;" onclick="nextPrevv(0)"><span class="step">1</span></a>
	    <span class="step" onclick="nextPrevv(1)">2</span>
	  </div> <br>


<div class="tab">
    <h3 class="text-center text-primary">၁၉၅၁ ခွင့်ရက်နှင့် အလုပ်ပိတ်ရက် ဥပဒေ</h3> <br>
  	<legend class="scheduler-border"> တစ်နှစ်အတွင်းကျရောက်သည့် အများအလုပ်ပိတ်ရက်အရေအတွက်</legend>
<div class="row"> 
<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အများအလုပ်ပိတ်ရက်တွင်ဆိုင်/အလုပ်ဌာနကို ပိတ်ထားခြင်း  </legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="numholidays" name="numholidays" type="radio" value="ရှိ" <?php if($tempshopLabourLaw->numholidays=='ရှိ'): ?> checked <?php endif; ?>>
										  <label class="custom-control-label" for="numholidays">ရှိ </label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="numholidays1" type="radio" name="numholidays" value="မရှိ" <?php if($tempshopLabourLaw->numholidays=='မရှိ'): ?> checked <?php endif; ?>>
											<label class="custom-control-label" for="numholidays1"> မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			
		  		</div>

		  		<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အလုပ်သမားများအား အများအလုပ်ပိတ်ရက် ခံစားခွင့်</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="opportunityhol" name="opportunityhol" type="radio" value="ပြု" <?php if($tempshopLabourLaw->opportunityhol=='ပြု'): ?> checked <?php endif; ?>>
										  <label class="custom-control-label" for="opportunityhol">ပြု</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="opportunityhol1"  type="radio" name="opportunityhol" value="မပြု" <?php if($tempshopLabourLaw->opportunityhol=='မပြု'): ?> checked <?php endif; ?>>
											<label class="custom-control-label" for="opportunityhol1"> မပြု</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			
		  		</div>
		  	</div>
		  	<div class="row">
				<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အများအလုပ်ပိတ်ရက်တွင် အလုပ်ဆင်းသော အလုပ်သမားများအား သတ်မှတ်ထားသော လုပ်ခ ကိုပေးချေခြင်း</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="paidwage" name="paidwage" type="radio" value="ရှိ" <?php if($tempshopLabourLaw->paidwage=='ရှိ'): ?> checked <?php endif; ?>>
										  <label class="custom-control-label" for="paidwage">ရှိ </label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="paidwage1"  type="radio" name="paidwage" value="မရှိ" <?php if($tempshopLabourLaw->paidwage=='မရှိ'): ?> checked <?php endif; ?>>
											<label class="custom-control-label" for="paidwage1"> မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			
		  		</div>
		  	</div>
		  	<legend class="scheduler-border">တစ်နှစ်လျှင် ခွင့်ပြုသော လုပ်သက်ခွင့် အရေအတွက်</legend>

<div class="row"> 
	<div class="col-sm-6 text-center">
		<fieldset class="scheduler-border">
			<legend class="scheduler-border">လုပ်သက်ခွင့်ရက်ကို နှစ်စဉ် ခံစားခွင့်  </legend>
				<div class="control-group">
					<div class="row">
						<div class="col-sm-6 text-center">
							<div class="custom-control custom-radio mb-3">
								<input  class="custom-control-input" id="vacationdays" name="vacationdays" type="radio" value="ပေး" <?php if($tempshopLabourLaw->vacationdays=='ပေး'): ?> checked <?php endif; ?>>
								<label class="custom-control-label" for="vacationdays">ပေး </label>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="custom-control custom-radio mb-3">
								<input  class="custom-control-input" id="vacationdays1"  type="radio" name="vacationdays" value="မပေး" <?php if($tempshopLabourLaw->vacationdays=='မပေး'): ?> checked <?php endif; ?>>
									<label class="custom-control-label" for="vacationdays1"> မပေး</label>
							</div>
						</div>
					</div>
				</div>
		</fieldset>
		  			
	</div>

	<div class="col-sm-6 text-center">
		<fieldset class="scheduler-border">
			<legend class="scheduler-border">အလုပ်မှ နုတ်ထွက် ထုတ်ပြစ်သော လုပ်သားများအား ခွင့်ရက်အစား အခကြေးငွေကို ရှင်းပေးခြင်း</legend>
				<div class="control-group">
					<div class="row">
						<div class="col-sm-6 text-center">
							<div class="custom-control custom-radio mb-3">
								<input  class="custom-control-input" id="workerfrees" name="workerfrees" type="radio" value="ရှိ" <?php if($tempshopLabourLaw->workerfrees=='ရှိ'): ?> checked <?php endif; ?>>
								<label class="custom-control-label" for="workerfrees">ရှိ </label>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="custom-control custom-radio mb-3">
								<input  class="custom-control-input" id="workerfrees1"  type="radio" name="workerfrees" value="မရှိ" <?php if($tempshopLabourLaw->workerfrees=='မရှိ'): ?> checked <?php endif; ?>>
									<label class="custom-control-label" for="workerfrees1"> မရှိ</label>
							</div>
						</div>
					</div>
				</div>
		</fieldset>
		  			
	</div>

		 
</div>


<div class="row">
	<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border"> နှစ်စဉ်ခံစားခြင်းမရှိပါက သုံးနှစ်ထိ စုဆောင်းမှု </legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="annual" name="annual" type="radio" value="ရှိ" <?php if($tempshopLabourLaw->annual=='ရှိ'): ?> checked <?php endif; ?>>
										  <label class="custom-control-label" for="annual">ရှိ </label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="annual1"  type="radio" name="annual" value="မရှိ" <?php if($tempshopLabourLaw->annual=='မရှိ'): ?> checked <?php endif; ?>>
											<label class="custom-control-label" for="annual1"> မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			
	</div>
	<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">နှစ်ဦးသဘောတူ အထောက်အထား </legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="contract" name="contract" type="radio" value="ရှိ" <?php if($tempshopLabourLaw->contract=='မရှိ'): ?> checked <?php endif; ?>>
										  <label class="custom-control-label" for="contract">ရှိ </label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="contract1"  type="radio" name="contract" value="မရှိ" <?php if($tempshopLabourLaw->contract=='မရှိ'): ?> checked <?php endif; ?>>
											<label class="custom-control-label" for="contract1"> မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			
		  		</div>
	
		</div>
		<div class="row">
  			<div class="col-sm-6">
  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border"> ခွင့်ရက်မှတ်ပုံတင်စာအုပ်နှင့် မှတ်တမ်းများ စနစ်တကျထားခြင်း </legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="registrationbook" name="registrationbook" type="radio" value="ရှိ" <?php if($tempshopLabourLaw->registrationbook=='ရှိ'): ?> checked <?php endif; ?>>
										  <label class="custom-control-label" for="registrationbook">ရှိ </label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="registrationbook1"  type="radio" name="registrationbook" value="မရှိ" <?php if($tempshopLabourLaw->registrationbook=='မရှိ'): ?> checked <?php endif; ?>>
											<label class="custom-control-label" for="registrationbook1"> မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
				</fieldset>
  		</div>
  		<div class="col-sm-6">
  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border"> တစ်နှစ်လျှင် ခံစားခွင့်ပြုသော  ဆေးလက်မှတ် အရေအတွက် </legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-12">
                                     <input type="text" name="medicalticketqan" value="<?php echo e($tempshopLabourLaw->medicalticketqan); ?>"/>
								 	</div>
								 </div>
						    </div>
				</fieldset>
  		</div>
  	</div>

</div>
<div class="tab">
        <h3 class="text-center text-primary">၁၉၅၁ ခွင့်ရက်နှင့် အလုပ်ပိတ်ရက် ဥပဒေ</h3> <br>
<p>
		<div class="row">
				<div class="col-sm-12 text-center">
					<table class="table table-bordered" id="medicalnotallowworker">  
					  <tr>
						  <th>ခံစားခွင့် မရသော အလုပ်သမားရှိက ဖော်ပြရန်</th>
						  <th>Action</th>
					  </tr>
					  <tr>  
						  <td><input type="text" name="addmore[0][medicalworker]" placeholder="အလုပ်သမားအမည်" class="form-control" /></td>  
						  <td><button type="button" name="addmedicalworker" id="addmedicalworker" class="btn btn-success">ထပ်ထည့်ရန်</button></td>  
					  </tr>  
				  </table>
				</div>
		</div>
</p>
	<div class="row">
		<div class="col-sm-6 text-center">
        <textarea class="col-sm-12" rows="4" placeholder="ယခင်က ပြစ်မှုထင်ရှား စီရင်ခြင်း ခံရလျှင် အဆိုပါ အကြောင်းအရာများကို ဖော်ပြရန်" id="letter" name="passionremark"><?php echo e($tempshopLabourLaw->passionremark); ?></textarea>		
		  			
		</div>
		<div class="col-sm-6 text-center">
		  	<textarea class="col-sm-12" rows="4" placeholder="အထွေထွေမှတ်ချက်များ" id="letter" name="generalremark"><?php echo e($tempshopLabourLaw->generalremark); ?></textarea>		
		  			
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 text-center">
		  	<textarea class="col-sm-12" rows="4" placeholder="အထက်အရာရှိမှတ်ချက်" id="letter" name="officeremark"><?php echo e($tempshopLabourLaw->officeremark); ?></textarea>		
		  			
		</div>
		
    </div>
    <hr>
    <h3 class="text-center text-primary">၂၀၁၆ ခုနှစ် ဆိုင်များနှင့်အလုပ်ဌာနများ အက်ဥပေဒေ</h3>
    <p>
            <div class="row">
               <div class="col-sm-12">
                    <label for="workduration">ဆိုင်/အလုပ်ဌာန၏ အလုပ်ချိန်ကာလအပိုင်းအခြား</label>
                    <textarea rows="4" class="col-sm-12" name="work_duration" id="workduration">  
                        <?php echo e($tempshopLabourLaw->work_duration); ?> 
                    </textarea>
                </div>
                                    
            </div>
        </p>
         <!-- //for factory id -->
    <input type="hidden" name="shop_id" id="shop_id" value="<?php echo e($tempshopLabourLaw->shop_id); ?>">
  <!-- For new design-->
            <p>
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">အလုပ်ချိန်နို.တစ်စာပုံစံ ၁(က)/ ၁(ခ)/ ၁(ဂ) ကိုချိတ်ထားခြင်း</legend>
                            <div class="control-group">
                                 <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input class="custom-control-input" id="worktimenotice" name="worktime_notice" type="radio" value="ပြု" <?php if($tempshopLabourLaw->worktime_notice=='ပြု'): ?> checked <?php endif; ?>>
                                          <label class="custom-control-label" for="worktimenotice">ပြု</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="worktimenotice1"  type="radio" name="worktime_notice" value="မပြု" <?php if($tempshopLabourLaw->worktime_notice=='မပြု'): ?> checked <?php endif; ?>>
                                            <label class="custom-control-label" for="worktimenotice1">မပြု</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">အလုပ်သမား မှတ်ပုံတင်စာအုပ် ပုံစံ (၂)</legend>
                            <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="SSB" name="SSB" type="radio" value="ထား" <?php if($tempshopLabourLaw->SSB=='ထား'): ?> checked <?php endif; ?>>
                                          <label class="custom-control-label" for="SSB">ထား</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="SSB1"  type="radio" name="SSB" value="မထား" <?php if($tempshopLabourLaw->SSB=='မထား'): ?> checked <?php endif; ?>>
                                            <label class="custom-control-label" for="SSB1">မထား</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </p>
  <!--end of new design-->
  <!-- For new design-->
            
            <p>
                <div class="row">               
                    <div class="col-sm-5 text-center">
                            <fieldset class="scheduler-border">
                            <legend class="scheduler-border">အခကြေးငွေကို လကုန်ပြီး(၇)ရက်အတွင်း</legend>
                            <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="salarytime" name="salary_time" type="radio" value="ပေး" <?php if($tempshopLabourLaw->salary_time=='ပေး'): ?> checked <?php endif; ?>>
                                          <label class="custom-control-label" for="salarytime">ပေး</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="salarytime1"  type="radio" name="salary_time" value="မပေး" <?php if($tempshopLabourLaw->salary_time=='မပေး'): ?> checked <?php endif; ?>>
                                            <label class="custom-control-label" for="salarytime1">မပေး</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6 text-center">
                      <label for="weekendholiday">ရက်သတ္တပတ်ပိတ်ရက်</label>
                    <input type="text" id='weekendholiday' name="weekend_holiday" value="<?php echo e($tempshopLabourLaw->weekend_holiday); ?>"/>
                    </div>
                </div>
            </p>

	<div class="row">
		<div class="col-sm-4 text-right">
			<label id="inspectionname">စစ်ဆေးသူအရာရှိအမည်</label>
		</div>
		<div class="col-sm-5 text-center">
		  		<input type="text" name="inspectionname" id="inspectionname" value="<?php echo e($tempshopLabourLaw->inspectionname); ?>">	
		  			
		</div>
	</div>
		  	

</div>
<div style="overflow:auto;">
	    <div style="float:right;">
	      <button type="button" id="prevBtn" onclick="nextPrev(-1)">ရှေ့တစ်မျက်နှာ</button>
	      <button type="button" id="nextBtn" onclick="nextPrev(1)">နောက်တစ်မျက်နှာ</button>
	    </div>
	  </div>
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
    document.getElementById("shopinspect").submit();
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
    document.getElementById("shopinspect").submit();
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


var i = 0;
       
	   $("#addmedicalworker").click(function(){
	  
		   ++i;
	  
		   $("#medicalnotallowworker").append('<tr><td><input type="text" name="addmore['+i+'][medicalworker]" placeholder="အလုပ်သမားအမည်" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
	   });
	  
	   $(document).on('click', '.remove-tr', function(){  
			$(this).parents('tr').remove();
	   });  

 //for tempoary save
 $('#tempoarySave').click(function(){
	    $("#tempoary").val('tempoary');
	document.getElementById("shopinspect").submit();
});

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>