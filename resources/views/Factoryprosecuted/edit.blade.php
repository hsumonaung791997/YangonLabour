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
<form action="{{route('Factoryprosecuted.update',$factoryProsecuted->id)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                @method('PUT')
        <h1>ရန်ကုန်တိုင်းဒေသကြီး<br>အလုပ်ရုံနှင့်အလုပ်သမားဥပဒေစစ်ဆေးရေးဦးစီးဌာန<br>တရားစွဲဆိုမှုလချုပ်စာရင်း</h1>
        <div class="container pt-5">
            
            @if($factoryProsecuted->chooseType == '1')
            <p>
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset class="scheduler-border">
				            <legend class="scheduler-border">စက်ရုံ၊ အလုပ်ရုံဆိုင်ရာအချက်အလက်များ</legend>
                            <p>	
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="Name">စက်ရုံ၊ အလုပ်ရုံအမည် </label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="text" name="Name" id="factory_Name" class="form-control" value="{{$factoryProsecuted->Name}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="IDno">စက်ရုံအမှတ် </label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="text" name="IDno" id="factory_IDno" class="form-control" value="{{$factoryProsecuted->IDno}}">
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
                                                <label for="Address">စက်ရုံလိပ်စာ </label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="text" name="Address" id="factory_Address" class="form-control" value="{{$factoryProsecuted->Address}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="Township">မြို့နယ်</label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="text" name="Township" id="factory_Township" class="form-control" value="{{$factoryProsecuted->Township}}">
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
                                                <label for="Zone">ဇုန် </label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="text" name="Zone" id="factory_Zone" class="form-control" value="{{$factoryProsecuted->Zone}}">
                                            </div>
                                        </div>
                                    </div>
                                    

                                </div>
                            </p>
                        </fieldset>
                    </div>
                </div>
            </p>
            @else
            <p>
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset class="scheduler-border">
				            <legend class="scheduler-border">ဆိုင်နှင့်အလုပ်ဌာန ဆိုင်ရာအချက်အလက်များ</legend>
                            <p>	
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="Name">ဆိုင် အမည် </label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="text" name="Name" id="shop_Name" class="form-control" value="{{$factoryProsecuted->Name}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="shop_IDno">ဆိုင်အမှတ် </label>
                                            </div>
                                            <div class="col-sm-7">
                            
                                                <input type="text" name="IDno" id="shop_IDno" class="form-control" value="{{$factoryProsecuted->IDno}}">
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
                                                <label for="Address">ဆိုင်လိပ်စာ </label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="text" name="Address" id="shop_Address" class="form-control" value="{{$factoryProsecuted->Address}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="Township">မြို့နယ်</label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="text" name="Township" id="shop_Township" class="form-control" value="{{$factoryProsecuted->Township}}">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </p>
                        </fieldset>
                    </div>
                </div>
            </p>
            
            @endif
            <p>
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset class="scheduler-border">
				            <legend class="scheduler-border">တရားစွဲဆိုခြင်းခံရသူ အချက်အလက်များ</legend>
                            <p>	
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="OwnerName">ပိုင်ရှင် အမည် </label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="text" name="OwnerName" id="OwnerName" class="form-control" value="{{$factoryProsecuted->OwnerName}}">
                                            </div>
                                        </div>
                                    </div>
                              
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="OwnerAddress">လိပ်စာ </label>
                                            </div>
                                            <div class="col-sm-7">
                                                <textarea name="OwnerAddress" id="OwnerAddress" class="form-control" >{{$factoryProsecuted->OwnerAddress}}</textarea>
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
                                                <label for="ManagerName">မန်နေဂျာ အမည် </label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="text" name="ManagerName" id="ManagerName" class="form-control" value="{{$factoryProsecuted->ManagerName}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="ManagerAddress">လိပ်စာ </label>
                                            </div>
                                            <div class="col-sm-7">
                                                <textarea name="ManagerAddress" id="ManagerAddress" class="form-control">{{$factoryProsecuted->ManagerAddress}}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </p>
                            
                        </fieldset>
                    </div>
                </div>
            </p>
            <p>
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset class="scheduler-border">
				            <legend class="scheduler-border">တရားလို အချက်အလက်များ</legend>
                            <p>	
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="PlaintiffName">တရားလို အမည် </label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="text" name="PlaintiffName" id="PlaintiffName" class="form-control" value="{{$factoryProsecuted->PlaintiffName}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="PlaintiffLvl">ရာထူး </label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="text" name="PlaintiffLvl" id="PlaintiffLvl" class="form-control" value="{{$factoryProsecuted->PlaintiffLvl}}">    
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
                                                <label for="PlaintiffTownship">မြို့နယ် </label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="text" name="PlaintiffTownship" id="PlaintiffTownship" class="form-control" value="{{$factoryProsecuted->PlaintiffTownship}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="PlaintiffZone">ဇုန် </label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="text" name="PlaintiffZone" id="PlaintiffZone" class="form-control" value="{{$factoryProsecuted->PlaintiffZone}}">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </p>
                            
                        </fieldset>
                    </div>
                </div>
            </p>
            <p>
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset class="scheduler-border">
				            <legend class="scheduler-border">တရားစွဲဆိုရသည့်အကြောင်းအရင်း</legend>
                            <p>	
                                <div class="row">
                                    <div class="col-sm-12">
                                        <textarea name="ProsecutedAbout" id="ProsecutedAbout" class="form-control">{{$factoryProsecuted->ProsecutedAbout}}</textarea>
                                    </div>
                                </div>
                            </p>
                            
                        </fieldset>
                    </div>
                </div>
            </p>
            <p>
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset class="scheduler-border">
				            <legend class="scheduler-border">ကျူးလွန်သောဥပဒေနှင့်စွဲဆိုသည့်ပုဒ်မ</legend>
                            <p>	
                                <div class="row">
                                    <div class="col-sm-12">
                                        <textarea name="ProsecutedLaw" id="ProsecutedLaw" class="form-control">{{$factoryProsecuted->ProsecutedLaw}}</textarea>
                                    </div>
                                </div>
                            </p>
                            
                        </fieldset>
                    </div>
                </div>
            </p>
            <p>
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset class="scheduler-border">
				            <legend class="scheduler-border">တရားရုံးတင်ခြင်း</legend>
                            <p>	
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="ProsecutedDay">ရုံးတင်တရားစွဲဆိုသည့်နေ့ </label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="date" name="ProsecutedDay" id="datepicker" class="form-control datepicker" value="{{$factoryProsecuted->ProsecutedDay}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="CourtName">တရားရုံးအမည် </label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="text" name="CourtName" id="CourtName" class="form-control" value="{{$factoryProsecuted->CourtName}}">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </p>
                            
                        </fieldset>
                    </div>
                </div>
            </p>
            <p>
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset class="scheduler-border">
				            <legend class="scheduler-border">အမိန့်ချခြင်း</legend>
                            <p>	
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="DecreeDay">အမိန့်ချမှတ်သောနေ့ </label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="date" name="DecreeDay" id="datepicker" class="form-control datepicker" value="{{$factoryProsecuted->DecreeDay}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="getDecreeDay">၎င်းအမိန့်ကိုရရှိသောနေ့ </label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="date" name="getDecreeDay" id="datepicker" class="form-control datepicker" value="{{$factoryProsecuted->getDecreeDay}}">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </p>
                            
                        </fieldset>
                    </div>
                </div>
            </p>
            <p>
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset class="scheduler-border">
                        <legend class="scheduler-border">အမှုတွဲ</legend>
                            <p>	
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-2 text-right">
                                                <label for="DecreeID">အမှုအမှတ်(ပြစ်မှုကြီး) </label>
                                            </div>
                                            <div class="col-sm-10">
                                                <textarea name="DecreeID" id="DecreeID" class="form-control">{{$factoryProsecuted->DecreeID}}</textarea>
                                            </div>
                                            
                                        </div>
                                    </div>
                                   
                                </div>
                            </p>
                            
                        </fieldset>
                    </div>
                </div>
            </p>
            <p>
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset class="scheduler-border">
                        <legend class="scheduler-border">အမှုနှင့်ပတ်သတ်၍အကျုံးဝင်သောအလုပ်သမားများခံစားခွင့်</legend>
                            <p>	
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="noOfemp">အလုပ်သမားဦးရေ </label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="text" name="noOfemp" id="noOfemp" class="form-control" value="{{$factoryProsecuted->noOfemp}}">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5 text-right">
                                                <label for="empGetmoney">အလုပ်သမားများရသင့်သည့်ငွေပေါင်း </label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="text" name="empGetmoney" id="empGetmoney" class="form-control" value="{{$factoryProsecuted->empGetmoney}}">
                                            </div>
                                            
                                        </div>
                                    </div>
                                   
                                </div>
                            </p>
                            
                        </fieldset>
                    </div>
                </div>
            </p>
            <p>
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset class="scheduler-border">
                        <legend class="scheduler-border">မပြီးပြတ်သေးသောအမှုအခြေအနေ နှင့် ချိန်းဆိုသည့်နေ့တွင်မည်သို့ဆောင်ရွက်သည်ကိုဖော်ပြရန်</legend>
                            <p>	
                                <div class="row">
                                    <div class="col-sm-12">
                                        <textarea name="DecreeAct" id="DecreeAct" class="form-control">{{$factoryProsecuted->DecreeAct}}</textarea>
                                    </div>
                                   
                                </div>
                            </p>
                            
                        </fieldset>
                    </div>
                </div>
            </p>
            <p>
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset class="scheduler-border">
				            <legend class="scheduler-border">စီရင်ချက်ချခြင်း</legend>
                            <p>	
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-6 text-right">
                                                <label for="judgmentDay">စီရင်ချက်ချမှတ်သောနေ့စွဲ</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="date" name="judgmentDay" id="datepicker" class="form-control datepicker" value="{{$factoryProsecuted->judgmentDay}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-3 text-right">
                                                <label for="judgment">စီရင်ချက် </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <textarea name="judgment" id="judgment" class="form-control">{{$factoryProsecuted->judgment}}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </p>
                            
                        </fieldset>
                    </div>
                </div>
            </p>
            <div style="overflow:auto;">
                <div style="float:right;">
                <button type="submit" id="SaveFactory" >Update</button>
                </div>
            </div>
            </form>
            
            
        
    
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script>
$(document).ready(function(){
    $('#chooseType').on('change', function() {
      if ( this.value == 'စက်ရုံ အလုပ်ရုံ')
      {
           $("#shop").hide();
        $("#factory").show();
      }
      else if( this.value == 'ဆိုင် နှင့်အလုပ်ဌာန')
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
@endsection