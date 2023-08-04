@extends('layouts.admin')
@section('content')
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
	<script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
	<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
	<script src="{{asset('assets/js/common.js')}}"></script>
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
<form id="regForm" action="{{ route('shops.store') }}" method="post" enctype="multipart/form-data">
	  @csrf
		<!-- Circles which indicates the steps of the form: -->
  	<h1>ဆိုင် / အလုပ်ဌာန များ လုပ်ငန်းဌာနဆိုင်ရာ အချက်အလက်များ</h1>

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
	  				<label for="shopname">ဆိုင် (သို့မဟုတ်) အလုပ်ဌာန အမည်</label>
	  				<input id="shopname"  name="shopname" value="{{$shop->shopname==null ? old('shopname') : $shop->shopname }}">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
	  				<label for="shopemail">အီးမေး</label>
	  				<input id="shopemail" value="{{$shop->shopemail==null ? old('shopemail') : $shop->shopemail }}" name="shopemail">
	  			</div>
	  		</div>
	  	</p>
	  	<p>
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<label for="shopfax">ဖက်စ်</label>
	  				<input id="shopfax"  name="shopfax" value="{{$shop->shopfax==null ? old('shopfax') : $shop->shopfax }}">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
	  				<label for="shopphone">ဖုန်းနံပါတ်</label>
	  				<input id="shopphone" name="shopphone" value="{{$shop->shopphone==null ? old('shopphone') : $shop->shopphone }}">
	  			</div>
	  		</div>
	  	</p>
	  	<p>
			<div class="row">
				<div class="col-sm-5 text-center">
					<label for="ownername">အလုပ်ရှင်အမည်</label>
					<input id="ownername"  name="ownername" value="{{$shop->ownername==null ? old('ownername') : $shop->ownername }}">
				</div>
				<div class="col-sm-1">

				</div>
				<div class="col-sm-6 text-center">
				  <label for="ownernrc">နိုင်ငံသားစီစစ်ရေးအမှတ်</label>
				  <input id="ownernrc"  name="ownernrc" value="{{$shop->ownernrc==null ? old('ownernrc') : $shop->ownernrc }}">
				</div>
			</div>
		</p>
		<p>
			<div class="row">
				<div class="col-sm-5 text-center">
				  <label for="owneraddress">ပိုင်ရှင်နေရပ်လိပ်စာ</label>
				  <input id="owneraddress" name="owneraddress" value="{{$shop->owneraddress==null ? old('owneraddress') : $shop->owneraddress }}">
				</div>
				<div class="col-sm-1">

				</div>
				<div class="col-sm-6 text-center">
				  <label for="ownerphone">ပိုင်ရှင် ဆက်သွယ်ရန် ဖုန်းနံပါတ်</label>
				  <input id="ownerphone"  name="ownerphone" value="{{$shop->ownerphone==null ? old('ownerphone') : $shop->ownerphone }}">
				</div>
			</div>
		</p>
		<p>
			<div class="row">
				<div class="col-sm-5 text-center">
				  <label for="ownerfax">ပိုင်ရှင် ဆက်သွယ်ရန် ဖက်စ်</label>
				  <input id="ownerfax"  name="ownerfax" value="{{$shop->ownerfax==null ? old('ownerfax') : $shop->ownerfax }}">
				</div>
				<div class="col-sm-1">

				</div>
				<div class="col-sm-6 text-center">
					<label for="owneremail">ပိုင်ရှင်ဆက်သွယ်ရန် အီးမေး</label>
					<input id="owneremail" name="owneremail" value="{{$shop->owneremail==null ? old('owneremail') : $shop->owneremail }}">
				</div>
			</div>
		</p>
		<p>
			<div class="row">
				<div class="col-sm-5 text-center">
				  <label for="mangername">မန်နေဂျာ (သို့မဟုတ်) အလုပ်ရှင်ကိုယ်စား တာဝန်ခံအမည်</label>
				  <input id="mangername"  name="mangername" value="{{$shop->mangername==null ? old('mangername') : $shop->mangername }}">
				</div>
				<div class="col-sm-1">

				</div>
				<div class="col-sm-6 text-center">
				  <label for="managernrc">တာဝန်ခံ နိုင်ငံသားစီစစ်ရေးအမှတ်</label>
				  <input id="managernrc"  name="managernrc" value="{{$shop->managernrc==null ? old('managernrc') : $shop->managernrc }}">
				</div>
			</div>
		</p>
		<p>
			<div class="row">
				<div class="col-sm-5 text-center">
				  <label for="manageraddress">တာဝန်ခံ နေရပ်လိပ်စာ</label>
				  <input id="manageraddress"  name="manageraddress" value="{{$shop->manageraddress==null ? old('manageraddress') : $shop->manageraddress }}">
				</div>
				<div class="col-sm-1">

				</div>
				<div class="col-sm-6 text-center">
				  <label for="managerphone">တာဝန်ခံ ဆက်သွယ်ရန်ဖုန်း</label>
				  <input id="managerphone" name="managerphone" value="{{$shop->managerphone==null ? old('managerphone') : $shop->managerphone }}">
				</div>
			</div>
		</p>
		<p>
			<div class="row">
				<div class="col-sm-5 text-center">
				  <label for="managerfax">တာဝန်ခံ ဆက်သွယ်ရန်ဖက်(စ်)</label>
				  <input id="managerfax" name="managerfax" value="{{$shop->managerfax==null ? old('managerfax') : $shop->managerfax }}">
				</div>
				<div class="col-sm-1">

				</div>
				<div class="col-sm-6 text-center">
				  <label for="manageremail">တာဝန်ခံ ဆက်သွယ်ရန် အီးမေးလ်လိပ်စာ</label>
				  <input id="manageremail"  name="manageremail" value="{{$shop->manageremail==null ? old('manageremail') : $shop->manageremail }}">
				</div>
			</div>
		</p>
		
		<p>
		  <div class="row">
			  <div class="col-sm-5 text-center">
				  <label for="prenoticedate">ကြိုတင်အကြောင်းကြားစာ ပေးပို့သည့်နေ့စွဲ</label>
				  <input  type="date" name="PreNoticeDate" id="PreNoticeDate" value="{{$shop->PreNoticeDate==null ? old('PreNoticeDate') : $shop->PreNoticeDate }}">
			  </div>
			  <div class="col-sm-1">
				  
			  </div>
			  <div class="col-sm-6 text-center">
				  <label for="RegDate">ဆိုင် / အလုပ်ဌာန အလုပ်မှတ်ပုံတင်သည့်နေ့စွဲ	</label>
				  <input id="RegDate" name="RegDate" type="date" value="{{$shop->RegDate==null ? old('RegDate') : $shop->RegDate }}">
			  </div>
		  </div>
	  </p>

		<p>
			<div class="row">
				<div class="col-sm-5 text-center">
				  <fieldset class="scheduler-border">
					  <legend class="scheduler-border">တစ်ရက်လျှင် ၂၄နာရီ လုပ်ကိုင်ရန်</legend>
					  <div class="control-group">
						  <div class="row">
							   <div class="col-sm-6 text-center">
								   <div class="custom-control custom-radio mb-3">
									<input class="custom-control-input" id="operate24hr" name="operate24hr" type="radio" value=0 {{ $shop->operate24hr==0 ? 'checked' : '' }}>
									<label class="custom-control-label" for="operate24hr">လို</label>
								  </div>
							  </div>
							  <div class="col-sm-6">
								  <div class="custom-control custom-radio mb-3">
									  <input  class="custom-control-input" id="operate24hr1"  type="radio" name="operate24hr" value=1 {{ $shop->operate24hr==1 ? 'checked' : '' }}>
									  <label class="custom-control-label" for="operate24hr1">မလို</label>
								  </div>
							  </div>
						   </div>
					  </div>
				  </fieldset>
				</div>
				<div class="col-sm-1">

				</div>
				<div class="col-sm-6 text-center">
						<label id="OwnerPassport">နိုင်ငံကူးလက်မှတ်</label>
				<input id="OwnerPassport"  name="OwnerPassport" value="{{$shop->OwnerPassport}}">
					
				</div>
			</div>
		</p>

		<p>
			<div class="row">
				<div class="col-sm-6 text-center">
						<label for="shoptype">ဆိုင်နှင့် အလုပ်ဌာနအမျိုးအစား</label>
						<div class="row">
						  <div class="col-sm-4 text-center">
							  <div class="custom-control custom-radio mb-3">
							   <input class="custom-control-input" id="TypeofShop" name="shoptype" type="radio" value="ကြီး" {{ $shop->shoptype=='ကြီး' ? 'checked' : '' }} >
							   <label class="custom-control-label" for="TypeofShop">ကြီး</label>
							 </div>
						 </div>
						 <div class="col-sm-4">
							 <div class="custom-control custom-radio mb-3">
								 <input  class="custom-control-input" id="TypeofShop1"  type="radio" value="လတ်" name="shoptype" {{ $shop->shoptype=='လတ်' ? 'checked' : '' }}>
								 <label class="custom-control-label" for="TypeofShop1">လတ်</label>
							 </div>
						 </div>
						 <div class="col-sm-4">
						  <div class="custom-control custom-radio mb-3">
							  <input  class="custom-control-input" id="TypeofShop2"  type="radio" value="သေး" name="shoptype" {{ $shop->shoptype=='သေး' ? 'checked' : '' }}>
							  <label class="custom-control-label" for="TypeofShop2">သေး</label>
						  </div>
					  </div>
					  </div>
				</div>
				<div class="col-sm-1">
					
				</div>
				<div class="col-sm-5 text-center">
					
				</div>
			</div>
		</p>

		<p>
			<div class="row">
				<div class="col-sm-12 text-center">
					<fieldset class="scheduler-border">
					  <legend class="scheduler-border">ဆိုင်တည်နေရာ</legend>
					  <div class="control-group">
						  <div class="row">
							  <div class="col-sm-5 text-right">
								  <label for="region_id">တိုင်းဒေသကြီး</label>
							  </div>
							  <div class="col-sm-6 text-left">
								  <select id="region_id" class="form-control" name="region_id">
									  <option value=""> Choose Region</option>
								  @foreach($region as $r)
								  <option value={{$r->id}} @if($shop->region_id==$r->id) selected @endif >{{$r->region_name}}</option>
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
								<option value="{{$shop->district_id}}">{{$district}}
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
							  {{-- <option>လှိုင်သာယာမြို့နယ်</option> --}}
							  @if($township)
								<option value="{{$shop->township_id}}">{{$township}}
								</option>
								@else
								<option value="">Choose TownShip
								</option>
								@endif
						  </select>
					  </div>
				  </div> <br>
						  <div class="row">
							  <div class="col-sm-5 text-right">
								  <label for="address">လိပ်စာ</label>
							  </div>
							  <div class="col-sm-6 text-left">
								  <textarea class="form-control form-control-alternative" rows="3" placeholder="အသေးစိတ်ထည့်ရန်" id='address' name="loacationaddress">{{$shop->loacationaddress==null ? old('loacationaddress') : $shop->loacationaddress }}</textarea>
							  </div>
						  </div>
							 
					  </div>
				  </fieldset>
				</div>
			</div>
		</p>
	  </div> 
	  <div class="tab">
			<p>&nbsp;ဆိုင်၊အလုပ်ဌာနရှိ နိုင်ငံသားအလုပ်သမားအရေအတွက် - </p>
			<div class="row">
			<div class="col-sm-12">
				<table style="width:100%" id="sum">
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
					<td><input type='text' value="{{$shop->MenWorker==null ? old('MenWorker') : $shop->MenWorker }}" name="MenWorker" id="MenWorker" onkeyup="converunistring('man')"></td>
					<td><input type='text' value="{{$shop->WomenWorker==null ? old('WomenWorker') : $shop->WomenWorker }}" name="WomenWorker" id="WomenWorker" onkeyup="converunistring('women')"></td>
					<td><input type='text' value="{{$shop->AMenWorker==null ? old('AMenWorker') : $shop->AMenWorker }}" name="AMenWorker" id="AMenWorker" onkeyup="converunistring('amen')"></td>
					<td><input type='text' value="{{$shop->AWomenWorker==null ? old('AWomenWorker') : $shop->AWomenWorker }}" name="AWomenWorker" id="AWomenWorker" onkeyup="converunistring('awomen')"></td>
					<td><input type='text'value="{{$shop->CMenWorker==null ? old('CMenWorker') : $shop->CMenWorker }}" name="CMenWorker" id="CMenWorker" onkeyup="converunistring('cman')"></td>
					<td><input type='text' value="{{$shop->CWomenWorker==null ? old('CWomenWorker') : $shop->CWomenWorker }}" name="CWomenWorker" id="CWomenWorker" onkeyup="converunistring('cwomen')"></td>
				  </tr>
				   <tr>
					<td>နေ့စား</td>
					<td><input type='text' value="{{$shop->DailyMenWorker==null ? old('DailyMenWorker') : $shop->DailyMenWorker }}" name="DailyMenWorker" id="DailyMenWorker" onkeyup="converunistring('man')"></td>
					<td><input type='text' value="{{$shop->DailyWomenWorker==null ? old('DailyWomenWorker') : $shop->DailyWomenWorker }}" name="DailyWomenWorker" id="DailyWomenWorker" onkeyup="converunistring('women')"></td>
					<td><input type='text' value="{{$shop->ADailyMenWorker==null ? old('ADailyMenWorker') : $shop->ADailyMenWorker }}" name="ADailyMenWorker" id="ADailyMenWorker" onkeyup="converunistring('amen')"></td>
					<td><input type='text' value="{{$shop->ADailyWomenWorker==null ? old('ADailyWomenWorker') : $shop->ADailyWomenWorker }}" name="ADailyWomenWorker" id="ADailyWomenWorker" onkeyup="converunistring('awomen')"></td>
					<td><input type='text' value="{{$shop->CDailyMenWorker==null ? old('CDailyMenWorker') : $shop->CDailyMenWorker }}" name="CDailyMenWorker" id="CDailyMenWorker" onkeyup="converunistring('cman')"></td>
					<td><input type='text' value="{{$shop->CDailyWomenWorker==null ? old('CDailyWomenWorker') : $shop->CDailyWomenWorker }}" name="CDailyWomenWorker" id="CDailyWomenWorker" onkeyup="converunistring('cwomen')"></td>
				  </tr>
				  <tr>
					<td>ပုတ်ပြတ်</td>
					<td><input type='text' value="{{$shop->PieceMenWorker==null ? old('PieceMenWorker') : $shop->PieceMenWorker }}" name="PieceMenWorker" id="PieceMenWorker" onkeyup="converunistring('man')"></td>
					<td><input type='text' value="{{$shop->PieceWomenWorker==null ? old('PieceWomenWorker') : $shop->PieceWomenWorker }}" name="PieceWomenWorker" id="PieceWomenWorker" onkeyup="converunistring('women')"></td>
					<td><input type='text' value="{{$shop->APieceMenWorker==null ? old('APieceMenWorker') : $shop->APieceMenWorker }}" name="APieceMenWorker" id="APieceMenWorker" onkeyup="converunistring('amen')"></td>
					<td><input type='text' value="{{$shop->APieceWomenWorker==null ? old('APieceWomenWorker') : $shop->APieceWomenWorker }}" name="APieceWomenWorker" id="APieceWomenWorker" onkeyup="converunistring('awomen')"></td>
					<td><input type='text' value="{{$shop->CPieceMenWorker==null ? old('CPieceMenWorker') : $shop->CPieceMenWorker }}" name="CPieceMenWorker" id="CPieceMenWorker" onkeyup="converunistring('cman')"></td>
					<td><input type='text' value="{{$shop->CPieceWomenWorker==null ? old('CPieceWomenWorker') : $shop->CPieceWomenWorker }}" name="CPieceWomenWorker" id="CPieceWomenWorker" onkeyup="converunistring('cwomen')"></td>
				  </tr>
				  <tr>
					<td>စုစုပေါင်း</td>
					<td><input type='text' value="{{old('totalMan')==null ? 0 : old('totalMan') }}"  id="totalmen" name="totalMan"></td>
					<td><input type='text' value="{{old('totalWomen')==null ? 0 : old('totalWomen') }}" id="totalWomen" name="totalWomen"></td>
					<td><input type='text' value="{{old('totalaman')==null ? 0 : old('totalaman') }}" id="totalaman" name="totalaman"></td>
					<td><input type='text' value="{{old('totalawomen')==null ? 0 : old('totalawomen') }}" id="totalawomen" name="totalawomen"></td>
					<td><input type='text' value="{{old('totalcman')==null ? 0 : old('totalcman') }}" id="totalcman" name="totalcman"></td>
					<td><input type='text' value="{{old('totalcwomen')==null ? 0 : old('totalcwomen') }}" id="totalcwomen" name="totalcwomen"></td>
					</tr>
				</table>
			</div>
		</div> <br>
		<input type="hidden" id="total_man" name="totalMaleWorker" value="{{old('totalMaleWorker')==null ? 0 : old('totalMaleWorker') }}">
		<input type="hidden" id="total_women" name="totalFemaleWorker" value="{{old('totalFemaleWorker')==null ? 0 : old('totalFemaleWorker') }}">

		{{-- <div class="row">
				<div class="col-sm-5 text-center">
					<label for="total_man">စုစုပေါင်း အလုပ်သမား (ကျား)</label>
			   </div>
			   <div class="col-sm-1">
				   
			   </div>
				<div class="col-sm-6 text-center">
					<label for="total_Women">စုစုပေါင်း အလုပ်သမား (မ)</label>
					<input type="text" id="total_women" name="total_Women">
			   </div>
		</div> --}}

		<p>&nbsp;ဆိုင်၊အလုပ်ဌာနရှိ နိုင်ငံခြားသားအလုပ်သမားအရေအတွက် - </p>
			<div class="row">
			<div class="col-sm-12">
				<table style="width:100%">
				  <tr>
					  <td></td>
					<td> ကျား</td>
					<td>မ </td>
				  </tr>
				  <tr>
					<td style="width: 100px;">လခစား</td>
					<td><input type='text' value="{{$shop->MForeignerMenWorker==null ? old('MForeignerMenWorker') : $shop->MForeignerMenWorker }}" name="MForeignerMenWorker" id="MForeignerMenWorker" onkeyup="foreginerWorker('man')"></td>
					<td><input type='text' value="{{$shop->MForeignerWomenWorker==null ? old('MForeignerWomenWorker') : $shop->MForeignerWomenWorker }}" name="MForeignerWomenWorker" id="MForeignerWomenWorker" onkeyup="foreginerWorker('women')"></td>
				  </tr>
				   <tr>
					<td>နေ့စား</td>
					<td><input type='text' value="{{$shop->DailyForeignerMenWorker==null ? old('DailyForeignerMenWorker') : $shop->DailyForeignerMenWorker }}" name="DailyForeignerMenWorker" id="DailyForeignerMenWorker" onkeyup="foreginerWorker('man')"></td>
					<td><input type='text' value="{{$shop->DailyForeignerWomenWorker==null ? old('DailyForeignerWomenWorker') : $shop->DailyForeignerWomenWorker }}" name="DailyForeignerWomenWorker" id="DailyForeignerWomenWorker" onkeyup="foreginerWorker('women')"></td>
				  </tr>
				  <tr>
					<td>ပုတ်ပြတ်</td>
					<td><input type='text' value="{{$shop->PForeignerMenWorker==null ? old('PForeignerMenWorker') : $shop->PForeignerMenWorker }}" name="PForeignerMenWorker" id="PForeignerMenWorker" onkeyup="foreginerWorker('man')"></td>
					<td><input type='text' value="{{$shop->PForeignerWomenWorker==null ? old('PForeignerWomenWorker') : $shop->PForeignerWomenWorker }}" name="PForeignerWomenWorker" id="PForeignerWomenWorker" onkeyup="foreginerWorker('women')"></td>
				  </tr>
				  <tr>
					<td>စုစုပေါင်း</td>
					<td><input type='text' value="{{old('totalforeignmen')==null ? 0 : old('totalforeignmen') }}" name="totalforeignmen" id="totalforeignmen"></td>
					<td><input type='text' value="{{old('totalforeignwomen')==null ? 0 : old('totalforeignwomen') }}" name="totalforeignwomen" id="totalforeignwomen"></td>
				  </tr>
				</table> <br>
			</div>
		</div> <br>

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
										  	<option value="{{$s->id}}" {{$s->id==$shop->section_id ? 'selected' : ''}}>{{$s->SectionName}}</option>
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
				</div>
			</p>
	  </div>
	  <div class="tab">
	  	<p>
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<label for="PropertyType">ပိုင်ဆိုင်မှုအမျိုးအစား</label>
					  {{-- <input id="PropertyType" value="{{ $shop->PropertyType}}" name="PropertyType"> --}}
					<select name="PropertyType" id="PropertyType" class="form-control">
						<option value="နိုင်ငံ" @if($shop->PropertyType=="နိုင်ငံ") selected @endif>နိုင်ငံ</option>
						<option value="သမဝါယမ" @if($shop->PropertyType=="သမဝါယမ") selected @endif>သမဝါယမ</option>
						<option value="ပုဂ္ဂလိက" @if( $shop->PropertyType=="ပုဂ္ဂလိက") selected @endif>ပုဂ္ဂလိက</option>
						<option value="နိုင်ငံခြား" @if( $shop->PropertyType =="နိုင်ငံခြား") selected @endif>နိုင်ငံခြား</option>
						<option value="ဖက်စပ်" @if($shop->PropertyType =="ဖက်စပ်") selected @endif>ဖက်စပ်</option>
					</select>
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
	  				<label for="UsedPower">အသုံးပြုသည့်စွမ်းအင်</label>
	  				<input id="UsedPower" name="UsedPower" value="{{$shop->UsedPower==null ? old('UsedPower') : $shop->UsedPower }}">
	  			</div>
	  		</div>
	  	</p>
	  	<p>
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<label for="MonthlyAmounts">တစ်လထုတ်လုပ်နိုင်မှုပမာဏ</label>
	  				<input id="MonthlyAmounts" name="MonthlyAmounts" value="{{$shop->MonthlyAmounts==null ? old('MonthlyAmounts') : $shop->MonthlyAmounts }}">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
	  				<label for="Investment">ရင်းနှီးမြှုပ်နှံမှု (LDI/FDI)</label>
					  {{-- <input id="Investment" name="Investment" value="{{ $shop->Investment}}"> --}}
					<select name="Investment" id="investment" class="form-control">
						<option value="LDI" @if($shop->Investment=="LDI") selected @endif>LDI</option>
						<option value="FDI" @if($shop->Investment=="FDI") selected @endif>FDI</option>
					</select>
	  			</div>
	  		</div>
	  	</p>
  		 <p>
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<label for="ProducedProduct">ထုတ်လုပ်သည့်ပစ္စည်း (အဓိက)</label>
	  				<input id="ProducedProduct" name="ProducedProduct" value="{{$shop->ProducedProduct==null ? old('ProducedProduct') : $shop->ProducedProduct }}">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
	  				<label for="ProducedOthers">ထုတ်လုပ်သည့်ပစ္စည်း(အခြား)</label>
	  				<input id="ProducedOthers" name="ProducedOthers" value="{{$shop->ProducedOthers==null ? old('ProducedOthers') : $shop->ProducedOthers }}">
	  			</div>
	  		</div>
  		</p>
  		<p>
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				<label for="RawMaterials">ကုန်ကြမ်းရရှိမှု</label>
	  				<input id="RawMaterials" name="RawMaterials" value="{{$shop->RawMaterials==null ? old('RawMaterials') : $shop->RawMaterials }}">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
	  				<label for="Goods">ကုန်ချောတင်ပို့မှု</label>
	  				<input id="Goods" name="Goods" value="{{$shop->Goods==null ? old('Goods') : $shop->Goods }}">
	  			</div>
	  		</div>
  		</p>
  		<p>
	  		<div class="row">
	  			<div class="col-sm-5 text-center">
	  				{{-- <label for="WorkType">လုပ်ငန်းအမျိုးအစား</label>
					  <input id="WorkType" name="WorkType" value="{{ $shop->WorkType}}"> --}}
					  <label for="datepicker">အလုပ်ရုံစတင်လုပ်ကိုင်သောရက်စွဲ</label>
		  			  <input type="date" name="StartDate" id="datepicker" class="datepicker" value="{{$shop->StartDate==null ? old('StartDate') : $shop->StartDate }}">
	  			</div>
	  			<div class="col-sm-1">

	  			</div>
	  			<div class="col-sm-6 text-center">
	  				
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
									  <input class="custom-control-input" id="customRadio" name="Contract" type="radio" value=0 {{ $shop->Contract==0 ? 'checked' : '' }}>
									  <label class="custom-control-label" for="customRadio">ဆောင်ရွက်ဆဲ</label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="custom-control custom-radio mb-3">
										<input  class="custom-control-input" id="customRadio0" checked="" type="radio" name="Contract" value=1 {{ $shop->Contract==1 ? 'checked' : '' }} >
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
									  <input  class="custom-control-input" id="overtime" name="OverTime" type="radio" value=0 {{ $shop->OverTime==0 ? 'checked' : '' }}>
									  <label class="custom-control-label" for="overtime">ရှိ</label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="custom-control custom-radio mb-3">
										<input  class="custom-control-input" id="overtime1"  type="radio" name="OverTime" value=1 {{ $shop->OverTime==1 ? 'checked' : '' }}>
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
										  <input class="custom-control-input" id="permission" name="OTPermit" type="radio" value=0 {{ $shop->OTPermit==0 ? 'checked' : '' }}>
										  <label class="custom-control-label" for="permission">ယူ</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="permission1" checked="" type="radio" name="OTPermit" value=1 {{ $shop->OTPermit==1 ? 'checked' : '' }}>
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
										  <input  class="custom-control-input" id="SSB" name="SSB" type="radio" value=0 {{ $shop->SSB==0 ? 'checked' : '' }}>
										  <label class="custom-control-label" for="SSB">ပြီး</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="SSB1" checked="" type="radio" name="SSB" value=1 {{ $shop->SSB==1 ? 'checked' : '' }}>
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
										  <input  class="custom-control-input" id="customRadio1" name="NoticeStatus" type="radio" value=0 {{ $shop->NoticeStatus==0 ? 'checked' : '' }}>
										  <label class="custom-control-label" for="customRadio1">ပြီး</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="customRadio2" checked="" type="radio" name="NoticeStatus" value=1 {{ $shop->NoticeStatus==1 ? 'checked' : '' }}>
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
										  <input  class="custom-control-input" id="Workplace_safe" name="SafteySide" type="radio" value=0 {{ $shop->SafteySide==0 ? 'checked' : '' }}>
										  <label class="custom-control-label" for="Workplace_safe">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="Workplace_safe1" checked="" type="radio" name="SafteySide" value=1 {{ $shop->SafteySide==1 ? 'checked' : '' }}>
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
										  <input  class="custom-control-input" id="administrativework" name="ManagementExpert" type="radio" value=0 {{ $shop->ManagementExpert==0 ? 'checked' : '' }}>
										  <label class="custom-control-label" for="administrativework">ရှိ</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="custom-control custom-radio mb-3">
											<input  class="custom-control-input" id="administrativework1" checked="" type="radio" name="ManagementExpert" value=1 {{ $shop->ManagementExpert==1 ? 'checked' : '' }}>
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
									  <input  class="custom-control-input" id="Welfare" name="Welfare" type="radio" value=0 {{ $shop->Welfare==0 ? 'checked' : '' }}>
									  <label class="custom-control-label" for="Welfare">ရှိ</label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="custom-control custom-radio mb-3">
										<input  class="custom-control-input" id="Welfare1"  type="radio" name="Welfare" checked="" value=1 {{ $shop->Welfare==1 ? 'checked' : '' }}>
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
										<input  class="custom-control-input" id="AccidentRecordBook" name="AccidentRecordBook" value='ရှိ' type="radio" {{ $shop->AccidentRecordBook=='ရှိ' ? 'checked' : '' }}>
										<label class="custom-control-label" for="AccidentRecordBook">ရှိ</label>
									  </div>
								  </div>
								  <div class="col-sm-6">
									  <div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="AccidentRecordBook1" type="radio" name="AccidentRecordBook" value='မရှိ' {{ $shop->AccidentRecordBook=='မရှိ' ? 'checked' : '' }}>
										  <label class="custom-control-label" for="AccidentRecordBook1">မရှိ</label>
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
										<input  class="custom-control-input" id="SafetyHealth" name="SafetyHealth" type="radio" value='ရှိ' {{ $shop->SafetyHealth=='ရှိ' ? 'checked' : '' }} >
										<label class="custom-control-label" for="SafetyHealth" onclick="SafetyHealth('1')">ရှိ</label>
									  </div>
								  </div>
								  <div class="col-sm-6">
									  <div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="SafetyHealth1"  type="radio" name="SafetyHealth" value='မရှိ' {{ $shop->SafetyHealth=='မရှိ' ? 'checked' : '' }}>
										  <label class="custom-control-label" for="SafetyHealth1" onclick="SafetyHealth(2)">မရှိ</label>
									  </div>
								  </div>
							   </div>
							   <div class="row" id='safetyhealth'>
									<label for="safetyrank" class="text-center">ရာထူး</label> <br> 
									<select name="SafetyRank" id="safetyrank" class="form-control">
										<option value="">Choose Position</option>
										<option value="မန်နေဂျာ" {{$shop->SafetyRank=='မန်နေဂျာ' ? 'selected' : ''}}>မန်နေဂျာ</option>
										<option value="အရာရှိ" {{$shop->SafetyRank=='အရာရှိ' ? 'selected' : ''}}>အရာရှိ</option>
										<option value="ကြီးကြပ်ရေးမှူး" {{$shop->SafetyRank=='ကြီးကြပ်ရေးမှူး' ? 'selected' : ''}}>ကြီးကြပ်ရေးမှူး</option>
										<option value="ညှိနှိုင်းရေးမှူး" {{$shop->SafetyRank=='ညှိနှိုင်းရေးမှူး' ? 'selected' : ''}}>ညှိနှိုင်းရေးမှူး</option>
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
					<table style="width:100%">
					  <tr>
					  	<td> </td>
					    <td>ကျား</td>
					    <td>မ </td>
					  </tr>
					  <tr>
					    <th>နိုင်ငံသားလုပ်သား</th>
					    <td><input type='text' value="{{$shop->CitizenMenWorker==null ? old('CitizenMenWorker') : $shop->CitizenMenWorker }}"  style="width: 70px !important;" name="CitizenMenWorker" id="CitizenMenWorker"></td>
					    <td><input type='text' value="{{$shop->CitizenWomenWorker==null ? old('CitizenWomenWorker') : $shop->CitizenWomenWorker }}" style="width: 70px !important;" name="CitizenWomenWorker" id="CitizenWomenWorker"></td>
					  </tr>
					   <tr>
					    <th>နိုင်ငံခြားသားလုပ်သား</th>
					    <td><input type='text' value="{{$shop->ForeignerMenWorker==null ? old('ForeignerMenWorker') : $shop->ForeignerMenWorker }}" style="width: 70px !important;" name="ForeignerMenWorker" id="ForeignerMenWorker"></td>
					    <td><input type='text' value="{{$shop->ForeignerWomenWorker==null ? old('ForeignerWomenWorker') : $shop->ForeignerWomenWorker }}" style="width: 70px !important;" name="ForeignerWomenWorker" id="ForeignerWomenWorker"></td>
					  </tr>
					</table> <br>
				</div>
			</div>
			<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="max_min_salary">အနည်းဆုံးလစာ</label>
		  				<input id="max_min_salary" value="{{$shop->MinimumSalary==null ? old('MinimumSalary') : $shop->MinimumSalary }}" name="MinimumSalary">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-center">
		  				<label for="max_min_salary">အများဆုံးလစာ</label>
		  				<input id="max_min_salary" value="{{$shop->MaximumSalary==null ? old('MaximumSalary') : $shop->MaximumSalary }}" name="MaximumSalary">
		  			</div>
		  		</div>
	  		</p>
			<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="datepicker">လစာပေးရက်</label>
						  {{-- <input  name="SalaryDate" id="datepicker" class="datepicker" value="{{ $shop->SalaryDate}}"> --}}
						<select name="SalaryDate" id="SalaryDate" class="form-control">
							<option value="လကုန်ရက်" @if($shop->SalaryDate=='လကုန်ရက်') selected @endif>လကုန်ရက်</option>
							<option value="လဆန်း(၁)ရက်" @if($shop->SalaryDate=='လဆန်း(၁)ရက်') selected @endif>လဆန်း(၁)ရက်</option>
							<option value="လဆန်း(၂)ရက်" @if($shop->SalaryDate=='လဆန်း(၂)ရက်') selected @endif>လဆန်း(၂)ရက်</option>
							<option value="လဆန်း(၃)ရက်" @if($shop->SalaryDate=='လဆန်း(၃)ရက်') selected @endif>လဆန်း(၃)ရက်</option>
							<option value="လဆန်း(၄)ရက်" @if($shop->SalaryDate=='လဆန်း(၄)ရက်') selected @endif>လဆန်း(၄)ရက်</option>
							<option value="လဆန်း(၅)ရက်" @if($shop->SalaryDate=='လဆန်း(၅)ရက်') selected @endif>လဆန်း(၅)ရက်</option>
							<option value="လဆန်း(၆)ရက်" @if($shop->SalaryDate=='လဆန်း(၆)ရက်') selected @endif>လဆန်း(၆)ရက်</option>
							<option value="လဆန်း(၇)ရက်" @if($shop->SalaryDate=='လဆန်း(၇)ရက်') selected @endif>လဆန်း(၇)ရက်</option>
							<option value="လဆန်း(၈)ရက်" @if($shop->SalaryDate=='လဆန်း(၈)ရက်') selected @endif>လဆန်း(၈)ရက်</option>
							<option value="လဆန်း(၉)ရက်" @if($shop->SalaryDate=='လဆန်း(၉)ရက်') selected @endif>လဆန်း(၉)ရက်</option>
							<option value="လဆန်း(၁၀)ရက်" @if($shop->SalaryDate=='လဆန်း(၁၀)ရက်') selected @endif>လဆန်း(၁၀)ရက်</option>

						</select>
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<!-- <div class="col-sm-6 text-center">
		  				<label for="Welfare">သက်သာချောင်ချိရေး ဆောင်ရွက်မှုကိစ္စ</label>
		  				<input id="Welfare" name="Welfare">
		  			</div> -->
		  		</div>
	  		</p>
	  		
	  
	       <p>&nbsp;အလုပ်ချိန်/ထမင်းစားနားချိန်</p>
		       <div class="row">
		       		<div class="col-sm-3">
		       			<select name="WorkTimeType" id="worklaw">
				        	<option value="0">
				        		ဆိုင်များနှင့် အလုပ်ဌာနများ နည်းဥပဒေ (၇)
				        	</option>
				        	<option value="1">
				        		ဆိုင်များနှင့် အလုပ်ဌာနများ နည်းဥပဒေ (၈)
				        	</option>
		        		</select> <br>
		       		</div>
		       </div>
	        
	        <p>
		  		<div class="row" id="law1">
		  			<div class="col-sm-12 text-center"> 
		  				တူညီသောအလုပ်ချိန်တွင် အလုပ်လုပ်ခြင်းဆိုင်ရာ နို့တစ်စာ
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">ဆိုင်များနှင့် အလုပ်ဌာနများ နည်းဥပဒေ (၇)</legend>
						    <div class="control-group">
						    	<div class="row">
						    		<div class="col-sm-4 text-center">
						    			အလုပ်စသည့်အချိန်
						    		</div>
						    		<div class="col-sm-4 text-right">
						    			 <input class="form-control" type="time" name="StartWorkTime" id="example-time-input" value="{{$shop->StartWorkTime==null ? old('StartWorkTime') : $shop->StartWorkTime }}">
						    		</div>
						    	</div> <br>
						    	<div class="row">
						    		<div class="col-sm-4 text-center">
						    			အလုပ်ပြီးသည့်အချိန်
						    		</div>
						    		<div class="col-sm-4 text-right">
						    			 <input class="form-control" type="time" name="EndWorkTime" id="example-time-input" value="{{$shop->EndWorkTime==null ? old('EndWorkTime') : $shop->EndWorkTime }}" >
						    		</div>
						    	</div> <br>
						    	<div class="row">
						    		<div class="col-sm-4 text-center">
						    			အားလပ်ချိန်
						    		</div>
						    		<div class="col-sm-4">
						    			<div class="row">
						    				<div class="col-sm-6">
						    					<label for="example-time-input">မှ</label>
						    					 <input class="form-control" type="time" name="freetimefrom" id="example-time-input" value="{{$shop->freetimefrom==null ? old('freetimefrom') : $shop->freetimefrom }}">
						    				</div>
						    				<div class="col-sm-6">
						    					<label id="example-time-input">အထိ</label>
						    					<input class="form-control" type="time" name="freetimeto" id="example-time-input" value="{{$shop->freetimeto==null ? old('freetimeto') : $shop->freetimeto }}"> 
						    				</div>
						    				
						    			</div>
						    			
						    			 
						    		</div> 
						    	</div> <br>
						         <p>
						         	<div class="row">
						         		<div class="col-sm-3 text-center">
						         			<label for="closeworkdays">ရက်သတ္တပတ်အလုပ်ပိတ်ရက် </label>
						         		</div>
						         		<div class="col-sm-5">
						         			<input  name="closeworkdays" id="closeworkdays" class="closeworkdays" value="{{$shop->closeworkdays==null ? old('closeworkdays') : $shop->closeworkdays }}">
						         		</div>
						         	</div>
						    	</p>
						    	<p>
						    		ရက်သတ္တပတ်အလုပ်ပိတ်ရက်ဖြစ်သည့် နေ့များတွင် ဆိုင်/အလုပ်ဌာနရှိ အလုပ်သမားများ အား ရက်သတ္တပတ်လျှင် အနည်းဆုံးတစ်ရက်ကို လုပ်ခလစာပြည့်ဖြင့် အလှည့်ကျ နားခွင့်ပေးမည်ဖြစ်ပါကြောင်း ။
						    	</p>
						    </div>
						</fieldset>
		  			</div>
		  		</div>
		  		<div class="row" id="law2">
		  			<div class="col-sm-12 text-center">
		  				အလုပ်လုပ်ရန်ကာလအပိုင်းအခြားဆိုင်ရာ နို့တစ်စာ
		  				<fieldset class="scheduler-border">
						    <legend class="scheduler-border">ဆိုင်များနှင့် အလုပ်ဌာနများ နည်းဥပဒေ (၈)</legend>
						    <div class="control-group">
						    	
						    </div>
						</fieldset>
		  			</div>
		  		</div>
	  		</p>
	    	<p>
		  		<div class="row">
		  			<div class="col-sm-5 text-center">
		  				<label for="signname">စစ်ဆေးသူ အမည်</label>
		  				<input id="signname" name="SignatureName" value="{{$shop->SignatureName==null ? old('SignatureName') : $shop->SignatureName }}">
		  			</div>
		  			<div class="col-sm-1">

		  			</div>
		  			<div class="col-sm-6 text-center">
		  				<label for="position">စစ်ဆေးသူ ရာထူး</label>
		  				<input id="position" name="SignatureRank" value="{{$shop->SignatureRank==null ? old('SignatureRank') : $shop->SignatureRank }}">
		  			</div>
		  		</div>
			  </p>
			  
			  <p>
				<div class="row">
					<div class="col-sm-5 text-center">
						<label for="SubscriberName">စာရင်းသွင်းသူ အမည်</label>
						<input id="SubscriberName" oninput="this.className = ''" name="SubscriberName" value="{{$shop->SubscriberName==null ? old('SubscriberName') : $shop->SubscriberName }}">
					</div>
					<div class="col-sm-1">

					</div>
					<div class="col-sm-6 text-center">
						<label for="SubscriberRank">စာရင်းသွင်းသူ ရာထူး</label>
						<input id="SubscriberRank" oninput="this.className = ''" name="SubscriberRank" value="{{$shop->SubscriberRank==null ? old('SubscriberRank') : $shop->SubscriberRank }}">
					</div>
				</div>
			</p>
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
	  			<label for="other_license1">အခြားလိုင်စင်(၁)</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file"  name="other_license1" id='other_license1'>
	  		</div>
	  	</div>	</p>
	  	<p><div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="other_license2">အခြားလိုင်စင်(၂)</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file"  name="other_license2" id='other_license2'>
	  		</div>
	  	</div>	</p>
	  	<p><div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="other_license3">အခြားလိုင်စင်(၃)</label>
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
		  			<label for="other_license6">အခြားလိုင်စင်(၆)</label>
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
	      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
	      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
	    </div>
	  </div>
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
    document.getElementById("nextBtn").innerHTML = "Update";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
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
// $(document).ready(function(){
//     $('.timepicker').timepicker({});
// });

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


///for workt type shop
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
//end

//sum citizen worker
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
	$('#totalmen').val(sum);
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
	var man1=document.getElementById("totalmen").value;
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
// alert(summan);
var woman=parseInt(mywomen1)+parseInt(mywomen2)+parseInt(mywomen3);
var totalwoman = woman.toString();
var sumwoman=totalwoman.replace(/[0123456789]/g,function(s){
	return myanDigits[s];
});
$('#total_women').val(sumwoman);
$('#CitizenWomenWorker').val(summan);

}

//end


///sum foreigner total 
function foreginerWorker(type){
	if(type=='man'){
		var num1=document.getElementById("MForeignerMenWorker").value;
		var num2=document.getElementById('DailyForeignerMenWorker').value;
		var num3=document.getElementById('PForeignerMenWorker').value;
	}else if(type=='women'){
		var num1=document.getElementById("MForeignerWomenWorker").value;
		var num2=document.getElementById('DailyForeignerWomenWorker').value;
		var num3=document.getElementById('PForeignerWomenWorker').value;
	}
	
	
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
	//sum total
	var num4=parseInt(mynum1)+parseInt(mynum2)+parseInt(mynum3);
	var num5=num4.toString();
	var sum=num5.replace(/[0123456789]/g,function(s){
		return myanDigits[s];
	});

	if(type=='man'){
	//sum for man
	$('#totalforeignmen').val(sum);
	$('#ForeignerMenWorker').val(sum);

	}else if(type=='women'){
		$('#totalforeignwomen').val(sum);
		$('#ForeignerWomenWorker').val(sum);

	}

}
</script>
@endsection
