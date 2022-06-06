@extends('backend.layouts.master')
@section('title')
User | Morfeen
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <a class="btn btn-info" href="{{ url ('user/create')}}"><i class='fas fa-plus'></i></a>
                                <br>
                                <br>

                                <div class="card-header" style="background: rgb(163, 171, 173)">
                                    <h3 class="card-title" style="font-weight: bold">Customer</h3>
                                </div>

                                <tr style="text-align: center">
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>No Hp</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                                    @foreach ($users as $key=>$value)
                                        <tr>
                                            <td>{{ $value->nama }}</td>
                                            <td>{{ $value->alamat }}</td>
                                            <td>{{ $value->email }}</td>
                                            <td>{{ $value->no_hp }}</td>
                                            <td>{{ $value->username }}</td>
                                            <td>{{ $value->password }}</td>

                                            <td style="text-align: center">
                                                <a class="btn btn-info" href="{{ url('user/'.$value->id.'/edit') }}"><i class='fas fa-edit'></i></a></td></td>
                                            <td style="text-align: center">
                                                <form action="{{ url('user/'.$value->id) }}" method="POST">
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

