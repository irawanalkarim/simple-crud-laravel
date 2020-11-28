@extends('layout.main')
@section('title', 'Detail Siswa')
@section('container')
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Detail Mahasiswa</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">{{ $student->nama }}</h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>{{ $student->nrp }}</li>
                            <li>{{ $student->email }}</li>
                            <li>{{ $student->jurusan }}</li>
                        </ul>
                        <div class="row">
                            <div class="col">
                                <form action="{{ $student->id }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                                <a href="{{ $student->id }}/edit" class="btn btn-success btn-sm">Edit</a>
                                <a href="/students">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection