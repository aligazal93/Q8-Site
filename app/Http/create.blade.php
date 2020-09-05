@extends('dashboard.index')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center mt-3"> Create New Slide </h1>
        </div>

        <div class="col-sm-12">

          <form action="{{ url('dashboard/slides') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                  <input type="file" name="image" class="form-control mb-2" value="{{old('image')}}">
                  <p class="text-danger">{{$errors->first('pic')}}</p>
              </div>

              <div class="form-group">
                <textarea name="content" class="form-control" placeholder="Slide Content" rows="8" cols="80"  value="{{old('content')}}"></textarea>
                  <p class="text-danger">{{$errors->first('content')}}</p>
              </div>

              <div class="form-group">
                  <button type="submit" class="btn btn-primary"> Add Slide </button>
              </div>


              </div>
          </form>


        </div>




    </div>
@endsection
