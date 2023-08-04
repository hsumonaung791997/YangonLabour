@extends('layouts.admin')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-7">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-5 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-5 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-5 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-7">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="role" class="col-md-5 col-form-label text-md-right">{{ __('Phone Number') }}</label>                         
                            <div class="col-md-7">
                                <input type="text" name="phone" class="form-control"/>                               
                            </div>
                        </div>

                        <!-- roles option -->
                        <div class="form-group row">
                            <label for="role"  class="col-md-5 col-form-label text-md-right">{{ __('Role') }}</label>

                            <div class="col-md-7">
                                <select  type="text" class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" id="role" name="role" onchange="roleselect()"value="{{ old('name') }}" required >
                                    <option value="">Select One</option>
                                    @foreach($roles as $id=>$role)
                                      <option value="{{$id}}">{{$role}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('role'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row"  id="regionuser"style="display:none">
                            <div class=" col-md-5 text-right mb-3" style="float:left;">
                            <label for="role" class="col-form-label text-md-right">{{ __('Region') }}</label>
                        </div>

                        <div class="col-md-7 mb-3" style="float:left;">
                                <select type="text" class="form-control" name="region" >
                                    <option value="">Select One</option>
                                    @foreach($region as $reg)
                                      <option value="{{$reg->id}}">{{$reg->region_name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('region'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('region') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
<!--for Region Officer -->
                         <div class="form-group row" style="display: none;" id="districtname">
                            <div class="col-md-5 text-right mb-3" style="float:left;">
                                <label for="role" class="col-form-label text-md-right">{{ __('District') }}</label>
                            </div>
                          
                            <div class="col-md-7 mb-3" style="float:left;">
                            @foreach ($district as $dis)
                                
                                <div class="custom-control custom-checkbox mb-3">
  <input class="custom-control-input" id="{{$dis->id}}" name="districtname[]"value="{{$dis->id}}" type="checkbox">
  <label class="custom-control-label" for="{{$dis->id}}"> {{$dis->district_name}}</label>
</div>
                               
                            @endforeach 
                            </div>
                        </div>

<!--end for region officer -->
 <!-- for District User-->
                        <div class="form-group row" style="display: none;" id="districtuser">
                            <div class="col-md-5 text-right mb-3" style="float:left;">
                                <label for="role" class="col-form-label text-md-right">{{ __('District') }}</label>
                            </div>
                            <div class="col-md-7 mb-3" style="float:left;">
                                <select type="text" class="form-control" name="district" value="{{ old('name') }}" id="districtid" >
                                    <option value="">Select One</option>
                                    @foreach($district as $dis)
                                      <option value="{{$dis->id}}">{{$dis->district_name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('district'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('district') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
      <!--end District User-->
            <!-- for user's duty township -->
                        <div class="form-group row" style="display: none;" id="userdutytownship">
                            <div class="col-md-5 text-right mb-3" style="float:left;">
                                <label for="role" class="col-form-label text-md-right">{{ __('Duty Township') }}</label>
                            </div>                            
                            <div class="col-md-7 mb-3" style="float:left;">
                                <select type="text" class="form-control" name="userdutytownship" value="" id="dutytownship">
                                <option value=''>Choose one</option>
                                    
                                </select>
                                   
                            </div>  
                        </div>

                <!-- end for user's duty township -->
       <!-- for Township User-->
                        <div class="form-group row" style="display: none;" id="townshipuser">
                            
                    </div>
      <!--end District User-->

                        <!--  -->
                        <div class="form-group row mb-0">
                            <div class="col-md-7 offset-md-5">
                                <input  type="submit" class="btn btn-primary" value="Register">
                                    
                            </div>
                        </div>

               
     
     
                       
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        <script type="text/javascript">
            function roleselect() {

            var r= document.getElementById("role");
            var roleid = r.options[r.selectedIndex].value;
          
            if(roleid==3){
                document.getElementById('regionuser').style.display='block';
            }else{
                document.getElementById('regionuser').style.visibility='none';
            }
            if(roleid==4){
                 document.getElementById('regionuser').style.display='block';
                document.getElementById('districtname').style.display='block';
            }
             if(roleid==5){
                document.getElementById('districtuser').style.display='block';
            }
            if(roleid==6){
                document.getElementById('districtuser').style.display='block';
                document.getElementById('userdutytownship').style.display='none';
                document.getElementById('townshipuser').style.display='block';  
            }
            if(roleid==7 ||roleid==8){
                document.getElementById('districtuser').style.display='block';
                document.getElementById('userdutytownship').style.display='block';
                document.getElementById('townshipuser').style.display='block'; 
            }
            
            

        }
 $( document ).ready(function() {
    $('#districtid').change(function(){ 
        //alert('id');
       var id = $(this).val();
       console.log(id);
       if(id != '')
       {
        $.ajax({
         url:"{{ route('townshipname') }}",
         method:"GET",
         data:{id:id},
         success:function(data){
      
         $.each(data, function (key, value) {
  var li=$('<div class="row"><div class="col-md-7 offset-md-5"><div class="custom-control custom-checkbox mb-3"><input type="checkbox" class="custom-control-input" id="'+value.id+'"  name="township[]" value="'+value.id+'"><label class="custom-control-label" for="' + value.id + '">'+value.township_name+'</label></div></div></div>') ;
  

 
    $('#townshipuser').append(li);
    $('#dutytownship').append($('<option>', { 
						value: value.id,
						text : value.township_name 
					}));
   
           })
       
       }
   });

  } 

}); 
});      
                                     
</script>
@endsection
