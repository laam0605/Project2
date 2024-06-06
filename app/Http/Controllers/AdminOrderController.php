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


}
