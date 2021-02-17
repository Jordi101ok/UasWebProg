<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function homePage(){
        return view('homePage');
    }

    public function login(){
        return view('login');
    }

    public function aboutUs(){
        return view('aboutUs');
    }

    public function signUp(){
        return view('signUp');
    }

}
