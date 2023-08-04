<?php $__env->startSection('content'); ?>
<script src="<?php echo e(asset('assets/js/common.js')); ?>"></script>
    <p>
    	<div class="row">
	        <div class="col-lg-12 text-center">
	            <div class="pull-left">
	                <h1>အလုပ်သမားရေးရာ ဥပဒေများအား အသိပညာပေးဆွေးနွေးပွဲ ဆောင်ရွက်ထားမှုများ</h1>
	            </div>
	            
	        </div>
	
    	</div>
    </p> 
    <p>
        <div class="col-sm-12 text-right">
            <a href="<?php echo e(route('create.seminar')); ?>" class="btn btn-primary">အသိပညာပေးဆွေးနွေးပွဲ အသစ် ထည့်သွင်းမည် </a>
        </div>
    </p>
   <div class="col-sm-12">
        <table class="table table-bordered table-responsive" id="myTable">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">
                        စဉ်
                        </th>
                        <th scope="col">
                        ဆွေးနွေးပွဲဦးဆောင်ပြုလုပ်သူနှင့် ဆွေးနွေးသူများ
                        </th>
                        <th scope="col">
                        ကျင်းပပြုလုပ်သည့်နေ့ရက်
                        </th>
                        <th scope="col">
                        စက်ရုံအလုပ်ရုံ အမည် / ဆိုင်/အလုပ်ဌာနအမည်                       
                        </th>
                        <th scope="col">
                        လုပ်ဆောင်ရန်
                        </th>
                       
                        
                    </tr>
                </thead>
                <tbody class="list">
                    
                <?php $i= ($seminar->currentpage()-1) * ($seminar->perpage());?>
          <?php $__currentLoopData = $seminar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          
            <tr>
                <td><?php echo e(++$i); ?></td>
                <td><?php echo e($sem->s_leader); ?>(<?php echo e($sem->s_leaderrank); ?>)<br>
                <?php if($sem->s_contributor1!=null): ?><?php echo e($sem->s_contributor1); ?>(<?php echo e($sem->s_contributor1rank); ?>)<br/><?php endif; ?> <?php if($sem->s_contributor2!=null): ?><?php echo e($sem->s_contributor2); ?>(<?php echo e($sem->s_contributor2rank); ?>)<br/><?php endif; ?> <?php if($sem->s_contributor3!=null): ?>
                <?php echo e($sem->s_contributor3); ?>(<?php echo e($sem->s_contributor3rank); ?>)<br/><?php endif; ?></td>
                <td><?php echo e($sem->helddate); ?></td>
                <td><?php echo e($sem->factoryname); ?></td>
                                
                <td class="completion">
                    
                        <a href="<?php echo e(url('seminardetail/'.$sem->id)); ?>" class="badge badge-info">ကြည့်မည်</a> |      
                        <a class="badge badge-primary" href="<?php echo e(url('seminaredit/'.$sem->id)); ?>">ပြင်မည်</a>                      
          
                        <a href="<?php echo e(route('seminardestroy',$sem->id)); ?>(" class="badge badge-danger" id="factorydelete">ဖျက်မည်</a>
                        
                    </form>
                </td>
               
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </tbody>
    </table>
    </div>

    <?php echo $seminar->render(); ?>

    
</div>
<!-- scroll back to top of the page -->
<a id="back2Top" title="Back to top" href="#">&#10148;</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>