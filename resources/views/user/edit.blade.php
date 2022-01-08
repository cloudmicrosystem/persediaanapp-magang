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
            <form id="quickForm"  method="POST" action="{{ url('user', [$master_user[0]->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                <div class="form-group">
                  <label >Nama</label>
                  <input type="text" name="nama" value="{{$master_user[0]->nama}}" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" value="{{$master_user[0]->alamat}}" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" value="{{$master_user[0]->email}}" class="form-control" >
                </div>
                <div class="form-group">
                  <label>No Hp</label>
                  <input type="text" name="no_hp" value="{{$master_user[0]->no_hp}}" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Jabatan</label>
                  <input type="text" name="jabatan"  value="{{$master_user[0]->jabatan}}" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" value="{{$master_user[0]->username}}" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" name="password" value="{{$master_user[0]->password}}" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Date Created</label>
                  <input type="text" name="date_created" value="{{$master_user[0]->date_created}}" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Created By</label>
                  <input type="text" name="created_by" value="{{$master_user[0]->created_by}}" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Date Created</label>
                  <input type="text" name="date_updated" value="{{$master_user[0]->date_updated}}" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Updated By </label>
                    <input type="text" name="update_by" value="{{$master_user[0]->update_by}}" class="form-control" >
                  </div>
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














