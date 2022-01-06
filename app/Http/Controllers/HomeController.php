<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // return "ini dari home controller";
        return view('layouts.content');
    }

    public function adminlte(){
        return view('layouts.master');
    }
}
