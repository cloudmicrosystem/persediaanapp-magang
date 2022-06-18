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

                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">{{ $title }}</h3>
                            </div>
                            <form id="quickForm"
                                @if(empty($barang['id'])) action="{{ url('add-edit-product') }}"
                                @else action="{{ url('add-edit-product/' . $barang['id']) }}"
                                @endif
                            method="POST" enctype="multipart/form-data"> @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Pilih Kategori</label>
                                        <select name="id_category" id="id_category" class="custom-select">
                                            <option selected disabled><b>Pilih Kategori</b></option>
                                            @foreach ($category as $key)
                                                <option value="{{ $key->id }}"
                                                    @if (!empty(@old('id_category')) && $key['id'] == old('id_category'))
                                                        selected=""
                                                    @elseif (!empty($barang['id_category']) && $barang['id_category'] == $key['id'])
                                                        selected=""
                                                    @endif
                                                    >{{ $key->nama_category }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Code Product</label>
                                        <input type="text" class="form-control" id="exampleInputBorder" name="code_barang" placeholder="Code Product"
                                            @if (!empty($barang['code_barang'])) value="{{ $barang['code_barang'] }}"
                                            @else value="{{ old('code_barang') }}"
                                            @endif
                                        >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Nama Product</label>
                                        <input type="text" class="form-control" id="exampleInputBorder" name="nama_barang" placeholder="Nama Product"
                                            @if (!empty($barang['nama_barang'])) value="{{ $barang['nama_barang'] }}"
                                            @else value="{{ old('nama_barang') }}"
                                            @endif
                                        >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder">URL Product</label>
                                        <input type="text" class="form-control" id="exampleInputBorder" name="slug" placeholder="URL Product"
                                            @if (!empty($barang['slug'])) value="{{ $barang['slug'] }}"
                                            @else value="{{ old('slug') }}"
                                            @endif
                                        >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Harga Product</label>
                                        <input type="number" class="form-control" id="exampleInputBorder" name="price" placeholder="Harga Product"
                                            @if (!empty($barang['price'])) value="{{ $barang['price'] }}"
                                            @else value="{{ old('price') }}"
                                            @endif
                                        >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputBorder">Deskripsi Product</label>
                                        <textarea type="text" class="form-control" id="exampleInputBorder" name="deskripsi" placeholder="Deskripsi Product">
                                            @if (!empty($barang['deskripsi'])) {{ $barang['deskripsi'] }}
                                            @else {{ old('deskripsi') }}
                                            @endif
                                        </textarea>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="trending" id="exampleCheck1" value="Yes"
                                            @if (!empty($barang['trending']) && $barang['trending'] == $barang)
                                                checked = ""
                                            @endif
                                        >
                                        <label class="form-check-label" >Trending Product</label>
                                    </div><br>
                                    @if ($barang->gambar_disply)
                                    <img src="{{ asset('images/disply/'. $barang->gambar_disply) }}" alt="" width=150px height=auto>
                                    @endif
                                    <div class="form-group">
                                        <label for="exampleInputFile">Gambar Product</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input"  name="gambar_disply" id="gambar_disply"
                                                    @if (!empty($barang['gambar_disply'])) value="{{ $barang['gambar_disply'] }}"
                                                    @else value="{{ old('gambar_disply') }}"
                                                    @endif
                                                >
                                                <label for="exampleInputFile" class="custom-file-label">Pilih Gambar</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
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
