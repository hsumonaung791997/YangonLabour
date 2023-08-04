<?php $__env->startSection('content'); ?>
  	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script type='text/javascript'>
$(function(){
$('#datepicker').datepicker({
    calendarWeeks: true,
    todayHighlight: true,
    autoclose: true
});  
});
$(function(){
$('#datepicker1').datepicker({
    calendarWeeks: true,
    todayHighlight: true,
    autoclose: true
});  
});
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
        <?php if(session()->get('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-inner--icon"></span>
                <span class="alert-inner--text">  <?php echo e(session()->get('success')); ?>  </span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        
        
   

    <h1 style="text-align:center;margin-bottom:40px;">ပြည်ထောင်စုသမ္မတမြန်မာနိုင်ငံတော်<br>အလုပ်သမား၊ လူဝင်မှုကြီးကြပ်ရေးနှင့် ပြည်သူ့အင်အားဝန်ကြီးဌာန<br>အလုပ်ရုံနှင့် အလုပ်သမားဥပ ဒေစစ်ဆေးရေးဦးစီးဌာန<br>လုပ်ငန်းခွင်ထိခိုက်မှုအကြောင်းကြားခြင်းပုံစံ</h1>
    <div style="text-align:center;margin-top:40px;">
	    <a  style="text-decoration: none;" onclick="nextPrevv(0)"><span class="step">1</span></a>
	    <span class="step" onclick="nextPrevv(1)">2</span>
	    <span class="step" onclick="nextPrevv(2)">3</span>
	</div> <br>
    <br>
    


    <form id="affectform" class="form-background" action="<?php echo e(route('AffectedIndex.update',$affected->id)); ?>" method="post" enctype="multipart/form-data">
     <?php echo e(csrf_field()); ?>

     <?php echo csrf_field(); ?>
     <?php echo method_field('PUT'); ?>
       <input type="hidden" name="Type" value="<?php echo e($affected->Type); ?>">
        <div class="tab"> 
        <?php if($affected->Type == '1'): ?> 
        <p>
            <div class="row">
                <div class="col-sm-12">
                    <fieldset class="scheduler-border">
					    <legend class="scheduler-border">လုပ်ငန်းဆိုင်ရာအချက်အလက်များ</legend>
                            <p>	
                                <div class="row">
                                    <div class="col-sm-5 text-center">
                                        <label for="Factory_IDno">စက်ရုံအမှတ်</label>
                                        <input  id="Factory_IDno"  name="Factory_IDno" value="<?php echo e($affected->FactoryID); ?>">
                                    </div>
                                    
                                    <div class="col-sm-1">

                                    </div>
                                    <div class="col-sm-5 text-center">
                                        <label for="Factory_Name">စက်ရုံအမည်</label>
                                        <input  id="Factory_Name"  name="Factory_Name" value="<?php echo e($affected->FactoryName); ?>">
                                    </div>
                                    
                                </div>
                            </p>
                            <p>	
                                <div class="row">
                                    <div class="col-sm-5 text-center">
                                        <label for="OwnerName">ပိုင်ရှင်အမည်</label>
                                        <input id="OwnerName"  name="OwnerName" value="<?php echo e($affected->OwnerName); ?>">
                                    </div>
                                    
                                    <div class="col-sm-1">

                                    </div>
                                    <div class="col-sm-5 text-center">
                                        <label for="Factory_Type">လုပ်ငန်းအမျိုးအစား</label>
                                        <input  id="Factory_Type"  name="Factory_Type" value="<?php echo e($affected->FactoryType); ?>">
                                    </div>
                                    
                                </div>
                            </p>
                            <p>	
                                <div class="row">
                                    <div class="col-sm-5 text-center">
                                        <label for="Factory_Phno">ဖုန်းနံပါတ်</label>
                                        <input id="Factory_Phno"  name="Factory_Phno" value="<?php echo e($affected->FactoryPhno); ?>">
                                    </div>
                                    <div class="col-sm-1">

                                    </div>
                                    <div class="col-sm-5 text-center">
                                        <label for="Factory_Address">လိပ်စာ</label>
                                        <input  id="Factory_Address"  name="Factory_Address" value="<?php echo e($affected->FactoryAddress); ?>">
                                    </div>
                                    
                                   
                                </div>
                            </p>
						  
					    </fieldset>
            
                    </div>
                </div>
            </p>
            <?php else: ?>
            <p>
            <div class="row">
                <div class="col-sm-12">
                    <fieldset class="scheduler-border">
					    <legend class="scheduler-border">လုပ်ငန်းဆိုင်ရာအချက်အလက်များ</legend>
                            <p>	
                                <div class="row">
                                    <div class="col-sm-5 text-center">
                                        <label for="Shop_IDno">ဆိုင်အမှတ်</label>
                                        <input  id="Shop_IDno"  name="Shop_IDno" value="<?php echo e($affected->FactoryID); ?>">
                                    </div>
                                    
                                    <div class="col-sm-1">

                                    </div>
                                    <div class="col-sm-5 text-center">
                                        <label for="Shop_Name">ဆိုင်အမည်</label>
                                        <input  id="Shop_Name"  name="Shop_Name" value="<?php echo e($affected->FactoryName); ?>">
                                    </div>
                                    
                                </div>
                            </p>
                            <p>	
                                <div class="row">
                                    <div class="col-sm-5 text-center">
                                        <label for="ShopOwnerName">ပိုင်ရှင်အမည်</label>
                                        <input id="ShopOwnerName"  name="ShopOwnerName" value="<?php echo e($affected->OwnerName); ?>">
                                    </div>
                                    
                                    <div class="col-sm-1">

                                    </div>
                                    <div class="col-sm-5 text-center">
                                        <label for="Shop_Type">လုပ်ငန်းအမျိုးအစား</label>
                                        <input  id="Shop_Type"  name="Shop_Type" value="<?php echo e($affected->FactoryType); ?>">
                                    </div>
                                    
                                </div>
                            </p>
                            <p>	
                                <div class="row">
                                    <div class="col-sm-5 text-center">
                                        <label for="Shop_Phno">ဖုန်းနံပါတ်</label>
                                        <input id="Shop_Phno"  name="Shop_Phno" value="<?php echo e($affected->FactoryPhno); ?>">
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-5 text-center">
                                        <label for="Shop_Address">လိပ်စာ</label>
                                        <input  id="Shop_Address"  name="Shop_Address" value="<?php echo e($affected->FactoryAddress); ?>">
                                    </div>
                                </div>
                            </p>
						  
					    </fieldset>
            
                    </div>
                </div>
            </p>
            <?php endif; ?>
            <p>
            <div class="row">
                <div class="col-sm-12">
                    <fieldset class="scheduler-border">
					    <legend class="scheduler-border">လုပ်ငန်းခွင် ထိခိုက်သူဆိုင်ရာ အချက်အလက်များ</legend>
                            <p>	
                                <div class="row">
                                    <div class="col-sm-5 text-center">
                                        <label for="empName">အမည်</label>
                                        <input  id="empName"  name="empName" value="<?php echo e($affected->empName); ?>">
                                    </div>
                                    <div class="col-sm-1">

                                    </div>
                                    <div class="col-sm-5 text-center">
                                        <label for="empAge">အသက် နှင့် လုပ်သက်</label>
                                        <input id="empAge"  name="empAge" value="<?php echo e($affected->empAge); ?>">
                                    </div>
                                </div>
                            </p>
                            <p>	
                                <div class="row">
                                    <div class="col-sm-5 text-center">
                                        <label for="empGender">လိင်</label>
                                        <input id="empGender"  name="empGender" value="<?php echo e($affected->empGender); ?>">
                                    </div>
                                    <div class="col-sm-1">

                                    </div>
                                    <div class="col-sm-5 text-center">
                                        <label for="empLvl">ရာထူး နှင့် တာ၀န်</label>
                                        <input id="empLvl"  name="empLvl" value="<?php echo e($affected->empLvl); ?>">
                                    </div>
                                </div>
                            </p>
                            <p>	
                                <div class="row">
                                    <div class="col-sm-5 text-center">
                                        <label for="empLama">လမဖ အကျုံး၀င်မှု ရှိ/မရှိ</label>
                                        <input id="empLama"  name="empLama" value="<?php echo e($affected->empLama); ?>">
                                    </div>
                                    <div class="col-sm-1">
                                    </div>
                                    <div class="col-sm-5 text-center">
                                        <label for="empPhno">ဖုန်းနံပါတ်</label>
                                        <input id="empPhno"  name="empPhno" value="<?php echo e($affected->empPhno); ?>">
                                    </div>
                                    
                                </div>
                            </p>
						  
					    </fieldset>
            
                    </div>
                </div>
            </p>

            <p>
            <div class="row">
                <div class="col-sm-12">
                    <fieldset class="scheduler-border">
					    <legend class="scheduler-border">ထိခိုက်မှုဆိုင်ရာအချက်အလက်များ</legend>
                            <p>	
                                <div class="row">
                                    <div class="col-sm-5 text-center">
                                        <label for="accDay">ထိခိုက်မှုဖြစ်ပွားသည့်နေ့ရက်</label>
                                        <input id="datepicker accDay" class="datepicker" type="date" name="accDay" value="<?php echo e($affected->accDay); ?>">
                                    </div>
                                    <div class="col-sm-1">

                                    </div>
                                    <div class="col-sm-5 text-center">
                                        <label for="accTime">အချိန်</label>
                                        <input id="accTime"  name="accTime" value="<?php echo e($affected->accTime); ?>">
                                    </div>
                                </div>
                            </p>
                            <p>	
                                <div class="row">
                                    <div class="col-sm-5 text-center">
                                        <label for="accPlace">နေရာ</label>
                                        <input id="accPlace"  name="accPlace" value="<?php echo e($affected->accPlace); ?>">
                                    </div>
                                    <div class="col-sm-1">

                                    </div>
                                    <div class="col-sm-5 text-center">
                                        <label for="accType">အမျိုးအစား</label>
                                        <input id="accPlace"  name="accPlace" value="<?php echo e($affected->accType); ?>">
                                    </div>
                                </div>
                            </p>
                            <p>	
                                <div class="row">
                                    <div class="col-sm-5 text-center">
                                        <label for="accDetail">ဖြစ်စဉ်အကျဉ်း</label>
                                        <input id="accDetail"  name="accDetail" value="<?php echo e($affected->accDetail); ?>">
                                    </div>
                                    <div class="col-sm-1">

                                    </div>
                                    <div class="col-sm-5 text-center">
                                        <label for="accLeave">ခန့်မှန်းအလုပ်ပျက်ရက်</label>
                                        <input  id="accLeave"  name="accLeave" value="<?php echo e($affected->accLeave); ?>">
                                    </div>
                                   
                                </div>
                            </p>
                            
					    </fieldset>
            
                    </div>
                </div>
            </p>
            </div>
            <div class="tab">
            <p>
            

                <div class="row">
                    <div class="col-sm-12">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">ထိခိုက်ဒဏ်ရာ အမျိုးအစား <span style="color:red">*</span></legend>
                                    <div class="row">
                                        <div class="col-sm-12 text-left">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <select name="painType" id="painType" class="form-control">
                                                    <option value="">ထိခိုက်ဒဏ်ရာ အမျိုးအစား ရွေးရန်
                                                        </option>
                                                    <?php $__currentLoopData = $affected_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($a->affected_code); ?>" <?php echo e($a->affected_code==$affected->painType ? 'selected' : ''); ?>><?php echo e($a->affected_name); ?></option> 
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                                
                                            </div>
                                        </div>
                                    </div>                            
                            </fieldset>
                
                        </div>
                    </div>
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">ထိခိုက်ဒဏ်ရာ ရရှိသည့်အစိတ်အပိုင်း <span style="color:red">*</span></legend>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <select name="painPart" id="painPart" class="form-control">
                                            <option value="">ထိခိုက်ဒဏ်ရာ ခန္ဓာကိုယ်အစိတ်အပိုင်း ရွေးရန်
                                                </option>
                                            <?php $__currentLoopData = $affected_body; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($a->body_code); ?>" <?php echo e($a->body_code==$affected->painPart ? 'selected' : ''); ?>><?php echo e($a->body_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-5">
                                        <select name="painPiece" id="painPiece" class="form-control">
                                            <option value="<?php echo e($painpiece->peice_no); ?>" <?php echo e($affected->painPiece==$painpiece->peice_no ? 'selected' : ''); ?>><?php echo e($painpiece->peice_name); ?></option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-sm-6 m-2">
                                            <select name="painArea" id="painArea" class="form-control">
                                                <option value="">ထိခိုက်မှု ရရှိသည့် ဘက် ရွေးရန်(ဘယ်ဘက် , ညာဘက် , နှစ်ဖက်စလုံး) </option>
                                                 <option value="1" <?php echo e($affected->painArea==1 ? 'selected' : ''); ?>>ဘယ်ဘက်</option>
                                                 <option value="2" <?php echo e($affected->painArea==2 ? 'selected' : ''); ?>>ညာဘက်</option>
                                                 <option value="3" <?php echo e($affected->painArea==3 ? 'selected' : ''); ?>>နှစ်ဖက်စလုံး</option>
                                            </select>
                                    </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-12">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">ဖြစ်ပွားရသည့်အကြောင်းအရင်း <span style="color:red">*</span></legend>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <select name="painCase" id="painCase" class="form-control">
                                            <option value="">ဖြစ်ပွားရသည့်အကြောင်းအရင်း ရွေးရန်</option>
                                            <?php $__currentLoopData = $impact_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($i->impact_no); ?>" <?php echo e($affected->painCase==$i->impact_no ? 'selected' : ''); ?>><?php echo e($i->impact_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-1">
                                    </div>
                                    <div class="col-sm-5">
                                        <select name="painCase_des" id="painCase_des" class="form-control">
                                        <option value="<?php echo e($impact_type_des->case_des_no); ?>"><?php echo e($impact_type_des->case_des_name); ?>

                                             </option>
                                        </select>
                                    </div>
                                                
                                            </div>
                            </fieldset>
                        </div>
                    </div>

            </p>

        </div>
        <div class="tab">
	  	<p><div class="row">
		  		<div class="col-sm-4 text-right">
		  			<label for="affectedInform1">လုပ်ငန်းခွင် ထိခိုက်မှု အစီရင်ခံစာ တင်ပြအကြောင်းကြားစာ(၁)</label>
		  		</div>
		  		<div class="col-sm-8">
		  	 		<input type="file" name="affectedInform1" id='affectedInform1' value="<?php echo e($affected->affectedInform1); ?>">
		  		</div>
	  		</div></p>

		  	<p><div class="row">
		  		<div class="col-sm-4 text-right">
		  			<label for="affectedInform2">
                      လုပ်ငန်းခွင် ထိခိုက်မှု အစီရင်ခံစာ တင်ပြအကြောင်းကြားစာ(၂)
					</label>
		  		</div>
		  		<div class="col-sm-8">
		  	 		<input type="file"  name="affectedInform2" id='affectedInform2' value="<?php echo e($affected->affectedInform2); ?>">
		  		</div>
		  	</div></p>
	  	<p><div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="affectedInform3">
                  လုပ်ငန်းခွင် ထိခိုက်မှု အစီရင်ခံစာ တင်ပြအကြောင်းကြားစာ(၃)

				</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file"  name="affectedInform3" id='affectedInform3' value="<?php echo e($affected->affectedInform3); ?>">
	  		</div>
	  	</div></p>
	  	<p><div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="affectedInform4">လုပ်ငန်းခွင် ထိခိုက်မှု အစီရင်ခံစာ တင်ပြအကြောင်းကြားစာ(၄)</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file"  name="affectedInform4" id='affectedInform4' value="<?php echo e($affected->affectedInform4); ?>">
	  		</div>
	  	</div>	</p>
	  	<p><div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="affectedInform5">လုပ်ငန်းခွင် ထိခိုက်မှု အစီရင်ခံစာ တင်ပြအကြောင်းကြားစာ(၅)</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" name="affectedInform5" id='affectedInform5' value="<?php echo e($affected->affectedInform5); ?>">
	  		</div>
	  	</div></p>
	  		 
	  </div>
        

        <div style="overflow:auto;">
            <div style="float:right;">
            <a class="btn btn-primary" href="<?php echo e(route('AffectedIndex.index')); ?>"> ပြန်ထွက်</a>
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>
      
</form>
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
    document.getElementById("nextBtn").innerHTML = "Update";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
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
    document.getElementById("affectform").submit();
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
    document.getElementById("affectform").submit();
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



$(document).ready(function(){
    $('#Type').on('change', function() {
      if ( this.value == '1')
      {
           $("#shop").hide();
        $("#factory").show();
      }
      else if( this.value == '2')
      {
          $("#factory").hide();
        $("#shop").show();
      }
       else  
      {
        $("#factory").show();
        $("#shop").hide();
      }
    });

    $('#painPart').change(function(){ 
	   var id = $(this).val();
	   if(id != '')
	   {
		$.ajax({
		 url:"<?php echo e(route('PainPartSection.fetch')); ?>",
		 method:"GET",
		 data:{id:id},
		 success:function(data){
			console.log(data);
			$.each(data, function (i, item) {
					$('#painPiece').append($('<option>', { 
						value: item.peice_no,
						text : item.peice_name 
					}));
				});
		   }
		});
	   }
   });

   $('#painCase').change(function(){ 
	   var id = $(this).val();
	   if(id != '')
	   {
		$.ajax({
		 url:"<?php echo e(route('PainCaseSection.fetch')); ?>",
		 method:"GET",
		 data:{id:id},
		 success:function(data){
			console.log(data);
			$.each(data, function (i, item) {
					$('#painCase_des').append($('<option>', { 
						value: item.case_des_no,
						text : item.case_des_name 
					}));
				});
		   }
		});
	   }
   });


});

  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>