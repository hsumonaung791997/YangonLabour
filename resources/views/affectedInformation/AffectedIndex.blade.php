@extends('layouts.admin')
 
@section('content')
<script src="{{asset('assets/js/common.js')}}"></script>
<script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-center">ထိခိုက်သူဆိုင်ရာအကြောင်းကြားစာများ</h2>
            </div>
            
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 margin-tb">
        </div>
        <div class="col-lg-4 text-right mb-2">
            <div class="pull-right">
                <a class="btn btn-primary"  href="{{ route('AffectedIndex.create') }}">အကြောင်းကြားစာ အသစ်ထည့်ရန်</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered table-responsive">
        <thead class="thead-light">
            <tr>
                <th scope="col">
                     စဉ်
                </th>
                {{-- <th scope="col">ပုံစံ</th> --}}
                <th scope="col">
                    လုပ်ငန်းအမည်
                </th>
                <th scope="col">
                    ပိုင်ရှင်အမည်
                </th>
                <th scope="col"> လုပ်ငန်းအမျိုးအစား</th>
                <th scope="col">
                    လိပ်စာ
                </th>
                <th scope="col">
                        ဖုန်းနံပါတ်
                </th>
                <th scope="col">
                    စစ်ဆေးခြင်း လုပ်ဆောင်ချက်
                </th>
                <th scope="col">
                    အကြောင်းကြားစာ လုပ်ဆောင်ချက်   
                </th>
             </tr>

        </thead>
        <tbody class="list">
        @foreach ($affected as $aff)
            <tr>
                <td scope="row" class="name">
                    {{ ++$i }}
                </td>
                {{-- <td scope="row" class="name">
                    {{$aff->Type}}
                </td> --}}
                <td scope="row" class="name">
                    {{ $aff->FactoryName}} <br> (@if($aff->Type==1) စက်ရုံ/အလုပ်ရုံ @else ဆိုင်အလုပ်ဌာန @endif)
                </td>
                <td class="budget">
                    {{$aff->OwnerName}}
                </td>
                <td class="status">
                    <span class="badge badge-dot mr-4">
                      {{ $aff->FactoryType}}
                    </span>
                </td>
                <td>
                     {{$aff->FactoryAddress}}
                </td>
                <td>
                    {{$aff->FactoryPhno}}
                </td>
                <td scope="row" class="name">
                    @if(App\Document::where('Factory_Type',1)->where('check_id',$aff->id)->value('documentfileName')=='')
                        <a href="{{url('/impactworkerinform/'.$aff->id.'/'.$aff->FactoryID.'/'.$aff->Type)}}" class="badge badge-warning">စစ်ဆေးမည်</a> 
                    @else
                    <a href="{{url('storage/inspection/'. App\Document::where('Factory_Type',1)->where('check_id',$aff->id)->value('documentfileName'))}}" class="badge badge-pill badge-info">ကြည့်ရန်</a> <br>
                    <a href="{{url('/impactworkerinform/'.$aff->id)}}" class="badge badge-pill badge-primary"> စစ်ဆေးချက် ပြင်မည်</a> <br>
                    <a href="{{url('/CreateImpactInstruction/'.$aff->id.'/'.$aff->FactoryID.'/'.$aff->Type)}}" class="badge badge-pill badge-success"> ညွှန်ကြားချက်ထုတ်မည် </a> <br>
                    @endif
                    
                   
                </td>
                <td class="completion">
                    <form action="{{ route('AffectedIndex.destroy',$aff->id) }}" method="POST" class="delete">     
                        <a href="{{ route('AffectedIndex.show',$aff->id) }}" class="badge badge-info">ကြည့်မည်</a>   <br>   
                        <a class="badge badge-primary" href="{{ route('AffectedIndex.edit',$aff->id) }}">ပြင်မည်</a> |
       
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" class="badge badge-danger" >ဖျက်မည်</button>
                        
                    </form>
                </td>
               
            </tr>
            @endforeach
            
        </tbody>
    </table>
    </div>
    @if (Request::path() == 'aff')
    {!! $affected->links() !!}
    @endif
</div>
          
</p>
<!-- scroll back to top of the page -->
<a id="back2Top" title="Back to top" href="#">&#10148;</a>

   
    
<script type="text/javascript">
    $(".delete").on("submit", function(){
        return confirm("Are you sure to delete this record?");
    });


</script>


      
@endsection