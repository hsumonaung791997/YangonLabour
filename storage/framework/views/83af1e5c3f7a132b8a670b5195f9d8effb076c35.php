<?php $__env->startSection('content'); ?>
<script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
   
    <p>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="pull-left">
                    <h2>အစီရင်ခံစာတင်ပြမှု</h2>
                </div>
                
            </div>
        </div>
    </p>
<form method="post">

<?php echo e(csrf_field()); ?>


 <?php $__currentLoopData = $case; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


 <input type="hidden" name="caseid" value="<?php echo e($c->caseid); ?>"/>


<table class="table table-bordered">
  <thead>
    <tr>
      
      <th colspan="5">ဆက်စပ်လျှက်ရှိသော စာရွက်စာတမ်းများ</th>
      
    
    </tr>
  </thead>
  <tbody>
    <tr>
   <th>
   
      စက်ရုံအလုပ်ရုံအမည်/ဆိုင် / အလုပ်ဌာန အမည်  
   
    </th>      
   <th>စစ်ဆေးချက်များ</th>
    <th>ညွှန်ကြားချက်များ</th>
    <th>အစီရင်ခံတင်ပြချက်များ</th>
    <th>တင်ပြသူအမည်</th> 
    </tr>
    <tr>

      <td>
          <?php echo e($c->factoryname); ?>

      </td>

      <td>
       <?php if($c->documentId1!=null): ?>
                
                <a href="<?php echo e(url('storage/inspection/'.$c->documentId1)); ?>" class="badge badge-pill badge-info">စစ်ဆေးချက် ကြည့်ရန်</a> <br>
            <?php endif; ?>

          <?php if($c->documentId2!=null): ?>
           
            <a href="<?php echo e(url('storage/inspection/'.$c->documentId2)); ?>" class="badge badge-pill badge-info">စစ်ဆေးချက် ကြည့်ရန်</a> <br>
           <?php endif; ?>
      <br/>
          <?php if($c->documentId3!=null): ?>

           
            <a href="<?php echo e(url('storage/inspection/'.$c->documentId3)); ?>" class="badge badge-pill badge-info">စစ်ဆေးချက် ကြည့်ရန်</a> <br>
           <?php endif; ?>
           <?php if($c->documentId4!=null): ?>
           
            <a href="<?php echo e(url('storage/inspection/'.$c->documentId4)); ?>" class="badge badge-pill badge-info">စစ်ဆေးချက် ကြည့်ရန်</a> <br>
           <?php endif; ?>
        <br/>
           <?php if($c->documentId5!=null): ?>
           <?php echo e($c->documentId5); ?>

            <a href="<?php echo e(url('storage/inspection/'.$c->documentId5)); ?>" class="btn  btn-info">စစ်ဆေးချက် ကြည့်ရန်</a> <br>
           <?php endif; ?>
           <?php if($c->documentId6!=null): ?>
           <?php echo e($c->documentId6); ?>

            <a href="<?php echo e(url('storage/inspection/'.$c->documentId6)); ?>" class="btn  btn-info">စစ်ဆေးချက် ကြည့်ရန်</a> 
           <?php endif; ?>
          <br/>
           <?php if($c->documentId7!=null): ?>
           <?php echo e($c->documentId7); ?>

            <a href="<?php echo e(url('storage/inspection/'.$c->documentId7)); ?>" class="btn  btn-info">ကြည့်ရန်</a>
           <?php endif; ?>
           <?php if($c->documentId8!=null): ?>
           <?php echo e($c->documentId8); ?>

            <a href="<?php echo e(url('storage/inspection/'.$c->documentId8)); ?>" class="btn  btn-info">ကြည့်ရန်</a>
           <?php endif; ?>
        <br>
           <?php if($c->documentId9!=null): ?>
           <?php echo e($c->documentId9); ?>

            <a href="<?php echo e(url('storage/inspection/'.$c->documentId9)); ?>" class="btn  btn-info">ကြည့်ရန်</a>
           <?php endif; ?>

     </td>
     
    
       <td><a href="<?php echo e(url('storage/instruction/'.$c->documentfileName)); ?>" class="badge badge-pill badge-info">ညွှန်ကြားချက်ဖိုင်ကြည့်မည်</a></td>
  
      
    
    <td>
      <?php echo e($c->reportinformation); ?>

    </td>
    <td>
      <?php echo e($c->name); ?>

    </td>
    
    </tr>
  </tbody>
</table>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php echo e($case->links()); ?>

  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>