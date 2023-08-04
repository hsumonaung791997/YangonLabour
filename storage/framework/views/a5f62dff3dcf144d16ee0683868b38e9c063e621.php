<?php $__env->startSection('content'); ?>
<h3 class="text-center">ညွှန်ကြားချက်များ</h3> <hr>
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
                <td><?php echo e($ins->factoryname); ?> <br> (<?php if($ins->factory_type==1): ?> စက်ရုံ အလုပ်ရုံ <?php elseif($ins->factory_type==2): ?> ဆိုင် <?php endif; ?>)</td>
                <td><?php echo e($ins->instructor); ?></td>
                <td><?php echo e($ins->instructor_rank); ?></td>
                <td><?php if($ins->inspectiontype_id==1): ?>အလုပ်သမားဥပဒေစစ်ဆေးရေး<?php else: ?> အလုပ်ရုံစစ်ဆေးရေး <?php endif; ?></td>
                
                <td class="completion">
                    
                        <a href="<?php echo e(url('instructiondetail/'.$ins->id)); ?>" class="badge badge-info">ကြည့်မည်</a> |      
                        <a class="badge badge-primary" href="<?php echo e(url('instructiondetail/'.$ins->id)); ?>">ပြင်မည်</a> |
       
                        
          
                        <a href="<?php echo e(route('instructiondestroy',$ins->id)); ?>"  class="badge badge-danger" id="factorydelete">ဖျက်မည်</a>
                        <a href="<?php echo e(route('downloadfile',$ins->id)); ?>"  class="badge badge-success">Download</a>
                        
                    </form>
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