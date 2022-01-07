@extends('layouts.master')

@section('content')
    <br>
    {{-- @foreach ($master_barang as $key=>$value)
    <tr>
    </tr>
@endforeach --}}

<form method="POST" action="{{ url('user', [$master_user[0]->id]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    Nama : <input type="text" name="nama" value="{{$master_user[0]->nama}}"><br>
    Alamat : <input type="text" name="alamat" value="{{$master_user[0]->alamat}}"><br>
    Email : <input type="text" name="email" value="{{$master_user[0]->email}}"><br>
    No Hp : <input type="text" name="no_hp" value="{{$master_user[0]->no_hp}}"><br>
    Jabatan : <input type="text" name="jabatan" value="{{$master_user[0]->jabatan}}"><br>
    username : <input type="text" name="username" value="{{$master_user[0]->username}}"><br>
    password : <input type="text" name="password" value="{{$master_user[0]->password}}"><br>
    Date Created : <input type="text" name="date_created" value="{{$master_user[0]->date_created}}"><br>
    Created By : <input type="text" name="created_by" value="{{$master_user[0]->created_by}}"><br>
    Date Updated : <input type="text" name="date_updated" value="{{$master_user[0]->date_updated}}"><br>
    Updated By : <input type="text" name="update_by" value="{{$master_user[0]->update_by}}"><br>
    <br>
    <button type="submit">SIMPAN</button>
</form>
@endsection
