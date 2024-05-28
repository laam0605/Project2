<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin- User Management</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>>
</head>
<style>

    /* Style for the table */
    .user-table {
        width: 100%;
        border-collapse: collapse; /* Collapse the border spacing */
    }

    /* Style for table header */
    .user-table th {
        background-color: #f2f2f2; /* Light gray background */
        border: 1px solid #ddd; /* Gray border */
        padding: 8px; /* Padding around the content */
    }

    /* Style for table data cells */
    .user-table td {
        border: 1px solid #ddd; /* Gray border */
        padding: 8px; /* Padding around the content */
    }

    /* Alternate row color */
    .user-table tbody tr:nth-child(even) {
        background-color: #f9f9f9; /* Lighter gray background for even rows */
    }

    /* Hover effect */
    .user-table tbody tr:hover {
        background-color: #f2f2f2; /* Darker gray background on hover */
    }
</style>
<body>
<h4>Users List</h4>


<table class="user-table">
    <thead>
    <tr>
        <th>Id</th>
        <th>User Name</th>
        <th>Email</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $obj)
        <tr>
            <td>{{$obj->id}}</td>
            <td>{{$obj->name}}</td>
            <td>{{$obj->email}}</td>

            <td><a href="#">Edit</a> </td>
            <td><a href="AdminUser-delete/{{$obj->id}}"><i class="far fa-trash-alt"></i></a> </td>
        </tr>
    @endforeach
    </tbody>
</table>


</body>
</html>
