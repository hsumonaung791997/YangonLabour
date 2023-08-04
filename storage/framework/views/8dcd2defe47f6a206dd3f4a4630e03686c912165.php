<?php $__env->startSection('content'); ?>
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
<?php $no=1;?>
				<div class="card-body">
					<table>
							<tr>
								<td>စဉ်</td>
								<td>အမည်</td>
							</tr>
					<?php $__currentLoopData = $regionname; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rname): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($no++); ?></td>
								<td><?php echo e($rname->district_name); ?></td>
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