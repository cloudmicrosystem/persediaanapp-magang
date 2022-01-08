@extends('layouts.master')
@section('title')
Stok Barang
@endsection

@section('content')

    <div class="container-fluid">
        <div class="col-sm-9">
            <table class="table-bordered table">
                <br>
                <a class="btn btn-info" href="{{ url ('barang/create')}}">Tambah</a>
                <br>
                <br>
                <tr>
                    <th>Code</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Ukuran</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Date Created</th>
                    <th>Created By</th>
                    <th>Date Updated</th>
                    <th>Updated By</th>
                    <th colspan="2">Aksi</th>
                </tr>
                    @foreach ($master_barang as $key=>$value)
                        <tr>
                            <td>{{ $value->code_barang }}</td>
                            <td>{{ $value->nama_barang }}</td>
                            <td>{{ $value->harga_barang }}</td>
                            <td>{{ $value->ukuran_barang }}</td>
                            <td>{{ $value->deskripsi_barang }}</td>
                            <td>{{ $value->gambar_barang }}</td>
                            <td>{{ $value->date_created }}</td>
                            <td>{{ $value->created_by }}</td>
                            <td>{{ $value->date_updated }}</td>
                            <td>{{ $value->update_by }}</td>
                            <td><a class="btn btn-info" href="{{ url('barang/'.$value->id.'/edit') }}">Update</a></td></td>
                            <td>
                                <form action="{{ url('barang/'.$value->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger" type="submit">DELETE</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>
@endsection

{{-- Mengatur jarak table pakek container float --}}

