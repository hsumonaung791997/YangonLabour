<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>  ညွှန်ကြားချက်များ (အလုပ်ရုံစစ်ဆေးရေး)   <?php echo e($township_name); ?>

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
                <h2 class="text-center"> ညွှန်ကြားချက်များ (အလုပ်ရုံစစ်ဆေးရေး) (<?php echo e($township_name); ?>) </h2>
            </div>
        </div>
        <div class="row">
            <div class="table-responsive">

            <table class="table table-bordered" id="myTable">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" rowspan="3">
                        စဉ်
                        </th>
                        <th scope="col" rowspan="3">
                            ရုံးအမည်
                        </th>
                        <th scope="col" colspan="18">
                            ညွှန်ကြားချက်များ 
                        </th>
                    </tr>
                  <tr>
                      <th colspan="3">ဘေးကင်း</th>
                      <th colspan="3">ကျန်းမာ </th>
                      <th colspan="3">သက်သာ</th>
                      <th colspan="3">မှတ်တမ်း </th>
                      <th colspan="3">အခြား </th>
                      <th colspan="3">ပေါင်း</th>
                  </tr>
                  <tr>
                    <th>ညွှန်</th>
                    <th>လိုက်  </th>
                    <th>ကျန်</th>
                    <th>ညွှန်</th>
                    <th>လိုက်  </th>
                    <th>ကျန်</th>
                    <th>ညွှန်</th>
                    <th>လိုက်  </th>
                    <th>ကျန်</th>
                    <th>ညွှန်</th>
                    <th>လိုက်  </th>
                    <th>ကျန်</th>
                    <th>ညွှန်</th>
                    <th>လိုက်  </th>
                    <th>ကျန်</th>
                    <th>ညွှန်</th>
                    <th>လိုက်  </th>
                    <th>ကျန်</th>
                  </tr>
                </thead>
                <tbody class="list">
                    <tr>
                    <?php $__currentLoopData = $factory_instruction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $factroy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                        <td>၁</td>
                        <td><?php echo e($township_name); ?>(စက်ရုံ)</td>
                        <td><?php echo e($factroy->f_safety_total); ?></td>
                        <td><?php echo e($factroy->f_safety_total); ?></td>
                        <td>-</td>

                        <td><?php echo e($factroy->f_health_total); ?></td>
                        <td><?php echo e($factroy->f_health_total); ?></td>
                        <td>-</td>

                        <td><?php echo e($factroy->f_welfare_total); ?></td>
                        <td><?php echo e($factroy->f_welfare_total); ?></td>
                        <td>-</td>

                        <td><?php echo e($factroy->f_note_total); ?></td>
                        <td><?php echo e($factroy->f_note_total); ?></td>
                        <td>-</td>

                        <td><?php echo e($factroy->f_other_total); ?></td>
                        <td><?php echo e($factroy->f_other_total); ?></td>
                        <td>-</td>

                        <td>
                            <?php
                                $total_instruction=0;
                                $ins1=str_replace($standard_manysets,$standard_numsets,$factroy->f_safety_total);
                                $ins2=str_replace($standard_manysets,$standard_numsets,$factroy->f_health_total);
                                $ins3=str_replace($standard_manysets,$standard_numsets,$factroy->f_welfare_total);
                                $ins4=str_replace($standard_manysets,$standard_numsets,$factroy->f_welfare_total);
                                $ins5=str_replace($standard_manysets,$standard_numsets,$factroy->f_other_total);
                                $total_instruction=$ins1+$ins2+$ins3+$ins4+$ins5;
                                // $total_instructions =str_replace($standard_numsets,$standard_manysets,$total_instruction);
                                echo $total_instruction;
                                ?>
                        </td>
                         <td><?php echo e($total_instruction); ?></td>
                         <td>-</td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>

                    <tr>
                        <?php $__currentLoopData = $shop_instruction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                        <td>၂</td>
                        <td><?php echo e($township_name); ?>(ဆိုင်)</td>
                        <td><?php echo e($shop->f_safety_total); ?></td>
                        <td><?php echo e($shop->f_safety_total); ?></td>
                        <td>-</td>

                        <td><?php echo e($shop->f_health_total); ?></td>
                        <td><?php echo e($shop->f_health_total); ?></td>
                        <td>-</td>

                        <td><?php echo e($shop->f_welfare_total); ?></td>
                        <td><?php echo e($shop->f_welfare_total); ?></td>
                        <td>-</td>

                        <td><?php echo e($shop->f_note_total); ?></td>
                        <td><?php echo e($shop->f_note_total); ?></td>
                        <td>-</td>

                        <td><?php echo e($shop->f_other_total); ?></td>
                        <td><?php echo e($shop->f_other_total); ?></td>
                        <td>-</td>

                        <td>
                            <?php
                                $total_shop_instruction=0;
                                $shop_ins1=str_replace($standard_manysets,$standard_numsets,$shop->f_safety_total);
                                $shop_ins2=str_replace($standard_manysets,$standard_numsets,$shop->f_health_total);
                                $shop_ins3=str_replace($standard_manysets,$standard_numsets,$shop->f_welfare_total);
                                $shop_ins4=str_replace($standard_manysets,$standard_numsets,$shop->f_welfare_total);
                                $shop_ins5=str_replace($standard_manysets,$standard_numsets,$shop->f_other_total);
                                $total_shop_instruction=$shop_ins1+$shop_ins2+$shop_ins3+$shop_ins4+$shop_ins5;
                                // $total_instructions =str_replace($standard_numsets,$standard_manysets,$total_instruction);
                                echo $total_shop_instruction;
                                ?>
                        </td>
                         <td><?php echo e($total_shop_instruction); ?></td>
                         <td>-</td>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
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