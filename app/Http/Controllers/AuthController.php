<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login() {
        return view("client/auth-login");
    }
    public function loginPost(Request $request) {
        $credentials  =$request->only("email","password");
        $check = Auth::attempt($credentials);

        if ($check == false) {
            return redirect("auth-login");
        }
    $products = DB::table("product")
        ->get();
        return view("client/ClientIndex", [


        "products" => $products
        ]);
    }

    public function register() {

        return view("client/register");
    }

    public function registerPost(Request $request) {
        $fullName = $request->fullName;
        $email = $request->email;
        $password = $request->password;

        $options = [
            'cost' => 12,
        ];
        $password = password_hash($password,PASSWORD_BCRYPT,$options);
        DB::table("users")
            ->insert([
                "name" =>$fullName,
                "email"=>$email,
                "password"=>$password,
            ]);
        return view("client/auth-login");
    }
    public function changePassword() {

        return view("client/change-password");
    }

    public function changePasswordPost(Request $request) {
        $email =$request->email;
        $oldPassword =$request->oldPassword;
        $newPassword =$request->newPassword;
        $credentials  =$request->only("email","password");

        $options = [
            'cost' => 12,
        ];
        $newPassword = password_hash($newPassword,PASSWORD_BCRYPT,$options);

        $check = Auth::attempt($credentials);

        if ($check == false) {
            return redirect("client/change-password");
        }
        DB::table("users")
            ->where("email","=",$email)
            ->update([
                "password"=>$newPassword,
            ]);

        return redirect("client/auth-login");
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect("client/auth-login");

    }

}
