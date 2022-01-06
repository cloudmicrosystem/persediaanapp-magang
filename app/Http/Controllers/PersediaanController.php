<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersediaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $master_barang = DB::select('SELECT * FROM master_barang');

        return view('barang.index')->with(compact('master_barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $master_barang = DB::select('SELECT * FROM master_barang');

        return view('barang.create')->with(compact('master_barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo '<pre>'; print_r($request->code_barang); die;
        DB::select("INSERT INTO master_barang(code_barang, nama_barang,harga_barang,ukuran_barang,deskripsi_barang, gambar_barang,
        date_created,created_by,date_updated,update_by)
        VALUE('$request->code_barang','$request->nama_barang','$request->harga_barang','$request->ukuran_barang','$request->deskripsi_barang','$request->gambar_barang','$request->date_created','$request->created_by','$request->date_updated','$request->update_by')");

        return redirect('barang');
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
        $master_barang = DB::select('SELECT * FROM master_barang WHERE id =?', [$id]);

        return view('barang.edit')->with(compact('master_barang'));
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
        DB::select("UPDATE master_barang SET code_barang='$request->code_barang', nama_barang='$request->nama_barang', harga_barang='$request->harga_barang', ukuran_barang='$request->ukuran_barang', deskripsi_barang='$request->deskripsi_barang',gambar_barang='$request->gambar_barang', date_created='$request->date_created',created_by='$request->created_by', date_updated='$request->date_updated',update_by='$request->update_by'
        WHERE id=$id");

        return redirect('barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::select("DELETE FROM master_barang WHERE id=$id");

        return redirect('barang');
    }
}
