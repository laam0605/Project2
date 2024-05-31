<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LBookStore | Product Details</title>
    <link rel="icon" href="/image/book-logo.png" type="image">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

</head>

<body>

{{--HEADER--}}
@include('client.header')
{{--HEADER--}}

<section class="product-details-page">
    <div class="product-details-container">
        <div class = "card-wrapper">
            <div class = "card">
                <div class = "product-imgs">
                    <div class = "img-display">
                        <div class = "img-showcase">
                            <img src = "/image/{{$products->image}}">
                        </div>
                    </div>
                </div>

                <div class = "product-content">
                    <h2 class = "product-title">{{$products->product_name}}</h2>
                    <div class = "product-rating">
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star-half-alt"></i>
                        <span>4.7(21)</span>
                    </div>

                    <div class = "product-price">
                        <p>Price: <span>{{$products->price}}</span></p>
                    </div>

                    <div class = "product-detail">
                        <h2>Description: </h2>
                        <p>{{$products->description}}</p>
                        <ul>
                            <li><i class="fa fa-check"></i> Format: <span>Paperback</span></li>
                            <li><i class="fa fa-check"></i> Available: <span>in stock</span></li>
                            <li><i class="fa fa-check"></i> Category: <span>Fantasy</span></li>
                            <li><i class="fa fa-check"></i> Shipping Area: <span>All over the Philippines</span></li>
                            <li><i class="fa fa-check"></i> Shipping Fee: <span>Free</span></li>
                        </ul>
                    </div>

                    <div class = "purchase-info">
                        <input type = "number" id="quantity" min = "0" value = "1">
                        <a href="#" id="btnAddToCart" attrId="{{$products->id}}" type="button"><i class = "fas fa-shopping-cart"></i>
                            Add to Cart
                        </a>
                        <script src="/js/jquery.min.js"></script>
                        <script>
                            $(function () {
                                $("#btnAddToCart").click(function () {
                                    let quantity = $("#quantity").val();
                                    let id = $("#btnAddToCart").attr("attrId");

                                    location.href = "/add-to-cart/" + id + "/" + quantity;
                                });
                            });

                        </script>
{{--                        <button type = "button" class = "btn"> <i class = "fas fa-heart"></i> Add to Wishlist</button>--}}
{{--                    </div>--}}

                </div>
            </div>
        </div>
    </div>
</section>

<section class="related">
<div class="featured" id="featured">
    <h1 class="heading"><span>Related Products</span></h1>
    <div class="swiper featured-slider">
        <div class="swiper-wrapper">
            @foreach($productRelated as $obj)
                <div class="swiper-slide box">
                    <div class="featured-icons">
{{--                        <a href="#" class="fas fa-search"></a>--}}
{{--                        <a href="#" class="fas fa-heart"></a>--}}
{{--                        <a href="product-details/{{$obj->id}}" class="fas fa-eye"></a>--}}
                        <a href="{{$obj->id}}" class="fas fa-eye"></a>
                    </div>
                    <div class="images">
                        <img src="/image/{{$obj->image}}">
                    </div>
                    <div class="content">
                        <h3><a >{{$obj->product_name}}</h3>
                        <div class="price">${{$obj->price}}<span>$821.88</span></div>
                        <p class="text-dark fs-5 fw-bold mb-0">{{$obj->description}}</p>
                        <a href="cart" class="featured-btn">Add to Cart</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</div>
</section>

{{--FOOTER--}}
@include("client.footer")
{{--FOOTER--}}



<!--JS file link-->
<script src="/https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="/js/script.js"></script>

</body>
</html>

