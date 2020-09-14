@extends('dashboard.index')
@section('content')
    <div class="row">


        <div class="col-sm-12">
            <h1 class="text-center mt-3"> All Slides </h1>
        </div>

        <div class="col-sm-12">


        @if(session()-> has('message'))
                  <div class="alert alert-success">
                        {{ session() -> get('message') }}
                  </div>
            @endif

      @if(count($slides))
      <div class="box">
            <div class="card">
              <div class="table-responsive">
                <table class="table table-vcenter table-mobile-md card-table">
                  <thead>
                    <tr>
                      <th>Pic</th>
                      <th>Content</th>
                      <th class="w-1"> Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($slides as $slide)
                    <tr>
                      <td data-label="Name">
                        <div class="d-flex lh-sm py-1 align-items-center">
                        <img src="{{ asset('uploads/slides/'.$slide->image) }}" style="width:180px;height:100px;border-radius: 10px;display:block">
                        </div>
                      </td>
                      <td>
                      {{$slide->content}}
                      </td>
                      <td>
                        <div class="btn-list flex-nowrap">
                          <a href="/dashboard/slides/{{$slide->id}}/edit" class="btn btn-white">
                            Edit
                          </a>
                          <div class="dropdown">
                            <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">
                              <form action="{{url('/dashboard/slides/'.$slide->id)}}" method="POST">
                                @method('DELETE')
                                  @csrf
                                <button type="submit" style="border:none;background:transparent" title="DELETE" > Delete </button>
                            </form>
                              </a>
                              <a class="dropdown-item" href="/dashboard/slides/{{$slide->id}}">
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
