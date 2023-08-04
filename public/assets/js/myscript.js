
    //for share holder
    	 var i = i;    
    		$("#add").click(function(){
   
       		 ++i;
   
       			 $("#dynamicshareholder").append('<div style="height:1rem"></div><div class="row" id="shareholder"><div class="col-sm-6"><input type="text" name="addmore['+i+'][share]" placeholder="အစုစပ်အမည်" class="form-control" /></div><div class="col-sm-6"><button type="button" class="btn btn-danger remove-div">Remove</button></div></div>');
    });
   
    $(document).on('click', '.remove-div', function(){  
         $(this).parents('#shareholder').remove();
    }); 



    //end of share holder
   
    //for share holder
    	 var i = i;    
    		$("#addshop").click(function(){
   
       		 ++i;
   
       			 $("#dynamicothershop").append(
                    '<div style="height:1rem"></div> <div class="row" id="othershop"><div class="col-sm-5 "><input type="text" name="othershop[' + i +'][othershopname]" placeholder=" ဆိုင်၊အလုပ်ဌာန၊အလုပ်ရုံ အမည်" class="form-control" /></div><div class="col-sm-5"><textarea name="othershop[' + i +'][othershopaddress]" placeholder=" ဆိုင်၊အလုပ်ဌာန၊အလုပ်ရုံ လိပ်စာ" class="col-sm-12"></textarea></div><div class="col-sm-2"><button type="button" class="btn btn-danger remove-shop">ဖယ်ရှားရန်</button></div></div>');
    });
   
    $(document).on('click', '.remove-shop', function(){  
         $(this).parents('#othershop').remove();
    }); 



    //end of share holder

    //for worker
         var i = i;    
            $("#addworker").click(function(){
   
             ++i;
   
                 $("#dynamicworkerinformation").append(
                    '<div id="removeworkers"><p><div class="row"><div class="col-sm-6"><input type="text" name="workers[' + i +'][name]" placeholder="အမည်" class="form-control" /></div><div class="col-sm-6"><input type="text" name="workers[' + i +'][position]" placeholder="အလုပ်အကိုင်" class="form-control"></div></div></p><p><div class="row"><div class="col-sm-6"><input type="text" name="workers[' + i +'][salary]" placeholder="အခကြေးငွေ နှုန်းထား" class="form-control" /></div><div class="col-sm-6"><input type="text" name="workers[' + i +'][daily_work_hours]" placeholder="နေ.စဉ်အလုပ်ချိန်" class="form-control"></div></div></p><p><div class="row"><div class="col-sm-6"><input type="text" name="workers[' + i +'][break_time]" placeholder="နားချိန်" class="form-control" /></div><div class="col-sm-6"><input type="text" name="workers[' + i +'][weekly_off_day]" placeholder="အပတ်စဉ်နားရက်" class="form-control" ></div></div></p><p><div class="row"><div class="col-sm-6"><input type="date" name="workers[' + i +'][joning_date]" placeholder="အလုပ်စတင်သည့်နေ.စွဲ"class="form-control" ></div><div class="col-sm-6"><textarea  name="workers[' + i +'][note]" placeholder="မှတ်ချက်" class="form-control" > </textarea></div></div></p><div class="row"><div class="col-sm-2"><button type="button" class="btn btn-danger remove-worker">ဖယ်ရှားရန်</button></div></div></div>');
    });
   
    $(document).on('click', '.remove-worker', function(){  
         $(this).parents('#removeworkers').remove();
    }); 



    //end of worker
     //for not allow medical leave worker
         var i = i;    
            $("#addmedicalworker").click(function(){
   
             ++i;
   
                 $("#medicalnotallowworker").append(
                    '<div class="row" id="medicalworker"><div class="col-sm-6 text-center"><input type="text" name="addmore[0][medicalworker]" placeholder="အလုပ်သမားအမည်"></div><div class="col-sm-2"><button type="button" class="btn btn-danger remove-medicalworker">ဖယ်ရှားရန်</button></div></div>');
    });
   
    $(document).on('click', '.remove-medicalworker', function(){  
         $(this).parents('#medicalworker').remove();
    }); 



    //end of not allow medical leave worker