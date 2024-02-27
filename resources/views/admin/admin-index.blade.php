<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(["resources/sass/app.scss", "resources/js/app.js"])
</head>
<body>
    <header>
        Trang Quản Trị
    </header>
    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/category-list">Category List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Product List</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @include("admin.category-list")
</body>
</html>
