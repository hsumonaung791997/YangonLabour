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
        
        
   

    <h1 style="text-align:center;margin-bottom:40px;">ပြည်ထောင်စုသမ္မတမြန်မာနိုင်ငံတော်<br>အလုပ်သမား၊ လူဝင်မှုကြီးကြပ်ရေးနှင့် ပြည်သူ့အင်အားဝန်ကြီးဌာန<br>အလုပ်ရုံနှင့် အလုပ်သမားဥပ ဒေစစ်ဆေးရေးဦးစီးဌာန<br>လုပ်ငန်းခွင်ထိခိုက်မှုအကြောင်းကြားခြင်းပုံစံ</h1>
    <div style="text-align:center;margin-top:40px;">
	    <a  style="text-decoration: none;" onclick="nextPrevv(0)"><span class="step">1</span></a>
	    <span class="step" onclick="nextPrevv(1)">2</span>
	    <span class="step" onclick="nextPrevv(2)">3</span>
	</div> <br>
    
    <div class="tab"> 
        <p>
            <div class="row">
                <div class="col-sm-1">
                    
                </div>
                <div class="col-sm-5 text-center">
                    <input type="text" name="factoryname" id="factoryname" class="form-control" placeholder="လုပ်ငန်းအမည် ရှာရန်..." />
                    <div id="factoryList">
                    </div>
                </div>
                <div class="col-sm-2">
                    <button id="search">ရှာရန်</button>
                </div>
                <div class="col-sm-3 text-right mb-2">
                    <div class="pull-right">
                        <a class="btn" style="background:#2F8DD8;color:#fff;" href="{{ route('AffectedIndex.index') }}"> ပြန်ထွက်</a>
                    </div>
                </div>
            </div>
        </p> 


    <form id="affectform" class="form-background" action="{{route('AffectedIndex.store')}}" method="post" enctype="multipart/form-data">
     {{csrf_field()}}
        {{-- for tempoary save --}}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4 text-right">
                                <label for="Type">ထိခိုက်မှုအကြောင်းကြားခြင်းပုံစံ ရွေးရန် </label>
                            </div>
                            <div class="col-sm-6">
                                <select id="Type" name="Type" class="form-control">
                                    <option value="1">စက်ရုံ၊ အလုပ်ရုံ</option>
                                    <option value="2"> ဆိုင်နှင့်အလုပ်ဌာန</option>
                                </select>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
        
        <input type="hidden" name="township_id" id="township_id" >
         
            
        <div id="factory">
            <div class="row">
                <div class="col-sm-12">
                    <fieldset class="scheduler-border">
					    <legend class="scheduler-border">လုပ်ငန်းဆိုင်ရာအချက်အလက်များ</legend>
                                <div class="row">
                                    <div class="col-sm-5 text-center">
                                        <label for="Factory_IDno">စက်ရုံအမှတ် <span style="color:red">*</span></label>
                                    <input  id="Factory_IDno" class="form-control" name="Factory_IDno" value="{{old('Factory_IDno')}}">
                                    </div>
                                    
                                    <div class="col-sm-1">

                                    </div>
                                    <div class="col-sm-5 text-center">
                                        <label for="Factory_Name">စက်ရုံအမည် <span style="color:red">*</span></label>
                                    <input  id="Factory_Name" class="form-control" name="Factory_Name" value="{{old('Factory_Name')}}">
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-sm-5 text-center">
                                        <label for="OwnerName">ပိုင်ရှင်အမည် <span style="color:red">*</span></label>
                                    <input id="OwnerName" class="form-control" name="OwnerName" value="{{old('OwnerName')}}">
                                    </div>
                                    
                                    <div class="col-sm-1">

                                    </div>
                                    <div class="col-sm-5 text-center">
                                        <label for="Factory_Type">လုပ်ငန်းအမျိုးအစား <span style="color:red">*</span></label>
                                    <input  id="Factory_Type" class="form-control" name="Factory_Type" value="{{old('Factory_Type')}}">
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-sm-5 text-center">
                                        <label for="Factory_Phno">ဖုန်းနံပါတ် <span style="color:red">*</span></label>
                                    <input id="Factory_Phno" class="form-control" name="Factory_Phno" value="{{old('Factory_Phno')}}">
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-5 text-center">
                                        <label for="Factory_Address">လိပ်စာ <span style="color:red">*</span></label>
                                    <input  id="Factory_Address" class="form-control" name="Factory_Address" value="{{old('Factory_Address')}}">
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
					    <legend class="scheduler-border">လုပ်ငန်းဆိုင်ရာအချက်အလက်များ</legend>
                                <div class="row">
                                    <div class="col-sm-5 text-center">
                                        <label for="Shop_IDno">ဆိုင်အမှတ် <span style="color:red">*</span></label>
                                    <input  id="Shop_IDno" class="form-control" name="Shop_IDno" value="{{old('Shop_IDno')}}">
                                    </div>
                                    
                                    <div class="col-sm-1">

                                    </div>
                                    <div class="col-sm-5 text-center">
                                        <label for="Shop_Name">ဆိုင်အမည် <span style="color:red">*</span></label>
                                        <input  id="Shop_Name" class="form-control" name="Shop_Name" value="{{old('Shop_IDno')}}">
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-sm-5 text-center">
                                        <label for="ShopOwnerName">ပိုင်ရှင်အမည် <span style="color:red">*</span></label>
                                        <input id="ShopOwnerName" class="form-control" name="ShopOwnerName" value="{{old('ShopOwnerName')}}">
                                    </div>
                                    
                                    <div class="col-sm-1">

                                    </div>
                                    <div class="col-sm-5 text-center">
                                        <label for="Shop_Type">လုပ်ငန်းအမျိုးအစား <span style="color:red">*</span></label>
                                        <input  id="Shop_Type" class="form-control" name="Shop_Type" value="{{old('Shop_Type')}}">
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-sm-5 text-center">
                                        <label for="Shop_Phno">ဖုန်းနံပါတ် <span style="color:red">*</span></label>
                                        <input id="Shop_Phno" class="form-control" name="Shop_Phno" value="{{old('Shop_Phno')}}">
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-5 text-center">
                                        <label for="Shop_Address">လိပ်စာ <span style="color:red">*</span></label>
                                        <input  id="Shop_Address" class="form-control" name="Shop_Address" value="{{old('Shop_Address')}}">
                                    </div>
                                </div>
					    </fieldset>
            
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <fieldset class="scheduler-border">
					    <legend class="scheduler-border">လုပ်ငန်းခွင် ထိခိုက်သူဆိုင်ရာ အချက်အလက်များ</legend>
                                <div class="row">
                                    <div class="col-sm-5 text-center">
                                        <label for="empName">အမည် <span style="color:red">*</span></label>
                                        <input  id="empName" class="form-control" name="empName" value="{{old('empName')}}" required>
                                    </div>
                                    <div class="col-sm-1">

                                    </div>
                                    <div class="col-sm-5 text-center">
                                        <label for="empAge">အသက် နှင့် လုပ်သက် <span style="color:red">*</span></label>
                                        <input id="empAge" class="form-control" name="empAge" value="{{old('empAge')}}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5 text-center">
                                        <label for="empGender">လိင် <span style="color:red">*</span></label>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input  class="custom-control-input" id="empGender1" name="empGender" type="radio" value="ကျား" checked>
                                                    <label class="custom-control-label" for="empGender1">ကျား</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input  class="custom-control-input" id="empGender2" name="empGender" type="radio" value="မ" @if(old('empGender')=='မ') checked @endif>
                                                    <label class="custom-control-label" for="empGender2">မ</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">

                                    </div>
                                    <div class="col-sm-5 text-center">
                                        <label for="empLvl">ရာထူး နှင့် တာ၀န် <span style="color:red">*</span></label>
                                        <input id="empLvl" class="form-control" name="empLvl" value="{{old('emoLvl')}}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5 text-center">
                                        <label for="empLama">လမဖ အကျုံး၀င်မှု ရှိ/မရှိ <span style="color:red">*</span></label>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input  class="custom-control-input" id="empLama1" name="empLama" type="radio" value="ရှိ" checked>
                                                    <label class="custom-control-label" for="empLama1">ရှိ</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input  class="custom-control-input" id="empLama2" name="empLama" type="radio" value="မရှိ" @if(old('emplama')=='မရှိ') checked @endif>
                                                    <label class="custom-control-label" for="empLama2">မရှိ</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                    </div>
                                    <div class="col-sm-5 text-center">
                                        <label for="empPhno">ဖုန်းနံပါတ် <span style="color:red">*</span></label>
                                        <input id="empPhno" class="form-control" name="empPhno" value="{{old('empPhno')}}">
                                    </div>
                                   
                                </div>
					    </fieldset>
            
                    </div>
                </div>
                
            <div class="row">
                <div class="col-sm-12">
                    <fieldset class="scheduler-border">
					    <legend class="scheduler-border">ထိခိုက်မှုဆိုင်ရာအချက်အလက်များ</legend>
                                <div class="row">
                                    <div class="col-sm-5 text-center">
                                        <label for="accDay">ထိခိုက်မှုဖြစ်ပွားသည့်နေ့ရက် <span style="color:red">*</span></label>
                                        <input id="datepicker accDay" class="datepicker form-control" type="date" name="accDay" value="{{old('accDay')}}">
                                    </div>
                                    <div class="col-sm-1">

                                    </div>
                                    <div class="col-sm-5 text-center">
                                        <label for="accTime">အချိန် <span style="color:red">*</span></label>
                                        <input type="time" id="accTime" class="form-control" name="accTime" value="{{old('accTime')}}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5 text-center">
                                        <label for="accPlace">နေရာ <span style="color:red">*</span></label>
                                        <input id="accPlace" class="form-control" name="accPlace" value="{{old('accPlace')}}">
                                    </div>
                                    <div class="col-sm-1">

                                    </div>
                                    <div class="col-sm-5 text-center">
                                        <label for="accType">အမျိုးအစား <span style="color:red">*</span></label>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="accType1" name="accType" type="checkbox" value="ရှေးဦးသူနာပြု" @if(old('accType')=='ရှေးဦးသူနာပြု') checked @endif>
                                                    <label class="custom-control-label" for="accType1">ရှေးဦးသူနာပြု</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="accType2" name="accType" type="checkbox" value="သာမန်" @if(old('accType')=='သာမန်') checked @endif>
                                                    <label class="custom-control-label" for="accType2">သာမန်</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="accType3" name="accType" type="checkbox" value="ပြင်းထန်" @if(old('accType')=='ပြင်းထန်') checked @endif>
                                                    <label class="custom-control-label" for="accType3">ပြင်းထန်</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="accType4" name="accType" type="checkbox" value="အလွန်ပြင်းထန်" @if(old('accType')=='အလွန်ပြင်းထန်') checked @endif>
                                                    <label class="custom-control-label" for="accType4">အလွန်ပြင်းထန်</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="accType5" name="accType" type="checkbox" value="သေဆုံး" @if(old('accType')=='သေဆုံး') checked @endif>
                                                    <label class="custom-control-label" for="accType5">သေဆုံး</label>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5 text-center">
                                        <label for="accDetail">ဖြစ်စဉ်အကျဉ်း <span style="color:red">*</span></label>
                                        {{-- <input id="accDetail" class="form-control" name="accDetail" value="{{old('accDetail')}}"> --}}
                                        <textarea name="accDetail" id="accDetail" class="col-sm-12" rows="6">{{old('accDetail')}}</textarea>
                                    </div>
                                    <div class="col-sm-1">

                                    </div>
                                    <div class="col-sm-5 text-center">
                                        <label for="accLeave">ခန့်မှန်းအလုပ်ပျက်ရက် <span style="color:red">*</span></label>
                                        <input  id="accLeave" class="form-control" name="accLeave" value="{{old('accLeave')}}">
                                    </div>
                                   
                                </div>
					    </fieldset>
            
                    </div>
                </div>
            </div>
            <div class="tab">
            <div class="row">
                <div class="col-sm-12">
                    <fieldset class="scheduler-border">
					    <legend class="scheduler-border">ထိခိုက်ဒဏ်ရာ အမျိုးအစား <span style="color:red">*</span></legend>
                                <div class="row">
                                    <div class="col-sm-12 text-left">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <select name="painType" id="painType" class="form-control">
                                                <option value="">ထိခိုက်ဒဏ်ရာ အမျိုးအစား ရွေးရန်
                                                    </option>
                                                @foreach ($affected_type as $a)
                                            <option value="{{$a->affected_code}}">{{$a->affected_name}}</option> 
                                                @endforeach
                                            </select>
                                        </div>
                                            {{-- <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painType1" name="painType" type="checkbox" value="အရိုးကျိုးခြင်း"@if(old('painType')=='အရိုးကျိုးခြင်း') checked @endif>
                                                    <label class="custom-control-label" for="painType1">အရိုးကျိုးခြင်း</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painType2" name="painType" type="checkbox" value="အဆစ်လွဲခြင်း" @if(old('painType')=='အဆစ်လွဲခြင်း') checked @endif>
                                                    <label class="custom-control-label" for="painType2">အဆစ်လွဲခြင်း</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painType3" name="painType" type="checkbox" value="အရွတ်ဒဏ်ရာရရှိခြင်းနှင့် ကြွက်သားဒဏ်ဖြစ်ခြင်း" @if(old('painType')=='အရွတ်ဒဏ်ရာရရှိခြင်းနှင့်ကြွက်သားဒဏ်ဖြစ်ခြင်း') checked @endif>
                                                    <label class="custom-control-label" for="painType3">အရွတ်ဒဏ်ရာရရှိခြင်းနှင့် ကြွက်သားဒဏ်ဖြစ်ခြင်း</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painType4" name="painType" type="checkbox" value="ဦးခေါင်းဒဏ်ရာ ရရှိမှုနှင့် အခြား ခန္ဓာကိုယ် အတွင်းပိုင်း ထိခိုက်ဒဏ်ရာရရှိခြင်း" @if(old('painType')=='ဦးခေါင်းဒဏ်ရာရရှိမှုနှင့်အခြားခန္ဓာကိုယ်အတွင်းပိုင်းထိခိုက်ဒဏ်ရာရရှိခြင်း') checked @endif>
                                                    <label class="custom-control-label" for="painType4">ဦးခေါင်းဒဏ်ရာ ရရှိမှုနှင့် အခြား ခန္ဓာကိုယ် အတွင်းပိုင်း ထိခိုက်ဒဏ်ရာရရှိခြင်း</label>
                                                </div>4
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painType5" name="painType" type="checkbox" value="(ခန္ဓာကိုယ် အင်္ဂါအစိတ်အပိုင်းတခုခု) ပြတ်တောက်ခြင်း/ ပြုတ်ထွက်ခြင်း/ ကျွတ်ထွက်ခြင်း။" @if(old('painType')=='(ခန္ဓာကိုယ်အင်္ဂါအစိတ်အပိုင်းတခုခု)ပြတ်တောက်ခြင်း/ပြုတ်ထွက်ခြင်း/ကျွတ်ထွက်ခြင်း။') checked @endif>
                                                    <label class="custom-control-label" for="painType5">(ခန္ဓာကိုယ် အင်္ဂါအစိတ်အပိုင်းတခုခု) ပြတ်တောက်ခြင်း/ ပြုတ်ထွက်ခြင်း/ ကျွတ်ထွက်ခြင်း။</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painType6" name="painType" type="checkbox" value="အခြားဒဏ်ရာ" @if(old('painType')=='အခြားဒဏ်ရာ') checked @endif>
                                                    <label class="custom-control-label" for="painType6">အခြားဒဏ်ရာ</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painType7" name="painType" type="checkbox" value="အပေါ် ယံထိခိုက်ရှနာများ" @if(old('painType')=='အပေါ်ယံထိခိုက်ရှနာများ') checked @endif>
                                                    <label class="custom-control-label" for="painType7">အပေါ် ယံထိခိုက်ရှနာများ</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painType8" name="painType" type="checkbox" value="အတွင်းကြေဒဏ်ရာနှင့် ဖိမိကြိတ်မိသည့်ဒဏ်ရာများ" @if(old('painType')=='အတွင်းကြေဒဏ်ရာနှင့်ဖိမိကြိတ်မိသည့်ဒဏ်ရာများ') checked @endif>
                                                    <label class="custom-control-label" for="painType8">အတွင်းကြေဒဏ်ရာနှင့် ဖိမိကြိတ်မိသည့်ဒဏ်ရာများ</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painType9" name="painType" type="checkbox" value="လောင်ကျွမ်းခြင်း" @if(old('painType')=='လောင်ကျွမ်းခြင်း') checked @endif>
                                                    <label class="custom-control-label" for="painType9">လောင်ကျွမ်းခြင်း</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painType10" name="painType" type="checkbox" value="ပြင်းထန်စွာအဆိပ်သင့်ခြင်း" @if(old('painType')=='ပြင်းထန်စွာအဆိပ်သင့်ခြင်း') checked @endif>
                                                    <label class="custom-control-label" for="painType10">ြင်းထန်စွာအဆိပ်သင့်ခြင်း</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painType11" name="painType" type="checkbox" value="ရာသီဥတုနှင့်ဆက်စပ်သည့် အခြေအနေနျားကြောင့်ဖြစ်သည့် ဒဏ်ရာများ" @if(old('painType')=='ရာသီဥတုနှင့်ဆက်စပ်သည့်အခြေအနေနျားကြောင့်ဖြစ်သည့်ဒဏ်ရာများ') checked @endif>
                                                    <label class="custom-control-label" for="painType11">ရာသီဥတုနှင့်ဆက်စပ်သည့် အခြေအနေနျားကြောင့်ဖြစ်သည့် ဒဏ်ရာများ</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painType12" name="painType" type="checkbox" value="အသက်ရှူကြပ်ခြင်း" @if(old('painType')=='အသက်ရှူကြပ်ခြင်း') checked @endif>
                                                    <label class="custom-control-label" for="painType12">အသက်ရှူကြပ်ခြင်း</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painType13" name="painType" type="checkbox" value="လျှပ်စစ်" @if(old('painType')=='လျှပ်စစ်') checked @endif>
                                                    <label class="custom-control-label" for="painType13">လျှပ်စစ်</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painType14" name="painType" type="checkbox" value="ရောင်ခြည်သင့်ခြင်း" @if(old('painType')=='ရောင်ခြည်သင့်ခြင်း') checked @endif>
                                                    <label class="custom-control-label" for="painType14">ရောင်ခြည်သင့်ခြင်း</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painType15" name="painType" type="checkbox" value="သဘောသဘာသမတူညီသည့် ဒဏ်ရာအမျိုးမျိုး" @if(old('painType')=='သဘောသဘာသမတူညီသည့်ဒဏ်ရာအမျိုးမျိုး') checked @endif>
                                                    <label class="custom-control-label" for="painType15">သဘောသဘာသမတူညီသည့် ဒဏ်ရာအမျိုးမျိုး</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painType16" name="painType" type="checkbox" value="အခြားနှင့် အတိအကျသတ်မှတ်ရန်ခက်ခဲသည့် ထိခိုက်မှုများ" @if(old('painType')=='အခြားနှင့်အတိအကျသတ်မှတ်ရန်ခက်ခဲသည့်ထိခိုက်မှုများ') checked @endif>
                                                    <label class="custom-control-label" for="painType16">အခြားနှင့် အတိအကျသတ်မှတ်ရန်ခက်ခဲသည့် ထိခိုက်မှုများ</label>
                                                </div>
                                            </div> --}}
                                            
                                        </div>
                                    </div>
                                </div>                            
					    </fieldset>
            
                    </div>
                </div>
            <div class="row">
                <div class="col-sm-12">
                    <fieldset class="scheduler-border">
					    <legend class="scheduler-border">ထိခိုက်ဒဏ်ရာ ရရှိသည့်အစိတ်အပိုင်း <span style="color:red">*</span></legend>
                            <div class="row">
                                <div class="col-sm-5">
                                    <select name="painPart" id="painPart" class="form-control">
                                        <option value="">ထိခိုက်ဒဏ်ရာ ခန္ဓာကိုယ်အစိတ်အပိုင်း ရွေးရန်
                                            </option>
                                        @foreach ($affected_body as $a)
                                            <option value="{{$a->body_code}}">{{$a->body_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-5">
                                    <select name="painPiece" id="painPiece" class="form-control">
                                        <option value="">ထိခိုက်ဒဏ်ရာ အစိတ်အပိုင်း ရွေးရန်
                                            </option>
                                    </select>
                                </div>
                                
                                <div class="col-sm-6 m-2">
                                        <select name="painArea" id="painArea" class="form-control">
                                            <option value="">ထိခိုက်မှု ရရှိသည့် ဘက် ရွေးရန်(ဘယ်ဘက် , ညာဘက် , နှစ်ဖက်စလုံး) </option>
                                             <option value="1">ဘယ်ဘက်</option>
                                             <option value="2">ညာဘက်</option>
                                             <option value="3">နှစ်ဖက်စလုံး</option>
                                        </select>
                                </div>


                                            {{-- <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painPart1" name="painPart" type="checkbox" value="ဦးခေါင်းပိုင်း" checked>
                                                    <label class="custom-control-label" for="painPart1">ဦးခေါင်းပိုင်း</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painPart2" name="painPart" type="checkbox" value="လည်ပင်းပိုင်း">
                                                    <label class="custom-control-label" for="painPart2">လည်ပင်းပိုင်း</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painPart3" name="painPart" type="checkbox" value="ကိုယ်လုံးပိုင်း">
                                                    <label class="custom-control-label" for="painPart3">ကိုယ်လုံးပိုင်း</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painPart4" name="painPart" type="checkbox" value="ခန္ဓာကိုယ်အပေါ် ပိုင်း">
                                                    <label class="custom-control-label" for="painPart4">ခန္ဓာကိုယ်အပေါ် ပိုင်း</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painPart5" name="painPart" type="checkbox" value="ခန္ဓာကိုယ်အောက်ပိုင်း">
                                                    <label class="custom-control-label" for="painPart5">ခန္ဓာကိုယ်အောက်ပိုင်း</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painPart6" name="painPart" type="checkbox" value="ခန္ဓာကိုယ်အစိတ်အပိုင်း နေရာအများအပြား ထိခိုက်မိခြင်း">
                                                    <label class="custom-control-label" for="painPart6">ခန္ဓာကိုယ်အစိတ်အပိုင်း နေရာအများအပြား ထိခိုက်မိခြင်း</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painPart7" name="painPart" type="checkbox" value="အခြားထိခိုက်မှုများ">
                                                    <label class="custom-control-label" for="painPart7">အခြားထိခိုက်မှုများ</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painPart8" name="painPart" type="checkbox" value="ထိခိုက်မှုနေရာအတိအကျ သတ်မှတ်မရနိုင်ခြင်း">
                                                    <label class="custom-control-label" for="painPart8">ထိခိုက်မှုနေရာအတိအကျ သတ်မှတ်မရနိုင်ခြင်း</label>
                                                </div>
                                            </div>
                                            
                                        </div> --}}
					    </fieldset>
                    </div>
                </div>
                <div class="row">
                <div class="col-sm-12">
                    <fieldset class="scheduler-border">
					    <legend class="scheduler-border">ဖြစ်ပွားရသည့်အကြောင်းအရင်း <span style="color:red">*</span></legend>
                            <div class="row">
                                <div class="col-sm-5">
                                    <select name="painCase" id="painCase" class="form-control">
                                        <option value="">ဖြစ်ပွားရသည့်အကြောင်းအရင်း ရွေးရန်</option>
                                        @foreach ($impact_type as $i)
                                        <option value="{{$i->impact_no}}">{{$i->impact_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-5">
                                    <select name="painCase_des" id="painCase_des" class="form-control">
                                        <option value="">လုပ်ငန်းခွင် ထိခိုက်မှု အမျိုးအစား ရွေးရန်
                                            </option>
                                    </select>
                                </div>
                                            {{-- <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painCase1" name="`" type="checkbox" value="လူပြုတ်ကျခြင်း" checked>
                                                    <label class="custom-control-label" for="painCase1">လူပြုတ်ကျခြင်း</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painCase2" name="painCase" type="checkbox" value="အမြင့်မှကျသည့်အရာတစ်ခုခုဖြင့်ရိုက်မိခြင်း">
                                                    <label class="custom-control-label" for="painCase2">အမြင့်မှကျသည့်အရာတစ်ခုခုဖြင့်ရိုက်မိခြင်း</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painCase3" name="painCase" type="checkbox" value="အမြင့်မှကျလာသည့်အရာတစ်ခုခုကြောင့်မဟုတ်ဘဲ အခြားအရာ တစ်ခုခုကိုတက်နင်းမိခြင်း၊ ခလုတ်တိုက်မိခြင်း၊ ရိုက်မိခြင်း။">
                                                    <label class="custom-control-label" for="painCase3">အမြင့်မှကျလာသည့်အရာတစ်ခုခုကြောင့်မဟုတ်ဘဲ အခြားအရာ တစ်ခုခုကိုတက်နင်းမိခြင်း၊ ခလုတ်တိုက်မိခြင်း၊ ရိုက်မိခြင်း။</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painCase4" name="painCase" type="checkbox" value="အရာတစ်ခုခုဖြင့် သို့မဟုတ် ဝတ္ထုပစ္စည်းများအကြားညပ်မိခြင်း">
                                                    <label class="custom-control-label" for="painCase4">အရာတစ်ခုခုဖြင့် သို့မဟုတ် ဝတ္ထုပစ္စည်းများအကြားညပ်မိခြင်း</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painCase5" name="painCase" type="checkbox" value="အင်အားစိုက်ထုတ်၍ သို့မဟုတ် ပြင်းထန်စွာဆောင်ရွက်ရခြင်း">
                                                    <label class="custom-control-label" for="painCase5">အင်အားစိုက်ထုတ်၍ သို့မဟုတ် ပြင်းထန်စွာဆောင်ရွက်ရခြင်း</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painCase6" name="painCase" type="checkbox" value="လွန်ကဲသည့် အပူချိန်နှင့်ထိတွေ့ခြင်း သို့မဟုတ် ထိတွေ့ခံစားခြင်း">
                                                    <label class="custom-control-label" for="painCase6">လွန်ကဲသည့် အပူချိန်နှင့်ထိတွေ့ခြင်း သို့မဟုတ် ထိတွေ့ခံစားခြင်း</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painCase7" name="painCase" type="checkbox" value="လျှပ်စစ်ဓါတ်အား သက်ရောက်ခံရခြင်း သို့မဟုတ် ဓါတ်လိုက်ခြင်း">
                                                    <label class="custom-control-label" for="painCase7">လျှပ်စစ်ဓါတ်အား သက်ရောက်ခံရခြင်း သို့မဟုတ် ဓါတ်လိုက်ခြင်း</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="paincase8" name="painCase" type="checkbox" value="အန္တရာ​ယ်ရှိသော အရာများနှင့်ဖြစ်စေ၊ ဓါတ်ရောင်ခြည်နှင့်ဖြစ်စေ၊ ထိတွေ့ခံစားရခြင်း သို့မဟုတ် သက်ရောက်ခြင်း">
                                                    <label class="custom-control-label" for="painCase8">အန္တရာ​ယ်ရှိသော အရာများနှင့်ဖြစ်စေ၊ ဓါတ်ရောင်ခြည်နှင့်ဖြစ်စေ၊ ထိတွေ့ခံစားရခြင်း သို့မဟုတ် သက်ရောက်ခြင်း</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input  class="custom-control-input" id="painCase9" name="painCase" type="checkbox" value="ပြည့်စုံလုံလောက်သည့် အချက်အလက်မရရှိခြင်းကြောင့် အမျိုးအစားခွဲခြားဖော်ပြခြင်း မပြုလုပ်နိုင်သည့်လုပ်ငန်းခွင် ထိခိုက်မှုအပါအဝင်အခြားနေရာ တစ်ခုခုတွင် သတ်မှတ်ဖော်ပြထားခြင်း မရှိသည့် အခြားလုပ်ငန်းခွင်ထိခိုက်မှု အမျိုးအစားများ">
                                                    <label class="custom-control-label" for="painCase9">ပြည့်စုံလုံလောက်သည့် အချက်အလက်မရရှိခြင်းကြောင့် အမျိုးအစားခွဲခြားဖော်ပြခြင်း မပြုလုပ်နိုင်သည့်လုပ်ငန်းခွင် ထိခိုက်မှုအပါအဝင်အခြားနေရာ တစ်ခုခုတွင် သတ်မှတ်ဖော်ပြထားခြင်း မရှိသည့် အခြားလုပ်ငန်းခွင်ထိခိုက်မှု အမျိုးအစားများ</label>
                                                </div>
                                            </div> --}}
                                            
                                        </div>
					    </fieldset>
                    </div>
                </div>
        </div>
        <div class="tab">
	  	<div class="row">
		  		<div class="col-sm-4 text-right">
		  			<label for="affectedInform1">လုပ်ငန်းခွင် ထိခိုက်မှု အစီရင်ခံစာ တင်ပြအကြောင်းကြားစာ(၁)</label>
		  		</div>
		  		<div class="col-sm-8">
		  	 		<input type="file" name="affectedInform1" id='affectedInform1' class="form-control">
		  		</div>
	  		</div>
              <div class="blank10"></div>

		<div class="row">
		  		<div class="col-sm-4 text-right">
		  			<label for="affectedInform2">
                      လုပ်ငန်းခွင် ထိခိုက်မှု အစီရင်ခံစာ တင်ပြအကြောင်းကြားစာ(၂)
					</label>
		  		</div>
		  		<div class="col-sm-8">
		  	 		<input type="file"  name="affectedInform2" id='affectedInform2' class="form-control">
		  		</div>
		  	</div>
              <div class="blank10"></div>
	  	<div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="affectedInform3">
                  လုပ်ငန်းခွင် ထိခိုက်မှု အစီရင်ခံစာ တင်ပြအကြောင်းကြားစာ(၃)

				</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file"  name="affectedInform3" id='affectedInform3' class="form-control">
	  		</div>
	  	</div>
          <div class="blank10"></div>
	  	<div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="affectedInform4">လုပ်ငန်းခွင် ထိခိုက်မှု အစီရင်ခံစာ တင်ပြအကြောင်းကြားစာ(၄)</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file"  name="affectedInform4" id='affectedInform4' class="form-control">
	  		</div>
	  	</div>
          <div class="blank10"></div>
	  	<div class="row">
	  		<div class="col-sm-4 text-right">
	  			<label for="affectedInform5">လုပ်ငန်းခွင် ထိခိုက်မှု အစီရင်ခံစာ တင်ပြအကြောင်းကြားစာ(၅)</label>
	  		</div>
	  		<div class="col-sm-8">
	  	 		<input type="file" name="affectedInform5" id='affectedInform5' class="form-control">
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
      
</form>
<!-- scroll back to top of the page -->
<a id="back2Top" title="Back to top" href="#">&#10148;</a>

<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script>
$(document).ready(function(){
    $('#Type').on('change', function() {
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

    $('#painPart').change(function(){ 
	   var id = $(this).val();
	   if(id != '')
	   {
		$.ajax({
		 url:"{{ route('PainPartSection.fetch') }}",
		 method:"GET",
		 data:{id:id},
		 success:function(data){
			console.log(data);
			$.each(data, function (i, item) {
					$('#painPiece').append($('<option>', { 
						value: item.peice_no,
						text : item.peice_name 
					}));
				});
		   }
		});
	   }
   });

   $('#painCase').change(function(){ 
	   var id = $(this).val();
	   if(id != '')
	   {
		$.ajax({
		 url:"{{ route('PainCaseSection.fetch') }}",
		 method:"GET",
		 data:{id:id},
		 success:function(data){
			console.log(data);
			$.each(data, function (i, item) {
					$('#painCase_des').append($('<option>', { 
						value: item.case_des_no,
						text : item.case_des_name 
					}));
				});
		   }
		});
	   }
   });


});
</script>
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
    document.getElementById("affectform").submit();
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
    document.getElementById("affectform").submit();
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

$('#factoryname').keyup(function(){ 
       var query = $(this).val();
       var type = $('#Type').val();
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
 var type = $('#Type').val();
              $.ajax({
                   type: 'GET', //THIS NEEDS TO BE GET
                   url: '{{ route('prosecutedautocomplete.prosecuteddata') }}',
                   data:{name:query,type:type},
                   success: function (data) {
                       console.log(data);
                    
                       if(data.type="1"){
                            $('#Factory_IDno').val(data.FactoryId);
                            $('#Factory_Name').val(data.FactoryName);
                            $('#Factory_Address').val(data.FactoryAddress);
                            $('#OwnerName').val(data.OwnerName);
                            $('#Factory_Phno').val(data.ContactPhone);
                            $('#Factory_Type').val(data.worktype);
                            
                       }
                    if(data.shoptype == '2'){
                        $('#Shop_IDno').val(data.ShopId);
                            $('#Shop_Name').val(data.shopname);
                            $('#ShopOwnerName').val(data.ownername);
                            $('#Shop_Address').val(data.loacationaddress);
                            $('#Shop_Phno').val(data.shopphone);
                            $('#Shop_Type').val(data.worktype);                           
                    }
                    $('#township_id').val(data.township_id);                           

                   },
                   error: function() { 
                        console.log(data);
                   }
       });
});


  </script>



@endsection