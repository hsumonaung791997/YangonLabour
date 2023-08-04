<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> သင်တန်းစီမံချက်လချူပ်များ {{$township_name}}
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
	

    <div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>သင်တန်းစီမံချက်လချူပ်များ ({{$township_name}})</h2>
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
                        ဆွေးနွေးပွဲ <br> ဦးဆောင်ပြုလုပ်သူနှင့် ဆွေးနွေးသူများ
                        </th>
                        <th rowspan="2">
                            ကျင်းပပြုလုပ်သည့်နေရာ / <br> မြို့နယ်
                        </th>
                        <th scope="col" rowspan="2">
                                စက်ရုံအလုပ်ရုံ <br>  အမည် 
                        </th>
                        <th rowspan="2">
                            ဆိုင်/အလုပ်ဌာန <br> အမည် 
                        </th>
                        <th scope="col" rowspan="2">
                            သင်တန်းကျောင်း <br>အမည်            
                        </th>
                        <th colspan="3">
                             တက်ရောက်သူဦးရေ
                        </th>
                        <th  rowspan="2">
                            အကြိမ် <br>
                        </th>
                    </tr>
                    <tr>
                        <th>ကျား </th>
                        <th>မ</th>
                        <th>ပေါင်း</th>
                    </tr>
                </thead>
                <tbody class="list">
                    {{-- //for total men and women and all to burmese --}}
                <?php $i=0; 
                $totalmen = 0;
                $totalwomen = 0;
                $totalall = 0;
                $summen=0;
                $sumwomen=0;
                $sumall=0;
                ?>
                    @foreach ($report as $r)
                        <?php
                             $standard_numsets = array("0","1","2","3","4","5","6","7","8","9");
                             $standard_manysets = array('၀','၁','၂' ,'၃','၄','၅','၆','၇','၈','၉');
                             $totalmen+= $r->emen;
                             $summen=str_replace($standard_numsets,$standard_manysets,$totalmen);
                             $totalwomen+=$r->ewomen;
                             $sumwomen=str_replace($standard_numsets,$standard_manysets,$totalwomen);
                             $totalall += $r->emen+$r->ewomen;
                             $sumall=str_replace($standard_numsets,$standard_manysets,$totalall);

                        ?>
                
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{$r->s_leader}}({{$r->s_leaderrank}})<br>
                                @if($r->s_contributor1!=null){{$r->s_contributor1}}({{$r->s_contributor1rank}})<br/>@endif @if($r->s_contributor2!=null){{$r->s_contributor2}}({{$r->s_contributor2rank}})<br/>@endif @if($r->s_contributor3!=null)
                                {{$r->s_contributor3}}({{$r->s_contributor3rank}})<br/>@endif
                            </td>
                            <td>
                                {{$r->s_place}}
                            </td>
                            <td>
                                @if($r->ftype==1)
                                {{$r->factoryname}}
                                @endif
                            </td>
                            <td>
                                @if($r->ftype==2)
                                {{$r->factoryname}}
                                @endif
                            </td>
                            <td>
                                {{$r->trainingclass}}
                            </td>
                            <td>
                                {{$r->mmen}}
                            </td>
                            <td>
                                {{$r->mwomen}}
                            </td>
                            <td>    
                                <?php 
                                    $total=$r->emen+$r->ewomen;
                                    $sum=str_replace($standard_numsets,$standard_manysets,$total);
                                    echo $sum;
                                ?>
                                
                            </td>
                            <td>
                                {{$r->s_times}}
                            </td>
                           
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="6" style="text-align:center">
                                စုစုပေါင်း
                        </td>
                        <td>
                            {{$summen}}
                        </td>
                        <td>
                            {{ $sumwomen}}
                        </td>
                        <td>
                            {{$sumall}}
                        </td>
                        <td>

                        </td>
                    </tr>

                </tbody>
            </table>
            </div>
        </div>
    </div>

</body>
</html>