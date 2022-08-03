<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserguruController extends Controller
{
    public function getData()
    {
        $totalUser = User::count();
        // dd($totalUser);
        return view('guru_user.index', compact('totalUser'));
    }
}