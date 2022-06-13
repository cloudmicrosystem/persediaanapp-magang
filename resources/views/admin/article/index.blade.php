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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Database Artikel</h3>
                                <a class="btn btn-block btn-success" href="{{ url ('article/create')}}"
                                    style="max-width: 150px; float:right; disply:inline-block">
                                    <i>Tambah Artikel</i>
                                </a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                       <tr>
                                            <th>Kategori</th>
                                            <th>Judul</th>
                                            <th>Slug</th>
                                            <th>Deskripsi</th>
                                            <th>Gambar Artikel</th>
                                            <th>Sumber Pustaka</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($article as $key=>$value)
                                        <tr>
                                            <td>{{ $value->catarticle->nama }}</td>
                                            <td>{{ $value->judul }}</td>
                                            <td>{{ $value->slug }}</td>
                                            <td>{{ $value->deskripsi }}</td>
                                            <td><img src="{{ asset('images/artikel/' . $value->gambar_article) }}"
                                                alt="{{ ($value->judul) }}"
                                                width=150px height=auto /></td>
                                            <td>{{ $value->sumber }}</td>
                                            <td><a class="btn btn-info" href="{{ url('article/'.$value->id.'/edit') }}"><i class='fas fa-edit'></i></a></td></td>
                                            <td>
                                                <form action="{{ url('article/'.$value->id) }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <br>
                                {{ $article->links() }}
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>
    <!-- /.content-wrapper -->
@endsection
