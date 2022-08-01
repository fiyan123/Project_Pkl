<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        // dd($guru);
        // return $guru;
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::all();
        // dd($guru);
        // return $guru;
        return view('siswa.create', compact('siswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //validasi
         $validated = $request->validate([
            'nis'           => 'required',
            'nama'          => 'required',
            'jenis_kelamin' => 'required',
            'id_kelas'      => 'required',
        ]);

        $siswa = new Siswa();
        $siswa->nis           = $request->nis;
        $siswa->nama          = $request->nama;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->id_kelas      = $request->id_kelas;
        $siswa->save();
        return redirect()->route('siswa.index')->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa  = Siswa::findOrFail($id);
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa  = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
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
        // Validasi
        $validated = $request->validate([
            'nis'           => 'required',
            'nama'          => 'required',
            'jenis_kelamin' => 'required',
            'id_kelas'      => 'required',
        ]);

        $siswa->nis           = $request->nis;
        $siswa->nama          = $request->nama;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->id_kelas      = $request->id_kelas;
        $siswa->save();
        return redirect()->route('siswa.index')
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
        $siswa  = Siswa::findOrFail($id);
        $siswa ->delete();
        return redirect()->route('siswa.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
