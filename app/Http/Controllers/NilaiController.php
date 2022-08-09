<?php

namespace App\Http\Controllers;

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
        // $kelas = Kelas::all();
        // dd($guru);
        // return $guru;
        return view('data_nilai.index_nilai', compact('nilai'));

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
        // dd($guru);
        // return $guru;
        return view('data_nilai.create_nilai', compact('kelas', 'siswa'));

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

            // 'id_kelas' => 'required',
            // 'id_siswa' => 'required',
            'nilai_kehadiran' => 'required',
            'nilai_harian' => 'required',
            'pas' => 'required',
            'pat' => 'required',

        ]);

        $nilai = new Nilai();
        // $nilai->id_kelas = $request->id_kelas;
        // $nilai->id_siswa = $request->id_siswa;
        $nilai->nilai_kehadiran = $request->nilai_kehadiran;
        $nilai->nilai_harian = $request->nilai_harian;
        $nilai->pas = $request->pas;
        $nilai->pat = $request->pat;
        $raport = ($request->nilai_kehadiran + $request->nilai_harian + $request->pas + $request->pat) / 4;
        $nilai->raport = $raport;
        $nilai->save();
        return redirect()->route('data_nilai.index_nilai')
            ->with('success', 'Data berhasil dibuat!');

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
        return view('data_nilai.show_nilai', compact('nilai'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::all($id);
        $kelas = Kelas::all();
        return view('data_nilai.edit', compact('siswa', 'kelas'));

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

            // 'id_kelas' => 'required',
            // 'id_siswa' => 'required',
            'nilai_kehadiran' => 'required',
            'nilai_harian' => 'required',
            'pas' => 'required',
            'pat' => 'required',

        ]);

        $nilai = Nilai::findOrFail($id);
        // $nilai->id_kelas = $request->id_kelas;
        // $nilai->id_siswa = $request->id_siswa;
        $nilai->nilai_kehadiran = $request->nilai_kehadiran;
        $nilai->nilai_harian = $request->nilai_harian;
        $nilai->pas = $request->pas;
        $nilai->pat = $request->pat;
        $raport = ($request->nilai_kehadiran + $request->nilai_harian + $request->pas + $request->pat) / 4;
        $nilai->raport = $raport;

        $nilai->save();
        return redirect()->route('data_nilai.index_nilai')
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
        //
    }
}
