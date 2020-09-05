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
                <th scope="col"> Name </th>
                <th scope="col"> Image </th>
                <th scope="col"> Price </th>
                <th scope="col">Details</th>
                <th scope="col">Category</th>
                <th scope="col" class="text-center">Option</th>
              </tr>
            </thead>
            <tbody>

              @if($products->count())

              @foreach($products as $product)
              <tr>
                <th scope="row">{{$product->id}}</th>
                <th scope="row">{{$product->name}}</th>
                <td><img src="{{ asset('uploads/products/'.$product->image) }}" style="width:80px;height:80px;margin: 0 auto;display:block"></td>
                <th scope="row">{{$product->price}}</th>
                <th scope="row">{{$product->details}}</th>
                <th scope="row">{{$product->category->name}}</th>


                <td class="text-center" style="font-size:20px" >
                <a class="btn btn-primary" href="/dashboard/products/{{$product->id}}/edit"> <i class="fa fa-edit" title="Edit"></i> </a>
                   <form action="{{url('/dashboard/products/'.$product->id)}}" method="POST">
                     @method('DELETE')
                       @csrf
                     <button type="submit" class="btn btn-danger" title="DELETE" > <i class="fa fa-trash"></i></button>
                  </form>
                  <a class="btn btn-secondary"  href="/dashboard/products/{{$product->id}}"> <i class="fa fa-eye" title="Show"></i> </a>
                </td>
              </tr>

              @endforeach

              @else

              <h1 class="text-danger text-center" > No Products Yet  </h1>

              @endif
            </tbody>
          </table>




        </div>




    </div>
@endsection
