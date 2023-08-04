@extends('layouts.admin')
@section('content')
<div class="container" >
	
<h3 style="text-align: center;">လုပ်ငန်းခွင်ထိခိုက်မှုအကြောင်းကြားခြင်းပုံစံ</h3>
<hr>
<div class="row">
    <div class="col-lg-8 margin-tb">
    </div>
    <div class="col-lg-4 text-right mb-2">
        <div class="pull-right">
            <a class="btn" style="background:#2F8DD8;color:#fff;" href="{{ route('AffectedIndex.index') }}"> ပြန်ထွက်</a>
        </div>
    </div>
</div>
<p>
    <div class="row">
		@if($affected->Type == '1')
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-5 ">
					၁။ စက်ရုံအမှတ် -  
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
					{{$affected-> FactoryID}}
				</div>
				
			</div>
			<hr>
		</div>
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-5 ">
					၁။ စက်ရုံအမည် -  
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
					{{$affected-> FactoryName}}
				</div>
				
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
					၂။ ပိုင်ရှင်အမည် -  
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
					{{$affected-> OwnerName}}
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၃။ လုပ်ငန်းအမျိုးအစား -  
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				{{$affected-> FactoryType}}
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၄။ ဖုန်းနံပါတ် - 
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				{{$affected-> FactoryPhno}}
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၅။ လိပ်စာ-
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				{{$affected-> FactoryAddress}}
				</div>
			</div>
			<hr>
		</div>
		@else
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-5 ">
					၁။ ဆိုင်အမှတ် -  
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
					{{$affected-> FactoryID}}
				</div>
				
			</div>
			<hr>
		</div>
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-5 ">
					၁။ ဆိုင်အမည် -  
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
					{{$affected-> FactoryName}}
				</div>
				
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
					၂။ ပိုင်ရှင်အမည် -  
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
					{{$affected-> OwnerName}}
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၃။ လုပ်ငန်းအမျိုးအစား -  
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				{{$affected-> FactoryType}}
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၄။ ဖုန်းနံပါတ် - 
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				{{$affected-> FactoryPhno}}
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၅။ လိပ်စာ-
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				{{$affected-> FactoryAddress}}
				</div>
			</div>
			<hr>
		</div>
		@endif
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၆။ အမည် -  
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				{{$affected-> empName}}
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၇။ အသက် -
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				{{$affected-> empAge}}
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၈။ ကျား/မ -
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				{{$affected-> empGender}}
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၉။ လမဖအကျုံးဝင်မှု ရှိ/မရှိ -
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				{{$affected-> empLvl}}
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၁၀။ ဖုန်းနံပါတ်-
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				{{$affected-> empLama}}
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၁၁။ ထိခိုက်မှုဖြစ်ပွားသည့်နေ့ရက် - 
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				{{$affected-> accDay}}
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၁၂။ အချိန် - 
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				{{$affected-> accTime}}
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၁၃။ နေရာ -  
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				{{$affected-> accPlace}}
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၁၄။ အမျိုးအစား -  
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				{{$affected-> accType}}
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၁၅။ ဖြစ်စဉ်အကျဉ်း- 
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				{{$affected-> accDetail}}
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၁၆။ ခန့်မှန်းအလုပ်ပျက်ရက် - 
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				{{$affected-> accLeave}}
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၁၇။ ထိခိုက်ဒဏ်ရာ အမျိုးအစား - 
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				{{$affected_type}}
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၁၈။ ထိခိုက်ဒဏ်ရာ ရရှိသည့်အစိတ်အပိုင်း -
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				{{$affected_body}} ၊ {{$painpiece}} (@if($affected->painArea==1) ဘယ်ဘက် @elseif($affected->painArea==2) ညာဘက် @else နှစ်ဖက်စလုံး @endif )
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၁၉။ ဖြစ်ပွားရသည့်အကြောင်းအရင်း -
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				{{$impact_type}}
				</div>
			</div>
			<hr>
		</div>
		
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၂၀။ ဖြစ်ပွားရသည့်အကြောင်းအရင်း ဖော်ပြချက်- 
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				{{$impact_type_des}}
				</div>
			</div>
			<hr>
		</div>

		{{-- <div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၂၁။ လုပ်ငန်းခွင် ထိခိုက်မှု အစီရင်ခံစာ တင်ပြအကြောင်းကြားစာ(၂)- 
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				{{$affected-> affectedInform2}}
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၂၂။ လုပ်ငန်းခွင် ထိခိုက်မှု အစီရင်ခံစာ တင်ပြအကြောင်းကြားစာ(၃)- 
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				{{$affected-> affectedInform3}}
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၂၃။ လုပ်ငန်းခွင် ထိခိုက်မှု အစီရင်ခံစာ တင်ပြအကြောင်းကြားစာ(၄)- 
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				{{$affected-> affectedInform4}}
				</div>
			</div>
			<hr>
		</div>
		<div class="col-sm-12 text-left">
			<div class="row">
				<div class="col-sm-5">
				၂၄။ လုပ်ငန်းခွင် ထိခိုက်မှု အစီရင်ခံစာ တင်ပြအကြောင်းကြားစာ(၅)- 
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-5">
				{{$affected-> affectedInform5}}
				</div>
			</div>
			<hr>
		</div> --}}
		
	</div>
</p>
</div>
@endsection