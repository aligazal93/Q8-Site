@extends('dashboard.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center mt-3"> Create New User </h1>
        </div>

        <div class="col-sm-12">

          <form action="{{ url('dashboard/users') }}" method="post" enctype="multipart/form-data">
              @csrf

              <div class="form-group">
                  <input type="text" name="name" class="form-control mb-2" placeholder="Enter Your Name" value="{{old('name')}}">
                  <p class="text-danger">{{$errors->first('name')}}</p>
              </div>

              <div class="form-group">
                  <input type="text" name="email" class="form-control mb-2" placeholder="Enter Your Email Address" value="{{old('email')}}">
                  <p class="text-danger">{{$errors->first('email')}}</p>
              </div>

              <div class="form-group">
                  <input type="text" name="phone" class="form-control mb-2" placeholder="Enter Your Phone Number" value="{{old('phone')}}">
                  <p class="text-danger">{{$errors->first('phone')}}</p>
              </div>



              <div class="form-group">
                  <input type="Password" name="password" class="form-control mb-2" placeholder="Enter Your password" value="{{old('password')}}">
                  <p class="text-danger">{{$errors->first('password')}}</p>
              </div>



              <div class="form-group">
                  <input type="file" name="image" class="form-control mb-2" value="{{old('image')}}">
                  <p class="text-danger">{{$errors->first('pic')}}</p>
              </div>

              <div class="form-group">
              <select name="role" id=""  class="form-control mb-2">
                <option value="user">مستخدم عادى</option>
                <option value="admin">مشرف</option>
              </select>
              </div>

              <div class="form-group">
                  <button type="submit" class="btn btn-primary"> Add New User </button>
              </div>


              </div>
          </form>


        </div>




    </div>
@endsection
