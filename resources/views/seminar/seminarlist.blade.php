@extends('layouts.admin')
@section('content')
<script src="{{asset('assets/js/common.js')}}"></script>
    <p>
    	<div class="row">
	        <div class="col-lg-12 text-center">
	            <div class="pull-left">
	                <h1>အလုပ်သမားရေးရာ ဥပဒေများအား အသိပညာပေးဆွေးနွေးပွဲ ဆောင်ရွက်ထားမှုများ</h1>
	            </div>
	            
	        </div>
	
    	</div>
    </p> 
    <p>
        <div class="col-sm-12 text-right">
            <a href="{{route('create.seminar')}}" class="btn btn-primary">အသိပညာပေးဆွေးနွေးပွဲ အသစ် ထည့်သွင်းမည် </a>
        </div>
    </p>
   <div class="col-sm-12">
        <table class="table table-bordered table-responsive" id="myTable">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">
                        စဉ်
                        </th>
                        <th scope="col">
                        ဆွေးနွေးပွဲဦးဆောင်ပြုလုပ်သူနှင့် ဆွေးနွေးသူများ
                        </th>
                        <th scope="col">
                        ကျင်းပပြုလုပ်သည့်နေ့ရက်
                        </th>
                        <th scope="col">
                        စက်ရုံအလုပ်ရုံ အမည် / ဆိုင်/အလုပ်ဌာနအမည်                       
                        </th>
                        <th scope="col">
                        လုပ်ဆောင်ရန်
                        </th>
                       
                        
                    </tr>
                </thead>
                <tbody class="list">
                    
                <?php $i= ($seminar->currentpage()-1) * ($seminar->perpage());?>
          @foreach($seminar as $sem)

          
            <tr>
                <td>{{++$i}}</td>
                <td>{{$sem->s_leader}}({{$sem->s_leaderrank}})<br>
                @if($sem->s_contributor1!=null){{$sem->s_contributor1}}({{$sem->s_contributor1rank}})<br/>@endif @if($sem->s_contributor2!=null){{$sem->s_contributor2}}({{$sem->s_contributor2rank}})<br/>@endif @if($sem->s_contributor3!=null)
                {{$sem->s_contributor3}}({{$sem->s_contributor3rank}})<br/>@endif</td>
                <td>{{$sem->helddate}}</td>
                <td>{{$sem->factoryname}}</td>
                                
                <td class="completion">
                    
                        <a href="{{ url('seminardetail/'.$sem->id) }}" class="badge badge-info">ကြည့်မည်</a> |      
                        <a class="badge badge-primary" href="{{ url('seminaredit/'.$sem->id) }}">ပြင်မည်</a>                      
          
                        <a href="{{route('seminardestroy',$sem->id) }}(" class="badge badge-danger" id="factorydelete">ဖျက်မည်</a>
                        
                    </form>
                </td>
               
            </tr>
            @endforeach
            
        </tbody>
    </table>
    </div>

    {!! $seminar->render() !!}
    
</div>
<!-- scroll back to top of the page -->
<a id="back2Top" title="Back to top" href="#">&#10148;</a>

@endsection