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
	                <h1>User Logs</h1>
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
                        Log Name 
                        </th>
                        <th scope="col">
                        Description
                        </th>
                        <th scope="col">
                        Subject Id 
                        </th>
                        <th scope="col">
                        Subject Type
                        </th>
                        {{-- <th scope="col">
                        Properties
                        </th> --}}
                        <th scope="col">
                            Time
                        </th>
                    </tr>
                </thead>
                <tbody class="list">
            <?php $i= ($log->currentpage()-1) * ($log->perpage());?>
            @foreach ($log as $logs)
            <tr>
                <td scope="row" class="name">
                    {{ ++$i }}
                </td>
                <td scope="row" class="name">
                    {{ $logs->log_name}}
                </td>
                <td class="budget">
                    {{ $logs->description}}
                </td>
                <td class="status">
                    <span class="badge badge-dot mr-4">
                      {{ $logs->subject_id}}
                    </span>
                </td>
                <td>
                     {{ $logs->subject_type}}
                </td>
                {{-- <td>
                    {{ $logs->properties}}
                </td> --}}
                </td>
                <td>
                     {{ $logs->created_at->diffForHumans()}}
                </td>
                {{-- <td class="completion">
                   
                </td> --}}
                
            </tr>
            @endforeach
            
        </tbody>
    </table>
    </div>
    {!! $log->links() !!}
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