<style>
    /* Style the dropdown menu */
    .login-dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .login-dropdown-content {
        display: none;
        position: absolute;
        right: 20px; /* Sử dụng right ở đây để đẩy toàn bộ khối sang phải */
        background-color: #f9f9f9;
        min-width: 120px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .login-dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Show the dropdown menu on hover */
    .login-dropdown:hover .login-dropdown-content {
        display: block;
    }
</style>

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
            <!-- Dropdown Menu -->
            <div class="login-dropdown">
                <a href="#" class="login-btn">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                <div class="login-dropdown-content">
                    <a href="/logout">Logout</a>
                </div>
            </div>
        @else
            <a href="/login" class="login-btn">Login</a>
        @endif

    </div>
</header>
