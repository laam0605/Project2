<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getAll()
    {
        $path = "admin/product-list";
        $data = "";

        $products = DB::table("product")
            ->join("category","product.category_id","=", "category.id")
            ->select("product.*", "category.category_name")
            ->get();


        return view("admin/admin-index",
            [
                "path" => $path,
                "products" => $products,
                "data"=>$data
            ]);
    }

    public function delete(Request $request, $id){
        DB::table("product")
            ->where("id", $id)
            ->delete();


        // Flash success message to the session
        $request->session()->flash('success', 'Product deleted successfully.');
        return redirect("/admin/product-list");

    }

    public function add(){
        $path = "admin/product-add";

        // lay list cateogry tu DB roi truyen ra view
        $categories = DB::table("category")
            ->get();

        return view("admin/admin-index",
            [
                "path" => $path,
                "categories" => $categories
            ]);
    }

    public function save(Request $request){
        $productName = $request->productName;
        $price = $request->price;
        $description = $request->description;
        $categoryId = $request->categoryId;

        $imageName = "";
        if($request->image != null){
            $imageName = $request->image->getClientOriginalName();

            // upload image to image_product
            $request->image->move(public_path("image_product"), $imageName);
        }



        DB::table("product")
            ->insert([
                "product_name" => $productName,
                "price" => $price,
                "description" => $description,
                "image" => $imageName,
                "category_id" => $categoryId
            ]);

        // Flash success message to the session
        $request->session()->flash('success', 'Product added successfully.');

        return redirect("/admin/product-list");
    }
    public function edit($id){
        $path = "admin/product-edit";
        $category = DB::table("category")
            ->get();
        $product = DB::table("product")
            ->where("id", "=", $id)
            ->first();

        return view("admin/admin-index", [
            "path" => $path,
            "product" => $product,
            "category" => $category
        ]);
    }

    public function update($id, Request $request){
        $productName = $request->productName;
        $price = $request->price;
        $description = $request->description;
        $image = "";
        if($request->image != null){
            $image = $request->image->getClientOriginalName();

            // upload image to image_product
            $request->image->move(public_path("image_product"), $image);
        }
        $categoryId = $request->categoryId;

        DB::table("product")
            ->where("id", "=", $id)
            ->update([
                "product_name" => $productName,
                "price"=>$price,
                "description"=>$description,
                "image"=>$image,
                "category_id"=>$categoryId
            ]);

        // Flash success message to the session
        $request->session()->flash('success', 'Product edited successfully.');

        return redirect("/admin/product-list");
    }

    public function productSearch(Request $request) {
        $path = "admin/product-list";
        $data = $request->data;


        $products = DB::table("product")
            ->where("product_name", "LIKE", "%".$data."%")
            ->join("category", "product.category_id", "=", "category.id")
            ->select("product.*", "category.category_name")
            ->get();

        if ($data==false){
            return "San pham khong ton tai";
        }
        else {


        return view("admin/admin-index" ,[
            "products" => $products,
            "data" =>$data,
            "path"=>$path
            ]);
        }
    }
    public function clientProductDetails() {
        $products = DB::table("product")
            ->get();
        return view("client/client-product-details",[
            "products"=>$products
        ]);

    }

}
