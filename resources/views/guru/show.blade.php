@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Dari Guru
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">NIP</label>
                            <input type="number" class="form-control " name="nip" value="{{ $guru->nip }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">NAMA</label>
                            <input type="text" class="form-control " name="nama" value="{{ $guru->nama }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">MATA PELAJARAN</label>
                            <input type="text" class="form-control " name="mata_pelajaran" value="{{ $guru->mata_pelajaran }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <input type="text" class="form-control " name="jenis_kelamin" value="{{ $guru->jenis_kelamin }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('guru.index') }}" class="btn btn-success" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection