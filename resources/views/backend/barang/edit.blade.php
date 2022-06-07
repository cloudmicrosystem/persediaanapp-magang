@extends('backend.layouts.master')
@section('title')
    Stock | Morfeen
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Product</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="quickForm" method="POST" action="{{ url('barang', [$barang->id]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option><b>{{ $barang->category->nama_category }}</b></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nama </label>
                                    <input type="text" name="nama_barang" value="{{ $barang->nama_barang }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>HPP </label>
                                    <input type="decimal" name="hpp" value="{{ $barang->hpp }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Harga Jual </label>
                                    <input type="decimal" name="price" value="{{ $barang->price }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi </label>
                                    <input type="text" name="deskripsi" value="{{ $barang->deskripsi }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ukuran </label>
                                    <input type="text" name="size" value="{{ $barang->size }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Qty </label>
                                    <input type="number" name="qty" value="{{ $barang->qty }}" class="form-control">
                                </div>
                                @if ($barang->gambar_disply)
                                    <img src="{{ asset('images/disply/'. $barang->gambar_disply) }}" alt="" width=150px height=auto>
                                @endif
                                <div class="form-group">
                                    <input type="file" name="gambar_disply" class="form-control">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ url ('barang')}}" class="btn btn-primary">Kembali</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    @endsection
