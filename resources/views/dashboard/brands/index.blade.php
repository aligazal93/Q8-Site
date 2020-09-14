@extends('dashboard.master')
@section('content')
    <div class="row">


        <div class="col-sm-12">
            <h1 class="text-center mt-3"> All Brands </h1>
        </div>

        <div class="col-sm-12">


        

@if(count($brands))
      <div class="box">
      @if(session()-> has('message'))
                  <div class="alert alert-success">
                        {{ session() -> get('message') }}
                  </div>
            @endif
            <div class="card">
              <div class="table-responsive">
                <table class="table table-vcenter table-mobile-md card-table">
                  <thead>
                    <tr>
                    <th>Id</th>
                      <th>Name</th>
                      <th>Image</th>
                      <th class="w-1"> Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($brands as $brand)
                    <tr>
                    <td> {{$brand->id}} </td>
                    <td> {{$brand->name}} </td>
                    <td> <img src="{{ asset('uploads/brands/'.$brand->image) }}" style="width:180px;height:100px;border-radius: 10px;display:block"> </td>
                    <td>
                        <div class="btn-list flex-nowrap">
                          <a href="/dashboard/brands/{{$brand->id}}/edit" class="btn btn-white">
                            Edit
                          </a>
                          <div class="dropdown">
                            <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">
                              <form action="{{url('/dashboard/brands/'.$brand->id)}}" method="POST">
                                @method('DELETE')
                                  @csrf
                                <button type="submit" style="border:none;background:transparent" title="DELETE" > Delete </button>
                            </form>
                              </a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
           

        @else 
        <h1 class="text-danger text-center" > No Categories Yet  </h1>

      @endif
      </div>






        </div>




    </div>
@endsection










