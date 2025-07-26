<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home.index');
    }

    public function department(){
        return view('home.department');
    }

    public function courses(){
        return view('home.courses');
    }

    public function univ(){
        return view('home.univ-info');
    }

    public function contact(){
        return view('home.contact');
    }
}
