@extends('layouts.admin')
@section('content')

	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

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
	@if(session()->get('success'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<span class="alert-inner--icon"></span>
			<span class="alert-inner--text">  {{ session()->get('success') }}  </span>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	@endif

<h1>၁၉၅၁ ခွင့်ရက်နှင့် အလုပ်ပိတ်ရက် ဥပဒေစစ်ဆေးခြင်း</h1>
	<br>
	<div class="row">
			<div class="col-sm-12 text-right">
				<button  name="tempoarySave" id="tempoarySave">ယာယီသိမ်းဆည်းမည် </button>
			</div>
	</div>
<form id="shopinspect" action="{{route('ShopInspection1951LeaveLaw.store')}}" method="post">
	 {{csrf_field()}}
	 <div style="text-align:center;margin-top:40px;">
	    <a  style="text-decoration: none;" onclick="nextPrevv(0)"><span class="step">1</span></a>
	    <span class="step" onclick="nextPrevv(1)">2</span>
	  </div> <br>

	  {{-- for tempoarySave --}}
	  <input type="hidden" name="tempoary" id="tempoary">

<div class="tab">
  	<legend class="scheduler-border"> တစ်နှစ်အတွင်းကျရောက်သည့် အများအလုပ်ပိတ်ရက်အရေအတွက်</legend>
<div class="row"> 
<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အများအလုပ်ပိတ်ရက်တွင်ဆိုင်/အလုပ်ဌာနကို ပိတ်ထားခြင်း  </legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="numholidays" name="numholidays" type="radio" value="ရှိ">
										  <label class="custom-control-label" for="numholidays">ရှိ </label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="numholidays1" checked="" type="radio" name="numholidays" value="မရှိ">
											<label class="custom-control-label" for="numholidays1"> မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			
		  		</div>

		  		<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အလုပ်သမားများအား အများအလုပ်ပိတ်ရက် ခံစားခွင့်</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="opportunityhol" name="opportunityhol" type="radio" value="ပြု">
										  <label class="custom-control-label" for="opportunityhol">ပြု</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="opportunityhol1" checked="" type="radio" name="opportunityhol" value="မပြု">
											<label class="custom-control-label" for="opportunityhol1"> မပြု</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			
		  		</div>
		  	</div>
		  	<div class="row">
				<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အများအလုပ်ပိတ်ရက်တွင် အလုပ်ဆင်းသော အလုပ်သမားများအား သတ်မှတ်ထားသော လုပ်ခ ကိုပေးချေခြင်း</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="paidwage" name="paidwage" type="radio" value="ရှိ">
										  <label class="custom-control-label" for="paidwage">ရှိ </label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="paidwage1" checked="" type="radio" name="paidwage" value="မရှိ">
											<label class="custom-control-label" for="paidwage1"> မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			
		  		</div>
		  	</div>
		  	<legend class="scheduler-border">တစ်နှစ်လျှင် ခွင့်ပြုသော လုပ်သက်ခွင့် အရေအတွက်</legend>

<div class="row"> 
	<div class="col-sm-6 text-center">
		<fieldset class="scheduler-border">
			<legend class="scheduler-border">လုပ်သက်ခွင့်ရက်ကို နှစ်စဉ် ခံစားခွင့်  </legend>
				<div class="control-group">
					<div class="row">
						<div class="col-sm-6 text-center">
							<div class="custom-control custom-radio mb-3">
								<input  class="custom-control-input" id="vacationdays" name="vacationdays" type="radio" value="ပေး">
								<label class="custom-control-label" for="vacationdays">ပေး </label>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="custom-control custom-radio mb-3">
								<input  class="custom-control-input" id="vacationdays1" checked="" type="radio" name="vacationdays" value="မပေး">
									<label class="custom-control-label" for="vacationdays1"> မပေး</label>
							</div>
						</div>
					</div>
				</div>
		</fieldset>
		  			
	</div>

	<div class="col-sm-6 text-center">
		<fieldset class="scheduler-border">
			<legend class="scheduler-border">အလုပ်မှ နုတ်ထွက် ထုတ်ပြစ်သော လုပ်သားများအား ခွင့်ရက်အစား အခကြေးငွေကို ရှင်းပေးခြင်း</legend>
				<div class="control-group">
					<div class="row">
						<div class="col-sm-6 text-center">
							<div class="custom-control custom-radio mb-3">
								<input  class="custom-control-input" id="workerfrees" name="workerfrees" type="radio" value="ရှိ">
								<label class="custom-control-label" for="workerfrees">ရှိ </label>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="custom-control custom-radio mb-3">
								<input  class="custom-control-input" id="workerfrees1" checked="" type="radio" name="workerfrees" value="မရှိ">
									<label class="custom-control-label" for="workerfrees1"> မရှိ</label>
							</div>
						</div>
					</div>
				</div>
		</fieldset>
		  			
	</div>

		 
</div>


<div class="row">
	<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border"> နှစ်စဉ်ခံစားခြင်းမရှိပါက သုံးနှစ်ထိ စုဆောင်းမှု </legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="annual" name="annual" type="radio" value="ရှိ">
										  <label class="custom-control-label" for="annual">ရှိ </label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="annual1" checked="" type="radio" name="annual" value="မရှိ">
											<label class="custom-control-label" for="annual1"> မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			
	</div>
	<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">နှစ်ဦးသဘောတူ အထောက်အထား </legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="contract" name="contract" type="radio" value="ရှိ">
										  <label class="custom-control-label" for="contract">ရှိ </label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="contract1" checked="" type="radio" name="contract" value="မရှိ">
											<label class="custom-control-label" for="contract1"> မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			
		  		</div>
	
		</div>
		<div class="row">
  			<div class="col-sm-6">
  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border"> ခွင့်ရက်မှတ်ပုံတင်စာအုပ်နှင့် မှတ်တမ်းများ စနစ်တကျထားခြင်း </legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="registrationbook" name="registrationbook" type="radio" value="ရှိ">
										  <label class="custom-control-label" for="registrationbook">ရှိ </label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="registrationbook1" checked="" type="radio" name="registrationbook" value="မရှိ">
											<label class="custom-control-label" for="registrationbook1"> မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
				</fieldset>
  		</div>
  		<div class="col-sm-6">
  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border"> တစ်နှစ်လျှင် ခံစားခွင့်ပြုသော  ဆေးလက်မှတ် အရေအတွက် </legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-12">
								 		<input type="text" name="medicalticketqan"/>
								 	</div>
								 </div>
						    </div>
				</fieldset>
  		</div>
  	</div>

</div>
<div class="tab">

<p>
		<div class="row">
				<div class="col-sm-12 text-center">
					<table class="table table-bordered" id="medicalnotallowworker">  
					  <tr>
						  <th>ခံစားခွင့် မရသော အလုပ်သမားရှိက ဖော်ပြရန်</th>
						  <th>Action</th>
					  </tr>
					  <tr>  
						  <td><input type="text" name="addmore[0][medicalworker]" placeholder="အလုပ်သမားအမည်" class="form-control" /></td>  
						  <td><button type="button" name="addmedicalworker" id="addmedicalworker" class="btn btn-success">ထပ်ထည့်ရန်</button></td>  
					  </tr>  
				  </table>
				</div>
		</div>
</p>
	<div class="row">
		<div class="col-sm-6 text-center">
		  	<textarea class="col-sm-12" rows="4" placeholder="ယခင်က ပြစ်မှုထင်ရှား စီရင်ခြင်း ခံရလျှင် အဆိုပါ အကြောင်းအရာများကို ဖော်ပြရန်" id="letter" name="passionremark"></textarea>		
		  			
		</div>
		<div class="col-sm-6 text-center">
		  	<textarea class="col-sm-12" rows="4" placeholder="အထွေထွေမှတ်ချက်များ" id="letter" name="generalremark"></textarea>		
		  			
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 text-center">
		  	<textarea class="col-sm-12" rows="4" placeholder="အထက်အရာရှိမှတ်ချက်" id="letter" name="officeremark"></textarea>		
		  			
		</div>
		
	</div>
	<div class="row">
		<div class="col-sm-4 text-right">
			<label id="inspectionname">စစ်ဆေးသူအရာရှိအမည်</label>
		</div>
		<div class="col-sm-5 text-center">
		  		<input type="text" name="inspectionname" id="inspectionname">	
		  			
		</div>
	</div>
		  	

</div>
<div style="overflow:auto;">
	    <div style="float:right;">
	      <button type="button" id="prevBtn" onclick="nextPrev(-1)">ရှေ့တစ်မျက်နှာ</button>
	      <button type="button" id="nextBtn" onclick="nextPrev(1)">နောက်တစ်မျက်နှာ</button>
	    </div>
	  </div>
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
    document.getElementById("shopinspect").submit();
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
    document.getElementById("shopinspect").submit();
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


var i = 0;
       
	   $("#addmedicalworker").click(function(){
	  
		   ++i;
	  
		   $("#medicalnotallowworker").append('<tr><td><input type="text" name="addmore['+i+'][medicalworker]" placeholder="အလုပ်သမားအမည်" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
	   });
	  
	   $(document).on('click', '.remove-tr', function(){  
			$(this).parents('tr').remove();
	   });  

 //for tempoary save
 $('#tempoarySave').click(function(){
	    $("#tempoary").val('tempoary');
	document.getElementById("shopinspect").submit();
});


</script>
@endsection
