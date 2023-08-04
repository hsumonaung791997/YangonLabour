<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> စက်ရုံဖွင့် / ပိတ်နှင့် လုပ်သားအတိုး / အလျော့စာရင်း {{$township_name}}
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
                <h2>စက်ရုံဖွင့် / ပိတ်နှင့် လုပ်သားအတိုး / အလျော့စာရင်း ({{$township_name}})</h2>
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
                                မြို့နယ်
                        </th>
                        <th scope="col" colspan="4">
                                စက်ရုံ
                        </th>
                        <th scope="col" colspan="4">
                                လုပ်သားအင်အား
                        </th>
                    </tr>
                    <tr>
                        <th scope="col" colspan="2">ယခင်လ</th>
                        <th scope="col" colspan="2">ယခုလ</th>
                        <th scope="col" colspan="2">ယခင်လ</th>
                        <th scope="col" colspan="2">ယခုလ</th>
                    </tr>
                    <tr>
                        <th scope="col">ဖွင့် </th>
                        <th scope="col">ပိတ် </th>
                        <th scope="col" >ဖွင့်</th>
                        <th scope="col">ပိတ်</th>
                        <th scope="col">တိုး</th>
                        <th scope="col" >လျှော့ </th>
                        <th scope="col">တိုး</th>
                        <th scope="col">လျှော့ </th>
                    </tr>
                </thead>
                <?php $i=0; ?>
                     <tr>
                        <td>
                            {{++$i}}
                        </td>
                        <td>
                            {{$township_name}}
                        </td>
                        <td>
                                {{str_replace($standard_numsets,$standard_manysets,$lastmonthopencount) }}
                           {{-- {{$lastmonthopencount}} --}}
                        </td>
                        <td>
                            {{str_replace($standard_numsets,$standard_manysets,$lastmonthclosecount) }}
                            {{-- {{$lastmonthclosecount}} --}}
                        </td>
                        <td>
                            {{str_replace($standard_numsets,$standard_manysets,$thismonthopen) }}
                            {{-- {{$thismonthopen}} --}}
                        </td>
                        <td>
                            {{str_replace($standard_numsets,$standard_manysets,$thismonthclose) }}
                            {{-- {{$thismonthclose}} --}}
                        </td>
                        
                        <td><?php  $total_eng=0;
                            $standard_numsets = array("0","1","2","3","4","5","6","7","8","9");
                            $standard_manysets = array('၀','၁','၂' ,'၃','၄','၅','၆','၇','၈','၉'); ?>
                            @foreach ($lastmonth as $l)
                            @if($l->status==0)
                            <?php 
                            $totalmen=str_replace($standard_manysets,$standard_numsets,$l->totalMaleWorker);
                            $totalwomen=str_replace($standard_manysets,$standard_numsets,$l->totalFemaleWorker);
                            $total_eng+= $totalmen+$totalwomen;?>
                              @endif
                            @endforeach
                            <?php
                            $total = str_replace($standard_numsets,$standard_manysets,$total_eng); 
                            echo $total;?>
                        </td>

                        <td>
                            <?php $reduce_total_eng=0; ?>
                            @foreach ($lastmonth as $l)
                            @if($l->status==1)
                            <?php 
                            $reducemale=str_replace($standard_manysets,$standard_numsets,$l->totalMaleWorker);
                            $reducefemale=str_replace($standard_manysets,$standard_numsets,$l->totalFemaleWorker);
                            $reduce_total_eng+= $reducemale+$reducefemale;?>
                              @endif
                            @endforeach
                            <?php
                            $reduce_total = str_replace($standard_numsets,$standard_manysets,$reduce_total_eng); 
                            echo $reduce_total;?>
                        </td>

                        <td>
                            <?php $thismonth_increase_total_eng=0;?>
                            @foreach ($thismonth as $l)
                            @if($l->status==0)
                            <?php 
                            $increase_male=str_replace($standard_manysets,$standard_numsets,$l->totalMaleWorker);
                            $increase_female=str_replace($standard_manysets,$standard_numsets,$l->totalFemaleWorker);
                            $thismonth_increase_total_eng+= $increase_male+$increase_female;?>
                                @endif
                            @endforeach
                            <?php
                            $increase_total = str_replace($standard_numsets,$standard_manysets,$thismonth_increase_total_eng); 
                            echo $increase_total;?>
                        </td>
                        <td>
                            <?php $thismonth_decrease_total_eng=0;?>
                            @foreach ($thismonth as $l)
                            @if($l->status==1)
                            <?php 
                            $decrease_male=str_replace($standard_manysets,$standard_numsets,$l->totalMaleWorker);
                            $decrease_female=str_replace($standard_manysets,$standard_numsets,$l->totalFemaleWorker);
                            $thismonth_decrease_total_eng+= $decrease_male+$decrease_female;?>
                                @endif
                            @endforeach
                            <?php
                            $decrease_total = str_replace($standard_numsets,$standard_manysets,$thismonth_decrease_total_eng); 
                            echo $decrease_total;?>
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