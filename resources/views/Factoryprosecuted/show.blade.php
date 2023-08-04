@extends('layouts.admin')
@section('content')
<div class="container" >
	
<h3 style="text-align: center;">ရန်ကုန်တိုင်းဒေသကြီး<br>အလုပ်ရုံနှင့်အလုပ်သမားဥပဒေစစ်ဆေးရေးဦးစီးဌာန<br>တရားစွဲဆိုမှုလချုပ်စာရင်း</h3>
<hr>
<p>
    <div class="row">
		<div class="col-sm-6">
			၁။ လုပ်ငန်းအမည် - {{$factoryProsecuted->Name}} 
		</div>
		<div class="col-sm-6 text-left">
			၂။ စက်ရုံအမှတ် - {{$factoryProsecuted->IDno}}
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၃။ စက်ရုံလိပ်စာ  - {{$factoryProsecuted->Address}}
		</div>
		<div class="col-sm-6 text-left">
			၄။ မြို့နယ် - {{App\Township::where('id',$factoryProsecuted->Township)->value('township_name')}}
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၅။ ဇုန်  -  {{App\Industrialzone::where('id',$factoryProsecuted->Zone)->value('industrialzone_name')}}
		</div>
		<div class="col-sm-6 text-left">
			၆။ ပိုင်ရှင် အမည် - {{$factoryProsecuted->OwnerName}}
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၇။ လိပ်စာ - {{$factoryProsecuted->OwnerAddress}}
		</div>
		<div class="col-sm-6 text-left">
			၈။ မန်နေဂျာ အမည် - {{$factoryProsecuted->ManagerName}}
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၉။ လိပ်စာ - {{$factoryProsecuted->ManagerAddress}}
		</div>
		<div class="col-sm-6 text-left">
			၁၀။ တရားလို အမည်  - {{$factoryProsecuted->PlaintiffName}}
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၁၁။ ရာထူး - {{$factoryProsecuted->PlaintiffLvl}}
		</div>
		<div class="col-sm-6 text-left">
			၁၂။ မြို့နယ် - {{$factoryProsecuted->PlaintiffTownship}}
		</div>
		</div>
</p>

<p>
    <div class="row">
		<div class="col-sm-6">
			၁၃။ ဇုန် - {{$factoryProsecuted->PlaintiffZone}}
		</div>
		<div class="col-sm-6 text-left">
			၁၄။ တရားစွဲဆိုရသည့်အကြောင်းအရင်း - {{$factoryProsecuted->ProsecutedAbout}}
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၁၅။ ကျူးလွန်သောဥပဒေနှင့်စွဲဆိုသည့်ပုဒ်မ - {{$factoryProsecuted->ProsecutedLaw}}
		</div>
		<div class="col-sm-6 text-left">
			၁၆။ ရုံးတင်တရားစွဲဆိုသည့်နေ့ - {{$factoryProsecuted->ProsecutedDay}}
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၁၇။ တရားရုံးအမည်  - {{$factoryProsecuted->CourtName}}
		</div>
		<div class="col-sm-6 text-left">
			၁၈။ အမိန့်ချမှတ်သောနေ့ - {{$factoryProsecuted->DecreeDay}} 
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၁၉။ ၎င်းအမိန့်ကိုရရှိသောနေ့ - {{$factoryProsecuted->getDecreeDay}}
		</div>
		<div class="col-sm-6 text-left">
			၂၀။ အမှုအမှတ်(ပြစ်မှုကြီး) - {{$factoryProsecuted->DecreeID}}
		</div>
	</div>
</p>
<p>
    <div class="row">
		<div class="col-sm-6">
			၂၂ ။ အလုပ်သမားဦးရေ - {{$factoryProsecuted->noOfemp}}
			
		</div>
		<div class="col-sm-6 text-left">
			၂၃။ အလုပ်သမားများရသင့်သည့်ငွေပေါင်း - {{$factoryProsecuted->empGetmoney}}
		</div>
	</div>
</p>

<p>
    <div class="row">
		<div class="col-sm-6">
			၂၄။ မပြီးပြတ်သေးသောအမှုအခြေအနေ နှင့် ချိန်းဆိုသည့်နေ့တွင်မည်သို့ဆောင်ရွက်သည်ကိုဖော်ပြရန် - 
		</div>
		<div class="col-sm-6 text-left">
			{{$factoryProsecuted->DecreeAct}}
		</div>
	</div>
</p>

<p>
    <div class="row">
		<div class="col-sm-6">
			၂၅။ စီရင်ချက်ချမှတ်သောနေ့စွဲ - {{$factoryProsecuted->judgmentDay}}
		</div>
		<div class="col-sm-6 text-left">
			၂၆။ စီရင်ချက်  - {{$factoryProsecuted->judgment}}		
        </div>
	</div>
</p>
<hr>
</div>
@endsection