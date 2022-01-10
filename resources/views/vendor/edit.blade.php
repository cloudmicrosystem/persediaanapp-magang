@extends('layouts.master')
@section('title')
Update Vendor
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
              <h3 class="card-title">Form Vendor</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm"  method="POST" action="{{ url('vendor', [$master_vendor[0]->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                <div class="form-group">
                  <label >Nama</label>
                  <input type="text" name="nama_vendor" value="{{$master_vendor[0]->nama_vendor}}" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email_vendor" value="{{$master_vendor[0]->email_vendor}}" class="form-control" >
                </div>
                <div class="form-group">
                  <label>No Hp</label>
                  <input type="number" name="no_hp_vendor" value="{{$master_vendor[0]->no_hp_vendor}}" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat_vendor" value="{{$master_vendor[0]->alamat_vendor}}" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Date Created</label>
                  <input type="date" name="date_created" value="{{$master_vendor[0]->date_created}}" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Created By</label>
                  <input type="text" name="created_by" value="{{$master_vendor[0]->created_by}}" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Date Updated</label>
                  <input type="date" name="date_updated" value="{{$master_vendor[0]->date_updated}}" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Updated By </label>
                    <input type="text" name="updated_by" value="{{$master_vendor[0]->updated_by}}" class="form-control" >
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





























