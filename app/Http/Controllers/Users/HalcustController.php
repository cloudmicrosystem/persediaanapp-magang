<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HalcustController extends Controller
{
    public function index(){
        // return "ini dari home controller";
        return view('frontend.halcust.index');
    }

    public function adminlte(){
        return view('backend.layouts.master');
    }
}
