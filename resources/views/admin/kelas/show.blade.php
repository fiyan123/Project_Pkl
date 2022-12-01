@extends('layouts.mazer')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="page-heading">
                    <h3>Data Kelas {{ $kelas->kelas }}</h3>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Kelas</label>
                            <input type="text" class="form-control " name="kelas" value="{{ $kelas->kelas }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jurusan</label>
                            <input type="text" class="form-control" name="jurusan" value="{{ $kelas->jurusan }}"readonly>
                        </div>

                        <div class="mb-3">
                            <a href="{{ route('kelas.index') }}" class="btn btn-dark" type="submit" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="Kembali"><i class="bi bi-back"></i>&nbsp;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection