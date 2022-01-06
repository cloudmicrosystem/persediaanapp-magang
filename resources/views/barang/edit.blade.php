@extends('layouts.master')

@section('content')
    <br>
    {{-- @foreach ($master_barang as $key=>$value)
    <tr>
    </tr>
@endforeach --}}

<form method="POST" action="{{ url('barang', [$master_barang[0]->id]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    Code : <input type="text" name="code_barang" value="{{$master_barang[0]->code_barang}}"><br>
    Nama : <input type="text" name="nama_barang" value="{{$master_barang[0]->nama_barang}}"><br>
    Harga : <input type="text" name="harga_barang" value="{{$master_barang[0]->harga_barang}}"><br>
    Ukuran : <input type="text" name="ukuran_barang" value="{{$master_barang[0]->ukuran_barang}}"><br>
    Deskripsi : <input type="text" name="deskripsi_barang" value="{{$master_barang[0]->deskripsi_barang}}"><br>
    Gambar : <input type="text" name="gambar_barang" value="{{$master_barang[0]->gambar_barang}}"><br>
    Created By : <input type="text" name="created_by" value="{{$master_barang[0]->created_by}}"><br>
    Updated By : <input type="text" name="update_by" value="{{$master_barang[0]->update_by}}"><br>
    <br>
    <button type="submit">SIMPAN</button>
</form>
@endsection
