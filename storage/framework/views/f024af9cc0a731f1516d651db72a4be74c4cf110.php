<?php $__env->startSection('content'); ?>
<script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>

    

    <p>
    	<div class="row">
	        <div class="col-lg-6 text-center">
	            <div class="pull-left">
	                <h2>ဆောင်ရွက်ထားသော လုပ်ငန်းစဉ်များ</h2>
	            </div>
	            
	        </div>
	        <div class="col-sm-6 text-right">
	        	<div class="pull-right">
                    
	                <a class="btn btn-primary" href="<?php echo e(url('newcaseinspection/1')); ?>"> ဆောင်ရွက်မှုကိစ္စအသစ်ထည့်ရန်</a>
                    

	            </div>
	        </div>
    	</div>
    </p>
    <p>
      <div class="row">
          <div class="col-lg-6 text-center">
              <select name="factorytype" id="factorytype" class="form-control">
                  <option value="">စက်ရုံ/အလုပ်ရုံ (သိုမဟုတ်) ဆိုင်နှင့်အလုပ်ဌာများရွေးချယ်ရန်</option>
                  <option value="1" <?php if($id==1): ?> selected <?php endif; ?>>ဆောင်ရွက်ထားသော စက်ရုံအလုပ်ရုံများ</option>
                  <option value="2"  <?php if($id==2): ?> selected <?php endif; ?>>ဆောင်ရွက်ထားသော ဆိုင်နှင့်အလုပ်ဌာနများ</option>
              </select>
          </div>
      </div>
    </p>
     
	<div class="table-responsive">
    	<div class="cases">
		    <table class="table table-bordered">
		        <thead class="thead-light">
		            <tr>
		                <th scope="col">
		                   စဉ်
		                </th>
		                 <th scope="col">
                      <?php if($id==1): ?>
		                    စက်ရုံ / အလုပ်ရုံ အမည်
                      <?php else: ?>
                      ဆိုင်နှင့်အလုပ်ဌာနအမည်
                      <?php endif; ?>
		                </th>
		                <th scope="col">
		                   စစ်ဆေးသူအမည်
		                </th>
		                <th >
		                	စစ်ဆေးသည့်နေ့ရက်
		                </th>
                        <th >
                            စက်မှုဇုန်
                        </th>
                        <th >
                            စစ်ဆေးခဲ့သည့်မြို့နယ်
                        </th>
                        <th >
                            စစ်ဆေးခဲ့သည့် ခရိုင်
                        </th>
                        <th scope="col">
                            ဆောင်ရွက်မှုအခြေအနေ
                        </th>
                        <!-- <th scope="col">
                            စစ်ဆေးချက်များကြည့်ရန်
                        </th> -->
                        <th scope="col">
                            ညွှန်ကြားချက်ထုတ်ရန်
                        </th>
                        <th scope="col">
                            အစီရင်ခံစာတင်ရန်
                        </th>       
		            </tr>
		        </thead>
		        <tbody class="list">
                    <?php $i=0;?>
            <?php $__currentLoopData = $cases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row" class="name">
                    <?php echo e(++$i); ?>

                </th>
               
                <td class="budget">
                  <?php if($id==1): ?>
                <?php echo e($c->FactoryName); ?>

                <?php else: ?>
                <?php echo e($c->shopname); ?>

                <?php endif; ?>
                </td>
                <td class="status">
                  <?php echo e($c->name); ?> 
                </td>
                <td>                    
                 <?php echo e($c->inspectiondate); ?>    
                    
                </td>
                <?php if($id==1): ?>
                <?php 
               $fadd=App\Factory::where('FactoryId',$c->factory_id)->first();
              
               ?>
            
                 <td> 
                                     
               
                 <?php echo e($fadd->zone->industrialzone_name); ?>

                 
                                    
                </td>
                <td> 
                    <?php echo e($fadd->township->township_name); ?>

                </td>
                <?php else: ?>
                <?php
                 $fadd=App\Shop::where('ShopId',$c->ShopId)->first();
              
               ?>
            
                 <td> 
                                   
                </td>
                <td> 
                    <?php echo e($fadd->township->township_name); ?>

                </td>
<?php endif; ?>
                <td>  
                              
                 <?php
               
                        $districtname=App\Township::where('id',$c->FromTownshipid)->first();
                        
                    ?>
                    <?php echo e($districtname->district->district_name); ?>

                
                    
                </td>
                
                <td class="completion">
                    <?php if($c->Status==1): ?>ဆောင်ရွက်ရန်
                    <?php elseif($c->Status==2): ?>ဆောင်ရွက်ဆဲ
                    <?php elseif($c->Status==3): ?>ဆောင်ရွက်ပြီး
                    <?php else: ?> Close
                    <?php endif; ?>
                </td>
               <!--  <td>
                   <?php if($c->documentId1!=null): ?>
                <a href="<?php echo e(url('storage/instruction/'.$c->documentId1)); ?>" class="btn  btn-info"><?php echo e($c->documentId1); ?></a>
           			 <?php endif; ?>
        

          		</td> -->
                <td>
                 <?php if($c->FromUserId!=Auth::user()->id): ?>
                 <a href="<?php echo e(url('createinstruction/'.$c->caseid.'/'.$c->factorytype)); ?>"  class="badge badge-success disabled"  >ညွှန်ကြားချက်ထုတ်ရန်</a>
                  <?php else: ?>
                  <a href="<?php echo e(url('createinstruction/'.$c->caseid.'/'.$c->factorytype)); ?>"  class="badge badge-success"  >ညွှန်ကြားချက်ထုတ်ရန်</a> 
                  <?php endif; ?> 
                </td>
                <td>
                  <a href="<?php echo e(url('createreport/'.$c->caseid.'/'.$c->factorytype)); ?>"  class="badge badge-success">အစီရင်ခံစာတင်ရန်</a>  
                 <?php if($c->Status==1 || $c->Status==2): ?>
                  <a href="<?php echo e(url('CloseCase/'.$c->caseid)); ?>"  class="badge badge-danger">ဖိုင်ပိတ်သိမ်းမည်</a>  
                  <?php endif; ?>
                </td>
               
               
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
            
        </tbody>
    </table>
   
</div>
<?php echo $cases->links(); ?>


</div>

<script>

 
 
   $('#factorytype').change(function(){ 
       var id = $(this).val();
       
       if(id != '')
       {
       
        window.location.href="<?php echo e(url('factorycase')); ?>/"+id;
       }
   });

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>