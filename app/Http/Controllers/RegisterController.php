<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view("register.index", [
            "title" => "Register",
            "active" => "register"
        ]);
    }
    public function store(Request $request){
        $validateData = $request->validate([
            "name" => "required",
            "username" => "required|min:3|max:255",
            "email" => "required|unique:users|email:dns",
            "password" => "required|min:5|max:8"
        ]);

        $validateData["password"] = Hash::make($validateData["password"]);

        // dd($validateData);

        User::create($validateData);
        // dd("register berhasil");
        return redirect("/login")->with("success", "Register Berhasil, Silahkan Login");
    }
}
