@extends('layouts.admin')
@section('content')
    <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <p>
    	<div class="row">
	        <div class="col-lg-12 text-center">
	            <div class="pull-left">
	               <!--  <h1>အလုပ်သမားရေးရာ ဥပဒေများအား အသိပညာပေးဆွေးနွေးပွဲ ဆောင်ရွက်ထားမှုများ</h1> -->

                   <h1>အစီရင်ခံစာထုတ်ရန်</h1>
	            </div>
	            
	        </div>
	
    	</div>
    </p>

    <p>
        <div class="row">
            <div class="col-lg-12 text-right">
                <a href="{{url('Report-Pdf/'.$type.'/'.$township_id.'/'.$from.'/'.$to)}}" class="btn btn-success">ဖိုင်ထုတ်မည်</a>    
                    &nbsp;&nbsp;
                <a href="{{url('ReportAll')}}" class="btn btn-primary">နောက်သို့ပြန်သွားမည်</a>    
            </div>
    
        </div>
     </p>
    
     {{-- for to change burmese --}}
     <?php 
     $standard_numsets = array("0","1","2","3","4","5","6","7","8","9");
     $standard_manysets = array('၀','၁','၂' ,'၃','၄','၅','၆','၇','၈','၉'); ?>

{{-- for သင်တန်းစီမံချက်လချူပ် --}}
    @if($type==1)
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
                        <th scope="col"  rowspan="2">
                        လုပ်ဆောင်ရန် <br>
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
                            <td></td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="6" class="text-center">
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
                        <td>

                        </td>
                    </tr>

                </tbody>
            </table>
            </div>
        </div>
    </div>
    @endif

    {{-- for တရားစွဲလချူပ် --}}
    @if($type==2)
    <div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>တရားစွဲလချူပ် ({{$township_name}})</h2>
                </div>
            </div>

            <div class="row">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="myTable">
                            <thead class="thead-light">
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
                                    <th scope="col">
                                            လုပ်ဆောင်ရန်
                                    </th>
                            </thead>
                            <tbody class="list">
                                <?php $i=0; ?>
                                @foreach ($report as $r)
                                    <tr>
                                        <td>
                                            {{++$i}}
                                        </td>
                                        <td>
                                            {{$r->Name}} <br> (<?php if($r->chooseType==1) echo 'စက်ရုံ အလုပ်ရုံ'; else echo 'ဆိုင် နှင့်အလုပ်ဌာန'; ?>)
                                        </td>
                                        <td>
                                            {{$r->OwnerName}} (ပိုင်ရှင်) <br>
                                            {{$r->OwnerAddress}}
                                        </td>
                                        <td>
                                            {{$r->PlaintiffName}} <br> ({{$r->PlaintiffLvl}})
                                        </td>
                                        <td>
                                            {{$r->ProsecutedAbout}}
                                        </td>
                                        <td>
                                            {{$r->ProsecutedLaw}}
                                        </td>
                                        <td>
                                            {{$r->DecreeDay}}(အမိန့်ချမှတ်သောနေ့
                                            ) <br> 
                                            {{$r->getDecreeDay}} (၎င်းအမိန့်ကိုရရှိသောနေ့)
                                        </td>
                                        <td>
                                            {{$r->ProsecutedDay}} <br>
                                            {{$r->CourtName}}
                                        </td>
                                        <td>
                                            {{$r->DecreeID}}
                                        </td>
                                        <td>
                                             {{$r->noOfemp}}
                                         </td>
                                         <td>
                                             {{$r->empGetmoney}}
                                         </td>
                                        
                                        <td>
                                            {{$r->DecreeAct}}
                                        </td>
                                        <td>
                                            {{$r->judgmentDay}} (နေ့စွဲ) <br>
                                            {{$r->judgment}}
                                        </td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
    </div>
    @endif
{{-- စက္ရုံဖြင့္ / ပိတ္ႏွင့္ လုပ္သားအတိုး / အေလ်ာ့စာရင္း --}}
    @if($type==3)
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
                                    @if($lastmonthopencount!==null)
                                    {{str_replace($standard_numsets,$standard_manysets,$lastmonthopencount) }}
                                    @endif
                               {{-- {{$lastmonthopencount}} --}}
                            </td>
                            <td>
                                @if($lastmonthclosecount!==null)
                                {{str_replace($standard_numsets,$standard_manysets,$lastmonthclosecount) }}
                                @endif
                                {{-- {{$lastmonthclosecount}} --}}
                            </td>
                            <td>
                                 @if($thismonthopen!==null)
                                {{str_replace($standard_numsets,$standard_manysets,$thismonthopen) }}
                                @endif
                                {{-- {{$thismonthopen}} --}}
                            </td>
                            <td>
                                @if($thismonthclose!==null)
                                {{str_replace($standard_numsets,$standard_manysets,$thismonthclose) }}
                                @endif
                                {{-- {{$thismonthclose}} --}}
                            </td>
                            
                            <td><?php  $total_eng=0;
                                $standard_numsets = array("0","1","2","3","4","5","6","7","8","9");
                                $standard_manysets = array('၀','၁','၂' ,'၃','၄','၅','၆','၇','၈','၉'); ?>
                                @foreach ($lastmonth as $l)
                                    @if($l->status==0)
                                        
                                         @if($l->totalMaleWorker!==null && $$l->totalFemaleWorker)
                                            <?php
                                                $totalmen=str_replace($standard_manysets,$standard_numsets,$l->totalMaleWorker);
                                                $totalwomen=str_replace($standard_manysets,$standard_numsets,$l->totalFemaleWorker);
                                                $total_eng+= $totalmen+$totalwomen;
                                            ?>
                                         @endif
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
                                     @if($l->totalMaleWorker!==null && $$l->totalFemaleWorker)
                                        <?php 
                                        $reducemale=str_replace($standard_manysets,$standard_numsets,$l->totalMaleWorker);
                                        $reducefemale=str_replace($standard_manysets,$standard_numsets,$l->totalFemaleWorker);
                                        $reduce_total_eng+= $reducemale+$reducefemale;?>
                                     @endif
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
                                        @if($l->totalMaleWorker!==null && $$l->totalFemaleWorker)
                                            <?php 
                                            $increase_male=str_replace($standard_manysets,$standard_numsets,$l->totalMaleWorker);
                                            $increase_female=str_replace($standard_manysets,$standard_numsets,$l->totalFemaleWorker);
                                            $thismonth_increase_total_eng+= $increase_male+$increase_female;?>
                                        @endif
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
                                    @if($l->totalMaleWorker!==null && $$l->totalFemaleWorker)
                                        <?php 
                                        $decrease_male=str_replace($standard_manysets,$standard_numsets,$l->totalMaleWorker);
                                        $decrease_female=str_replace($standard_manysets,$standard_numsets,$l->totalFemaleWorker );
                                        $thismonth_decrease_total_eng+= $decrease_male+$decrease_female;?>
                                    @endif
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
    @endif

    {{-- အချိန်ပိုခွင့်ပြုခြင်း ၊ အချိန်ပိုလုပ်ကိုင်ခြင်း လချူပ် --}}
    @if($type==4)
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
    @endif

    {{-- မတော်တဆထိခိုက်မှု စစ်ဆေးခြင်းလချူပ် --}}
    @if($type==5)
    <div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>မတော်တဆထိခိုက်မှု စစ်ဆေးခြင်းလချူပ် ({{$township_name}})</h2>
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
                    @foreach ($report as $r)
                    <tr>
                        <td>
                            {{++$i}}
                        </td>
                        <td>
                           {{App\Township::where('id',$r->township_id)->value('township_name')}} 
                        </td>
                        <td>
                          {{$r->workname}} <br>
                          (@if($r->Type==1)
                            စက်ရုံ/အလုပ်ရုံ
                            @else
                            ဆိုင်အလုပ်ဌာန
                            @endif)
                        </td>
                        <td>
                            {{$r->dieworkername}}({{$r->occupation}})
                        </td>
                        <td>
                             <?php 
                            if($r->occurdate!==null && $r->occurdate!==null){
                                $occurdate=changetomyanmar($r->occurdate,$r->occurtime);
                                echo $occurdate;
                            }
                            
                            ?>  
                            {{-- {{$r->occurdate}} - {{$r->occurtime}}  --}}
                            
                        </td>
                        <td>
                            {{-- {{$r->inspectiondate}} --}}
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
                            {{$r->typeofaffect}} 
                        </td>
                        <td>
                            {{$r->causehurm}}
                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                    </tr>
                    @endforeach
                    <tbody>

                    </tbody>
    
                </table>
                </div>
            </div>
        </div>
    @endif

    {{-- မတော်တဆထိခိုက်မှု ရရှိခြင်းလချူပ် --}}
    @if($type==6)
    <div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>မတော်တဆထိခိုက်မှု ရရှိခြင်းလချူပ် ({{$township_name}})</h2>
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
                @foreach ($report as $r)
                <tr>
                    <td>
                        {{++$i}}
                    </td>
                    <td>
                        {{$township_name}}
                        (@if($r->Type==1)
                        စက်ရုံ/အလုပ်ရုံ
                        @else
                        ဆိုင်အလုပ်ဌာန
                        @endif)
                    </td>
                    <td>
                      {{$r->FactoryName}}
                    </td>
                    <td>
                        {{$r->accTime}} 
                    </td>
                    <td>
                        {{$r->painType}} 
                    </td>
                    <td>
                        {{$r->accPlace}}
                    </td>
                    <td>
                        {{$r->accDetail}}
                    </td>
                </tr>
                @endforeach
                <tbody>

                </tbody>

            </table>
            </div>
        </div>
    </div>
    @endif

        {{-- စစ်ဆေးဆောင့်ရွက်ချက် လချုပ်(GLI) --}}
    @if($type==7)
    <div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>စစ်ဆေးဆောင့်ရွက်ချက် လချုပ်(GLI) ({{$township_name}})</h2>
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
                            {{-- for factory inspection law --}}
                            @foreach ($reportfactory as $r)
                            <tr>
                                <td>
                                    {{++$i}}
                                </td>
                                <td>
                                    {{App\Factory::where('FactoryId',$r->factory_id)->value('FactoryName')}}
                                </td>
                               
                                <td>
                                    {{App\EconomicSection::where('id',App\Factory::where('FactoryId',$r->factory_id)->value('section_id'))->value('Section')}}
                                </td>
                                <td>
                                        {{App\Factory::where('FactoryId',$r->factory_id)->value('class_name')}}
                                </td>
                                <td>
                                    {{-- {{App\FactoryInspectionInforms::where('cid',$r->factoryinspectioninform_id)->value('inspectiondate')}} --}}
                                    <?php 
                                     $inspectiondate=datechangemyanmar(App\FactoryInspectionInforms::where('cid',$r->factoryinspectioninform_id)->value('inspectiondate'));
                                     echo $inspectiondate;
                                    ?>
                                </td>
                                <td>
                                    {{App\Factory::where('FactoryId',$r->factory_id)->value('totalMaleWorker')}}
                                </td>
                                <td>
                                    {{App\Factory::where('FactoryId',$r->factory_id)->value('totalFemaleWorker')}}
                                </td>
                                <td>
                                    <?php
                                        $total=0;
                                        $standard_numsets = array("0","1","2","3","4","5","6","7","8","9");
                                        $standard_manysets = array('၀','၁','၂' ,'၃','၄','၅','၆','၇','၈','၉');
                                        $emen=str_replace($standard_manysets,$standard_numsets,App\Factory::where('FactoryId',$r->factory_id)->value('totalMaleWorker'));
                                        $ewomen=str_replace($standard_manysets,$standard_numsets,App\Factory::where('FactoryId',$r->factory_id)->value('totalFemaleWorker'));
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
                            @endforeach

                            {{-- for shop inspection law --}}

                            @foreach ($reportshop as $r)
                            <tr>
                                    <td>
                                        {{++$i}}
                                    </td>
                                    <td>
                                        {{App\Shop::where('ShopId',$r->shop_id)->value('shopname')}}
                                    </td>
                                   
                                    <td>
                                        {{App\EconomicSection::where('id',App\Shop::where('ShopId',$r->shop_id)->value('section_id'))->value('Section')}}
                                    </td>
                                    <td>
                                            {{App\Shop::where('ShopId',$r->shop_id)->value('class_name')}}
                                    </td>
                                    <td>
                                        {{-- {{App\ShopInspectionInform::where('id',$r->check_id)->value('inspectiondate')}} --}}
                                        <?php 
                                            $date=App\ShopInspectionInform::where('id',$r->check_id)->value('inspectiondate');
                                            if($date!=null){
                                                $inspectiondate=datechangemyanmar($date);
                                                echo $inspectiondate;
                                            }
                                            
                                           
                                        ?>
                                    </td>
                                    <td>
                                         {{App\Shop::where('ShopId',$r->shop_id)->value('totalMaleWorker')}}
                                    </td>
                                    <td>
                                        {{App\Shop::where('ShopId',$r->shop_id)->value('totalFemaleWorker')}}
                                    </td>
                                    <td>
                                            <?php
                                            $total=0;
                                            $standard_numsets = array("0","1","2","3","4","5","6","7","8","9");
                                            $standard_manysets = array('၀','၁','၂' ,'၃','၄','၅','၆','၇','၈','၉');
                                            $emen=str_replace($standard_manysets,$standard_numsets,App\Shop::where('ShopId',$r->shop_id)->value('totalMaleWorker'));
                                            $ewomen=str_replace($standard_manysets,$standard_numsets,App\Shop::where('ShopId',$r->shop_id)->value('totalFemaleWorker'));
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
                            @endforeach
                    </tbody>
    
                </table>
                </div>
            </div>
        </div>  
    @endif

    {{-- စစ်ဆေးရေးလချူပ် (IF)  --}}
    @if($type==8)
    <div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>စစ်ဆေးရေးလချူပ် (IF) ({{$township_name}}) </h2>
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
                            {{-- for factory inspection safety --}}
                            @foreach ($reportfactory as $r)
                            <tr>
                                <td>
                                    {{++$i}}
                                </td>
                                <td>
                                    {{$r->factoryname}}
                                </td>
                               
                                <td>
                                    {{App\EconomicSection::where('id',App\Factory::where('FactoryName',$r->factoryname)->value('section_id'))->value('Section')}}
                                </td>
                                <td>
                                        {{App\Factory::where('FactoryName',$r->factoryname)->value('class_name')}}
                                </td>
                                <td>
                                    {{-- {{App\FactoryInspectionInforms::where('cid',$r->factoryinspectioninform_id)->value('inspectiondate')}} --}}
                                    <?php 
                                    $inspectiondate=datechangemyanmar(App\FactoryInspectionInforms::where('cid',$r->factoryinspectioninform_id)->value('inspectiondate'));
                                    echo $inspectiondate;
                                    ?>
                                </td>
                                <td>
                                    {{App\Factory::where('FactoryName',$r->factoryname)->value('totalMaleWorker')}}
                                </td>
                                <td>
                                    {{App\Factory::where('FactoryName',$r->factoryname)->value('totalFemaleWorker')}}
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
                            @endforeach

                            {{-- for shop inspection safety --}}

                            @foreach ($reportshop as $r)
                            <tr>
                                    <td>
                                        {{++$i}}
                                    </td>
                                    <td>
                                        {{App\Shop::where('ShopId',$r->shop_id)->value('shopname')}}
                                    </td>
                                   
                                    <td>
                                        {{App\EconomicSection::where('id',App\Shop::where('ShopId',$r->shop_id)->value('section_id'))->value('Section')}}
                                    </td>
                                    <td>
                                            {{App\Shop::where('ShopId',$r->shop_id)->value('class_name')}}
                                    </td>
                                    <td>
                                        {{-- {{App\ShopInspectionInform::where('id',$r->check_id)->value('inspectiondate')}} --}}
                                            <?php 
                                            $inspectiondate=datechangemyanmar(App\ShopInspectionInform::where('id',$r->check_id)->value('inspectiondate'));
                                            echo $inspectiondate;
                                            ?>
                                    </td>
                                    <td>
                                        {{App\Shop::where('ShopId',$r->shop_id)->value('totalMaleWorker')}}
                                    </td>
                                    <td>
                                        {{App\Shop::where('ShopId',$r->shop_id)->value('totalMaleWorker')}}
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
                            @endforeach
                    </tbody>
    
                </table>
                </div>
            </div>
        </div>  
    @endif


    @if($type==9)
    <div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="text-center"> ညွှန်ကြားချက်များ (အလုပ်ရုံစစ်ဆေးရေး) ({{$township_name}}) </h2>
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
                    @foreach ($factory_instruction as $factroy)  
                        <td>၁</td>
                        <td>{{$township_name}}(စက်ရုံ)</td>
                        <td>{{$factroy->f_safety_total}}</td>
                        <td>{{$factroy->f_safety_total}}</td>
                        <td>-</td>

                        <td>{{$factroy->f_health_total}}</td>
                        <td>{{$factroy->f_health_total}}</td>
                        <td>-</td>

                        <td>{{$factroy->f_welfare_total}}</td>
                        <td>{{$factroy->f_welfare_total}}</td>
                        <td>-</td>

                        <td>{{$factroy->f_note_total}}</td>
                        <td>{{$factroy->f_note_total}}</td>
                        <td>-</td>

                        <td>{{$factroy->f_other_total}}</td>
                        <td>{{$factroy->f_other_total}}</td>
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
                         <td>{{$total_instruction}}</td>
                         <td>-</td>
                    @endforeach
                    </tr>

                    <tr>
                        @foreach ($shop_instruction as $shop)  
                        <td>၂</td>
                        <td>{{$township_name}}(ဆိုင်)</td>
                        <td>{{$shop->f_safety_total}}</td>
                        <td>{{$shop->f_safety_total}}</td>
                        <td>-</td>

                        <td>{{$shop->f_health_total}}</td>
                        <td>{{$shop->f_health_total}}</td>
                        <td>-</td>

                        <td>{{$shop->f_welfare_total}}</td>
                        <td>{{$shop->f_welfare_total}}</td>
                        <td>-</td>

                        <td>{{$shop->f_note_total}}</td>
                        <td>{{$shop->f_note_total}}</td>
                        <td>-</td>

                        <td>{{$shop->f_other_total}}</td>
                        <td>{{$shop->f_other_total}}</td>
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
                         <td>{{$total_shop_instruction}}</td>
                         <td>-</td>
                     @endforeach
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
    @endif


    @if($type==10)
    <div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="text-center"> ညွှန်ကြားချက်များ (အလုပ်သမားဥပဒေစစ်ဆေးရေး) ({{$township_name}}) </h2>
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
                      <th colspan="3">ခွင့်ပိတ်</th>
                      <th colspan="3">လုပ်ခ/လစာ </th>
                      <th colspan="3">မှတ်တမ်း</th>
                      <th colspan="3">အလုပ်ချိန် </th>
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
                    @foreach ($factory_instruction as $factroy)  
                        <td>၁</td>
                        <td>{{$township_name}}(စက်ရုံ)</td>
                        <td>{{$factroy->a_leave_total}}</td>
                        <td>{{$factroy->a_leave_total}}</td>
                        <td>-</td>

                        <td>{{$factroy->a_wages_total}}</td>
                        <td>{{$factroy->a_wages_total}}</td>
                        <td>-</td>

                        <td>{{$factroy->a_note_total}}</td>
                        <td>{{$factroy->a_note_total}}</td>
                        <td>-</td>

                        <td>{{$factroy->a_worktime_total}}</td>
                        <td>{{$factroy->a_worktime_total}}</td>
                        <td>-</td>

                        <td>{{$factroy->a_other_total}}</td>
                        <td>{{$factroy->a_other_total}}</td>
                        <td>-</td>

                        <td>
                            <?php
                                $total_instruction=0;
                                $ins1=str_replace($standard_manysets,$standard_numsets,$factroy->a_leave_total);
                                $ins2=str_replace($standard_manysets,$standard_numsets,$factroy->a_wages_total);
                                $ins3=str_replace($standard_manysets,$standard_numsets,$factroy->a_note_total);
                                $ins4=str_replace($standard_manysets,$standard_numsets,$factroy->a_worktime_total);
                                $ins5=str_replace($standard_manysets,$standard_numsets,$factroy->a_other_total);
                                $total_instruction=$ins1+$ins2+$ins3+$ins4+$ins5;
                                // $total_instructions =str_replace($standard_numsets,$standard_manysets,$total_instruction);
                                echo $total_instruction;
                                ?>
                        </td>
                         <td>{{$total_instruction}}</td>
                         <td>-</td>
                    @endforeach
                    </tr>

                    <tr>
                        @foreach ($shop_instruction as $shop)  
                        <td>၂</td>
                        <td>{{$township_name}}(ဆိုင်)</td>
                        <td>{{$shop->a_leave_total}}</td>
                        <td>{{$shop->a_leave_total}}</td>
                        <td>-</td>

                        <td>{{$shop->a_wages_total}}</td>
                        <td>{{$shop->a_wages_total}}</td>
                        <td>-</td>

                        <td>{{$shop->a_note_total}}</td>
                        <td>{{$shop->a_note_total}}</td>
                        <td>-</td>

                        <td>{{$shop->a_worktime_total}}</td>
                        <td>{{$shop->a_worktime_total}}</td>
                        <td>-</td>

                        <td>{{$shop->a_other_total}}</td>
                        <td>{{$shop->a_other_total}}</td>
                        <td>-</td>

                        <td>
                            <?php
                                $total_shop_instruction=0;
                                $shop_ins1=str_replace($standard_manysets,$standard_numsets,$shop->a_leave_total);
                                $shop_ins2=str_replace($standard_manysets,$standard_numsets,$shop->a_wages_total);
                                $shop_ins3=str_replace($standard_manysets,$standard_numsets,$shop->a_note_total);
                                $shop_ins4=str_replace($standard_manysets,$standard_numsets,$shop->a_worktime_total);
                                $shop_ins5=str_replace($standard_manysets,$standard_numsets,$shop->a_other_total);
                                $total_shop_instruction=$shop_ins1+$shop_ins2+$shop_ins3+$shop_ins4+$shop_ins5;
                                // $total_instructions =str_replace($standard_numsets,$standard_manysets,$total_instruction);
                                echo $total_shop_instruction;
                                ?>
                        </td>
                         <td>{{$total_shop_instruction}}</td>
                         <td>-</td>
                     @endforeach
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
    @endif


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
<script>
 
</script>
@endsection