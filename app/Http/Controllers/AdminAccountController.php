<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminAccountController extends Controller
{
    public function getAll()
    {
        $activeMenu = "account";
        $accounts = DB::table("users")
            ->paginate(5);

        return view("admin.account-list",[
            "activeMenu" => $activeMenu,
            "accounts" => $accounts,
        ]);
    }
}
