@extends('layouts.admin')
@section('content')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

 
<form method="post" action="{{url('InstructionImpactSave')}}">
  {{csrf_field()}}

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
                  <input  name="refdoc" id="refdoc" value="{{old('refdoc')}}">
                  </div>
                </div>               
                
              </div>
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-6 text-right"><label for="EmailAdd">စာအမှတ် <span style="color:red">*</span></label></div>
                  <div class="col-sm-6">
                     <input  name="docmentno" id="docmentno" class="form-control" value="{{old('docmentno')}}" required>
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
                <input  name="create_date" value="{{Carbon\Carbon::now()->toDateString()}}" required>
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
            <textarea name="instructiontitle" id="instructiontitle"  rows="3" class="col-sm-12" required> {{old('instructiontitle')}}</textarea>
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
              <label>@if($factorytype==1)စက်ရုံ/အလုပ်ရုံအမည် @else ဆိုင်/အလုပ်ဌာနအမည် @endif</label>
            </div>
            <div class="col-sm-6">
              <input type="text"  name="name" id="name" value="{{$affected_information->FactoryName}}" required >
            </div>
          </div>            
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6 text-right">
              <label>စစ်ဆေးခဲ့သည့်နေ့စွဲ</label>
            </div>
            <div class="col-sm-6">
            <input type="text" id="inspected_date"  name="inspected_date" value="{{$impact->inspectiondate}}" required>
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
              <input type="date" value="" name="lastdodate" required >
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
            
              @if($roleid==1 || $roleid==2)
              <input type="text" id="instrutiondep" value="{{$department}}" name="instructiondep" required >
              @elseif($roleid==3||$roleid==4)
              <input type="text" id="instrutiondep" value="{{$department->region_name}}" name="instructiondep" required >
              @elseif($roleid==5||$roleid==6)
              <input type="text" id="instrutiondep" value="{{$department->district_name}}" name="instructiondep" required >
               @elseif($roleid==7||$roleid==8)
              <input type="text" id="instrutiondep" value="{{$department->township_name}}" name="instructiondep" required >
              @endif
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
            <input type="date"  name="instructiondate" value="{{old('instructiondate')}}" required>
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
                <option value="သာမန်" @if(old('documenttype')=='သာမန်') selected @endif>သာမန်</option>
                <option value="လျှို့ဝှက်စာ" @if(old('documenttype')=='လျှို့ဝှက်စာ') selected @endif>လျှို့ဝှက်စာ</option>
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
              <input type="text"  name="instructor" value="{{old('instructor')}}" required >
              
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
                <option value="လက်ထောက်ညွှန်ကြားရေးမှူး" @if(old('instructorrank')=='လက်ထောက်ညွှန်ကြားရေးမှူး') selected @endif>လက်ထောက်ညွှန်ကြားရေးမှူး</option>
                <option value="ဦးစီးအရာရှိ(ဥပဒေ)" @if(old('instructorrank')=='ဦးစီးအရာရှိ(ဥပဒေ)') selected @endif>ဦးစီးအရာရှိ(ဥပဒေ)</option>
                <option value="ဦးစီးအရာရှိ(အလုပ်ရုံ)" @if(old('instructorrank')=='ဦးစီးအရာရှိ(အလုပ်ရုံ)') selected @endif>ဦးစီးအရာရှိ(အလုပ်ရုံ)</option>
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
            <textarea  name="instruction1" class="col-sm-12" rows="4" placeholder="ပြုပြင်ဆောင်ရွက်ရန် (က)" required>{{old('instruction1')}}</textarea>
        </div>

        <div class="col-sm-12">
                <textarea  name="instruction2" class="col-sm-12" rows="4" placeholder="ပြုပြင်ဆောင်ရွက်ရန် (ခ)">{{old('instruction2')}}</textarea>
        </div>

        <div class="col-sm-12">
                <textarea  name="instruction3" class="col-sm-12" rows="4" placeholder="ပြုပြင်ဆောင်ရွက်ရန် (ဂ)">{{old('instruction3')}}</textarea>
        </div>
        <div class="col-sm-12">
                <textarea  name="instruction4" class="col-sm-12" rows="4" placeholder="ပြုပြင်ဆောင်ရွက်ရန် (က)">{{old('instruction4')}}</textarea>
        </div>
        <div class="col-sm-12">
                <textarea  name="instruction5" class="col-sm-12" rows="4" placeholder="ပြုပြင်ဆောင်ရွက်ရန် (င)">{{old('instruction5')}}</textarea>
        </div>
    </div>
    {{-- <div class="row">
      <div class="col-sm-6 text-center">
        <label>ညွှန်ကြားချက် အမျိုးအစား</label>
      </div>
      <div class="col-sm-6 text-center">
        <select name="instructiontype" id="instructiontype" class="form-control">
          <option value="1" @if(old('instructiontype')=='1') @endif>အလုပ်သမားဥပဒေစစ်ဆေးရေး</option>
          <option value="2" @if(old('instructiontype')=='2') @endif>အလုပ်ရုံစစ်ဆေးရေး</option>
        </select>
      </div>
    </div> <br> --}}
    {{-- <div id="GI">
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">ခွင့်ပိတ်</label></div>
      <div class="col-sm-8">
      <textarea  name="aleavedesc" class="col-sm-12" rows="4">{{old('aleavedesc')}}</textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="aleaveno" value="0"></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">လုပ်ခ/လစာ</label></div>
      <div class="col-sm-8">
        <textarea  name="awagedesc" class="col-sm-12" rows="4">{{old('awagedesc')}}</textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="awageno" value="0"></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">မှတ်တမ်း</label></div>
      <div class="col-sm-8">
        <textarea  name="anotedesc" class="col-sm-12" rows="4">{{old('anotedesc')}}</textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="anoteno" value="0"></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">အလုပ်ချိန်</label></div>
      <div class="col-sm-8">
        <textarea  name="aworktimedesc" class="col-sm-12" rows="4">{{old('aworktimedesc')}}</textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="aworktimeno" value="0"></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">အခြား</label></div>
      <div class="col-sm-8">
        <textarea  name="aotherdesc" class="col-sm-12" rows="4">{{old('aotherdesc')}}</textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="aotherno" value="0"></div>
      </div>
          
    </div>
    <div id="IF">
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">ဘေးကင်း</label></div>
      <div class="col-sm-8">
        <textarea  name="fsafetydesc" class="col-sm-12" rows="4">{{old('fsafetydesc')}}</textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="fsafetyno" value="0"></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">
ကျန်းမာ</label></div>
      <div class="col-sm-8">
        <textarea  name="fhealthdesc" class="col-sm-12" rows="4">{{old('fhealthdesc')}}</textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="fhealthno" value="0"></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">သက်သာ</label></div>
      <div class="col-sm-8">
        <textarea  name="fwelfaredesc" class="col-sm-12" rows="4">{{old('fwelfaredesc')}}</textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="fwelfareno" value="0"></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">မှတ်တမ်း</label></div>
      <div class="col-sm-8">
        <textarea  name="fnotedesc" class="col-sm-12" rows="4">{{old('fnotedesc')}}</textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="fnoteno" value="0"></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">အခြား</label></div>
      <div class="col-sm-8">
        <textarea  name="fotherdesc" class="col-sm-12" rows="4">{{old('fotherdesc')}}</textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="fotherno" value="0"></div>
      </div>
          
    </div> --}}
    
   
     
   
 
  <p>
    <input type="hidden" value="{{$affected_information->FactoryID}}" id="factoryid" name="factory_id"/>
    <input type="hidden" value="{{$id}}" name="case_id"/>
    <input type="hidden" value="{{$factory->township_id}}" id="township" name="township_id"/>
    <input type="hidden" value="{{$factory->district_id}}" id="district"name="district_id"/>
    <input type="hidden" value="{{$roleid}}" name="role_id"/>
    <input type="hidden" value="{{$factorytype}}" name="factory_type"/>

  </p>
  <p>
    <div class="col-sm-3 float-right">
    <input type="submit" class="btn-primary"value="ညွှန်ကြားချက်ထုတ်ရန်"/>
  </div>
  </p>

 
</form>


@endsection