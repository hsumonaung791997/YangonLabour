@extends('layouts.admin')
@section('content')
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
	<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="{{asset('assets/js/common.js')}}"></script>
<script type='text/javascript'>
$(function(){
$('#datepicker').datepicker({
    calendarWeeks: true,
    todayHighlight: true,
    autoclose: true
});  
});
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
	<h1>လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေးနှင့်ကျန်းမာရေးစစ်ဆေးချက်ပုံစံ</h1>
		<br>
		<p>
			<div class="row">
				<div class="col-sm-1">
					
				</div>
				<div class="col-sm-5 text-center">
					<input type="text" name="factoryname" id="factoryname" class="form-control" placeholder="အလုပ်ရုံ၊ စက်ရုံ အမည်" />
					
					<div id="factoryList">
					</div>
				</div>
				<div class="col-sm-2">
					<button id="search">ရှာရန်</button>
				</div>
			</div>
		</p> 

	<form id="regForm"class="form-background" action="{{ route('FactoryInspectionSafety.store')}}" method="post">
	 {{csrf_field()}}
		<!-- Circles which indicates the steps of the form: -->
		<div class="row">
				<div class="col-sm-12 text-right">
					  <button  id="tempoarySave">ယာယီသိမ်းဆည်းမည် </button>
					  <input type="hidden" name="tempoary" id="tempoary">
				</div>
		  </div>
		  <div class="row">
			<div class="col-sm-12 text-left">
				<p style="font-weight:bold;">မှတ်ချက်။	။"<font style="color:red;">*</font>" ပြထားသောနေရာများသည် မဖြစ်မနေထည့်သွင်းပေးရမည့် အချက်အလက်များဖြစ်ပါသည်။</p>
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
	  <h3>အကြောင်းအရာ</h3>

	  {{-- township id get --}}
	  <input type="hidden" name="township_id" id="township_id" value="{{old('township_id')}}">
	  {{--  --}}

		{{-- <p>
				<div class="row">
						<div class="col-sm-6">
							<select name="inspection_type">
								<option>ပထမအကြိမ်</option>
								<option>ထပ်မံ</option>
								<option>တိုင်ကြားစာအရ</option>
							</select>
						</div>
						<div class="col-sm-6">		
								<label for="datepicker">စစ်ဆေးခဲ့သည့်နေ့စွဲနှင့်အချိန်</label>					
								<input type='datetime-local' id="inspection_datetime" name="inspection_datetime"/>
						</div>
							
					</div>
		</p> --}}
		
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
					  <label for="factoryname">အလုပ်ရုံအမည် </label>
	  				<input id="FactoryName" class="form-control" name="factoryname" value="{{old('factoryname')}}">
	  				<input type="hidden" name="factoryid" id="factoryid">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<!-- <div class="col-sm-6 text-center">
					  <label for="FactoryAddress"> တည်နေရာ</label>
	  				<input name="factoryregion" id="FactoryAddress" class="form-control" value="{{old('factoryregion')}}">
	  			</div> -->
	  		</div>
	  		<!-- <div class="row">
	  			<div class="col-sm-5 text-center">
					  <label for="ownername">အလုပ်ရုံပိုင်ရှင်အမည် </label>
	  				  <input id="ownername"  name="ownername" class="form-control" value="{{old('ownername')}}">
	  			</div>
	  			<div class="col-sm-1">

	  			</div> -->
	  			<!-- <div class="col-sm-6 text-center">
					  <label for="owneraddress">အလုပ်ရုံပိုင်ရှင်နေရပ်</label>
	  				<input id="owneraddress"  name="owneraddress" class="form-control" value="{{old('owneraddress')}}">
	  			</div> 
	  		</div>-->
	  		<!-- <div class="row">
	  			<div class="col-sm-5 text-center">
					  <label for="factoryOwnerNrc">မှတ်ပုံတင်လုပ်ငန်းပိုင်ရှင် အမည် </label>
	  				<input id="factoryOwnerNrc" class="form-control" name="factoryOwnerNrc" value="{{old('factoryOwnerNrc')}}">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
					  <label for="factoryOwnerAddress"> မှတ်ပုံတင်လုပ်ငန်းပိုင်ရှင် နေရပ်</label>
	  				<input id="factoryOwnerAddress" class="form-control" name="factoryOwnerAddress" value="{{old('factoryOwnerAddress')}}">
	  			</div>
	  		</div> -->
	  		<!-- <div class="row">
	  			<div class="col-sm-5 text-center">
					  <label for="intervieweeName">တာဝန်ခံဖြေဆိုသူအမည် </label>
	  				<input id="intervieweeName" class="form-control" name="intervieweeName" value="{{old('intervieweeName')}}">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
					  <label for="intervieweeAddress">တာဝန်ခံဖြေဆိုသူနေရပ်</label>
	  				<input id="intervieweeAddress" class="form-control" name="intervieweeAddress" value="{{old('intervieweeAddress')}}">
	  			</div>
	  		</div> -->
	  		<!-- <div class="row">
	  			<div class="col-sm-5 text-center">
					  <label for="energytype">အားအမျိုးအစား</label>
	  				<input id="energytype" class="form-control" name="energytype" value="{{old('energytype')}}">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
					  <label for="horsepower">မြင်းကောင်ရေ</label>
	  				<input id="horsepower" class="form-control" name="horsepower" value="{{old('horsepower')}}">
	  			</div>
	  		</div>
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
					  <label for="producedProduct">ထုတ်လုပ်သည့် ပစ္စည်း</label>
	  				<input id="producedProduct" class="form-control" name="producedProduct" value="{{old('producedProduct')}}">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
					  <label for="producedPower">ထုတ်လုပ်နိုင် စွမ်းအား</label>
	  				<input id="producedPower" class="form-control" name="producedPower" value="{{old('producedPower')}}">
	  			</div>
	  		</div> -->
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
					  <label for="workType">လုပ်ငန်းအမျိုးအစား</label>
	  				<input id="workType" class="form-control" name="workType" value="{{old('workType')}}">
					  <!-- <input type="hidden" name="factoryid" id="factoryid"> -->
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
					  <label for="workTime">အလုပ်ချိန်</label>
	  				  <input id="workTime" class="form-control" name="workTime" value="{{old('workTime')}}">
	  			</div>
	  		</div>
			  <div class="blank10"></div>
	  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အလုပ်သမားဦးရေ</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<input type="text" placeholder="ကျား" name="menworker" value="{{old('menworker')}}" id="menworker" class="form-control" onkeyup="converunistring()"/>
									</div>
									<div class="col-sm-4 text-center">
								 		<input type="text" placeholder="မ" name="womenworker"  value="{{old('womenworker')}}" id="womenworker" class="form-control" onkeyup="converunistring()"/>
									</div>
									<div class="col-sm-4 text-center">
								 		<input type="text" placeholder="စုစုပေါင်း" name="totalworker" value="{{old('totalworker')}}" id="totalworker" class="form-control" />
									</div>
								</div>
							</div>
						</fieldset> 
		  			</div>
					<div class="col-sm-1"></div>
					<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">ကလေးနှင့်လူရွယ်များကို အလုပ်လုပ်ရန် သင့်လျော်ကြောင်း တာဝန်ခံဆေးလက်မှတ် ထုတ်ပေးထားမှု</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="medicalticket" name="medicalticket" type="radio" value="ရှိ" checked>
										  <label class="custom-control-label" for="medicalticket">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="medicalticket1"  type="radio" name="medicalticket" value="မရှိ" @if(old('medicalticket')=='မရှိ') checked @endif>
											<label class="custom-control-label" for="medicalticket1">မရှိ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset> 
		  			</div>
		  				  			
		  		</div>
				  
	  </div> 
	  <div class="tab">
	  <h3>လုပ်ငန်းခွင်ကျန်းမာရေး</h3>
	  		<p>
				<div class="row">				
		  			<div class="col-sm-4 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">လုပ်ငန်းခွင်သပ်ရပ်သန့်ရှင်းမှု</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="workclean" name="workclean" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="workclean">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="workclean1"  type="radio" name="workclean" value="သင့်" @if(old('workclean')=='သင့်') checked @endif>
											<label class="custom-control-label" for="workclean1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="workclean2"  type="radio" name="workclean" value="ညံ့" @if(old('workclean')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="workclean2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  			
		  			<div class="col-sm-4 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">ရေမြောင်းများစီးဆင်းမှု</legend>
								  <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="drainflow" name="drainflow" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="drainflow">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="drainflow1"  type="radio" name="drainflow" value="သင့်"  @if(old('drainflow')=='သင့်') checked @endif>
											<label class="custom-control-label" for="drainflow1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="drainflow2"  type="radio" name="drainflow" value="ညံ့" @if(old('drainflow')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="drainflow2">ညံ့</label>
										</div>
									</div>
								 </div>
								
						    </div>
						</fieldset>
		  			</div>
					<div class="col-sm-4 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အလုပ်ခန်များအားဆေးသုတ်ထားမှု</legend>
								  <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="employmentPaint" name="employmentPaint" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="employmentPaint">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="employmentPaint1"  type="radio" name="employmentPaint" value="သင့်" @if(old('employmentPaint')=='သင့်') checked @endif>
											<label class="custom-control-label" for="employmentPaint1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="employmentPaint2" type="radio" name="employmentPaint" value="ညံ့" @if(old('employmentPaint')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="employmentPaint2">ညံ့</label>
										</div>
									</div>
								 </div>
								
						    </div>
						</fieldset>
		  			</div>
		  		</div>
	  		
			<p>
			
			<textarea name="workenvironment" rows="4" class="col-sm-12 form-control" placeholder="တွေ့ရှိချက်">{{old('workenvironment')}}</textarea>
			
			</p>
		
				<div class="row">				
		  			<div class="col-sm-4 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">လေဝင်လေထွက်ကောင်းမွန်မှု</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="aircondition" name="aircondition" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="aircondition">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="aircondition1"  type="radio" name="aircondition" value="သင့်" @if(old('aircondition')=='သင့်') checked @endif>
											<label class="custom-control-label" for="air1condition">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="aircondition2"  type="radio" name="aircondition" value="ညံ့" @if(old('aircondition')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="aircondition2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  			
		  			<div class="col-sm-4 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အပူအအေးမျှတမှု</legend>
								  <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="weather" name="weather" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="weather">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="weather1"  type="radio" name="weather" value="သင့်" @if(old('weather')=='သင့်') checked @endif>
											<label class="custom-control-label" for="weather1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="weather2"  type="radio" name="weather" value="ညံ့" @if(old('weather')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="weather2">ညံ့</label>
										</div>
									</div>
								 </div>
								
						    </div>
						</fieldset>
		  			</div>
					<div class="col-sm-4 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အမှုန်အမွှား၊ အခိုးအငွေ့များအခြေအနေ</legend>
								  <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="particals" name="particals" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="particals">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="particals1" type="radio" name="particals" value="သင့်" @if(old('particals')=='သင့်') checked @endif>
											<label class="custom-control-label" for="particals1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="particals2"  type="radio" name="particals" value="ညံ့" @if(old('particals')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="particals2">ညံ့</label>
										</div>
									</div>
								 </div>
								
						    </div>
						</fieldset>
		  			</div>
		  		</div>
	  		
			<p>
			
			<textarea name="accomodation" rows="4" class="col-sm-12 form-control" placeholder="တွေ့ရှိချက်">{{old('accomodation')}}</textarea>
			
			</p>
	  	
				<div class="row">				
		  			<div class="col-sm-12 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အလုပ်ခန်းများတွင်လူကြပ်တည်းမှု</legend>
						      <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="populationstatus" name="populationstatus" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="populationstatus">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="populationstatus1"  type="radio" name="populationstatus" value="သင့်"  @if(old('populationstatus')=='သင့်') checked @endif>
											<label class="custom-control-label" for="populationstatus1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="populationstatus2"  type="radio" name="populationstatus" value="ညံ့" @if(old('populationstatus')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="populationstatus2">ညံ့</label>
										</div>
									</div>
								 </div>
								
						    </div>
							<div class="control-group">
							    <div class="row">
								 	<div class="col-sm-12 text-center">
									 <textarea rows="5" name="population" placeholder="တွေ့ရှိချက်" class="col-sm-12 form-control">{{old('population')}}</textarea>
									</div>
								
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  		
		  		</div>
	  		
				<div class="row">				
		  			<div class="col-sm-6 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">သဘာဝနှင့်ဖန်တီးထားသော အလင်းရောင်စီမံထားမှု</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="nature" name="nature" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="nature">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="nature1"  type="radio" name="nature" value="သင့်" @if(old('nature')=='သင့်') checked @endif>
											<label class="custom-control-label" for="nature1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="nature2" checked="" type="radio" name="nature" value="ညံ့" @if(old('nature')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="nature2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  			
		  			<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">စူးရှသောအလင်းရောင်များမှ မျက်စိကိုကာကွယ်ပေးမှု</legend>
								  <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="sunlight" name="sunlight" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="sunlight">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="sunlight1"  type="radio" name="sunlight" value="သင့်" @if(old('sunlight')=='သင့်') checked @endif>
											<label class="custom-control-label" for="sunlight1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="sunlight2"  type="radio" name="sunlight" value="ညံ့" @if(old('sunlight')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="sunlight2">ညံ့</label>
										</div>
									</div>
								 </div>
								
						    </div>
						</fieldset>
		  			</div>
					
		  		</div>
	  		
			<p>
			
			<textarea name="natureandlight" rows="4" class="col-sm-12 form-control" placeholder="တွေ့ရှိချက်">{{old('natureandlight')}}</textarea>
			
			</p>
			
				<div class="row">				
		  			<div class="col-sm-12 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">သောက်ရေစီမံထားရှိမှု (သန့်ရှင်းစင်ကြယ်မှု၊လုံလောက်မှု)</legend>
						      <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="drinkingwater" name="drinkingwater" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="drinkingwater">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="drinkingwater1"  type="radio" name="drinkingwater" value="သင့်" @if(old('drinkingwater')=='သင့်') checked @endif>
											<label class="custom-control-label" for="drinkingwater1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="drinkingwater2"  type="radio" name="drinkingwater" value="ညံ့" @if(old('drinkingwater')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="drinkingwater2">ညံ့</label>
										</div>
									</div>
								 </div>
								
						    </div>
							<div class="control-group">
							    <div class="row">
								 	<div class="col-sm-12 text-center">
									 <textarea rows="5" name="drinkingwatermana" placeholder="တွေ့ရှိချက်" class="col-sm-12 form-control">{{old('drinkingwatermana')}}</textarea>
									</div>
								
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  		
		  		</div>
	  		
				<div class="row">				
		  			<div class="col-sm-6 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အိမ်သာများစီမံထားရှိမှု</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="toilet" name="toilet" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="toilet">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="toilet1"  type="radio" name="toilet" value="သင့်" @if(old('toilet')=='သင့်') checked @endif>
											<label class="custom-control-label" for="toilet1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="toilet2" checked="" type="radio" name="toilet" value="ညံ့" @if(old('toilet')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="toilet2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  			
		  			<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အိမ်သာအမျိုးအစား</legend>
								  <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="toiletType" name="toiletType" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="toiletType">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="toiletType1"  type="radio" name="toiletType" value="သင့်" @if(old('toiletType')=='သင့်') checked @endif>
											<label class="custom-control-label" for="toiletType1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="toiletType2"  type="radio" name="toiletType2" value="ညံ့" @if(old('toiletType')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="toiletType2">ညံ့</label>
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
						    <legend class="scheduler-border">ကျား/မခွဲခြားမှု</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="genderdivide" name="genderdivide" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="genderdivide">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="genderdivide1"  type="radio" name="genderdivide" value="သင့်" @if(old('genderdivide')=='သင့်') checked @endif>
											<label class="custom-control-label" for="genderdivide1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="genderdivide2"  type="radio" name="genderdivide" value="ညံ့" @if(old('genderdivide')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="genderdivide2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  			
		  			<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အရေအတွက်</legend>
								  <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="toiletquantity" name="toiletquantity" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="toiletquantity">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="toiletquantity1"  type="radio" name="toiletquantity" value="သင့်" @if(old('toiletquantity')=='သင့်') checked @endif>
											<label class="custom-control-label" for="toiletquantity1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="toiletquantity2"  type="radio" name="toiletquantity" value="ညံ့" @if(old('toiletquantity')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="toiletquantity2">ညံ့</label>
										</div>
									</div>
								 </div>
								
						    </div>
						</fieldset>
		  			</div>
				</div>
			<p>
			
			<textarea name="tioletfinding" rows="4" class="col-sm-12 form-control" placeholder="တွေ့ရှိချက်">{{old('tioletfinding')}}</textarea>
			
			</p>
				<div class="row">				
		  			<div class="col-sm-12 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">ဆူညံသံထွက်ရှိမှုနှင့် ကာကွယ်ထားမှု</legend>
						      <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="noiseprotect" name="noiseprotect" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="noiseprotect">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="noiseprotect1"  type="radio" name="noiseprotect" value="သင့်" @if(old('noiseprotect')=='သင့်') checked @endif>
											<label class="custom-control-label" for="noiseprotect1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="noiseprotect2"  type="radio" name="noiseprotect" value="ညံ့" @if(old('noiseprotect')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="noiseprotect2">ညံ့</label>
										</div>
									</div>
								 </div>
								
						    </div>
							<div class="control-group">
							    <div class="row">
								 	<div class="col-sm-12 text-center">
									 <textarea rows="5" name="noiceprotection" placeholder="တွေ့ရှိချက်" class="col-sm-12 form-control">{{old('noiceprotection')}}</textarea>
									</div>
								
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  		
		  		</div>
	  </div>
	  <div class="tab"><!-- စက်ရုံနှင့်ပတ်သက်သော အချက်အလက်များ <br> -->
	  <h3>လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေး</h3>
				<div class="row">				
		  			<div class="col-sm-6 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အန္တရာယ်ရှိစက်ကိရိယာအစိတ်အပိုင်းများအားကာရံထားရှိမှု</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="dangerprotect" name="dangerprotect" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="dangerprotect">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="dangerprotect1" type="radio" name="dangerprotect" value="သင့်" @if(old('dangerprotect')=='သင့်') checked @endif>
											<label class="custom-control-label" for="dangerprotect1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="dangerprotect2"  type="radio" name="dangerprotect" value="ညံ့" @if(old('dangerprotect')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="dangerprotect2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
							<div class="control-group">
								<div class="row">
								<textarea class="col-sm-12 form-control" name="protectmach" rows="5" placeholder="တွေ့ရှိချက်">{{old('protectmach')}}</textarea>
								</div>
							</div>
						</fieldset>
		  			</div>
		  			<div class="col-sm-6 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">သားရေပတ်ကြိုး၊ ဂီယာ၊ ပင်နယံ၊ ကလပ်(ချ်) ကိရိယာများ အခြေအနေ</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="machinestatus" name="machinestatus" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="machinestatus">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="machinestatus1" type="radio" name="machinestatus" value="သင့်" @if(old('machinestatus')=='သင့်') checked @endif>
											<label class="custom-control-label" for="machinestatus1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="machinestatus2"  type="radio" name="machinestatus" value="ညံ့" @if(old('machinestatus')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="machinestatus2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
							<div class="control-group">
								<div class="row">
								<textarea class="col-sm-12 form-control" name="machineprotection" rows="5" placeholder="တွေ့ရှိချက်">{{old('machineprotection')}}</textarea>
								</div>
							</div>
						</fieldset>
		  			</div>
				</div>
				<div class="row">				
		  			<div class="col-sm-12 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">မြှောက်စက်၊ ပင့်စက်၊ ကရိန်းစက်များ</legend>
						    
							    <div class="row">
									<div class="col-sm-4">
									<div class="row"><label class="col-sm-12">စက်အစိတ်အပိုင်းများ၊ ကြိုးများ၊ ချိတ်များ၊ အဆက်များ</label></div>
									<div class="control-group">
										<div class="row">
								 	<div class="col-sm-4 text-center">
										<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="machinepieces" name="machinepieces" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="machinepieces">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="machinepieces1" type="radio" name="machinepieces" value="သင့်" @if(old('machinepieces')=='သင့်') checked @endif>
											<label class="custom-control-label" for="machinepieces1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="machinepieces2"  type="radio" name="machinepieces" value="ညံ့" @if(old('machinepieces')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="machinepieces2">ညံ့</label>
										</div>
									</div>
									</div>
								</div>
								</div>
								<div class="col-sm-4">
									<div class="row"><label class="col-sm-12">ခံနိုင်ဝန်အား၊ တန်ချိန်ပြသခြင်း</label></div>
									<div class="control-group">
										<div class="row">
								 	<div class="col-sm-4 text-center">
										<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="load" name="load" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="load">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="load1" type="radio" name="load" value="သင့်" @if(old('load')=='သင့်') checked @endif>
											<label class="custom-control-label" for="load1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="load2"  type="radio" name="load" value="ညံ့" @if(old('load')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="load2">ညံ့</label>
										</div>
									</div>
									</div>
								</div>
								</div>
								<div class="col-sm-4">
									<div class="row"><label class="col-sm-12">စစ်ဆေးတွေ့ရှိချက်များအားမှတ်တမ်းရေသွင်းထားမှု</label></div>
									<div class="control-group">
										<div class="row">
								 	<div class="col-sm-4 text-center">
										<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="inspectionentry" name="inspectionentry" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="inspectionentry">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="inspectionentry1" type="radio" name="inspectionentry" value="သင့်" @if(old('inspectionentry')=='သင့်') checked @endif>
											<label class="custom-control-label" for="inspectionentry1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="inspectionentry2"  type="radio" name="inspectionentry" value="ညံ့" @if(old('inspectionentry')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="inspectionentry2">ညံ့</label>
										</div>
									</div>
									</div>
								</div>
								</div>
								 </div>
						    	<div class="row">
								<textarea class="col-sm-12 form-control" name="machinefinding" rows="5" placeholder="တွေ့ရှိချက်">{{old('machinefinding')}}</textarea>
								</div>
							
						</fieldset>
		  			</div>
				</div>
				<div class="row">				
		  			<div class="col-sm-6 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">သင့်လျော်သောအဝတ်အစားဝတ်ဆင်ဆောင်ရွက်မှု (ကိုယ်ကြပ်အဝတ်အစား)</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="wearing" name="wearing" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="wearing">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="wearing1" type="radio" name="wearing" value="သင့်" @if(old('wearing')=='သင့်') checked @endif>
											<label class="custom-control-label" for="wearing1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="wearing2"  type="radio" name="wearing" value="ညံ့" @if(old('wearing')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="wearing2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
							<div class="control-group">
								<div class="row">
								<textarea class="col-sm-12 form-control" name="wearingstatus" rows="5" placeholder="တွေ့ရှိချက်">{{old('wearingstatus')}}</textarea>
								</div>
							</div>
						</fieldset>
		  			</div>
		  			<div class="col-sm-6 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">လှေကား၊လက်ရန်း၊ကြမ်းပြင်အထက် (၄)ပေရှိသော စင်္ကြန်သွားလမ်းအခြေအနေ</legend>
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="ladder" name="ladder" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="ladder">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="ladder1" type="radio" name="ladder" value="သင့်" @if(old('ladder')=='သင့်') checked @endif>
											<label class="custom-control-label" for="ladder1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="ladder2"  type="radio" name="ladder" value="ညံ့" @if(old('ladder')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="ladder2">ညံ့</label>
										</div>
									</div>
								 </div>
								<div class="control-group">
								<div class="row">
								<textarea class="col-sm-12 form-control" name="ladderstatus" rows="5" placeholder="တွေ့ရှိချက်">{{old('ladderstatus')}}</textarea>
								</div>
							</div>
						    </div>
							
						</fieldset>
		  			</div>
				<div class="row">				
		  			<div class="col-sm-6 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">လှောင်ကန်၊ တွင်း၊ ကြမ်းပေါက်၊ ချိုင့်များ ကာရံ/ဖုံးအုပ်ထားမှု</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="holecover" name="holecover" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="holecover">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="holecover1" type="radio" name="holecover" value="သင့်" @if(old('holecover')=='သင့်') checked @endif>
											<label class="custom-control-label" for="holecover1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="holecover2"  type="radio" name="holecover" value="ညံ့" @if(old('holecover')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="holecover2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
							<div class="control-group">
								<div class="row">
								<textarea class="col-sm-12 form-control" name="holecoverstatus" rows="5" placeholder="တွေ့ရှိချက်">{{old('holecoverstatus')}}</textarea>
								</div>
							</div>
						</fieldset>
		  			</div>
		  			<div class="col-sm-6 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အန္တရာယ်ရှိသော အခိုးအငွေ့များအား စနစ်တကျစမ်းသပ်မှု၊ ခွင့်ပြုစနစ် သုံးစွဲမှု</legend>
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="dangergas" name="dangergas" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="dangergas">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="dangergas1" type="radio" name="dangergas" value="သင့်" @if(old('dangergas')=='သင့်') checked @endif>
											<label class="custom-control-label" for="dangergas1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="dangergas2"  type="radio" name="dangergas" value="ညံ့" @if(old('dangergas')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="dangergas2">ညံ့</label>
										</div>
									</div>
								 </div>
								<div class="control-group">
								<div class="row">
								<textarea class="col-sm-12 form-control" name="dangergasuses" rows="5" placeholder="တွေ့ရှိချက်">{{old('dangergasuses')}}</textarea>
								</div>
							</div>
						    </div>
							
						</fieldset>
		  			</div>
				<div class="row">				
		  			<div class="col-sm-6 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">မီးလောင်ပါက အလွယ်တကူ ထွက်ပြေးလွတ်မြောက်နိုင်ရန် အစီအမံများ</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="escapeman" name="escapeman" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="escapeman">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="escapeman1" type="radio" name="escapeman" value="သင့်" @if(old('escapeman')=='သင့်') checked @endif>
											<label class="custom-control-label" for="escapeman1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="escapeman2"  type="radio" name="escapeman" value="ညံ့" @if(old('escapeman')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="escapeman2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
						
						</fieldset>
		  			</div>
		  			<div class="col-sm-6 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">မီးအချက်ပေးကိရိယာ စီမံထားရှိမှု</legend>
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="firealam" name="firealam" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="firealam">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="firealam1" type="radio" name="firealam" value="သင့်" @if(old('firealam')=='သင့်') checked @endif>
											<label class="custom-control-label" for="firealam1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="firealam2"  type="radio" name="firealam" value="ညံ့" @if(old('firealam')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="firealam2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
						
						</fieldset>
		  			</div>
				
				<div class="row">				
		  			<div class="col-sm-6 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အရေးပါ်ထွက်ပေါက်သတ်မှတ်ထားရှိမှု</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="emergencyentrace" name="emergencyentrace" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="emergencyentrace">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="emergencyentrace1" type="radio" name="emergencyentrace" value="သင့်" @if(old('emergencyentrace')=='သင့်') checked @endif>
											<label class="custom-control-label" for="emergencyentrace1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="emergencyentrace2"  type="radio" name="emergencyentrace" value="ညံ့" @if(old('emergencyentrace')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="emergencyentrace2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
						
						</fieldset>
		  			</div>
		  			<div class="col-sm-6 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">သွားလမ်းများရှင်းလင်းထားရှိမှု</legend>
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="cleargoway" name="cleargoway" type="radio" value="ကောင်း" checked> 
										  <label class="custom-control-label" for="cleargoway">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="cleargoway1" type="radio" name="cleargoway" value="သင့်" @if(old('cleargoway')=='သင့်') checked @endif>
											<label class="custom-control-label" for="cleargoway1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="cleargoway2"  type="radio" name="cleargoway" value="ညံ့" @if(old('cleargoway')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="cleargoway2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
						
						</fieldset>
		  			</div>
			
		  		<div class="row">
				  <textarea name="aboutfire" placeholder="တွေ့ရှိချက်" class="col-sm-12 form-control" rows="5">{{old('aboutfire')}}</textarea>
		  		</div>
	  		</p>
	  		
	  	

	  </div>
	  <div class="tab">
	  	<h3>သက်သာချောင်ချိရေး</h3>	
			<p>
				<div class="row">				
		  			<div class="col-sm-6 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">လုပ်ငန်းသဘောအရ ထိုင်ခုံများထားရှိခြင်း</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="seat" name="seat" type="radio" value='ကောင်း' checked>
										  <label class="custom-control-label" for="seat">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="seat1" type="radio" name="seat" value='သင့်' @if(old('seat')=='သင့်') checked @endif>
											<label class="custom-control-label" for="seat1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="seat2"  type="radio" name="seat" value='ညံ့' @if(old('seat')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="seat2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
							<div class="control-group">
								<div class="row">
								<textarea class="col-sm-12" name="sittingplan" rows="5" placeholder="တွေ့ရှိချက်">{{old('sittingplan')}}</textarea>
								</div>
							</div>
						</fieldset>
		  			</div>
		  			<div class="col-sm-6 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အစာစားခန်းနှင့်အနားယူခန်း စီမံထားရှိမှု</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="dinningroom" name="dinningroom" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="dinningroom">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="dinningroom1" type="radio" name="dinningroom" value="သင့်" @if(old('dinningroom')=='သင့်') checked @endif>
											<label class="custom-control-label" for="dinningroom1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="dinningroom2"  type="radio" name="dinningroom" value="ညံ့" @if(old('dinningroom')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="dinningroom2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
							<div class="control-group">
								<div class="row">
								<textarea class="col-sm-12 form-control" name="dinningroomplan" rows="5" placeholder="တွေ့ရှိချက်">{{old('dinningroomplan')}}</textarea>
								</div>
							</div>
						</fieldset>
		  			</div>
				</div>
				<div class="row">				
		  			<div class="col-sm-6 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">ကလေးထိန်းခန်းစီမံထားမှု</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="babysittingroom" name="babysittingroom" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="babysittingroom">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="babysittingroom1" type="radio" name="babysittingroom" value="သင့်" @if(old('babysittingroom')=='သင့်') checked @endif>
											<label class="custom-control-label" for="babysittingroom1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="babysittingroom2"  type="radio" name="babysittingroom" value="ညံ့" @if(old('babysittingroom')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="babysittingroom2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
							<div class="control-group">
								<div class="row">
								<textarea class="col-sm-12 form-control" name="babysittingplan" rows="5" placeholder="တွေ့ရှိချက်">{{old('babysittingplan')}}</textarea>
								</div>
							</div>
						</fieldset>
		  			</div>
		  			<div class="col-sm-6 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">ဆေးကြောလျှော်ဖွတ်ရန်အစီအမံ</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="washing" name="washing" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="washing">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="washing1" type="radio" name="washing" value="သင့်" @if(old('washing')=='သင့်') checked @endif>
											<label class="custom-control-label" for="washing1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="washing2"  type="radio" name="washing" value="ညံ့" @if(old('washing')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="washing2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
							<div class="control-group">
								<div class="row">
								<textarea class="col-sm-12 form-control" name="washingplan" rows="5" placeholder="တွေ့ရှိချက်">{{old('washingplan')}}</textarea>
								</div>
							</div>
						</fieldset>
		  			</div>
				</div>
				<div class="row">				
		  			<div class="col-sm-6 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အလုပ်ရုံ(သူနာပြုရေးဆိုင်ရာ)ညွှန်ကြားချက်များ</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="nursing" name="nursing" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="nursing">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="nursing1" type="radio" name="nursing" value="သင့်" @if(old('nursing')=='သင့်') checked @endif >
											<label class="custom-control-label" for="nursing1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="nursing2"  type="radio" name="nursing" value="ညံ့" @if(old('nursing')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="nursing2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
							<div class="control-group">
								<div class="row">
								<textarea class="col-sm-12 form-control" name="nursinginstruction" rows="5" placeholder="တွေ့ရှိချက်">{{old('nursinginstruction')}}</textarea>
								</div>
							</div>
						</fieldset>
		  			</div>
		  		
				</div>
	    <h3>အထွေထွေ</h3> 
				<p>
				<div class="row">				
		  			<div class="col-sm-6 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">မတော်တဆထိခိုက်မှုပုံစံ (က)/ လုပ်ငန်းခွင်ရောဂါ ဖြစ်ပွားပါက အကြောင်းကြားမှု</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="accidentinform" name="accidentinform" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="accidentinform">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="accidentinform1" type="radio" name="accidentinform" value="သင့်" @if(old('accidentinform')=='သင့်') checked @endif>
											<label class="custom-control-label" for="accidentinform1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="accidentinform2"  type="radio" name="accidentinform" value="ညံ့" @if(old('accidentinform')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="accidentinform2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
							<div class="control-group">
								<div class="row">
								<textarea class="col-sm-12 form-control" name="accidentinformation" rows="5" placeholder="တွေ့ရှိချက်">{{old('accidentinformation')}}</textarea>
								</div>
							</div>
						</fieldset>
		  			</div>
		  			<div class="col-sm-6 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">တစ်ကိုယ်ရည်သုံးကာကွယ်ရေးဝတ်စုံ(ထုတ်ပေးမှု၊လုံလောက်မှု၊သုံးစွဲမှု)</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="selfprotectwear" name="selfprotectwear" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="selfprotectwear">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="selfprotectwear1" type="radio" name="selfprotectwear" value="သင့်" @if(old('selfprotectwear')=='သင့်') checked @endif>
											<label class="custom-control-label" for="selfprotectwear1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="selfprotectwear2"  type="radio" name="selfprotectwear" value="ညံ့" @if(old('selfprotectwear')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="selfprotectwear2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
							<div class="control-group">
								<div class="row">
								<textarea class="col-sm-12 form-control" name="selfprotection" rows="5" placeholder="တွေ့ရှိချက်">{{old('selfprotection')}}</textarea>
								</div>
							</div>
						</fieldset>
		  			</div>
				</div>
				<div class="row">				
		  			<div class="col-sm-4 text-center">
		  					<fieldset class="scheduler-border">
						    <legend class="scheduler-border">ဘေးအန္တရာယ်ကင်းရှင်းရေးနှင့်ကျန်းမာရေးဆောင်ရွက်မှု</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="safetyhealth" name="safetyhealth" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="safetyhealth">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="safetyhealth1" type="radio" name="safetyhealth" value="သင့်" @if(old('safetyhealth')=='သင့်') checked @endif>
											<label class="custom-control-label" for="safetyhealth1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="safetyhealth2"  type="radio" name="safetyhealth" value="ညံ့" @if(old('safetyhealth')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="safetyhealth2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
							
						</fieldset>
		  			</div>
		  			<div class="col-sm-4 text-center">
		  					<fieldset class="scheduler-border" style="height:119.4px">
						    <legend class="scheduler-border">ပညာပေးမှု/ဆွေးနွေးမှု</legend>
							<div style="height:1rem"></div>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="negotiate" name="negotiate" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="negotiate">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="negotiate1" type="radio" name="negotiate" value="သင့်" @if(old('negotiate')=='သင့်') checked @endif>
											<label class="custom-control-label" for="negotiate1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="negotiate2"  type="radio" name="negotiate" value="ညံ့" @if(old('negotiate')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="negotiate2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
							
						</fieldset>
		  			</div>
					<div class="col-sm-4 text-center">
		  					<fieldset class="scheduler-border" style="height:119.4px">
						    <legend class="scheduler-border">သင်တန်းဆင်းများ၊ဆင့်ပွားသင်တန်းများ</legend>
							<div style="height:1rem"></div>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-4 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="training" name="training" type="radio" value="ကောင်း" checked>
										  <label class="custom-control-label" for="training">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="training1" type="radio" name="training" value="သင့်" @if(old('training')=='သင့်') checked @endif>
											<label class="custom-control-label" for="training1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="training2"  type="radio" name="training" value="ညံ့" @if(old('training')=='ညံ့') checked @endif>
											<label class="custom-control-label" for="training2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
							
						</fieldset>
		  			</div>
				</div>
	  		
		<p><textarea class="col-sm-12 form-control" rows='5' name="safteyhealthcare" placeholder="တွေ့ရှိချက်">{{old('safteyhealthcare')}}</textarea></p>
	    
	  </div>
	  <div class="tab">
	  	<h3>ပြုပြင်ဆောင်ရွယ်ရန်လိုသည့်အချက်များ</h3>
	  <p><textarea class='col-sm-12 form-control' name="change1" rows="3">{{old('change1')}}</textarea></p>
		<p><textarea class='col-sm-12 form-control' name="change2" rows="3">{{old('change2')}}</textarea></p>
		<p><textarea class='col-sm-12 form-control' name="change3" rows="3">{{old('change3')}}</textarea></p>
		<p><textarea class='col-sm-12 form-control' name="change4" rows="3">{{old('change4')}}</textarea></p>
		<p><textarea class='col-sm-12 form-control' name="change5" rows="3">{{old('change5')}}</textarea></p>
		
			<div class="row">
				<div class="col-sm-4">
					<label for="inspectorname">စစ်ဆေးသူအရာရှိ အမည် <span style="color:red;">*</span></label>
					<input type="text" name="inspectorname" id="inspectorname" class="form-control" value="{{old('inspectorname')}}"/>
						
				</div>
				<div class="col-sm-4">
					<label for="inspectorrank">စစ်ဆေးသူအရာရှိ ရာထူး <span style="color:red;">*</span></label>
					<input type="text" name="inspectorrank" id="inspectorrank" class="form-control" value="{{old('inspectorrank')}}"/>
				</div>
			</div>
	  </div>
	  <div class="blank10"></div>
	  <div style="overflow:auto;">
	    <div style="float:right;">
	      <button type="button" id="prevBtn" onclick="nextPrev(-1)">ရှေ့တစ်မျက်နှာ</button>
	      <button type="button" id="nextBtn" onclick="nextPrev(1)">နောက်တစ်မျက်နှာ</button>
	    </div>
	  </div>
	  <!-- Circles which indicates the steps of the form: -->
	  <!-- <div style="text-align:center;margin-top:40px;">
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	    <span class="step"></span>
	  </div> -->
</form>
<!-- scroll back to top of the page -->
<a id="back2Top" title="Back to top" href="#">&#10148;</a>

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


$( "#worklaw" ).change(function() {
  	var worklaw=$( "#worklaw" ).val();
	if(worklaw==1){
		$("#law1").css("display","block");
		$("#law2").css("display","none");
	}else{
		$("#law1").css("display","none");
		$("#law2").css("display","block");
	}
});
// $(document).ready(function(){
//     $('.timepicker').timepicker({});
// });


$(document).ready(function(){

$('#factoryname').keyup(function(){ 
	   var query = $(this).val();
	   if(query != '')
	   {
		var _token = $('input[name="_token"]').val();
		$.ajax({
		 url:"{{ route('autocomplete.fetch') }}",
		 method:"POST",
		 data:{query:query, _token:_token},
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

   
});

$( "#search" ).click(function() {
  var query = $('#factoryname').val();
               $.ajax({
                    type: 'GET', //THIS NEEDS TO BE GET
                    url: '{{ route('autocomplete.data') }}',
                    data:{name:query},
                    success: function (data) {
                        // console.log(data.FactoryName);
                        $('#township_id').val(data.township_id);
                        $('#factoryid').val(data.FactoryId);
                        $('#ownername').val(data.OwnerName);
                        $("#FactoryName").val(data.FactoryName);
                        $("#FactoryAddress").val(data.FactoryAddress);
                        $("#owneraddress").val(data.OwnerAddress);                        
                        $("#producedProduct").val(data.ProducedProduct+data.ProducedOthers);
                        $("#energytype").val(data.UsedPower);
                        $("#producedPower").val(data.MonthlyAmounts);
                        $("#workType").val(data.worktype);
						$("#menworker").val(data.totalMaleWorker);
						$("#womenworker").val(data.totalFemaleWorker);
						var maleworker = $('#menworker').val();
						var femaleworker = $('#womenworker').val();

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
						var mynum1 = maleworker.replace(/[၀၁၂၃၄၅၆၇၈၉]/g, function(s) {
							return englishDigits[s];
						}); 
						var mynum2 = femaleworker.replace(/[၀၁၂၃၄၅၆၇၈၉]/g, function(s) {
							return englishDigits[s];
						}); 
						var total_eng=parseInt(mynum1)+parseInt(mynum2);
						var totalworker = total_eng.toString();
						var sumtotal=totalworker.replace(/[0123456789]/g,function(s){
							return myanDigits[s];
						});
						$("#totalworker").val(sumtotal);

						if(data.WorkTimeType==0){
							$("#workTime").val('တနင်္လာမှ စနေနေ့အထိ '+data.MToSTimein+' မှ '+data.MToSTimeout + 'အထိ');
							
						}else if(data.WorkTimeType==1){
							$("#workTime").val('တနင်္လာမှ သောကြာအထိ '+data.MToFTimein+' မှ '+data.MToFTimeout + 'အထိ' + 'စနေနေ့' + data.STimein+' မှ '+data.STimeout+'အထိ');

						}else{
							$("#workTime").val('တနင်္လာမှ သောကြာအထိ'+data.MToFTimeInOther+' မှ '+data.MToFTimeoutOther + 'အထိ');

						}
                    },
                    error: function() { 
                         console.log(data);
                    }
        });
});

//for tempoary save
$('#tempoarySave').click(function(){
	$("#tempoary").val('tempoary');
	document.getElementById("regForm").submit();
});

//for total worker 
function converunistring(){
	var num1=document.getElementById("menworker").value;
	var num2=document.getElementById('womenworker').value;
	
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
var num3=parseInt(mynum1)+parseInt(mynum2);
var num4=num3.toString();
var sum=num4.replace(/[0123456789]/g,function(s){
	return myanDigits[s];
});
$('#totalworker').val(sum);
	console.log(sum);
		
	}


</script>
@endsection