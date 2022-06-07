@extends('backend.layouts.master')
@section('title')
    Stock | Morfeen
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <a class="btn btn-info" href="{{ url('barang/create') }}"><i class='fas fa-plus'></i></a>
                                <br>
                                <br>

                                <div class="card-header" style="background: rgb(163, 171, 173)">
                                    <h3 class="card-title" style="font-weight: bold">Product</h3>
                                </div>

                                <tr style="text-align: center">
                                    <th>Kategori</th>
                                    <th>Nama</th>
                                    <th>Slug</th>
                                    <th>HPP</th>
                                    <th>Harga Jual</th>
                                    <th>Deskripsi</th>
                                    <th>Ukuran</th>
                                    <th>Qty</th>
                                    <th>Gambar</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                                @foreach ($barang as $key => $value)
                                    <tr>
                                        <td>{{ $value->category->nama_category }}</td>
                                        <td>{{ $value->nama_barang }}</td>
                                        <td>{{ $value->slug }} </td>
                                        <td>Rp {{ $value->hpp }} </td>
                                        <td>Rp {{ $value->price }} </td>
                                        <td>{{ $value->deskripsi }} </td>
                                        <td>{{ $value->size }}</td>
                                        <td>{{ $value->qty }} pcs</td>
                                        <td><img src="{{ asset('images/disply/' . $value->gambar_disply) }}"
                                            alt="{{ ($value->nama_barang) }}"
                                            width=150px height=auto /></td>

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
                            </thead>
                        </table>
                        <br>
                        {{ $barang->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- Mengatur jarak table pakek container float --}}
