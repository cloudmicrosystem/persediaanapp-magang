@extends('layouts.master')
@section('title')
Database Customer
@endsection

@section('content')
    <div class="container-fluid">
        <div class="col-sm-0">
            <table class="table-bordered table table-responsive">
                <br>
                <a class="btn btn-info" href="{{ url ('user/create')}}">Tambah</a>

                <br>
                <br>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>No Hp</th>
                    <th>Jabatan</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Date Created</th>
                    <th>Created By</th>
                    <th>Date Updated</th>
                    <th>Updated By</th>
                    <th colspan="2">Aksi</th>
                </tr>
                    @foreach ($master_user as $key=>$value)
                        <tr>
                            <td>{{ $value->nama }}</td>
                            <td>{{ $value->alamat }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->no_hp }}</td>
                            <td>{{ $value->jabatan }}</td>
                            <td>{{ $value->username }}</td>
                            <td>{{ $value->password }}</td>
                            <td>{{ $value->date_created }}</td>
                            <td>{{ $value->created_by }}</td>
                            <td>{{ $value->date_updated }}</td>
                            <td>{{ $value->update_by }}</td>
                            <td><a class="btn btn-info" href="{{ url('user/'.$value->id.'/edit') }}">Update</a></td></td>
                            <td>
                                <form action="{{ url('user/'.$value->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger" type="submit">DELETE</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>
@endsection

{{-- Mengatur jarak table pakek container float --}}

