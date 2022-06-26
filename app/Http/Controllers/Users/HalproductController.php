<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class HalproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Kategori::where('status','1')->get();
        $barang = Barang::where('status','1')->get();

        return view('frontend.halproduct.index')->with(compact('category','barang'));
    }

    public function category($slug)
    {
        // $category = DB::select('SELECT * FROM category');
        // $barang = DB::select("SELECT * FROM barang WHERE id_kategori = (SELECT id FROM category WHERE slug = '".$request."' LIMIT 0,1)");


        return view('frontend.halproduct.productByCategory');
    }
}
