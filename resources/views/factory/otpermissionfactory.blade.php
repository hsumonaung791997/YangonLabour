@extends('layouts.admin')
@section('content')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script src="{{asset('assets/js/common.js')}}"></script>
      <style>
 
        form.search input[type=text] {
          border: 1px solid grey;
          float: left;
          width: 80%;
          background: #f1f1f1;
        }
        form.search button {
          float: left;
          width: 20%;
          background: #2196F3;
          color: white;
          border: 1px solid grey;
          border-left: none;
          cursor: pointer;
        }
     </style>
    @if(session()->get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-inner--icon"></span>
            <span class="alert-inner--text">  {{ session()->get('success') }}  </span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
  	@endif

    <p>
    	<div class="row">
	        <div class="col-lg-12 text-center">
	            <div class="pull-left">
                    <h1>အချိန်ပိုလုပ်ကိုင်ခွင့်ပြုချက်များ </h1>
                    {{-- (စက်ရုံအလုပ်ရုံ) --}}
	            </div>
	            
	        </div>
	
    	</div>
    </p> 
     
     <p>
        <div class="row">
            <div class="col-sm-8">
                
            </div>
            
            <div class="col-sm-4 text-right">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('PermissionOtFactory.create')}}"> အချိန်ပိုလုပ်ကိုင်ခွင့်ပြုချက် ထည့်သွင်းမည်</a>
                </div>
            </div>
        </div>
    </p>
<p>
   <div class="row">
    <div class="col-sm-12 table-responsive">
        <table class="table table-bordered" id="myTable">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">
                        စဉ်
                        </th>
                        <th scope="col">
                            စက်ရုံအလုပ်ရုံ (သို့) ဆိုင်အမည်
                        </th>
                        <th scope="col">
                            Duration
                        </th>
                        <th scope="col">
                             လုပ်သားဦးရေ
                        </th>
                        <th scope="col">
                            အချိန်ပိုနာရီ
                        </th>
                        <th scope="col">
                            အချိန်ပိုနာရီ စုစုပေါင်း
                        </th>
                        <th scope="col">
                            ခွင့်ပြုပြီး /မပြီး
                        </th>
                        <th scope="col">
                        လုပ်ဆောင်ချက်
                        </th>
                    </tr>
                </thead>
                <tbody class="list"> 
                <?php $i= ($otpermission->currentpage()-1) * ($otpermission->perpage());?>
                @foreach ($otpermission as $ot)     
            <tr>
                <td scope="row" class="name">
                        {{++$i}}
                </td>
                <td scope="row" class="name">
                    @if($ot->factorytype==1)
                    {{App\Factory::where('FactoryId',$ot->factory_id)->value('FactoryName')}} (စက်ရုံ)
                    @else
                    {{App\Shop::where('ShopId',$ot->factory_id)->value('shopname')}} (ဆိုင်)
                    @endif
                </td>
                <td class="budget">
                    {{$ot->FromDay}} -  {{$ot->ToDay}}
                </td>
                <td class="status">
                    <span class="badge badge-dot mr-4">
                            {{$ot->TotalWorker}}
                    </span>
                </td>
                <td>
                     {{$ot->Othour}}
                </td>
                <td>
                    {{$ot->totalOthour}}
                </td>
                <td>
                   @if(App\OTReport::where('ot_id',$ot->id)->value('status')==1)
                    ခွင့်ပြုပြီး
                    @else
                    ဆောင်ရွက်ဆဲ
                    @endif

                </td>
                <td class="completion">
                <form action="{{route('PermissionOtFactory.destroy',$ot->id)}}" method="POST" class="delete">
                    {{-- <a href="" class="badge badge-info">ကြည့်မည်</a> |       --}}
                        <a class="badge badge-primary" href="{{route('PermissionOtFactory.edit',$ot->id)}}">ပြင်မည်</a> |
       
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" class="badge badge-danger" id="factorydelete">ဖျက်မည်</button>    
                    </form>
                </td>
                
            </tr>
            @endforeach            
        </tbody>
    </table>
    </div>

    {!! $otpermission->render() !!}

</div>
          
</p>
<!-- scroll back to top of the page -->
<a id="back2Top" title="Back to top" href="#">&#10148;</a>

    
<script type="text/javascript">
    $(".delete").on("submit", function(){
        return confirm("Are you sure to delete this record?");
    });


</script>
@endsection