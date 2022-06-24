<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;

class Haldetailpro extends Controller
{

    public function index()
    {
        $trendingItems = Barang::where('trending','Yes')->take(4)->get();

        return view('frontend.haldetailpro.index')->with(compact('trendingItems'));
    }
}
