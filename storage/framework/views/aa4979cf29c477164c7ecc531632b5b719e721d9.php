<?php $__env->startSection('content'); ?>
<script src="<?php echo e(asset('assets/js/common.js')); ?>"></script>

<?php if(isset($factory[0])): ?>       
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
                    <?php $__currentLoopData = $factory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                    
                    <tr>
                        <th scope="row">
                            <?php echo e($f->FactoryName); ?>

                        </th>
                        <td class="budget">
                            <?php echo e($f->NoticeAddress); ?>

                           
                        </td>
                        <td>
                            <?php echo e($f->ContactAddress); ?>

                           
                        </td>
                        <td>
                                <?php echo e($f->ContactFax); ?>                            
                        </td>
                        <td class="text-center">
                            <a href="<?php echo e(url('/factory/'.$f->id)); ?>" class="badge badge-primary" style="text-align:center">ဆက်ဖြည့်မည်</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        
        </div>
                    
    </p>
    <hr>
<?php endif; ?>
<?php if(isset($shop[0])): ?>     
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
                 <?php $__currentLoopData = $shop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row">
                            <?php echo e($s->shopname); ?>

                        </th>
                        <td class="budget">
                            <?php echo e($s->shopemail); ?>

                           
                        </td>
                        <td>
                            <?php echo e($s->shopphone); ?>

                           
                        </td>
                        <td>
                                <?php echo e($s->ownername); ?>                            
                        </td>
                        <td class="text-center">
                            <a href="<?php echo e(url('/shop/'.$s->id)); ?>" class="badge badge-primary" >ဆက်ဖြည့်မည်</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        </div>
    </p>

    <hr>
<?php endif; ?>
<?php if(isset($tempFactoryInspectionInform[0])): ?>       
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
                 <?php $__currentLoopData = $tempFactoryInspectionInform; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inform): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row">
                            <?php echo e($inform->FactoryName); ?>

                        </th>
                        <td class="budget">
                            <?php if($inform->inspectedtimes==1): ?>
                                ပထမအကြိမ်
                            
                            <?php elseif($inform->inspectedtimes==2): ?>
                                ဒုတိယအကြိမ်
                            <?php else: ?>
                            အထူး
                            <?php endif; ?>
                           
                        </td>
                        <td>
                            <?php if($inform->inspectiontype==0): ?>
                            သာမန်
                            <?php else: ?>
                            ပြန်လည်
                            <?php endif; ?>
                           
                        </td>
                        <td>
                             <?php echo e($inform->inspectiondate); ?>                            
                        </td>
                        <td class="text-center">
                            <a href="<?php echo e(url('/TempFactoryInspectionInformation/'.$inform->id)); ?>" class="badge badge-primary">ဆက်ဖြည့်မည်</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        </div>
    </p>
   
    <hr>
<?php endif; ?>


<?php if(isset($tempfactorylabourlaw[0])): ?>       
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
                 <?php $__currentLoopData = $tempfactorylabourlaw; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $law): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row">
                            <?php echo e(App\Factory::where('FactoryId',$law->factory_id)->value('FactoryName')); ?> 
                        </th>
                        <td class="budget">
                           <?php echo e($law->sentnotice); ?>

                           
                        </td>
                        <td>
                            <?php echo e($law->shownotice); ?>                           
                        </td>
                        <td class="text-center">
                            <a href="<?php echo e(route('LabourInspectionLaw.edit',$law->id)); ?>" class="badge badge-primary">ဆက်ဖြည့်မည်</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        </div>
    </p>
   
    <hr>
<?php endif; ?>

<?php if(isset($tempFactoryInspectionSafety[0])): ?>       
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
                 <?php $__currentLoopData = $tempFactoryInspectionSafety; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $safety): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row">
                            <?php echo e($safety->FactoryName); ?>

                        </th>
                        <td class="budget">
                            <?php echo e($safety->inspection_type); ?>

                           
                        </td>
                        <td>
                            <?php echo e($safety->inspection_datetime); ?>

                           
                        </td>
                            
                        <td>
                                <?php echo e($safety->factoryregion); ?>

                        </td>
                        <td class="text-center">
                            <a href="<?php echo e(url('/TempFactoryInspectionSafety/'.$safety->id)); ?>" class="badge badge-primary">ဆက်ဖြည့်မည်</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        </div>
    </p>
    <hr>
<?php endif; ?>

<?php if(isset($tempFactoryInspectionImpact[0])): ?>       
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
                 <?php $__currentLoopData = $tempFactoryInspectionImpact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $impact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row">
                            <?php echo e($impact->workname); ?>

                        </th>
                        <td class="budget">
                            <?php echo e($impact->ownername); ?>

                           
                        </td>
                        <td>
                            <?php echo e($impact->managername); ?>

                           
                        </td>
                           
                        <td>
                            <?php echo e($impact->contactphone); ?>

                        </td>
                        <td class="text-center">
                            <a href="<?php echo e(url('/TempFactoryInspectionImpact/'.$impact->id)); ?>" class="badge badge-primary">ဆက်ဖြည့်မည်</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        </div>
    </p>
    <hr>
<?php endif; ?>




<?php if(isset($tempshopinform[0])): ?>       
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
                     <?php $__currentLoopData = $tempshopinform; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shopinform): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td scope="row">
                              <?php echo e($shopinform->shopname); ?>

                            </td>
                            <td class="budget">
                                <?php echo e($shopinform->ownername); ?>

                            </td>
                            <td>
                                <?php echo e($shopinform->inspectedtime); ?>

                            </td>
                            <td>
                                <?php echo e($shopinform->inspection_type); ?>                                
                            </td>
                            <td class="text-center">
                                <a href="<?php echo e(url('/TempShopInspectionInform/'.$shopinform->id)); ?>" class="badge badge-primary">ဆက်ဖြည့်မည်</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            </div>
        </p>
    <hr>
<?php endif; ?>

<?php if(isset($tempshoplabourinspection[0])): ?>       
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
                     <?php $__currentLoopData = $tempshoplabourinspection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shoplabour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td scope="row">
                              <?php echo e(App\Shop::where('ShopId',$shoplabour->shop_id)->value('shopname')); ?>

                            </td>
                            <td class="budget">
                                <?php echo e($shoplabour->numholidays); ?>

                            </td>
                            <td>
                                <?php echo e($shoplabour->opportunityhol); ?>

                            </td>
                            <td class="text-center">
                                <a href="<?php echo e(route('ShopLabourInspectionLaw.edit',$shoplabour->id)); ?>" class="badge badge-primary">ဆက်ဖြည့်မည်</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            </div>
        </p>
    <hr>
<?php endif; ?>

<?php if(isset($tempshopsafety[0])): ?>       
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
                     <?php $__currentLoopData = $tempshopsafety; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $safety): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td scope="row">
                              <?php echo e(App\Shop::where('ShopId',$safety->shop_id)->value('shopname')); ?>

                            </td>
                            <td class="budget">
                                <?php echo e($safety->ownername); ?>

                            </td>
                            <td>
                                <?php echo e($safety->owneraddress); ?>

                            </td>
                            <td class="text-center">
                                <a href="<?php echo e(route('ShopSafteyInspection.edit',$safety->id)); ?>" class="badge badge-primary">ဆက်ဖြည့်မည်</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            </div>
        </p>
    <hr>
<?php endif; ?>

<?php if(isset($tempshopleave[0])): ?>       
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
                     <?php $__currentLoopData = $tempshopleave; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shopleave): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td scope="row">
                              <?php echo e($shopleave->shopname); ?>

                            </td>
                            <td class="budget">
                                <?php echo e($shopleave->numholidays); ?>

                            </td>
                            <td>
                                <?php echo e($shopleave->opportunityhol); ?>

                            </td>
                            <td class="text-center">
                                <a href="<?php echo e(url('/TempShopInspectionLeave/'.$shopleave->id)); ?>" class="badge badge-primary">ဆက်ဖြည့်မည်</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            </div>
        </p>
    <hr>
<?php endif; ?>
<!-- scroll back to top of the page -->
<a id="back2Top" title="Back to top" href="#">&#10148;</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>