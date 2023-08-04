@extends('layouts.admin')
 
@section('content')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="{{asset('assets/js/common.js')}}"></script>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>အလုပ်သမားရေးရာ ဥပဒေများအား အသိပညာပေးဆွေးနွေးပွဲ ဆောင်ရွက်မှု</h2>
            </div>
            
        </div>
    </div>

            <div class="row">
                <div class="col-sm-5">
                    <select name="factorytype" id="factorytype" class="form-control">
                        <option value="1">စက်ရုံ/အလုပ်ရုံ</option>
                        <option value="2">ဆိုင်နှင့်အလုပ်ဌာနများ</option>
                    </select>
                    
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-4 text-center">
                    <input type="text" name="factoryname" id="factoryname" class="form-control" placeholder="အလုပ်ရုံ၊ စက်ရုံ အမည်" />
                    <div id="factoryList">
                    </div>
                </div>
                <div class="col-sm-2">
                    <button id="search">ရှာရန်</button>
                </div>
                
            </div>
   

    <form  class="form-background"  method="post">
     {{csrf_field()}}
  
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        
        
<input type="hidden" id="factoryid" name="factoryid" value="{{old('factoryid')}}" >
         <input type="hidden" id="factorytypeid" name="factorytype" value="" >
            <div class="row">
                <div class="col-sm-5 text-center">
                    <label for="FactoryName">ကျင်းပသည့်နေ့စွဲ <span style="color:red">*</span></label>
                    <input  type="date" class="form-control" name="date" value="{{old('date')}}" required>
                </div>
                <div class="col-sm-1">
                                  
            </div>
            <div class="col-sm-5 text-center">
                    <label for="FactoryName">စက်ရုံအမည် <span style="color:red">*</span></label>
                    <input  id="FactoryName" class="form-control" name="FactoryName" value="{{old('FactoryName')}}" required>
            </div>
        </div>
            <div class="row">
                <div class="col-sm-5 text-center">
                    <label for="FactoryName">ဆွေးနွေးပွဲဦးဆောင်ပြုလုပ်သူ အမည် <span style="color:red">*</span></label>
                        <input  type="text" id="" class="form-control" name="seminarleader" value="{{old('seminarleader')}}" required>
                </div>
                <div class="col-sm-1">
                </div> 
                <div class="col-sm-5 text-center">
                    <label for="FactoryID">ဆွေးနွေးပွဲဦးဆောင်ပြုလုပ်သူ ရာထူး <span style="color:red">*</span></label>
                        <input type="text" id="" class="form-control" name="seminarleaderrank" value="{{old('seminarleaderrank')}}" required>
                </div>                  
               
                                    
            </div>
            <div class="row">
                <div class="col-sm-5 text-center">
                    <label for="FactoryName">ဆွေးနွေးသူ၁</label>
                        <input type="text" id="" class="form-control" name="contributor1" value="{{old('contributor1')}}">
                </div>
                <div class="col-sm-1">
                </div> 
                <div class="col-sm-5 text-center">
                    <label for="FactoryID">ဆွေးနွေးသူ ရာထူး</label>
                        <input type="text" id="" class="form-control" name="contributor1rank" value="{{old('contributor1rank')}}">
                </div>                  
               
                                    
            </div>
            <div class="row">
                <div class="col-sm-5 text-center">
                    <label for="FactoryName">ဆွေးနွေးသူ ၂</label>
                        <input type="text" id="" class="form-control" name="contributor2" value="{{old('contributor2')}}">
                </div>
                <div class="col-sm-1">
                </div> 
                <div class="col-sm-5 text-center">
                    <label for="FactoryID">ဆွေးနွေးသူ ရာထူး</label>
                        <input type="text" id="" class="form-control" name="contributor2rank" value="{{old('contributor2rank')}}">
                </div>                  
               
                                    
            </div>
            <div class="row">
                <div class="col-sm-5 text-center">
                    <label for="FactoryName">ဆွေးနွေးသူ ၃</label>
                        <input  type="text"id="" class="form-control" name="contributor3" value="{{old('contributor3')}}">
                </div>
                <div class="col-sm-1">
                </div> 
                <div class="col-sm-5 text-center">
                    <label for="FactoryID">ဆွေးနွေးသူ ရာထူး</label>
                        <input type="text" id="" class="form-control" name="contributor3rank" value="{{old('contributor3rank')}}">
                </div>                  
               
                                    
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">ဆွေးနွေးပွဲကျင်းပရာနေရာ</legend>
                        <div class="control-group">
                            <div class="row">
                                <div class="col-sm-5 text-right">
                                    <label for="district">ခရိုင် <span style="color:red">*</span></label>
                                </div>
                                <div class="col-sm-6 text-left">
                                    <select  id="district_id"type="text" class="form-control" name="district_id" required>
                                   
                                        <option value="">Choose District
                                        </option>
                                        @foreach($district as $dis)
                                        <option value="{{$dis->id}}">{{$dis->district_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> <br>
                            <div class="row">
                                <div class="col-sm-5 text-right">
                                    <label for="township_id">မြို့နယ် <span style="color:red">*</span></label>
                                </div>
                                <div class="col-sm-6 text-left">
                                    <select id="township_id" class="form-control" name="township_id" required>
                                        
                                        <option value="">Choose TownShip</option>
                                    </select>
                                </div>
                            </div> <br>
                            <div class="row">
                
                    <div class="col-sm-5 text-right">
                            <label for="FactoryName">ကျင်းပပြုလုပ်သည့်နေရာ <span style="color:red">*</span></label>
                    </div>
                    <div class="col-sm-6 text-left">       
                        <textarea rows="3" class="col-sm-12 form-control" name="splace" required>{{old('splace')}}</textarea>
                </div>
                               
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5 text-center">
                    <label for="FactoryName">သင်တန်းကျောင်းအမည်  <span style="color:red"> *</span></label>
                        <textarea rows="3" class="col-sm-12 form-control" name="trainingclass" required>{{old('trainingclass')}}</textarea>
                </div>
                <div class="col-sm-1">
                </div> 
                <div class="col-sm-5 text-center">
                    <label for="FactoryID">ပြုလုပ်သည့်အကြိမ် <span style="color:red"> *</span></label>
                        <input  type="text" id="" class="form-control" name="stimes" value="{{old('stimes')}}" required>
                </div>                  
               
                                    
            </div>
<div class="row">
    <div class="col-sm-12">
        <fieldset class="scheduler-border">
                        <legend class="scheduler-border">တက်ရောက်သည့်ဦးရေ</legend>
            
            <div class="row">
                <div class="col-sm-5 text-center">
                    <label for="FactoryName">ကျား <span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="men" value="{{old('men')}}" required>
                </div>
                <div class="col-sm-1">
                </div> 
                <div class="col-sm-5 text-center">
                    <label for="FactoryID">မ <span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="women" value="{{old('women')}}" required>
                </div>                  
               
                                    
            </div>
        </fieldset>
    </div>
</div>
<div class="blank10"></div>
    <div class="col-sm-12 text-right">
            <button type="submit" class=" btn btn-primary">သိမ်းမည်</button>
    </div>
    
</form>
<!-- scroll back to top of the page -->
<a id="back2Top" title="Back to top" href="#">&#10148;</a>

 
 <script>
 $(document).ready(function(){
 $('#factoryname').keyup(function(){ 
        var factorytype=$('#factorytype').val();
        var query = $(this).val();

        if(query != '' && factorytype!='')
        {
      
         $.ajax({
             type: 'GET', //THIS NEEDS TO BE GET
                    url: '{{ route('factorysearchdata') }}',
             
                   data:{query:query,
            factorytype:factorytype},
          success:function(data){

               $('#factoryList').fadeIn();  
               $('#factoryList').html(data);
               
            }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#factoryname').val($(this).text());  
        $('#factoryList').fadeOut();  
    });
    $( "#search" ).click(function() {
  var query = $('#factoryname').val();
  var factorytype=$('#factorytype').val();
  
               $.ajax({
                    type: 'GET', //THIS NEEDS TO BE GET
                    url: '{{ route('autocompletename') }}',
                    data:{name:query,factorytype:factorytype},
                    success: function (data) {
                        $('#factorytypeid').val(data.factorytype);
                        
                        if(factorytype==1){
                        $('#factoryid').val(data.FactoryId);
                      $('#FactoryName').val(data.FactoryName);
                      $('#ownername').val(data.OwnerName);
                   
                     console.log(data.factorytype);

                        }else{
                          $('#factoryid').val(data.ShopId);
                        $('#FactoryName').val(data.shopname);
                        $('#ownername').val(data.ownername);
                          
                        }
                         
                       
          
                    },
                    error: function() { 
                         console.log(data);
                    }
        });
});  
   $('#district_id').change(function(){ 
       var id = $(this).val();
       if(id != '')
       {
        $.ajax({
         url:"{{ route('locationtownship.fetch') }}",
         method:"GET",
         data:{id:id},
         success:function(data){
            console.log(data);
            $.each(data, function (i, item) {
                    $('#township_id').append($('<option>', { 
                        value: item.id,
                        text : item.township_name 
                    }));
                });
           }
        });
       }
   });
});
 </script>       
@endsection