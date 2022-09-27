@extends('layouts.guru')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary mb-2" align="center" style="color: white">
                        Hasil Data Nilai Siswa
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">NIP GURU</label>
                            <input type="number" class="form-control" name="id_guru" value="{{ $nilai->guru->nip }}"
                                readonly>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">NISN</label>
                            <input type="number" class="form-control" name="id_siswa" value="{{ $nilai->siswa->nis }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">NAMA</label>
                            <input type="text" class="form-control" name="id_siswa" value="{{ $nilai->siswa->nama }}" readonly>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">KELAS</label>
                            <input type="text" class="form-control" name="id_kelas" value="{{ $nilai->kelas->kelas }}"
                                readonly>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">JURUSAN</label>
                            <input type="text" class="form-control" name="id_kelas" value="{{ $nilai->kelas->jurusan }}"
                                readonly>
                        </div>

                         <div align="center"><h5>DATA NILAI SISWA</h5></div>
                       

                        <div class="mb-3">
                            <label class="form-label">NILAI KEHADIRAN</label>
                            <input type="number" class="form-control" name="nilai_kehadiran" value="{{ $nilai->nilai_kehadiran }}"
                                readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">NILAI HARIAN</label>
                            <input type="number" class="form-control" name="nilai_harian" value="{{ $nilai->nilai_harian }}"
                                readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">NILAI PAS</label>
                            <input type="number" class="form-control" name="pas" value="{{ $nilai->pas }}"
                                readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">NILAI PAT</label>
                            <input type="number" class="form-control" name="pat" value="{{ $nilai->pat }}"
                                readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">NILAI RAPORT</label>
                            <input type="number" class="form-control" name="raport" value="{{ $nilai->raport }}"
                                readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">GRADE</label>
                            <input type="text" class="form-control" name="nilai_grade" value="{{ $nilai->nilai_grade }}"
                                readonly>
                        </div>

                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('data_nilai.index') }}" class="btn btn-dark"><i class="bi bi-back"></i>&nbsp;Kembali</a>
                            </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection