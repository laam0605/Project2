<?php

namespace App\Http\Controllers;

class CategoryController extends Controller {
    public function getAll() {
        return view("admin/category-list");
    }
}
