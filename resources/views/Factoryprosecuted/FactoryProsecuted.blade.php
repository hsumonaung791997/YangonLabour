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
$(function(){
$('#datepicker1').datepicker({
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
        @if(session()->get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-inner--icon"></span>
                <span class="alert-inner--text">  {{ session()->get('success') }}  </span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
<div class="container">
<h1>ရန်ကုန်တိုင်းဒေသကြီး<br>အလုပ်ရုံနှင့်အလုပ်သမားဥပဒေစစ်ဆေးရေးဦးစီးဌာန<br>တရားစွဲဆိုမှုလချုပ်စာရင်း</h1>
<div class="row">
	<div class="col-sm-12 text-left">
		<p style="font-weight:bold;">မှတ်ချက်။	။"<font style="color:red;">*</font>" ပြထားသောနေရာများသည် မဖြစ်မနေထည့်သွင်းပေးရမည့် အချက်အလက်များဖြစ်ပါသည်။</p>
	</div>
	
</div>

           


<p>
    <div class="row">
        <div class="col-sm-5 text-center">
            <input type="text" name="factoryname" id="factoryname" class="form-control"  placeholder="ရှာဖွေရန်...." />
            <div id="factoryList">
            </div>
        </div>
        <div class="col-sm-2">
            <button id="search">ရှာမည်</button>
        </div>
    </div>
</p>


<form action="{{route('Factoryprosecuted.store')}}" method="post">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4 text-right">
                                <label for="chooseType">တရားစွဲဆိုခြင်းပုံစံရွေးရန် </label>
                            </div>
                            <div class="col-sm-6">
                                <select id="chooseType" name="chooseType" class="form-control">
                                    <option value="1">စက်ရုံ၊ အလုပ်ရုံ</option>
                                    <option value="2"> ဆိုင်နှင့်အလုပ်ဌာန</option>
                                </select>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            <div id="factory">
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset class="scheduler-border">
				            <legend class="scheduler-border">စက်ရုံ၊ အလုပ်ရုံဆိုင်ရာအချက်အလက်များ</legend>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="Name">စက်ရုံ၊ အလုပ်ရုံအမည် <span style="color:red">*</span> </label>
                                            </div>
                                            <div class="col-sm-7">
                                            <input type="text" name="factory_name" id="factory_Name" class="form-control" value="{{old('factory_name')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="IDno">စက်ရုံအမှတ် <span style="color:red">*</span></label>
                                            </div>
                                            <div class="col-sm-7">
                                            <input type="text" name="factory_IDno" id="factory_IDno" class="form-control" value="{{old('factory_IDno')}}">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="blank10"></div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="Address">စက်ရုံလိပ်စာ <span style="color:red">*</span></label>
                                            </div>
                                            <div class="col-sm-7">
                                            <input type="text" name="factory_address" id="factory_Address" class="form-control" value="{{old('factory_address')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="Township">မြို့နယ် <span style="color:red">*</span></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="text" name="factory_township" id="factory_Township" class="form-control" value="{{old('factory_township')}}">
                                                <input type="hidden" name="factory_township_id" id="townshipid" class="form-control" value="{{old('factory_township_id')}}">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="blank10"></div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="Zone">ဇုန် </label>
                                            </div>
                                            <div class="col-sm-7">
                                            <input type="text" name="factory_Zone" id="factory_Zone" class="form-control" value="{{old('factory_Zone')}}">
                                            <input type="hidden" name="factory_zone" id="zoneid" class="form-control" value="{{old('factory_zone')}}">

                                            </div>
                                        </div>
                                    </div>
                                    

                                </div>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div id="shop" style="display:none;">
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset class="scheduler-border">
				            <legend class="scheduler-border">ဆိုင်နှင့်အလုပ်ဌာန ဆိုင်ရာအချက်အလက်များ</legend>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="Name">ဆိုင် အမည် <span style="color:red">*</span></label>
                                            </div>
                                            <div class="col-sm-7">
                                            <input type="text" name="shop_name" id="shop_Name" class="form-control" value="{{old('shop_name')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="shop_IDno">ဆိုင်အမှတ် <span style="color:red">*</span></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="text" name="shop_IDno" id="shop_IDno" class="form-control" value="{{old('shop_IDno')}}">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="blank10"></div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="Address">ဆိုင်လိပ်စာ <span style="color:red">*</span></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="text" name="shop_address" id="shop_Address" class="form-control" value="{{old('shop_address')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="Township">မြို့နယ် <span style="color:red">*</span></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="text" name="shop_township" id="shop_Township" class="form-control" value="{{old('shop_township')}}">
                                                <input type="hidden" name="shop_township_id" id="township_id" class="form-control" value="{{old('shop_township_id')}}">

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            <!-- <p>	
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="Zone">ဇုန် </label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="text" name="shop_zone" id="shop_Zone" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    

                                </div>
                            </p> -->
                        </fieldset>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset class="scheduler-border">
				            <legend class="scheduler-border">တရားစွဲဆိုခြင်းခံရသူ အချက်အလက်များ</legend>
                            <p>	
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="OwnerName">ပိုင်ရှင် အမည် <span style="color:red">*</span></label>
                                            </div>
                                            <div class="col-sm-7">
                                            <input type="text" name="OwnerName" id="OwnerName" class="form-control" value="{{old('OwnerName')}}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="OwnerAddress">ပိုင်ရှင် လိပ်စာ <span style="color:red">*</span></label>
                                            </div>
                                            <div class="col-sm-7">
                                            <textarea name="OwnerAddress" id="OwnerAddress" class="form-control" required>{{old('OwnerAddress')}}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="ManagerName">မန်နေဂျာ အမည် <span style="color:red">*</span></label>
                                            </div>
                                            <div class="col-sm-7">
                                            <input type="text" name="ManagerName" id="ManagerName" class="form-control" value="{{old('ManagerName')}}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="ManagerAddress">မန်နေဂျာ လိပ်စာ <span style="color:red">*</span></label>
                                            </div>
                                            <div class="col-sm-7">
                                            <textarea name="ManagerAddress" id="ManagerAddress" class="form-control" required>{{old('ManagerAddress')}}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset class="scheduler-border">
				            <legend class="scheduler-border">တရားလို အချက်အလက်များ</legend>
                            <p>	
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="PlaintiffName">တရားလို အမည် <span style="color:red">*</span></label>
                                            </div>
                                            <div class="col-sm-7">
                                            <input type="text" name="PlaintiffName" id="PlaintiffName" class="form-control" required value="{{old('PlaintiffName')}}"> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="PlaintiffLvl">ရာထူး <span style="color:red">*</span></label>
                                            </div>
                                            <div class="col-sm-7">
                                            <input type="text" name="PlaintiffLvl" id="PlaintiffLvl" class="form-control" required value="{{old('PlaintiffLvl')}}">    
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="PlaintiffTownship">မြို့နယ် <span style="color:red">*</span></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="text" name="PlaintiffTownship" id="PlaintiffTownship" class="form-control" required value="{{old('PlaintiffTownship')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="PlaintiffZone">ဇုန် <span style="color:red">*</span></label>
                                            </div>
                                            <div class="col-sm-7">
                                            <input type="text" name="PlaintiffZone" id="PlaintiffZone" class="form-control" required value="{{old('PlaintiffZone')}}">
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
				            <legend class="scheduler-border">တရားစွဲဆိုရသည့်အကြောင်းအရင်း <span style="color:red">*</span></legend>
                                <div class="row">
                                    <div class="col-sm-12">
                                    <textarea name="ProsecutedAbout" id="ProsecutedAbout" class="form-control" required>{{old('ProsecutedAbout')}}</textarea>
                                    </div>
                                </div>                            
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset class="scheduler-border">
				            <legend class="scheduler-border">ကျူးလွန်သောဥပဒေနှင့်စွဲဆိုသည့်ပုဒ်မ <span style="color:red">*</span></legend>
                                <div class="row">
                                    <div class="col-sm-12">
                                    <textarea name="ProsecutedLaw" id="ProsecutedLaw" class="form-control" required>{{old('ProsecutedLaw')}}</textarea>
                                    </div>
                                </div>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset class="scheduler-border">
				            <legend class="scheduler-border">တရားရုံးတင်ခြင်း</legend>
                            <p>	
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="ProsecutedDay">ရုံးတင်တရားစွဲဆိုသည့်နေ့ <span style="color:red">*</span></label>
                                            </div>
                                            <div class="col-sm-7">
                                            <input type="date" name="ProsecutedDay" id="datepicker" class="form-control datepicker" required value="{{old('ProsecutedDay')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="CourtName">တရားရုံးအမည် <span style="color:red">*</span></label>
                                            </div>
                                            <div class="col-sm-7">
                                            <input type="text" name="CourtName" id="CourtName" class="form-control" required value="{{old('CourtName')}}">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset class="scheduler-border">
				            <legend class="scheduler-border">အမိန့်ချခြင်း</legend>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="DecreeDay">အမိန့်ချမှတ်သောနေ့ </label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="date" name="DecreeDay" id="datepicker" class="form-control datepicker">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="getDecreeDay">၎င်းအမိန့်ကိုရရှိသောနေ့ </label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="date" name="getDecreeDay" id="datepicker" class="form-control datepicker">
                                            </div>
                                        </div>
                                    </div>

                                </div>                            
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset class="scheduler-border">
                        <legend class="scheduler-border">အမှုတွဲ</legend>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-2 text-right">
                                                <label for="DecreeID">အမှုအမှတ်(ပြစ်မှုကြီး) </label>
                                            </div>
                                            <div class="col-sm-10">
                                                <textarea name="DecreeID" id="DecreeID" class="form-control"></textarea>
                                            </div>
                                            
                                        </div>
                                    </div>
                                   
                                </div>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset class="scheduler-border">
                        <legend class="scheduler-border">အမှုနှင့်ပတ်သတ်၍အကျုံးဝင်သောအလုပ်သမားများခံစားခွင့်</legend>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="noOfemp">အလုပ်သမားဦးရေ </label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="text" name="noOfemp" id="noOfemp" class="form-control">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="empGetmoney">အလုပ်သမားများရသင့်သည့်ငွေပေါင်း </label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="text" name="empGetmoney" id="empGetmoney" class="form-control">
                                            </div>
                                            
                                        </div>
                                    </div>
                                   
                                </div>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset class="scheduler-border">
                        <legend class="scheduler-border">မပြီးပြတ်သေးသောအမှုအခြေအနေ နှင့် ချိန်းဆိုသည့်နေ့တွင်မည်သို့ဆောင်ရွက်သည်ကိုဖော်ပြရန်</legend>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <textarea name="DecreeAct" id="DecreeAct" class="form-control"></textarea>
                                    </div>
                                   
                                </div>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset class="scheduler-border">
				            <legend class="scheduler-border">စီရင်ချက်ချခြင်း</legend>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-6 text-right">
                                                <label for="judgmentDay">စီရင်ချက်ချမှတ်သောနေ့စွဲ</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="date" name="judgmentDay" id="datepicker" class="form-control datepicker">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        
                                    </div>
                                </div>
                                <div class="blank10"></div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-3 text-right">
                                                <label for="judgment">စီရင်ချက် </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <textarea name="judgment" id="judgment" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                        </fieldset>
                    </div>
                </div>
                <div class="blank10"></div>
            <div style="overflow:auto;">
                <div style="float:right;">
                <button type="submit" id="SaveFactory" >သိမ်းဆည်းမည်</button>
                </div>
            </div>
           
     </form>     
     <!-- scroll back to top of the page -->
<a id="back2Top" title="Back to top" href="#">&#10148;</a>
  
        
    
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script>
$(document).ready(function(){
    $('#chooseType').on('change', function() {
      if ( this.value == '1')
      {
           $("#shop").hide();
        $("#factory").show();
      }
      else if( this.value == '2')
      {
          $("#factory").hide();
        $("#shop").show();
      }
       else  
      {
        $("#factory").show();
        $("#shop").hide();
      }
    });
});
</script>


<script>
$(document).ready(function(){

$('#factoryname').keyup(function(){ 
       var query = $(this).val();
       var type = $('#chooseType').val();
       if(query != '')
       {
        var _token = $('input[name="_token"]').val();
        $.ajax({
         url:"{{ route('prosecutedautocomplete.prosecutedfetch') }}",
         method:"POST",
         data:{query:query, type:type,_token:_token},
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
 var type = $('#chooseType').val();
              $.ajax({
                   type: 'GET', //THIS NEEDS TO BE GET
                   url: '{{ route('prosecutedautocomplete.prosecuteddata') }}',
                   data:{name:query,type:type},
                   success: function (data) {
                       console.log(data);
                    
                       if(data.type="1"){
                            $('#factory_IDno').val(data.FactoryId);
                            $('#factory_Name').val(data.FactoryName);
                            $('#factory_Address').val(data.FactoryAddress);
                            $('#factory_Township').val(data.township);
                            $('#townshipid').val(data.township_id);
                            $('#zoneid').val(data.zone_id);
                            $('#factory_Zone').val(data.zone);
                            $('#OwnerName').val(data.OwnerName);
                            $('#OwnerAddress').val(data.OwnerAddress);
                            $('#ManagerName').val(data.ManagerName);
                       }
                    if(data.shoptype == '2'){
                        $('#shop_IDno').val(data.ShopId);
                            $('#shop_Name').val(data.shopname);
                            $('#shop_Address').val(data.loacationaddress);
                            $('#shop_Township').val(data.township);
                            $('#township_id').val(data.township_id);
                            $('#shop_Zone').val(data.zone);
                            $('#OwnerName').val(data.ownername);
                            $('#OwnerAddress').val(data.owneraddress);
                            $('#ManagerName').val(data.mangername);
                            $('#ManagerAddress').val(data.manageraddress);

                    }
                 
                   },
                   error: function() { 
                        console.log(data);
                   }
       });
});
</script> 

@endsection