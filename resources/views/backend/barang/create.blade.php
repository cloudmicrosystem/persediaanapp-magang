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
                        <form id="quickForm" method="POST" action="{{ route('barang.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
                                    </div>
                                    <select class="custom-select" name="id_category" id="inputGroupSelect01">
                                        <option selected disabled><b>Pilih Kategori</b></option>
                                        @foreach ($category as $key => $value)
                                            <option value="{{ $value->id }}">{{ $value->nama_category }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nama </label>
                                    <input type="text" name="nama_barang" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>HPP </label>
                                    <input type="number" name="hpp" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Harga Jual </label>
                                    <input type="number" name="price" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi </label>
                                    <textarea name="deskripsi" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Ukuran </label>
                                    <input type="text" name="size" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Qty </label>
                                    <input type="number" name="qty" class="form-control" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Gambar</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="gambar_disply"
                                            id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Pilih Gambar</label>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ url ('barang')}}" class="btn btn-primary">Kembali</a>
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
