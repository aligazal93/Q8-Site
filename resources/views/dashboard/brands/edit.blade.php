@extends('dashboard.index')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center mt-3"> Edit Brand </h1>
        </div>

        <div class="col-sm-12">

          <form action="{{url('/brands/'.$brand ->id)}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('patch')
              <div class="form-group">
                <input class="form-control mb-2" type="text" name="name"  value="{{old('name')?? $brand->name }}" >
                <p class="text-danger">{{$errors->first('name')}}</p>
              </div>

              <div class="form-group">
                <input class="form-control mb-2" type="file"  name="image">
                <img style="width:200px;display:block" src="{{ asset('uploads/brands/'.$brand->image ) }}" class="img-responsive img-thumbnil"  alt="">

              </div>

              <div class="form-group">
                  <button type="submit" class="btn btn-primary"> Edit Now </button>
              </div>


              </div>
          </form>


        </div>




    </div>
@endsection
