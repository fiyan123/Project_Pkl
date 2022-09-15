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
            <div class="card border-secondary">
                <div class="card-header" align="right">
                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Tambah Data
                    </button>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="dataTable">
                            <thead class="table-dark">
                                <tr align="center">
                                    <th>NO</th>
                                    <th>KELAS</th>
                                    <th>JURUSAN</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($kelas as $data)
                                <tr align="center">
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->kelas }}</td>
                                    <td>{{ $data->jurusan }}</td>
                                    <td>
                                        <form action="{{ route('kelas.destroy', $data->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('kelas.edit', $data->id) }}"
                                                class="btn btn-sm btn-outline-success">
                                                <i class="nav-icon fas fa-user"></i>
                                                Ubah
                                            </a> |
                                            <a href="{{ route('kelas.show', $data->id) }}"
                                                class="btn btn-sm btn-outline-info">
                                                <i class="nav-icon fas fa-eye"></i>
                                                Lihat
                                            </a> |
                                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                                onclick="return confirm('Apakah Anda Yakin?')">
                                                <i class="nav-icon fas fa-cut"></i>
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data baru</h5>
            </div>

            <div class="modal-body">
                <form action="{{ route('kelas.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <input type="text" class="form-control  @error('kelas') is-invalid @enderror" name="kelas">
                        @error('kelas')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jurusan</label>
                        <input type="text" class="form-control  @error('jurusan') is-invalid @enderror" name="jurusan">
                        @error('jurusan')
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