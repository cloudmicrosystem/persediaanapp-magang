<?php

namespace App\Http\Controllers\Admin;

use stdClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class PersediaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = DB::select(
            'SELECT barang.*,
                (SELECT nama_category FROM category WHERE id = barang.id_category)
                    AS nama_category FROM barang ORDER BY id desc'
        );

        // $gambar = DB::select('SELECT * FROM gambar WHERE id_barang =.$barang->id');

        // $newBarang = array();
        // foreach ($barang as $key => $value) {
        //     $newValue = json_decode(json_encode($value), true);
        //     $gambarBarang =  json_decode(json_encode(DB::select('SELECT * FROM gambar WHERE id_barang ='.$value->id)), true);

        //     $data = array_merge($newValue, ['gambar' => $gambarBarang]);
        //     // echo '<pre>'; print_r($data); die;
        //     array_push($newBarang, $data);
        // }

        return view('backend.barang.index')->with(compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = DB::select('SELECT * FROM category');

        $barang = DB::select('SELECT id as id_category, nama_category FROM category ORDER BY id');
        return view('backend.barang.create')->with(compact('barang','category'));
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
        $gambar_disply = null;

        // Validation
        $request->validate([
            'gambar_disply' => 'mimes:png,jpg,jpeg|max:6144 '
        ]);

        if($request->file('gambar_disply')) {
            $file = $request->file('gambar_disply');
            $gambar_disply = time().'_'.$file->getClientOriginalName();

            // File upload location
            $location = 'images/disply';

            // Upload file
            $file->move($location,$gambar_disply);
            // die;
        }else{
            $gambar_disply = null;
        }

        DB::select("INSERT INTO barang(
            id_category,
            nama_barang,
            slug,
            hpp,
            price,
            deskripsi,
            size,
            qty,
            gambar_disply
            )
        VALUE(
        '$request->id_category',
        '$request->nama_barang',
        '$request->slug',
        '$request->hpp',
        '$request->price',
        '$request->deskripsi',
        '$request->size',
        '$request->qty',
        '$gambar_disply'
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

        return view('backend.barang.edit')->with(compact('barang'));
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
        // $vendor = DB::select('SELECT id,nama_vendor  FROM vendor WHERE id=?', [$id]);
        // dd($master_barang);
        // Validation
        $request->validate([
            'gambar_disply' => 'mimes:png,jpg,jpeg|max:6144 '
        ]);

        if($request->file('gambar_disply')) {
            $file = $request->file('gambar_disply');
            $gambar_disply = time().'_'.$file->getClientOriginalName();

            // File upload location
            $location = 'images/disply';

            // Upload file
            $file->move($location,$gambar_disply);
            // die;
        }else{
            $gambar_disply = $barang[0]->gambar_disply;
        }

        DB::select("UPDATE barang SET
        id_category='$request->id_category',
        nama_barang='$request->nama_barang',
        slug='$request->slug',
        hpp='$request->hpp',
        price='$request->price',
        deskripsi='$request->deskripsi',
        size='$request->size',
        qty='$request->qty',
        '$gambar_disply'
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
