<?php $__env->startSection('content'); ?>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="<?php echo e(asset('assets/js/common.js')); ?>"></script>
    
    <?php if($errors->any()): ?>    
	    <div class="alert alert-danger">
	        <strong>Whoops!</strong> There were some problems with your input.<br><br>
	        <ul>
	            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                <li><?php echo e($error); ?></li>
	            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	        </ul>
	    </div>
    <?php endif; ?>
    
           <!-- Circles which indicates the steps of the form: -->
         <h1>အချိန်ပိုလုပ်ကိုင်ခွင့်ပြုချက် </h1> 
        <br>
     <form  action="<?php echo e(route('PermissionOtFactory.update',$otpermission->id)); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <br>
            <div class="row">
                <div class="col-sm-4 text-right">
                    <?php if($otpermission->factorytype==1): ?>
                        စက်ရုံအလုပ်ရုံ အမည် - 
                    <?php else: ?> 
                    ဆိုင် - အလုပ်ဌာန အမည် - 
                    <?php endif; ?>
                </div>
                <div class="col-sm-8">
                    <span id='factory_name'>
                            <?php if($otpermission->factorytype==1): ?>
                                <?php echo e(App\Factory::where('FactoryId',$otpermission->factory_id)->value('FactoryName')); ?>

                            <?php else: ?> 
                                <?php echo e(App\Shop::where('ShopId',$otpermission->factory_id)->value('shopname')); ?>                            
                            <?php endif; ?>
                    </span>
                </div>
            </div>
            <div class="blank10"></div>
            <div class="row">
                <div class="col-sm-4 text-right">
                    <?php if($otpermission->factorytype==1): ?>
                         စက်ရုံအလုပ်ရုံ လိပ်စာ - 
                    <?php else: ?> 
                        ဆိုင် - အလုပ်ဌာန လိပ်စာ - 
                    <?php endif; ?>
                </div>
                <div class="col-sm-8">
                    <span id="factoryaddress">
                        <?php if($otpermission->factorytype==1): ?>
                            <?php echo e(App\Factory::where('FactoryId',$otpermission->factory_id)->value('FactoryAddress')); ?>                            
                       <?php else: ?> 
                            <?php echo e(App\Shop::where('ShopId',$otpermission->factory_id)->value('loacationaddress')); ?>                            
                       <?php endif; ?>
                    </span>
                </div>
            </div>
            <div class="blank10"></div>
            <div class="row">
                <div class="col-sm-4 text-right">
                    ပိုင်ရှင်အမည် -
                </div>
                <div class="col-sm-8">
                    <span id="ownername">
                      <?php if($otpermission->factorytype==1): ?>
                            <?php echo e(App\Factory::where('FactoryId',$otpermission->factory_id)->value('OwnerName')); ?>                            
                       <?php else: ?> 
                            <?php echo e(App\Shop::where('ShopId',$otpermission->factory_id)->value('ownername')); ?>                            
                       <?php endif; ?>
                    </span>
                </div>
            </div>
            <div class="blank10"></div>
            <div class="row">
                <div class="col-sm-4 text-right">
                    စတင်သည့်ရက် -
                </div>
                <div class="col-sm-4">
                <input type="date" id="FromDay" class="form-control" name="FromDay" value="<?php echo e($otpermission->FromDay); ?>">
                </div>
            </div>
            <div class="blank10"></div>
            <div class="row">
                <div class="col-sm-4 text-right">
                        ပြီးဆုံးမည့် ရက်စွဲ -
                </div>
                <div class="col-sm-4">
                    <input type="date" id="ToDay" class="form-control" name="ToDay" value="<?php echo e($otpermission->ToDay); ?>">
                </div>
            </div>
            <div class="blank10"></div>
            <div class="row">
                <div class="col-sm-4 text-right">
                        လုပ်သားဦးရေ - 
                </div>
                <div class="col-sm-4">
                <input type="text" id="TotalWorker" class="form-control" name="TotalWorker" onfocus="converunistring()" value="<?php echo e($otpermission->TotalWorker); ?>">
                </div>
            </div>
            <div class="blank10"></div>
            <div class="row">
                <div class="col-sm-4 text-right">
                        အချိန်ပိုနာရီ - 
                </div>
                <div class="col-sm-4">
                    <input type="text" id="Othour" class="form-control" name="Othour" onblur="converunistring()" value="<?php echo e($otpermission->Othour); ?>">
                </div>
            </div>
            <div class="blank10"></div>
            <div class="row">
                <div class="col-sm-4 text-right">
                        အချိန်ပိုနာရီ စုစုပေါင်း - 
                </div>
                <div class="col-sm-4">
                    <input type="text" id="totalOthour" class="form-control" name="totalOthour" value="<?php echo e($otpermission->totalOthour); ?>">
                </div>
            </div>
            <div class="blank10"></div>

        <div class="blank10"></div>
            <div class="row">
                <div class="col-sm-8 text-right">
                    <button type="submit" id="Save" >သိမ်းဆည်းမည်</button>
                </div>
            </div>

    </form>
    <!-- scroll back to top of the page -->
<a id="back2Top" title="Back to top" href="#">&#10148;</a>

    <script>
        $(document).ready(function(){

$('#factoryname').keyup(function(){ 
        var factorytype=$('#factorytype').val();
        var query = $(this).val();
console.log(factorytype);
console.log(query);
        if(query != '' && factorytype!='')
        {
      
         $.ajax({
             type: 'GET', //THIS NEEDS TO BE GET
                    url: '<?php echo e(route('factorysearchdata')); ?>',
             
                   data:{query:query,
            factorytype:factorytype},
          success:function(data){

               $('#factoryList').fadeIn();  
               $('#factoryList').html(data);
               
            }
         });
        }
    });
});
    $(document).on('click', 'li', function(){  
      $('#factoryname').keyup(function(){ 
        var factorytype=$('#factorytype').val();
        var query = $(this).val();

        if(query != '' && factorytype!='')
        {
      
         $.ajax({
             type: 'GET', //THIS NEEDS TO BE GET
                    url: '<?php echo e(route('factorysearchdata')); ?>',
             
                   data:{query:query,
            factorytype:factorytype},
          success:function(data){

               $('#factoryList').fadeIn();  
               $('#factoryList').html(data);
               
            }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#factoryname').val($(this).text());  
        $('#factoryList').fadeOut();  
    });
    $( "#search" ).click(function() {
  var query = $('#factoryname').val();
  var factorytype=$('#factorytype').val();
  
               $.ajax({
                    type: 'GET', //THIS NEEDS TO BE GET
                    url: '<?php echo e(route('autocompletename')); ?>',
                    data:{name:query,factorytype:factorytype},
                    success: function (data) {
                        $('#factorytypeid').val(data.factorytype);
                        
                        if(factorytype==1){
                        
                      $('#factory_id').val(data.FactoryId);
                      $('#factory_name').text(data.FactoryName);
                      $('#ownername').text(data.OwnerName);
                      $('#factoryaddress').text(data.FactoryAddress);
                      $('#township_id').val(data.township_id);
                      $('#district_id').val(data.district_id);
                      $('#factorytype_id').val(data.factorytype);
                  
                     console.log(data.factorytype);

                        }else{
                        $('#factory_id').val(data.ShopId);
                        $('#factory_name').text(data.shopname);
                        $('#ownername').text(data.ownername);
                        $('#factoryaddress').text(data.loacationaddress); 
                        $('#township_id').val(data.township_id);
                        $('#district_id').val(data.district_id);
                        $('#factorytype_id').val(data.factorytype);
                        }
                         
                       
          
                    },
                    error: function() { 
                         console.log(data);
                    }
        });
});  
});


function converunistring(){
	var num1=document.getElementById("TotalWorker").value;
	var num2=document.getElementById('Othour').value;
	
	var englishDigits = {
    '၀': '0',
    '၁': '1',
    '၂': '2',
    '၃': '3',
    '၄': '4',
    '၅': '5',
    '၆': '6',
    '၇': '7',
    '၈': '8',
    '၉': '9'
  };
  var myanDigits = {
    '0':'၀',
    '1': '၁',
    '2':'၂' ,
    '3':'၃',
    '4':'၄' ,
   '5' :'၅' ,
    '6': '၆',
    '7': '၇',
    '8':'၈' ,
    '9': '၉'
  };

var mynum1 = num1.replace(/[၀၁၂၃၄၅၆၇၈၉]/g, function(s) {
                  return englishDigits[s];
              }); 
var mynum2 = num2.replace(/[၀၁၂၃၄၅၆၇၈၉]/g, function(s) {
                  return englishDigits[s];
              }); 
var num3=parseInt(mynum1)*parseInt(mynum2);
var num4=num3.toString();
var sum=num4.replace(/[0123456789]/g,function(s){
	return myanDigits[s];
});
$('#totalOthour').val(sum);
	console.log(sum);
		
	}

    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>