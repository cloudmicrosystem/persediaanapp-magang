<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendor = DB::select('SELECT * FROM vendor');

        return view('vendors.index')->with(compact('vendor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vendor = DB::select('SELECT * FROM vendor');

        return view('vendors.create')->with(compact('vendor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::select(" INSERT INTO vendor
         (
            nama_vendor,
            email_vendor,
            no_hp_vendor,
            alamat_vendor,
            created_by,
            updated_by,
            created_at,
            updated_at
            )
        VALUE
        ('$request->nama_vendor',
        '$request->email_vendor',
        '$request->no_hp_vendor',
        '$request->alamat_vendor',
        '$request->created_by',
        '$request->updated_by',
        '$request->created_at',
        '$request->updated_at'
        )");

        return redirect('vendors')->with('toast_success', 'Data Berhasil Ditambah');
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
        $vendor = DB::select('SELECT * FROM vendor WHERE id =?', [$id]);

        return view('vendors.edit')->with(compact('vendor'));
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
        DB::select("UPDATE vendor SET

        nama_vendor='$request->nama_vendor',
        email_vendor='$request->email_vendor',
        no_hp_vendor='$request->no_hp_vendor',
        alamat_vendor='$request->alamat_vendor',
        created_by='$request->created_by',
        updated_by='$request->updated_by',
        created_at='$request->created_at',
        updated_at='$request->updated_at'

        WHERE id=$id");

        return redirect('vendors')->with('toast_success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::select("DELETE FROM vendor WHERE id=$id");

        return redirect('vendors')->with('toast_success', 'Data Berhasil Dihapus');
    }
}
