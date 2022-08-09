@extends('layouts.siswa')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card border-secondary">
                    {{-- <div class="card-header">
                        Data Siswa
                        <a href="{{ route('data_nilai.create') }}" class="btn btn-sm btn-outline-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div> --}}

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead class="table-success">
                                    <tr>
                                        <th>NO</th>
                                        {{-- <th>NISN</th>
                                        <th>NAMA</th>
                                        <th>KELAS</th>
                                        <th>JURUSAN</th> --}}
                                        <th>NILAI KEHADIRAN</th>
                                        <th>NILAI HARIAN</th>
                                        <th>NILAI PAS</th>
                                        <th>NILAI PAT</th>
                                        <th>NILAI RAPORT</th>
                                        <th>NILAI GRADE</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($nilai as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            {{-- <td>{{ $data->nis }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->kelas->kelas }}</td>
                                            <td>{{ $data->kelas->jurusan }}</td> --}}
                                            <td>{{ $data->nilai_kehadiran }}</td>
                                            <td>{{ $data->nilai_harian }}</td>
                                            <td>{{ $data->pas }}</td>
                                            <td>{{ $data->pat }}</td>
                                            <td>{{ $data->raport }}</td>
                                            <td>
                                                <form action="{{ route('data_nilai.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('data_nilai.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Ubah
                                                    </a> |
                                                    <a href="{{ route('data_nilai.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-info">
                                                        Lihat
                                                    </a> |
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Apakah Anda Yakin?')">Delete
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