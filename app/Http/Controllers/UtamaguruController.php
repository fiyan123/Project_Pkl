<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utamaguru;

class UtamaguruController extends Controller
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
        return view('utama_guru.index');
    }

    
}
