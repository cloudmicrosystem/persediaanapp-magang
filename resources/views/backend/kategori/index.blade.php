@extends('backend.layouts.master')
@section('title')
Kategori | Morfeen
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <a class="btn btn-info" href="{{ url ('kategori/create')}}"><i class='fas fa-plus'></i></a>
                                <br>
                                <br>
                                <tr>
                                    <th>Nama</th>
                                    <th>Slug</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                                    @foreach ($category as $key=>$value)
                                        <tr>
                                            <td>{{ $value->nama_category }}</td>
                                            <td>{{ $value->slug }}</td>

                                            <td><a class="btn btn-info" href="{{ url('kategori/'.$value->id.'/edit') }}"><i class='fas fa-edit'></i></a></td></td>
                                            <td>
                                                <form action="{{ url('kategori/'.$value->id) }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                            </thead>
                        </table>
                        {{ $category->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- Mengatur jarak table pakek container float --}}

