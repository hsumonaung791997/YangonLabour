@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Township') }}<i class="fas fa-plus" style="color:#5e72e4;font-size:18px;float:right;"></i> </div>

                <div class="card-body">
                    <form method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('မြို့နယ်အမည်') }}</label>

                            <div class="col-md-6">
                                <input id="" type="text" class="form-control{{ $errors->has('townshipname') ? ' is-invalid' : '' }}" name="townshipname" value="{{ old('townshipname') }}" autofocus>

                                @if ($errors->has('townshipname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('townshipname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<!-- For Region-->
                               <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('ခရိုင်အမည်') }}</label>

                            <div class="col-md-6">
                                <select  type="text" class="form-control{{ $errors->has('district') ? ' is-invalid' : '' }}" name="district" value="{{ old('district') }}" required autofocus>
                                    @foreach($dname as $district)
                                      <option value="{{$district->id}}">{{$district->district_name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('district'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('district') }}</strong>
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
