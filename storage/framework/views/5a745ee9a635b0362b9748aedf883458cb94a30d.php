<?php $__env->startSection('content'); ?>
	<div class="col-sm-5 pull-left">
		<a href="<?php echo e(url('township')); ?>" class="btn btn-primary">မြို့နယ်များထပ်ထည့်ရန်</a>
	</div>
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            

				<div>
					<table class="table table-bordered">
							<tr>
								<th>စဉ်</th>
								<th>အမည်</th>
								<th>ခရိုင်</th>
								<th>လုပ်ဆောင်ချက်</th>
							</tr>
					<?php $i= ($township->currentpage()-1) * ($township->perpage());?>
					<?php $__currentLoopData = $township; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tname): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e(++$i); ?></td>
								<td><?php echo e($tname->township_name); ?></td>
								<td><?php echo e($tname->district->district_name); ?></td>
								<td> 

                            
                        <a class="badge badge-primary" href="<?php echo e(url('townshipedit/'.$tname->id)); ?>">ပြင်မည်</a> |
                         <a class="badge badge-danger" href="<?php echo e(url('townshipedit/'.$tname->id)); ?>">ဖျက်မည်</a> 
       
          				</td>
							</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</table>

					<br>
					<?php echo $township->render(); ?>

					
				</div>
			</div>
		

	</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>