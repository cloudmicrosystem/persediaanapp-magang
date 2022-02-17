@extends('backend.layouts.master')
@section('title')
Tambah Kategori
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
              <h3 class="card-title">Form Kategori</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm"  method="POST" action="{{ url('kategori') }}">
                @csrf
                <div class="card-body">
                <div class="form-group">
                  <label >Nama</label>
                  <input type="text" name="nama_category" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Slug</label>
                  <input type="text" name="slug" class="form-control" >
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














