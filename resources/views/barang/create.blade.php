@extends('layouts.master')
@section('title')
    Tambah Stok Barang
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
                            <h3 class="card-title">Form Stok Barang</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="quickForm" method="POST" action="{{ route('barang.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Category</label>
                                    <input type="text" name="id_category" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama_barang" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <input type="text" name="deskripsi" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="decimal" name="price" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ukuran</label>
                                    <input type="text" name="size" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Qty</label>
                                    <input type="text" name="qty" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="file" name="gambar_barang" class="form-control" accept="image/*">
                                </div>
                                <div class="form-group">
                                    <label>Status Stok</label>
                                    <input type="number" name="status_stok" class="form-control">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    @endsection
