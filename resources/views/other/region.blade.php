@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Region') }}</div>

                <div class="card-body">
                    <form method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Region Name') }}</label>

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
            </div>
        </div>
    </div>
</div>
@endsection
