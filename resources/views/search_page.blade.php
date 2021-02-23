@extends('layouts.app')

@section('content')
    
    <div class="container mt-4">

        <h3 class="text-success mb-5">Search Results for {{$query}} : </h3>

        <div class="row">
            
            @foreach ($products as $product)
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