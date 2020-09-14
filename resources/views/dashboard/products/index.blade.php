@extends('dashboard.master')
@section('content')
    <div class="row">


        <div class="col-sm-12">
            <h1 class="text-center mt-3"> All Produtcs </h1>
        </div>



        @if(count($products))
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
                      <th>Price</th>
                      <th>Details</th>
                      <th>Category</th>
                      <th class="w-1"> Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($products as $product)
                    <tr>
                    <td> {{$product->id}} </td>
                    <td> {{$product->name}} </td>
                      <td><img src="{{ asset('uploads/products/'.$product->image) }}" style="width:180px;height:100px;border-radius: 10px;display:block"> </td>
                      <td> {{$product->price}} </td>
                      <td> {{$product->details}} </td>
                      <th scope="row">{{$product->category->name}}</th>
                      <td>
                        <div class="btn-list flex-nowrap">
                          <a href="/dashboard/products/{{$product->id}}/edit" class="btn btn-white">
                            Edit
                          </a>
                          <div class="dropdown">
                            <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">
                              <form action="{{url('/dashboard/products/'.$product->id)}}" method="POST">
                                @method('DELETE')
                                  @csrf
                                <button type="submit" style="border:none;background:transparent" title="DELETE" > Delete </button>
                            </form>
                              </a>
                              <a class="dropdown-item" href="/dashboard/products/{{$product->id}}">
                                Show
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
        <h1 class="text-danger text-center" > No Slides Yet  </h1>

      @endif
      </div>








    </div>
@endsection
