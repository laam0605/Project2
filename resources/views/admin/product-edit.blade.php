@vite(["resources/sass/app.scss", "resources/js/app.js"])
<div class="container">
    <h4>Edit product</h4>
    <form action="/admin/product-update/{{$product->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text">Id</span>
            <input type="text" name="productId" value="{{$product->id}}" class="form-control" disabled>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Product Name</span>
            <input type="text" name="productName" value="{{$product->product_name}}" class="form-control">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Price</span>
            <input type="text" name="price" value="{{$product->price}}" class="form-control">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Description</span>
            <input type="text" name="description" value="{{$product->description}}" class="form-control">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Image</span>
            <input type="file" name="image" value="{{$product->image}}" class="form-control" accept="image/*">
        </div>

        <div class="mt-2 mb-2">
            <label for="">Category</label>

            <select name="categoryId" id="" class="form-control form-control-sm">
                <option value="0">Chon category</option>
                @foreach($category as $object)
                    <option value="{{$object->id}}" @if($object->id == $product->category_id){{'selected'}}@endif>{{$object->category_name}}</option>
                @endforeach
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </select>

        </div>

        <div class="mb-3">
            <button class="btn btn-primary btn-sm">Save</button>
        </div>
    </form>
</div>
