<?php

namespace App\Http\Controllers;

use App\Models\Penyedia;
use Illuminate\Http\Request;

class HomePenyewaController extends Controller
{
    public function index()
    {
        // $penyedia = Penyedia::with('users');
        $penyedia = Penyedia::all();
        return view('User.home', compact('penyedia'));
    }

    public function ShowKost($id_penyedia)
    {
        $penyedia = Penyedia::with('users')->find($id_penyedia);
        return view('User.detail', compact('penyedia'));
    }
}
