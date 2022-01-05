@extends('layouts.master')
@section('title')
CRUD
@endsection

<body>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-1">
              <div class="col-sm-6">
                <h1 class="m-0">CRUD Stok Barang</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
</body>

@section('content')
    <table class="table-bordered table">
        <br>
        <a class="btn btn-info" href="{{ url ('contoh/create')}}">Tambah</a>
        <br>
        <br>
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stock</th>
            <th>ID Kategori</th>
            <th>Keterangan</th>
            <th>Gambar</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Kategori</th>
            <th colspan="2">Aksi</th>
        </tr>
            @foreach ($data as $key=>$value)
                <tr>
                    <td>{{ $value->nama_barang }}</td>
                    <td>{{ $value->harga_barang }}</td>
                    <td>{{ $value->stok_barang }}</td>
                    <td>{{ $value->id_kategori }}</td>
                    <td>{{ $value->keterangan }}</td>
                    <td>{{ $value->gambar }}</td>
                    <td>{{ $value->created_at }}</td>
                    <td>{{ $value->updated_at }}</td>
                    <td>{{ $value->jenis_kategori }}</td>
                    <td><a class="btn btn-info" href="{{ url('contoh/'.$value->id.'/edit') }}">Update</a></td></td>
                    <td>
                        <form action="{{ url('contoh/'.$value->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger" type="submit">DELETE</button>
                        </form>
                    </td>
                </tr>
            @endforeach
    </table>
@endsection

{{-- Mengatur jarak table pakek container float --}}

