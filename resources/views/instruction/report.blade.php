@extends('layouts.admin')
@section('content')
<script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
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

    <p>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="pull-left">
                    <h2>အစီရင်ခံစာတင်ပြမှု</h2>
                </div>
                
            </div>
        </div>
    </p>
  <form method="post" action="{{url('createreport/'.$id)}}">

{{csrf_field()}}


 @foreach($case as $c)


 <input type="hidden" name="caseid" value="{{$c->caseid}}"/>


<table class="table table-bordered">
  <thead>
    <tr>
      
      <th colspan="4">ဆက်စပ်လျှက်ရှိသော စာရွက်စာတမ်းများ</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
   
      <td>
          @if($factorytype==1)
           စက်ရုံအလုပ်ရုံအမည်
          @else
          ဆိုင်နှင့်အလုပ်ဌာနအမည်
          @endif
      </td>
      <td>စစ်ဆေးချက်များ</td>
     
    </tr>
    <tr>
    <input type="hidden" name="factorytype" value="{{$factorytype}}">
      <td>
        @if($factorytype==1)
        {{$c->FactoryName}}
        @else
        {{$c->shopname}}
        @endif
      </td>

      <td>
       @if($c->documentId1!=null)
                {{$c->documentId1}}
                <a href="{{url('storage/inspection/'.$c->documentId1)}}" class="badge badge-pill badge-info">ကြည့်ရန်</a> <br>
       @endif

          @if($c->documentId2!=null)
            {{$c->documentId2}}
            <a href="{{url('storage/inspection/'.$c->documentId2)}}" class="badge badge-pill badge-info">ကြည့်ရန်</a> <br>
           @endif

          @if($c->documentId3!=null)
            {{$c->documentId3}}
            <a href="{{url('storage/inspection/'.$c->documentId3)}}" class="badge badge-pill badge-info">ကြည့်ရန်</a> <br>
           @endif

           @if($c->documentId4!=null)
           {{$c->documentId4}}
            <a href="{{url('storage/instruction/'.$c->documentId4)}}" class="badge badge-pill badge-info">ကြည့်ရန်</a>
           @endif
        <br/>
           @if($c->documentId5!=null)
           {{$c->documentId5}}
            <a href="{{url('storage/instruction/'.$c->documentId5)}}" class="badge badge-pill badge-info">ကြည့်ရန်</a>
           @endif
           @if($c->documentId6!=null)
           {{$c->documentId6}}
            <a href="{{url('storage/instruction/'.$c->documentId6)}}" class="badge badge-pill badge-info">ကြည့်ရန်</a>
           @endif
          <br/>
           @if($c->documentId7!=null)
           {{$c->documentId7}}
            <a href="{{url('storage/instruction/'.$c->documentId7)}}" class="btn  btn-info">ကြည့်ရန်</a>
           @endif
           @if($c->documentId8!=null)
           {{$c->documentId8}}
            <a href="{{url('storage/instruction/'.$c->documentId8)}}" class="badge badge-pill badge-info">ကြည့်ရန်</a>
           @endif
        <br>
           @if($c->documentId9!=null)
           {{$c->documentId9}}
            <a href="{{url('storage/instruction/'.$c->documentId9)}}" class="badge badge-pill badge-info">ကြည့်ရန်</a>
           @endif

     </td>
      
    </tr>
  </tbody>
</table>
 @endforeach
 <br>
 <div class="row">
  <div class="col-sm-3 text-right"><label>အစီရင်ခံတင်ပြချက်များ</label></div>
   <div class="col-sm-9"><span style="color:red">*</span>
      <textarea class="col-sm-12" name="reportinformation" rows="4" required></textarea>
      
   </div>
 </div>
<div class="row">
    
    <div class="col-sm-12">
    <label>သို့</label> 
    </div>
   
 
   @foreach ($reportto as $report)  
  @if($report->role_id==2)
   
 <div class="col-sm-12">
    <div class="custom-control custom-checkbox mb-3">
       <input class="custom-control-input" id="minister" name="minister"type="checkbox" value="{{$report->id}}">
    <label class="custom-control-label" for="minister">နေပြည်တော် ဝန်ကြီးဌာန</label>
    </div>
  </div>
  @else
  <div class="col-sm-12">
    <div class="custom-control custom-checkbox mb-3">
       <input class="custom-control-input" id="regionad" name="region"type="checkbox" value="{{$report->id}}">
    <label class="custom-control-label" for="regionad">တိုင်းဒေသကြီးစစ်ဆေးရေးမှူး</label>
    </div>
  </div>
  @endif
  @endforeach


  
  
   
                     
</div>
  <br>
<div class="row">
    <div class="col-sm-12">
    <button type="submit" class="btn btn-lg btn-primary">တင်ပြအပ်ပါသည်</button>
    </div>
</div>

        
    </form>


@endsection