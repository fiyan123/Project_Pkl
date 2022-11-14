@extends('layouts.admin')
@section('content')

<!-- Bootstrap CSS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts/_flash')
            <div class="card border-secondary">
                <div class="card-header" align="right">
                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"  data-bs-placement="top" title="Tambah Data Baru">
                        <i class="nav-icon fas fa-user">&nbsp;+</i>
                    </button>
                </div>
                <div class="card-header">
                    <div class="card-title">
                      <h5>Data Table Kelas</h5>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                      <table id="dataTable" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                              <th>#</th>
                              <th>KELAS</th>
                              <th>JURUSAN</th>
                              <th>AKSI</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($kelas as $data)
                              <tr>
                                  <td>{{ $loop->iteration }}</td>
                                  <td>{{ $data->kelas }}</td>
                                  <td>{{ $data->jurusan }}</td>
                                  <td>
                                      <form action="{{ route('kelas.destroy', $data->id) }}" method="post">
                                          @csrf
                                          @method('delete')
                                          <a href="{{ route('kelas.edit', $data->id) }}" class="btn btn-sm btn-outline-success">
                                              <i class="nav-icon fas fa-user"></i>
                                              Ubah
                                          </a> |
                                          <a href="{{ route('kelas.show', $data->id) }}" class="btn btn-sm btn-outline-info">
                                              <i class="nav-icon fas fa-eye"></i>
                                              Lihat
                                          </a>
                                          <button type="submit" class="btn btn-sm btn-outline-danger"
                                              onclick="return confirm('Hapus Data Ini?')">
                                              <i class="bi bi-trash"></i>
                                              Hapus
                                          </button>
                                      </form>
                                  </td>
                              </tr>
                          @endforeach
                      </tbody>
                        <tfoot>
                        <tr>
                          <th>#</th>
                          <th>Kelas</th>
                          <th>Jurusan</th>
                          <th>Aksi</th>
                        </tr>
                        </tfoot>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal Create Data -->
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
                        <input type="text" class="form-control  @error('kelas') is-invalid @enderror" name="kelas" id="kelas">
                        @error('kelas')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jurusan</label>
                        <input type="text" class="form-control  @error('jurusan') is-invalid @enderror" name="jurusan" id="jurusan">
                        @error('jurusan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="simpan" disabled>Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


{{-- Script Button --}}
<script>
        const simpanButton = document.getElementById("simpan");
        const kelasButton = document.getElementById("kelas");

        kelas.addEventListener("keyup", (e) => {
            const value = e.currentTarget.value;

                if (value === "") {
                    simpanButton.disabled = true;
                } 
                
                else {
                    simpanButton.disabled = false;
                }
        });

        // Button hapus
        function enable(){
            var check = document.getElementById('check');
            var btnHapus = document.getElementById('btnHapus');

                if (check.checked) {
                    btnHapus.removeAttribute("disabled");
                }   
                else {
                    btnHapus.disabled = "true";
                }
        };
</script>
@endsection