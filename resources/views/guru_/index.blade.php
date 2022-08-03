@extends('layouts.guru')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card border-secondary">
                    <div class="card-header">
                        Data Dari Kelas
                        <a href="{{ route('kelas.create') }}" class="btn btn-sm btn-outline-primary" style="float: right">
                            Tambah Kelas
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead class="table-dark">
                                    <tr>
                                        <th>NO</th>
                                        <th>KELAS</th>
                                        <th>JURUSAN</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($kelas as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->kelas }}</td>
                                            <td>{{ $data->jurusan }}</td>
                                            <td>
                                                <form action="{{ route('kelas.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('kelas.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Ubah
                                                    </a> |
                                                    <a href="{{ route('kelas.show', $data->id) }}"
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