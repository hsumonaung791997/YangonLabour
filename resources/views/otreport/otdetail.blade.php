@extends('layouts.admin')
@section('content')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="{{asset('assets/js/common.js')}}"></script>

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
	                <h1>အချိန်ပိုလုပ်ကိုင်ခွင့်တောင်းခံထားသော စက်ရုံ/အလုပ်ရုံ (သို့မဟုတ်) ဆိုင်/အလုပ်ဌာနများ</h1>
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
                        စက်ရုံအမှတ်စဉ်
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
                <?php $i= ($otdetail->currentpage()-1) * ($otdetail->perpage());?>
                @foreach ($otdetail as $ot)     
            <tr>
                <td scope="row" class="name">
                        {{++$i}}
                </td>
                <td scope="row" class="name">
                    {{App\Factory::where('FactoryId',$ot->otdetail->factory_id)->value('FactoryName')}} ({{$ot->otdetail->factory_id}})
                </td>
                <td class="budget">
                    {{$ot->otdetail->FromDay}} -  {{$ot->otdetail->ToDay}}
                </td>
                <td class="status">
                    <span class="badge badge-dot mr-4">
                            {{$ot->otdetail->TotalWorker}}
                    </span>
                </td>
                <td>
                     {{$ot->otdetail->Othour}}
                </td>
                <td>
                    {{$ot->otdetail->totalOthour}}
                </td>
                <td>
                    @if($ot->status==1)
                    ခွင့်ပြုပြီး
                    @else
                    ဆောင်ရွက်ဆဲ
                    @endif
                </td>
                <td class="completion">
                    
                <a href="{{url('ApproveOtPermission/'.$ot->id)}}" class="badge badge-success" id="approve">ခွင့်ပြုသည့်ညွှန်ကြားချက်ထုတ်ရန်</a>     
                        
       
                </td>
                
            </tr>
            @endforeach            
        </tbody>
    </table>
    </div>

    {!! $otdetail->render() !!}

</div>
          
</p>
<!-- scroll back to top of the page -->
<a id="back2Top" title="Back to top" href="#">&#10148;</a>


@endsection