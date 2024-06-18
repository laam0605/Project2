<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AdminOrderController extends Controller
{
    public function getAll(): View
    {
        $activeMenu = "order";
        $orders = DB::table("orders")
            ->orderBy("created_at", "DESC")
            ->paginate(10);

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

    public function filter($status): View {
        $activeMenu = "order";
        $orders = DB::table("orders")
            ->where("status", $status)
            ->paginate(10);

        return view("admin.order-List", [
            "orders" => $orders,
            "activeMenu" => $activeMenu,
        ]);
    }

    public function orderDetails($id)
    {
        $orderDetails = DB::table("order_details")
            ->where("orders.id", "=", $id)
            ->join("orders", "order_details.order_id", "=", "orders.id")
            ->join("product", "order_details.product_id", "=", "product.id")
            ->select("product.product_name", "product.description", "product.image", "orders.id", "order_details.price", "order_details.quantity")
            ->get();
    }

}
