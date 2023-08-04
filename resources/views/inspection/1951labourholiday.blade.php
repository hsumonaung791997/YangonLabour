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
    <h1 style="text-align:center;margin-bottom:40px;">၁၉၅၁ ခွင့်ရက်နှင့် အလုပ်ပိတ်ရက်အက်ဥပဒေအရ စစ်ဆေးချက်ပုံစံ</h1>
    @if(session()->get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-inner--icon"></span>
                <span class="alert-inner--text">  {{ session()->get('success') }}  </span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    <form id="inspectform"class="form-background" action="{{route('FactoryLeave.store')}}"  method="post">
     {{csrf_field()}}

      <div class="row">
        <div class="col-sm-12 text-right">
            <button  id="tempoarySave">ယာယီသိမ်းဆည်းမည် </button>
            <input type="hidden" name="tempoary" id="tempoary">
        </div>
      </div>

        <h3>ခွင့်ခံစားမှုများ</h3>
      <p>
          <div class="row">
            <div class="col-sm-5 text-center">
              <fieldset class="scheduler-border">
                <legend class="scheduler-border">ရှောင်တခင်ခွင့်(၆)ရက် ခံစားခွင့်</legend>
                <div class="control-group">
                 <div class="row">
                  <div class="col-sm-6 text-center">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="causal" name="causalleave" type="radio" value=0>
                      <label class="custom-control-label" for="causal">ပေး</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="causal1" checked="" type="radio" name="causalleave" value=1>
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
                      <input  class="custom-control-input" id="annual" name="annualleave" type="radio" value=0>
                      <label class="custom-control-label" for="annual">ပေး</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="SSB1" checked="" type="radio" name="annualleave" value=1>
                      <label class="custom-control-label" for="SSB1">မပေး</label>
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
                <legend class="scheduler-border">ဆေးလက်မှတ်ခွင့် ခံစားခွင့်</legend>
                <div class="control-group">
                 <div class="row">
                  <div class="col-sm-6 text-center">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="medicalleave" name="medicalleave" type="radio" value=0>
                      <label class="custom-control-label" for="medicalleave">ပေး</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="medicalleave1" checked="" type="radio" name="medicalleave" value=1>
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
                      <input  class="custom-control-input" id="maternityleave" name="maternity" type="radio" value=0>
                      <label class="custom-control-label" for="maternityleave">ပေး</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="maternityleave1" checked="" type="radio" name="maternity" value=1>
                      <label class="custom-control-label" for="maternityleave1">မပေး</label>
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
                <legend class="scheduler-border">အများပြည်သူအလုပ်ပိတ်ရက် ခံစားခွင့်</legend>
                <div class="control-group">
                 <div class="row">
                  <div class="col-sm-6 text-center">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="publicholiday" name="publicholiday" type="radio" value=0>
                      <label class="custom-control-label" for="publicholiday">ပေး</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="publicholiday1" checked="" type="radio" name="publicholiday" value=1>
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
                      <input  class="custom-control-input" id="weekendholiday" name="weekendholiday" type="radio" value=0>
                      <label class="custom-control-label" for="weekendholiday">ပေး</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="weekendholiday1" checked="" type="radio" name="weekendholiday" value=1>
                      <label class="custom-control-label" for="weekendholiday1">မပေး</label>
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
                <legend class="scheduler-border">ခွင့်မှတ်တမ်း</legend>
                <div class="control-group">
                 <div class="row">
                  <div class="col-sm-6 text-center">
                    <div class="custom-control custom-radio mb-3">
                      <input class="custom-control-input" id="leavenote" name="leavenote" type="radio" value=0>
                      <label class="custom-control-label" for="leavenote">ထား</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="custom-control custom-radio mb-3">
                      <input  class="custom-control-input" id="leavenote1" checked="" type="radio" name="leavenote" value=1>
                      <label class="custom-control-label" for="leavenote1">မထား</label>
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
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="submit" id="nextBtn">သိမ်းဆည်းမည်</button>
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