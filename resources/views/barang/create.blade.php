@extends('layouts.master')

@section('content')
    <br>
    <form method="POST" action="{{ url('contoh') }}">
        @csrf
        Nama : <input type="text" name="nama_barang"><br>
        Harga : <input type="text" name="harga_barang"><br>
        Stock : <input type="text" name="stok_barang"><br>
        ID Kategori : <input type="text" name="id_kategori"><br>
        Keterangan : <input type="text" name="keterangan"><br>
        Gambar : <input type="text" name="gambar"><br>
        Created at : <input type="text" name="created_at"><br>
        Updated at : <input type="text" name="updated_at"><br>
        Kategori : <input type="text" name="jenis_kategori"><br>
        <br>
        <button type="submit">SIMPAN</button>
    </form>
@endsection
