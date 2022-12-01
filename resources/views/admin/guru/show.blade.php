@extends('layouts.mazer')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="page-heading">
                    <h3>Data Guru {{ $guru->nama }}</h3>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nip</label>
                            <input type="number" class="form-control " name="nip" value="{{ $guru->nip }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control " name="nama" value="{{ $guru->nama }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mata Pelajaran</label>
                            <input type="text" class="form-control " name="mata_pelajaran"
                                value="{{ $guru->mata_pelajaran }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <input type="text" class="form-control " name="jenis_kelamin"
                                value="{{ $guru->jenis_kelamin }}" readonly>
                        </div>
                        <div class="mb-3">
                            <a href="{{ route('guru.index') }}" class="btn btn-dark" type="submit" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Kembali"><i class="bi bi-back"></i>&nbsp;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
