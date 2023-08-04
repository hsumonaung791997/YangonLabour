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
      
        <p>
            <div class="row">
                <div class="col-lg-6 text-center">
                    <select name="type" id="type" class="form-control">
                        <option value="1">စက်ရုံ/အလုပ်ရုံ (သိုမဟုတ်) ဆိုင်နှင့်အလုပ်ဌာများရွေးချယ်ရန်</option>
                        <option value="1" <?php if($id==1): ?> selected <?php endif; ?>>စစ်ဆေးထားသော စက်ရုံ/အလုပ်ရုံများ စာရင်း</option>
                        <option value="2" <?php if($id==2): ?> selected <?php endif; ?>>စစ်ဆေးထားသော ဆိုင်နှင့်အလုပ်ဌာနများ စာရင်း</option>
                    </select>
                </div>
                
            </div>
        </p>

    	<div class="row">
	        <div class="col-lg-12 text-center">
	            <div class="pull-left">
	                <h2><?php if($id==1): ?>စစ်ဆေးထားသော စက်ရုံ/အလုပ်ရုံများ <?php else: ?> ဆိုင်နှင့်အလုပ်ဌာနများ <?php endif; ?></h2>
	            </div>
	            
	        </div>
        </div>
        
	           <div class="row">
                    <form  method="post">
                        <?php echo e(csrf_field()); ?>

                       
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="hidden" id="factorytype" name="type" value="<?php echo e($id); ?>"/>
                            <input type="text" class="form-controller" id="search" name="search" placeholder="<?php echo e(($id==1) ? 'စက်ရုံ' : 'ဆိုင်'); ?> အမည်ဖြင့်ရှာရန်">
                                
                            </div>
                            
                 </div>

                  
                    </form>
	           </div>
   

     <?php if($id==1): ?>
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
                 <a href="<?php echo e(url('casenewinspection/'.$factories->cid.'/'.$id)); ?>"><?php echo e($factories->FactoryName); ?></a>
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
                  <?php echo e($factories->inspectedtimes.$factories->inspectiontype); ?>

                  
                </td>
                <td>
                    <a href="<?php echo e(url('inspectionpdf/'.$factories->cid)); ?>">Pdf <i class="fas fa-download"></i></a>
                </td>
               
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
          </tbody>
    </table>
  

            
   
</div>

</div>

<?php else: ?>
<div class="table-responsive">
    <div>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">
                        No
                    </th>
                     <th scope="col">
                        ဆိုင်နှင့်အလုပ်ဌာန အမည်
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
              
              <a href="<?php echo e(url('casenewinspection/'.$factories->sid.'/'.$id)); ?>"><?php echo e($factories->shopname); ?></a>
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
             
              <?php echo e($factories->inspectedtime.$factories->inspection_type); ?>

              
            </td>
           
            <td>
                    <a href="<?php echo e(url('inspectionShoppdf/'.$factories->sid)); ?>">Pdf <i class="fas fa-download"></i></a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
      </tbody>
</table>


        

</div>

</div>
<?php endif; ?>

<script type="text/javascript">

$('#search').on('keyup',function(){
var value=$(this).val();
var factorytype=$('#factorytype').val();
console.log(factorytype);

$.ajax({
type : 'get',
url: '<?php echo e(route('autocompleteinspectiondata')); ?>',
data:{'search':value,'factorytype':factorytype},
success:function(data){
  
$('tbody').html(data);
}
});
});


$('#type').change(function(){ 
       var id = $(this).val();
    //    alert(id);
       if(id == 1)
       {
       
        window.location.href="<?php echo e(url('newcaseinspection')); ?>/"+id;
       
       }else{
            window.location.href="<?php echo e(url('newcaseinspection')); ?>/"+id;
       }
});


</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>