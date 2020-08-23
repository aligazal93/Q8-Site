@extends('dashboard.index')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center mt-3"> Edit New Slide </h1>
        </div>

        <div class="col-sm-12">

          <form action="{{url('/slides/'.$slide ->id)}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('patch')
              <div class="form-group">
                 <textarea name="content" class="form-control" rows="8" cols="80"> {{$slide->content}} </textarea>
                  <p class="text-danger">{{$errors->first('content')}}</p>
              </div>

              <div class="form-group">
                <img style="width:200px;display:block" src="{{ asset('uploads/slides/'.$slide->image) }}" class="img-responsive img-thumbnil"  alt="">
                <input class="form-control mb-2" type="file"  name="image">

              </div>

              <div class="form-group">
                  <button type="submit" class="btn btn-primary"> Edit Now </button>
              </div>


              </div>
          </form>


        </div>




    </div>
@endsection
