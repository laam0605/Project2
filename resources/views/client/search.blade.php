<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LBookStore-Search</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <style>
        section {
            font-family: Poppins, sans-serif;
            font-size: 16px;
            line-height: 1.5;
        }

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
            background-image: linear-gradient(#3f2874,#6e07696f ),url('img/background2.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        #page-wrap {
            position: relative;
            z-index: 2;
            width: 600px;
            border-radius: 15px;
            margin: 50px auto;
            margin-top: 25%; /* Updated margin-top value */
            padding: 20px;
            background: rgba(255, 255, 255, 0.5);
            box-shadow: 0 0 20px black;
            list-style: none;
            padding: 10px;
        }

        #page-wrap .book-item:not(:last-child) {
            border-bottom: 5px solid #3f2874;
            padding-bottom: 20px;
        }

        .pqs {
            display: flex;
            justify-content: space-between;
        }

        #bookList img{
            width: 250px;
            height: auto;
            align-items: center;
        }

        .container {
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            max-width: 500px;
            background: rgba(255, 255, 255, 0.2);
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 60px;
            padding: 30px 20px;
        }

        #searchInput {
            font-size: 20px;
        }

        .book-item {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 20px;
            background-color: rgba(255, 255, 255, 0); /* Set the background color to 100% transparent */
            padding: 20px;
            width: 300px;
            margin: 5px auto;
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .book-item img{
            width: 250px;
            height: auto;
        }

        #bookList {
            margin-top: 10%;
            list-style: none;
            padding: 0;
        }

        .content h3 {
            color: black;
        }

        .content .price span {
            text-decoration: line-through;
            color: black;
        }



    </style>
</head>

<body>
<header>
    <div class="logo-container">
        <img src="img/book-logo.png" alt="book-logo">
        <a href="#" class="logo">lBookStore</a>
    </div>

    <nav class="nav">
        <a href="ClientIndex">Home<span></span></a>
        <a href="about-us">About<span></span></a>
        <a href="shop.html">Shop<span></span></a>
        <a href="feedback">Feedback<span></span></a>
        <a href="contact">Contact<span></span></a>
        <a href="genre.html">Genre<span></span></a>
    </nav>

    <div class="header-icons">
        <a href="search"><i class="fa fa-search"></i></a>
        <a href="cart.html"><i class="fa fa-shopping-cart"></i></a>
        <a href="wishlist.html"><i class="fa fa-heart"></i></a>
        <a href="auth-login" class="login-btn">Sign In</a>
    </div>
</header>

<section>
    <input class="container" type="text" id="searchInput" placeholder="Search...">

    <div id="page-wrap">
        @foreach($products as $obj)
        <ul id="bookList">
            <li class="book-item">
                <img src="image/{{$obj->image}}" alt="Book Cover">
                <div class="content">
                    <h3>{{$obj->product_name}}</h3>
                    <div class="price">
                        <span>${{$obj->price}}</span>
                    </div>
                    <p>{{$obj->description}}</p>
                    <a href="#" class="featured-btn">Add to Cart</a>
                </div>
            </li>
        </ul>
            @endforeach
    </div>

    <script>
        const searchInput = document.getElementById('searchInput');
        const bookList = document.getElementById('bookList');
        const books = bookList.getElementsByTagName('li');

        searchInput.addEventListener('input', function() {
            const searchTerm = searchInput.value.toLowerCase();

            Array.from(books).forEach(function(book) {
                const bookName = book.textContent.toLowerCase();
                if (bookName.includes(searchTerm)) {
                    book.style.display = 'block';
                } else {
                    book.style.display = 'none';
                }
            });
        });

        searchInput.addEventListener('keyup', function() {
            if (searchInput.value === '') {
                Array.from(books).forEach(function(book) {
                    book.style.display = 'block';
                });
            }
        });
    </script>
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
                <li><a href="#"><i class="fas fa-chevron-right"></i> Home</a></li>
                <li><a href="about-us"><i class="fas fa-chevron-right"></i> About</a></li>
                {{--                <li><a href="shop.html"><i class="fas fa-chevron-right"></i> Shop</a></li>--}}
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
                <li><a href=""><i class="fa fa-location-arrow"></i>Viet Nam</a></li>
                <li><a href=""><i class="fas fa-mobile-alt"></i> +84 123456789</a></li>
                <li><a href=""><i class="far fa-envelope"></i> lamtran7065@gmail.com</a></li>
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
