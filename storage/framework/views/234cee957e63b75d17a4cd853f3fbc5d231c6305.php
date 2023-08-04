<?php $__env->startSection('content'); ?>
<script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
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

    <p>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="pull-left">
                    <h2>အစီရင်ခံစာတင်ပြမှု</h2>
                </div>
                
            </div>
        </div>
    </p>
  <form method="post" action="<?php echo e(url('createreport/'.$id)); ?>">

<?php echo e(csrf_field()); ?>



 <?php $__currentLoopData = $case; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


 <input type="hidden" name="caseid" value="<?php echo e($c->caseid); ?>"/>


<table class="table table-bordered">
  <thead>
    <tr>
      
      <th colspan="4">ဆက်စပ်လျှက်ရှိသော စာရွက်စာတမ်းများ</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
   
      <td>
          <?php if($factorytype==1): ?>
           စက်ရုံအလုပ်ရုံအမည်
          <?php else: ?>
          ဆိုင်နှင့်အလုပ်ဌာနအမည်
          <?php endif; ?>
      </td>
      <td>စစ်ဆေးချက်များ</td>
     
    </tr>
    <tr>
    <input type="hidden" name="factorytype" value="<?php echo e($factorytype); ?>">
      <td>
        <?php if($factorytype==1): ?>
        <?php echo e($c->FactoryName); ?>

        <?php else: ?>
        <?php echo e($c->shopname); ?>

        <?php endif; ?>
      </td>

      <td>
       <?php if($c->documentId1!=null): ?>
                <?php echo e($c->documentId1); ?>

                <a href="<?php echo e(url('storage/inspection/'.$c->documentId1)); ?>" class="badge badge-pill badge-info">ကြည့်ရန်</a> <br>
       <?php endif; ?>

          <?php if($c->documentId2!=null): ?>
            <?php echo e($c->documentId2); ?>

            <a href="<?php echo e(url('storage/inspection/'.$c->documentId2)); ?>" class="badge badge-pill badge-info">ကြည့်ရန်</a> <br>
           <?php endif; ?>

          <?php if($c->documentId3!=null): ?>
            <?php echo e($c->documentId3); ?>

            <a href="<?php echo e(url('storage/inspection/'.$c->documentId3)); ?>" class="badge badge-pill badge-info">ကြည့်ရန်</a> <br>
           <?php endif; ?>

           <?php if($c->documentId4!=null): ?>
           <?php echo e($c->documentId4); ?>

            <a href="<?php echo e(url('storage/instruction/'.$c->documentId4)); ?>" class="badge badge-pill badge-info">ကြည့်ရန်</a>
           <?php endif; ?>
        <br/>
           <?php if($c->documentId5!=null): ?>
           <?php echo e($c->documentId5); ?>

            <a href="<?php echo e(url('storage/instruction/'.$c->documentId5)); ?>" class="badge badge-pill badge-info">ကြည့်ရန်</a>
           <?php endif; ?>
           <?php if($c->documentId6!=null): ?>
           <?php echo e($c->documentId6); ?>

            <a href="<?php echo e(url('storage/instruction/'.$c->documentId6)); ?>" class="badge badge-pill badge-info">ကြည့်ရန်</a>
           <?php endif; ?>
          <br/>
           <?php if($c->documentId7!=null): ?>
           <?php echo e($c->documentId7); ?>

            <a href="<?php echo e(url('storage/instruction/'.$c->documentId7)); ?>" class="btn  btn-info">ကြည့်ရန်</a>
           <?php endif; ?>
           <?php if($c->documentId8!=null): ?>
           <?php echo e($c->documentId8); ?>

            <a href="<?php echo e(url('storage/instruction/'.$c->documentId8)); ?>" class="badge badge-pill badge-info">ကြည့်ရန်</a>
           <?php endif; ?>
        <br>
           <?php if($c->documentId9!=null): ?>
           <?php echo e($c->documentId9); ?>

            <a href="<?php echo e(url('storage/instruction/'.$c->documentId9)); ?>" class="badge badge-pill badge-info">ကြည့်ရန်</a>
           <?php endif; ?>

     </td>
      
    </tr>
  </tbody>
</table>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <br>
 <div class="row">
  <div class="col-sm-3 text-right"><label>အစီရင်ခံတင်ပြချက်များ</label></div>
   <div class="col-sm-9"><span style="color:red">*</span>
      <textarea class="col-sm-12" name="reportinformation" rows="4" required></textarea>
      
   </div>
 </div>
<div class="row">
    
    <div class="col-sm-12">
    <label>သို့</label> 
    </div>
   
 
   <?php $__currentLoopData = $reportto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
  <?php if($report->role_id==2): ?>
   
 <div class="col-sm-12">
    <div class="custom-control custom-checkbox mb-3">
       <input class="custom-control-input" id="minister" name="minister"type="checkbox" value="<?php echo e($report->id); ?>">
    <label class="custom-control-label" for="minister">နေပြည်တော် ဝန်ကြီးဌာန</label>
    </div>
  </div>
  <?php else: ?>
  <div class="col-sm-12">
    <div class="custom-control custom-checkbox mb-3">
       <input class="custom-control-input" id="regionad" name="region"type="checkbox" value="<?php echo e($report->id); ?>">
    <label class="custom-control-label" for="regionad">တိုင်းဒေသကြီးစစ်ဆေးရေးမှူး</label>
    </div>
  </div>
  <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


  
  
   
                     
</div>
  <br>
<div class="row">
    <div class="col-sm-12">
    <button type="submit" class="btn btn-lg btn-primary">တင်ပြအပ်ပါသည်</button>
    </div>
</div>

        
    </form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>