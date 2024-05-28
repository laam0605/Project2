<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function getAll()
    {
        $path = "admin/category-list";
        $data = "";

        $categories = DB::table("category")
            ->get();


        return view("admin/admin-index",
        [
            "path" => $path,
            "categories" => $categories,
            "data"=> $data
        ]);
    }

    public function delete(Request $request, $id){
        DB::table("category")
            ->where("id", $id)
            ->delete();

        // Flash success message to the session
        $request->session()->flash('success', 'Category deleted successfully.');

        return redirect("/admin/category-list");

    }

    public function add(){
        $path = "admin/category-add";

        return view("admin/admin-index",
        [
            "path" => $path
        ]);
    }

    public function save(Request $request){
        $categoryName = $request->categoryName;
        DB::table("category")
            ->insert([
                "category_name" => $categoryName
            ]);
        // Flash success message to the session
        $request->session()->flash('success', 'Category added successfully.');
        return redirect("/admin/category-list");
    }

    public function edit($id){
        $path = "admin/category-edit";
        $category = DB::table("category")
            ->where("id", "=", $id)
            ->get();


        return view("admin/admin-index", [
            "path" => $path,
            "category" => $category[0]
        ]);
    }

    public function update($id, Request $request){
        $categoryName = $request->categoryName;

        DB::table("category")
            ->where("id", "=", $id)
            ->update([
                "category_name" => $categoryName,
            ]);
        // Flash success message to the session
        $request->session()->flash('success', 'Category edited successfully.');
        return redirect("/admin/category-list");




    }

    public function categorySearch(Request $request) {
        $path = "admin/category-list";
        $data = $request->data;


        $categories = DB::table("category")
            ->where("category_name", "LIKE", "%".$data."%")
//            ->join("category", "product.category_id", "=", "category.id")
//            ->select("product.*", "category.category_name")
            ->get();

        if ($data==false){
            return "San pham khong ton tai";
        }
        else {


            return view("admin/admin-index" ,[
                "categories" => $categories,
                "data" =>$data,
                "path"=>$path
            ]);
        }
    }

}
