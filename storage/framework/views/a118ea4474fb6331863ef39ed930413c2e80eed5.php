<?php $__env->startSection('content'); ?>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

 
<form method="post" action="<?php echo e(route('Edit-ImpactInstruction-Save',$ins->id)); ?>">
    <?php echo csrf_field(); ?>
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
                  <input  name="refdoc" id="refdoc" value="<?php echo e($ins->refdoc); ?>">
                  </div>
                </div>               
                
              </div>
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-6 text-right"><label for="EmailAdd">စာအမှတ် <span style="color:red">*</span></label></div>
                  <div class="col-sm-6">
                     <input  name="docmentno" id="docmentno" class="form-control" value="<?php echo e($ins->docmentno); ?>" required>
					 <span style="color:red">
						<?php if($errors->has('docmentno')): ?>
                            <strong><?php echo e($errors->first('docmentno')); ?></strong>
                                   
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
                <input  name="create_date" value="<?php echo e($ins->create_date); ?>" readonly>
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
            <textarea name="instructiontitle" id="instructiontitle"  rows="3" class="col-sm-12" required> <?php echo e($ins->instructiontitle); ?></textarea>
            <span style="color:red"><?php if($errors->has('instructiontitle')): ?>
                            <strong><?php echo e($errors->first('instructiontitle')); ?></strong>
                                   
                        <?php endif; ?></span>
          </div>
        </div>
  </p>
  <p>
     <div class="row">
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6">
              <label><?php if($ins->factory_type==1): ?>စက်ရုံ/အလုပ်ရုံအမည် <?php else: ?> ဆိုင်/အလုပ်ဌာနအမည် <?php endif; ?></label>
            </div>
            <div class="col-sm-6">
              <input type="text"  name="name" id="name" value="<?php echo e($ins->name); ?>" required >
            </div>
          </div>            
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6 text-right">
              <label>စစ်ဆေးခဲ့သည့်နေ့စွဲ</label>
            </div>
            <div class="col-sm-6">
            <input type="text" id="inspected_date"  name="inspected_date" value="<?php echo e($ins->inspected_date); ?>" readonly>
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
            <input type="date"  name="lastdodate" required value="<?php echo e($ins->lastdodate); ?>" >
              <span style="color:red">
					<?php if($errors->has('lastdodate')): ?>
                        <strong><?php echo e($errors->first('lastdodate')); ?></strong>
                                   
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
              <input type="text" id="instrutiondep" value="<?php echo e($ins->instructiondep); ?>" name="instructiondep" readonly >
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
            <input type="date"  name="instructiondate" value="<?php echo e($ins->instructiondate); ?>" required>
              <span style="color:red"><?php if($errors->has('instructiondate')): ?>
                                   
                                        <strong><?php echo e($errors->first('instructiondate')); ?></strong>
                                   
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
              <select name="documenttype" class="form-control">
                <option value="သာမန်" <?php if($ins->documenttype=='သာမန်'): ?> selected <?php endif; ?>>သာမန်</option>
                <option value="လျှို့ဝှက်စာ" <?php if($ins->documenttype=='လျှို့ဝှက်စာ'): ?> selected <?php endif; ?>>လျှို့ဝှက်စာ</option>
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
              <input type="text"  name="instructor" value="<?php echo e($ins->instructor); ?>" required >
              
            </div>
          </div>            
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6 text-right">
              <label>စစ်ဆေးသူရာထူး <span style="color:red">* </span></label>
            </div>
            <div class="col-sm-6">
              <select name="instructor_rank" class="form-control">
                <option value="လက်ထောက်ညွှန်ကြားရေးမှူး" <?php if($ins->instructorrank=='လက်ထောက်ညွှန်ကြားရေးမှူး'): ?> selected <?php endif; ?>>လက်ထောက်ညွှန်ကြားရေးမှူး</option>
                <option value="ဦးစီးအရာရှိ(ဥပဒေ)" <?php if($ins->instructorrank=='ဦးစီးအရာရှိ(ဥပဒေ)'): ?> selected <?php endif; ?>>ဦးစီးအရာရှိ(ဥပဒေ)</option>
                <option value="ဦးစီးအရာရှိ(အလုပ်ရုံ)" <?php if($ins->instructorrank=='ဦးစီးအရာရှိ(အလုပ်ရုံ)'): ?> selected <?php endif; ?>>ဦးစီးအရာရှိ(အလုပ်ရုံ)</option>
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
        <div class="col-sm-12">
            <textarea  name="instruction1" class="col-sm-12" rows="4" placeholder="ပြုပြင်ဆောင်ရွက်ရန် (က)" required><?php echo e($ins->instruction1); ?></textarea>
        </div>

        <div class="col-sm-12">
                <textarea  name="instruction2" class="col-sm-12" rows="4" placeholder="ပြုပြင်ဆောင်ရွက်ရန် (ခ)"><?php echo e($ins->instruction2); ?></textarea>
        </div>

        <div class="col-sm-12">
                <textarea  name="instruction3" class="col-sm-12" rows="4" placeholder="ပြုပြင်ဆောင်ရွက်ရန် (ဂ)"><?php echo e($ins->instruction3); ?></textarea>
        </div>
        <div class="col-sm-12">
                <textarea  name="instruction4" class="col-sm-12" rows="4" placeholder="ပြုပြင်ဆောင်ရွက်ရန် (က)"><?php echo e($ins->instruction4); ?></textarea>
        </div>
        <div class="col-sm-12">
                <textarea  name="instruction5" class="col-sm-12" rows="4" placeholder="ပြုပြင်ဆောင်ရွက်ရန် (င)"><?php echo e($ins->instruction5); ?></textarea>
        </div>
    </div>
    
    
  <p>
    <div class="col-sm-3 float-right">
    <input type="submit" class="btn-primary"value="ညွှန်ကြားချက်ပြင်မည်"/>
  </div>
  </p>

 
</form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>