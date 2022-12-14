@extends('layouts.mazer')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="page-heading">
                    <h3>Data Dari Kelas {{ $kelas->kelas }}</h3>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Kelas</label>
                                <input type="text" class="form-control  @error('kelas') is-invalid @enderror"
                                    name="kelas" value="{{ $kelas->kelas }}">
                                @error('kelas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Jurusan</label>
                                <input type="text" class="form-control  @error('jurusan') is-invalid @enderror"
                                    name="jurusan" value="{{ $kelas->jurusan }}">
                                @error('jurusan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <button class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Simpan"><i class="bi bi-pen-fill"></i>&nbsp;</button>
                                <a href="{{ route('kelas.index') }}" class="btn btn-dark" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Batal"><i class="bi bi-back"></i>&nbsp;</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
