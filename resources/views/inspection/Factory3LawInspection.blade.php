@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="col-sm-6">
		<div class='row'>
			<a href="{{url('1951factoryact')}}" class="btn btn-lg btn-primary">၁၉၅၁ အလုပ်ရုံများ အက်ဥပဒေ</a>
		</div>
		<div style="height:2rem"></div>
		<div class="row">
			<a href="{{url('1951labourholidayact')}}" class="btn btn-lg btn-primary">၁၉၅၁ ခွင့်နှင့်အလုပ်ပိတ်ရက်ဆိုင်ရာ အက်ဥပဒေ</a>
		</div>
		
		
	</div>
	<div class="col-sm-6">
		<div class="row"><a href="{{url('2016wageact')}}" class="btn btn-lg btn-primary">၂၀၁၆ အခကြေးငွေပေးချေရေးဆိုင်ရာ အက်ဥပဒေ</a></div>
		<div style="height:2rem"></div>
		<div class="row">
			<a href="{{url('factorysafteyact')}}" class="btn btn-lg btn-primary">လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေး နှင့် ကျန်းမာရေး ဥပဒေ</a>
		</div>
		

	</div>
</div>




@endsection
