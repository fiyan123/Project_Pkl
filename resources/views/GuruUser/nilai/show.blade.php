@extends('layouts.mazer')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="page-heading">
                    <h3>Data Nilai {{ $nilai->siswa->nama }}, Kelas {{ $nilai->kelas->kelas }}</h3>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nip Guru</label>
                            <input type="number" class="form-control" name="id_guru" value="{{ $nilai->guru->nip }}"
                                readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nisn</label>
                            <input type="number" class="form-control" name="id_siswa" value="{{ $nilai->siswa->nis }}"
                                readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="id_siswa" value="{{ $nilai->siswa->nama }}"
                                readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kelas</label>
                            <input type="text" class="form-control" name="id_kelas" value="{{ $nilai->kelas->kelas }}"
                                readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jurusan</label>
                            <input type="text" class="form-control" name="id_kelas" value="{{ $nilai->kelas->jurusan }}"
                                readonly>
                        </div>

                        <div class="mb-5">
                            <label class="form-label">Nilai Kehadiran</label>
                            <input type="number" class="form-control" name="nilai_kehadiran"
                                value="{{ $nilai->nilai_kehadiran }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nilai Harian</label>
                            <input type="number" class="form-control" name="nilai_harian"
                                value="{{ $nilai->nilai_harian }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nilai Pas</label>
                            <input type="number" class="form-control" name="pas" value="{{ $nilai->pas }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nilai Pat</label>
                            <input type="number" class="form-control" name="pat" value="{{ $nilai->pat }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nilai Raport</label>
                            <input type="number" class="form-control" name="raport" value="{{ $nilai->raport }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Grade Nilai</label>
                            <input type="text" class="form-control" name="nilai_grade" value="{{ $nilai->nilai_grade }}"
                                readonly>
                        </div>

                        <div class="mb-3">
                            <a href="{{ route('nilai.index') }}" class="btn btn-dark" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Kembali"><i class="bi bi-back"></i>&nbsp;</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
