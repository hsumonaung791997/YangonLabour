@extends('layouts.admin')
@section('content')
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
<script type='text/javascript'>
$(function(){
$('.datepicker').datepicker({
    calendarWeeks: true,
    todayHighlight: true,
    autoclose: true
});  
});
</script>

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

<form id="regForm" action="{{ route('factories.update',$factory->id) }}" method="post" enctype="multipart/form-data">
	 @csrf
     @method('PUT')
		<!-- Circles which indicates the steps of the form: -->
  	<h1>စက်ရုံနှင့်ပတ်သက်သောအချက်အလက်များ </h1>
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
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<label for="FactoryName">အလုပ်ရုံအမည်</label>
	  				<input value="{{$factory->FactoryName}}"  name="FactoryName" id="FactoryName" >
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-left">
	  				<label for="EmailAdd">အီးမေး</label>
	  				<input value="{{$factory->EmailAdd}}"  name="EmailAdd" id="EmailAdd">
	  			</div>
	  		</div>
	  	</p>
	  	<p>
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<label for="ContactFax">ဖက်စ်</label>
	  				<input value="{{$factory->ContactFax}}"  name="ContactFax" id="ContactFax">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-left">
	  				<label for="ContactPhone">ဖုန်းနံပါတ်</label>
	  				<input value="{{$factory->ContactPhone}}"  name="ContactPhone" id="ContactPhone">
	  			</div>
	  		</div>
	  	</p>
	  	<p>
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<label for="WorkedPower">အလုပ်ရုံပစ္စည်းထွက်လုပ်ကိုင်နိုင်သောအင်အား</label>
	  				<input value="{{$factory->WorkedPower}}"  name="WorkedPower" id="WorkedPower">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-left">
	  				<label for="ElectricPower">လျှပ်စစ်ဓာတ်အားကိုမည်သို့ရရှိသည်</label>
	  				<input id="ElectricPower" value="{{$factory->ElectricPower}}" name="ElectricPower">
	  			</div>
	  		</div>
	  	</p>
	  
	  	<p>
	  		<div class="row">
	  			<div class="col-sm-12 text-center">
	  				<fieldset class="scheduler-border">
					    <legend class="scheduler-border">အလုပ်ရုံတည်နေရာ</legend>
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
					    			<label for="zone">ဇုန်</label>
					    		</div>
					    		<div class="col-sm-6 text-left">
					    			<select name="IndustryCategory_Id" id="zone" class="form-control">
							        	<option value=1>လှိုင်သာယာစက်မှုဇုန်</option>
							        	<option value=2>ရွှေပြည်သာစက်မှုဇုန်</option>
					        		</select>
					    		</div>
					    	</div><br>
					    	<div class="row">
					    		<div class="col-sm-5 text-right">
					    			<label for="address">လိပ်စာ</label>
					    		</div>
					    		<div class="col-sm-6 text-left">
					    			<textarea class="form-control form-control-alternative" rows="3" placeholder="အသေးစိတ်ထည့်ရန်" id='address'></textarea>
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
	  				<label for="NextYearProcess">ပြုလုပ်မည့်လုပ်ငန်းနှင့်စပ်လျဉ်းနောင်လာမည့်၁၂လအတွင်းပြုလုပ်မည့်လုပ်ငန်းစဉ်</label>
	  				<textarea class="col-sm-12" rows="4" id="NextYearProcess" name="NextYearProcess">{{$factory->NextYearProcess}}</textarea>
	  			</div>
	  		</div>
	  	</p>

	  </div> 
	  <div class="tab">လုပ်ငန်းအမျိုးအစားအသုံးပြုရမည့်လျှပ်စစ်ဝန်အားနှင့်စက်စွမ်းအား
	  	<p>(အောက်ပါဇယားကွက်တွင်စက်ကိရိယာအသီးသီးတို့၏မြင်းကောင်ရေအားကိုဖော်ပြရန်)</p>
	  		<div class="row">
	 			<div class="col-sm-5 text-center">
	 				<label for="StreamHP">ရေနွေးငွေ့ဖြင့်လည်သောစက်</label>
					<input id="StreamHP" value="{{$factory->StreamHP}}"  name="StreamHP">
				</div>
				<div class="col-sm-1">
					
				</div>
	 			<div class="col-sm-6 text-left">
	 				<label for="GasHP">ဓာတ်ငွေ့၊ဓာတ်ဆီဖြင့်လည်သောစက်</label>
					<input id="GasHP" value="{{$factory->GasHP}}"  name="GasHP">
				</div>
			</div> <br>
			<div class="row">
	 			<div class="col-sm-5">
	 				<label for="MotorHP">လျှပ်စစ်ဖြင့်လည်သောစက်</label>
					<input id="MotorHP" value="{{$factory->MotorHP}}" name="MotorHP">
				</div>
				<div class="col-sm-1">
					
				</div>
	 			<div class="col-sm-6">
	 				<label for="WaterHP">ရေအားဖြင့်လည်သောစက်</label>
					<input id="WaterHP" value="{{$factory->WaterHP}}"  name="WaterHP">
				</div>
			</div>
			<br>
   			 <p>&nbsp; အလုပ်ရုံတွင်နောင်လာမည့်၁၂လအတွင်းခိုင်းစေမည့်အလုပ်သမား</p>
   			 <div class="row">
				<div class="col-sm-12">
					<table style="width:100%">
					  <tr>
					  	<td rowspan="2"> </td>
					    <td colspan="2">လူကြီး</td>
					    <td colspan="2">လူရွယ် ၁၆နှစ်၊ ၁၈နှစ်</td>
					    <td colspan="2">ကလေး ၁၄နှစ်၊ ၁၆နှစ်</td>
					  </tr>
					  <tr>
					    <td> ကျား</td>
					    <td>မ </td>
					    <td> ကျား</td>
					    <td>မ </td>
					    <td> ကျား</td>
					    <td>မ </td>
					  </tr>
					  <tr>
					    <td style="width: 100px;">လခစား</td>
					    <td><input type='text' value="{{$factory->MenWorker}}" name="MenWorker"></td>
					    <td><input type='text' value="{{$factory->WomenWorker}}" name="WomenWorker"></td>
					    <td><input type='text' value="{{$factory->AMenWorker}}" name="AMenWorker"></td>
					    <td><input type='text' value="{{$factory->AWomenWorker}}" name="AWomenWorker"></td>
					    <td><input type='text'value="{{$factory->CMenWorker}}" name="CMenWorker"></td>
					    <td><input type='text' value="{{$factory->CWomenWorker}}" name="CWomenWorker"></td>
					  </tr>
					   <tr>
					    <td>နေ့စား</td>
					    <td><input type='text' value="{{$factory->DailyMenWorker}}" name="DailyMenWorker"></td>
					    <td><input type='text' value="{{$factory->DailyWomenWorker}}" name="DailyWomenWorker"></td>
					    <td><input type='text' value="{{$factory->ADailyMenWorker}}" name="ADailyMenWorker"></td>
					    <td><input type='text' value="{{$factory->ADailyWomenWorker}}" name="ADailyWomenWorker"></td>
					    <td><input type='text' value="{{$factory->CDailyMenWorker}}" name="CDailyMenWorker"></td>
					    <td><input type='text' value="{{$factory->CDailyWomenWorker}}" name="CDailyWomenWorker"></td>
					  </tr>
					  <tr>
					    <td>ပုတ်ပြတ်</td>
					    <td><input type='text' value="{{$factory->PieceMenWorker}}" name="PieceMenWorker"></td>
					    <td><input type='text' value="{{$factory->PieceWomenWorker}}" name="PieceWomenWorker"></td>
					    <td><input type='text' value="{{$factory->APieceMenWorker}}" name="APieceMenWorker"></td>
					    <td><input type='text' value="{{$factory->APieceWomenWorker}}" name="APieceWomenWorker"></td>
					    <td><input type='text' value="{{$factory->CPieceMenWorker}}" name="CPieceMenWorker"></td>
					    <td><input type='text' value="{{$factory->CPieceWomenWorker}}" name="CPieceWomenWorker"></td>
					  </tr>
					</table> <br>
				</div>
			</div>
			<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label id="datepicker">အလုပ်ရုံစတင် လုပ်ကိုင်သောရက်စွဲ</label>
		  				<input value="{{$factory->StartDate}}"   name="StartDate" id="datepicker" class="datepicker">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="ManagerName">မန်နေဂျာအမည်</label>
		  				<input id="ManagerName" value="{{$factory->ManagerName}}"  name="ManagerName">
		  			</div>
		  		</div>
	  		</p>
	  		<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="OwnerName">လုပ်ငန်းပိုင်ရှင်အမည်</label>
		  				<input value="{{$factory->OwnerName}}"  name="OwnerName" id="OwnerName">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="OwnerNrc">မှတ်ပုံတင်နံပါတ်</label>
		  				<input id="OwnerNrc" value="{{$factory->OwnerNrc}}"  name="OwnerNrc">
		  			</div>
		  		</div>
	  		</p>
	  		<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="OwnerAddress">လိပ်စာ</label>
		  				<input value="{{$factory->OwnerAddress}}" id="OwnerAddress"  name="OwnerAddress">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="OwnerPhno">ဖုန်းနံပါတ်</label>
		  				<input id="OwnerPhno" value="{{$factory->OwnerPhno}}"  name="OwnerPhno">
		  			</div>
		  		</div>
	  		</p>
	  		<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label id="OwnerFax">ဖက်စ်</label>
		  				<input id="OwnerFax" value="{{$factory->OwnerFax}}" name="OwnerFax">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="OwnerEmail">အီးမေး</label>
		  				<input value="{{$factory->OwnerEmail}}" id="OwnerEmail" name="OwnerEmail">
		  			</div>
		  		</div>
	  		</p>
	  		<p>
				<div class="row">
					<div class="col-sm-5 text-center">
						<label id="OwnerPassport">နိုင်ငံကူးလက်မှတ်</label>
						<input id="OwnerPassport"  name="OwnerPassport" value="{{$factory->OwnerPassport}}">
					</div>
					<div class="col-sm-1">

					</div>
					<div class="col-sm-6 text-center">
						<label for="datepicker">အလုပ်ရုံစမ်းသပ် လည်ပတ်သည့်နေ့</label>
						<input type="date" name="TestingDate" id="datepicker" class="datepicker" value="{{$factory->TestingDate}}">
					</div>
				</div>
			</p>
	  		<p>
		  		<div class="row">
		  			<div class="col-sm-6 text-center">
						<label for="ContactAddress">စက်ရုံအမျိုးအစား</label>
						<div class="row">
						  <div class="col-sm-4 text-center">
							  <div class="custom-control custom-radio mb-3">
							   <input class="custom-control-input" id="TypeofFactory" name="TypeofFactory" type="radio" value="ကြီး" {{ $factory->TypeofFactory=='ကြီး' ? 'checked' : '' }} >
							   <label class="custom-control-label" for="TypeofFactory">ကြီး</label>
							 </div>
						 </div>
						 <div class="col-sm-4">
							 <div class="custom-control custom-radio mb-3">
								 <input  class="custom-control-input" id="TypeofFactory1"  type="radio" value="လတ်" name="TypeofFactory" {{ $factory->TypeofFactory=='လတ်' ? 'checked' : '' }}>
								 <label class="custom-control-label" for="TypeofFactory1">လတ်</label>
							 </div>
						 </div>
						 <div class="col-sm-4">
						  <div class="custom-control custom-radio mb-3">
							  <input  class="custom-control-input" id="TypeofFactory2"  type="radio" value="သေး" name="TypeofFactory" {{ $factory->TypeofFactory=='သေး' ? 'checked' : '' }}>
							  <label class="custom-control-label" for="TypeofFactory2">သေး</label>
						  </div>
					  </div>
					  </div>
					</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<!-- {{-- <label for="ContactAddress">အကြောင်းကြားစာပေးပို့မည့်လိပ်စာ</label>
		  				<input id="ContactAddress" value="{{$factory->ContactAddress}}"   name="ContactAddress"> --}} -->
		  			</div>
		  		</div>
	  		</p>
	  </div>
	  <div class="tab"><!-- စက်ရုံနှင့်ပတ်သက်သော အချက်အလက်များ <br> -->
		    <p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="PropertyType">ပိုင်ဆိုင်မှုအမျိုးအစား</label>
		  				<input id="PropertyType" value="{{$factory->PropertyType}}" oninput="this.className = ''" name="PropertyType">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="UsedPower">အသုံးပြုသည့်စွမ်းအင်</label>
		  				<input id="UsedPower" value="{{$factory->UsedPower}}" oninput="this.className = ''" name="UsedPower">
		  			</div>
		  		</div>
	  		</p>
	  		 <p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="WorkTypeId">လုပ်ငန်းအမျိုးအစား</label>
		  				<input id="WorkTypeId" value="{{$factory->WorkType}}" oninput="this.className = ''" name="WorkType">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="investment">ရင်းနှီးမြှုပ်နှံမှု (LDI/FDI)</label>
		  				<input id="investment" value="{{$factory->Investment}}" oninput="this.className = ''" name="Investment">
		  			</div>
		  		</div>
	  		</p>
	  		 <p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="ProducedProduct">ထုတ်လုပ်သည့်ပစ္စည်း (အဓိက)</label>
		  				<input id="ProducedProduct" value="{{$factory->ProducedProduct}}" oninput="this.className = ''" name="ProducedProduct" required="">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="ProducedOthers">ထုတ်လုပ်သည့်ပစ္စည်း(အခြား)</label>
		  				<input id="ProducedOthers" value="{{$factory->ProducedOthers}}" oninput="this.className = ''" name="ProducedOthers">
		  			</div>
		  		</div>
	  		</p>
	  		<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label id="RawMaterials">ကုန်ကြမ်းရရှိမှု</label>
		  				<input id="RawMaterials" value="{{$factory->RawMaterials}}" oninput="this.className = ''" name="RawMaterials">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="Goods">ကုန်ချောတင်ပို့မှု</label>
		  				<input id="Goods" value="{{$factory->Goods}}" oninput="this.className = ''" name="Goods">
		  			</div>
		  		</div>
	  		</p>
	  		<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="MonthlyAmounts">တစ်လထုတ်လုပ်နိုင်မှုပမာဏ</label>
		  				<input id="MonthlyAmounts" value="{{$factory->MonthlyAmounts}}" oninput="this.className = ''" name="MonthlyAmounts">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<!-- <input placeholder="ကုန်ချောတင်ပို့မှု" oninput="this.className = ''" name="export_product"> -->
		  			</div>
		  		</div>
	  		</p>
	  		<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">E/C အလုပ်ခန့်ထားမှု စာချူပ်</legend>
						    <div class="control-group">
								 <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input class="custom-control-input" id="customRadio" name="Contract" type="radio" value=0 {{ $factory->Contract==0 ? 'checked' : '' }}>
										  <label class="custom-control-label" for="customRadio">ဆောင်ရွက်ဆဲ</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="customRadio0"  type="radio" value=1 name="Contract" {{ $factory->Contract==1 ? 'checked' : '' }}>
											<label class="custom-control-label" for="customRadio0">ဆောင်ရွက်ပြီး</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  			<div class="col-sm-1"></div>
		  			<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">အချိန်ပိုလုပ်ကိုင်မှု</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="overtime" name="OverTime" type="radio" value=0 {{ $factory->OverTime==0 ? 'checked' : '' }}>
										  <label class="custom-control-label" for="overtime">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="overtime1" type="radio" value=1 name="OverTime" {{ $factory->OverTime==1 ? 'checked' : '' }}>
											<label class="custom-control-label" for="overtime1">မရှိ</label>
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
						    <legend class="scheduler-border">အချိန်ပိုလုပ်ကိုင်မှု ခွင့်ပြုချက်</legend>
						    <div class="control-group">
								 <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input class="custom-control-input" id="permission" name="OTPermit" value=0 type="radio" {{ $factory->OTPermit==0 ? 'checked' : '' }}>
										  <label class="custom-control-label" for="permission">ယူ</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="permission1"  type="radio" value=1 name="OTPermit" {{ $factory->OTPermit==1 ? 'checked' : '' }}>
											<label class="custom-control-label" for="permission1">မယူ</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset>
		  			</div>
		  			<div class="col-sm-1"></div>
		  			<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">လူမှုဖူလုံရေးဝင်ပြီး/မပြီး</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="SSB" name="SSB" type="radio" value=0 {{ $factory->SSB==0 ? 'checked' : '' }}>
										  <label class="custom-control-label" for="SSB">ပြီး</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="SSB1"  type="radio" name="SSB" value=1 {{ $factory->SSB==1 ? 'checked' : '' }}>
											<label class="custom-control-label" for="SSB1">မပြီး</label>
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
						    <legend class="scheduler-border">အလုပ်ရုံနှင့် အလုပ်သမားဥပဒေစစ်ဆေးရေးဦးစီးဌာနသို့ နို့တစ်ပေးခြင်း</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="customRadio1" name="NoticeStatus" value=0 type="radio" {{ $factory->SSB==0 ? 'checked' : '' }}>
										  <label class="custom-control-label" for="customRadio1">ပြီး</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="customRadio2"  type="radio" value=1 name="NoticeStatus" {{ $factory->SSB==1 ? 'checked' : '' }}>
											<label class="custom-control-label" for="customRadio2">မပြီး</label>
										</div>
									</div>
								 </div>
						    </div>
						</fieldset> 
		  			</div>
		  			<div class="col-sm-1"></div>
		  			<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေး <br>ဆောင်ရွက်ထားမှု</legend>
						    <div class="control-group">
							    <div class="row">
								 	<div class="col-sm-6 text-center">
								 		<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="Workplace_safe" name="SafteySide" value=0 type="radio" {{ $factory->SafteySide==0 ? 'checked' : '' }}>
										  <label class="custom-control-label" for="Workplace_safe">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="Workplace_safe1" value=1 type="radio" name="SafteySide" {{ $factory->SafteySide==1 ? 'checked' : '' }}>
											<label class="custom-control-label" for="Workplace_safe1">မရှိ</label>
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
					    <legend class="scheduler-border">ကျွမ်းကျင်ပညာရှင် ကြီးကြပ်အုပ်ချူပ်မှု </legend>
					    <div class="control-group">
						    <div class="row">
							 	<div class="col-sm-6 text-center">
							 		<div class="custom-control custom-radio mb-3">
									  <input  class="custom-control-input" id="administrativework" name="ManagementExpert" value=0 type="radio" {{ $factory->ManagementExpert==0 ? 'checked' : '' }}>
									  <label class="custom-control-label" for="administrativework">ရှိ</label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="custom-control custom-radio mb-3">
										<input  class="custom-control-input" id="administrativework1" type="radio" name="ManagementExpert" value=1 {{ $factory->ManagementExpert==1 ? 'checked' : '' }}>
										<label class="custom-control-label" for="administrativework1">မရှိ</label>
									</div>
								</div>
							 </div>
					    </div>
					</fieldset> 
	  			</div>
	  			<div class="col-sm-1"></div>
	  			<div class="col-sm-6 text-center">
	  				<fieldset class="scheduler-border">
					    <legend class="scheduler-border">သက်သာချောင်ချိရေး ဆောင်ရွက်မှုကိစ္စ</legend>
					    <div class="control-group">
						    <div class="row">
							 	<div class="col-sm-6 text-center">
							 		<div class="custom-control custom-radio mb-3">
									  <input  class="custom-control-input" id="Welfare" name="Welfare" type="radio" value=0 {{ $factory->Welfare==0 ? 'checked' : '' }}>
									  <label class="custom-control-label" for="Welfare">ရှိ</label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="custom-control custom-radio mb-3">
										<input  class="custom-control-input" id="Welfare1"  type="radio" name="Welfare" value=1 {{ $factory->Welfare==1 ? 'checked' : '' }}>
										<label class="custom-control-label" for="Welfare1">မရှိ</label>
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
	  		 <div class="row">
				<div class="col-sm-12">
					<table style="width:100%">
					  <tr>
					  	<td> </td>
					    <td>ကျား</td>
					    <td>မ </td>
					  </tr>
					  <tr>
					    <th>နိုင်ငံသားလုပ်သား</th>
					    <td><input type='text' value="{{$factory->CitizenMenWorker}}"  name="CitizenMenWorker"></td>
					    <td><input type='text' value="{{$factory->CitizenWomenWorker}}" name="CitizenWomenWorker"></td>
					  </tr>
					   <tr>
					    <th>နိုင်ငံခြားသားလုပ်သား</th>
					    <td><input type='text' value="{{$factory->ForeignerMenWorker}}" name="ForeignerMenWorker"></td>
					    <td><input type='text' value="{{$factory->ForeignerWomenWorker}}" name="ForeignerWomenWorker"></td>
					  </tr>
					</table> <br>
				</div>
			</div>
			<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="datepicker">လစာပေးရက်</label>
		  				<input value="{{$factory->SalaryDate}}" oninput="this.className = ''" name="SalaryDate" id="datepicker" class="datepicker">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<!-- <div class="col-sm-6 text-left">
		  				<input placeholder="သက်သာချောင်ချိရေး ဆောင်ရွက်မှုကိစ္စ" oninput="this.className = ''" name="Welfare">
		  			</div> -->
		  		</div>
	  		</p>
	  		<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="MinimumSalary">အနည်းဆုံးလစာ</label>
		  				<input id="MinimumSalary" value="{{$factory->MinimumSalary}}" oninput="this.className = ''" name="MinimumSalary">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="MaximumSalary">အများဆုံးလစာ</label>
		  				<input value="{{$factory->MaximumSalary}}" oninput="this.className = ''" name="MaximumSalary">
		  			</div>
		  		</div>
	  		</p>
	  
	       <p>&nbsp;အလုပ်ချိန်/ထမင်းစားနားချိန်</p>
	        <select name="WorkTimeType" id="worklaw">
	        	<option value="0">
	        		ပုံစံ - ဃ (က)
	        	</option>
	        	<option value="1">
	        		ပုံစံ - ဃ (ခ)
	        	</option>
	        </select> <br><br>

	         <p>
	  		<div class="row" id="law1">
	  			<div class="col-sm-12 text-center">
	  				<fieldset class="scheduler-border">
					    <legend class="scheduler-border">ပုံစံ - ဃ (က)</legend>
					    <div class="control-group">
					    	<span> တနင်္လာမှ စနေနေ့အထိ</span> <br>
					    	<div class="row">
					    		<div class="col-sm-4 text-center">
					    			အလုပ်စသည့်အချိန်
					    		</div>
					    		<div class="col-sm-4 text-right">
					    			 <input class="form-control" type="time"  id="example-time-input" name="MToSTimein" value="{{$factory->MToSTimein}}">
					    		</div>
					    	</div> <br>
					    	<div class="row">
					    		<div class="col-sm-4 text-center">
					    			အလုပ်ပြီးသည့်အချိန်
					    		</div>
					    		<div class="col-sm-4 text-right">
					    			 <input class="form-control" type="time"  id="example-time-input" name="MToSTimeout" value="{{$factory->MToSTimeout}}">
					    		</div>
					    	</div> <br>
					    	<div class="row">
					    		<div class="col-sm-4 text-center">
					    			ထမင်းစားနားချိန်
					    		</div>
					    		<div class="col-sm-4 text-right">
					    			 <input class="form-control" type="time" name="LunchTime" id="example-time-input" value="{{$factory->LunchTime}}">
					    		</div> 
					    	</div>
					    	<br> <p>ပုဒ်မ (၆၀) အရ ရက်သတ္တပတ်အလုပ်ပိတ်ရက် - တနင်္ဂနွေနေ့</p>
					    </div>
					</fieldset>
	  			</div>
	  		</div>
	  		<div class="row" id="law2">
	  			<div class="col-sm-12 text-center">
	  				<fieldset class="scheduler-border">
					    <legend class="scheduler-border">ပုံစံ - ဃ (ခ)</legend>
					    <div class="control-group">
					    	<div class="row">
					    		<div class="col-sm-6">
					    				<p>တနင်္လာမှ သောကြာအထိ</p>
					    			<div class="row">
							    		<div class="col-sm-6 text-center">
							    			အလုပ်စသည့်အချိန်
							    		</div>
							    		<div class="col-sm-6 text-right">
							    			 <input class="form-control" type="time" name="MToFTimein" id="example-time-input" value="{{$factory->MToFTimein}}">
							    		</div>
					    			</div> <br>
							    	<div class="row">
							    		<div class="col-sm-6 text-center">
							    			အလုပ်ပြီးသည့်အချိန်
							    		</div>
							    		<div class="col-sm-6 text-right">
							    			 <input class="form-control" type="time" name="MToFTimeout" id="example-time-input" value="{{$factory->MToFTimeout}}">
							    		</div>
							    	</div> <br>
							    	<div class="row">
							    		<div class="col-sm-6 text-center">
							    			ထမင်းစားနားချိန်
							    		</div>
							    		<div class="col-sm-6 text-right">
							    			 <input class="form-control" type="time" name="LunchTime1" id="example-time-input" value="{{$factory->LunchTime}}">
							    		</div> 
							    	</div>
					    		</div>
					    		<div class="col-sm-6">
					    			<p>စနေနေ့</p>
					    			<div class="row">
							    		<div class="col-sm-6 text-center">
							    			အလုပ်စသည့်အချိန်
							    		</div>
							    		<div class="col-sm-6 text-right">
							    			 <input class="form-control" type="time" name="STimein" id="example-time-input" value="{{$factory->STimein}}">
							    		</div>
					    			</div> <br>
							    	<div class="row">
							    		<div class="col-sm-6 text-center">
							    			အလုပ်ပြီးသည့်အချိန်
							    		</div>
							    		<div class="col-sm-6 text-right">
							    			 <input class="form-control" type="time" name="STimeout" id="example-time-input" value="{{$factory->STimeout}}"> 
							    		</div>
							    	</div> <br>
					    		</div>	
					    	</div>
					    	<br> <p>ပုဒ်မ (၆၀) အရ ရက်သတ္တပတ်အလုပ်ပိတ်ရက် - စနေနေ့တစ်ဝက်နှင့် တနင်္ဂနွေနေ့</p>
					    </div>
					</fieldset>
	  			</div>
	  		</div>
	  	</p>
	      <p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="SignatureName">အမည်</label>
		  				<input id="SignatureName" value="{{$factory->SignatureName}}" oninput="this.className = ''" name="SignatureName">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="SignatureRank">ရာထူး</label>
		  				<input id="SignatureRank" oninput="this.className = ''" name="SignatureRank" value="{{$factory->SignatureRank}}">
		  			</div>
		  		</div>
	  		</p>
	    <!-- <p><input placeholder="အမည်" oninput="this.className = ''" name="signname"></p>
	    <p><input placeholder="ရာထူး" oninput="this.className = ''" name="position"></p> -->
	  </div>
	  <div class="tab">
	  	<p><div class="row">
		  		<div class="col-sm-4 text-right">
		  			<label for="OwnerSentNotice">လုပ်ငန်းပိုင်ရှင်က ပေးပို့ရန်နို့တစ်စာ (၁၉၅၁ - ခုနှစ် အလုပ်ရုံများ အက်ဥပဒေပုဒ်မ ၈ အရ)</label>
		  		</div>
		  		<div class="col-sm-8">
		  	 		<input type="file" name="ownersentnotice" id='OwnerSentNotice'>
		  		</div>
	  		</div>
	  	</p>

		<p>
			<div class="row">
		  		<div class="col-sm-4 text-right">
		  			<label for="OwnerSentNotice">
						အလုပ်လုပ်ရန် ကာလအပိုင်းအခြားဆိုင်ရာ နို့တစ်စာ
	 
					</label>
		  		</div>
		  		<div class="col-sm-8">
		  	 		<input type="file"  name="WorkingTimeNotice" id='WorkingTimeNotice'>
		  		</div>
		  	</div>
		</p>
	  	<p>
	  		<div class="row">
		  		<div class="col-sm-4 text-right">
		  			<label for="WorkStartInform">
						လုပ်ငန်းစတင်လည်ပတ်မည်ဖြစ်ကြောင်း အကြောင်းကြားခြင်း

					</label>
		  		</div>
		  		<div class="col-sm-8">
		  	 		<input type="file"  name="WorkStartInform" id='WorkStartInform'>
		  		</div>
	  		</div>
	  	</p>
	  	<p>
	  		<div class="row">
		  		<div class="col-sm-4 text-right">
		  			<label for="ec_contract">E/C အလုပ်ခန့်ထားမှုစာချူပ်</label>
		  		</div>
		  		<div class="col-sm-8">
		  	 		<input type="file"  name="ec_contract" id='ec_contract'>
		  		</div>
	  		</div>	
	  	</p>
	  	<p><div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="MICLicense">MIC ခွင့်ပြုချက်</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" name="MICLicense" id='MICLicense'>
	  		</div>
	  	</div></p>
	  	<p><div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="CompanyNrc">ကုမ္ပဏီမှတ်ပုံတင်</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file"  name="CompanyNrc" id='CompanyNrc'>
	  		</div>
	  	</div>	</p>
	  	<p><div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="IndustryLicense">စက်မှု(၁) လိုင်စင်</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" name="IndustryLicense" id='IndustryLicense'>
	  		</div>
	  	</div>	</p>
	  	<p><div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="Import_Export_License">ထုတ်ကုန်/သွင်းကုန်လိုင်စင်</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" name="Import_Export_License" id='Import_Export_License'>
	  		</div>
	  	</div>	</p>
	  	<p><div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="Municipal_License">စည်ပင်လိုင်စင်</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file"  name="Municipal_License" id='Municipal_License'>
	  		</div>
	  	</div>	</p>
	  	
	  	<p><div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="other_license1">အခြားလိုင်စင်</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file"  name="other_license1" id='other_license1'>
	  		</div>
	  	</div>	</p>
	  	<p><div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="other_license2">အခြားလိုင်စင်</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file"  name="other_license2" id='other_license2'>
	  		</div>
	  	</div>	</p>
	  	<p><div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="other_license3">အခြားလိုင်စင်</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" name="other_license3" id='other_license3'>
	  		</div>
	  	</div>	</p>
	  	<p><div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="other_license4">အခြားလိုင်စင်</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" name="other_license4" id='other_license4'>
	  		</div>
	  	</div>	</p>
	  	<p><div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="other_license5">အခြားလိုင်စင်</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" name="other_license5" id='other_license5'>
	  		</div>
	  	</div>	</p>
		  	<p><div class="row">
		  		<div class="col-sm-4 text-right">
		  			<label for="other_license6">အခြားလိုင်စင်</label>
		  		</div>
		  		<div class="col-sm-8">
		  	 		<input type="file" name="other_license6" id='other_license6'>
		  		</div>
		  	</div>	
		  </p>	
	  	<br>  	 
	  </div>
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
    document.getElementById("nextBtn").innerHTML = "ပြင်ဆင်ရန်";
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


$( "#worklaw" ).change(function() {
  	var worklaw=$( "#worklaw" ).val();
	if(worklaw==0){
		$("#law1").css("display","block");
		$("#law2").css("display","none");
	}else{
		$("#law1").css("display","none");
		$("#law2").css("display","block");
	}
});
$(document).ready(function(){
    $('.timepicker').timepicker({});
});
</script>
@endsection