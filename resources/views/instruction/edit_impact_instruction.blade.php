@extends('layouts.admin')
@section('content')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

 
<form method="post" action="{{route('Edit-ImpactInstruction-Save',$ins->id)}}">
    @csrf
 <p>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="pull-left">
                    <h2>ပြည်ထောင်စုသမ္မတမြန်မာနိုင်ငံတော်</h2>
                    <h3>အလုပ်သမား၊အလုပ်အကိုင်နှင့် လူမှုဖူလုံရေးဝန်ကြီးဌာန</h3>
                    <h4>အလုပ်ရုံနှင့်အလုပ်သမားဥပဒေစစ်ဆေးရေးဦးစီးဌာန</h4>
                </div>
                
            </div>
        </div>
    </p>
  <p>
        <div class="row">
         
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-6">
                    <label for="EmailAdd">ရည်ညွှန်းစာအမှတ်</label>
                  </div>
                  <div class="col-sm-6">
                  <input  name="refdoc" id="refdoc" value="{{$ins->refdoc}}">
                  </div>
                </div>               
                
              </div>
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-6 text-right"><label for="EmailAdd">စာအမှတ် <span style="color:red">*</span></label></div>
                  <div class="col-sm-6">
                     <input  name="docmentno" id="docmentno" class="form-control" value="{{$ins->docmentno}}" required>
					 <span style="color:red">
						@if ($errors->has('docmentno'))
                            <strong>{{ $errors->first('docmentno') }}</strong>
                                   
                        @endif
					 </span>
                  </div>
                </div>               
               
              </div>
            </div>
    </p>
    <div class="row">
          <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-6">
                <label for="EmailAdd">ရက်စွဲ</label>
              </div>
              <div class="col-sm-6">
                <input  name="create_date" value="{{$ins->create_date}}" readonly>
              </div>
              
            </div>
            
              
          </div>
        </div>

  <p>
        <div class="row">
          
          <div class="col-sm-3">
            <label for="EmailAdd">အကြောင်းအရာ <span style="color:red">*</span></label>
            
          </div>
          <div class="col-sm-9">
            <textarea name="instructiontitle" id="instructiontitle"  rows="3" class="col-sm-12" required> {{$ins->instructiontitle}}</textarea>
            {{-- <input  name="brief" id="brief"> --}}<span style="color:red">@if ($errors->has('instructiontitle'))
                            <strong>{{ $errors->first('instructiontitle') }}</strong>
                                   
                        @endif</span>
          </div>
        </div>
  </p>
  <p>
     <div class="row">
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6">
              <label>@if($ins->factory_type==1)စက်ရုံ/အလုပ်ရုံအမည် @else ဆိုင်/အလုပ်ဌာနအမည် @endif</label>
            </div>
            <div class="col-sm-6">
              <input type="text"  name="name" id="name" value="{{$ins->name}}" required >
            </div>
          </div>            
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6 text-right">
              <label>စစ်ဆေးခဲ့သည့်နေ့စွဲ</label>
            </div>
            <div class="col-sm-6">
            <input type="text" id="inspected_date"  name="inspected_date" value="{{$ins->inspected_date}}" readonly>
            </div>
          </div>            
        </div>
      </div> 
  </p>  
   <p>
     <div class="row">
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6">
              <label>နောက်ဆုံးထားလုပ်ဆောင်ရမည့်ရက်စွဲ  <span style="color:red">* </span></label>
            </div>
            <div class="col-sm-6">
            <input type="date"  name="lastdodate" required value="{{$ins->lastdodate}}" >
              <span style="color:red">
					@if ($errors->has('lastdodate'))
                        <strong>{{ $errors->first('lastdodate') }}</strong>
                                   
                    @endif
			  </span>
            </div>
          </div>            
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6 text-right">
              <label>အကြောင်းကြားရန်ဌာန </label>
            </div>
            <div class="col-sm-6">
              <!-- to validate department -->
              <input type="text" id="instrutiondep" value="{{$ins->instructiondep}}" name="instructiondep" readonly >
            </div>
          </div>            
        </div>
      </div> 
  </p> 
  <p>
     <div class="row">
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6">
              <label>အကြောင်းကြားရမည့်ရက်စွဲ <span style="color:red">* </span></label>
            </div>
            <div class="col-sm-6">
            <input type="date"  name="instructiondate" value="{{$ins->instructiondate}}" required>
              <span style="color:red">@if ($errors->has('instructiondate'))
                                   
                                        <strong>{{ $errors->first('instructiondate') }}</strong>
                                   
                                @endif</span>
            </div>
          </div>            
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6 text-right">
              <label>ဖိုင်အမျိုးအစား</label>
            </div>
            <div class="col-sm-6">
              <select name="documenttype" class="form-control">
                <option value="သာမန်" @if($ins->documenttype=='သာမန်') selected @endif>သာမန်</option>
                <option value="လျှို့ဝှက်စာ" @if($ins->documenttype=='လျှို့ဝှက်စာ') selected @endif>လျှို့ဝှက်စာ</option>
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
            <div class="col-sm-6">
              <label>စစ်ဆေးသူအမည် <span style="color:red">* </span></label>
            </div>
            <div class="col-sm-6">
              <input type="text"  name="instructor" value="{{$ins->instructor}}" required >
              
            </div>
          </div>            
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6 text-right">
              <label>စစ်ဆေးသူရာထူး <span style="color:red">* </span></label>
            </div>
            <div class="col-sm-6">
              <select name="instructor_rank" class="form-control">
                <option value="လက်ထောက်ညွှန်ကြားရေးမှူး" @if($ins->instructorrank=='လက်ထောက်ညွှန်ကြားရေးမှူး') selected @endif>လက်ထောက်ညွှန်ကြားရေးမှူး</option>
                <option value="ဦးစီးအရာရှိ(ဥပဒေ)" @if($ins->instructorrank=='ဦးစီးအရာရှိ(ဥပဒေ)') selected @endif>ဦးစီးအရာရှိ(ဥပဒေ)</option>
                <option value="ဦးစီးအရာရှိ(အလုပ်ရုံ)" @if($ins->instructorrank=='ဦးစီးအရာရှိ(အလုပ်ရုံ)') selected @endif>ဦးစီးအရာရှိ(အလုပ်ရုံ)</option>
              </select>
            </div>
          </div>            
        </div>
      </div> 
  </p>   
 
    <div class="row">
      <div class="col-sm-12 text-center">
        <label for="ContactFax"><b>ပြုပြင်လိုက်နာဆောင်ရွက်ရန် အချက်များ</b></label>
      </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <textarea  name="instruction1" class="col-sm-12" rows="4" placeholder="ပြုပြင်ဆောင်ရွက်ရန် (က)" required>{{$ins->instruction1}}</textarea>
        </div>

        <div class="col-sm-12">
                <textarea  name="instruction2" class="col-sm-12" rows="4" placeholder="ပြုပြင်ဆောင်ရွက်ရန် (ခ)">{{$ins->instruction2}}</textarea>
        </div>

        <div class="col-sm-12">
                <textarea  name="instruction3" class="col-sm-12" rows="4" placeholder="ပြုပြင်ဆောင်ရွက်ရန် (ဂ)">{{$ins->instruction3}}</textarea>
        </div>
        <div class="col-sm-12">
                <textarea  name="instruction4" class="col-sm-12" rows="4" placeholder="ပြုပြင်ဆောင်ရွက်ရန် (က)">{{$ins->instruction4}}</textarea>
        </div>
        <div class="col-sm-12">
                <textarea  name="instruction5" class="col-sm-12" rows="4" placeholder="ပြုပြင်ဆောင်ရွက်ရန် (င)">{{$ins->instruction5}}</textarea>
        </div>
    </div>
    
    
  <p>
    <div class="col-sm-3 float-right">
    <input type="submit" class="btn-primary"value="ညွှန်ကြားချက်ပြင်မည်"/>
  </div>
  </p>

 
</form>


@endsection