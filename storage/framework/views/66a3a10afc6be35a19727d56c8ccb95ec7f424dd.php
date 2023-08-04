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

    <h1 style="text-align:center;margin-bottom:40px;">လုပ်ငန်းဌာနဆိုင်ရာ အချက်အလက်များ</h1>
            <div class="row">
                    <div class="col-sm-12 text-right">
                        <button  name="tempoarySave" id="tempoarySave">ယာယီသိမ်းဆည်းမည် </button>
                    </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-left">
                    <p style="font-weight:bold;">မှတ်ချက်။	။"<font style="color:red;">*</font>" ပြထားသောနေရာများသည် မဖြစ်မနေထည့်သွင်းပေးရမည့် အချက်အလက်များဖြစ်ပါသည်။</p>
                </div>
            </div>
        
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
        


    <form id="inspectform" class="form-background" action="<?php echo e(route('FactoryInspection.store')); ?>" method="post">
     <?php echo e(csrf_field()); ?>

        
         <input type="hidden" name="tempoary" id="tempoary">
    <input type="hidden" id="factoryid" name="factory_id"  value="<?php echo e(old('factory_id')); ?>">
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                        <label for="testingtime">စစ်ဆေးခြင်းအကြိမ် <span style="color:red;">*</span> </label>
                        </div>
                        <div class="col-sm-7">
                            <select name='inspectedtimes' id="testingtime" class="form-control">
                                <option value='ပထမအကြိမ်' <?php if(old('inspectedtimes')=='ပထမအကြိမ်'): ?> selected <?php endif; ?>>ပထမအကြိမ်</option>
                                <option value='ဒုတိယအကြိမ်' <?php if(old('inspectedtimes')=='ဒုတိယအကြိမ်'): ?> selected <?php endif; ?>>ဒုတိယအကြိမ်</option>
                                <option value='တတိယအကြိမ်' <?php if(old('inspectedtimes')=='တတိယအကြိမ်'): ?> selected <?php endif; ?>>တတိယအကြိမ်</option>
                                <option value='စတုတ္ထအကြိမ်' <?php if(old('inspectedtimes')=='စတုတ္ထအကြိမ်'): ?> selected <?php endif; ?>>စတုတ္ထအကြိမ်</option>
                                <option value='ပဉ္စမအကြိမ်' <?php if(old('inspectedtimes')=='ပဉ္စမအကြိမ်'): ?> selected <?php endif; ?>>ပဉ္စမအကြိမ်</option>
                                <option value='ဆဌမအကြိမ်' <?php if(old('inspectedtimes')=='ဆဌမအကြိမ်'): ?> selected <?php endif; ?>>ဆဌမအကြိမ်</option>
                                <option value='သတ္တမအကြိမ်' <?php if(old('inspectedtimes')=='သတ္တမအကြိမ်'): ?> selected <?php endif; ?>>သတ္တမအကြိမ်</option>
                                <option value='အဌမအကြိမ်' <?php if(old('inspectedtimes')=='အဌမအကြိမ်'): ?> selected <?php endif; ?>>အဌမအကြိမ်</option>
                                <option value='နဝမအကြိမ်' <?php if(old('inspectedtimes')=='နဝမအကြိမ်'): ?> selected <?php endif; ?>>နဝမအကြိမ်</option>
                                <option value='ဒဿမအကြိမ်'<?php if(old('inspectedtimes')=='ဒဿမအကြိမ်'): ?> selected <?php endif; ?>>ဒဿမအကြိမ်</option>

                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" id="checknormal">
                    <!-- <div class="row">
                        <div class="col-sm-4">
                            <div class="custom-control custom-radio mb-3">
                                  <input  class="custom-control-input" id="normal" name="inspectiontype" type="radio" value=0>
                                  <label class="custom-control-label" for="normal">သာမန်</label>
                             </div>
                        </div>
                        <div class="col-sm-6 text-left">
                            <div class="custom-control custom-radio mb-3">
                                  <input  class="custom-control-input" id="return" name="inspectiontype" type="radio" value=1>
                                  <label class="custom-control-label" for="return">ပြန်လည်</label>
                             </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="testingtime"> စစ်ဆေးချက်ပုံစံ <span style="color:red;">*</span></label>
                        </div>
                        <div class="col-sm-7">
                            <select name='inspectiontype' id="testingtime" class="form-control">
                                <option value='ပုံမှန်' <?php if(old('inspectiontype')=='ပုံမှန်'): ?> selected <?php endif; ?>>ပုံမှန်</option>
                                <option value='ပြန်လည်' <?php if(old('inspectiontype')=='ပြန်လည်'): ?> selected <?php endif; ?>>ပြန်လည်</option>
                                <option value='တုံ့ပြန်' <?php if(old('inspectiontype')=='တုံ့ပြန်'): ?> selected <?php endif; ?>>တုံ့ပြန်</option>
                                <option value='အထူး' <?php if(old('inspectiontype')=='အထူး'): ?> selected <?php endif; ?>>အထူး</option>
                                <option value='လျှပ်တစ်ပြတ်' <?php if(old('inspectiontype')=='လျှပ်တစ်ပြတ်'): ?> selected <?php endif; ?>>လျှပ်တစ်ပြတ်</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blank10"></div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="inspectiondate"> စစ်ဆေးသည့်ရက်စွဲ <span style="color:red;">*</span></label>
                        </div>
                        <div class="col-sm-7">
                        <input type="date" name="inspectiondate" id="inspectiondate" class="form-control" value="<?php echo e(old('inspectiondate')); ?>">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="lastinspectiondate"> နောက်ဆုံးစစ်ဆေးခဲ့သည့်ရက်စွဲ</label>
                        </div>
                        <div class="col-sm-7">
                            <input type="date" name="lastinspectiondate" id="lastinspectiondate" class="form-control" value="<?php echo e(old('lastinspectiondate')); ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="blank10"></div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="BusinessOwnerName"> လုပ်ငန်းပိုင်ရှင်အမည် <span style="color:red;">*</span></label>
                        </div>
                        <div class="col-sm-7">
                            <input  name="workerownername" id="BusinessOwnerName" class="form-control" value="<?php echo e(old('workerownername')); ?>">
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="BusinessOwnerAddress"> လုပ်ငန်းပိုင်ရှင်လိပ်စာ <span style="color:red;">*</span></label>
                        </div>
                        <div class="col-sm-7">
                            <input name="workerowneraddress" id="BusinessOwnerAddress" class="form-control" value="<?php echo e(old('workerowneraddress')); ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="blank10"></div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="owner"> ပိုင်ရှင်အမည် </label>
                        </div>
                        <div class="col-sm-7">
                            <input name="ownername" id="OwnerName" class="form-control" value="<?php echo e(old('ownername')); ?>">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="OwnerAddress"> ပိုင်ရှင်လိပ်စာ <span style="color:red;">*</span></label>
                        </div>
                        <div class="col-sm-7">
                            <input   name="owneraddress" id="OwnerAddress" class="form-control" value="<?php echo e(old('owneraddress')); ?>">
    
                        </div>
                    </div>
                </div>
            </div>
             <div class="blank10"></div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="namebyrecord"> ရုံးရှိမှတ်တမ်းအရ လုပ်ငန်းပိုင်ရှင်အမည် <span style="color:red;">*</span></label>
                        </div>
                        <div class="col-sm-7">
                            <input   name="registerownername" id="namebyrecord" class="form-control" value="<?php echo e(old('registerownername')); ?>">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="WorkedPower"> အလုပ်သမားအင်အား</label>
                        </div>
                        <div class="col-sm-7">
                            <input   name="workertotal" id="WorkedPower" class="form-control" value="<?php echo e(old('workertotal')); ?>">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="ManagerName"> မန်နေဂျာအမည်  <span style="color:red;">*</span></label>
                        </div>
                        <div class="col-sm-7">
                            <input   name="managername" id="ManagerName" class="form-control" value="<?php echo e(old('managername')); ?>">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="ManagerAddress"> မန်နေဂျာလိပ်စာ  <span style="color:red;">*</span></label>
                        </div>
                        <div class="col-sm-7">
                            <input name="manageraddress" id="ManagerAddress" class="form-control" value="<?php echo e(old('manageraddress')); ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="blank10"></div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="AccountableName"> တာဝန်ခံဖြေဆိုသူအမည် </label>
                        </div>
                        <div class="col-sm-7">
                            <input   name="intervieweename" id="AccountableName" class="form-control" value="<?php echo e(old('intervieweename')); ?>">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="AccountableRank"> တာဝန်ခံဖြေဆိုသူရာထူး</label>
                        </div>
                        <div class="col-sm-7">
                            <input  name="intervieweerank" id="AccountableRank" class="form-control" value="<?php echo e(old('intervieweerank')); ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="blank10"></div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="typeofencourage"> အားပေးစက်အမျိုးအစား</label>
                        </div>
                        <div class="col-sm-7">
                            <input   name="machinetype" id="typeofencourage" class="form-control" value="<?php echo e(old('machinetype')); ?>">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="Horsepower"> မြင်းကောင်ရေအား</label>
                        </div>
                        <div class="col-sm-7">
                            <input   name="horsepower" id="Horsepower" class="form-control" value="<?php echo e(old('horsepower')); ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="blank10"></div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="ProductProperty
"> ထုတ်လုပ်သော ပစ္စည်းအများအစား</label>
                        </div>
                        <div class="col-sm-7">
                            <input   name="producttype" id="ProductProperty" class="form-control" value="<?php echo e(old('producttype')); ?>">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="ProducedAmounts"> တစ်လထုတ်လုပ်နိုင်မှုပမာဏ</label>
                        </div>
                        <div class="col-sm-7">
                            <input name="productquantity" id="MonthlyAmounts" class="form-control" value="<?php echo e(old('productquantity')); ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="blank10"></div>
            <div class="row">
                    <div class="col-sm-12 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">စက်ရုံလိပ်စာ  <span style="color:red;">*</span></legend>
                            <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <textarea class="col-sm-12 form-control" rows="4"   name="factoryaddress" id="factoryaddress"><?php echo e(old('factoryaddress')); ?></textarea>
                                    </div>
                    
                                 </div>
                            </div>
                        </fieldset> 
                    </div>                  
                </div>
            <div class="row">
                    <div class="col-sm-12 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">လုပ်ငန်းဖွင့်လှစ်ခြင်း</legend>
                            <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-2 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="ServiceOpen" name="jobopen" type="radio" value=0 checked>
                                          <label class="custom-control-label" for="ServiceOpen">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="ServiceOpen1" type="radio" name="jobopen" value=1 <?php if(old('jobopen')=='1'): ?> checked <?php endif; ?>>
                                            <label class="custom-control-label" for="ServiceOpen1">မရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 text-right">
                                        <label for="datepicker">ပိတ်ထားပါကနောက်ဆုံးလုပ်ကိုင်ခဲ့သည့်ရက်စွဲ</label>
                                    </div>
                                    <div class="col-sm-5 text-center">
                                    <input type="date" name="closeddate" id="datepicker" class="datepicker form-control" value="<?php echo e(old('closeddate')); ?>">
                    
                                    </div>
                                 </div>
                            </div>
                        </fieldset> 
                    </div>                  
                </div>
            <span>အလုပ်သမားအင်အား</span>
            <div class='row'>
            <div class="col-sm-12">
                <table border="1" style="width:100%;table-layout:fixed;border-spacing:20px 40px;font-size:16px; line-height:24px; font-weight:100;" class="bodywrapcenter">
                    <thead>
                        <tr>
                            <th rowspan="2">ဝင်ငွေ အမျိုး အစား</th>
                            <th colspan="2">လူကြီး (၁၈နှစ်အထက်)</th>
                            <th colspan="2">လူရွယ် (၁၆နှစ်မှ ၁၈နှစ်)</th>
                            <th colspan="2">ကလေး (၁၆နှစ်မှ ၁၈နှစ်)</th>
                            
                        </tr>
                        <tr>
                            <th>ကျား</th>
                            <th>မ</th>
                            <th>ကျား</th>
                            <th>မ</th>
                            <th>ကျား</th>
                            <th>မ</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>လစား</th>
                            <td><input  type="text" name="Mmenworker" id="menworker" class="form-control" value=0  onkeyup="converunistring('man')"/></td>
                            <td><input  type="text" name="Mwomenworker" id="womenworker" class="form-control" value=0 onkeyup="converunistring('women')"/></td>
                            <td><input  type="text" name="MAmaleworker" id="amenworker" class="form-control" value=0  onkeyup="converunistring('amen')"/></td>
                            <td><input  type="text" name="MAfemaleworker" id="awomenworker" class="form-control" value=0 onkeyup="converunistring('awomen')"/></td>
                            <td><input  type="text" name="Cmenworker" id="cmenworker" class="form-control" value=0  onkeyup="converunistring('cman')"/></td>
                            <td><input  type="text" name="Cwomenworker" id="cwomenworker" class="form-control" value=0 onkeyup="converunistring('cwomen')"/></td>
                            
                        </tr>
                        <tr>
                            <th>နေ့စား</th>
                            <td><input  type="text" value=0 name="Dmenworker" id="dailymenworker" class="form-control" onkeyup="converunistring('man')"/></td>
                            <td><input  type="text" value=0 name="Dwomenworker" id="dailywomenworker" class="form-control" onkeyup="converunistring('women')"/></td>
                            <td><input  type="text" value=0 name="DAmaleworker" id="dailyamenworker" class="form-control" onkeyup="converunistring('amen')"/></td>
                            <td><input  type="text" value=0 name="DAfemaleworker" id="dailyawomenworker" class="form-control" onkeyup="converunistring('awomen')"/></td>
                            <td><input  type="text" value=0 name="DCmaleworker" id="dailycmenworker" class="form-control" onkeyup="converunistring('cman')"/></td>
                            <td><input  type="text" value=0 name="DCfemaleworker" id="dailycwomenworker" class="form-control" onkeyup="converunistring('cwomen')"/></td>
                            
                        </tr>
                        <tr>
                            <th>ပုတ်ပြတ်</th>
                            <td><input  type="text" value=0 name="Pmenworker" id='piecemenworker' class="form-control" onkeyup="converunistring('man')"/></td>
                            <td><input  type="text" value=0 name="Pwomenworker" id="piecewomenworker" class="form-control" onkeyup="converunistring('women')"/></td>
                            <td><input  type="text" value=0 name="PAmaleworker" id="pieceamenworker" class="form-control" onkeyup="converunistring('amen')"/></td>
                            <td><input  type="text" value=0 name="PAfemaleworker" id="pieceawomenworker" class="form-control" onkeyup="converunistring('awomen')"/></td>
                            <td><input  type="text" value=0 name="PCmaleworker" id="piececmenworker" class="form-control" onkeyup="converunistring('cman')"/></td>
                            <td><input  type="text" value=0 name="PCfemaleworker" id="piececwomenworker" class="form-control" onkeyup="converunistring('cwomen')"/></td>
                            
                        </tr>
                        <tr>
                            <th>ပုံသေ</th>
                            <td><input  type="text" value=0 name="MCmaleworker" id='constantmenworker' class="form-control" onkeyup="converunistring('man')"/></td>
                            <td><input  type="text" value=0 name="MCfemaleworker" id="constantwomenworker" class="form-control" onkeyup="converunistring('women')"/></td>
                            <td><input  type="text" value=0 name="CAmaleworker" id="constantamenworker" class="form-control" onkeyup="converunistring('amen')"/></td>
                            <td><input  type="text" value=0 name="CAfemaleworker" id="constantawomenworker" class="form-control" onkeyup="converunistring('awomen')"/></td>
                            <td><input  type="text" value=0 name="CCmaleworker" id="constantcmenworker" class="form-control" onkeyup="converunistring('cman')"/></td>
                            <td><input  type="text" value=0 name="CCfemaleworker" id="constantcwomenworker" class="form-control" onkeyup="converunistring('cwomen')"/></td>
                            
                        </tr>
                        <tr>
                            <th>စုစုပေါင်း</th>
                            <td><input  type="text" value=0 name="" id='totalman' class="form-control" /></td>
                            <td><input  type="text" value=0 name="" id="totalWomen" class="form-control" /></td>
                            <td><input  type="text" value=0 name="" id="totalaman" class="form-control" /></td>
                            <td><input  type="text" value=0 name="" id="totalawomen" class="form-control" /></td>
                            <td><input  type="text" value=0 name="" id="totalcman" class="form-control" /></td>
                            <td><input  type="text" value=0 name="" id="totalcwomen" class="form-control" /></td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </div><div class="blank10"></div>
        
        
        <input type="hidden" id="total_man" name="totalMaleWorker">
        <input type="hidden" id="total_women" name="totalFemaleWorker">
    
      
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="manufacturingtype"> စစ်ဆေးရေးအရာရှိအမည်  <span style="color:red;">*</span></label>
                        </div>
                        <div class="col-sm-7">
                             <input name="inspection_name" id="inspection_name" class="form-control" value="<?php echo e(old('inspection_name')); ?>"> 
                            <input type="hidden" name="inspectionid" id="NameofinspectorId" value="<?php echo e(Auth::user()->id); ?>" >
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="manufacturingtype"> စစ်ဆေးသူအရာရှိ ရာထူး  <span style="color:red;">*</span> </label>
                        </div>
                        <div class="col-sm-7">
                             <input name="inspectorrank" id="inspectorrank" class="form-control" value="<?php echo e(old('inspectorrank')); ?>"> 
                        </div>
                    </div>
                </div>
            </div>
       
            <div class="blank10"></div>
          <div style="overflow:auto;">
            <div style="float:right;">
              <button type="submit" id="Save" >သိမ်းဆည်းမည်</button>
            </div>
        </div>
      
</form>
<!-- scroll back to top of the page -->
<a id="back2Top" title="Back to top" href="#">&#10148;</a>


 <script>

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

   //iterate through each textboxes and add keyup
        //handler to trigger sum event
        $(".menworker").each(function() {

            $(this).keyup(function(){
                calculateSum();
            });
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
                        $('#factoryid').val(data.FactoryId);
                        $('#lastinspectiondate').val(data.lastinspectiondate);
                        // $('#factoryname').val(data.FactoryName);
                        $('#namebyrecord').val(data.OwnerName);
                        $("#workOwnerName").val(data.FactoryName);
                        $("#WorkedPower").val(data.workertotal);
                        $("#ManagerName").val(data.ManagerName);
                        $("#MonthlyAmounts").val(data.MonthlyAmounts);
                        $("#BusinessOwnerName").val(data.OwnerName);
                        $("#BusinessOwnerAddress").val(data.OwnerAddress);
                        // $("#ContactAddress").val(data.ContactAddress);
                        // $("#OwnerName").val(data.OwnerName);
                        $("#ProductProperty").val(data.ProducedProduct+ ' and ' +data.ProducedOthers);
                        $("#menworker").val(data.MenWorker);
                        $("#womenworker").val(data.WomenWorker);
                        $("#amenworker").val(data.AMenWorker);
                        $("#awomenworker").val(data.AWomenWorker);
                        $("#cmenworker").val(data.CMenWorker);
                        $("#cwomenworker").val(data.CWomenWorker);
                        $("#dailymenworker").val(data.DailyMenWorker);
                        $("#dailywomenworker").val(data.DailyWomenWorker);
                        $("#dailyamenworker").val(data.ADailyMenWorker);
                        $("#dailyawomenworker").val(data.ADailyWomenWorker);
                        $("#dailycmenworker").val(data.CDailyMenWorker);
                        $("#dailycwomenworker").val(data.CDailyWomenWorker);
                        $("#piecemenworker").val(data.PieceMenWorker);
                        $("#piecewomenworker").val(data.PieceWomenWorker);
                        $("#pieceamenworker").val(data.APieceMenWorker);
                        $("#pieceawomenworker").val(data.APieceWomenWorker);
                        $("#piececmenworker").val(data.CPieceMenWorker);
                        $("#piececwomenworker").val(data.CPieceWomenWorker);
                        
                        $("#constantmenworker").val(data.MCmaleworker);
                        $("#constantwomenworker").val(data.MCfemaleworker);
                        $("#constantamenworker").val(data.CAmaleworker);
                        $("#constantawomenworker").val(data.CAfemaleworker);
                        $("#constantcmenworker").val(data.CCmaleworker);
                        $("#constantcwomenworker").val(data.CCfemaleworker);

                        $('#factoryaddress').val(data.FactoryAddress);
                        //for total men 
                        var totalmen=changeEnglish(data.MenWorker,data.DailyMenWorker,data.PieceMenWorker,data.MCmaleworker);
                        $('#totalman').val(totalmen);
                        //total women
                        var totalwomen=changeEnglish(data.WomenWorker,data.DailyWomenWorker,data.PieceWomenWorker,data.MCfemaleworker);
                        $('#totalWomen').val(totalwomen);
                        //for total adult man 
                        var totalaman=changeEnglish(data.AMenWorker,data.ADailyMenWorker,data.APieceMenWorker,data.CAmaleworker);
                        $('#totalaman').val(totalaman);
                        //fot total adult women
                        var totalawomen=changeEnglish(data.AWomenWorker,data.ADailyWomenWorker,data.APieceWomenWorker,data.CAfemaleworker);
                        $('#totalawomen').val(totalawomen);
                        //for total child man
                        var totalcman=changeEnglish(data.CMenWorker,data.CDailyMenWorker,data.CPieceMenWorker,data.CCmaleworker);
                        $('#totalcman').val(totalcman);
                        //for total child women
                        var totalcwomen=changeEnglish(data.CWomenWorker,data.CDailyWomenWorker,data.CPieceWomenWorker,data.CCfemaleworker);
                        $('#totalcwomen').val(totalcwomen);

                        $('#total_women').val(data.totalFemaleWorker);
                        $('#total_man').val(data.totalMaleWorker);
                        // var totalman =  
                        // $('#totalman').val(data.);
                        if(data.StartDate){
                            document.getElementById("ServiceOpen").checked = true;
                        }else{
                            document.getElementById("ServiceOpen1").checked = true;

                        }
                    },
                    error: function() { 
                         console.log(data);
                    }
        });
});


 //for total အလုပ္သမား အင္အား
    // function calculateSum() {

    //     var sum = 0;
    //     //iterate through each textboxes and add the values
    //     $(".txt").each(function() {

    //         //add only if the value is number
    //         if(!isNaN(this.value) && this.value.length!=0) {
    //             sum += parseFloat(this.value);
    //         }

    //     });
    //     //.toFixed() method will roundoff the final sum to 2 decimal places
    //     $("#totalmen").html(sum.toFixed(2));
    // }

    //for tempoary save
    $('#tempoarySave').click(function(){
	    $("#tempoary").val('tempoary');
	document.getElementById("inspectform").submit();
});


//sum total worker
//for  man sum

function converunistring(type){
	if(type=='man'){
		var num1=document.getElementById("menworker").value;
		var num2=document.getElementById('dailymenworker').value;
		var num3=document.getElementById('piecemenworker').value;
		var num4=document.getElementById('constantmenworker').value;
	}else if(type=='women'){
        var num1=document.getElementById("womenworker").value;
		var num2=document.getElementById('dailywomenworker').value;
		var num3=document.getElementById('piecewomenworker').value;
		var num4=document.getElementById('constantwomenworker').value;
	}else if(type=='amen'){
		
        var num1=document.getElementById("amenworker").value;
		var num2=document.getElementById('dailyamenworker').value;
		var num3=document.getElementById('pieceamenworker').value;
		var num4=document.getElementById('constantamenworker').value;
	}else if(type=='awomen'){
		var num1=document.getElementById("awomenworker").value;
		var num2=document.getElementById('dailyawomenworker').value;
		var num3=document.getElementById('pieceawomenworker').value;
		var num4=document.getElementById('constantawomenworker').value;
	}else if(type=='cman'){
		var num1=document.getElementById("cmenworker").value;
		var num2=document.getElementById('dailycmenworker').value;
		var num3=document.getElementById('piececmenworker').value;
		var num4=document.getElementById('constantcmenworker').value;
	}else if(type=='cwomen'){
		var num1=document.getElementById("cwomenworker").value;
		var num2=document.getElementById('dailycwomenworker').value;
		var num3=document.getElementById('piececwomenworker').value;
		var num4=document.getElementById('constantcwomenworker').value;
	}
		///for sum total man and total women
		var man1=document.getElementById("totalman").value;
		var man2=document.getElementById('totalaman').value;
		var man3=document.getElementById('totalcman').value;
		var woman1=document.getElementById("totalWomen").value;
		var woman2=document.getElementById('totalawomen').value;
		var woman3=document.getElementById('totalcwomen').value;

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
var mynum4 = num4.replace(/[၀၁၂၃၄၅၆၇၈၉]/g, function(s) {
	return englishDigits[s];
});
var num5=parseInt(mynum1)+parseInt(mynum2)+parseInt(mynum3)+parseInt(mynum4);
var num6=num5.toString();
var sum=num6.replace(/[0123456789]/g,function(s){
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

    var num4=parseInt(mynum1)+parseInt(mynum2)+parseInt(mynum3)+parseInt(mynum4);
    ///sum man
    var man=parseInt(myman1)+parseInt(myman2)+parseInt(myman3);
    var totalman = man.toString();
    var summan=totalman.replace(/[0123456789]/g,function(s){
        return myanDigits[s];
    });
    $('#total_man').val(summan);

    var woman=parseInt(mywomen1)+parseInt(mywomen2)+parseInt(mywomen3);
    var totalwoman = woman.toString();
    var sumwoman=totalwoman.replace(/[0123456789]/g,function(s){
        return myanDigits[s];
    });
    $('#total_women').val(sumwoman);

}

//end

function changeEnglish(num1,num2,num3,num4){
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
    var mynum4 = num4.replace(/[၀၁၂၃၄၅၆၇၈၉]/g, function(s) {
        return englishDigits[s];
    });
    var num5=parseInt(mynum1)+parseInt(mynum2)+parseInt(mynum3)+parseInt(mynum4);
    var num6=num5.toString();
    var sum=num6.replace(/[0123456789]/g,function(s){
        return myanDigits[s];
    });
    return sum;
}
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>