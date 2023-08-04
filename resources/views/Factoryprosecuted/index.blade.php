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
	                <h1 class="text-left">အမှုတွဲများ</h1>
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
                    <a class="btn btn-primary" href="{{ route('Factoryprosecuted.create')}}"> အမှုတွဲအသစ်များထည့်ရန်</a>

                </div>
            </div>
        </div>
    </p>
<p>
   <div class="row">
    <div class="col-sm-12">
        <table class="table table-bordered table-responsive" id="myTable">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">
                        စဉ်
                        </th>
                        {{-- <th scope="col">
                        အမှုတွဲပုံစံ
                        </th> --}}
                        {{-- <th scope="col">
                        အမှတ်စဉ်
                        </th> --}}
                        <th scope="col">
                        လုပ်ငန်းအမည်
                        </th>
                        <th scope="col">
                        ပိုင်ရှင်အမည်
                        </th>
                        <th scope="col">
                        မန်နေဂျာအမည်
                        </th>
                        <th>
                            တရားလို အမည်
                        </th>
                        <th>
                            တရားစွဲဆိုရသည့်အကြောင်းအရင်း
                        </th>
                        <th scope="col">
                        လုပ်ဆောင်ချက်
                        </th>
                    </tr>
                </thead>
                <tbody class="list">
            @foreach ($factoryProsecuted as $factoryProsecutes)
            <tr>
                <td scope="row" class="name">
                    {{ ++$i }}
                </td>
                
                {{-- <td scope="row" class="name">
                    {{ $factoryProsecutes->IDno}}
                </td> --}}
                <td class="budget">
                    {{ $factoryProsecutes->Name}} 
                    ( @if($factoryProsecutes->chooseType==1)
                    စက်ရုံ အလုပ်ရုံ
                    @else
                    ဆိုင် နှင့်အလုပ်ဌာန
                    @endif)
                </td>
                <td class="status">
                    <span class="badge badge-dot mr-4">
                      {{ $factoryProsecutes->OwnerName}}
                    </span>
                </td>
                <td>
                     {{ $factoryProsecutes->ManagerName}}
                </td>
                <td>
                    {{ $factoryProsecutes->PlaintiffName}}

                </td>
                <td>
                    {{$factoryProsecutes->ProsecutedAbout}}
                </td>
                <td class="completion">
                    <form action="{{ route('Factoryprosecuted.destroy',$factoryProsecutes->id) }}" method="POST" class="delete">
                        <a href="{{ route('Factoryprosecuted.show',$factoryProsecutes->id) }}" class="badge badge-info">ကြည့်မည်</a> |      
                        <a class="badge badge-primary" href="{{ route('Factoryprosecuted.edit',$factoryProsecutes->id) }}">ပြင်မည်</a> |
       
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" class="badge badge-danger" id="factoryProsecuteddelete">ဖျက်မည်</button>
                        
                    
                    </form>
                </td>
                
            </tr>
            @endforeach
            
        </tbody>
    </table>
    </div>
    @if (Request::path() == 'factoryProsecutes')
    {!! $factoryProsecuted->links() !!}
    @endif
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