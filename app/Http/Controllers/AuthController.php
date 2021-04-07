<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }
    public function welcome(Request $request){
        // dd($request["name"]);
        return "halo";
        // return view('welcome');
    }
    public function welcome_post(Request $request){
        // dd($request->all());
        $namadepan = $request["firstname"];
        $namabelakang = $request["lastname"];
        // return "$nama";
        return view('welcome', ["namadepan" => $namadepan, "namabelakang" => $namabelakang]);
    }
}
