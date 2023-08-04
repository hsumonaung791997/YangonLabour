@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Economic Section') }}</div>

                <div class="card-body">
                <form method="POST" action="{{route('economicsection.store')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Section Type') }}</label>

                            <div class="col-md-6">
                                <input id="Section" type="text" class="form-control" name="Section"  autofocus>
                            </div>
                        </div>
<!-- For Region-->
                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Section Name') }}</label>

                            <div class="col-md-6">
                                <textarea name="SectionName" id="SectionName" cols="30" rows="10"></textarea>
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
