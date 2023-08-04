@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Economic Class') }}</div>

                <div class="card-body">
                <form method="POST" action="{{route('economicclass.store')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Class Code') }}</label>

                            <div class="col-md-6">
                                <input id="class_code" type="text" class="form-control" name="class_code"  autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Class Name') }}</label>

                            <div class="col-md-6">
                                <input id="class_name" type="text" class="form-control" name="class_name"  autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Group Type') }}</label>

                            <div class="col-md-6">
                                <select  type="text" class="form-control" name="group_id" required autofocus>
                                    @foreach($group as $d)
                                      <option value="{{$d->id}}">{{$d->group_name}}</option>
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
