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

<form id="regForm" action="{{ route('factories.store') }}" method="post" enctype="multipart/form-data">
		 @csrf
		<!-- Circles which indicates the steps of the form: -->
  	<h1>စက်ရုံနှင့်ပတ်သက်သောအချက်အလက်များ ပြင်ရန်</h1>
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
					<input  name="FactoryName" id="FactoryName" value="{{$factory->FactoryName==null ? old('FactoryName') : $factory->FactoryName }}">
				</div>
				<div class="col-sm-1">

				</div>
				<div class="col-sm-6 text-center">
					<label for="EmailAdd">ဆက်သွယ်ရန် အီးမေး</label>
					<input  name="EmailAdd" id="EmailAdd" value="{{$factory->EmailAdd==null ? old('EmailAdd') : $factory->EmailAdd }}">
				</div>
			</div>
		</p>
		<p>
			<div class="row">
				<div class="col-sm-5 text-center">
					<label for="ContactFax">ဆက်သွယ်ရန် ဖက်စ်</label>
					<input  name="ContactFax" id="ContactFax" value="{{$factory->ContactFax==null ? old('ContactFax') : $factory->ContactFax }}">
				</div>
				<div class="col-sm-1">

				</div>
				<div class="col-sm-6 text-center">
					<label for="ContactPhone">ဆက်သွယ်ရန် ဖုန်းနံပါတ်</label>
					<input  name="ContactPhone" id="ContactPhone" value="{{$factory->ContactPhone==null ? old('ContactPhone') : $factory->ContactPhone }}">
				</div>
			</div>
		</p>
		<p>
			<div class="row">
				<div class="col-sm-5 text-center">
					<label for="NoticeAddress">အကြောင်းကြားစာပေးပို့မည့်လိပ်စာ</label>
					<input id="NoticeAddress"    name="NoticeAddress" value="{{$factory->NoticeAddress==null ? old('NoticeAddress') : $factory->NoticeAddress }}">
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-6 text-center">
					<label for="ContactAddress">ဆက်သွယ်ရန် လိပ်စာ

				  </label>
					<input  name="ContactAddress" id="ContactAddress" value="{{$factory->ContactAddress==null ? old('ContactAddress') : $factory->ContactAddress }}">
				</div>
			</div>
		</p>
		<p>
			<div class="row">
				<div class="col-sm-5 text-center">
					<label for="WorkedPower">အလုပ်ရုံပစ္စည်းထွက်လုပ်ကိုင်နိုင်သောအင်အား</label>
					<input   name="WorkedPower" id="WorkedPower" value="{{$factory->WorkedPower==null ? old('WorkedPower') : $factory->WorkedPower }}">
				</div>
				<div class="col-sm-1">

				</div>
				<div class="col-sm-6 text-center">
					<label for="ElectricPower">လျှပ်စစ်ဓာတ်အားကိုမည်သို့ရရှိသည်</label>
					<input id="ElectricPower" name="ElectricPower" value="{{$factory->ElectricPower==null ? old('ElectricPower') : $factory->ElectricPower }}">
				</div>
			</div>
		</p>

		<p>
			<div class="row">
				<div class="col-sm-5 text-center">
					<label for="prenoticedate">ကြိုတင်အကြောင်းကြားစာ ပေးပို့သည့်နေ့စွဲ</label>
					<input  type="date" name="PreNoticeDate" id="PreNoticeDate" value="{{$factory->PreNoticeDate==null ? old('PreNoticeDate') : $factory->PreNoticeDate }}">
				</div>
				<div class="col-sm-1">
					
				</div>
				<div class="col-sm-6 text-center">
					<label for="RegDate">စက်ရုံ အလုပ်မှတ်ပုံတင်သည့်နေ့စွဲ	</label>
					<input id="RegDate" name="RegDate" type="date" value="{{$factory->RegDate==null ? old('RegDate') : $factory->RegDate }}">
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
										  <label for="region_id">တိုင်းဒေသကြီး</label>
									  </div>
									  <div class="col-sm-6 text-left">
										  <select id="region_id" class="form-control" name="region_id">
											  <option value=""> Choose Region</option>
										  @foreach($region as $r)
										  <option value={{$r->id}} @if($factory->region_id==$r->id) selected @endif>{{$r->region_name}}</option>
										  @endforeach
										  </select>
									  </div>
								  </div> <br>
						  <div class="row">
							  <div class="col-sm-5 text-right">
								  <label for="district">ခရိုင်</label>
							  </div>
							  <div class="col-sm-6 text-left">
								  <select id="district_id" class="form-control" name="district_id">
								  	@if($district)
								  	<option value="{{$factory->district_id}}">{{$district}}
									  </option>
								  	@else
									  <option value="">Choose District
									  </option>
									 @endif
								  </select>
							  </div>
						  </div> <br>
						  <div class="row">
							  <div class="col-sm-5 text-right">
								  <label for="township_id">မြို့နယ်</label>
							  </div>
							  <div class="col-sm-6 text-left">
								  <select id="township_id" class="form-control" name="township_id">
								  	@if($township)
								  	<option value="{{$factory->township_id}}">{{$township}}
									  </option>
								  	@else
									  <option value="">Choose TownShip
									  </option>
									 @endif
								  </select>
								  </select>
							  </div>
						  </div> <br>
						  <div class="row">
							  <div class="col-sm-5 text-right">
								  <label for="zone">ဇုန်</label>
							  </div>
							  <div class="col-sm-6 text-left">
								  <select name="zone_id" id="zone_id" class="form-control">
								  		@if($township)
										  	<option value="{{$factory->zone_id}}">{{$zone}}
											  </option>
								  		@else
										  <option value="">Choose Zone
										  </option>
									 	@endif
								  </select>
							  </div>
						  </div><br>
						  <div class="row">
							  <div class="col-sm-5 text-right">
								  <label for="address">လိပ်စာ</label>
							  </div>
							  <div class="col-sm-6 text-left">
								  <textarea class="form-control form-control-alternative" rows="3" placeholder="အသေးစိတ်ထည့်ရန်" id='address' name="FactoryAddress">{{$factory->FactoryAddress==null ? old('FactoryAddress') : $factory->FactoryAddress }}</textarea>
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
	  				<textarea class="col-sm-12" rows="4" id="NextYearProcess" name="NextYearProcess">{{$factory->NextYearProcess==null ? old('NextYearProcess') : $factory->NextYearProcess }}</textarea>
	  			</div>
	  		</div>
	  	</p>

	  </div> 
	  <div class="tab">လုပ်ငန်းအမျိုးအစားအသုံးပြုရမည့်လျှပ်စစ်ဝန်အားနှင့်စက်စွမ်းအား
	  	<p>(အောက်ပါဇယားကွက်တွင်စက်ကိရိယာအသီးသီးတို့၏မြင်းကောင်ရေအားကိုဖော်ပြရန်)</p>
	  		<div class="row">
	 			<div class="col-sm-5 text-center">
	 				<label for="StreamHP">ရေနွေးငွေ့ဖြင့်လည်သောစက်</label>
					<input id="StreamHP" value="{{$factory->StreamHP==null ? old('StreamHP') : $factory->StreamHP }}"  name="StreamHP">
				</div>
				<div class="col-sm-1">
					
				</div>
	 			<div class="col-sm-6 text-left">
	 				<label for="GasHP">ဓာတ်ငွေ့၊ဓာတ်ဆီဖြင့်လည်သောစက်</label>
					<input id="GasHP" value="{{$factory->GasHP==null ? old('GasHP') : $factory->GasHP }}"  name="GasHP">
				</div>
			</div> <br>
			<div class="row">
	 			<div class="col-sm-5">
	 				<label for="MotorHP">လျှပ်စစ်ဖြင့်လည်သောစက်</label>
					<input id="MotorHP" value="{{$factory->MotorHP==null ? old('MotorHP') : $factory->MotorHP }}" name="MotorHP">
				</div>
				<div class="col-sm-1">
					
				</div>
	 			<div class="col-sm-6">
	 				<label for="WaterHP">ရေအားဖြင့်လည်သောစက်</label>
					<input id="WaterHP" value="{{$factory->WaterHP==null ? old('WaterHP') : $factory->WaterHP }}"  name="WaterHP">
				</div>
			</div>
			<br>
   			 

			<p>&nbsp; အလုပ်ရုံတွင်နောင်လာမည့်၁၂လအတွင်းခိုင်းစေမည့်အလုပ်သမား</p>
   			 <div class="row">
				<div class="col-sm-12">
					<table style="width:100%" border="1">
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
					    <td><input type='text' value="{{$factory->MenWorker==null ? old('MenWorker') : $factory->MenWorker }}" name="MenWorker" id="MenWorker" onkeyup="converunistring('man')"></td>
					    <td><input type='text' value="{{$factory->WomenWorker==null ? old('WomenWorker') : $factory->WomenWorker }}" name="WomenWorker" id="WomenWorker" onkeyup="converunistring('women')"></td>
					    <td><input type='text' value="{{$factory->AMenWorker==null ? old('AMenWorker') : $factory->AMenWorker }}" name="AMenWorker" id="AMenWorker"  onkeyup="converunistring('amen')" > </td>
					    <td><input type='text' value="{{$factory->AWomenWorker==null ? old('AWomenWorker') : $factory->AWomenWorker }}" name="AWomenWorker" id="AWomenWorker" onkeyup="converunistring('awomen')"></td>
					    <td><input type='text' value="{{$factory->CMenWorker==null ? old('CMenWorker') : $factory->CMenWorker }}" name="CMenWorker" id="CMenWorker" onkeyup="converunistring('cman')" ></td>
					    <td><input type='text' value="{{$factory->CWomenWorker==null ? old('CWomenWorker') : $factory->CWomenWorker }}" name="CWomenWorker" id="CWomenWorker" onkeyup="converunistring('cwomen')"></td>
					  </tr>
					   <tr>
					    <td>နေ့စား</td>
					    <td><input type='text' value="{{$factory->DailyMenWorker==null ? old('DailyMenWorker') : $factory->DailyMenWorker }}" name="DailyMenWorker" id="DailyMenWorker" onkeyup="converunistring('man')"></td>
					    <td><input type='text' value="{{$factory->DailyWomenWorker==null ? old('DailyWomenWorker') : $factory->DailyWomenWorker }}" name="DailyWomenWorker" id="DailyWomenWorker" onkeyup="converunistring('women')"></td>
					    <td><input type='text' value="{{$factory->ADailyMenWorker==null ? old('ADailyMenWorker') : $factory->ADailyMenWorker }}" name="ADailyMenWorker" id="ADailyMenWorker" onkeyup="converunistring('amen')"></td>
					    <td><input type='text' value="{{$factory->ADailyWomenWorker==null ? old('ADailyWomenWorker') : $factory->ADailyWomenWorker }}" name="ADailyWomenWorker" id="ADailyWomenWorker" onkeyup="converunistring('awomen')"></td>
					    <td><input type='text' value="{{$factory->CDailyMenWorker==null ? old('CDailyMenWorker') : $factory->CDailyMenWorker }}" name="CDailyMenWorker" id="CDailyMenWorker" onkeyup="converunistring('cman')"></td>
					    <td><input type='text' value="{{$factory->CDailyWomenWorker==null ? old('CDailyWomenWorker') : $factory->CDailyWomenWorker }}" name="CDailyWomenWorker" id="CDailyWomenWorker" onkeyup="converunistring('cwomen')"></td>
					  </tr>
					  <tr>
					    <td>ပုတ်ပြတ်</td>
					    <td><input type='text' value="{{$factory->PieceMenWorker==null ? old('PieceMenWorker') : $factory->PieceMenWorker }}" name="PieceMenWorker" id="PieceMenWorker" onkeyup="converunistring('man')"></td>
					    <td><input type='text' value="{{$factory->PieceWomenWorker==null ? old('PieceWomenWorker') : $factory->PieceWomenWorker }}" name="PieceWomenWorker" id="PieceWomenWorker" onkeyup="converunistring('women')"> </td>
					    <td><input type='text' value="{{$factory->APieceMenWorker==null ? old('APieceMenWorker') : $factory->APieceMenWorker }}" name="APieceMenWorker" id="APieceMenWorker" onkeyup="converunistring('amen')"></td>
					    <td><input type='text' value="{{$factory->APieceWomenWorker==null ? old('APieceWomenWorker') : $factory->APieceWomenWorker }}" name="APieceWomenWorker" id="APieceWomenWorker" onkeyup="converunistring('awomen')"></td>
					    <td><input type='text' value="{{$factory->CPieceMenWorker==null ? old('CPieceMenWorker') : $factory->CPieceMenWorker }}" name="CPieceMenWorker" id="CPieceMenWorker" onkeyup="converunistring('cman')"></td>
					    <td><input type='text' value="{{$factory->CPieceWomenWorker==null ? old('CPieceWomenWorker') : $factory->CPieceWomenWorker }}" name="CPieceWomenWorker" id="CPieceWomenWorker" onkeyup="converunistring('cwomen')"></td>
					  </tr>
					  <tr>
					    <td>စုစုပေါင်း</td>
					  <td> <input type="text" id="totalman" name="totalMan" value="{{old('totalMan')==null ? 0 : old('totalMan') }}"></td>
					    <td><input type="text" id="totalWomen" name="totalWomen" value="{{old('totalWomen')==null ? 0 : old('totalWomen') }}"></td>
					    <td><input type="text" id="totalaman" name="totalAman" value="{{old('totalAman')==null ? 0 : old('totalAman') }}"></td>
					    <td><input type="text" id="totalawomen" name="totalAwomen" value="{{old('totalAwomen')==null ? 0 : old('totalAwomen') }}"></td>
					    <td><input type="text" id="totalcman" name="totalCman" value="{{old('totalCman')==null ? 0 : old('totalCman') }}"></td>
					    <td><input type="text" id="totalcwomen" name="totalCwomen" value="{{old('totalCwomen')==null ? 0 : old('totalCwomen') }}"></td>
					  </tr>
					</table> <br>
				</div>
			</div>

			<input type="hidden" id="total_man" name="totalMaleWorker" value="{{old('totalMaleWorker')==null ? 0 : old('totalMaleWorker') }}">
			<input type="hidden" id="total_women" name="totalFemaleWorker" value="{{old('totalFemaleWorker')==null ? 0 : old('totalFemaleWorker') }}">

			<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label id="datepicker">အလုပ်ရုံစတင် လုပ်ကိုင်သောရက်စွဲ</label>
		  				<input type="date" value="{{$factory->StartDate==null ? old('StartDate') : $factory->StartDate }}"   name="StartDate" id="datepicker" class="datepicker">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="ManagerName">မန်နေဂျာအမည်</label>
		  				<input id="ManagerName" value="{{$factory->ManagerName==null ? old('ManagerName') : $factory->ManagerName }}"  name="ManagerName">
		  			</div>
		  		</div>
	  		</p>
	  		<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="OwnerName">လုပ်ငန်းပိုင်ရှင်အမည်</label>
		  				<input value="{{$factory->OwnerName==null ? old('OwnerName') : $factory->OwnerName }}"  name="OwnerName" id="OwnerName">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="OwnerNrc">မှတ်ပုံတင်နံပါတ်</label>
		  				<input id="OwnerNrc" value="{{$factory->OwnerNrc==null ? old('OwnerNrc') : $factory->OwnerNrc }}"  name="OwnerNrc">
		  			</div>
		  		</div>
	  		</p>
	  		<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="OwnerAddress">လိပ်စာ</label>
		  				<input value="{{$factory->OwnerAddress==null ? old('OwnerAddress') : $factory->OwnerAddress }}" id="OwnerAddress"  name="OwnerAddress">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="OwnerPhno">ဖုန်းနံပါတ်</label>
		  				<input id="OwnerPhno" value="{{$factory->OwnerPhno==null ? old('OwnerPhno') : $factory->OwnerPhno }}"  name="OwnerPhno">
		  			</div>
		  		</div>
	  		</p>
	  		<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label id="OwnerFax">ဖက်စ်</label>
		  				<input id="OwnerFax" value="{{$factory->OwnerFax==null ? old('OwnerFax') : $factory->OwnerFax }}" name="OwnerFax">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="OwnerEmail">အီးမေး</label>
		  				<input value="{{$factory->OwnerEmail==null ? old('OwnerEmail') : $factory->OwnerEmail }}" id="OwnerEmail" name="OwnerEmail">
		  			</div>
		  		</div>
	  		</p>
	  		<p>
				<div class="row">
					<div class="col-sm-5 text-center">
						<label id="OwnerPassport">နိုင်ငံကူးလက်မှတ်</label>
						<input id="OwnerPassport"  name="OwnerPassport" value="{{$factory->OwnerPassport==null ? old('OwnerPassport') : $factory->OwnerPassport }}">
					</div>
					<div class="col-sm-1">

					</div>
					<div class="col-sm-6 text-center">
						<label for="datepicker">အလုပ်ရုံစမ်းသပ် လည်ပတ်သည့်နေ့</label>
						<input type="date" name="TestingDate" id="datepicker" class="datepicker" value="{{$factory->TestingDate==null ? old('TestingDate') : $factory->TestingDate }}">
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
		  				{{-- <label for="ContactAddress">အကြောင်းကြားစာပေးပို့မည့်လိပ်စာ</label>
		  				<input id="ContactAddress" value="{{$factory->ContactAddress}}"   name="ContactAddress"> --}}
		  			</div>
		  		</div>
	  		</p>
	  </div>
	  <div class="tab"><!-- စက်ရုံနှင့်ပတ်သက်သော အချက်အလက်များ <br> -->
		    <p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
						  <label for="PropertyType">ပိုင်ဆိုင်မှုအမျိုးအစား</label>
						  <select name="PropertyType" id="PropertyType" class="form-control">
							<option value="နိုင်ငံ" @if($factory->PropertyType=="နိုင်ငံ") selected @endif>နိုင်ငံ</option>
							<option value="သမဝါယမ" @if($factory->PropertyType=="သမဝါယမ") selected @endif>သမဝါယမ</option>
							<option value="ပုဂ္ဂလိက" @if($factory->PropertyType=="ပုဂ္ဂလိက") selected @endif>ပုဂ္ဂလိက</option>
							<option value="နိုင်ငံခြား" @if($factory->PropertyType =="နိုင်ငံခြား") selected @endif>နိုင်ငံခြား</option>
							<option value="ဖက်စပ်" @if($factory->PropertyType =="ဖက်စပ်") selected @endif>ဖက်စပ်</option>
						</select>
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="UsedPower">အသုံးပြုသည့်စွမ်းအင်</label>
		  				<input id="UsedPower" value="{{$factory->UsedPower==null ? old('UsedPower') : $factory->UsedPower }}" oninput="this.className = ''" name="UsedPower">
		  			</div>
		  		</div>
	  		</p>
	  		 <p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="MonthlyAmounts">တစ်လထုတ်လုပ်နိုင်မှုပမာဏ</label>
		  				<input id="MonthlyAmounts" value="{{$factory->MonthlyAmounts==null ? old('MonthlyAmounts') : $factory->MonthlyAmounts }}" oninput="this.className = ''" name="MonthlyAmounts">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="investment">ရင်းနှီးမြှုပ်နှံမှု (LDI/FDI)</label>
						  {{-- <input id="investment" value="{{$factory->Investment}}" oninput="this.className = ''" name="Investment"> --}}
						<select name="Investment" id="investment" class="form-control">
							<option value="LDI" @if($factory->Investment=="LDI") selected @endif>LDI</option>
							<option value="FDI" @if($factory->Investment=="FDI") selected @endif>FDI</option>
						</select>
		  			</div>
		  		</div>
	  		</p>
	  		 <p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="ProducedProduct">ထုတ်လုပ်သည့်ပစ္စည်း (အဓိက)</label>
		  				<input id="ProducedProduct" value="{{$factory->ProducedProduct==null ? old('ProducedProduct') : $factory->ProducedProduct }}" oninput="this.className = ''" name="ProducedProduct" required="">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="ProducedOthers">ထုတ်လုပ်သည့်ပစ္စည်း(အခြား)</label>
		  				<input id="ProducedOthers" value="{{$factory->ProducedOthers==null ? old('ProducedOthers') : $factory->ProducedOthers }}" oninput="this.className = ''" name="ProducedOthers">
		  			</div>
		  		</div>
	  		</p>
	  		<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label id="RawMaterials">ကုန်ကြမ်းရရှိမှု</label>
		  				<input id="RawMaterials" value="{{$factory->RawMaterials==null ? old('RawMaterials') : $factory->RawMaterials }}" oninput="this.className = ''" name="RawMaterials">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="Goods">ကုန်ချောတင်ပို့မှု</label>
		  				<input id="Goods" value="{{$factory->Goods==null ? old('Goods') : $factory->Goods }}" oninput="this.className = ''" name="Goods">
		  			</div>
		  		</div>
	  		</p>
	  		
	  		<p>
		  		<div class="row">
		  			<div class="col-sm-12 text-center">
						{{-- <label for="WorkTypeId">လုပ်ငန်းအမျိုးအစား</label>
						  <input id="WorkTypeId"  oninput="this.className = ''" name="WorkType"> --}}
						  <fieldset class="scheduler-border">
						    <legend class="scheduler-border">လုပ်ငန်းအမျိုးအစား (အပြည်ပြည်ဆိုင်ရာ စီးပွားရေးလုပ်ငန်းအမျိုးအစား ခွဲခြားခြင်းစံထားအညွှန်း)</legend>
						    <div class="control-group">
								 <div class="row">
								 	<div class="col-sm-5 text-center">
										 <label for="section_id">Section</label>
										 <select name="section_id" id="section_id" class="form-control">
											<option value="">Choose Section</option>
											@foreach ($section as $s )
											<option value="{{$s->id}}" {{$s->id==$factory->section_id ? 'selected' : ''}}>{{$s->SectionName}}</option>
											@endforeach
										</select>
									</div>
									<div class="col-sm-1">

									</div>
									<div class="col-sm-6">
										<label for="division_id">Division</label>
										 <select name="division_id" id="division_id" class="form-control">
											 @if($division!==null)
											<option value="{{$division->id}}">{{$division->division_name}}</option>
											@else
											<option value="">Choose Division</option>
											@endif
										</select>
									</div>
								 </div>

								 <div class="row">
									<div class="col-sm-5 text-center">
										<label for="group_id">Group</label>
										<select name="group_id" id="group_id" class="form-control">
											@if($group!==null)
											<option value="{{$group->id}}">{{$group->group_name}}</option>
											@else
											<option value="">Choose Group</option>
											@endif
										</select>
								   </div>
								   <div class="col-sm-1">

								   </div>
								   <div class="col-sm-6">
									   <label for="class_name">Class</label>
										<select name="class_name" id="class_name" class="form-control">
											@if($class!==null)
											<option value="{{$class->class_code}}">{{$class->class_name}}</option>
											@else
											<option value="">Choose Class Name</option>
											@endif
										</select>
								   </div>
								</div>

						    </div>
						</fieldset>
		  			</div>
		  			{{-- <div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-center"> --}}
		  				<!-- <input placeholder="ကုန်ချောတင်ပို့မှု" oninput="this.className = ''" name="export_product"> -->
		  			{{-- </div> --}}
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
						    <legend class="scheduler-border">လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေး နှင့် ကျန်းမာရေးကော်မတီ</legend>
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

	  	 <p>
				<div class="row">
					<div class="col-sm-5 text-center">
						<fieldset class="scheduler-border">
						  <legend class="scheduler-border">မတော်တဆထိခိုက်မှုများနှင့် ရောဂါဖြစ်ပွားမှုမှတ်တမ်းစာအုပ်</legend>
						  <div class="control-group">
							  <div class="row">
								   <div class="col-sm-6 text-center">
									   <div class="custom-control custom-radio mb-3">
										<input  class="custom-control-input" id="AccidentRecordBook" name="AccidentRecordBook" value='ရှိ' type="radio" {{ $factory->AccidentRecordBook=='ရှိ' ? 'checked' : '' }}>
										<label class="custom-control-label" for="AccidentRecordBook">ရှိ</label>
									  </div>
								  </div>
								  <div class="col-sm-6">
									  <div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="AccidentRecordBook1" type="radio" name="AccidentRecordBook" value='မရှိ' {{ $factory->AccidentRecordBook=='မရှိ' ? 'checked' : '' }}>
										  <label class="custom-control-label" for="AccidentRecordBook1" >မရှိ</label>
									  </div>
								  </div>
							   </div>
						  </div>
					  </fieldset> 
					</div>
					<div class="col-sm-1"></div>
					<div class="col-sm-6 text-center">
						<fieldset class="scheduler-border">
						  <legend class="scheduler-border">လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေးနှင့် ကျန်းမာရေးဆိုင်ရာတာဝန်ခံ</legend>
						  <div class="control-group">
							  <div class="row">
								   <div class="col-sm-6 text-center">
									   <div class="custom-control custom-radio mb-3">
										<input  class="custom-control-input" id="SafetyHealth" name="SafetyHealth" type="radio" value='ရှိ' {{ $factory->SafetyHealth=='ရှိ' ? 'checked' : '' }}>
										<label class="custom-control-label" for="SafetyHealth" onclick="SafetyHealth('1')">ရှိ</label>
									  </div>
								  </div>
								  <div class="col-sm-6">
									  <div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="SafetyHealth1"  type="radio" name="SafetyHealth" value='မရှိ' {{ $factory->SafetyHealth=='မရှိ' ? 'checked' : '' }}>
										  <label class="custom-control-label" for="SafetyHealth1" onclick="SafetyHealth(2)">မရှိ</label>
									  </div>
								  </div>
							   </div>
							   <div class="row" id='safetyhealth'>
									<label for="safetyrank" class="text-center">ရာထူး</label> <br> 
									<select name="SafetyRank" id="safetyrank" class="form-control">
										<option value="">Choose Position</option>
										<option value="မန်နေဂျာ" {{ $factory->SafetyRank=='မန်နေဂျာ' ? 'selected' : '' }}>မန်နေဂျာ</option>
										<option value="အရာရှိ" {{ $factory->SafetyRank=='အရာရှိ' ? 'selected' : '' }}>အရာရှိ</option>
										<option value="ကြီးကြပ်ရေးမှူး" {{ $factory->SafetyRank=='ကြီးကြပ်ရေးမှူး' ? 'selected' : '' }}>ကြီးကြပ်ရေးမှူး</option>
										<option value="ညှိနှိုင်းရေးမှူး" {{ $factory->SafetyRank=='ညှိနှိုင်းရေးမှူး' ? 'selected' : '' }}>ညှိနှိုင်းရေးမှူး</option>
									</select>
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
					<table style="width:100%" border="1">
					  <tr>
					  	<td> </td>
					    <td>ကျား</td>
					    <td>မ </td>
					  </tr>
					  <tr>
					    <th>နိုင်ငံသားလုပ်သား</th>
					    <td><input type='text' value="{{$factory->CitizenMenWorker==null ? old('CitizenMenWorker') : $factory->CitizenMenWorker }}"  name="CitizenMenWorker" id="CitizenMenWorker"></td>
					    <td><input type='text' value="{{$factory->CitizenWomenWorker==null ? old('CitizenWomenWorker') : $factory->CitizenWomenWorker }}" name="CitizenWomenWorker" id="CitizenWomenWorker"></td>
					  </tr>
					   <tr>
					    <th>နိုင်ငံခြားသားလုပ်သား</th>
					    <td><input type='text' value="{{$factory->ForeignerMenWorker==null ? old('ForeignerMenWorker') : $factory->ForeignerMenWorker }}" name="ForeignerMenWorker" id="ForeignerMenWorker"></td>
					    <td><input type='text' value="{{$factory->ForeignerWomenWorker==null ? old('ForeignerWomenWorker') : $factory->ForeignerWomenWorker }}" name="ForeignerWomenWorker" id="ForeignerWomenWorker"></td>
					  </tr>
					</table> <br>
				</div>
			</div>
			<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="datepicker">လစာပေးရက်</label>
						  {{-- <input value="{{$factory->SalaryDate}}" oninput="this.className = ''" name="SalaryDate" id="datepicker" class="datepicker"> --}}
						  <select name="SalaryDate" id="SalaryDate" class="form-control">
							<option value="လကုန်ရက်" @if($factory->SalaryDate=='လကုန်ရက်') selected @endif>လကုန်ရက်</option>
							<option value="လဆန်း(၁)ရက်" @if($factory->SalaryDate=='လဆန်း(၁)ရက်') selected @endif>လဆန်း(၁)ရက်</option>
							<option value="လဆန်း(၂)ရက်" @if($factory->SalaryDate=='လဆန်း(၂)ရက်') selected @endif>လဆန်း(၂)ရက်</option>
							<option value="လဆန်း(၃)ရက်" @if($factory->SalaryDate=='လဆန်း(၃)ရက်') selected @endif>လဆန်း(၃)ရက်</option>
							<option value="လဆန်း(၄)ရက်" @if($factory->SalaryDate=='လဆန်း(၄)ရက်') selected @endif>လဆန်း(၄)ရက်</option>
							<option value="လဆန်း(၅)ရက်" @if($factory->SalaryDate=='လဆန်း(၅)ရက်') selected @endif>လဆန်း(၅)ရက်</option>
							<option value="လဆန်း(၆)ရက်" @if($factory->SalaryDate=='လဆန်း(၆)ရက်') selected @endif>လဆန်း(၆)ရက်</option>
							<option value="လဆန်း(၇)ရက်" @if($factory->SalaryDate=='လဆန်း(၇)ရက်') selected @endif>လဆန်း(၇)ရက်</option>
							<option value="လဆန်း(၈)ရက်" @if($factory->SalaryDate=='လဆန်း(၈)ရက်') selected @endif>လဆန်း(၈)ရက်</option>
							<option value="လဆန်း(၉)ရက်" @if($factory->SalaryDate=='လဆန်း(၉)ရက်') selected @endif>လဆန်း(၉)ရက်</option>
							<option value="လဆန်း(၁၀)ရက်" @if($factory->SalaryDate=='လဆန်း(၁၀)ရက်') selected @endif>လဆန်း(၁၀)ရက်</option>

						</select>
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
		  				<input id="MinimumSalary" value="{{$factory->MinimumSalary==null ? old('MinimumSalary') : $factory->MinimumSalary }}" oninput="this.className = ''" name="MinimumSalary">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="MaximumSalary">အများဆုံးလစာ</label>
		  				<input value="{{$factory->MaximumSalary==null ? old('MaximumSalary') : $factory->MaximumSalary }}" oninput="this.className = ''" name="MaximumSalary">
		  			</div>
		  		</div>
	  		</p>
	  
	       <p>&nbsp;အလုပ်ချိန်/ထမင်းစားနားချိန်</p>
	        <select name="WorkTimeType" id="worklaw">
	        	<option value="0" {{ $factory->WorkTimeType=='0' ? 'selected' : '' }}>
	        		ပုံစံ - ဃ (က)
	        	</option>
	        	<option value="1" {{ $factory->WorkTimeType=='1' ? 'selected' : '' }}>
	        		ပုံစံ - ဃ (ခ)
				</option>
				<option value="2" {{ $factory->WorkTimeType=='2' ? 'selected' : '' }}>
						အခြား	
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
					    			 <input class="form-control" type="time"  id="example-time-input" name="MToSTimein" value="{{$factory->MToSTimein==null ? old('MToSTimein') : $factory->MToSTimein }}">
					    		</div>
					    	</div> <br>
					    	<div class="row">
					    		<div class="col-sm-4 text-center">
					    			အလုပ်ပြီးသည့်အချိန်
					    		</div>
					    		<div class="col-sm-4 text-right">
					    			 <input class="form-control" type="time"  id="example-time-input" name="MToSTimeout" value="{{$factory->MToSTimeout==null ? old('MToSTimeout') : $factory->MToSTimeout }}">
					    		</div>
					    	</div> <br>
					    	<div class="row">
									<div class="col-sm-4 text-center">
										ထမင်းစားနားချိန်
									</div>
									<div class="col-sm-4 text-center">  
										 <input class="form-control" type="time" name="LunchStartTimeLaw1" id="example-time-input" value="{{$factory->LunchStartTime}}"> မှ<br>
										 <input class="form-control" type="time" name="LunchEndTimeLaw1" id="example-time-input" value="{{$factory->LunchEndTime}}"> အထိ
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
							    			 <input class="form-control" type="time" name="MToFTimein" id="example-time-input" value="{{$factory->MToFTimein==null ? old('MToFTimein') : $factory->MToFTimein }}">
							    		</div>
					    			</div> <br>
							    	<div class="row">
							    		<div class="col-sm-6 text-center">
							    			အလုပ်ပြီးသည့်အချိန်
							    		</div>
							    		<div class="col-sm-6 text-right">
							    			 <input class="form-control" type="time" name="MToFTimeout" id="example-time-input" value="{{$factory->MToFTimeout==null ? old('MToFTimeout') : $factory->MToFTimeout }}">
							    		</div>
							    	</div> <br>
							    	<div class="row">
											<div class="col-sm-6 text-center">
												ထမင်းစားနားချိန်
											</div>
											<div class="col-sm-6 text-center">
												  
												 <input class="form-control" type="time" name="LunchStartTimeLaw2" id="example-time-input"  value="{{$factory->LunchStartTime}}"> မှ<br>
												 <input class="form-control" type="time" name="LunchEndTimeLaw2" id="example-time-input" value="{{$factory->LunchEndTime}}"> အထိ
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
							    			 <input class="form-control" type="time" name="STimein" id="example-time-input" value="{{$factory->STimein==null ? old('STimein') : $factory->STimein }}">
							    		</div>
					    			</div> <br>
							    	<div class="row">
							    		<div class="col-sm-6 text-center">
							    			အလုပ်ပြီးသည့်အချိန်
							    		</div>
							    		<div class="col-sm-6 text-right">
							    			 <input class="form-control" type="time" name="STimeout" id="example-time-input" value="{{$factory->STimeout==null ? old('STimeout') : $factory->STimeout }}"> 
							    		</div>
							    	</div> <br>
					    		</div>	
					    	</div>
					    	<br> <p>ပုဒ်မ (၆၀) အရ ရက်သတ္တပတ်အလုပ်ပိတ်ရက် - စနေနေ့တစ်ဝက်နှင့် တနင်္ဂနွေနေ့</p>
					    </div>
					</fieldset>
	  			</div>
			  </div>
			  
			  <div class="row" id="law3">
					<div class="col-sm-12 text-center">
						<fieldset class="scheduler-border">
						  <legend class="scheduler-border">အခြား</legend>
						  <div class="control-group">
							  <span> တနင်္လာမှ သောကြာအထိ
								</span> <br>
							  <div class="row">
								  <div class="col-sm-4 text-center">
									  အလုပ်စသည့်အချိန်
								  </div>
								  <div class="col-sm-4 text-right">
									   <input class="form-control" type="time"  id="example-time-input" name="MToFTimeInOther" value="{{$factory->MToFTimeInOther==null ? old('MToFTimeInOther') : $factory->MToFTimeInOther }}" >
								  </div>
							  </div> <br>
							  <div class="row">
								  <div class="col-sm-4 text-center">
									  အလုပ်ပြီးသည့်အချိန်
								  </div>
								  <div class="col-sm-4 text-right">
									   <input class="form-control" type="time"  id="example-time-input" name="MToFTimeoutOther" value="{{$factory->MToFTimeoutOther==null ? old('MToFTimeoutOther') : $factory->MToFTimeoutOther }}">
								  </div>
							  </div> <br>
							  <div class="row">
								  <div class="col-sm-4 text-center">
									  ထမင်းစားနားချိန်
								  </div>
								  <div class="col-sm-4 text-center">
										
									   <input class="form-control" type="time" name="LunchStartTimeLaw3" id="example-time-input" value="{{$factory->LunchStartTime}}"> မှ<br>
									   <input class="form-control" type="time" name="LunchEndTimeLaw3" id="example-time-input" value="{{$factory->LunchEndTime}}"> အထိ
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
		  				<label for="SignatureName">စစ်ဆေးသူ အမည်</label>
		  				<input id="SignatureName" value="{{$factory->SignatureName==null ? old('SignatureName') : $factory->SignatureName }}" oninput="this.className = ''" name="SignatureName">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-left">
		  				<label for="SignatureRank">စစ်ဆေးသူ ရာထူး</label>
		  				<input id="SignatureRank" oninput="this.className = ''" name="SignatureRank" value="{{$factory->SignatureRank==null ? old('SignatureRank') : $factory->SignatureRank }}">
		  			</div>
		  		</div>
	  		</p>

	  		<p>
					<div class="row">
						<div class="col-sm-5 text-center">
							<label for="SubscriberName">စာရင်းသွင်းသူ အမည်</label>
							<input id="SubscriberName" oninput="this.className = ''" name="SubscriberName" value="{{$factory->SubscriberName==null ? old('SubscriberName') : $factory->SubscriberName }}">
						</div>
						<div class="col-sm-1">
  
						</div>
						<div class="col-sm-6 text-center">
							<label for="SubscriberRank">စာရင်းသွင်းသူ ရာထူး</label>
							<input id="SubscriberRank" oninput="this.className = ''" name="SubscriberRank" value="{{$factory->SubscriberRank==null ? old('SubscriberRank') : $factory->SubscriberRank }}">
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
	  			<label for="other_license1">အခြားလိုင်စင် (၁)</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file"  name="other_license1" id='other_license1'>
	  		</div>
	  	</div>	</p>
	  	<p><div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="other_license2">အခြားလိုင်စင် (၂)</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file"  name="other_license2" id='other_license2'>
	  		</div>
	  	</div>	</p>
	  	<p><div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="other_license3">အခြားလိုင်စင် (၃)</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" name="other_license3" id='other_license3'>
	  		</div>
	  	</div>	</p>
	  	<p><div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="other_license4">အခြားလိုင်စင် (၄)</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" name="other_license4" id='other_license4'>
	  		</div>
	  	</div>	</p>
	  	<p><div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="other_license5">အခြားလိုင်စင် (၅)</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" name="other_license5" id='other_license5'>
	  		</div>
	  	</div>	</p>
		  	<p><div class="row">
		  		<div class="col-sm-4 text-right">
		  			<label for="other_license6">အခြားလိုင်စင် (၆)</label>
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


//for work time
$("#law2").css("display","none");
$("#law3").css("display","none");		
$( "#worklaw" ).change(function() {
  	var worklaw=$( "#worklaw" ).val();
	if(worklaw==0){
		$("#law1").css("display","block");
		$("#law2").css("display","none");
		$("#law3").css("display","none");		
	}else if(worklaw==1){
		$("#law1").css("display","none");
		$("#law2").css("display","block");
		$("#law3").css("display","none");
	}else{
		$("#law1").css("display","none");
		$("#law2").css("display","none");
		$("#law3").css("display","block");
	}
});
//end
$(document).ready(function(){
    $('.timepicker').timepicker({});
});

$('#region_id').change(function(){ 
	   var id = $(this).val();
	   if(id != '')
	   {
		$.ajax({
		 url:"{{ route('locationregion.fetch') }}",
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
		 url:"{{ route('locationtownship.fetch') }}",
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
		 url:"{{ route('locationZone.fetch') }}",
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

   //for Safety Health if has show 
$('#safetyhealth').hide();
function SafetyHealth(i){
   if(i=='1'){
	   $('#safetyhealth').show();
   }else{
	$('#safetyhealth').hide();
   }
}
//end

$( document ).ready(function() {
	$('#section_id').change(function(){ 
	   var id = $(this).val();
	   if(id != '')
	   {
		$.ajax({
		 url:"{{ route('WorkTypeSection.fetch') }}",
		 method:"GET",
		 data:{id:id},
		 success:function(data){
			console.log(data);
			$.each(data, function (i, item) {
					$('#division_id').append($('<option>', { 
						value: item.id,
						text : item.division_name 
					}));
				});
		   }
		});
	   }
   });

   $('#division_id').change(function(){ 
	   var id = $(this).val();
	   if(id != '')
	   {
		$.ajax({
		 url:"{{ route('WorkTypeGroup.fetch') }}",
		 method:"GET",
		 data:{id:id},
		 success:function(data){
			console.log(data);
			$.each(data, function (i, item) {
					$('#group_id').append($('<option>', { 
						value: item.id,
						text : item.group_name 
					}));
				});
		   }
		});
	   }
   });

   $('#group_id').change(function(){ 
	   var id = $(this).val();
	   if(id != '')
	   {
		$.ajax({
		 url:"{{ route('WorkTypeClass.fetch') }}",
		 method:"GET",
		 data:{id:id},
		 success:function(data){
			console.log(data);
			$.each(data, function (i, item) {
					$('#class_name').append($('<option>', { 
						value: item.class_code,
						text : item.class_name 
					}));
				});
		   }
		});
	   }
   });

});

$('#region_id').change(function(){ 
	   var id = $(this).val();
	   if(id != '')
	   {
		$.ajax({
		 url:"{{ route('locationregion.fetch') }}",
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
		 url:"{{ route('locationtownship.fetch') }}",
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
		 url:"{{ route('locationZone.fetch') }}",
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


   //for  man sum

function converunistring(type){
	if(type=='man'){
		var num1=document.getElementById("MenWorker").value;
		var num2=document.getElementById('DailyMenWorker').value;
		var num3=document.getElementById('PieceMenWorker').value;
	}else if(type=='women'){
		var num1=document.getElementById("WomenWorker").value;
		var num2=document.getElementById('DailyWomenWorker').value;
		var num3=document.getElementById('PieceWomenWorker').value;
	}else if(type=='amen'){
		var num1=document.getElementById("AMenWorker").value;
		var num2=document.getElementById('ADailyMenWorker').value;
		var num3=document.getElementById('APieceMenWorker').value;
	}else if(type=='awomen'){
		var num1=document.getElementById("AWomenWorker").value;
		var num2=document.getElementById('ADailyWomenWorker').value;
		var num3=document.getElementById('APieceWomenWorker').value;
	}else if(type=='cman'){
		var num1=document.getElementById("CMenWorker").value;
		var num2=document.getElementById('CDailyMenWorker').value;
		var num3=document.getElementById('CPieceMenWorker').value;
	}else if(type=='cwomen'){
		var num1=document.getElementById("CWomenWorker").value;
		var num2=document.getElementById('CDailyWomenWorker').value;
		var num3=document.getElementById('CPieceWomenWorker').value;
	}
	

	// alert(num1);
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
var mynum3 = num3.replace(/[၀၁၂၃၄၅၆၇၈၉]/g, function(s) {
	return englishDigits[s];
}); 
var num4=parseInt(mynum1)+parseInt(mynum2)+parseInt(mynum3);

var num5=num4.toString();
var sum=num5.replace(/[0123456789]/g,function(s){
	return myanDigits[s];
});


if(type=='man'){
	//sum for man
	$('#totalman').val(sum);
	console.log(sum);	
	}else if(type=='women'){
		$('#totalWomen').val(sum);
	}else if(type=='amen'){
		$('#totalaman').val(sum);
	}else if(type=='awomen'){
		$('#totalawomen').val(sum);
	}else if(type=='cman'){
		$('#totalcman').val(sum);
	}else if(type='cwomen'){
		$('#totalcwomen').val(sum);
	}

	///for sum total man and total women
	var man1=document.getElementById("totalman").value;
		var man2=document.getElementById('totalaman').value;
		var man3=document.getElementById('totalcman').value;
		var woman1=document.getElementById("totalWomen").value;
		var woman2=document.getElementById('totalawomen').value;
		var woman3=document.getElementById('totalcwomen').value;
	//for total man change to burmese
var myman1 = man1.replace(/[၀၁၂၃၄၅၆၇၈၉]/g, function(s) {
                  return englishDigits[s];
              }); 
var myman2 = man2.replace(/[၀၁၂၃၄၅၆၇၈၉]/g, function(s) {
                  return englishDigits[s];
              }); 
var myman3 = man3.replace(/[၀၁၂၃၄၅၆၇၈၉]/g, function(s) {
	return englishDigits[s];
}); 
//for total women change to burmese

var mywomen1 = woman1.replace(/[၀၁၂၃၄၅၆၇၈၉]/g, function(s) {
                  return englishDigits[s];
              }); 
var mywomen2 = woman2.replace(/[၀၁၂၃၄၅၆၇၈၉]/g, function(s) {
                  return englishDigits[s];
              }); 
var mywomen3 = woman3.replace(/[၀၁၂၃၄၅၆၇၈၉]/g, function(s) {
	return englishDigits[s];
});

///sum man
var man=parseInt(myman1)+parseInt(myman2)+parseInt(myman3);
var totalman = man.toString();
var summan=totalman.replace(/[0123456789]/g,function(s){
	return myanDigits[s];
});
$('#total_man').val(summan);
$('#CitizenMenWorker').val(summan);

var woman=parseInt(mywomen1)+parseInt(mywomen2)+parseInt(mywomen3);
var totalwoman = woman.toString();
var sumwoman=totalwoman.replace(/[0123456789]/g,function(s){
	return myanDigits[s];
});
$('#total_women').val(sumwoman);
$('#CitizenWomenWorker').val(sumwoman);

}

//end

</script>
@endsection