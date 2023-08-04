<?php $__env->startSection('content'); ?>
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border:0!important">
<?php $no=1;?>
				<div class="card-body " >
					<table style="width:100%;" class="table table-bordered">
							<tr>
								<th class="p-3">စဉ်</th>
								<th class="p-3">အမည်</th>
							</tr>
					<?php $__currentLoopData = $zone; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $z): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td class="p-3"><?php echo e($no++); ?></td>
								<td class="p-3"><?php echo e($z->industrialzone_name); ?></td>
							</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</table>
				</div>
			</div>
		</div>
	</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>