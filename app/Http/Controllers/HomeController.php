<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Home
    public function home()
    {
        return view('home.home');
    }
    //About
    public function about()
    {
        return view('home.about');
    }
     //Dashboard
     public function dashboard()
     {
         return view('home.dashboard');
     }
}
