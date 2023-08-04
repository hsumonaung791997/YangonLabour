<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> မတော်တဆထိခိုက်မှု ရရှိခြင်းလချူပ်  <?php echo e($township_name); ?>

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

         #myTable,td,th  {
            border: 2px  solid;

            border-collapse: collapse;  
        }

</style>
<body>
    <?php 
    $standard_numsets = array("0","1","2","3","4","5","6","7","8","9");
    $standard_manysets = array('၀','၁','၂' ,'၃','၄','၅','၆','၇','၈','၉'); ?>
    
    <div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>မတော်တဆထိခိုက်မှု ရရှိခြင်းလချူပ် (<?php echo e($township_name); ?>)</h2>
            </div>
        </div>
        <div class="row">
            <div class="table-responsive">

            <table class="table table-bordered" id="myTable">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">
                                စဉ်
                        </th>
                        <th scope="col">
                                မြို့နယ်
                        </th>
                        <th scope="col">
                                စက်ရုံ/အလုပ်ရုံ <br>  ဆိုင်အလုပ်ဌာန <br> အမည်
                        </th>
                        <th scope="col" >
                            ထိခိုက်မှုဖြစ်ပွားသည့်နေ့ရက် 
                        </th>
                        <th>
                            ထိခိုက်မိသည့် အမျိုးအစား
                        </th>
                        <th>
                             ဖြစ်ပွားသည့်နေရာ
                        </th>
                        <th>
                            ထိခိုက်မှုဖြစ်ရသည့်အကြောင်းအရင်း
                        </th>
                    </tr>
                   
                </thead>
                <?php $i=0; ?>
                <?php $__currentLoopData = $report; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <?php echo e(++$i); ?>

                    </td>
                    <td>
                        <?php echo e($township_name); ?>

                        (<?php if($r->Type==1): ?>
                        စက်ရုံ/အလုပ်ရုံ
                        <?php else: ?>
                        ဆိုင်အလုပ်ဌာန
                        <?php endif; ?>)
                    </td>
                    <td>
                      <?php echo e($r->FactoryName); ?>

                    </td>
                    <td>
                        <?php echo e($r->accTime); ?> 
                    </td>
                    <td>
                        <?php echo e($r->painType); ?> 
                    </td>
                    <td>
                        <?php echo e($r->accPlace); ?>

                    </td>
                    <td>
                        <?php echo e($r->accDetail); ?>

                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tbody>

                </tbody>

            </table>
            </div>
        </div>
    </div>


</body>
</html>