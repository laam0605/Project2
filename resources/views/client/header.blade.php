
<header>
    <div class="logo-container">
        <img src="/image/book-logo.png" alt="book-logo">
        <a href="#" class="logo">BookStore</a>
    </div>

    <nav class="nav">
        <a href="/ClientIndex">Home<span></span></a>
        <a href="/about-us">About<span></span></a>
        <a href="shop.html">Shop<span></span></a>
        <a href="/feedback">Feedback<span></span></a>
        <a href="/contact">Contact<span></span></a>
    </nav>

    <div class="header-icons">
        <a href="/search"><i class="fa fa-search"></i></a>
        <a href="/cart"><i class="fa fa-shopping-cart"></i></a>
        <i class="fa fa-user"></i>
        @if(\Illuminate\Support\Facades\Auth::check())
            <a href="#" class="login-btn">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
        @else
            <a href="/login" class="login-btn">Login</a>
        @endif

    </div>
</header>
