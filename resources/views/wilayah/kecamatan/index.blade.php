@extends('layouts.app')

@section('title-page')Tabel Kecamatan
    
@endsection

@section('status-dropdown')active
@endsection

@section('status-wilayah')in
@endsection

@section('status-kecamatan')active
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            @yield('title-page')
        </h1>
    </div>
</div>
<!-- /. ROW  -->

<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Tabel
            </div>
            <div class="panel-body">
                <a href="/kecamatan/tambah" class="btn btn-primary">Tambah</a>
                <br><br>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Provinsi</th>
                                <th>KabKota</th>
                                <th>Kecamatan</th>
                                <th>Kode Kecamatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                            $no = 1;
                            @endphp
                            @foreach ($kec as $t)


                            <tr class="odd gradeX" align="center">
                                <td>{{$no++}}.</td>
                                <td>{{$t->provinsi}}</td>
                                <td>{{$t->kabkota}}</td>
                                <td>{{$t->kecamatan}}</td>
                                <td>{{$t->kode_kecamatan}}</td>
                                {{-- @if (Auth::user()->level == "admin") --}}

                                <td class="datatable-ct" align="center">

                                    <form method="POST" action="/kecamatan/delete/{{ $t->id_kecamatan }}">
                                        {{csrf_field()}} {{method_field('DELETE')}}

                                        <a href="/kecamatan/edit/{{ $t->id_kecamatan }}" class="btn btn-primary"
                                            data-toggle="tooltip" data-placement="top" title="Kelola User"><i
                                                class="fa fa-edit"></i></a>

                                        <button type="submit"
                                            onclick="return confirm('Yakin Ingin Menghapus Data Ini ?')"
                                            class="btn btn-danger" data-toggle="tooltip" data-placement="top"
                                            title="Hapus User"><i class="fa fa-trash-o"></i></button>
                                    </form>
                                </td>

                                {{-- @endif --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>

@endsection
