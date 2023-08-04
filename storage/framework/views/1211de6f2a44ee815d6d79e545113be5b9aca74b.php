<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="<?php echo e(asset('assets/js/common.js')); ?>"></script>

    <?php if(session()->get('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="alert-inner--icon"></span>
        <span class="alert-inner--text">  <?php echo e(session()->get('success')); ?>  </span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php endif; ?>

    <p>
    	<div class="row">
	        <div class="col-lg-12 text-center">
	            <div class="pull-left">
	                <h1>အချိန်ပိုလုပ်ကိုင်ခွင့်တောင်းခံထားသော စက်ရုံ/အလုပ်ရုံ (သို့မဟုတ်) ဆိုင်/အလုပ်ဌာနများ</h1>
	            </div>
	            
	        </div>
	
    	</div>
    </p> 
 
<p>
   <div class="row">
    <div class="col-sm-12 table-responsive">
        <table class="table table-bordered" id="myTable">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">
                        စဉ်
                        </th>
                        <th scope="col">
                        စက်ရုံအမှတ်စဉ်
                        </th>
                        <th scope="col">
                            Duration
                        </th>
                        <th scope="col">
                             လုပ်သားဦးရေ
                        </th>
                        <th scope="col">
                            အချိန်ပိုနာရီ
                        </th>
                        <th scope="col">
                            အချိန်ပိုနာရီ စုစုပေါင်း
                        </th>
                         <th scope="col">
                            ခွင့်ပြုပြီး /မပြီး
                        </th>
                        <th scope="col">
                        လုပ်ဆောင်ချက်
                        </th>
                    </tr>
                </thead>
                <tbody class="list"> 
                <?php $i= ($otdetail->currentpage()-1) * ($otdetail->perpage());?>
                <?php $__currentLoopData = $otdetail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
            <tr>
                <td scope="row" class="name">
                        <?php echo e(++$i); ?>

                </td>
                <td scope="row" class="name">
                    <?php echo e(App\Factory::where('FactoryId',$ot->otdetail->factory_id)->value('FactoryName')); ?> (<?php echo e($ot->otdetail->factory_id); ?>)
                </td>
                <td class="budget">
                    <?php echo e($ot->otdetail->FromDay); ?> -  <?php echo e($ot->otdetail->ToDay); ?>

                </td>
                <td class="status">
                    <span class="badge badge-dot mr-4">
                            <?php echo e($ot->otdetail->TotalWorker); ?>

                    </span>
                </td>
                <td>
                     <?php echo e($ot->otdetail->Othour); ?>

                </td>
                <td>
                    <?php echo e($ot->otdetail->totalOthour); ?>

                </td>
                <td>
                    <?php if($ot->status==1): ?>
                    ခွင့်ပြုပြီး
                    <?php else: ?>
                    ဆောင်ရွက်ဆဲ
                    <?php endif; ?>
                </td>
                <td class="completion">
                    
                <a href="<?php echo e(url('ApproveOtPermission/'.$ot->id)); ?>" class="badge badge-success" id="approve">ခွင့်ပြုသည့်ညွှန်ကြားချက်ထုတ်ရန်</a>     
                        
       
                </td>
                
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>            
        </tbody>
    </table>
    </div>

    <?php echo $otdetail->render(); ?>


</div>
          
</p>
<!-- scroll back to top of the page -->
<a id="back2Top" title="Back to top" href="#">&#10148;</a>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>