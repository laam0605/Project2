<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LBookStore Feedback</title>
    <link rel="icon" href="img/book-logo.png" type="image">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
</head>
<body>

{{--HEADER--}}
@include('client.header')
{{--HEADER--}}

<section class = "hero-page">
    <div class = "hero-bg">
        <h3>LBookStore</h3>
        <h2>How customers talk about us ?</h2>
        <div class = "line">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <p class = "text">Here are all customer's feedback about us.</p>
    </div>
</section>

    <section class="reviews" id="reviews">
        <h1 class="reviews-heading"><span>Customer's feedback</span></h1>
        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide box" >
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

{{--FOOTER--}}
@include("client.footer")
{{--FOOTER--}}

<!--Custom JS file link-->
<script src="js/script.js"></script>

</body>
</html>
