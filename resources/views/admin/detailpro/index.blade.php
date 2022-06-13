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
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Gambar Detail Product</h3>
                                <a class="btn btn-block btn-success" href="{{ url ('detailpro/create')}}"
                                style="max-width: 150px; float:right; disply:inline-block">
                                <i>Tambah Gambar</i>
                            </a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr style="text-align: center">
                                            <th>Nama</th>
                                            <th>Gambar</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($newBarang as $key=>$value)
                                        <tr>
                                            <td>{{ $value['nama_barang'] }}</td>
                                            <td>
                                                @foreach ($value['gambar'] as $item)
                                                    <img src="{{ asset('images/katalog/' . $item['url_gambar']) }}"
                                                        alt="{{ $value['nama_barang'] }}" width="100px" height="100px" />
                                                @endforeach
                                            </td>
                                            <td><a class="btn btn-info" href="{{ url('detailpro/'. $value['id'] . '/edit') }}">
                                                <i class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <form action="{{ url('barang/' . $value['id']) }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="_method" id="DELETE">
                                                    <button class="btn btn-danger" type="submit">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <br>
                                {{-- {{ $category->links() }} --}}
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
