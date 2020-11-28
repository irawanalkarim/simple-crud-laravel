@extends('layout.main')
@section('title', 'Add Data Mahasiswa')
@section('container')
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Add Data Mahasiswa</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="/students">
                        @csrf
                        <div class="form-group">
                            <label for="nama" class="control-label">Nama</label>
                            <input type="text" class="form-control @error('nama')is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nrp" class="control-label">NRP</label>
                            <input type="text" class="form-control @error('nrp')is-invalid @enderror" id="nrp" name="nrp" value="{{ old('nrp') }}">
                            @error('nrp')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label">Email</label>
                            <input type="text" class="form-control @error('email')is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jurusan" class="control-label">Jurusan</label>
                            <input type="text" class="form-control @error('jurusan')is-invalid @enderror" id="jurusan" name="jurusan" value="{{ old('jurusan') }}">
                            @error('jurusan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection