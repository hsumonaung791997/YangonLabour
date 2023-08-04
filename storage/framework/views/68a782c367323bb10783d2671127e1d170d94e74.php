<?php $__env->startSection('content'); ?>
<h3 class="text-center">လုပ်ငန်းခွင် ထိခိုက်မှု ဆိုင်ရာ ညွှန်ကြားချက်များ</h3> <hr>

<?php if(session()->get('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-inner--icon"></span>
            <span class="alert-inner--text">  <?php echo e(session()->get('success')); ?>  </span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
<?php endif; ?>
      
 <div class="row">
    <div class="col-sm-12 table-responsive">
        <table class="table table-bordered" id="myTable">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">
                        စဉ်
                        </th>
                        <th scope="col">
                            စက်ရုံ(သို့)ဆိုင် အမည်
                        </th>
                        <th scope="col">
                            စစ်ဆေးသည့်ရက်စွဲ
                        </th>
                        <th scope="col">
                        ညွှန်ကြားသူအမည်
                        </th>
                        <th scope="col">
                        
                        ညွှန်ကြားသူရာထူး
                        </th>
                        <th scope="col">
                        စစ်ဆေးသည့်ဥပဒေ
                        
                        </th>
                        <th scope="col">
                        လုပ်ဆောင်ချက်များ
                        </th>
                        
                    </tr>
                </thead>
                <tbody class="list">
                    
                <?php $i= ($instruction->currentpage()-1) * ($instruction->perpage());?>
          <?php $__currentLoopData = $instruction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ins): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          
            <tr>
                <td><?php echo e(++$i); ?></td>
                <td><?php echo e($ins->name); ?> <br> (<?php if($ins->factory_type==1): ?> စက်ရုံ အလုပ်ရုံ <?php elseif($ins->factory_type==2): ?> ဆိုင် <?php endif; ?>)</td>
            <td><?php echo e($ins->instructiondate); ?></td>
                <td><?php echo e($ins->instructor); ?></td>
                <td><?php echo e($ins->instructor_rank); ?></td>
                <td>လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက်</td>
                
                <td class="completion">
                    
                        
                        <a href="<?php echo e(route('impactDownloadFile',$ins->id)); ?>"  class="badge badge-success">ကြည့်မည်  </a> <br>
                        <a href="<?php echo e(route('EditImpactInstruction',$ins->id)); ?>"  class="badge badge-primary">ပြင်မည်  </a>

                        
                    
                </td>
               
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </tbody>
    </table>
    </div>

    <?php echo $instruction->render(); ?>

    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>