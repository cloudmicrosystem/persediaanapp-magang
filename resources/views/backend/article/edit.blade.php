@extends('backend.layouts.master')
@section('title')
    Artikel | Morfeen
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
                            <h3 class="card-title">Form Artikel</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="quickForm" method="POST" action="{{ url('article', [$article->id]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option><b>{{ $article->catarticle->nama }}</b></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Judul </label>
                                    <input type="text" name="judul" value="{{ $article->judul }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi </label>
                                    <textarea name="deskripsi" class="form-control">{{ $article->deskripsi }}</textarea>
                                </div>
                                @if ($article->gambar_article)
                                    <img src="{{ asset('images/artikel/'. $article->gambar_article) }}" alt="" width=150px height=auto>
                                @endif
                                <div class="form-group">
                                    <input type="file" name="gambar_article" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Sumber Pustaka </label>
                                    <textarea name="sumber" class="form-control">{{ $article->sumber }}</textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ url ('article')}}" class="btn btn-primary">Kembali</a>
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
