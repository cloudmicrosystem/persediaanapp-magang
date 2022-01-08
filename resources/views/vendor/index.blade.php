@extends('layouts.master')
@section('title')
Database Vendor
@endsection

@section('content')
    <div class="container-fluid">
        <div class="col-sm-40">
            <table class="table-bordered table">
                <br>
                <a class="btn btn-info" href="{{ url ('vendor/create')}}">Tambah</a>
                <br>
                <br>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No Hp</th>
                    <th>Alamat</th>
                    <th>Date Created</th>
                    <th>Created By</th>
                    <th>Date Updated</th>
                    <th>Updated By</th>
                    <th colspan="2">Aksi</th>
                </tr>
                    @foreach ($master_vendor as $key=>$value)
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
                    @endforeach
            </table>
        </div>
    </div>
@endsection

{{-- Mengatur jarak table pakek container float --}}
