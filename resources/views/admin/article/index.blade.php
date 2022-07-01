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
                    <div class="col-12">
                        @if (Session::has('success_message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert"
                                style="margin-top: 10px;">{{ Session::get('success_message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Artikel</h3>
                                <a class="btn btn-block btn-success" href="{{ url('/add-edit-article') }}"
                                    style="max-width: 150px; float:right; disply:inline-block">
                                    <i>Tambah Artikel</i>
                                </a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="product" class="table table-bordered table-responsive">
                                    <thead>
                                        <tr style="text-align: center">
                                            <th>No.</th>
                                            <th>Kategori Artikel</th>
                                            <th>Judul Artikel</th>
                                            <th>URL Artikel</th>
                                            <th>Deskripsi Artikel</th>
                                            <th>Gambar Artikel</th>
                                            <th>Sumber Artikel</th>
                                            <th>Status Artikel</th>
                                            <th>Apakah Trending</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($article as $key => $value)
                                            <tr>
                                                <td style="text-align: center">{{ $article->firstItem() + $key }}</td>
                                                <td>{{ $value->catarticle->nama_cat }}</td>
                                                <td>{{ $value->judul_artikel }}</td>
                                                <td>{{ $value->slug }}</td>
                                                <td>{{ $value->deskripsi_artikel }}</td>
                                                <td><img src="{{ asset('images/artikel/' . $value->gambar_artikel) }}"
                                                        alt="{{ $value->judul_artikel }}" width=150px height=auto />
                                                </td>
                                                <td>{{ $value->sumber_artikel }}</td>
                                                <td>
                                                    @if($value->status == 1)
                                                        <div class="p-1 mb-1 bg-success text-white" style="text-align: center">Aktif</div>
                                                    @else
                                                        <div class="p-1 mb-1 bg-danger text-white" style="text-align: center">Non Aktif</div>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($value->featured == "Yes")
                                                        <div class="p-1 mb-1 bg-success text-white" style="text-align: center">Iya</div>
                                                    @else
                                                        <div class="p-1 mb-1 bg-danger text-white" style="text-align: center">Tidak</div>
                                                    @endif
                                                </td>

                                                <td style="text-align: center"><a title="Edit Artikel"
                                                        href="{{ url('add-edit-article/' . $value->slug) }}"><i
                                                            class='fas fa-edit'></i></a></td>
                                                </td>
                                                </td>
                                                <td style="text-align: center"> <a class="confirmDelete" name="artikel"
                                                        href="{{ url('delete-article/' . $value->slug) }}"><i
                                                            class='fas fa-trash-alt'></i></a></td>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="fa-pull-left pt-2">
                                    Tampilkan data no
                                    {{ $article->firstItem() }}
                                    sampai no
                                    {{ $article->lastItem() }}
                                    dari
                                    {{ $article->total() }} data
                                </div>
                                <div class="fa-pull-right pt-2">
                                    {{ $article->links() }}
                                </div>
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
