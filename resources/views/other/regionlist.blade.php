@extends('layouts.admin')
@section('content')
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
<?php $no=1;?>
				<div class="card-body">
					<table class="table table-border">
							<tr>
								<td>စဉ်</td>
								<td>အမည်</td>
							</tr>
					@foreach($regionname as $rname)
							<tr>
								<td>{{$no++}}</td>
								<td>{{$rname->region_name}}</td>
							</tr>
					@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

		
<button type="button" class="myfont" data-toggle="modal" data-target="#exampleModal">
 အသစ်ထည့်ရန်

</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">ခရိုင်ထည့်ရန်</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ခရိုင်အမည်') }}</label>

                            <div class="col-md-6">
                                <input id="regionname" type="text" class="form-control{{ $errors->has('regionname') ? ' is-invalid' : '' }}" name="regionname" value="{{ old('regionname') }}" autofocus>

                                @if ($errors->has('regionname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('regionname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <!--  -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('သိမ်းဆည်းမည်') }}
                                </button>
                            </div>
                        </div>
                    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ပိတ်ရန်</button>
        <button type="button" class="btn btn-primary">သိမ်းဆည်းမည်</button>
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


@endsection