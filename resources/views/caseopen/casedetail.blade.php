@extends('layouts.admin')
@section('content')

<script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
<script>
   
   $(document).ready(function() {
     $("#show_hide").click(function () {
     $("#toggle_tst").toggle()
  });
  });
   </script>
<style>
#toggle_tst{
 display:none;
}
.accordion {
  background-color:#fff !important;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 50%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color:#ffff;
  overflow: hidden;
}
</style>




 @foreach($case as $c)
<table class="table table-bordered">
  <thead>
    <tr>
      
      <th colspan="4">ဆက်စပ်လျှက်ရှိသော စာရွက်စာတမ်းများ</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
   
      <td>စက်ရုံအလုပ်ရုံအမည်</td>
      <td>စစ်ဆေးချက်များ</td>
     
    </tr>
    <tr>

      <td>{{$c->FactoryName}}</td>

      <td>
       @if($c->documentId1!=null)
                {{$c->documentId1}}
            @endif
        <a href="{{url('storage/instruction/'.$c->documentId1)}}" class="btn  btn-info">ကြည့်ရန်</a>

          @if($c->documentId2!=null)
           {{$c->documentId2}}
            <a href="{{url('storage/instruction/'.$c->documentId2)}}" class="btn  btn-info">ကြည့်ရန်</a>
           @endif
      <br/>
          @if($c->documentId3!=null)

           {{$c->documentId3}}
            <a href="{{url('storage/instruction/'.$c->documentId3)}}" class="btn  btn-info">ကြည့်ရန်</a>
           @endif
           @if($c->documentId4!=null)
           {{$c->documentId4}}
            <a href="{{url('storage/instruction/'.$c->documentId4)}}" class="btn  btn-info">ကြည့်ရန်</a>
           @endif
        <br/>
           @if($c->documentId5!=null)
           {{$c->documentId5}}
            <a href="{{url('storage/instruction/'.$c->documentId5)}}" class="btn  btn-info">ကြည့်ရန်</a>
           @endif
           @if($c->documentId6!=null)
           {{$c->documentId6}}
            <a href="{{url('storage/instruction/'.$c->documentId6)}}" class="btn  btn-info">ကြည့်ရန်</a>
           @endif
          <br/>
           @if($c->documentId7!=null)
           {{$c->documentId7}}
            <a href="{{url('storage/instruction/'.$c->documentId7)}}" class="btn  btn-info">ကြည့်ရန်</a>
           @endif
           @if($c->documentId8!=null)
           {{$c->documentId8}}
            <a href="{{url('storage/instruction/'.$c->documentId8)}}" class="btn  btn-info">ကြည့်ရန်</a>
           @endif
        <br>
           @if($c->documentId9!=null)
           {{$c->documentId9}}
            <a href="{{url('storage/instruction/'.$c->documentId9)}}" class="btn  btn-info">ကြည့်ရန်</a>
           @endif

     </td>
      
    </tr>
  </tbody>
</table>

<button class="btn btn-primary" id="show_hide">ညွှန်ကြားချက်များ</button> 
   <div id="toggle_tst">
      <div class="card"> 
    @foreach($instpercase as $inst)
    
  <button style="margin-top:10px"class="accordion">{{$inst->instructiontitle}}<i class="fa fa-plus"></i></button>
<div class="panel">
  
</div>

 
    @endforeach
  </div>
</div>
   
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
@endforeach
@endsection