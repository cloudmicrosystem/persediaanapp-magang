@extends('backend.layouts.master')
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
                                    <label>Kategori </label>
                                    <select class="selectpicker form-control " name="" id=""></select>
                                    {{-- <input type="text" name="id_category" value="{{ $barang[0]->id_category }}"
                                        class="form-control"> --}}
                                </div>
                                <div class="form-group">
                                    <label>Nama </label>
                                    <input type="text" name="nama_barang" value="{{ $barang[0]->nama_barang }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Slug </label>
                                    <input type="text" name="slug" value="{{ $barang[0]->slug }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>HPP </label>
                                    <input type="decimal" name="hpp" value="{{ $barang[0]->hpp }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Harga Jual </label>
                                    <input type="decimal" name="price" value="{{ $barang[0]->price }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi </label>
                                    <input type="text" name="deskripsi" value="{{ $barang[0]->deskripsi }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ukuran </label>
                                    <input type="text" name="size" value="{{ $barang[0]->size }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Qty </label>
                                    <input type="number" name="qty" value="{{ $barang[0]->qty }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="file" name="gambar_disply" accept="image/*"
                                        value="{{ $barang[id]->gambar_disply }}" class="form-control">
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
