@extends('admin.layout.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Product</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit/Update Product</h3>
                            </div>
                            <form id="quickForm" method="POST" action="{{ url('barang', [$barang->id]) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="exampleSelectRounded0" for="inputGroupSelect01">Kategori Artikel</label>
                                        <select class="custom-select" name="id_category" id="inputGroupSelect01">
                                            <option><b>{{ $barang->category->nama_category }}</b></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Nama Product</label>
                                        <input type="text" class="form-control" id="exampleInputBorder" name="nama_barang" value="{{ $barang->nama_barang }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder">HPP Product</label>
                                        <input type="number" class="form-control" id="exampleInputBorder" name="hpp" value="{{ $barang->hpp }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Harga Product</label>
                                        <input type="number" class="form-control" id="exampleInputBorder" name="price" value="{{ $barang->price }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Deskripsi Product</label>
                                        <textarea type="text" class="form-control" id="exampleInputBorder" name="deskripsi">{{ $barang->deskripsi }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Ukuran Product</label>
                                        <input type="text" class="form-control" id="exampleInputBorder" name="size" value="{{ $barang->size }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Jumlah Product</label>
                                        <input type="text" class="form-control" id="exampleInputBorder" name="qty" value="{{ $barang->qty }}">
                                    </div>
                                    @if ($barang->gambar_disply)
                                        <img src="{{ asset('images/disply/'. $barang->gambar_disply) }}" alt="" width=150px height=auto>
                                    @endif
                                    <div class="form-group">
                                        <label for="exampleInputFile">Gambar Product</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile" name="gambar_disply">
                                                <label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="status" id="exampleCheck1">
                                        <label class="form-check-label" >Status Product</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="trending" id="exampleCheck1">
                                        <label class="form-check-label" >Trending</label>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{ url ('barang')}}" class="btn btn-primary">Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.card -->
    </div>
    <!-- /.content-wrapper -->
@endsection
