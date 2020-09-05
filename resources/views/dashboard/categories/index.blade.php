@extends('dashboard.index')
@section('content')
    <div class="row">


        <div class="col-sm-12">
            <h1 class="text-center mt-3"> All Categories </h1>
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
                <th scope="col">Name</th>
                <th scope="col">image</th>
                <th scope="col" class="text-center">Option</th>
              </tr>
            </thead>
            <tbody>

              @if($categories->count())

              @foreach($categories as $category)
              <tr>
                <th scope="row">{{$category->id}}</th>
                <td><img src="{{ asset('uploads/categories/'.$category->image) }}" style="width:80px;height:80px;margin: 0 auto;display:block"></td>
                <td scope="row" style="width:800px;">{{$category->name}}</td>

                <td class="text-center" style="font-size:20px" >
                   <a class="btn btn-primary" href="/dashboard/categories/{{$category->id}}/edit"> <i class="fa fa-edit" title="Edit"></i> </a>
                   <form action="{{url('/dashboard/categories/'.$category->id)}}" method="POST">
                     @method('DELETE')
                       @csrf
                     <button type="submit" class="btn btn-danger" title="DELETE" > <i class="fa fa-trash"></i></button>
                  </form>
                </td>
              </tr>

              @endforeach

              @else

              <h1 class="text-danger text-center" > No Categories Yet  </h1>

              @endif


            </tbody>
          </table>




        </div>




    </div>
@endsection
