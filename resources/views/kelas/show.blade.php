@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" align="center">
                        Data Dari Kelas
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Kelas</label>
                            <input type="text" class="form-control " name="kelas" value="{{ $kelas->kelas }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jurusan</label>
                            <input type="text" class="form-control" name="jurusan" value="{{ $kelas->jurusan }}"
                                readonly>
                        </div>

                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('kelas.index') }}" class="btn btn-dark" type="submit"><i class="bi bi-back"></i>&nbsp;Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection