@extends('dashboard.index')
@section('content')
    <div class="row">


        <div class="col-sm-12">
            <h1 class="text-center mt-3"> All Slides </h1>
        </div>

        <div class="col-sm-12">



          <table class="table table-bordered mt-2">
            @if(session()-> has('message'))
                  <div class="alert alert-success">
                        {{ session() -> get('message') }}
                  </div>
            @endif
            <thead>
              <tr>
                <th scope="col"> Id </th>
                <th scope="col">Pic</th>
                <th scope="col">Content</th>
                <th scope="col" class="text-center">Option</th>
              </tr>
            </thead>
            <tbody>

              @if($slides->count())

              @foreach($slides as $slide)
              <tr>
                <th scope="row">{{$slide->id}}</th>
                <td><img src="{{ asset('uploads/slides/'.$slide->image) }}" style="width:80px;height:80px;margin: 0 auto;display:block"></td>
                <td scope="row" style="width:800px;">{{$slide->content}}</td>

                <td class="text-center" style="font-size:20px" >
                   <a class="btn btn-primary" href="/dashboard/slides/{{$slide->id}}/edit"> <i class="fa fa-edit" title="Edit"></i> </a>
                   <form action="{{url('/dashboard/slides/'.$slide->id)}}" method="POST">
                     @method('DELETE')
                       @csrf
                     <button type="submit" class="btn btn-danger" title="DELETE" > <i class="fa fa-trash"></i></button>
                  </form>
                  <a class="btn btn-secondary"  href="/dashboard/slides/{{$slide->id}}"> <i class="fa fa-eye" title="Show"></i> </a>
                </td>
              </tr>

              @endforeach


              @else

              <h1 class="text-danger text-center" > No Slides Yet  </h1>

              @endif
            </tbody>
          </table>




        </div>




    </div>
@endsection
