@extends('layouts.master')
@section('title')
    Update Stok Barang
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
                        <form id="quickForm" method="POST" action="{{ url('barang', [$barang[0]->id]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Vendor</label>
                                    <input type="text" name="id_vendor" value="{{ $barang[0]->id_vendor }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Code </label>
                                    <input type="number" name="code_barang" value="{{ $barang[0]->code_barang }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama_barang" value="{{ $barang[0]->nama_barang }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="number" name="harga_barang" value="{{ $barang[0]->harga_barang }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ukuran</label>
                                    <input type="text" name="ukuran_barang" value="{{ $barang[0]->ukuran_barang }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <input type="text" name="deskripsi_barang" value="{{ $barang[0]->deskripsi_barang }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="file" name="gambar_barang" accept="image/*"
                                        value="{{ $barang[0]->gambar_barang }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Created By</label>
                                    <input type="text" name="created_by" value="{{ $barang[0]->created_by }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Updated By</label>
                                    <input type="text" name="update_by" value="{{ $barang[0]->update_by }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Date Created</label>
                                    <input type="text" name="created_at" value="{{ $barang[0]->created_at }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Date Updated</label>
                                    <input type="text" name="updated_at" value="{{ $barang[0]->updated_at }}"
                                        class="form-control">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
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
