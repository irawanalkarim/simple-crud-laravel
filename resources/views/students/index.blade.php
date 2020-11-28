@extends('layout.main')
@section('title', 'Data Siswa')
@section('container')
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Data Siswa</h3>
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col">
                        <a href="/students/create" class="btn btn-primary btn-sm">Add Data</a>
                    </div>
                </div>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="panel-body">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th></th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $students as $row)
                            <tr>
                                <td>{{ $row->nama }}</td>
                                <td></td>
                                <td>
                                    <a href="/students/{{ $row->id }}" class="btn btn-info btn-sm rightButton">Detail</a>
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