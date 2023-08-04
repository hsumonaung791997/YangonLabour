@extends('layouts.admin')
@section('content')
<script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
<!-- <style>
    a.disabled {
  pointer-events: none;
  cursor: default;
}
</style> -->
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
                <div class="col-lg-6 text-center">
                    <select name="type" id="type" class="form-control">
                        <option value="1">စက်ရုံ/အလုပ်ရုံ (သိုမဟုတ်) ဆိုင်နှင့်အလုပ်ဌာများရွေးချယ်ရန်</option>
                        <option value="1" @if($id==1) selected @endif>စစ်ဆေးထားသော စက်ရုံ/အလုပ်ရုံများ စာရင်း</option>
                        <option value="2" @if($id==2) selected @endif>စစ်ဆေးထားသော ဆိုင်နှင့်အလုပ်ဌာနများ စာရင်း</option>
                    </select>
                </div>
                
            </div>
        </p>

    	<div class="row">
	        <div class="col-lg-12 text-center">
	            <div class="pull-left">
	                <h2>@if($id==1)စစ်ဆေးထားသော စက်ရုံ/အလုပ်ရုံများ @else ဆိုင်နှင့်အလုပ်ဌာနများ @endif</h2>
	            </div>
	            
	        </div>
        </div>
        
	           <div class="row">
                    <form  method="post">
                        {{ csrf_field() }}
                       
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="hidden" id="factorytype" name="type" value="{{$id}}"/>
                            <input type="text" class="form-controller" id="search" name="search" placeholder="{{($id==1) ? 'စက်ရုံ' : 'ဆိုင်'}} အမည်ဖြင့်ရှာရန်">
                                
                            </div>
                            
                 </div>

                  
                    </form>
	           </div>
   

     @if($id==1)
	<div class="table-responsive">
    	<div>
		    <table class="table table-bordered">
		        <thead class="thead-light">
		            <tr>
		                <th scope="col">
		                    No
		                </th>
		                 <th scope="col">
		                    စက်ရုံ/အလုပ်ရုံ အမည်
		                </th>
		                
		                <th scope="col">
		                    စစ်ဆေးသည့်နေ့
		                </th>
                        <th scope="col">
                            နောက်ဆုံးစစ်ဆေးသည့်နေ့
                        </th>
                        <th scope="col">
                            စစ်ဆေးသူအမည်
                        </th>
                        <th scope="col">
                            စစ်ဆေးသည့်ပုံစံ
                        </th>
                        <th scope="col">
                                လုပ်ဆောင်ချက်
                        </th>
		            </tr>
		        </thead>
		        <tbody class="list">
                    <?php $i=0;?>
                @foreach ($factory as $factories)
            <tr>
                <th scope="row" class="name">
                    {{ ++$i }}
                </th>
               
                <td class="budget">
                 <a href="{{url('casenewinspection/'.$factories->cid.'/'.$id) }}">{{ $factories->FactoryName}}</a>
                </td>
                <td class="completion">
                    {{$factories->inspectiondate}}
                </td>
                <td class="completion">
                    {{$factories->lastinspectiondate}}
                </td>
                <td class="completion">
                    {{$factories->name}}
                </td>
                <td class="completion">
                  {{$factories->inspectedtimes.$factories->inspectiontype}}
                  
                </td>
                <td>
                    {{-- <a href="{{url('inspectionpdf/'.$factories->cid) }}">Pdf <i class="fas fa-download"></i></a> --}}
                    <a href="{{url('casenewinspection/'.$factories->cid.'/'.$id) }}" class="badge badge-success">ဖိုင်ဖွင့်မည်</a>
                </td>
               
            </tr>
            @endforeach
           
          </tbody>
    </table>
  

            
   
</div>

</div>

@else
<div class="table-responsive">
    <div>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">
                        No
                    </th>
                     <th scope="col">
                        ဆိုင်နှင့်အလုပ်ဌာန အမည်
                    </th>
                    
                    <th scope="col">
                        စစ်ဆေးသည့်နေ့
                    </th>
                    <th scope="col">
                        နောက်ဆုံးစစ်ဆေးသည့်နေ့
                    </th>
                    <th scope="col">
                        စစ်ဆေးသူအမည်
                    </th>
                    <th scope="col">
                        စစ်ဆေးသည့်ပုံစံ
                    </th>
                    <th scope="col">
                            လုပ်ဆောင်ချက်
                    </th>
                </tr>
            </thead>
            <tbody class="list">
                <?php $i=0;?>
            @foreach ($factory as $factories)
        <tr>
            <th scope="row" class="name">
                {{ ++$i }}
            </th>
           
            <td class="budget">
              
              <a href="{{url('casenewinspection/'.$factories->sid.'/'.$id) }}">{{ $factories->shopname}}</a>
            </td>
            <td class="completion">
                {{$factories->inspectiondate}}
            </td>
            <td class="completion">
                {{$factories->lastinspectiondate}}
            </td>
            <td class="completion">
                {{$factories->name}}
            </td>
            <td class="completion">
             
              {{$factories->inspectedtime.$factories->inspection_type}}
              
            </td>
           
            <td>
                    <a href="{{url('inspectionShoppdf/'.$factories->sid) }}">Pdf <i class="fas fa-download"></i></a>
            </td>
        </tr>
        @endforeach
       
      </tbody>
</table>


        

</div>

</div>
@endif

<script type="text/javascript">

$('#search').on('keyup',function(){
var value=$(this).val();
var factorytype=$('#factorytype').val();
console.log(factorytype);

$.ajax({
type : 'get',
url: '{{ route('autocompleteinspectiondata') }}',
data:{'search':value,'factorytype':factorytype},
success:function(data){
  
$('tbody').html(data);
}
});
});


$('#type').change(function(){ 
       var id = $(this).val();
    //    alert(id);
       if(id == 1)
       {
       
        window.location.href="{{url('newcaseinspection')}}/"+id;
       
       }else{
            window.location.href="{{url('newcaseinspection')}}/"+id;
       }
});


</script>

@endsection