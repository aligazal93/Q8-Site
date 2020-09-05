@extends('dashboard.index')
@section('content')

<div class="container">
    <div class="row">
    <div class="col-sm-12">
         <h3 class="text-center">  All Users </h3>

         @if(session()-> has('message'))
                  <div class="alert alert-success">
                        {{ session() -> get('message') }}
                  </div>
            @endif



         <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                 <th scope="col">Phone</th>
                 <th scope="col" class="text-center">Option</th>


                </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row"> {{$user->id}} </th>
                    <td>{{$user->name}}</td>
                    <td><img src="{{ asset('uploads/users/'.$user->image) }}" alt="{{$user->name}}" style="width:50px;height:50px;border-raduis:150px"></td>
                    <td>{{$user->email}}</td>
                    <td> <input type="password" disabled style="border:none;width:100%" value="{{$user->password}}" > </td>
                    <td>{{$user->phone}}</td>
                    <td class="text-center" style="font-size:20px" >
                   <a class="btn btn-primary" href="/dashboard/users/{{$user->id}}/edit"> <i class="fa fa-edit" title="Edit"></i> </a>
                   <form action="{{url('/dashboard/users/'.$user->id)}}" method="POST">
                     @method('DELETE')
                       @csrf
                     <button type="submit" class="btn btn-danger" title="DELETE" > <i class="fa fa-trash"></i></button>
                  </form>
                </td>
                </tr>
                @endforeach


            </tbody>
            </table>


    </div>
    </div>
</div>





@endsection
