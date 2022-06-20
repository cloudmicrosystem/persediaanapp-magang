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
                @if ($errors->any())
                    <div class="alert alert-danger" style="margi-top:10px">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (Session::has('success_message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert"
                                style="margin-top: 10px;">{{ Session::get('success_message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                @if (Session::has('error_message'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert"
                                style="margin-top: 10px;">{{ Session::get('error_message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                <form id="quickForm" method="POST" action="{{ url('add-atribut/'. $barang['id']) }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">{{ $title }}</h3>
                                </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputBorder">Kode Product</label>
                                                    <input type="text" value="{{ $barang['kode_barang'] }}" type="text" class="form-control" id="exampleInputBorder" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputBorder">Nama Product </label>
                                                    <input type="text" value="{{ $barang['nama_barang'] }}" type="text" class="form-control" id="exampleInputBorder" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputBorder">Harga Product</label>
                                                    <input type="text" value="{{ $barang['harga'] }}" type="text" class="form-control" id="exampleInputBorder" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputBorder">Gambar Product</label>
                                                    @if ($barang->gambar_disply)
                                                    <img src="{{ asset('images/disply/'. $barang->gambar_disply) }}" alt="" width=300px height=auto>
                                                    @endif
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputBorder">Ukuran & Stock Product</label>
                                                        <div class="field_wrapper">
                                                            <input type="text" name="ukuran[]" id="ukuran" value="" name="ukuran[]" style="width: 120px" placeholder="Ukuran" required="">
                                                            <input type="number" name="stock[]" id="stock" value="" name="stock[]" style="width: 120px" placeholder="Stock" required="">
                                                            <input type="text" name="sku[]" id="sku" value="" name="sku[]" style="width: 120px" placeholder="SKU" required="">
                                                            {{-- <a href="javascript:void(0);" class="add_button" title="Tambah Kolom">Tambah</a><br> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{ url ('barang')}}" class="btn btn-primary">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <form id="editAtribut" method="POST" action="{{ url('edit-atribut/'. $barang['id']) }}">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Ukuran & Stock {{ $barang->nama_barang }}</h3>
                        </div>
                        <div class="card-body">
                            <table id="product" class="table table-bordered table-hover">
                                <thead>
                                    <tr style="text-align: center">
                                        <th>Ukuran Product</th>
                                        <th>Stock Product</th>
                                        <th>SKU</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($barang['atribut'] as $key)
                                        <input type="text" style="display: none" name="id_atr[]" value="{{ $key['id'] }}">
                                        <tr style="text-align: center">
                                            <td>{{ $key['ukuran'] }}</td>
                                            <td>
                                                <input type="number" name="stock[]" value="{{ $key['stock'] }}" required="" style="text-align: center;">
                                            </td>
                                            <td>{{ $key['sku'] }}</td>
                                            <td>
                                                @if ($key['status']== 1)
                                                    <a class="updateAtributStatus" id="key-{{ $key['id'] }}"
                                                        id_atr="{{ $key['id'] }}"
                                                        href="javascript:void(0)">Active</a>
                                                @else
                                                    <a class="updateAtributStatus" id="key-{{ $key['id'] }}"
                                                        id_atr="{{ $key['id'] }}"
                                                        href="javascript:void(0)">Inactive</a>
                                                @endif
                                            </td>
                                            <td style="text-align: center">
                                                <a class="confirmDelete" name="atribut"
                                                    href="{{ url('delete-atribut/' . $key->id) }}"><i
                                                    class='fas fa-trash-alt'></i>
                                                </a>
                                            </td>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Edit Stock</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
