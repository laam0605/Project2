<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link rel="stylesheet" href="/admincss/adminlogin.css">
</head>
<body>

<div class="wrapper">
    <div class="card-switch">
        <label class="switch">
            <input type="checkbox" class="toggle">
            <span class="slider"></span>
            <span class="card-side"></span>
            <div class="flip-card__inner">
                <div class="flip-card__front">
                    <div class="title">Log in</div>
                    <form class="flip-card__form" action="">
                        <input class="flip-card__input" name="email" placeholder="Email" type="email">
                        <input class="flip-card__input" name="password" placeholder="Password" type="password">
                        <button class="flip-card__btn">Let`s go!</button>
                    </form>
                </div>
                <div class="flip-card__back">
                    <div class="title">Sign up</div>
                    <form class="flip-card__form" action="">
                        <input class="flip-card__input" placeholder="Name" type="name">
                        <input class="flip-card__input" name="email" placeholder="Email" type="email">
                        <input class="flip-card__input" name="password" placeholder="Password" type="password">
                        <button class="flip-card__btn">Confirm!</button>
                    </form>
                </div>
            </div>
        </label>
    </div>
</div>

</body>
</html>
