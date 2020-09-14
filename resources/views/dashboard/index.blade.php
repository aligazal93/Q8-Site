@extends('dashboard.master')


@section('content')

<div class="col-sm-12">
  <h1 class="text-center" style="margin-top:50px;margin-bottom:50px" > Welcome To Dashboard of <span class="text-primary">Q8 Site</span> </h1>
</div>

<div class="row">

            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                  <h3 class="text-danger"> Slides  </h3>
                  </div>
                  <div class="h1 mb-3">{{$slides_count}}</div>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                  <h3 class="text-danger"> Categories  </h3>
                  </div>
                  <div class="h1 mb-3">{{$categories_count}}</div>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                  <h3 class="text-danger"> Brands  </h3>
                  </div>
                  <div class="h1 mb-3">{{$brands_count}}</div>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                  <h3 class="text-danger"> Users  </h3>
                  </div>
                  <div class="h1 mb-3">{{$users_count}}</div>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                  <h3 class="text-danger"> Products  </h3>
                  </div>
                  <div class="h1 mb-3">{{$products_count}}</div>
                </div>
              </div>
            </div>


            <div class="col-sm-12">
            
            <div class="card">
              <div class="table-responsive">
                <table class="table table-vcenter card-table">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Create At</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($users as $user)
                    <tr>
                      <td>{{$user->name}}</td>
                      <td class="text-muted"> {{$user->email}}  </td>
                      <td class="text-muted">{{$user->role}}</td>
                      <td class="text-muted"> {{$user->created_at}}</td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>



            
            </div>


</div>

@endsection
