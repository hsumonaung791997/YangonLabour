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

    <h1 style="text-align:center;margin-bottom:40px;">လုပ်ငန်းဌာနဆိုင်ရာ အချက်အလက်များ</h1>
            <div class="row">
                    <div class="col-sm-12 text-right">
                        <button  name="tempoarySave" id="tempoarySave">ယာယီသိမ်းဆည်းမည် </button>
                    </div>
            </div>
        <p>
            <div class="row">
                <div class="col-sm-1">
                    
                </div>
                <div class="col-sm-5 text-center">
                    <h4>စက်ရုံအမည် - {{$factory->FactoryName}}</h4>
                    <div id="factoryList">
                    </div>
                </div>
            </div>
        </p> 


    <form id="inspectform" class="form-background" action="{{route('FactoryInspection.store')}}" method="post">
     {{csrf_field()}}
        {{-- for tempoary save --}}
        <input type="hidden" name="tempoary" id="tempoary">
    <input type="hidden" id="factoryid" name="factory_id" value="{{$FactoryInspectionInform->factory_id}}" >
        <p>
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="testingtime"> စစ်ဆေးခြင်းအကြိမ်</label>
                        </div>
                        <div class="col-sm-7">
                            {{-- <select name='inspectedtimes' id="testingtime" class="form-control">
                                <option value=1 {{ $FactoryInspectionInform->inspectedtimes=='1' ? 'selected' : '' }}>ပထမအကြိမ်</option>
                                <option value=2 {{ $FactoryInspectionInform->inspectedtimes=='2' ? 'selected' : '' }}>ဒုတိယအကြိမ်</option>
                                <option value=3 {{ $FactoryInspectionInform->inspectedtimes=='3' ? 'selected' : '' }}>အထူး</option>
                            </select> --}}

                            <select name='inspectedtimes' id="testingtime" class="form-control">
                                <option value='ပထမအကြိမ်' {{ $FactoryInspectionInform->inspectedtimes=='ပထမအကြိမ်' ? 'selected' : '' }}>ပထမအကြိမ်</option>
                                <option value='ဒုတိယအကြိမ်' {{ $FactoryInspectionInform->inspectedtimes=='ဒုတိယအကြိမ်' ? 'selected' : '' }}>ဒုတိယအကြိမ်</option>
                                <option value='တတိယအကြိမ်' {{ $FactoryInspectionInform->inspectedtimes=='တတိယအကြိမ်' ? 'selected' : '' }}>တတိယအကြိမ်</option>
                                <option value='စတုတ္ထအကြိမ်' {{ $FactoryInspectionInform->inspectedtimes=='စတုတ္ထအကြိမ်' ? 'selected' : '' }}>စတုတ္ထအကြိမ်</option>
                                <option value='ပဉ္စမအကြိမ်' {{ $FactoryInspectionInform->inspectedtimes=='ပဉ္စမအကြိမ်' ? 'selected' : '' }}>ပဉ္စမအကြိမ်</option>
                                <option value='ဆဌမအကြိမ်' {{ $FactoryInspectionInform->inspectedtimes=='ဆဌမအကြိမ်' ? 'selected' : '' }}>ဆဌမအကြိမ်</option>
                                <option value='သတ္တမအကြိမ်' {{ $FactoryInspectionInform->inspectedtimes=='သတ္တမအကြိမ်' ? 'selected' : '' }}>သတ္တမအကြိမ်</option>
                                <option value='အဌမအကြိမ်' {{ $FactoryInspectionInform->inspectedtimes=='အဌမအကြိမ်' ? 'selected' : '' }}>အဌမအကြိမ်</option>
                                <option value='နဝမအကြိမ်' {{ $FactoryInspectionInform->inspectedtimes=='နဝမအကြိမ်' ? 'selected' : '' }}>နဝမအကြိမ်</option>
                                <option value='ဒဿမအကြိမ်'{{ $FactoryInspectionInform->inspectedtimes=='ဒဿမအကြိမ်' ? 'selected' : '' }}>ဒဿမအကြိမ်</option>

                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" id="checknormal">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="testingtime"> စစ်ဆေးချက်ပုံစံ</label>
                        </div>
                        <div class="col-sm-7">
                            {{-- <select name='inspectedtimes' id="testingtime" class="form-control">
                                <option value='ပုံမှန်'>ပုံမှန်</option>
                                <option value='ပြန်လည်'>ပြန်လည်</option>
                                <option value='တုံ့ပြန်'>တုံ့ပြန်</option>
                                <option value='အထူး'>အထူး</option>
                                <option value='လျှပ်တစ်ပြတ်'>လျှပ်တစ်ပြတ်</option>
                            </select> --}}
                            <select name='inspectiontype' id="testingtime" class="form-control">
                                <option value='ပုံမှန်' {{ $FactoryInspectionInform->inspectiontype=='ပုံမှန်' ? 'selected' : '' }}>ပုံမှန်</option>
                                <option value='ပြန်လည်' {{ $FactoryInspectionInform->inspectiontype=='ပြန်လည်' ? 'selected' : '' }}>ပြန်လည်</option>
                                <option value='တုံ့ပြန်' {{ $FactoryInspectionInform->inspectiontype=='တုံ့ပြန်' ? 'selected' : '' }}>တုံ့ပြန်</option>
                                <option value='အထူး' {{ $FactoryInspectionInform->inspectiontype=='အထူး' ? 'selected' : '' }}>အထူး</option>
                                <option value='လျှပ်တစ်ပြတ်' {{ $FactoryInspectionInform->inspectiontype=='လျှပ်တစ်ပြတ်' ? 'selected' : '' }}>လျှပ်တစ်ပြတ်</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="inspectiondate"> စစ်ဆေးသည့်ရက်စွဲ</label>
                        </div>
                        <div class="col-sm-7">
                            <input type="date" name="inspectiondate" id="inspectiondate" value="{{$FactoryInspectionInform->inspectiondate}}">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="lastinspectiondate"> နောက်ဆုံးစစ်ဆေးခဲ့သည့်ရက်စွဲ</label>
                        </div>
                        <div class="col-sm-7">
                            <input type="date" name="lastinspectiondate" id="lastinspectiondate" value="{{$FactoryInspectionInform->lastinspectiondate}}">
                        </div>
                    </div>
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="BusinessOwnerName"> လုပ်ငန်းပိုင်ရှင်အမည်</label>
                        </div>
                        <div class="col-sm-7">
                            <input  name="workerownername" id="BusinessOwnerName" value="{{$FactoryInspectionInform->workerownername}}">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="BusinessOwnerAddress"> လုပ်ငန်းပိုင်ရှင်လိပ်စာ</label>
                        </div>
                        <div class="col-sm-7">
                            <input name="workerowneraddress" id="BusinessOwnerAddress" value="{{$FactoryInspectionInform->workerowneraddress}}">
                        </div>
                    </div>
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="owner"> ပိုင်ရှင်အမည်</label>
                        </div>
                        <div class="col-sm-7">
                            <input name="ownername" id="OwnerName" value="{{$FactoryInspectionInform->ownername}}">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="OwnerAddress"> ပိုင်ရှင်လိပ်စာ</label>
                        </div>
                        <div class="col-sm-7">
                            <input   name="owneraddress" id="OwnerAddress" value="{{$FactoryInspectionInform->owneraddress}}">
                        </div>
                    </div>
                </div>
            </div>
        </p>

        <p>
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="namebyrecord"> ရုံးရှိမှတ်တမ်းအရ လုပ်ငန်းပိုင်ရှင်အမည်</label>
                        </div>
                        <div class="col-sm-7">
                            <input   name="registerownername" id="namebyrecord" value="{{$FactoryInspectionInform->registerownername}}">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="WorkedPower"> အလုပ်သမားအင်အား</label>
                        </div>
                        <div class="col-sm-7">
                            <input   name="workertotal" id="WorkedPower" value="{{$FactoryInspectionInform->workertotal}}">
                        </div>
                    </div>
                </div>
            </div>
        </p>

        <p>
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="ManagerName"> မန်နေဂျာအမည်</label>
                        </div>
                        <div class="col-sm-7">
                            <input   name="managername" id="ManagerName" value="{{$FactoryInspectionInform->managername}}">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="ManagerAddress"> မန်နေဂျာလိပ်စာ</label>
                        </div>
                        <div class="col-sm-7">
                            <input name="manageraddress" id="ManagerAddress" value="{{$FactoryInspectionInform->manageraddress}}">
                        </div>
                    </div>
                </div>
            </div>
        </p>


         <p>
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="AccountableName"> တာဝန်ခံဖြေဆိုသူအမည်</label>
                        </div>
                        <div class="col-sm-7">
                            <input   name="intervieweename" id="AccountableName" value="{{$FactoryInspectionInform->intervieweename}}">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="AccountableRank"> တာဝန်ခံဖြေဆိုသူရာထူး</label>
                        </div>
                        <div class="col-sm-7">
                            <input  name="intervieweerank" id="AccountableRank" value="{{$FactoryInspectionInform->intervieweerank}}">
                        </div>
                    </div>
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="typeofencourage"> အားပေးစက်အမျိုးအစား</label>
                        </div>
                        <div class="col-sm-7">
                            <input   name="machinetype" id="typeofencourage" value="{{$FactoryInspectionInform->machinetype}}">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="Horsepower"> မြင်းကောင်ရေအား</label>
                        </div>
                        <div class="col-sm-7">
                            <input   name="horsepower" id="Horsepower" value="{{$FactoryInspectionInform->horsepower}}">
                        </div>
                    </div>
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="ProductProperty
"> ထုတ်လုပ်သော ပစ္စည်းအများအစား</label>
                        </div>
                        <div class="col-sm-7">
                            <input   name="producttype" id="ProductProperty" value="{{$FactoryInspectionInform->producttype}}">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="ProducedAmounts"> ထုတ်လုပ်နိုင်သည့် အရေအတွက်</label>
                        </div>
                        <div class="col-sm-7">
                            <input name="productquantity" id="MonthlyAmounts" value="{{$FactoryInspectionInform->productquantity}}">
                        </div>
                    </div>
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                    <div class="col-sm-12 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">စက်ရုံလိပ်စာ</legend>
                            <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <textarea class="col-sm-12" rows="4"  id="letter" name="factoryaddress" id="factoryaddress">{{$FactoryInspectionInform->factoryaddress}}</textarea>
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
                            <legend class="scheduler-border">လုပ်ငန်းဖွင့်လှစ်ခြင်း</legend>
                            <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-2 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="ServiceOpen" name="jobopen" type="radio" value=0 {{ $FactoryInspectionInform->jobopen=='0' ? 'checked' : '' }}>
                                          <label class="custom-control-label" for="ServiceOpen">ရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="Factoryopens" checked="" type="radio" name="jobopen" value=1 {{ $FactoryInspectionInform->jobopen=='1' ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="ServiceOpen1">မရှိ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 text-right">
                                        <label for="datepicker">ပိတ်ထားပါကနောက်ဆုံးလုပ်ကိုင်ခဲ့သည့်ရက်စွဲ</label>
                                    </div>
                                    <div class="col-sm-5 text-center">
                                    <input type="date" name="closeddate" id="datepicker" class="datepicker" value="{{$FactoryInspectionInform->closeddate}}">
                    
                                    </div>
                                 </div>
                            </div>
                        </fieldset> 
                    </div>                  
                </div>
        </p>
        {{-- <p>
            <span>အလုပ်သမားအင်အား</span>
            <div class='row'>
            <div class="col-sm-12">
                <table style="width:100%">
                    <tr>
                        <td rowspan="2">ဝင်ငွေအမျိုးအစား</td>
                        <td colspan="2">လူကြီး (၁၈နှစ်အထက်)</td>
                        <td colspan="2">လူရွယ်(၁၆နှစ်မှ ၁၈နှစ်)</td>
                        <td colspan="2">ကလေး(၁၆နှစ်မှ၁၈နှစ်)</td>
                        <td colspan="2">စုစုပေါင်း</td>
                    </tr>
                    <tr>
                        <td>ကျား</td>
                        <td>မ</td>
                        <td>ကျား</td>
                        <td>မ</td>
                        <td>ကျား</td>
                        <td>မ</td>
                        <td>ကျား</td>
                        <td>မ</td>
                    </tr>
                    <tr>
                        <td>လစား</td>
                        <td><input  type="text" name="Mmenworker" id="menworker" value=0 value="{{$FactoryInspectionInform->Mmenworker}}"/></td>
                        <td><input  type="text" name="Mwomenworker" id="womenworker" value=0 value="{{$FactoryInspectionInform->Mwomenworker}}"/></td>
                        <td><input  type="text" name="MAmaleworker" id="amenworker" value=0 value="{{$FactoryInspectionInform->MAmaleworker}}"/></td>
                        <td><input  type="text" name="MAfemaleworker" id="awomenworker" value=0 value="{{$FactoryInspectionInform->MAfemaleworker}}"/></td>
                        <td><input  type="text" name="Cmenworker" id="cmenworker" value=0 value="{{$FactoryInspectionInform->Cmenworker}}" /></td>
                        <td><input  type="text" name="Cwomenworker" id="cwomenworker" value=0 value="{{$FactoryInspectionInform->Cwomenworker}}"/></td>
                        <td><input  type="text" name="totalmen" id="totalmen" value=0 /></td>
                        <td><input  type="text" name="totalwomen" id="totalwomen" value=0 /></td>
                    </tr>
                    <tr>
                        <td>နေ့စား</td>
                        <td><input  type="text" value=0 name="Dmenworker" id="dailymenworker" value="{{$FactoryInspectionInform->Dmenworker}}"/></td>
                        <td><input  type="text" value=0 name="Dwomenworker" id="dailywomenworker" value="{{$FactoryInspectionInform->Dwomenworker}}"/></td>
                        <td><input  type="text" value=0 name="DAmaleworker" id="dailyamenworker" value="{{$FactoryInspectionInform->DAmaleworker}}"/></td>
                        <td><input  type="text" value=0 name="DAfemaleworker" id="dailyawomenworker" value="{{$FactoryInspectionInform->DAfemaleworker}}" /></td>
                        <td><input  type="text" value=0 name="DCmaleworker" id="dailycmenworker" value="{{$FactoryInspectionInform->DCmaleworker}}"/></td>
                        <td><input  type="text" value=0 name="DCfemaleworker" id="dailycwomenworker" value="{{$FactoryInspectionInform->DCfemaleworker}}"/></td>
                        <td><input  type="text" value=0 name="dailytotalmen" id="dailytotalmen" /></td>
                        <td><input  type="text" value=0 name="dailytotalwomen" id="dailytotalwomen"/></td>
                    </tr>
                    <tr>
                        <td>ပုတ်ပြတ်</td>
                        <td><input  type="text" value=0 name="Pmenworker" id='piecemenworker' value="{{$FactoryInspectionInform->Pmenworker}}"/></td>
                        <td><input  type="text" value=0 name="Pwomenworker" id="piecewomenworker" value="{{$FactoryInspectionInform->Pwomenworker}}"/></td>
                        <td><input  type="text" value=0 name="PAmaleworker" id="pieceamenworker" value="{{$FactoryInspectionInform->PAmaleworker}}"/></td>
                        <td><input  type="text" value=0 name="PAfemaleworker" id="pieceawomenworker" value="{{$FactoryInspectionInform->PAfemaleworker}}"/></td>
                        <td><input  type="text" value=0 name="PCmaleworker" id="piececmenworker" value="{{$FactoryInspectionInform->PCmaleworker}}"/></td>
                        <td><input  type="text" value=0 name="PCfemaleworker" id="piececwomenworker" value="{{$FactoryInspectionInform->PCfemaleworker}}"/></td>
                        <td><input  type="text" value=0 name="piecetotalmen" id="piecetotalmen" /></td>
                        <td><input  type="text" value=0 name="piecetotalwomen" id="piecetotalwomen" /></td>
                    </tr>
                    <tr>
                        <td>ပုံသေ</td>
                        <td><input  type="text" value=0 name="Cmenworker" id='constantmenworker' value="{{$FactoryInspectionInform->Cmenworker}}"/></td>
                        <td><input  type="text" value=0 name="Cwomenworker" id="constantwomenworker" value="{{$FactoryInspectionInform->Cwomenworker}}"/></td>
                        <td><input  type="text" value=0 name="CAmaleworker" id="constantamenworker" value="{{$FactoryInspectionInform->CAmaleworker}}"/></td>
                        <td><input  type="text" value=0 name="CAfemaleworker" id="constantawomenworker" value="{{$FactoryInspectionInform->CAfemaleworker}}"/></td>
                        <td><input  type="text" value=0 name="CCmaleworker" id="constantcmenworker" value="{{$FactoryInspectionInform->CCmaleworker}}"/></td>
                        <td><input  type="text" value=0 name="CCfemaleworker" id="constantcwomenworker" value="{{$FactoryInspectionInform->CCfemaleworker}}"/></td>
                        <td><input  type="text" value=0 name="constanttotalmen" id="constanttotalmen" value="{{$FactoryInspectionInform->constanttotalmen}}"/></td>
                        <td><input  type="text" value=0 name="constanttotalwomen" id="constanttotalwomen" value="{{$FactoryInspectionInform->constanttotalwomen}}"/></td>
                    </tr>
                </table>
            </div>
        </div>
        </p> --}}

        <p>
                <span>အလုပ်သမားအင်အား</span>
                <div class='row'>
                <div class="col-sm-12">
                    <table style="width:100%">
                        <tr>
                            <td rowspan="2">ဝင်ငွေအမျိုးအစား</td>
                            <td colspan="2">လူကြီး (၁၈နှစ်အထက်)</td>
                            <td colspan="2">လူရွယ်(၁၆နှစ်မှ ၁၈နှစ်)</td>
                            <td colspan="2">ကလေး(၁၆နှစ်မှ၁၈နှစ်)</td>
                            {{-- <td colspan="2">စုစုပေါင်း</td> --}}
                        </tr>
                        <tr>
                            <td>ကျား</td>
                            <td>မ</td>
                            <td>ကျား</td>
                            <td>မ</td>
                            <td>ကျား</td>
                            <td>မ</td>
                            {{-- <td>ကျား</td>
                            <td>မ</td> --}}
                        </tr>
                        <tr>
                            <td>လစား</td>
                            <td><input  type="text" name="Mmenworker" id="menworker" value="{{$FactoryInspectionInform->Mmenworker}}"  onkeyup="converunistring('man')"/></td>
                            <td><input  type="text" name="Mwomenworker" id="womenworker" value="{{$FactoryInspectionInform->Mwomenworker}}" onkeyup="converunistring('women')"/></td>
                            <td><input  type="text" name="MAmaleworker" id="amenworker" value="{{$FactoryInspectionInform->MAmaleworker}}"  onkeyup="converunistring('amen')"/></td>
                            <td><input  type="text" name="MAfemaleworker" id="awomenworker" value="{{$FactoryInspectionInform->MAfemaleworker}}" onkeyup="converunistring('awomen')"/></td>
                            <td><input  type="text" name="Cmenworker" id="cmenworker" value="{{$FactoryInspectionInform->Cmenworker}}"  onkeyup="converunistring('cman')"/></td>
                            <td><input  type="text" name="Cwomenworker" id="cwomenworker" value="{{$FactoryInspectionInform->Cwomenworker}}" onkeyup="converunistring('cwomen')"/></td>
                            {{-- <td><input  type="text" name="totalmen" id="totalmen" value=0 /></td>
                            <td><input  type="text" name="totalwomen" id="totalwomen" value=0 /></td> --}}
                        </tr>
                        <tr>
                            <td>နေ့စား</td>
                            <td><input  type="text" value="{{$FactoryInspectionInform->Dmenworker}}" name="Dmenworker" id="dailymenworker" onkeyup="converunistring('man')"/></td>
                            <td><input  type="text" value="{{$FactoryInspectionInform->Dwomenworker}}" name="Dwomenworker" id="dailywomenworker" onkeyup="converunistring('women')"/></td>
                            <td><input  type="text" value="{{$FactoryInspectionInform->DAmaleworker}}" name="DAmaleworker" id="dailyamenworker" onkeyup="converunistring('amen')"/></td>
                            <td><input  type="text" value="{{$FactoryInspectionInform->DAfemaleworker}}" name="DAfemaleworker" id="dailyawomenworker" onkeyup="converunistring('awomen')"/></td>
                            <td><input  type="text" value="{{$FactoryInspectionInform->DCmaleworker}}" name="DCmaleworker" id="dailycmenworker" onkeyup="converunistring('cman')"/></td>
                            <td><input  type="text" value="{{$FactoryInspectionInform->DCfemaleworker}}" name="DCfemaleworker" id="dailycwomenworker" onkeyup="converunistring('cwomen')"/></td>
                            {{-- <td><input  type="text" value=0 name="dailytotalmen" id="dailytotalmen" /></td>
                            <td><input  type="text" value=0 name="dailytotalwomen" id="dailytotalwomen" /></td> --}}
                        </tr>
                        <tr>
                            <td>ပုတ်ပြတ်</td>
                            <td><input  type="text" value="{{$FactoryInspectionInform->Pmenworker}}" name="Pmenworker" id='piecemenworker' onkeyup="converunistring('man')"/></td>
                            <td><input  type="text" value="{{$FactoryInspectionInform->Pwomenworker}}" name="Pwomenworker" id="piecewomenworker" onkeyup="converunistring('women')"/></td>
                            <td><input  type="text" value="{{$FactoryInspectionInform->PAmaleworker}}" name="PAmaleworker" id="pieceamenworker" onkeyup="converunistring('amen')"/></td>
                            <td><input  type="text" value="{{$FactoryInspectionInform->PAfemaleworker}}" name="PAfemaleworker" id="pieceawomenworker" onkeyup="converunistring('awomen')"/></td>
                            <td><input  type="text" value="{{$FactoryInspectionInform->PCmaleworker}}" name="PCmaleworker" id="piececmenworker" onkeyup="converunistring('cman')"/></td>
                            <td><input  type="text" value="{{$FactoryInspectionInform->PCfemaleworker}}" name="PCfemaleworker" id="piececwomenworker" onkeyup="converunistring('cwomen')"/></td>
                            {{-- <td><input  type="text" value=0 name="piecetotalmen" id="piecetotalmen" /></td>
                            <td><input  type="text" value=0 name="piecetotalwomen" id="piecetotalwomen" /></td> --}}
                        </tr>
                        <tr>
                            <td>ပုံသေ</td>
                            <td><input  type="text" value="{{$FactoryInspectionInform->MCmaleworker}}" name="MCmaleworker" id='constantmenworker' onkeyup="converunistring('man')"/></td>
                            <td><input  type="text" value="{{$FactoryInspectionInform->MCfemaleworker}}" name="MCfemaleworker" id="constantwomenworker" onkeyup="converunistring('women')"/></td>
                            <td><input  type="text" value="{{$FactoryInspectionInform->CAmaleworker}}" name="CAmaleworker" id="constantamenworker" onkeyup="converunistring('amen')"/></td>
                            <td><input  type="text" value="{{$FactoryInspectionInform->CAfemaleworker}}" name="CAfemaleworker" id="constantawomenworker" onkeyup="converunistring('awomen')"/></td>
                            <td><input  type="text" value="{{$FactoryInspectionInform->CCmaleworker}}" name="CCmaleworker" id="constantcmenworker" onkeyup="converunistring('cman')"/></td>
                            <td><input  type="text" value="{{$FactoryInspectionInform->CCfemaleworker}}" name="CCfemaleworker" id="constantcwomenworker" onkeyup="converunistring('cwomen')"/></td>
                            {{-- <td><input  type="text" value=0 name="constanttotalmen" id="constanttotalmen" /></td>
                            <td><input  type="text" value=0 name="constanttotalwomen" id="constanttotalwomen" /></td> --}}
                        </tr>
                        <tr>
                            <td>စုစုပေါင်း</td>
                            <td><input  type="text" value=0 name="" id='totalman'/></td>
                            <td><input  type="text" value=0 name="" id="totalWomen" /></td>
                            <td><input  type="text" value=0 name="" id="totalaman" /></td>
                            <td><input  type="text" value=0 name="" id="totalawomen" /></td>
                            <td><input  type="text" value=0 name="" id="totalcman" /></td>
                            <td><input  type="text" value=0 name="" id="totalcwomen" /></td>
                            {{-- <td><input  type="text" value=0 name="constanttotalmen" id="constanttotalmen" /></td>
                            <td><input  type="text" value=0 name="constanttotalwomen" id="constanttotalwomen" /></td> --}}
                        </tr>
                    </table>
                </div>
            </div>
            </p>
            {{-- for store total in database --}}
            <input type="hidden" id="total_man" name="totalMaleWorker">
            <input type="hidden" id="total_women" name="totalFemaleWorker">

        <p>
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="manufacturingtype"> စစ်ဆေးရေးအရာရှိအမည် -</label>
                        </div>
                        <div class="col-sm-7">
                           <input name="inspection_name" id="inspection_name" value="{{$FactoryInspectionInform->inspection_name}}"> 
                            <input type="hidden" name="inspectionid" id="NameofinspectorId" value="{{Auth::user()->id}}" >
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="manufacturingtype"> စစ်ဆေးသူအရာရှိ ရာထူး -</label>
                        </div>
                        <div class="col-sm-7">
                             <input name="inspectorrank" id="inspectorrank" value="{{$FactoryInspectionInform->inspectorrank}}"> 
                        </div>
                    </div>
                </div>
            </div>
        </p>

          <div style="overflow:auto;">
            <div style="float:right;">
              <button type="submit" id="Save" >သိမ်းဆည်းမည်</button>
            </div>
        </div>
      
</form>
<!-- scroll back to top of the page -->
<a id="back2Top" title="Back to top" href="#">&#10148;</a>


 <script>


    //for tempoary save
    $('#tempoarySave').click(function(){
	    $("#tempoary").val('tempoary');
	document.getElementById("inspectform").submit();
});


//sum total worker
//for  man sum

function converunistring(type){
	if(type=='man'){
		var num1=document.getElementById("menworker").value;
		var num2=document.getElementById('dailymenworker').value;
		var num3=document.getElementById('piecemenworker').value;
		var num4=document.getElementById('constantmenworker').value;
	}else if(type=='women'){
        var num1=document.getElementById("womenworker").value;
		var num2=document.getElementById('dailywomenworker').value;
		var num3=document.getElementById('piecewomenworker').value;
		var num4=document.getElementById('constantwomenworker').value;
	}else if(type=='amen'){
		
        var num1=document.getElementById("amenworker").value;
		var num2=document.getElementById('dailyamenworker').value;
		var num3=document.getElementById('pieceamenworker').value;
		var num4=document.getElementById('constantamenworker').value;
	}else if(type=='awomen'){
		var num1=document.getElementById("awomenworker").value;
		var num2=document.getElementById('dailyawomenworker').value;
		var num3=document.getElementById('pieceawomenworker').value;
		var num4=document.getElementById('constantawomenworker').value;
	}else if(type=='cman'){
		var num1=document.getElementById("cmenworker").value;
		var num2=document.getElementById('dailycmenworker').value;
		var num3=document.getElementById('piececmenworker').value;
		var num4=document.getElementById('constantcmenworker').value;
	}else if(type=='cwomen'){
		var num1=document.getElementById("cwomenworker").value;
		var num2=document.getElementById('dailycwomenworker').value;
		var num3=document.getElementById('piececwomenworker').value;
		var num4=document.getElementById('constantcwomenworker').value;
	}
		///for sum total man and total women
		var man1=document.getElementById("totalman").value;
		var man2=document.getElementById('totalaman').value;
		var man3=document.getElementById('totalcman').value;
		var woman1=document.getElementById("totalWomen").value;
		var woman2=document.getElementById('totalawomen').value;
		var woman3=document.getElementById('totalcwomen').value;

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
var mynum4 = num4.replace(/[၀၁၂၃၄၅၆၇၈၉]/g, function(s) {
	return englishDigits[s];
});
var num5=parseInt(mynum1)+parseInt(mynum2)+parseInt(mynum3)+parseInt(mynum4);
var num6=num5.toString();
var sum=num6.replace(/[0123456789]/g,function(s){
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

    var num4=parseInt(mynum1)+parseInt(mynum2)+parseInt(mynum3)+parseInt(mynum4);
    ///sum man
    var man=parseInt(myman1)+parseInt(myman2)+parseInt(myman3);
    var totalman = man.toString();
    var summan=totalman.replace(/[0123456789]/g,function(s){
        return myanDigits[s];
    });
    $('#total_man').val(summan);

    var woman=parseInt(mywomen1)+parseInt(mywomen2)+parseInt(mywomen3);
    var totalwoman = woman.toString();
    var sumwoman=totalwoman.replace(/[0123456789]/g,function(s){
        return myanDigits[s];
    });
    $('#total_women').val(sumwoman);

}

//end


  </script>
@endsection