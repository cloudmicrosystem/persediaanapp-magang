@extends('layouts.master')
@section('title')
    Transaksi Keluar
@endsection

@section('content')
    <html lang="en">

    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    {{-- Modal --}}
    <div class="container">

        <form action="/action_page.php">
            <div class="form-group">
                <label>Customer</label>
                <br>
                <select name="users">
                    <option value="id">
                        Pilih Customer
                    </option>
                    @foreach ($users as $data)
                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                    @endforeach
                    <br>
                </select>
                <br><br>
                {{-- default --}}
                <label>Tanggal</label>
                <input type="date" class="form-control" name="update_add" value="2022-01-10">
                </p>
            </div>
            <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modelcreate">
                Add Item
            </button>
            <br>

            {{-- @include('transkeluar.create') --}}
            {{-- <form action="{{ route('transkeluar.store') }}" method="POST" enctype="multipart/form-data"> --}}
            {{-- {{ csrf_field() }} --}}
            <div class="modal fade" id="modelcreate">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Transaksi Keluar</h4>
                            <button type="button" claxs="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form action="{{ route('transkeluar.store') }}" method="POST">
                            {{ csrf_field() }}
                            <!-- Isi Modal -->
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <br>
                                    <select name="barang">
                                        <option value="id">
                                            Pilih Barang
                                        </option>
                                        @foreach ($barang as $data)
                                            <option value="{{ $data->id }}">{{ $data->nama_barang }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Qty</label>
                                    <input type="number" class="form-control" name="qty"
                                        placeholder="Masukkan Qty Barang">
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="number" class="form-control" name="harga"
                                        placeholder="Masukkan Harga Barang">
                                </div>
                                <div class="form-group">
                                    <label>Diskon</label>
                                    <input type="number" class="form-control" name="diskon"
                                        placeholder="Masukkan Diskon Barang">
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" class="form-control" name="keterangan"
                                        placeholder="Masukkan Keterangan Barang">
                                </div>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            {{-- </form> --}}

        </form>
    </div>


    {{-- Tabel --}}
    <div class="container-fluid">
        <div class="col-sm-40">
            <table class="table-bordered table table-responsive">
                <br>

                <tr>
                    <th>Nama Barang</th>
                    <th>Qty</th>
                    <th>Harga</th>
                    <th>Diskon</th>
                    <th>Keterangan</th>
                    <th>Date Created</th>
                    <th>Date Update</th>
                    {{-- <th colspan="2">Aksi</th> --}}
                </tr>
                @foreach ($detail_transbarang_keluar as $key => $value)
                    <tr>
                        <td>{{ $value->nama_barang }}</td>
                        <td>{{ $value->qty }}</td>
                        <td>{{ $value->harga }}</td>
                        <td>{{ $value->diskon }}</td>
                        <td>{{ $value->keterangan }}</td>
                        <td>{{ $value->created_at }}</td>
                        <td>{{ $value->updated_at }}</td>
                        {{-- <td><a class="btn btn-info" href="{{ url('vendor/'.$value->id.'/edit') }}">Update</a></td></td>
                        <td>
                            <form action="{{ url('vendor/'.$value->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" type="submit">DELETE</button>
                            </form>
                        </td> --}}
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection

{{-- Mengatur jarak table pakek container float --}}
