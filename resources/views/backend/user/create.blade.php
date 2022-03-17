@extends('backend.layouts.master')
@section('title')
User | Morfeen
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
            <form id="quickForm"  method="POST" action="{{ url('user') }}">
                @csrf
                <div class="card-body">
                <div class="form-group">
                  <label >Nama</label>
                  <input type="text" name="nama" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control" >
                </div>
                <div class="form-group">
                  <label>No Hp</label>
                  <input type="number" name="no_hp" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" name="password" class="form-control" >
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














