<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('front.register');
    }
}