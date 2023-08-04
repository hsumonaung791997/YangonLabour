@extends('layouts.admin')
@section('content')
    
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

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
  

    <h1 style="text-align:center;margin-bottom:40px;"> ၂၀၁၆ ခုနှစ် ဆိုင်များနှင့်အလုပ်ဌာနများ အက်ဥပေဒေ</h1>
        

    <p>
        <div class="row">
            <div class="col-sm-1">
                
            </div>
            <div class="col-sm-5 text-center">
                <input type="text" name="shopname" id="shopname"  placeholder="ဆိုင်/အလုပ်ဌာနအမည်" />
                <div id="shopList">
                </div>
            </div>
            <div class="col-sm-2">
                <button id="search">ရှာရန်</button>
            </div>
        </div>
    </p>


    <form id="inspectform"class="form-background" action="{{route('ShopInspection2016Act.store')}}"  method="post">
     {{csrf_field()}}
     <div>
      <!--   <p>
            <div class="row">
               <div class="col-sm-5 text-center">
                    <input type="text" name="checkid" id="checkid"  placeholder="စစ်ဆေးချက်အမှတ်ထည့်ရန်" class="form-control"/>
                     <input type="text" placeholder="ဆိုင်/အလုပ်ဌာန၏ အလုပ်ချိန်ကာလအပိုင်းအခြား"  name="workduration"/>
                </div>
                <div class="col-sm-1">
                </div>
                <div class="col-sm-6 text-center">
                            
                </div>
                
            </div>
        </p>  -->

        <p>
            <div class="row">
               <div class="col-sm-12">
                    <label for="workduration">ဆိုင်/အလုပ်ဌာန၏ အလုပ်ချိန်ကာလအပိုင်းအခြား</label>
                    <textarea rows="4" class="col-sm-12" name="work_duration" id="workduration">   
                    </textarea>
                </div>
                                    
            </div>
        </p>
         <!-- //for factory id -->
         <input type="hidden" name="shop_id" id="shop_id">
  <!-- For new design-->
            <p>
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">အလုပ်ချိန်နို.တစ်စာပုံစံ ၁(က)/ ၁(ခ)/ ၁(ဂ) ကိုချိတ်ထားခြင်း</legend>
                            <div class="control-group">
                                 <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input class="custom-control-input" id="worktimenotice" name="worktime_notice" type="radio" value="ပြု">
                                          <label class="custom-control-label" for="worktimenotice">ပြု</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="worktimenotice1" checked="" type="radio" name="worktime_notice" value="မပြု">
                                            <label class="custom-control-label" for="worktimenotice1">မပြု</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6 text-center">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">အလုပ်သမား မှတ်ပုံတင်စာအုပ် ပုံစံ (၂)</legend>
                            <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="SSB" name="SSB" type="radio" value="ထား">
                                          <label class="custom-control-label" for="SSB">ထား</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="SSB1" checked="" type="radio" name="SSB" value="မထား">
                                            <label class="custom-control-label" for="SSB1">မထား</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </p>
  <!--end of new design-->
  <!-- For new design-->
            
            <p>
                <div class="row">               
                    <div class="col-sm-5 text-center">
                            <fieldset class="scheduler-border">
                            <legend class="scheduler-border">အခကြေးငွေကို လကုန်ပြီး(၇)ရက်အတွင်း</legend>
                            <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <div class="custom-control custom-radio mb-3">
                                          <input  class="custom-control-input" id="salarytime" name="salary_time" type="radio" value="ပေး">
                                          <label class="custom-control-label" for="salarytime">ပေး</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input  class="custom-control-input" id="salarytime1" checked="" type="radio" name="salary_time" value="မပေး">
                                            <label class="custom-control-label" for="salarytime1">မပေး</label>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6 text-center">
                      <label for="weekendholiday">ရက်သတ္တပတ်ပိတ်ရက်</label>
                        <input type="text" id='weekendholiday' name="weekend_holiday"/>
                    </div>
                </div>
            </p>
  <!--end of new design-->
 <!-- For new design-->
       
  <!--end of new design-->
    
        
  <div style="overflow:auto;">
    <div style="float:right;">
      
      <button type="submit">သိမ်းဆည်းမည်</button>
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
                        $('#shop_id').val(data.ShopId);
                        if(data.WorkTimeType==0){
                           $('#workduration').val('အလုပ်စသည့်အချိန် - '+ data.StartWorkTime + ' ၊ အလုပ်ပြီးသည့်အချိန် - ' + data.EndWorkTime+ '၊ အားလပ်ချိန် - ' + data.freetimefrom +'မှ'+ data.freetimeto + 'အထိ');
                           $('#weekendholiday').val(data.closeworkdays);
                         }else{

                         }
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