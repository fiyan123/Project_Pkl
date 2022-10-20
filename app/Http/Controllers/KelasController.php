<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::latest()->paginate(3);
    
        return view('kelas.index', compact('kelas'));
    }

    public function create()
    {
        $kelas = Kelas::all();
    
        return view('kelas.create', compact('kelas'));
    }

    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);

        $kelas = new Kelas();
        $kelas->kelas = $request->kelas;
        $kelas->jurusan = $request->jurusan;
        $kelas->save();
        return redirect()->route('kelas.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.show', compact('kelas'));
    }

   
    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.edit', compact('kelas'));
    }

    public function update(Request $request, $id)
    {
        // Validasi
        $validated = $request->validate([
            'kelas' => 'required',
            'jurusan' => 'required',

        ]);

        $kelas = Kelas::findOrFail($id);
        $kelas->kelas = $request->kelas;
        $kelas->jurusan = $request->jurusan;
        $kelas->save();
        return redirect()->route('kelas.index')
            ->with('success', 'Data berhasil diedit!');
    }

    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();
        return redirect()->route('kelas.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
