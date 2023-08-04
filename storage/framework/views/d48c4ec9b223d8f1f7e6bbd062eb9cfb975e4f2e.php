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

</script>

        <div class="row">
            <div class="col-sm-12 text-right">
                <button  id="tempoarySave">ယာယီသိမ်းဆည်းမည် </button>
            </div>
        </div>

    <div style="text-align:center;margin-top:40px;">
        <a  style="text-decoration: none;" onclick="nextPrevv(0)"><span class="step">1</span></a>
        <span class="step" onclick="nextPrevv(1)">2</span>
        <span class="step" onclick="nextPrevv(2)">3</span>
        <span class="step" onclick="nextPrevv(3)">4</span>
        <span class="step" onclick="nextPrevv(4)">5</span>
    </div> <br>

    <h1 style="text-align:center;margin-bottom:40px;"> အလုပ်သမားဥပဒေစစ်ဆေးရေး</h1>
    <?php if(session()->get('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-inner--icon"></span>
            <span class="alert-inner--text">  <?php echo e(session()->get('success')); ?>  </span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
  
<form id="inspectform"class="form-background" action="<?php echo e(route('LabourInspectionLaw.store')); ?>"  method="post">
     <?php echo e(csrf_field()); ?>


     
     <input type="hidden" name="tempoary" id="tempoary">
     <p>
         <label for="">အလုပ်ရုံ၊ စက်ရုံ အမည်</label> - <?php echo e(App\Factory::where('FactoryId',$factoryLabourInspectionLaw->factory_id)->value('FactoryName')); ?> 
     <input type="hidden" name="factory_id" value="<?php echo e($factoryLabourInspectionLaw->factory_id); ?>">  
     </p>
     <div class="tab">
         <h3 class="text-center">၁၉၅၁ အလုပ်ရုံများ အက်ဥပဒေအရ စစ်ဆေးချက်ပုံစံ</h3>
        <h4>အလုပ်ချိန်သတ်မှတ်ချက်ဆိုင်ရာ အချက်အလက်များ</h4>
  <!-- For new design-->
            <p>
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">လုပ်ငန်းပိုင်ရှင်ကပေးပို့ရန်နို့တစ်စာပေးပို့ခြင်း </legend>
                            <div class="control-group">
                                 <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input class="custom-control-input" id="sentnotice" name="sentnotice" type="radio" value='ပြု'  <?php if($factoryLabourInspectionLaw->sentnotice=='ပြု'): ?> checked <?php endif; ?>>
                                          <label class="custom-control-label" for="sentnotice">ပြု</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="sentnotice1"  type="radio" name="sentnotice" value='မပြု'  <?php if($factoryLabourInspectionLaw->sentnotice=='မပြု'): ?> checked <?php endif; ?>>
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
                                          <input  class="custom-control-input" id="shownotice" name="shownotice" type="radio" value='ပြု' <?php if($factoryLabourInspectionLaw->shownotice=='ပြု'): ?> checked <?php endif; ?>>
                                          <label class="custom-control-label" for="shownotice">ပြု</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="shownotice1"  type="radio" name="shownotice" value='မပြု' <?php if($factoryLabourInspectionLaw->shownotice=='မပြု'): ?> checked <?php endif; ?>>
                                            <label class="custom-control-label" for="shownotice1">မပြု</label>
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
            <div class="row col-sm-5"><b>အလုပ်လုပ်ရန်ကာလအပိုင်းအခြားများ စီစဉ်ထားမှု -နို့တစ်စာအတွင်း </b><br/></div>
                <div class="row">               
                    <div class="col-sm-5 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">
                             အလုပ်လုပ်ချိန်များ၊အနားပေးချိန်၊ရက်သတ္တပတ်အလုပ်ပိတ်ရက်/နားရက်  </legend>
                            <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <input type="date" placeholder="နေ့စွဲ" name="workingduration" id="datepicker" value="<?php echo e($factoryLabourInspectionLaw->workingduration); ?>">
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
                                          <input  class="custom-control-input" id="repeatitivework" name="repeatitivework" type="radio" value='ရှိ' <?php if($factoryLabourInspectionLaw->repeatitivework=='ရှိ'): ?> checked <?php endif; ?>>
                                          <label class="custom-control-label" for="repeatitivework">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="repeatitivework1"  type="radio" name="repeatitivework" value='မရှိ' <?php if($factoryLabourInspectionLaw->repeatitivework=='မရှိ'): ?> checked <?php endif; ?>>
                                            <label class="custom-control-label" for="repeatitivework1">မရှိ</label>
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
                            <legend class="scheduler-border">နို့တစ်စာအပြောင်းအလဲ</legend>
                            <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="changenotice" name="changenotice" type="radio" value='ရှိ' <?php if($factoryLabourInspectionLaw->changenotice=='ရှိ'): ?> checked <?php endif; ?>>
                                          <label class="custom-control-label" for="changenotice">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="changenotice1"  type="radio" name="changenotice" value='မရှိ' <?php if($factoryLabourInspectionLaw->changenotice=='မရှိ'): ?> checked <?php endif; ?>>
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
                                          <input  class="custom-control-input" id="informchangenotice" name="informchangenotice" type="radio" value='ကြား' <?php if($factoryLabourInspectionLaw->informchangenotice=='ကြား'): ?> checked <?php endif; ?>>
                                          <label class="custom-control-label" for="informchangenotice">ကြား</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="informchangenotice1"  type="radio" name="informchangenotice" value='မကြား' <?php if($factoryLabourInspectionLaw->informchangenotice=='မကြား'): ?> checked <?php endif; ?>>
                                            <label class="custom-control-label" for="informchangenotice1">မကြား</label>
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
                    <div class="col-sm-12 text-center">
                            <fieldset class="scheduler-border">
                            <legend class="scheduler-border">ချိတ်ဆွဲသည့် နို့တစ်စာပါ အလုပ်ချိန်နှင့်အညီ</legend>
                            <div class="control-group">
                                <div class="row">
                                 <div class="col-sm-4">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="equalnotice" name="equalnotice" type="radio" value='လုပ်' <?php if($factoryLabourInspectionLaw->equalnotice=='လုပ်'): ?> checked <?php endif; ?>>
                                          <label class="custom-control-label" for="equalnotice">လုပ်</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="equalnotice1" type="radio" name="equalnotice" value='မလုပ်' <?php if($factoryLabourInspectionLaw->equalnotice=='မလုပ်'): ?> checked <?php endif; ?>>
                                            <label class="custom-control-label" for="equalnotice1" onclick="equalNotice()">မလုပ်</label>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                     <label for="dailyworktime"> နေ့စဉ်</label>
                                 <input name="dailyworktime" id="dailyworktime" value="<?php echo e($factoryLabourInspectionLaw->dailyworktime); ?>">
                                 </div>
                                 <div class="col-sm-4">
                                     <label for="weeklyworktime"> ရက်သတ္တပတ်</label>
                                    <input   name="weeklyworktime" id="weeklyworktime" value="<?php echo e($factoryLabourInspectionLaw->weeklyworktime); ?>">
                                 </div>
                                 </div> <br>
                                 <div class='row'><div class="col-sm-4">
                                     <label for="resttime"> အနားပေးချိန်</label>
                                    <input id="resttime"  name="resttime" value="<?php echo e($factoryLabourInspectionLaw->resttime); ?>">
                                 </div>
                                 <div class="col-sm-4">
                                     <label for="weekendholiday">ရက်သတ္တပတ်ပိတ်ရက်</label>
                                    <input id="weekendholiday" name="weekendholiday" value="<?php echo e($factoryLabourInspectionLaw->weekendholiday); ?>">
                                 </div>
                                    
                                 </div>
                            </div>
                        </fieldset>
                    </div>
                    
                </div>
            </p>
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
                                      <input  class="custom-control-input" id="insteadrelaxdays" name="insteadrelaxdays" type="radio" value='ရှိ' <?php if($factoryLabourInspectionLaw->insteadrelaxdays=='ရှိ'): ?> checked <?php endif; ?>>
                                      <label class="custom-control-label" for="insteadrelaxdays">ရှိ</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio mb-3">
                                        <input  class="custom-control-input" id="insteadrelaxdays1" type="radio" value='မရှိ' name="insteadrelaxdays" <?php if($factoryLabourInspectionLaw->insteadrelaxdays=='မရှိ'): ?> checked <?php endif; ?> >
                                        <label class="custom-control-label" for="insteadrelaxdays1">မရှိ</label>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </fieldset>
            </div>
        </div>
        <!-- For new design-->
            <p>
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
                                                              <input  class="custom-control-input" id="prepermit" name="prepermit" type="radio" value='ရှိ' <?php if($factoryLabourInspectionLaw->prepermit=='ရှိ'): ?> checked <?php endif; ?> >
                                                              <label class="custom-control-label" for="prepermit">ရှိ</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="custom-control custom-radio mb-3">
                                                                <input  class="custom-control-input" id="prepermit1" type="radio" value='မရှိ' name="prepermit" <?php if($factoryLabourInspectionLaw->prepermit=='မရှိ'): ?> checked <?php endif; ?> >
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
                                                              <input  class="custom-control-input" id="workwithpermit" name="workwithpermit" type="radio" value='ရှိ' <?php if($factoryLabourInspectionLaw->workwithpermit=='ရှိ'): ?> checked <?php endif; ?>>
                                                              <label class="custom-control-label" for="workwithpermit">ရှိ</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="custom-control custom-radio mb-3">
                                                                <input  class="custom-control-input" id="workwithpermit1" type="radio" value='မရှိ' name="workwithpermit" <?php if($factoryLabourInspectionLaw->workwithpermit=='မရှိ'): ?> checked <?php endif; ?>>
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
                                        <input id="otpayscale"  name="otpayscale" value="<?php echo e($factoryLabourInspectionLaw->otpayscale); ?>">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="diffrentotpayment"> အချိန်ပိုလုပ်ခခြားနားငွေ</label>
                                             <input id="diffrentotpayment"  name="diffrentotpayment" value="<?php echo e($factoryLabourInspectionLaw->diffrentotpayment); ?>">
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
                                                              <input  class="custom-control-input" id="allowtimecalculate" name="allowtimecalculate" type="radio" value='ရှိ' <?php if($factoryLabourInspectionLaw->allowtimecalculate=='ရှိ'): ?> checked <?php endif; ?>>
                                                              <label class="custom-control-label" for="allowtimecalculate">ရှိ</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="custom-control custom-radio mb-3">
                                                                <input  class="custom-control-input" id="allowtimecalculate1" type="radio" value='မရှိ' name="allowtimecalculate" <?php if($factoryLabourInspectionLaw->allowtimecalculate=='မရှိ'): ?> checked <?php endif; ?>>
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
            </p>
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
                                 <input id="illegalotallow"  name="illegalotallow" value="<?php echo e($factoryLabourInspectionLaw->illegalotallow); ?>">
                                 </div>                             
                                 <div class="col-sm-6">
                                     <label for="illegalottime">လုပ်ကိုင်မှုအခြေအနေ(ကာလ၊နေ့စဉ်/အပတ်စဉ်-နာရီ)</label>
                                    <input id="illegalottime"  name="illegalottime" value="<?php echo e($factoryLabourInspectionLaw->illegalottime); ?>">
                                 </div>                              
                                 </div>
                            </div>
                            <div style="height:5px"></div>
                            <div class="control-group">
                                <div class="row">
                                 <div class="col-sm-6">
                                     <label for="illegalotpayment">ပေးချေသည့် အချိန်ပိုလုပ်ခနှုန်းထား </label>
                                    <input id="illegalotpayment"  name="illegalotpayment" value="<?php echo e($factoryLabourInspectionLaw->illegalotpayment); ?>"> 
                                 </div>
                                 <div class="col-sm-6">
                                    <fieldset class="scheduler-border">
                                            <legend class="scheduler-border">တစ်ရက်တည်းတွင် အလုပ်ရုံ(၂)ရုံ၌လုပ်ကိုင်ခြင်း</legend>
                                            <div class="control-group">
                                                <div class="row">
                                                     <div class="col-sm-6 text-center">
                                                         <div class="custom-control custom-radio mb-3">
                                                          <input  class="custom-control-input" id="twofacbyday" name="twofacbyday" type="radio" value='ရှိ' <?php if($factoryLabourInspectionLaw->twofacbyday=='ရှိ'): ?> checked <?php endif; ?>>
                                                          <label class="custom-control-label" for="twofacbyday">ရှိ</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input  class="custom-control-input" id="twofacbyday1" type="radio" value='မရှိ' name="twofacbyday" <?php if($factoryLabourInspectionLaw->twofacbyday=='မရှိ'): ?> checked <?php endif; ?>>
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
            </p>
  <!--end of new design-->
        <!-- For new design-->
            <p>
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
                                                          <input  class="custom-control-input" id="definedworktime" name="definedworktime" type="radio" value='ရှိ' <?php if($factoryLabourInspectionLaw->definedworktime=='ရှိ'): ?> checked <?php endif; ?>>
                                                          <label class="custom-control-label" for="definedworktime">ရှိ</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input  class="custom-control-input" id="definedworktime1" type="radio" value='မရှိ' name="definedworktime" <?php if($factoryLabourInspectionLaw->definedworktime=='မရှိ'): ?> checked <?php endif; ?>>
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
                                                          <input  class="custom-control-input" id="stosworktime" name="stosworktime" type="radio" value='ရှိ' <?php if($factoryLabourInspectionLaw->stosworktime=='ရှိ'): ?> checked <?php endif; ?>>
                                                          <label class="custom-control-label" for="stosworktime">ရှိ</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input  class="custom-control-input" id="stosworktime1" type="radio" value='မရှိ' name="stosworktime" <?php if($factoryLabourInspectionLaw->stosworktime=='မရှိ'): ?> checked <?php endif; ?>>
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
            </p>
  <!--end of new design-->          
  </div>
  
  <div class="tab">
      <h3 class="text-center">၁၉၅၁ အလုပ်ရုံများ အက်ဥပဒေအရ စစ်ဆေးချက်ပုံစံ</h3>
      <h4>သက်သာချောင်ချိရေးဆိုင်ရာ အချက်အလက်များ</h4>
    
    <!--start new design-->
        <p>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">ကိုယ်လက်ဆေးကြောရန် စီမံထားရှိခြင်း</legend>
                            <div class="control-group">
                                 <div class="row">
                                    <div class="col-sm-4">
                                        <label for="washcategory"> အမျိုးအမည်</label>
                                    <input id="washcategory"  name="washcategory" value="<?php echo e($factoryLabourInspectionLaw->washcategory); ?>">
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="custom-control custom-radio mb-3">
                                            <label for="washamount"> အရေအတွက်</label>
                                            <input id="washamount"  name="washamount" value="<?php echo e($factoryLabourInspectionLaw->washamount); ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class='row'><label>အသုံးပြုနိုင်မှုအခြေအနေ</label></div>
                                        <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="washusestate" name="washusestate" type="radio" value='ကောင်း' <?php if($factoryLabourInspectionLaw->washusestate=='ကောင်း'): ?> checked <?php endif; ?>>
                                          <label class="custom-control-label" for="washusestate">ကောင်း</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="washusestate1"  type="radio" name="washusestate" value='မကောင်း' <?php if($factoryLabourInspectionLaw->washusestate=='မကောင်း'): ?> checked <?php endif; ?>>
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
            </p>
    <!--end new design-->
    <!--start new design-->
        <p>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">ထိုင်ခွင့်ကြုံက ထိုင်နိုင်ရန် စီမံထားရှိခြင်း</legend>
                            <div class="control-group">
                                 <div class="row">
                                    <div class="col-sm-4">
                                        <label for="sitcategory">အမျိုးအမည် </label>
                                    <input id="sitcategory"  name="sitcategory" value="<?php echo e($factoryLabourInspectionLaw->sitcategory); ?>">
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="custom-control custom-radio mb-3">
                                            <label for="sitamount">အရေအတွက် </label>
                                            <input id="sitamount"  name="sitamount" value="<?php echo e($factoryLabourInspectionLaw->sitamount); ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class='row'><label>အသုံးပြုနိုင်မှုအခြေအနေ</label></div>
                                        <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="situsestate" name="situsestate" type="radio" value='ကောင်း' <?php if($factoryLabourInspectionLaw->situsestate=='ကောင်း'): ?> checked <?php endif; ?>>
                                          <label class="custom-control-label" for="situsestate">ကောင်း</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="situsestate1"  type="radio" name="situsestate" value='မကောင်း' <?php if($factoryLabourInspectionLaw->situsestate=='မကောင်း'): ?> checked <?php endif; ?>>
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
            </p>
    <!--end new design-->
    <!--start new design-->
                    <p>
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">သူနာပြုဆေးသေတ္တာ၊ သူနာပြုဆေးခန်း၊ ဆေးပေးရုံထားရှိခြင်းအခြေအနေ</legend>
                            <div class="control-group">
                                 <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <select name="medicalcaretype" class="form-control">
                                            <option value="သူနာပြုဆေးသေတ္တာ" <?php if($factoryLabourInspectionLaw->medicalcaretype=='သူနာပြုဆေးသေတ္တာ'): ?> selected <?php endif; ?>>သူနာပြုဆေးသေတ္တာ</option>
                                            <option value="သူနာပြုဆေးခန်း" <?php if($factoryLabourInspectionLaw->medicalcaretype=='သူနာပြုဆေးခန်း'): ?> selected <?php endif; ?>>သူနာပြုဆေးခန်း</option>
                                            <option value="ဆေးပေးရုံ" <?php if($factoryLabourInspectionLaw->medicalcaretype=='ဆေးပေးရုံ'): ?> selected <?php endif; ?>>ဆေးပေးရုံ </option>
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
                                          <input  class="custom-control-input" id="babysittingroom" name="babysittingroom" type="radio" value='ရှိ' <?php if($factoryLabourInspectionLaw->babysittingroom=='ရှိ'): ?> checked <?php endif; ?>>
                                          <label class="custom-control-label" for="babysittingroom">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="babysittingroom1"  type="radio" name="babysittingroom" value='မရှိ' <?php if($factoryLabourInspectionLaw->babysittingroom=='မရှိ'): ?> checked <?php endif; ?>>
                                            <label class="custom-control-label" for="babysittingroom1">မရှိ</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </p>
    <!--end new design-->
        <!--start new design-->
                    <p>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <fieldset class="scheduler-border">
                                <legend class="scheduler-border">အလုပ်နားခန်းနှင့်အစာစားခန်းများထားရှိခြင်း အခြေအနေ (အလုပ်သမား ၁၀၀ နှင့်အထက်ရှိ လုပ်ငန်းများ)</legend>
                                <div class="control-group">
                                    <div class="row">
                                        <div class="col-sm-6 text-center">
                                            <div class="custom-control custom-radio mb-3">
                                              <input  class="custom-control-input" id="dinningroom" name="dinningroom" type="radio" value='ရှိ' <?php if($factoryLabourInspectionLaw->dinningroom=='ရှိ'): ?> checked <?php endif; ?>>
                                              <label class="custom-control-label" for="dinningroom">ရှိ</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-radio mb-3">
                                                <input  class="custom-control-input" id="dinningroom1"  type="radio" name="dinningroom" value='မရှိ' <?php if($factoryLabourInspectionLaw->dinningroom=='မရှိ'): ?> checked <?php endif; ?>>
                                                <label class="custom-control-label" for="dinningroom1">မရှိ</label>
                                            </div>
                                        </div>
                                     </div>
                                </div>
                            </fieldset>
                    </div>
                    
                </div>
            </p>

            <h3>အပ်နှင်းထားသော အချက်အလက်များ</h3>
            <p>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">သောက်ရေ</legend>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="control-group">
                                        <label for="waterplace"> တည်နေရာ</label>
                                    <input id="waterplace"  name="waterplace" value="<?php echo e($factoryLabourInspectionLaw->waterplace); ?>">
                                    </div>
                                </div>
                                    <div class="col-sm-6">
                                        <div class="control-group">
                                            <label for="watercleanence"> သောက်ရေသန့်ရှင်းမှု</label>
                                            <input id="watercleanence"  name="watercleanence" value="<?php echo e($factoryLabourInspectionLaw->watercleanence); ?>">
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
                                          <input  class="custom-control-input" id="suffientamount" name="suffientamount" type="radio" value='ရှိ' <?php if($factoryLabourInspectionLaw->suffientamount=='ရှိ'): ?> checked <?php endif; ?>>
                                          <label class="custom-control-label" for="suffientamount">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="suffientamount1"  type="radio" name="suffientamount" value='မရှိ' <?php if($factoryLabourInspectionLaw->suffientamount=='မရှိ'): ?> checked <?php endif; ?>>
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
                                          <input  class="custom-control-input" id="cooling" name="cooling" value='ရှိ' type="radio" <?php if($factoryLabourInspectionLaw->cooling=='ရှိ'): ?> checked <?php endif; ?>>
                                          <label class="custom-control-label" for="cooling">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="cooling1"  type="radio" value='မရှိ' name="cooling" <?php if($factoryLabourInspectionLaw->cooling=='မရှိ'): ?> checked <?php endif; ?>>
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
                
            </p>
    <!--end new design-->
    <p>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">အိမ်သာ</legend>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="control-group">
                                        <label for="tioletcategroy">အမျိုးအစား </label>
                                    <input id="tioletcategroy"  name="tioletcategroy" value="<?php echo e($factoryLabourInspectionLaw->tioletcategroy); ?>">
                                    </div>
                                </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-4">
                                            <div class='row'><label style="padding-left:1.5rem">တည်နေရာနှင့်လုံခြုံမှု</label></div>
                                        <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="tioletplace" name="tioletplace" type="radio" value='ရှိ' <?php if($factoryLabourInspectionLaw->tioletplace=='ရှိ'): ?> checked <?php endif; ?>> 
                                          <label class="custom-control-label" for="tioletplace">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="tioletplace1"  type="radio" name="tioletplace" value='မရှိ' <?php if($factoryLabourInspectionLaw->tioletplace=='မရှိ'): ?> checked <?php endif; ?>>
                                            <label class="custom-control-label" for="tioletplace">မရှိ</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class='row'><label style="padding-left:1.5rem">သန့်ရှင်းမှု </label></div>
                                        <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="tioletclean" name="tioletclean" value='ရှိ' type="radio" <?php if($factoryLabourInspectionLaw->tioletclean=='ရှိ'): ?> checked <?php endif; ?>>
                                          <label class="custom-control-label" for="tioletclean">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="tioletclean1"  type="radio" value='မရှိ' name="tioletclean" <?php if($factoryLabourInspectionLaw->tioletclean=='မရှိ'): ?> checked <?php endif; ?>>
                                            <label class="custom-control-label" for="tioletclean1">မရှိ</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class='row'><label style="padding-left:1.5rem">ကျား/မခွဲခြားမှု</label></div>
                                        <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="genderdivide" name="genderdivide" value='ရှိ' type="radio" <?php if($factoryLabourInspectionLaw->genderdivide=='ရှိ'): ?> checked <?php endif; ?>>
                                          <label class="custom-control-label" for="genderdivide">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="genderdivide1"  value='မရှိ' type="radio" name="genderdivide" <?php if($factoryLabourInspectionLaw->genderdivide=='မရှိ'): ?> checked <?php endif; ?>>
                                            <label class="custom-control-label" for="genderdivide1">မရှိ</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div style="height:10px"></div>
                            <div class="row">
                                
                                    <div class="col-sm-4">
                                        <div class="control-group">
                                            <label for="tioletroom"> အခန်းအရေအတွက်</label>
                                        <input type="text" id="tioletroom"  name="tioletroom" value="<?php echo e($factoryLabourInspectionLaw->tioletroom); ?>"/>
                                        </div>
                            
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="mtioletroom"> ကျားအိမ်သာ</label>
                                                <input type="text" id="mtioletroom" name="mtioletroom" value="<?php echo e($factoryLabourInspectionLaw->mtioletroom); ?>"/>
                                            </div>
                                    <div class="col-sm-4">
                                        <label for="ftioletroom"> မအိမ်သာ</label>
                                        <input type="text" id="ftioletroom"  name="ftioletroom" value="<?php echo e($factoryLabourInspectionLaw->ftioletroom); ?>"/>
                                    </div>
                                 </div>
                            </div>
                                        
                                    </div>
                                    </div>
                        
                         </fieldset>
                    </div>          
                
            </p>
    <!--end new design-->
            <p>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">မတော်တဆထိခိုက်မှုရှိ/မရှိနှင့်အစီရင်ခံစာပေးပို့ခြင်း</legend>
                            <div class="row">
                                <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="accidentcase" name="accidentcase" value='ရှိ' type="radio" <?php if($factoryLabourInspectionLaw->accidentcase=='ရှိ'): ?> checked <?php endif; ?>>
                                          <label class="custom-control-label" for="accidentcase">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="accidentcase1"  type="radio" name="accidentcase" value='မရှိ'  <?php if($factoryLabourInspectionLaw->accidentcase=='မရှိ'): ?> checked <?php endif; ?>>
                                            <label class="custom-control-label" for="accidentcase1">မရှိ</label>
                                        </div>
                                    </div>
                                 </div>
                            
                        
                        </fieldset>
                    </div> 
                </div>                  
                
            </p>

  </div>
  <div class="tab">
        <h3 class="text-center">၁၉၅၁ အလုပ်ရုံများ အက်ဥပဒေအရ စစ်ဆေးချက်ပုံစံ</h3>
        <h4>မှတ်တမ်းစာအုပ်များနှင့် မှတ်တမ်းများ</h4>
        <p>
                    <div class="row">
                        <div class="col-sm-5 text-center">
                            <fieldset class="scheduler-border">
                                <legend class="scheduler-border">အလုပ်သမားမှတ်ပုံတင်စာအုပ်</legend>
                                <div class="control-group">
                                     <div class="row">
                                        <div class="col-sm-6 text-center">
                                            <div class="custom-control custom-radio mb-3">
                                              <input class="custom-control-input" id="workerregistrationbook" name="workerregistrationbook" value='ရှိ' type="radio" <?php if($factoryLabourInspectionLaw->workerregistrationbook=='ရှိ'): ?> checked <?php endif; ?>>
                                              <label class="custom-control-label" for="workerregistrationbook">ရှိ</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-radio mb-3">
                                                <input  class="custom-control-input" id="workerregistrationbook1"  value='မရှိ' type="radio" name="workerregistrationbook" <?php if($factoryLabourInspectionLaw->workerregistrationbook=='မရှိ'): ?> checked <?php endif; ?>>
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
                                              <input class="custom-control-input" id="childregistrationbook" name="childregistrationbook" value='ရှိ' type="radio" <?php if($factoryLabourInspectionLaw->childregistrationbook=='ရှိ'): ?> checked <?php endif; ?>>
                                              <label class="custom-control-label" for="childregistrationbook">ရှိ</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-radio mb-3">
                                                <input  class="custom-control-input" id="childregistrationbook1"  value='မရှိ' type="radio" name="childregistrationbook" <?php if($factoryLabourInspectionLaw->childregistrationbook=='မရှိ'): ?> checked <?php endif; ?>>
                                                <label class="custom-control-label" for="childregistrationbook1">မရှိ</label>
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
                                <legend class="scheduler-border">အထွေထွေမှတ်ပုံတင်စာအုပ်</legend>
                                <div class="control-group">
                                     <div class="row">
                                        <div class="col-sm-6 text-center">
                                            <div class="custom-control custom-radio mb-3">
                                              <input class="custom-control-input" id="generalbook" name="generalbook" value='ရှိ' type="radio" <?php if($factoryLabourInspectionLaw->generalbook=='ရှိ'): ?> checked <?php endif; ?>>
                                              <label class="custom-control-label" for="generalbook">ရှိ</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-radio mb-3">
                                                <input  class="custom-control-input" id="generalbook1"  value='မရှိ' type="radio" name="generalbook" <?php if($factoryLabourInspectionLaw->generalbook=='မရှိ'): ?> checked <?php endif; ?>>
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
                                              <input class="custom-control-input" id="wokerofficetimebook" name="wokerofficetimebook" value='ရှိ' type="radio" <?php if($factoryLabourInspectionLaw->wokerofficetimebook=='ရှိ'): ?> checked <?php endif; ?>>
                                              <label class="custom-control-label" for="wokerofficetimebook">ရှိ</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-radio mb-3">
                                                <input  class="custom-control-input" id="wokerofficetimebook1"  value='မရှိ' type="radio" name="wokerofficetimebook" <?php if($factoryLabourInspectionLaw->wokerofficetimebook=='မရှိ'): ?> checked <?php endif; ?>>
                                                <label class="custom-control-label" for="wokerofficetimebook1">မရှိ</label>
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
                                <legend class="scheduler-border">အချိန်ပိုလုပ်ကိုင်ခြင်း မှတ်တမ်း</legend>
                                <div class="control-group">
                                     <div class="row">
                                        <div class="col-sm-6 text-center">
                                            <div class="custom-control custom-radio mb-3">
                                              <input class="custom-control-input" id="otbook" name="otbook" value='ရှိ' type="radio" <?php if($factoryLabourInspectionLaw->otbook=='ရှိ'): ?> checked <?php endif; ?>>
                                              <label class="custom-control-label" for="otbook">ရှိ</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-radio mb-3">
                                                <input  class="custom-control-input" id="otbook1" checked="" value='မရှိ' type="radio" name="otbook" <?php if($factoryLabourInspectionLaw->otbook=='မရှိ'): ?> checked <?php endif; ?>>
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
      <p>
          <div class="row">
            <div class="col-sm-5 text-center">
              <fieldset class="scheduler-border">
                <legend class="scheduler-border">ရှောင်တခင်ခွင့်(၆)ရက် ခံစားခွင့်</legend>
                <div class="control-group">
                 <div class="row">
                  <div class="col-sm-6 text-center">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="causal" name="causalleave" type="radio" value='ပေး' <?php if($factoryLabourInspectionLaw->causalleave=='ပေး'): ?> checked <?php endif; ?>>
                      <label class="custom-control-label" for="causal">ပေး</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="causal1"  type="radio" name="causalleave" value='မပေး' <?php if($factoryLabourInspectionLaw->causalleave=='မပေး'): ?> checked <?php endif; ?>>
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
                      <input  class="custom-control-input" id="annual" name="annualleave" type="radio" value='ပေး' <?php if($factoryLabourInspectionLaw->annualleave=='ပေး'): ?> checked <?php endif; ?>>
                      <label class="custom-control-label" for="annual">ပေး</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="SSB1"  type="radio" name="annualleave" value='မပေး' <?php if($factoryLabourInspectionLaw->annualleave=='မပေး'): ?> checked <?php endif; ?>>
                      <label class="custom-control-label" for="SSB1">မပေး</label>
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
                <legend class="scheduler-border">ဆေးလက်မှတ်ခွင့် ခံစားခွင့်</legend>
                <div class="control-group">
                 <div class="row">
                  <div class="col-sm-6 text-center">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="medicalleave" name="medicalleave" type="radio" value='ပေး' <?php if($factoryLabourInspectionLaw->medicalleave=='ပေး'): ?> checked <?php endif; ?>>
                      <label class="custom-control-label" for="medicalleave">ပေး</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="medicalleave1"  type="radio" name="medicalleave" value='မပေး' <?php if($factoryLabourInspectionLaw->medicalleave=='မပေး'): ?> checked <?php endif; ?>>
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
                      <input  class="custom-control-input" id="maternityleave" name="maternity" type="radio" value='ပေး' <?php if($factoryLabourInspectionLaw->maternity=='ပေး'): ?> checked <?php endif; ?>>
                      <label class="custom-control-label" for="maternityleave">ပေး</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="maternityleave1"  type="radio" name="maternity" value='မပေး'  <?php if($factoryLabourInspectionLaw->maternity=='မပေး'): ?> checked <?php endif; ?>>
                      <label class="custom-control-label" for="maternityleave1">မပေး</label>
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
                <legend class="scheduler-border">အများပြည်သူအလုပ်ပိတ်ရက် ခံစားခွင့်</legend>
                <div class="control-group">
                 <div class="row">
                  <div class="col-sm-6 text-center">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="publicholiday" name="publicholiday" type="radio" value='ပေး'  <?php if($factoryLabourInspectionLaw->publicholiday=='ပေး'): ?> checked <?php endif; ?>>
                      <label class="custom-control-label" for="publicholiday">ပေး</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="publicholiday1"  type="radio" name="publicholiday" value='မပေး' <?php if($factoryLabourInspectionLaw->publicholiday=='မပေး'): ?> checked <?php endif; ?>>
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
                      <input  class="custom-control-input" id="weekendholiday" name="weekholiday" type="radio" value='ပေး' <?php if($factoryLabourInspectionLaw->weekholiday=='ပေး'): ?> checked <?php endif; ?>>
                      <label class="custom-control-label" for="weekendholiday">ပေး</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="weekendholiday1"  type="radio" name="weekholiday" value='မပေး' <?php if($factoryLabourInspectionLaw->weekholiday=='မပေး'): ?> checked <?php endif; ?>>
                      <label class="custom-control-label" for="weekendholiday1">မပေး</label>
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
                <legend class="scheduler-border">ခွင့်မှတ်တမ်း</legend>
                <div class="control-group">
                 <div class="row">
                  <div class="col-sm-6 text-center">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="leavenote" name="leavenote" type="radio" value='ထား' <?php if($factoryLabourInspectionLaw->leavenote=='ထား'): ?> checked <?php endif; ?>>
                      <label class="custom-control-label" for="leavenote">ထား</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="leavenote1"  type="radio" name="leavenote" value='မထား'  <?php if($factoryLabourInspectionLaw->leavenote=='မထား'): ?> checked <?php endif; ?>>
                      <label class="custom-control-label" for="leavenote1">မထား</label>
                    </div>
                  </div>
                 </div>
                </div>
            </fieldset>
            </div>
          </div>
        </p>
        
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
                                <option value="လဆန်း၅ရက်" <?php if($factoryLabourInspectionLaw->Mpaymentduration=='လဆန်း၅ရက်'): ?> selected <?php endif; ?>>လဆန်း၅ရက်</option>
                                <option value="လကုန်ရက်" <?php if($factoryLabourInspectionLaw->Mpaymentduration=='လကုန်ရက်'): ?> selected <?php endif; ?>>လကုန်ရက်</option>
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
                                <option value="လဆန်း၅ရက်" <?php if($factoryLabourInspectionLaw->Mpaymentduration=='လဆန်း၅ရက်'): ?> selected <?php endif; ?>>လဆန်း၅ရက်</option>
                                <option value="လကုန်ရက်" <?php if($factoryLabourInspectionLaw->Mpaymentduration=='လကုန်ရက်'): ?> selected <?php endif; ?>>လကုန်ရက်</option>
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
                                <option value="လဆန်း၅ရက်"  <?php if($factoryLabourInspectionLaw->Ppaymentduration=='လဆန်း၅ရက်'): ?> selected <?php endif; ?>>လဆန်း၅ရက်</option>
                                <option value="လကုန်ရက်" <?php if($factoryLabourInspectionLaw->Ppaymentduration=='လကုန်ရက်'): ?> selected <?php endif; ?>>လကုန်ရက်</option>
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
                                <option value="လဆန်း၅ရက်"  <?php if($factoryLabourInspectionLaw->Cpaymentduration=='လဆန်း၅ရက်'): ?> selected <?php endif; ?>>လဆန်း၅ရက်</option>
                                <option value="လကုန်ရက်" <?php if($factoryLabourInspectionLaw->Cpaymentduration=='လကုန်ရက်'): ?> selected <?php endif; ?>>လကုန်ရက်</option>
                              </select>
                            </div>
                          </div>          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </fieldset>
                  
              </p>
        <div class="row">
                <div class="col-sm-5 text-center">
                  <label for="OTplan">အချိန်ပိုလုပ်ခပေးချေရန်အစီအစဉ် </label>
                <input id="OTplan"  name="OTplan" value="<?php echo e($factoryLabourInspectionLaw->OTplan); ?>">
                </div>
                <div class="col-sm-1">
      
                </div>
                <div class="col-sm-6 text-left">
                  <label for="OTpaymentplan">အချိန်ပိုလုပ်ခပေးချေမှု</label>
                  <input id="OTpaymentplan"  name="OTpaymentplan" value="<?php echo e($factoryLabourInspectionLaw->OTpaymentplan); ?>" >
                </div>
        </div>
          <p>
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
                                  <input type="text"placeholder="အနည်းဆုံး" name="miniexperprize" value="<?php echo e($factoryLabourInspectionLaw->miniexperprize); ?>"/>
                                </div>
                                <div class="col-sm-6">
                                  <input type="text"placeholder="အများဆုံး" name="maxexperprize" value="<?php echo e($factoryLabourInspectionLaw->maxexperprize); ?>"/>
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
                                  <input type="text"placeholder="အနည်းဆုံး" name="miniregularprize" value="<?php echo e($factoryLabourInspectionLaw->miniregularprize); ?>"/>
                                </div>
                                <div class="col-sm-6">
                                  <input type="text"placeholder="အများဆုံး" name="maxregularprizee" value="<?php echo e($factoryLabourInspectionLaw->maxregularprizee); ?>"/>
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
                              <input type="text"placeholder="အနည်းဆုံး" name="miniproductprize" value="<?php echo e($factoryLabourInspectionLaw->miniproductprize); ?>"/>
                            </div>
                            <div class="col-md-4">              
                              <input type="text"placeholder="အများဆုံး" name="maxproductprize" value="<?php echo e($factoryLabourInspectionLaw->maxproductprize); ?>"/>
                            </div>
                          </div>          
                        </div>
                        
                      </div>
                      
                      
                    </div>
                  </div>
                </div>
            </fieldset>
                  
              </p>
            <p>
              <div class="row">
                <div class="col-sm-5 text-center">
                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">ဒဏ်တပ်ရန်ထားရှိသော စည်းကမ်းချက်များ (အတည်ပြုချက် ရှိ/မရှိ အပါအဝင်)</legend>
                        <div class="control-group">
                         <div class="row">
                          <div class="col-sm-6 text-center">
                            <div class="custom-control custom-radio mb-3">
                              <input class="custom-control-input" id="fine" name="fine" type="radio" value='ရှိ' <?php if($factoryLabourInspectionLaw->fine=='ရှိ'): ?> checked <?php endif; ?>>
                              <label class="custom-control-label" for="fine">ရှိ</label>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="custom-control custom-radio mb-3">
                              <input  class="custom-control-input" id="fine1" type="radio" name="fine" value='မရှိ' <?php if($factoryLabourInspectionLaw->fine=='မရှိ'): ?> checked <?php endif; ?>>
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
                    <input  name="deductamount" id="deductamount" value="<?php echo e($factoryLabourInspectionLaw->deductamount); ?>">
                </div>
              </div>
            </p>
        <p>
          <fieldset class="scheduler-border">
            <legend class="scheduler-border">တရားမဝင် ဖြတ်တောက်မှုများ/မပေးချေရသေးမှုများ</legend>
                <div class="row">
                  <div class="col-sm-12 text-center">
                    
                      <div class='row'>
                      <div class="col-sm-4">
                        <div class="form-group">
                          
                          <input type="text"placeholder="ကာလ" name="illegaldeductedtime" value="<?php echo e($factoryLabourInspectionLaw->illegaldeductedtime); ?>"/>
                        </div>
                                
                      </div>
                            
                          
                    <div class="col-sm-4">
                        <div class="form-group">
                          <input type="text"placeholder="လုပ်သားအရေအတွက်" name="illegaldeductedworkers" value="<?php echo e($factoryLabourInspectionLaw->illegaldeductedworkers); ?>"/>
                        </div>
                                    
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                          <input type="text"placeholder="သင့်ငွေ" name="illegaldedutedamount" value="<?php echo e($factoryLabourInspectionLaw->illegaldedutedamount); ?>"/>
                                
                        </div>
                    </div>          
                        
                    </div>
                  </div>
                </div>
                
            </fieldset>
                  
              </p>
      
              
        <p>
          <div class="row">
              <div class="col-sm-5 text-center">
                <fieldset class="scheduler-border">
                <legend class="scheduler-border">လုပ်ခပေးချေခြင်း မှတ်တမ်း</legend>
                  <div class="control-group">
                       <div class="row">
                        <div class="col-sm-6 text-center">
                          <div class="custom-control custom-radio mb-3">
                            <input class="custom-control-input" id="customRadio" name="paymentnote" value='ရှိ' type="radio"  <?php if($factoryLabourInspectionLaw->paymentnote=='ရှိ'): ?> checked <?php endif; ?>>
                            <label class="custom-control-label" for="customRadio">ရှိ</label>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="custom-control custom-radio mb-3">
                            <input  class="custom-control-input" id="customRadio0"  value='မရှိ' type="radio" name="paymentnote" <?php if($factoryLabourInspectionLaw->paymentnote=='မရှိ'): ?> checked <?php endif; ?>>
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
                            <input class="custom-control-input" id="deductednote" name="deductednote" value='ရှိ' type="radio" <?php if($factoryLabourInspectionLaw->deductednote=='ရှိ'): ?> checked <?php endif; ?>>
                            <label class="custom-control-label" for="deductednote">ရှိ</label>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="custom-control custom-radio mb-3">
                            <input  class="custom-control-input" id="deductednote1"  value='မရှိ' type="radio" name="deductednote" <?php if($factoryLabourInspectionLaw->deductednote=='မရှိ'): ?> checked <?php endif; ?>>
                            <label class="custom-control-label" for="deductednote1">မရှိ</label>
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
                <legend class="scheduler-border">အချိန်ပို ငွေကြေးခံစားခွင့်ပြုသည့်မှတ်တမ်း</legend>
                <div class="control-group">
                  <div class="row">
                  <div class="col-sm-6 text-center">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="allowotnote" name="allowotnote" value='ရှိ' type="radio" <?php if($factoryLabourInspectionLaw->allowotnote=='ရှိ'): ?> checked <?php endif; ?>>
                      <label class="custom-control-label" for="allowotnote">ရှိ</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="allowotnote1"  value='မရှိ' type="radio" name="allowotnote"  <?php if($factoryLabourInspectionLaw->allowotnote=='မရှိ'): ?> checked <?php endif; ?>>
                      <label class="custom-control-label" for="allowotnote1">မရှိ</label>
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
            <div class="col-sm-12 text-center">
              <fieldset class="scheduler-border">
                <legend class="scheduler-border">ညွှန်ကြားရန်အချက်များ (မူကြမ်း)</legend>
                <div class="control-group">
                  <div class="row">
                    <div class="col-sm-12 text-center">
                    <textarea class="col-sm-12" rows="4" placeholder="ညွှန်ကြားရန်အချက် (က)" name="instruction1"><?php echo e($factoryLabourInspectionLaw->instruction1); ?></textarea>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-sm-12 text-center">
                       <textarea class="col-sm-12" rows="4" placeholder="ညွှန်ကြားရန်အချက် (ခ)" name="instruction2"><?php echo e($factoryLabourInspectionLaw->instruction2); ?></textarea>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-sm-12 text-center">
                       <textarea class="col-sm-12" rows="4" placeholder="ညွှန်ကြားရန်အချက် (ဂ)" name="instruction3"><?php echo e($factoryLabourInspectionLaw->instruction3); ?></textarea>
                    </div>
                 </div>
                 <div class="row">
                        <div class="col-sm-12 text-center">
                           <textarea class="col-sm-12" rows="4" placeholder="ညွှန်ကြားရန်အချက် (ဃ)" name="instruction4"><?php echo e($factoryLabourInspectionLaw->instruction4); ?></textarea>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-12 text-center">
                           <textarea class="col-sm-12" rows="4" placeholder="ညွှန်ကြားရန်အချက် (င)" name="instruction5"><?php echo e($factoryLabourInspectionLaw->instruction5); ?></textarea>
                        </div>
                     </div>
                </div>
            </fieldset>
            </div>
          </div>
        </p>
  </div>

  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">ရှေ့တစ်မျက်နှာ</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">နောက်တစ်မျက်နှာ
    </button>
    </div>
  </div>
  
</form>

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