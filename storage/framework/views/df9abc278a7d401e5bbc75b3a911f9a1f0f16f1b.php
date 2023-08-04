<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script src="<?php echo e(asset('assets/js/common.js')); ?>"></script>
      <style>
 
        form.search input[type=text] {
          border: 1px solid grey;
          float: left;
          width: 80%;
          background: #f1f1f1;
        }
        form.search button {
          float: left;
          width: 20%;
          background: #2196F3;
          color: white;
          border: 1px solid grey;
          border-left: none;
          cursor: pointer;
        }
     </style>
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
                    <h1>အချိန်ပိုလုပ်ကိုင်ခွင့်ပြုချက်များ </h1>
                    
	            </div>
	            
	        </div>
	
    	</div>
    </p> 
     
     <p>
        <div class="row">
            <div class="col-sm-8">
                
            </div>
            
            <div class="col-sm-4 text-right">
                <div class="pull-right">
                    <a class="btn btn-primary" href="<?php echo e(route('PermissionOtFactory.create')); ?>"> အချိန်ပိုလုပ်ကိုင်ခွင့်ပြုချက် ထည့်သွင်းမည်</a>
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
                            စက်ရုံအလုပ်ရုံ (သို့) ဆိုင်အမည်
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
                <?php $i= ($otpermission->currentpage()-1) * ($otpermission->perpage());?>
                <?php $__currentLoopData = $otpermission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
            <tr>
                <td scope="row" class="name">
                        <?php echo e(++$i); ?>

                </td>
                <td scope="row" class="name">
                    <?php if($ot->factorytype==1): ?>
                    <?php echo e(App\Factory::where('FactoryId',$ot->factory_id)->value('FactoryName')); ?> (စက်ရုံ)
                    <?php else: ?>
                    <?php echo e(App\Shop::where('ShopId',$ot->factory_id)->value('shopname')); ?> (ဆိုင်)
                    <?php endif; ?>
                </td>
                <td class="budget">
                    <?php echo e($ot->FromDay); ?> -  <?php echo e($ot->ToDay); ?>

                </td>
                <td class="status">
                    <span class="badge badge-dot mr-4">
                            <?php echo e($ot->TotalWorker); ?>

                    </span>
                </td>
                <td>
                     <?php echo e($ot->Othour); ?>

                </td>
                <td>
                    <?php echo e($ot->totalOthour); ?>

                </td>
                <td>
                   <?php if(App\OTReport::where('ot_id',$ot->id)->value('status')==1): ?>
                    ခွင့်ပြုပြီး
                    <?php else: ?>
                    ဆောင်ရွက်ဆဲ
                    <?php endif; ?>

                </td>
                <td class="completion">
                <form action="<?php echo e(route('PermissionOtFactory.destroy',$ot->id)); ?>" method="POST" class="delete">
                    
                        <a class="badge badge-primary" href="<?php echo e(route('PermissionOtFactory.edit',$ot->id)); ?>">ပြင်မည်</a> |
       
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
          
                        <button type="submit" class="badge badge-danger" id="factorydelete">ဖျက်မည်</button>    
                    </form>
                </td>
                
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>            
        </tbody>
    </table>
    </div>

    <?php echo $otpermission->render(); ?>


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