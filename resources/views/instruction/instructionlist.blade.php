@extends('layouts.admin')
@section('content')
<h3 class="text-center">ညွှန်ကြားချက်များ</h3> <hr>
 <div class="row">
    <div class="col-sm-12 table-responsive">
        <table class="table table-bordered" id="myTable">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">
                        စဉ်
                        </th>
                        <th scope="col">
                            စက်ရုံ(သို့)ဆိုင် အမည်
                        </th>
                        <th scope="col">
                        ညွှန်ကြားသူအမည်
                        </th>
                        <th scope="col">
                        
                        ညွှန်ကြားသူရာထူး
                        </th>
                        <th scope="col">
                        စစ်ဆေးသည့်ဥပဒေ
                        
                        </th>
                        <th scope="col">
                        လုပ်ဆောင်ချက်များ
                        </th>
                        
                    </tr>
                </thead>
                <tbody class="list">
                    
                <?php $i= ($instruction->currentpage()-1) * ($instruction->perpage());?>
          @foreach($instruction as $ins)

          
            <tr>
                <td>{{++$i}}</td>
                <td>{{$ins->factoryname}} <br> (@if($ins->factory_type==1) စက်ရုံ အလုပ်ရုံ @elseif($ins->factory_type==2) ဆိုင် @endif)</td>
                <td>{{$ins->instructor}}</td>
                <td>{{$ins->instructor_rank}}</td>
                <td>@if($ins->inspectiontype_id==1)အလုပ်သမားဥပဒေစစ်ဆေးရေး@else အလုပ်ရုံစစ်ဆေးရေး @endif</td>
                
                <td class="completion">
                    
                        <a href="{{ url('instructiondetail/'.$ins->id) }}" class="badge badge-info">ကြည့်မည်</a> |      
                        <a class="badge badge-primary" href="{{ url('instructiondetail/'.$ins->id) }}">ပြင်မည်</a> |
       
                        
          
                        <a href="{{ route('instructiondestroy',$ins->id) }}"  class="badge badge-danger" id="factorydelete">ဖျက်မည်</a>
                        <a href="{{ route('downloadfile',$ins->id) }}"  class="badge badge-success">Download</a>
                        
                    </form>
                </td>
               
            </tr>
            @endforeach
            
        </tbody>
    </table>
    </div>

    {!! $instruction->render() !!}
    
</div>
@endsection