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
        <h2>Shop</h2>
        <div class = "line">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <p class = "text">
            All books are sell here!
        </p>
    </div>

    <section class="">
        <div class="container">
            <div class="row">
{{--                <div class="col-lg-3 blog-form">--}}
{{--                    <h2 class="blog-sidebar-title"><b>Categories</b></h2>--}}
{{--                    <p class="blog-sidebar-list"><b><span class="list-icon"> > </span><a href="genre.html">Genre</a></b></p>--}}
{{--                    <p class="blog-sidebar-list"><b><span class="list-icon"> > </span><a href="bestseller.html">Best Seller</a></b></p>--}}
{{--                    <p class="blog-sidebar-list"><b><span class="list-icon"> > </span><a href="usedbooks.html">Used Books</a></b></p>--}}
{{--                    <p class="blog-sidebar-list"><b><span class="list-icon"> > </span><a href="rarebook.html">Rare Books</a></b></p>--}}



{{--                    <h2 class="blog-sidebar-title"><b>Filter</b></h2>--}}
{{--                    <hr />--}}

{{--                    <div class="input-group mb-3">--}}
{{--                        <input type="text" class="form-control" placeholder="Search" aria-label="Receipient's username" aria-describely="basic-addon2">--}}
{{--                        <div class="input-group-append">--}}
{{--                            <span class="input-group-text" id="basic-addon2"><i class="fa fa-search"></i></span>--}}
{{--                        </div>--}}

{{--                    </div>--}}

{{--                    <p class="tags">Price $4 - $25</p>--}}
{{--                    <button type="button" class="btn btn-dark btn-lg">Filter</button>--}}

{{--                </div>--}}
                <!--END  <div class="col-lg-3 blog-form">-->

                <div class="col-lg-12" style="padding-left: 30px;">
                    <div class="row">
                        <div class="col">
                            <select class="form-control">
                                <option value="">Default Sorting</option>
                                <option value="popularity">Sorting by popularity</option>
                                <option value="average">Sorting by average</option>
                                <option value="latest">Sorting by latest</option>
                                <option value="low">Sorting by low</option>
                                <option value="high">Sorting by high</option>
                            </select>
                        </div>
                    </div>

                    <div>&nbsp;</div>

                    <div class="row">
                        @foreach($products as $obj)
                        <div class="col-3">
                            <a href="/product-details/{{$obj->id}}"><img src="/image_product/{{$obj -> image}}" class="product-image"> </a>
                            <h4><b>{{$obj->product_name}}</b></h4>
                            <p>Description: {{$obj->description}}</p>
                            <p>Price: {{$obj->price}} đ</p>
                            <a href="/product-details/{{$obj->id}}" class="btn btn-success button-text"><i class="far fa-eye" aria-hidden="true"></i> View Details</a>
                            <div>&nbsp;</div>
                        </div>
                        @endforeach
                        {{$products->links()}}
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
