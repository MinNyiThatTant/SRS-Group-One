<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GlobalController extends Controller
{
    public function dashboard(){
        return view('admins.globals.index');
    }

    public function create(){
        return view('admins.globals.create');
    }

    public function list(){
        return view('admins.globals.list');
    }
}
