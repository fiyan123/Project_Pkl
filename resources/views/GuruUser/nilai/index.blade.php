@extends('layouts.mazer')
@section('content')
    <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    {{-- Error Page --}}
    @if ($errors->any())
        @php
            toast('Data harus diisi semua!', 'error');
        @endphp
    @endif

    <div class="page-heading">
        <h3>Table Data Nilai</h3>
    </div>

    <section class="section">
        <div class="card">
            @include('sweetalert::alert')
            <div class="card-body">
                <div class="card-title mb-3" align="right">
                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#nilaiModal"
                        data-bs-placement="top" title="Tambah Data Baru">
                        Tambah Data
                    </button>
                </div>
                <table class="table table-bordered-striped text-nowrap" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nip Guru</th>
                            <th>Nisn</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Kehadiran</th>
                            <th>Harian</th>
                            <th>Pas</th>
                            <th>Pat</th>
                            <th>Raport</th>
                            <th>Grade</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nilai as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
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
                                    <form action="{{ route('nilai.destroy', $data->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('nilai.edit', $data->id) }}"
                                            class="btn btn-outline-success btn-icon-text" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Ubah Data">
                                            <i class="bi bi-pen-fill"></i>
                                        </a> |
                                        <a href="{{ route('nilai.show', $data->id) }}"
                                            class="btn btn-outline-info btn-icon-text" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Lihat Data">
                                            <i class="bi bi-eye-fill"></i>
                                        </a> |
                                        <button type="submit" class="btn btn-outline-danger btn-icon-text"
                                            onclick="return confirm('Hapus Data Ini?')" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Hapus Data">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="nilaiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel" style="color: black">Tambah Data Baru</h4>
                </div>
                <div class="modal-body">
                    <form action="{{ route('nilai.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nip Guru</label>
                            <select name="id_guru" class="form-control @error('id_guru') is-invalid @enderror"
                                id="id_guru">
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
                            <label class="form-label">Nisn Siswa</label>
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
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Nama Siswa</label>
                            <select name="id_siswa" class="form-control @error('id_siswa') is-invalid @enderror"
                                id="">
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
                        <div align="left" class="mb-5">
                            <h4 style="color: black">Data Nilai Siswa</h4>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nilai Kehadiran</label>
                            <input type="number" class="form-control  @error('nilai_kehadiran') is-invalid @enderror"
                                name="nilai_kehadiran" value="{{ old('nilai_kehadiran') }}">
                            @error('nilai_kehadiran')
                                <span class="invalid-feedback" role="alert">~
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nilai Harian</label>
                            <input type="number" class="form-control  @error('nilai_harian') is-invalid @enderror"
                                name="nilai_harian" value="{{ old('nilai_harian') }}">
                            @error('nilai_harian')
                                <span class="invalid-feedback" role="alert">~
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nilai Pas</label>
                            <input type="number" class="form-control  @error('pas') is-invalid @enderror" name="pas"
                                value="{{ old('pas') }}">
                            @error('pas')
                                <span class="invalid-feedback" role="alert">~
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nilai Pat</label>
                            <input type="number" class="form-control  @error('pat') is-invalid @enderror" name="pat"
                                value="{{ old('pat') }}">
                            @error('pat')
                                <span class="invalid-feedback" role="alert">~
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="btnSimpan" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Simpan">
                                <i class="bi bi-cursor-fill"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
