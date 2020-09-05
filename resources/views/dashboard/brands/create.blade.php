@extends('dashboard.index')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center mt-3"> Create New Brand </h1>
        </div>

        <div class="col-sm-12">

          <form action="{{ url('/dashboard/brands') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                  <input type="file" name="image" class="form-control mb-2" value="{{old('image')}}">
                  <p class="text-danger">{{$errors->first('image')}}</p>
              </div>

              <div class="form-group">
                  <input type="text" name="name" class="form-control mb-2" value="{{old('name')}}">
                  <p class="text-danger">{{$errors->first('name')}}</p>
              </div>

              <div class="form-group">
                  <button type="submit" class="btn btn-primary"> Add New Brand </button>
              </div>


              </div>
          </form>


        </div>




    </div>
@endsection
