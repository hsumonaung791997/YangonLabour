@extends('layouts.admin')
@section('content')
  	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
	<script src="{{asset('assets/js/common.js')}}"></script>
<script type='text/javascript'>
$(function(){
$('#datepicker').datepicker({
    calendarWeeks: true,
    todayHighlight: true,
    autoclose: true
});  
});
$(function(){
$('#datepicker1').datepicker({
    calendarWeeks: true,
    todayHighlight: true,
    autoclose: true
});  
});
</script>
	<h1> ခွင့်ရက်နှင့်အလုပ်ပိတ်ရက်အက်ဥပဒေများအရ စစ်ဆေးချက်ပုံစံ</h1>
		<div class="row">
			<div class="col-sm-6">
				<select name="checktype">
					<option>သာမန်</option>
					<option>ပြန်လည်</option>
					<option>အထူး</option>
				</select>
			</div>
			<div class="col-sm-6">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
                
							<input type='text'id="datepicker" placeholder="စစ်ဆေးခဲ့သည့်ရက်စွဲ">
                 
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
                
							<input type='text'id="datepicker1"  placeholder="နောက်ဆုံးစစ်ဆေးခဲ့သည့်ရက်စွဲ">
                 
						</div>
					</div>
				</div>
				
			</div>
				
		</div>

  	 <form id="inspectform"class="form-background" action=""  method="post">
	 {{csrf_field()}}
	 <div style="text-align:center;margin-top:40px;">
	    <a  style="text-decoration: none;" onclick="nextPrevv(0)"><span class="step">1</span></a>
	    <span class="step" onclick="nextPrevv(1)">2</span>
	    <span class="step" onclick="nextPrevv(2)">3</span>
	    <span class="step" onclick="nextPrevv(3)">4</span>
	    <span class="step" onclick="nextPrevv(4)">5</span>
</div> <br>
   <div class="tab">
  	<center><h4>အပိုင်း(၁)</h4></center>
	<h4>လုပ်ငန်းဌာနဆိုင်ရာ အချက်အလက်များ</h4>
		<p>
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<input placeholder="အလုပ်ရုံ၊ စက်ရုံ အမည်"  name="officename" required="">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-left">
	  				<input placeholder="စက်ရုံလိပ်စာ"  name="factoryaddress">
	  			</div>
	  		</div>
	  	</p>
	  	<p>
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<input placeholder="ပိုင်ရှင်အမည်"  name="owner">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-left">
	  				<input placeholder="ပိုင်ရှင်လိပ်စာ"  name="owneradd">
	  			</div>
	  		</div>
	  	</p>
	  	<p>
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<input placeholder="ရုံးရှိမှတ်တမ်းအရ လုပ်ငန်းပိုင်ရှင်အမည်"  name="regisowner">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-left">
	  				<input placeholder="အလုပ်သမားအင်အား"  name="wokeramount">
	  			</div>
	  		</div>
	  	</p>
		<p>
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<input placeholder="မန်နေဂျာအမည်"  name="managername">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-left">
	  				<input placeholder="မန်နေဂျာလိပ်စာ"  name="manageradd">
	  			</div>
	  		</div>
	  	</p>
		<p>
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<input placeholder="တာဝန်ခံဖြေဆိုသူအမည်"  name="inteviewee">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-left">
	  				<input placeholder="တာဝန်ခံဖြေဆိုသူရာထူး"  name="interviewwrank">
	  			</div>
	  		</div>
	  	</p>
		<p>
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<input placeholder="အားပေးစက်အမျိုးအစား"  name="inteviewee">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-left">
	  				<input placeholder="မြင်းကောင်ရေအား"  name="interviewwrank">
	  			</div>
	  		</div>
	  	</p>
		<p>
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<input placeholder="ထုတ်လုပ်သော ပစ္စည်းအများအစား"  name="inteviewee">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-left">
	  				<input placeholder="ထုတ်လုပ်နိုင်သည့် အရေအတွက်"  name="interviewwrank">
	  			</div>
	  		</div>
	  	</p>
			  		<div class="row">
		  			<div class="col-sm-12 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">လုပ်ငန်းဖွင့်လှစ်ခြင်း</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-2 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="customRadio1" name="notice" type="radio">
										  <label class="custom-control-label" for="customRadio1">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-2">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="customRadio2" checked="" type="radio" name="notice">
											<label class="custom-control-label" for="customRadio2">မရှိ</label>
										</div>
									</div>
									<div class="col-sm-2"></div>
									<div class="col-sm-5 text-center">
										<input placeholder="ပိတ်ထားပါကနောက်ဆုံးလုပ်ကိုင်ခဲ့သည့်ရက်စွဲ"   name="closedate" id="datepicker" class="datepicker">
		  			
									</div>
								 </div>
						    </div>
						</fieldset> 
		  			</div>
		  				  			
		  		</div>
		<div class='row'>
			<div class="col-sm-12">
				<table style="width:100%">
					<tr>
						<td rowspan="2">ဝင်ငွေအမျိုးအစား</td>
						<td colspan="2">လူကြီး (၁၈နှစ်အထက်)</td>
						<td colspan="2">လူရွယ်(၁၆နှစ်မှ ၁၈နှစ်)</td>
						<td colspan="2">ကလေး(၁၆နှစ်မှ၁၈နှစ်)</td>
						<td colspan="2">စုစုပေါင်း</td>
					</tr>
					<tr>
						<td>ကျား</td>
						<td>မ</td>
						<td>ကျား</td>
						<td>မ</td>
						<td>ကျား</td>
						<td>မ</td>
						<td>ကျား</td>
						<td>မ</td>
					</tr>
					<tr>
						<td>လစား</td>
						<td><input class="col-md-2"type="text" name="menworker"/></td>
						<td><input class="col-md-2"type="text" name="womenworker"/></td>
						<td><input class="col-md-2"type="text" name="amenworker"/></td>
						<td><input class="col-md-2"type="text" name="awomenworker"/></td>
						<td><input class="col-md-2"type="text" name="cmenworker"/></td>
						<td><input class="col-md-2"type="text" name="cwomenworker"/></td>
						<td><input class="col-md-2"type="text" name="totalmen"/></td>
						<td><input class="col-md-2"type="text" name="totalwomen"/></td>
					</tr>
					<tr>
						<td>နေ့စား</td>
						<td><input class="col-md-2"type="text" name="dailymenworker"/></td>
						<td><input class="col-md-2"type="text" name="dailywomenworker"/></td>
						<td><input class="col-md-2"type="text" name="dailyamenworker"/></td>
						<td><input class="col-md-2"type="text" name="dailyawomenworker"/></td>
						<td><input class="col-md-2"type="text" name="dailycmenworker"/></td>
						<td><input class="col-md-2"type="text" name="dailycwomenworker"/></td>
						<td><input class="col-md-2"type="text" name="dailytotalmen"/></td>
						<td><input class="col-md-2"type="text" name="dailytotalwomen"/></td>
					</tr>
					<tr>
						<td>ပုတ်ပြတ်</td>
						<td><input class="col-md-2"type="text" name="piecemenworker"/></td>
						<td><input class="col-md-2"type="text" name="piecewomenworker"/></td>
						<td><input class="col-md-2"type="text" name="pieceamenworker"/></td>
						<td><input class="col-md-2"type="text" name="pieceawomenworker"/></td>
						<td><input class="col-md-2"type="text" name="piececmenworker"/></td>
						<td><input class="col-md-2"type="text" name="piececwomenworker"/></td>
						<td><input class="col-md-2"type="text" name="piecetotalmen"/></td>
						<td><input class="col-md-2"type="text" name="piecetotalwomen"/></td>
					</tr>
					<tr>
						<td>ပုံသေ</td>
						<td><input class="col-md-2"type="text" name="constantmenworker"/></td>
						<td><input class="col-md-2"type="text" name="constantwomenworker"/></td>
						<td><input class="col-md-2"type="text" name="constantamenworker"/></td>
						<td><input class="col-md-2"type="text" name="constantawomenworker"/></td>
						<td><input class="col-md-2"type="text" name="constantcmenworker"/></td>
						<td><input class="col-md-2"type="text" name="constantcwomenworker"/></td>
						<td><input class="col-md-2"type="text" name="constanttotalmen"/></td>
						<td><input class="col-md-2"type="text" name="constanttotalwomen"/></td>
					</tr>
				</table>
			</div>
		</div>	
		<div style="height:2rem"></div>
			
    
  </div>
  <!--End of Step1-->
  <div class="tab">
     <center><h4>အပိုင်း(၂)</h4></center>
  <h4>အလုပ်ချိန်သတ်မှတ်ချက်ဆိုင်ရာ အချက်အလက်များ</h4>
  <!-- For new design-->
			<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">လုပ်ငန်းပိုင်ရှင်ကပေးပို့ရန်နို့တစ်စာပေးပို့ခြင်း </legend>
						    <div class="control-group">
								 <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input class="custom-control-input" id="permission" name="permission" type="radio">
										  <label class="custom-control-label" for="permission">ပြု</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="permission1" checked="" type="radio" name="permission">
											<label class="custom-control-label" for="permission1">မပြု</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  			<div class="col-sm-1"></div>
		  			<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အလုပ်လုပ်ရန်ကာလအပိုင်းအခြားဆိုင်ရာ နို့တစ်စာ ပြသခြင်း</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="SSB" name="SSB" type="radio" value="1">
										  <label class="custom-control-label" for="SSB">ပြု</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="SSB1" checked="" type="radio" name="SSB" value="0">
											<label class="custom-control-label" for="SSB1">မပြု</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  		</div>
	  		</p>
  <!--end of new design-->
  <!-- For new design-->
			<p>
			<div class="row col-sm-5"><b>အလုပ်လုပ်ရန်ကာလအပိုင်းအခြားများ စီစဉ်ထားမှု -နို့တစ်စာအတွင်း </b><br/></div>
		  		<div class="row">				
		  			<div class="col-sm-5 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">
							 အလုပ်လုပ်ချိန်များ၊အနားပေးချိန်၊ရက်သတ္တပတ်အလုပ်ပိတ်ရက်/နားရက်  </legend>
						    <div class="control-group">
								<div class="row">
								 	<div class="col-sm-12 text-center">
								 		<input placeholder="နေ့စွဲ" name="durationwork" id="datepicker1">
									</div>
								</div>
						    </div>
						</fieldset>
		  			</div>
		  			<div class="col-sm-1"></div>
		  			<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">တစ်မျိုးတည်းသောအလုပ်၌ ထပ်နေသောအလှည့်များ</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="SSB" name="SSB" type="radio" value="1">
										  <label class="custom-control-label" for="SSB">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="SSB1" checked="" type="radio" name="SSB" value="0">
											<label class="custom-control-label" for="SSB1">မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  		</div>
	  		</p>
  <!--end of new design-->
  <!-- For new design-->
			<p>
				<div class="row">				
		  			<div class="col-sm-5 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">နို့တစ်စာအပြောင်းအလဲ</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="SSB" name="SSB" type="radio" value="1">
										  <label class="custom-control-label" for="SSB">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="SSB1" checked="" type="radio" name="SSB" value="0">
											<label class="custom-control-label" for="SSB1">မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  			<div class="col-sm-1"></div>
		  			<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">နို့တစ်စာအပြောင်းအလဲ အကြောင်း</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="SSB" name="SSB" type="radio" value="1">
										  <label class="custom-control-label" for="SSB">ကြား</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="SSB1" checked="" type="radio" name="SSB" value="0">
											<label class="custom-control-label" for="SSB1">မကြား</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  		</div>
	  		</p>
  <!--end of new design-->
 <!-- For new design-->
			<p>
				<div class="row">				
		  			<div class="col-sm-12 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">ချိတ်ဆွဲသည့် နို့တစ်စာပါ အလုပ်ချိန်နှင့်အညီ</legend>
						    <div class="control-group">
							    <div class="row">
								 <div class="col-sm-4">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="SSB" name="noticework" type="radio" value="1">
										  <label class="custom-control-label" for="SSB">လုပ်</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="SSB1" checked="" type="radio" name="noticework" value="0">
											<label class="custom-control-label" for="SSB1">မလုပ်</label>
										</div>
									</div>
								 </div>
								 <div class="col-sm-4">
									<input placeholder="နေ့စဉ်"  name="dailyworktime">
								 </div>
								 <div class="col-sm-4">
									<input placeholder="ရက်သတ္တပတ်"  name="weeklyworktime">
								 </div>
								 </div>
								 <div class='row'><div class="col-sm-4">
									<input placeholder="အနားပေးချိန်"  name="resttime">
								 </div>
								 <div class="col-sm-4">
									<input placeholder="ရက်သတ္တပတ်ပိတ်ရက်"  name="weekend">
								 </div>
									
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  			
		  		</div>
	  		</p>
  <!--end of new design-->
	
		<div class="row">
			<div class="col-md-12">
				<div class="row">
				<div class="col-md-7">
					ရက်သတ္တပတ်အလုပ်ပိတ်ရက်(တနင်္ဂနွေနေ့)တွင် လုပ်ကိုင်ခြင်းအတွက် ရှေ့သုံးရက် (သို့) နောက်သုံးရက်တွင် အနားပေးမှု ရှိ/မရှိနှင့် အက်ဥပဒေနှင့်အညီ ရက်စားအနားပေးမှု ရှိ/မရှိ (သို့) အကြောင်းကြားမှုရှိ/မရှိ
				</div>
				<div class="col-md-5">
					<input type="text" name="holidaylaw" class="form-control">
				</div>
				</div>
			</div>
		</div>
		<!-- For new design-->
			<p>
				<div class="row">				
		  			<div class="col-sm-12 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အချိန်ပိုလုပ်ကိုင်ခြင်း</legend>
						    <div class="control-group">
							    <div class="row">
								 <div class="col-sm-6">
								 	<input placeholder="ခွင့်ပြုချက်/ကြိုတင်ခွင့်ပြုချက်ရယူခြင်း"  name="permitot">
								 </div>								
								 <div class="col-sm-6">
									<input placeholder="ခွင့်ပြုချက်နှင့်အညီ လုပ်ကိုင်ခြင်း"  name="dailyworktime">
								 </div>								 
								 </div>
							</div>
							<div style="height:5px"></div>
							<div class="control-group">
								 <div class="row">
								 <div class="col-sm-6">
									<input placeholder="လုပ်ခနှုန်းထား"  name="salaryrate">
								 </div>
								 <div class="col-sm-6">
									<input placeholder="အချိန်ပိုလုပ်ခခြားနားငွေ"  name="diffot">
								 </div>
								 </div>
							</div>
							<div style="height:5px"></div>
							<div class="control-group">
								 <div class="row">
									<div class='col-sm-12'>
									<div class="row">
										<div class="col-sm-4">
										ခွင့်ပြုသည့်နာရီကို ပုံသေနည်းပါတွက်ချက်မှုနှင့် ကိုက်ညီမှု
										</div>
										<div class="col-sm-4">
											<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input"  name="calot" type="radio" value="1">
										  <label class="custom-control-label" for="SSB">ရှိ</label>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input"  name="calot" type="radio" value="1">
										  <label class="custom-control-label" for="">မရှိ</label>
											</div>
										</div>
										</div>
									</div>
								 
									
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  			
		  		</div>
	  		</p>
  <!--end of new design-->
  <!-- For new design-->
			<p>
				<div class="row">				
		  			<div class="col-sm-12 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">တရားမဝင် အချိန်ပိုလုပ်ကိုင်ခြင်း</legend>
						    <div class="control-group">
							    <div class="row">
								 <div class="col-sm-6">
								 	<input placeholder="မည်သူ၏ခွင့်ပြုချက်ဖြင့်လုပ်ကိုင်ခြင်း"  name="whosepermit">
								 </div>								
								 <div class="col-sm-6">
									<input placeholder="လုပ်ကိုင်မှုအခြေအနေ(ကာလ၊နေ့စဉ်/အပတ်စဉ်-နာရီ)"  name="jobsitutation">
								 </div>								 
								 </div>
							</div>
							<div style="height:5px"></div>
							<div class="control-group">
								<div class="row">
								 <div class="col-sm-6">
									<input placeholder="ပေးချေသည့် အချိန်ပိုလုပ်ခနှုန်းထား"  name="paymentot">
								 </div>
								 <div class="col-sm-6">
									<input placeholder="တစ်ရက်တည်းတွင် အလုပ်ရုံ(၂)ရုံ၌လုပ်ကိုင်ခြင်း"  name="twojosday">
								 </div>
								 </div>
							</div>
							<div class="control-group">
								
						    </div>
						</fieldset>
		  			</div>
		  			
		  		</div>
	  		</p>
  <!--end of new design-->
  		<!-- For new design-->
			<p>
				<div class="row">				
		  			<div class="col-sm-12 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">ကလေးအလုပ်သမားများအလုပ်လုပ်ကိုင်ခြင်း-</legend>
						    <div class="control-group">
							    <div class="row">
								 <div class="col-sm-6">
								 	<input placeholder="သတ်မှတ်အလုပ်ချိန်နှင့်အညီ လုပ်ကိုင်ခြင်း"  name="limittimework">
								 </div>								
								 <div class="col-sm-6">
									<input placeholder="ည(၆)နာရီမှ နံနက်(၆)နာရီအတွင်းလုပ်ကိုင်စေခြင်း"  name="stswork">
								 </div>								 
								 </div>						 
								
						    </div>
						</fieldset>
		  			</div>
		  			
		  		</div>
	  		</p>
  <!--end of new design-->   		

  </div>
  <!--End of Step2-->
  <div class="tab">
	<center><h3>အပိုင်း(၃)</h3></center>
	<h3>ခွင့်ခံစားမှုများ</h3>
	<!-- For new design-->
			<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">ရှောင်တခင်ခွင့်(၆)ရက် ခံစားခွင့်</legend>
						    <div class="control-group">
								 <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input class="custom-control-input" id="causal" name="causal" type="radio">
										  <label class="custom-control-label" for="causal">ပေး</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="causal1" checked="" type="radio" name="causal">
											<label class="custom-control-label" for="causal1">မပေး</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  			<div class="col-sm-1"></div>
		  			<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">လုပ်သက်ခွင့်(၁၀)ရက် ခံစားခွင့်</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="annual" name="SSB" type="radio">
										  <label class="custom-control-label" for="SSB">ပေး</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="SSB1" checked="" type="radio" name="SSB">
											<label class="custom-control-label" for="SSB1">မပေး</label>
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
		  			<div class="col-sm-5 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">ဆေးလက်မှတ်ခွင့် ခံစားခွင့်</legend>
						    <div class="control-group">
								 <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input class="custom-control-input" id="medicalleave" name="medicalleave" type="radio">
										  <label class="custom-control-label" for="medicalleave">ပေး</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="medicalleave1" checked="" type="radio" name="medicalleave">
											<label class="custom-control-label" for="medicalleave1">မပေး</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  			<div class="col-sm-1"></div>
		  			<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">မီးဖွားခွင့် ခံစားခွင့်</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="maternityleave" name="maternityleave" type="radio">
										  <label class="custom-control-label" for="maternityleave">ပေး</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="maternityleave1" checked="" type="radio" name="maternityleave">
											<label class="custom-control-label" for="maternityleave1">မပေး</label>
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
		  			<div class="col-sm-5 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အများပြည်သူအလုပ်ပိတ်ရက် ခံစားခွင့်</legend>
						    <div class="control-group">
								 <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input class="custom-control-input" id="publicholiday" name="publicholiday" type="radio">
										  <label class="custom-control-label" for="publicholiday">ပေး</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="publicholiday1" checked="" type="radio" name="publicholiday">
											<label class="custom-control-label" for="publicholiday1">မပေး</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  			<div class="col-sm-1"></div>
		  			<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">ရက်သတ္တပတ်အလုပ်ပိတ်ရက် ခံစားခွင့်</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="weekendholiday" name="weekendholiday" type="radio">
										  <label class="custom-control-label" for="weekendholiday">ပေး</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="weekendholiday1" checked="" type="radio" name="weekendholiday">
											<label class="custom-control-label" for="weekendholiday1">မပေး</label>
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
		  			<div class="col-sm-5 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">ခွင့်မှတ်တမ်း</legend>
						    <div class="control-group">
								 <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input class="custom-control-input" id="leavenote" name="leavenote" type="radio">
										  <label class="custom-control-label" for="leavenote">ထား</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="leavenote1" checked="" type="radio" name="leavenote">
											<label class="custom-control-label" for="leavenote1">မထား</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  		</div>
	  		</p>
  <!--end of new design-->
	<center><h3>အပိုင်း(၄)</h3></center>
	<h3>သက်သာချောင်ချိရေးဆိုင်ရာ အချက်အလက်များ</h3>
	
	<!--start new design-->
		<p>
		  		<div class="row">
		  			<div class="col-sm-12 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">ကိုယ်လက်ဆေးကြောရန် စီမံထားရှိခြင်း</legend>
						    <div class="control-group">
								 <div class="row">
								 	<div class="col-sm-4">
								 		<input placeholder="အမျိုးအမည်"  name="wcategory">
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input placeholder="အရေအတွက်"  name="wquantity">
										</div>
									</div>
									<div class="col-sm-4">
										<div class='row'><label>အသုံးပြုနိုင်မှုအခြေအနေ</label></div>
										<div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="wuseful" name="wuseful" type="radio">
										  <label class="custom-control-label" for="wuseful">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="wuseful1" checked="" type="radio" name="wuseful">
											<label class="custom-control-label" for="wuseful1">မကောင်း</label>
										</div>
									</div>
								 </div>
						    </div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  		
		  		</div>
	  		</p>
	<!--end new design-->
	<!--start new design-->
		<p>
		  		<div class="row">
		  			<div class="col-sm-12 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">ထိုင်ခွင့်ကြုံက ထိုင်နိုင်ရန် စီမံထားရှိခြင်း</legend>
						    <div class="control-group">
								 <div class="row">
								 	<div class="col-sm-4">
								 		<input placeholder="အမျိုးအမည်"  name="scategory">
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input placeholder="အရေအတွက်"  name="squantity">
										</div>
									</div>
									<div class="col-sm-4">
										<div class='row'><label>အသုံးပြုနိုင်မှုအခြေအနေ</label></div>
										<div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="suseful" name="suseful" type="radio">
										  <label class="custom-control-label" for="suseful">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="suseful1" checked="" type="radio" name="suseful">
											<label class="custom-control-label" for="suseful1">မကောင်း</label>
										</div>
									</div>
								 </div>
						    </div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  		
		  		</div>
	  		</p>
	<!--end new design-->
	<!--start new design-->
			  		<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">သူနာပြုဆေးသေတ္တာ၊ သူနာပြုဆေးခန်း၊ ဆေးပေးရုံထားရှိခြင်းအခြေအနေ</legend>
						    <div class="control-group">
								 <div class="row">
								 	<div class="col-sm-6 text-center">
										<select name="medicalcaretype">
											<option value="1">သူနာပြုဆေးသေတ္တာ</option>
											<option value="2">သူနာပြုဆေးခန်း</option>
											<option value="3">ဆေးပေးရုံ </option>
										</select>
									</div>
									<div class="col-sm-6">
										
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  			<div class="col-sm-1"></div>
		  			<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">ကလေးထိန်းခန်းရှိခြင်း အခြေအနေ(မိခင်လုပ်သား ၁၀၀ဦးနှင့်အထက်ရှိ လုပ်ငန်းများ)</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="babysittingroom" name="babysittingroom" type="radio">
										  <label class="custom-control-label" for="babysittingroom">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="babysittingroom1" checked="" type="radio" name="babysittingroom">
											<label class="custom-control-label" for="babysittingroom1">မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  		</div>
	  		</p>
	<!--end new design-->
		<!--start new design-->
			  		<p>
		  		<div class="row">
		  			<div class="col-sm-12 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အလုပ်နားခန်းနှင့်အစာစားခန်းများထားရှိခြင်း အခြေအနေ (အလုပ်သမား ၁၀၀ နှင့်အထက်ရှိ လုပ်ငန်းများ)</legend>
						    <div class="control-group">
								 <div class="row">
								 	<div class="col-sm-12 text-center">
										<input type="text"  name="Working&DinningRomm" >
									</div>
									
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  			
		  		</div>
	  		</p>
	<!--end new design-->

  </div>
  <!--End of Step3and4-->
   <div class="tab">
	<center><h3>အပိုင်း(၅)</h3></center>
	<h3>အပ်နှင်းထားသော အချက်အလက်များ</h3>
	<p>
		  		<div class="row">
		  			<div class="col-sm-12 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">သောက်ရေ</legend>
							<div class="row">
								<div class="col-sm-6">
									<div class="control-group">
									
								 		<input placeholder="တည်နေရာ"  name="wplace">
									</div>
								</div>
									<div class="col-sm-6">
										<div class="control-group">
											<input placeholder="သောက်ရေသန့်ရှင်းမှု"  name="wcleaness">
										
									</div>
									</div>
							</div>
							<div style="height:10px"></div>
							<div class="row">
								
									<div class="col-sm-6">
									
								 	<div class='row'><label>လုံလောက်မှု(အိုး/ရေပမာဏ)</label></div>
										<div class="control-group">
							    <div class="row">
								 	<div class="col-sm-3 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="W_Sufficient" name="W_Sufficient" type="radio">
										  <label class="custom-control-label" for="W_Sufficient">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="W_Sufficient1" checked="" type="radio" name="W_Sufficient">
											<label class="custom-control-label" for="W_Sufficient1">မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
							
									</div>
									<div class="col-sm-6">
										<div class='row'><label>နွေရာသီတွင် အေးမြအောင်ဆောင်ရွက်ပေးမှု</label></div>
										<div class="control-group">
							    <div class="row">
								 	<div class="col-sm-3 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="CoolingSupply" name="CoolingSupply" value="1" type="radio">
										  <label class="custom-control-label" for="CoolingSupply">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="CoolingSupply1" checked="" type="radio" value="0"name="CoolingSupply">
											<label class="custom-control-label" for="CoolingSupply1">မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
										
									</div>
									</div>
							</div>
						 </fieldset>
		  			</div>  		
		  		
	  		</p>
	<!--end new design-->
	<p>
		  		<div class="row">
		  			<div class="col-sm-12 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အိမ်သာ</legend>
							<div class="row">
								<div class="col-sm-6">
									<div class="control-group">
									
								 		<input placeholder="အမျိုးအစား"  name="tcategory">
									</div>
								</div>
									<div class="col-sm-6">
										<div class="row">
											<div class="col-sm-4">
											<div class='row'><label style="padding-left:1.5rem">တည်နေရာနှင့်လုံခြုံမှု</label></div>
										<div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="tpands" name="tpands" type="radio">
										  <label class="custom-control-label" for="tpands">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="tpands1" checked="" type="radio" name="tpands">
											<label class="custom-control-label" for="tpands">မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
											</div>
											<div class="col-sm-4">
												<div class='row'><label style="padding-left:1.5rem">သန့်ရှင်းမှု </label></div>
										<div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="tcleaness" name="tcleaness" value='1'type="radio">
										  <label class="custom-control-label" for="tcleaness">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="tcleaness1" checked="" type="radio" value='0' name="tcleaness">
											<label class="custom-control-label" for="tcleaness1">မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
											</div>
											<div class="col-sm-4">
												<div class='row'><label style="padding-left:1.5rem">ကျား/မခွဲခြားမှု</label></div>
										<div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="tgender" name="tgender" value='1' type="radio">
										  <label class="custom-control-label" for="tgender">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="tgender1" checked="" value='0'type="radio" name="tgender">
											<label class="custom-control-label" for="tgender1">မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
											</div>
										</div>
									</div>
							</div>
							<div style="height:10px"></div>
							<div class="row">
								
									<div class="col-sm-6">
									
								 	
										<div class="control-group">
											<input type="text" placeholder="အခန်းအရေအတွက်" class="form-control" name="tQuantity"/>
										</div>
							
									</div>
									<div class="col-sm-6">
										<div class="row">
											<div class="col-sm-3">
												<input type="text" placeholder="ကျားအိမ်သာ" class="form-control" name="tmale"/>
											</div>
									<div class="col-sm-3">
										<input type="text" placeholder="မအိမ်သာ" class="form-control" name="tfemale"/>
									</div>
								 </div>
						    </div>
										
									</div>
									</div>
						
						 </fieldset>
		  			</div>  		
		  		
	  		</p>
	<!--end new design-->
			<p>
		  		<div class="row">
		  			<div class="col-sm-12 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">မတော်တဆထိခိုက်မှုရှိ/မရှိနှင့်အစီရင်ခံစာပေးပို့ခြင်း</legend>
							<div class="row">
								<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="AccidentCase" name="AccidentCase" value="1"type="radio">
										  <label class="custom-control-label" for="AccidentCase">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="AccidentCase1" checked="" type="radio" name="AccidentCase" value="0">
											<label class="custom-control-label" for="AccidentCase">မရှိ</label>
										</div>
									</div>
								 </div>
						    
						
						</fieldset>
		  			</div> 
				</div>					
		  		
	  		</p>
	<!--end new design-->

	<center><h3>အပိုင်း(၆)</h3></center>
	<h3>အခကြေးငွေပေးချေမှုဆိုင်ရာ အချက်အလက်များ</h3>
	<p>
		<fieldset class="scheduler-border">
			<legend class="scheduler-border">ပေးချေရန်သတ်မှတ်ထားသည့်ကာလအပိုင်းအခြားနှင့်ပေးချေသည့်နေ့ရက်</legend>
		  		<div class="row">
		  			<div class="col-sm-12 text-center">
		  				
						    <div class='row'>
								<div class="col-sm-6">
									<div class="form-group">
										<div class="row">
											<div class="col-md-4">
												<label for="address">လခစား</label>
											</div>
											<div class="col-md-8">							
												<select name="MPayDay">
													<option value="1">လဆန်း၅ရက်</option>
													<option value="2">လကုန်ရက်</option>
												</select>
											</div>
										</div>					
									</div>
									
								</div>
								
								<div class="col-sm-6">
									<div class="form-group">
										<div class="row">
											<div class="col-md-4">
												<label for="address">နေ့စား</label>
											</div>
											<div class="col-md-8">							
												<select name="MPayDay">
													<option value="1">လဆန်း၅ရက်</option>
													<option value="2">လကုန်ရက်</option>
												</select>
											</div>
										</div>					
									</div>
								</div>
							</div>
						</div>
		  		</div>
					<div class="row">
		  			<div class="col-sm-12 text-center">
		  				
						    <div class='row'>
								<div class="col-sm-6">
									<div class="form-group">
										<div class="row">
											<div class="col-md-4">
												<label for="address">ပုတ်ပြတ်</label>
											</div>
											<div class="col-md-8">							
												<select name="pPayDay">
													<option value="1">လဆန်း၅ရက်</option>
													<option value="2">လကုန်ရက်</option>
												</select>
											</div>
										</div>					
									</div>
									
								</div>
								
								<div class="col-sm-6">
									<div class="form-group">
										<div class="row">
											<div class="col-md-4">
												<label for="address">ပုံသေ</label>
											</div>
											<div class="col-md-8">							
												<select name="cPayDay">
													<option value="1">လဆန်း၅ရက်</option>
													<option value="2">လကုန်ရက်</option>
												</select>
											</div>
										</div>					
									</div>
								</div>
							</div>
						</div>
		  		</div>
			</fieldset>
		  			
	  		</p>
	<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<input placeholder="အချိန်ပိုလုပ်ခပေးချေရန်အစီအစဉ်"  name="OTPlan">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-left">
	  				<input placeholder="အချိန်ပိုလုပ်ခပေးချေမှု"  name="OTPayment">
	  			</div>
	</div>
		<p>
		<fieldset class="scheduler-border">
			<legend class="scheduler-border">အခြေခံလုပ်ခအပြင် အခြားပေးချေငွေများနှင့် စည်းကမ်းချက်များ</legend>
		  		<div class="row">
		  			<div class="col-sm-12 text-center">
		  				
						    <div class='row'>
								<div class="col-sm-6">
									<div class="form-group">
										<div class="row">
											<div class="col-sm-12">
												<label for="address">ကျွမ်းကျင်ကြေး</label>
											</div>
										</div>
											<div class="col-sm-12">							
												<div class="row">
													<div class="col-sm-6">
														<input type="text"placeholder="အနည်းဆုံး" name="miniexpert"/>
													</div>
													<div class="col-sm-6">
														<input type="text"placeholder="အများဆုံး" name="maxexpert"/>
													</div>
												</div>
											</div>
										</div>					
									</div>
									
							<div class="col-sm-6">
									<div class="form-group">
										<div class="row">
											<div class="col-sm-12">
												<label for="address">ရက်မှန်ကြေး</label>
											</div>
										</div>
											<div class="col-sm-12">							
												<div class="row">
													<div class="col-sm-6">
														<input type="text"placeholder="အနည်းဆုံး" name="miniregularfee"/>
													</div>
													<div class="col-sm-6">
														<input type="text"placeholder="အများဆုံး" name="maxregularfee"/>
													</div>
												</div>
											</div>
										</div>					
									</div>
							</div>
						</div>
		  		</div>
					<div class="row">
		  			<div class="col-sm-12 text-center">
		  				
						    <div class='row'>
								<div class="col-sm-12">
									<div class="form-group">
										<div class="row">
											<div class="col-md-4">
												<label for="address">အထည်ကြေး/ထုတ်လုပ်မှုဆုကြေး</label>
											</div>
											<div class="col-md-4">							
												<input type="text"placeholder="အနည်းဆုံး" name="miniproduceprice"/>
											</div>
											<div class="col-md-4">							
												<input type="text"placeholder="အများဆုံး" name="maxproduceprice"/>
											</div>
										</div>					
									</div>
									
								</div>
								
								
							</div>
						</div>
		  		</div>
			</fieldset>
		  			
	  		</p>
			<p>
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<input placeholder="ဖြတ်တောက်ငွေများ"  name="deduction">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-left">
	  				<input placeholder="ဒဏ်တပ်ရန်ထားရှိသော စည်းကမ်းချက်များ (အတည်ပြုချက် ရှိ/မရှိ အပါအဝင်)"  name="interviewwrank">
	  			</div>
	  		</div>
	  	</p>
	<p>
		<fieldset class="scheduler-border">
			<legend class="scheduler-border">တရားမဝင် ဖြတ်တောက်မှုများ/မပေးချေရသေးမှုများ</legend>
		  		<div class="row">
		  			<div class="col-sm-12 text-center">
		  				
						    <div class='row'>
								<div class="col-sm-4">
									<div class="form-group">
										
										<input type="text"placeholder="ကာလ" name="duration"/>
									</div>
													
								</div>
											
										
							<div class="col-sm-4">
									<div class="form-group">
										<input type="text"placeholder="လုပ်သားအရေအတွက်" name="workeramount"/>
									</div>
															
							</div>
							<div class="col-sm-4">
									<div class="form-group">
										<input type="text"placeholder="သင့်ငွေ" name="balancemoney"/>
													
									</div>
							</div>					
									
							</div>
						</div>
		  		</div>
					
			</fieldset>
		  			
	  		</p>
		
	
	
	
  </div>
  <!--End of Step5and6-->
  <div class="tab">
	<center><h3>အပိုင်း(၇)</h3></center>
	<h3>မှတ်တမ်းစာအုပ်များနှင့် မှတ်တမ်းများ</h3>
	<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အလုပ်သမားမှတ်ပုံတင်စာအုပ်</legend>
						    <div class="control-group">
								 <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input class="custom-control-input" id="customRadio" name="workerregbook" value="1" type="radio">
										  <label class="custom-control-label" for="customRadio">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="customRadio0" checked="" value="0"type="radio" name="workerregbook">
											<label class="custom-control-label" for="customRadio0">မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  			<div class="col-sm-1"></div>
		  			<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">ကလေးအလုပ်သမားမှတ်ပုံတင်စာအုပ်</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input class="custom-control-input" id="customRadio" name="workerregbook" value="1" type="radio">
										  <label class="custom-control-label" for="customRadio">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="customRadio0" checked="" value="0"type="radio" name="workerregbook">
											<label class="custom-control-label" for="customRadio0">မရှိ</label>
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
		  			<div class="col-sm-5 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အထွေထွေမှတ်ပုံတင်စာအုပ်</legend>
						    <div class="control-group">
								 <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input class="custom-control-input" id="customRadio" name="generalbook" value="1" type="radio">
										  <label class="custom-control-label" for="customRadio">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="customRadio0" checked="" value="0"type="radio" name="generalbook">
											<label class="custom-control-label" for="customRadio0">မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  			<div class="col-sm-1"></div>
		  			<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အလုပ်သမားနေ့စဉ်အလုပ်တက်/ဆင်း မှတ်တမ်း</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input class="custom-control-input" id="customRadio" name="dailyofficenote" value="1" type="radio">
										  <label class="custom-control-label" for="customRadio">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="customRadio0" checked="" value="0"type="radio" name="dailyofficenote">
											<label class="custom-control-label" for="customRadio0">မရှိ</label>
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
		  			<div class="col-sm-5 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အချိန်ပိုလုပ်ကိုင်ခြင်း မှတ်တမ်း</legend>
						    <div class="control-group">
								 <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input class="custom-control-input" id="customRadio" name="otnote" value="1" type="radio">
										  <label class="custom-control-label" for="customRadio">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="customRadio0" checked="" value="0"type="radio" name="otnote">
											<label class="custom-control-label" for="customRadio0">မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  			<div class="col-sm-1"></div>
		  			<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အချိန်ပို ငွေကြေးခံစားခွင့်ပြုသည့်မှတ်တမ်း</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input class="custom-control-input" id="customRadio" name="otpaynote" value="1" type="radio">
										  <label class="custom-control-label" for="customRadio">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="customRadio0" checked="" value="0"type="radio" name="otpaynote">
											<label class="custom-control-label" for="customRadio0">မရှိ</label>
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
		  	<div class="col-sm-5 text-center">
		  		<fieldset class="scheduler-border">
					<legend class="scheduler-border">လုပ်ခပေးချေခြင်း မှတ်တမ်း</legend>
						<div class="control-group">
								 <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input class="custom-control-input" id="customRadio" name="paymentnote" value="1" type="radio">
										  <label class="custom-control-label" for="customRadio">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="customRadio0" checked="" value="0"type="radio" name="paymentnote">
											<label class="custom-control-label" for="customRadio0">မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  			<div class="col-sm-1"></div>
		  			<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အခကြေးငွေမှနှုတ်ယူဖြတ်တောက်သည့်ငွေများ အသုံးပြုမှုမှတ်တမ်း</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input class="custom-control-input" id="customRadio" name="deductionusenote" value="1" type="radio">
										  <label class="custom-control-label" for="customRadio">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="customRadio0" checked="" value="0"type="radio" name="deductionusenote">
											<label class="custom-control-label" for="customRadio0">မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  		</div>
	</p>
	
	

		
		

	<center><h3>အပိုင်း(၈)</h3></center>
	<h3>ညွှန်ကြားရန်အချက်များ (မူကြမ်း)</h3>
	
	
	
  </div>
  
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">ရှေ့တစ်မျက်နှာ</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">နောက်တစ်မျက်နှာ</button>
    </div>
  </div>
  
</form>
<!-- scroll back to top of the page -->
<a id="back2Top" title="Back to top" href="#">&#10148;</a>

  
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
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("inspectform").submit();
    return true;
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
  </script>
@endsection