@extends('layouts.master')
@section('title')
Update Customer
@endsection
@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Form Customer</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm"  method="POST" action="{{ url('user', [$users[0]->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                <div class="form-group">
                  <label >Nama</label>
                  <input type="text" name="nama" value="{{$users[0]->nama}}" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" value="{{$users[0]->alamat}}" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" value="{{$users[0]->email}}" class="form-control" >
                </div>
                <div class="form-group">
                  <label>No Hp</label>
                  <input type="number" name="no_hp" value="{{$users[0]->no_hp}}" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Jabatan</label>
                  <input type="text" name="jabatan"  value="{{$users[0]->jabatan}}" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" value="{{$users[0]->username}}" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" name="password" value="{{$users[0]->password}}" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Created By</label>
                    <input type="text" name="created_by" value="{{$users[0]->created_by}}" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Updated By </label>
                    <input type="text" name="updated_by" value="{{$users[0]->updated_by}}" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Date Created</label>
                  <input type="text" name="created_at" value="{{$users[0]->created_at}}" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Date Updated</label>
                  <input type="text"  name="updated_at" value="{{$users[0]->updated_at}}" class="form-control" >
                </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  @endsection














