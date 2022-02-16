@extends('layouts.master')
@section('title')
    Stok Barang
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table-bordered table table-responsive">
                            <thead>
                                <a class="btn btn-info" href="{{ url('barang/create') }}"><i class='fas fa-plus'></i></a>
                                <br>
                                <br>
                                <tr>
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
                                @foreach ($newBarang as $key => $value)
                                    <tr>
                                        <td>{{ $value['nama_category'] }}</td>
                                        <td>{{ $value['nama_barang'] }}</td>
                                        <td>{{ $value['slug'] }} </td>
                                        <td>Rp {{ $value['hpp'] }} </td>
                                        <td>Rp {{ $value['price'] }} </td>
                                        <td>{{ $value['deskripsi'] }} </td>
                                        <td>{{ $value['size'] }}</td>
                                        <td>{{ $value['qty'] }} pcs</td>
                                        <td>
                                            @foreach ($value['gambar'] as $item)
                                            <img src="{{ $item['url_gambar'] }}" alt="{{$value['nama_barang']}}"/>
                                            @endforeach
                                        </td>
                                        {{-- <td><img src="{{ asset('storage/barang/' . $value['gambar']) }}" width=100px height=auto /></td> --}}
                                        <td><a class="btn btn-info" href="{{ url('barang/' . $value['id'] . '/edit') }}"><i
                                                    class='fas fa-edit'></a></td>
                                        <td>
                                            <form action="{{ url('barang/' . $value['id']) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- Mengatur jarak table pakek container float --}}
