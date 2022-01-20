@extends('layouts.master')
@section('title')
Stok Barang
@endsection

@section('content')

    <div class="container-fluid">
        <div class="col-sm-12">
            <table class="table-bordered table table-responsive">
                <a class="btn btn-info" href="{{ url ('barang/create')}}"><i class='fas fa-plus'></i></a>
                <br>
                <br>
                <tr>
                    <th>Code</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Ukuran</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Created By</th>
                    <th>Updated By</th>
                    <th>Date Created</th>
                    <th>Date Updated</th>
                    <th colspan="2">Aksi</th>
                </tr>
                    @foreach ($barang as $key=>$value)
                        <tr>
                            <td>{{ $value->code_barang }}</td>
                            <td>{{ $value->nama_barang }}</td>
                            <td>Rp {{ $value->harga_barang }} </td>
                            <td>{{ $value->ukuran_barang }}</td>
                            <td>{{ $value->deskripsi_barang }}</td>
                            <td><img src="{{ asset('storage/barang/'.$value->gambar_barang) }}" width=100px height=auto/></td>
                            <td>{{ $value->created_by }}</td>
                            <td>{{ $value->update_by }}</td>
                            <td>{{ $value->created_at }}</td>
                            <td>{{ $value->updated_at }}</td>
                            <td><a class="btn btn-info" href="{{ url('barang/'.$value->id.'/edit') }}"><i class='fas fa-edit'></a></td>
                            <td>
                                <form action="{{ url('barang/'.$value->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>
@endsection

{{-- Mengatur jarak table pakek container float --}}

