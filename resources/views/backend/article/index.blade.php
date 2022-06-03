@extends('backend.layouts.master')
@section('title')
Artikel | Morfeen
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <a class="btn btn-info" href="{{ url ('article/create')}}"><i class='fas fa-plus'></i></a>
                                <br>
                                <br>
                                <tr>
                                    <th>Judul</th>
                                    <th>Slug</th>
                                    <th>Deskripsi</th>
                                    <th>Gambar Artikel</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                                    @foreach ($article as $key=>$value)
                                        <tr>
                                            <td>{{ $value->judul }}</td>
                                            <td>{{ $value->slug }}</td>
                                            <td>{{ $value->Deskripsi }}</td>
                                            <td><img src="{{ asset('images/artikel/' . $value->gambar_artikel) }}"
                                                alt="{{ ($value->judul) }}"
                                                width=150px height=auto /></td>
                                            <td><a class="btn btn-info" href="{{ url('article/'.$value->id.'/edit') }}"><i class='fas fa-edit'></i></a></td></td>
                                            <td>
                                                <form action="{{ url('article/'.$value->id) }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                            </thead>
                        </table>
                        <br>
                        {{-- {{ $category->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

