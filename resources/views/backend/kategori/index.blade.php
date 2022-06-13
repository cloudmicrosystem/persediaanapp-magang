@extends('backend.layouts.master')
@section('title')
    Kategori | Morfeen
@endsection

@section('content')
    {{-- <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <a class="btn btn-info" href="{{ url ('kategori/create')}}" ><i class='fas fa-plus'></i></a>
                                <br><br>

                                <div class="card-header" style="background: rgb(163, 171, 173)">
                                    <h3 class="card-title" style="font-weight: bold">Kategori Product</h3>
                                </div>

                                <tr style="text-align: center">
                                    <th>Nama</th>
                                    <th>Slug</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                                    @foreach ($category as $key => $value)
                                        <tr>
                                            <td>{{ $value->nama_category }}</td>
                                            <td>{{ $value->slug }}</td>

                                            <td style="text-align: center">
                                                <a class="btn btn-info" href="{{ url('kategori/'.$value->id.'/edit') }}"><i class='fas fa-edit'></i></a>
                                            </td>
                                            <td style="text-align: center">
                                                <form action="{{ url('kategori/'.$value->id) }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                            </thead>
                        </table>
                        <br>
                        {{ $category->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a class="btn btn-info" href="{{ url('kategori/create') }}"><i class='fas fa-plus'></i></a>
                        <table id="example" class="table table-bordered table-hover">
                            <thead>
                                {{-- <div class="card-header" style="background: rgb(163, 171, 173)">
                                    <h3 class="card-title" style="font-weight: bold">Kategori Product</h3>
                                </div> --}}
                                <tr style="text-align: center">
                                    <th>Namae</th>
                                    <th>Slug</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $key => $value)
                                    <tr>
                                        <td>{{ $value->nama_category }}</td>
                                        <td>{{ $value->slug }}</td>
                                        <td style="text-align: center">
                                            <a class="btn btn-info"
                                                href="{{ url('kategori/' . $value->id . '/edit') }}"><i
                                                    class='fas fa-edit'></i></a>
                                        </td>
                                        <td style="text-align: center">
                                            <form action="{{ url('kategori/' . $value->id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-danger" type="submit"><i
                                                        class='fas fa-trash-alt'></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom-js')
    <script>
        $(function () {
            $('#example').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush


{{-- @push('custom-js')
<script>
    let valuedata = 'aby'

    const sebuahfungsi = (params) => {
        $.ajax({
            url: 'link', //route
            method: 'post',
            data: {
                namadata: valuedata,
                namadata2: 'abc'
            },
            success: function(response){
                console.log(response)
            },
            error: function(error){
                console.error(error)
            }
        })
    }
</script>
@endpush --}}


