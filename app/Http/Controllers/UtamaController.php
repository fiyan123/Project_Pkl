<?php

namespace App\Http\Controllers;

class UtamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // dd($guru);
        // return $guru;
        return view('utama.index');
    }

}
