@extends('dashboard.master')
@section('content')

<div class="container">
    <div class="row">
    <div class="col-sm-12">
         <h1 class="text-center mt-5">  Edit Your Profile </h1>
 
         <form action="{{url('/dashboard/users/'.$user->id)}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('patch')

              <div class="form-group">
                <img style="width:200px;display:block;margin-bottom:15px;" src="{{ asset('uploads/users/'.$user->image) }}" class="img-responsive img-thumbnil"  alt="">
                <input class="form-control mb-2" type="file"  name="image">
              </div>


              <div class="form-group">
                  <input type="text" name="name" class="form-control mb-2" value="{{old('name')?? $user->name }}">
                  <p class="text-danger">{{$errors->first('name')}}</p>
              </div>

              <div class="form-group">
                  <input type="email" name="email" class="form-control mb-2" value="{{old('email')?? $user->email }}">
                  <p class="text-danger">{{$errors->first('email')}}</p>
              </div>

              <div class="form-group">
                  <input type="text" name="phone" class="form-control mb-2" value="{{old('phone')?? $user->phone }}">
                  <p class="text-danger">{{$errors->first('phone')}}</p>
              </div>

              
              <div class="form-group">
              <select name="role" id=""  class="form-control mb-2"  value="{{old('role')?? $user->role }}">
                <option value="user">مستخدم عادى</option>
                <option value="admin">مشرف</option>
              </select>
              </div>


              <div class="form-group">
                  <input type="password" name="password" class="form-control mb-2" value="{{old('password')?? $user->password }}">
                  <p class="text-danger">{{$errors->first('password')}}</p>
              </div>




              <div class="form-group">
                  <button type="submit" class="btn btn-primary"> Edit Now </button>
              </div>


              </div>
          </form>




    </div>
    </div>
</div>





@endsection
