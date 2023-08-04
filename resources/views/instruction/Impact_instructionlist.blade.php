@extends('layouts.admin')
@section('content')
<h3 class="text-center">လုပ်ငန်းခွင် ထိခိုက်မှု ဆိုင်ရာ ညွှန်ကြားချက်များ</h3> <hr>

@if(session()->get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-inner--icon"></span>
            <span class="alert-inner--text">  {{ session()->get('success') }}  </span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
@endif
      
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
                            စစ်ဆေးသည့်ရက်စွဲ
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
                <td>{{$ins->name}} <br> (@if($ins->factory_type==1) စက်ရုံ အလုပ်ရုံ @elseif($ins->factory_type==2) ဆိုင် @endif)</td>
            <td>{{$ins->instructiondate}}</td>
                <td>{{$ins->instructor}}</td>
                <td>{{$ins->instructor_rank}}</td>
                <td>လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက်</td>
                
                <td class="completion">
                    
                        {{-- <a href="{{ url('Impactinstructiondetail/'.$ins->id) }}" class="badge badge-info">ကြည့်မည်</a> |      
                        <a class="badge badge-primary" href="{{ url('Impactinstructiondetail/'.$ins->id) }}">ပြင်မည်</a> |
       
                        
          
                        <a href="{{ route('Impactinstructiondestroy',$ins->id) }}"  class="badge badge-danger" id="factorydelete">ဖျက်မည်</a> --}}
                        <a href="{{ route('impactDownloadFile',$ins->id) }}"  class="badge badge-success">ကြည့်မည်  </a> <br>
                        <a href="{{ route('EditImpactInstruction',$ins->id) }}"  class="badge badge-primary">ပြင်မည်  </a>

                        
                    {{-- </form> --}}
                </td>
               
            </tr>
            @endforeach
            
        </tbody>
    </table>
    </div>

    {!! $instruction->render() !!}
    
</div>
@endsection