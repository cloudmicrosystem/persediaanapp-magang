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
                            <li class="breadcrumb-item active">Artikel</li>
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
                                <h3 class="card-title">Tambah Artikel</h3>
                            </div>
                            <form id="quickForm" method="POST" action="{{ route('article.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="exampleSelectRounded0" for="inputGroupSelect01">Kategori Artikel</label>
                                        <select class="custom-select" name="cat_article" id="inputGroupSelect01">
                                            <option selected disabled><b>Pilih Kategori</b></option>
                                            @foreach ($catarticle as $key => $value)
                                                <option value="{{ $value->id }}">{{ $value->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Judul Artikel</label>
                                        <input type="text" class="form-control" id="exampleInputBorder" name="judul" placeholder="Judul" requaired>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Deskripsi Artikel</label>
                                        <textarea type="text" class="form-control" id="exampleInputBorder" name="deskripsi" placeholder="Deskripsi Artikel" requaired></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Gambar Artikel</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile" name="gambar_article">
                                                <label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Sumber Artikel</label>
                                        <textarea type="text" class="form-control" id="exampleInputBorder" name="sumber" placeholder="Sumber Artikel" requaired></textarea>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{ url ('article')}}" class="btn btn-primary">Kembali</a>
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
