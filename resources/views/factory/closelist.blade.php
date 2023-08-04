@extends('layouts.admin')
@section('content')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
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
	                <h1>ပိတ်သိမ်းထားသော စက်ရုံအလုပ်ရုံများ</h1>
	            </div>
	            
	        </div>
	
    	</div>
    </p> 
     
     <p>
        <div class="row">
            <div class="col-sm-8">
                {{-- <form action="{{ route('autocomplete.searchdata')}}" method="POST" role="search" style="margin:auto;max-width:300px" class="search">
                    {{ csrf_field() }}
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" placeholder="စက်ရုံ အလုပ်ရုံ ရှာရန်..." name="searchdata" id="searchdata">
                            <button type="submit" id="searchdatabutton"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
              </form> --}}
            </div>
            
            <div class="col-sm-4 text-right">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('factories.index')}}"> ပြန်ထွက်မည်</a>
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
                        စက်ရုံအမည်
                        </th>
                        <th scope="col">
                        ပိုင်ရှင်အမည်
                        </th>
                        <th scope="col">
                        မန်နေဂျာအမည်
                        </th>
                        <th scope="col">
                        မှတ်ပုံတင်သည့်နေ့စွဲ
                        </th>
                        <th scope="col">
                        လုပ်ဆောင်ချက်
                        </th>
                    </tr>
                </thead>
                <tbody class="list">
            @foreach ($factory as $factories)
            <tr>
                <td scope="row" class="name">
                    {{ ++$i }}
                </td>
                <td scope="row" class="name">
                    {{ $factories->FactoryId}}
                </td>
                <td class="budget">
                    {{ $factories->FactoryName}}
                </td>
                <td class="status">
                    <span class="badge badge-dot mr-4">
                      {{ $factories->OwnerName}}
                    </span>
                </td>
                <td>
                     {{ $factories->ManagerName}}
                </td>
                <td>
                     {{ $factories->created_at->diffForHumans()}}
                </td>
                <td class="completion">
                    <form action="{{ route('factories.destroy',$factories->id) }}" method="POST" class="delete">
                        <a href="{{ route('factories.show',$factories->id) }}" class="badge badge-info">ကြည့်မည်</a> |      
                        <a class="badge badge-primary" href="{{ route('factories.edit',$factories->id) }}">ပြင်မည်</a> |
       
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
    @if (Request::path() == 'factories')
    {!! $factory->links() !!}
    @endif
</div>
          
</p>
   
    
<script type="text/javascript">
    $(".delete").on("submit", function(){
        return confirm("Are you sure to delete this record?");
    });


</script>
@endsection