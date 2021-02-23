@extends('layouts.app')

@section('content')


    <div class="container w-100">


      <div id="carouselExampleControls" class="carousel slide mt-2" data-bs-ride="carousel">
        <div class="carousel-inner">

          <?php $counter = 1;?>
          @foreach ($products as $product)
            <div class="carousel-item {{$product['id'] == 1 ?'active':''}}">
              <img src=" {{$product['image_url']}} " class="carousel_img d-block w-100" alt="{{$product['name']}}">
              <div class="carousel-caption d-none d-md-block">
                <h5>{{$product['name']}}</h5>
                <p>{{$product['description']}}</p>
                <a href="product_details/{{$product['id']}}" class="btn btn-primary">View Product</a>
              </div>
            </div>
            
            <?php $counter++; ?>
            {{-- display only the first 3 products --}}
            @if ($counter > 3)
                @break
            @endif

          @endforeach
          
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

        

    </div>


    <div class="container page-item-container my-5 ">

      <h4 class="text-success my-3 text-center">New Products</h4>
      <div class="row ">

        @foreach ($newProducts as $product)
          <div class="col-sm-3 mb-2">

            
            <div class="card border-0" style="width: 18rem;">
              <a href="product_details/{{$product['id']}} "><img src="{{$product['image_url']}}" class="card-img-top" alt="{{$product['name']}}"></a> 
              <div class="card-body">
                <h4 class="card-text" style="font-weight: bold;font-size: 17px;">$.{{$product['price']}}</h4>
                <p class="card-text" style="font-size: 14px;">{{$product['name']}}</p>
              </div>
            </div>
            
            
          </div>
          
        @endforeach

      </div>

    </div>
    
    


@endsection