<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TransKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail_transbarang_keluar = DB::select('SELECT * FROM detail_transbarang_keluar');
        $users = DB::select('SELECT id,nama  FROM users');
        $barang = DB::select('SELECT id,nama_barang  FROM barang');

        return view('transkeluar.index')->with(compact('detail_transbarang_keluar', 'users', 'barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detail_transbarang_keluar = DB::select('SELECT * FROM detail_transbarang_keluar');
        $barang = DB::select('SELECT id,nama_barang  FROM barang');

        return view('transkeluar.index')->with(compact('detail_transbarang_keluar', 'barang'));
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

        DB::select("INSERT INTO dettail_transbarang_keluar
        (
            id_barang,
            nama_barang,
            qty,
            harga,
            diskon,
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
