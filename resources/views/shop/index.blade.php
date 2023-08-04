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
	                <h1>ဆိုင် / အလုပ်ဌာန များ</h1>
	            </div>
	            
	        </div>
	
    	</div>
    </p> 
     <p>
        <div class="row">
            <div class="col-sm-5">
               <form action="{{route('autocomplete.shopsearchdata')}}" method="POST" role="search" style="margin:auto;max-width:300px" class="search">
                    {{ csrf_field() }}
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" placeholder="ဆိုင် / အလုပ်ဌာန ရှာရန် ..." name="searchdata" id="searchdata">
                            <button type="submit" id="searchdatabutton"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
              </form>
                
            </div>

            <div class="col-sm-4 text-right">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('closeshop.list')}}"> ပိတ်သိမ်းထားသော ဆိုင် / အလုပ်ဌာနများ ကြည့်ရန်</a>
                </div>
            </div>

            <div class="col-sm-3 text-right">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('shops.create')}}"> ဆိုင် / အလုပ်ဌာန များလျှောက်ထားရန်</a>

                </div>
            </div>
        </div>
    </p>
<p>
   <div class="row">
    <div class="col-sm-12 table-responsive">
        <!-- <div class="table-responsive"> -->
        <!-- <div> -->
        <table class="table table-bordered" id="myTable">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">
                            စဉ်
                        </th>
                        <th scope="col">
                            ဆိုင် / အလုပ်ဌာန အမှတ်စဉ်
                        </th>
                        <th scope="col">
                            ဆိုင် / အလုပ်ဌာန အမည်
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
            <?php $i= ($shop->currentpage()-1) * ($shop->perpage());?>
            @foreach ($shop as $shops)
            <tr>
                <td scope="row" class="name">
                    {{ ++$i }}
                </td>
                <td scope="row" class="name">
                    {{ $shops->ShopId}}
                </td>
                <td class="budget">
                    {{ $shops->shopname}}
                </td>
                <td class="status">
                    <span class="badge badge-dot mr-4">
                      {{ $shops->ownername}}
                    </span>
                </td>
                <td>
                     {{ $shops->mangername}}
                </td>
                <td>
                     {{$shops->RegDate}}
                </td>
                <td class="completion">
                    <form action="{{ route('shops.destroy',$shops->id) }}" method="POST" class="delete">
                        <a href="{{ route('shops.show',$shops->id) }}" class="badge badge-info">ကြည့်ရန်</a> |      
                        <a class="badge badge-primary" href="{{ route('shops.edit',$shops->id) }}">ပြင်ရန်</a> |
       
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" class="badge badge-danger" id="shopdelete">ဖျက်မည်</button>

                         <a href="{{url('CloseShop/'.$shops->ShopId)}}" class="badge badge-pill badge-warning" data-toggle="modal" data-target="#exampleModal"> ပိတ်သိမ်းမည် </a> <br>
                         <a href="{{ route('shops.download',$shops->id) }}" class="badge badge-success">Download</a> 
                    </form>
                </td>
               
            </tr>
            @endforeach
            
        </tbody>
    </table>

    </div>
    @if (Request::path() == 'shops')
    {!! $shop->links() !!}
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