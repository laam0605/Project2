@vite(["resources/sass/app.scss", "resources/js/app.js"])


<h4>Add Product</h4>
<style>
    h4 {
        font-size: 50px;
    }
    .form-control {
        font-size: 17px;
    }
    .btn {
        background-color: aquamarine;
    }

    .btn:hover {
        background-color: #20c997;
        color: #ffee10;
        box-shadow: 0 0 5px #ffee10;
        text-shadow: 0 0 5px #ffee10;
    }

    .btn:hover::before {
        transform: scale(1.1);
        box-shadow: 0 0 15px #ffee10;
    }
</style>
<form action="/admin/product-save" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mt-2 mb-2">
        <label for="">Product Name</label>
        <input type="text" name="productName" class="form-control form-control-sm"  />
    </div>

    <div class="mt-2 mb-2">
        <label for="">Price</label>
        <input type="text" name="price" class="form-control form-control-sm" />
    </div>

    <div class="mt-2 mb-2">
        <label for="">Description</label>
        <input type="text" name="description" class="form-control form-control-sm" />
    </div>

    <div class="mt-2 mb-2">
        <label for="">Image</label>
        <input type="file" name="image" class="form-control form-control-sm" />
    </div>
{{--cateogy--}}
    <div class="mt-2 mb-2">
        <label for="">Category</label>

        <select name="categoryId" id="" class="form-control form-control-sm">
        <option value="0">Chon Category</option>
            @foreach($categories as $obj)
                <option value="{{$obj->id}}">{{$obj->category_name}}</option>

            @endforeach
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </select>

    </div>
    <div class="mt-2 mb-2">
        <button class="btn">Save</button>
    </div>

</form>
