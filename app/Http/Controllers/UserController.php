<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function getAll() {
        $users = DB::table("users")
            ->get();

        return view("admin/Admin-User-Account",[
            "users" =>$users
        ]);
    }

    public function delete($id) {
        $users = DB::table("users")
            ->where("id",$id)
            ->delete();

        return redirect("Admin-User-Account");
    }
}
