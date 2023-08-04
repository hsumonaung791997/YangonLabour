<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> တရားစွဲလချူ  <?php echo e($township_name); ?>

</title>
</head>
<style>
    @media  print {
				html, body ,table{
					width: 100%;
					height: 297mm;
					font-family: 'Pyidaungsu';
				}  
			}
			h1,h2{
				text-align: center;
			}
    @font-face {
				font-family: 'Pyidaungsu', serif;				
				font-weight: normal;
				font-style: normal;
			}
			td,th,div{line-height:50px;padding-left:10px;padding-right:10px}
			html, body {
					width: 100%;
					height: 297mm;
					font-family: 'Pyidaungsu';
				}  
				h1,h2{
				text-align: center;
			}

         .table,td,th  {
            border: 2px  solid;
            border-collapse: collapse;  
        }

</style>
<body>
    
    <div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>တရားစွဲလချူပ် (<?php echo e($township_name); ?>)</h2>
            </div>
        </div>


        <div>
            <table class="table">
                <tr>
                    <th scope="col">
                        စဉ်
                    </th>
                    <th scope="col">
                            အလုပ်ရုံ/ဆိုင်/ <br> အလုပ်ဌာန <br> အမည်နှင့် လိပ်စာ <br> အပြည့်အစုံ
                    </th>
                    <th scope="col">
                            တရားစွဲဆိုခြင်းခံရသူ၏ <br> အမည်နှင့်လိပ်စာ <br> အပြည့်အစုံ
                    </th>
                    <th scope="col">
                            တရားလိုအမည်
                    </th>
                    <th scope="col">
                            မည်သည့်အတွက်တရားစွဲဆိုရသည်
                    </th>
                    <th scope="col">
                            ကျူးလွန်သောဥပဒေနှင့်ပုဒ်မ <br> စွဲဆိုသည့်ပုဒ်မ
                    </th>
                    <th scope="col">
                            စွဲဆိုအမိန့် <br> ချမှတ်သောနေ့နှင့် <br> ၎င်းအမိန့်ကိုရရှိသောနေ့
                    </th>
                    <th scope="col">
                            ရုံးတင် <br> တရားစွဲဆိုသောနေ့ <br> နှင့် တရားရုံး  အမည်
                    </th>
                    <th scope="col">
                            အမှု <br> အမှတ် <br> (ပြစ်မှုကြီး)
                    </th>
                    <th scope="col">
                        အမှုနှင့် <br> ပတ်သက်၍ အကျုံး ဝင်သော <br> အလုပ်သမားဦးရေ
                    </th>
                    <th scope="col">
                            အလုပ်သမားများ <br> ရသင့်သည့် ငွေပေါင်း
                    </th>
                    <th scope="col">
                            မပြီးပြတ်သေးသည့် အမှု၏ <br> အခြေအနေ၊ <br> ချိန်းဆိုသည့်နေ့တွင် မည်သို့ <br> ဆောင်ရွက်သည် <br>စသည်တို့ ဖော်ပြရန်
                    </th>
                    <th scope="col">
                            စီရင်ချက် ချမှတ်သော နေ့စွဲနှင့် စီရင်ချက်
                    </th>
                </tr>
                <tr>
                    <?php $i=0; ?>
                            <?php $__currentLoopData = $report; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <?php echo e(++$i); ?>

                                    </td>
                                    <td>
                                        <?php echo e($r->Name); ?> <br> (<?php if($r->chooseType==1) echo 'စက်ရုံ အလုပ်ရုံ'; else echo 'ဆိုင် နှင့်အလုပ်ဌာန'; ?>)
                                    </td>
                                    <td>
                                        <?php echo e($r->OwnerName); ?> (ပိုင်ရှင်) <br>
                                        <?php echo e($r->OwnerAddress); ?>

                                    </td>
                                    <td>
                                        <?php echo e($r->PlaintiffName); ?> <br> (<?php echo e($r->PlaintiffLvl); ?>)
                                    </td>
                                    <td>
                                        <?php echo e($r->ProsecutedAbout); ?>

                                    </td>
                                    <td>
                                        <?php echo e($r->ProsecutedLaw); ?>

                                    </td>
                                    <td>
                                        <?php echo e($r->DecreeDay); ?>(အမိန့်ချမှတ်သောနေ့
                                        ) <br> 
                                        <?php echo e($r->getDecreeDay); ?> (၎င်းအမိန့်ကိုရရှိသောနေ့)
                                    </td>
                                    <td>
                                        <?php echo e($r->ProsecutedDay); ?> <br>
                                        <?php echo e($r->CourtName); ?>

                                    </td>
                                    <td>
                                        <?php echo e($r->DecreeID); ?>

                                    </td>
                                    <td>
                                         <?php echo e($r->noOfemp); ?>

                                     </td>
                                     <td>
                                         <?php echo e($r->empGetmoney); ?>

                                     </td>
                                    
                                    <td>
                                        <?php echo e($r->DecreeAct); ?>

                                    </td>
                                    <td>
                                        <?php echo e($r->judgmentDay); ?> (နေ့စွဲ) <br>
                                        <?php echo e($r->judgment); ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            </table>
        </div>
        
</div>


</body>
</html>