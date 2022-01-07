@extends('layouts.master')

@section('content')
    <br>


<form method="POST" action="{{ url('vendor', [$master_vendor[0]->id]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    Nama : <input type="text" name="nama_vendor" value="{{$master_vendor[0]->nama_vendor}}"><br>
    Email : <input type="text" name="email_vendor" value="{{$master_vendor[0]->email_vendor}}"><br>
    No Hp : <input type="text" name="no_hp_vendor" value="{{$master_vendor[0]->no_hp_vendor}}"><br>
    Alamat : <input type="text" name="alamat_vendor" value="{{$master_vendor[0]->alamat_vendor}}"><br>
    Date Created: <input type="text" name="date_created" value="{{$master_vendor[0]->date_created}}"><br>
    Created By : <input type="text" name="created_by" value="{{$master_vendor[0]->created_by}}"><br>
    Date Updated : <input type="text" name="date_updated" value="{{$master_vendor[0]->date_updated}}"><br>
    Updated By : <input type="text" name="updated_by" value="{{$master_vendor[0]->updated_by}}"><br>
    <br>
    <button type="submit">SIMPAN</button>
</form>
@endsection
