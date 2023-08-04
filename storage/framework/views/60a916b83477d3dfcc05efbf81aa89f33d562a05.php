<?php $__env->startSection('content'); ?>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>အလုပ်သမားရေးရာ ဥပဒေများအား အသိပညာပေးဆွေးနွေးပွဲ ဆောင်ရွက်မှု</h2>
            </div>
            
        </div>
</div>
<?php if(Request::segment(1)=='seminardetail'): ?>
 
  <?php $__currentLoopData = $seminar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <p>
            
            <div class="row">
                <div class="col-sm-5 text-center">
                    <label for="FactoryName">ကျင်းပသည့်နေ့စွဲ</label>
                        <input  type="date"  name="helddate" value="<?php echo e($sem->helddate); ?>" disabled="disabled">
                </div>
                <div class="col-sm-1">
            </div>
            <div class="col-sm-5 text-center">
                    <label for="FactoryName">စက်ရုံအမည်</label>
                        <input  id="FactoryName"  name="FactoryName" value="<?php echo e($sem->factoryname); ?>" disabled="disabled">
                </div>
        </div>
        </p>
            
              
        <p>
            
            <div class="row">
                <div class="col-sm-5 text-center">
                    <label for="FactoryName">ဆွေးနွေးပွဲဦးဆောင်ပြုလုပ်သူ အမည်</label>
                        <input  type="text" id=""  name="seminarleader" value="<?php echo e($sem->s_leader); ?>" disabled="disabled">
                        
                </div>
                <div class="col-sm-1">
                </div> 
                <div class="col-sm-5 text-center">
                    <label for="FactoryID">ဆွေးနွေးပွဲဦးဆောင်ပြုလုပ်သူ ရာထူး</label>
                        <input type="text" id=""  name="seminarleaderrank" value="<?php echo e($sem->s_leaderrank); ?>" disabled="disabled">
                       
                </div>                  
               
                                    
            </div>
        </p>
        <p>
            
            <div class="row">
                <div class="col-sm-5 text-center">
                    <label for="FactoryName">ဆွေးနွေးသူ၁</label>
                        <input type="text" id=""  name="contributor1"  value="<?php echo e($sem->s_contributor1); ?>" disabled="disabled">
                </div>
                <div class="col-sm-1">
                </div> 
                <div class="col-sm-5 text-center">
                    <label for="FactoryID">ဆွေးနွေးသူ ရာထူး</label>
                        <input type="text" id=""  name="contributor1rank" value="<?php echo e($sem->s_contributor1rank); ?>" disabled="disabled">
                </div>                  
               
                                    
            </div>
        </p>
        <p>
            
            <div class="row">
                <div class="col-sm-5 text-center">
                    <label for="FactoryName">ဆွေးနွေးသူ ၂</label>
                        <input type="text" id=""  name="contributor2" value="<?php echo e($sem->s_contributor2); ?>" disabled="disabled">
                </div>
                <div class="col-sm-1">
                </div> 
                <div class="col-sm-5 text-center">
                    <label for="FactoryID">ဆွေးနွေးသူ ရာထူး</label>
                        <input type="text" id=""  name="contributor2rank" value="<?php echo e($sem->s_contributor2rank); ?>" disabled="disabled">
                </div>                  
               
                                    
            </div>
        </p>
        <p>
            
            <div class="row">
                <div class="col-sm-5 text-center">
                    <label for="FactoryName">ဆွေးနွေးသူ ၃</label>
                        <input  type="text"id=""  name="contributor3" value="<?php echo e($sem->s_contributor3); ?>" disabled="disabled">
                </div>
                <div class="col-sm-1">
                </div> 
                <div class="col-sm-5 text-center">
                    <label for="FactoryID">ဆွေးနွေးသူ ရာထူး</label>
                        <input type="text" id=""  name="contributor3rank"value="<?php echo e($sem->s_contributor3rank); ?>" disabled="disabled">
                </div>                  
               
                                    
            </div>
        </p>
        <p><div class="row">
                <div class="col-sm-12 text-center">
                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">ဆွေးနွေးပွဲကျင်းပရာနေရာ</legend>
                        <div class="control-group">
                            <div class="row">
                                <div class="col-sm-5 text-right">
                                    <label for="district">ခရိုင်</label>
                                </div>
                                <div class="col-sm-6 text-left">
                                    <input type="text" id=""  name="district" value="<?php echo e($sem->district->district_name); ?>" disabled="disabled">
                                    
                                </div>
                            </div> <br>
                            <div class="row">
                                <div class="col-sm-5 text-right">
                                    <label for="township_id">မြို့နယ်</label>
                                </div>
                                <div class="col-sm-6 text-left">
                                   <input type="text" id=""  name="township"value="<?php echo e($sem->township->township_name); ?>" disabled="disabled">
                                </div>
                            </div> <br>
                            <div class="row">
                
                    <div class="col-sm-5 text-right">
                            <label for="FactoryName">ကျင်းပပြုလုပ်သည့်နေရာ</label>
                    </div>
                    <div class="col-sm-6 text-left">
                    
                        <textarea rows="3" class="col-sm-12" name="splace" disabled="disabled"><?php echo e($sem->s_place); ?></textarea>
                </div>
                               
                        </div>
                    </fieldset>
                </div>
            </div>

        </p>
        <p>
            
            <div class="row">
                <div class="col-sm-5 text-center">
                    <label for="FactoryName">သင်တန်းကျောင်းအမည်</label>
                        <textarea rows="3" class="col-sm-12" name="trainingclass" disabled="disabled"><?php echo e($sem->trainingclass); ?></textarea>
                </div>
                <div class="col-sm-1">
                </div> 
                <div class="col-sm-5 text-center">
                    <label for="FactoryID">ပြုလုပ်သည့်အကြိမ်</label>
                        <input  type="text" id=""  name="stimes" value="<?php echo e($sem->s_times); ?>" disabled="disabled">
                </div>                  
               
                                    
            </div>
        </p>
<p>
<div class="row">
    <div class="col-sm-12">
        <fieldset class="scheduler-border">
                        <legend class="scheduler-border">တက်ရောက်သည့်ဦးရေ</legend>
            
            <div class="row">
                <div class="col-sm-5 text-center">
                    <label for="FactoryName">ကျား</label>
                        <input type="text" name="men" value="<?php echo e($sem->mmen); ?>" disabled="disabled">
                        
                </div>
                <div class="col-sm-1">
                </div> 
                <div class="col-sm-5 text-center">
                    <label for="FactoryID">မ</label>
                        <input type="text" name="women" value="<?php echo e($sem->mwomen); ?>" disabled="disabled">
                </div>                  
               
                                    
            </div>
        </fieldset>
    </div>
</div>
</p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
     <form  class="form-background"  method="post">
     <?php echo e(csrf_field()); ?>

  
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

  <?php $__currentLoopData = $seminar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>      
        
         <input type="hidden" value="<?php echo e($sem->factory_id); ?>" name="factoryid" >
         <input type="hidden" value="<?php echo e($sem->ftype); ?>" name="factorytype">
         <input type="hidden" value="<?php echo e($sem->township_id); ?>" name="township_id">
         <input type="hidden" value="<?php echo e($sem->district_id); ?>" name="district_id">
         <input type="hidden" value="<?php echo e($sem->id); ?>" name="seminarid">
         <p>
            
            <div class="row">
                <div class="col-sm-5 text-center">
                    <label for="FactoryName">ကျင်းပသည့်နေ့စွဲ</label>
                        <input  type="date"  name="helddate" value=<?php echo e($sem->helddate); ?>><span style="font:red">*</span>
                </div>
                <div class="col-sm-1">
            </div>
            <div class="col-sm-5 text-center">
                    <label for="FactoryName">စက်ရုံအမည်</label>
                        <input  id="FactoryName"  name="FactoryName" value="<?php echo e($sem->factoryname); ?>" readonly="readonly">
            </div>
        </div>
     
        <p>
            
            <div class="row">
                <div class="col-sm-5 text-center">
                    <label for="FactoryName">ဆွေးနွေးပွဲဦးဆောင်ပြုလုပ်သူ အမည်</label>
                        <input  type="text" id=""  name="seminarleader"value="<?php echo e($sem->s_leader); ?>">
                        <span style="color:red">*</span>
                </div>
                <div class="col-sm-1">
                </div> 
                <div class="col-sm-5 text-center">
                    <label for="FactoryID">ဆွေးနွေးပွဲဦးဆောင်ပြုလုပ်သူ ရာထူး</label>
                        <input type="text" id=""  name="seminarleaderrank" value="<?php echo e($sem->s_leaderrank); ?>">
                        <span style="color:red">*</span>
                </div>                  
               
                                    
            </div>
        </p>
        <p>
            
            <div class="row">
                <div class="col-sm-5 text-center">
                    <label for="FactoryName">ဆွေးနွေးသူ၁</label>
                        <input type="text" id=""  name="contributor1" value="<?php echo e($sem->s_contributor1); ?>">
                </div>
                <div class="col-sm-1">
                </div> 
                <div class="col-sm-5 text-center">
                    <label for="FactoryID">ဆွေးနွေးသူ ရာထူး</label>
                        <input type="text" id=""  name="contributor1rank" value="<?php echo e($sem->s_contributor1rank); ?>">
                </div>                  
               
                                    
            </div>
        </p>
        <p>
            
            <div class="row">
                <div class="col-sm-5 text-center">
                    <label for="FactoryName">ဆွေးနွေးသူ ၂</label>
                        <input type="text" id=""  name="contributor2" value="<?php echo e($sem->s_contributor2); ?>">
                </div>
                <div class="col-sm-1">
                </div> 
                <div class="col-sm-5 text-center">
                    <label for="FactoryID">ဆွေးနွေးသူ ရာထူး</label>
                        <input type="text" id=""  name="contributor2rank" value="<?php echo e($sem->s_contributor2rank); ?>">
                </div>                  
               
                                    
            </div>
        </p>
        <p>
            
            <div class="row">
                <div class="col-sm-5 text-center">
                    <label for="FactoryName">ဆွေးနွေးသူ ၃</label>
                        <input  type="text"id=""  name="contributor3" value="<?php echo e($sem->s_contributor3); ?>">
                </div>
                <div class="col-sm-1">
                </div> 
                <div class="col-sm-5 text-center">
                    <label for="FactoryID">ဆွေးနွေးသူ ရာထူး</label>
                        <input type="text" id=""  name="contributor3rank" value="<?php echo e($sem->s_contributor3rank); ?>">
                </div>                  
               
                                    
            </div>
        </p>
        <p><div class="row">
                <div class="col-sm-12 text-center">
                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">ဆွေးနွေးပွဲကျင်းပရာနေရာ</legend>
                        <div class="control-group">
                            <div class="row">
                                <div class="col-sm-5 text-right">
                                    <label for="district">ခရိုင်</label>
                                </div>
                                <div class="col-sm-6 text-left">
                                   <input type="text" id=""  name="district" value="<?php echo e($sem->district->district_name); ?>" readonly="readonly"> 
                                </div>
                            </div> <br>
                            <div class="row">
                                <div class="col-sm-5 text-right">
                                    <label for="township_id">မြို့နယ်</label>
                                </div>
                                <div class="col-sm-6 text-left">
                                 <input type="text" id=""  name="district" value="<?php echo e($sem->township->township_name); ?>" readonly="readonly">  
                                  
                                </div>
                            </div> <br>
                            <div class="row">
                
                    <div class="col-sm-5 text-right">
                            <label for="FactoryName">ကျင်းပပြုလုပ်သည့်နေရာ</label>
                    </div>
                    <div class="col-sm-6 text-left">
                    
                        <textarea rows="3" class="col-sm-12" name="splace"><?php echo e($sem->s_place); ?></textarea><span style="color:red">*</span>
                </div>
                               
                        </div>
                    </fieldset>
                </div>
            </div>

        </p>
        <p>
            
            <div class="row">
                <div class="col-sm-5 text-center">
                    <label for="FactoryName">သင်တန်းကျောင်းအမည်</label>
                        <textarea rows="3" class="col-sm-12" name="trainingclass" ><?php echo e($sem->trainingclass); ?></textarea>
                </div>
                <div class="col-sm-1">
                </div> 
                <div class="col-sm-5 text-center">
                    <label for="FactoryID">ပြုလုပ်သည့်အကြိမ်</label>
                        <input  type="text" id=""  name="stimes" value="<?php echo e($sem->s_times); ?>">
                </div>                  
               
                                    
            </div>
        </p>
<p>
<div class="row">
    <div class="col-sm-12">
        <fieldset class="scheduler-border">
                        <legend class="scheduler-border">တက်ရောက်သည့်ဦးရေ</legend>
            
            <div class="row">
                <div class="col-sm-5 text-center">
                    <label for="FactoryName">ကျား</label>
                        <input type="text" name="men" value="<?php echo e($sem->mmen); ?>">
                        <span style="color:red">*</span>
                </div>
                <div class="col-sm-1">
                </div> 
                <div class="col-sm-5 text-center">
                    <label for="FactoryID">မ</label>
                        <input type="text" name="women" value="<?php echo e($sem->mwomen); ?>"><span style="color:red">*</span>
                </div>                  
               
                                    
            </div>
        </fieldset>
    </div>
</div>
</p>

   
        <button type="submit" class=" btn btn-primary">ပြင်မည်</button>

   

</form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
<?php endif; ?>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>