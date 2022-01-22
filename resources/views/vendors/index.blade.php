@extends('layouts.master')
@section('title')
Database Vendor
@endsection

@section('content')
    <div class="container-fluid">
        <div class="col-sm-40">
            <table class="table-bordered table table-responsive">
                <br>
                <a class="btn btn-info" href="{{ url ('vendors/create')}}"><i class='fas fa-plus'></i></a>
                <br>
                <br>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No Hp</th>
                    <th>Alamat</th>
                    <th>Created By</th>
                    <th>Updated By</th>
                    <th>Date Created</th>
                    <th>Date Updated</th>
                    <th colspan="2">Aksi</th>
                </tr>
                    @foreach ($vendor as $key=>$value)
                        <tr>
                            <td>{{ $value->nama_vendor }}</td>
                            <td>{{ $value->email_vendor }}</td>
                            <td>{{ $value->no_hp_vendor }}</td>
                            <td>{{ $value->alamat_vendor }}</td>
                            <td>{{ $value->created_by }}</td>
                            <td>{{ $value->updated_by }}</td>
                            <td>{{ $value->created_at }}</td>
                            <td>{{ $value->updated_at }}</td>

                            <td><a class="btn btn-info" href="{{ url('vendors/'.$value->id.'/edit') }}"><i class='fas fa-edit'></i></a></td></td>

                            <td>
                                <form action="{{ url('vendors/'.$value->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger" type="submit" ><i class='fas fa-trash-alt'></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>
@endsection

{{-- Mengatur jarak table pakek container float --}}
