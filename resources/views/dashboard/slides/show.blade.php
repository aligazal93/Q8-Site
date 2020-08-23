@extends('dashboard.index')
@section('content')
    <div class="container">
        <div class="row">
          <div class="col-sm-12">

          @if(session()-> has('message'))
                  <div class="alert alert-success">
                        {{ session() -> get('message') }}
                  </div>
            @endif

            <h1 class="text-center text-success mt-4"> Details of Slide </h1>

            <div class="card" style="width:70%; display: block;margin:0 auto;margin-top: 25px;">
              <img src="{{ asset('uploads/slides/'.$slide->image) }}" style="width:150px;height:150px;margin: 0 auto;display:block">
                <div class="card-body">
                 <p class="card-text text-center">{{$slide->content}}</p>
              </div>
            </div>


          </div>
        </div>
    </div>


@endsection
