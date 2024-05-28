@vite(["resources/sass/app.scss", "resources/js/app.js"])
<div class="container">
    <h4>Edit category</h4>
    <form action="/admin/category-update/{{$category->id}}" method="post">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text">Category Name</span>
            <input type="text" name="categoryName" value="{{$category->category_name}}" class="form-control">
        </div>

        <div class="mb-3">
            <button class="btn btn-primary btn-sm">Save</button>
        </div>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </form>
</div>
