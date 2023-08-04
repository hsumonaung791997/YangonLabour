<?php $__env->startSection('content'); ?>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

 
<form method="post" action="<?php echo e(url('createinstructionsave')); ?>">
  <?php echo e(csrf_field()); ?>


 <p>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="pull-left">
                    <h2>ပြည်ထောင်စုသမ္မတမြန်မာနိုင်ငံတော်</h2>
                    <h3>အလုပ်သမား၊အလုပ်အကိုင်နှင့် လူမှုဖူလုံရေးဝန်ကြီးဌာန</h3>
                    <h4>အလုပ်ရုံနှင့်အလုပ်သမားဥပဒေစစ်ဆေးရေးဦးစီးဌာန</h4>
                </div>
                
            </div>
        </div>
    </p>
  <p>
        <div class="row">
         
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-6">
                    <label for="EmailAdd">ရည်ညွှန်းစာအမှတ်</label>
                  </div>
                  <div class="col-sm-6">
                  <input  name="refdoc" id="refdoc" value="<?php echo e(old('refdoc')); ?>">
                  </div>
                </div>               
                
              </div>
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-6 text-right"><label for="EmailAdd">စာအမှတ် <span style="color:red">*</span></label></div>
                  <div class="col-sm-6">
                     <input  name="docno" id="docno" class="form-control" value="<?php echo e(old('docno')); ?>">
					 <span style="color:red">
						<?php if($errors->has('docno')): ?>
                            <strong><?php echo e($errors->first('docno')); ?></strong>
                                   
                        <?php endif; ?>
					 </span>
                  </div>
                </div>               
               
              </div>
            </div>
    </p>
    <div class="row">
          <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-6">
                <label for="EmailAdd">ရက်စွဲ</label>
              </div>
              <div class="col-sm-6">
                <input  name="insdate" value="<?php echo e(Carbon\Carbon::now()->toDateString()); ?>"  >
              </div>
              
            </div>
            
              
          </div>
        </div>

  <p>
        <div class="row">
          
          <div class="col-sm-3">
            <label for="EmailAdd">အကြောင်းအရာ <span style="color:red">*</span></label>
            
          </div>
          <div class="col-sm-9">
            <textarea name="brief" id="brief"  rows="3" class="col-sm-12"> <?php echo e(old('brief')); ?></textarea>
            <span style="color:red"><?php if($errors->has('brief')): ?>
                            <strong><?php echo e($errors->first('brief')); ?></strong>
                                   
                        <?php endif; ?></span>
          </div>
        </div>
  </p>
  <p>
     <div class="row">
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6">
              <label><?php if($factorytype==1): ?>စက်ရုံ/အလုပ်ရုံအမည် <?php else: ?> ဆိုင်/အလုပ်ဌာနအမည် <?php endif; ?></label>
            </div>
            <div class="col-sm-6">
              <input type="text"  name="factoryname" id="factoryname" value="<?php echo e($cases->FactoryName); ?>" >
              <div id="factoryList">
              </div>
            </div>
          </div>            
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6 text-right">
              <label>စစ်ဆေးခဲ့သည့်နေ့စွဲ</label>
            </div>
            <div class="col-sm-6">
            <input type="text" id="inspecteddate"  name="inspecteddate" value="<?php echo e($cases->inspectiondate); ?>">
            </div>
          </div>            
        </div>
      </div> 
  </p>  
   <p>
     <div class="row">
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6">
              <label>နောက်ဆုံးထားလုပ်ဆောင်ရမည့်ရက်စွဲ  <span style="color:red">* </span></label>
            </div>
            <div class="col-sm-6">
              <input type="date" value="" name="lastdate" >
              <span style="color:red">
					<?php if($errors->has('lastdate')): ?>
                        <strong><?php echo e($errors->first('lastdate')); ?></strong>
                                   
                    <?php endif; ?>
			  </span>
            </div>
          </div>            
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6 text-right">
              <label>အကြောင်းကြားရန်ဌာန </label>
            </div>
            <div class="col-sm-6">
              <!-- to validate department -->
            
              <?php if($roleid==1 || $roleid==2): ?>
              <input type="text" id="instrutiondep" value="<?php echo e($department); ?>" name="instructiondep" required >
              <?php elseif($roleid==3||$roleid==4): ?>
              <input type="text" id="instrutiondep" value="<?php echo e($department->region_name); ?>" name="instructiondep" required >
              <?php elseif($roleid==5||$roleid==6): ?>
              <input type="text" id="instrutiondep" value="<?php echo e($department->district_name); ?>" name="instructiondep" required >
               <?php elseif($roleid==7||$roleid==8): ?>
              <input type="text" id="instrutiondep" value="<?php echo e($department->township_name); ?>" name="instructiondep" required >
              <?php endif; ?>
            </div>
          </div>            
        </div>
      </div> 
  </p> 
  <p>
     <div class="row">
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6">
              <label>အကြောင်းကြားရမည့်ရက်စွဲ <span style="color:red">* </span></label>
            </div>
            <div class="col-sm-6">
            <input type="date"  name="informdate" value="<?php echo e(old('informdate')); ?>">
              <span style="color:red"><?php if($errors->has('informdate')): ?>
                                   
                                        <strong><?php echo e($errors->first('informdate')); ?></strong>
                                   
                                <?php endif; ?></span>
            </div>
          </div>            
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6 text-right">
              <label>ဖိုင်အမျိုးအစား</label>
            </div>
            <div class="col-sm-6">
              <select name="docutype" class="form-control">
                <option value="သာမန်" <?php if(old('docutype')=='သာမန်'): ?> selected <?php endif; ?>>သာမန်</option>
                <option value="လျှို့ဝှက်စာ" <?php if(old('docutype')=='လျှို့ဝှက်စာ'): ?> selected <?php endif; ?>>လျှို့ဝှက်စာ</option>
              </select>
            </div>
          </div>            
        </div>
      </div> 
  </p>
  <p>
     <div class="row">
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6">
              <label>စစ်ဆေးသူအမည် <span style="color:red">* </span></label>
            </div>
            <div class="col-sm-6">
              <input type="text"  name="instructor" value="<?php echo e(old('instructor')); ?>" required >
              
            </div>
          </div>            
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6 text-right">
              <label>စစ်ဆေးသူရာထူး <span style="color:red">* </span></label>
            </div>
            <div class="col-sm-6">
              <select name="instructorrank" class="form-control">
                <option value="လက်ထောက်ညွှန်ကြားရေးမှူး" <?php if(old('instructorrank')=='လက်ထောက်ညွှန်ကြားရေးမှူး'): ?> selected <?php endif; ?>>လက်ထောက်ညွှန်ကြားရေးမှူး</option>
                <option value="ဦးစီးအရာရှိ(ဥပဒေ)" <?php if(old('instructorrank')=='ဦးစီးအရာရှိ(ဥပဒေ)'): ?> selected <?php endif; ?>>ဦးစီးအရာရှိ(ဥပဒေ)</option>
                <option value="ဦးစီးအရာရှိ(အလုပ်ရုံ)" <?php if(old('instructorrank')=='ဦးစီးအရာရှိ(အလုပ်ရုံ)'): ?> selected <?php endif; ?>>ဦးစီးအရာရှိ(အလုပ်ရုံ)</option>
              </select>
            </div>
          </div>            
        </div>
      </div> 
  </p>   
 
    <div class="row">
      <div class="col-sm-12 text-center">
        <label for="ContactFax"><b>ပြုပြင်လိုက်နာဆောင်ရွက်ရန် အချက်များ</b></label>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 text-center">
        <label>ညွှန်ကြားချက် အမျိုးအစား</label>
      </div>
      <div class="col-sm-6 text-center">
        <select name="instructiontype" id="instructiontype" class="form-control">
          <option value="1" <?php if(old('instructiontype')=='1'): ?> <?php endif; ?>>အလုပ်သမားဥပဒေစစ်ဆေးရေး</option>
          <option value="2" <?php if(old('instructiontype')=='2'): ?> <?php endif; ?>>အလုပ်ရုံစစ်ဆေးရေး</option>
        </select>
      </div>
    </div> <br>
    <div id="GI">
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">ခွင့်ပိတ်</label></div>
      <div class="col-sm-8">
      <textarea  name="aleavedesc" class="col-sm-12" rows="4"><?php echo e(old('aleavedesc')); ?></textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="aleaveno" value="0"></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">လုပ်ခ/လစာ</label></div>
      <div class="col-sm-8">
        <textarea  name="awagedesc" class="col-sm-12" rows="4"><?php echo e(old('awagedesc')); ?></textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="awageno" value="0"></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">မှတ်တမ်း</label></div>
      <div class="col-sm-8">
        <textarea  name="anotedesc" class="col-sm-12" rows="4"><?php echo e(old('anotedesc')); ?></textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="anoteno" value="0"></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">အလုပ်ချိန်</label></div>
      <div class="col-sm-8">
        <textarea  name="aworktimedesc" class="col-sm-12" rows="4"><?php echo e(old('aworktimedesc')); ?></textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="aworktimeno" value="0"></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">အခြား</label></div>
      <div class="col-sm-8">
        <textarea  name="aotherdesc" class="col-sm-12" rows="4"><?php echo e(old('aotherdesc')); ?></textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="aotherno" value="0"></div>
      </div>
          
    </div>
    <div id="IF">
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">ဘေးကင်း</label></div>
      <div class="col-sm-8">
        <textarea  name="fsafetydesc" class="col-sm-12" rows="4"><?php echo e(old('fsafetydesc')); ?></textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="fsafetyno" value="0"></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">
ကျန်းမာ</label></div>
      <div class="col-sm-8">
        <textarea  name="fhealthdesc" class="col-sm-12" rows="4"><?php echo e(old('fhealthdesc')); ?></textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="fhealthno" value="0"></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">သက်သာ</label></div>
      <div class="col-sm-8">
        <textarea  name="fwelfaredesc" class="col-sm-12" rows="4"><?php echo e(old('fwelfaredesc')); ?></textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="fwelfareno" value="0"></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">မှတ်တမ်း</label></div>
      <div class="col-sm-8">
        <textarea  name="fnotedesc" class="col-sm-12" rows="4"><?php echo e(old('fnotedesc')); ?></textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="fnoteno" value="0"></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">အခြား</label></div>
      <div class="col-sm-8">
        <textarea  name="fotherdesc" class="col-sm-12" rows="4"><?php echo e(old('fotherdesc')); ?></textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="fotherno" value="0"></div>
      </div>
          
    </div>
    
   
     
   
 
  <p>
    <input type="hidden" value="<?php echo e($cases->cid); ?>" id="checkid" name="checkid"/>
  <input type="hidden" value="<?php echo e($cases->FactoryId); ?>" id="factoryid" name="factoryid"/>
    <input type="hidden" value="<?php echo e($id); ?>" name="caseid"/>
    <input type="hidden" value="<?php echo e($cases->township_id); ?>" id="township" name="townshipid"/>
    <input type="hidden" value="<?php echo e($cases->district_id); ?>" id="district"name="districtid"/>
    <input type="hidden" value="<?php echo e($roleid); ?>" name="roleid"/>
    <input type="hidden" value="<?php echo e($factorytype); ?>" name="factorytype"/>

  </p>
  <p>
    <div class="col-sm-3 float-right">
    <input type="submit" class="btn-primary"value="ညွှန်ကြားချက်ထုတ်ရန်"/>
  </div>
  </p>

 
</form>
<script>
 $(document).ready(function(){

 $('#factoryname').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"<?php echo e(route('autocompleteinstruction')); ?>",
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
 $( "#factoryname" ).change(function() {
  var query = $('#factoryname').val();
               $.ajax({
                    type: 'GET', //THIS NEEDS TO BE GET
                    url: '<?php echo e(route('autocompleteinstructiondata')); ?>',
                    data:{name:query},
                    success: function (data) {
                      $.each(data,function(key, value) {
                      $('#inspecteddate').val(value.inspectiondate);
                      $('#checkid').val(value.cid);
                       $('#township').val(value.township_id);
                      $('#district').val(value.district_id);
                 
                      $('#factoryid').val(value.factory_id);
                      console.log(value.township_id);
             
                      });
                      
                        
                        
                                
                    },
                    error: function() { 
                         console.log(data);
                    }
        });
});
 //for instructiontype
 $("#IF").css("display","none");
 
$( "#instructiontype" ).change(function() {
    var instype=$( "#instructiontype" ).val();
    console.log(instype);
  if(instype==1){
    $("#IF").css("display","none");
    $("#GI").css("display","block");
     
  }else{
    $("#GI").css("display","none");
    $("#IF").css("display","block");
  }
});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>