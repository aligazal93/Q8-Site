@extends('dashboard.master')
@section('content')

<div class="container">
    <div class="row">
    <div class="col-sm-12">
         <h3 class="text-center">  All Users </h3>
    </div>
</div>








@if(count($users))
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
                      <th>Email Address</th>
                      <th>Image</th>
                      <th>Phone</th>
                      <th>Role</th>
                      <th class="w-1"> Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($users as $user)
                    <tr>
                    <td> {{$user->id}} </td>
                    <td> {{$user->name}} </td>
                    <td> {{$user->email}} </td>
                      <td data-label="Name">
                        <div class="d-flex lh-sm py-1 align-items-center">
                        <img src="{{ asset('uploads/users/'.$user->image) }}" style="width:180px;height:100px;border-radius: 10px;display:block">
                        </div>
                      </td>
                    <td> {{$user->phone}} </td>
                    <td> {{$user->role}} </td>


                      <td>
                        <div class="btn-list flex-nowrap">
                          <a href="/dashboard/users/{{$user->id}}/edit" class="btn btn-white">
                            Edit
                          </a>
                          <div class="dropdown">
                            <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">
                              <form action="{{url('/dashboard/users/'.$user->id)}}" method="POST">
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



@endsection
