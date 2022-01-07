<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $master_user = DB::select('SELECT * FROM master_user');
        return view('user.index')->with(compact('master_user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $master_user = DB::select('SELECT * FROM master_user');
        return view('user.create')->with(compact('master_user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::select("INSERT INTO master_user(nama,alamat,email,no_hp,jabatan,username,PASSWORD,date_created,created_by,date_updated,update_by)
        VALUE('$request->nama','$request->alamat','$request->email','$request->no_hp','$request->jabatan','$request->username',
        '$request->password','$request->date_created','$request->created_by','$request->date_updated','$request->update_by')");

        return redirect('user');
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
        $master_user = DB::select('SELECT * FROM master_user WHERE id =?', [$id]);

        return view('user.edit')->with(compact('master_user'));
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
        DB::select("UPDATE master_user SET
        nama='$request->nama',
        alamat='$request->alamat',
        email='$request->email',
        no_hp = '$request->no_hp',
        jabatan ='$request->jabatan',
        username='$request->username',
        password ='$request->password',
        date_created='$request->date_created',
        created_by='$request->created_by',
        date_updated='$request->date_updated',
        update_by='$request->update_by'
        WHERE id=$id
        ");

        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::select("DELETE FROM master_user WHERE id=$id");

       return redirect('user');
    }
}
