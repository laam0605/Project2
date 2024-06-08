<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class ClientIndexController extends Controller
{
    public function clientIndex()
    {
        $cart = Session::get("cart");

        $products = DB::table("product")
            ->get();
        return view("client/ClientIndex",[
            "products" => $products,
            "cart" => $cart
        ]);

    }
    public function contact() {
        $cart = Session::get("cart");

        return view("client/contact",[
            "cart" => $cart
        ]);
    }

    public function aboutUs() {
        $cart = Session::get("cart");

        return view("client/about-us",[
            "cart" => $cart
        ]);
    }

    public function feedBack() {
        $cart = Session::get("cart");

        return view("client/feedback",[
            "cart" => $cart
        ]);
    }

    public function search() {
        $cart = Session::get("cart");

        $products = DB::table("product")
            ->get();
        return view("client/search",[
        "cart" => $cart,
        "products" => $products
        ]);
    }

    public function productDetails($id) {
        $cart = Session::get("cart");

        $products = DB::table("product")
            ->where("product.id",$id)
            ->join("category", "product.category_id", "=", "category.id")
            ->join("publisher", "product.publisher_id", "=", "publisher.id")
            ->join("author", "product.author_id", "=", "author.id")
            ->select("product.*", "category.category_name", "publisher.publisher_name", "author.author_name")
            ->first();
//        $products->quantity = $quantity;


        $productRelated = DB::table("product")
            ->where("id","!=", $id)
            ->get();
        return view("client/product-details",[

            "products" => $products,
            "productRelated" =>$productRelated,
            "cart" => $cart
//            "quantity"=>$quantity
        ]);
    }

    public function cart( Request $request) {
        $cart = Session::get("cart");
        dd($cart);
    }


}

