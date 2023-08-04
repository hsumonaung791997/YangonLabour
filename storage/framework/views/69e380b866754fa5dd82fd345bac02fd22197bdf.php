<?php $__env->startSection('content'); ?>
    <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <p>
    	<div class="row">
	        <div class="col-lg-12 text-center">
	            <div class="pull-left">
	               <!--  <h1>အလုပ်သမားရေးရာ ဥပဒေများအား အသိပညာပေးဆွေးနွေးပွဲ ဆောင်ရွက်ထားမှုများ</h1> -->

                   <h1>အစီရင်ခံစာထုတ်ရန်</h1>
	            </div>
	            
	        </div>
	
    	</div>
    </p>
   <br>
	
   <?php if(session()->get('success')): ?>
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<span class="alert-inner--icon"></span>
		<span class="alert-inner--text">  <?php echo e(session()->get('success')); ?>  </span>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
 	<?php endif; ?>   

    <form id="regForm" action="<?php echo e(route('seminarreportdata')); ?>" method="post" enctype="multipart/form-data">   
	<?php echo csrf_field(); ?> 
	
	<p>
    	<div class="row">
			<div class="col-sm-4"> 
				<select id="region_id" class="form-control" name="region_id">
					<option value=""> Choose Region</option>
					<?php $__currentLoopData = $region; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value=<?php echo e($r->id); ?> ><?php echo e($r->region_name); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
			</div>

			<div class="col-sm-4"> 
				<select id="district_id" class="form-control" name="district_id">
					<option value="">Choose District
					</option>
				</select>
			</div>

			<div class="col-sm-4"> 
				<select id="township_id" class="form-control" name="township_id">
					<option value="">Choose TownShip</option>
				</select>
			</div>

		</div>
	</p> <br>

    <p>
    	<div class="row">
	        <div class="col-lg-5">
				<div class="row">
					<div class="col-lg-1"><label>မှ</label></div>
					<div class="col-lg-8"><input type="date" id="from" name="from"/></div>
				</div>  
	        </div>
			 <div class="col-lg-5">
				<div class="row">
					<div class="col-lg-1"><label>ထိ</label></div>
					<div class="col-lg-8"><input type="date" id="to" name="to"/></div>
				</div>  
	        </div>
			
    	</div>
	</p>
	<br>
	<p>
		<div class="row">
			<div class="col-sm-6">
				<select class="form-control" name="type" id="reporttype">
								<option value="1">သင်တန်းစီမံချက်လချူပ်</option>
								<option value="2">တရားစွဲလချူပ်</option>
								<option value="3">စက်ရုံဖွင့်/ပိတ်နှင့် လုပ်သား အင်းအား အတိုင်း/အလျော့စာရင်း လချူပ်</option>	
								<option value="4">အချိန်ပိုနာရီ ခွင့်ပြုခြင်း လချူပ်</option>
								<option value="5">မတော်တဆထိခိုက်မှု စစ်ဆေးခြင်းလချူပ်</option>	
								<option value="6">မတော်တဆထိခိုက်မှု ရရှိခြင်းလချူပ်</option>		
								<option value="7">စစ်ဆေးဆောင့်ရွက်ချက် လချုပ်(GLI)</option>
								<option value="8">စစ်ဆေးရေးလချူပ် (IF) </option>
								<option value="9">ညွှန်ကြားချက်များ (အလုပ်ရုံစစ်ဆေးရေး) </option>
								<option value="10">ညွှန်ကြားချက်များ (အလုပ်သမားဥပဒေစစ်ဆေးရေး) </option>
							</select>
			</div>
			<div class="col-sm-6">
	           
				<button type="submit" class="btn btn-primary" >အစီရင်ခံစာထုတ်ရန် </button> 

			</div>
		</div> <br>
	</p>
    
 </form>

    
<script>
 
// $( "#search" ).click(function() {
//     var from = $('#from').val();
//     var to=$('#to').val();
//     var type=$('#reporttype').val();
//                $.ajax({ 
//                     type: 'GET', //THIS NEEDS TO BE GET
//                     url: '<?php echo e(route('seminarreportdata')); ?>',
//                     data:{from:from,to:to,type:type},
//                     success: function (data) {
//                         console.log(data);
                      
//                     },
//                     error: function() { 
//                          console.log(data);
//                     }
//         });
// });


$('#region_id').change(function(){ 
	   var id = $(this).val();
	   if(id != '')
	   {
		$.ajax({
		 url:"<?php echo e(route('locationregion.fetch')); ?>",
		 method:"GET",
		 data:{id:id},
		 success:function(data){
			console.log(data);
			$.each(data, function (i, item) {
					$('#district_id').append($('<option>', { 
						value: item.id,
						text : item.district_name 
					}));
				});
		   }
		});
	   }
   });
   
   $('#district_id').change(function(){ 
	   var id = $(this).val();
	   if(id != '')
	   {
		$.ajax({
		 url:"<?php echo e(route('locationtownship.fetch')); ?>",
		 method:"GET",
		 data:{id:id},
		 success:function(data){
			console.log(data);
			$.each(data, function (i, item) {
					$('#township_id').append($('<option>', { 
						value: item.id,
						text : item.township_name 
					}));
				});
		   }
		});
	   }
   });

   $('#township_id').change(function(){ 
	   var id = $(this).val();
	   if(id != '')
	   {
		$.ajax({
		 url:"<?php echo e(route('locationZone.fetch')); ?>",
		 method:"GET",
		 data:{id:id},
		 success:function(data){
			console.log(data);
			$.each(data, function (i, item) {
					$('#zone_id').append($('<option>', { 
						value: item.id,
						text : item.industrialzone_name 
					}));
				});
		   }
		});
	   }
   });

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>