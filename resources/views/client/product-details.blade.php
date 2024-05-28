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

<header>

    <div class="logo-container">
        <img src="/image/book-logo.png" alt="book-logo">
        <a href="/ClientIndex" class="logo">LBookStore</a>
    </div>

    <nav class="nav">
        <a href="/ClientIndex" class="active">Home<span></span></a>
        <a href="/about-us">About<span></span></a>
        <a href="/shop.html">Shop<span></span></a>
        <a href="/feedback">Feedback<span></span></a>
        <a href="/contact">Contact<span></span></a>
    </nav>


    <div class="header-icons">
        <a href="search"><i class="fa fa-search"></i></a>
        <a href="cart"><i class="fa fa-shopping-cart"></i></a>
        <a href="wishlist.html"><i class="fa fa-heart"></i></a>
        <a href="auth-login" class="login-btn">Sign In</a>
    </div>
        <div class="menu">
            <img src="/img/people-1.jpg">
            <h3>User Account</h3>
            <ul>
                <li>
                    <a href="#">My Profile</a>
                </li>
                <li>
                    <a href="#">Edit Account</a>
                </li>
                <li>
                    <a href="ClientIndex">Logout</a>
                </li>
            </ul>
        </div>
    </div>
    </div>
</header>

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

<footer class="footer-area">
    <div class="footer">
        <div class="col-footer">
            <h4>LBookStore</h4>
            <p>We are an online bookstore that offers an extensive collection of books designed to meet diverse interests and preferences.</p>
            <div class="social">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-footer">
            <h4>Main Menu</h4>
            <ul>
                <li><a href="ClientIndex"><i class="fas fa-chevron-right"></i> Home</a></li>
                <li><a href="about-us"><i class="fas fa-chevron-right"></i> About</a></li>
                <li><a href="shop.html"><i class="fas fa-chevron-right"></i> Shop</a></li>
                <li><a href="feedback"><i class="fas fa-chevron-right"></i> Feedback</a></li>
                <li><a href="contact"><i class="fas fa-chevron-right"></i> Contact</a></li>
            </ul>
        </div>
        <div class="col-footer">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="FAQs.html"><i class="fas fa-chevron-right"></i> FAQs</a></li>
                <li><a href="privacypolicy.html"><i class="fas fa-chevron-right"></i> Privacy Policy</a></li>
                <li><a href="terms&conditions.html"><i class="fas fa-chevron-right"></i> Terms & Conditions</a></li>
            </ul>
        </div>
        <div class="col-footer">
            <h4>Contact us</h4>
            <ul>
                <li><a href=""><i class="fa fa-location-arrow"></i>{{$setting->address}}</a></li>
                <li><a href=""><i class="fas fa-mobile-alt"></i>{{$setting->phone_number}}</a></li>
                <li><a href=""><i class="far fa-envelope"></i>{{$setting->email}}</a></li>
                <li><a href=""><i class="fas fa-globe-europe"></i> www.LBookStore.com</a></li>
            </ul>
        </div>
    </div>

    <div class="copyright">
        <p>LBookStore COPYRIGHT &copy; 2023. ALL RIGHTS RESERVED.</p>
    </div>
</footer>

<script src="/https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<!--Custom JS file link-->

</body>
</html>

