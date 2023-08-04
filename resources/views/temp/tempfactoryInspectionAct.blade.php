@extends('layouts.admin')
@section('content')
  	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script type='text/javascript'>
$(function(){
$('#datepicker').datepicker({
    calendarWeeks: true,
    todayHighlight: true,
    autoclose: true
});  
});

</script>

        <div class="row">
            <div class="col-sm-12 text-right">
                <button  id="tempoarySave">ယာယီသိမ်းဆည်းမည် </button>
            </div>
        </div>

    <div style="text-align:center;margin-top:40px;">
        <a  style="text-decoration: none;" onclick="nextPrevv(0)"><span class="step">1</span></a>
        <span class="step" onclick="nextPrevv(1)">2</span>
        <span class="step" onclick="nextPrevv(2)">3</span>
        <span class="step" onclick="nextPrevv(3)">4</span>
    </div> <br>

    <h1 style="text-align:center;margin-bottom:40px;">၁၉၅၁ အလုပ်ရုံများ အက်ဥပဒေအရ စစ်ဆေးချက်ပုံစံ</h1>
    @if(session()->get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-inner--icon"></span>
            <span class="alert-inner--text">  {{ session()->get('success') }}  </span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
<form id="inspectform"class="form-background" action="{{route('FactoryInspectionAct.store')}}"  method="post">
     {{csrf_field()}}

     {{-- FOR TEMPOARY SAVE --}}
     <input type="hidden" name="tempoary" id="tempoary">

     <div class="tab">
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
                                          <input class="custom-control-input" id="sentnotice" name="sentnotice" type="radio" value=0 {{ $tempfactoryInspectionAct->sentnotice==0 ? 'checked' : '' }}>
                                          <label class="custom-control-label" for="sentnotice">ပြု</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="sentnotice1" checked="" type="radio" name="sentnotice" value=1 {{ $tempfactoryInspectionAct->sentnotice==1 ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="sentnotice1">မပြု</label>
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
                                          <input  class="custom-control-input" id="shownotice" name="shownotice" type="radio" value=0 {{ $tempfactoryInspectionAct->shownotice==0 ? 'checked' : '' }}>
                                          <label class="custom-control-label" for="shownotice">ပြု</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="shownotice1"  type="radio" name="shownotice" value=1 {{ $tempfactoryInspectionAct->shownotice==1 ? 'checked' : '' }}> 
                                            <label class="custom-control-label" for="shownotice1">မပြု</label>
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
                                    <input type="date" placeholder="နေ့စွဲ" name="workingduration" id="datepicker" value="{{$tempfactoryInspectionAct->workingduration}}">
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
                                          <input  class="custom-control-input" id="repeatitivework" name="repeatitivework" type="radio" value=0 {{ $tempfactoryInspectionAct->repeatitivework==0 ? 'checked' : '' }}>
                                          <label class="custom-control-label" for="repeatitivework">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="repeatitivework1"  type="radio" name="repeatitivework" value=1 {{ $tempfactoryInspectionAct->repeatitivework==1 ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="repeatitivework1">မရှိ</label>
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
                                          <input  class="custom-control-input" id="changenotice" name="changenotice" type="radio" value=0 {{ $tempfactoryInspectionAct->changenotice==0 ? 'checked' : '' }}>
                                          <label class="custom-control-label" for="changenotice">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="changenotice1"  type="radio" name="changenotice" value=1 {{ $tempfactoryInspectionAct->changenotice==1 ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="changenotice1">မရှိ</label>
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
                                          <input  class="custom-control-input" id="informchangenotice" name="informchangenotice" type="radio" value=0 {{ $tempfactoryInspectionAct->informchangenotice==0 ? 'checked' : '' }}>
                                          <label class="custom-control-label" for="informchangenotice">ကြား</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="informchangenotice1"  type="radio" name="informchangenotice" value=1 {{ $tempfactoryInspectionAct->informchangenotice==1 ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="informchangenotice1">မကြား</label>
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
                                          <input  class="custom-control-input" id="equalnotice" name="equalnotice" type="radio" value=0 {{ $tempfactoryInspectionAct->equalnotice==0 ? 'checked' : '' }}>
                                          <label class="custom-control-label" for="equalnotice">လုပ်</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="equalnotice1"  type="radio" name="equalnotice" value=1 {{ $tempfactoryInspectionAct->equalnotice==1 ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="equalnotice1">မလုပ်</label>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                     <label for="dailyworktime"> နေ့စဉ်</label>
                                    <input name="dailyworktime" id="dailyworktime" value="{{$tempfactoryInspectionAct->dailyworktime}}">
                                 </div>
                                 <div class="col-sm-4">
                                     <label for="weeklyworktime"> ရက်သတ္တပတ်</label>
                                    <input   name="weeklyworktime" id="weeklyworktime" value="{{$tempfactoryInspectionAct->weeklyworktime}}">
                                 </div>
                                 </div> <br>
                                 <div class='row'><div class="col-sm-4">
                                     <label for="resttime"> အနားပေးချိန်</label>
                                    <input id="resttime"  name="resttime" value="{{$tempfactoryInspectionAct->resttime}}">
                                 </div>
                                 <div class="col-sm-4">
                                     <label for="weekendholiday">ရက်သတ္တပတ်ပိတ်ရက်</label>
                                    <input id="weekendholiday" name="weekendholiday" value="{{$tempfactoryInspectionAct->weekendholiday}}">
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
                <fieldset class="scheduler-border">
                        <legend class="scheduler-border">ရက်သတ္တပတ်အလုပ်ပိတ်ရက်(တနင်္ဂနွေနေ့)တွင် လုပ်ကိုင်ခြင်းအတွက် ရှေ့သုံးရက် (သို့) နောက်သုံးရက်တွင် အနားပေးမှု ရှိ/မရှိနှင့် အက်ဥပဒေနှင့်အညီ ရက်စားအနားပေးမှု ရှိ/မရှိ (သို့) အကြောင်းကြားမှုရှိ/မရှိ
                            </legend>
                        <div class="control-group">
                            <div class="row">
                                 <div class="col-sm-6 text-center">
                                     <div class="custom-control custom-radio mb-3">
                                      <input  class="custom-control-input" id="insteadrelaxdays" name="insteadrelaxdays" type="radio" value=0 {{ $tempfactoryInspectionAct->insteadrelaxdays==0 ? 'checked' : '' }}>
                                      <label class="custom-control-label" for="insteadrelaxdays">ရှိ</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio mb-3">
                                        <input  class="custom-control-input" id="insteadrelaxdays1" type="radio" value=1 name="insteadrelaxdays" {{ $tempfactoryInspectionAct->insteadrelaxdays==1 ? 'checked' : '' }} >
                                        <label class="custom-control-label" for="insteadrelaxdays1">မရှိ</label>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </fieldset>
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
                                        <fieldset class="scheduler-border">
                                                <legend class="scheduler-border">ခွင့်ပြုချက်/ကြိုတင်ခွင့်ပြုချက်ရယူခြင်း</legend>
                                                <div class="control-group">
                                                    <div class="row">
                                                         <div class="col-sm-6 text-center">
                                                             <div class="custom-control custom-radio mb-3">
                                                              <input  class="custom-control-input" id="prepermit" name="prepermit" type="radio" value=0 {{ $tempfactoryInspectionAct->prepermit==0 ? 'checked' : '' }}>
                                                              <label class="custom-control-label" for="prepermit">ရှိ</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="custom-control custom-radio mb-3">
                                                                <input  class="custom-control-input" id="prepermit1" type="radio" value=1 name="prepermit" {{ $tempfactoryInspectionAct->prepermit==1 ? 'checked' : '' }} >
                                                                <label class="custom-control-label" for="prepermit1">မရှိ</label>
                                                            </div>
                                                        </div>
                                                     </div>
                                                </div>
                                         </fieldset>
                                 </div>                             
                                 <div class="col-sm-6">
                                        <fieldset class="scheduler-border">
                                                <legend class="scheduler-border">ခွင့်ပြုချက်နှင့်အညီ လုပ်ကိုင်ခြင်း</legend>
                                                <div class="control-group">
                                                    <div class="row">
                                                         <div class="col-sm-6 text-center">
                                                             <div class="custom-control custom-radio mb-3">
                                                              <input  class="custom-control-input" id="workwithpermit" name="workwithpermit" type="radio" value=0 {{ $tempfactoryInspectionAct->workwithpermit==0 ? 'checked' : '' }}>
                                                              <label class="custom-control-label" for="workwithpermit">ရှိ</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="custom-control custom-radio mb-3">
                                                                <input  class="custom-control-input" id="workwithpermit1" checked type="radio" value=1 name="workwithpermit" {{ $tempfactoryInspectionAct->workwithpermit==1 ? 'checked' : '' }} >
                                                                <label class="custom-control-label" for="workwithpermit1">မရှိ</label>
                                                            </div>
                                                        </div>
                                                     </div>
                                                </div>
                                         </fieldset>
                                    {{-- <input placeholder="ခွင့်ပြုချက်နှင့်အညီ လုပ်ကိုင်ခြင်း"  name="dailyworktime"> --}}
                                 </div>                              
                                 </div>
                                 <div class="row">
                                        <div class="col-sm-6">
                                            <label for="otpayscale"> လုပ်ခနှုန်းထား </label>
                                        <input id="otpayscale"  name="otpayscale" value="{{$tempfactoryInspectionAct->otpayscale}}">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="diffrentotpayment"> အချိန်ပိုလုပ်ခခြားနားငွေ</label>
                                             <input id="diffrentotpayment"  name="diffrentotpayment" value="{{$tempfactoryInspectionAct->diffrentotpayment}}">
                                        </div>
                                 </div> <br>
                                 <div class="row">
                                     <div class="col-sm-6">
                                        <fieldset class="scheduler-border">
                                                <legend class="scheduler-border">ခွင့်ပြုသည့်နာရီကို ပုံသေနည်းပါတွက်ချက်မှုနှင့် ကိုက်ညီမှု</legend>
                                                <div class="control-group">
                                                    <div class="row">
                                                         <div class="col-sm-6 text-center">
                                                             <div class="custom-control custom-radio mb-3">
                                                              <input  class="custom-control-input" id="allowtimecalculate" name="allowtimecalculate" type="radio" value=0 {{ $tempfactoryInspectionAct->allowtimecalculate==0 ? 'checked' : '' }}>
                                                              <label class="custom-control-label" for="allowtimecalculate">ရှိ</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="custom-control custom-radio mb-3">
                                                                <input  class="custom-control-input" id="allowtimecalculate1" type="radio" value=1 name="allowtimecalculate" {{ $tempfactoryInspectionAct->allowtimecalculate==0 ? 'checked' : '' }} >
                                                                <label class="custom-control-label" for="allowtimecalculate1">မရှိ</label>
                                                            </div>
                                                        </div>
                                                     </div>
                                                </div>
                                         </fieldset>
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
                                     <label for="illegalotallow">မည်သူ၏ခွင့်ပြုချက်ဖြင့်လုပ်ကိုင်ခြင်း </label>
                                    <input id="illegalotallow"  name="illegalotallow" {{$tempfactoryInspectionAct->illegalotallow}}>
                                 </div>                             
                                 <div class="col-sm-6">
                                     <label for="illegalottime">လုပ်ကိုင်မှုအခြေအနေ(ကာလ၊နေ့စဉ်/အပတ်စဉ်-နာရီ)</label>
                                    <input id="illegalottime"  name="illegalottime" {{$tempfactoryInspectionAct->illegalottime}}>
                                 </div>                              
                                 </div>
                            </div>
                            <div style="height:5px"></div>
                            <div class="control-group">
                                <div class="row">
                                 <div class="col-sm-6">
                                     <label for="illegalotpayment">ပေးချေသည့် အချိန်ပိုလုပ်ခနှုန်းထား </label>
                                    <input id="illegalotpayment"  name="illegalotpayment" {{$tempfactoryInspectionAct->illegalotpayment}}>
                                 </div>
                                 <div class="col-sm-6">
                                    <fieldset class="scheduler-border">
                                            <legend class="scheduler-border">တစ်ရက်တည်းတွင် အလုပ်ရုံ(၂)ရုံ၌လုပ်ကိုင်ခြင်း</legend>
                                            <div class="control-group">
                                                <div class="row">
                                                     <div class="col-sm-6 text-center">
                                                         <div class="custom-control custom-radio mb-3">
                                                          <input  class="custom-control-input" id="twofacbyday" name="twofacbyday" type="radio" value=0 {{ $tempfactoryInspectionAct->twofacbyday==0 ? 'checked' : '' }}>
                                                          <label class="custom-control-label" for="twofacbyday">ရှိ</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input  class="custom-control-input" id="twofacbyday1" type="radio" value=1 name="twofacbyday" {{ $tempfactoryInspectionAct->twofacbyday==1 ? 'checked' : '' }} >
                                                            <label class="custom-control-label" for="twofacbyday1">မရှိ</label>
                                                        </div>
                                                    </div>
                                                 </div>
                                            </div>
                                        </fieldset>
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
                                    <fieldset class="scheduler-border">
                                            <legend class="scheduler-border">သတ်မှတ်အလုပ်ချိန်နှင့်အညီ လုပ်ကိုင်ခြင်း</legend>
                                            <div class="control-group">
                                                <div class="row">
                                                     <div class="col-sm-6 text-center">
                                                         <div class="custom-control custom-radio mb-3">
                                                          <input  class="custom-control-input" id="definedworktime" name="definedworktime" type="radio" value=0 {{ $tempfactoryInspectionAct->definedworktime==0 ? 'checked' : '' }} >
                                                          <label class="custom-control-label" for="definedworktime">ရှိ</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input  class="custom-control-input" id="definedworktime1" type="radio" value=1 name="definedworktime" {{ $tempfactoryInspectionAct->definedworktime==1 ? 'checked' : '' }} >
                                                            <label class="custom-control-label" for="definedworktime1">မရှိ</label>
                                                        </div>
                                                    </div>
                                                 </div>
                                            </div>
                                        </fieldset>
                                 </div>                             
                                 <div class="col-sm-6">
                                    {{-- <input placeholder="ည(၆)နာရီမှ နံနက်(၆)နာရီအတွင်းလုပ်ကိုင်စေခြင်း"  name="stswork"> --}}
                                    <fieldset class="scheduler-border">
                                            <legend class="scheduler-border">ည(၆)နာရီမှ နံနက်(၆)နာရီအတွင်းလုပ်ကိုင်စေခြင်း</legend>
                                            <div class="control-group">
                                                <div class="row">
                                                     <div class="col-sm-6 text-center">
                                                         <div class="custom-control custom-radio mb-3">
                                                          <input  class="custom-control-input" id="stosworktime" name="stosworktime" type="radio" value=0 {{ $tempfactoryInspectionAct->stosworktime==0 ? 'checked' : '' }}>
                                                          <label class="custom-control-label" for="stosworktime">ရှိ</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input  class="custom-control-input" id="stosworktime1" type="radio" value=1 name="stosworktime" {{ $tempfactoryInspectionAct->stosworktime==1 ? 'checked' : '' }} >
                                                            <label class="custom-control-label" for="stosworktime1">မရှိ</label>
                                                        </div>
                                                    </div>
                                                 </div>
                                            </div>
                                        </fieldset>
                                 </div>                              
                                 </div>                      
                                
                            </div>
                        </fieldset>
                    </div>
                    
                </div>
            </p>
  <!--end of new design-->          
  </div>
  
  <div class="tab">
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
                                        <label for="washcategory"> အမျိုးအမည်</label>
                                        <input id="washcategory"  name="washcategory" {{ $tempfactoryInspectionAct->washcategory}}>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="custom-control custom-radio mb-3">
                                            <label for="washamount"> အရေအတွက်</label>
                                            <input id="washamount"  name="washamount" {{ $tempfactoryInspectionAct->washamount}}>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class='row'><label>အသုံးပြုနိုင်မှုအခြေအနေ</label></div>
                                        <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="washusestate" name="washusestate" type="radio" value=0 {{ $tempfactoryInspectionAct->washusestate==0 ? 'checked' : '' }} >
                                          <label class="custom-control-label" for="washusestate">ကောင်း</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="washusestate1"  type="radio" name="washusestate" value=1 {{ $tempfactoryInspectionAct->washusestate==1 ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="washusestate1">မကောင်း</label>
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
                                        <label for="sitcategory">အမျိုးအမည် </label>
                                        <input id="sitcategory"  name="sitcategory" value="{{ $tempfactoryInspectionAct->sitcategory }}">
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="custom-control custom-radio mb-3">
                                            <label for="sitamount">အရေအတွက် </label>
                                            <input id="sitamount"  name="sitamount" value="{{ $tempfactoryInspectionAct->sitamount }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class='row'><label>အသုံးပြုနိုင်မှုအခြေအနေ</label></div>
                                        <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="situsestate" name="situsestate" type="radio" value=0 {{ $tempfactoryInspectionAct->situsestate==0 ? 'checked' : '' }}>
                                          <label class="custom-control-label" for="situsestate">ကောင်း</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="situsestate1"  type="radio" name="situsestate" value=1 {{ $tempfactoryInspectionAct->situsestate==1 ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="situsestate1">မကောင်း</label>
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
                                            <option value="သူနာပြုဆေးသေတ္တာ" {{ $tempfactoryInspectionAct->medicalcaretype=='သူနာပြုဆေးသေတ္တာ' ? 'selected' : '' }}>သူနာပြုဆေးသေတ္တာ</option>
                                            <option value="သူနာပြုဆေးခန်း" {{ $tempfactoryInspectionAct->medicalcaretype=='သူနာပြုဆေးခန်း' ? 'selected' : '' }}>သူနာပြုဆေးခန်း</option>
                                            <option value="ဆေးပေးရုံ" {{ $tempfactoryInspectionAct->medicalcaretype=='ဆေးပေးရုံ' ? 'selected' : '' }}>ဆေးပေးရုံ </option>
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
                                          <input  class="custom-control-input" id="babysittingroom" name="babysittingroom" type="radio" value=0 {{ $tempfactoryInspectionAct->babysittingroom=='0' ? 'checked' : '' }}>
                                          <label class="custom-control-label" for="babysittingroom">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="babysittingroom1" checked="" type="radio" name="babysittingroom" value=1 {{ $tempfactoryInspectionAct->babysittingroom=='1' ? 'checked' : '' }}>
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
                                        <div class="col-sm-6 text-center">
                                            <div class="custom-control custom-radio mb-3">
                                              <input  class="custom-control-input" id="dinningroom" name="dinningroom" type="radio" value=0 {{ $tempfactoryInspectionAct->dinningroom=='0' ? 'checked' : '' }}>
                                              <label class="custom-control-label" for="dinningroom">ရှိ</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-radio mb-3">
                                                <input  class="custom-control-input" id="dinningroom1" checked="" type="radio" name="dinningroom" value=1 {{ $tempfactoryInspectionAct->dinningroom=='1' ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="dinningroom1">မရှိ</label>
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
      <h3>အပ်နှင်းထားသော အချက်အလက်များ</h3>
    <p>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">သောက်ရေ</legend>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="control-group">
                                        <label for="waterplace"> တည်နေရာ</label>
                                        <input id="waterplace"  name="waterplace" value="{{ $tempfactoryInspectionAct->waterplace }}">
                                    </div>
                                </div>
                                    <div class="col-sm-6">
                                        <div class="control-group">
                                            <label for="watercleanence"> သောက်ရေသန့်ရှင်းမှု</label>
                                            <input id="watercleanence"  name="watercleanence" value="{{ $tempfactoryInspectionAct->watercleanence }}">
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
                                          <input  class="custom-control-input" id="suffientamount" name="suffientamount" type="radio" value=0 {{ $tempfactoryInspectionAct->suffientamount=='0' ? 'checked' : '' }}>
                                          <label class="custom-control-label" for="suffientamount">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="suffientamount1"  type="radio" name="suffientamount" value=1 {{ $tempfactoryInspectionAct->suffientamount=='1' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="suffientamount1">မရှိ</label>
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
                                          <input  class="custom-control-input" id="cooling" name="cooling" value=0 type="radio" {{ $tempfactoryInspectionAct->cooling=='0' ? 'checked' : '' }}>
                                          <label class="custom-control-label" for="cooling">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="cooling1" checked="" type="radio" value=1 name="cooling" {{ $tempfactoryInspectionAct->cooling=='1' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="cooling1">မရှိ</label>
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
                                        <label for="tioletcategroy">အမျိုးအစား </label>
                                        <input id="tioletcategroy"  name="tioletcategroy" {{ $tempfactoryInspectionAct->tioletcategroy}}>
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
                                          <input  class="custom-control-input" id="tioletplace" name="tioletplace" type="radio" value=0  {{ $tempfactoryInspectionAct->tioletplace=='0' ? 'checked' : '' }}>
                                          <label class="custom-control-label" for="tioletplace">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="tioletplace1" checked="" type="radio" name="tioletplace" value=1 {{ $tempfactoryInspectionAct->tioletplace=='1' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="tioletplace">မရှိ</label>
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
                                          <input  class="custom-control-input" id="tioletclean" name="tioletclean" value=1 type="radio">
                                          <label class="custom-control-label" for="tioletclean">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="tioletclean1" checked="" type="radio" value=0 name="tioletclean">
                                            <label class="custom-control-label" for="tioletclean1">မရှိ</label>
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
                                          <input  class="custom-control-input" id="genderdivide" name="genderdivide" value=0 type="radio">
                                          <label class="custom-control-label" for="genderdivide">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="genderdivide1" checked="" value=1 type="radio" name="genderdivide">
                                            <label class="custom-control-label" for="genderdivide1">မရှိ</label>
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
                                
                                    <div class="col-sm-4">
                                        <div class="control-group">
                                            <label for="tioletroom"> အခန်းအရေအတွက်</label>
                                            <input type="text" id="tioletroom"  name="tioletroom"/>
                                        </div>
                            
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="mtioletroom"> ကျားအိမ်သာ</label>
                                                <input type="text" id="mtioletroom" name="mtioletroom"/>
                                            </div>
                                    <div class="col-sm-4">
                                        <label for="ftioletroom"> မအိမ်သာ</label>
                                        <input type="text" id="ftioletroom"  name="ftioletroom"/>
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
                                          <input  class="custom-control-input" id="accidentcase" name="accidentcase" value=0 type="radio">
                                          <label class="custom-control-label" for="accidentcase">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="accidentcase1" checked="" type="radio" name="accidentcase" value=1>
                                            <label class="custom-control-label" for="accidentcase1">မရှိ</label>
                                        </div>
                                    </div>
                                 </div>
                            
                        
                        </fieldset>
                    </div> 
                </div>                  
                
            </p>
  </div>
  <div class="tab">
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
                                          <input class="custom-control-input" id="workerregistrationbook" name="workerregistrationbook" value=0 type="radio">
                                          <label class="custom-control-label" for="workerregistrationbook">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="workerregistrationbook1" checked="" value=1 type="radio" name="workerregistrationbook">
                                            <label class="custom-control-label" for="workerregistrationbook1">မရှိ</label>
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
                                          <input class="custom-control-input" id="childregistrationbook" name="childregistrationbook" value=0 type="radio">
                                          <label class="custom-control-label" for="childregistrationbook">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="childregistrationbook1" checked="" value=1 type="radio" name="childregistrationbook">
                                            <label class="custom-control-label" for="childregistrationbook1">မရှိ</label>
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
                                          <input class="custom-control-input" id="generalbook" name="generalbook" value=0 type="radio">
                                          <label class="custom-control-label" for="generalbook">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="generalbook1" checked="" value=1 type="radio" name="generalbook">
                                            <label class="custom-control-label" for="generalbook1">မရှိ</label>
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
                                          <input class="custom-control-input" id="wokerofficetimebook" name="wokerofficetimebook" value=0 type="radio">
                                          <label class="custom-control-label" for="wokerofficetimebook">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="wokerofficetimebook1" checked="" value=1 type="radio" name="wokerofficetimebook">
                                            <label class="custom-control-label" for="wokerofficetimebook1">မရှိ</label>
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
                                          <input class="custom-control-input" id="otbook" name="otbook" value=0 type="radio">
                                          <label class="custom-control-label" for="otbook">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="otbook1" checked="" value=1 type="radio" name="otbook">
                                            <label class="custom-control-label" for="otbook1">မရှိ</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6 text-center">
                        
                    </div>
                </div>
            </p>
            <p>
    <div class="row">
      <div class="col-sm-12 text-center">
        <fieldset class="scheduler-border">
          <legend class="scheduler-border">ညွှန်ကြားရန်အချက်များ (မူကြမ်း)</legend>
          <div class="control-group">
            <div class="row">
              <div class="col-sm-12 text-center">
                 <textarea class="col-sm-12" rows="4" placeholder="ညွှန်ကြားရန်အချက် (က)" name="instruction1"></textarea>
              </div>
           </div>
           <div class="row">
              <div class="col-sm-12 text-center">
                 <textarea class="col-sm-12" rows="4" placeholder="ညွှန်ကြားရန်အချက် (ခ)" name="instruction2"></textarea>
              </div>
           </div>
           <div class="row">
              <div class="col-sm-12 text-center">
                 <textarea class="col-sm-12" rows="4" placeholder="ညွှန်ကြားရန်အချက် (ဂ)" name="instruction3"></textarea>
              </div>
           </div>
          </div>
      </fieldset>
      </div>
    </div>
  </p>
  </div>

  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  
</form>

 <script>

 //for tab 
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
    document.getElementById("nextBtn").innerHTML = "Submit";
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

$('#tempoarySave').click(function(){
  $("#tempoary").val('tempoary');
document.getElementById("inspectform").submit();
});

  </script>
@endsection