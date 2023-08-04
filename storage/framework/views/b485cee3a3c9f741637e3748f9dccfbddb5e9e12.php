<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>  စစ်ဆေးရေးလချူပ် (IF)  <?php echo e($township_name); ?>

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
                <h2>စစ်ဆေးရေးလချူပ် (IF) (<?php echo e($township_name); ?>) </h2>
            </div>
        </div>
        <div class="row">
            <div class="table-responsive">

            <table class="table table-bordered" id="myTable">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" rowspan="2">
                                စဉ်
                        </th>
                        
                        <th scope="col" rowspan="2">
                                စက်ရုံ/အလုပ်ရုံ <br>  ဆိုင်အလုပ်ဌာန <br> အမည်နှင့် မြို့နယ်
                        </th>
                        <th scope="col"  colspan="2">
                            စစ်ဆေးခဲ့သည့် <br> စက်ရုံ/အလုပ်ရုံ <br>  ဆိုင်အလုပ်ဌာန <br> အမျိုးအစားခွဲခြားခြင်း
                        </th>
                        <th scope="col" rowspan="2">
                                စစ်ဆေးသည့်နေ့
                        </th>
                        <th colspan="3">
                            လုပ်သားဦးရေ
                        </th>
                        <th scope="col"  rowspan="2">
                            စစ်ဆေးရာတွင် တွေ့ရှိရသည့် <br> ချွတ်ယွင်းချက်များ အပေါ် <br> ညွှန်ကြားချက်များ (Defect Memo) ပူးတွဲရန်နှင့်<br> ရက်စွဲ၊ စာ အမှတ် ဖော်ပြရန်
                        </th>
                        <th scope="col" rowspan="2">
                            မှတ်ချက်
                        </th>
                    </tr>
                    <tr>
                        <td>Section</td>
                        <td>Class</td>
                        <td>ကျား </td>
                        <td>မ</td>
                        <td>ပေါင်း</td>
                    </tr>
                   
                </thead>
                
                <tbody>
                        <?php $i=0; ?>
                        
                        <?php $__currentLoopData = $reportfactory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <?php echo e(++$i); ?>

                            </td>
                            <td>
                                <?php echo e($r->factoryname); ?>

                            </td>
                           
                            <td>
                                <?php echo e(App\EconomicSection::where('id',App\Factory::where('FactoryName',$r->factoryname)->value('section_id'))->value('Section')); ?>

                            </td>
                            <td>
                                    <?php echo e(App\Factory::where('FactoryName',$r->factoryname)->value('class_name')); ?>

                            </td>
                            <td>
                                
                                <?php 
                                $inspectiondate=datechangemyanmar(App\FactoryInspectionInforms::where('cid',$r->factoryinspectioninform_id)->value('inspectiondate'));
                                echo $inspectiondate;
                                ?>
                            </td>
                            <td>
                                <?php echo e(App\Factory::where('FactoryName',$r->factoryname)->value('totalMaleWorker')); ?>

                            </td>
                            <td>
                                <?php echo e(App\Factory::where('FactoryName',$r->factoryname)->value('totalFemaleWorker')); ?>

                            </td>
                            <td>
                                <?php
                                    $total=0;
                                    $standard_numsets = array("0","1","2","3","4","5","6","7","8","9");
                                    $standard_manysets = array('၀','၁','၂' ,'၃','၄','၅','၆','၇','၈','၉');
                                    $emen=str_replace($standard_manysets,$standard_numsets,App\Factory::where('FactoryName',$r->factoryname)->value('totalMaleWorker'));
                                    $ewomen=str_replace($standard_manysets,$standard_numsets,App\Factory::where('FactoryName',$r->factoryname)->value('totalFemaleWorker'));
                                    $total=$emen+$ewomen;
                                    $total_worker =str_replace($standard_numsets,$standard_manysets,$total);
                                    echo $total_worker;
                                ?>
                            </td>
                            <td>

                            </td>
                            <td>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        

                        <?php $__currentLoopData = $reportshop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                                <td>
                                    <?php echo e(++$i); ?>

                                </td>
                                <td>
                                    <?php echo e(App\Shop::where('ShopId',$r->shop_id)->value('shopname')); ?>

                                </td>
                               
                                <td>
                                    <?php echo e(App\EconomicSection::where('id',App\Shop::where('ShopId',$r->shop_id)->value('section_id'))->value('Section')); ?>

                                </td>
                                <td>
                                        <?php echo e(App\Shop::where('ShopId',$r->shop_id)->value('class_name')); ?>

                                </td>
                                <td>
                                    
                                        <?php 
                                        $inspectiondate=datechangemyanmar(App\ShopInspectionInform::where('id',$r->check_id)->value('inspectiondate'));
                                        echo $inspectiondate;
                                        ?>
                                </td>
                                <td>
                                    <?php echo e(App\Shop::where('ShopId',$r->shop_id)->value('totalMaleWorker')); ?>

                                </td>
                                <td>
                                    <?php echo e(App\Shop::where('ShopId',$r->shop_id)->value('totalMaleWorker')); ?>

                                </td>
                                <td>
                                    <?php
                                        $total=0;
                                        $standard_numsets = array("0","1","2","3","4","5","6","7","8","9");
                                        $standard_manysets = array('၀','၁','၂' ,'၃','၄','၅','၆','၇','၈','၉');
                                        $emen=str_replace($standard_manysets,$standard_numsets,App\Shop::where('ShopId',$r->shop_id)->value('totalMaleWorker'));
                                        $ewomen=str_replace($standard_manysets,$standard_numsets,App\Shop::where('ShopId',$r->shop_id)->value('totalMaleWorker'));
                                        $total=$emen+$ewomen;
                                        $total_worker =str_replace($standard_numsets,$standard_manysets,$total);
                                        echo $total_worker;
                                    ?>
                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table>
            </div>
        </div>
    </div>

    <?php 
    function datechangemyanmar($data){
        $r=explode("-",$data);
        // echo $r[0];
        $standard_numsets = array("0","1","2","3","4","5","6","7","8","9");
        $standard_manysets = array('၀','၁','၂' ,'၃','၄','၅','၆','၇','၈','၉');
        $year=str_replace($standard_numsets,$standard_manysets,$r[0]);
        $day=str_replace($standard_numsets,$standard_manysets,$r[2]);
        if($r[1]=='01'){
            $month = 'ဇန်နဝါရီလ';
        }elseif($r[1]=='02'){
            $month = 'ဖေဖော်ဝါရီလ';
            
        }elseif($r[1]=='03'){
            $month = 'မတ်လ';
            
        }elseif($r[1]=='04'){
            $month = 'ဧပြီလ';
            
        }elseif($r[1]=='05'){
            $month = 'မေလ';
            
        }elseif($r[1]=='06'){
            $month = 'ဇွန်လ';
            
        }elseif($r[1]=='07'){
            $month = 'ဂျူလိုင်လ';
            
        }elseif($r[1]=='08'){
            $month = 'သြဂုတ်လ';
            
        }elseif($r[1]=='09'){
            $month = 'စက်တင်ဘာလ';
            
        }elseif($r[1]=='10'){
            $month = 'အောက်တိုဘာလ';
            
        }elseif($r[1]=='11'){
            $month = 'နိုဝင်ဘာလ';
            
        }elseif($r[1]=='12'){
            $month = 'ဒီဇင်ဘာလ';
            
        }
        return   $year .'/'.$month.'/'.$day.'ရက် ';
    }
?>

</body>
</html>