<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\DB;

class ContohController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Barang::all(); //sama saja dengan SELECT * FROM barang

        //Cara lain
        //SELECT * FROM barang where nama_barang = 'Tees Snow'
        //$data_condition = Barang::where("nama_barang", "=", "Tees Snow")->get();

        // return view('barang.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     * Digunakan untuk menampilkan daftar table atau data
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Barang;
        // return view('barang.create', compact('model'));
        //INSERT INTO barang (id_barang, nama_barang .....) VALUESS (.....)
        // $model = new Barang;
        // $model->nama_barang = "Jemper Colleage";
        // $model->harga_barang = "325000";
        // $model->stok_barang ="12";
        // $model->id_kategori = "2";
        // $model->keterangan = "Bahan Fleece";
        // $model->gambar = "";
        // $model->jenis_kategori = "Jemper";

        // if($model->save())
        //     return "Berhasil simpan data";
        // else
        //     return "Gagal menyimpan data";
    }

    /**
     * Store a newly created resource in storage.
     * Digunakan untuk menambah data baru kosongan
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Barang();
        $model->nama_barang = $request->nama_barang;
        $model->harga_barang = $request->harga_barang;
        $model->stok_barang = $request->stok_barang;
        $model->id_kategori = $request->id_kategori;
        $model->keterangan = $request->keterangan;
        $model->gambar = $request->gambar;
        $model->created_at = $request->created_at;
        $model->updated_at = $request->updated_at;
        $model->jenis_kategori = $request->jenis_kategori;
        $model->save();

        return redirect('contoh');
    }

    /**
     * Display the specified resource.
     * Digunakan untuk menyimpan
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**x
     * Show the form for editing the specified resource.
     * Digunakan untuk menampilkan detail
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Barang::find($id);
        //echo '<pre>'; print_r($id); die;
        //$model = DB::select('SELECT * FROM barang WHERE id_barang = 0'); //Find berartikan menemukan berdasarkan ID Primery key nya
        // return view('barang.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     * Digunakan untuk menampilkan form data yang sudah ada
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Barang::find($id);
        $model->nama_barang = $request->nama_barang;
        $model->harga_barang = $request->harga_barang;
        $model->stok_barang = $request->stok_barang;
        $model->id_kategori = $request->id_kategori;
        $model->keterangan = $request->keterangan;
        $model->gambar = $request->gambar;
        $model->created_at = $request->created_at;
        $model->updated_at = $request->updated_at;
        $model->jenis_kategori = $request->jenis_kategori;
        $model->save();

        return redirect('contoh');
    }

    /**
     * Remove the specified resource from storage.
     * Digunakan untuk menyimpan data yang sudah diedit
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Barang::find($id);
        $model->delete();

        return redirect('contoh');
        // Digunakn untuk menghapus suatu data
    }
}
