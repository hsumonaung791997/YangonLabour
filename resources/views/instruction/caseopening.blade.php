@extends('layouts.admin')
@section('content')
<script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>

    @if(session()->get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-inner--icon"></span>
            <span class="alert-inner--text">  {{ session()->get('success') }}  </span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <p>
      <div class="row">
          <div class="col-lg-6 text-center">
              <div class="pull-left">
                  <h2>စက်ရုံ အလုပ်ရုံများ</h2>
              </div>
              
          </div>
          <div class="col-sm-6 text-right">
            <div class="pull-right">
                  <a class="btn btn-primary" href="{{ route('factories.create')}}"> စက်ရုံအလုပ်ရုံများ လျှောက်ထားရန်</a>

              </div>
          </div>
      </div>
    </p>
     
  <div class="table-responsive">
      <div>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">
                        No
                    </th>
                    <th scope="col">
                        Factory ID
                    </th>
                    <th scope="col">
                        Factory Name
                    </th>
                    <th scope="col">
                        Owner Name
                    </th>
                    <th scope="col">
                      Manager Name
                    </th>
                    
                </tr>
            </thead>
            <tbody class="list">
            @foreach ($factory as $factories)
            <tr>
                <th scope="row" class="name">
                    {{ ++$i }}
                </th>
                <th scope="row" class="name">
                    {{ $factories->FactoryId}}
                </th>
                <td class="budget">
                   <a href=""> {{ $factories->FactoryName}}</a>
                </td>
                <td class="status">
                    <span class="badge badge-dot mr-4">
                      {{ $factories->OwnerName}}
                    </span>
                </td>
                <td>
                     {{ $factories->ManagerName}}
                </td>
                
               
            </tr>
            @endforeach
        
            
        </tbody>
    </table>
    {!! $factory->links() !!}
</div>

</div>

@endsection