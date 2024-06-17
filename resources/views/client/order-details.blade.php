<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookStore</title>
    <link rel="icon" href="img/book-logo.png" type="image">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

{{--HEADER--}}
@include('client.header')
{{--HEADER--}}

<section class = "hero-page">
    <div class = "hero-bg">
        <h2>Order History</h2>
        <div class = "line">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <p class = "text">
            List of your orders!!!
        </p>
    </div>

    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="padding-left: 30px;">
                    <div>&nbsp;</div>

                    <div class="row">
                        @foreach($orderDetails as $obj)
                            <div class="col-3">
                                <h5>Book Title: {{$obj->product_name}}</h5>
                                <p>Quantity: {{$obj->quantity}}</p>
                                <p>Price: {{$obj->price}} đ</p>
                                <p><img src="/image_product/{{$obj -> image}}" class="product-image"> </p>
                            </div>
                        @endforeach
                        @foreach($ordersTotal as $obj)
                                <h4>Total: {{$obj->total}} đ</h4>
                        @endforeach
                            <a href="/order" class="btn btn-sm btn-primary col-1">Go back</a>

                            <div>&nbsp;</div>
                    </div>
                    <!-- Sorting by <div class="row"> -->

                    <div>&nbsp;</div>

                </div>
                <!--END  <div class="col-lg-9">-->

            </div>
        </div>
    </section>
</section>

{{--FOOTER--}}
@include("client.footer")
{{--FOOTER--}}

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<!--Custom JS file link-->
<script src="/js/script.js"></script>
</body>
</html>