@extends('layouts.siswa')
@section('content')

    <div class="container"  class="d-inline">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card border-secondary" class="d-inline">
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection