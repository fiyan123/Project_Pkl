@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card border-secondary">
                    <div class="card-header">
                        Data Guru
                        <a href="{{ route('guru.create') }}" class="btn btn-sm btn-outline-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead class="table-dark">
                                    <tr>
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
                                        <tr>
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
                                                        Ubah
                                                    </a> |
                                                    <a href="{{ route('guru.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-info">
                                                        Lihat
                                                    </a> |
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
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