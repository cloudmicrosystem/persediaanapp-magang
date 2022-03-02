<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HalproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = DB::select('SELECT * FROM category');

        $barang = DB::select(
            'SELECT barang.*,
                (SELECT nama_category FROM category WHERE id = barang.id_category)
                    AS nama_category FROM barang ORDER BY id '
        );

        // $gambar = DB::select('SELECT * FROM gambar WHERE id_barang =.$barang->id');

        return view('frontend.halproduct.index')->with(compact('category','barang'));
    }

    public function category($request)
    {
        $category = DB::select('SELECT * FROM category');

        $barang = DB::select("SELECT * FROM barang WHERE id_category = (SELECT id FROM category WHERE slug = '".$request."' LIMIT 0,1)");
        return view('frontend.halproduct.productByCategory', compact('category','barang'));
    }
}
