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
    <form id="regForm" action="<?php echo e(route('seminarreportdata')); ?>" method="post" enctype="multipart/form-data">   
    <?php echo csrf_field(); ?>     
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
								
								<option value="5">မတော်တဆထိခိုက်မှု စစ်ဆေးခြင်းလချူပ်</option>	
								<option value="6">မတော်တဆထိခိုက်မှု ရရှိခြင်းလချူပ်</option>		
								<option value="7">စစ်ဆေးဆောင့်ရွက်ချက် လချုပ်(GLI)</option>
								<option value="8">စစ်ဆေးရေးလချူပ် (IF) </option>
								
								
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

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>