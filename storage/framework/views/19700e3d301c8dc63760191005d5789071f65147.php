<?php $__env->startSection('content'); ?>

</style>
 
     <form action="<?php echo e(url('caseopen')); ?>" method="post">
     <?php echo e(csrf_field()); ?>

     <?php $__currentLoopData = $newcase; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $case): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  
        <p>
            <div class="row">
                <div class="col-sm-5">
                <label><?php echo e(($id==1) ? 'စက်ရုံ' : 'ဆိုင်/အလုပ်ဌာန'); ?> အမည်</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" value="<?php if($id==1): ?><?php echo e($case->FactoryName); ?><?php else: ?><?php echo e($case->shopname); ?><?php endif; ?>"/>
                    <input type="hidden" name="factoryid" value="<?php if($id==1): ?><?php echo e($case->FactoryId); ?><?php else: ?><?php echo e($case->ShopId); ?><?php endif; ?>"/>
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col-sm-5">
                    <label>ဖိုင်တွဲရန်</label>
                </div>
                <div class="col-sm-7">
                    <?php $i=1;?>
                    <?php if(sizeof($document)==0): ?>
                    <div class="row">
                        <div class="col-sm-6">
                        <div class="custom-control custom-checkbox mb-3">
                    <input class="custom-control-input" id="nofile" name="filename[<?php echo e($i); ?>]"type="checkbox" value="nofile" required>
                        <label class="custom-control-label" for="nofile">There is no to attach any file</label>
                </div>
                </div>
                
                </div>  
                    <?php else: ?>
                    <?php $__currentLoopData = $document; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="row">
                        <div class="col-sm-6">
                        <div class="custom-control custom-checkbox mb-3">
                        <input class="custom-control-input" id="<?php echo e($d->ID); ?>" name="filename[<?php echo e($i); ?>]"type="checkbox" value="<?php echo e($d->documentfileName); ?>" required>
                        <label class="custom-control-label" for="<?php echo e($d->ID); ?>"><?php echo e($d->documentfileName); ?></label>
                    </div>
                </div>
                
                    </div>
                    <?php $i++;?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col-sm-5">
                    <label>စတင်ဆောင်ရွက်သည့်နေ့စွဲ</label>
                </div>
                
                <div class="col-sm-7">
                   <input  name="createdate" value="<?php echo e(Carbon\Carbon::now()->toDateString()); ?>" >
                       
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col-sm-5">
                    <label>ဆောင်ရွက်သူအမည်</label>
                </div>
                
                <div class="col-sm-7">
                   <input type="text" name="registername" value="<?php echo e($case->name); ?>" >
                       
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col-sm-5">
                    <label>စစ်ဆေးသူအရာရှိအမည်</label>
                </div>
                
                <div class="col-sm-7">
                   <input type="text" name="inspector" value="<?php echo e($case->inspection_name); ?>" >
                       
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col-sm-5">
                    <label>စက်မှုဇုန်</label>
                </div>
                <div class="col-sm-7">
                  <input type="text" name="zone" value="<?php if($id==1): ?><?php echo e($case->industrialzone_name); ?><?php endif; ?>" >   
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col-sm-5">
                    <label>မြို့နယ်</label>
                </div>
                <div class="col-sm-7">
                  <input type="text" name="township" value="<?php echo e($case->township_name); ?>" >   
                </div>
            </div>
        </p>
         <p>
            <div class="row">
                <div class="col-sm-5">
                    <label>ခရိုင်</label>
                </div>
                  <div class="col-sm-7">
                  <input type="text" name="district" value="<?php echo e($case->district_name); ?>" >   
                </div>        
            </div>
            
        </p>
       <input type="hidden" name="checkid" value="<?php if($id==1): ?><?php echo e($case->cid); ?><?php else: ?><?php echo e($case->sid); ?> <?php endif; ?>">
       <input type="hidden" name="inspecteddate" value="<?php echo e($case->inspectiondate); ?>">
       <input type="hidden" name="townshipid" value="<?php echo e($case->township_id); ?>"/>
       <input type="hidden" name="districtid" value="<?php echo e($case->district_id); ?>"/>
       <input type="hidden" name="zoneid" value="<?php if($id==1): ?><?php echo e($case->zone_id); ?><?php endif; ?>"/>
       <input type="hidden" name="factorytype" value="<?php echo e($id); ?>"/>
      <div class="row">
            <div class="col-sm-2 float-right">
                <?php if($id==1): ?>
                <?php if($case->inspectiontype=='ပုံမှန်'||$case->inspectiontype=='အထူး' || $case->inspectiontype=='လျှပ်တစ်ပြတ်'): ?>
                <input type="submit" name="save" class="btn btn-primary"value="opencase"/>
                <?php else: ?>
               
                <input type="submit" name="save" class="btn btn-primary" value="updatecase"/>
                <?php endif; ?>

                <?php else: ?>
                <?php if($case->inspection_type=='ပုံမှန်'||$case->inspection_type=='အထူး' || $case->inspection_type=='လျှပ်တစ်ပြတ်'): ?>
                <input type="submit" name="save" class="btn btn-primary"value="opencase"/>
                <?php else: ?>
               
                <input type="submit" name="save" class="btn btn-primary" value="updatecase"/>
                <?php endif; ?>
                
                <?php endif; ?>
            </div>
   </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>