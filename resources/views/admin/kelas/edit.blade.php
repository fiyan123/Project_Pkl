@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')

                <div class="card">
                    <div class="card-header" align="center">
                        Data Dari Kelas
                    </div>

                    <div class="card-body">
                        <form action="{{ route('kelas.update', $kelas->id) }}" method="post">
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
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit"><i class="bi bi-send-check-fill"></i>&nbsp;Simpan</button>
                                    <a href="{{ route('kelas.index') }}" class="btn btn-dark"><i class="bi bi-back"></i>&nbsp;Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection