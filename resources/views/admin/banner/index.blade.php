@extends('admin.layout.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Banner</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @if (Session::has('success_message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert"
                                style="margin-top: 10px;">{{ Session::get('success_message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Banner</h3>
                                <a class="btn btn-block btn-success" href="{{ url('/add-edit-banner') }}"
                                    style="max-width: 150px; float:right; disply:inline-block">
                                    <i>Tambah Gambar</i>
                                </a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="product" class="table table-bordered table-hover">
                                    <thead>
                                        <tr style="text-align: center">
                                            <th>Gambar Banner</th>
                                            <th>Status</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($banner as $key => $value)
                                            <tr>
                                                <td><img src="{{ asset('images/banner/' . $value->gambar_banner) }}"
                                                        width=150px height=auto />
                                                </td>
                                                <td>
                                                    @if($value->status == 1)
                                                        <a class="updateBannerStatus" id="value-{{ $value->id }}"
                                                            id_ban="{{ $value->id }}" href="javascript:void(0)">Active</a>
                                                    @else
                                                        <a class="updateBannerStatus" id="value-{{ $value->id }}"
                                                            id_ban="{{ $value->id }}" href="javascript:void(0)">Inactive</a>
                                                    @endif
                                                </td>

                                                <td style="text-align: center"><a title="Edit Artikel"
                                                        href="{{ url('add-edit-banner/' . $value->id) }}"><i
                                                            class='fas fa-edit'></i></a></td>
                                                </td>
                                                </td>
                                                <td style="text-align: center"> <a class="confirmDelete" name="gambar"
                                                        href="{{ url('delete-banner/' . $value->id) }}"><i
                                                            class='fas fa-trash-alt'></i></a></td>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <br>
                                {{ $banner->links() }}
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>
    <!-- /.content-wrapper -->
@endsection
