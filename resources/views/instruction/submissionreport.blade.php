@extends('layouts.admin')
@section('content')
<script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
   
    <p>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="pull-left">
                    <h2>အစီရင်ခံစာတင်ပြမှု</h2>
                </div>
                
            </div>
        </div>
    </p>
<form method="post">

{{csrf_field()}}

 @foreach($case as $c)


 <input type="hidden" name="caseid" value="{{$c->caseid}}"/>


<table class="table table-bordered">
  <thead>
    <tr>
      
      <th colspan="5">ဆက်စပ်လျှက်ရှိသော စာရွက်စာတမ်းများ</th>
      
    
    </tr>
  </thead>
  <tbody>
    <tr>
   <th>
   
      စက်ရုံအလုပ်ရုံအမည်/ဆိုင် / အလုပ်ဌာန အမည်  
   
    </th>      
   <th>စစ်ဆေးချက်များ</th>
    <th>ညွှန်ကြားချက်များ</th>
    <th>အစီရင်ခံတင်ပြချက်များ</th>
    <th>တင်ပြသူအမည်</th> 
    </tr>
    <tr>

      <td>
          {{$c->factoryname}}
      </td>

      <td>
       @if($c->documentId1!=null)
                {{-- {{$c->documentId1}} --}}
                <a href="{{url('storage/inspection/'.$c->documentId1)}}" class="badge badge-pill badge-info">စစ်ဆေးချက် ကြည့်ရန်</a> <br>
            @endif

          @if($c->documentId2!=null)
           {{-- {{$c->documentId2}} --}}
            <a href="{{url('storage/inspection/'.$c->documentId2)}}" class="badge badge-pill badge-info">စစ်ဆေးချက် ကြည့်ရန်</a> <br>
           @endif
      <br/>
          @if($c->documentId3!=null)

           {{-- {{$c->documentId3}} --}}
            <a href="{{url('storage/inspection/'.$c->documentId3)}}" class="badge badge-pill badge-info">စစ်ဆေးချက် ကြည့်ရန်</a> <br>
           @endif
           @if($c->documentId4!=null)
           {{-- {{$c->documentId4}} --}}
            <a href="{{url('storage/inspection/'.$c->documentId4)}}" class="badge badge-pill badge-info">စစ်ဆေးချက် ကြည့်ရန်</a> <br>
           @endif
        <br/>
           @if($c->documentId5!=null)
           {{$c->documentId5}}
            <a href="{{url('storage/inspection/'.$c->documentId5)}}" class="btn  btn-info">စစ်ဆေးချက် ကြည့်ရန်</a> <br>
           @endif
           @if($c->documentId6!=null)
           {{$c->documentId6}}
            <a href="{{url('storage/inspection/'.$c->documentId6)}}" class="btn  btn-info">စစ်ဆေးချက် ကြည့်ရန်</a> 
           @endif
          <br/>
           @if($c->documentId7!=null)
           {{$c->documentId7}}
            <a href="{{url('storage/inspection/'.$c->documentId7)}}" class="btn  btn-info">ကြည့်ရန်</a>
           @endif
           @if($c->documentId8!=null)
           {{$c->documentId8}}
            <a href="{{url('storage/inspection/'.$c->documentId8)}}" class="btn  btn-info">ကြည့်ရန်</a>
           @endif
        <br>
           @if($c->documentId9!=null)
           {{$c->documentId9}}
            <a href="{{url('storage/inspection/'.$c->documentId9)}}" class="btn  btn-info">ကြည့်ရန်</a>
           @endif

     </td>
     
    
       <td><a href="{{url('storage/instruction/'.$c->documentfileName)}}" class="badge badge-pill badge-info">ညွှန်ကြားချက်ဖိုင်ကြည့်မည်</a></td>
  
      
    
    <td>
      {{$c->reportinformation}}
    </td>
    <td>
      {{$c->name}}
    </td>
    
    </tr>
  </tbody>
</table>

@endforeach

{{ $case->links() }}
  
@endsection