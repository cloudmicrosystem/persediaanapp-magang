<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Barang;


class TransMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail_transbarang_masuk = DB::select('SELECT * FROM detail_transbarang_masuk');
        $vendor = DB::select('SELECT id,nama_vendor  FROM vendor');
        $barang = DB::select('SELECT id,nama_barang  FROM barang');
        return view('transmasuk.index')->with(compact('detail_transbarang_masuk' , 'vendor', 'barang'));



    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $detail_transbarang_masuk = DB::select('SELECT * FROM detail_transbarang_masuk');
        return view('transmasuk.create')->with(compact('detail_transbarang_masuk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama_barang = DB::select('SELECT nama_barang FROM barang WHERE id = "'.$request->barang.'" limit 0,1')[0]->nama_barang;

        DB::select("INSERT INTO detail_transbarang_masuk
        (
            id_barang,
            id_vendor
            nama_barang,
            qty,
            harga,
            keterangan,
            created_at,
            updated_at
            )
        VALUE(
            '$request->barang',
            '$nama_barang',
            '$request->qty',
            '$request->harga',
            '$request->keterangan',
            '$request->id_vendor',
            NOW(),
            NOW()
             )");

        return redirect()->back()->with('toast_success', 'Data Sukses Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
