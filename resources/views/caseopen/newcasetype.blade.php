@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-sm-6">
        <a href="{{url('newcaseinspection/1')}}" class="btn btn-primary">စစ်ဆေးထားသော စက်ရုံ/အလုပ်ရုံများ စာရင်း</a>
    </div>
    <div class="col-sm-6">
        <a href="{{url('newcaseinspection/2')}}" class="btn btn-primary">စစ်ဆေးထားသော ဆိုင်နှင့်အလုပ်ဌာနများ စာရင်း</a>
    </div>
</div>

@endsection