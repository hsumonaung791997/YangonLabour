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
    <h1 style="text-align:center;margin-bottom:40px;">၂၀၁၆ အခကြေးငွေပေးချေရေးဥပဒေ အရ စစ်ဆေးချက်ပုံစံ</h1>
      @if(session()->get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-inner--icon"></span>
            <span class="alert-inner--text">  {{ session()->get('success') }}  </span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
      @endif

      <div class="row">
          <div class="col-sm-12 text-right">
              <button  name="tempoarySave" id="tempoarySave">ယာယီသိမ်းဆည်းမည် </button>
          </div>
      </div>

<form id="inspectform" class="form-background" action="{{route('FactoryInspectionWage.store')}}"  method="post">
     {{csrf_field()}}
        <h3>အခကြေးငွေပေးချေမှုဆိုင်ရာ အချက်အလက်များ</h3>
  <p>
      {{-- for tempoary save --}}
      <input type="hidden" name="tempoary" id="tempoary">

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
                        <select name="Mpaymentduration">
                          <option value="လဆန်း၅ရက်" {{ $FactoryInspectionWage->Mpaymentduration=='လဆန်း၅ရက်' ? 'selected' : '' }}>လဆန်း၅ရက်</option>
                          <option value="လကုန်ရက်" {{ $FactoryInspectionWage->Mpaymentduration=='လကုန်ရက်' ? 'selected' : '' }}>လကုန်ရက်</option>
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
                        <select name="Dpaymentduration">
                          <option value="လဆန်း၅ရက်" {{ $FactoryInspectionWage->Dpaymentduration=='လဆန်း၅ရက်' ? 'selected' : '' }}>လဆန်း၅ရက်</option>
                          <option value="လကုန်ရက်" {{ $FactoryInspectionWage->Dpaymentduration=='လကုန်ရက်' ? 'selected' : '' }}>လကုန်ရက်</option>
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
                        <select name="Ppaymentduration">
                          <option value="လဆန်း၅ရက်" {{ $FactoryInspectionWage->Ppaymentduration=='လဆန်း၅ရက်' ? 'selected' : '' }}>လဆန်း၅ရက်</option>
                          <option value="လကုန်ရက်" {{ $FactoryInspectionWage->Ppaymentduration=='လကုန်ရက်' ? 'selected' : '' }}>လကုန်ရက်</option>
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
                        <select name="Cpaymentduration">
                          <option value="လဆန်း၅ရက်" {{ $FactoryInspectionWage->Cpaymentduration=='လဆန်း၅ရက်' ? 'selected' : '' }}>လဆန်း၅ရက်</option>
                          <option value="လကုန်ရက်" {{ $FactoryInspectionWage->Cpaymentduration=='လကုန်ရက်' ? 'selected' : '' }}>လကုန်ရက်</option>
                        </select>
                      </div>
                    </div>          
                  </div>
                </div>
              </div>
            </div>
          </div>
      </fieldset>
            
        </p>
  <div class="row">
          <div class="col-sm-5 text-center">
            <label for="OTplan">အချိန်ပိုလုပ်ခပေးချေရန်အစီအစဉ် </label>
            <input id="OTplan"  name="OTplan" value="{{ $FactoryInspectionWage->OTplan}}">
          </div>
          <div class="col-sm-1">

          </div>
          <div class="col-sm-6 text-left">
            <label for="OTpaymentplan">အချိန်ပိုလုပ်ခပေးချေမှု</label>
            <input id="OTpaymentplan"  name="OTpaymentplan" value="{{ $FactoryInspectionWage->OTpaymentplan}}">
          </div>
  </div>
    <p>
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
                            <input type="text"placeholder="အနည်းဆုံး" name="miniexperprize" value="{{ $FactoryInspectionWage->miniexperprize}}"/>
                          </div>
                          <div class="col-sm-6">
                            <input type="text"placeholder="အများဆုံး" name="maxexperprize" value="{{ $FactoryInspectionWage->maxexperprize}}"/>
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
                            <input type="text"placeholder="အနည်းဆုံး" name="miniregularprize" value="{{ $FactoryInspectionWage->miniregularprize}}"/>
                          </div>
                          <div class="col-sm-6">
                            <input type="text"placeholder="အများဆုံး" name="maxregularprizee" value="{{ $FactoryInspectionWage->maxregularprizee}}"/>
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
                        <input type="text"placeholder="အနည်းဆုံး" name="miniproductprize" value="{{ $FactoryInspectionWage->miniproductprize}}"/>
                      </div>
                      <div class="col-md-4">              
                        <input type="text"placeholder="အများဆုံး" name="maxproductprize" value="{{ $FactoryInspectionWage->maxproductprize}}"/>
                      </div>
                    </div>          
                  </div>
                  
                </div>
                
                
              </div>
            </div>
          </div>
      </fieldset>
            
        </p>
      <p>
        <div class="row">
          <div class="col-sm-5 text-center">
              <fieldset class="scheduler-border">
                  <legend class="scheduler-border">ဒဏ်တပ်ရန်ထားရှိသော စည်းကမ်းချက်များ (အတည်ပြုချက် ရှိ/မရှိ အပါအဝင်)</legend>
                  <div class="control-group">
                   <div class="row">
                    <div class="col-sm-6 text-center">
                      <div class="custom-control custom-radio mb-3">
                        <input class="custom-control-input" id="fine" name="fine" type="radio" value='ရှိ' {{ $FactoryInspectionWage->fine=='ရှိ' ? 'checked' : '' }}>
                        <label class="custom-control-label" for="fine">ရှိ</label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="custom-control custom-radio mb-3">
                        <input  class="custom-control-input" id="fine1"  type="radio" name="fine" value='မရှိ' {{ $FactoryInspectionWage->fine=='မရှိ' ? 'checked' : '' }}>
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
          <input  name="deductamount" id="deductamount" value="{{$FactoryInspectionWage->deductamount}}">
          </div>
        </div>
      </p>
  <p>
    <fieldset class="scheduler-border">
      <legend class="scheduler-border">တရားမဝင် ဖြတ်တောက်မှုများ/မပေးချေရသေးမှုများ</legend>
          <div class="row">
            <div class="col-sm-12 text-center">
              
                <div class='row'>
                <div class="col-sm-4">
                  <div class="form-group">
                    
                    <input type="text"placeholder="ကာလ" name="illegaldeductedtime" value="{{$FactoryInspectionWage->illegaldeductedtime}}"/>
                  </div>
                          
                </div>
                      
                    
              <div class="col-sm-4">
                  <div class="form-group">
                    <input type="text"placeholder="လုပ်သားအရေအတွက်" name="illegaldeductedworkers" value="{{$FactoryInspectionWage->illegaldeductedworkers}}"/>
                  </div>
                              
              </div>
              <div class="col-sm-4">
                  <div class="form-group">
                    <input type="text"placeholder="သင့်ငွေ" name="illegaldedutedamount" value="{{$FactoryInspectionWage->illegaldedutedamount}}"/>
                          
                  </div>
              </div>          
                  
              </div>
            </div>
          </div>
          
      </fieldset>
            
        </p>

        
  <p>
    <div class="row">
        <div class="col-sm-5 text-center">
          <fieldset class="scheduler-border">
          <legend class="scheduler-border">လုပ်ခပေးချေခြင်း မှတ်တမ်း</legend>
            <div class="control-group">
                 <div class="row">
                  <div class="col-sm-6 text-center">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="customRadio" name="paymentnote" value=0 type="radio" {{ $FactoryInspectionWage->paymentnote==0 ? 'checked' : '' }}>
                      <label class="custom-control-label" for="customRadio">ရှိ</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="customRadio0"  value=1 type="radio" name="paymentnote" {{ $FactoryInspectionWage->paymentnote==1 ? 'checked' : '' }}>
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
                      <input class="custom-control-input" id="deductednote" name="deductednote" value=0 type="radio" {{ $FactoryInspectionWage->deductednote==0 ? 'checked' : '' }}>
                      <label class="custom-control-label" for="deductednote">ရှိ</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="deductednote1"  value=1 type="radio" name="deductednote" {{ $FactoryInspectionWage->deductednote==1 ? 'checked' : '' }}>
                      <label class="custom-control-label" for="deductednote1">မရှိ</label>
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
          <legend class="scheduler-border">အချိန်ပို ငွေကြေးခံစားခွင့်ပြုသည့်မှတ်တမ်း</legend>
          <div class="control-group">
            <div class="row">
            <div class="col-sm-6 text-center">
              <div class="custom-control custom-radio mb-3">
                <input class="custom-control-input" id="allowotnote" name="allowotnote" value=0 type="radio" {{ $FactoryInspectionWage->allowotnote==0 ? 'checked' : '' }}>
                <label class="custom-control-label" for="allowotnote">ရှိ</label>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="custom-control custom-radio mb-3">
                <input  class="custom-control-input" id="allowotnote1"  value=1 type="radio" name="allowotnote" {{ $FactoryInspectionWage->allowotnote==1 ? 'checked' : '' }}>
                <label class="custom-control-label" for="allowotnote1">မရှိ</label>
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
      <div class="col-sm-12 text-center">
        <fieldset class="scheduler-border">
          <legend class="scheduler-border">ညွှန်ကြားရန်အချက်များ (မူကြမ်း)</legend>
          <div class="control-group">
            <div class="row">
              <div class="col-sm-12 text-center">
              <textarea class="col-sm-12" rows="4" placeholder="ညွှန်ကြားရန်အချက် (က)" name="instruction">{{$FactoryInspectionWage->instruction1}}</textarea>
              </div>
           </div>
           <div class="row">
              <div class="col-sm-12 text-center">
                 <textarea class="col-sm-12" rows="4" placeholder="ညွှန်ကြားရန်အချက် (ခ)" name="instruction1"> {{$FactoryInspectionWage->instruction2}}</textarea>
              </div>
           </div>
           <div class="row">
              <div class="col-sm-12 text-center">
                 <textarea class="col-sm-12" rows="4" placeholder="ညွှန်ကြားရန်အချက် (ဂ)" name="instruction2"></textarea>
              </div>
           </div>
          </div>
      </fieldset>
      </div>
    </div>
  </p>
  
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="submit" id="nextBtn">Submit</button>
    </div>
  </div>
  
</form>
<script>
      //for tempoary save
      $('#tempoarySave').click(function(){
	    $("#tempoary").val('tempoary');
	document.getElementById("inspectform").submit();
});
  </script>
@endsection