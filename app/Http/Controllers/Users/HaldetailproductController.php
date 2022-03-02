<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HaldetailproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.haldetailproduct.index');
    }

    public function barang($request)
    {

        $barang = DB::select('SELECT * FROM barang');

        $newBarang = array();
        foreach ($barang as $key => $value) {
            $newValue = json_decode(json_encode($value), true);
            $gambarBarang =  json_decode(json_encode(DB::select('SELECT * FROM gambar WHERE id_barang ='.$value->id)), true);

            $data = array_merge($newValue, ['gambar' => $gambarBarang]);
            // echo '<pre>'; print_r($data); die;
            array_push($newBarang, $data);
        }

        return view('frontend.haldetailproduct.index', compact('barang','newBarang'));
    }
}
