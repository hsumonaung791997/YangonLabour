@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add District') }}</div>

                <div class="card-body">
                    <form method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ခရိုင်အမည်') }}</label>

                            <div class="col-md-6">
                                <input id="districtname" type="text" class="form-control{{ $errors->has('districtname') ? ' is-invalid' : '' }}" name="districtname" value="{{ old('districtname') }}" autofocus>

                                @if ($errors->has('districtname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('districtname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<!-- For Region-->
                               <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('တိုင်းဒေသကြီး') }}</label>

                            <div class="col-md-6">
                                <select  type="text" class="form-control{{ $errors->has('region') ? ' is-invalid' : '' }}" name="region" value="{{ old('region') }}" required autofocus>
                                    @foreach($rname as $region)
                                      <option value="{{$region->id}}">{{$region->region_name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('region'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('roegion') }}</strong>
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
