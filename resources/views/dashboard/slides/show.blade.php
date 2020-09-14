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

            <h1 class="text-center text-success" style="margin-bottom:15px;margin-top:15px;" > Details of Slide </h1>



            <div class="col-md-12 col-xl-12">
              <div class="card">
                <div class="row row-0">
                  <div class="col-3">
                  <img src="{{ asset('uploads/slides/'.$slide->image) }}" style="width:100%x;height:150px;display:block">
                  </div>
                  <div class="col">
                    <div class="card-body">
                      <h3 class="card-title">Slie Number : {{$slide->id}}</h3>
                      <p class="card-text text-justify">{{$slide->content}}</p>

                    </div>
                  </div>
                </div>
              </div>

 

              </div>
            </div>


          </div>
        </div>
    </div>


@endsection
