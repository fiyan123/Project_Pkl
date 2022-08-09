@extends('layouts.guru')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header bg-success">
                        Data Nilai Siswa
                    </div>
                    <div class="card-body">
                        <form action="{{ route('data_nilai.store') }}" method="post">
                            @csrf
                              {{-- <div class="mb-3">
                                <label class="form-label">NISN</label>
                                <select name="id_siswa" class="form-control @error('id_siswa') is-invalid @enderror"
                                    id="">
                                    @foreach ($siswa as $data)
                                        <option value="{{ $data->id }}">{{ $data->nis }}</option>
                                    @endforeach
                                </select>
                                @error('id_siswa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}


                            {{-- <div class="mb-3">
                                <label class="form-label">NAMA</label>
                                <select name="id_siswa" class="form-control @error('id_siswa') is-invalid @enderror"
                                    id="">
                                    @foreach ($siswa as $data)
                                        <option value="{{ $data->id }}">{{ $data->nis }}</option>
                                    @endforeach
                                </select>
                                @error('id_siswa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}

                            {{-- <div class="mb-3">
                                <label class="form-label">Kelas</label>
                                <select name="id_kelas" class="form-control @error('id_kelas') is-invalid @enderror"
                                    id="">
                                    @foreach ($kelas as $data)
                                        <option value="{{ $data->id }}">{{ $data->kelas }}</option>
                                    @endforeach
                                </select>
                                @error('id_kelas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Jurusan</label>
                                <select class="form-control @error('id_kelas') is-invalid @enderror"
                                    id="">
                                    @foreach ($kelas as $data)
                                        <option value="{{ $data->id }}">{{ $data->jurusan }}</option>
                                    @endforeach
                                </select>
                                @error('id_kelas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                            <div class="mb-3">
                                <label class="form-label">NILAI KEHADIRAN</label>
                                <input type="number" class="form-control  @error('nilai_kehadiran') is-invalid @enderror"
                                    name="nilai_kehadiran">
                                @error('nilai_kehadiran')
                                    <span class="invalid-feedback" role="alert">~
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">NILAI HARIAN</label>
                                <input type="number" class="form-control  @error('nilai_harian') is-invalid @enderror"
                                    name="nilai_harian">
                                @error('nilai_harian')
                                    <span class="invalid-feedback" role="alert">~
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">NILAI PAS</label>
                                <input type="number" class="form-control  @error('pas') is-invalid @enderror"
                                    name="pas">
                                @error('pas')
                                    <span class="invalid-feedback" role="alert">~
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">NILAI PAT</label>
                                <input type="number" class="form-control  @error('pat') is-invalid @enderror"
                                    name="pat">
                                @error('pat')
                                    <span class="invalid-feedback" role="alert">~
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-outline-success" type="submit">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection