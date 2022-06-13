@extends('admin.layout.master')
@section('title')
Artikel | Morfeen
@endsection


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <a class="btn btn-info" href="{{ url ('article/create')}}"><i class='fas fa-plus'></i></a>
                                <br>
                                <br>

                                <div class="card-header" style="background: rgb(163, 171, 173)">
                                    <h3 class="card-title" style="font-weight: bold">Artikel</h3>
                                </div>

                                <tr style="text-align: center">
                                    <th>Kategori</th>
                                    <th>Judul</th>
                                    <th>Slug</th>
                                    <th>Deskripsi</th>
                                    <th>Gambar Artikel</th>
                                    <th>Sumber Pustaka</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                                    @foreach ($article as $key=>$value)
                                        <tr>
                                            <td>{{ $value->catarticle->nama }}</td>
                                            <td>{{ $value->judul }}</td>
                                            <td>{{ $value->slug }}</td>
                                            <td>{{ $value->deskripsi }}</td>
                                            <td><img src="{{ asset('images/artikel/' . $value->gambar_article) }}"
                                                alt="{{ ($value->judul) }}"
                                                width=150px height=auto /></td>
                                            <td>{{ $value->sumber }}</td>
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
                        {{ $article->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

