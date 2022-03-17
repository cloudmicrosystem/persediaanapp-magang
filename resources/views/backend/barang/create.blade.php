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
                            <h3 class="card-title">Form Stok Barang</h3>
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
                                        @foreach ($barang as $key => $value)
                                            <option value="{{ $value->id_category }}">{{ $value->nama_category }}</option>
                                        @endforeach
                                        </>
                                    </select>
                                </div>
                                {{-- <div class="form-group">
                                    <label>Kategori </label> <br>
                                    <input type="text" name="id_category" class="form-control">
                                </div> --}}
                                <div class="form-group">
                                    <label>Nama </label>
                                    <input type="text" name="nama_barang" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Slug </label>
                                    <input type="text" name="slug" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>HPP </label>
                                    <input type="decimal" name="hpp" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Harga Jual </label>
                                    <input type="decimal" name="price" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi </label>
                                    <input type="text" name="deskripsi" class="form-control" required>
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
                                {{-- <div class="form-group">
                                    <label>Gambar </label>
                                    <input type="file" name="gambar_disply" class="form-control">
                                </div> --}}
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
