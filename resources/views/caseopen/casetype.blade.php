@extends('layouts.admin')
@section('content')
<script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>

    

    <p>
    	<div class="row">
	        <div class="col-lg-6 text-center">
	            <div class="pull-left">
	                <h2>ဆောင်ရွက်ထားသော လုပ်ငန်းစဉ်များ</h2>
	            </div>
	            
	        </div>
	        <div class="col-sm-6 text-right">
	        	<div class="pull-right">
                    {{-- <a class="btn btn-primary" href="{{ url('casenewinspectiontype')}}"> ဆောင်ရွက်မှုကိစ္စအသစ်ထည့်ရန်</a> --}}
	                <a class="btn btn-primary" href="{{ url('newcaseinspection/1')}}"> ဆောင်ရွက်မှုကိစ္စအသစ်ထည့်ရန်</a>
                    

	            </div>
	        </div>
    	</div>
    </p>
    <p>
      <div class="row">
          <div class="col-lg-6 text-center">
              <select name="factorytype" id="factorytype" class="form-control">
                  <option value="">စက်ရုံ/အလုပ်ရုံ (သိုမဟုတ်) ဆိုင်နှင့်အလုပ်ဌာများရွေးချယ်ရန်</option>
                  <option value="1" @if($id==1) selected @endif>ဆောင်ရွက်ထားသော စက်ရုံအလုပ်ရုံများ</option>
                  <option value="2"  @if($id==2) selected @endif>ဆောင်ရွက်ထားသော ဆိုင်နှင့်အလုပ်ဌာနများ</option>
              </select>
          </div>
      </div>
    </p>
     
	<div class="table-responsive">
    	<div class="cases">
		    <table class="table table-bordered">
		        <thead class="thead-light">
		            <tr>
		                <th scope="col">
		                   စဉ်
		                </th>
		                 <th scope="col">
                      @if($id==1)
		                    စက်ရုံ / အလုပ်ရုံ အမည်
                      @else
                      ဆိုင်နှင့်အလုပ်ဌာနအမည်
                      @endif
		                </th>
		                <th scope="col">
		                   စစ်ဆေးသူအမည်
		                </th>
		                <th >
		                	စစ်ဆေးသည့်နေ့ရက်
		                </th>
                        <th >
                            စက်မှုဇုန်
                        </th>
                        <th >
                            စစ်ဆေးခဲ့သည့်မြို့နယ်
                        </th>
                        <th >
                            စစ်ဆေးခဲ့သည့် ခရိုင်
                        </th>
                        <th scope="col">
                            ဆောင်ရွက်မှုအခြေအနေ
                        </th>
                        <!-- <th scope="col">
                            စစ်ဆေးချက်များကြည့်ရန်
                        </th> -->
                        <th scope="col">
                            ညွှန်ကြားချက်ထုတ်ရန်
                        </th>
                        <th scope="col">
                            အစီရင်ခံစာတင်ရန်
                        </th>       
		            </tr>
		        </thead>
		        <tbody class="list">
                    <?php $i=0;?>
            @foreach ($cases as $c)
            <tr>
                <th scope="row" class="name">
                    {{ ++$i }}
                </th>
               
                <td class="budget">
                  @if($id==1)
                {{$c->FactoryName}}
                @else
                {{$c->shopname}}
                @endif
                </td>
                <td class="status">
                  {{$c->name}} 
                </td>
                <td>                    
                 {{$c->inspectiondate}}    
                    
                </td>
                @if($id==1)
                <?php 
               $fadd=App\Factory::where('FactoryId',$c->factory_id)->first();
              
               ?>
            
                 <td> 
                                     
               
                 {{$fadd->zone->industrialzone_name}}
                 
                                    
                </td>
                <td> 
                    {{$fadd->township->township_name}}
                </td>
                @else
                <?php
                 $fadd=App\Shop::where('ShopId',$c->ShopId)->first();
              
               ?>
            
                 <td> 
                                   
                </td>
                <td> 
                    {{$fadd->township->township_name}}
                </td>
@endif
                <td>  
                              
                 <?php
               
                        $districtname=App\Township::where('id',$c->FromTownshipid)->first();
                        
                    ?>
                    {{$districtname->district->district_name}}
                
                    
                </td>
                
                <td class="completion">
                    @if($c->Status==1)ဆောင်ရွက်ရန်
                    @elseif($c->Status==2)ဆောင်ရွက်ဆဲ
                    @elseif($c->Status==3)ဆောင်ရွက်ပြီး
                    @else Close
                    @endif
                </td>
               <!--  <td>
                   @if($c->documentId1!=null)
                <a href="{{url('storage/instruction/'.$c->documentId1)}}" class="btn  btn-info">{{$c->documentId1}}</a>
           			 @endif
        

          		</td> -->
                <td>
                 @if($c->FromUserId!=Auth::user()->id)
                 <a href="{{url('createinstruction/'.$c->caseid.'/'.$c->factorytype)}}"  class="badge badge-success disabled"  >ညွှန်ကြားချက်ထုတ်ရန်</a>
                  @else
                  <a href="{{url('createinstruction/'.$c->caseid.'/'.$c->factorytype)}}"  class="badge badge-success"  >ညွှန်ကြားချက်ထုတ်ရန်</a> 
                  @endif 
                </td>
                <td>
                  <a href="{{url('createreport/'.$c->caseid.'/'.$c->factorytype)}}"  class="badge badge-success">အစီရင်ခံစာတင်ရန်</a>  
                 @if($c->Status==1 || $c->Status==2)
                  <a href="{{url('CloseCase/'.$c->caseid)}}"  class="badge badge-danger">ဖိုင်ပိတ်သိမ်းမည်</a>  
                  @endif
                </td>
               
               
            </tr>
            @endforeach
          
            
        </tbody>
    </table>
   
</div>
{!! $cases->links() !!}

</div>

<script>

 
 
   $('#factorytype').change(function(){ 
       var id = $(this).val();
       
       if(id != '')
       {
       
        window.location.href="{{url('factorycase')}}/"+id;
       }
   });

</script>
@endsection