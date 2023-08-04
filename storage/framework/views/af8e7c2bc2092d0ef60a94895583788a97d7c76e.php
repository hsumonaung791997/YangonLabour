 
<?php $__env->startSection('content'); ?>
<script src="<?php echo e(asset('assets/js/common.js')); ?>"></script>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-center">ထိခိုက်သူဆိုင်ရာအကြောင်းကြားစာများ</h2>
            </div>
            
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 margin-tb">
        </div>
        <div class="col-lg-4 text-right mb-2">
            <div class="pull-right">
                <a class="btn btn-primary"  href="<?php echo e(route('AffectedIndex.create')); ?>">အကြောင်းကြားစာ အသစ်ထည့်ရန်</a>
            </div>
        </div>
    </div>
   
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
   
    <table class="table table-bordered table-responsive">
        <thead class="thead-light">
            <tr>
                <th scope="col">
                     စဉ်
                </th>
                
                <th scope="col">
                    လုပ်ငန်းအမည်
                </th>
                <th scope="col">
                    ပိုင်ရှင်အမည်
                </th>
                <th scope="col"> လုပ်ငန်းအမျိုးအစား</th>
                <th scope="col">
                    လိပ်စာ
                </th>
                <th scope="col">
                        ဖုန်းနံပါတ်
                </th>
                <th scope="col">
                    စစ်ဆေးခြင်း
                </th>
                <th scope="col">
                     လုပ်ဆောင်ချက်   
                </th>
             </tr>

        </thead>
        <tbody class="list">
        <?php $__currentLoopData = $affected; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td scope="row" class="name">
                    <?php echo e(++$i); ?>

                </td>
                
                <td scope="row" class="name">
                    <?php echo e($aff->FactoryName); ?> <br> (<?php if($aff->Type==1): ?> စက်ရုံ/အလုပ်ရုံ <?php else: ?> ဆိုင်အလုပ်ဌာန <?php endif; ?>)
                </td>
                <td class="budget">
                    <?php echo e($aff->OwnerName); ?>

                </td>
                <td class="status">
                    <span class="badge badge-dot mr-4">
                      <?php echo e($aff->FactoryType); ?>

                    </span>
                </td>
                <td>
                     <?php echo e($aff->FactoryAddress); ?>

                </td>
                <td>
                    <?php echo e($aff->FactoryPhno); ?>

                </td>
                <td scope="row" class="name">
                    <?php if(App\Document::where('Factory_Type',1)->where('check_id',$aff->id)->value('documentfileName')==''): ?>
                        ဆောင်ရွက်ဆဲ
                    <?php else: ?>
                    စစ်ဆေးပြီး <br>
                    <a href="<?php echo e(url('storage/inspection/'. App\Document::where('Factory_Type',1)->where('check_id',$aff->id)->value('documentfileName'))); ?>" class="badge badge-pill badge-info">ကြည့်ရန်</a> <br>
                    <?php endif; ?>
                   
                </td>
                <td class="completion">
                    <form action="<?php echo e(route('AffectedIndex.destroy',$aff->id)); ?>" method="POST" class="delete">
                        <a href="<?php echo e(url('/impactworkerinform/'.$aff->id.'/'.$aff->FactoryID.'/'.$aff->Type)); ?>" class="badge badge-warning">စစ်ဆေးမည်</a> |      
                        <a href="<?php echo e(route('AffectedIndex.show',$aff->id)); ?>" class="badge badge-info">ကြည့်မည်</a>   <br>   
                        <a class="badge badge-primary" href="<?php echo e(route('AffectedIndex.edit',$aff->id)); ?>">ပြင်မည်</a> |
       
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
          
                        <button type="submit" class="badge badge-danger" >ဖျက်မည်</button>
                        
                    </form>
                </td>
               
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </tbody>
    </table>
    </div>
    <?php if(Request::path() == 'aff'): ?>
    <?php echo $affected->links(); ?>

    <?php endif; ?>
</div>
          
</p>
<!-- scroll back to top of the page -->
<a id="back2Top" title="Back to top" href="#">&#10148;</a>

   
    
<script type="text/javascript">
    $(".delete").on("submit", function(){
        return confirm("Are you sure to delete this record?");
    });


</script>


      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>