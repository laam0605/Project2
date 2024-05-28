<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class ClientIndexController extends Controller
{
    public function clientIndex()
    {
        $setting = DB::table("setting")
            ->first();

        $products = DB::table("product")
            ->get();
        return view("client/ClientIndex",[
            "products" => $products,
            "setting" => $setting
        ]);

    }
    public function contact() {
        return view("client/contact");
    }

    public function aboutUs() {
        return view("client/about-us");
    }

    public function feedBack() {
        return view("client/feedback");
    }

    public function search() {
        $products = DB::table("product")
            ->get();
        return view("client/search",[


        "products" => $products
        ]);
    }

    public function productDetails($id) {

        $products = DB::table("product")
            ->where("id",$id)
            ->first();
//        $products->quantity = $quantity;

        $setting = DB::table("setting")
            ->first();

        $productRelated = DB::table("product")
            ->where("id","!=", $id)
            ->get();
        return view("client/product-details",[

            "products" => $products,
            "productRelated" =>$productRelated,
            "setting" =>$setting
//            "quantity"=>$quantity
        ]);
    }

    public function cart( Request $request) {
        $cart = Session::get("cart");
        dd($cart);
    }

    public function checkout() {


        $setting = DB::table("setting")
            ->first();

        $cart = Session::get("cart");

        if($cart ==null) {
            $cart = [];
        }

        $total =0;
        foreach ($cart as $index => $obj) {
            $total += $obj->price * $obj->quantity;
        }
        return view("client/checkout",[
            "cart" => $cart,
            "total" => $total,
            "setting"=>$setting
        ]);
    }


}

