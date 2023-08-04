<?php $__env->startSection('content'); ?>
  	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script src="<?php echo e(asset('assets/js/common.js')); ?>"></script>

<script type='text/javascript'>
$(function(){
$('#datepicker').datepicker({
    calendarWeeks: true,
    todayHighlight: true,
    autoclose: true
});  
});

</script>
<h1 style="text-align:center;margin-bottom:40px;"> အလုပ်သမားဥပဒေစစ်ဆေးရေး</h1>

        <div class="row">
            <div class="col-sm-12 text-right">
                <button  id="tempoarySave">ယာယီသိမ်းဆည်းမည် </button>
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
    <br>
    <p>
            <div class="row">
                <div class="col-sm-1">
                    
                </div>
                <div class="col-sm-5 text-center">
                    <input type="text" name="factoryname" id="factoryname" class="form-control" placeholder="အလုပ်ရုံ၊ စက်ရုံ အမည်" />
                    
                    <div id="factoryList">
                    </div>
                </div>
                <div class="col-sm-2">
                    <button id="search">ရှာရန်</button>
                </div>
            </div>
        </p> 

<form id="inspectform"class="form-background" action="<?php echo e(route('LabourInspectionLaw.store')); ?>"  method="post">
     <?php echo e(csrf_field()); ?>


     
     <input type="hidden" name="tempoary" id="tempoary">
     <input type="hidden" name="factory_id" id="factory_id">

     <div class="tab">
         <h3 class="text-center">၁၉၅၁ အလုပ်ရုံများ အက်ဥပဒေအရ စစ်ဆေးချက်ပုံစံ</h3>
        <h4>အလုပ်ချိန်သတ်မှတ်ချက်ဆိုင်ရာ အချက်အလက်များ</h4>
  <!-- For new design-->
            
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">လုပ်ငန်းပိုင်ရှင်ကပေးပို့ရန်နို့တစ်စာပေးပို့ခြင်း </legend>
                            <div class="control-group">
                                 <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input class="custom-control-input" id="sentnotice" name="sentnotice" type="radio" value='ပြု' checked>
                                          <label class="custom-control-label" for="sentnotice">ပြု</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="sentnotice1"  type="radio" name="sentnotice" value='မပြု' <?php if(old('shownotice')=='မပြု'): ?> checked <?php endif; ?>>
                                            <label class="custom-control-label" for="sentnotice1">မပြု</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">အလုပ်လုပ်ရန်ကာလအပိုင်းအခြားဆိုင်ရာ နို့တစ်စာ ပြသခြင်း</legend>
                            <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="shownotice" name="shownotice" type="radio" value='ပြု' checked>
                                          <label class="custom-control-label" for="shownotice">ပြု</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="shownotice1"  type="radio" name="shownotice" value='မပြု' <?php if(old('shownotice')=='မပြု'): ?> checked <?php endif; ?>>
                                            <label class="custom-control-label" for="shownotice1">မပြု</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
      <!--end of new design-->
  <!-- For new design-->
            <p>
            <div class="row col-sm-5"><b>အလုပ်လုပ်ရန်ကာလအပိုင်းအခြားများ စီစဉ်ထားမှု -နို့တစ်စာအတွင်း </b><br/></div>
                <div class="row">               
                    <div class="col-sm-5 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">
                             အလုပ်လုပ်ချိန်များ၊အနားပေးချိန်၊ရက်သတ္တပတ်အလုပ်ပိတ်ရက်/နားရက်  </legend>
                            <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <input type="date" placeholder="နေ့စွဲ" name="workingduration" class="form-control" value="<?php echo e(old('workingduration')); ?>" id="datepicker">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">တစ်မျိုးတည်းသောအလုပ်၌ ထပ်နေသောအလှည့်များ</legend>
                            <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="repeatitivework" name="repeatitivework" type="radio" value='ရှိ' checked>
                                          <label class="custom-control-label" for="repeatitivework">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="repeatitivework1"  type="radio" name="repeatitivework" value='မရှိ' <?php if(old('repeatitivework')=='မရှိ'): ?> checked <?php endif; ?>>
                                            <label class="custom-control-label" for="repeatitivework1">မရှိ</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
  <!--end of new design-->
  <!-- For new design-->
                <div class="row">               
                    <div class="col-sm-5 text-center">
                            <fieldset class="scheduler-border">
                            <legend class="scheduler-border">နို့တစ်စာအပြောင်းအလဲ</legend>
                            <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="changenotice" name="changenotice" type="radio" value='ရှိ' checked>
                                          <label class="custom-control-label" for="changenotice">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="changenotice1"  type="radio" name="changenotice" value='မရှိ' <?php if(old('changenotice')=='မရှိ'): ?> checked <?php endif; ?>>
                                            <label class="custom-control-label" for="changenotice1">မရှိ</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">နို့တစ်စာအပြောင်းအလဲ အကြောင်း</legend>
                            <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="informchangenotice" name="informchangenotice" type="radio" value='ကြား' checked>
                                          <label class="custom-control-label" for="informchangenotice">ကြား</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="informchangenotice1"  type="radio" name="informchangenotice" value='မကြား' <?php if(old('informchangenotice')=='မကြား'): ?> checked <?php endif; ?>>
                                            <label class="custom-control-label" for="informchangenotice1">မကြား</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
  <!--end of new design-->
 <!-- For new design-->
                <div class="row">               
                    <div class="col-sm-12 text-center">
                            <fieldset class="scheduler-border">
                            <legend class="scheduler-border">ချိတ်ဆွဲသည့် နို့တစ်စာပါ အလုပ်ချိန်နှင့်အညီ</legend>
                            <div class="control-group">
                                <div class="row">
                                 <div class="col-sm-4">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="equalnotice" name="equalnotice" type="radio" value='လုပ်' checked="">
                                          <label class="custom-control-label" for="equalnotice">လုပ်</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="equalnotice1" type="radio" name="equalnotice" value='မလုပ်' <?php if(old('equalnotice')=='မပြု'): ?> checked <?php endif; ?>>
                                            <label class="custom-control-label" for="equalnotice1" onclick="equalNotice()">မလုပ်</label>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                     <label for="dailyworktime"> နေ့စဉ်</label>
                                    <input name="dailyworktime" id="dailyworktime" class="form-control" value="<?php echo e(old('dailyworktime')); ?>">
                                 </div>
                                 <div class="col-sm-4">
                                     <label for="weeklyworktime"> ရက်သတ္တပတ်</label>
                                    <input   name="weeklyworktime" id="weeklyworktime" class="form-control" value="<?php echo e(old('weeklyworktime')); ?>">
                                 </div>
                                 </div> <br>
                                 <div class='row'><div class="col-sm-4">
                                     <label for="resttime"> အနားပေးချိန်</label>
                                    <input id="resttime"  name="resttime" class="form-control" value="<?php echo e(old('resttime')); ?> ">
                                 </div>
                                 <div class="col-sm-4">
                                     <label for="weekendholiday">ရက်သတ္တပတ်ပိတ်ရက်</label>
                                    <input id="weekendholiday" name="weekendholiday" class="form-control" value="<?php echo e(old('weekendholiday')); ?>">
                                 </div>
                                    
                                 </div>
                            </div>
                        </fieldset>
                    </div>
                    
                </div>
  <!--end of new design-->
    
        <div class="row">
            <div class="col-md-12">
                <fieldset class="scheduler-border">
                        <legend class="scheduler-border">ရက်သတ္တပတ်အလုပ်ပိတ်ရက်(တနင်္ဂနွေနေ့)တွင် လုပ်ကိုင်ခြင်းအတွက် ရှေ့သုံးရက် (သို့) နောက်သုံးရက်တွင် အနားပေးမှု ရှိ/မရှိနှင့် အက်ဥပဒေနှင့်အညီ ရက်စားအနားပေးမှု ရှိ/မရှိ (သို့) အကြောင်းကြားမှုရှိ/မရှိ
                            </legend>
                        <div class="control-group">
                            <div class="row">
                                 <div class="col-sm-6 text-center">
                                     <div class="custom-control custom-radio mb-3">
                                      <input  class="custom-control-input" id="insteadrelaxdays" name="insteadrelaxdays" type="radio" value='ရှိ'>
                                      <label class="custom-control-label" for="insteadrelaxdays">ရှိ</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio mb-3">
                                        <input  class="custom-control-input" id="insteadrelaxdays1" type="radio" name="insteadrelaxdays" value='မရှိ' <?php if(old('insteadrelaxdays')=='မရှိ'): ?> checked <?php endif; ?>  >
                                        <label class="custom-control-label" for="insteadrelaxdays1">မရှိ</label>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </fieldset>
            </div>
        </div>
        <!-- For new design-->
                <div class="row">               
                    <div class="col-sm-12 text-center">
                            <fieldset class="scheduler-border">
                            <legend class="scheduler-border">အချိန်ပိုလုပ်ကိုင်ခြင်း</legend>
                            <div class="control-group">
                                <div class="row">
                                 <div class="col-sm-6">
                                        <fieldset class="scheduler-border">
                                                <legend class="scheduler-border">ခွင့်ပြုချက်/ကြိုတင်ခွင့်ပြုချက်ရယူခြင်း</legend>
                                                <div class="control-group">
                                                    <div class="row">
                                                         <div class="col-sm-6 text-center">
                                                             <div class="custom-control custom-radio mb-3">
                                                              <input  class="custom-control-input" id="prepermit" name="prepermit" type="radio" value='ရှိ' checked>
                                                              <label class="custom-control-label" for="prepermit">ရှိ</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="custom-control custom-radio mb-3">
                                                                <input  class="custom-control-input" id="prepermit1" type="radio" name="prepermit" value='မရှိ' <?php if(old('prepermit')=='မရှိ'): ?> checked <?php endif; ?>>
                                                                <label class="custom-control-label" for="prepermit1">မရှိ</label>
                                                            </div>
                                                        </div>
                                                     </div>
                                                </div>
                                         </fieldset>
                                 </div>                             
                                 <div class="col-sm-6">
                                        <fieldset class="scheduler-border">
                                                <legend class="scheduler-border">ခွင့်ပြုချက်နှင့်အညီ လုပ်ကိုင်ခြင်း</legend>
                                                <div class="control-group">
                                                    <div class="row">
                                                         <div class="col-sm-6 text-center">
                                                             <div class="custom-control custom-radio mb-3">
                                                              <input  class="custom-control-input" id="workwithpermit" name="workwithpermit" type="radio" value='ရှိ' checked>
                                                              <label class="custom-control-label" for="workwithpermit">ရှိ</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="custom-control custom-radio mb-3">
                                                                <input  class="custom-control-input" id="workwithpermit1" type="radio" name="workwithpermit" value='မရှိ' <?php if(old('workwithpermit')=='မရှိ'): ?> checked <?php endif; ?>>
                                                                <label class="custom-control-label" for="workwithpermit1">မရှိ</label>
                                                            </div>
                                                        </div>
                                                     </div>
                                                </div>
                                         </fieldset>
                                    
                                 </div>                              
                                 </div>
                                 <div class="row">
                                        <div class="col-sm-6">
                                            <label for="otpayscale"> လုပ်ခနှုန်းထား </label>
                                            <input id="otpayscale" class="form-control" name="otpayscale" value="<?php echo e(old('otpayscale')); ?>">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="diffrentotpayment"> အချိန်ပိုလုပ်ခခြားနားငွေ</label>
                                             <input id="diffrentotpayment" class="form-control" name="diffrentotpayment" value="<?php echo e(old('diffrentotpayment')); ?>">
                                        </div>
                                 </div> <br>
                                 <div class="row">
                                     <div class="col-sm-6">
                                        <fieldset class="scheduler-border">
                                                <legend class="scheduler-border">ခွင့်ပြုသည့်နာရီကို ပုံသေနည်းပါတွက်ချက်မှုနှင့် ကိုက်ညီမှု</legend>
                                                <div class="control-group">
                                                    <div class="row">
                                                         <div class="col-sm-6 text-center">
                                                             <div class="custom-control custom-radio mb-3">
                                                              <input  class="custom-control-input" id="allowtimecalculate" name="allowtimecalculate" type="radio" value='ရှိ' checked>
                                                              <label class="custom-control-label" for="allowtimecalculate">ရှိ</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="custom-control custom-radio mb-3">
                                                                <input  class="custom-control-input" id="allowtimecalculate1" type="radio" name="allowtimecalculate" value='မရှိ' <?php if(old('allowtimecalculate')=='မရှိ'): ?> checked <?php endif; ?>>
                                                                <label class="custom-control-label" for="allowtimecalculate1">မရှိ</label>
                                                            </div>
                                                        </div>
                                                     </div>
                                                </div>
                                         </fieldset>
                                     </div>
                                 </div>
                            </div>
                        </fieldset>
                    </div>
                    
                </div>
  <!--end of new design-->
  <!-- For new design-->
            <p>
                <div class="row">               
                    <div class="col-sm-12 text-center">
                            <fieldset class="scheduler-border">
                            <legend class="scheduler-border">တရားမဝင် အချိန်ပိုလုပ်ကိုင်ခြင်း</legend>
                            <div class="control-group">
                                <div class="row">
                                 <div class="col-sm-6">
                                     <label for="illegalotallow">မည်သူ၏ခွင့်ပြုချက်ဖြင့်လုပ်ကိုင်ခြင်း </label>
                                    <input id="illegalotallow" class="form-control" name="illegalotallow" value="<?php echo e(old('illegalotallow')); ?>">
                                 </div>                             
                                 <div class="col-sm-6">
                                     <label for="illegalottime">လုပ်ကိုင်မှုအခြေအနေ(ကာလ၊နေ့စဉ်/အပတ်စဉ်-နာရီ)</label>
                                    <input id="illegalottime" class="form-control" name="illegalottime" value="<?php echo e(old('illegalotime')); ?>">
                                 </div>                              
                                 </div>
                            </div>
                            <div style="height:5px"></div>
                            <div class="control-group">
                                <div class="row">
                                 <div class="col-sm-6">
                                     <label for="illegalotpayment">ပေးချေသည့် အချိန်ပိုလုပ်ခနှုန်းထား </label>
                                    <input id="illegalotpayment" class="form-control" name="illegalotpayment" value="<?php echo e(old('illegalopayment')); ?>">
                                 </div>
                                 <div class="col-sm-6">
                                    <fieldset class="scheduler-border">
                                            <legend class="scheduler-border">တစ်ရက်တည်းတွင် အလုပ်ရုံ(၂)ရုံ၌လုပ်ကိုင်ခြင်း</legend>
                                            <div class="control-group">
                                                <div class="row">
                                                     <div class="col-sm-6 text-center">
                                                         <div class="custom-control custom-radio mb-3">
                                                          <input  class="custom-control-input" id="twofacbyday" name="twofacbyday" type="radio" value='ရှိ' checked>
                                                          <label class="custom-control-label" for="twofacbyday">ရှိ</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input  class="custom-control-input" id="twofacbyday1" type="radio" name="twofacbyday" value='မရှိ' <?php if(old('twofacbyday')=='မရှိ'): ?> checked <?php endif; ?>>
                                                            <label class="custom-control-label" for="twofacbyday1">မရှိ</label>
                                                        </div>
                                                    </div>
                                                 </div>
                                            </div>
                                        </fieldset>
                                 </div>
                                 </div>
                            </div>
                            <div class="control-group">
                                
                            </div>
                        </fieldset>
                    </div>
                    
                </div>
  <!--end of new design-->
        <!-- For new design-->
            
                <div class="row">               
                    <div class="col-sm-12 text-center">
                            <fieldset class="scheduler-border">
                            <legend class="scheduler-border">ကလေးအလုပ်သမားများအလုပ်လုပ်ကိုင်ခြင်း-</legend>
                            <div class="control-group">
                                <div class="row">
                                 <div class="col-sm-6">
                                    <fieldset class="scheduler-border">
                                            <legend class="scheduler-border">သတ်မှတ်အလုပ်ချိန်နှင့်အညီ လုပ်ကိုင်ခြင်း</legend>
                                            <div class="control-group">
                                                <div class="row">
                                                     <div class="col-sm-6 text-center">
                                                         <div class="custom-control custom-radio mb-3">
                                                          <input  class="custom-control-input" id="definedworktime" name="definedworktime" type="radio" value='ရှိ' checked>
                                                          <label class="custom-control-label" for="definedworktime">ရှိ</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input  class="custom-control-input" id="definedworktime1" type="radio" name="definedworktime" value='မရှိ' <?php if(old('definedworktime')=='မရှိ'): ?> checked <?php endif; ?>>
                                                            <label class="custom-control-label" for="definedworktime1">မရှိ</label>
                                                        </div>
                                                    </div>
                                                 </div>
                                            </div>
                                        </fieldset>
                                 </div>                             
                                 <div class="col-sm-6">
                                    
                                    <fieldset class="scheduler-border">
                                            <legend class="scheduler-border">ည(၆)နာရီမှ နံနက်(၆)နာရီအတွင်းလုပ်ကိုင်စေခြင်း</legend>
                                            <div class="control-group">
                                                <div class="row">
                                                     <div class="col-sm-6 text-center">
                                                         <div class="custom-control custom-radio mb-3">
                                                          <input  class="custom-control-input" id="stosworktime" name="stosworktime" type="radio" value='ရှိ' checked>
                                                          <label class="custom-control-label" for="stosworktime">ရှိ</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input  class="custom-control-input" id="stosworktime1" type="radio" name="stosworktime" value='မရှိ' <?php if(old('stosworktime')=='မရှိ'): ?> checked <?php endif; ?>>
                                                            <label class="custom-control-label" for="stosworktime1">မရှိ</label>
                                                        </div>
                                                    </div>
                                                 </div>
                                            </div>
                                        </fieldset>
                                 </div>                              
                                 </div>                      
                                
                            </div>
                        </fieldset>
                    </div>
                    
                </div>
    <!--end of new design-->          
  </div>
  
  <div class="tab">
      <h3 class="text-center">၁၉၅၁ အလုပ်ရုံများ အက်ဥပဒေအရ စစ်ဆေးချက်ပုံစံ</h3>
      <h4>သက်သာချောင်ချိရေးဆိုင်ရာ အချက်အလက်များ</h4>
    
    <!--start new design-->
                  <div class="row">
                    <div class="col-sm-12 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">ကိုယ်လက်ဆေးကြောရန် စီမံထားရှိခြင်း</legend>
                            <div class="control-group">
                                 <div class="row">
                                    <div class="col-sm-4">
                                        <label for="washcategory"> အမျိုးအမည်</label>
                                        <input id="washcategory" class="form-control" name="washcategory" value="<?php echo e(old('washcategory')); ?>">
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="custom-control custom-radio mb-3">
                                            <label for="washamount"> အရေအတွက်</label>
                                            <input id="washamount" class="form-control" name="washamount" value="<?php echo e(old('washamount')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class='row'><label class="col-sm-12 text-center">အသုံးပြုနိုင်မှုအခြေအနေ</label></div>
                                        <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="washusestate" name="washusestate" type="radio" value='ကောင်း' checked>
                                          <label class="custom-control-label" for="washusestate">ကောင်း</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="washusestate1"  type="radio" name="washusestate" value='မကောင်း' <?php if(old('washusestate')=='မကောင်း'): ?> checked <?php endif; ?>>
                                            <label class="custom-control-label" for="washusestate1">မကောင်း</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                                    </div>
                                 </div>
                            </div>
                        </fieldset>
                    </div>
                
                </div>
            
    <!--end new design-->
    <!--start new design-->
        
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">ထိုင်ခွင့်ကြုံက ထိုင်နိုင်ရန် စီမံထားရှိခြင်း</legend>
                            <div class="control-group">
                                 <div class="row">
                                    <div class="col-sm-4">
                                        <label for="sitcategory">အမျိုးအမည် </label>
                                        <input id="sitcategory" class="form-control" name="sitcategory" value="<?php echo e(old('sitcategory')); ?>">
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="custom-control custom-radio mb-3">
                                            <label for="sitamount">အရေအတွက် </label>
                                            <input id="sitamount" class="form-control" name="sitamount" value="<?php echo e(old('sitamount')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class='row'><label class="col-sm-12 text-center">အသုံးပြုနိုင်မှုအခြေအနေ</label></div>
                                        <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="situsestate" name="situsestate" type="radio" value='ကောင်း' checked>
                                          <label class="custom-control-label" for="situsestate">ကောင်း</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="situsestate1"  type="radio" name="situsestate" value='မကောင်း' <?php if(old('situsestate')=='မကောင်း'): ?> checked <?php endif; ?>>
                                            <label class="custom-control-label" for="situsestate1">မကောင်း</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                                    </div>
                                 </div>
                            </div>
                        </fieldset>
                    </div>
                
                </div>
            
    <!--end new design-->
    <!--start new design-->
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">သူနာပြုဆေးသေတ္တာ၊ သူနာပြုဆေးခန်း၊ ဆေးပေးရုံထားရှိခြင်းအခြေအနေ</legend>
                            <div class="control-group">
                                 <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <select name="medicalcaretype" class="form-control">
                                            <option value="သူနာပြုဆေးသေတ္တာ">သူနာပြုဆေးသေတ္တာ</option>
                                            <option value="သူနာပြုဆေးခန်း">သူနာပြုဆေးခန်း</option>
                                            <option value="ဆေးပေးရုံ">ဆေးပေးရုံ </option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        
                                    </div>
                                 </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">ကလေးထိန်းခန်းရှိခြင်း အခြေအနေ(မိခင်လုပ်သား ၁၀၀ဦးနှင့်အထက်ရှိ လုပ်ငန်းများ)</legend>
                            <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="babysittingroom" name="babysittingroom" type="radio" value='ရှိ' checked>
                                          <label class="custom-control-label" for="babysittingroom">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="babysittingroom1"  type="radio" name="babysittingroom" value='မရှိ' <?php if(old('babysittingroom')=='မရှိ'): ?> checked <?php endif; ?>>
                                            <label class="custom-control-label" for="babysittingroom1">မရှိ</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
    <!--end new design-->
        <!--start new design-->

                <div class="row">
                    <div class="col-sm-12 text-center">
                        <fieldset class="scheduler-border">
                                <legend class="scheduler-border">အလုပ်နားခန်းနှင့်အစာစားခန်းများထားရှိခြင်း အခြေအနေ (အလုပ်သမား ၁၀၀ နှင့်အထက်ရှိ လုပ်ငန်းများ)</legend>
                                <div class="control-group">
                                    <div class="row">
                                        <div class="col-sm-6 text-center">
                                            <div class="custom-control custom-radio mb-3">
                                              <input  class="custom-control-input" id="dinningroom" name="dinningroom" type="radio" value='ရှိ' checked>
                                              <label class="custom-control-label" for="dinningroom">ရှိ</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-radio mb-3">
                                                <input  class="custom-control-input" id="dinningroom1"  type="radio" name="dinningroom" value='မရှိ' <?php if(old('dinningroom')=='မရှိ'): ?> checked <?php endif; ?>>
                                                <label class="custom-control-label" for="dinningroom1">မရှိ</label>
                                            </div>
                                        </div>
                                     </div>
                                </div>
                            </fieldset>
                    </div>
                    
                </div>
            <h3>အပ်နှင်းထားသော အချက်အလက်များ</h3>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">သောက်ရေ</legend>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="control-group">
                                        <label for="waterplace"> တည်နေရာ</label>
                                        <input id="waterplace" class="form-control" name="waterplace" value="<?php echo e(old('waterplace')); ?>">
                                    </div>
                                </div>
                                    <div class="col-sm-6">
                                        <div class="control-group">
                                            <label for="watercleanence"> သောက်ရေသန့်ရှင်းမှု</label>
                                            <input id="watercleanence" class="form-control" name="watercleanence" value="<?php echo e(old('watercleanence')); ?>">
                                        </div>
                                    </div>
                            </div>
                            <div style="height:10px"></div>
                            <div class="row">
                                
                                    <div class="col-sm-6">
                                    
                                    <div class='row'><label>လုံလောက်မှု(အိုး/ရေပမာဏ)</label></div>
                                        <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-3 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="suffientamount" name="suffientamount" type="radio" value='ရှိ' checked>
                                          <label class="custom-control-label" for="suffientamount">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="suffientamount1"  type="radio" name="suffientamount" value='မရှိ' <?php if(old('suffientamount')=='မရှိ'): ?> checked <?php endif; ?>>
                                            <label class="custom-control-label" for="suffientamount1">မရှိ</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                            
                                    </div>
                                    <div class="col-sm-6">
                                        <div class='row'><label>နွေရာသီတွင် အေးမြအောင်ဆောင်ရွက်ပေးမှု</label></div>
                                        <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-3 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="cooling" name="cooling" value='ရှိ' type="radio" checked>
                                          <label class="custom-control-label" for="cooling">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="cooling1"  type="radio" name="cooling" value='မရှိ' <?php if(old('cooling')=='မရှိ'): ?> checked <?php endif; ?>>
                                            <label class="custom-control-label" for="cooling1">မရှိ</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                                        
                                    </div>
                                    </div>
                            </div>
                         </fieldset>
                    </div>          
    <!--end new design-->
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">အိမ်သာ</legend>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="control-group">
                                        <label for="tioletcategroy">အမျိုးအစား </label>
                                        <input id="tioletcategroy" class="form-control" name="tioletcategroy" value="<?php echo e(old('tioletcategroy')); ?>">
                                    </div>
                                </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-4 text-center">
                                            <div class='row'><label class="col-sm-12 text-center">တည်နေရာနှင့်လုံခြုံမှု</label></div>
                                        <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="tioletplace" name="tioletplace" type="radio" value='ရှိ' checked> 
                                          <label class="custom-control-label" for="tioletplace">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="tioletplace1"  type="radio" name="tioletplace" value='မရှိ' <?php if(old('tioletplace')=='မရှိ'): ?> checked <?php endif; ?>>
                                            <label class="custom-control-label" for="tioletplace">မရှိ</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                                            </div>
                                            <div class="col-sm-4 text-center">
                                                <div class='row'><label class="col-sm-12 text center">သန့်ရှင်းမှု </label></div>
                                        <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="tioletclean" name="tioletclean" value='ရှိ' type="radio" checked>
                                          <label class="custom-control-label" for="tioletclean">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="tioletclean1"  type="radio" name="tioletclean" value='မရှိ' <?php if(old('tioletclean')=='မရှိ'): ?> checked <?php endif; ?>>
                                            <label class="custom-control-label" for="tioletclean1">မရှိ</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                                            </div>
                                            <div class="col-sm-4 text-center">
                                                <div class='row'><label class="col-sm-12 text-center">ကျား/မခွဲခြားမှု</label></div>
                                        <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="genderdivide" name="genderdivide" value='ရှိ' type="radio" checked>
                                          <label class="custom-control-label" for="genderdivide">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="genderdivide1"  type="radio" name="genderdivide" value='မရှိ' <?php if(old('genderdivide')=='မရှိ'): ?> checked <?php endif; ?>>
                                            <label class="custom-control-label" for="genderdivide1">မရှိ</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="blank10"></div>
                            <div class="row">
                                
                                    <div class="col-sm-4">
                                        <div class="control-group">
                                            <label for="tioletroom"> အခန်းအရေအတွက်</label>
                                            <input type="text" id="tioletroom" class="form-control" name="tioletroom"/>
                                        </div>
                            
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="mtioletroom"> ကျားအိမ်သာ</label>
                                                <input type="text" id="mtioletroom" class="form-control" name="mtioletroom" value="<?php echo e(old('mtioletroom')); ?>"/>
                                            </div>
                                    <div class="col-sm-4">
                                        <label for="ftioletroom"> မအိမ်သာ</label>
                                        <input type="text" id="ftioletroom" class="form-control" name="ftioletroom" value="<?php echo e(old('ftioletroom')); ?>" />
                                    </div>
                                 </div>
                            </div>
                                        
                                    </div>
                                    </div>
                        
                         </fieldset>
                    </div>          
                
        
    <!--end new design-->
        
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">မတော်တဆထိခိုက်မှုရှိ/မရှိနှင့်အစီရင်ခံစာပေးပို့ခြင်း</legend>
                            <div class="row">
                                <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="accidentcase" name="accidentcase" value='ရှိ' type="radio" checked>
                                          <label class="custom-control-label" for="accidentcase">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="accidentcase1"  type="radio" name="accidentcase" value='မရှိ' <?php if(old('accidentcase')=='မရှိ'): ?> checked <?php endif; ?>>
                                            <label class="custom-control-label" for="accidentcase1">မရှိ</label>
                                        </div>
                                    </div>
                                 </div>
                            
                        
                        </fieldset>
                    </div> 
                </div>                  
                
        
  </div>
  <div class="tab">
        <h3 class="text-center">၁၉၅၁ အလုပ်ရုံများ အက်ဥပဒေအရ စစ်ဆေးချက်ပုံစံ</h3>
        <h4>မှတ်တမ်းစာအုပ်များနှင့် မှတ်တမ်းများ</h4>
                    <div class="row">
                        <div class="col-sm-5 text-center">
                            <fieldset class="scheduler-border">
                                <legend class="scheduler-border">အလုပ်သမားမှတ်ပုံတင်စာအုပ်</legend>
                                <div class="control-group">
                                     <div class="row">
                                        <div class="col-sm-6 text-center">
                                            <div class="custom-control custom-radio mb-3">
                                              <input class="custom-control-input" id="workerregistrationbook" name="workerregistrationbook" value='ရှိ' type="radio" checked="">
                                              <label class="custom-control-label" for="workerregistrationbook">ရှိ</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-radio mb-3">
                                                <input  class="custom-control-input" id="workerregistrationbook1"  type="radio" name="workerregistrationbook" value='မရှိ' <?php if(old('workerregistrationbook')=='မရှိ'): ?> checked <?php endif; ?>>
                                                <label class="custom-control-label" for="workerregistrationbook1">မရှိ</label>
                                            </div>
                                        </div>
                                     </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-6 text-center">
                            <fieldset class="scheduler-border">
                                <legend class="scheduler-border">ကလေးအလုပ်သမားမှတ်ပုံတင်စာအုပ်</legend>
                                <div class="control-group">
                                    <div class="row">
                                        <div class="col-sm-6 text-center">
                                            <div class="custom-control custom-radio mb-3">
                                              <input class="custom-control-input" id="childregistrationbook" name="childregistrationbook" value='ရှိ' type="radio" checked>
                                              <label class="custom-control-label" for="childregistrationbook">ရှိ</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-radio mb-3">
                                                <input  class="custom-control-input" id="childregistrationbook1" type="radio" name="childregistrationbook" value='မရှိ' <?php if(old('childregistrationbook')=='မရှိ'): ?> checked <?php endif; ?>>
                                                <label class="custom-control-label" for="childregistrationbook1">မရှိ</label>
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
                                <legend class="scheduler-border">အထွေထွေမှတ်ပုံတင်စာအုပ်</legend>
                                <div class="control-group">
                                     <div class="row">
                                        <div class="col-sm-6 text-center">
                                            <div class="custom-control custom-radio mb-3">
                                              <input class="custom-control-input" id="generalbook" name="generalbook" value='ရှိ' type="radio" checked>
                                              <label class="custom-control-label" for="generalbook">ရှိ</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-radio mb-3">
                                                <input  class="custom-control-input" id="generalbook1" type="radio" name="generalbook" value='မရှိ' <?php if(old('generalbook')=='မရှိ'): ?> checked <?php endif; ?>>
                                                <label class="custom-control-label" for="generalbook1">မရှိ</label>
                                            </div>
                                        </div>
                                     </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-6 text-center">
                            <fieldset class="scheduler-border">
                                <legend class="scheduler-border">အလုပ်သမားနေ့စဉ်အလုပ်တက်/ဆင်း မှတ်တမ်း</legend>
                                <div class="control-group">
                                    <div class="row">
                                        <div class="col-sm-6 text-center">
                                            <div class="custom-control custom-radio mb-3">
                                              <input class="custom-control-input" id="wokerofficetimebook" name="wokerofficetimebook" value='ရှိ' type="radio" checked>
                                              <label class="custom-control-label" for="wokerofficetimebook">ရှိ</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-radio mb-3">
                                                <input  class="custom-control-input" id="wokerofficetimebook1" type="radio" name="wokerofficetimebook" value='မရှိ' <?php if(old('wokerofficetimebook')=='မရှိ'): ?> checked <?php endif; ?>>
                                                <label class="custom-control-label" for="wokerofficetimebook1">မရှိ</label>
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
                                <legend class="scheduler-border">အချိန်ပိုလုပ်ကိုင်ခြင်း မှတ်တမ်း</legend>
                                <div class="control-group">
                                     <div class="row">
                                        <div class="col-sm-6 text-center">
                                            <div class="custom-control custom-radio mb-3">
                                              <input class="custom-control-input" id="otbook" name="otbook" value='ရှိ' type="radio" checked>
                                              <label class="custom-control-label" for="otbook">ရှိ</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-radio mb-3">
                                                <input  class="custom-control-input" id="otbook1" type="radio" name="otbook" value='မရှိ' <?php if(old('otbook')=='မရှိ'): ?> checked <?php endif; ?>>
                                                <label class="custom-control-label" for="otbook1">မရှိ</label>
                                            </div>
                                        </div>
                                     </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-6 text-center">
                            
                        </div>
                    </div>
                </p>
                <p>
        
      </p>
  </div>
  <div class="tab">
      <h3 class="text-center">၁၉၅၁ ခွင့်ရက်နှင့် အလုပ်ပိတ်ရက်အက်ဥပဒေအရ စစ်ဆေးချက်ပုံစံ</h3>
        <h4>ခွင့်ခံစားမှုများ</h4>
          <div class="row">
            <div class="col-sm-5 text-center">
              <fieldset class="scheduler-border">
                <legend class="scheduler-border">ရှောင်တခင်ခွင့်(၆)ရက် ခံစားခွင့်</legend>
                <div class="control-group">
                 <div class="row">
                  <div class="col-sm-6 text-center">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="causal" name="causalleave" type="radio" value='ပေး' checked>
                      <label class="custom-control-label" for="causal">ပေး</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="causal1"  type="radio" name="causalleave" value='မပေး' <?php if(old('causalleave')=='မပေး'): ?> checked <?php endif; ?>>
                      <label class="custom-control-label" for="causal1">မပေး</label>
                    </div>
                  </div>
                 </div>
                </div>
            </fieldset>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-6 text-center">
              <fieldset class="scheduler-border">
                <legend class="scheduler-border">လုပ်သက်ခွင့်(၁၀)ရက် ခံစားခွင့်</legend>
                <div class="control-group">
                  <div class="row">
                  <div class="col-sm-6 text-center">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="annual" name="annualleave" type="radio" value='ပေး' checked>
                      <label class="custom-control-label" for="annual">ပေး</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="SSB1"  type="radio" name="annualleave" value='မပေး' <?php if(old('annualleave')=='မပေး'): ?> checked <?php endif; ?>>
                      <label class="custom-control-label" for="SSB1">မပေး</label>
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
                <legend class="scheduler-border">ဆေးလက်မှတ်ခွင့် ခံစားခွင့်</legend>
                <div class="control-group">
                 <div class="row">
                  <div class="col-sm-6 text-center">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="medicalleave" name="medicalleave" type="radio" value='ပေး' checked>
                      <label class="custom-control-label" for="medicalleave">ပေး</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="medicalleave1"  type="radio" name="medicalleave" value='မပေး' <?php if(old('medicalleave')=='မပေး'): ?> checked <?php endif; ?>>
                      <label class="custom-control-label" for="medicalleave1">မပေး</label>
                    </div>
                  </div>
                 </div>
                </div>
            </fieldset>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-6 text-center">
              <fieldset class="scheduler-border">
                <legend class="scheduler-border">မီးဖွားခွင့် ခံစားခွင့်</legend>
                <div class="control-group">
                  <div class="row">
                  <div class="col-sm-6 text-center">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="maternityleave" name="maternity" type="radio" value='ပေး' checked>
                      <label class="custom-control-label" for="maternityleave">ပေး</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="maternityleave1"  type="radio" name="maternity" value='မပေး' <?php if(old('maternity')=='မပေး'): ?> checked <?php endif; ?>>
                      <label class="custom-control-label" for="maternityleave1">မပေး</label>
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
                <legend class="scheduler-border">အများပြည်သူအလုပ်ပိတ်ရက် ခံစားခွင့်</legend>
                <div class="control-group">
                 <div class="row">
                  <div class="col-sm-6 text-center">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="publicholiday" name="publicholiday" type="radio" value='ပေး' checked>
                      <label class="custom-control-label" for="publicholiday">ပေး</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="publicholiday1"  type="radio" name="publicholiday" value='မပေး' <?php if(old('publicholiday')=='မပေး'): ?> checked <?php endif; ?>>
                      <label class="custom-control-label" for="publicholiday1">မပေး</label>
                    </div>
                  </div>
                 </div>
                </div>
            </fieldset>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-6 text-center">
              <fieldset class="scheduler-border">
                <legend class="scheduler-border">ရက်သတ္တပတ်အလုပ်ပိတ်ရက် ခံစားခွင့်</legend>
                <div class="control-group">
                  <div class="row">
                  <div class="col-sm-6 text-center">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="weekendholiday" name="weekholiday" type="radio" value='ပေး' checked>
                      <label class="custom-control-label" for="weekendholiday">ပေး</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="weekendholiday1"  type="radio" name="weekholiday" value='မပေး' <?php if(old('weekholiday')=='မပေး'): ?> checked <?php endif; ?>>
                      <label class="custom-control-label" for="weekendholiday1">မပေး</label>
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
                <legend class="scheduler-border">ခွင့်မှတ်တမ်း</legend>
                <div class="control-group">
                 <div class="row">
                  <div class="col-sm-6 text-center">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="leavenote" name="leavenote" type="radio" value='ထား' checked>
                      <label class="custom-control-label" for="leavenote">ထား</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="leavenote1"  type="radio" name="leavenote" value='မထား' <?php if(old('leavenote')=='မထား'): ?> checked <?php endif; ?>>
                      <label class="custom-control-label" for="leavenote1">မထား</label>
                    </div>
                  </div>
                 </div>
                </div>
            </fieldset>
            </div>
          </div>
        
  </div>

  <div class="tab">
        <h3 class="text-center">၂၀၁၆ အခကြေးငွေပေးချေရေးဥပဒေ အရ စစ်ဆေးချက်ပုံစံ</h3>
        <h4>အခကြေးငွေပေးချေမှုဆိုင်ရာ အချက်အလက်များ</h4>
        <p>
          <fieldset class="scheduler-border">
            <legend class="scheduler-border">ပေးချေရန်သတ်မှတ်ထားသည့်ကာလအပိုင်းအခြားနှင့်ပေးချေသည့်နေ့ရက်</legend>
                <div class="row">
                  <div class="col-sm-12 text-center">
                    
                      <div class='row'>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="row">
                            <div class="col-md-4">
                              <label for="address">လခစား</label>
                            </div>
                            <div class="col-md-8">              
                              <select name="Mpaymentduration" class="form-control">
                                <option value="လဆန်း၅ရက်">လဆန်း၅ရက်</option>
                                <option value="လကုန်ရက်">လကုန်ရက်</option>
                              </select>
                            </div>
                          </div>          
                        </div>
                        
                      </div>
                      
                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="row">
                            <div class="col-md-4">
                              <label for="address">နေ့စား</label>
                            </div>
                            <div class="col-md-8">              
                              <select name="Dpaymentduration" class="form-control">
                                <option value="လဆန်း၅ရက်">လဆန်း၅ရက်</option>
                                <option value="လကုန်ရက်">လကုန်ရက်</option>
                              </select>
                            </div>
                          </div>          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 text-center">
                    
                      <div class='row'>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="row">
                            <div class="col-md-4">
                              <label for="address">ပုတ်ပြတ်</label>
                            </div>
                            <div class="col-md-8">              
                              <select name="Ppaymentduration" class="form-control">
                                <option value="လဆန်း၅ရက်">လဆန်း၅ရက်</option>
                                <option value="လကုန်ရက်">လကုန်ရက်</option>
                              </select>
                            </div>
                          </div>          
                        </div>
                        
                      </div>
                      
                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="row">
                            <div class="col-md-4">
                              <label for="address">ပုံသေ</label>
                            </div>
                            <div class="col-md-8">              
                              <select name="Cpaymentduration" class="form-control">
                                <option value="လဆန်း၅ရက်">လဆန်း၅ရက်</option>
                                <option value="လကုန်ရက်">လကုန်ရက်</option>
                              </select>
                            </div>
                          </div>          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </fieldset>
                  
            <div class="row">
                <div class="col-sm-5 text-center">
                  <label for="OTplan">အချိန်ပိုလုပ်ခပေးချေရန်အစီအစဉ် </label>
                  <input id="OTplan" class="form-control" name="OTplan" value="<?php echo e(old('OTplan')); ?>">
                </div>
                <div class="col-sm-1">
      
                </div>
                <div class="col-sm-6 text-left">
                  <label for="OTpaymentplan">အချိန်ပိုလုပ်ခပေးချေမှု</label>
                  <input id="OTpaymentplan" class="form-control" name="OTpaymentplan" value="<?php echo e(old('OTpaymentplan')); ?>">
                </div>
        </div>
          <fieldset class="scheduler-border">
            <legend class="scheduler-border">အခြေခံလုပ်ခအပြင် အခြားပေးချေငွေများနှင့် စည်းကမ်းချက်များ</legend>
                <div class="row">
                  <div class="col-sm-12 text-center">
                    
                      <div class='row'>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-12">
                              <label for="address">ကျွမ်းကျင်ကြေး</label>
                            </div>
                          </div>
                            <div class="col-sm-12">             
                              <div class="row">
                                <div class="col-sm-6">
                                  <input type="text"placeholder="အနည်းဆုံး" class="form-control" name="miniexperprize" value="<?php echo e(old('miniexperprize')); ?>"/>
                                </div>
                                <div class="col-sm-6">
                                  <input type="text"placeholder="အများဆုံး" class="form-control" name="maxexperprize" value="<?php echo e(old('maxexperprize')); ?>"/>
                                </div>
                              </div>
                            </div>
                          </div>          
                        </div>
                        
                    <div class="col-sm-6">
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-12">
                              <label for="address">ရက်မှန်ကြေး</label>
                            </div>
                          </div>
                            <div class="col-sm-12">             
                              <div class="row">
                                <div class="col-sm-6">
                                  <input type="text"placeholder="အနည်းဆုံး" class="form-control" name="miniregularprize" value="<?php echo e(old('miniregularprize')); ?>"/>
                                </div>
                                <div class="col-sm-6">
                                  <input type="text"placeholder="အများဆုံး" class="form-control" name="maxregularprizee" value="<?php echo e(old('maxregularprize')); ?>"/>
                                </div>
                              </div>
                            </div>
                          </div>          
                        </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 text-center">
                    
                      <div class='row'>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <div class="row">
                            <div class="col-md-4">
                              <label for="address">အထည်ကြေး/ထုတ်လုပ်မှုဆုကြေး</label>
                            </div>
                            <div class="col-md-4">              
                              <input type="text"placeholder="အနည်းဆုံး" class="form-control" name="miniproductprize" value="<?php echo e(old('miniproductprize')); ?>"/>
                            </div>
                            <div class="col-md-4">              
                              <input type="text"placeholder="အများဆုံး" class="form-control" name="maxproductprize" value="<?php echo e(old('maxproductprize')); ?>"/>
                            </div>
                          </div>          
                        </div>
                        
                      </div>
                      
                      
                    </div>
                  </div>
                </div>
            </fieldset>
              <div class="row">
                <div class="col-sm-5 text-center">
                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">ဒဏ်တပ်ရန်ထားရှိသော စည်းကမ်းချက်များ (အတည်ပြုချက် ရှိ/မရှိ အပါအဝင်)</legend>
                        <div class="control-group">
                         <div class="row">
                          <div class="col-sm-6 text-center">
                            <div class="custom-control custom-radio mb-3">
                              <input class="custom-control-input" id="fine" name="fine" type="radio" value='ရှိ' checked>
                              <label class="custom-control-label" for="fine">ရှိ</label>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="custom-control custom-radio mb-3">
                              <input  class="custom-control-input" id="fine1" type="radio" name="fine" value='မရှိ' <?php if(old('fine')=='မရှိ'): ?> checked <?php endif; ?>>
                              <label class="custom-control-label" for="fine1">မရှိ</label>
                            </div>
                          </div>
                         </div>
                        </div>
                    </fieldset>   
                </div>
                <div class="col-sm-1">
      
                </div>
                <div class="col-sm-6 text-left">
                    <label for="deductamount">ဖြတ်တောက်ငွေများ</label>
                    <input  name="deductamount" id="deductamount" class="form-control" value="<?php echo e(old('deductamount')); ?>">
                </div>
              </div>
          <fieldset class="scheduler-border">
            <legend class="scheduler-border">တရားမဝင် ဖြတ်တောက်မှုများ/မပေးချေရသေးမှုများ</legend>
                <div class="row">
                  <div class="col-sm-12 text-center">
                    
                      <div class='row'>
                      <div class="col-sm-4">
                        <div class="form-group">
                          
                          <input type="text"placeholder="ကာလ" class="form-control" name="illegaldeductedtime" value="<?php echo e(old('illegaldeductedtime')); ?>"/>
                        </div>
                                
                      </div>
                            
                          
                    <div class="col-sm-4">
                        <div class="form-group">
                          <input type="text"placeholder="လုပ်သားအရေအတွက်" class="form-control" name="illegaldeductedworkers" value="<?php echo e(old('illegaldeductedworkers')); ?>"/>
                        </div>
                                    
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                          <input type="text"placeholder="သင့်ငွေ" class="form-control" name="illegaldedutedamount" value="<?php echo e(old('illegaldedutedamount')); ?>"/>
                                
                        </div>
                    </div>          
                        
                    </div>
                  </div>
                </div>
                
            </fieldset>
          <div class="row">
              <div class="col-sm-5 text-center">
                <fieldset class="scheduler-border">
                <legend class="scheduler-border">လုပ်ခပေးချေခြင်း မှတ်တမ်း</legend>
                  <div class="control-group">
                       <div class="row">
                        <div class="col-sm-6 text-center">
                          <div class="custom-control custom-radio mb-3">
                            <input class="custom-control-input" id="customRadio" name="paymentnote" value='ရှိ' type="radio" checked>
                            <label class="custom-control-label" for="customRadio">ရှိ</label>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="custom-control custom-radio mb-3">
                            <input  class="custom-control-input" id="customRadio0" type="radio" name="paymentnote" value='မရှိ' <?php if(old('paymentnote')=='မရှိ'): ?> checked <?php endif; ?>>
                            <label class="custom-control-label" for="customRadio0">မရှိ</label>
                          </div>
                        </div>
                       </div>
                      </div>
                  </fieldset>
                  </div>
                  <div class="col-sm-1"></div>
                  <div class="col-sm-6 text-center">
                    <fieldset class="scheduler-border">
                      <legend class="scheduler-border">အခကြေးငွေမှနှုတ်ယူဖြတ်တောက်သည့်ငွေများ အသုံးပြုမှုမှတ်တမ်း</legend>
                      <div class="control-group">
                        <div class="row">
                        <div class="col-sm-6 text-center">
                          <div class="custom-control custom-radio mb-3">
                            <input class="custom-control-input" id="deductednote" name="deductednote" value='ရှိ' type="radio" checked>
                            <label class="custom-control-label" for="deductednote">ရှိ</label>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="custom-control custom-radio mb-3">
                            <input  class="custom-control-input" id="deductednote1"  type="radio" name="deductednote" value='မရှိ' <?php if(old('deductednote')=='မရှိ'): ?> checked <?php endif; ?>>
                            <label class="custom-control-label" for="deductednote1">မရှိ</label>
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
                <legend class="scheduler-border">အချိန်ပို ငွေကြေးခံစားခွင့်ပြုသည့်မှတ်တမ်း</legend>
                <div class="control-group">
                  <div class="row">
                  <div class="col-sm-6 text-center">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="allowotnote" name="allowotnote" value='ရှိ' type="radio" checked>
                      <label class="custom-control-label" for="allowotnote">ရှိ</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="allowotnote1"  type="radio" name="allowotnote" value='မရှိ' <?php if(old('allowotnote')=='မရှိ'): ?> checked <?php endif; ?>>
                      <label class="custom-control-label" for="allowotnote1">မရှိ</label>
                    </div>
                  </div>
                 </div>
                </div>
            </fieldset>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 text-center">
              <fieldset class="scheduler-border">
                <legend class="scheduler-border">ညွှန်ကြားရန်အချက်များ (မူကြမ်း)</legend>
                <div class="control-group">
                  <div class="row">
                    <div class="col-sm-12 text-center">
                       <textarea class="col-sm-12 form-control" rows="4" placeholder="ညွှန်ကြားရန်အချက် (က)" name="instruction1"><?php echo e(old('instruction1')); ?></textarea>
                    </div>
                 </div>
                 <div class="blank10"></div>
                 <div class="row">
                    <div class="col-sm-12 text-center">
                       <textarea class="col-sm-12 form-control" rows="4" placeholder="ညွှန်ကြားရန်အချက် (ခ)" name="instruction2"><?php echo e(old('instruction2')); ?></textarea>
                    </div>
                 </div>
                 <div class="blank10"></div>
                 <div class="row">
                    <div class="col-sm-12 text-center">
                       <textarea class="col-sm-12 form-control" rows="4" placeholder="ညွှန်ကြားရန်အချက် (ဂ)" name="instruction3"><?php echo e(old('instruction3')); ?></textarea>
                    </div>
                 </div>
                 <div class="blank10"></div>
                 <div class="row">
                        <div class="col-sm-12 text-center">
                           <textarea class="col-sm-12 form-control" rows="4" placeholder="ညွှန်ကြားရန်အချက် (ဃ)" name="instruction4"><?php echo e(old('instruction4')); ?></textarea>
                        </div>
                     </div>
                     <div class="blank10"></div>
                     <div class="row">
                        <div class="col-sm-12 text-center">
                           <textarea class="col-sm-12 form-control" rows="4" placeholder="ညွှန်ကြားရန်အချက် (င)" name="instruction5"><?php echo e(old('instruction5')); ?></textarea>
                        </div>
                     </div>
                     <div class="blank10"></div>
                </div>
            </fieldset>
            </div>
          </div>
        </p>
  </div>
<div class="blank10"></div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">ရှေ့တစ်မျက်နှာ</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">နောက်တစ်မျက်နှာ
    </button>
    </div>
  </div>
  
</form>
<!-- scroll back to top of the page -->
<a id="back2Top" title="Back to top" href="#">&#10148;</a>


 <script>

 //for tab 
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
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("inspectform").submit();
    return true;
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

$('#tempoarySave').click(function(){
  $("#tempoary").val('tempoary');
document.getElementById("inspectform").submit();
});


//search factory name
$(document).ready(function(){

 $('#factoryname').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"<?php echo e(route('autocomplete.fetch')); ?>",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
               $('#factoryList').fadeIn();  
               $('#factoryList').html(data);
               
            }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#factoryname').val($(this).text());  
        $('#factoryList').fadeOut();  
    });   
});

$( "#search" ).click(function() {
  var query = $('#factoryname').val();
               $.ajax({
                    type: 'GET', //THIS NEEDS TO BE GET
                    url: '<?php echo e(route('autocomplete.data')); ?>',
                    data:{name:query},
                    success: function (data) {
                        console.log(data);
                        $('#factory_id').val(data.FactoryId);
                        if(data.WorkTimeType==0){
                           $("#dailyworktime").val(data.MToSTimein+' မှ '+data.MToSTimeout + 'အထိ');
                           $("#weeklyworktime").val('တနင်္လာမှ စနေနေ့အထိ');
                           $("#resttime").val(data.LunchStartTime+' မှ '+data.LunchEndTime + 'အထိ');
                           $("#weekendholiday").val('တနင်္ဂနွေနေ့');
                             }else if(data.WorkTimeType==2){
                            $("#dailyworktime").val(data.MToFTimeInOther+' မှ '+data.MToFTimeoutOther + 'အထိ');
                            $("#weeklyworktime").val('တနင်္လာမှ သောကြာအထိ');
                            $("#resttime").val(data.LunchStartTime+' မှ '+data.LunchEndTime + 'အထိ');
                            $("#weekendholiday").val('စနေ တနင်္ဂနွေ');

                          }else{
                           $("#dailyworktime").val('တနင်္လာမှ သောကြာ'+data.MToFTimein+' မှ '+data.MToFTimeout + 'အထိ'+'စနေနေ့'+data.STimein+' မှ '+data.STimeout + 'အထိ');
                           $("#weeklyworktime").val('တနင်္လာမှ သောကြာ စနေနေ့တစ်ဝက်');
                           $("#resttime").val(data.LunchStartTime+' မှ '+data.LunchEndTime + 'အထိ');
                           $("#weekendholiday").val('စနေနေ့တစ်ဝက်နှင့် တနင်္ဂနွေနေ့');
                             }
                    },
                    error: function() { 
                         console.log(data);
                         
                    }
        });
});

// clear data for equal notice
function equalNotice(){
  $('#dailyworktime').val('');
  $('#weeklyworktime').val('');
  $('#resttime').val('');
  $('#weekendholiday').val('');

}
  </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>