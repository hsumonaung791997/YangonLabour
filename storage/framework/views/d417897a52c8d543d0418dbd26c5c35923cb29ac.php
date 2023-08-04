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
	                <h1 class="text-left">အမှုတွဲများ</h1>
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
                    <a class="btn btn-primary" href="<?php echo e(route('Factoryprosecuted.create')); ?>"> အမှုတွဲအသစ်များထည့်ရန်</a>

                </div>
            </div>
        </div>
    </p>
<p>
   <div class="row">
    <div class="col-sm-12">
        <table class="table table-bordered table-responsive" id="myTable">
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
                        <th scope="col">
                        မန်နေဂျာအမည်
                        </th>
                        <th>
                            တရားလို အမည်
                        </th>
                        <th>
                            တရားစွဲဆိုရသည့်အကြောင်းအရင်း
                        </th>
                        <th scope="col">
                        လုပ်ဆောင်ချက်
                        </th>
                    </tr>
                </thead>
                <tbody class="list">
            <?php $__currentLoopData = $factoryProsecuted; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $factoryProsecutes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td scope="row" class="name">
                    <?php echo e(++$i); ?>

                </td>
                
                
                <td class="budget">
                    <?php echo e($factoryProsecutes->Name); ?> 
                    ( <?php if($factoryProsecutes->chooseType==1): ?>
                    စက်ရုံ အလုပ်ရုံ
                    <?php else: ?>
                    ဆိုင် နှင့်အလုပ်ဌာန
                    <?php endif; ?>)
                </td>
                <td class="status">
                    <span class="badge badge-dot mr-4">
                      <?php echo e($factoryProsecutes->OwnerName); ?>

                    </span>
                </td>
                <td>
                     <?php echo e($factoryProsecutes->ManagerName); ?>

                </td>
                <td>
                    <?php echo e($factoryProsecutes->PlaintiffName); ?>


                </td>
                <td>
                    <?php echo e($factoryProsecutes->ProsecutedAbout); ?>

                </td>
                <td class="completion">
                    <form action="<?php echo e(route('Factoryprosecuted.destroy',$factoryProsecutes->id)); ?>" method="POST" class="delete">
                        <a href="<?php echo e(route('Factoryprosecuted.show',$factoryProsecutes->id)); ?>" class="badge badge-info">ကြည့်မည်</a> |      
                        <a class="badge badge-primary" href="<?php echo e(route('Factoryprosecuted.edit',$factoryProsecutes->id)); ?>">ပြင်မည်</a> |
       
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
          
                        <button type="submit" class="badge badge-danger" id="factoryProsecuteddelete">ဖျက်မည်</button>
                        
                    
                    </form>
                </td>
                
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </tbody>
    </table>
    </div>
    <?php if(Request::path() == 'factoryProsecutes'): ?>
    <?php echo $factoryProsecuted->links(); ?>

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