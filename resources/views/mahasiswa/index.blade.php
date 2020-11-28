@extends('layout.main')
@section('title', 'Data Mahasiswa')
@section('container')
<div class="container">
    <div class="row mt-3">
        <div class="col-md-10">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Data Mahasiswa</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NRP</th>
                                <th>Email</th>
                                <th>Jurusan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $mahasiswa as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->nrp }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->jurusan }}</td>
                                <td>
                                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                                    <a href="" class="btn btn-success btn-sm">Edit</a>
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