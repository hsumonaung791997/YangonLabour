<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက်ပုံစံ
</title>
</head>
<style>
    @media  print {
				html, body {
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
			td,th,div{line-height:50px;padding-left:10px;}
			html, body {
					width: 100%;
					height: 297mm;
					font-family: 'Pyidaungsu';
				}  
				h1,h2{
				text-align: center;
			}
</style>
<body>
	<div style="padding:2% 2% 2% 2%">
        <h2 style="text-align:center;font-weight:bold;">အလုပ်ရုံနှင့်အလုပ်သမားဥပဒေစစ်ဆေးရေးဦးစီးဌာန<br><br>လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက်ပုံစံ </h2>
        <table border="1" style="border-collapse: collapse;width:100%;">
			<tbody>
				<tr>
					<th colspan="2" align="left"><h3>လုပ်ငန်းဆိုင်ရာ အချက်အလက်များ</h3></th>
				</tr>
				<tr>
					<td>လုပ်ငန်းအမည် - <?php echo e($factory_impact->workname); ?></td>
					<td>လုပ်ငန်းအမျိုးအစား - <?php echo e($factory_impact->typeofwork); ?></td>
				</tr>
				<tr>
					<td>လိပ်စာ - <?php echo e($factory_impact->address); ?></td>
					<td>
						<div>ပိုင်ရှင်အမည် - <?php echo e($factory_impact->ownername); ?></div>
						<div>မန်နေဂျာအမည် - <?php echo e($factory_impact->managername); ?></div>
					</td>
				</tr>
				<tr>
					<td>
						<div style="border-bottom:1px solid #000;">အလုပ်သမားဦးရေ</div>
						<div style="padding:0;">
							<table border="1" style="border-collapse: collapse;width:100%;">
								<tbody align="center">
									<tr>
										<td>ကျား</td>
										<td>မ</td>
										<td>ပေါင်း</td>
									</tr>
									<tr>
										<td><?php echo e($factory_impact->workermale); ?></td>
										<td><?php echo e($factory_impact->workerfemale); ?></td>
										<td>
											<?php
												$total=0;
												$standard_numsets = array("0","1","2","3","4","5","6","7","8","9");
												$standard_manysets = array('၀','၁','၂' ,'၃','၄','၅','၆','၇','၈','၉');
												$emen=str_replace($standard_manysets,$standard_numsets,$factory_impact->workermale);
												$ewomen=str_replace($standard_manysets,$standard_numsets,$factory_impact->workerfemale);
												$total=$emen+$ewomen;
												$total_worker =str_replace($standard_numsets,$standard_manysets,$total);
												echo $total_worker;
					    					?>
										</td>
									</tr>
								</tbody>
							</table>
						</div>

					</td>
					<td>
						<div>ဆက်သွယ်ရမည့်-</div>
						<div>ဖုန်းနံပါတ် - <?php echo e($factory_impact-> contactphone); ?></div>
						<div>Email - <?php echo e($factory_impact->contactemail); ?></div>
						<div>Fax - <?php echo e($factory_impact->contactfax); ?></div>
					</td>
				</tr>
				<tr>
					<th colspan="2" align="left"><h3>ထိခိုက်သူ/သေဆုံးသူ ဆိုင်ရာ အချက်အလက်များ</h3></th>

				</tr>
				<tr>
					<td>
						<div>ထိခိုက်သူ/သေဆုံးသူ အမည် - <?php echo e($factory_impact->dieworkername); ?> </div>
						<div>အလုပ်အကိုင် - <?php echo e($factory_impact->occupation); ?> </div>
					</td>
					<td>
						<div>အသက် - <?php echo e($factory_impact->dieworkerage); ?> </div>
						<div>လုပ်သက် - <?php echo e($factory_impact->dieworkerex); ?> </div>
						<div>လိင် - <?php echo e($factory_impact->typeofsex); ?></div>
					</td>
				</tr>
				<tr>
					<td>ခန့်မှန်းအလုပ်ပျက်ရက် - <?php echo e($factory_impact->estimatedloss); ?></td>
					<td>ပျက်ကွက်ခဲ့သည့်အလုပ်ပျက်ရက် - <?php echo e($factory_impact->absentworkday); ?></td>
				</tr>
				<tr>
					<td>
						<div>လက်ရှိအလုပ်ပြန်လည်ဝင်ရောက်မှု ရှိ/မရှိ - <?php echo e($factory_impact->returnwork); ?> </div>
						<div>အလုပ်ပြန်ဝင်သည့်ရက်စွဲ - <?php echo e($factory_impact->returnworkdate); ?> </div>
					</td>
					<td>
						<div>ထိခိုက်ဒဏ်ရာအခြေအနေ - </div>
						<div><?php echo e($factory_impact->injury); ?></div>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo e($factory_impact->casecondition); ?>

					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="2" align="left">လူမှုဖူလုံရေး အကျုံးဝင်မှုရှိ/မရှိ - <?php echo e($factory_impact->coverage); ?> </td>
				</tr>
				<tr>
					<th align="left" colspan="2"><h3>ထိခိုက်မှုဆိုင်ရာ/သေဆုံးမှုဆိုင်ရာ အချက်အလက်များ</h3></th>
				</tr>
				<tr>
					<td>ထိခိုက်မှုဖြစ်ပွားခဲ့သည့်နေရာ - <?php echo e($factory_impact->damageoccur); ?> </td>
					<td> ဖြစ်ပွားခဲ့သည့်နေ့နှင့်အချိန် - <?php echo e($factory_impact->occurdate); ?> - <?php echo e($factory_impact->occurtime); ?> </td>
				</tr>
				<tr>
					<td align="left" colspan="2">ထိခိုက်မှုဖြစ်ပွားခဲ့သည့် ကဏ္ဍအမည် ၊ကဏ္ဍခွဲ၊အုပ်စု၊အုပ်စုခွဲ - <?php echo e($factory_impact->categoryname); ?> </td>
				</tr>
				<tr>
					<td align="left" colspan="2">ထိခိုက်မိသည့်အစိတ်အပိုင်း - <?php echo e($factory_impact->affectpart); ?> </td>
				</tr>
				<tr>
					<td align="left" colspan="2">ထိခိုက်ဒဏ်ရာအမျိုးအစား - <?php echo e($factory_impact->typeofaffect); ?> </td>
				</tr>
				<tr>
					<td align="left" colspan="2">ထိခိုက်မှုဖြစ်ရသည့်အကြောင်းအရင်း - <?php echo e($factory_impact->causehurm); ?> </td>
				</tr>
				<tr>
					<td colspan="2" align="left">
						ထိခိုက်မှုဖြစ်ပွားရသည့် အခြေခံ အကြောင်းရင်း(Basic/Root Causes) - 
						<?php echo e($factory_impact->basiccauses); ?>

					</td>
				</tr>
				<tr>
					<td colspan="2" align="left">
						သုံးသပ်ချက် - <?php echo e($factory_impact->review); ?>					
					</td>
				</tr>
				<tr>
					<td colspan="2" align="left">
						လုပ်ငန်းခွင်ထိခိုက်မှု ဖြစ်စဥ◌် အပြည့်အစုံ ရေးသားရန် -	<?php echo e($factory_impact->fullprocess); ?>					
					</td>
				</tr>
				<tr>
					<td colspan="2" align="left">
						ထိခိုက်မှုဖြစ်ပွားရသည့် နောက်ကွယ် အကြောင်းရင်း (Underlying Causes) -
						<?php echo e($factory_impact->underlyingcauses); ?>						
					</td>
				</tr>
				<tr>
					<td colspan="2" align="left">
						အကြောင်းကြားစာ လက်ခံရရျိသည့်နေ့ - <?php echo e($factory_impact->receivenoti); ?>						
					</td>
				</tr>
				<tr>
					<td colspan="2" align="left">
						စစ်ဆေးခြင်း - <?php echo e($factory_impact->check); ?>					
					</td>
				</tr>
				<tr>
					<td colspan="2" align="left">
						စစ်ဆေးသည့် နေ့ နှင့် အချိန် - <?php echo e($factory_impact->inspectiondate); ?>			
					</td>
				</tr>
				<tr>
					<td colspan="2" align="left">
						စစ်ဆေးသူအမည် နှင့် ရာထူး - <?php echo e($factory_impact->checkName); ?> - <?php echo e($factory_impact->checkPosition); ?>					
					</td>
				</tr>
				<tr>
					<td>
							စစ်ဆေးစဉ်လိုက်ပါခဲ့သူများ				
					</td>
					<td>

							<div style="border-bottom:1px solid #000;">
								<?php $__currentLoopData = $checkoutpeople; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								အမည် - <?php echo e($c->name); ?> <br>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
					
					</td>
				</tr>
				<tr>
					<td>
						တွေ့ဆုံမေးမြန်းခဲ့သူများ အမည်၊ ရာထူး နှင့် ဖုန်းနံပါတ်
					</td>
					<td>
						<div style="border-bottom:1px solid #000;">
							<table border="0">
								<tr>
									<th>
										အမည်
									</th>
									<th>
										ရာထူး 
									</th>
									<th>
											ဖုန်းနံပါတ်
									</th>
								</tr>
								<?php $__currentLoopData = $interviewpeople; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $interview): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
								<td><?php echo e($interview->name); ?></td>
								<td><?php echo e($interview->position); ?></td>
								<td><?php echo e($interview->contactphone); ?></td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</table>
						</div>
						
						
						
						

					</td>
				</tr>
				<tr>
					<td colspan="2" align="left">
							ထိခိုက်မှုဖြစ်ပွားပုံ အကျဉ်း -  
					</td>
					<td><?php echo e($factory_impact->injurybrief); ?></td>
				</tr>
				
				
			</tbody>

		</table> 
		<br>
		<p style="text-align:left;">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ယခုဖြစ်ပွားသည့် လုပ်ငန်းခွင်ထိခိုက်မှု ဖြစ်စဥ် နှင့် စပ်လျဥ်း၍ သိရှိသမျှ မှန်ကန်စွာဖြေဆိုပါကြောင်း နှင့် အလားတူ ထိခိုက်မှု ထပ်မံမဖြစ်ပွားစေရေး လိုက်နာဆောင်ရွက်ရမည့်ညွှန်ကြားချက်များကို တိကျစွာ လိုက်နာဆောင်ရွက်ပါမည် - 

		</p>
		<br>
		
		<table style="width:100%;">
			<tbody>
				<tr>
					<td colspan="2" style="text-align:left">
						<h3 style="font-weight:bold;">ဖြေဆိုသူ/ အသိသက်သေ</h3>
					</td>
				</tr>
				<tr>
					<td>
						<div>လက်မှတ် - </div>
						<div>အမည် - <?php echo e($factory_impact->witnessname1); ?></div>
						<div>ရာထူး - <?php echo e($factory_impact->witnessposition1); ?> </div>
					</td>
					<td>
						<div>လက်မှတ် - </div>
						<div>အမည် - <?php echo e($factory_impact->witnessname2); ?> </div>
						<div>ရာထူး - <?php echo e($factory_impact->witnessposition2); ?> </div>
					</td>
				</tr>
				<tr></tr>
				<tr>
					<td><h3 style="font-weight:bold;">ပိုင်ရှင်</h3></td>
					<td><h3 style="font-weight:bold;">မန်နေဂျာ</h3></td>
				</tr>
				<tr></tr>
				<tr>
					<td>
						<div>လက်မှတ် - </div>
						<div>အမည် - <?php echo e($factory_impact->witnessownername); ?></div>
					</td>
					<td>
						<div>လက်မှတ် - </div>
						<div>အမည် -  <?php echo e($factory_impact->witnessmanagername); ?> </div>
					</td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr>
					<td colspan="2" style="text-align:center; font-weight:bold;">
						စစ်ဆေးရေးအရာရှိ - <?php echo e($factory_impact->inspector); ?>

					</td>
				</tr>
			</tbody>
		</table>
	</div>
    
</body>
</html>