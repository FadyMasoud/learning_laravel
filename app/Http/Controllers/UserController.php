<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

     public function postRegister(Request $request)
    {
        $name = $request->input('name');
        $username = $request->input('username');
        $password = $request->input('password');

        echo "Name: $name <br>";
        echo "Username: $username <br>";
        echo "Password: $password <br>";
    }
}
