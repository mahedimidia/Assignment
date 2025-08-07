<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        return view('home.home');
    }

    public function about()
    {
        return view('home.about');
    }

    public function contact()
    {
        return view('home.contact');
    }

     public function categories()
    {
        return view('home.categories');
    }

      public function login()
    {
        return view('home.login');
    }

      public function registration()
    {
        return view('home.registration');
    }

       public function user_login()
    {
        return view('home.profile');
    }
}
