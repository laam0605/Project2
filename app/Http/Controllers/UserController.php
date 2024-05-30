<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function login() {
        return view("client.auth-login");
    }

    public function register() {
        return view("client.register");
    }

    public function postRegister(Request $request) {
        $validatedData = $request->validate([
            'fullName' => 'required|string|',
            'email'    => 'required|string|email|unique:users',
            'password' => 'required|string|min:3|confirmed',
        ]);

        dd($request->all());
    }
}

