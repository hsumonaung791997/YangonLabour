@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Economic Division') }}</div>

                <div class="card-body">
                <form method="POST" action="{{route('economicdivision.store')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Division Code') }}</label>

                            <div class="col-md-6">
                                <input id="division_code" type="text" class="form-control" name="division_code"  autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Division Name') }}</label>

                            <div class="col-md-6">
                                <input id="division_name" type="text" class="form-control" name="division_name"  autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Section Type') }}</label>

                            <div class="col-md-6">
                                <select  type="text" class="form-control" name="section_id" required autofocus>
                                    @foreach($section as $s)
                                      <option value="{{$s->id}}">{{$s->SectionName}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
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
