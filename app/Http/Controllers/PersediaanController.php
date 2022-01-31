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
        $barang = DB::select('SELECT * FROM barang');
        $vendor = DB::select('SELECT id,nama_vendor  FROM vendor');
        return view('barang.index')->with(compact('barang','vendor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = DB::select('SELECT * FROM barang');
        $vendor = DB::select('SELECT id,nama_vendor  FROM vendor');
        return view('barang.create')->with(compact('barang','vendor'));
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
        $gambar_barang = null;

        // Validation
        $request->validate([
            'gambar_barang' => 'mimes:png,jpg,jpeg|max:6144 '
        ]);

        if($request->file('gambar_barang')) {
            $file = $request->file('gambar_barang');
            $gambar_barang = time().'_'.$file->getClientOriginalName();

            // File upload location
            $location = 'storage/barang';

            // Upload file
            $file->move($location,$gambar_barang);
            // die;
        }else{
            $gambar_barang = null;
        }

        DB::select("INSERT INTO barang(
            code_barang,
            nama_barang,
            harga_barang,
            ukuran_barang,
            deskripsi_barang,
            gambar_barang,
            created_by,
            update_by,
            id_vendor,
            created_at,
            updated_at
            )
        VALUE(
        '$request->code_barang',
        '$request->nama_barang',
        '$request->harga_barang',
        '$request->ukuran_barang',
        '$request->deskripsi_barang',
        '$gambar_barang',
        '$request->created_by',
        '$request->update_by',
        '$request->id_vendor',
        '$request->created_at',
        '$request->updated_at'
        )");

        return redirect('barang')->with('toast_success', 'Data Berhasil Disimpan');
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
        $barang = DB::select('SELECT * FROM barang WHERE id =?', [$id]);

        return view('barang.edit')->with(compact('barang'));
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
        // echo '<pre>'; print_r($request->code_barang); die;
        $barang = DB::select('SELECT * FROM barang WHERE id=?', [$id]);
        $vendor = DB::select('SELECT id,nama_vendor  FROM vendor WHERE id=?', [$id]);
        // dd($master_barang);
        // Validation
        $request->validate([
            'gambar_barang' => 'mimes:png,jpg,jpeg|max:6144 '
        ]);

        if($request->file('gambar_barang')) {
            $file = $request->file('gambar_barang');
            $gambar_barang = time().'_'.$file->getClientOriginalName();

            // File upload location
            $location = 'storage/barang';

            // Upload file
            $file->move($location,$gambar_barang);
            // die;
        }else{
            $gambar_barang = $barang[0]->gambar_barang;
        }

        DB::select("UPDATE barang SET
        code_barang='$request->code_barang',
        nama_barang='$request->nama_barang',
        harga_barang='$request->harga_barang',
        ukuran_barang='$request->ukuran_barang',
        deskripsi_barang='$request->deskripsi_barang',
        gambar_barang='$gambar_barang',
        created_by='$request->created_by',
        update_by='$request->update_by',
        id_vendor='$request->id_vendor',
        created_at='$request->created_at',
        updated_at='$request->updated_at'
        WHERE id=$id
        ");

        return redirect('barang')->with('toast_success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::select("DELETE FROM barang WHERE id=$id");

        return redirect('barang')->with('toast_success', 'Data Berhasil Dihapus');
    }
}
