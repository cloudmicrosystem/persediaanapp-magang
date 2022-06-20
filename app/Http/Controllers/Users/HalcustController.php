<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HalcustController extends Controller
{
    public function index(){
        $category = DB::select('SELECT * FROM category');

        $barang = DB::select(
            'SELECT barang.*,
                (SELECT nama_kategori FROM category WHERE id = barang.id_kategori)
                    AS nama_kategori FROM barang ORDER BY id LIMIT 8');

        return view('frontend.halcust.index')->with(compact('category','barang'));
    }

}
