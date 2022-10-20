{{-- @extends('layouts.admin')
@section('content')
<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Fixed Header Table</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr align="center">
                <th>#</th>
                <th>NIP GURU</th>
                <th>NISN</th>
                <th>NAMA</th>
                <th>KELAS</th>
                <th>JURUSAN</th>
                <th>NILAI KEHADIRAN</th>
                <th>NILAI HARIAN</th>
                <th>NILAI PAS</th>
                <th>NILAI PAT</th>
                <th>NILAI RAPORT</th>
                <th>GRADE</th>
                <th>AKSI</th>
            </tr>
          </thead>
          <tbody>
            @php $no = 1; @endphp
                @foreach ($nilai as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->guru->nip }}</td>
                    <td>{{ $data->siswa->nis }}</td>
                    <td>{{ $data->siswa->nama }}</td>
                    <td>{{ $data->kelas->kelas }}</td>
                    <td>{{ $data->kelas->jurusan }}</td>
                    <td>{{ $data->nilai_kehadiran }}</td>
                    <td>{{ $data->nilai_harian }}</td>
                    <td>{{ $data->pas }}</td>
                    <td>{{ $data->pat }}</td>
                    <td>{{ $data->raport }}</td>
                    <td>{{ $data->nilai_grade }}</td>
                    <td>
                        <form action="{{ route('nilai.destroy', $data->id) }}" method="post"
                            class="d-inline">
                            @csrf
                            @method('delete')
                            <a href="{{ route('nilai.edit', $data->id) }}"
                                class="btn btn-sm btn-outline-success" class="d-inline">
                                <i class="nav-icon fas fa-user"></i>
                                Ubah
                            </a>
                            <a href="{{ route('nilai.show', $data->id) }}"
                                class="btn btn-sm btn-outline-info" class="d-inline">
                                <i class="nav-icon fas fa-eye"></i>
                                Lihat
                            </a>
                            <button type="submit" class="btn btn-sm btn-outline-danger" class="d-inline"
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
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
@endsection --}}

@extends('layouts.admin')
@section('content')

<!-- Bootstrap CSS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<div class="col-12">
    <div class="card">
            <div class="card-header" align="right">
                <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal" data-bs-placement="bottom" title="Tambah Data Baru">
                    <i class="nav-icon fas fa-user">&nbsp;+</i>
                </button>
            </div>
            <div class="card-header" align="center">
                <h5>Data Table Nilai</h5>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-bordered text-nowrap">
                <thead>
                    <tr align="center">
                        <th>#</th>
                        <th>NIP GURU</th>
                        <th>NISN</th>
                        <th>NAMA</th>
                        <th>KELAS</th>
                        <th>JURUSAN</th>
                        <th>NILAI KEHADIRAN</th>
                        <th>NILAI HARIAN</th>
                        <th>NILAI PAS</th>
                        <th>NILAI PAT</th>
                        <th>NILAI RAPORT</th>
                        <th>GRADE</th>
                        <th>AKSI</th>
                    </tr> 
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($nilai as $data)
                    <tr align="center">
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->guru->nip }}</td>
                        <td>{{ $data->siswa->nis }}</td>
                        <td>{{ $data->siswa->nama }}</td>
                        <td>{{ $data->kelas->kelas }}</td>
                        <td>{{ $data->kelas->jurusan }}</td>
                        <td>{{ $data->nilai_kehadiran }}</td>
                        <td>{{ $data->nilai_harian }}</td>
                        <td>{{ $data->pas }}</td>
                        <td>{{ $data->pat }}</td>
                        <td>{{ $data->raport }}</td>
                        <td>{{ $data->nilai_grade }}</td>
                        <td>
                            <form action="{{ route('nilai.destroy', $data->id) }}" method="post"
                                class="d-inline">
                                @csrf
                                @method('delete')
                                <a href="{{ route('nilai.edit', $data->id) }}"
                                    class="btn btn-sm btn-outline-success" class="d-inline">
                                    <i class="nav-icon fas fa-user"></i>
                                    Ubah
                                </a>
                                <a href="{{ route('nilai.show', $data->id) }}"
                                    class="btn btn-sm btn-outline-info" class="d-inline">
                                    <i class="nav-icon fas fa-eye"></i>
                                    Lihat
                                </a>
                                <button type="submit" class="btn btn-sm btn-outline-danger" class="d-inline"
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
            <!-- /.card-body -->
            <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel" style="color: black">Tambah Data Baru</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('nilai.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">NIP GURU</label>
                        <select name="id_guru" class="form-control @error('id_guru') is-invalid @enderror" id="id_guru">
                            @foreach ($guru as $data)
                            <option value="{{ $data->id }}">{{ $data->nip }}</option>
                            @endforeach
                        </select>
                        @error('id_guru')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">NISN SISWA</label>
                        <select name="id_siswa" class="form-control @error('id_siswa') is-invalid @enderror" id="">
                            @foreach ($siswa as $data)
                            <option value="{{ $data->id }}">{{ $data->nis }}</option>
                            @endforeach
                        </select>
                        @error('id_siswa')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label class="form-label">NAMA SISWA</label>
                        <select name="id_siswa" class="form-control @error('id_siswa') is-invalid @enderror" id="">
                            @foreach ($siswa as $data)
                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                            @endforeach
                        </select>
                        @error('id_siswa')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">KELAS</label>
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
                        <label class="form-label">JURUSAN</label>
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

                    <br>
                    <div align="left">
                        <h4 style="color: black">Data Nilai Siswa</h4>
                    </div>
                    <hr>

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
                        <input type="number" class="form-control  @error('pas') is-invalid @enderror" name="pas">
                        @error('pas')
                        <span class="invalid-feedback" role="alert">~
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">NILAI PAT</label>
                        <input type="number" class="form-control  @error('pat') is-invalid @enderror" name="pat">
                        @error('pat')
                        <span class="invalid-feedback" role="alert">~
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary" id="btnSimpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection