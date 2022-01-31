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

        <form >
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
            @include('transkeluar.create')
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
