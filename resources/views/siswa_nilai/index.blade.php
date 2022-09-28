@extends('layouts.siswa')
@section('content')

<!-- Bootstrap CSS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<div class="container-xxl py-4">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Data Nilai</h6>
            <h1 class="mb-5">Hasil Akhir Rekap Nilai Raport</h1>
        </div>
        <div class="col-md-12">
            @include('layouts/_flash')
            <div class="card border">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="dataTable">
                            <thead class="table-primary">
                                <tr align="center">
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
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach($nilai as $data)
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