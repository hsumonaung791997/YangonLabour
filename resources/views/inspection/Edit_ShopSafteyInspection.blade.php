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

	<form id="regForm"class="form-background" action="{{ url('Edit_Shopsafteyinspection/'.$shop_safety->id)}}" method="post">
	 {{csrf_field()}}
		<!-- Circles which indicates the steps of the form: -->
		  
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
		
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
					<label for="factoryname">အလုပ်ရုံအမည် </label>
	  				<input id="FactoryName" class="form-control" name="shopname" value="{{$shop->shopname}}" readonly>
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<!-- <div class="col-sm-6 text-center">
					  <label for="FactoryAddress"> တည်နေရာ</label>
	  				<input name="factoryregion" id="FactoryAddress" class="form-control" value="{{old('factoryregion')}}">
	  			</div> -->
	  		</div>
	  		
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
					  <label for="workType">လုပ်ငန်းအမျိုးအစား</label>
	  				  <input id="workType" class="form-control" name="workType" value="{{$shop_safety->workType}}" readonly>
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
					  <label for="workTime">အလုပ်ချိန်</label>
	  				  <input id="workTime" class="form-control" name="workTime" value="{{$shop_safety->workTime}}">
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
								 		<input type="text" placeholder="ကျား" name="menworker" value="{{$shop_safety->menworker}}" id="menworker" class="form-control" onkeyup="converunistring()"/>
									</div>
									<div class="col-sm-4 text-center">
								 		<input type="text" placeholder="မ" name="womenworker"  value="{{$shop_safety->womenworker}}" id="womenworker" class="form-control" onkeyup="converunistring()"/>
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
										  <input  class="custom-control-input" id="medicalticket" name="medicalticket" type="radio" value="ရှိ" {{$shop_safety->medicalticket=='ရှိ' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="medicalticket">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="medicalticket1"  type="radio" name="medicalticket" value="မရှိ" @if($shop_safety->medicalticket=='မရှိ') checked @endif>
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
										  <input  class="custom-control-input" id="workclean" name="workclean" type="radio" value="ကောင်း" {{$shop_safety->workclean=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="workclean">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="workclean1"  type="radio" name="workclean" value="သင့်" {{$shop_safety->workclean=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="workclean1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="workclean2"  type="radio" name="workclean" value="ညံ့" {{$shop_safety->workclean=='ညံ့' ? 'checked' : ''}}>
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
										  <input  class="custom-control-input" id="drainflow" name="drainflow" type="radio" value="ကောင်း" {{$shop_safety->drainflow=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="drainflow">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="drainflow1"  type="radio" name="drainflow" value="သင့်"  {{$shop_safety->drainflow=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="drainflow1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="drainflow2"  type="radio" name="drainflow" value="ညံ့" {{$shop_safety->drainflow=='ညံ့' ? 'checked' : ''}}>
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
										  <input  class="custom-control-input" id="employmentPaint" name="employmentPaint" type="radio" value="ကောင်း" {{$shop_safety->employmentPaint=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="employmentPaint">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="employmentPaint1"  type="radio" name="employmentPaint" value="သင့်" {{$shop_safety->employmentPaint=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="employmentPaint1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="employmentPaint2" type="radio" name="employmentPaint" value="ညံ့" {{$shop_safety->employmentPaint=='ညံ့' ? 'checked' : ''}}>
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
										  <input  class="custom-control-input" id="aircondition" name="aircondition" type="radio" value="ကောင်း" {{$shop_safety->aircondition=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="aircondition">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="aircondition1"  type="radio" name="aircondition" value="သင့်" {{$shop_safety->aircondition=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="air1condition">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="aircondition2"  type="radio" name="aircondition" value="ညံ့" {{$shop_safety->aircondition=='ညံ့' ? 'checked' : ''}}>
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
										  <input  class="custom-control-input" id="weather" name="weather" type="radio" value="ကောင်း" {{$shop_safety->weather=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="weather">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="weather1"  type="radio" name="weather" value="သင့်" {{$shop_safety->weather=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="weather1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="weather2"  type="radio" name="weather" value="ညံ့" {{$shop_safety->weather=='ညံ့' ? 'checked' : ''}}>
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
										  <input  class="custom-control-input" id="particals" name="particals" type="radio" value="ကောင်း" {{$shop_safety->particals=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="particals">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="particals1" type="radio" name="particals" value="သင့်" {{$shop_safety->particals=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="particals1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="particals2"  type="radio" name="particals" value="ညံ့" {{$shop_safety->particals=='ညံ့' ? 'checked' : ''}}>
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
										  <input  class="custom-control-input" id="populationstatus" name="populationstatus" type="radio" value="ကောင်း" {{$shop_safety->populationstatus=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="populationstatus">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="populationstatus1"  type="radio" name="populationstatus" value="သင့်"  {{$shop_safety->populationstatus=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="populationstatus1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="populationstatus2"  type="radio" name="populationstatus" value="ညံ့" {{$shop_safety->populationstatus=='ညံ့' ? 'checked' : ''}}>
											<label class="custom-control-label" for="populationstatus2">ညံ့</label>
										</div>
									</div>
								 </div>
								
						    </div>
							<div class="control-group">
							    <div class="row">
								 	<div class="col-sm-12 text-center">
									 <textarea rows="5" name="population" placeholder="တွေ့ရှိချက်" class="col-sm-12 form-control">{{$shop_safety->population}}</textarea>
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
										  <input  class="custom-control-input" id="nature" name="nature" type="radio" value="ကောင်း" {{$shop_safety->nature=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="nature">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="nature1"  type="radio" name="nature" value="သင့်" {{$shop_safety->nature=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="nature1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="nature2" checked="" type="radio" name="nature" value="ညံ့" {{$shop_safety->nature=='ညံ့' ? 'checked' : ''}}>
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
										  <input  class="custom-control-input" id="sunlight" name="sunlight" type="radio" value="ကောင်း" {{$shop_safety->sunlight=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="sunlight">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="sunlight1"  type="radio" name="sunlight" value="သင့်" {{$shop_safety->sunlight=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="sunlight1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="sunlight2"  type="radio" name="sunlight" value="ညံ့" {{$shop_safety->sunlight=='ညံ့' ? 'checked' : ''}}>
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
										  <input  class="custom-control-input" id="drinkingwater" name="drinkingwater" type="radio" value="ကောင်း" {{$shop_safety->drinkingwater=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="drinkingwater">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="drinkingwater1"  type="radio" name="drinkingwater" value="သင့်" {{$shop_safety->drinkingwater=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="drinkingwater1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="drinkingwater2"  type="radio" name="drinkingwater" value="ညံ့" {{$shop_safety->drinkingwater=='ညံ့' ? 'checked' : ''}}>
											<label class="custom-control-label" for="drinkingwater2">ညံ့</label>
										</div>
									</div>
								 </div>
								
						    </div>
							<div class="control-group">
							    <div class="row">
								 	<div class="col-sm-12 text-center">
									 <textarea rows="5" name="drinkingwatermana" placeholder="တွေ့ရှိချက်" class="col-sm-12 form-control">{{$shop_safety->drinkingwatermana}}</textarea>
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
										  <input  class="custom-control-input" id="toilet" name="toilet" type="radio" value="ကောင်း" {{$shop_safety->toilet=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="toilet">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="toilet1"  type="radio" name="toilet" value="သင့်" {{$shop_safety->toilet=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="toilet1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="toilet2" checked="" type="radio" name="toilet" value="ညံ့" {{$shop_safety->toilet=='ညံ့' ? 'checked' : ''}}>
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
										  <input  class="custom-control-input" id="toiletType" name="toiletType" type="radio" value="ကောင်း" {{$shop_safety->toiletType=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="toiletTypeType">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="toiletTypeType1"  type="radio" name="toiletType" value="သင့်" {{$shop_safety->toilet=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="toiletType1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="toiletType2"  type="radio" name="toiletType2" value="ညံ့" {{$shop_safety->toilet=='ညံ့' ? 'checked' : ''}}>
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
										  <input  class="custom-control-input" id="genderdivide" name="genderdivide" type="radio" value="ကောင်း" {{$shop_safety->genderdivide=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="genderdivide">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="genderdivide1"  type="radio" name="genderdivide" value="သင့်" {{$shop_safety->genderdivide=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="genderdivide1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="genderdivide2"  type="radio" name="genderdivide" value="ညံ့" {{$shop_safety->genderdivide=='ညံ့' ? 'checked' : ''}}>
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
										  <input  class="custom-control-input" id="toiletquantity" name="toiletquantity" type="radio" value="ကောင်း" {{$shop_safety->toiletquantity=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="toiletquantity">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="toiletquantity1"  type="radio" name="toiletquantity" value="သင့်" {{$shop_safety->toiletquantity=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="toiletquantity1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="toiletquantity2"  type="radio" name="toiletquantity" value="ညံ့" {{$shop_safety->toiletquantity=='ညံ့' ? 'checked' : ''}}>
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
										  <input  class="custom-control-input" id="noiseprotect" name="noiseprotect" type="radio" value="ကောင်း" {{$shop_safety->noiseprotect=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="noiseprotect">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="noiseprotect1"  type="radio" name="noiseprotect" value="သင့်" {{$shop_safety->noiseprotect=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="noiseprotect1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="noiseprotect2"  type="radio" name="noiseprotect" value="ညံ့" {{$shop_safety->noiseprotect=='ညံ့' ? 'checked' : ''}}>
											<label class="custom-control-label" for="noiseprotect2">ညံ့</label>
										</div>
									</div>
								 </div>
								
						    </div>
							<div class="control-group">
							    <div class="row">
								 	<div class="col-sm-12 text-center">
									 <textarea rows="5" name="noiceprotection" placeholder="တွေ့ရှိချက်" class="col-sm-12 form-control">{{$shop_safety->noiceprotection}}</textarea>
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
										  <input  class="custom-control-input" id="dangerprotect" name="dangerprotect" type="radio" value="ကောင်း" {{$shop_safety->dangerprotect=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="dangerprotect">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="dangerprotect1" type="radio" name="dangerprotect" value="သင့်" {{$shop_safety->dangerprotect=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="dangerprotect1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="dangerprotect2"  type="radio" name="dangerprotect" value="ညံ့" {{$shop_safety->dangerprotect=='ညံ့' ? 'checked' : ''}}>
											<label class="custom-control-label" for="dangerprotect2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
							<div class="control-group">
								<div class="row">
								<textarea class="col-sm-12 form-control" name="protectmach" rows="5" placeholder="တွေ့ရှိချက်">{{$shop_safety->protectmach}}</textarea>
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
										  <input  class="custom-control-input" id="machinestatus" name="machinestatus" type="radio" value="ကောင်း" {{$shop_safety->machinestatus=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="machinestatus">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="machinestatus1" type="radio" name="machinestatus" value="သင့်" {{$shop_safety->machinestatus=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="machinestatus1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="machinestatus2"  type="radio" name="machinestatus" value="ညံ့" {{$shop_safety->machinestatus=='ညံ့' ? 'checked' : ''}}>
											<label class="custom-control-label" for="machinestatus2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
							<div class="control-group">
								<div class="row">
								<textarea class="col-sm-12 form-control" name="machineprotection" rows="5" placeholder="တွေ့ရှိချက်">{{$shop_safety->machineprotection}}</textarea>
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
										  <input  class="custom-control-input" id="machinepieces" name="machinepieces" type="radio" value="ကောင်း" {{$shop_safety->machinepieces=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="machinepieces">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="machinepieces1" type="radio" name="machinepieces" value="သင့်" {{$shop_safety->machinepieces=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="machinepieces1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="machinepieces2"  type="radio" name="machinepieces" value="ညံ့" {{$shop_safety->machinepieces=='ညံ့' ? 'checked' : ''}}>
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
										  <input  class="custom-control-input" id="load" name="load" type="radio" value="ကောင်း" {{$shop_safety->load=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="load">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="load1" type="radio" name="load" value="သင့်" {{$shop_safety->load=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="load1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="load2"  type="radio" name="load" value="ညံ့" {{$shop_safety->load=='ညံ့' ? 'checked' : ''}}>
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
										  <input  class="custom-control-input" id="inspectionentry" name="inspectionentry" type="radio" value="ကောင်း" {{$shop_safety->inspectionentry=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="inspectionentry">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="inspectionentry1" type="radio" name="inspectionentry" value="သင့်" {{$shop_safety->inspectionentry=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="inspectionentry1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="inspectionentry2"  type="radio" name="inspectionentry" value="ညံ့" {{$shop_safety->inspectionentry=='ညံ့' ? 'checked' : ''}}>
											<label class="custom-control-label" for="inspectionentry2">ညံ့</label>
										</div>
									</div>
									</div>
								</div>
								</div>
								 </div>
						    	<div class="row">
								<textarea class="col-sm-12 form-control" name="machinefinding" rows="5" placeholder="တွေ့ရှိချက်">{{$shop_safety->machinefinding}}</textarea>
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
										  <input  class="custom-control-input" id="wearing" name="wearing" type="radio" value="ကောင်း" {{$shop_safety->wearing=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="wearing">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="wearing1" type="radio" name="wearing" value="သင့်" {{$shop_safety->wearing=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="wearing1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="wearing2"  type="radio" name="wearing" value="ညံ့" {{$shop_safety->wearing=='ညံ့' ? 'checked' : ''}}>
											<label class="custom-control-label" for="wearing2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
							<div class="control-group">
								<div class="row">
								<textarea class="col-sm-12 form-control" name="wearingstatus" rows="5" placeholder="တွေ့ရှိချက်">{{$shop_safety->wearingstatus}}</textarea>
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
										  <input  class="custom-control-input" id="ladder" name="ladder" type="radio" value="ကောင်း" {{$shop_safety->ladder=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="ladder">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="ladder1" type="radio" name="ladder" value="သင့်" {{$shop_safety->ladder=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="ladder1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="ladder2"  type="radio" name="ladder" value="ညံ့" {{$shop_safety->ladder=='ညံ့' ? 'checked' : ''}}>
											<label class="custom-control-label" for="ladder2">ညံ့</label>
										</div>
									</div>
								 </div>
								<div class="control-group">
								<div class="row">
								<textarea class="col-sm-12 form-control" name="ladderstatus" rows="5" placeholder="တွေ့ရှိချက်">{{$shop_safety->ladderstatus}}</textarea>
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
										  <input  class="custom-control-input" id="holecover" name="holecover" type="radio" value="ကောင်း" {{$shop_safety->holecover=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="holecover">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="holecover1" type="radio" name="holecover" value="သင့်" {{$shop_safety->holecover=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="holecover1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="holecover2"  type="radio" name="holecover" value="ညံ့" {{$shop_safety->holecover=='ညံ့' ? 'checked' : ''}}>
											<label class="custom-control-label" for="holecover2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
							<div class="control-group">
								<div class="row">
								<textarea class="col-sm-12 form-control" name="holecoverstatus" rows="5" placeholder="တွေ့ရှိချက်">{{$shop_safety->holecoverstatus}}</textarea>
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
										  <input  class="custom-control-input" id="dangergas" name="dangergas" type="radio" value="ကောင်း" {{$shop_safety->dangergas=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="dangergas">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="dangergas1" type="radio" name="dangergas" value="သင့်" {{$shop_safety->dangergas=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="dangergas1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="dangergas2"  type="radio" name="dangergas" value="ညံ့" {{$shop_safety->dangergas=='ညံ့' ? 'checked' : ''}}>
											<label class="custom-control-label" for="dangergas2">ညံ့</label>
										</div>
									</div>
								 </div>
								<div class="control-group">
								<div class="row">
								<textarea class="col-sm-12 form-control" name="dangergasuses" rows="5" placeholder="တွေ့ရှိချက်">{{$shop_safety->dangergasuses}}</textarea>
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
										  <input  class="custom-control-input" id="escapeman" name="escapeman" type="radio" value="ကောင်း" {{$shop_safety->escapeman=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="escapeman">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="escapeman1" type="radio" name="escapeman" value="သင့်" {{$shop_safety->escapeman=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="escapeman1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="escapeman2"  type="radio" name="escapeman" value="ညံ့" {{$shop_safety->escapeman=='ညံ့' ? 'checked' : ''}}>
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
										  <input  class="custom-control-input" id="firealam" name="firealam" type="radio" value="ကောင်း" {{$shop_safety->firealam=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="firealam">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="firealam1" type="radio" name="firealam" value="သင့်" {{$shop_safety->firealam=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="firealam1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="firealam2"  type="radio" name="firealam" value="ညံ့" {{$shop_safety->firealam=='ညံ့' ? 'checked' : ''}}>
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
										  <input  class="custom-control-input" id="emergencyentrace" name="emergencyentrace" type="radio" value="ကောင်း" {{$shop_safety->emergencyentrace=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="emergencyentrace">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="emergencyentrace1" type="radio" name="emergencyentrace" value="သင့်" {{$shop_safety->emergencyentrace=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="emergencyentrace1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="emergencyentrace2"  type="radio" name="emergencyentrace" value="ညံ့" {{$shop_safety->emergencyentrace=='ညံ့' ? 'checked' : ''}}>
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
										  <input  class="custom-control-input" id="cleargoway" name="cleargoway" type="radio" value="ကောင်း" {{$shop_safety->cleargoway=='ကောင်း' ? 'checked' : ''}}> 
										  <label class="custom-control-label" for="cleargoway">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="cleargoway1" type="radio" name="cleargoway" value="သင့်" {{$shop_safety->cleargoway=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="cleargoway1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="cleargoway2"  type="radio" name="cleargoway" value="ညံ့" {{$shop_safety->cleargoway=='ညံ့' ? 'checked' : ''}}>
											<label class="custom-control-label" for="cleargoway2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
						
						</fieldset>
		  			</div>
			
		  		<div class="row">
				  <textarea name="aboutfire" placeholder="တွေ့ရှိချက်" class="col-sm-12 form-control" rows="5">{{$shop_safety->aboutfire}}</textarea>
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
										  <input  class="custom-control-input" id="seat" name="seat" type="radio" value='ကောင်း' {{$shop_safety->seat=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="seat">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="seat1" type="radio" name="seat" value='သင့်' {{$shop_safety->seat=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="seat1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="seat2"  type="radio" name="seat" value='ညံ့' {{$shop_safety->seat=='ညံ့' ? 'checked' : ''}}>
											<label class="custom-control-label" for="seat2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
							<div class="control-group">
								<div class="row">
								<textarea class="col-sm-12" name="sittingplan" rows="5" placeholder="တွေ့ရှိချက်">{{$shop_safety->sittingplan}}</textarea>
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
										  <input  class="custom-control-input" id="dinningroom" name="dinningroom" type="radio" value="ကောင်း" {{$shop_safety->dinningroom=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="dinningroom">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="dinningroom1" type="radio" name="dinningroom" value="သင့်" {{$shop_safety->dinningroom=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="dinningroom1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="dinningroom2"  type="radio" name="dinningroom" value="ညံ့" {{$shop_safety->dinningroom=='ညံ့' ? 'checked' : ''}}>
											<label class="custom-control-label" for="dinningroom2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
							<div class="control-group">
								<div class="row">
								<textarea class="col-sm-12 form-control" name="dinningroomplan" rows="5" placeholder="တွေ့ရှိချက်">{{$shop_safety->dinningroomplan}}</textarea>
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
										  <input  class="custom-control-input" id="babysittingroom" name="babysittingroom" type="radio" value="ကောင်း" {{$shop_safety->babysittingroom=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="babysittingroom">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="babysittingroom1" type="radio" name="babysittingroom" value="သင့်" {{$shop_safety->babysittingroom=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="babysittingroom1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="babysittingroom2"  type="radio" name="babysittingroom" value="ညံ့" {{$shop_safety->babysittingroom=='ညံ့' ? 'checked' : ''}}>
											<label class="custom-control-label" for="babysittingroom2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
							<div class="control-group">
								<div class="row">
								<textarea class="col-sm-12 form-control" name="babysittingplan" rows="5" placeholder="တွေ့ရှိချက်">{{$shop_safety->babysittingplan}}</textarea>
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
										  <input  class="custom-control-input" id="washing" name="washing" type="radio" value="ကောင်း" {{$shop_safety->washing=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="washing">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="washing1" type="radio" name="washing" value="သင့်" {{$shop_safety->washing=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="washing1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="washing2"  type="radio" name="washing" value="ညံ့" {{$shop_safety->washing=='ညံ့' ? 'checked' : ''}}>
											<label class="custom-control-label" for="washing2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
							<div class="control-group">
								<div class="row">
								<textarea class="col-sm-12 form-control" name="washingplan" rows="5" placeholder="တွေ့ရှိချက်">{{$shop_safety->washingplan}}</textarea>
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
										  <input  class="custom-control-input" id="nursing" name="nursing" type="radio" value="ကောင်း" {{$shop_safety->nursing=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="nursing">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="nursing1" type="radio" name="nursing" value="သင့်" {{$shop_safety->nursing=='သင့်' ? 'checked' : ''}} >
											<label class="custom-control-label" for="nursing1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="nursing2"  type="radio" name="nursing" value="ညံ့" {{$shop_safety->nursing=='ညံ့' ? 'checked' : ''}}>
											<label class="custom-control-label" for="nursing2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
							<div class="control-group">
								<div class="row">
								<textarea class="col-sm-12 form-control" name="nursinginstruction" rows="5" placeholder="တွေ့ရှိချက်">{{$shop_safety->nursinginstruction}}</textarea>
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
										  <input  class="custom-control-input" id="accidentinform" name="accidentinform" type="radio" value="ကောင်း" {{$shop_safety->accidentinform=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="accidentinform">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="accidentinform1" type="radio" name="accidentinform" value="သင့်" {{$shop_safety->accidentinform=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="accidentinform1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="accidentinform2"  type="radio" name="accidentinform" value="ညံ့" {{$shop_safety->accidentinform=='ညံ့' ? 'checked' : ''}}>
											<label class="custom-control-label" for="accidentinform2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
							<div class="control-group">
								<div class="row">
								<textarea class="col-sm-12 form-control" name="accidentinformation" rows="5" placeholder="တွေ့ရှိချက်">{{$shop_safety->accidentinformation}}</textarea>
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
										  <input  class="custom-control-input" id="selfprotectwear" name="selfprotectwear" type="radio" value="ကောင်း" {{$shop_safety->accideselfprotectwearntinform=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="selfprotectwear">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="selfprotectwear1" type="radio" name="selfprotectwear" value="သင့်" {{$shop_safety->selfprotectwear=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="selfprotectwear1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="selfprotectwear2"  type="radio" name="selfprotectwear" value="ညံ့" {{$shop_safety->selfprotectwear=='ညံ့' ? 'checked' : ''}}>
											<label class="custom-control-label" for="selfprotectwear2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
							<div class="control-group">
								<div class="row">
								<textarea class="col-sm-12 form-control" name="selfprotection" rows="5" placeholder="တွေ့ရှိချက်">{{$shop_safety->selfprotection}}</textarea>
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
										  <input  class="custom-control-input" id="safetyhealth" name="safetyhealth" type="radio" value="ကောင်း" {{$shop_safety->safetyhealth=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="safetyhealth">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="safetyhealth1" type="radio" name="safetyhealth" value="သင့်" {{$shop_safety->safetyhealth=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="safetyhealth1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="safetyhealth2"  type="radio" name="safetyhealth" value="ညံ့" {{$shop_safety->safetyhealth=='ညံ့' ? 'checked' : ''}}>
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
										  <input  class="custom-control-input" id="negotiate" name="negotiate" type="radio" value="ကောင်း" {{$shop_safety->negotiate=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="negotiate">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="negotiate1" type="radio" name="negotiate" value="သင့်" {{$shop_safety->negotiate=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="negotiate1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="negotiate2"  type="radio" name="negotiate" value="ညံ့" {{$shop_safety->negotiate=='ညံ့' ? 'checked' : ''}}>
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
										  <input  class="custom-control-input" id="training" name="training" type="radio" value="ကောင်း" {{$shop_safety->training=='ကောင်း' ? 'checked' : ''}}>
										  <label class="custom-control-label" for="training">ကောင်း</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="training1" type="radio" name="training" value="သင့်" {{$shop_safety->training=='သင့်' ? 'checked' : ''}}>
											<label class="custom-control-label" for="training1">သင့်</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="training2"  type="radio" name="training" value="ညံ့"  {{$shop_safety->training=='ညံ့' ? 'checked' : ''}}>
											<label class="custom-control-label" for="training2">ညံ့</label>
										</div>
									</div>
								 </div>
						    </div>
							
						</fieldset>
		  			</div>
				</div>
	  		
		<p><textarea class="col-sm-12 form-control" rows='5' name="safteyhealthcare" placeholder="တွေ့ရှိချက်">{{$shop_safety->safteyhealthcare}}</textarea></p>
	    
	  </div>
	  <div class="tab">
	  	<h3>ပြုပြင်ဆောင်ရွယ်ရန်လိုသည့်အချက်များ</h3>
	  <p><textarea class='col-sm-12 form-control' name="change1" rows="3">{{$shop_safety->change1}}</textarea></p>
		<p><textarea class='col-sm-12 form-control' name="change2" rows="3">{{$shop_safety->change2}}</textarea></p>
		<p><textarea class='col-sm-12 form-control' name="change3" rows="3">{{$shop_safety->change3}}</textarea></p>
		<p><textarea class='col-sm-12 form-control' name="change4" rows="3">{{$shop_safety->change4}}</textarea></p>
		<p><textarea class='col-sm-12 form-control' name="change5" rows="3">{{$shop_safety->change5}}</textarea></p>
		
			<div class="row">
				<div class="col-sm-4">
					<label for="inspectorname">စစ်ဆေးသူအရာရှိ အမည် <span style="color:red;">*</span></label>
					<input type="text" name="inspectorname" id="inspectorname" class="form-control" value="{{$shop_safety->inspectorname}}"/>
						
				</div>
				<div class="col-sm-4">
					<label for="inspectorrank">စစ်ဆေးသူအရာရှိ ရာထူး <span style="color:red;">*</span></label>
					<input type="text" name="inspectorrank" id="inspectorrank" class="form-control" value="{{$shop_safety->inspectorrank}}"/>
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
    document.getElementById("nextBtn").innerHTML = "UPDATE";
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

//sum worker total when page loading    
 $(document).ready(function() {
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
});

</script>
@endsection