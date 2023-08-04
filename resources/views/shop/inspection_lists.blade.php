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
	                <h2>စစ်ဆေးထားသော ဆိုင်/အလုပ်ဌာနများ</h2>
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
                            ဆိုင်/အလုပ်ဌာန အမည်
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
                @foreach ($shop as $shops)
            <tr>
                <th scope="row" class="name">
                    {{ ++$i }}
                </th>
               
                <td class="budget">
                  {{ $shops->shopname}}
                </td>
                <td class="completion">
                    {{$shops->inspectiondate}}
                </td>
                <td class="completion">
                    {{$shops->lastinspectiondate}}
                </td>
                <td class="completion">
                    {{$shops->inspection_name}}
                </td>
                <td class="completion">
                  {{$shops->inspectedtime.'၊ '.$shops->inspection_type}}
                  
                </td>
                <td>
                    {{-- <a href="{{url('inspectionpdf/'.$shops->cid) }}">Pdf <i class="fas fa-download"></i></a> --}}
                    @if($shops->safety_id!==null)<a href="{{url('Edit_Shopsafteyinspection/'.$shops->safety_id)}}" class="badge badge-info"> အလုပ်ရုံစစ်ဆေးရေး ပြင်မည် |</a> <a href="{{url('View_Shopsafteyinspection/'.$shops->safety_id)}}" class="badge badge-success"> အလုပ်ရုံစစ်ဆေးရေး 
                        ကြည့်မည်
                    </a>@endif <br>
                    @if($shops->law_id!==null)<a href="{{url('Edit_Shop_LabourInspectionLaw/'.$shops->law_id)}}" class="badge badge-info">  အလုပ်သမားဥပဒေစစ်ဆေးရေး ပြင်မည် |</a> <a href="{{url('View_Shop_LabourInspectionLaw/'.$shops->law_id)}}" class="badge badge-success">  အလုပ်သမားဥပဒေစစ်ဆေးရေး ကြည့်မည် </a>@endif 

                </td>
               
            </tr>
            @endforeach
           
          </tbody>
    </table>
  

            
   
</div>

</div>

@endsection