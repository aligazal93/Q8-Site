@extends('dashboard.index')
@section('content')
    <div class="row">


        <div class="col-sm-12">
            <h1 class="text-center mt-3"> All Categories </h1>
        </div>


        @if(count($categories))
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
                   @foreach($categories as $category)
                    <tr>
                    <td> {{$category->id}} </td>
                    <td> {{$category->name}} </td>
                      <td data-label="Name">
                        <div class="d-flex lh-sm py-1 align-items-center">
                        <img src="{{ asset('uploads/categories/'.$category->image) }}" style="width:180px;height:100px;border-radius: 10px;display:block">
                        </div>
                      </td>

                      <td>
                        <div class="btn-list flex-nowrap">
                          <a href="/dashboard/categories/{{$category->id}}/edit" class="btn btn-white">
                            Edit
                          </a>
                          <div class="dropdown">
                            <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">
                              <form action="{{url('/dashboard/categories/'.$category->id)}}" method="POST">
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
@endsection





