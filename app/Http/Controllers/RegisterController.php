<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
return view("newform");
    }
    public function register(Request $request)
    {
        echo $request->name;
        echo $request->email;
        echo $request->password;

    }
}
