@extends('layouts.master')

@section('content')
    <br>
    <form method="POST" action="{{ url('vendor') }}">
        @csrf
        Nama : <input type="text" name="nama_vendor" ><br>
        Email : <input type="text" name="email_vendor" ><br>
        No Hp : <input type="text" name="no_hp_vendor" ><br>
        Alamat : <input type="text" name="alamat_vendor" ><br>
        Date Created : <input type="text" name="date_created" ><br>
        Created By : <input type="text" name="created_by" ><br>
        Date Updated : <input type="text" name="date_updated" ><br>
        Updated By : <input type="text" name="updated_by" ><br>
        <br>
        <button type="submit">SIMPAN</button>
    </form>
@endsection
