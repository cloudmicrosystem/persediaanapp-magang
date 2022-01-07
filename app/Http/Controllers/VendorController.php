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
        $master_vendor = DB::select('SELECT * FROM master_vendor');

        return view('vendor.index')->with(compact('master_vendor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $master_vendor = DB::select('SELECT * FROM master_vendor');

        return view('vendor.create')->with(compact('master_vendor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::select(" INSERT INTO master_vendor (nama_vendor,email_vendor,no_hp_vendor,alamat_vendor,date_created,created_by,date_updated,updated_by)
        VALUE('$request->nama_vendor','$request->email_vendor','$request->no_hp_vendor','$request->alamat_vendor','$request->date_created','$request->created_by','$request->date_updated','$request->updated_by')");

        return redirect('vendor');
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
        $master_vendor = DB::select('SELECT * FROM master_vendor WHERE id =?', [$id]);

        return view('vendor.edit')->with(compact('master_vendor'));
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
        DB::select("UPDATE master_vendor SET

        nama_vendor='$request->nama_vendor',
        email_vendor='$request->email_vendor',
        no_hp_vendor='$request->no_hp_vendor',
        alamat_vendor='$request->alamat_vendor',
        date_created='$request->date_created',
        created_by='$request->created_by',
        date_updated='$request->date_updated',
        updated_by='$request->updated_by'
        WHERE id=$id");

        return redirect('vendor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::select("DELETE FROM master_vendor WHERE id=$id");

        return redirect('vendor');
    }
}
