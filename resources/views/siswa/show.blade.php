@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" align="center">
                        Data Siswa
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">NISN</label>
                            <input type="text" class="form-control" name="nis" value="{{ $siswa->nis }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">NAMA</label>
                            <input type="text" class="form-control" name="nama" value="{{ $siswa->nama }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">JENIS KELAMIN</label>
                            <input type="text" class="form-control " name="nis" value="{{ $siswa->jenis_kelamin }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">KELAS</label>
                            <input type="text" class="form-control" name="id_kelas" value="{{ $siswa->kelas->kelas }}"
                                readonly>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">JURUSAN</label>
                            <input type="text" class="form-control" name="id_kelas" value="{{ $siswa->kelas->jurusan }}"
                                readonly>

                        </div>

                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('siswa.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection