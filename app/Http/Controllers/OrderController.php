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

    public function statistics() {
        $activeMenu = "stats";
        $result1 = DB::table("orders")
            ->selectRaw("MONTH(created_at) month, SUM(total) revenue")
            ->where("status", "RECEIVED")
            ->groupByRaw("MONTH(created_at)")
            ->get();

        $obj1 = $result1[0];

        foreach ($result1 as $i => $obj){
            if($obj1->revenue < $obj->revenue){
                $obj1 = $obj;
            }
        }

        $result2 = DB::table("orders")
            ->selectRaw("YEAR(created_at) year, SUM(total) revenue")
            ->where("status", "RECEIVED")
            ->groupByRaw("YEAR(created_at)")
            ->get();

        $obj2 = $result2[0];

        foreach ($result2 as $i => $obj){
            if($obj2->revenue < $obj->revenue){
                $obj2 = $obj;
            }
        }

        return view ("admin.stats",[
            "obj1" => $obj1,
            "obj2" => $obj2,
            "activeMenu" => $activeMenu,
        ]);
    }
}
