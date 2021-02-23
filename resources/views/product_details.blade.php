@extends('layouts.app')

@section('content')
    
    <div class="container product_container mt-4">

        <div class="row">
            <div class="col-md-5">
                <div class="image_container d-flex justify-content-center">

                    <img class="w-100" style="max-height: 600px;" src="{{$product['image_url']}}" alt="{{$product['name']}}">
                </div>
                
            </div>
            <div class="col-md-6">

                <div class="container  pt-4">

                    <p class="product_details text-success" style="font-size: 26px;"> <strong> {{$product['name']}} </strong> </p>
                    <p class="product_details" style="font-size: 24px;"><strong> $. {{$product['price']}} </strong> </p>                   
                    <p class="product_details" style="font-size: 16px;">Brand: Dress </p> 
                    <p class="product_details py-3">

                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>

                    </p>

                    <div class="share-container">

                        <h5>Share via:</h5>
                        <small>Earn 20% discount when you refer a friend</small><br>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                    <div class="py-2">

                        <label class="form-label" for="">Quantity:</label><br>
                        <button class="quantity_action_btn">-</button> <input type="text" value="1" class="px-2 text-center" style="width: 70px;"><button class="quantity_action_btn">+</button>

                    </div>


                    <form action="/addToCart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product['id']}}">
                        <button type="submit" class="btn btn-success product_action_btn mb-2">Add To Cart</button>
                    </form>




                </div>


            </div>
        </div>

    </div>


@endsection