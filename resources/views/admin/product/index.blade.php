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
                                <h3 class="card-title">Product</h3>
                                <a class="btn btn-block btn-success" href="{{ url('/add-edit-product') }}"
                                    style="max-width: 150px; float:right; disply:inline-block">
                                    <i>Tambah Product</i>
                                </a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="product" class="table table-bordered table-responsive">
                                    <thead>
                                        <tr style="text-align: center">
                                            <th>Kategori Product</th>
                                            <th>Code Product</th>
                                            <th>Nama Product</th>
                                            <th>URL Product</th>
                                            <th>Harga Product</th>
                                            <th>Deskripsi Product</th>
                                            <th>Status Product</th>
                                            <th>Apakah Trending</th>
                                            <th>Gambar Prouduct</th>
                                            <th colspan="4">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($barang as $key => $value)
                                            <tr>
                                                <td>{{ $value->category->nama_kategori }}</td>
                                                <td>{{ $value->kode_barang }}</td>
                                                <td>{{ $value->nama_barang }}</td>
                                                <td>{{ $value->slug }}</td>
                                                <td>{{ $value->harga }}</td>
                                                <td>{{ $value->deskripsi }}</td>
                                                <td>
                                                    @if($value->status == 1)
                                                        Aktif
                                                    @else
                                                        Nonaktif
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($value->trending == "Yes")
                                                        Iya
                                                    @else
                                                        Tidak
                                                    @endif
                                                </td>
                                                <td><img src="{{ asset('images/disply/' . $value->gambar_disply) }}"
                                                        alt="{{ $value->nama_barang }}" width=150px height=auto />
                                                </td>
                                                <td style="text-align: center"><a title="Edit Product"
                                                        href="{{ url('add-edit-product/' . $value->id) }}"><i
                                                            class='fas fa-edit'></i></a></td>
                                                </td>
                                                <td style="text-align: center"><a title="Tambah Atribut"
                                                    href="{{ url('add-atribut/' . $value->id) }}"><i
                                                        class='fas fa-plus'></i></a></td>
                                                <td style="text-align: center"><a title="Tambah Gambar"
                                                    href="{{ url('add-image/' . $value->id) }}"><i
                                                        class='fas fa-plus-circle'></i></a></td>
                                            </td>
                                                <td style="text-align: center"> <a class="confirmDelete" name="product"
                                                        href="{{ url('delete-product/' . $value->id) }}"><i
                                                            class='fas fa-trash-alt'></i></a></td>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <br>
                                {{ $barang->links() }}
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
