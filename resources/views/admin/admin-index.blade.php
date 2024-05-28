<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/yourkitcode.js" crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .navbar {
            background-color: #333;
            display: flex;
            justify-content: center;
            padding: 10px 0;
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .navbar a:hover {
            background: #20c997;
        }
        .navbar a.active {
            background-color: #555;
        }
        header {
            text-align: center;

        }
        .logo {
            background: #333;
            width: 50px;
            height: 40px;
        }
        .logo:hover {
            background: #333;
        }
    </style>

</head>
<body>
    <header style="color: #a52834">
        <h1 style="font-weight: bold">Admin Dashboard</h1>
    </header>

    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
            <a href="/admin/category-list"><img src="https://e7.pngegg.com/pngimages/478/980/png-clipart-lego-logo-lego-star-wars-logo-brand-toy-lego-text-photography-thumbnail.png " class="logo"></a>

            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/category-list">Category List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/product-list">Product List</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



{{--    category--}}
    @if($path == "admin/category-list")
        @include("admin.category-list")
    @endif

    @if($path == "admin/category-add")
        @include("admin.category-add")
    @endif

    @if($path == "admin/category-edit")
        @include("admin.category-edit")
    @endif

    @if($path == "admin/product-list")
        @include("admin.product-list")
    @endif

    @if($path == "admin/product-add")
        @include("admin.product-add")
    @endif

    @if($path == "admin/product-edit")
        @include("admin.product-edit")
    @endif

    @if($path == "admin/product-update")
        @include("admin.product-update")
    @endif
</body>
</html>
