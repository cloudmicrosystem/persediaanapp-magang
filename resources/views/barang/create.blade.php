@extends('layouts.master')

@section('content')
    <br>
    <form method="POST" action="{{ url('barang') }}">
        @csrf
        Code : <input type="text" name="code_barang>" ><br>
        Nama : <input type="text" name="nama_barang" ><br>
        Harga : <input type="text" name="harga_barang" ><br>
        Ukuran : <input type="text" name="ukuran_barang" ><br>
        Deskripsi : <input type="text" name="deskripsi_barang" ><br>
        Gambar : <input type="text" name="gambar_barang" ><br>
        Created By : <input type="text" name="created_by" ><br>
        Updated By : <input type="text" name="update_by" ><br>
        <br>
        <button type="submit">SIMPAN</button>
    </form>
@endsection
