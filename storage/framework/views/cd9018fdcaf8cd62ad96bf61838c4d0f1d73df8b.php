<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> မတော်တဆထိခိုက်မှု စစ်ဆေးခြင်းလချူပ်  <?php echo e($township_name); ?>

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
                <h2>မတော်တဆထိခိုက်မှု စစ်ဆေးခြင်းလချူပ် (<?php echo e($township_name); ?>)</h2>
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
                        <th scope="col">
                            ထိခိုက်သူ <br>အမည်/ရာထူး 
                        </th>
                        <th scope="col" >
                            ထိခိုက်မှုဖြစ်ပွားသည့်နေ့ရက် 
                        </th>
                        <th>
                             စစ်ဆေးသည့်နေ့ / အချိန်
                        </th>
                        <th>
                            ထိခိုက်မိသည့် အမျိုးအစား
                        </th>
                        <th>
                            ထိခိုက်မှုဖြစ်ရသည့်အကြောင်းအရင်း
                        </th>
                        
                        <th>
                             ညွှန်ကြားခဲ့သည့် အချက်များ
                        </th>
                        <th>
                            ညွှန်ကြားချက်များ လိုက်နာမှု
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
                       <?php echo e(App\Township::where('id',$r->township_id)->value('township_name')); ?> 
                    </td>
                    <td>
                      <?php echo e($r->workname); ?> <br>
                      (<?php if($r->Type==1): ?>
                        စက်ရုံ/အလုပ်ရုံ
                        <?php else: ?>
                        ဆိုင်အလုပ်ဌာန
                        <?php endif; ?>)
                    </td>
                    <td>
                        <?php echo e($r->dieworkername); ?>(<?php echo e($r->occupation); ?>)
                    </td>
                    <td>
                         <?php 
                        if($r->occurdate!==null && $r->occurdate!==null){
                            $occurdate=changetomyanmar($r->occurdate,$r->occurtime);
                            echo $occurdate;
                        }
                        
                        ?>  
                        
                        
                    </td>
                    <td>
                        
                        <?php 
                        // seperate date and time 
                        if($r->inspectiondate!==null){
                            $inspection= explode('T',$r->inspectiondate);
                            $inspectiondate=changetomyanmar($inspection[0],$inspection[1]);
                            echo $inspectiondate;
                        }
                           ?>
                    </td>
                    <td>
                        <?php echo e($r->typeofaffect); ?> 
                    </td>
                    <td>
                        <?php echo e($r->causehurm); ?>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tbody>

                </tbody>

            </table>
            </div>
        </div>
    </div>

    <?php
    function changetomyanmar($data,$time){
        $r=explode("-",$data);
        // echo $r[0];
        $standard_numsets = array("0","1","2","3","4","5","6","7","8","9");
        $standard_manysets = array('၀','၁','၂' ,'၃','၄','၅','၆','၇','၈','၉');
        $year=str_replace($standard_numsets,$standard_manysets,$r[0]);
        $day=str_replace($standard_numsets,$standard_manysets,$r[2]);
        $time=str_replace($standard_numsets,$standard_manysets,$time);
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
        return   $year .'/'.$month.'/'.$day.'ရက် - '.$time.'နာရီ';
    }

   
?>

</body>
</html>