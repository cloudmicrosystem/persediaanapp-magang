@extends('layouts.master')

@section('content')
    <br>
    <form method="POST" action="{{ url('user') }}">
        @csrf
        Nama : <input type="text" name="nama" ><br>
        Alamat : <input type="text" name="alamat" ><br>
        Email : <input type="text" name="email" ><br>
        No Hp : <input type="text" name="no_hp" ><br>
        Jabatan : <input type="text" name="jabatan" ><br>
        Username : <input type="text" name="username" ><br>
        Password : <input type="text" name="password" ><br>
        Date Created : <input type="text" name="date_created" ><br>
        Created By : <input type="text" name="created_by" ><br>
        Date Updated : <input type="text" name="date_updated" ><br>
        Updated By : <input type="text" name="update_by" ><br>
        <br>
        <button type="submit">SIMPAN</button>
    </form>
@endsection
