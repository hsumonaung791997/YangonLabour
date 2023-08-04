@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Industrial Zone') }}</div>

                <div class="card-body">
                    <form method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ဇုန်အမည်') }}</label>

                            <div class="col-md-6">
                                <input id="" type="text" class="form-control{{ $errors->has('zonename') ? ' is-invalid' : '' }}" name="industrialzone_name" value="{{ old('zonename') }}" autofocus>

                                @if ($errors->has('zonename'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('zonename') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<!-- For Region-->
                               <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('မြို့နယ်အမည်') }}</label>

                            <div class="col-md-6">
                                <select  type="text" class="form-control{{ $errors->has('township') ? ' is-invalid' : '' }}" name="township_id" value="{{ old('township') }}" required autofocus>
                                    @foreach($tname as $t)
                                      <option value="{{$t->id}}">{{$t->township_name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('district'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('township') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- End of Region -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('သိမ်းဆည်းမည်') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
