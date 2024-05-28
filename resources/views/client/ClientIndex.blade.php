<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaamDuyeBookStore</title>
    <link rel="icon" href="img/book-logo.png" type="image">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
</head>

<body>

<header>

    <div class="logo-container">
        <img src="img/book-logo.png" alt="book-logo">
        <a href="ClientIndex" class="logo">{{$setting->web_name}}</a>
    </div>

    <nav class="nav">
        <a href="ClientIndex" class="active">Home<span></span></a>
        <a href="about-us">About<span></span></a>
{{--        <a href="shop.html">Shop<span></span></a>--}}
        <a href="feedback">FeedBack<span></span></a>
        <a href="contact">Contact<span></span></a>
    </nav>

    <div class="header-icons">
        <a href="search"><i class="fa fa-search"></i></a>
        <a href="cart" ><i class="fa fa-shopping-cart"></i></a>
{{--        <a href="wishlist.html"><i class="fa fa-heart"></i></a>--}}
        <a href="auth-login" class="login-btn" >Sign In</a>
    </div>
</header>

<!-- Hero Section -->

<section class="hero" id="hero">

    <div class="row">

        <div class="content">
            <h1>Get books up to 50% Off!</h1>
            <p>Chưa nghĩ ra được gì để điền vào đây.</p>
            <a href="shop" class="hero-btn">Shop Now</a>
        </div>

        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                <a href="#" class="swiper-slide"><img src="image/hunger-games.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/deep-as-sky.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/mocking-jay.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/throne-of-glass.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/the-burning-god.jpg" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/catching-fire.jpg" alt=""></a>
            </div>
            </div>
        </div>
    </div>

</section>

<section class="support">

    <div class="support-icons">
        <i class="fas fa-plane"></i>
        <div class="support-content">
            <h3>Free Shipping</h3>
            <p>Orders over $100</p>
        </div>
    </div>

    <div class="support-icons">
        <i class="fas fa-headset"></i>
        <div class="support-content">
            <h3>24/7 Support</h3>
            <p>Call us anytime</p>
        </div>
    </div>

    <div class="support-icons">
        <i class="fas fa-lock"></i>
        <div class="support-content">
            <h3>Secure Payment</h3>
            <p>100% secure payment</p>
        </div>
    </div>

    <div class="support-icons">
        <i class="fas fa-arrow-rotate-left"></i>
        <div class="support-content">
            <h3>Easy Return</h3>
            <p>7 days return</p>
            <div>
            </div>
</section>

{{--<section class="featured" id="featured">--}}
{{--    <h1 class="heading"><span>Featured Books</span></h1>--}}
{{--    <p>Check out our selection of books on sale</p>--}}
{{--    <div class="swiper featured-slider">--}}
{{--        <div class="swiper-wrapper">--}}
{{--            @foreach($products as $obj)--}}
{{--            <div class="swiper-slide box">--}}
{{--              --}}
{{--                <div class="featured-icons">--}}
{{--                    <a href="#" class="fas fa-search"></a>--}}
{{--                    <a href="#" class="fas fa-heart"></a>--}}
{{--                    <a href="product-details/{{$obj->id}}" class="fas fa-eye"></a>--}}
{{--                </div>--}}
{{--                <div class="images">--}}
{{--                    <img src="image/{{$obj->image}}">--}}
{{--                </div>--}}
{{--                <div class="content">--}}
{{--                    <h3><a >{{$obj->product_name}}</h3>--}}
{{--                    <div class="price">${{$obj->price}}<span>$821.88</span></div>--}}
{{--                    <p class="text-dark fs-5 fw-bold mb-0">{{$obj->description}}</p>--}}
{{--                    <a href="cart" class="featured-btn">Add to Cart</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    --}}

    <section class="featured" id="featured">
        <h1 class="heading"><span>Featured Books</span></h1>
        <p>Check out our selection of books on sale</p>
        <div class="swiper featured-slider">
            <div class="swiper-wrapper">
                @foreach($products as $obj)
                <div class="swiper-slide box">
                    <div class="featured-icons">
{{--                        <a href="#" class="fas fa-search"></a>--}}
{{--                        <a href="#" class="fas fa-heart"></a>--}}
                        <a href="product-details/{{$obj->id}}" class="fas fa-eye"></a>
                    </div>
                    <div class="images">
                        <img src="image/{{$obj->image}}">
                    </div>
                    <div class="content">
                        <h3><a >{{$obj->product_name}}</h3>
                        <div class="price">${{$obj->price}}<span>$821.88</span></div>
                        <p class="text-dark fs-5 fw-bold mb-0">{{$obj->description}}</p>
                        <a href="#" class="featured-btn">Add to Cart</a>
                    </div>
                </div>
        @endforeach
</section>

<section class="arrivals" id="arrivals">

    <h1 class="heading"><span>New Arrivals</span></h1>
    <p>New books are here! Find the perfect book for you.</p>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="#" class="swiper-slide box">
                <div class="arrivals-image">
                    <img src="img/book-11.jpg" alt="">
                </div>
                <div class="arrivals-content">
                    <h3>A History of Burning</h3>
                    <div class="arrivals-price">&#8369;666.66<span>&#8369;999.99</span></div>
                    <div class="arrivals-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="arrivals-image">
                    <img src="img/book-12.jpg" alt="">
                </div>
                <div class="arrivals-content">
                    <h3>Yellowface</h3>
                    <div class="arrivals-price">&#8369;666.66<span>&#8369;999.99</span></div>
                    <div class="arrivals-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="arrivals-image">
                    <img src="img/book-13.jpg" alt="">
                </div>
                <div class="arrivals-content">
                    <h3>Deep As The Sky, Red As The Sea</h3>
                    <div class="arrivals-price">&#8369;666.66<span>&#8369;999.99</span></div>
                    <div class="arrivals-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="arrivals-image">
                    <img src="img/book-14.jpg" alt="">
                </div>
                <div class="arrivals-content">
                    <h3>Alone With You In The Ether</h3>
                    <div class="arrivals-price">&#8369;666.66<span>&#8369;999.99</span></div>
                    <div class="arrivals-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="arrivals-image">
                    <img src="img/book-15.jpg" alt="">
                </div>
                <div class="arrivals-content">
                    <h3>Daisy Jones & The Six</h3>
                    <div class="arrivals-price">&#8369;666.66<span>&#8369;999.99</span></div>
                    <div class="arrivals-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="arrivals-image">
                    <img src="img/book-16.jpg" alt="">
                </div>
                <div class="arrivals-content">
                    <h3>If We Were Villains</h3>
                    <div class="arrivals-price">&#8369;666.66<span>&#8369;999.99</span></div>
                    <div class="arrivals-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="arrivals-image">
                    <img src="img/book-17.jpg" alt="">
                </div>
                <div class="arrivals-content">
                    <h3>The Secret History</h3>
                    <div class="arrivals-price">&#8369;666.66<span>&#8369;999.99</span></div>
                    <div class="arrivals-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="arrivals-image">
                    <img src="img/book-18.jpg" alt="">
                </div>
                <div class="arrivals-content">
                    <h3>Normal People</h3>
                    <div class="arrivals-price">&#8369;666.66<span>&#8369;999.99</span></div>
                    <div class="arrivals-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="arrivals-image">
                    <img src="img/book-19.jpg" alt="">
                </div>
                <div class="arrivals-content">
                    <h3>The Picture of Dorian Gray</h3>
                    <div class="arrivals-price">&#8369;666.66<span>&#8369;999.99</span></div>
                    <div class="arrivals-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="arrivals-image">
                    <img src="img/book-20.png" alt="">
                </div>
                <div class="arrivals-content">
                    <h3>The Master & Margarita</h3>
                    <div class="arrivals-price">&#8369;666.66<span>&#8369;999.99</span></div>
                    <div class="arrivals-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

        </div>

</section>

<section class="deal">
    <div class="content">
        <h3>Deal of the Day</h3>
        <h1>Enjoy Exclusive Discounts on Books Today!</h1>
        <p>Indulge your passion for reading while saving big with our exclusive selection of discounted books. Explore a treasure trove of literary gems at unbeatable prices, where quality meets affordability. </p>
        <a href="shop.html" class="deal-btn">Shop Now</a>
    </div>

    <div class="image">
        <img src="img/deal.jpg" alt="">
    </div>
</section>

<section class="reviews" id="reviews">
    <h1 class="reviews-heading"><span>Client's Reviews</span></h1>
    <div class="swiper reviews-slider">
        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="img/people-1.jpg" alt="">
                <h3>Mary Jane</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis laboriosam eaque assumenda fuga magni tempore, distinctio commodi hic cum consectetur quo saepe, quos expedita et! Eaque, deleniti. Iusto, modi eveniet.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="img/people-2.jpg" alt="">
                <h3>Juan Cruz</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis laboriosam eaque assumenda fuga magni tempore, distinctio commodi hic cum consectetur quo saepe, quos expedita et! Eaque, deleniti. Iusto, modi eveniet.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="img/people-3.jpg" alt="">
                <h3>Crisostomo Ibarra</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis laboriosam eaque assumenda fuga magni tempore, distinctio commodi hic cum consectetur quo saepe, quos expedita et! Eaque, deleniti. Iusto, modi eveniet.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="img/people-4.jpg" alt="">
                <h3>Maria Clara</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis laboriosam eaque assumenda fuga magni tempore, distinctio commodi hic cum consectetur quo saepe, quos expedita et! Eaque, deleniti. Iusto, modi eveniet.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="img/people-5.jpg" alt="">
                <h3>John Doe</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis laboriosam eaque assumenda fuga magni tempore, distinctio commodi hic cum consectetur quo saepe, quos expedita et! Eaque, deleniti. Iusto, modi eveniet.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="img/people-6.jpg" alt="">
                <h3>Queen Charlotte</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis laboriosam eaque assumenda fuga magni tempore, distinctio commodi hic cum consectetur quo saepe, quos expedita et! Eaque, deleniti. Iusto, modi eveniet.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
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

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!--Custom JS file link-->
<script src="js/script.js"></script>

</body>
</html>

