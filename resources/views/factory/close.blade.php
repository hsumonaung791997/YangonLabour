@extends('layouts.admin')
@section('content')
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>

    <h1>စက်ရုံ အလုပ်ရုံ ပိတ်သိမ်းခြင်း </h1>

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
    
    
<form  class="form-background" action="{{route('Close.Factory')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}

     <p>
        <div class="row">
            <div class="col-sm-4 text-right">
                <input type="hidden" value={{$factory->FactoryId}} name="factory_id">
                <label for="">စက်ရုံ အလုပ်ရုံအမည် - </label>
            </div>
            <div class="col-sm-8">
                    {{$factory->FactoryName}}
            </div>
        </div>
     </p>

     <p>
        <div class="row">
            <div class="col-sm-4 text-right">
                 <input type="hidden" value='{{$zone}} ၊ {{$factory->FactoryAddress}}' name="FactoryAddress">
                <label for="">စက်ရုံ အလုပ်ရုံ လိပ်စာ - </label>
            </div>
            <div class="col-sm-8">
                {{$zone}} ၊ {{$factory->FactoryAddress}}
            </div>
        </div>
         </p>

         <p>
             <input type="hidden" value={{$total}} name="totalWorker">
            <div class="row">
                <div class="col-sm-4 text-right">
                    <label for="">အလုပ်သမား စုစုပေါင်း- </label>
                </div>
                <div class="col-sm-8">
                        {{$total}}
                </div>
            </div>
         </p>

         <p>
            <div class="row">
                <div class="col-sm-4 text-right">
                    <label for="NoticeDate">အကြောင်းကြားပေးပို့သည့် ရက်စွဲ - </label>
                </div>
                <div class="col-sm-8">
                        <input type="date" name="NoticeDate" id="NoticeDate" class="col-sm-8">
                </div>
            </div>
         </p>

         <p>
            <div class="row">
                <div class="col-sm-4 text-right">
                    <label for="CloseDate">ပိတ်သိမ်းမည့် ရက်စွဲ - </label>
                </div>
                <div class="col-sm-8">
                        <input type="date" name="CloseDate" id="CloseDate" class="col-sm-8">
                </div>
            </div>
         </p>

         <p>
            <div class="row">
                <div class="col-sm-4 text-right">
                    <label for="DesCloseFactory">စက်ရုံ အလုပ်ရုံ ပိတ်သိမ်းရသည့် အကြောင်းရင်း - </label>
                </div>
                <div class="col-sm-8">
                    <textarea name="DesCloseFactory" id="DesCloseFactory"  rows="4" class="col-sm-8"></textarea>
                </div>
            </div>
         </p>

        <p>
            <div class="row">
                <div class="col-sm-4 text-right">
                    <label for="attachfile">အကြောင်းကြားစာ တင်ရန် - </label>
                </div>
                <div class="col-sm-8">
                    <input type="file" name="attachfile" id="attachfile" class="col-sm-8">
                </div>
            </div>
        </p>
        
         <p>
            <div class="row">
               <div class="col-sm-9 text-right">
                    <button type="submit" id="Save" >သိမ်းဆည်းမည်</button>
               </div>
            </div>
         </p>

    </form>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    @endsection