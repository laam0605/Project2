
<h4>Category List</h4>

<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <td>Id</td>
            <td>Category Name</td>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $obj)
            <tr>
                <td>{{$obj->id}}</td>
                <td>{{$obj->category_name}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
