<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
       
        return view('login.login');
    }

    public function olvidocontrasenia(){
        return view('login.olvidocontrasenia');
    }
}