<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalcustController extends Controller
{
    public function index(){
        // return "ini dari home controller";
        return view('halcust.index');
    }

    public function adminlte(){
        return view('layouts.master');
    }
}
