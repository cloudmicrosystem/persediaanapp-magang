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
                            <div class="form-group">
                                <label>Nama vendor</label>
                                <input type="text" name="id_vendor" class="form-control">
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Code </label>
                                    <input type="number" name="code_barang" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama_barang" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="number" name="harga_barang" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ukuran</label>
                                    <input type="text" name="ukuran_barang" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <input type="text" name="deskripsi_barang" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="file" name="gambar_barang" class="form-control" accept="image/*">
                                </div>
                                <div class="form-group">
                                    <label>Created By</label>
                                    <input type="text" name="created_by" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Updated By</label>
                                    <input type="text" name="update_by" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Date Created</label>
                                    <input type="date" name="created_at" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Date Updated By</label>
                                    <input type="date" name="updated_at" class="form-control">
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
