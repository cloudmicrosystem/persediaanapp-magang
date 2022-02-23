@extends('backend.layouts.master')
@section('title')
    Detail Product
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table-bordered table table-hover">
                            <thead>
                                <a class="btn btn-info" href="{{ url('detailpro/create') }}"><i
                                        class="fas fa-plus"></i></a>
                                <br>
                                <br>
                                <tr>
                                    <th>Nama</th>
                                    <th>Gambar</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                                @foreach ($newBarang as $key => $value)
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
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
