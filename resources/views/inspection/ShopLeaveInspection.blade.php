@extends('layouts.admin')
@section('content')
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
<script type='text/javascript'>
$(function(){
$('#datepicker').datepicker({
    calendarWeeks: true,
    todayHighlight: true,
    autoclose: true
});  
});
</script>
	<form id="regForm" action="{{url('/factoryregister')}}" method="post">
	 {{csrf_field()}}
	<h1>စစ်ဆေးချက်ပုံစံဆိုင်များနှင့် အလုပ်ဋ္ဌာနများ အက်ဥပဒေ ခွင့်ရက်နှင့် အလုပ်ပိတ်ရက် ဥပဒေစစ်ဆေးခြင်း</h1>
		<div class="row">
			<div class="col-sm-6">
				<select name="checktype">
					<option>ပထမအကြိမ်</option>
					<option>ထပ်မံ</option>
					<option>တိုင်ကြားစာအရ</option>
				</select>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
                
                    <input type='text'id="datepicker" placeholder="စစ်ဆေးခဲ့သည့်နေ့စွဲနှင့်အချိန်"/>
                 
				</div>
			</div>
				
		</div>
  		<div style="text-align:center;margin-top:40px;">
		    <a  style="text-decoration: none;" onclick="nextPrevv(0)"><span class="step">1</span></a>
		    <span class="step" onclick="nextPrevv(1)">2</span>
		    <span class="step" onclick="nextPrevv(2)">3</span>
		    <span class="step" onclick="nextPrevv(3)">4</span>
		    <span class="step" onclick="nextPrevv(4)">5</span>
	  </div> <br>

  	<div class="tab">
  		<h1 align="center">အပိုင်း(၁)</h1>
	  	<p>
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<input placeholder="ဆိုင်/အလုပ်ဋ္ဌာနအမည်နှင့်လိပ်စာ"  name="name1" required="">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-left">
	  				<input placeholder="ပိုင်ဆိုင်မှု အမျိုးအစား"  name="type">
	  			</div>
	  		</div>
	  	</p>

	  	<p>
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<input placeholder="အလုပ်ရှင်အမည်နှင့်နေရပ်လိပ်စာ"  name="name2" required="">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-left">
	  				<input placeholder="(အစုစပ်များရှိကဖော်ပြရန်)"  name="group">
	  			</div>
	  		</div>
	  	</p>

	  	<p>
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<input placeholder="မန်နေဂျာအမည်နှင့်နေရပ်လိပ်စာ"  name="managername" required="">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-left">
	  				<input placeholder="လုပ်ငန်းအမျိုးအစား"  name="jobtype">
	  			</div>
	  		</div>
	  	<!-- </div> -->
	  	</p>


	  	<p>
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<input placeholder="ဆိုင်/အလုပ်ဋ္ဌာနအမည်နှင့်လိပ်စာ"  name="name3" required="">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-left">
	  				<input placeholder="ပိုင်ဆိုင်မှု အမျိုးအစား"  name="type2">
	  			</div>
	  		</div>
	  	</p> <br>


	  		<p>
	  		<div class="row">
		  		<div class="col-sm-5 text-center">
			  	<fieldset class="scheduler-border">
							    <legend class="scheduler-border">မေးမြန်းချက်များကိုဖြေကြားသူ၏ အမည်နှင့်အလုပ်အကိုင်</legend>
		  			
		  				<!-- <input placeholder="မေးမြန်းချက်များကိုဖြေကြားသူ၏ အမည်နှင့်အလုပ်အကိုင်"  name="answername" required=""> -->
		  				<textarea class="col-sm-12" rows="4" placeholder="မေးမြန်းချက်များကိုဖြေကြားသူ၏ အမည်နှင့်အလုပ်အကိုင် " id="letter" name="letter"></textarea>
		  		
		  		</fieldset>
			  	</div>
		  			
			  	<div class="col-sm-1">

	  			</div>
	  			
		  		<div class="col-sm-6 text-center">
				  	<fieldset class="scheduler-border">
								    <legend class="scheduler-border">အလုပ်ရှင်ပိုင်ဆိုင်သော ဆိုင်၊အလုပ်ဋ္ဌာန အလုပ်ရုံစသည်တို.၏ အမည်နှင့် လိပ်စာ </legend>
			  			
			  				<!-- <input placeholder="အလုပ်ရှင်ပိုင်ဆိုင်သော ဆိုင်၊အလုပ်ဋ္ဌာန အလုပ်ရုံစသည်တို.၏ အမည်နှင့် လိပ်စာ "  name="name4" required=""> -->
			  				<textarea class="col-sm-12" rows="4" placeholder="အလုပ်ရှင်ပိုင်ဆိုင်သော ဆိုင်၊အလုပ်ဋ္ဌာန အလုပ်ရုံစသည်တို.၏ အမည်နှင့် လိပ်စာ " id="letter" name="letter"></textarea>
			  		
			  		</fieldset>
			  	</div>
		  	</div>
	  		</p>

	  	<p>
		<div>
			<table border="1" align="center">		  
			<tr>
				<td></td>
				<td>၁၈နှစ်နှင့်အထက်</td>
				<td>၁၅နှစ်မှ၁၈နှစ်</td>
				<td>၁၃နှစ်မှ၁၅နှစ်</td>
				<td>ပေါင်း</td>
			</tr>

			<tr>
				<td>ကျား</td>
				<td><input type='text' value=0  name="b"></td>
				<td><input type='text' value=0  name="a"></td>
				<td><input type='text' value=0  name="c"></td>
				<td><input type='text' value=0  name="d"></td>
			</tr>

			<tr>
				<td>မ</td>
				<td><input type='text' value=0  name="e"></td>
				<td><input type='text' value=0  name="f"></td>
				<td><input type='text' value=0  name="g"></td>
				<td><input type='text' value=0  name="h"></td>
			</tr>
			</table> 
		</div>
	</p>
	<p>
	<div>
		<table border="1" align="center">
					  
			<tr>
			<td>စဉ်</td>
			<td>အမည်</td>
			<td>အလုပ်အကိုင်</td>
			<td>အခကြေးငွေ နှုန်းထား</td>
			<td>နေ.စဉ်အလုပ်ချိန်</td>
			<td>နားချိန်</td>
			<td>အပတ်စဉ်နားရက်</td>
			<td>အလုပ်စတင်သည့်နေ.စွဲ</td>
		    <td>မှတ်ချက်</td>
			</tr>

			<tr>
			<td></td>
			<td><input type='text' value=0  name="i"></td>
			<td><input type='text' value=0  name="j"></td>
			<td><input type='text' value=0  name="k"></td>
			<td><input type='text' value=0  name="l"></td>
			<td><input type='text' value=0  name="m"></td>
			<td><input type='text' value=0  name="n"></td>
			<td><input type='text' value=0  name="o"></td>
			<td><input type='text' value=0  name="p"></td>
			</tr>			   
		</table>
	</div>
	</p>
</div>

 <div class="tab">
  	<h1 align="center">အပိုင်း(၁)</h1>
				<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အလုပ်ချိန်နို.တစ်စာပုံစံ ၁(က)/ ၁(ခ)/ ၁(ဂ) ကိုချိတ်ထားခြင်း</legend>
						    <div class="control-group">
								 <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input class="custom-control-input" id="noticestandard" name="noticestandard" type="radio">
										  <label class="custom-control-label" for="noticestandard">ပြု</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="noticestandard1" checked="" type="radio" name="noticestandard">
											<label class="custom-control-label" for="noticestandard1">မပြု</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  			<div class="col-sm-1"></div>
		  			<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အလုပ်သမား မှတ်ပုံတင်စာအုပ် ပုံစံ (၂)</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="SSB" name="SSB" type="radio">
										  <label class="custom-control-label" for="SSB">ထား</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="SSB1" checked="" type="radio" name="SSB">
											<label class="custom-control-label" for="SSB1">မထား</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  		</div>
	  		</p>

	  			<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အခကြေးငွေကို လကုန်ပြီး(၇)ရက်အတွင်း</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="fees" name="fees" type="radio">
										  <label class="custom-control-label" for="fees">ပေး</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="fees1" checked="" type="radio" name="fees">
											<label class="custom-control-label" for="fees1">မပေး</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  			<div class="col-sm-1"></div>

		  			<div class="col-sm-6 text-center">
					  	<fieldset class="scheduler-border">
									    <legend class="scheduler-border">ရက်သတ္တပတ်ပိတ်ရက်</legend>
				  			
				  				<input placeholder="ရက်သတ္တပတ်ပိတ်ရက် "  name="day" required="">
				  		
				  		</fieldset>
			  		</div>
		  		</div>

			<p>
	  		<div class="row">
		  		<div class="col-sm-8 text-center">
				  	<fieldset class="scheduler-border">
								    <legend class="scheduler-border">ဆိုင်/အလုပ်ဋ္ဌာန၏ အလုပ်ချိန်ကာလအပိုင်းအခြား</legend>
			  			
			  				<input placeholder="ဆိုင်/အလုပ်ဋ္ဌာန၏ အလုပ်ချိန်ကာလအပိုင်းအခြား"  name="officename" required="">
			  		
			  		</fieldset>
			  	</div>
		  	</div>
	  		</p>
</div>


<div class="tab">

			  	<h1 align="center">အပိုင်း(၂)</h1>	

		  			<!-- <div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border"> ခွင့်ရက်မှတ်ပုံတင်စာအုပ်နှင့် မှတ်တမ်းများ စနစ်တကျထားခြင်း </legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="registrationbook" name="registrationbook" type="radio">
										  <label class="custom-control-label" for="registrationbook">ရှိ </label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="registrationbook1" checked="" type="radio" name="registrationbook">
											<label class="custom-control-label" for="registrationbook1"> မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			
		  		</div> -->



<legend class="scheduler-border"> တစ်နှစ်အတွင်းကျရောက်သည့် အများအလုပ်ပိတ်ရက်အရေအတွက်</legend>
<div class="row"> 
<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">(က) အများအလုပ်ပိတ်ရက်တွင်ဆိုင်/အလုပ်ဋ္ဌာနကို ပိတ်ထားခြင်း  </legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="numholidays" name="numholidays" type="radio">
										  <label class="custom-control-label" for="numholidays">ရှိ </label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="numholidays1" checked="" type="radio" name="numholidays">
											<label class="custom-control-label" for="numholidays1"> မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			
		  		</div>

		  		<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">(ခ) အလုပ်သမားများအား အများအလုပ်ပိတ်ရက် ခံစားခွင့်</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="opportunityhol" name="opportunityhol" type="radio">
										  <label class="custom-control-label" for="opportunityhol">ပြု</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="opportunityhol1" checked="" type="radio" name="opportunityhol">
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
						    <legend class="scheduler-border">(ဂ)အများအလုပ်ပိတ်ရက်တွင် အလုပ်ဆင်းသော အလုပ်သမားများအား သတ်မှတ်ထားသော လုပ်ခ ကိုပေးချေခြင်း</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="paidwage" name="paidwage" type="radio">
										  <label class="custom-control-label" for="paidwage">ရှိ </label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="paidwage1" checked="" type="radio" name="paidwage">
											<label class="custom-control-label" for="paidwage1"> မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			
		  		</div>
		  		<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border"> ခွင့်ရက်မှတ်ပုံတင်စာအုပ်နှင့် မှတ်တမ်းများ စနစ်တကျထားခြင်း </legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="registrationbook" name="registrationbook" type="radio">
										  <label class="custom-control-label" for="registrationbook">ရှိ </label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="registrationbook1" checked="" type="radio" name="registrationbook">
											<label class="custom-control-label" for="registrationbook1"> မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			
		  		</div>
			</div>
					
</div>

<div class="tab">
	<h1 align="center">အပိုင်း(၂)</h1>	 <br>
	<legend class="scheduler-border">တစ်နှစ်လျှင် ခွင့်ပြုသော လုပ်သက်ခွင့် အရေအတွက်</legend>

<div class="row"> 
<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">(က) လုပ်သက်ခွင့်ရက်ကို နှစ်စဉ် ခံစားခွင့်  </legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="vacationdays" name="vacationdays" type="radio">
										  <label class="custom-control-label" for="vacationdays">ပေး </label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="vacationdays1" checked="" type="radio" name="vacationdays">
											<label class="custom-control-label" for="vacationdays1"> မပေး</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			
		  		</div>

		  		<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">(ခ) နှစ်စဉ်ခံစားခြင်းမရှိပါက သုံးနှစ်ထိ စုဆောင်းမှု </legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="annual" name="annual" type="radio">
										  <label class="custom-control-label" for="annual">ရှိ </label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="annual1" checked="" type="radio" name="annual">
											<label class="custom-control-label" for="annual1"> မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			
		  		</div></div><br><br>

<div class="row">
	
		  			<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">(ဂ) အလုပ်မှ နုတ်ထွက် ထုတ်ပြစ်သော လုပ်သားများအား ခွင့်ရက်အစား အခကြေးငွေကို ရှင်းပေးခြင်း</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="workerfrees" name="workerfrees" type="radio">
										  <label class="custom-control-label" for="workerfrees">ရှိ </label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="workerfrees1" checked="" type="radio" name="workerfrees">
											<label class="custom-control-label" for="workerfrees1"> မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			
		  		</div>
		  		<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">(နှစ်ဦးသဘောတူ အထောက်အထား ရှိ မရှိ)</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="contract" name="contract" type="radio">
										  <label class="custom-control-label" for="contract">ရှိ </label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="contract1" checked="" type="radio" name="contract">
											<label class="custom-control-label" for="contract1"> မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			
		  		</div>
		  	</div>
					
</div>

<div class="tab">
	<h1 align="center">အပိုင်း(၂)</h1>	
	<p>
		<div class="row">
			<div class="col-sm-6 text-center">
			  	<fieldset class="scheduler-border">
							    <legend class="scheduler-border"> တစ်နှစ်လျှင် ခံစားခွင့်ပြုသော  ဆေးလက်မှတ် အရေအတွက်
	(ခံစားခွင့် မရသော အလုပ်သမားရှိက ဖော်ပြရန်)</legend>
		  			
		  				<input placeholder="တစ်နှစ်လျှင် ခံစားခွင့်ပြုသော  ဆေးလက်မှတ် အရေအတွက်"  name="number" required="">
		  		
		  		</fieldset>
			  	</div>

		  <!-- 	<div class="col-sm-6 text-center">
		  	<fieldset class="scheduler-border">
						    <legend class="scheduler-border">တစ်နှစ်လျှင် ခံစားခွင့်ပြုသော  ဆေးလက်မှတ် အရေအတွက်
(ခံစားခွင့် မရသော အလုပ်သမားရှိက ဖော်ပြရန်)</legend>
	  			
	  				<input placeholder="တစ်နှစ်လျှင် ခံစားခွင့်ပြုသော  ဆေးလက်မှတ် အရေအတွက်"  name="num" required="">
	  		
	  		</fieldset>
		  	</div> -->
		  </div>
		</p>

		  	<p>
		  		<div class="row">
		  			<div class="col-sm-12">
		  				<textarea class="col-sm-12" rows="4" placeholder="ယခင်က ပြစ်မှုထင်ရှား စီရင်ခြင်း ခံရလျှင် အဆိုပါ အကြောင်းအရာများကို ဖော်ပြရန်" id="letter" name="letter"></textarea>
		  			</div>
		  		</div>
	  		</p>
	  		<p>
	  		<div class="row">
	  			<div class="col-sm-12">
	  				<textarea class="col-sm-12" rows="4" placeholder="အထွေထွေမှတ်ချက်များ" id="letter" name="letter"></textarea>
	  			</div>
	  		</div>
	  	</p>
	  	<p>
	  		<div class="row">
	  			<div class="col-sm-12">
	  				<textarea class="col-sm-12" rows="4" placeholder="အထက်အရာရှိမှတ်ချက်" id="letter" name="letter"></textarea>
	  			</div>
	  		</div>
	  	</p>

	  	<p>
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<input placeholder="စစ်ဆေးသူအရာရှိလက်မှတ်"  name="name5" required="">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-left">
	  				<input placeholder="အမည်"  name="name6">
	  			</div>
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

$(document).ready(function(){
    $('.timepicker').timepicker({});
});
</script>
@endsection
