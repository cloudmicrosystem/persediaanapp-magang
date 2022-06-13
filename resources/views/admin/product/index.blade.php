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
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Kategori Artikel</h3>
                                <a class="btn btn-block btn-success" href="{{ url('barang/create') }}"
                                style="max-width: 150px; float:right; disply:inline-block">
                                <i>Tambah Product</i>
                            </a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered table-responsive">
                                    <thead>
                                        <tr style="text-align: center">
                                            <th>Kategori</th>
                                            <th>Nama</th>
                                            <th>Slug</th>
                                            <th>HPP</th>
                                            <th>Harga</th>
                                            <th>Deskripsi</th>
                                            <th>Ukuran</th>
                                            <th>Qty</th>
                                            <th>Gambar</th>
                                            <th>Status</th>
                                            <th>Trending</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($barang as $key=>$value)
                                            <tr>
                                                <td>{{ $value->category->nama_category }}</td>
                                                <td>{{ $value->nama_barang }}</td>
                                                <td>{{ $value->slug }} </td>
                                                <td>{{ $value->hpp }} </td>
                                                <td>{{ $value->price }} </td>
                                                <td>{{ $value->deskripsi }} </td>
                                                <td>{{ $value->size }}</td>
                                                <td>{{ $value->qty }} pcs</td>
                                                <td><img src="{{ asset('images/disply/' . $value->gambar_disply) }}"
                                                    alt="{{ ($value->nama_barang) }}"
                                                    width=150px height=auto />
                                                </td>
                                                <td>{{ $value->status }}</td>
                                                <td>{{ $value->trending }}</td>
                                                <td style="text-align: center">
                                                    <a class="btn btn-info"
                                                        href="{{ url('barang/' . $value->id . '/edit') }}"><i
                                                            class='fas fa-edit'></a></td>
                                                <td style="text-align: center">
                                                    <form action="{{ url('barang/' . $value->id) }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button class="btn btn-danger" type="submit"><i
                                                                class='fas fa-trash-alt'></i></button>
                                                    </form>
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
