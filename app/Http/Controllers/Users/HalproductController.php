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

        $newBarang = array();
        foreach ($barang as $key => $value) {
            $newValue = json_decode(json_encode($value), true);
            $gambarBarang =  json_decode(json_encode(DB::select('SELECT * FROM gambar WHERE id_barang ='.$value->id)), true);

            $data = array_merge($newValue, ['gambar' => $gambarBarang]);
            // echo '<pre>'; print_r($data); die;
            array_push($newBarang, $data);
        }

        return view('frontend.halproduct.index')->with(compact('category','newBarang','barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
