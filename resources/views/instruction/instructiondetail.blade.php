@extends('layouts.admin')
@section('content')
<script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>


<script type="text/javascript">
    function EnableDisableTextBox(btnPassport) {
        var refdoc = document.testform.refdoc;
        var docno = document.testform.docno;
        var insdate = document.testform.insdate;
        var brief = document.testform.brief;
        var factoryname = document.testform.factoryname;
        var inspecteddate = document.testform.inspecteddate;
        var lastdate = document.testform.lastdate;
        var instructiondep = document.testform.instructiondep;
        var informdate = document.testform.informdate;
        var docutype = document.testform.docutype;
        var instructions = document.testform.instructions;
        var instructor=document.testform.instructor;
        var instructorrank=document.testform.instructorrank;
        var inspectiontype_id=document.testform.inspectiontype_id;
        var aleavedesc=document.testform.aleavedesc;
        var aleaveno=document.testform.aleaveno;
        var awagedesc=document.testform.awagedesc;
        var awageno=document.testform.awageno;
        var anotedesc=document.testform.anotedesc;
        var anoteno=document.testform.anoteno;
        var aworktimedesc=document.testform.aworktimedesc;
        var aworktimeno=document.testform.aworktimeno;
        var aotherdesc=document.testform.aotherdesc;
        var aotherno=document.testform.aotherno;

        var generatepdf=document.testform.generatepdf;

          if (btnPassport.value == "ပြင်မည်") {
            refdoc.removeAttribute("disabled");
            docno.removeAttribute("disabled");
            insdate.removeAttribute("disabled");
            brief.removeAttribute("disabled");
            factoryname.removeAttribute("disabled");
            inspecteddate.removeAttribute("disabled");
            lastdate.removeAttribute("disabled");
            instructiondep.removeAttribute("disabled");
            informdate.removeAttribute("disabled");
            docutype.removeAttribute("disabled");
            instructions.removeAttribute("disabled");
            instructor.removeAttribute("disabled");
            instructorrank.removeAttribute("disabled");
            inspectiontype_id.removeAttribute("disabled");
            aleavedesc.removeAttribute("disabled");
            aleaveno.removeAttribute("disabled");
            awagedesc.removeAttribute("disabled");
            awageno.removeAttribute("disabled");
            anotedesc.removeAttribute("disabled");
            anoteno.removeAttribute("disabled");
            aworktimedesc.removeAttribute("disabled");
            aworktimeno.removeAttribute("disabled");
            aotherdesc.removeAttribute("disabled");
            aotherno.removeAttribute("disabled");
            generatepdf.setAttribute("disabled","disabled");

        }
    }
</script>

 @if(session()->get('success'))
 <div class="alert alert-success alert-dismissible fade show" role="alert">
     <span class="alert-inner--icon"></span>
     <span class="alert-inner--text">  {{ session()->get('success') }}  </span>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
     </button>
 </div>
@endif

<form method="post" name="testform" action="{{url('instructionupdate')}}">
    @foreach($instructionview as $ins)
       {{csrf_field()}}
  <p>
        <div class="row">
          
          <div class="col-sm-6 text-center">
            <div class="row">
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-6">
                    <label for="EmailAdd">ရည်ညွှန်းစာအမှတ်</label>
                  </div>
                  <div class="col-sm-6">
                    <input  name="refdoc" value="{{$ins->refdoc}}" disabled = "disabled">
                  </div>
                </div>               
                
              </div>
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-6"><label for="EmailAdd">စာအမှတ်</label></div>
                  <div class="col-sm-6">
                     <input  name="docno" value="{{$ins->docmentno}}"disabled = "disabled">
                  </div>
                </div>               
               
              </div>
            </div>
            
          </div>
          <div class="col-sm-6 text-center">
            <div class="row">
              <div class="col-sm-6">
                <label for="EmailAdd">ရက်စွဲ</label>
              </div>
              <div class="col-sm-6">
                <input  name="insdate" value="{{$ins->create_date}}" disabled = "disabled">
              </div>
              
            </div>
            
              
          </div>
        </div>
  </p>
  <p>
        <div class="row">
          
          <div class="col-sm-3">
            <label for="EmailAdd">အကြောင်းအရာ</label>
            
          </div>
          <div class="col-sm-9">
            
            <input  name="brief" value="{{$ins->instructiontitle}}" disabled = "disabled">
          </div>
        </div>
  </p>
  <p>
     <div class="row">
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6">
              <label>စက်ရုံ/အလုပ်ရုံအမည်</label>
            </div>
            <div class="col-sm-6">
              <input type="text" value="{{$ins->factoryname}}" name="factoryname" id="factoryname" disabled = "disabled">
            </div>
          </div>            
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6">
              <label>စစ်ဆေးခဲ့သည့်နေ့စွဲ</label>
            </div>
            <div class="col-sm-6">
              <input type="text" id="inspecteddate" value="{{$ins->inspected_date}}" name="inspecteddate" disabled = "disabled" >
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
              <label>နောက်ဆုံးထားလုပ်ဆောင်ရမည့်ရက်စွဲ</label>
            </div>
            <div class="col-sm-6">
              <input type="date" value="{{$ins->lastdodate}}" name="lastdate" disabled = "disabled" >
              
            </div>
          </div>            
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6">
              <label>အကြောင်းကြားရန်ဌာန </label>
            </div>
            <div class="col-sm-6">
              <input type="text"  value="{{$ins->instructiondep}}" name="instructiondep" disabled = "disabled" >
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
              <label>အကြောင်းကြားရမည့်ရက်စွဲ</label>
            </div>
            <div class="col-sm-6">
              <input type="date" value="{{$ins->instructiondate}}" name="informdate" disabled = "disabled" >
              
            </div>
          </div>            
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6">
              <label>ဖိုင်အမျိုးအစား</label>
            </div>
            <div class="col-sm-6">
              <select name="docutype" class="form-control"  disabled = "disabled">
                <option value="သာမန်" {{$ins->documenttype=='သာမန်'?'selected':''}}>သာမန်</option>
                <option value="လျှို့ဝှက်စာ" {{$ins->documenttype=='လျှို့ဝှက်စာ'?'selected':''}}>လျှို့ဝှက်စာ</option>
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
              <label>စစ်ဆေးသူအမည် </label>
            </div>
            <div class="col-sm-6">
              <input type="text" value="{{$ins->instructor}}" name="instructor" id="instructor">
              
            </div>
          </div>            
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6 text-right">
              <label>စစ်ဆေးသူရာထူး</label>
            </div>
            <div class="col-sm-6">
              <input type="text" id="instructorrank" name="instructorrank" value="{{$ins->instructor_rank}}">
            
            </div>
          </div>            
        </div>
      </div> 
  </p>     
 
    <div class="row">
      <div class="col-sm-12 text-center">
        <label for="ContactFax">ပြုပြင်လိုက်နာဆောင်ရွက်ရန် အချက်များ</label>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <label>ညွှန်ကြားချက် အမျိုးအစား</label>
      </div>
      <div class="col-sm-9">
        <input type="text" id="inspectiontype_id" value="@if($ins->inspectiontype_id==1) အလုပ်သမားဥပဒေစစ်ဆေးရေး @elseif($ins->inspectiontype_id==2) အလုပ်ရုံစစ်ဆေးရေး @endif" name="inspectiontype_id"/>
      
      </div>
      </div>
      <br/>
 @if($ins->inspectiontype_id==1)
  <div class="row">
       <div class="col-sm-3"><label for="ContactFax">ခွင့်ပိတ်</label></div>
      <div class="col-sm-8">
        <textarea  name="aleavedesc" id="aleavedesc" class="col-sm-12"  rows="4">{{$ins->a_leavedesc}}</textarea>
      </div>
      <div class="col-sm-1"><input type="text" id="aleaveno" name="aleaveno" value="{{$ins->a_leave}}" ></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">လုပ်ခ/လစာ</label></div>
      <div class="col-sm-8">
        <textarea  name="awagedesc" class="col-sm-12"  rows="4" id="awagedesc">{{$ins->a_wagedesc}}</textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="awageno" value="{{$ins->a_wages}}"  id="awageno"></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">မှတ်တမ်း</label></div>
      <div class="col-sm-8">
        <textarea  name="anotedesc" class="col-sm-12"  rows="4" id="anotedesc">{{$ins->a_notedesc}}</textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="anoteno" value="{{$ins->a_note}}"  id="anoteno"></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">အလုပ်ချိန်</label></div>
      <div class="col-sm-8">
        <textarea  name="aworktimedesc" id="aworktimedesc" class="col-sm-12"  rows="4">{{$ins->a_worktimedesc}}</textarea>
      </div>
      <div class="col-sm-1"><input type="text" id="aworktimeno" name="aworktimeno" value="{{$ins->a_worktime}}" ></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">အခြား</label></div>
      <div class="col-sm-8">
        <textarea  name="aotherdesc" id="aotherdesc" class="col-sm-12" rows="4" >{{$ins->a_otherdesc}}</textarea>
      </div>
      <div class="col-sm-1"><input type="text" id="aotherno" name="aotherno" value="{{$ins->a_other}}" ></div>
      </div>
  @elseif($ins->inspectiontype_id==2)
  <div class="row">
       <div class="col-sm-3"><label for="ContactFax">ဘေးကင်း</label></div>
      <div class="col-sm-8">
        <textarea  name="fsafetydesc" id="fsafetydesc" class="col-sm-12" rows="4" >{{$ins->f_safetydesc}}</textarea>
      </div>
      <div class="col-sm-1"><input type="text" id="fsafetyno" name="fsafetyno" value="{{$ins->f_safety}}" ></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">
ကျန်းမာ</label></div>
      <div class="col-sm-8">
        <textarea  name="fhealthdesc" class="col-sm-12"  rows="4" id="fhealthdesc">{{$ins->f_healthdesc}}</textarea>
      </div>
      <div class="col-sm-1"><input type="text" id="fhealthno" name="fhealthno" value="{{$ins->f_health}}" ></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">သက်သာ</label></div>
      <div class="col-sm-8">
        <textarea  name="fwelfaredesc" id="fwelfaredesc" class="col-sm-12" rows="4" >{{$ins->f_welfaredesc}}</textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="fwelfareno" id="fwelfareno" value="{{$ins->f_welfare}}" ></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">မှတ်တမ်း</label></div>
      <div class="col-sm-8">
        <textarea  name="fnotedesc" id="fnotedesc" class="col-sm-12" rows="4" >{{$ins->f_notedesc}}</textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="fnoteno" id="fnoteno" value="{{$ins->f_note}}" ></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">အခြား</label></div>
      <div class="col-sm-8">
        <textarea  name="fotherdesc" id="fotherdesc" class="col-sm-12" rows="4" >{{$ins->f_otherdesc}}</textarea>
      </div>
      <div class="col-sm-1"><input type="text" id="fotherno" name="fotherno" value="{{$ins->f_other}}" ></div>
      </div>

      @endif
  <p>
    <input type="hidden" value="{{$ins->factory_id}}" id="factoryid"name="factoryid"/>
    <input type="hidden" value="{{$ins->id}}" name="instructionid"/>
    <input type="hidden" value="{{$ins->case_id}}" name="caseid"/>
    <input type="hidden" value="{{$ins->role_id}}" name="roleid"/>
    <input type="hidden" value="{{$ins->township_id}}" name="townshipid"/>
    <input type="hidden" value="{{$ins->district_id}}" name="districtid"/>
    <input type="hidden" value="{{$ins->inspectiontype_id}}" name="instructiontype"/>
  </p>
  <p>
    <div class="col-sm-2 float-right">
  

      <input type="submit" class="btn-primary" value="သိမ်းမည်" />

  </div>
  <div class="col-sm-2 float-right">
    <input type="button" class="btn-primary" value="ပြင်မည်" onclick="EnableDisableTextBox(this)" />

   </div>
    
    <div class="col-sm-2 float-right">
    <a href="{{url('generateinstructionpdf/'.$ins->id)}}">
        <input type="button" class="btn-primary" value="ဖိုင်ထုတ်ရန်" name="generatepdf"></a>
  </div>

  </p><br>

 
</form>
     

    @endforeach


   
@endsection