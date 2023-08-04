@extends('layouts.admin')
@section('content')
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="{{asset('assets/js/common.js')}}"></script>
<script type='text/javascript'>

</script>
	
	@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
	@if(session()->get('success'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<span class="alert-inner--icon"></span>
			<span class="alert-inner--text">  {{ session()->get('success') }}  </span>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	@endif
	
	<h1>စစ်ဆေးချက်ပုံစံဆိုင်များနှင့် အလုပ်ဌာနများ အက်ဥပဒေ ခွင့်ရက်နှင့် အလုပ်ပိတ်ရက် ဥပဒေစစ်ဆေးခြင်း</h1>
		

		{{-- <p>
			<div class="row">
				<div class="col-sm-6 text-center">
					
					<input placeholder="ဆိုင်/အလုပ်ဌာနအမည်"  name="shopname" id="shopname">
					<div id="shopList">
					</div>
				</div>
			
				<div class="col-sm-2 text-left">
					<input type="button" id="search" value="Search" class="btn btn-lg btn-info"/>
				</div>
			</div>
		</p> --}}

		<form id="regForm" action="{{route('shop_inspection.store')}}" method="post">
				{{csrf_field()}}
				<input type="hidden" name="ShopId" id="shopid" value="{{$tempshopinform->ShopId}}">
               
				<p>
					<div class="row">
						<div class="col-sm-6">
                            <label for="ShopName">ဆိုင်/အလုပ်ဌာနအမည်</label>
                            <input type="type" name="shopname" id="ShopName" value="{{$tempshopinform->shopname}}">
                            
						</div>
						<div class="col-sm-6">
							<!-- <div class="form-group">
                                <label for="datepicker">စစ်ဆေးခဲ့သည့်နေ့စွဲနှင့်အချိန်</label>
                                <input type='date' id="datepicker"/>
                                
                            </div> -->
						</div>		
					</div>
				</p>

				<p>
					<div class="row">
						<div class="col-sm-6">
							<div class="row">
								<div class="col-sm-5 text-right">
									<label for="datepicker">စစ်ဆေးသည့်ရက်စွဲ</label>
								</div>
								<div class="col-sm-7">
									<input type='date' id="datepicker" name="inspectiondate" value="{{$tempshopinform->inspectiondate}}"/>
								</div>
							</div>
						</div>
						
						<div class="col-sm-6">
							<div class="row">
								<div class="col-sm-5 text-right">
									<label for="datepicker"> နောက်ဆုံးစစ်ဆေးခဲ့သည့်ရက်စွဲ</label>
								</div>
								<div class="col-sm-7">
									<input type='date' id="datepicker" name="lastinspectiondate" value="{{$tempshopinform->lastinspectiondate}}"/>
								</div>
							</div>
						</div>		
					</div>
				</p>

				<p>
				<div class="row">
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-5 text-right">
								<label for="testingtime"> စစ်ဆေးခြင်းအကြိမ်</label>
							</div>
							<div class="col-sm-7">
								<select name='inspectedtime' id="testingtime" class="form-control">
									<option value='ပထမအကြိမ်' @if($tempshopinform->testingtime=='ပထမအကြိမ်') selected @endif>ပထမအကြိမ်</option>
									<option value='ဒုတိယအကြိမ်' @if($tempshopinform->testingtime=='ဒုတိယအကြိမ်') selected @endif>ဒုတိယအကြိမ်</option>
									<option value='တတိယအကြိမ်' @if($tempshopinform->testingtime=='တတိယအကြိမ်') selected @endif>တတိယအကြိမ်</option>
									<option value='စတုတ္ထအကြိမ်' @if($tempshopinform->testingtime=='စတုတ္ထအကြိမ်') selected @endif>စတုတ္ထအကြိမ်</option>
									<option value='ပဉ္စမအကြိမ်' @if($tempshopinform->testingtime=='ပဉ္စမအကြိမ်') selected @endif>ပဉ္စမအကြိမ်</option>
									<option value='ဆဌမအကြိမ်' @if($tempshopinform->testingtime=='ဆဌမအကြိမ်') selected @endif>ဆဌမအကြိမ်</option>
									<option value='သတ္တမအကြိမ်' @if($tempshopinform->testingtime=='သတ္တမအကြိမ်') selected @endif>သတ္တမအကြိမ်</option>
									<option value='အဌမအကြိမ်' @if($tempshopinform->testingtime=='အဌမအကြိမ်') selected @endif>အဌမအကြိမ်</option>
									<option value='နဝမအကြိမ်' @if($tempshopinform->testingtime=='နဝမအကြိမ်') selected @endif>နဝမအကြိမ်</option>
									<option value='ဒဿမအကြိမ်'@if($tempshopinform->testingtime=='ဒဿမအကြိမ်') selected @endif>ဒဿမအကြိမ်</option>
	
								</select>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row">
								<div class="col-sm-5 text-right">
									<label for="testingtime"> စစ်ဆေးချက်ပုံစံ</label>
								</div>
								<div class="col-sm-7">
									<select name='inspection_type' id="testingtime" class="form-control">
										<option value='ပုံမှန်' @if($tempshopinform->inspection_type=='ပုံမှန်') selected @endif>ပုံမှန်</option>
										<option value='ပြန်လည်' @if($tempshopinform->inspection_type=='ပြန်လည်') selected @endif>ပြန်လည်</option>
										<option value='တုံ့ပြန်' @if($tempshopinform->inspection_type=='တုံ့ပြန်') selected @endif>တုံ့ပြန်</option>
										<option value='အထူး' @if($tempshopinform->inspection_type=='အထူး') selected @endif>အထူး</option>
										<option value='လျှပ်တစ်ပြတ်' @if($tempshopinform->inspection_type=='လျှပ်တစ်ပြတ်') selected @endif>လျှပ်တစ်ပြတ်</option>
									</select>
								</div>
						</div>
					</div>
			  </div>
			</p>
  	
	  	<p>
	  		<div class="row">
	  			<div class="col-sm-6 text-center">
	  				<div class="row">
	  					<div class="col-sm-5">
	  						<label>ဆိုင်/အလုပ်ဌာန လိပ်စာ</label>
	  					</div>
	  					<div class="col-sm-7">
                          <textarea name="shopaddress" id="shopadddress" class="col-sm-12">{{$tempshopinform->shopaddress}}</textarea>
	  					</div>
	  				</div>
	  				
	  			</div>
	  		
	  			<div class="col-sm-6 text-left">
	  			 <div class="row">
	  				<div class="col-sm-5">
	  						<label>ပိုင်ဆိုင်မှု အမျိုးအစား</label>
	  					</div>
	  					<div class="col-sm-7">
                          <input type="text" name="property" id="property" value="{{$tempshopinform->property}}">
	  					</div>
	  				</div>
	  			</div>
	  	</div>
	  		
	  	</p>
	  	<p>
	  		<div class="row">
	  			<div class="col-sm-6 text-center">
	  				<div class="row">
	  					<div class="col-sm-5">
	  						<label>အလုပ်ရှင်အမည်</label>
	  					</div>
	  					<div class="col-sm-7">
	  						<input type="text" name="ownername" id="ownername" value="{{$tempshopinform->ownername}}">
	  					</div>
	  				</div>
	  				
	  			</div>
	  		
	  			<div class="col-sm-6 text-left">
	  				<div class="row">
	  					<div class="col-sm-5">
	  						<label>အလုပ်ရှင်နေရပ်လိပ်စာ</label>
	  					</div>
	  					<div class="col-sm-7">
	  						<textarea name="owneraddress" id="owneraddress" class="col-sm-12">{{$tempshopinform->owneraddress}}</textarea>
	  					</div>
	  				</div>
	  			</div>
	  		</div>
	  		
	  	</p>
	  	<p>
	  		<div class="row">
	  			<div class="col-sm-6 text-center">
		  				<fieldset class="scheduler-border" id="dynamicshareholder">
						    <legend class="scheduler-border">အစုစပ်များရှိကဖော်ပြရန်</legend>
						   
							    <div class="row">
								 	<div class="col-sm-6 ">
								 		<input type="text" name="addmore[0][share]" placeholder=" အစုစပ်အမည်" class="form-control" />  
				               
								 		
									</div>  
									<div class="col-sm-6 ">
								 		<button type="button" name="add" id="add" class="btn btn-info">ထပ်ထည့်ရန်</button>
									</div>
									
								</div>
								
						    
						</fieldset> 
		  			</div>
		  			<div class="col-sm-6">
		  				<div class="row">
		  					<div class="col-sm-5">
		  						<label>လုပ်ငန်းအမျိုးအစား</label>		  						
		  					</div>
		  					<div class="col-sm-7">
		  						<input type="text" name="workcategory" id="workcategory" value="{{$tempshopinform->workcategory}}">
		  					</div>
		  				</div>
		  				  			
		
	  		</div>
	  	</div>	  		
	  	</p>

  		<p>
	  		<div class="row">
	  			<div class="col-sm-6 text-center">
	  				<div class="row">
	  					<div class="col-sm-5">
	  						<label>မန်နေဂျာအမည်</label>
	  					</div>
	  					<div class="col-sm-7">
	  						<input type="text" name="managername" id="managername" value="{{$tempshopinform->managername}}">
	  					</div>
	  				</div>
	  				
	  			</div>
	  		
	  			<div class="col-sm-6 text-left">
	  				<div class="row">
	  					<div class="col-sm-5">
	  						<label>မန်နေဂျာလိပ်စာ</label>
	  					</div>
	  					<div class="col-sm-7">
	  						<textarea name="manageraddress" id="manageraddress" class="col-sm-12">{{$tempshopinform->manageraddress}}</textarea>
	  					</div>
	  				</div>
	  			</div>
	  		</div>
	  		
	  	</p>
	  	<p>
	  		<div class="row">
	  			<div class="col-sm-12 text-center">
		  				<fieldset class="scheduler-border" id="dynamicothershop">
						    <legend class="scheduler-border">အလုပ်ရှင်ပိုင်ဆိုင်သော ဆိုင်၊အလုပ်ဌာန၊အလုပ်ရုံစသည်တို.၏ အမည်နှင့် လိပ်စာ </legend>
						   
							    <div class="row">
								 	<div class="col-sm-5 ">
								 		<input type="text" name="addmore[0][othershopname]" placeholder=" ဆိုင်၊အလုပ်ဌာန၊အလုပ်ရုံ အမည်" class="form-control" />  
									</div>  
									<div class="col-sm-5">
										<textarea name="addmore[0][othershopaddress]" placeholder=" ဆိုင်၊အလုပ်ဌာန၊အလုပ်ရုံ လိပ်စာ" class="col-sm-12"></textarea>
									</div>
									<div class="col-sm-2">
								 		<button type="button" name="add" id="addshop" class="btn btn-info">ထပ်ထည့်ရန်</button>
								 	</div>								
									
								</div>
								
						    
						</fieldset> 
		  			</div>
		  				  			
		
	  		</div>
	  		
	  	</p>

  		<p>
	  		<div class="row">
	  			<div class="col-sm-6 text-center">
	  				<div class="row">
	  					<div class="col-sm-5">
	  						<label>မေးမြန်းချက်များကိုဖြေကြားသူ၏ အမည်</label>
	  					</div>
	  					<div class="col-sm-7">
	  						<input type="text" name="intervieweename" id="intervieweename" value="{{$tempshopinform->intervieweename}}">
	  					</div>
	  				</div>
	  				
	  			</div>
	  		
	  			<div class="col-sm-6 text-left">
	  				<div class="row">
	  					<div class="col-sm-5">
	  						<label>မေးမြန်းချက်များကိုဖြေကြားသူ၏အလုပ်အကိုင်</label>
	  					</div>
	  					<div class="col-sm-7">
	  						<textarea name="intervieweenamerank" id="intervieweenamerank" class="col-sm-12">{{$tempshopinform->intervieweenamerank}}</textarea>
	  					</div>
	  				</div>
	  			</div>
	  		</div>
	  		
	  	</p>
	  	{{-- <p>
		<div>
			<table border="1">		  
			<tr>
				<td></td>
				<td>၁၈နှစ်နှင့်အထက်</td>
				<td>၁၅နှစ်မှ၁၈နှစ်</td>
				<td>၁၃နှစ်မှ၁၅နှစ်</td>
				<td>ပေါင်း</td>
			</tr>

			<tr>
				<td>ကျား</td>
				<td><input type='text' value=0  name="above18m" value="{{$tempshopinform->above18m}}"></td>
				<td><input type='text' value=0  name="above15m" value="{{$tempshopinform->above15m}}"></td>
				<td><input type='text' value=0  name="above13m" value="{{$tempshopinform->above13m}}"></td>
				<td><input type='text' value=0  name="totalm" value="{{$tempshopinform->totalm}}"></td>
			</tr>

			<tr>
				<td>မ</td>
				<td><input type='text' value=0  name="above18f" value="{{$tempshopinform->above18f}}"></td>
				<td><input type='text' value=0  name="above15f" value="{{$tempshopinform->above15f}}"></td>
				<td><input type='text' value=0  name="above13f" value="{{$tempshopinform->above13f}}"></td>
				<td><input type='text' value=0  name="totalf" value="{{$tempshopinform->totalf}}"></td>
			</tr>
			</table> 
		</div>
	</p> --}}

		<p>
			<div>
				<table border="1">		  
				<tr>
					<td></td>
					<td>၁၈နှစ်နှင့်အထက်</td>
					<td>၁၅နှစ်မှ၁၈နှစ်</td>
					<td>၁၃နှစ်မှ၁၅နှစ်</td>
					<td>စုစုပေါင်း</td>
				</tr>
	
				<tr>
					<td>ကျား</td>
					<td><input type='text' value="{{$tempshopinform->above18m}}"  name="above18m" id="above18m" onkeyup="converunistring('man')"></td>
					<td><input type='text' value="{{$tempshopinform->above15m}}"  name="above15m" id="above15m" onkeyup="converunistring('man')"></td>
					<td><input type='text' value="{{$tempshopinform->above13m}}"   name="above13m" id="above13m" onkeyup="converunistring('man')"></td>
					<td><input type='text' value="{{old('totalm')}}"  name="totalm" id="totalm"></td>
				</tr>
	
				<tr>
					<td>မ</td>
					<td><input type='text'  value="{{$tempshopinform->above18f}}" name="above18f" id="above18f" onkeyup="converunistring('women')"></td>
					<td><input type='text'  value="{{$tempshopinform->above15f}}" name="above15f" id="above15f" onkeyup="converunistring('women')"></td>
					<td><input type='text'  value="{{$tempshopinform->above13f}}" name="above13f" id="above13f" onkeyup="converunistring('women')"></td>
					<td><input type='text'  value="{{old('totalf')}}"  name="totalf" id="totalf"></td>
				</tr>
				</table> 
			</div>
		</p>

	<p>
	<div class="row">
	  			<div class="col-sm-12 text-center">
		  				<fieldset class="scheduler-border" id="dynamicworkerinformation">
						    <legend class="scheduler-border">အလုပ်သမားများ၏ အကြောင်းအရာများ</legend>
						   		<p>
							    <div class="row">
									<div class="col-sm-6">
								 		<input type="text" name="workers[0][name]" placeholder="အမည်" class="form-control" />  
				               
								 		
									</div>  
									<div class="col-sm-6">
										<input type="text" name="workers[0][position]" placeholder="အလုပ်အကိုင်" class="form-control"></textarea>
									</div>
																	
								</div>
							</p>
							<p>
								<div class="row">
									<div class="col-sm-6">
								 		<input type="text" name="workers[0][salary]" placeholder="အခကြေးငွေ နှုန်းထား" class="form-control" />  
				               
								 		
									</div>  
									<div class="col-sm-6">
										<input type="text" name="workers[0][daily_work_hours]" placeholder="နေ.စဉ်အလုပ်ချိန်" class="form-control">
									</div>
																	
								</div>
							</p>
							<p>
								<div class="row">
									<div class="col-sm-6">
								 		<input type="text" name="workers[0][break_time]" placeholder="နားချိန်" class="form-control" />  
				               
								 		
									</div>  
									<div class="col-sm-6">
										<input type="text" name="workers[0][weekly_off_day]" placeholder="အပတ်စဉ်နားရက်" class="form-control" >
									</div>
																	
								</div>
							</p>
							<p>
								<div class="row">
									<div class="col-sm-6">
								 		<input type="date" name="workers[0][joning_date]" placeholder="အလုပ်စတင်သည့်နေ.စွဲ"class="form-control" >  
				               
								 		
									</div>  
									<div class="col-sm-6">
										<textarea  name="workers[0][note]" placeholder="မှတ်ချက်" class="form-control" > </textarea>
									</div>
																	
								</div>
							</p>
							<div class="row">
							<div class="col-sm-2">
								<button type="button" name="add" id="addworker" class="btn btn-info">ထပ်ထည့်ရန်</button>
							</div>
						</div>
						    
						</fieldset> 
		  			</div>
		  				  			
		
	  		</div>
	  		
	  	</p>

	  	<p>
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="manufacturingtype"> စစ်ဆေးရေးအရာရှိအမည် -</label>
                        </div>
                        <div class="col-sm-7">
                             <input name="inspection_name" id="inspection_name" value="{{$tempshopinform->inspection_name}}"> 
                            <input type="hidden" name="inspectionid" id="NameofinspectorId" value="{{Auth::user()->id}}" >
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <label for="manufacturingtype"> စစ်ဆေးသူအရာရှိ ရာထူး -</label>
                        </div>
                        <div class="col-sm-7">
                             <input name="inspectorrank" id="inspectorrank" value="{{$tempshopinform->inspectorrank}}"> 
                        </div>
                    </div>
                </div>
            </div>
        </p>
        

	<div style="overflow:auto;">
	    <div style="float:right;">
	   
	      <button type="submit" id="nextBtn" class="btn btn-info" >သိမ်းဆည်းမည်</button>
	    </div>
	  </div>
</form>
<!-- scroll back to top of the page -->
<a id="back2Top" title="Back to top" href="#">&#10148;</a>


<script>
   
      
//autocomplete Data and Search data from DB
    $(document).ready(function(){

 $('#shopname').keyup(function(){ 
        var query = $(this).val();
        console.log(query);
        if(query != '')
        {
        	
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('shopnamesearch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
               $('#shopList').fadeIn();  
               $('#shopList').html(data);
               
            }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#shopname').val($(this).text());  
        $('#shopList').fadeOut();  
    });  

   
});
    $( "#search" ).click(function() {
  var query = $('#shopname').val();
               $.ajax({
                    type: 'GET', //THIS NEEDS TO BE GET
                    url: '{{ route('autocompletedata') }}',
                    data:{name:query},
                    success: function (data) {
                        console.log(data);
						$('#shopid').val(data.ShopId);
						$('#ownername').val(data.ownername);
						$('#shopadddress').val(data.township + '၊'+ data.loacationaddress);
						$('#owneraddress').val(data.owneraddress);
						$('#property').val(data.PropertyType);
						$('#workcategory').val(data.class_name);
						$('#managername').val(data.mangername);
						$('#manageraddress').val(data.manageraddress);
						$('#ShopName').val(data.shopname);
                    },
                    error: function() { 
                         console.log(data);
                    }
        });
});
    //end of autocomplete and search data from DB


	//for total male worker and female worker
//for  man sum

function converunistring(type){
	if(type=='man'){
		var num1=document.getElementById("above18m").value;
		var num2=document.getElementById('above15m').value;
		var num3=document.getElementById('above13m').value;
	}else if(type=='women'){
		var num1=document.getElementById("above18f").value;
		var num2=document.getElementById('above15f').value;
		var num3=document.getElementById('above13f').value;
	}
	
	var englishDigits = {
    '၀': '0',
    '၁': '1',
    '၂': '2',
    '၃': '3',
    '၄': '4',
    '၅': '5',
    '၆': '6',
    '၇': '7',
    '၈': '8',
    '၉': '9'
  };
  var myanDigits = {
    '0':'၀',
    '1': '၁',
    '2':'၂' ,
    '3':'၃',
    '4':'၄' ,
   '5' :'၅' ,
    '6': '၆',
    '7': '၇',
    '8':'၈' ,
    '9': '၉'
  };

var mynum1 = num1.replace(/[၀၁၂၃၄၅၆၇၈၉]/g, function(s) {
                  return englishDigits[s];
              }); 
var mynum2 = num2.replace(/[၀၁၂၃၄၅၆၇၈၉]/g, function(s) {
                  return englishDigits[s];
              }); 
var mynum3 = num3.replace(/[၀၁၂၃၄၅၆၇၈၉]/g, function(s) {
	return englishDigits[s];
}); 


var num4=parseInt(mynum1)+parseInt(mynum2)+parseInt(mynum3);

var num5=num4.toString();
var sum=num5.replace(/[0123456789]/g,function(s){
	return myanDigits[s];
});

if(type=='man'){
	//sum for man
	$('#totalm').val(sum);
	console.log(sum);	
	}else if(type=='women'){
		$('#totalf').val(sum);
	}
}

//end


</script>
 <script src="{{asset('assets/js/myscript.js')}}"></script>
@endsection
