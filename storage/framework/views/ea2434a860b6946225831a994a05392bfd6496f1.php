<?php $__env->startSection('content'); ?>
<script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>


<script type="text/javascript">
    function EnableDisableTextBox(btnPassport) {
        var refdoc = document.testform.refdoc;
        var docno = document.testform.docno;
        var insdate = document.testform.insdate;
        var brief = document.testform.brief;
        var factoryname = document.testform.factoryname;
        var inspecteddate = document.testform.inspecteddate;
        var lastdate = document.testform.lastdate;
        var instructiondep = document.testform.instructiondep;
        var informdate = document.testform.informdate;
        var instructions = document.testform.instructions;
        var generatepdf=document.testform.generatepdf;
          if (btnPassport.value == "ပြင်မည်") {

            refdoc.removeAttribute("disabled");
            docno.removeAttribute("disabled");
            insdate.removeAttribute("disabled");
            brief.removeAttribute("disabled");
            factoryname.removeAttribute("disabled");
            inspecteddate.removeAttribute("disabled");
            lastdate.removeAttribute("disabled");
            instructiondep.removeAttribute("disabled");
            informdate.removeAttribute("disabled");
            instructions.removeAttribute("disabled");
            generatepdf.setAttribute("disabled","disabled");

        }
    }
</script>

 <?php if(session()->get('success')): ?>
 <div class="alert alert-success alert-dismissible fade show" role="alert">
     <span class="alert-inner--icon"></span>
     <span class="alert-inner--text">  <?php echo e(session()->get('success')); ?>  </span>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
     </button>
 </div>
<?php endif; ?>

<form method="post" name="testform" action="<?php echo e(url('instructionupdate')); ?>">
    <?php $__currentLoopData = $instructionview; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ins): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <?php echo e(csrf_field()); ?>

  <p>
        <div class="row">
          
          <div class="col-sm-6 text-center">
            <div class="row">
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-6">
                    <label for="EmailAdd">ရည်ညွှန်းစာအမှတ်</label>
                  </div>
                  <div class="col-sm-6">
                    <input  name="refdoc" value="<?php echo e($ins->refdoc); ?>" disabled = "disabled">
                  </div>
                </div>               
                
              </div>
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-6"><label for="EmailAdd">စာအမှတ်</label></div>
                  <div class="col-sm-6">
                     <input  name="docno" value="<?php echo e($ins->docmentno); ?>"disabled = "disabled">
                  </div>
                </div>               
               
              </div>
            </div>
            
          </div>
          <div class="col-sm-6 text-center">
            <div class="row">
              <div class="col-sm-6">
                <label for="EmailAdd">ရက်စွဲ</label>
              </div>
              <div class="col-sm-6">
                <input  name="insdate" value="<?php echo e($ins->create_date); ?>" disabled = "disabled">
              </div>
              
            </div>
            
              
          </div>
        </div>
  </p>
  <p>
        <div class="row">
          
          <div class="col-sm-3">
            <label for="EmailAdd">အကြောင်းအရာ</label>
            
          </div>
          <div class="col-sm-9">
            
            <input  name="brief" value="<?php echo e($ins->instructiontitle); ?>" disabled = "disabled">
          </div>
        </div>
  </p>
  <p>
     <div class="row">
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6">
              <label>စက်ရုံ/အလုပ်ရုံအမည်</label>
            </div>
            <div class="col-sm-6">
              <input type="text" value="<?php echo e($ins->factoryname); ?>" name="factoryname" id="factoryname" disabled = "disabled">
            </div>
          </div>            
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6">
              <label>စစ်ဆေးခဲ့သည့်နေ့စွဲ</label>
            </div>
            <div class="col-sm-6">
              <input type="text" id="inspecteddate" value="<?php echo e($ins->inspected_date); ?>" name="inspecteddate" disabled = "disabled" >
            </div>
          </div>            
        </div>
      </div> 
  </p>  
   <p>
     <div class="row">
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6">
              <label>နောက်ဆုံးထားလုပ်ဆောင်ရမည့်ရက်စွဲ</label>
            </div>
            <div class="col-sm-6">
              <input type="date" value="<?php echo e($ins->lastdodate); ?>" name="lastdate" disabled = "disabled" >
              
            </div>
          </div>            
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6">
              <label>အကြောင်းကြားရန်ဌာန </label>
            </div>
            <div class="col-sm-6">
              <input type="text"  value="<?php echo e($ins->instructiondep); ?>" name="instructiondep" disabled = "disabled" >
            </div>
          </div>            
        </div>
      </div> 
  </p> 
  <p>
     <div class="row">
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6">
              <label>အကြောင်းကြားရမည့်ရက်စွဲ</label>
            </div>
            <div class="col-sm-6">
              <input type="date" value="<?php echo e($ins->instructiondate); ?>" name="informdate" disabled = "disabled" >
              
            </div>
          </div>            
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6">
              <label>ဖိုင်အမျိုးအစား</label>
            </div>
            <div class="col-sm-6">
              <select name="docutype">
             
                <option value="သာမန်" <?php echo e($ins->documenttype=='သာမန်'?'selected':''); ?>>သာမန်</option>
                <option value="လျှို့ဝှက်စာ" <?php echo e($ins->documenttype=='လျှို့ဝှက်စာ'?'selected':''); ?>>လျှို့ဝှက်စာ</option>
              </select>
            </div>
          </div>            
        </div>
      </div> 
  </p> 
  <p>
     <div class="row">
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6">
              <label>စစ်ဆေးသူအမည် </label>
            </div>
            <div class="col-sm-6">
              <input type="text" value="<?php echo e($ins->instructor); ?>" name="instructor" >
              
            </div>
          </div>            
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-6 text-right">
              <label>စစ်ဆေးသူရာထူး</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="instructorrank" value="<?php echo e($ins->instructor_rank); ?>">
            
            </div>
          </div>            
        </div>
      </div> 
  </p>     
 
    <div class="row">
      <div class="col-sm-12 text-center">
        <label for="ContactFax">ပြုပြင်လိုက်နာဆောင်ရွက်ရန် အချက်များ</label>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <label>ညွှန်ကြားချက် အမျိုးအစား</label>
      </div>
      <div class="col-sm-9">
        <input type="text" value="<?php if($ins->inspectiontype_id==1): ?> အလုပ်သမားဥပဒေစစ်ဆေးရေး <?php elseif($ins->inspectiontype_id==2): ?> အလုပ်ရုံစစ်ဆေးရေး <?php endif; ?>" disabled="disabled"/>
      
      </div>
      </div>
      <br/>
 <?php if($ins->inspectiontype_id==1): ?>
  <div class="row">
       <div class="col-sm-3"><label for="ContactFax">ခွင့်ပိတ်</label></div>
      <div class="col-sm-8">
        <textarea  name="aleavedesc" class="col-sm-12"><?php echo e($ins->a_leavedesc); ?></textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="aleaveno" value="<?php echo e($ins->a_leave); ?>"></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">လုပ်ခ/လစာ</label></div>
      <div class="col-sm-8">
        <textarea  name="awagedesc" class="col-sm-12"><?php echo e($ins->a_wagedesc); ?></textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="awageno" value="<?php echo e($ins->a_wages); ?>"></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">မှတ်တမ်း</label></div>
      <div class="col-sm-8">
        <textarea  name="anotedesc" class="col-sm-12"><?php echo e($ins->a_notedesc); ?></textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="anoteno" value="<?php echo e($ins->a_note); ?>"></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">အလုပ်ချိန်</label></div>
      <div class="col-sm-8">
        <textarea  name="aworktimedesc" class="col-sm-12"><?php echo e($ins->a_worktimedesc); ?></textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="aworktimeno" value="<?php echo e($ins->a_worktime); ?>"></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">အခြား</label></div>
      <div class="col-sm-8">
        <textarea  name="aotherdesc" class="col-sm-12"><?php echo e($ins->a_otherdesc); ?></textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="aotherno" value="<?php echo e($ins->a_other); ?>"></div>
      </div>
  <?php elseif($ins->inspectiontype_id==2): ?>
  <div class="row">
       <div class="col-sm-3"><label for="ContactFax">ဘေးကင်း</label></div>
      <div class="col-sm-8">
        <textarea  name="fsafetydesc" class="col-sm-12"><?php echo e($ins->f_safetydesc); ?></textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="fsafetyno" value="<?php echo e($ins->f_safety); ?>"></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">
ကျန်းမာ</label></div>
      <div class="col-sm-8">
        <textarea  name="fhealthdesc" class="col-sm-12"><?php echo e($ins->f_healthdesc); ?></textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="fhealthno" value="<?php echo e($ins->f_health); ?>"></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">သက်သာ</label></div>
      <div class="col-sm-8">
        <textarea  name="fwelfaredesc" class="col-sm-12"><?php echo e($ins->f_welfaredesc); ?></textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="fwelfareno" value="<?php echo e($ins->f_welfare); ?>"></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">မှတ်တမ်း</label></div>
      <div class="col-sm-8">
        <textarea  name="fnotedesc" class="col-sm-12"><?php echo e($ins->f_notedesc); ?></textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="fnoteno" value="<?php echo e($ins->f_note); ?>"></div>
      </div>
      <div class="row">
       <div class="col-sm-3"><label for="ContactFax">အခြား</label></div>
      <div class="col-sm-8">
        <textarea  name="fotherdesc" class="col-sm-12"><?php echo e($ins->f_otherdesc); ?></textarea>
      </div>
      <div class="col-sm-1"><input type="text" name="fotherno" value="<?php echo e($ins->f_other); ?>"></div>
      </div>

      <?php endif; ?>
  <p>
    <input type="hidden" value="<?php echo e($ins->factory_id); ?>" id="factoryid"name="factoryid"/>
    <input type="hidden" value="<?php echo e($ins->id); ?>" name="instructionid"/>
    <input type="hidden" value="<?php echo e($ins->case_id); ?>" name="caseid"/>
    <input type="hidden" value="<?php echo e($ins->role_id); ?>" name="roleid"/>
    <input type="hidden" value="<?php echo e($ins->township_id); ?>" name="townshipid"/>
    <input type="hidden" value="<?php echo e($ins->district_id); ?>" name="districtid"/>
    <input type="hidden" value="<?php echo e($ins->inspectiontype_id); ?>" name="instructiontype"/>
  </p>
  <p>
    <div class="col-sm-2 float-right">
  


    <input type="button" class="btn-primary" value="ပြင်မည်" onclick="EnableDisableTextBox(this)"/>
  </div>
  <div class="col-sm-2 float-right">
    <input type="submit" class="btn-primary" value="သိမ်းမည်"/>
   </div>
    
    <div class="col-sm-2 float-right">
    <a href="<?php echo e(url('generateinstructionpdf/'.$ins->id)); ?>">
        <input type="button" class="btn-primary" value="ဖိုင်ထုတ်ရန်" name="generatepdf"></a>
  </div>

  </p><br>

 
</form>
     

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>