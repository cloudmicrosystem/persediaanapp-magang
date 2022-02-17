<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // return "ini dari home controller";
        return view('backend.layouts.content');
    }

    public function adminlte(){
        return view('backend.layouts.master');
    }
}
