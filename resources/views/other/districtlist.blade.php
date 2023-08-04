@extends('layouts.admin')
@section('content')
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
<?php $no=1;?>
				<div class="card-body">
					<table>
							<tr>
								<td>စဉ်</td>
								<td>အမည်</td>
							</tr>
					@foreach($regionname as $rname)
							<tr>
								<td>{{$no++}}</td>
								<td>{{$rname->district_name}}</td>
							</tr>
					@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
	</div>
@endsection