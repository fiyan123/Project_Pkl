@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header" align="center">
                        Data Guru
                    </div>
                    <div class="card-body">
                        <form action="{{ route('guru.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">NIP</label>
                                <input type="number" class="form-control  @error('nip') is-invalid @enderror"
                                    name="nip">
                                @error('nip')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">NAMA</label>
                                <input type="text" class="form-control  @error('nama') is-invalid @enderror"
                                    name="nama">
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">MATA PELAJARAN</label>
                                <input type="text" class="form-control  @error('mata_pelajaran') is-invalid @enderror"
                                        name="mata_pelajaran">
                                    @error('mata_pelajaran')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Jenis Kelamin</label>
                                    <div class="form-check">
                                        <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror"
                                            type="radio" name="jenis_kelamin" value="Laki-laki">
                                        <label class="form-check-label">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror"
                                            type="radio" name="jenis_kelamin" value="Perempuan">
                                        <label class="form-check-label">
                                            Perempuan
                                        </label>
                                    </div>
                                    @error('jenis_kelamin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                    <a href="{{ route('guru.index') }}" class="btn btn-secondary">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection