<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminController extends Controller
{
    public function getData()
    {
        $totalUser = User::count();
        // dd($totalUser);
        return view('admin.index', compact('totalUser'));
    }
}