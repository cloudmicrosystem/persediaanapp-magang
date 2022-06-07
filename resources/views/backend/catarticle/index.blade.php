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
                                <a class="btn btn-info" href="{{ url ('catarticle/create')}}"><i class='fas fa-plus'></i></a>
                                <br>
                                <br>

                                <div class="card-header" style="background: rgb(163, 171, 173)">
                                    <h3 class="card-title" style="font-weight: bold">Kategori Artikel</h3>
                                </div>

                                <tr style="text-align: center">
                                    <th>Nama</th>
                                    <th>Slug</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                                    @foreach ($catarticle as $key=>$value)
                                        <tr>
                                            <td>{{ $value->nama }}</td>
                                            <td>{{ $value->slug }}</td>

                                            <td style="text-align: center"><a class="btn btn-info" href="{{ url('catarticle/'.$value->id.'/edit') }}"><i class='fas fa-edit'></i></a></td></td>
                                            <td style="text-align: center">
                                                <form action="{{ url('catarticle/'.$value->id) }}" method="POST">
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
                        {{ $catarticle->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

