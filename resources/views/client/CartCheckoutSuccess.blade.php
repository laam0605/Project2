<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Success !</title>
    <link rel="icon" href="img/book-logo.png" type="image">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
</head>
    <style>

        .header-container {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin-left: 50px;
        }
        .heart {
            display: flex;
            align-items: center;
        }

        body {
            background-image: linear-gradient(#3f2874,#6e07696f ),url('img/background.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        h1 {
            text-align: center;
            align-content: center;
            padding: 1rem;
        }

        #page-wrap {
            position: relative;
            z-index: 2;
            width: 30%;
            border-radius: 15px;
            margin: 50px auto;
            margin-top: 150px;
            padding: 10px 30px;
            background: rgba(255, 255, 255, 0.7); /* Updated background with 30% transparency */
            box-shadow: 0 0 20px black;
            padding-bottom: 5rem;
        }


    </style>
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

<form action="cart/checkout" method="post">
    <div id="page-wrap">
            <div class="small-container cart-page">
                <h1>Checkout Successfully</h1>
            </div>
    </div>




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


<!--Custom JS file link-->
<script src="js/script.js"></script>
</body>
</html>
