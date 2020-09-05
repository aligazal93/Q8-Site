@extends('dashboard.index')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center mt-3"> Edit Product </h1>
        </div>

        <div class="col-sm-12">

        <form action="{{url('/dashboard/products/'.$product->id)}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('patch')
              <div class="form-group">
                  <input type="text" name="name" placeholder="Enter Product Name" class="form-control mb-2"  value="{{old('name') ?? $product->name }}">
                  <p class="text-danger">{{$errors->first('name')}}</p>
              </div>

              <div class="form-group">
                  <input type="text" name="details" placeholder="Enter Product details" class="form-control mb-2" value="{{old('details')}}">
                  <p class="text-danger">{{$errors->first('details')}}</p>
              </div>

              <div class="form-group">
                  <input type="text" name="price" placeholder="Enter Product price" class="form-control mb-2" value="{{old('price') ?? $product->price }}">
                  <p class="text-danger">{{$errors->first('price')}}</p>
              </div>

              <div class="form-group">
              <select name="category_id"  class="form-control mb-2">
              @foreach($categories as $category)
                    <option value="{{$category->id}}"> {{$category->name}} </option>
                @endforeach    
              </select>
                  <p class="text-danger">{{$errors->first('category_id')}}</p>
              </div>

              
              <div class="form-group">
                  <input type="file" name="image" class="form-control mb-2" value="{{old('image')}}">
                  <p class="text-danger">{{$errors->first('image')}}</p>
              </div>

              <div class="form-group">
                  <button type="submit" class="btn btn-primary"> Add Product </button>
              </div>


              </div>
          </form>


        </div>




    </div>
@endsection
