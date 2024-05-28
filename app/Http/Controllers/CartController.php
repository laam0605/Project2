<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
public function addToCart($id, $quantity) {
    $product = DB::table("product")
        ->where("id",$id)
        ->first();
    $product->quantity = $quantity;

        $cart = $product;
    Session::push("cart", $cart);

    return redirect("ClientIndex");

}

    public function cart( Request $request) {
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
        return view("client/showcart",[
            "cart" => $cart,
            "total" => $total,
            "setting"=>$setting
        ]);

    }

        public function cartRemove() {
        Session::forget("cart");
        Session::flush();
        Session::save();

        return redirect("cart");
        }


    public function cartUpdate($type,$id, $quantity ) {
        $cart = Session::get("cart");
        foreach ($cart as $index => $obj) {

            if ($obj->id == $id && $type == "plus") {
                $obj->quantity = $quantity +1;

            }

            if ($obj->id == $id && $type == "sub") {
                if ($quantity > 1){
                    $obj->quantity = $quantity -1;
                } elseif ($quantity == 1){
                    unset($cart[$index]);
                }

            }


        }
        Session::put("cart",$cart);

        return redirect("cart");
    }

    public function cartCheckout(Request $request) {
        $fullName = $request->fullName;
        $address = $request->address;
        $phone_number = $request->phone_number;
        $total = $request->total;
//        $status = $request->status;

        DB::table("orders")
            ->insert([
                "full_name" =>$fullName,
                "address" =>$address,
                "phone_number" =>$phone_number,
                "total" => $total,
                "created_at" =>Carbon::now()
            ]);

        //Xóa giỏ hàng
        {
            Session::forget("cart");
            Session::flush();
            Session::save();
        }

        $setting = DB::table("setting")
            ->first();

        return view("client/CartCheckoutSuccess",[
            "setting" => $setting
        ]);
    }


}
