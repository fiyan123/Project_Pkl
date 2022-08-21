<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $nilai = Nilai::all();
        $kelas = Kelas::all();
        $guru = Guru::all();
        $siswa = Siswa::all();
        // dd($guru);
        // return $guru;
        return view('data_nilai.index', compact('nilai', 'kelas', 'guru', 'siswa'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::all();
        $kelas = Kelas::all();
        $guru = Guru::all();
        $nilai = Nilai::all();
        // dd($guru);
        // return $guru;
        return view('data_nilai.create', compact('kelas', 'siswa', 'guru', 'nilai'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([

            'id_guru' => 'required',
            'id_siswa' => 'required',
            'id_kelas' => 'required',
            'nilai_kehadiran' => 'required',
            'nilai_harian' => 'required',
            'pas' => 'required',
            'pat' => 'required',
            // 'raport' => 'required',

        ]);

        $nilai = new Nilai();
        $nilai->id_guru = $request->id_guru;
        $nilai->id_siswa = $request->id_siswa;
        $nilai->id_kelas = $request->id_kelas;
        $nilai->nilai_kehadiran = $request->nilai_kehadiran;
        $nilai->nilai_harian = $request->nilai_harian;
        $nilai->pas = $request->pas;
        $nilai->pat = $request->pat;
        $nilai->raport = ($request->nilai_kehadiran + $request->nilai_harian + $request->pas + $request->pat) / 4;
        // $nilai->raport = $raport;
        if ($nilai->raport >= 90 && $nilai->raport <= 100) {
            $grade = "A";
        } elseif ($nilai->raport >= 80 && $nilai->raport <= 89) {
            $grade = "B";
        } elseif ($nilai->raport >= 70 && $nilai->raport <= 79) {
            $grade = "C";
        } elseif ($nilai->raport >= 60 && $nilai->raport <= 69) {
            $grade = "D";
        } else {
            $grade = "E";
        }
        $nilai->nilai_grade = $grade;

        $nilai->save();
        return redirect()->route('data_nilai.index')->with('success', 'Data berhasil dibuat!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nilai = Nilai::findOrFail($id);
        return view('data_nilai.show', compact('nilai'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nilai = Nilai::findOrFail($id);
        $siswa = Siswa::all();
        $kelas = Kelas::all();
        $guru = Guru::all();
        return view('data_nilai.edit', compact('siswa', 'kelas', 'guru', 'nilai'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([

            'id_guru' => 'required',
            'id_siswa' => 'required',
            'id_kelas' => 'required',
            'nilai_kehadiran' => 'required',
            'nilai_harian' => 'required',
            'pas' => 'required',
            'pat' => 'required',
            // 'raport' => 'required',

        ]);

        $nilai = Nilai::findOrFail($id);
        $nilai->id_kelas = $request->id_kelas;
        $nilai->id_siswa = $request->id_siswa;
        $nilai->id_guru = $request->id_guru;
        $nilai->nilai_kehadiran = $request->nilai_kehadiran;
        $nilai->nilai_harian = $request->nilai_harian;
        $nilai->pas = $request->pas;
        $nilai->pat = $request->pat;
        $raport = ($request->nilai_kehadiran + $request->nilai_harian + $request->pas + $request->pat) / 4;
        $nilai->raport = $raport;
        if ($nilai->raport >= 90 && $nilai->raport <= 100) {
            $grade = "A";
        } elseif ($nilai->raport >= 80 && $nilai->raport <= 89) {
            $grade = "B";
        } elseif ($nilai->raport >= 70 && $nilai->raport <= 79) {
            $grade = "C";
        } elseif ($nilai->raport >= 60 && $nilai->raport <= 69) {
            $grade = "D";
        } else {
            $grade = "E";
        }
        $nilai->nilai_grade = $grade;

        $nilai->save();
        return redirect()->route('data_nilai.index')
            ->with('success', 'Data berhasil diedit!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nilai = Nilai::findOrFail($id);
        $nilai->delete();
        return redirect()->route('data_nilai.index')
            ->with('success', 'Data berhasil dihapus!');

    }
}
