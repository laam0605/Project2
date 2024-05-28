@vite(["resources/sass/app.scss", "resources/js/app.js"])

<h4>Add Category</h4>
<style>
    h4 {
        font-size: 40px;
        font-weight: bold;
    }
    .form-control {
        font-size: 17px;
        border-radius: 10px 10px 10px 10px;
        width: 1500px;
        border-style: double;
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
    .mt-2 {
        font-size: 18px;
    }
</style>
<form action="/admin/category-save" method="post">
    @csrf
    <div class="mt-2 mb-2">
        <label for="">Category Name</label>
        <input type="text" name="categoryName" class="form-control form-control-sm" />
    </div>

    <div class="mt-2 mb-2">
        <button class="btn">Save</button>
    </div>

</form>
