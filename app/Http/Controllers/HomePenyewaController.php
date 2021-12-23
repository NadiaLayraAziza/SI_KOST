<?php

namespace App\Http\Controllers;

use App\Models\Penyedia;
use Illuminate\Http\Request;

class HomePenyewaController extends Controller
{
    public function index()
    {
        $penyedia = Penyedia::with('user');
        return view('User.home', compact('penyedia'));
    }

    public function show($id_penyewa)
    {
        $penyedia = Penyedia::with('user')->find($id_penyewa);
        return view('SuperAdmin.penyewa.show', compact('penyewa'));
    }
}
