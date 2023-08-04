<?php $__env->startSection('content'); ?>
<script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
<!-- <style>
    a.disabled {
  pointer-events: none;
  cursor: default;
}
</style> -->
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
	        <div class="col-lg-12 text-center">
	            <div class="pull-left">
	                <h2>စစ်ဆေးထားသော စက်ရုံ/အလုပ်ရုံများ</h2>
	            </div>
	            
	        </div>
        </div>
        
	           
   
	<div class="table-responsive">
    	<div>
		    <table class="table table-bordered">
		        <thead class="thead-light">
		            <tr>
		                <th scope="col">
		                    No
		                </th>
		                 <th scope="col">
		                    စက်ရုံ/အလုပ်ရုံ အမည်
		                </th>
		                
		                <th scope="col">
		                    စစ်ဆေးသည့်နေ့
		                </th>
                        <th scope="col">
                            နောက်ဆုံးစစ်ဆေးသည့်နေ့
                        </th>
                        <th scope="col">
                            စစ်ဆေးသူအမည်
                        </th>
                        <th scope="col">
                            စစ်ဆေးသည့်ပုံစံ
                        </th>
                        <th scope="col">
                                လုပ်ဆောင်ချက်
                        </th>
		            </tr>
		        </thead>
		        <tbody class="list">
                    <?php $i=0;?>
                <?php $__currentLoopData = $factory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $factories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row" class="name">
                    <?php echo e(++$i); ?>

                </th>
               
                <td class="budget">
                  <?php echo e($factories->FactoryName); ?>

                </td>
                <td class="completion">
                    <?php echo e($factories->inspectiondate); ?>

                </td>
                <td class="completion">
                    <?php echo e($factories->lastinspectiondate); ?>

                </td>
                <td class="completion">
                    <?php echo e($factories->name); ?>

                </td>
                <td class="completion">
                  <?php echo e($factories->inspectedtimes.'၊ '.$factories->inspectiontype); ?>

                  
                </td>
                <td>
                    
                    <?php if($factories->safety_id!==null): ?><a href="<?php echo e(url('Edit_factorysafteyinspection/'.$factories->safety_id)); ?>" class="badge badge-info"> အလုပ်ရုံစစ်ဆေးရေး ပြင်မည် |</a> <a href="<?php echo e(url('View_factorysafteyinspection/'.$factories->safety_id)); ?>" class="badge badge-success"> အလုပ်ရုံစစ်ဆေးရေး 
                        ကြည့်မည်
                    </a><?php endif; ?> <br>
                    <?php if($factories->law_id!==null): ?><a href="<?php echo e(url('Edit_Factory_LabourInspectionLaw/'.$factories->law_id)); ?>" class="badge badge-info">  အလုပ်သမားဥပဒေစစ်ဆေးရေး ပြင်မည် |</a> <a href="<?php echo e(url('View_Factory_LabourInspectionLaw/'.$factories->law_id)); ?>" class="badge badge-success">  အလုပ်သမားဥပဒေစစ်ဆေးရေး ကြည့်မည် </a><?php endif; ?> 

                </td>
               
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
          </tbody>
    </table>
  

            
   
</div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>