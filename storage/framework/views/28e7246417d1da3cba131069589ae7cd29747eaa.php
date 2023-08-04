<?php $__env->startSection('content'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Register')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="name" class="col-md-5 col-form-label text-md-right"><?php echo e(__('Name')); ?></label>

                            <div class="col-md-7">
                                <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-5 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-5 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-5 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

                            <div class="col-md-7">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="role" class="col-md-5 col-form-label text-md-right"><?php echo e(__('Phone Number')); ?></label>                         
                            <div class="col-md-7">
                                <input type="text" name="phone" class="form-control"/>                               
                            </div>
                        </div>

                        <!-- roles option -->
                        <div class="form-group row">
                            <label for="role"  class="col-md-5 col-form-label text-md-right"><?php echo e(__('Role')); ?></label>

                            <div class="col-md-7">
                                <select  type="text" class="form-control<?php echo e($errors->has('role') ? ' is-invalid' : ''); ?>" id="role" name="role" onchange="roleselect()"value="<?php echo e(old('name')); ?>" required >
                                    <option value="">Select One</option>
                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($id); ?>"><?php echo e($role); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php if($errors->has('role')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('role')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row"  id="regionuser"style="display:none">
                            <div class=" col-md-5 text-right mb-3" style="float:left;">
                            <label for="role" class="col-form-label text-md-right"><?php echo e(__('Region')); ?></label>
                        </div>

                        <div class="col-md-7 mb-3" style="float:left;">
                                <select type="text" class="form-control" name="region" >
                                    <option value="">Select One</option>
                                    <?php $__currentLoopData = $region; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($reg->id); ?>"><?php echo e($reg->region_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php if($errors->has('region')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('region')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div> 
<!--for Region Officer -->
                         <div class="form-group row" style="display: none;" id="districtname">
                            <div class="col-md-5 text-right mb-3" style="float:left;">
                                <label for="role" class="col-form-label text-md-right"><?php echo e(__('District')); ?></label>
                            </div>
                          
                            <div class="col-md-7 mb-3" style="float:left;">
                            <?php $__currentLoopData = $district; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                <div class="custom-control custom-checkbox mb-3">
  <input class="custom-control-input" id="<?php echo e($dis->id); ?>" name="districtname[]"value="<?php echo e($dis->id); ?>" type="checkbox">
  <label class="custom-control-label" for="<?php echo e($dis->id); ?>"> <?php echo e($dis->district_name); ?></label>
</div>
                               
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                            </div>
                        </div>

<!--end for region officer -->
 <!-- for District User-->
                        <div class="form-group row" style="display: none;" id="districtuser">
                            <div class="col-md-5 text-right mb-3" style="float:left;">
                                <label for="role" class="col-form-label text-md-right"><?php echo e(__('District')); ?></label>
                            </div>
                            <div class="col-md-7 mb-3" style="float:left;">
                                <select type="text" class="form-control" name="district" value="<?php echo e(old('name')); ?>" id="districtid" >
                                    <option value="">Select One</option>
                                    <?php $__currentLoopData = $district; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($dis->id); ?>"><?php echo e($dis->district_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php if($errors->has('district')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('district')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
      <!--end District User-->
            <!-- for user's duty township -->
                        <div class="form-group row" style="display: none;" id="userdutytownship">
                            <div class="col-md-5 text-right mb-3" style="float:left;">
                                <label for="role" class="col-form-label text-md-right"><?php echo e(__('Duty Township')); ?></label>
                            </div>                            
                            <div class="col-md-7 mb-3" style="float:left;">
                                <select type="text" class="form-control" name="userdutytownship" value="" id="dutytownship">
                                <option value=''>Choose one</option>
                                    
                                </select>
                                   
                            </div>  
                        </div>

                <!-- end for user's duty township -->
       <!-- for Township User-->
                        <div class="form-group row" style="display: none;" id="townshipuser">
                            
                    </div>
      <!--end District User-->

                        <!--  -->
                        <div class="form-group row mb-0">
                            <div class="col-md-7 offset-md-5">
                                <input  type="submit" class="btn btn-primary" value="Register">
                                    
                            </div>
                        </div>

               
     
     
                       
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        <script type="text/javascript">
            function roleselect() {

            var r= document.getElementById("role");
            var roleid = r.options[r.selectedIndex].value;
          
            if(roleid==3){
                document.getElementById('regionuser').style.display='block';
            }else{
                document.getElementById('regionuser').style.visibility='none';
            }
            if(roleid==4){
                 document.getElementById('regionuser').style.display='block';
                document.getElementById('districtname').style.display='block';
            }
             if(roleid==5){
                document.getElementById('districtuser').style.display='block';
            }
            if(roleid==6){
                document.getElementById('districtuser').style.display='block';
                document.getElementById('userdutytownship').style.display='none';
                document.getElementById('townshipuser').style.display='block';  
            }
            if(roleid==7 ||roleid==8){
                document.getElementById('districtuser').style.display='block';
                document.getElementById('userdutytownship').style.display='block';
                document.getElementById('townshipuser').style.display='block'; 
            }
            
            

        }
 $( document ).ready(function() {
    $('#districtid').change(function(){ 
        //alert('id');
       var id = $(this).val();
       console.log(id);
       if(id != '')
       {
        $.ajax({
         url:"<?php echo e(route('townshipname')); ?>",
         method:"GET",
         data:{id:id},
         success:function(data){
      
         $.each(data, function (key, value) {
  var li=$('<div class="row"><div class="col-md-7 offset-md-5"><div class="custom-control custom-checkbox mb-3"><input type="checkbox" class="custom-control-input" id="'+value.id+'"  name="township[]" value="'+value.id+'"><label class="custom-control-label" for="' + value.id + '">'+value.township_name+'</label></div></div></div>') ;
  

 
    $('#townshipuser').append(li);
    $('#dutytownship').append($('<option>', { 
						value: value.id,
						text : value.township_name 
					}));
   
           })
       
       }
   });

  } 

}); 
});      
                                     
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>