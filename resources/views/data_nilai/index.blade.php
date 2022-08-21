@extends('layouts.guru')
@section('content')

    <div class="container"  class="d-inline">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card border-secondary" class="d-inline">
                    {{-- <div class="card-header">
                        Data Siswa
                        <a href="{{ route('data_nilai.create') }}" class="btn btn-sm btn-outline-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div> --}}

                    <div class="card-body"  class="d-inline">
                        <div class="table-responsive"  class="d-inline">
                            <table class="table align-middle" id="dataTable" class="d-inline">
                                <thead class="table-info" class="d-inline">
                                    <tr>
                                        <th>NO</th>
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
                                                <form action="{{ route('data_nilai.destroy', $data->id) }}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('data_nilai.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success"  class="d-inline">
                                                        Ubah
                                                    </a> |
                                                    <a href="{{ route('data_nilai.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-info"  class="d-inline">
                                                        Lihat
                                                    </a> |
                                                    <button type="submit" class="btn btn-sm btn-outline-danger" class="d-inline"
                                                        onclick="return confirm('Apakah Anda Yakin?')">Hapus
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
@endsection