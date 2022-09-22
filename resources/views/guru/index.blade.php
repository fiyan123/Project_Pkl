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
                    <h5>Data Table Guru</h5>
                </div>
                
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="dataTable">
                            <thead class="table-dark">
                                <tr align="center">
                                    <th>NO</th>
                                    <th>NIP</th>
                                    <th>NAMA</th>
                                    <th>MATA PELAJARAN</th>
                                    <th>JENIS KELAMIN</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($guru as $data)
                                <tr align="center">
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->nip }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->mata_pelajaran }}</td>
                                    <td>{{ $data->jenis_kelamin }}</td>
                                    <td>
                                        <form action="{{ route('guru.destroy', $data->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('guru.edit', $data->id) }}"
                                                class="btn btn-sm btn-outline-success">
                                                <i class="nav-icon fas fa-user"></i>
                                                Ubah
                                            </a> |
                                            <a href="{{ route('guru.show', $data->id) }}"
                                                class="btn btn-sm btn-outline-info">
                                                <i class="nav-icon fas fa-eye"></i>
                                                Lihat
                                            </a> |
                                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                                onclick="return confirm('Hapus Data Ini?')">
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
                <h4 class="modal-title" id="exampleModalLabel">Tambah Data Baru</h4>
            </div>

            <div class="modal-body">
                <form action="{{ route('guru.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">NIP</label>
                        <input type="number" class="form-control  @error('nip') is-invalid @enderror" name="nip" id="nip">
                        @error('nip')
                        <span class="invalid-feedback" role="alert">
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
                        <label class="form-label">MATA PELAJARAN</label>
                        <input type="text" class="form-control  @error('mata_pelajaran') is-invalid @enderror"
                            name="mata_pelajaran">
                        @error('mata_pelajaran')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
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

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="btnSimpan" disabled>Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>

        const nip = document.getElementById('nip')
        const btnSimpan = document.getElementById('btnSimpan');

        nip.addEventListener("keyup", (e) => {
            const value = e.currentTarget.value;
                if (value === "") {
                    btnSimpan.disabled = true;
                }
                else {
                    btnSimpan.disabled = false;
                }
        });

</script>
@endsection