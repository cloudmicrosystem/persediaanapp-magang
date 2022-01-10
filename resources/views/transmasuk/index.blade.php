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

{{-- Modal  --}}
<div class="container">

  <form action="/action_page.php">

    <div class="form-group">

        {{-- dropdown --}}
      <label>Vendor :</label>
      <br>
      <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
          Dropdown button
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Link 1</a>
          <a class="dropdown-item" href="#">Link 2</a>
          <a class="dropdown-item-text" href="#">Text Link</a>
          <span class="dropdown-item-text">Just Text</span>
        </div>
      </div>
      <br/>
      {{-- default --}}
      <label>Tanggal :</label>
      <input type="date" class="form-control" name="update_add" value="2022-01-10">
    </p>
    </div>
    <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#myModal">
    Add Item
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Data Vendor</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Isi Modal -->
        <div class="modal-body">
            <form action="/action_page.php">
                <div class="form-group">
                  <label >Id Barang</label>
                  <input type="text" class="form-control" id="usr" name="username">
                </div>
                <div class="form-group">
                  <label >Nama Barang</label>
                  <br/>
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Dropdown Namabarang
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Link 1</a>
                    <a class="dropdown-item" href="#">Link 2</a>
                    <a class="dropdown-item-text" href="#">Text Link</a>
                    <span class="dropdown-item-text">Just Text</span>
                  </div>
                </div>
                <div class="form-group">
                    <label >Qty</label>
                    <input type="text" class="form-control" id="pwd" name="text">
                  </div>
                  <div class="form-group">
                    <label >Harga</label>
                    <input type="text" class="form-control" id="pwd" name="text">
                  </div>
                  <div class="form-group">
                    <label >Diskon</label>
                    <input type="text" class="form-control" id="pwd" name="text">
                  </div>
                  <div class="form-group">
                    <label >Keterangan</label>
                    <input type="text" class="form-control" id="pwd" name="text">
                  </div>
              </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button  class="btn btn-primary" data-dismiss="modal">Add</button>
        </div>
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
                <th>Id Vendor </th>
                <th>Id_barang</th>
                <th>Nama Barang</th>
                <th>Qty</th>
                <th>Harga</th>
                <th>Diskon</th>
                <th>Keterangan</th>

                {{-- <th colspan="2">Aksi</th> --}}
            </tr>
                {{-- @foreach ($master_vendor as $key=>$value)
                    <tr>
                        <td>{{ $value->nama_vendor }}</td>
                        <td>{{ $value->email_vendor }}</td>
                        <td>{{ $value->no_hp_vendor }}</td>
                        <td>{{ $value->alamat_vendor }}</td>
                        <td>{{ $value->date_created }}</td>
                        <td>{{ $value->created_by }}</td>
                        <td>{{ $value->date_updated }}</td>
                        <td>{{ $value->updated_by }}</td>
                        <td><a class="btn btn-info" href="{{ url('vendor/'.$value->id.'/edit') }}">Update</a></td></td>
                        <td>
                            <form action="{{ url('vendor/'.$value->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" type="submit">DELETE</button>
                            </form>
                        </td>
                    </tr>
                @endforeach --}}
        </table>
    </div>
</div>

@endsection

{{-- Mengatur jarak table pakek container float --}}
