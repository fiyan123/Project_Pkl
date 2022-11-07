@extends('layouts.admin')
@section('content')
<!-- Bootstrap CSS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts/_flash')
            <div class="card border">
                <div class="card-header" align="right">
                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal" data-bs-placement="bottom" title="Tambah Data Baru">
                        <i class="nav-icon fas fa-user">&nbsp;+</i>
                    </button>
                </div>
                <div class="card-header" align="center">
                    <h5>Data Table Siswa</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NISN</th>
                                    <th>NAMA</th>
                                    <th>JENIS KELAMIN</th>
                                    <th>KELAS</th>
                                    <th>JURUSAN</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($siswa as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->nis }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->jenis_kelamin }}</td>
                                        <td>{{ $data->kelas->kelas }}</td>
                                        <td>{{ $data->kelas->jurusan }}</td>
                                        <td>
                                            <form action="{{ route('siswa.destroy', $data->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="{{ route('siswa.edit', $data->id) }}"
                                                    class="btn btn-sm btn-outline-success">
                                                    <i class="nav-icon fas fa-user"></i>
                                                    Ubah
                                                </a> |
                                                <a href="{{ route('siswa.show', $data->id) }}"
                                                    class="btn btn-sm btn-outline-info">
                                                    <i class="nav-icon fas fa-eye"></i>
                                                    Lihat
                                                </a> |
                                                <button type="submit" class="btn btn-sm btn-outline-danger"
                                                    onclick="return confirm('Apakah Anda Yakin?')">
                                                    <i class="bi bi-trash"></i>
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- <div class="d-flex justify-content-end">
                        {{ $siswa->links() }} 
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Tambah Data Baru</h4>
            </div>

            <div class="modal-body">
                <form action="{{ route('siswa.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">NISN</label>
                        <input type="number" class="form-control  @error('nis') is-invalid @enderror" name="nis">

                        @error('nis')
                        <span class="invalid-feedback" role="alert">~
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">NAMA</label>
                        <input type="text" class="form-control  @error('nama') is-invalid @enderror" name="nama">

                        @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">JENIS KELAMIN</label>
                        <div class="form-check">
                            <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio"
                                name="jenis_kelamin" value="Laki-laki">
                            <label class="form-check-label">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio"
                                name="jenis_kelamin" value="Perempuan">
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
                        <label class="form-label">Kelas</label>
                        <select name="id_kelas" class="form-control @error('id_kelas') is-invalid @enderror" id="">
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
                        <select class="form-control @error('id_kelas') is-invalid @enderror" id="">
                            @foreach ($kelas as $data)
                            <option value="{{ $data->id }}">{{ $data->jurusan }}</option>
                            @endforeach
                        </select>

                        @error('id_kelas')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection