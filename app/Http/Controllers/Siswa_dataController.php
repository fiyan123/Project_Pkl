<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\Siswa;
// use App\Models\Siswa_data;
use Illuminate\Http\Request;

class Siswa_dataController extends Controller
{
    public function index()
    {
        // $siswa_data = Siswa_data::latest()->get();
        $nilai = Nilai::all();
        $siswa = Siswa::all();
        $kelas = Kelas::all();
        $guru  = Guru::all();

        return view('siswa_nilai.index', compact('nilai', 'siswa', 'kelas', 'guru'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
