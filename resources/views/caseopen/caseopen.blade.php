@extends('layouts.admin')
@section('content')

</style>
 
     <form action="{{url('caseopen')}}" method="post">
     {{csrf_field()}}
     @foreach($newcase as $case)
  
        <p>
            <div class="row">
                <div class="col-sm-5">
                <label>{{($id==1) ? 'စက်ရုံ' : 'ဆိုင်/အလုပ်ဌာန'}} အမည်</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" value="@if($id==1){{$case->FactoryName}}@else{{$case->shopname}}@endif"/>
                    <input type="hidden" name="factoryid" value="@if($id==1){{$case->FactoryId}}@else{{$case->ShopId}}@endif"/>
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col-sm-5">
                    <label>ဖိုင်တွဲရန်</label>
                </div>
                <div class="col-sm-7">
                    <?php $i=1;?>
                    @if(sizeof($document)==0)
                    <div class="row">
                        <div class="col-sm-6">
                        <div class="custom-control custom-checkbox mb-3">
                    <input class="custom-control-input" id="nofile" name="filename[{{$i}}]"type="checkbox" value="nofile" required>
                        <label class="custom-control-label" for="nofile">There is no to attach any file</label>
                </div>
                </div>
                
                </div>  
                    @else
                    @foreach ($document as $d)

                    <div class="row">
                        <div class="col-sm-6">
                        <div class="custom-control custom-checkbox mb-3">
                        <input class="custom-control-input" id="{{$d->ID}}" name="filename[{{$i}}]"type="checkbox" value="{{$d->documentfileName}}" required>
                        <label class="custom-control-label" for="{{$d->ID}}">{{$d->documentfileName}}</label>
                    </div>
                </div>
                
                    </div>
                    <?php $i++;?>
                @endforeach
                @endif
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col-sm-5">
                    <label>စတင်ဆောင်ရွက်သည့်နေ့စွဲ</label>
                </div>
                
                <div class="col-sm-7">
                   <input  name="createdate" value="{{Carbon\Carbon::now()->toDateString()}}" >
                       
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col-sm-5">
                    <label>ဆောင်ရွက်သူအမည်</label>
                </div>
                
                <div class="col-sm-7">
                   <input type="text" name="registername" value="{{$case->name}}" >
                       
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col-sm-5">
                    <label>စစ်ဆေးသူအရာရှိအမည်</label>
                </div>
                
                <div class="col-sm-7">
                   <input type="text" name="inspector" value="{{$case->inspection_name}}" >
                       
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col-sm-5">
                    <label>စက်မှုဇုန်</label>
                </div>
                <div class="col-sm-7">
                  <input type="text" name="zone" value="@if($id==1){{$case->industrialzone_name}}@endif" >   
                </div>
            </div>
        </p>
        <p>
            <div class="row">
                <div class="col-sm-5">
                    <label>မြို့နယ်</label>
                </div>
                <div class="col-sm-7">
                  <input type="text" name="township" value="{{$case->township_name}}" >   
                </div>
            </div>
        </p>
         <p>
            <div class="row">
                <div class="col-sm-5">
                    <label>ခရိုင်</label>
                </div>
                  <div class="col-sm-7">
                  <input type="text" name="district" value="{{$case->district_name}}" >   
                </div>        
            </div>
            
        </p>
       <input type="hidden" name="checkid" value="@if($id==1){{$case->cid}}@else{{$case->sid}} @endif">
       <input type="hidden" name="inspecteddate" value="{{$case->inspectiondate}}">
       <input type="hidden" name="townshipid" value="{{$case->township_id}}"/>
       <input type="hidden" name="districtid" value="{{$case->district_id}}"/>
       <input type="hidden" name="zoneid" value="@if($id==1){{$case->zone_id}}@endif"/>
       <input type="hidden" name="factorytype" value="{{$id}}"/>
      <div class="row">
            <div class="col-sm-2 float-right">
                @if($id==1)
                @if($case->inspectiontype=='ပုံမှန်'||$case->inspectiontype=='အထူး' || $case->inspectiontype=='လျှပ်တစ်ပြတ်')
                <input type="submit" name="save" class="btn btn-primary"value="opencase"/>
                @else
               
                <input type="submit" name="save" class="btn btn-primary" value="updatecase"/>
                @endif

                @else
                @if($case->inspection_type=='ပုံမှန်'||$case->inspection_type=='အထူး' || $case->inspection_type=='လျှပ်တစ်ပြတ်')
                <input type="submit" name="save" class="btn btn-primary"value="opencase"/>
                @else
               
                <input type="submit" name="save" class="btn btn-primary" value="updatecase"/>
                @endif
                
                @endif
            </div>
   </div>
    @endforeach
@endsection