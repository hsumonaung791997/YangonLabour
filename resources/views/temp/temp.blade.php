@extends('layouts.admin')
@section('content')
<script src="{{asset('assets/js/common.js')}}"></script>

@if(isset($factory[0]))       
    <p>
        <div class="row">
            <div class="col-sm-12"> 
                <h3>လျှောက်တင်ရန် မပြီးသေးသော စက်ရုံများ</h3>
            </div>
        </div>
    </p>
    <p>
        <div class="table-responsive">
            <div>
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="name">စက်ရုံအလုပ်ရုံအမည်</th>
                        <th scope="col" class="sort" data-sort="budget">အကြောင်းကြားစာပေးပို့မည့်လိပ်စာ</th>
                        <th scope="col" class="sort" data-sort="status">ဆက်သွယ်ရန် ဖုန်းနံပါတ်</th>
                        <th scope="col">ဆက်သွယ်ရန် ဖက်စ်</th>
                        <th scope="col">လုပ်ဆောင်ချက်</th>
                    </tr>
                </thead>
                <tbody class="list">
                    @foreach ($factory as $f)                    
                    <tr>
                        <th scope="row">
                            {{$f->FactoryName}}
                        </th>
                        <td class="budget">
                            {{$f->NoticeAddress}}
                           
                        </td>
                        <td>
                            {{$f->ContactAddress}}
                           
                        </td>
                        <td>
                                {{$f->ContactFax}}                            
                        </td>
                        <td class="text-center">
                            <a href="{{url('/factory/'.$f->id)}}" class="badge badge-primary" style="text-align:center">ဆက်ဖြည့်မည်</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        </div>
                    
    </p>
    <hr>
@endif
@if(isset($shop[0]))     
    <p>
        <div class="row">
            <div class="col-sm-12"> 
                <h3>လျှောက်တင်ရန် မပြီးသေးသော ဈေးဆိုင်များ</h3>
            </div>
        </div>
    </p>
    <p>
        <div class="table-responsive">
            <div>
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="name">ဆိုင် / အလုပ်ဌာန အမည်</th>
                        <th scope="col" class="sort" data-sort="budget">ဆက်သွယ်ရန် အီးမေး</th>
                        <th scope="col" class="sort" data-sort="status">ဆက်သွယ်ရန် ဖုန်းနံပါတ်</th>
                        <th scope="col">ပိုင်ရှင်အမည်   </th>
                        <th scope="col">လုပ်ဆောင်ချက်</th>
                    </tr>
                </thead>
                <tbody class="list">
                 @foreach ($shop as $s)
                    <tr>
                        <th scope="row">
                            {{$s->shopname}}
                        </th>
                        <td class="budget">
                            {{$s->shopemail}}
                           
                        </td>
                        <td>
                            {{$s->shopphone}}
                           
                        </td>
                        <td>
                                {{$s->ownername}}                            
                        </td>
                        <td class="text-center">
                            <a href="{{url('/shop/'.$s->id)}}" class="badge badge-primary" >ဆက်ဖြည့်မည်</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </p>

    <hr>
@endif
@if(isset($tempFactoryInspectionInform[0]))       
    <p>
        <div class="row">
            <div class="col-sm-12"> 
                <h3> စက်ရုံလုပ်ငန်းဌာနဆိုင်ရာ အချက်အလက်များ</h3>
            </div>
        </div>
    </p>
    <p>
        <div class="table-responsive">
            <div>
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="name">စက်ရုံအလုပ်ရုံအမည်</th>
                        <th scope="col" class="sort" data-sort="budget">စစ်ဆေးခြင်းအကြိမ်
                        </th>
                        <th scope="col" class="sort" data-sort="status">
                                စစ်ဆေးခြင်း အမျိုးအစား
                        </th>
                        <th scope="col">စစ်ဆေးသည့်ရက်စွဲ
                        </th>
                        <th scope="col">လုပ်ဆောင်ချက်</th>
                    </tr>
                </thead>
                <tbody class="list">
                 @foreach ($tempFactoryInspectionInform as $inform)
                    <tr>
                        <th scope="row">
                            {{$inform->FactoryName}}
                        </th>
                        <td class="budget">
                            @if($inform->inspectedtimes==1)
                                ပထမအကြိမ်
                            
                            @elseif($inform->inspectedtimes==2)
                                ဒုတိယအကြိမ်
                            @else
                            အထူး
                            @endif
                           
                        </td>
                        <td>
                            @if($inform->inspectiontype==0)
                            သာမန်
                            @else
                            ပြန်လည်
                            @endif
                           
                        </td>
                        <td>
                             {{$inform->inspectiondate}}                            
                        </td>
                        <td class="text-center">
                            <a href="{{url('/TempFactoryInspectionInformation/'.$inform->id)}}" class="badge badge-primary">ဆက်ဖြည့်မည်</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </p>
   
    <hr>
@endif

{{-- temp factory labour inspection law --}}
@if(isset($tempfactorylabourlaw[0]))       
    <p>
        <div class="row">
            <div class="col-sm-12"> 
                <h3> အလုပ်သမားဥပဒေစစ်ဆေးရေး (စက်ရုံ အလုပ်ရုံ)</h3>
            </div>
        </div>
    </p>
    <p>
        <div class="table-responsive">
            <div>
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="name">စက်ရုံအလုပ်ရုံအမည်</th>
                        <th scope="col" class="sort" data-sort="budget">လုပ်ငန်းပိုင်ရှင်ကပေးပို့ရန်နို့တစ်စာပေးပို့ခြင်
                        </th>
                        <th scope="col" class="sort" data-sort="status">
                                အလုပ်လုပ်ရန်ကာလအပိုင်းအခြားဆိုင်ရာ နို့တစ်စာ ပြသခြင်
                        </th>
                        <th scope="col">လုပ်ဆောင်ချက်</th>
                    </tr>
                </thead>
                <tbody class="list">
                 @foreach ($tempfactorylabourlaw as $law)
                    <tr>
                        <th scope="row">
                            {{App\Factory::where('FactoryId',$law->factory_id)->value('FactoryName')}} 
                        </th>
                        <td class="budget">
                           {{$law->sentnotice}}
                           
                        </td>
                        <td>
                            {{$law->shownotice}}                           
                        </td>
                        <td class="text-center">
                            <a href="{{ route('LabourInspectionLaw.edit',$law->id) }}" class="badge badge-primary">ဆက်ဖြည့်မည်</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </p>
   
    <hr>
@endif

@if(isset($tempFactoryInspectionSafety[0]))       
    <p>
        <div class="row">
            <div class="col-sm-12"> 
                <h3>လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေးနှင့်ကျန်းမာရေးစစ်ဆေးချက်ပုံစံ (စက်ရုံ အလုပ်ရုံ)</h3>
            </div>
        </div>
    </p>
    <p>
        <div class="table-responsive">
            <div>
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="name">စက်ရုံအလုပ်ရုံအမည်</th>
                        <th scope="col" class="sort" data-sort="budget">အကြောင်းအရာ</th>
                        <th scope="col" class="sort" data-sort="status">စစ်ဆေးခဲ့သည့်နေ့စွဲနှင့်အချိန်</th>
                        <th scope="col">အလုပ်ရုံတည်နေရာ</th>
                        <th scope="col">လုပ်ဆောင်ချက်</th>
                    </tr>
                </thead>
                <tbody class="list">
                 @foreach ($tempFactoryInspectionSafety as $safety)
                    <tr>
                        <th scope="row">
                            {{$safety->FactoryName}}
                        </th>
                        <td class="budget">
                            {{$safety->inspection_type}}
                           
                        </td>
                        <td>
                            {{$safety->inspection_datetime}}
                           
                        </td>
                            
                        <td>
                                {{$safety->factoryregion}}
                        </td>
                        <td class="text-center">
                            <a href="{{url('/TempFactoryInspectionSafety/'.$safety->id)}}" class="badge badge-primary">ဆက်ဖြည့်မည်</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </p>
    <hr>
@endif

@if(isset($tempFactoryInspectionImpact[0]))       
    <p>
        <div class="row">
            <div class="col-sm-12"> 
                <h3>စက်ရုံ အလုပ်ရုံ လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက်ပုံစံ</h3>
            </div>
        </div>
    </p>
    <p>
        <div class="table-responsive">
            <div>
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="name">စက်ရုံအလုပ်ရုံအမည်</th>
                        <th scope="col" class="sort" data-sort="budget">ပိုင်ရှင်အမည်   </th>
                        <th scope="col" class="sort" data-sort="status">မန်နေဂျာအမည်    </th>
                        <th scope="col">ဆက်သွယ်ရန် ဖုန်းနံပါတ်</th>
                        <th scope="col">လုပ်ဆောင်ချက်</th>
                    </tr>
                </thead>
                <tbody class="list">
                 @foreach ($tempFactoryInspectionImpact as $impact)
                    <tr>
                        <th scope="row">
                            {{$impact->workname}}
                        </th>
                        <td class="budget">
                            {{$impact->ownername}}
                           
                        </td>
                        <td>
                            {{$impact->managername}}
                           
                        </td>
                           
                        <td>
                            {{$impact->contactphone}}
                        </td>
                        <td class="text-center">
                            <a href="{{url('/TempFactoryInspectionImpact/'.$impact->id)}}" class="badge badge-primary">ဆက်ဖြည့်မည်</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </p>
    <hr>
@endif




@if(isset($tempshopinform[0]))       
    <p>
        <div class="row">
            <div class="col-sm-12"> 
                <h3>စစ်ဆေးချက်ပုံစံဆိုင်များနှင့် အလုပ်ဌာနများ အက်ဥပဒေ ခွင့်ရက်နှင့် အလုပ်ပိတ်ရက် ဥပဒေစစ်ဆေးခြင်း</h3>
            </div>
        </div>
    </p>
    <p>
            <div class="table-responsive">
                <div>
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">ဆိုင်/အလုပ်ဌာနအမည်</th>
                            <th scope="col" class="sort" data-sort="budget">အလုပ်ရှင်အမည်</th>
                            <th scope="col" class="sort" data-sort="status">စစ်ဆေးခြင်းအကြိမ်</th>
                            <th scope="col">စစ်ဆေးချက်ပုံစံ</th>
                            <th scope="col">လုပ်ဆောင်ချက်</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                     @foreach ($tempshopinform as $shopinform)
                        <tr>
                            <td scope="row">
                              {{$shopinform->shopname}}
                            </td>
                            <td class="budget">
                                {{$shopinform->ownername}}
                            </td>
                            <td>
                                {{$shopinform->inspectedtime}}
                            </td>
                            <td>
                                {{$shopinform->inspection_type}}                                
                            </td>
                            <td class="text-center">
                                <a href="{{url('/TempShopInspectionInform/'.$shopinform->id)}}" class="badge badge-primary">ဆက်ဖြည့်မည်</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </p>
    <hr>
@endif

@if(isset($tempshoplabourinspection[0]))       
    <p>
        <div class="row">
            <div class="col-sm-12"> 
                <h3>အလုပ်သမားဥပဒေစစ်ဆေးရေး (ဆိုင်/အလုပ်ဌာန)</h3>
            </div>
        </div>
    </p>
    <p>
            <div class="table-responsive">
                <div>
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">ဆိုင်/အလုပ်ဌာနအမည်</th>
                            <th scope="col" class="sort" data-sort="budget">အများအလုပ်ပိတ်ရက်တွင်ဆိုင်/အလုပ်ဌာနကို ပိတ်ထားခြင်း</th>
                            <th scope="col" class="sort" data-sort="status">အလုပ်သမားများအား အများအလုပ်ပိတ်ရက် ခံစားခွင့်
                                </th>
                            <th scope="col">လုပ်ဆောင်ချက်</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                     @foreach ($tempshoplabourinspection as $shoplabour)
                        <tr>
                            <td scope="row">
                              {{App\Shop::where('ShopId',$shoplabour->shop_id)->value('shopname')}}
                            </td>
                            <td class="budget">
                                {{$shoplabour->numholidays}}
                            </td>
                            <td>
                                {{$shoplabour->opportunityhol}}
                            </td>
                            <td class="text-center">
                                <a href="{{ route('ShopLabourInspectionLaw.edit',$shoplabour->id) }}" class="badge badge-primary">ဆက်ဖြည့်မည်</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </p>
    <hr>
@endif

@if(isset($tempshopsafety[0]))       
    <p>
        <div class="row">
            <div class="col-sm-12"> 
                <h3>လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေးနှင့်ကျန်းမာရေးစစ်ဆေးချက်ပုံစံ (ဆိုင်/အလုပ်ဌာန)</h3>
            </div>
        </div>
    </p>
    <p>
            <div class="table-responsive">
                <div>
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">ဆိုင်/အလုပ်ဌာနအမည်</th>
                            <th scope="col" class="sort" data-sort="budget">ဆိုင် / အလုပ်ဌာနပိုင်ရှင်အမည်</th>
                            <th scope="col" class="sort" data-sort="status">ဆိုင် / အလုပ်ဌာနပိုင်ရှင်နေရပ်
                                </th>
                            <th scope="col">လုပ်ဆောင်ချက်</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                     @foreach ($tempshopsafety as $safety)
                        <tr>
                            <td scope="row">
                              {{App\Shop::where('ShopId',$safety->shop_id)->value('shopname')}}
                            </td>
                            <td class="budget">
                                {{$safety->ownername}}
                            </td>
                            <td>
                                {{$safety->owneraddress}}
                            </td>
                            <td class="text-center">
                                <a href="{{ route('ShopSafteyInspection.edit',$safety->id) }}" class="badge badge-primary">ဆက်ဖြည့်မည်</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </p>
    <hr>
@endif

@if(isset($tempshopleave[0]))       
    <p>
        <div class="row">
            <div class="col-sm-12"> 
                <h3>၁၉၅၁ ခွင့်ရက်နှင့် အလုပ်ပိတ်ရက် ဥပဒေစစ်ဆေးခြင်း (ဆိုင် / အလုပ်ဌာန)</h3>
            </div>
        </div>
    </p>
    <p>
            <div class="table-responsive">
                <div>
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">ဆိုင်/အလုပ်ဌာနအမည်</th>
                            <th scope="col" class="sort" data-sort="budget">အများအလုပ်ပိတ်ရက်တွင်ဆိုင်/အလုပ်ဌာနကို ပိတ်ထားခြင်း</th>
                            <th scope="col" class="sort" data-sort="status">အလုပ်သမားများအား အများအလုပ်ပိတ်ရက် ခံစားခွင့်</th>
                            <th scope="col">လုပ်ဆောင်ချက်</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                     @foreach ($tempshopleave as $shopleave)
                        <tr>
                            <td scope="row">
                              {{$shopleave->shopname}}
                            </td>
                            <td class="budget">
                                {{$shopleave->numholidays}}
                            </td>
                            <td>
                                {{$shopleave->opportunityhol}}
                            </td>
                            <td class="text-center">
                                <a href="{{url('/TempShopInspectionLeave/'.$shopleave->id)}}" class="badge badge-primary">ဆက်ဖြည့်မည်</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </p>
    <hr>
@endif
<!-- scroll back to top of the page -->
<a id="back2Top" title="Back to top" href="#">&#10148;</a>

@endsection