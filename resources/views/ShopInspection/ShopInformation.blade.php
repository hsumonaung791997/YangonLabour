@extends('layouts.admin')
@section('content')
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type='text/javascript'>
$(function(){
$('#datepicker').datepicker({
    calendarWeeks: true,
    todayHighlight: true,
    autoclose: true
});  
});
</script>
	<form id="regForm" action="{{url('/factoryregister')}}" method="post">
	 {{csrf_field()}}
	<h1>စစ်ဆေးချက်ပုံစံဆိုင်များနှင့် အလုပ်ဌာနများ အက်ဥပဒေ ခွင့်ရက်နှင့် အလုပ်ပိတ်ရက် ဥပဒေစစ်ဆေးခြင်း</h1>
	
		<div class="row">
			<div class="col-sm-6">
				<select name="checktype">
					<option>ပထမအကြိမ်</option>
					<option>ဒုတိယအကြိမ်</option>
					<option>အထူး</option>
				</select>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
                
                    <input type='text'id="datepicker" placeholder="စစ်ဆေးခဲ့သည့်နေ့စွဲနှင့်အချိန်"/>
                 
				</div>
			</div>
				
		</div>
				<div class="row">
  			<div class="col-sm-6">
  				<div class="row">
  					<div class="col-sm-6">
  						<div class="custom-control custom-radio mb-3">
										  <input  class="custom-control-input" id="stage" name="stage" type="radio">
										  <label class="custom-control-label" for="stage">သာမန်</label>
						</div>
					</div>
								
					<div class="col-sm-6">
						<div class="custom-control custom-radio mb-3">
							<input  class="custom-control-input" id="stage1" checked="" type="radio" name="stage">
								<label class="custom-control-label" for="stage1">ပြန်လည်</label>
						</div>
					</div>
				
  			</div>
  		</div>
  	</div>
  	
	  	<p>
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
	  	</p>
	  	<p>
	  		<div class="row">
	  			<div class="col-sm-6 text-center">
	  				<div class="row">
	  					<div class="col-sm-5">
	  						<label>ဆိုင်/အလုပ်ဌာန လိပ်စာ</label>
	  					</div>
	  					<div class="col-sm-7">
	  						<textarea name="shopaddress" id="shopadddress" class="col-sm-12"></textarea>
	  					</div>
	  				</div>
	  				
	  			</div>
	  		
	  			<div class="col-sm-6 text-left">
	  			 <div class="row">
	  				<div class="col-sm-5">
	  						<label>ပိုင်ဆိုင်မှု အမျိုးအစား</label>
	  					</div>
	  					<div class="col-sm-7">
	  						<input type="text" name="property" id="property">
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
	  						<input type="text" name="ownername" id="ownername">
	  					</div>
	  				</div>
	  				
	  			</div>
	  		
	  			<div class="col-sm-6 text-left">
	  				<div class="row">
	  					<div class="col-sm-5">
	  						<label>အလုပ်ရှင်နေရပ်လိပ်စာ</label>
	  					</div>
	  					<div class="col-sm-7">
	  						<textarea name="owneraddress" id="owneraddress" class="col-sm-12"></textarea>
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
		  						<input type="text" name="workcategory" id="workcategory">
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
	  						<input type="text" name="managername" id="managername">
	  					</div>
	  				</div>
	  				
	  			</div>
	  		
	  			<div class="col-sm-6 text-left">
	  				<div class="row">
	  					<div class="col-sm-5">
	  						<label>မန်နေဂျာလိပ်စာ</label>
	  					</div>
	  					<div class="col-sm-7">
	  						<textarea name="manageraddress" id="manageraddress" class="col-sm-12"></textarea>
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
	  						<input type="text" name="intervieweename" id="intervieweename">
	  					</div>
	  				</div>
	  				
	  			</div>
	  		
	  			<div class="col-sm-6 text-left">
	  				<div class="row">
	  					<div class="col-sm-5">
	  						<label>မေးမြန်းချက်များကိုဖြေကြားသူ၏အလုပ်အကိုင်</label>
	  					</div>
	  					<div class="col-sm-7">
	  						<textarea name="intervieweenamerank" id="intervieweenamerank" class="col-sm-12"></textarea>
	  					</div>
	  				</div>
	  			</div>
	  		</div>
	  		
	  	</p>
	  	<p>
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
				<td><input type='text' value=0  name="above18m"></td>
				<td><input type='text' value=0  name="above15m"></td>
				<td><input type='text' value=0  name="above13m"></td>
				<td><input type='text' value=0  name="totalm"></td>
			</tr>

			<tr>
				<td>မ</td>
				<td><input type='text' value=0  name="above18f"></td>
				<td><input type='text' value=0  name="above15f"></td>
				<td><input type='text' value=0  name="above13f"></td>
				<td><input type='text' value=0  name="totalf"></td>
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
								 		<input type="text" name="addmore[0][workername]" placeholder="အမည်" class="form-control" />  
				               
								 		
									</div>  
									<div class="col-sm-6">
										<input type="text" name="addmore[0][occupation]" placeholder="အလုပ်အကိုင်" class="form-control"></textarea>
									</div>
																	
								</div>
							</p>
							<p>
								<div class="row">
									<div class="col-sm-6">
								 		<input type="text" name="addmore[0][salaryrate]" placeholder="အခကြေးငွေ နှုန်းထား" class="form-control" />  
				               
								 		
									</div>  
									<div class="col-sm-6">
										<input type="text" name="addmore[0][occupation]" placeholder="နေ.စဉ်အလုပ်ချိန်" class="form-control">
									</div>
																	
								</div>
							</p>
							<p>
								<div class="row">
									<div class="col-sm-6">
								 		<input type="text" name="addmore[0][resttime]" placeholder="နားချိန်" class="form-control" />  
				               
								 		
									</div>  
									<div class="col-sm-6">
										<input type="text" name="addmore[0][occupation]" placeholder="အပတ်စဉ်နားရက်" class="form-control" >
									</div>
																	
								</div>
							</p>
							<p>
								<div class="row">
									<div class="col-sm-6">
								 		<input type="date" name="addmore[0][joineddate]" placeholder="အလုပ်စတင်သည့်နေ.စွဲ"class="form-control" >  
				               
								 		
									</div>  
									<div class="col-sm-6">
										<textarea  name="addmore[0][remark]" placeholder="မှတ်ချက်" class="form-control" > </textarea>
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


	<div style="overflow:auto;">
	    <div style="float:right;">
	   
	      <button type="submit" id="nextBtn" class="btn btn-info" >ဆိုင်စုံစမ်းခြင်းစတင်ရန်</button>
	    </div>
	  </div>
</form>


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
                      
                    },
                    error: function() { 
                         console.log(data);
                    }
        });
});
    //end of autocomplete and search data from DB

</script>
 <script src="{{asset('assets/js/myscript.js')}}"></script>
@endsection
