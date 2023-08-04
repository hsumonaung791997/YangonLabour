@extends('layouts.admin')
@section('content')
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border:0!important">
<?php $no=1;?>
				<div class="card-body " >
					<table style="width:100%;" class="table table-bordered">
							<tr>
								<th class="p-3">စဉ်</th>
								<th class="p-3">အမည်</th>
							</tr>
					@foreach($zone as $z)
							<tr>
								<td class="p-3">{{$no++}}</td>
								<td class="p-3">{{$z->industrialzone_name}}</td>
							</tr>
					@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
	</div>
@endsection