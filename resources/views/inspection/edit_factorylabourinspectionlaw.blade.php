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
<h1 style="text-align:center;margin-bottom:40px;"> အလုပ်သမားဥပဒေစစ်ဆေးရေး</h1>

    
    <div style="text-align:center;margin-top:40px;">
        <a  style="text-decoration: none;" onclick="nextPrevv(0)"><span class="step">1</span></a>
        <span class="step" onclick="nextPrevv(1)">2</span>
        <span class="step" onclick="nextPrevv(2)">3</span>
        <span class="step" onclick="nextPrevv(3)">4</span>
        <span class="step" onclick="nextPrevv(4)">5</span>
    </div> <br>

    
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
    <br>


<form id="inspectform"class="form-background" action="{{url('Edit_Factory_LabourInspectionLaw/'.$factoryLabourInspectionLaw->id)}}"  method="post">
     {{csrf_field()}}

     <div class="tab">
         <h3 class="text-center">၁၉၅၁ အလုပ်ရုံများ အက်ဥပဒေအရ စစ်ဆေးချက်ပုံစံ</h3>
        <h4>အလုပ်ချိန်သတ်မှတ်ချက်ဆိုင်ရာ အချက်အလက်များ</h4>
  <!-- For new design-->
            
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">လုပ်ငန်းပိုင်ရှင်ကပေးပို့ရန်နို့တစ်စာပေးပို့ခြင်း </legend>
                            <div class="control-group">
                                 <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                        <input class="custom-control-input" id="sentnotice" name="sentnotice" type="radio" value='ပြု' {{$factoryLabourInspectionLaw->sentnotice=='ပြု' ? 'checked' : ''}}>
                                          <label class="custom-control-label" for="sentnotice">ပြု</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="sentnotice1"  type="radio" name="sentnotice" value='မပြု' {{$factoryLabourInspectionLaw->sentnotice=='မပြု' ? 'checked' : ''}}>
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
                                          <input  class="custom-control-input" id="shownotice" name="shownotice" type="radio" value='ပြု' {{$factoryLabourInspectionLaw->shownotice=='ပြု' ? 'checked' : ''}}>
                                          <label class="custom-control-label" for="shownotice">ပြု</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="shownotice1"  type="radio" name="shownotice" value='မပြု' {{$factoryLabourInspectionLaw->shownotice=='မပြု' ? 'checked' : ''}}>
                                            <label class="custom-control-label" for="shownotice1">မပြု</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
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
                                        <input type="date" placeholder="နေ့စွဲ" name="workingduration" class="form-control" value="{{$factoryLabourInspectionLaw->workingduration}}" id="datepicker">
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
                                          <input  class="custom-control-input" id="repeatitivework" name="repeatitivework" type="radio" value='ရှိ' {{$factoryLabourInspectionLaw->repeatitivework=='ရှိ' ? 'checked' : ''}}>
                                          <label class="custom-control-label" for="repeatitivework">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="repeatitivework1"  type="radio" name="repeatitivework" value='မရှိ' {{$factoryLabourInspectionLaw->repeatitivework=='မရှိ' ? 'checked' : ''}}>
                                            <label class="custom-control-label" for="repeatitivework1">မရှိ</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
  <!--end of new design-->
  <!-- For new design-->
                <div class="row">               
                    <div class="col-sm-5 text-center">
                            <fieldset class="scheduler-border">
                            <legend class="scheduler-border">နို့တစ်စာအပြောင်းအလဲ</legend>
                            <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="changenotice" name="changenotice" type="radio" value='ရှိ' {{$factoryLabourInspectionLaw->changenotice=='ရှိ' ? 'checked' : ''}}>
                                          <label class="custom-control-label" for="changenotice">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="changenotice1"  type="radio" name="changenotice" value='မရှိ' {{$factoryLabourInspectionLaw->changenotice=='မရှိ' ? 'checked' : ''}}>
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
                                          <input  class="custom-control-input" id="informchangenotice" name="informchangenotice" type="radio" value='ကြား' {{$factoryLabourInspectionLaw->informchangenotice=='ကြား' ? 'checked' : ''}}>
                                          <label class="custom-control-label" for="informinformchangenotice">ကြား</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="informchangenotice1"  type="radio" name="informchangenotice" value='မကြား' {{$factoryLabourInspectionLaw->informchangenotice=='မကြား' ? 'checked' : ''}}>
                                            <label class="custom-control-label" for="informchangenotice1">မကြား</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
  <!--end of new design-->
 <!-- For new design-->
                <div class="row">               
                    <div class="col-sm-12 text-center">
                            <fieldset class="scheduler-border">
                            <legend class="scheduler-border">ချိတ်ဆွဲသည့် နို့တစ်စာပါ အလုပ်ချိန်နှင့်အညီ</legend>
                            <div class="control-group">
                                <div class="row">
                                 <div class="col-sm-4">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="equalnotice" name="equalnotice" type="radio" value='လုပ်' {{$factoryLabourInspectionLaw->equalnotice=='လုပ်' ? 'checked' : ''}}>
                                          <label class="custom-control-label" for="equalnotice">လုပ်</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="equalnotice1" type="radio" name="equalnotice" value='မလုပ်' {{$factoryLabourInspectionLaw->equalnotice=='မလုပ်' ? 'checked' : ''}}>
                                            <label class="custom-control-label" for="equalnotice1" onclick="equalNotice()">မလုပ်</label>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                     <label for="dailyworktime"> နေ့စဉ်</label>
                                    <input name="dailyworktime" id="dailyworktime" class="form-control" value="{{$factoryLabourInspectionLaw->dailyworktime}}">
                                 </div>
                                 <div class="col-sm-4">
                                     <label for="weeklyworktime"> ရက်သတ္တပတ်</label>
                                    <input   name="weeklyworktime" id="weeklyworktime" class="form-control" value="{{$factoryLabourInspectionLaw->weeklyworktime}}">
                                 </div>
                                 </div> <br>
                                 <div class='row'><div class="col-sm-4">
                                     <label for="resttime"> အနားပေးချိန်</label>
                                    <input id="resttime"  name="resttime" class="form-control" value="{{$factoryLabourInspectionLaw->resttime}} ">
                                 </div>
                                 <div class="col-sm-4">
                                     <label for="weekendholiday">ရက်သတ္တပတ်ပိတ်ရက်</label>
                                    <input id="weekendholiday" name="weekendholiday" class="form-control" value="{{$factoryLabourInspectionLaw->weekendholiday}}">
                                 </div>
                                    
                                 </div>
                            </div>
                        </fieldset>
                    </div>
                    
                </div>
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
                                      <input  class="custom-control-input" id="insteadrelaxdays" name="insteadrelaxdays" type="radio" value='ရှိ' {{$factoryLabourInspectionLaw->insteadrelaxdays=='ရှိ' ? 'checked' : ''}}>
                                      <label class="custom-control-label" for="insteadrelaxdays">ရှိ</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio mb-3">
                                        <input  class="custom-control-input" id="insteadrelaxdays1" type="radio" name="insteadrelaxdays" value='မရှိ' {{$factoryLabourInspectionLaw->insteadrelaxdays=='မရှိ' ? 'checked' : ''}}>
                                        <label class="custom-control-label" for="insteadrelaxdays1">မရှိ</label>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </fieldset>
            </div>
        </div>
        <!-- For new design-->
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
                                                              <input  class="custom-control-input" id="prepermit" name="prepermit" type="radio" value='ရှိ' {{$factoryLabourInspectionLaw->prepermit=='ရှိ' ? 'checked' : ''}}>
                                                              <label class="custom-control-label" for="prepermit">ရှိ</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="custom-control custom-radio mb-3">
                                                                <input  class="custom-control-input" id="prepermit1" type="radio" name="prepermit" value='မရှိ' {{$factoryLabourInspectionLaw->prepermit=='မရှိ' ? 'checked' : ''}}>
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
                                                              <input  class="custom-control-input" id="workwithpermit" name="workwithpermit" type="radio" value='ရှိ' {{$factoryLabourInspectionLaw->workwithpermit=='ရှိ   ' ? 'checked' : ''}}>
                                                              <label class="custom-control-label" for="workwithpermit">ရှိ</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="custom-control custom-radio mb-3">
                                                                <input  class="custom-control-input" id="workwithpermit1" type="radio" name="workwithpermit" value='မရှိ' {{$factoryLabourInspectionLaw->workwithpermit=='မရှိ' ? 'checked' : ''}}>
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
                                            <input id="otpayscale" class="form-control" name="otpayscale" value="{{$factoryLabourInspectionLaw->otpayscale}}">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="diffrentotpayment"> အချိန်ပိုလုပ်ခခြားနားငွေ</label>
                                             <input id="diffrentotpayment" class="form-control" name="diffrentotpayment" value="{{$factoryLabourInspectionLaw->diffrentotpayment}}">
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
                                                              <input  class="custom-control-input" id="allowtimecalculate" name="allowtimecalculate" type="radio" value='ရှိ' {{$factoryLabourInspectionLaw->allowtimecalculate=='ရှိ' ? 'checked' : ''}}>
                                                              <label class="custom-control-label" for="allowtimecalculate">ရှိ</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="custom-control custom-radio mb-3">
                                                                <input  class="custom-control-input" id="allowtimecalculate1" type="radio" name="allowtimecalculate" value='မရှိ' {{$factoryLabourInspectionLaw->allowtimecalculate=='မရှိ' ? 'checked' : ''}}>
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
                                    <input id="illegalotallow" class="form-control" name="illegalotallow" value="{{$factoryLabourInspectionLaw->illegalotallow}}">
                                 </div>                             
                                 <div class="col-sm-6">
                                     <label for="illegalottime">လုပ်ကိုင်မှုအခြေအနေ(ကာလ၊နေ့စဉ်/အပတ်စဉ်-နာရီ)</label>
                                    <input id="illegalottime" class="form-control" name="illegalottime" value="{{$factoryLabourInspectionLaw->illegalotime}}">
                                 </div>                              
                                 </div>
                            </div>
                            <div style="height:5px"></div>
                            <div class="control-group">
                                <div class="row">
                                 <div class="col-sm-6">
                                     <label for="illegalotpayment">ပေးချေသည့် အချိန်ပိုလုပ်ခနှုန်းထား </label>
                                    <input id="illegalotpayment" class="form-control" name="illegalotpayment" value="{{$factoryLabourInspectionLaw->illegalopayment}}">
                                 </div>
                                 <div class="col-sm-6">
                                    <fieldset class="scheduler-border">
                                            <legend class="scheduler-border">တစ်ရက်တည်းတွင် အလုပ်ရုံ(၂)ရုံ၌လုပ်ကိုင်ခြင်း</legend>
                                            <div class="control-group">
                                                <div class="row">
                                                     <div class="col-sm-6 text-center">
                                                         <div class="custom-control custom-radio mb-3">
                                                          <input  class="custom-control-input" id="twofacbyday" name="twofacbyday" type="radio" value='ရှိ' {{$factoryLabourInspectionLaw->twofacbyday=='ရှိ' ? 'checked' : ''}}>
                                                          <label class="custom-control-label" for="twofacbyday">ရှိ</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input  class="custom-control-input" id="twofacbyday1" type="radio" name="twofacbyday" value='မရှိ' {{$factoryLabourInspectionLaw->twofacbyday=='မရှိ' ? 'checked' : ''}}>
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
  <!--end of new design-->
        <!-- For new design-->
            
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
                                                          <input  class="custom-control-input" id="definedworktime" name="definedworktime" type="radio" value='ရှိ' {{$factoryLabourInspectionLaw->definedworktime=='ရှိ' ? 'checked' : ''}}>
                                                          <label class="custom-control-label" for="definedworktime">ရှိ</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input  class="custom-control-input" id="definedworktime1" type="radio" name="definedworktime" value='မရှိ' {{$factoryLabourInspectionLaw->definedworktime=='မရှိ' ? 'checked' : ''}}>
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
                                                          <input  class="custom-control-input" id="stosworktime" name="stosworktime" type="radio" value='ရှိ' {{$factoryLabourInspectionLaw->stosworktime=='ရှိ' ? 'checked' : ''}}>
                                                          <label class="custom-control-label" for="stosworktime">ရှိ</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input  class="custom-control-input" id="stosworktime1" type="radio" name="stosworktime" value='မရှိ' {{$factoryLabourInspectionLaw->stosworktime=='မရှိ' ? 'checked' : ''}}>
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
    <!--end of new design-->          
  </div>
  
  <div class="tab">
      <h3 class="text-center">၁၉၅၁ အလုပ်ရုံများ အက်ဥပဒေအရ စစ်ဆေးချက်ပုံစံ</h3>
      <h4>သက်သာချောင်ချိရေးဆိုင်ရာ အချက်အလက်များ</h4>
    
    <!--start new design-->
                  <div class="row">
                    <div class="col-sm-12 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">ကိုယ်လက်ဆေးကြောရန် စီမံထားရှိခြင်း</legend>
                            <div class="control-group">
                                 <div class="row">
                                    <div class="col-sm-4">
                                        <label for="washcategory"> အမျိုးအမည်</label>
                                        <input id="washcategory" class="form-control" name="washcategory" value="{{$factoryLabourInspectionLaw->washcategory}}">
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="custom-control custom-radio mb-3">
                                            <label for="washamount"> အရေအတွက်</label>
                                            <input id="washamount" class="form-control" name="washamount" value="{{$factoryLabourInspectionLaw->washamount}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class='row'><label class="col-sm-12 text-center">အသုံးပြုနိုင်မှုအခြေအနေ</label></div>
                                        <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="washusestate" name="washusestate" type="radio" value='ကောင်း' {{$factoryLabourInspectionLaw->washusestate=='ကောင်း' ? 'checked' : ''}}>
                                          <label class="custom-control-label" for="washusestate">ကောင်း</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="washusestate1"  type="radio" name="washusestate" value='မကောင်း' {{$factoryLabourInspectionLaw->washusestate=='မကောင်း' ? 'checked' : ''}}>
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
            
    <!--end new design-->
    <!--start new design-->
        
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">ထိုင်ခွင့်ကြုံက ထိုင်နိုင်ရန် စီမံထားရှိခြင်း</legend>
                            <div class="control-group">
                                 <div class="row">
                                    <div class="col-sm-4">
                                        <label for="sitcategory">အမျိုးအမည် </label>
                                        <input id="sitcategory" class="form-control" name="sitcategory" value="{{$factoryLabourInspectionLaw->sitcategory}}">
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="custom-control custom-radio mb-3">
                                            <label for="sitamount">အရေအတွက် </label>
                                            <input id="sitamount" class="form-control" name="sitamount" value="{{$factoryLabourInspectionLaw->sitamount}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class='row'><label class="col-sm-12 text-center">အသုံးပြုနိုင်မှုအခြေအနေ</label></div>
                                        <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="situsestate" name="situsestate" type="radio" value='ကောင်း' {{$factoryLabourInspectionLaw->situsestate=='ကောင်း' ? 'checked' : ''}}>
                                          <label class="custom-control-label" for="situsestate">ကောင်း</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="situsestate1"  type="radio" name="situsestate" value='မကောင်း' {{$factoryLabourInspectionLaw->situsestate=='မကောင်း' ? 'checked' : ''}}>
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
            
    <!--end new design-->
    <!--start new design-->
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">သူနာပြုဆေးသေတ္တာ၊ သူနာပြုဆေးခန်း၊ ဆေးပေးရုံထားရှိခြင်းအခြေအနေ</legend>
                            <div class="control-group">
                                 <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <select name="medicalcaretype" class="form-control">
                                            <option value="သူနာပြုဆေးသေတ္တာ" {{$factoryLabourInspectionLaw->medicalcaretype=='သူနာပြုဆေးသေတ္တာ' ? 'selected' : ''}}>သူနာပြုဆေးသေတ္တာ</option>
                                            <option value="သူနာပြုဆေးခန်း" {{$factoryLabourInspectionLaw->medicalcaretype=='သူနာပြုဆေးခန်း' ? 'selected' : ''}}>သူနာပြုဆေးခန်း</option>
                                            <option value="ဆေးပေးရုံ" {{$factoryLabourInspectionLaw->medicalcaretype=='ဆေးပေးရုံ' ? 'selected' : ''}}>ဆေးပေးရုံ </option>
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
                                          <input  class="custom-control-input" id="babysittingroom" name="babysittingroom" type="radio" value='ရှိ' {{$factoryLabourInspectionLaw->babysittingroom=='ရှိ' ? 'checked' : ''}}>
                                          <label class="custom-control-label" for="babysittingroom">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="babysittingroom1"  type="radio" name="babysittingroom" value='မရှိ' {{$factoryLabourInspectionLaw->babysittingroom=='မရှိ' ? 'checked' : ''}}>
                                            <label class="custom-control-label" for="babysittingroom1">မရှိ</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
    <!--end new design-->
        <!--start new design-->

                <div class="row">
                    <div class="col-sm-12 text-center">
                        <fieldset class="scheduler-border">
                                <legend class="scheduler-border">အလုပ်နားခန်းနှင့်အစာစားခန်းများထားရှိခြင်း အခြေအနေ (အလုပ်သမား ၁၀၀ နှင့်အထက်ရှိ လုပ်ငန်းများ)</legend>
                                <div class="control-group">
                                    <div class="row">
                                        <div class="col-sm-6 text-center">
                                            <div class="custom-control custom-radio mb-3">
                                              <input  class="custom-control-input" id="dinningroom" name="dinningroom" type="radio" value='ရှိ' {{$factoryLabourInspectionLaw->dinningroom=='ရှိ' ? 'checked' : ''}}>
                                              <label class="custom-control-label" for="dinningroom">ရှိ</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-radio mb-3">
                                                <input  class="custom-control-input" id="dinningroom1"  type="radio" name="dinningroom" value='မရှိ' {{$factoryLabourInspectionLaw->dinningroom=='မရှိ' ? 'checked' : ''}}>
                                                <label class="custom-control-label" for="dinningroom1">မရှိ</label>
                                            </div>
                                        </div>
                                     </div>
                                </div>
                            </fieldset>
                    </div>
                    
                </div>
            <h3>အပ်နှင်းထားသော အချက်အလက်များ</h3>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">သောက်ရေ</legend>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="control-group">
                                        <label for="waterplace"> တည်နေရာ</label>
                                        <input id="waterplace" class="form-control" name="waterplace" value="{{$factoryLabourInspectionLaw->waterplace}}">
                                    </div>
                                </div>
                                    <div class="col-sm-6">
                                        <div class="control-group">
                                            <label for="watercleanence"> သောက်ရေသန့်ရှင်းမှု</label>
                                            <input id="watercleanence" class="form-control" name="watercleanence" value="{{$factoryLabourInspectionLaw->watercleanence}}">
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
                                          <input  class="custom-control-input" id="suffientamount" name="suffientamount" type="radio" value='ရှိ' {{$factoryLabourInspectionLaw->suffientamount=='ရှိ' ? 'checked' : ''}}>
                                          <label class="custom-control-label" for="suffientamount">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="suffientamount1"  type="radio" name="suffientamount" value='မရှိ' {{$factoryLabourInspectionLaw->suffientamount=='မရှိ' ? 'checked' : ''}}>
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
                                          <input  class="custom-control-input" id="cooling" name="cooling" value='ရှိ' type="radio" {{$factoryLabourInspectionLaw->cooling=='ရှိ' ? 'checked' : ''}}>
                                          <label class="custom-control-label" for="cooling">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="cooling1"  type="radio" name="cooling" value='မရှိ' {{$factoryLabourInspectionLaw->cooling=='မရှိ' ? 'checked' : ''}}>
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
    <!--end new design-->
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">အိမ်သာ</legend>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="control-group">
                                        <label for="tioletcategroy">အမျိုးအစား </label>
                                        <input id="tioletcategroy" class="form-control" name="tioletcategroy" value="{{$factoryLabourInspectionLaw->tioletcategroy}}">
                                    </div>
                                </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-4 text-center">
                                            <div class='row'><label class="col-sm-12 text-center">တည်နေရာနှင့်လုံခြုံမှု</label></div>
                                        <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="tioletplace" name="tioletplace" type="radio" value='ရှိ' {{$factoryLabourInspectionLaw->tioletplace=='ရှိ' ? 'checked' : ''}}> 
                                          <label class="custom-control-label" for="tioletplace">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="tioletplace1"  type="radio" name="tioletplace" value='မရှိ' {{$factoryLabourInspectionLaw->tioletplace=='မရှိ' ? 'checked' : ''}}>
                                            <label class="custom-control-label" for="tioletplace">မရှိ</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                                            </div>
                                            <div class="col-sm-4 text-center">
                                                <div class='row'><label class="col-sm-12 text center">သန့်ရှင်းမှု </label></div>
                                        <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="tioletclean" name="tioletclean" value='ရှိ' type="radio" {{$factoryLabourInspectionLaw->tioletclean=='ရှိ' ? 'checked' : ''}}>
                                          <label class="custom-control-label" for="tioletclean">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="tioletclean1"  type="radio" name="tioletclean" value='မရှိ' {{$factoryLabourInspectionLaw->tioletclean=='မရှိ' ? 'checked' : ''}}>
                                            <label class="custom-control-label" for="tioletclean1">မရှိ</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                                            </div>
                                            <div class="col-sm-4 text-center">
                                                <div class='row'><label class="col-sm-12 text-center">ကျား/မခွဲခြားမှု</label></div>
                                        <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="genderdivide" name="genderdivide" value='ရှိ' type="radio" {{$factoryLabourInspectionLaw->genderdivide=='ရှိ' ? 'checked' : ''}}>
                                          <label class="custom-control-label" for="genderdivide">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="genderdivide1"  type="radio" name="genderdivide" value='မရှိ' {{$factoryLabourInspectionLaw->genderdivide=='မရှိ' ? 'checked' : ''}}>
                                            <label class="custom-control-label" for="genderdivide1">မရှိ</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="blank10"></div>
                            <div class="row">
                                
                                    <div class="col-sm-4">
                                        <div class="control-group">
                                            <label for="tioletroom"> အခန်းအရေအတွက်</label>
                                        <input type="text" id="tioletroom" class="form-control" name="tioletroom" value="{{$factoryLabourInspectionLaw->tioletroom}}">
                                        </div>
                            
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="mtioletroom"> ကျားအိမ်သာ</label>
                                                <input type="text" id="mtioletroom" class="form-control" name="mtioletroom" value="{{$factoryLabourInspectionLaw->mtioletroom}}"/>
                                            </div>
                                    <div class="col-sm-4">
                                        <label for="ftioletroom"> မအိမ်သာ</label>
                                        <input type="text" id="ftioletroom" class="form-control" name="ftioletroom" value="{{$factoryLabourInspectionLaw->ftioletroom}}" />
                                    </div>
                                 </div>
                            </div>
                                        
                                    </div>
                                    </div>
                        
                         </fieldset>
                    </div>          
                
        
    <!--end new design-->
        
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">မတော်တဆထိခိုက်မှုရှိ/မရှိနှင့်အစီရင်ခံစာပေးပို့ခြင်း</legend>
                            <div class="row">
                                <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="accidentcase" name="accidentcase" value='ရှိ' type="radio" {{$factoryLabourInspectionLaw->accidentcase=='ရှိ' ? 'checked' : ''}}>
                                          <label class="custom-control-label" for="accidentcase">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="accidentcase1"  type="radio" name="accidentcase" value='မရှိ' {{$factoryLabourInspectionLaw->accidentcase=='မရှိ' ? 'checked' : ''}}>
                                            <label class="custom-control-label" for="accidentcase1">မရှိ</label>
                                        </div>
                                    </div>
                                 </div>
                            
                        
                        </fieldset>
                    </div> 
                </div>                  
                
        
  </div>
  <div class="tab">
        <h3 class="text-center">၁၉၅၁ အလုပ်ရုံများ အက်ဥပဒေအရ စစ်ဆေးချက်ပုံစံ</h3>
        <h4>မှတ်တမ်းစာအုပ်များနှင့် မှတ်တမ်းများ</h4>
                    <div class="row">
                        <div class="col-sm-5 text-center">
                            <fieldset class="scheduler-border">
                                <legend class="scheduler-border">အလုပ်သမားမှတ်ပုံတင်စာအုပ်</legend>
                                <div class="control-group">
                                     <div class="row">
                                        <div class="col-sm-6 text-center">
                                            <div class="custom-control custom-radio mb-3">
                                              <input class="custom-control-input" id="workerregistrationbook" name="workerregistrationbook" value='ရှိ' type="radio" {{$factoryLabourInspectionLaw->workerregistrationbook=='ရှိ' ? 'checked' : ''}}>
                                              <label class="custom-control-label" for="workerregistrationbook">ရှိ</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-radio mb-3">
                                                <input  class="custom-control-input" id="workerregistrationbook1"  type="radio" name="workerregistrationbook" value='မရှိ' {{$factoryLabourInspectionLaw->workerregistrationbook=='မရှိ' ? 'checked' : ''}}>
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
                                              <input class="custom-control-input" id="childregistrationbook" name="childregistrationbook" value='ရှိ' type="radio" {{$factoryLabourInspectionLaw->childregistrationbook=='ရှိ' ? 'checked' : ''}}>
                                              <label class="custom-control-label" for="childregistrationbook">ရှိ</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-radio mb-3">
                                                <input  class="custom-control-input" id="childregistrationbook1" type="radio" name="childregistrationbook" value='မရှိ' {{$factoryLabourInspectionLaw->childregistrationbook=='မရှိ' ? 'checked' : ''}}>
                                                <label class="custom-control-label" for="childregistrationbook1">မရှိ</label>
                                            </div>
                                        </div>
                                     </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
           
                    <div class="row">
                        <div class="col-sm-5 text-center">
                            <fieldset class="scheduler-border">
                                <legend class="scheduler-border">အထွေထွေမှတ်ပုံတင်စာအုပ်</legend>
                                <div class="control-group">
                                     <div class="row">
                                        <div class="col-sm-6 text-center">
                                            <div class="custom-control custom-radio mb-3">
                                              <input class="custom-control-input" id="generalbook" name="generalbook" value='ရှိ' type="radio" {{$factoryLabourInspectionLaw->generalbook=='ရှိ' ? 'checked' : ''}}>
                                              <label class="custom-control-label" for="generalbook">ရှိ</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-radio mb-3">
                                                <input  class="custom-control-input" id="generalbook1" type="radio" name="generalbook" value='မရှိ' {{$factoryLabourInspectionLaw->generalbook=='မရှိ' ? 'checked' : ''}}>
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
                                              <input class="custom-control-input" id="wokerofficetimebook" name="wokerofficetimebook" value='ရှိ' type="radio" {{$factoryLabourInspectionLaw->wokerofficetimebook=='ရှိ' ? 'checked' : ''}}>
                                              <label class="custom-control-label" for="wokerofficetimebook">ရှိ</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-radio mb-3">
                                                <input  class="custom-control-input" id="wokerofficetimebook1" type="radio" name="wokerofficetimebook" value='မရှိ' {{$factoryLabourInspectionLaw->wokerofficetimebook=='မရှိ' ? 'checked' : ''}}>
                                                <label class="custom-control-label" for="wokerofficetimebook1">မရှိ</label>
                                            </div>
                                        </div>
                                     </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
           
                    <div class="row">
                        <div class="col-sm-5 text-center">
                            <fieldset class="scheduler-border">
                                <legend class="scheduler-border">အချိန်ပိုလုပ်ကိုင်ခြင်း မှတ်တမ်း</legend>
                                <div class="control-group">
                                     <div class="row">
                                        <div class="col-sm-6 text-center">
                                            <div class="custom-control custom-radio mb-3">
                                              <input class="custom-control-input" id="otbook" name="otbook" value='ရှိ' type="radio" {{$factoryLabourInspectionLaw->otbook=='ရှိ' ? 'checked' : ''}}>
                                              <label class="custom-control-label" for="otbook">ရှိ</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-radio mb-3">
                                                <input  class="custom-control-input" id="otbook1" type="radio" name="otbook" value='မရှိ' {{$factoryLabourInspectionLaw->otbook=='မရှိ' ? 'checked' : ''}}>
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
        {{-- <div class="row">
          <div class="col-sm-12 text-center">
            <fieldset class="scheduler-border">
              <legend class="scheduler-border">ညွှန်ကြားရန်အချက်များ (မူကြမ်း)</legend>
              <div class="control-group">
                <div class="row">
                  <div class="col-sm-12 text-center">
                     <textarea class="col-sm-12 form-control" rows="4" placeholder="ညွှန်ကြားရန်အချက် (က)" name="instruction1">{{old('instruction1')}}</textarea>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12 text-center">
                     <textarea class="col-sm-12 form-control" rows="4" placeholder="ညွှန်ကြားရန်အချက် (ခ)" name="instruction2">{{old('instruction2')}}</textarea>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12 text-center">
                     <textarea class="col-sm-12 form-control" rows="4" placeholder="ညွှန်ကြားရန်အချက် (ဂ)" name="instruction3">{{old('instruction3')}}</textarea>
                  </div>
               </div>
              </div>
          </fieldset>
          </div>
        </div> --}}
      </p>
  </div>
  <div class="tab">
      <h3 class="text-center">၁၉၅၁ ခွင့်ရက်နှင့် အလုပ်ပိတ်ရက်အက်ဥပဒေအရ စစ်ဆေးချက်ပုံစံ</h3>
        <h4>ခွင့်ခံစားမှုများ</h4>
          <div class="row">
            <div class="col-sm-5 text-center">
              <fieldset class="scheduler-border">
                <legend class="scheduler-border">ရှောင်တခင်ခွင့်(၆)ရက် ခံစားခွင့်</legend>
                <div class="control-group">
                 <div class="row">
                  <div class="col-sm-6 text-center">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="causal" name="causalleave" type="radio" value='ပေး' {{$factoryLabourInspectionLaw->causalleave=='ပေး' ? 'checked' : ''}}>
                      <label class="custom-control-label" for="causal">ပေး</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="causal1"  type="radio" name="causalleave" value='မပေး' {{$factoryLabourInspectionLaw->causalleave=='မပေး' ? 'checked' : ''}}>
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
                      <input  class="custom-control-input" id="annual" name="annualleave" type="radio" value='ပေး' {{$factoryLabourInspectionLaw->annualleave=='ပေး' ? 'checked' : ''}}>
                      <label class="custom-control-label" for="annual">ပေး</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="SSB1"  type="radio" name="annualleave" value='မပေး' {{$factoryLabourInspectionLaw->annualleave=='မပေး' ? 'checked' : ''}}>
                      <label class="custom-control-label" for="SSB1">မပေး</label>
                    </div>
                  </div>
                 </div>
                </div>
            </fieldset>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-5 text-center">
              <fieldset class="scheduler-border">
                <legend class="scheduler-border">ဆေးလက်မှတ်ခွင့် ခံစားခွင့်</legend>
                <div class="control-group">
                 <div class="row">
                  <div class="col-sm-6 text-center">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="medicalleave" name="medicalleave" type="radio" value='ပေး' {{$factoryLabourInspectionLaw->medicalleave=='ပေး' ? 'checked' : ''}}>
                      <label class="custom-control-label" for="medicalleave">ပေး</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="medicalleave1"  type="radio" name="medicalleave" value='မပေး' {{$factoryLabourInspectionLaw->medicalleave=='မပေး' ? 'checked' : ''}}>
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
                      <input  class="custom-control-input" id="maternityleave" name="maternity" type="radio" value='ပေး' {{$factoryLabourInspectionLaw->maternity=='ပေး' ? 'checked' : ''}}>
                      <label class="custom-control-label" for="maternityleave">ပေး</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="maternityleave1"  type="radio" name="maternity" value='မပေး' {{$factoryLabourInspectionLaw->maternity=='မပေး' ? 'checked' : ''}}>
                      <label class="custom-control-label" for="maternityleave1">မပေး</label>
                    </div>
                  </div>
                 </div>
                </div>
            </fieldset>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-5 text-center">
              <fieldset class="scheduler-border">
                <legend class="scheduler-border">အများပြည်သူအလုပ်ပိတ်ရက် ခံစားခွင့်</legend>
                <div class="control-group">
                 <div class="row">
                  <div class="col-sm-6 text-center">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="publicholiday" name="publicholiday" type="radio" value='ပေး' {{$factoryLabourInspectionLaw->publicholiday=='ပေး' ? 'checked' : ''}}>
                      <label class="custom-control-label" for="publicholiday">ပေး</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="publicholiday1"  type="radio" name="publicholiday" value='မပေး' {{$factoryLabourInspectionLaw->publicholiday=='မပေး' ? 'checked' : ''}}>
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
                      <input  class="custom-control-input" id="weekendholiday" name="weekholiday" type="radio" value='ပေး' {{$factoryLabourInspectionLaw->weekholiday=='ပေး' ? 'checked' : ''}}>
                      <label class="custom-control-label" for="weekendholiday">ပေး</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="weekendholiday1"  type="radio" name="weekholiday" value='မပေး' {{$factoryLabourInspectionLaw->weekholiday=='မပေး' ? 'checked' : ''}}>
                      <label class="custom-control-label" for="weekendholiday1">မပေး</label>
                    </div>
                  </div>
                 </div>
                </div>
            </fieldset>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-5 text-center">
              <fieldset class="scheduler-border">
                <legend class="scheduler-border">ခွင့်မှတ်တမ်း</legend>
                <div class="control-group">
                 <div class="row">
                  <div class="col-sm-6 text-center">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="leavenote" name="leavenote" type="radio" value='ထား' {{$factoryLabourInspectionLaw->leavenote=='ထား' ? 'checked' : ''}}>
                      <label class="custom-control-label" for="leavenote">ထား</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="leavenote1"  type="radio" name="leavenote" value='မထား' {{$factoryLabourInspectionLaw->leavenote=='မထား' ? 'checked' : ''}}>
                      <label class="custom-control-label" for="leavenote1">မထား</label>
                    </div>
                  </div>
                 </div>
                </div>
            </fieldset>
            </div>
          </div>
        {{-- <p>
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
  </p> --}}
  </div>

  <div class="tab">
        <h3 class="text-center">၂၀၁၆ အခကြေးငွေပေးချေရေးဥပဒေ အရ စစ်ဆေးချက်ပုံစံ</h3>
        <h4>အခကြေးငွေပေးချေမှုဆိုင်ရာ အချက်အလက်များ</h4>
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
                              <select name="Mpaymentduration" class="form-control">
                                <option value="လဆန်း၅ရက်" {{$factoryLabourInspectionLaw->Mpaymentduration=='လဆန်း၅ရက်' ? 'selected' : ''}}>လဆန်း၅ရက်</option>
                                <option value="လကုန်ရက်" {{$factoryLabourInspectionLaw->Mpaymentduration=='လကုန်ရက်' ? 'selected' : ''}}>လကုန်ရက်</option>
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
                              <select name="Dpaymentduration" class="form-control">
                                <option value="လဆန်း၅ရက်" {{$factoryLabourInspectionLaw->Dpaymentduration=='လဆန်း၅ရက်' ? 'selected' : ''}}>လဆန်း၅ရက်</option>
                                <option value="လကုန်ရက်" {{$factoryLabourInspectionLaw->Dpaymentduration=='လကုန်ရက်' ? 'selected' : ''}}>လကုန်ရက်</option>
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
                              <select name="Ppaymentduration" class="form-control">
                                <option value="လဆန်း၅ရက်" {{$factoryLabourInspectionLaw->Dpaymentduration=='လဆန်း၅ရက်' ? 'selected' : ''}}>လဆန်း၅ရက်</option>
                                <option value="လကုန်ရက်" {{$factoryLabourInspectionLaw->Dpaymentduration=='လကုန်ရက်' ? 'selected' : ''}}>လကုန်ရက်</option>
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
                              <select name="Cpaymentduration" class="form-control">
                                <option value="လဆန်း၅ရက်" {{$factoryLabourInspectionLaw->Cpaymentduration=='လဆန်း၅ရက်' ? 'selected' : ''}}>လဆန်း၅ရက်</option>
                                <option value="လကုန်ရက်" {{$factoryLabourInspectionLaw->Cpaymentduration=='လကုန်ရက်' ? 'selected' : ''}}>လကုန်ရက်</option>
                              </select>
                            </div>
                          </div>          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </fieldset>
                  
            <div class="row">
                <div class="col-sm-5 text-center">
                  <label for="OTplan">အချိန်ပိုလုပ်ခပေးချေရန်အစီအစဉ် </label>
                  <input id="OTplan" class="form-control" name="OTplan" value="{{$factoryLabourInspectionLaw->OTplan}}">
                </div>
                <div class="col-sm-1">
      
                </div>
                <div class="col-sm-6 text-left">
                  <label for="OTpaymentplan">အချိန်ပိုလုပ်ခပေးချေမှု</label>
                  <input id="OTpaymentplan" class="form-control" name="OTpaymentplan" value="{{$factoryLabourInspectionLaw->OTpaymentplan}}">
                </div>
        </div>
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
                                  <input type="text"placeholder="အနည်းဆုံး" class="form-control" name="miniexperprize" value="{{$factoryLabourInspectionLaw->miniexperprize}}"/>
                                </div>
                                <div class="col-sm-6">
                                  <input type="text"placeholder="အများဆုံး" class="form-control" name="maxexperprize" value="{{$factoryLabourInspectionLaw->maxexperprize}}"/>
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
                                  <input type="text"placeholder="အနည်းဆုံး" class="form-control" name="miniregularprize" value="{{$factoryLabourInspectionLaw->miniregularprize}}"/>
                                </div>
                                <div class="col-sm-6">
                                  <input type="text"placeholder="အများဆုံး" class="form-control" name="maxregularprizee" value="{{$factoryLabourInspectionLaw->maxregularprize}}"/>
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
                              <input type="text"placeholder="အနည်းဆုံး" class="form-control" name="miniproductprize" value="{{$factoryLabourInspectionLaw->miniproductprize}}"/>
                            </div>
                            <div class="col-md-4">              
                              <input type="text"placeholder="အများဆုံး" class="form-control" name="maxproductprize" value="{{$factoryLabourInspectionLaw->maxproductprize}}"/>
                            </div>
                          </div>          
                        </div>
                        
                      </div>
                      
                      
                    </div>
                  </div>
                </div>
            </fieldset>
              <div class="row">
                <div class="col-sm-5 text-center">
                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">ဒဏ်တပ်ရန်ထားရှိသော စည်းကမ်းချက်များ (အတည်ပြုချက် ရှိ/မရှိ အပါအဝင်)</legend>
                        <div class="control-group">
                         <div class="row">
                          <div class="col-sm-6 text-center">
                            <div class="custom-control custom-radio mb-3">
                              <input class="custom-control-input" id="fine" name="fine" type="radio" value='ရှိ' {{$factoryLabourInspectionLaw->fine=='ရှိ' ? 'checked' : ''}}>
                              <label class="custom-control-label" for="fine">ရှိ</label>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="custom-control custom-radio mb-3">
                              <input  class="custom-control-input" id="fine1" type="radio" name="fine" value='မရှိ' {{$factoryLabourInspectionLaw->fine=='မရှိ' ? 'checked' : ''}}>
                              <label class="custom-control-label" for="fine1">မရှိ</label>
                            </div>
                          </div>
                         </div>
                        </div>
                    </fieldset>   
                </div>
                <div class="col-sm-1">
      
                </div>
                <div class="col-sm-6 text-left">
                    <label for="deductamount">ဖြတ်တောက်ငွေများ</label>
                    <input  name="deductamount" id="deductamount" class="form-control" value="{{$factoryLabourInspectionLaw->deductamount}}">
                </div>
              </div>
          <fieldset class="scheduler-border">
            <legend class="scheduler-border">တရားမဝင် ဖြတ်တောက်မှုများ/မပေးချေရသေးမှုများ</legend>
                <div class="row">
                  <div class="col-sm-12 text-center">
                    
                      <div class='row'>
                      <div class="col-sm-4">
                        <div class="form-group">
                          
                          <input type="text" placeholder="ကာလ" class="form-control" name="illegaldeductedtime" value="{{$factoryLabourInspectionLaw->illegaldeductedtime}}"/>
                        </div>
                                
                      </div>
                            
                          
                    <div class="col-sm-4">
                        <div class="form-group">
                          <input type="text" placeholder="လုပ်သားအရေအတွက်" class="form-control" name="illegaldeductedworkers" value="{{$factoryLabourInspectionLaw->illegaldeductedworkers}}"/>
                        </div>
                                    
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                          <input type="text" placeholder="သင့်ငွေ" class="form-control" name="illegaldedutedamount" value="{{$factoryLabourInspectionLaw->illegaldedutedamount}}"/>
                                
                        </div>
                    </div>          
                        
                    </div>
                  </div>
                </div>
                
            </fieldset>
          <div class="row">
              <div class="col-sm-5 text-center">
                <fieldset class="scheduler-border">
                <legend class="scheduler-border">လုပ်ခပေးချေခြင်း မှတ်တမ်း</legend>
                  <div class="control-group">
                       <div class="row">
                        <div class="col-sm-6 text-center">
                          <div class="custom-control custom-radio mb-3">
                            <input class="custom-control-input" id="customRadio" name="paymentnote" value='ရှိ' type="radio" {{$factoryLabourInspectionLaw->paymentnote=='ရှိ' ? 'checked' : ''}}>
                            <label class="custom-control-label" for="customRadio">ရှိ</label>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="custom-control custom-radio mb-3">
                            <input  class="custom-control-input" id="customRadio0" type="radio" name="paymentnote" value='မရှိ' {{$factoryLabourInspectionLaw->paymentnote=='မရှိ' ? 'checked' : ''}}>
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
                            <input class="custom-control-input" id="deductednote" name="deductednote" value='ရှိ' type="radio" {{$factoryLabourInspectionLaw->deductednote=='ရှိ' ? 'checked' : ''}}>
                            <label class="custom-control-label" for="deductednote">ရှိ</label>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="custom-control custom-radio mb-3">
                            <input  class="custom-control-input" id="deductednote1"  type="radio" name="deductednote" value='မရှိ' {{$factoryLabourInspectionLaw->deductednote=='မရှိ' ? 'checked' : ''}}>
                            <label class="custom-control-label" for="deductednote1">မရှိ</label>
                          </div>
                        </div>
                       </div>
                      </div>
                  </fieldset>
                  </div>
                </div>
          <div class="row">
            <div class="col-sm-5 text-center">
              <fieldset class="scheduler-border">
                <legend class="scheduler-border">အချိန်ပို ငွေကြေးခံစားခွင့်ပြုသည့်မှတ်တမ်း</legend>
                <div class="control-group">
                  <div class="row">
                  <div class="col-sm-6 text-center">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="allowotnote" name="allowotnote" value='ရှိ' type="radio" {{$factoryLabourInspectionLaw->allowotnote=='ရှိ' ? 'checked' : ''}}>
                      <label class="custom-control-label" for="allowotnote">ရှိ</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="allowotnote1"  type="radio" name="allowotnote" value='မရှိ' {{$factoryLabourInspectionLaw->allowotnote=='မရှိ' ? 'checked' : ''}}>
                      <label class="custom-control-label" for="allowotnote1">မရှိ</label>
                    </div>
                  </div>
                 </div>
                </div>
            </fieldset>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 text-center">
              <fieldset class="scheduler-border">
                <legend class="scheduler-border">ညွှန်ကြားရန်အချက်များ (မူကြမ်း)</legend>
                <div class="control-group">
                  <div class="row">
                    <div class="col-sm-12 text-center">
                       <textarea class="col-sm-12 form-control" rows="4" placeholder="ညွှန်ကြားရန်အချက် (က)" name="instruction1">{{$factoryLabourInspectionLaw->instruction1}}</textarea>
                    </div>
                 </div>
                 <div class="blank10"></div>
                 <div class="row">
                    <div class="col-sm-12 text-center">
                       <textarea class="col-sm-12 form-control" rows="4" placeholder="ညွှန်ကြားရန်အချက် (ခ)" name="instruction2">{{$factoryLabourInspectionLaw->instruction2}}</textarea>
                    </div>
                 </div>
                 <div class="blank10"></div>
                 <div class="row">
                    <div class="col-sm-12 text-center">
                       <textarea class="col-sm-12 form-control" rows="4" placeholder="ညွှန်ကြားရန်အချက် (ဂ)" name="instruction3">{{$factoryLabourInspectionLaw->instruction3}}</textarea>
                    </div>
                 </div>
                 <div class="blank10"></div>
                 <div class="row">
                        <div class="col-sm-12 text-center">
                           <textarea class="col-sm-12 form-control" rows="4" placeholder="ညွှန်ကြားရန်အချက် (ဃ)" name="instruction4">{{$factoryLabourInspectionLaw->instruction4}}</textarea>
                        </div>
                     </div>
                     <div class="blank10"></div>
                     <div class="row">
                        <div class="col-sm-12 text-center">
                           <textarea class="col-sm-12 form-control" rows="4" placeholder="ညွှန်ကြားရန်အချက် (င)" name="instruction5">{{$factoryLabourInspectionLaw->instruction5}}</textarea>
                        </div>
                     </div>
                     <div class="blank10"></div>
                </div>
            </fieldset>
            </div>
          </div>
        </p>
  </div>
<div class="blank10"></div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">ရှေ့တစ်မျက်နှာ</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">နောက်တစ်မျက်နှာ
    </button>
    </div>
  </div>
  
</form>
<!-- scroll back to top of the page -->
<a id="back2Top" title="Back to top" href="#">&#10148;</a>


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



// clear data for equal notice
function equalNotice(){
  $('#dailyworktime').val('');
  $('#weeklyworktime').val('');
  $('#resttime').val('');
  $('#weekendholiday').val('');

}
  </script>

@endsection