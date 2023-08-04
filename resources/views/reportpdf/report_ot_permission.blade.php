<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> အချိန်ပိုခွင့်ပြုခြင်း ၊ အချိန်ပိုလုပ်ကိုင်ခြင်း လချူပ်  {{$township_name}}
</title>
</head>
<style>
    @media print {
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
            <h2>အချိန်ပိုခွင့်ပြုခြင်း ၊ အချိန်ပိုလုပ်ကိုင်ခြင်း လချူပ် ({{$township_name}})</h2>
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
                        ရုံးအမည်
                    </th>
                    <th scope="col" colspan='3'>
                        အချိန်ပိုခွင့်ပြုခြင်းနာရီ
                    </th>
                </tr>
                <tr>
                    <th>အလုပ်ရုံ</th>
                    <th>လုပ်သား</th>
                    <th>ခွင့်ပြုနာရီ</th>
                </tr>
            </thead>
            <tr>
                <td>
                    ၁
                </td>
                <td>
                    {{$township_name}}
                </td>
                <td>
                    {{$ot_count}}
                </td>
                <td>
                 <?php $totalworker=0;
                   foreach ($ot as $ots){
                        $eworker=str_replace($standard_manysets,$standard_numsets,$ots->TotalWorker);
                        $totalworker+=$eworker;

                        $permission_hour=str_replace($standard_manysets,$standard_numsets,$ots->totalOthour);
                   }
                   $total_workers =str_replace($standard_numsets,$standard_manysets,$totalworker);
                   $permission_hours =str_replace($standard_numsets,$standard_manysets,$permission_hour);

                   echo $total_workers;
                   ?>
                </td>
                <td>
                    <?php echo $permission_hours;?>
                </td>
               
            </tr>
            <tbody>

            </tbody>

        </table>
        </div>
    </div>
</div>
</body>
</html>