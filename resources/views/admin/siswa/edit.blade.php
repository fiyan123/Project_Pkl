@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header" align="center">
                        Data Dari Siswa
                    </div>
                    <div class="card-body">
                        <form action="{{ route('siswa.update', $siswa->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">NISN</label>
                                <input type="text" class="form-control  @error('nis') is-invalid @enderror"
                                    name="nis" value="{{ $siswa->nis }}">
                                @error('nis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">NAMA</label>
                                <input type="text" class="form-control  @error('nama') is-invalid @enderror"
                                    name="nama" value="{{ $siswa->nama }}">
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis Kelamin</label>
                                <div class="form-check">
                                    <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror"
                                        type="radio" name="jenis_kelamin" value="Laki-laki"
                                        @if ($siswa->jenis_kelamin == 'Laki-laki') checked @endif>
                                    <label class="form-check-label">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror"
                                        type="radio" name="jenis_kelamin" value="Perempuan"
                                        @if ($siswa->jenis_kelamin == 'Perempuan') checked @endif>
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
                                <label class="form-label">Pilih Data Kelas</label>
                                <select name="id_kelas" class="form-control @error('id_kelas') is-invalid @enderror"
                                    readonly>
                                    @foreach ($kelas as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $siswa->id_kelas ? 'selected' : '' }}>
                                            {{ $data->kelas}}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_kelas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Pilih Data Jurusan</label>
                                <select name="id_kelas" class="form-control @error('id_kelas') is-invalid @enderror"
                                    readonly>
                                    @foreach ($kelas as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $siswa->id_kelas ? 'selected' : '' }}>
                                            {{ $data->jurusan}}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_kelas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit"><i class="bi bi-send-check-fill"></i>&nbsp;Simpan</button>
                                    <a href="{{ route('siswa.index') }}" class="btn btn-dark"><i class="bi bi-back"></i>&nbsp;Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection