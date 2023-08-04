@extends('layouts.admin')
@section('content')
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
	<script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
	<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>

<script type='text/javascript'>
// $(function(){
// $('.datepicker').datepicker({
//     calendarWeeks: true,
//     todayHighlight: true,
//     autoclose: true
// });  
// });
</script>
@if(session()->get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
	<span class="alert-inner--icon"></span>
	<span class="alert-inner--text">  {{ session()->get('success') }}  </span>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
 @endif
@if ($errors->any())
	<div class="alert alert-danger">
		<strong>Whoops!</strong> There were some problems with your input.<br><br>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

<form id="regForm" action="{{route('FactoryInspectionImpact.store')}}" method="post">
	 {{csrf_field()}}
		<!-- Circles which indicates the steps of the form: -->
	  <h1>လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက်ပုံစံ</h1>
	  <div class="row">
			<div class="col-sm-12 text-right">
				  <button  id="tempoarySave">ယာယီသိမ်းဆည်းမည် </button>
				  <input type="hidden" name="tempoary" id="tempoary">
			</div>
	  </div>
  	<div style="text-align:center;margin-top:40px;">
	    <a  style="text-decoration: none;" onclick="nextPrevv(0)"><span class="step">1</span></a>
	    <span class="step" onclick="nextPrevv(1)">2</span>
	    <span class="step" onclick="nextPrevv(2)">3</span>
	    <span class="step" onclick="nextPrevv(3)">4</span>
	    <span class="step" onclick="nextPrevv(4)">5</span>
	  </div> <br>
  	<!-- One "tab" for each step in the form: -->
  	<div class="tab">
  		<p>	
  			<h3>လုပ်ငန်းဆိုင်ရာအချက်အလက်များ</h3>
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
					  <label for="workname">လုပ်ငန်းအမည်</label>
	  				<input  id="workname"  name="workname">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
					  <label for="typeofwork">လုပ်ငန်းအမျိုးအစား</label>
	  				<input id="typeofwork"  name="typeofwork">
	  			</div>
	  		</div>
	  	</p>
	  	<p>	
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
					  <label for="ownername">ပိုင်ရှင်အမည်</label>
	  				<input id="ownername" name="ownername">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
					<label for="managername">မန်နေဂျာအမည်</label>
	  				<input id="managername"  name="managername">
	  			</div>
	  		</div>
	  	</p>
	  	<p>	
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
					  <label for="contactphone">ဆက်သွယ်ရမည့် ဖုန်းနံပါတ်</label>
	  				<input id="contactphone"  name="contactphone">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-left">
					  <label for="contactemail">ဆက်သွယ်ရမည့် အီးမေး</label>
	  				<input id="contactemail"  name="contactemail">
	  			</div>
	  		</div>
	  	</p>
	  	<p>	
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
					  <label for="contactfax">ဆက်သွယ်ရမည့် ဖက်စ်</label>
	  				<input id="contactfax"  name="contactfax">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-left">
	  				
	  			</div>
	  		</div>
	  	</p>
	  	<p>
	  		<div class="row">
	  			<div class="col-sm-12 text-center">
	  				<fieldset class="scheduler-border">
					    <legend class="scheduler-border">တည်နေရာ</legend>
					    <div class="control-group">
					    	<div class="row">
					    		<div class="col-sm-5 text-right">
					    			<label for="district">ခရိုင်</label>
					    		</div>
					    		<div class="col-sm-6 text-left">
					    			<select id="district" class="form-control">
							        	<option>ရန်ကုန်</option>
							        	<option>ရွှေဘို</option>
					        		</select>
					    		</div>
					    	</div> <br>
					    	<div class="row">
					    		<div class="col-sm-5 text-right">
					    			<label for="township">မြို့နယ်</label>
					    		</div>
					    		<div class="col-sm-6 text-left">
					    			<select id="township" class="form-control">
							        	<option>လှိုင်သာယာမြို့နယ်</option>
							        	<option>သံလျင်မြို့နယ်</option>
					        		</select>
					    		</div>
					    	</div> <br>
					    	<div class="row">
					    		<div class="col-sm-5 text-right">
					    			<label for="address">လိပ်စာ</label>
					    		</div>
					    		<div class="col-sm-6 text-left">
					    			<textarea class="form-control form-control-alternative" rows="3" placeholder="အသေးစိတ်ထည့်ရန်" id='address' name="address"></textarea>
					    		</div>
					    	</div>
					           
					    </div>
					</fieldset>
	  			</div>
	  		</div>
	  	</p>
	  	<p>
	  		<span>အလုပ်သမားဦးရေ</span>
	  		<div class="row">
				<div class="col-sm-12">
					<table style="width:100%" id="numberofworker">
					  <tr>
					    <td> ကျား</td>
					    <td>မ </td>
					    <td>စုစုပေါင်း</td> 
					  </tr>
					  <tr>
					    <td><input type='text' value=0 id="worker" name="workermale"></td>
					    <td><input type='text' value=0 id="worker" name="workerfemale"></td>
					    <td><b><span id="totalmale"></span></b></td> 
					  </tr>
					   
					</table> <br>
				</div>
			</div>
	  	</p>
  	</div>
  	<div class="tab">
  		<p>	
  			<h3>ထိခိုက်သူ/သေဆုံးသူ ဆိုင်ရာအချက်အလက်များ</h3>
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
					  <label for="dieworkername">ထိခိုက်သူ/သေဆုံးသူအမည်</label>
	  				<input id="dieworkername"  name="dieworkername">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
					  <label for="occupation">အလုပ်အကိုင်</label>
	  				<input id="occupation"  name="occupation">
	  			</div>
	  		</div>
	  	</p>
	  	<p>	
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
					  <label for="dieworkerage">ထိခိုက်သူ/သေဆုံးသူ အသက်</label>
	  				<input id="dieworkerage"  name="dieworkerage">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
					  <label for="dieworkerex">ထိခိုက်သူ/သေဆုံးသူ လုပ်သက်</label>
	  				<input id="dieworkerex"  name="dieworkerex">
	  			</div>
	  		</div>
	  	</p>
	  	<p>	
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<div class="row">
					 	<div class="col-sm-6 text-center">
					 		<div class="custom-control custom-radio mb-3">
							  <input class="custom-control-input" id="male" name="typeofsex" type="radio" value="ကျား">
							  <label class="custom-control-label" for="male">ကျား</label>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="custom-control custom-radio mb-3">
								<input  class="custom-control-input" id="female" checked="" type="radio" name="typeofsex" value="မ">
								<label class="custom-control-label" for="female">မ</label>
							</div>
						</div>
					 </div>
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
					{{-- <label for="dieworkerex">ထိခိုက်သူ/သေဆုံးသူ လုပ်သက်</label>
	  				<input id="dieworkerex"  name="dieworkerex"> --}}
	  			</div>
	  		</div>
	  	</p>
	  	<p>	
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
					<label for="estimatedloss">ခန့်မှန်းအလုပ်ပျက်ရက်</label>
	  				<input  id="estimatedloss"  name="estimatedloss">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
					  <label for="absentworkday">ပျက်ကွက်ခဲ့သည့်အလုပ်ပျက်ရက်</label>
	  				<input id="absentworkday"  name="absentworkday">
	  			</div>
	  		</div>
	  	</p>
	  	<p>
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<fieldset class="scheduler-border">
					    <legend class="scheduler-border">လက်ရှိအလုပ်ပြန်လည်ဝင်ရောက်မှု</legend>
					    <div class="control-group">
							 <div class="row">
							 	<div class="col-sm-6 text-center">
							 		<div class="custom-control custom-radio mb-3">
									  <input class="custom-control-input" id="returnwork" name="returnwork" type="radio" value="ရှိ">
									  <label class="custom-control-label" for="returnwork">ရှိ</label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="custom-control custom-radio mb-3">
										<input  class="custom-control-input" id="returnwork1" checked="" type="radio" name="returnwork" value="မရှိ">
										<label class="custom-control-label" for="returnwork1">မရှိ</label>
									</div>
								</div>
							 </div>
							 <div class="row">
							 	<div class="col-sm-4 text-center">
							 		<label for="returnworkdate">အလုပ်ပြန်လည်ဝင်သည့်ရက်စွဲ</label>
							 	</div>	
							 	<div class="col-sm-8">
							 		<input type="date" name="returnworkdate" id="returnworkdate">
							 	</div>
							 </div>
					    </div>
					</fieldset>
	  			</div>
	  			<div class="col-sm-1"></div>
	  			<div class="col-sm-6 text-center">
	  				<fieldset class="scheduler-border">
					    <legend class="scheduler-border">ထိခိုက်ဒဏ်ရာအခြေအနေ</legend>
					    <div class="control-group">
						    <div class="row">
							 	<div class="col-sm-4 text-center">
							 		<div class="custom-control custom-radio mb-3">
									  <input  class="custom-control-input" id="remainhospital" name="injury" type="radio" value="ဆေးရုံတက်နေဆဲ" value="ဆေးရုံတက်နေဆဲ">
									  <label class="custom-control-label" for="remainhospital">ဆေးရုံတက်နေဆဲ</label>
									</div>
								</div>
								<div class="col-sm-4 text-center">
									<div class="custom-control custom-radio mb-3">
										<input  class="custom-control-input" id="undermedical" checked="" type="radio" name="injury" value="ဆေးကုသနေဆဲ">
										<label class="custom-control-label" for="undermedical"> ဆေးကုသနေဆဲ</label>
									</div>
								</div>
								<div class="col-sm-4 text-left">
									<div class="custom-control custom-radio mb-3">
										<input  class="custom-control-input" id="retirehouse"  type="radio" name="injury" value="အိမ်တွင်းအနားယူနေဆဲ">
										<label class="custom-control-label" for="retirehouse">အိမ်တွင်းအနားယူနေဆဲ</label>
									</div>
								</div>
							 </div>
					    </div>
					</fieldset>
	  			</div>
	  		</div>
	  		</p>

	  		<p>
	  		<div class="row">
	  			<div class="col-sm-12">
	  				<fieldset class="scheduler-border"> <br>
					    <div class="control-group">
							 <div class="row">
							 	<div class="col-sm-2 text-center">
							 		<div class="custom-control custom-radio mb-3">
									  <input class="custom-control-input" id="firstaid" name="casecondition" type="radio" value="ရှေးဦးသူနာပြု">
									  <label class="custom-control-label" for="firstaid">ရှေးဦးသူနာပြု</label>
									</div>
								</div>
								<div class="col-sm-2 text-center">
									<div class="custom-control custom-radio mb-3">
										<input  class="custom-control-input" id="normalstate" checked="" type="radio" name="casecondition" value="သာမန်အဆင့်">
										<label class="custom-control-label" for="normalstate">သာမန်အဆင့်</label>
									</div>
								</div>
								<div class="col-sm-2 text-center">
									<div class="custom-control custom-radio mb-3">
										<input  class="custom-control-input" id="severe"  type="radio" name="casecondition" value="အလွန်ပြင်းထန်">
										<label class="custom-control-label" for="severe">အလွန်ပြင်းထန်</label>
									</div>
								</div>
								<div class="col-sm-2 text-center">
									<div class="custom-control custom-radio mb-3">
										<input  class="custom-control-input" id="mortality"  type="radio" name="casecondition" value="သေဆုံးမှု">
										<label class="custom-control-label" for="mortality">သေဆုံးမှု</label>
									</div>
								</div>
								<div class="col-sm-2 text-center">
									<div class="custom-control custom-radio mb-3">
										<input  class="custom-control-input" id="denglevel" checked="" type="radio" name="casecondition" value="ပြန်ထန်အဆင့်">
										<label class="custom-control-label" for="denglevel">ပြန်ထန်အဆင့်</label>
									</div>
								</div>
							 </div>
					    </div>
					</fieldset>
	  			</div>
	  		</div>
	  		</p>
	  		<p>
	  		<div class="row">
	  			<div class="col-sm-12">
	  				<fieldset class="scheduler-border"> 
	  					<legend class="scheduler-border">လူမှုဖူလုံရေး အကျုံးဝင်မှု</legend>
					    <div class="control-group">
							 <div class="row">
							 	<div class="col-sm-2 text-center">
							 		<div class="custom-control custom-radio mb-3">
									  <input class="custom-control-input" id="coverage" name="coverage" type="radio" value="ရွိ">
									  <label class="custom-control-label" for="coverage">ရှိ</label>
									</div>
								</div>
								<div class="col-sm-2 text-center">
									<div class="custom-control custom-radio mb-3">
										<input  class="custom-control-input" id="coverage1" checked="" type="radio" name="coverage" value="မရှိ">
										<label class="custom-control-label" for="coverage1">မရှိ</label>
									</div>
								</div>
							 </div>
					    </div>
					</fieldset>
	  			</div>
	  		</div>
	  		</p>
  	</div>
  	<div class="tab">
	  	<p>
	  		<div class="row">
	  			<div class="col-sm-12">
	  				<fieldset class="scheduler-border"> 
	  					<legend class="scheduler-border">ထိခိုက်မှုဆိုင်ရာ/သေဆုံးမှုဆိုင်ရာ အချက်အလက်များ</legend>
					    <div class="control-group">
							 <div class="row">
								 <div class="col-sm-4"> 
									<label for="damageoccur">ထိခိုက်မှုဖြစ်ပွားခဲ့သည့်နေရာ</label>
							 		<input  id="damageoccur"  name="damageoccur">
								</div>
								<div class="col-sm-1">
									
								</div>
								<div class="col-sm-7">
									<div class="row">
										<div class="col-sm-6">
											<label for="occurdate">ဖြစ်ပွားခဲ့သည့်နေ့</label>ဖြစ်ပွားခဲ့သည့်နေ့
											<input type="date" name="occurdate" id="occurdate">
										</div>
										<div class="col-sm-6">
											<label for="occurtime">ဖြစ်ပွားခဲ့သည့်အချိန်</label>
											<input type="time" name="occurtime" id="occurtime">
										</div>
									</div>
								</div>
							 </div> <br>
							 <div class="row">
								 <div class="col-sm-4"> 
									<label for="affectpart">ထိခိုက်မိသည့် အစိတ်အပိုင်း</label>
							 		<input  id="affectpart"  name="affectpart">
								</div>
								<div class="col-sm-1">
									
								</div>
								<div class="col-sm-7"> 
									<label for="categoryname">ထိခိုက်မှုဖြစ်ပွားခဲ့သည့် ကဏ္ဍအမည် ၊ကဏ္ဍခွဲ၊အုပ်စု၊အုပ်စုခွဲ</label>
									<input  id="categoryname"  name="categoryname">
								</div>
							 </div> <br>
							 <div class="row">
							 	<div class="col-sm-4"> 
									 <label for="typeofaffect">ထိခိုက်မိသည့် အမျိုးအစား</label>
							 		<input id="typeofaffect"  name="typeofaffect">
								</div>
								<div class="col-sm-1">
									
								</div>
								<div class="col-sm-7"> 
									<label for="causehurm">ထိခိုက်မှုဖြစ်ရသည့်အကြောင်းအရင်း</label>
									<textarea class="col-sm-12" rows="4" placeholder="ထိခိုက်မှုဖြစ်ရသည့်အကြောင်းအရင်း" id="causehurm" name="causehurm"></textarea>
								</div>
							 </div> <br>
					    </div>
					</fieldset>
	  			</div>
	  		</div>
	  		</p>
	  		<p>	
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
						  <label for="receivenoti">အကြောင်းကြားစာ လက်ခံရရှိသည့်နေ့</label>
		  				<input  type="date"  name="receivenoti"  id="receivenoti">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<div class="row">
		  					<div class="col-sm-4">
		  						စစ်ဆေးသည့်နေ့နှင့်အချိန်
		  					</div>
							<div class="col-sm-7">
								<!-- <label for="inspectiondate">စစ်ဆေးသည့်နေ့</label>ဖြစ်ပွားခဲ့သည့်နေ့ -->
								<input type="datetime-local" name="inspectiondate" id="inspectiondate">
							</div>
							{{-- <div class="col-sm-4">
								<!-- <label for="checkintime">စစ်ဆေးသည့်အချိန်</label> -->
								<input type="time" name="checkintime" id="checkintime">
							</div> --}}
						</div>
		  			</div>
		  		</div>
	  		</p>
	  		<p>	
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
						  <label for="check">စစ်ဆေးခြင်း</label>
		  				<input id="check" name="check">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-center">
						  <label for="name">စစ်ဆေးသူအမည်</label>
		  				<input id="name"  name="checkName">
		  			</div>
		  		</div>
			  </p>
			  <p>	
					<div class="row">
						<div class="col-sm-5 text-center">
							<label for="position">စစ်ဆေးသူရာထူး</label>
							<input id="position"  name="checkPosition">
						</div>
						<div class="col-sm-1">
  
						</div>
						<div class="col-sm-6 text-center">
							
						</div>
					</div>
				</p>
		  	<p>	
		  		<div class="row">
		  			<div class="col-sm-12 text-center">
		  				<table class="table table-bordered" id="checkoutpeople">  
				            <tr>
				                <th>စစ်ဆေးစဉ် လိုက်ပါခဲ့သူများ</th>
				                <th>Action</th>
				            </tr>
				            <tr>  
				                <td><input type="text" name="checkoutpeople[0][name]" placeholder=" အမည်" class="form-control" /></td>  
				                <td><button type="button" name="add" id="addcheckoutpeople" class="btn btn-success">ထပ်ထည့်ရန်</button></td>  
				            </tr>  
	        			</table>
		  			</div>
		  		</div>

		  	</p>
		  	<p>	
		  		<div class="row">
		  			<div class="col-sm-12 text-center">
		  				<table class="table table-bordered" id="dynamicTable">  
				            <tr>
				                <th colspan="3">တွေ့ဆုံမေးမြန်းခဲ့သူများ အမည်၊ရာထူးနှင့် ဖုန်းနံပါတ်</th>
				                <th>Action</th>
				            </tr>
				            <tr>  
				                <td><input type="text" name="addmore[0][name]" placeholder=" အမည်" class="form-control" /></td>  
				                <td><input type="text" name="addmore[0][position]" placeholder="ရာထူး" class="form-control" /></td>  
				                <td><input type="text" name="addmore[0][contactphone]" placeholder=" ဖုန်းနံပါတ်" class="form-control" /></td>  
				                <td><button type="button" name="add" id="add" class="btn btn-success">ထပ်ထည့်ရန်</button></td>  
				            </tr>  
	        			</table>
		  			</div>
		  		</div>

		  	</p>
  	</div>
  	<div class="tab">
  		<p>
	  		<div class="row">
	  			<div class="col-sm-12">
	  				<fieldset class="scheduler-border"> 
	  					<legend class="scheduler-border">ထိခိုက်မှုဖြစ်ပွားပုံအကျဉ်း</legend>
					    <div class="control-group">
							 <div class="row">
							 	<div class="col-sm-12">
							 		<textarea class="col-sm-12" rows="5" placeholder="ထိခိုက်မှုဖြစ်ပွားပုံအကျဉ်း" id="injurybrief" name="injurybrief"></textarea>
								</div>
							 </div>
					    </div>
					</fieldset>
	  			</div>
	  		</div>
	  	</p>
	  	<p>
	  		<div class="row">
	  			<div class="col-sm-12">
	  				<fieldset class="scheduler-border"> 
	  					<legend class="scheduler-border">ထိခိုက်မှုနှင့် စပ်လျဉ်း၍ အဆီလျော်ဆုံးဓါတ်ပုံထည့်ရန်/ပုံကြမ်းဆွဲရန်</legend>
					    <div class="control-group">
							 <div class="row">
							 	<div class="col-sm-12">
							 		<input type="file" name="photo" class="form-control"/>
								</div>
							 </div>
					    </div>
					</fieldset>
	  			</div>
	  		</div>
	  	</p>
	  	<p>
	  		<div class="row">
	  			<div class="col-sm-12">
	  				<fieldset class="scheduler-border"> 
	  					<legend class="scheduler-border">လုပ်ငန်းခွင်ထိခိုက်မှု ဖြစ်စဉ် အပြည့်အစုံ ရေးသားရန်</legend>
					    <div class="control-group">
							 <div class="row">
							 	<div class="col-sm-12"> 
							 		<textarea class="col-sm-12" rows="5" placeholder="လုပ်ငန်းခွင်ထိခိုက်မှု ဖြစ်စဉ် အပြည့်အစုံ ရေးသားရန်" id="fullprocess" name="fullprocess"></textarea>
								</div>
							 </div>
					    </div>
					</fieldset>
	  			</div>
	  		</div>
	  	</p>
	  	<p>
	  		<div class="row">
	  			<div class="col-sm-12">
	  				<fieldset class="scheduler-border"> 
	  					<legend class="scheduler-border">ထိခိုက်မှုဖြစ်ပွားရသည့် နောက်ကွယ် အကြောင်းရင်း(Underlying Causes)</legend>
					    <div class="control-group">
							 <div class="row">
							 	<div class="col-sm-12"> 
							 		<textarea class="col-sm-12" rows="5" placeholder="ထိခိုက်မှုဖြစ်ပွားရသည့် နောက်ကွယ် အကြောင်းရင်း(Underlying Causes)" id="underlyingcauses" name="underlyingcauses"></textarea>
								</div>
							 </div>
					    </div>
					</fieldset>
	  			</div>
	  		</div>
	  	</p>
  	</div>
  	<div class="tab">
  		<p>
	  		<div class="row">
	  			<div class="col-sm-12">
	  				<fieldset class="scheduler-border"> 
	  					<legend class="scheduler-border">ထိခိုက်မှုဖြစ်ပွားရသည့် အခြေခံ အကြောင်းရင်း(Basic/Root Causes)</legend>
					    <div class="control-group">
							 <div class="row">
							 	<div class="col-sm-12">
							 		<textarea class="col-sm-12" rows="5" placeholder="ထိခိုက်မှုဖြစ်ပွားရသည့် အခြေခံ အကြောင်းရင်း(Basic/Root Causes)" id="basiccauses" name="basiccauses"></textarea>
								</div>
							 </div>
					    </div>
					</fieldset>
	  			</div>
	  		</div>
	  	</p>
	  	<p>
	  		<div class="row">
	  			<div class="col-sm-12">
	  				<fieldset class="scheduler-border"> 
	  					<legend class="scheduler-border">သုံးသပ်ချက်</legend>
					    <div class="control-group">
							 <div class="row">
							 	<div class="col-sm-12">
							 		<textarea class="col-sm-12" rows="5" placeholder="သုံးသပ်ချက်" id="review" name="review"></textarea>
								</div>
							 </div>
					    </div>
					</fieldset>
	  			</div>
	  		</div>
	  	</p>
	  	<p>
	  		<div class="row">
	  			<div class="col-sm-12">
	  				<fieldset class="scheduler-border"> 
	  					<legend class="scheduler-border">ဖြေဆိုသူ/အသိသက်သေ</legend>
					    <div class="control-group">
							 <div class="row">
							 	<div class="col-sm-6"> 
	  								<p>
										<input placeholder="အမည်"  name="witnessname1"> 
									</p>
	  								<p><input placeholder="ရာထူး"  name="witnessposition1"></p>
								</div>
								<div class="col-sm-6"> 
							 		<p><input placeholder="အမည်"  name="witnessname2"> </p>
	  								<p><input placeholder="ရာထူး"  name="witnessposition2"></p>
								</div>
							 </div>
							 <div class="row">
							 	<div class="col-sm-6"> 
	  								<p><input placeholder="ပိုင်ရှင်အမည်"  name="witnessownername"> </p>
	  								
								</div>
								<div class="col-sm-6"> 
							 		<p><input placeholder="မန်နေဂျာအမည်"  name="witnessmanagername"></p>
								</div>
							 </div>
					    </div>
					</fieldset>
	  			</div>
	  		</div>
	  	</p>
	  	<p>	
	  		<div class="row">
	  			<div class="col-sm-4 text-right">
					<label for="inspector">စစ်ဆေးရေးအရာရှိ</label>
				  </div>
				  <div class="col-sm-4">
						<input  type="text" id="inspector"  name="inspector">
				  </div>
	  			<!-- <div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-left">

	  			</div> -->
	  		</div>
	  	</p>
  	</div>
  	<div style="overflow:auto;">
	    <div style="float:right;">
	      <button type="button" id="prevBtn" onclick="nextPrev(-1)">ရှေ့တစ်မျက်နှာ</button>
	      <button type="button" id="nextBtn" onclick="nextPrev(1)">နောက်တစ်မျက်နှာ</button>
	    </div>
	  </div>
  </form>
 <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "သိမ်းဆည်းမည်";
  } else {
    document.getElementById("nextBtn").innerHTML = "နောက်တစ်မျက်နှာ";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  // if (n == 1 && !validateForm()) return false;
  // // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
	$("#tempoary").val('save');
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}
function nextPrevv(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  // if (n == 1 && !validateForm()) return false;
  // // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab =n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}
function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

//for ေတြ့ဆုံေမးျမန္းခဲ့သူမ်ား အမည္ ရာထူး ဖုန္းနံပါတ္
 var i = 0;    
    $("#add").click(function(){
   
        ++i;
   
        $("#dynamicTable").append('<tr><td><input type="text" name="addmore['+i+'][name]" placeholder="အမည်" class="form-control" /></td><td><input type="text" name="addmore['+i+'][position]" placeholder="ရာထူး" class="form-control" /></td><td><input type="text" name="addmore['+i+'][contactphone]" placeholder="ဖုန်းနံပါတ်" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">ပယ်ဖျက်ရန်</button></td></tr>');
    });
   
    $(document).on('click', '.remove-tr', function(){  
         $(this).parents('tr').remove();
    });  

  // end  ေတြ့ဆုံေမးျမန္းခဲ့သူမ်ား အမည္ ရာထူး ဖုန္းနံပါတ္

  //start စစ္ေဆးစဥ္လုိက္ပါခဲ့သူမ်ား 
var checkoutpeople = 0;    
    $("#addcheckoutpeople").click(function(){
   
        ++i;
   
        $("#checkoutpeople").append('<tr><td><input type="text" name="checkoutpeople['+i+'][name]" placeholder="အမည်" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">ပယ်ဖျက်ရန်</button></td></tr>');
    });
 // end စစ္ေဆးစဥ္လုိက္ပါခဲ့သူမ်ား 

$(document).ready(function(){

//for total  worker
$("#numberofworker").on('input', '#worker', function () {
       var calculated_total_sum = 0;
     
       $("#numberofworker #worker").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum += parseFloat(get_textbox_value);
              }                  
            });
              $("#totalmale").html(calculated_total_sum);
       });

});
//for tempoary save
$('#tempoarySave').click(function(){
	$("#tempoary").val('tempoary');
	document.getElementById("regForm").submit();
});
</script>
@endsection