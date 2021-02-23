<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>{{config('app.name', 'Blog-App')}}</title>

    <style type="text/css">
      .search_bar{

        width: 100%;
      }
      .carousel_img {

        height: 700px !important;
        object-fit: fill
      }

      

      .card-img-top {

        height: 240px;
        
      }
      .card-img-top:hover {

        cursor: pointer;
        transform: scale(1.05);
      }
      .card {
        width: 80% !important;
        margin-left: 10%;
      }

      .image_container {

        width: 100%;
        height: 350px;
        padding: 10px;
        border-radius: 10px;
      }
      .image_container img {
        width: 90%;
        max-height: 95%;
        min-height: 80%;
        border-radius: 5px;
      }

      
      .product_details {

        margin: 5px;
      }

      .product_action_btn {

        width: 100%;
      }
      .product_details i {

        color: #009933;
      }

      .share-container {

        padding: 15px 4px;
        border-top: 1px solid #d3d3d3;
        border-bottom: 1px solid #d3d3d3;
      }
      
      .share-container a{

        width: 40px;
        height: 40px;
        display: inline-flex;
        text-align: center;
        align-content: center;
        justify-content: center;
        padding-top: 8px;
        font-size: 22px;
        border-radius: 50%;
        border: 1px solid #d3d3d3;
        margin-right: 10px;
        margin-top: 8px;
        color: #000;
        text-decoration: none;

      }
      
      .share-container a:hover{
        color: #009933;
        border-color: #009933;
      }

      .quantity_action_btn {
        width: 30px;
        height: 30px;
        margin: 0 5px;
        border: 1px solid #d3d3d3;
        background-color: #d3d3d3;
        box-shadow: none;
      }
      
      .quantity_action_btn:hover {background-color: #f2f2f2;}

      @media only screen and (min-width: 576px) {

          
        .card {
          width: 100% !important;
        }
        .card-img-top {

          height: 150px;

        }

      }


      @media only screen and (min-width: 768px) {
        
        .search_bar{

          width: 40%;
        }
        .carousel_img {
          height: 400px;
        }
        .page-item-container {

          background-color: #ffffff;
          padding: 10px 10px;
        }
        .card {
          margin-left: 0;
          width: 100% !important;
        }
        .card-img-top {

          height: 300px;

        }

        .product_container {

          box-shadow: 2px 2px 4px #d3d3d3;
          border-radius: 5px;
          background-color: #ffffff;
          padding: 10px;
        }

        .image_container {
          height: 500px;
          max-width: 90%;
          min-width: 80%;
        }

        .product_details {
          
          margin: 10px;  
        }
        
        .product_action_btn {
          margin-top: 20px;
        }


      }

    </style>
  </head>
  <body style="background-color: #f5f5f5;">

    @include('include.navbar')

    @yield('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    
    <script type="text/javascript">

      //getting suggestions
      /*

          $('#search_box').on('input',()=>{

            var formData = new FormData();
              formData.append('query', $('#search_box').val());
              formData.append('_token','{{ csrf_token() }}');
            $.ajax({
              type:'GET',
              url:'/search_page',
              data: formData,
              success:function(data) {
                log(data)
              },
              error: (err)=>log(err)
            });
          })
      */

      //logging messages to console
      const log = (msg)=>console.log(msg);
    
    </script>
  </body>
</html>