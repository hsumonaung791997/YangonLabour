@extends('layouts.admin')
@section('content')
	<div class="col-sm-5 pull-left">
		<a href="{{url('township')}}" class="btn btn-primary">မြို့နယ်များထပ်ထည့်ရန်</a>
	</div>
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            

				<div>
					<table class="table table-bordered">
							<tr>
								<th>စဉ်</th>
								<th>အမည်</th>
								<th>ခရိုင်</th>
								<th>လုပ်ဆောင်ချက်</th>
							</tr>
					<?php $i= ($township->currentpage()-1) * ($township->perpage());?>
					@foreach($township as $tname)
							<tr>
								<td>{{++$i}}</td>
								<td>{{$tname->township_name}}</td>
								<td>{{$tname->district->district_name}}</td>
								<td> 

                            
                        <a class="badge badge-primary" href="{{ url('townshipedit/'.$tname->id) }}">ပြင်မည်</a> |
                         <a class="badge badge-danger" href="{{ url('townshipedit/'.$tname->id) }}">ဖျက်မည်</a> 
       
          				</td>
							</tr>
					@endforeach
					</table>

					<br>
					{!! $township->render() !!}
					
				</div>
			</div>
		

	</div>
	</div>
@endsection