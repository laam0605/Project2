<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function getAll() {
        $activeMenu = "order";
        $orders = DB::table("orders")
            ->get();
        return view("admin.order-List", [
            "orders" => $orders,
            "activeMenu" => $activeMenu,
        ]);
    }

    public function ordersUpdateStatus($id, $status) {
        DB::table("orders")
            ->where("id", $id)
            ->update([
                "status" => $status
            ]);
        return redirect ('/admin/order-list');
    }

    public function filter($status) {
        $activeMenu = "order";
        $orders = DB::table("orders")
            ->where("status", $status)
            ->get();

        return view("admin.order-List", [
            "orders" => $orders,
            "activeMenu" => $activeMenu,
        ]);
    }
}
