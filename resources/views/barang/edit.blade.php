@extends('layouts.master')

@section('content')
    <br>
    <form method="POST" action="{{ url('contoh/' .$model->id) }}">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        Nama : <input type="text" name="nama_barang" value="{{ $model->nama_barang }}"><br>
        Harga : <input type="text" name="harga_barang" value="{{ $model->harga_barang }}"><br>
        Stock : <input type="text" name="stok_barang" value="{{ $model->stok_barang }}"><br>
        ID Kategori : <input type="text" name="id_kategori" value="{{ $model->id_kategori }}"><br>
        Keterangan : <input type="text" name="keterangan" value="{{ $model->keterangan }}"><br>
        Gambar : <input type="text" name="gambar" value="{{ $model->gambar }}"><br>
        Created at : <input type="text" name="created_at" value="{{ $model->created_at }}"><br>
        Updated at : <input type="text" name="updated_at" value="{{ $model->updated_at }}"><br>
        Kategori : <input type="text" name="jenis_kategori" value="{{ $model->jenis_kategori }}"><br>
        <br>
        <button type="submit">SIMPAN</button>
    </form>
@endsection
