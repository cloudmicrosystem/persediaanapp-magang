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
        $users = DB::select('SELECT * FROM users');
        return view('user.index')->with(compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = DB::select('SELECT * FROM users');
        return view('user.create')->with(compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::select("INSERT INTO users
        (
            nama,
            alamat,
            email,
            no_hp,
            username,
            PASSWORD,
            created_by,
            updated_by,
            created_at,
            updated_at

            )
        VALUE(
            '$request->nama',
            '$request->alamat',
            '$request->email',
            '$request->no_hp',
            '$request->username',
            '$request->password',
            '$request->created_by',
            '$request->updated_by',
            '$request->created_at',
            '$request->updated_at'
             )");

        return redirect('user')->with('toast_success', 'Data Berhasil Ditambah');
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
        $users = DB::select('SELECT * FROM users WHERE id =?', [$id]);

        return view('user.edit')->with(compact('users'));
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
        DB::select("UPDATE users SET
        nama='$request->nama',
        alamat='$request->alamat',
        email='$request->email',
        no_hp = '$request->no_hp',
        username='$request->username',
        password ='$request->password',
        created_by='$request->created_by',
        updated_by='$request->updated_by',
        created_at='$request->created_at',
        updated_at='$request->updated_at'
        WHERE id=$id
        ");

        return redirect('user')->with('toast_success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::select("DELETE FROM users WHERE id=$id");

       return redirect('user')->with('toast_success', 'Data Berhasil Dihapus');
    }
}
