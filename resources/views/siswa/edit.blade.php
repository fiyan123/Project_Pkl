@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Siswa
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
                                <select name="id_siswa" class="form-control @error('id_siswa') is-invalid @enderror"
                                    readonly>
                                    @foreach ($siswa as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $kelas->id_kelas ? 'selected' : '' }}>
                                            {{ $data->kelas}}
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
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection