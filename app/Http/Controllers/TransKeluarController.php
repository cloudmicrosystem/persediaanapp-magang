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
        DB::select(" INSERT INTO detail_transbarang_keluar
         (
            id_barang,
            nama_barang,
            qty,
            harga,
            diskon,
            keterangan,
            created_by,
            updated_by,
            created_at,
            updated_at
            )
        VALUE
        ('$request->id_barang',
        '$request->nama_barang',
        '$request->qty',
        '$request->harga',
        '$request->diskon',
        '$request->keterangan',
        '$request->created_by',
        '$request->updated_by',
        '$request->created_at',
        '$request->updated_at'
        )");

        return redirect('transkeluar')->with('toast_success', 'Data Berhasil Ditambah');
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
