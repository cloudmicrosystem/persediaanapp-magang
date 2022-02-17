@extends('backend.layouts.master')
@section('title')
Update Kategori
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
            <form id="quickForm"  method="POST" action="{{ url('kategori', [$category[0]->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                <div class="form-group">
                  <label >Nama</label>
                  <input type="text" name="nama_category" value="{{$category[0]->nama_category}}" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Slug</label>
                  <input type="text" name="slug" value="{{$category[0]->slug}}" class="form-control" >
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














