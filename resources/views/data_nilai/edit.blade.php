@extends('layouts.guru')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header bg-primary mb-2" align="center" style="color: white">
                        DATA DARI SISWA
                    </div>
                    <div class="card-body">
                        <form action="{{ route('data_nilai.update', $nilai->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="mb-3">
                                <label class="form-label">Pilih Nip Guru</label>
                                <select name="id_guru" class="form-control @error('id_guru') is-invalid @enderror">
                                    @foreach ($guru as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $nilai->id_guru ? 'selected' : '' }}>
                                            {{ $data->nip}}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_guru')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Pilih Nisn Siswa</label>
                                <select name="id_siswa" class="form-control @error('id_siswa') is-invalid @enderror">
                                    @foreach ($siswa as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $nilai->id_siswa ? 'selected' : '' }}>
                                            {{ $data->nis}}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_siswa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Pilih Nama Siswa</label>
                                <select name="id_siswa" class="form-control @error('id_siswa') is-invalid @enderror">
                                    @foreach ($siswa as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $nilai->id_siswa ? 'selected' : '' }}>
                                            {{ $data->nama}}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_siswa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                              <div class="mb-3">
                                <label class="form-label">Pilih Data Kelas</label>
                                <select name="id_kelas" class="form-control @error('id_kelas') is-invalid @enderror">
                                    @foreach ($kelas as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $nilai->id_kelas ? 'selected' : '' }}>
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
                                <select name="id_kelas" class="form-control @error('id_kelas') is-invalid @enderror">
                                    @foreach ($kelas as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $nilai->id_kelas ? 'selected' : '' }}>
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

                            <br>
                            <div align="center"><h3><u>DATA NILAI SISWA</u></h3></div>
                            <br>

                            <div class="mb-3">
                                <label class="form-label">Nilai Kehadiran</label>
                                <input type="number" class="form-control  @error('nilai_kehadiran') is-invalid @enderror"
                                    name="nilai_kehadiran" value="{{ $nilai->nilai_kehadiran }}">
                                @error('nilai_kehadiran')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nilai Harian</label>
                                <input type="number" class="form-control  @error('nilai_harian') is-invalid @enderror"
                                    name="nilai_harian" value="{{ $nilai->nilai_harian }}">
                                @error('nilai_harian')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nilai Pas</label>
                                <input type="number" class="form-control  @error('pas') is-invalid @enderror"
                                    name="pas" value="{{ $nilai->pas }}">
                                @error('pas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nilai Pat</label>
                                <input type="number" class="form-control  @error('pat') is-invalid @enderror"
                                    name="pat" value="{{ $nilai->pat }}">
                                @error('pat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                          
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-success" type="submit">Simpan</button>
                                </div>
                            </div>
                           
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <a href="{{ route('data_nilai.index') }}" class="btn btn-info">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
