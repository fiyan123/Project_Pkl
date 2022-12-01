@extends('layouts.mazer')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="page-heading">
                    <h3>Data Siswa {{ $siswa->nama }}</h3>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nisn</label>
                            <input type="text" class="form-control" name="nis" value="{{ $siswa->nis }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ $siswa->nama }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <input type="text" class="form-control " name="nis" value="{{ $siswa->jenis_kelamin }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kelas</label>
                            <input type="text" class="form-control" name="id_kelas" value="{{ $siswa->kelas->kelas }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jurusan</label>
                            <input type="text" class="form-control" name="id_kelas" value="{{ $siswa->kelas->jurusan }}"
                                readonly>
                        </div>

                        <div class="mb-3">
                            <a href="{{ route('siswa.index') }}" class="btn btn-dark" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Kembali"><i class="bi bi-back"></i>&nbsp;</a>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
