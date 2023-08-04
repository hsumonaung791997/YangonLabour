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
      

    	<div class="row">
	        <div class="col-lg-12 text-center">
	            <div class="pull-left">
	                <h2>စစ်ဆေးထားသော စက်ရုံ/အလုပ်ရုံများ</h2>
	            </div>
	            
	        </div>
        </div>
        
	           {{-- <div class="row">
                    <form  method="post">
                        {{ csrf_field() }}
                       
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-controller" id="search" name="search" placeholder="စက်ရုံ' : 'ဆိုင်'}} အမည်ဖြင့်ရှာရန်">
                                
                            </div>
                            
                 </div>

                  
                    </form>
	           </div> --}}
   
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
                  {{ $factories->FactoryName}}
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
                  {{$factories->inspectedtimes.'၊ '.$factories->inspectiontype}}
                  
                </td>
                <td>
                    {{-- <a href="{{url('inspectionpdf/'.$factories->cid) }}">Pdf <i class="fas fa-download"></i></a> --}}
                    @if($factories->safety_id!==null)<a href="{{url('Edit_factorysafteyinspection/'.$factories->safety_id)}}" class="badge badge-info"> အလုပ်ရုံစစ်ဆေးရေး ပြင်မည် |</a> <a href="{{url('View_factorysafteyinspection/'.$factories->safety_id)}}" class="badge badge-success"> အလုပ်ရုံစစ်ဆေးရေး 
                        ကြည့်မည်
                    </a>@endif <br>
                    @if($factories->law_id!==null)<a href="{{url('Edit_Factory_LabourInspectionLaw/'.$factories->law_id)}}" class="badge badge-info">  အလုပ်သမားဥပဒေစစ်ဆေးရေး ပြင်မည် |</a> <a href="{{url('View_Factory_LabourInspectionLaw/'.$factories->law_id)}}" class="badge badge-success">  အလုပ်သမားဥပဒေစစ်ဆေးရေး ကြည့်မည် </a>@endif 

                </td>
               
            </tr>
            @endforeach
           
          </tbody>
    </table>
  

            
   
</div>

</div>

@endsection