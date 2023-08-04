<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Add District')); ?></div>

                <div class="card-body">
                    <form method="POST">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('ခရိုင်အမည်')); ?></label>

                            <div class="col-md-6">
                                <input id="districtname" type="text" class="form-control<?php echo e($errors->has('districtname') ? ' is-invalid' : ''); ?>" name="districtname" value="<?php echo e(old('districtname')); ?>" autofocus>

                                <?php if($errors->has('districtname')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('districtname')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
<!-- For Region-->
                               <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right"><?php echo e(__('တိုင်းဒေသကြီး')); ?></label>

                            <div class="col-md-6">
                                <select  type="text" class="form-control<?php echo e($errors->has('region') ? ' is-invalid' : ''); ?>" name="region" value="<?php echo e(old('region')); ?>" required autofocus>
                                    <?php $__currentLoopData = $rname; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($region->id); ?>"><?php echo e($region->region_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php if($errors->has('region')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('roegion')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <!-- End of Region -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('သိမ်းဆည်းမည်')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>