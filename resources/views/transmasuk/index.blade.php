@extends('layouts.master')
@section('title')
    Transaksi Masuk
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
                <div class="form-group">
                    <label>Vendor</label>
                    <br>
                    <select name="vendor">
                        <option value="id">
                            <-- PILIH -->
                        </option>
                        @foreach ($vendor as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_vendor }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- default --}}
                <label>Tanggal</label>
                <input type="date" class="form-control" name="update_add" value="2022-01-10">

                </p>
            </div>
            <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#Modalcreate"
                href="{{ url('transmasuk/create') }}" class="btn btn-info">
                Add Item
            </button>

            <!-- The Modal -->
            <div class="modal fade" id="Modalcreate">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Data Vendor</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        @include('transmasuk.create')

                    </div>
                </div>
            </div>
        </form>
    </div>


    {{-- Tabel --}}
   
    <div class="container-fluid">
        <div class="col-sm-40">
            <table class="table-bordered table table-responsive">
                <br>

                <tr>
                    <th>Id_barang</th>
                    <th>Nama Barang</th>
                    <th>Qty</th>
                    <th>Harga</th>
                    <th>Keterangan</th>
                    <th>Date Created</th>
                    <th>Date Updated</th>
                    {{-- <th colspan="2">Aksi</th> --}}
                </tr>
                @foreach ($detail_transbarang_masuk as $key => $value)
                    <tr>
                        <td>{{ $value->id_barang }}</td>
                        <td>{{ $value->nama_barang }}</td>
                        <td>{{ $value->qty }}</td>
                        <td>{{ $value->harga }}</td>
                        <td>{{ $value->keterangan }}</td>
                        <td>{{ $value->created_at }}</td>
                        <td>{{ $value->updated_at }}</td>
                        {{-- <td><a class="btn btn-info" href="{{ url('vendor/'.$value->id.'/edit') }}">Update</a></td></td> --}}
                        {{-- <td>
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
