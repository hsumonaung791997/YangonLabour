@extends('layouts.admin')
@section('content')
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <style type="text/css">
  #regiration_form fieldset:not(:first-of-type) {
    display: none;
  }
  .error{
  	color: red;
  }
  </style>
  <div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  <div class="col-md-12">
  	 <form id="regiration_form" novalidate action=""  method="post">
  <fieldset>
	    <div class="form-group">
			<label for="officename">အလုပ္ရံုအမည္</label>
			<input type="text" class="form-control" id="officename" name="officename" placeholder="အလုပ္ရံုအမည္">
		</div>
		<div class="form-group">
			<label for="address">အလုပ္ရံုတည္ေနရာ</label>
			<input type="text" class="form-control" id="address" name="address" placeholder="အလုပ္ရံုတည္ေနရာ">
		</div>
		<div class="form-group">
			<label for="email">အီးေမး</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="အီးေမး">
		</div>
		<div class="form-group">
			<label for="fax">ဖက္စ္</label>
			<input type="text" class="form-control" id="fax" name="fax" placeholder="ဖက္စ္">
		</div>
		<div class="form-group">
			<label for="phone">ဖုန္းနံပါတ္</label>
			<input type="text" class="form-control" id="phone" name="phone" placeholder="ဖုန္းနံပါတ္">
		</div>
		<div class="form-group">
			<label for="letter">ျပဳလုပ္မည့္လုပ္ငန္းနွင့္စပ္လ်ဥ္းေနာင္လာမည္႔၁၂လအတြင္းျပဳလုပ္မည့္လုပ္ငန္းစဥ္
			</label>
			<textarea class="form-control" id="letter" name="letter" rows="3"></textarea>
		</div>
    <input type="button" name="" class="next1 btn btn-info" value="Next" />
  </fieldset>
  <fieldset>
	  	<h3>လုပ္ငန္းအမိ်ုးအစားအသံုးျပဳရမည့္လွ်ပ္စစ္ဝန္အားနွင္႔စက္စြမ္းအား</h3>
	  	<p>(ေအာက္ပါဇယားကြက္တြင္စက္ကိရိယာအသီးသီးတို႕၏ၿမင္းေကာင္ေရအားကိုေဖာ္ျပရန္)</p>
		<div class="form-group">
		    <label for="machine1">ေရေနြးေငြ႕ျဖင့္လည္ေသာစက္</label>
		    <input type="text" class="form-control" id="machine1" placeholder="">
	  	</div>
	  	<div class="form-group">
		    <label for="machine2">ဓာတ္ေငြ႕၊ဓာတ္ဆီျဖင့္လည္ေသာစက္</label>
		    <input type="text" class="form-control" id="machine2" placeholder="">
	  	</div>
	  	<div class="form-group">
		    <label for="machine3">လွ်ပ္စစ္ျဖင့္လည္ေသာစက္</label>
		    <input type="text" class="form-control" id="machine3" placeholder="">
	  	</div>
	  	<div class="form-group">
		    <label for="machine4">ေရအားျဖင္႔လည္ေသာစက္</label>
		    <input type="text" class="form-control" id="machine4" placeholder="">
	  	</div>
	  	<div class="form-group">
		    <label for="energy1">အလုပ္ရုံပစည္းထြက္လုပ္ကိုင္နိုင္ေသာအင္အား</label>
		    <input type="text" class="form-control" id="energy1" placeholder="">
	  	</div>
	  	<div class="form-group">
		    <label for="energy2">လွ်ပ္စစ္ဓာတ္အားကိုမည္သို႕ရရိွသည္</label>
		    <input type="text" class="form-control" id="energy2" placeholder="">
	  	</div>
	 <input type="button" name="previous" class="previous1 btn btn-default" value="Previous" />
    <input type="button" name="next" class="next2 btn btn-info" value="Next" />
  </fieldset>
  <fieldset>
    <p>အလုပ္ရုံတြင္ေနာင္လာမည္႔၁၂လအတြင္းခိုင္းေစမည့္အလုပ္သမား</p>
	  	<div class="form-group">
		    <select class="form-control" id="exampleFormControlSelect2">
		      <option>ေန႕စား</option>
		      <option>လခစား</option>
		      <option>ပုတ္ျပတ္</option>
		    </select>
		</div>
		<div class="form-group">
		    <select class="form-control" id="exampleFormControlSelect2">
		      <option>လူျကီး</option>
		      <option>လူငယ္</option>
		      <option>ကေလး</option>
		    </select>
		</div>
		<div class="form-group">
		    <select class="form-control" id="exampleFormControlSelect2">
		      <option>က်ား</option>
		      <option>မ</option>
		    </select>
		</div>
		<div class="form-group">
		    <label for="mname">စုစုေပါင္း</label>
		    <input type="text" class="form-control" id="mname" placeholder="မန္ေနဂ်ာအမည္">
		</div>
	 <input type="button" name="previous" class="previous2 btn btn-default" value="Previous" />
     <input type="button" name="" class="next3 btn btn-info" value="Next" />
  </fieldset>
  <fieldset>
  		<p>Date: <input type="text" class="form-control" id="datepicker"></p>
    	<div class="form-group">
		    <label for="mname">မန္ေနဂ်ာအမည္</label>
		    <input type="text" class="form-control" id="mname" placeholder="မန္ေနဂ်ာအမည္">
		</div>
	  	<div class="form-group">
		    <label for="ownername">လုပ္ငန္းပိုင္ရွင္အမည္</label>
		    <input type="text" class="form-control" id="ownername" placeholder="လုပ္ငန္းပိုင္ရွင္အမည္">
  	    </div>
  	    <div class="form-group">
		    <label for="nrc">မွတ္ပံုတင္နံပါတ္</label>
		    <input type="text" class="form-control" id="nrc" placeholder="ဥပမာ-၅/မရန(နိုင္)၁၂၃၄၅၆">
  	    </div>
  	    <div class="form-group">
  	    	<label for="owneraddress">လိပ္စာ</label>
		    <input type="text" class="form-control" id="owneraddress" placeholder="လိပ္စာ">
  	    </div>
		<div class="form-group">
		    <label for="owneremail">အီးေမး</label>
		    <input type="email" class="form-control" id="owneremail" placeholder="အီးေမး">
		</div>
		<div class="form-group">
		    <label for="ownerfax">ဖက္စ္</label>
		    <input type="text" class="form-control" id="ownerfax" placeholder="ဖက္စ္">
		</div>
		<div class="form-group">
		    <label for="ownerphone">ဖုန္းနံပါတ္</label>
		    <input type="text" class="form-control" id="ownerphone" placeholder="ဖုန္းနံပါတ္">
		</div>
		<input type="button" name="previous" class="previous3 btn btn-default" value="Previous" />
	    <input type="submit" name="submit" class="submit btn btn-success" value="Submit" />
  </fieldset>
  </form>
  </div>
   <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
@endsection