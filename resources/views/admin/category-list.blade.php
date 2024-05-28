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

        }

        .table {
            width: 100%;
            border-collapse: collapse;
            border: 2px solid #ddd;
            /*border-radius: 10px 10px 7px 7px;*/
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            position: absolute;
        }

        .table td {
            padding: 8px;
            text-align: center;
            padding: 12px 15px;
            border-bottom: 1px solid #dddddd;
            font-weight: bold;
        }

        .table td:hover {
            background: #DDE3E0;
        }

        .table tbody tr.active-row {
            font-weight: bold ;
            color: #20c997;
        }

        h4 {
            font-size: 40px;
            font-weight: bold;
            color: #333;
            padding-top: 20px;
            padding-bottom: 20px;
            padding-left: 20px;

        }
        a {
            color: #007bff;
            text-decoration: none;

        }

        .btn {
            background-color: #0dcaf0;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, color 0.3s;
            position: sticky;
            margin-left: 1850px;

        }

        .btn:hover {
            background-color: #0056b3;
            color: #ffee10;
            box-shadow: 0 0 5px #ffee10;
            text-shadow: 0 0 5px #ffee10;
        }

        .btn:hover::before {
            transform: scale(1.1);
            box-shadow: 0 0 15px #ffee10;
        }

        .search-container {
            position:sticky;
            padding-bottom: 10px;
        }

        .search-input {

            position: sticky;
            width: 200px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        .search-input:hover {
            border-color: #0dcaf0;
        }

        .search-button {

            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;

        }


        .search-button:hover {
            background-color: #0056b3;
            color: #ffee10;
            box-shadow: 0 0 5px #ffee10;
            text-shadow: 0 0 5px #ffee10;

        }

        .search-button:hover::before {
            transform: scale(1.1);
            box-shadow: 0 0 15px #ffee10;
        }

        .text-center {
            font-size: 15px;
            background-color: #20c997;

        }
        .text-center:hover {
            background: white;
        }

        .view-all {
            margin-left: 50px;
            font-weight: bold;
        }




    </style>
</head>
<h4>Category List</h4>
<a href="/admin/category-add" class="btn btn-primary btn-sm">Add</a>

<form action="/admin/category-search" method="get">
    <div class="search-container">
        <input type="text" name="data" value="{{$data}}" class="search-input" placeholder="  Search by category name ...">
        <a href="/admin/category-list" class="view-all">View All</a>
    </div>
    <div>
        <button class="search-button">Tìm</button>
    </div>
</form>
<table class="table table-hover table-bordered table-striped">
    <thead>
    <tr>
        <td style="background: #9EF9C3">Id</td>
        <td style="background: #9EF9C3">Category Name</td>

        <td></td>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $obj)
    <tr>
        <td>{{$obj->id}}</td>
        <td>{{$obj->category_name}}</td>

        <td class="text-center"><a href="/admin/category-delete/{{$obj->id}}" style="color: red">Delete</a></td>
        <td class="text-center"><a href="/admin/category-edit/{{$obj->id}}">Edit</a></td>
    </tr>
    @endforeach
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
{{--    <a href="product-list" class="page-ctrl">2 </a>--}}
    </tbody>
</table>
