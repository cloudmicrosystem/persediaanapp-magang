<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HaldetailartikelController extends Controller
{

    public function index()
    {
        return view('frontend.haldetailartikel.index');
    }

}
