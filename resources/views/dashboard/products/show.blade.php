@extends('dashboard.master')
@section('content')
    <div class="container">
        <div class="row">
          <div class="col-sm-12">

          @if(session()-> has('message'))
                  <div class="alert alert-success">
                        {{ session() -> get('message') }}
                  </div>
            @endif

            <h1 class="text-center text-success mt-4"> Details of {{$product->name}} </h1>
            

            <div class="col-md-12 col-xl-12">
              <div class="card">
                <div class="row row-0">
                  <div class="col-3">
                  <img src="{{ asset('uploads/products/'.$product->image) }}" style="width:100%x;height:150px;display:block">
                  </div>
                  <div class="col">
                    <div class="card-body">
                      <h3 class="card-title"> {{$product->name}}</h3>
                      <p class="card-text text-justify">{{$product->details}}</p>
                      <p class="card-text text-justify"> Price Of Product : {{$product->price}} L.E </p>
                      <p class="card-text text-justify"> Category Of Product : {{$product->category->name}}</p>
                    </div>
                  </div>



                  <div id="carousel-captions" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                  
                    
                    <?php



  $active = 1;

?>


                    @foreach($product->images as $image)
                    <div class="carousel-item {{ $active == 1? 'active'  : '' }} ">
                        <img class="d-block w-100" alt=""src="{{ asset('uploads/products/'.$image->name) }}" data-holder-rendered="true">
                        <div class="carousel-item-background d-none d-md-block"></div>
                        <div class="carousel-caption d-none d-md-block">

                          <form action="{{url('/dashboard/products/images/'.$image->id)}}" method="POST">
                                @method('DELETE')
                                  @csrf
                                <button type="submit" style="border:none;background:transparent" title="DELETE" > Delete </button>
                            </form>

                        </div>
                      </div>


                    <?php 
                    $active++;
                   ?>
                      @endforeach




                    <a class="carousel-control-prev" href="#carousel-captions" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-captions" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>


              </div>


          </div>
        </div>
    </div>


@endsection
